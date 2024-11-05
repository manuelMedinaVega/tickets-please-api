<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ApiExceptions;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\Api\V1\ReplaceTicketRequest;
use App\Models\Ticket;
use App\Http\Requests\Api\V1\StoreTicketRequest;
use App\Http\Requests\Api\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Policies\V1\TicketPolicy;

class TicketController extends ApiController
{

    protected string $policyClass = TicketPolicy::class;

    /**
     * Display a listing of the resource.
     */
    public function index(TicketFilter $filters)
    {
        return TicketResource::collection(Ticket::filter($filters)->paginate());
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        if($this->isAble('delete', $ticket)) {
            $ticket->delete();

            return $this->ok('Ticket successfully deleted');
        }

        return ApiExceptions::error('You are not authorized to delete that resource', 403);

    }

    public function replace(ReplaceTicketRequest $request, Ticket $ticket)
    {
        // PUT
        if($this->isAble('replace', $ticket)) {

            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);
        }

        return ApiExceptions::error('You are not authorized to replace that resource', 403);

    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {

        if($this->include('author')) {
            return new TicketResource($ticket->load('user'));
        }

        return new TicketResource($ticket);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        if($this->isAble('store', Ticket::class)) {
            return new TicketResource(Ticket::create($request->mappedAttributes()));
        }

        return ApiExceptions::error('You are not authorized to create that resource', 403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        // PATCH
        if($this->isAble('update', $ticket)) {

            $ticket->update($request->mappedAttributes());
        
            return new TicketResource($ticket);
        }

        return ApiExceptions::error('You are not authorized to update that resource', 403);
    }

}
