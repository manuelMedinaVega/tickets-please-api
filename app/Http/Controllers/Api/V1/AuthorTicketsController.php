<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ApiExceptions;
use App\Http\Controllers\Controller;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\Api\V1\ReplaceTicketRequest;
use App\Http\Requests\Api\V1\StoreTicketRequest;
use App\Http\Requests\Api\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use App\Policies\V1\TicketPolicy;

class AuthorTicketsController extends ApiController
{

    protected string $policyClass = TicketPolicy::class;

    public function index($author_id, TicketFilter $filters)
    {
        return TicketResource::collection(
            Ticket::where('user_id', $author_id)->filter($filters)->paginate()
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($author_id, $ticket_id)
    {
        $ticket = Ticket::where('id', $ticket_id)
                        ->where('user_id', $author_id)
                        ->firstOrFail();

        if($this->isAble('delete', $ticket)) {
            $ticket->delete();

            return $this->ok('Ticket successfully deleted');
        }

        return ApiExceptions::error('You are not authorized to delete that resource', 403);
    }

    public function replace(ReplaceTicketRequest $request, $author_id, $ticket_id)
    {
        // PUT
        $ticket = Ticket::where('id', $ticket_id)
                        ->where('user_id', $author_id)
                        ->firstOrFail();

        if($this->isAble('replace', $ticket)) {
            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);
        }
        
        return ApiExceptions::error('You are not authorized to update that resource', 403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        if($this->isAble('store', Ticket::class)) {
            return new TicketResource(Ticket::create($request->mappedAttributes([
                'author' => 'user_id'
            ])));
        }
        return ApiExceptions::error('You are not authorized to create that resource', 403);
    }

    public function update(UpdateTicketRequest $request, $author_id, $ticket_id)
    {
        // PUT
        $ticket = Ticket::where('id', $ticket_id)
                        ->where('user_id', $author_id)
                        ->firstOrFail();

        if($this->isAble('update', $ticket)) {
            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);
        }

        return ApiExceptions::error('You are not authorized to update that resource', 403);
    }
}
