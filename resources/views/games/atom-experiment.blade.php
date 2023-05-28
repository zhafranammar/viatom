<x-app-layout>
    <x-slot name="header">
        <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="js\utils\cameraUtils.js" type="module"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atom Experiment') }}
        </h2>
        <script>
        var user = @json(Auth::user());
        let level = user.current_level;
        // get scenes data from hit api endpoint /api/scenes
        axios.get('/api/scenes/' + level)
            .then(response => {
            // console.log(response.data); // Lakukan sesuatu dengan data yang diterima
            const gameScript = response.data.detail.src;
            // console.log(gameScript);
            // append gameScript as src script to game-container
            const gameContainer = document.getElementById('game-container');
            const scriptElement = document.createElement('script');
            scriptElement.src = gameScript;
            gameContainer.appendChild(scriptElement);
            })
            .catch(error => {
            console.error('Terjadi kesalahan:', error);
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id="game-container">
            </div>
        </div>
    </div>
</x-app-layout>