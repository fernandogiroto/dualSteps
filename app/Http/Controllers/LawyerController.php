<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LawyerController extends Controller
{
    public function index()
    {
        return Inertia::render('Lawyer/Dashboard', [
            'status' => session('status'),
        ]);
    }
}
