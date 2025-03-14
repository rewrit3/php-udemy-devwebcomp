$(document).ready(() => {
  $('button').on('click', (event) => {
    event.preventDefault();

    let formData = $('form').serialize();
    // console.log(formData);

    $.ajax({
      type: 'GET',
      url: 'app.php',
      data: formData,
      dataType: 'json',
      success: data => {
        console.log(data);
      },
      error: error => {
        console.log(error);
      },
    });
  });
});