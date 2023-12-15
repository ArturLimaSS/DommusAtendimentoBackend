<?php

namespace App\Http\Controllers;

use App\Models\Kanban;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KanbanController extends Controller
{
    public function show($id)
    {
        $kanban = Kanban::find($id);
        if ($kanban) {

            $statusIds = json_decode($kanban->status, true);
            $status = Status::whereIn('id', $statusIds)->get();
            if ($status) {
                return response()->json(['kanban' => $kanban, 'status' => $status], 200);
            }
        }
    }
}
