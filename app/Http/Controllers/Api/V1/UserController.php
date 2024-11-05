<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ApiExceptions;
use App\Http\Controllers\Controller;
use App\Http\Filters\V1\AuthorFilter;
use App\Http\Requests\Api\V1\ReplaceUserRequest;
use App\Models\User;
use App\Http\Requests\Api\V1\StoreUserRequest;
use App\Http\Requests\Api\V1\UpdateUserRequest;
use App\Http\Resources\V1\UserResource;
use App\Policies\V1\UserPolicy;

class UserController extends ApiController
{

    protected string $policyClass = UserPolicy::class;

    /**
     * Display a listing of the resource.
     */
    public function index(AuthorFilter $filters)
    {
        return UserResource::collection(
            User::filter($filters)->paginate()
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($this->isAble('delete', $user)) {
            $user->delete();

            return $this->ok('User successfully deleted');
        }
        return ApiExceptions::error('You are not authorized to delete that resource', 403);
    }

    public function replace(ReplaceUserRequest $request, User $user)
    {
        // PUT
        if($this->isAble('replace', $user)) {
            $user->update($request->mappedAttributes());

            return new UserResource($user);
        }

        return ApiExceptions::error('You are not authorized to replace that resource', 403);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        if($this->include('tickets')) {
            return new UserResource($user->load('tickets'));
        }

        return new UserResource($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        if($this->isAble('store', User::class)) {
            return new UserResource(User::create($request->mappedAttributes()));
        }

        return ApiExceptions::error('You are not authorized to create that resource', 403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // PATCH
        if($this->isAble('update', $user)) {
            $user->update($request->mappedAttributes());
            
            return new UserResource($user);
        }
        return ApiExceptions::error('You are not authorized to update that resource', 403);
    }

}
