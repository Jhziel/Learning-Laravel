<x-layout>
    <x-slot:heading>Create Jobs</x-slot:heading>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <form action="/jobs" method="POST">
            @csrf
            <div class="flex flex-col gap-2">
                {{-- Title --}}
                <label for="title" class="text-lg font-bold ">Title:</label>
                <input type="text" name="title" id="title"
                    class="bg-white shadow-md text-md py-2 px-3 rounded-lg ring-1 ring-gray-400"
                    placeholder="Enter the Position">
                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
                {{-- Salary --}}
                <label for="salary" class="text-lg font-bold ">Salary:</label>
                <input type="text" name="salary" id="salary"
                    class="bg-white  shadow-md text-md py-2 px-3 rounded-lg ring-1 ring-gray-400"
                    placeholder="Enter the Salary">
                @error('salary')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
                <button type="submit" class="bg-blue-500 py-2 px-4 text-slate-200 mt-2">Submit</button>
            </div>
        </form>

        {{--   Check if theres any Error --}}
        {{--  <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </div> --}}
    </div>
</x-layout>
