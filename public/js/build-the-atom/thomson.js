var gameContainer = document.querySelector('#game-container');
let WIDTH_GAME = gameContainer.offsetWidth;
let tier = user.tier;
console.log(tier);
let landscape = true
let HEIGHT_GAME = WIDTH_GAME * 9 / 16;
if (WIDTH_GAME < 640) {
  landscape = false
  HEIGHT_GAME = WIDTH_GAME * 16 / 9;
}
let atom = 0;
if (tier == 'Bronze') {
  atom = 5;
} else if (tier == 'Silver') {
  atom = 7;
} else {
  atom = 9;
}

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
    create: create
  }
};

var game = new Phaser.Game(config);
// console.log('Level 1');

function preload() {
  this.load.image('core', 'assets/images/BL-01.png');
  this.load.image('target', 'assets/images/BL-01.png');
  this.load.image('electron', 'assets/images/electron.png');
  // this.load.image('background', 'assets/images/bg-dalton.png');
  this.input.addPointer(0);
}

function create() {
  var electron = [];
  if (landscape) {
    var core = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'core');
    for (let i = 0; i < atom; i++) {
      console.log(i);
      electron[i] = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'electron');
      this.physics.add.existing(electron[i]);
      electron[i].setScale(0.007);
      electron[i].setInteractive();
      electron[i].setDepth(1);
      electron[i].on('drag', function (pointer) {
        electron[i].x = pointer.x;
        electron[i].y = pointer.y;
      });
      this.input.setDraggable(electron[i]);
    }
  } else {
    var core = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'core');
  }
  this.physics.add.existing(core);
  var target = this.add.image(this.game.config.width / 2, this.game.config.height / 2, 'target');
  this.physics.add.existing(target);
  core.setScale(0.05);

  //Buat core dapat di drag dan drop
  core.setInteractive();
  // check apakah core tersentuh dengan mouse
  core.on('drag', function (pointer) {
    // ubah x dan y core sesuai dengan posisi mouse
    core.x = pointer.x;
    core.y = pointer.y;
  });
  this.input.setDraggable(core);


  // Buat target

  //set target transparent
  target.setAlpha(0);
  target.setScale(0.05);

  // apabila jarak antara core dan target kurang dari 1500 maka core akan berhenti
  this.physics.add.overlap(core, target, function () {
    // console.log('Selamat, kamu berhasil menyelesaikan level 1!');
    core.destroy();
    target.setAlpha(1);
    target.setScale(0.1);
  }, null, this);
}