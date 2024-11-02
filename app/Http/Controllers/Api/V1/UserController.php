<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\AuthorFilter;
use App\Http\Requests\Api\V1\ReplaceUserRequest;
use App\Models\User;
use App\Http\Requests\Api\V1\StoreUserRequest;
use App\Http\Requests\Api\V1\UpdateUserRequest;
use App\Http\Resources\V1\UserResource;
use App\Policies\V1\UserPolicy;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Gate;

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
    public function destroy($user_id)
    {
        try {
            $user = User::findOrFail($user_id);

            Gate::authorize('delete', $user);

            $user->delete();

            return $this->ok('User successfully deleted');
        } catch (ModelNotFoundException $exception) {
            return $this->error('User cannot be found', 404);
        } catch(AuthorizationException $exception) {
            return $this->error('You are not authorized to delete that resource', 403);
        }
    }

    public function replace(ReplaceUserRequest $request, $user_id)
    {
        // PUT
        try {
            $user = User::findOrFail($user_id);

            Gate::authorize('replace', $user);

            $user->update($request->mappedAttributes());

            return new UserResource($user);
        } catch(ModelNotFoundException $exception) {
            return $this->error('User cannot be found.', 404);
        } catch(AuthorizationException $exception) {
            return $this->error('You are not authorized to replace that resource', 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        try {
            $user = User::findOrFail($user_id);

            if($this->include('tickets')) {
                return new UserResource($user->load('tickets'));
            }

            return new UserResource($user);
        } catch(ModelNotFoundException $exception) {
            return $this->error('User cannot be found', 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {

            Gate::authorize('store', User::class);

            return new UserResource(User::create($request->mappedAttributes()));

        } catch(AuthorizationException $exception) {
            return $this->error('You are not authorized to create that resource', 403);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $user_id)
    {
        // PATCH
        try {
            $user = User::findOrFail($user_id);

            Gate::authorize('update', $user);

            $user->update($request->mappedAttributes());
            
            return new UserResource($user);
        } catch(ModelNotFoundException $exception) {
            return $this->error('User cannot be found.', 404);
        } catch(AuthorizationException $exception) {
            return $this->error('You are not authorized to update that resource', 403);
        }
    }

}
