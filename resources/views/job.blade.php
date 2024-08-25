<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>List of Jobs</h1>
    <ul>
       
            <li class="mt-3">
                <a href="jobs/{{ $job['id'] }}" class="font-bold underline">Job Title:{{ $job['title'] }}</a>
                <p>Salary:{{ $job['salary'] }}</p>
            </li>
       
    </ul>
</x-layout>
