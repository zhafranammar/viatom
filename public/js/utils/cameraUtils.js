export function startCamera(scene) {
  const video = document.createElement('video');
  video.setAttribute('autoplay', '');
  video.setAttribute('playsinline', '');

  navigator.mediaDevices.getUserMedia({ video: true })
    .then((stream) => {
      video.srcObject = stream;
      video.onloadedmetadata = () => {
        video.play();

        const videoTexture = scene.textures.createCanvas('videoTexture', video.videoWidth, video.videoHeight);
        const videoSprite = videoTexture.source[0].image;
        const videoImage = videoTexture.source[0].canvas;
        const context = videoImage.getContext('2d');

        scene.time.addEvent({
          loop: true,
          callback: () => {
            context.drawImage(video, 0, 0, videoImage.width, videoImage.height);
            videoTexture.refresh();
          }
        });

        const background = scene.add.sprite(scene.scale.width / 2, scene.scale.height / 2, 'videoTexture');
        background.setDisplaySize(scene.scale.width, scene.scale.height);
      };
    })
    .catch((error) => {
      console.error('Error accessing camera: ', error);
    });
}
