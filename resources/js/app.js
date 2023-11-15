import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



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

  document.querySelectorAll('.custom-tab').forEach(tab => {
    tab.addEventListener('click', function (event) {
      event.preventDefault()
      const type = event.target.dataset?.value
      document.querySelector('#type').value = type === 'seller' ? 'seller' : 'user'

      if (type === 'seller') {
        document.querySelector('#app-files').classList.remove('d-none')
      } else {
        document.querySelector('#app-files').classList.add('d-none')
      }

      document.querySelectorAll('.custom-tab').forEach(newTab => {
        if (newTab.dataset?.value !== type) {
          newTab.classList.remove('active')
        } else {
          newTab.classList.add('active')
        }
      })

      history.pushState(null, '', window.location.pathname + '?type=' + type);
    })
  })
});
