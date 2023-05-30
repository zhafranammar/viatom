var gameContainer = document.querySelector('#game-container');
let WIDTH_GAME = gameContainer.offsetWidth;
let landscape = true;
let HEIGHT_GAME = WIDTH_GAME * 9 / 16;
if (WIDTH_GAME < 640) {
  landscape = false;
  HEIGHT_GAME = WIDTH_GAME * 16 / 9;
}

let centerX = WIDTH_GAME / 2;
let centerY = HEIGHT_GAME / 2;
// Inisialisasi Phaser
var config = {
  type: Phaser.AUTO,
  width: WIDTH_GAME,
  height: HEIGHT_GAME,
  transparent: true,
  parent: 'game-container',
  physics: {
    default: 'arcade'
  },
  scene: {
    preload: preload,
    create: create,
    update: update
  }
};

var game = new Phaser.Game(config);

// Variabel global
var fruits;
var bombs;
var score = 0;
var scoreText;
var fruitTypes = ['a', 'b', 'c'];
var bombType = 'bomb';

// Memuat sumber daya permainan
function preload() {
  for (var i = 0; i < fruitTypes.length; i++) {
    this.load.image(fruitTypes[i], 'assets/images/minigames/' + fruitTypes[i] + '.png');
  }
  this.load.image(bombType, 'assets/images/minigames/' + bombType + '.png');
}

// Membuat elemen permainan
function create() {
  // Membuat grup buah-buahan
  fruits = this.physics.add.group();
  // ubah ukuran buah
  fruits.children.iterate(function (fruit) {
    fruit.setScale(0.05);
  });

  // Membuat grup bom
  bombs = this.physics.add.group();

  // Membuat text skor
  scoreText = this.add.text(16, 16, 'Score: 0', { fontSize: '32px', fill: '#000' });

  // Mengatur fungsi pemotongan saat kursor klik pada buah atau bom
  this.input.on('pointerdown', cutFruit, this);

  // Membuat interval untuk munculnya buah baru setiap 500 ms
  this.time.addEvent({ delay: 500, callback: createRandomObject, callbackScope: this, loop: true });
}

// Mengupdate permainan
function update() {
  // Mengecek jika ada objek jatuh dari layar
  fruits.children.iterate(function (fruit) {
    if (fruit && fruit.y > 600) {
      fruit.destroy();
    }
  });

  // Mengecek jika ada bom jatuh dari layar
  bombs.children.iterate(function (bomb) {
    if (bomb && bomb.y > 600) {
      bomb.destroy();
    }
  });
}

// Membuat buah acak atau bom
function createRandomObject() {
  var x = Phaser.Math.Between(100, 700);
  var objectType = Phaser.Math.RND.weightedPick([].concat(fruitTypes, bombType));
  var objectGroup = objectType === bombType ? bombs : fruits;

  var object = objectGroup.create(x, 0, objectType);
  if (objectType === fruitTypes && fruitTypes === 'a') {
    object.setScale(0.05);
  } else if (objectType === fruitTypes && fruitTypes === 'c') {
    object.setScale(0.15);
  } else if (objectType === bombType) {
    object.setScale(0.15);
  }
  else {
    object.setScale(0.1);
  }
  object.setVelocity(0, 200); // Kecepatan jatuh objek
  object.setInteractive(); // Membuat objek bisa diinteraksi
}

function cutFruit(pointer) {
  fruits.children.each(function (fruit) {
    if (fruit.active === true && fruit.getBounds().contains(pointer.x, pointer.y)) {
      fruit.setActive(false).setVisible(false);
      score += 10;
      scoreText.setText('Score: ' + score);
    }
  }, this);

  bombs.children.each(function (bomb) {
    if (bomb.active === true && bomb.getBounds().contains(pointer.x, pointer.y)) {
      bomb.setActive(false).setVisible(false);
      this.game.destroy();
    }
  }, this);
}

// Fungsi untuk mengakhiri permainan
function endGame() {
  // Menonaktifkan input klik pemotongan buah
  this.input.manager.removeListener('pointerdown', cutFruit, this);

  // Menghentikan munculnya objek baru
  this.time.removeAllEvents();

  // Menampilkan pesan akhir permainan
  var gameOverText = this.add.text(this.sys.game.config.width / 2, this.sys.game.config.height / 2, 'Game Over', {
    fontSize: '48px',
    fill: '#fff',
    align: 'center'
  });
  gameOverText.setOrigin(0.5);

  // Menampilkan skor akhir permainan
  var finalScoreText = this.add.text(this.sys.game.config.width / 2, this.sys.game.config.height / 2 + 50, 'Final Score: ' + score, {
    fontSize: '32px',
    fill: '#fff',
    align: 'center'
  });
  finalScoreText.setOrigin(0.5);
}

