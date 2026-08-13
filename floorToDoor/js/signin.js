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

const formSignin =
  document.getElementById('formSignin');

if (formSignin) {
  formSignin.addEventListener(
    'submit',
    function (event) {
      event.preventDefault();

      const signinMsg =
        document.getElementById('signinMsg');

      if (signinMsg) {
        signinMsg.classList.add('show');
      }
    }
  );
}

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