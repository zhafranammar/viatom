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
                        <a href="{{ route('profile') }}" class="btn-game px-2 py-2 rounded-lg flex mx-5 mt-5 mb-2.5">
                            <span class="material-symbols-outlined">person</span>
                        </a>
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
                  <div class="mt-8 container items-center">
                    <div class="w-6xl p-16 flex my-8 flex-col items-center rounded-lg" style="background-color: #d9d9d9">
                      <h3 class="text-3xl m-2 font-bold text-black" id="title">Question {{ $exam->number_of_questions }}</h3>
                      <h1 class="text-4xl m-2 font-bold text-black" >{{ $question->question }}</h1>
                    </div>
                   <form action="{{ route('exams.next-question') }}" method="POST">
                      <div class="w-8xl flex my-8 flex-col items-center rounded-lg" style="background-color: #636357">
                          <h3 class="text-2xl m-2 font-bold" id="title" style="color: #F2DC52">Answer</h3>
                          
                          @csrf
                          <input type="hidden" name="question_id" value="{{ $question->id }}">

                          <div class="m-4 grid grid-cols-4 gap-4">
                              @php
                                  $shuffledOptions = collect([
                                      'answer_true' => $question['option_true'],
                                      'answer_false_1' => $question['option_false_1'],
                                      'answer_false_2' => $question['option_false_2'],
                                      'answer_false_3' => $question['option_false_3'],
                                  ])->shuffle();
                              @endphp

                              @foreach ($shuffledOptions as $key => $option)
                                <div class="py-8 rounded-lg flex items-center" style="background-color: #d9d9d9">
                                    <input type="radio" id="{{ $key }}" name="answer" value="{{ $option }}" class="m-4">
                                    <label class="text-xl font-bold" for="{{ $key }}">{{ $option }}</label>
                                </div>
                            @endforeach
                          </div>
                          
                          <button type="submit" class="p-2 justify-center flex font-bold font-mono my-2 text-2xl rounded-md btn-game" style="color: #F2DC52">
                              <span class="material-symbols-outlined mr-2" style="color: #F2DC52">skip_next</span>
                              Next Question
                          </button>
                      </div>
                  </form>
                    
                  </div>
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

<script>
  // if radio button is change then bg-color change
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach(radio => {
    radio.addEventListener('change', () => {
      radioButtons.forEach(radio => {
        radio.parentElement.style.backgroundColor = '#d9d9d9';
      });
      radio.parentElement.style.backgroundColor = '#F2DC52';
    });
  });
</script>