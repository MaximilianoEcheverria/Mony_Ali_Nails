function logicaBotones(mensaje) {
  switch (mensaje) {
    case 1:
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Datos de incio erroneos!',
        showConfirmButton: false,
        timer: 1500,
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      }) 
      break;
    case 2:
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
      break;
    case 3:
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
      break;
  
    default:
      break;
  }
}