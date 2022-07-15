function validator(options) {
  function validate(inputElement, rule) {
    const errorElement = inputElement.parentElement.parentElement.querySelector(
      options.errorSelector
    );
    const errorMessage = rule.test(inputElement.value);

    if (errorMessage) {
      errorElement.innerText = errorMessage;
      inputElement.classList.add('message_error');
    } else {
      errorElement.innerText = '';
      inputElement.classList.remove('message_error');
    }
  }

  const formElement = document.querySelector(options.form);

  if (formElement) {
    options.rules.forEach(function (rule) {
      const inputElement = formElement.querySelector(rule.selector);

      if (inputElement) {
        inputElement.onblur = function () {
          validate(inputElement, rule);
        };

        inputElement.oninput = function () {
          const errorElement =
            inputElement.parentElement.parentElement.querySelector(
              options.errorSelector
            );
          errorElement.innerText = '';
          inputElement.classList.remove('message_error');
        };
      }
    });
  }
}

validator.isRequired = function (selector, message) {
  return {
    selector: selector,
    test: function (value) {
      return value.trim() ? undefined : message || 'Vui lòng nhập thông tin';
    },
  };
};
validator.isEmail = function (selector, message) {
  return {
    selector: selector,
    test: function (value) {
      const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return regex.test(value) ? undefined : message || 'Vui lòng nhập email';
    },
  };
};

validator.minLength = function (selector, min, message) {
  return {
    selector: selector,
    test: function (value) {
      return value.length >= min
        ? undefined
        : message || `Vui lòng nhập tối thiểu ${min} ký tự`;
    },
  };
};

validator.isCheckPass = function (selector, getValuePass, message) {
  return {
    selector: selector,
    test: function (value) {
      return value === getValuePass()
        ? undefined
        : message || 'Giá trị nhập vào không chính xác';
    },
  };
};
