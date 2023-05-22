var gameContainer = document.querySelector('#game-container');
let WIDTH_GAME = gameContainer.offsetWidth;
let tier = user.tier;
// console.log(tier);
let landscape = true;
let HEIGHT_GAME = WIDTH_GAME * 9 / 16;
if (WIDTH_GAME < 640) {
  landscape = false;
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

let draggableElectron;
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

function preload() {
  this.load.image('core', 'assets/images/BL-01.png');
  this.load.image('target', 'assets/images/BL-01.png');
  this.load.image('electron', 'assets/images/electron.png');
  this.input.addPointer(0);
}

var electron = [];

function makeElectron(countElectron) {
  if (landscape) {
    draggableElectron = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'electron');
  } else {
    draggableElectron = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'electron');
  }
  draggableElectron.setInteractive();
  draggableElectron.setDepth(1);
  draggableElectron.setScale(0.009);

  this.input.setDraggable(draggableElectron);
  draggableElectron.on('drag', (pointer) => {
    draggableElectron.x = pointer.x;
    draggableElectron.y = pointer.y;
  });
  this.physics.add.existing(draggableElectron);
  this.physics.add.overlap(draggableElectron, electron[countElectron], () => {
    draggableElectron.destroy();
    countElectron++;
    electron[countElectron - 1].setAlpha(1);
    if (countElectron < atom) {
      makeElectron.call(this, countElectron);
    } else {
      console.log('finish');
    }
  }, null, this);
}

function create() {

  if (landscape) {
    var core = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'core');
  } else {
    var core = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'core');
  }
  this.physics.add.existing(core);
  var target = this.add.image(this.game.config.width / 2, this.game.config.height / 2, 'target');
  this.physics.add.existing(target);

  for (let i = 0; i < atom; i++) {
    electron[i] = this.add.image(position[i].x, position[i].y, 'electron');
    electron[i].setAlpha(0);
    electron[i].setScale(0.012);
    electron[i].setInteractive();
    electron[i].setDepth(1);
    this.physics.add.existing(electron[i]);
  }

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
    makeElectron.call(this, 0);
  }, null, this);
}
