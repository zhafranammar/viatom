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
  atom = 9;
} else {
  atom = 13;
}

let distance = WIDTH_GAME / 16;

let centerX = WIDTH_GAME / 2;
let centerY = HEIGHT_GAME / 2;
let position = [
  { x: centerX, y: centerY }
];

let radius = distance;

// Menghitung posisi titik-titik pada lingkaran
for (let i = 0; i < 4; i++) {
  let angle = (Math.PI / 2) * i;
  let x = centerX + radius * Math.cos(angle);
  let y = centerY + radius * Math.sin(angle);
  position.push({ x, y });
}
for (let i = 0; i < 4; i++) {
  let angle = (Math.PI / 4) * (i * 2 + 1);
  let x = centerX + radius * Math.cos(angle);
  let y = centerY + radius * Math.sin(angle);
  position.push({ x, y });
}
for (let i = 0; i < 4; i++) {
  let angle = (Math.PI / 2) * i;
  let x = centerX + radius / 2 * Math.cos(angle);
  let y = centerY + radius / 2 * Math.sin(angle);
  position.push({ x, y });
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
  var draggableElectron = null;
  if (landscape) {
    var core = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'core');
    for (let i = 0; i < atom; i++) {
      electron[i] = this.add.image(position[i].x, position[i].y, 'electron');
      // this.physics.add.existing(electron[i]);
      electron[i].setAlpha(0);
      electron[i].setScale(0.009);
      electron[i].setInteractive();
      electron[i].setDepth(1);
      this.physics.add.existing(electron[i]);
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
    core.destroy();
    target.setAlpha(1);
    target.setScale(0.12);
    if (draggableElectron === null) {
      draggableElectron = this.add.image(WIDTH_GAME * 10 / 12, HEIGHT_GAME / 2, 'electron');
      draggableElectron.setScale(0.009);
      draggableElectron.setInteractive();
      this.input.setDraggable(draggableElectron);
      this.physics.add.existing(draggableElectron);
      draggableElectron.on('drag', function (pointer) {
        draggableElectron.x = pointer.x;
        draggableElectron.y = pointer.y;
      });
    }
  }, null, this);
  this.physics.add.overlap(draggableElectron, electron[0], function () {
    console.log('Electron berhasil!');
    draggableElectron.destroy();
    let dragElectron = this.add.image(WIDTH_GAME * 10 / 12, HEIGHT_GAME / 2, 'electron');
    var lastIndex = electron.length - 1;
    electron[lastIndex].setAlpha(1);
    electron[lastIndex].setScale(0.01);
    electron[lastIndex].setDepth(2);
    this.physics.add.existing(electron[lastIndex]);
    this.physics.add.overlap(electron[lastIndex], dragElectron, function () {
      console.log('Semua electron berhasil!');
    }, null, this);
  }, null, this);
}