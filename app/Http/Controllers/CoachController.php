<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        //
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
