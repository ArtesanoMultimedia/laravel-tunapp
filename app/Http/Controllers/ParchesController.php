<?php

namespace App\Http\Controllers;

use App\Models\Parche;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ParchesController extends Controller
{
    public function index()
    {
        $parches = Parche::all();
        return Inertia::render('Parches/Index', [
            'parches' => $parches
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date_time' => 'required|date'
        ]);

        Parche::create($data);

        return redirect()->route('parches.index');
    }
}
