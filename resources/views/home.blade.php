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
                        <a href="{{ route('users') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 mt-5 mb-2.5">
                            <span class="material-symbols-outlined">person</span>
                        </a>
                        <a href="{{ route('dashboard') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 my-2.5">
                            <span class="material-symbols-outlined">home</span>
                        </a>
                    </div>
                </div>
                
                <div class="pt-4 mx-auto sm:px-6 lg:px-8 flex justify-center items-center overflow-hidden">
                    <img src={{asset('assets/web/logo.png')}} alt="" class="mr-2 w-16">
                    <img src={{asset('assets/web/viatom-text.png')}} alt="" class="w-48">
                </div>
                <div class="row row-cols-3 my-4 mx-3 ps-4">
                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/adventure'">
                    <img src="https://i.ibb.co/7pQ5Tr1/40942.jpg" class="card-img-top mt-2" alt="" style="width: 100%; height: 160px; object-fit: cover;" />
                    <div class="card-body text-center">
                      <h5 class="card-title">Adventure</h5>
                      <p class="card-text">Explorasi dunia atom dengan fitur Adventure yang membuatmu terhanyut dalam keseruan, tantang diri sendiri dengan tingkatan level yang menantang!</p>
                    </div>
                  </button>


                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/learning-materials'">
                    <img
                      src="https://i.ibb.co/pdBT7p7/1086746-ONKVWT0.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Learning Materials</h5>
                      <p class="card-text">
                        Dapatkan pengalaman belajar menarik dengan materi yang dikemas
                        secara menarik melalui video dan audio.
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/build-the-atom'">
                    <img
                      src="https://i.ibb.co/qFJKdtX/6169691-23914.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Build The Atom</h5>
                      <p class="card-text">
                        Bangun model atom secara akurat dan pahami interaksi partikel
                        dalam atom dengan mudah,dengan bantuan teknologi AI.
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/see-the-atom'">
                    <img
                      src="https://i.ibb.co/vdN5bN2/5597112-56392.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">See The Atom</h5>
                      <p class="card-text">
                        Jelajahi fitur menarik yang menggunakan teknologi AR untuk
                        memvisualisasikan bentuk atom.
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/atom-experiment'">
                    <img
                      src="https://i.ibb.co/gZGKKvZ/23591844-kids-education-02.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Atomic Experiments</h5>
                      <p class="card-text">
                        Rasakan pengalaman simulasi percobaan atomic yang nyata dan
                        interaktif untuk memperoleh pemahaman yang lebih mendalam
                        tentang atom.
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/discussions'">
                    <img
                      src="https://i.ibb.co/NtZCYHc/28158575-onlineconsultant-online-2.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Discussion</h5>
                      <p class="card-text">
                        Jelajahi fitur diskusi yang membantu pengguna saling
                        berinteraksi, berdiskusi,dan berbagi pendapat dengan semangat.
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/minigames'">
                    <img
                      src="https://i.ibb.co/kyBQm9J/8131809-3745105.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      style="width: 100%; height: 160px; object-fit: cover;"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Minigames</h5>
                      <p class="card-text">
                        Tingkatkan rasa seru dalam mempelajari atom melalui Mini Games
                        yang mengasyikkan dan menderbarkan!
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/quiz'">
                    <img
                      src="https://i.ibb.co/fVW078r/quiz.png"
                      class="card-img-top mt-2"
                      alt=""
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Quiz</h5>
                      <p class="card-text">
                        Tingkatkan pemahamanmu tentang atom melalui tantang Quiz yang
                        menghibur!
                      </p>
                    </div>
                  </button>

                  <button class="card col my-4 mx-5" style="width: 15rem; height: 24rem" onclick="window.location.href='/exams'">
                    <img
                      src="https://i.ibb.co/0B2rMFj/8609244-3963716.jpg"
                      class="card-img-top mt-2"
                      alt=""
                      height="160"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Exam</h5>
                      <p class="card-text">
                        Siapkan diri untuk menghadapi ujian yang menegangkan dan raih
                        gelar ahli atom sebagai bukti keberhasilanmu!
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

