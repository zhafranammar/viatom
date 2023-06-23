
<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito">
</head>
<body>
    <div class="nav">
        <img src="assets/web/logofull.png" alt="">
        <div type="button"><img src="user.png"></div>
    </div>
    <img src="arrow.png" class="arrow">
    <div class="title">
        <p>Atom</p>
    </div>
    <div class="items">
        <div class="item">Teori Atom Dalton</div>
        <div class="item">Teori Atom Thomson</div>
        <div class="item">Teori Atom Rutherford</div>
        <div class="item">Teori Atom Bohr</div>
        <div class="item">Teori Atom Mekanika Kuantum</div>
        <div class="item">Dasar Teori Struktur Atom</div>
        <div class="item">Partikel Dasar Struktur Atom</div>
        <div class="item">Isotom, Isobar, dan Isoton</div>
        <div class="item">Susunan Elektron Dalam Atom</div>
    </div>
    <div class="video">
        <img src="play.png">
        <p>Learning Video</p>
    </div>
</body>
</html>

<style>
    body {
    background-image: url("map1.png");
    background-repeat: no-repeat;
    font-family: 'Nunito';
    font-size: 25px;
    background-size: cover;
  background-position: center;
}

.nav {
    display: flex;
    justify-content: space-between;
    max-height: 50px;
    padding: 30px;
}

.nav div {
    width: 50px;
    background-color: #646454;
    border-radius: 20px;
}

.nav div img {
    height: 100%;
}

.arrow {
    margin-left: 10px;
}

.title {
    width: 300px;
    background-color: #646454;
    border-radius: 10px;
    margin: 0 auto;
}

.title p {
    font-size: 50px;
    text-align: center;
    color: #f4dc44;
    margin: 0;
}

.items {
    max-width: 1200px;
    margin: 50px auto;
    display: grid;
    gap: 1rem;
  }

@media (min-width: 768px) {
.items { grid-template-columns: repeat(3, 1fr); }
}

/* @media (min-width: 480) {
.items { grid-template-columns: repeat(2, 1fr); }
} */

.item {
    /* background-color: #646454; */
    padding: 35px;
    border-radius: 20px;
    text-align: center;
    color: white;
    background: linear-gradient(to top, #646454 80%, #f4dc44 80%);
}

.video {
    width: 300px;
    background-color: #646454;
    border-radius: 10px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.video img {
    width: 40px;
}

.video p {
    color: #f4dc44;
    display: inline-block;
    margin: 0;
}
</style>