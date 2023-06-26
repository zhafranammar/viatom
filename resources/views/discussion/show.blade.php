<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
    <title>Discussion Detail</title>
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
                    <img src="{{asset('assets/web/logo.png')}}" alt="" class="mr-2 w-16">
                    <img src="{{asset('assets/web/viatom-text.png')}}" alt="" class="w-48">
                </div>
                <div class="mt-4 flex flex-col items-center relative">
                    <div class="top-bg mt-8 pt-4 pb-4 w-full max-w-screen-lg flex flex-col items-center relative text-white rounded-t-lg">
                        <h1 class="text-white text-3xl font-bold leading-loose">Topik Diskusi</h1>
                    </div>
                </div>
                <div class="flex flex-col items-center relative">
                    <div class="bg-gray-300 pb-8 px-1 w-full max-w-screen-lg flex flex-col items-start relative" id="discussion-container">
                        <div class="bg-white rectangle w-full">
                            <h2 class="w-full text-black text-3xl px-8 pb-2 font-medium">{{ $discussion->topic }}</h2>
                            <p class="text-black text-xl max-w-full break-words px-8 font-medium pb-4">{{ $discussion->body }}</p>
                            <p class="w-full text-black px-8 font-medium pb-4">{{ $discussion->username }} Dibuat Pada {{ $discussion->created_at->setTimezone('Asia/Jakarta')->format('d M Y H:i:s') }}</p>
                        </div>
                        <div class=rectangle w-full">
                            <h2 class="w-full text-black text-3xl px-8 pb-2 font-medium">Balasan</h2>
                            @if ($discussion->replies)
                            @foreach ($discussion->replies as $reply)
                                {{-- {{dd($reply->user)}} --}}
                                <div class="flex items-center px-8">
                                    <div class="shadow-2xl mr-2 flex h-10 w-10 items-center justify-center rounded-lg btn-game text-white text-center">
                                        <span class="material-symbols-outlined">person</span>
                                    </div>
                                    <div>
                                        <p class="text-black font-medium">{{ $reply->user->name }}</p>
                                        <p class="text-black text-small font-medium">{{ $reply->created_at->setTimezone('Asia/Jakarta')->format('d M Y H:i:s') }}</p>
                                    </div>
                                </div>
                                <div class="bg-white rectangle max-w-4xl mx-20">
                                    <p class="text-black break-words px-1 font-medium pb-2">{{ $reply->body }}</p>
            
                                </div>
                            @endforeach
                            @else
                                <p class="text-black max-w-full break-words px-1 font-medium pb-4">Belum Ada Balasan</p>
                            @endif
                            <form class="px-8 w-full" method="POST" action="/discussions/{{ $discussion->id }}/replies">
                                @csrf
                                <label for="reply">Reply:</label><br>
                                <textarea class="my-1 px-2 py-8 border border-gray-400 rounded-md w-full" id="reply" name="body"></textarea>
                                <button type="submit" class="px-2 py-1 btn-game rounded-md" style="color: #F2DC52">
                                    <span class="material-symbols-outlined">send</span>
                                    <p class="font-semibold"> Kirim</p>
                                </button>
                            </form>
                        </div>
                        
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
    h1 {
        font-size: 24px;
        font-weight: bold;
    }
    /* #game-container {
        position: absolute;
        width: 1280px;
        height: 720px;
        left: calc(50% - 1280px/2 - 0.5px);
        top: calc(50% - 720px/2 + 17px);
        background: #FFFFFF;
        border-radius: 16px;
    } */
    .top-bg {
    background-color: #636357;
    }
</style>