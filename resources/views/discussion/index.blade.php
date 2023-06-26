<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discussion List</title>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-cover" style="background-image: url('{{ asset('assets/web/map1.png') }}');">
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
                    <img src="{{asset('assets/web/logo.png')}}" alt="" class="mr-2 w-16">
                    <img src="{{asset('assets/web/viatom-text.png')}}" alt="" class="w-48">
                </div>
                <div class="mt-4 flex flex-col items-center relative">
                    <div class="top-bg mt-8 pt-4 pb-4 w-full max-w-screen-lg flex flex-col items-center relative text-white rounded-t-lg">
                        <h1 class="text-white text-3xl font-bold leading-loose">Daftar Topik Diskusi</h1>
                    </div>
                </div>
                <div class="flex flex-col items-center relative">
                    <div class="bg-gray-300 flex flex-col items-start mb-8 relative" id="discussion-container">
                        @if ($discussions->count() > 0)
                            <div class="rectangle max-w-screen-lg">
                                <table class="w-full border border-black">
                                    @foreach ($discussions as $discussion)
                                        <tr class="bg-gray-300 hover:bg-yellow-300 cursor-pointer ">
                                            <td class="border border-black">
                                                <a href="{{ route('discussions.show', $discussion->id) }}" class="block text-gray-700 text-3xl px-12 py-2 font-bold leading-loose hover:bg-yellow-300 cursor-pointer">{{ $discussion->topic }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="bg-gray-300 hover:bg-yellow-300 cursor-pointer">
                                        <td class="border border-black">
                                            <a href="{{ route('discussions.create') }}" class="block text-gray-700 text-3xl px-12 py-2 font-bold leading-loose hover:bg-yellow-300 cursor-pointer">Buat Diskusi Baru + </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @else
                            <div class="rectangle max-w-screen-lg">
                                <table class="w-full border border-black">
                                        <tr class="hover:bg-yellow-300 cursor-pointer">
                                            <td class="border border-black">
                                                <a href="/discussions" class="block text-gray-700 text-3xl px-12 py-2 font-bold leading-loose hover:bg-yellow-300 cursor-pointer">Tidak Ada Diskusi</a>
                                            </td>
                                        </tr>
                                    <tr class="hover:bg-yellow-300 cursor-pointer">
                                        <td class="border border-black">
                                            <a href="{{ route('discussions.create') }}" class="block text-gray-700 text-3xl px-12 py-2 font-bold leading-loose hover:bg-yellow-300 cursor-pointer">Buat Diskusi Baru + </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @endif
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
        font-weight: bold;
    }
    .btn-game {
        background-color: #636357;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bg-cover {
        background-size: cover;
    }
    .rectangle {
        box-sizing: border-box;
        width: 1056px;
    }
    .border-gray-700 {
        border-color: #636357;
    }
    .top-bg {
    background-color: #636357;
    }
</style>