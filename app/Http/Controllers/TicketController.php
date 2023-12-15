<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Request $request)
    {
        $data =  [
            "organization_id" => $request->organization_id,
            "requester_id" => $request->requester_id,
            "title" => $request->title,
            "description" => $request->description,
            "resposible_id" => $request->resposible_id,
            "work_team_id" => $request->work_team_id,
            "service_id" => $request->service_id,
            "status_id" => $request->status_id,
            "category_id" => $request->categy_id,
            "urgency_level" => $request->urgency_level
        ];
        $ticket = Ticket::create($data);

        if ($ticket) {
            return response()->json(['ticket' => $ticket], 200);
        };
    }

    public function index($id)
    {
        $ticket = Ticket::find($id);
        if($ticket)
        {
            return response()->json(['ticket' => $ticket], 200);
        }
    }

    public function show()
    {
        $ticket = Ticket::all();
        if($ticket)
        {
            return response()->json($ticket);
        }

    }
}
