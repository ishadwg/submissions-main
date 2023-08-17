<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Models\Status;
use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SubmissionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('submission.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreSubmissionRequest $request)
  {
    $validated = $request->safe()->merge([
      'attachment' => $request->attachment->store('attachments'),
      'user_id' => auth()->user()->id,
      'status_id' => Status::PENDING['id']
    ])->all();

    $submission = new Submission();
    DB::transaction(function () use ($validated, $submission) {
      // create new submission
      $submission = Submission::create($validated);

      // create related history record with Pending status
      $submission->histories()->create([
        'user_id' =>  auth()->user()->id,
        'status_id' => Status::PENDING['id'],
        'comments' => 'This is generated for ' . Status::PENDING['name'] . ' status.',
      ]);
    });

    return redirect('/home')
      ->with('success', "Submission with ID#{$submission->id} . has been created");
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $record = Submission::find($id);

    return view('submission.show', ['record' => $record]);
  }

  public function approval(Submission $submission)
  {
    $status = Str::contains(request()->url(), 'reject') ?
      Status::REJECTED : (Str::contains(request()->url(), 'approve') ?
        Status::APPROVED : null
      );

    DB::transaction(function () use ($submission, $status) {
      // create related history record
      $submission->histories()->create([
        'user_id' =>  auth()->user()->id,
        'status_id' => $status['id'],
        'comments' => "This is generated for {$status['name']} status.",
      ]);

      // update status field in submission
      $submission->status_id = $status['id'];
      $submission->save();
    });


    return redirect('/home')
      ->with('success', "The Submission ID#{$submission->id} has been " . strtolower($status['name']));
  }
}
