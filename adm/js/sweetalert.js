///sweet alert.!!
$(".del").on('click', function(e) {
  e.preventDefault();
  const href = $(this).attr('href');
  swal.fire({
    title: 'anda Yakin.?',
    icon: 'warning',
    text: 'Data Akan di Hapus',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtoncolor: '#F4D03F',
    confirmButtonText: 'Hapus'
  }).then((result) => {
    if (result.isConfirmed) {
      // return true;
      document.location.href = href;
    }
  })
})
//update
$(".update").on('click', function(e) {
  e.preventDefault();
  // const submit = $(this).attr('submit');
  swal.fire({
    title: 'Simpan Perubahan.?',
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    confirmButtonText: 'Simpan'
  }).then((result) => {
    if (result.value) {
      $('form.updateform').submit()
    }
  })
})