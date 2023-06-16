<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discussion List</title>  
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body style="background-image: url('{{ asset('assets/web/map1.png') }}'); background-size: cover;">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                    </div>
                </div>

                <div class="pt-4 mx-auto sm:px-6 lg:px-8 flex justify-center items-center bg-white overflow-hidden">
                    <img src="assets/web/logo.png" alt="" class="mr-2 w-16">
                    <img src="assets/web/viatom-text.png" alt="" class="w-48">
                </div>
                
                <div class="mt-4 flex flex-col items-center relative">
                    <div class="bg-discussion-list px-8 mt-8 pt-4 pb-4 w-full max-w-screen-lg flex flex-col items-center relative" id="discussion-container" style="background-color: #636357;">                        
                        <h1 class="text-xl font-bold text-center">Discussion List</h1>
                    </div>
                </div>

                <div class="flex flex-col items-center relative">
                    <div class="bg-gray-300 px-8 pb-8 w-full max-w-screen-lg flex flex-col items-center relative" id="discussion-container">                        
                        @if ($discussions->count() > 0)
                            <ul>
                                @foreach ($discussions as $discussion)
                                    <li>
                                        <a href="{{ route('discussions.show', $discussion->id) }}">{{ $discussion->topic }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No discussions found.</p>
                        @endif
                        
                        <a href="{{ route('discussions.create') }}">Create New Discussion</a>
                    </div>
                </div>

                <div class="fixed bottom-0 left-0 right-0 flex items-center justify-center pb-5">
                    <div class="flex btn-game align-center rounded-md p-2">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                            <span class="material-symbols-outlined" style="color: #F2DC52;"> forum</span>
                        </div>
                        <h1 class="p-2 font-bold font-mono text-2xl" style="color: #F2DC52;">Discussion</h1>
                    </div>
                </div>
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
    #discussion-container {
        background-color: #D9D9D9;
    }      
    h1 
    {
        color: #ffffff;
        font-size: 24px; /* Ubah ukuran sesuai keinginan Anda */
        font-weight: bold;
    }


</style>