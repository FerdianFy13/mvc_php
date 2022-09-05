$(function () {
  // insert data
  $('.tombolTambahData').on('click', function () {
    $('#titleModalLabels').html('Insert Data Students')
    $('.modal-footer button[type=submit]').html('Insert Data')
    $('#name').val('')
    $('#nim').val('')
    $('#major').val('')
    $('#id').val('')
  })

  // update data
  $('.tampilModalUbah').on('click', function () {
    $('#titleModalLabels').html('Update Data Students')
    $('.modal-footer button[type=submit]').html('Update Data')
    $('.modal-body form').attr(
      'action',
      'http://localhost:8080/phpmvc/public/mahasiswa/update',
    )
    const id = $(this).data('id')
    // console.log(id)

    // ajax query
    $.ajax({
      url: 'http://localhost:8080/phpmvc/public/mahasiswa/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#name').val(data.name)
        $('#nim').val(data.nim)
        $('#major').val(data.major)
        $('#id').val(data.id)
        console.log(data)
      },
    })
  })
})
