<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        return Inertia::render('Realisation', [
            'title' => 'Realisations',
        ]);
    }
}
