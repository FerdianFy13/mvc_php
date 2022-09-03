$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#titleModalLabels').html('Insert Data Students')
    $('.modal-footer button[type=submit]').html('Insert Data')
  })

  $('.tampilModalUbah').on('click', function () {
    $('#titleModalLabels').html('Update Data Students')
    $('.modal-footer button[type=submit]').html('Update Data')

    const id = $(this).data('id')
    console.log(id)
  })
})
