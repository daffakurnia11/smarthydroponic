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
}