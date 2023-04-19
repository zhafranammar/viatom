var config = {
  type: Phaser.AUTO,
  width: 1920,
  height: 1080,
  physics: {
    default: 'arcade'
  },
  scene: {
    preload: preload,
    create: create
  }
};

var game = new Phaser.Game(config);
console.log('Level 1');

function preload() {
  this.load.image('box', 'assets/images/BL-01.png');
  this.load.image('target', 'assets/images/BL-01.png');
  this.input.addPointer(0);
}

function create() {
  this.cameras.main.setBackgroundColor('#ffffff');
  // Buat kotak
  // Cetak h1
  var box = this.add.image(1200, 600, 'box');
  this.physics.add.existing(box);
  box.setScale(0.05);

  //Buat box dapat di drag dan drop
  box.setInteractive();
  // check apakah box tersentuh dengan mouse
  box.on('drag', function (pointer) {
    // ubah x dan y box sesuai dengan posisi mouse
    box.x = pointer.x;
    box.y = pointer.y;
    // update posisi box
    // box.update();
    console.log(box.x, box.y, target.x, target.y);
  });
  this.input.setDraggable(box);


  // Buat target
  var target = this.add.image(600, 600, 'target');
  this.physics.add.existing(target);
  //set target transparent
  target.setAlpha(0);
  target.setScale(0.05);

  // apabila jarak antara box dan target kurang dari 1500 maka box akan berhenti
  this.physics.add.overlap(box, target, function () {
    console.log('Selamat, kamu berhasil menyelesaikan level 1!');
    box.destroy();
    target.setAlpha(1);
    target.setScale(0.1);
  }, null, this);
}
