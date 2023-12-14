<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function create(Request $request)
    {
        $team = new Team();
        $team->name = $request["name"];
        $team->manager_id = $request["manager_id"];

        $response = '';

        if($request['name'] || $request['manager_id']){
            $team->save();
            $response = ['status' => 'success', 'team' => $team];
        }

        return response()->json($response, 201);
    }

    public function show($id)
    {   
        $team = Team::find($id);
        if($team)
        {
            return response()->json(['team' => $team], 201);
        }

    }

}
