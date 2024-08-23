document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      const correo = document.getElementById('correo');
      
      const messageError = document.querySelector('#mensaje + span.error');
  
      let valid = true;
  
      correo.classList.remove('invalid');
         
  
      if (!correo.value.trim().match(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/)) {
        correo.classList.add('invalid');
        messageError.textContent = 'Por favor, ingresa una dirección de correo electrónico válida.';
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
  
