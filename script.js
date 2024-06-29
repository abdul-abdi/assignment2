document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    let isValid = true;

    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const feedbackInput = document.getElementById('feedback');
    const ratingInput = document.getElementById('rating');

    if (nameInput.value.trim() === '') {
      isValid = false;
      nameInput.classList.add('invalid');
    } else {
      nameInput.classList.remove('invalid');
    }

    if (emailInput.value.trim() === '' || !isValidEmail(emailInput.value)) {
      isValid = false;
      emailInput.classList.add('invalid');
    } else {
      emailInput.classList.remove('invalid');
    }

    if (feedbackInput.value.trim() === '') {
      isValid = false;
      feedbackInput.classList.add('invalid');
    } else {
      feedbackInput.classList.remove('invalid');
    }

    if (ratingInput.value === '') {
      isValid = false;
      ratingInput.classList.add('invalid');
    } else {
      ratingInput.classList.remove('invalid');
    }

    if (isValid) {
      form.submit();
    }
  });

  function isValidEmail(email) {
    // Basic email validation regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
});