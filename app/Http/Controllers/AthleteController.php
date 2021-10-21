<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthleteController extends Controller
{

    public function index() {
        $coaches = Coach::find(1)->athletes;
        dd($coaches);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Coach $coach)
    {
        return view('coach.show', [
            'coach'  => $coach,
        ]);
    }

    public function edit(Coach $coach)
    {
        //
    }


    public function update(Request $request, Coach $coach)
    {
        //
    }


    public function destroy(Coach $coach)
    {
        //
    }

}
