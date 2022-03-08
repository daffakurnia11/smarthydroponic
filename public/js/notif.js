const flashdata = $('#flash-data').data('flashdata');

if (flashdata) {
  // Login Gagal
  if (flashdata == 'Login Failed') {
    Swal.fire({
      icon: 'error',
      title: 'Access Denied!',
      text: 'Wrong username or password, please try again!',
      confirmButtonColor: '#c6384d',
    })
  }
  // No Data
  if (flashdata == 'No Data') {
    Swal.fire({
      icon: 'error',
      title: 'No Filter Data!',
      text: 'Please configure the filter data!',
      confirmButtonColor: '#c6384d',
    })
  }
  // New article has been created!
  if (flashdata == 'New article has been created!') {
    Swal.fire({
      icon: 'success',
      title: 'Article Created!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
  // The article has been updated!
  if (flashdata == 'The article has been updated!') {
    Swal.fire({
      icon: 'success',
      title: 'Article Updated!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
  // The article has been deleted!
  if (flashdata == 'The article has been deleted!') {
    Swal.fire({
      icon: 'success',
      title: 'Article Deleted!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
  // Jenis tanaman berhasil ditambahkan
  if (flashdata == 'Jenis tanaman berhasil ditambahkan') {
    Swal.fire({
      icon: 'success',
      title: 'Tanaman berhasil ditambahkan!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
  // Gambar tanaman harus diupload!
  if (flashdata == 'Gambar tanaman harus diupload!') {
    Swal.fire({
      icon: 'error',
      title: 'Tidak ada gambar!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
  // Jenis tanaman berhasil diubah
  if (flashdata == 'Jenis tanaman berhasil diubah') {
    Swal.fire({
      icon: 'success',
      title: 'Tanaman berhasil diubah!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
  // Jenis tanaman berhasil dihapus
  if (flashdata == 'Jenis tanaman berhasil dihapus') {
    Swal.fire({
      icon: 'success',
      title: 'Tanaman berhasil dihapus!',
      text: flashdata,
      confirmButtonColor: '#c6384d',
    })
  }
}

$(function () {
  $('#deleteButton').on('click', function (e) {
    e.preventDefault();
    Swal.fire({
      title: 'Deleting data?',
      text: "The deleted data cannot be restored.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $(this).parent('form').submit();
      }
    })
  })
})