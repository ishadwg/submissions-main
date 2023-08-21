<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Status;
use App\Models\Submission;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home', [
            'records' => Submission::filter(request(['status']))->latest()->get(),
            'cardvalue' => [
                'pending' => Submission::where('status_id', Status::PENDING['id'])
                    ->count(),
                'total' => Submission::count(),
            ],
            'recenthistories' => History::latest()->limit(2)->get(),
        ]);
    }

    public function welcome()
    {
        return view('welcome');
    }
}
