<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(5);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function edit(Job $job)
    {

        return view('jobs.edit', ['job' => $job]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:4'],
            'salary' => ['required']
        ]);
        $data['employer_id'] = 1;
        Job::create($data);
        return redirect('/jobs');
    }

    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'title' => ['required', 'min:4'],
            'salary' => ['required']
        ]);

        $job->update($data);
        return redirect('/jobs');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
