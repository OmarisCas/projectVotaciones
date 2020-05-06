<?php
//Se incluye el modelo donde conectará el controlador.
require_once '../model/usuario.php';
if(!isset($_SESSION["name"])){
    session_start();
    require_once '../view/error_usuarioUS.php'; // esto no se esta mostrando cuando no esta logueado
  }else{

class UsuarioController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new usuario();
    }

    //Llamado plantilla principal
    public function IndexU(){
        require_once '../view/header.php';
        require_once '../view/usuario/usuario.php';
        require_once '../view/footer.php';
    }

    //Llamado a la vista usuario-editar
    public function Crud(){
        $pvd = new usuario();

        //Se obtienen los datos del usuario a editar.
        if(isset($_REQUEST['codigo'])){
            $pvd = $this->model->Obtener($_REQUEST['codigo']);
        }

        //Llamado de las vistas.
        require_once '../view/header.php';
        require_once '../view/usuario/usuario-editar.php';
        require_once '../view/footer.php';
  }

    //Llamado a la vista usuario-nuevo
    public function Nuevo(){
        $pvd = new usuario();

        //Llamado de las vistas.
        require_once '../view/header.php';
        require_once '../view/usuario/usuario-nuevo.php';
        require_once '../view/footer.php';
    }

    //Método que registrar al modelo un nuevo usuario.
    public function Guardar(){
        $pvd = new usuario();

        //Captura de los datos del formulario (vista).
        $pvd->codigo = $_REQUEST['codigo'];
        $pvd->nombre1 = $_REQUEST['nombre1'];
        $pvd->nombre2 = $_REQUEST['nombre2'];
        $pvd->apellido1 = $_REQUEST['apellido1'];
		$pvd->apellido2 = $_REQUEST['apellido2'];
		$pvd->password = $_REQUEST['password'];
		$pvd->id_tipo_usuario = $_REQUEST['id_tipo_usuario'];
		$pvd->id_rol = $_REQUEST['id_rol'];
		$pvd->id_programa = $_REQUEST['id_programa'];
		$pvd->id_mesa = $_REQUEST['id_mesa'];
		$pvd->id_estado_usuario = $_REQUEST['id_estado_usuario'];

        //Registro al modelo usuario.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: ../view/indexUS.php');
    }

    //Método que modifica el modelo de un usuario.
    public function Editar(){
        $pvd = new usuario();

        $pvd->codigo = $_REQUEST['codigo'];
        $pvd->nombre1 = $_REQUEST['nombre1'];
        $pvd->nombre2 = $_REQUEST['nombre2'];
        $pvd->apellido1 = $_REQUEST['apellido1'];
		$pvd->apellido2 = $_REQUEST['apellido2'];
		$pvd->password = $_REQUEST['password'];
		$pvd->id_tipo_usuario = $_REQUEST['id_tipo_usuario'];
		$pvd->id_rol = $_REQUEST['id_rol'];
		$pvd->id_programa = $_REQUEST['id_programa'];
		$pvd->id_mesa = $_REQUEST['id_mesa'];
		$pvd->id_estado_usuario = $_REQUEST['id_estado_usuario'];

        $this->model->Actualizar($pvd);

        header('Location: ../view/indexUS.php');
    }

    //Método que elimina la tupla usuario con el codigo dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['codigo']);
        header('Location: ../view/indexUS.php');
    }
}
}//fin del ese
?>
