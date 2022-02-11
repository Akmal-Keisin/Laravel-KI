function sendList() {
  if ($('#input').val() == '') {
    return alert('You must fill something')
  } else {
    $.ajax({
      type: "POST",
      url: "http://127.0.0.1:8000/api/todo-list",
      dataType: "json",
      data: {
        "list" : $('#input').val()
      },
      success: function(result) {
        // Check status
        if(result.status == 200) {
          // Saving data
          const data = result.data
          //Add data on list 
          $('.list-box').append(`
            <li style="" class="d-flex justify-content-between align-items-center list-group-item p-0">
              <span data-id="` + data.id + `" class="list-item ps-2">
                <b class="number"></b>. ` + data.list + `
              </span>
              <div class="d-flex action-button">
                <a href="#" class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></a>
                <a href="#" class="btn btn-danger delete"><i class="bi bi-trash"></i></a>
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input id="editInput" class="form-control" type="text" placeholder="Edit Here">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" id="saveChanges" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            `)
          //Cleaning input value 
          $('#input').val('')

          // Looping number
          let index = 0
          while (index <= $('.number').length) {
            $('.number:eq(' + index + ')').html(index+1)
            index++
          }
          return alert('Data created successfully')
        }
      }
    })
  }
}

// Input Data By Press Button
$('#add').on('click', function() {
  sendList()
})

// Input Data By Pressing Enter
$('#input').on('keydown', function(e) {
  if (e.keyCode === 13) {
    sendList()
  }
})

// Edit Data
$('.list-group').on('click', '.edit', function() {
  console.log('success')
  const id = $(this).parent().siblings().data('id')
  // Get data by data id
  $.ajax({
    type : "get",
    url: "http://127.0.0.1:8000/api/todo-list/" + id,
    dataType : "json",
    success : function (result) {
      if (result.status == 200) {
        const data = result.data
        $('#editInput').val(data.list)
      } else {
        alert('Fail')
      }
    }
  })
  // Editing data by click save changes
  $('.list-group').on('click','#saveChanges', function () {
    $.ajax({
      type : "put",
      url: "http://127.0.0.1:8000/api/todo-list/" + id,
      dataType : "json",
      data: {
        "list" : $('#editInput').val()
      },
      success : function (result) {
        const data = result.data
        if (result.status == 200) {
          // Replacing data which been edited
          $('span[data-id='+ id +']').replaceWith(`
            <span data-id="` + data.id + `" class="list-item ps-2">
              <b class="number"></b>. ` + data.list + `
            </span>
          `)          
          alert("Data updated successfully")
          // looping for number
          let index = 0
          while (index <= $('.number').length) {
            $('.number:eq(' + index + ')').html(index+1)
            index++
          }
          $('.modal').modal('hide')
        }
      }
    })
  })
  // $(this).parent().siblings().replaceWith(editInput)
})

// Delete Data
$('.list-group').on('click', '.delete', function(){
  const verification = confirm('are you sure?')
  if (verification == false) {
    return
  }
  const id = $(this).parent().siblings().data('id')
  const element = $(this)
  $.ajax({
    type: "DELETE",
    url: "http://127.0.0.1:8000/api/todo-list/" + id,
    dataType: "json",
    success: function(result) {
      if (result.status == 200) {
        // Delete element have been deleted
        element.parent().parent().remove()
        // Looping number
        let index = 0
        while (index <= $('.number').length) {
          $('.number:eq(' + index + ')').html(index+1)
          index++
        }
        alert('Data deleted successfully')
      } else {
        alert('Eror')
      }
    }
  })
})

// Line Through
$('.list-group').on('click', '.list-item', function() {
  $(this).toggleClass('line-through');
})

// Looping number
let index = 0
while (index <= $('.number').length) {
  $('.number:eq(' + index + ')').html(index+1)
  index++
}
