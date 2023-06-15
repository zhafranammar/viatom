<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/web/logo.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/web/logo.png') }}" />
    <title>Viatom CMS</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5')}}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default text-slate-500" style="background-image: url('../assets/web/map1.png'); background-repeat: no-repeat; background-size: cover;">
    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 py-4 pl-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-r-2xl border-0 bg-[#636357] p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
          <img src="../assets/web/logo.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand text-white">Viatom Dashboard</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/dashboard.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;">home</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-white">Dashboard</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 bg-[#F2DC52] font-semibold text-slate-700 rounded-lg transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#636357] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #F2DC52;"> signal_cellular_alt</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Level</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> library_books</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">Materi</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> video_library</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">Video</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> quiz</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">Quiz</span>
            </a>
          </li>
          
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> assignment_turned_in</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">Examination</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> construction</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">Build The Atom</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> visibility</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">See The Atom</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#F2DC52] stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined" style="color: #636357;"> science</span>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-center text-white">Atomic Experiments</span>
            </a>
          </li>

        </ul>
      </div>
    </aside>

    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-bold font-serif text-2xl">Level</h2>
                    <div class="mt-4">
                        <a href="/cms/levels/create" class="bg-green-500 hover:bg-green-700 text-white left-0 font-bold py-2 px-4 rounded">Tambah Level</a>
                    </div>

                    {{-- Add table from database --}}
                    <div class="mt-4">
                        <table class="table-auto border-separate w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-center font-serif bg-gray-200">Level</th>
                                    <th class="px-4 py-2 text-center font-serif bg-gray-200">Tipe</th>
                                    <th class="px-4 py-2 text-center font-serif bg-gray-200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scenes as $scene)
                                <tr>
                                    <td class="border px-4 py-2 font-serif text-center text-xl">{{$scene->level}}</td>
                                    <td class="border px-4 py-2 font-serif text-center text-xl">{{$scene->type}}</td>
                                    <td class="border px-4 py-2 font-serif text-center text-md">
                                        <a href="/cms/levels/{{$scene->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300">Edit</a>
                                        <form action="/cms/levels/{{$scene->id}}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full transition duration-300">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </main>
  </body>
  
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</html>
