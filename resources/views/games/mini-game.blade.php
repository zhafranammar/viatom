<x-app-layout>
    <x-slot name="header">
      <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mini Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id="game-container">
              {{-- <canvas id="game-canvas"></canvas> --}}
              <script src="{{ asset('js/levels/level1.js') }}"></script>
            </div>
            <a href="{{ route('next-level') }}">Next Level</a>
        </div>
    </div>
</x-app-layout>