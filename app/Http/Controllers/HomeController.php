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
        $submissions = Submission::latest()->get();
        $cardvalue = [
          'pending' => Submission::where('status_id', Status::PENDING['id'])->count(),
          'total' => Submission::count(),
        ];
        $recenthistories = History::latest()->limit(2)->get();

        return view('home', [
          'records' => $submissions,
          'cardvalue' => $cardvalue,
          'recenthistories' => $recenthistories,
        ]);
    }

    public function welcome()
    {
        return view('welcome');
    }

}
