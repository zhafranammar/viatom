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
                <div class="fixed bottom-0 left-0 right-0 flex items-center justify-center pb-5">
                    <div class="flex btn-game align-center rounded-md p-2">
                        <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.667 18.5435C24.667 15.6688 21.5543 13.8623 19.0774 15.2997C16.6007 16.737 16.6007 20.3499 19.0774 21.7872C21.5543 23.2245 24.667 21.4181 24.667 18.5435ZM33.1991 11.6389C35.665 -0.148194 30.24 -3.84715 21.0175 4.68493C12.3374 -3.45258 6.15617 -0.888034 8.78642 11.5895C-3.34273 15.2461 -2.53915 22.1294 8.88511 25.6453C6.27126 37.1365 11.1538 41.3286 21.0175 32.6485C30.5852 41.2299 35.6631 37.2121 33.0511 25.596C45.5122 21.3711 44.3944 15.2556 33.1991 11.6389ZM31.5223 11.195C29.5674 10.754 27.6759 10.433 25.752 10.2579C24.7384 8.77583 23.5578 7.29533 22.2011 5.91794C29.5952 -1.17449 33.9531 1.04159 31.5223 11.195ZM12.4361 20.812C13.1676 22.3737 14.1293 23.804 14.8526 25.0041C13.6748 24.8836 12.4059 24.7006 11.0551 24.4615C11.4932 23.2367 11.9536 22.02 12.436 20.812H12.4361ZM12.3374 16.5706C11.7993 15.2789 11.3083 14.0323 10.9072 12.8717C12.3015 12.5827 13.668 12.3202 14.8526 12.2306C13.971 13.6156 13.1335 15.0637 12.3374 16.5706ZM13.373 18.7406C14.5791 16.3253 15.8548 14.0327 17.2692 11.984C19.7789 11.8396 22.2619 11.8524 24.7163 12.0333C26.0929 13.9514 27.3777 16.244 28.6125 18.7406C27.6885 20.6501 26.3764 22.8507 24.8643 25.2014C22.3396 25.3925 19.7508 25.3661 17.1213 25.2014C15.7885 23.1596 14.5369 21.009 13.373 18.7406ZM29.5495 20.812C30.0284 21.9741 30.471 23.1585 30.8811 24.3629C29.6426 24.6237 28.3915 24.8213 27.1329 24.9548C27.9774 23.6464 28.7784 22.2572 29.5495 20.812ZM27.1329 12.2307C28.4776 12.4147 29.7767 12.6445 31.029 12.921C30.6127 14.1604 30.1354 15.3784 29.5988 16.5706C28.8354 15.065 28.0159 13.6159 27.133 12.2306L27.1329 12.2307ZM23.3354 10.0606C21.7994 10.0003 20.2368 10.0023 18.6501 10.0606C19.3448 9.14702 20.119 8.19275 20.9682 7.20017C21.7956 8.09333 22.5797 9.05474 23.3354 10.0606ZM19.7844 5.91786C18.4277 7.29525 17.2472 8.72645 16.2336 10.2085C14.3097 10.3836 12.3688 10.7046 10.414 11.1455C8.09597 0.837986 12.3904 -1.17465 19.7844 5.91786ZM9.32898 24.0177C-0.94569 20.9271 -0.452518 16.1104 9.23029 13.2664C9.82264 15.0637 10.5397 16.8891 11.3511 18.6421C10.5627 20.455 9.86472 22.3168 9.32898 24.0177ZM10.6112 26.0891C12.3538 26.5166 14.2005 26.7217 16.135 26.9276C17.2988 28.5701 18.5042 30.0972 19.7845 31.4155C12.2552 38.6324 8.0579 36.0104 10.6112 26.0892V26.0891ZM20.9682 30.1826C20.0759 29.2586 19.2429 28.2118 18.4529 27.0755C20.2139 27.1126 21.9146 27.1167 23.5327 27.0755C22.7582 28.175 21.9009 29.2137 20.9682 30.1826ZM22.2011 31.4155C23.5749 29.9229 24.7859 28.4099 25.8507 26.8783C27.668 26.7445 29.5093 26.4653 31.3743 26.0399C33.9508 36.6 29.2727 38.1594 22.2011 31.4156V31.4155ZM32.6072 23.9191C32.079 22.2182 31.4119 20.455 30.6346 18.6421C31.4257 16.9074 32.1173 15.1291 32.7059 13.3157C42.1586 16.1761 42.9148 20.7463 32.6072 23.9191Z" fill="#F2DC52"/>
                        </svg>
                        <h1 class="p-2 font-bold font-mono text-2xl" style="color: #F2DC52;">Atomic Experiment</h1>
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

{{-- <x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    
</x-app-layout> --}}