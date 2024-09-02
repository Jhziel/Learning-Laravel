<x-layout>
    <x-slot:heading>Edit Jobs</x-slot:heading>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <form action="/jobs/{{ $job->id }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="flex flex-col gap-2">

                {{-- Title --}}
                <label for="title" class="text-lg font-bold ">Title:</label>
                <input type="text" name="title" id="title"
                    class="bg-white shadow-md text-md py-2 px-3 rounded-lg ring-1 ring-gray-400"
                    placeholder="Enter the Position" value="{{ $job->title }}">
                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror

                {{-- Salary --}}
                <label for="salary" class="text-lg font-bold ">Salary:</label>
                <input type="text" name="salary" id="salary"
                    class="bg-white  shadow-md text-md py-2 px-3 rounded-lg ring-1 ring-gray-400"
                    placeholder="Enter the Salary" value="{{ $job->salary }}">
                @error('salary')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
                <div class="flex  justify-between">
                    <button type="submit" form="form-delete"
                        class="bg-red-500 py-2 px-4 text-slate-200 mt-2">Delete</button>
                    <button type="submit" class="bg-blue-500 py-2 px-4 text-slate-200 mt-2">Submit</button>
                </div>
            </div>
        </form>

        <form action="/jobs/{{ $job->id }}" method="POST" id="form-delete" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
