<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    public function index()
    {
        $typesformations = Typeformation::all();
        return view("typesformation", compact("typesformations"));
    }
}
