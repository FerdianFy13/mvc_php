$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#titleModalLabels').html('Insert Data Students')
    $('.modal-footer button[type=submit]').html('Insert Data')
  })

  $('.tampilModalUbah').on('click', function () {
    $('#titleModalLabels').html('Update Data Students')
    $('.modal-footer button[type=submit]').html('Update Data')

    const id = $(this).data('id')
    // console.log(id)

    $.ajax({
      url: 'http://localhost:8080/phpmvc/public/mahasiswa/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        // $('#name').val(data.name)
        // $('#nim').val(data.nim)
        // $('#major').val(data.major)
        // // $('#jurusan').val(data.jurusan)
        // $('#id').val(data.id)
        console.log(data)
      },
    })
  })
})
