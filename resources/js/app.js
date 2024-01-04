import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



window.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('.home__faq .accordion-button').forEach(content => {
    content.addEventListener('click', function (event) {
      event.target.closest('.accordion')
        ?.querySelectorAll('.accordion-item')
        .forEach(item => item.classList.remove('active'))

      event.target.closest('.accordion-item')?.classList.add('active')
    })
  })



  document.querySelectorAll('.password-changer-button').forEach(content => {
    content.addEventListener('click', function (event) {
      const password = document.querySelector('#' + this.dataset?.id)
      const currentType = password?.getAttribute('type');

      password.setAttribute('type', currentType === 'text' ? 'password' : 'text')
      this.classList.toggle('active')
    })
  })


  document.querySelectorAll('#profileSave').forEach(content => {
    content.addEventListener('click', function (event) {
      document.querySelector('#profileForm')?.submit()
    })
  })

  document.querySelectorAll('#passwordSave').forEach(content => {
    content.addEventListener('click', function (event) {
      document.querySelector('#passwordForm')?.submit()
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
