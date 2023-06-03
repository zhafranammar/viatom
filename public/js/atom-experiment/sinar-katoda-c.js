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
  this.load.image('plus', 'assets/images/plus.png');
  this.load.image('minus', 'assets/images/minus.png');
  this.input.addPointer(0);
}

let electronInterval;
let spawnInterval = 10; // Interval spawn (dalam milidetik)

function calculateDistance(electron, object) {
  const dx = object.x - electron.x;
  const dy = object.y - electron.y;
  return Math.sqrt(dx * dx + dy * dy);
}

function spawnElectron(status, plus, minus) {
  if (status == 1 && !electronInterval) {
    electronInterval = setInterval(() => {
      let electron = this.add.image(centerX - 105, centerY - 67, 'electron');
      // console.log(electron);
      electron.setScale(0.005);
      this.tweens.add({
        targets: electron,
        x: centerX + 108,
        duration: 5000,
        ease: 'Linear',
        // destroy electron
        onComplete: () => {
          electron.destroy();
        },
        onUpdate: () => {
          const distancePlus = calculateDistance(electron, plus);
          if (distancePlus > 0) {
            const angle = Math.atan2(plus.y - electron.y, plus.x - electron.x);
            const speed = 0.2; // Adjust the speed as desired
            const newX = electron.x + Math.cos(angle) * speed;
            const newY = electron.y + Math.sin(angle) * speed;
            electron.x = newX;
            electron.y = newY;
          }
          const distanceMinus = calculateDistance(electron, minus);
          if (distanceMinus > 0) {
            const angle = Math.atan2(minus.y - electron.y, minus.x - electron.x);
            const speed = 0.2; // Adjust the speed as desired
            const newX = electron.x - Math.cos(angle) * speed;
            const newY = electron.y - Math.sin(angle) * speed;
            electron.x = newX;
            electron.y = newY;
          }
          if (electron.y > centerY - 37 || electron.y < centerY - 102) {
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
  let plus = this.add.image(centerX + 350, centerY, 'plus');
  let minus = this.add.image(centerX + 350, centerY - 50, 'minus');
  tube.setScale(0.17);
  onButton.setScale(0.03);
  offButton.setScale(0.03);
  plus.setScale(0.01);
  minus.setScale(0.01);
  offButton.setAlpha(0);

  plus.setInteractive();
  this.input.setDraggable(plus);
  plus.on('drag', (pointer) => {
    plus.x = pointer.x;
    plus.y = pointer.y;
  }
  );

  minus.setInteractive();
  this.input.setDraggable(minus);
  minus.on('drag', (pointer) => {
    minus.x = pointer.x;
    minus.y = pointer.y;
  }
  );

  // when click onButton
  onButton.setInteractive();
  onButton.on('pointerdown', () => {
    onButton.setAlpha(0);
    offButton.setAlpha(1);
    spawnElectron.call(this, 1, plus, minus);
  });

  // when click offButton
  offButton.setInteractive();
  offButton.on('pointerdown', () => {
    onButton.setAlpha(1);
    offButton.setAlpha(0);
    spawnElectron.call(this, 0, plus, minus);
  });
}