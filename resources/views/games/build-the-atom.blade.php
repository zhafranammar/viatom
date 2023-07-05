<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script>
    var user = @json(Auth::user());
    let level = user.current_level;
    // get scenes data from hit api endpoint /api/scenes
    axios.get('/api/scenes/' + level)
        .then(response => {
        // console.log(response.data); // Lakukan sesuatu dengan data yang diterima
        const gameScript = response.data.detail.src;
        const title = response.data.detail.title;
        const description = response.data.detail.description;
        // console.log(gameScript);
        // append gameScript as src script to game-container
        const gameContainer = document.getElementById('game-container');
        const scriptElement = document.createElement('script');
        scriptElement.src = gameScript;
        gameContainer.appendChild(scriptElement);
        // console.log(response.data.detail);

        const titleElement = document.getElementById('title');
        titleElement.innerHTML = title;

        })
        .catch(error => {
        console.error('Terjadi kesalahan:', error);
        });
    </script>
    <title>Viatom</title>
    
    <link rel="icon" type="image/png" href="{{ asset('assets/web/logo.png') }}" />
</head>
<body style="background-image: url('{{asset('assets/web/map1.png')}}'); background-size: cover;">
    
    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id="game-container">
                <div class="relative">
                    <a href="{{ route('home') }}" class="btn-game px-2 py-2 rounded-lg absolute left-0 top-0 m-5">
                        <span class="material-symbols-outlined">arrow_back</span>
                    </a>
                    <div class="flex flex-col items-end absolute top-0 right-0">
                         
                        <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5">
                            <span class="material-symbols-outlined">home</span>
                        </a>
                        <a href="{{ route('play') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5">
                            <span class="material-symbols-outlined">refresh</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col top-1/3 w-1/4  fixed items-center mx-4 px-8" id="instruction">
                    <div class="flex my-4 flex-col items-center rounded-lg btn-game px-8 py-4">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                            <span class="material-symbols-outlined" style="color: #F2DC52;"> info</span>
                        </div>
                        <h3 class="text-3xl m-2 font-bold" style="color: #F2DC52">Instruksi Permainan</h3>
                        <ol>
                            <li class="text-xl m-2 font-bold" style="color: #F2DC52">1. Gerakkan Item yang berada disebelah kanan layar anda menuju tengah layar</li>
                            <li class="text-xl m-2 font-bold" style="color: #F2DC52">2. Susunlah item tersebut menjadi struktur atom yang diperintahkan</li>
                        </ol>
                    </div>
                </div>
                <div class="pt-4 mx-auto sm:px-6 lg:px-8 flex justify-center items-center bg-white overflow-hidden">
                    <img src={{asset('assets/web/logo.png')}} alt="" class="mr-2 w-16">
                    <img src={{asset('assets/web/viatom-text.png')}} alt="" class="w-48">
                </div>
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl font-bold text-gray-900" id="title"></h1>
                </div>
                {{-- Make section how to play as card in left of container game --}}
                
                <div class="bottom-0 m-8 left-0 right-0 items-center" id="next-button">
                </div>
            </div>
            {{-- <a href="{{ route('next-level') }}">Next Level</a> --}}
        </div>
    </div>
    
</body>
</html>

<style>
    .material-symbols-outlined {
        font-family: 'Material Symbols Outlined';
        font-size: 36px;
        color: #F2DC52;
        font: bold;
    }
    .btn-game {
        background-color: #636357;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>