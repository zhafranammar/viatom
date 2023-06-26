<!DOCTYPE html>
<html>
<head>
    <title>Discussion</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body class="bg-cover" style="background-image: url('{{ asset('assets/web/map1.png') }}');">
    <div class="py-12">
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
                    </div>
                </div>

                <div class="pt-4 mx-auto sm:px-6 lg:px-8 flex justify-center items-center bg-white overflow-hidden">
                    <img src="{{asset('assets/web/logo.png')}}" alt="" class="mr-2 w-16">
                    <img src="{{asset('assets/web/viatom-text.png')}}" alt="" class="w-48">
                </div>
                
                <div class="mt-4 flex flex-col items-center relative">
                    <div class="top-bg mt-8 pt-4 pb-4 w-full max-w-screen-lg flex flex-col items-center relative text-white rounded-t-lg">
                        <h1 class="text-white text-3xl font-bold leading-loose">Buat Topik Diskusi</h1>
                    </div>
                </div>

                <div class="flex flex-col items-center relative">
                    <div class="bg-gray-200 px-8 pb-8 w-full max-w-screen-lg flex flex-col items-start relative" id="discussion-container">
                        
                        <form method="POST" action="/discussions" class="mt-4 w-full">
                            @csrf
                            <label for="title" class="block text-[#636357] font-semibold font-serif text-2xl">Topik:</label>
                            <input type="text" id="title" name="title" class="mt-1 mb-4 px-2 py-4 border border-gray-400 rounded-md w-full">
                            
                            <label for="body" class="block text-[#636357] font-semibold font-serif text-2xl">Isi Diskusi:</label>
                            <textarea id="body" name="body" class="mt-1 mb-4 px-2 py-8 border border-gray-400 rounded-md w-full"></textarea>
                            
                            <button type="submit" class="px-4 py-2 btn-game rounded-md" style="color: #F2DC52">
                                <span class="material-symbols-outlined">save</span>
                                <h1 class="font-semibold text-2xl"> Kirim</h1>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="fixed bottom-0 left-0 right-0 flex items-center justify-center pb-5">
                    <div class="flex btn-game align-center rounded-md p-2">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                            <span class="material-symbols-outlined" style="color: #F2DC52;">forum</span>
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
    #discussion-container {
        background-color: #D9D9D9;
    }      
    h1 {
        font-size: 24px;
        font-weight: bold;
    }
    #game-container {
        position: absolute;
        width: 1280px;
        height: 720px;
        left: calc(50% - 1280px/2 - 0.5px);
        top: calc(50% - 720px/2 + 17px);
        background: #FFFFFF;
        border-radius: 16px;
    }
    .top-bg {
    background-color: #636357;
    }
</style>