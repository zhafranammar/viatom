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


let centerX = WIDTH_GAME / 2;
let centerY = HEIGHT_GAME / 2;

let atom = {
  layer1: 0,
  layer2: 0,
  layer3: 0
}

if (tier == 'Bronze') {
  atom = {
    layer1: 2,
    layer2: 3,
    layer3: 1
  }
}
else if (tier == 'Silver') {
  atom = {
    layer1: 2,
    layer2: 3,
    layer3: 3
  }
}
else {
  atom = {
    layer1: 2,
    layer2: 3,
    layer3: 5
  }
}

let draggableElectron;

let positionLayer1 = [];
let positionLayer2 = [];
let positionLayer3 = [];
let scaleCircle = [0.18, 0.24, 0.30]

let distanceLayer1 = 150;
let distanceLayer2 = 200;
let distanceLayer3 = 250;

let layer1 = [];
let layer2 = [];
let layer3 = [];
let orbit = [];

for (let i = 0; i < atom.layer1; i++) {
  let angle = (i / atom.layer1) * Math.PI * 2;
  let shiftedAngle = angle + (Math.PI / 4);
  let x = centerX + distanceLayer1 * Math.cos(shiftedAngle);
  let y = centerY + distanceLayer1 * Math.sin(shiftedAngle);
  positionLayer1.push({ x, y });
}

for (let i = 0; i < atom.layer2; i++) {
  let angle = (i / atom.layer2) * Math.PI * 2;
  let shiftedAngle = angle + (Math.PI / 4) + (Math.PI / 2);
  let x = centerX + distanceLayer2 * Math.cos(shiftedAngle);
  let y = centerY + distanceLayer2 * Math.sin(shiftedAngle);
  positionLayer2.push({ x, y });
}

for (let i = 0; i < atom.layer3; i++) {
  let angle = (i / atom.layer3) * Math.PI * 2;
  let shiftedAngle = angle + (Math.PI / 4);
  let x = centerX + distanceLayer3 * Math.cos(shiftedAngle);
  let y = centerY + distanceLayer3 * Math.sin(shiftedAngle);
  positionLayer3.push({ x, y });
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
  this.load.image('electron', 'assets/images/electron.png');
  this.load.image('circle', 'assets/images/ring.png');
  this.input.addPointer(0);
}

function makeLayer1(countElectron) {
  if (landscape) {
    draggableElectron = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'electron');
  } else {
    draggableElectron = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'electron');
  }
  draggableElectron.setInteractive();
  draggableElectron.setDepth(1);
  draggableElectron.setScale(0.012);

  this.input.setDraggable(draggableElectron);
  draggableElectron.on('drag', (pointer) => {
    draggableElectron.x = pointer.x;
    draggableElectron.y = pointer.y;
  });
  this.physics.add.existing(draggableElectron);
  this.physics.add.overlap(draggableElectron, layer1[countElectron], () => {
    draggableElectron.destroy();
    countElectron++;
    layer1[countElectron - 1].setAlpha(1);
    if (countElectron < atom.layer1) {
      makeLayer1.call(this, countElectron);
    } else {
      makeLayer2.call(this, 0);
    }
  }, null, this);
}

function makeLayer2(countElectron) {
  if (landscape) {
    draggableElectron = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'electron');
  } else {
    draggableElectron = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'electron');
  }
  draggableElectron.setInteractive();
  draggableElectron.setDepth(1);
  draggableElectron.setScale(0.012);

  this.input.setDraggable(draggableElectron);
  draggableElectron.on('drag', (pointer) => {
    draggableElectron.x = pointer.x;
    draggableElectron.y = pointer.y;
  });
  this.physics.add.existing(draggableElectron);
  this.physics.add.overlap(draggableElectron, layer2[countElectron], () => {
    draggableElectron.destroy();
    countElectron++;
    layer2[countElectron - 1].setAlpha(1);
    if (countElectron < atom.layer2) {
      makeLayer2.call(this, countElectron);
    } else {
      makeLayer3.call(this, 0);
    }
  }, null, this);
}

function makeLayer3(countElectron) {
  if (landscape) {
    draggableElectron = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'electron');
  } else {
    draggableElectron = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'electron');
  }
  draggableElectron.setInteractive();
  draggableElectron.setDepth(1);
  draggableElectron.setScale(0.012);

  this.input.setDraggable(draggableElectron);
  draggableElectron.on('drag', (pointer) => {
    draggableElectron.x = pointer.x;
    draggableElectron.y = pointer.y;
  });
  this.physics.add.existing(draggableElectron);
  this.physics.add.overlap(draggableElectron, layer3[countElectron], () => {
    draggableElectron.destroy();
    countElectron++;
    layer3[countElectron - 1].setAlpha(1);
    if (countElectron < atom.layer3) {
      makeLayer3.call(this, countElectron);
    } else {
      console.log('finish');
    }
  }, null, this);
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
  draggableOrbit.setScale(0.1);

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
    if (countOrbit < 3) {
      makeOrbit.call(this, countOrbit);
    } else {
      makeLayer1.call(this, 0);
    }
  }
    , null, this);
}


function create() {
  for (let i = 0; i < 3; i++) {
    orbit[i] = this.add.image(this.game.config.width / 2, this.game.config.height / 2, 'circle');
    orbit[i].setAlpha(0);
    orbit[i].setScale(scaleCircle[i]);
    orbit[i].setDepth(1);
    this.physics.add.existing(orbit[i]);
  }
  for (let i = 0; i < atom.layer1; i++) {
    layer1[i] = this.add.image(positionLayer1[i].x, positionLayer1[i].y, 'electron');
    layer1[i].setAlpha(0);
    layer1[i].setScale(0.018);
    layer1[i].setInteractive();
    layer1[i].setDepth(1);
    this.physics.add.existing(layer1[i]);
  }

  for (let i = 0; i < atom.layer2; i++) {
    layer2[i] = this.add.image(positionLayer2[i].x, positionLayer2[i].y, 'electron');
    layer2[i].setAlpha(0);
    layer2[i].setScale(0.018);
    layer2[i].setInteractive();
    layer2[i].setDepth(1);
    this.physics.add.existing(layer2[i]);
  }

  for (let i = 0; i < atom.layer3; i++) {
    layer3[i] = this.add.image(positionLayer3[i].x, positionLayer3[i].y, 'electron');
    layer3[i].setAlpha(0);
    layer3[i].setScale(0.018);
    layer3[i].setInteractive();
    layer3[i].setDepth(1);
    this.physics.add.existing(layer3[i]);
  }


  if (landscape) {
    var core = this.add.image(this.game.config.width * 10 / 12, this.game.config.height / 2, 'core');
  } else {
    var core = this.add.image(this.game.config.width / 2, this.game.config.height * 10 / 12, 'core');
  }
  core.setInteractive();
  core.setDepth(1);
  core.setScale(0.1);
  core.on('drag', function (pointer) {
    core.x = pointer.x;
    core.y = pointer.y;
  });
  this.input.setDraggable(core);
  this.physics.add.existing(core);

  var target = this.add.image(this.game.config.width / 2, this.game.config.height / 2, 'core');
  target.setInteractive();
  target.setDepth(1);
  target.setAlpha(0);
  target.setScale(0.08);
  this.physics.add.existing(target);

  this.physics.add.overlap(core, target, () => {
    core.destroy();
    target.setAlpha(1);
    target.setScale(0.1);
    makeOrbit.call(this, 0);
  }, null, this);
}