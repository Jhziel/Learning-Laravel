{{-- One way to do heading is doing it on prop like attribute --}}
{{-- <x-layout heading="Home">

    <h1>Your are in Home page</h1>
</x-layout> --}}

{{-- Another way is doing it by named slot --}}
<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>
    
    <h1>Your are in Home page</h1>
</x-layout>
