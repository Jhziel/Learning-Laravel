<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="flex justify-between mb-2 items-center">
        <h1>List of Jobs</h1>
        <a href="/jobs/create" class="bg-blue-500 py-2 px-4 text-slate-200">Create</a>
    </div>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="jobs/{{ $job['id'] }}" class="  px-4 block py-3 border border-gray-400 rounded-md">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->employer_name }}
                </div>
                <div>
                    <strong>Job Title:{{ $job['title'] }}</strong>Salary:{{ $job['salary'] }}
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
