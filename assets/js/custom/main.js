jQuery(document).ready(function ($) {
  let formNewsletter = $('#form-newsletter');

  formNewsletter.on('submit', function (event) {
    event.preventDefault();

    let responseText = document.querySelector('.response');

    const url =
      'https://assets.mailerlite.com/jsonp/321590/forms/102787660366481364/subscribe';

    let formData = $(this);

    $.ajax({
      url: url,
      type: 'POST',
      data: formData.serialize(),
      dataType: 'json',
      success: function (data) {
        responseText.innerHTML = 'E-mail cadastrado';
      },
      error: function (data) {
        responseText.innerHTML = 'Ocorreu um erro, tente novamente';
      }
    });
  });
});
