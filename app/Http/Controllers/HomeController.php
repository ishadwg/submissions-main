<?php

namespace App\Http\Controllers;

use App\Models\Submission;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submissions = Submission::latest()->get();

        return view('home', ['records' => $submissions]);
    }

}
