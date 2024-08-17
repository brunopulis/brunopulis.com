jQuery(document).ready(function ($) {
  let formNewsletter = $('#form-newsletter');

  formNewsletter.on('submit', function (event) {
    event.preventDefault();

    const url = 'https://app.convertkit.com/forms/6974240/subscriptions';
    let responseText = document.querySelector('.response');
    let formData = new FormData();

    formData.append('email_address', formNewsletter.find('input[name="email"]').val());
    formData.append('fields[first_name]', formNewsletter.find('input[name="first_name"]').val());
    formData.append('user', '031a3401-33ed-46bb-abf1-629d404d36cf');

    $.ajax({
      url: url,
      type: 'POST',
      header: { 'Content-Type':	'application/json' },
      body: formData.serialize(),
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
