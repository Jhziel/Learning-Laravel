<x-layout>
    <x-slot:heading>Log In</x-slot:heading>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <form action="/login" method="POST">
            @csrf
            <div class="flex flex-col gap-2">
                {{-- Title --}}
                <x-form-label for="email">Email</x-form-label>
                <x-form-input type="email" name="email" id="email" :value="old('email')"
                    placeholder="Enter the Email" />
                <x-form-error name="email" />

                {{-- Salary --}}
                <x-form-label for="password">password:</x-form-label>
                <x-form-input type="password" name="password" id="password" placeholder="Enter the Password" />
                <x-form-error name="password" />

                {{-- Field Button --}}
                <x-form-button>Log In</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
