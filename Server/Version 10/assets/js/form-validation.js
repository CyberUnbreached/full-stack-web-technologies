// JavaScript Document
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  const steps = document.querySelectorAll('.wizard-step');
  const nextButtons = document.querySelectorAll('.nextBtn');
  const successMsg = document.getElementById('successMsg');

  const nameRegex = /^[A-Za-z'-]{2,}$/;
  const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  const phoneRegex = /^\d{10}$/;

  function showError(input, msg) {
    const group = input.parentElement;
    group.classList.remove('has-success');
    group.classList.add('has-error');
    group.querySelector('.help-block').textContent = msg;
  }

  function showSuccess(input) {
    const group = input.parentElement;
    group.classList.remove('has-error');
    group.classList.add('has-success');
    group.querySelector('.help-block').textContent = "Looks good!";
  }

  // Validation Functions
  function validateName(input) {
    if (!input.value.trim()) { showError(input, 'Required field.'); return false; }
    if (!nameRegex.test(input.value.trim())) { showError(input, 'Only letters, apostrophes, hyphens, min 2 chars.'); return false; }
    showSuccess(input); return true;
  }

  function validateEmail(input) {
    if (!emailRegex.test(input.value.trim())) { showError(input, 'Invalid email format.'); return false; }
    showSuccess(input); return true;
  }

  function validatePhone(input) {
    if (!phoneRegex.test(input.value.trim())) { showError(input, 'Must be 10 digits, no symbols.'); return false; }
    showSuccess(input); return true;
  }

  function validateUserPass(input) {
    if (!input.value.trim()) { showError(input, 'Required field.'); return false; }
    if (input.value.length < 6) { showError(input, 'Must be at least 6 characters.'); return false; }
    showSuccess(input); return true;
  }

  function validateComments(input) {
    if (!input.value.trim()) { showError(input, 'Comments cannot be empty.'); return false; }
    showSuccess(input); return true;
  }

  // Next Button Logic (wizard navigation)
  nextButtons.forEach((btn, index) => {
    btn.addEventListener('click', function () {
      const currentStep = steps[index];
      const input = currentStep.querySelector('input, textarea');
      let valid = false;

      switch (input.id) {
        case 'firstName':
        case 'lastName':
          valid = validateName(input);
          break;
        case 'email':
          valid = validateEmail(input);
          break;
        case 'phone':
          valid = validatePhone(input);
          break;
        case 'username':
        case 'password':
          valid = validateUserPass(input);
          break;
        case 'comments':
          valid = validateComments(input);
          break;
      }

      if (valid) {
        input.disabled = true;
        currentStep.classList.remove('active');
        if (steps[index + 1]) {
          steps[index + 1].classList.add('active');
        }
      }
    });
  });

  // Final Submit Validation
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const comments = document.getElementById('comments');
    if (validateComments(comments)) {
      successMsg.style.display = 'block';
      form.reset();
      steps.forEach(step => {
        step.classList.remove('has-success', 'has-error');
        step.querySelector('.help-block').textContent = '';
        const input = step.querySelector('input, textarea');
        input.disabled = false;
      });
      steps.forEach(step => step.classList.remove('active'));
      steps[0].classList.add('active');
    }
  });
});
