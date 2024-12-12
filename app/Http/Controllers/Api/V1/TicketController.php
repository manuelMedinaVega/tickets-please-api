<?php

namespace App\Http\Controllers\Api\V1;

use App\Helpers\ApiExceptions;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\Api\V1\ReplaceTicketRequest;
use App\Http\Requests\Api\V1\StoreTicketRequest;
use App\Http\Requests\Api\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use App\Policies\V1\TicketPolicy;

class TicketController extends ApiController
{
    protected string $policyClass = TicketPolicy::class;

    /**
     * Get all tickets
     *
     * Display a listing of all tickets.
     *
     * @group Managing Tickets
     *
     * @queryParam sort string Data field(s) to sort by. Separate multiple fields with commans. Denote descending sort with a minus sign. Example: sort=title,-createdAt
     * @queryParam filter[status] Filter by status code: A, C, H, X. No-example
     * @queryParam filter[title] Filter by title. Wildcards are supported. Example: *fix*
     */
    public function index(TicketFilter $filters)
    {
        return TicketResource::collection(Ticket::filter($filters)->paginate());
    }

    /**
     * Delete ticket.
     *
     * Remove the specified resource from storage.
     *
     * @group Managing Tickets
     */
    public function destroy(Ticket $ticket)
    {
        if ($this->isAble('delete', $ticket)) {
            $ticket->delete();

            return $this->ok('Ticket successfully deleted');
        }

        return ApiExceptions::error('You are not authorized to delete that resource', 403);

    }

    /**
     * Replace Ticket
     *
     * Replace the specified ticket in storage.
     *
     * @group Managing Tickets
     */
    public function replace(ReplaceTicketRequest $request, Ticket $ticket)
    {
        // PUT
        if ($this->isAble('replace', $ticket)) {

            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);
        }

        return ApiExceptions::error('You are not authorized to replace that resource', 403);

    }

    /**
     * Show a specific ticket.
     *
     * Display an individual ticket.
     *
     * @group Managing Tickets
     */
    public function show(Ticket $ticket)
    {

        if ($this->include('author')) {
            return new TicketResource($ticket->load('user'));
        }

        return new TicketResource($ticket);

    }

    /**
     * Create a ticket
     *
     * Creates a new ticket record. Users can only create tickets for themselves. Managers can create tickets for any user.
     *
     * @group Managing Tickets
     *
     * @response {"data":{"type":"ticket","id":107,"attributes":{"title":"asdfasdfasdfasdfasdfsadf","description":"test ticket","status":"A","createdAt":"2024-03-26T04:40:48.000000Z","updatedAt":"2024-03-26T04:40:48.000000Z"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http:\/\/localhost:8000\/api\/v1\/authors\/1"}}},"links":{"self":"http:\/\/localhost:8000\/api\/v1\/tickets\/107"}}}
     */
    public function store(StoreTicketRequest $request)
    {
        if ($this->isAble('store', Ticket::class)) {
            return new TicketResource(Ticket::create($request->mappedAttributes()));
        }

        return ApiExceptions::error('You are not authorized to create that resource', 403);
    }

    /**
     * Update Ticket
     *
     * Update the specified ticket in storage.
     *
     * @group Managing Tickets
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        // PATCH
        if ($this->isAble('update', $ticket)) {

            $ticket->update($request->mappedAttributes());

            return new TicketResource($ticket);
        }

        return ApiExceptions::error('You are not authorized to update that resource', 403);
    }

    private function testing_pint()
    {
        dd('cambiamelo pint');
    }
}
