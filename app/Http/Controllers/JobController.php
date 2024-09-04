<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class JobController extends Controller
{
    public function index()
    {
        // if you want to get the user without lazy loading
        // $jobs = Job::with('employer.user')->latest()->paginate(5);
        $jobs = Job::with('employer.user')->latest()->paginate(5);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function edit(Job $job)
    {
        // Inline Authorization
        /* if (Auth::guest()) {
            return redirect('/login');
        }

        if ($job->employer->user->isNot(Auth::user())) {
            abort(403);
        } */

        Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer->user->is($user);
        });

        //This code if fail always return an  abort(403)
        Gate::authorize('edit-job', $job);

        //Customize the gate if Fail
        /*  if(Gate::denies('edit-job', $job)){
        // If gate denies inside in here will excute
        }; */

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
