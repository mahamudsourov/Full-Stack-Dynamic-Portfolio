const text = "a Web Developer.";
let index = 0;

function typeEffect() {
  const typedText = document.querySelector('.typed-text');
  if (index < text.length) {
    typedText.textContent += text.charAt(index);
    index++;
    setTimeout(typeEffect, 120);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  typeEffect();

  const toggle = document.getElementById('menu-toggle');
  const navList = document.querySelector('nav ul');

  toggle.addEventListener('click', () => {
    navList.classList.toggle('show');
    toggle.classList.toggle('active');
  });

  const contactForm = document.querySelector('.contact-form');

  let messageDiv = document.createElement('div');
  messageDiv.style.marginTop = '15px';
  contactForm.appendChild(messageDiv);

  contactForm.addEventListener('submit', (e) => {
    e.preventDefault(); 

    messageDiv.textContent = '';
    messageDiv.style.color = '';

    const inputs = contactForm.querySelectorAll('input, textarea');
    let allValid = true;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^[0-9]{7,15}$/; 

    inputs.forEach(input => {
      input.style.border = ''; 
      

      const value = input.value.trim();

      if (!value) {
        allValid = false;
        input.style.border = '2px solid red';
      } else {
        
        if (input.type === 'email') {
          if (!emailRegex.test(value)) {
            allValid = false;
            input.style.border = '2px solid red';
          }
        }
        if (input.placeholder.toLowerCase().includes('phone')) {
          if (!phoneRegex.test(value)) {
            allValid = false;
            input.style.border = '2px solid red';
          }
        }
      }
    });

    if (!allValid) {
      messageDiv.textContent = 'Please fill out all fields correctly.';
      messageDiv.style.color = 'red';
      return;
    }

    messageDiv.textContent = 'Thank you! Your message has been sent successfully.';
    messageDiv.style.color = '#00bfa6';

    setTimeout(() => {
      contactForm.reset();
      messageDiv.textContent = '';
    }, 4000);
  });
});
