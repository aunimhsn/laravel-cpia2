<?php

namespace App\Http\Controllers;

use App\Models\Typevoiture;
use Illuminate\Http\Request;


class TypevoitureController extends Controller
{
    public function index() {
        $carTypes = Typevoiture::all();
        return view('typevoiture.index', ['carTypes' => $carTypes]);
    }
}
