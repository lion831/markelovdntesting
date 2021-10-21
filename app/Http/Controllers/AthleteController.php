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

}
