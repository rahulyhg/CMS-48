<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;
use App\Models\MetroArea;
use App\Models\City;
use App\Models\Community;

class RelationshipController extends Controller
{

    public function index(State $state, MetroArea $metroarea, City $city, Community $community)
    {

        return response()->json($state->with('metroarea'));
    }

}
