<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Viatom</title>

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
                <div class="row row-cols-3 my-4 mx-3 ps-4">
                
                @foreach ($detail as $index => $level)
                    <button class="card col my-4 mx-5 btn-game" style="width: 15rem; height: 24rem" onclick="window.location.href='{{$href . '/' . $level->level}}'">
                        <div class="mt-4 flex justify-center items-center rounded-full" style="background-color: #F2DC52; width: 10rem; height: 10rem;">
                            <span class="text-6xl font-bold">{{$index + 1}}</span>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="text-xl font-bold" style="color: #F2DC52">{{$level->title}}</h6>
                        </div>
                    </button>
                @endforeach
            </div>
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