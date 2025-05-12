<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PrestationController extends Controller
{
    public function index()
    {
        return Inertia::render('Prestation', [
            'title' => 'Prestations',
        ]);
    }
}
