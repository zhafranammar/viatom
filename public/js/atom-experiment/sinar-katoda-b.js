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
let centerY = HEIGHT_GAME * 5 / 12;

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
  this.load.image('tube', 'assets/images/tube.png');
  this.load.image('electron', 'assets/images/electron.png');
  this.load.image('onButton', 'assets/images/on.png');
  this.load.image('offButton', 'assets/images/off.png');
  this.load.image('magnet', 'assets/images/magnet.png');
  this.input.addPointer(0);
}

let electronInterval;
let spawnInterval = 10; // Interval spawn (dalam milidetik)

function calculateDistance(electron, magnet) {
  const dx = magnet.x - electron.x;
  const dy = magnet.y - electron.y;
  return Math.sqrt(dx * dx + dy * dy);
}

function spawnElectron(status, magnet) {
  if (status == 1 && !electronInterval) {
    electronInterval = setInterval(() => {
      let electron = this.add.image(centerX - 123, centerY - 90, 'electron');
      // console.log(electron);
      electron.setScale(0.005);
      this.tweens.add({
        targets: electron,
        x: centerX + 120,
        duration: 5000,
        ease: 'Linear',
        // destroy electron
        onComplete: () => {
          electron.destroy();
        },
        onUpdate: () => {
          const distance = calculateDistance(electron, magnet);
          if (distance > 0) {
            const angle = Math.atan2(magnet.y - electron.y, magnet.x - electron.x);
            const speed = 0.2; // Adjust the speed as desired
            const newX = electron.x + Math.cos(angle) * speed;
            const newY = electron.y + Math.sin(angle) * speed;
            electron.x = newX;
            electron.y = newY;
          }
          if (electron.y > centerY - 55 || electron.y < centerY - 125) {
            electron.destroy();
          }
        }
      });
    }, spawnInterval); // Spawn electron dengan interval yang ditentukan
  } else if (status == 0 && electronInterval) {
    clearInterval(electronInterval);
    electronInterval = null;
  }
}

function create() {
  let tube = this.add.image(centerX, centerY, 'tube');
  let onButton = this.add.image(centerX, centerY + 150, 'onButton');
  let offButton = this.add.image(centerX, centerY + 150, 'offButton');
  let magnet = this.add.image(centerX + 350, centerY, 'magnet');
  tube.setScale(0.17);
  onButton.setScale(0.05);
  offButton.setScale(0.05);
  magnet.setScale(0.05);
  offButton.setAlpha(0);

  magnet.setInteractive();
  this.input.setDraggable(magnet);
  magnet.on('drag', (pointer) => {
    magnet.x = pointer.x;
    magnet.y = pointer.y;
  }
  );

  // when click onButton
  onButton.setInteractive();
  onButton.on('pointerdown', () => {
    onButton.setAlpha(0);
    offButton.setAlpha(1);
    spawnElectron.call(this, 1, magnet);
  });

  // when click offButton
  offButton.setInteractive();
  offButton.on('pointerdown', () => {
    onButton.setAlpha(1);
    offButton.setAlpha(0);
    spawnElectron.call(this, 0, magnet);
  });
}