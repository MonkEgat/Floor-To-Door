const contactForm =
  document.getElementById('contactForm');

if (contactForm) {
  contactForm.addEventListener(
    'submit',
    function (event) {
      event.preventDefault();

      const contactMsg =
        document.getElementById('contactMsg');

      if (contactMsg) {
        contactMsg.classList.add('show');
      }

      contactForm.reset();
    }
  );
}