function cerrarSJU(){
		swal({
			title: "¿Desea cerrar sesión?",
			//text: "¿Desea cerrar sesión?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
		if (willDelete) {
			swal(" ", {
				icon: "success",
				title: "En segundos saldrá del sistema! ",
			});
			setTimeout("location.href='../model/desconectar.php'", 1500);
			}else{
				swal("Solicitud cancelada!", " ", "error");
				//mandar a recargar la pagina
				setTimeout("location.href='../view/indexUSJU.php'", 1000);
			}
		});
	//window.close();
}