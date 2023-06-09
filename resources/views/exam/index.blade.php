<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.50/dist/phaser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
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
                
                <div class="flex flex-col items-center relative" id="game-container">
                  <div class="w-8xl p-16 flex my-8 flex-col items-center bg-gray-200 rounded-lg">
                    <h1 class="text-3xl m-2 font-bold text-gray-900" id="title">Ketentuan Exam</h1>
                    <ol class="m-6" type="1">
                      <li class="text-xl font-bold">1. Exam menjadi dasar pengukuran kompetensi siswa di materi Atom</li>
                      <li class="text-xl font-bold">2. Exam hanya dapat dikerjakan setelah siswa menyelesaikan adventure game</li>
                      <li class="text-xl font-bold">3. Exam terdiri atas 40 soal pilihan ganda</li>
                    </ol>

                    <div class="flex flex-col items-center">
                      <a href="{{ route('exams.start') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5 text-2xl text-center font-bold" style="color: #F2DC52">
                        <span class="material-symbols-outlined">skip_next</span> Mulai Ujian
                      </a>
                    </div>
                  </div>

                  {{-- tampilkan $exams jika not null --}}
                  @if ($exam)
                    <div class="w-8xl p-16 flex my-8 flex-col items-center bg-gray-200 rounded-lg">
                      <h1 class="text-3xl m-2 font-bold text-gray-900">High Score</h1>
                      <h3 class="text-3xl m-2 font-bold text-gray-900">{{$exam->score}}</h3>
                    </div>
                  @else 
                    <div class="w-8xl p-16 flex my-8 flex-col items-center bg-gray-200 rounded-lg">
                      <h1 class="text-3xl m-2 font-bold text-gray-900" id="title">Daftar Exam</h1>
                      <ol class="m-6" type="1">
                        <li class="text-xl font-bold">Belum ada exam</li>
                      </ol>
                    </div>
                  @endif
                </div>

                <div class="fixed bottom-0 left-0 right-0 flex items-center justify-center pb-5">
                    <div class="flex btn-game align-center rounded-md p-2">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                            <span class="material-symbols-outlined" style="color: #F2DC52;"> assignment_turned_in</span>
                        </div>
                        <h1 class="p-2 font-bold font-mono text-2xl" style="color: #F2DC52;">Assignment</h1>
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