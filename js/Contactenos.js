document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('contactForm');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const message= document.getElementById('message');

    const nameError = document.querySelector('#name + .error');
    const emailError = document.querySelector('#email + .error');
    const messageError = document.querySelector('#message + .error');

    let valid = true;

    name.classList.remove('invalid');
    email.classList.remove('invalid');
    message.classList.remove('invalid');

    if (!name.value.trim()) {
      name.classList.add('invalid');
      nameError.textContent = 'Please enter your name.';
      valid = false;
    } else {
      nameError.textContent = '';
    }

    if (!email.value.trim().match(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/)) {
      email.classList.add('invalid');
      emailError.textContent = 'Please enter a valid email address.';
      valid = false;
    } else {
      emailError.textContent = '';
    }

    if (!message.value.trim()) {
      message.classList.add('invalid');
      messageError.textContent = 'Please enter your message.';
      valid = false;
    } else {
      messageError.textContent = '';
    }

    if (valid) {
      alert('Formulario enviado correctamente.');
      form.submit();
    }
  });
});