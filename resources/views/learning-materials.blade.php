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
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
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
                
                <div class="pt-4 mx-auto sm:px-6 lg:px-8 flex justify-center items-center overflow-hidden">
                    <img src={{asset('assets/web/logo.png')}} alt="" class="mr-2 w-16">
                    <img src={{asset('assets/web/viatom-text.png')}} alt="" class="w-48">
                </div>
                <div class="row row-cols-2 my-4 mx-3 ps-4">

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 25rem" onclick="window.location.href='/learning-materials/videos'">
                    <img
                      src="https://i.ibb.co/RD4VNKf/youtube-gc500afd11-1280.png"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Video Pembelajaran</h5>
                      <p class="card-text">
                        Bosan dengan pembelajaran yang monoton? Ayo belajar dengan video animasi yang telah kami sediakan
                      </p>
                    </div>
                  </button>
                  <button class="card col my-4 mx-5" style="width: 15rem; height: 25rem" onclick="window.location.href='/learning-materials/materi'">
                    <img
                      src="https://i.ibb.co/zxmLwhj/7069575-3297140.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Rangkuman</h5>
                      <p class="card-text">
                        Kamu lupa dengan materi yang telah kamu pelajari? Tenang, kami sediakan rangkuman materi yang telah kamu pelajari
                      </p>
                    </div>
                  </button>
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

