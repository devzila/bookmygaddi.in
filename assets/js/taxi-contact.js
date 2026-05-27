(function () {
  const form = document.getElementById('taxiContactForm');
  if (!form) return;

  const formWrap = document.getElementById('taxiFormWrap');
  const successPanel = document.getElementById('taxiContactSuccess');
  const successMessage = document.getElementById('taxiSuccessMessage');
  const formAlert = document.getElementById('taxiFormAlert');
  const submitBtn = form.querySelector('.taxi-form-submit');

  function showFieldError(name, message) {
    const field = form.querySelector(`[name="${name}"]`);
    const errorEl = form.querySelector(`[data-error-for="${name}"]`);
    if (field) field.classList.add('invalid');
    if (errorEl) {
      errorEl.textContent = message;
      errorEl.classList.add('visible');
    }
  }

  function clearErrors() {
    form.querySelectorAll('.invalid').forEach((el) => el.classList.remove('invalid'));
    form.querySelectorAll('.taxi-field-error').forEach((el) => {
      el.textContent = '';
      el.classList.remove('visible');
    });
    formAlert.classList.remove('visible');
    formAlert.textContent = '';
  }

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    clearErrors();

    submitBtn.disabled = true;
    const originalLabel = submitBtn.textContent;
    submitBtn.textContent = 'Sending…';

    const payload = {
      name: form.name.value.trim(),
      email: form.email.value.trim(),
      phone: form.phone.value.trim(),
      message: form.message.value.trim(),
    };

    try {
      const res = await fetch('/api/taxi/contact.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
        body: JSON.stringify(payload),
      });

      const data = await res.json().catch(() => ({}));

      if (!res.ok) {
        if (data.errors) {
          Object.entries(data.errors).forEach(([key, msg]) => showFieldError(key, msg));
        }
        formAlert.textContent = data.message || 'Something went wrong. Please try again.';
        formAlert.classList.add('visible');
        return;
      }

      formWrap.classList.add('hidden');
      successMessage.textContent = data.message || 'Thank you! Your enquiry has been submitted successfully.';
      successPanel.classList.add('visible');
    } catch {
      formAlert.textContent = 'Network error. Please check your connection and try again.';
      formAlert.classList.add('visible');
    } finally {
      submitBtn.disabled = false;
      submitBtn.textContent = originalLabel;
    }
  });
})();
