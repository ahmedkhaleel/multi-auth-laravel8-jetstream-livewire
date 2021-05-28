<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hi {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        hi{{Auth::user()->name}}
    </div>
</x-app-layout>
