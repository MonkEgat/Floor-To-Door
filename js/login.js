function switchAuth(which) {
  const tabSignin =
    document.getElementById('tabSignin');

  const tabRegister =
    document.getElementById('tabRegister');

  const formSignin =
    document.getElementById('formSignin');

  const formRegister =
    document.getElementById('formRegister');

  if (
    !tabSignin ||
    !tabRegister ||
    !formSignin ||
    !formRegister
  ) {
    return;
  }

  tabSignin.classList.toggle(
    'active',
    which === 'signin'
  );

  tabRegister.classList.toggle(
    'active',
    which === 'register'
  );

  formSignin.classList.toggle(
    'active',
    which === 'signin'
  );

  formRegister.classList.toggle(
    'active',
    which === 'register'
  );
}

// formSignin is intentionally left alone here — no submit listener,
// no preventDefault(). It's a real <form method="POST" action="login.php">,
// so we let the browser submit it normally and let login.php's PHP
// handle it server-side.

// formRegister is still just a front-end demo (no backend yet), so it
// keeps the old preventDefault() + message-reveal behaviour.
const formRegister =
  document.getElementById('formRegister');

if (formRegister) {
  formRegister.addEventListener(
    'submit',
    function (event) {
      event.preventDefault();

      const registerMsg =
        document.getElementById('registerMsg');

      if (registerMsg) {
        registerMsg.classList.add('show');
      }
    }
  );
}