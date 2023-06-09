var gameContainer = document.querySelector('#game-container');
let tier = user.tier;
// console.log(tier);
let WIDTH_GAME = gameContainer.clientWidth;
let landscape = true
let HEIGHT_GAME = WIDTH_GAME * 9 / 21;
if (WIDTH_GAME < 640) {
  landscape = false
  HEIGHT_GAME = WIDTH_GAME * 21 / 9;
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
let distance = 170;

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
  draggableElectron.setScale(0.02);

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
      const button = document.getElementById('next-button');
      const nextButton = document.createElement('a');
      nextButton.href = '/next-level';
      nextButton.innerHTML = 'Next Level';
      nextButton.classList.add('p-2');
      nextButton.classList.add('font-bold');
      nextButton.classList.add('font-mono');
      nextButton.classList.add('my-2');
      nextButton.classList.add('text-2xl');
      nextButton.style.color = '#F2DC52';
      nextButton.classList.add('rounded-md');
      nextButton.classList.add('btn-game');
      nextButton.classList.add('absolute');
      nextButton.classList.add('bottom-1.5');
      nextButton.classList.add('right-3');

      const nextIcon = document.createElement('span');
      nextIcon.classList.add('material-symbols-outlined');
      nextIcon.classList.add('mr-2');
      nextIcon.innerHTML = 'navigate_next';
      nextIcon.style.color = '#F2DC52';
      nextIcon.classList.add('shadow-soft-2xl');
      nextButton.prepend(nextIcon);

      button.appendChild(nextButton);
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
    electron[i].setScale(0.02);
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
  target.setScale(0.2);

  // apabila jarak antara core dan target kurang dari 1500 maka core akan berhenti
  this.physics.add.overlap(core, target, function () {
    core.destroy();
    target.setAlpha(1);
    target.setScale(0.2);
    makeElectron.call(this, 0);
  }, null, this);
}
