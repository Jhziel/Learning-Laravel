<x-layout>
    <x-slot:heading>Create Jobs</x-slot:heading>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <form action="/jobs" method="POST">
            @csrf
            <div class="flex flex-col gap-2">
                {{-- Title --}}
                <x-form-label for="title">Title:</x-form-label>
                <x-form-input type="text" name="title" id="title" placeholder="Enter the Position" />
                <x-form-error name="title" />

                {{-- Salary --}}
                <x-form-label for="salary">Salary:</x-form-label>
                <x-form-input type="text" name="salary" id="salary" placeholder="Enter the Salary" />
                <x-form-error name="salary" />

                {{-- Field Button --}}
                <x-form-button>Submit</x-form-button>
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
