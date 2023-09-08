const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Data berhasil ' + flashData,
        showConfirmButton: false,
        timer: 2000
      })
}

$('.tombol-hapus').on('click', function(e){
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Anda Yakin?',
    text: "Data mahasiswa akan terhapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href= href;
    }
  })
})