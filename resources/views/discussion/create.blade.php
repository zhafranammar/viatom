<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Discussion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id="game-container">
            <h1>Create Discussion</h1>
            <form method="POST" action="/discussions">
                @csrf
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title"><br><br>
                
                <label for="body">Body:</label><br>
                <textarea id="body" name="body"></textarea><br><br>
                
                <button type="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>