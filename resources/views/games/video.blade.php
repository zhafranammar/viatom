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
        const video_url = response.data.detail.video_url;
        const title = response.data.detail.title;
        const description = response.data.detail.description;

        // append gameScript as src script to game-container
        const gameContainer = document.getElementById('game-container');
        const width = gameContainer.offsetWidth;
        const height = width * 9 / 20;
        
        const videoElement = document.createElement('iframe');
        videoElement.src = video_url;
        videoElement.width = width;
        videoElement.height = height;
        videoElement.classList.add('m-4');
        videoElement.classList.add('p-4');
        videoElement.classList.add('pb-16');
        videoElement.classList.add('rounded-md');
        videoElement.allowFullscreen = true;
        videoElement.frameborder = 0;

        const nextButton = document.createElement('button');
        nextButton.innerHTML = 'Next Level';
        nextButton.classList.add('p-2');
        nextButton.classList.add('font-bold');
        nextButton.classList.add('font-mono');
        nextButton.classList.add('my-2');
        nextButton.classList.add('text-2xl');
        nextButton.style.color = '#F2DC52';
        nextButton.classList.add('rounded-md');
        nextButton.classList.add('btn-game');
        nextButton.classList.add('absolute');
        nextButton.classList.add('bottom-1.5');
        nextButton.classList.add('right-3');

        nextButton.addEventListener('click', function() {
            window.location.href = '{{ route('next-level') }}';
        });

        const nextIcon = document.createElement('span');
        nextIcon.classList.add('material-symbols-outlined');
        nextIcon.classList.add('mr-2');
        nextIcon.innerHTML = 'navigate_next';
        nextIcon.style.color = '#F2DC52';
        nextIcon.classList.add('shadow-soft-2xl');
        nextButton.prepend(nextIcon);

        
        gameContainer.appendChild(videoElement);
        gameContainer.appendChild(nextButton);
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative">
                    <a href="{{ route('home') }}" class="btn-game px-2 py-2 rounded-lg absolute left-0 top-0 m-5">
                        <span class="material-symbols-outlined">arrow_back</span>
                    </a>
                    <div class="flex flex-col items-end absolute top-0 right-0">
                         
                        <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5">
                            <span class="material-symbols-outlined">home</span>
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
                <div class="flex flex-col items-center relative" id="game-container">
                </div>
                {{-- make tombol download if not load --}}
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