function actualizarOk() {
    Swal.fire({
        icon: 'success',
        title: 'Modificado correctamente!',
        text: 'El usuario fue modificado correctamente',
        showConfirmButton: false,
        timer: 1500,
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      })
}
function actualizarError() {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Error!',
        showConfirmButton: false,
        timer: 1500,
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      }) 
}