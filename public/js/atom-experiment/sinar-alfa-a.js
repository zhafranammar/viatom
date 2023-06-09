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
  this.load.image('alfa', 'assets/images/alfa.png');
  this.load.image('electron', 'assets/images/electron.png');
  this.load.image('onButton', 'assets/images/on.png');
  this.load.image('offButton', 'assets/images/off.png');
  this.input.addPointer(0);
}

let electronInterval;
let spawnInterval = 10; // Interval spawn (dalam milidetik)

function spawnElectron(status) {
  if (status == 1 && !electronInterval) {
    electronInterval = setInterval(() => {
      let electron = this.add.image(centerX + 160, centerY - 5, 'electron');
      // console.log(electron);
      electron.setScale(0.005);
      this.tweens.add({
        targets: electron,
        x: centerX - 200,
        y: centerY - 170,
        duration: 5000,
        ease: 'Linear',
        // destroy electron
        onComplete: () => {
          electron.destroy();
        }
      });
    }, spawnInterval); // Spawn electron dengan interval yang ditentukan
  } else if (status == 0 && electronInterval) {
    clearInterval(electronInterval);
    electronInterval = null;
  }
}

function create() {
  let alfa = this.add.image(centerX, centerY - 50, 'alfa');
  let onButton = this.add.image(centerX, centerY + 150, 'onButton');
  let offButton = this.add.image(centerX, centerY + 150, 'offButton');
  alfa.setScale(0.2);
  alfa.setDepth(0);
  onButton.setScale(0.05);
  offButton.setScale(0.05);
  offButton.setAlpha(0);

  // when click onButton
  onButton.setInteractive();
  onButton.on('pointerdown', () => {
    onButton.setAlpha(0);
    offButton.setAlpha(1);
    spawnElectron.call(this, 1);
  });

  // when click offButton
  offButton.setInteractive();
  offButton.on('pointerdown', () => {
    onButton.setAlpha(1);
    offButton.setAlpha(0);
    spawnElectron.call(this, 0);
  });
}