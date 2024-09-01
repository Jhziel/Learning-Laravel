<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>List of Jobs</h1>
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
