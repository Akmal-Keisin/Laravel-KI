function sendList() {
    $('#list-group').html('')
    $.ajax({
      url: 'http://127.0.0.1:8000/api/todo-list',
      type: 'post',
      dataType: 'json',
      data: {
        'list' : $('.input-list').val()
      },
    })
}
