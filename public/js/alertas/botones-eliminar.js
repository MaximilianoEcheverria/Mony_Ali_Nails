function eliminarTurno() {
    Swal.fire({
    title: 'Estas seguro?',
    text: "El usuario va a ser eliminado para siempre!",
    icon: 'warning',
    showCancelButton: true,
    cancelButtonColor: '#3085d6',
    confirmButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Eliminado!',
        'El usuario se elimino correctamente',
        'success'
      )
    }
  })
}