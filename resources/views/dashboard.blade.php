<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viatom-Tour Game</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<body>
    <header>
        <!-- Section Navbar -->
        <nav class="nav-container">
            <div class="nav-box">
                <div class="nav-brand">
                    <img src="assets/web/logo.png" alt="Logo" class="nav-logo">
                    <img src="assets/web/viatom-text.png" alt="Text" class="nav-text">
                </div>
                <button class="btn-nav" id="btnNav">&equiv;</button>
                <ul class="nav-menus" id="navMenus">
                    <a href="#" class="nav-menu"><li>Features</li></a>
                    <a href="#" class="nav-menu"><li>About Us</li></a>
                    <a href="#" class="nav-menu"><li>Team</li></a>
                    {{-- add logout button --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-signup">Logout</button>
                    </form>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- Section Hero -->
        <section class="hero-container">
            <img src="assets/web/viatom.png" alt="" class="hero-img">
            <div class="hero-content">
                <p class="hero-welcome">Halo, selamat datang</p>
                <h1 class="hero-heading"><span class="text-yellow">Temukan</span> Suasana<br>Asyik Belajar <span class="text-yellow">Atom</span></h1>
                <p class="hero-text">Ikuti petualangan atom bersama viatom!<br>Mainkan sekarang gratis.</p>
                <button onclick="window.location.href='/game'" class="btn-yellow">Get Started</button>
            </div>
        </section>
        
  <!-- Section Features -->
  <section class="features-container" style="background-image: url('{{asset('assets/web/bg-feature.png')}}')">
    <h1 class="section-heading">We Have Best Features</h1>
    <p class="section-subheading">Kami dengan bangga menghadirkan berbagai fitur menarik yang dirancang untuk memperkaya<br>pengalaman belajar Anda dalam memahami atom secara mendalam.</p>
    <div class="features-box">
        <div class="long-feature">
            <img src="assets/web/roadmap.png" alt="..." class="long-feature-img">
            <div class="long-content">
                <h1 class="feature-title">Adventure</h1>
                <p class="feature-text">Explorasi dunia atom dengan fitur <br> Adventure yang membuatmu terhanyut <br> dalam keseruan, tantang diri sendiri <br> dengan tingkatan level yang menantang!</p>
            </div>
        </div>
        <div class="side-features">
            <div class="wide-feature">
                <img src="assets/web/roadmap.png" alt="..." class="wide-feature-img">
                <div>
                    <h1 class="feature-title">Learning Materials</h1>
                    <p class="feature-text">Dapatkan pengalaman belajar menarik <br> dengan fitur materi yang dikemas secara <br> menarik, melalui video dan audio yang <br> memperkuat pemahaman siswa <br> terhadap struktur atom.</p>
                </div>
            </div>
            <div class="wide-feature">
                <img src="assets/web/roadmap.png" alt="..." class="wide-feature-img">
                <div>
                    <h1 class="feature-title">Build The Atom</h1>
                    <p class="feature-text">Bangun model atom secara akurat dan <br> pahami interaksi partikel dalam atom <br> dengan mudah dengan bantuan <br> teknologi AI.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="features-box">
        <div class="long-feature">
            <img src="assets/web/roadmap.png" alt="..." class="long-feature-img">
            <div class="long-content">
                <h1 class="feature-title">Discussion</h1>
                <p class="feature-text">Jelajahi fitur diskusi kami yang membantu <br> pengguna saling berinteraksi, berdiskusi, <br> dan berbagi pendapat dengan <br> semangat. Menghadapi topik menarik <br> yang akan kita bahas dalam diskusi ini.</p>
            </div>
        </div>
        <div class="side-features">
            <div class="wide-feature">
                <img src="assets/web/roadmap.png" alt="..." class="wide-feature-img">
                <div>
                    <h1 class="feature-title">See The Atom</h1>
                    <p class="feature-text">Jelajahi fitur menarik yang menggunakan <br> teknologi AR untuk memvisualisasikan <br> bentuk atom. Memungkinkan pengguna <br> melihat secara langsung dan memahami <br> struktur atom dengan lebih mendalam <br> secara visual.</p>
                </div>
            </div>
            <div class="wide-feature">
                <img src="assets/web/roadmap.png" alt="..." class="wide-feature-img">
                <div>
                    <h1 class="feature-title">Atomic Experiments</h1>
                    <p class="feature-text">Rasakan pengalaman simulasi percobaan <br> atomic yang nyata dan interaktif untuk <br> memperoleh pemahaman yang lebih <br> mendalam tentang atom.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="features-box">
        <div class="long-feature">
            <img src="assets/web/roadmap.png" alt="..." class="long-feature-img">
            <div class="long-content">
                <h1 class="feature-title">Mini Games</h1>
                <p class="feature-text">Tingkatkan rasa seru dalam mempelajari <br> atom melalui Mini Games yang <br> mengasyikkan dan menderbarkan!</p>
            </div>
        </div>
        <div class="side-features">
            <div class="wide-feature">
                <img src="assets/web/roadmap.png" alt="..." class="wide-feature-img">
                <div>
                    <h1 class="feature-title">Quiz</h1>
                    <p class="feature-text">Tingkatkan pemahamanmu tentang atom <br> melalui tantang Quiz yang menghibur!</p>
                </div>
            </div>
            <div class="wide-feature">
                <img src="assets/web/roadmap.png" alt="..." class="wide-feature-img">
                <div>
                    <h1 class="feature-title">Exam</h1>
                    <p class="feature-text">Siapkan diri untuk menghadapi ujian yang <br> menegangkan dan raih gelar ahli atom <br> sebagai bukti keberhasilanmu!</p>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Section We -->
 <section class="we-container">
    <div class="we-box">
        <div class="we-brand">
            <img src="assets/web/logo.png" alt="..." class="we-logo">
            <img src="assets/web/viatom-text.png" alt="..." class="we-logo-text">
        </div>
        <div class="we-content">
            <h1 class="we-title">We Are A Leading Educational Gaming Platform</h1>
            <p class="we-text">Visual Atomic Tour Game adalah game edukasi yang mengajak para pemain untuk menjelajahi dunia atom dan melakukan simulasi atom. Tujuan dari game ini adalah untuk meningkatkan pemahaman pemain tentang dunia atom dan memotivasi mereka untuk belajar lebih lanjut tentang sains dan teknologi di masa depan.</p>
        </div>
    </div>
    <div class="our-box">
        <h1 class="section-heading">Our Advantage</h1>
        <p class="section-subheading">Rasakan pengalaman belajar atom yang seru melalui game interaktif <br> yang menawarkan simulasi yang mendalam.</p>
        <div class="our-contents">
            <div class="our-content">
                <h1 class="our-title">Interactive Game</h1>
                <img src="assets/web/learning.png" alt="..." class="our-img">
            </div>
            <div class="our-content">
                <h1 class="our-title">Simulation</h1>
                <img src="assets/web/simulasi.png" alt="..." class="our-img">
            </div>
            <div class="our-content">
                <h1 class="our-title">AI-based Levels</h1>
                <img src="assets/web/ai.png" alt="..." class="our-img">
            </div>
        </div>
    </div>
</section>

     <!-- Section Teams -->
     <section class="teams-section">
      <h1 class="section-heading">We Have The Best Team</h1>
      <p class="section-subheading">
        Rasakan pengalam belajar atom yang seru melalui game interaktif <br />
        yang mena
      </p>
      <div class="team-groups">
        <div class="team">
          <img src="assets/web/1.png" alt="..." class="team-img" />
          <p class="team-position">Yopi Julia Nurizki<br />UI/UX Designer</p>
        </div>
        <div class="team">
          <img src="assets/web/2.png" alt="..." class="team-img" />
          <p class="team-position">
            Fitri Noor Apsari<br />Frontend Developer
          </p>
        </div>
        <div class="team">
          <img src="assets/web/3.png" alt="..." class="team-img" />
          <p class="team-position">
            Mumamad Zhafran Ammar<br />Backend Developer
          </p>
        </div>
        <div class="team">
          <img src="assets/web/4.png" alt="..." class="team-img" />
          <p class="team-position">
            Elvara Siti Azzahra<br />Content Developer
          </p>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <section class="footer-container">
      <div class="footer-contents">
        <div class="content">
          <h1 class="footer-title">Platform</h1>
          <p class="footer-text">Features</p>
          <p class="footer-text">About Us</p>
          <p class="footer-text">Team</p>
        </div>
        <div class="content">
          <h1 class="footer-title">Contact</h1>
          <p class="footer-text">+62 888 2889 059</p>
          <p class="footer-text">
            Gedung D, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229
          </p>
        </div>
      </div>
      <hr class="footer-line" />
      <div class="footer-sosmed">
        <div class="sosmed">
          <img src="assets/web/mail.png" alt="" class="sosmed-icon" />
          <p class="sosmed-title">viatomgame@gmail.com</p>
        </div>
        <div class="sosmed">
          <img src="assets/web/instagram.png" alt="" class="sosmed-icon" />
          <p class="sosmed-title">viatom_game</p>
        </div>
      </div>
    </section>
  </footer>
