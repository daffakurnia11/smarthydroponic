const flashdata = $('#flash-data').data('flashdata');

if (flashdata) {
  // Login Gagal
  if (flashdata == 'Login Failed') {
    Swal.fire({
      icon: 'error',
      title: 'Akses Ditolak!',
      text: 'Username / password salah! Silakan ulangi kembali.',
      confirmButtonColor: '#c6384d',
    })
  }
  // No Data
  if (flashdata == 'No Data') {
    Swal.fire({
      icon: 'error',
      title: 'Data Kosong!',
      text: 'Silakan atur waktu filter dahulu.',
      confirmButtonColor: '#c6384d',
    })
  }
}