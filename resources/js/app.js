import './bootstrap';




window.addEventListener("DOMContentLoaded", function() {

  document.querySelectorAll('.home__video-preview').forEach(content => {
    content.addEventListener('click', function (event) {
      document.querySelector('#videoPreview').classList.toggle('show')
      document.querySelector('#videoContent').classList.toggle('show')
      // document.querySelector('#videoButton').classList.toggle('show')
      document.querySelector('.home__video-preview').classList.toggle('video')

      const video = document.querySelector('#videoContent')

      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    })
  })
});
