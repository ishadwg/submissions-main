<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Models\Status;
use App\Models\Submission;
use Illuminate\Http\Request;

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

    Submission::create($validated);

    return redirect('/home')->with('success', 'Submission created!');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    // select berdasarkan id
    // data dilempar ke view
    $record = Submission::find($id);

    return view('submission.show', ['record' => $record]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
