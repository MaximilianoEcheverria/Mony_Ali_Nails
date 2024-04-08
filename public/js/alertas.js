//alerta nuevo servicio creado correctamente
btnServicioSubmit = document.getElementById("btnServicioSubmit")

btnServicioSubmit.addEventListener("submit",nuevoServicioOk())

function nuevoServicioOk() {
    Swal.fire({
        icon: 'success',
        title: 'El servicio fue creado correctamente',
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