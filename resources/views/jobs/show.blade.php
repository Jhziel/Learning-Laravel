<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <ul class="mb-3">
       
        <li class="mt-3">
            <p class="font-bold underline">Job Title:{{ $job->title }}</p>
            <p>Salary:{{ $job['salary'] }}</p>

        </li>
    </ul>
    {{--  @can('edit-job', $job) --}}
    <a href="/jobs/{{ $job->id }}/edit" class="bg-blue-500 py-2 px-4 text-slate-200">Edit</a>
    {{-- @endcan --}}
</x-layout>
