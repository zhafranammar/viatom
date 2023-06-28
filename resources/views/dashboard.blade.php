<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viatom-Tour Game</title>
    <link rel="stylesheet" href="resources/css/dashboard.css"> 
   
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
                    <a href="#" class="nav-menu"><li>Logout</li></a>
                    <button onclick="window.location.href='/register'" class="btn-signup">Sign Up</button>
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
  <section class="features-container">
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


<style>
    @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap");

    * {
      padding: 0;
      margin: 0;
      font-family: Plus Jakarta Sans;
    }

    /* Header Styles */
    .nav-container {
      padding: 24px 92px;
      background-color: transparent;
    }

    .nav-box {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-brand {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .nav-logo {
      width: 56px;
    }

    .nav-menus {
      list-style: none;
      display: flex;
      gap: 62px;
      align-items: center;
    }

    .nav-menu {
      text-decoration: none;
      color: #343530;
      font-size: 14px;
    }

    .btn-signup {
      background-color: transparent;
      border: 1px solid #000000;
      padding: 10px 38px;
      font-size: 12px;
      font-weight: 600;
      border-radius: 4px;
    }

    .btn-nav {
      background-color: transparent;
      border: none;
      font-size: 42px;
      padding: 0;
      margin: 0;
      display: none;
    }

    /* Hero Styles */
    .hero-container {
      width: 100%;
      position: relative;
    }

    .hero-content {
      padding-left: 36rem;
      padding-top: 9rem;
      color: whitesmoke;
    }

    .hero-img {
      width: 100%;
      background-size: cover;
      background-position: center;
      position: absolute;
      z-index: -1;
    }

    .hero-welcome {
      font-size: 24px;
      font-weight: 600;
    }

    .text-yellow {
      color: #f2dc52;
    }

    .hero-heading {
      font-size: 58px;
      margin-top: 8px;
    }

    .hero-text {
      font-size: 18px;
      margin-top: 8px;
    }

    .btn-yellow {
      border: none;
      background-color: #f2dc52;
      padding: 12px 24px;
      margin: 18px 0;
      font-weight: 600;
      border-radius: 4px;
    }

    /* Features Styles */
    .features-container {
      background-image: url("bg-feature.png");
      background-size: cover;
      background-position: center;
      color: whitesmoke;
      margin-top: 22rem;
      padding: 42px 122px;
    }

    .section-heading {
      text-align: center;
      margin: 8px 0;
      font-size: 36px;
    }

    .section-subheading {
      text-align: center;
      font-size: 18px;
    }

    .features-box {
      display: flex;
      flex-direction: row;
      justify-content: center;
      gap: 2rem;
      margin: 4rem 0;
    }

    .features-box:nth-of-type(2) {
      flex-direction: row-reverse;
    }
    
    .long-feature {
      background-color: #d9d9d9;
      padding: 8px 12px;
      border-radius: 18px;
      box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.4);
      width: fit-content;
      color: black;
    }

    .long-feature:hover {
      transform: scale(110%);
      transition: all 0.3s;
    }

    .long-content {
      margin: 72px 0;
    }

    .side-features {
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .wide-feature {
      background-color: #d9d9d9;
      padding: 8px 12px;
      border-radius: 18px;
      box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.4);
      display: flex;
      flex-direction: row;
      gap: 2rem;
      align-items: center;
      color: black;
    }

    .wide-feature:hover {
      transform: scale(110%);
      transition: all 0.3s;
    }

    .feature-title {
      text-align: center;
      font-size: 26px;
    }

    .feature-text {
      text-align: center;
      font-size: 14px;
      margin-top: 1rem;
    }

    .long-feature-img {
      width: 282px;
    }

    .wide-feature-img {
      width: 262px;
    }

    /* We Styles */
    .we-container {
      padding: 24px 92px;
      background-color: transparent;
      margin-top: 4rem;
    }

    .we-box {
      display: flex;
      flex-direction: row;
      gap: 6rem;
      justify-content: center;
      align-items: center;
      margin: 0 10rem;
    }

    .we-brand {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      justify-content: center;
    }

    .we-logo {
      width: 224px;
      margin: 0 auto;
    }

    .we-logo-text {
      width: 182px;
      margin: 0 auto;
    }

    .we-title {
      font-size: 36px;
      font-weight: 700;
    }

    .we-text {
      margin-top: 8px;
      font-size: 16px;
      text-align: justify;
    }

    .our-box {
      margin-top: 8rem;
    }

    .our-contents {
      display: flex;
      justify-content: center;
      gap: 1rem;
    }

    .our-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .our-content:hover {
      transform: scale(110%);
      transition: all 0.3s;
    }

    .our-content:nth-of-type(2) {
      margin-top: 8rem;
    }

    .our-title {
      font-size: 20px;
      font-weight: 600;
      text-align: center;
    }

    /* Teams Styles */
    .teams-section {
      padding: 24px 92px;
      padding-bottom: 82px;
      margin-top: 4rem;
      background-color: #777b74;
      color: whitesmoke;
    }

    .team-groups {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      margin-top: 3rem;
    }

    .team {
      width: 16rem;
      height: 24rem;
      overflow: hidden;
      border-radius: 8px;
      position: relative;
    }

    .team:hover {
      transform: scale(110%);
      transition: all 0.3s;
    }

    .team-img {
      width: 224px;
      position: absolute;
    }

    .team-position {
      text-align: center;
      margin-top: 21rem;
      font-size: 13px;
      font-weight: 500;
      position: relative;
    }

    /* Footer Styles */
    .footer-container {
      padding: 24px 92px;
      padding-top: 42px;
      background-color: #343530;
    }

    .footer-contents {
      display: flex;
      justify-content: center;
      color: whitesmoke;
      gap: 12rem;
    }

    .footer-title {
      color: #f2dc52;
      font-size: 24px;
      margin-bottom: 2rem;
    }

    .footer-text {
      font-size: 18px;
      margin-bottom: 1rem;
    }

    .footer-line {
      margin: 2rem 0;
    }

    .footer-sosmed {
      display: flex;
      flex-direction: row;
      justify-content: center;
      gap: 3rem;
    }

    .sosmed {
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 1rem;
    }

    .sosmed-icon {
      width: 32px;
    }

    .sosmed-title {
      color: whitesmoke;
    }

    @media only screen and (max-width: 768px) {
      /* Navbar Styles */
      .nav-container {
        padding: 24px 42px;
      }

      .nav-box {
        flex-wrap: wrap;
        gap: 2rem;
      }

      .btn-nav {
        display: flex;
      }

      .nav-menus {
        flex-direction: column;
        width: 100%;
        gap: 42px;
        display: none;
      }

      .show-menus {
        display: flex;
      }

      /* Hero Styles */
      .hero-content {
        padding-left: 21rem;
        padding-top: 3rem;
        color: whitesmoke;
      }

      .hero-welcome {
        font-size: 18px;
      }

      .hero-heading {
        font-size: 32px;
      }

      .hero-text {
        font-size: 14px;
      }

      .btn-yellow {
        font-size: 10px;
      }

      /* Features Style */
      .features-container {
        margin-top: 12rem;
        padding: 32px 62px;
      }

      .section-heading {
        font-size: 28px;
      }

      .section-subheading {
        font-size: 14px;
      }

      .features-box {
        flex-direction: column;
        justify-content: center;
        margin: 3rem 0;
      }

      .features-box:nth-of-type(2) {
        flex-direction: column;
      }

      .long-feature {
        margin: 0 auto;
      }

      .long-content {
        margin: 42px 0;
      }

      .wide-feature {
        margin: 0 auto;
        gap: 1rem;
      }

      .wide-feature-img {
        width: 224px;
      }

      .feature-title {
        font-size: 24px;
      }

      /* We Styles */
      .we-box {
        flex-direction: column;
        gap: 1rem;
        margin: 0;
      }

      .we-logo {
        width: 142px;
      }

      .we-logo-text {
        width: 124px;
      }

      .we-title {
        text-align: center;
        font-size: 28px;
      }

      .we-text {
        text-align: center;
      }

      .our-box {
        margin-top: 4rem;
      }

      .our-contents {
        flex-direction: column;
        margin-top: 2rem;
        gap: 2rem;
      }

      .our-content:nth-of-type(2) {
        margin-top: 0;
      }

      .our-img {
        width: 424px;
        margin: 0 auto;
      }

      /* Teams Styles */
      .teams-section {
        margin-top: 2rem;
      }

      .team-groups {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
      }

      .team {
        height: 20rem;
        width: 15rem;
      }

      .team-img {
        width: 242px;
      }

      .team-position {
        margin-top: 17rem;
      }

      /* Footer Styles */
      .footer-contents {
        gap: 4rem;
      }

      .footer-title {
        font-size: 20px;
      }

      .footer-text {
        font-size: 16px;
      }

      .sosmed-icon {
        width: 24px;
      }
    }

    @media only screen and (max-width: 420px) {
      /* Navbar Styles */
      .nav-container {
        padding: 14px 18px;
      }

      .nav-logo {
        width: 42px;
      }

      .nav-text {
        width: 92px;
      }

      /* Hero Styles */
      .hero-content {
        padding-left: 10rem;
        padding-top: 1rem;
        color: whitesmoke;
      }

      .hero-welcome {
        font-size: 10px;
      }

      .hero-heading {
        font-size: 18px;
      }

      .hero-text {
        font-size: 8px;
      }

      .btn-yellow {
        font-size: 8px;
        padding: 6px 18px;
        margin: 8px 0;
      }

      /* Features Style */
      .section-heading {
        font-size: 20px;
      }

      .section-subheading {
        font-size: 12px;
      }

      .features-container {
        padding: 24px 24px;
        margin-top: 6rem;
      }

      .features-box {
        margin: 2rem 0;
      }

      .feature-title {
        font-size: 18px;
      }

      .feature-text {
        margin-bottom: 12px;
        margin-top: 8px;
        font-size: 14px;
      }

      .long-feature {
        margin: 0 auto;
      }

      .wide-feature {
        margin: 0 auto;
        flex-direction: column;
      }

      /* We Styles */
      .we-container {
        padding: 24px 24px;
        margin-top: 2rem;
      }

      .we-box {
        margin: 0;
      }

      .we-title {
        font-size: 22px;
      }

      .we-text {
        font-size: 14px;
      }

      .our-box {
        margin-top: 3rem;
      }

      .our-img {
        margin: 0 auto;
        width: 262px;
      }

      .our-contents {
        gap: 1rem;
      }

      .our-title {
        font-size: 16px;
      }

      /* Teams Styles */
      .teams-section {
        padding: 24px 24px;
      }

      .team-groups {
        grid-template-columns: repeat(1, 1fr);
        justify-items: center;
        gap: 1rem;
        margin-top: 2rem;
      }

      /* Footer Styles */
      .footer-container {
        padding: 24px 24px;
      }

      .footer-contents {
        flex-direction: column;
        gap: 2rem;
      }

      .footer-sosmed {
        flex-direction: column;
      }

      .sosmed {
        margin: 0 auto;
      }
    }
  </style>
