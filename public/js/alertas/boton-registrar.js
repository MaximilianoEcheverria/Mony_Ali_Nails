function registrarOk() {
  Swal.fire({
    icon: 'success',
    title: 'Registrado!',
    text: 'El usuario fue registrado correctamente',
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
function registrarErrorUsuario() {
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El usuario ya existe!',
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
function registrarErrorMail() {
  Swal.fire({
    icon: 'error',
    title: 'Error',
    text: 'El mail ya esta registrado!',
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