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

//declare atom with 3 attribute (proton, neutron, electron)
let atom = {
  proton: 0,
  neutron: 0,
  electron: 0
}


if (tier == 'Bronze') {
  atom = {
    proton: 5,
    neutron: 4,
    electron: 6,
  }
} else if (tier == 'Silver') {
  atom = {
    proton: 5,
    neutron: 4,
    electron: 8,
  };
} else {
  atom = {
    proton: 7,
    neutron: 6,
    electron: 10,
  };
}

let draggableElectron;
let draggableProton;
let draggableNeutron;

let distanceProton = 30;
let distanceNeutron = 20;
let distanceElectron = 285;

let centerX = WIDTH_GAME / 2;
let centerY = HEIGHT_GAME / 2;
let positionProton = [
  { x: centerX, y: centerY }
];
let positionNeutron = [];
let positionElectron = [];
let rotationOrbit = []


for (let i = 0; i < atom.proton - 1; i++) {
  let angle = (i / (atom.proton - 1)) * Math.PI * 2;
  let shiftedAngle = angle + (Math.PI / 4); // Geser 45 derajat (sebesar PI / 4 radian)
  let x = centerX + distanceProton * Math.cos(shiftedAngle);
  let y = centerY + distanceProton * Math.sin(shiftedAngle);
  positionProton.push({ x, y });
}


for (let i = 0; i < atom.neutron; i++) {
  let angle = (i / atom.neutron) * Math.PI * 2;
  let x = centerX + distanceNeutron * Math.cos(angle);
  let y = centerY - distanceNeutron * Math.sin(angle);
  positionNeutron.push({ x, y });
}

for (let i = 0; i < atom.electron; i++) {
  let angle = (i / atom.electron) * Math.PI * 2;
  let x = centerX + distanceElectron * Math.cos(angle);
  let y = centerY + distanceElectron * Math.sin(angle);
  rotationOrbit.push(angle);
  positionElectron.push({ x, y });
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

var proton = [];
var neutron = [];
var electron = [];
var orbit = [];

function preload() {
  this.load.image('electron', 'assets/images/electron.png');
  this.load.image('proton', 'assets/images/proton.png');
  this.load.image('neutron', 'assets/images/neutron.png');
  this.load.image('ring', 'assets/images/oval.png');
  this.load.image('circle', 'assets/images/ring.png');
  this.input.addPointer(0);
}

function create() {
  for (let i = 0; i < atom.electron / 2; i++) {
    orbit[i] = this.add.image(centerX, centerY, 'ring');
    orbit[i].angle = rotationOrbit[i] * 180 / Math.PI;
    orbit[i].setAlpha(0);
    orbit[i].setScale(0.8);
    orbit[i].setInteractive();
    orbit[i].setDepth(0);
    this.physics.add.existing(orbit[i]);
  }
  for (let i = 0; i < atom.electron; i++) {
    electron[i] = this.add.image(positionElectron[i].x, positionElectron[i].y, 'electron');
    electron[i].setAlpha(0);
    electron[i].setScale(0.025);
    electron[i].setInteractive();
    electron[i].setDepth(1);
    this.physics.add.existing(electron[i]);
  }
  for (let i = 0; i < atom.proton; i++) {
    proton[i] = this.add.image(positionProton[i].x, positionProton[i].y, 'proton');
    proton[i].setAlpha(0);
    proton[i].setScale(0.025);
    proton[i].setInteractive();
    let random = Math.floor(Math.random() * 2) + 1;
    proton[i].setDepth(random);
    this.physics.add.existing(proton[i]);
  }
  for (let i = 0; i < atom.neutron; i++) {
    neutron[i] = this.add.image(positionNeutron[i].x, positionNeutron[i].y, 'neutron');
    neutron[i].setAlpha(0);
    neutron[i].setScale(0.025);
    neutron[i].setInteractive();
    neutron[i].setDepth(1);
    this.physics.add.existing(neutron[i]);
  }
  makeProton.call(this, 0);

}

function makeElectron(countElectron) {
  if (landscape) {
    draggableElectron = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'electron');
  } else {
    draggableElectron = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'electron');
  }
  draggableElectron.setInteractive();
  draggableElectron.setDepth(1);
  draggableElectron.setScale(0.020);

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
    if (countElectron < atom.electron) {
      makeElectron.call(this, countElectron);
    } else {
      console.log('finish');
    }
  }, null, this);
}

function makeProton(countProton) {
  if (landscape) {
    draggableProton = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'proton');
  }
  else {
    draggableProton = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'proton');
  }
  draggableProton.setInteractive();
  draggableProton.setDepth(1);
  draggableProton.setScale(0.02);

  this.input.setDraggable(draggableProton);
  draggableProton.on('drag', (pointer) => {
    draggableProton.x = pointer.x;
    draggableProton.y = pointer.y;
  }
  );
  this.physics.add.existing(draggableProton);
  this.physics.add.overlap(draggableProton, proton[countProton], () => {
    draggableProton.destroy();
    countProton++;
    proton[countProton - 1].setAlpha(1);
    if (countProton < atom.proton) {
      makeProton.call(this, countProton);
    } else {
      makeNeutron.call(this, 0);
    }
  }
    , null, this);
}

function makeNeutron(countNeutron) {
  if (landscape) {
    draggableNeutron = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'neutron');
  }
  else {
    draggableNeutron = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'neutron');
  }
  draggableNeutron.setInteractive();
  draggableNeutron.setDepth(1);
  draggableNeutron.setScale(0.02);

  this.input.setDraggable(draggableNeutron);
  draggableNeutron.on('drag', (pointer) => {
    draggableNeutron.x = pointer.x;
    draggableNeutron.y = pointer.y;
  }
  );
  this.physics.add.existing(draggableNeutron);
  this.physics.add.overlap(draggableNeutron, neutron[countNeutron], () => {
    draggableNeutron.destroy();
    countNeutron++;
    neutron[countNeutron - 1].setAlpha(1);
    if (countNeutron < atom.neutron) {
      makeNeutron.call(this, countNeutron);
    } else {
      makeOrbit.call(this, 0);
    }
  }
    , null, this);

}

function makeOrbit(countOrbit) {
  if (landscape) {
    draggableOrbit = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'circle');
  }
  else {
    draggableOrbit = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'circle');
  }

  draggableOrbit.setInteractive();
  draggableOrbit.setDepth(1);
  draggableOrbit.setScale(0.08);

  this.input.setDraggable(draggableOrbit);
  draggableOrbit.on('drag', (pointer) => {
    draggableOrbit.x = pointer.x;
    draggableOrbit.y = pointer.y;
  }
  );
  this.physics.add.existing(draggableOrbit);
  this.physics.add.overlap(draggableOrbit, orbit[countOrbit], () => {
    draggableOrbit.destroy();
    countOrbit++;
    orbit[countOrbit - 1].setAlpha(1);
    if (countOrbit < atom.electron / 2) {
      makeOrbit.call(this, countOrbit);
    } else {
      makeElectron.call(this, 0);
    }
  }
    , null, this);
}




