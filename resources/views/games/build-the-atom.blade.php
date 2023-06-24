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
</head>
<body style="background-image: url('{{asset('assets/web/map1.png')}}'); background-size: cover;">
    
    <div class="py-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id="game-container">
                <div class="relative">
                    <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg absolute left-0 top-0 m-5">
                        <span class="material-symbols-outlined">arrow_back</span>
                    </a>
                    <div class="flex flex-col items-end absolute top-0 right-0">
                        <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 mt-5 mb-2.5">
                            <span class="material-symbols-outlined">person</span>
                        </a>
                        <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5">
                            <span class="material-symbols-outlined">home</span>
                        </a>
                        <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5">
                            <span class="material-symbols-outlined">refresh</span>
                        </a>
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
                <div class="flex flex-col fixed items-center">
                    <div class="w-6xl p-16 flex my-8 flex-col items-center rounded-lg" style="background-color: #d9d9d9">
                        <h3 class="text-3xl m-2 font-bold text-black">How To Play</h3>
                        <h1 class="text-4xl m-2 font-bold text-black" id="description"></h1>
                    </div>
                </div>
                <div class="bottom-0 m-8 left-0 right-0 items-center" id="next-button">
                </div>
                <div class="fixed bottom-0 left-0 right-0 flex items-center justify-center pb-5">
                    <div class="flex btn-game align-center rounded-md p-2">
                        <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.6053 11.66C18.435 11.2462 17.4218 10.4797 16.7054 9.46596C15.989 8.45226 15.6046 7.2413 15.6053 6C15.6053 4.4087 16.2374 2.88258 17.3626 1.75736C18.4879 0.632141 20.014 0 21.6053 0C23.1966 0 24.7227 0.632141 25.8479 1.75736C26.9731 2.88258 27.6053 4.4087 27.6053 6C27.6053 8.62 25.9253 10.84 23.6053 11.66V17.28C22.2978 16.9086 20.9128 16.9086 19.6053 17.28V11.66ZM34.2053 38.2C33.1269 37.5858 32.2665 36.6512 31.7432 35.5259C31.22 34.4006 31.0599 33.1404 31.2853 31.92L26.4053 29.1C27.3653 28.18 28.0853 27 28.4053 25.64L33.2853 28.46C35.1653 26.84 37.9253 26.52 40.1853 27.82C43.0653 29.48 44.0453 33.14 42.3853 36C41.9941 36.6831 41.4718 37.2822 40.8484 37.7627C40.225 38.2433 39.5128 38.596 38.7526 38.8004C37.9925 39.0049 37.1994 39.0571 36.419 38.954C35.6386 38.851 34.8863 38.5947 34.2053 38.2ZM3.00529 27.8C5.26529 26.5 8.02529 26.84 9.90529 28.44L14.8053 25.62C15.1253 27 15.8253 28.16 16.8053 29.08L11.9053 31.9C12.3653 34.34 11.2653 36.9 9.00529 38.2C6.12529 39.86 2.46529 38.88 0.805287 36C0.410615 35.3173 0.154437 34.5635 0.0514113 33.7817C-0.0516144 32.9999 0.000534818 32.2054 0.204875 31.4438C0.409215 30.6822 0.761735 29.9683 1.24226 29.3431C1.72279 28.7178 2.32189 28.1935 3.00529 27.8ZM25.6053 24C25.6053 25.0609 25.1839 26.0783 24.4337 26.8284C23.6836 27.5786 22.6662 28 21.6053 28C20.5444 28 19.527 27.5786 18.7769 26.8284C18.0267 26.0783 17.6053 25.0609 17.6053 24C17.6053 22.9391 18.0267 21.9217 18.7769 21.1716C19.527 20.4214 20.5444 20 21.6053 20C22.6662 20 23.6836 20.4214 24.4337 21.1716C25.1839 21.9217 25.6053 22.9391 25.6053 24ZM31.6053 24L31.5453 25.14L28.6053 23.42C28.4053 21.28 27.2653 19.42 25.6053 18.24V14.82C29.1453 16.38 31.6053 19.9 31.6053 24ZM27.5453 32.06C25.8853 33.28 23.8253 34 21.6053 34C19.3853 34 17.3253 33.28 15.6653 32L18.6053 30.34C19.5253 30.76 20.5453 31 21.6053 31C22.6653 31 23.6653 30.76 24.6053 30.34L27.5453 32.06ZM11.6653 25.12L11.6053 24C11.6053 19.9 14.0653 16.38 17.6053 14.84V18.26C15.9453 19.42 14.8053 21.28 14.6053 23.4L11.6653 25.12Z" fill="#F2DC52"/>
                        </svg>
                        <h1 class="p-2 font-bold font-mono text-2xl" style="color: #F2DC52;">Build The Atom</h1>
                    </div>
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