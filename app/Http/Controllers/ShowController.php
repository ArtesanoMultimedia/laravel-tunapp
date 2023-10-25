<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    //

    public function show($id)
    {
        return view('show', ['id' => $id]);
    }
}
