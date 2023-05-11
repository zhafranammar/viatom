var gameContainer = document.querySelector('#game-container');
let WIDTH_GAME = gameContainer.offsetWidth;
let landscape = true
let HEIGHT_GAME = WIDTH_GAME * 9 / 16;
if (WIDTH_GAME < 640) {
  landscape = false
  HEIGHT_GAME = WIDTH_GAME * 16 / 9;
}

var config = {
  type: Phaser.AUTO,
  width: WIDTH_GAME,
  height: HEIGHT_GAME,
  parent: 'game-container',
  physics: {
    default: 'arcade'
  },
  scene: {
    preload: preload,
    create: create
  }
};

var game = new Phaser.Game(config);
console.log('Level 1');

function preload() {
  this.load.image('box', 'assets/images/BL-01.png');
  this.load.image('target', 'assets/images/BL-01.png');
  this.load.image('background', 'assets/images/bg-dalton.png');
  this.input.addPointer(0);
}

function create() {
  this.cameras.main.setBackgroundColor('#ffffff');
  this.add.image(this.game.config.width / 2, this.game.config.height / 2, 'background');
  // Buat kotak
  // Cetak h1
  if (landscape) {
    var box = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'box');
  } else {
    var box = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'box');
  }
  this.physics.add.existing(box);
  box.setScale(0.05);

  //Buat box dapat di drag dan drop
  box.setInteractive();
  // check apakah box tersentuh dengan mouse
  box.on('drag', function (pointer) {
    // ubah x dan y box sesuai dengan posisi mouse
    box.x = pointer.x;
    box.y = pointer.y;
  });
  this.input.setDraggable(box);


  // Buat target
  var target = this.add.image(this.game.config.width / 2, this.game.config.height / 2, 'target');
  this.physics.add.existing(target);
  //set target transparent
  target.setAlpha(0);
  target.setScale(0.05);

  // apabila jarak antara box dan target kurang dari 1500 maka box akan berhenti
  this.physics.add.overlap(box, target, function () {
    console.log('Selamat, kamu berhasil menyelesaikan level 1!');
    box.destroy();
    target.setAlpha(1);
    target.setScale(0.1);
  }, null, this);
}