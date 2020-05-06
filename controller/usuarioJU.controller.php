<?php
//Se incluye el modelo donde conectará el controlador.
require_once '../model/usuarioJU.php';
if(!isset($_SESSION["name"])){
    session_start();
    require_once '../view/error_usuarioUSJU.php'; // esto no se esta mostrando cuando no esta logueado
  }else{

class UsuarioJUController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new usuarioJU();
    }

    //Llamado plantilla principal
    public function IndexUJU(){
        require_once '../view/headerUSJU.php';
        require_once '../view/usuario/usuarioJU.php';
        require_once '../view/footerUSJU.php';
    }

    //Llamado a la vista usuarioJU-editar
    public function Crud(){
        $pvd = new usuarioJU();

        //Se obtienen los datos del usuario a editar.
        if(isset($_REQUEST['codigo'])){
            $pvd = $this->model->Obtener($_REQUEST['codigo']);

        }

        //Llamado de las vistas.
        /*
        require_once '../view/headerUSJU.php';
        require_once '../view/usuario/usuarioJU-editar.php';
        require_once '../view/footerUSJU.php';
        */
    }

    //Llamado a la vista usuario-nuevo
    public function Nuevo(){
        $pvd = new usuarioJU();

        //Llamado de las vistas.
        require_once '../view/headerUSJU.php';
        require_once '../view/usuario/usuario-nuevo.php';
        require_once '../view/footerUSJU.php';
    }

    //Método que registrar al modelo un nuevo usuario.
    public function Guardar(){
        $pvd = new usuarioJU();

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
        header('Location: ../view/indexUSJU.php');
    }

    //Método que modifica el modelo de un usuario.
    public function Editar(){
        $pvd = new usuarioJU();

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

        header('Location: ../view/indexUSJU.php');
    }

    //Método que elimina la tupla usuario con el codigo dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['codigo']);
        header('Location: ../view/indexUSJU.php');
    }

    
}
}//fin del else
?>