function fntDelCliente(){

    swal({
        title: "Realmente quiere eliminar el registro?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("El registro ha sido eliminado!", {
            icon: "success",
          });
        } else {
          swal("El registro no se ha eliminiado!");
        }
      });

}

