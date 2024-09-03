<x-layout>
    <x-slot:heading>Register User</x-slot:heading>
    <div class="flex justify-center ">
        <form action="/register" method="POST">
            @csrf
            <div class="flex flex-col gap-2">

                <div class="flex gap-2">
                    {{-- First Name --}}
                    <x-form-label for="first_name">First Name</x-form-label>
                    <x-form-input type="text" name="first_name" id="first_name" required />
                    <x-form-error name="first_name" />

                    {{-- Last Name --}}
                    <x-form-label for="last_name">Last Name</x-form-label>
                    <x-form-input type="text" name="last_name" id="last_name" required />
                    <x-form-error name="last_name" />

                </div>

                {{-- Email --}}
                <x-form-label for="email">Email:</x-form-label>
                <x-form-input type="email" name="email" id="email" placeholder="Enter the Email" />
                <x-form-error name="email" />

                {{-- Password --}}
                <x-form-label for="password">Password:</x-form-label>
                <x-form-input type="password" name="password" id="password" placeholder="Enter the Password" />
                <x-form-error name="password" />

                {{-- Confirm Password --}}
                <x-form-label for="confirm_password">Confirm Password:</x-form-label>
                <x-form-input type="confirm_password" name="confirm_password" id="confirm_password"
                    placeholder="Enter the Confirm Password" />
                <x-form-error name="confirm_password" />

                {{-- Field Button --}}
                <x-form-button>Register</x-form-button>

            </div>
        </form>
    </div>
</x-layout>
