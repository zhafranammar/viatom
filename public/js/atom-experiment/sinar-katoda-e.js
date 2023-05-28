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
  this.load.image('tube', 'assets/images/tube.png');
  this.load.image('electron', 'assets/images/electron.png');
  this.load.image('onButton', 'assets/images/on.png');
  this.load.image('offButton', 'assets/images/off.png');
  this.load.image('turbin', 'assets/images/turbin.png');
  this.input.addPointer(0);
}

let electronInterval;
let spawnInterval = 10; // Interval spawn (dalam milidetik)
let turbinRotate = false;
let electronCount = 0;

function spawnElectron(status, turbin) {
  if (status == 1 && !electronInterval) {
    electronInterval = setInterval(() => {
      let electron = this.add.image(centerX - 123, centerY - 90, 'electron');
      electronCount++;
      electron.setScale(0.005);
      this.tweens.add({
        targets: electron,
        x: centerX + 120,
        duration: 5000,
        ease: 'Linear',
        // destroy electron
        onComplete: () => {
          electron.destroy();
          electronCount--;
          turbinRotate = true; // Mengubah nilai turbinRotate menjadi true saat animasi selesai
          if (electronCount == 0) {
            turbinRotate = false; // Mengubah nilai turbinRotate menjadi false saat tidak ada animasi yang berjalan
            // make stop turbin animation
            this.tweens.add({
              targets: turbin,
              angle: 0,
              duration: 1000,
              ease: 'Linear',
            });
          }
        },
      });
    }, spawnInterval);
  } else if (status == 0 && electronInterval) {
    clearInterval(electronInterval);
    electronInterval = null;
    turbinRotate = false; // Mengubah nilai turbinRotate menjadi false saat animasi dihentikan
  }
}

function create() {
  let tube = this.add.image(centerX, centerY, 'tube');
  let onButton = this.add.image(centerX, centerY + 150, 'onButton');
  let offButton = this.add.image(centerX, centerY + 150, 'offButton');
  let turbin = this.add.image(centerX + 120, centerY - 90, 'turbin');

  tube.setScale(0.17);
  onButton.setScale(0.05);
  offButton.setScale(0.05);
  turbin.setScale(0.03);
  offButton.setAlpha(0);

  // when click onButton
  onButton.setInteractive();
  onButton.on('pointerdown', () => {
    onButton.setAlpha(0);
    offButton.setAlpha(1);
    spawnElectron.call(this, 1, turbin);
  });

  // when click offButton
  offButton.setInteractive();
  offButton.on('pointerdown', () => {
    onButton.setAlpha(1);
    offButton.setAlpha(0);
    spawnElectron.call(this, 0, turbin);
  });
  this.events.on('update', () => {
    if (turbinRotate) {
      turbin.angle += 6; // Mengubah sudut rotasi turbin secara terus-menerus
    }
  });
}


