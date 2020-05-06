<?php
    //Se incluye el modelo donde conectará el controlador.
    require_once '../model/candidato.php';
    if(!isset($_SESSION["name"])){
        session_start();
        require_once '../view/error_usuarioCA.php'; // esto no se esta mostrando cuando no esta logueado
    }else{

class CandidatoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new candidato();
    }

    //Llamado plantalla principal
    public function IndexC(){
        require_once '../view/header.php';
        require_once '../view/candidato/candidato.php';
        require_once '../view/footer.php';
    }

    public function Crud(){
        $prod = new candidato();

        if(isset($_REQUEST['id_candidato'])){
            $prod = $this->model->Obtener($_REQUEST['id_candidato']);
        }

        require_once '../view/header.php';
        require_once '../view/candidato/candidato-editar.php';
        require_once '../view/footer.php';
    }

    public function Nuevo(){
        $prod = new candidato();

        require_once '../view/header.php';
        require_once '../view/candidato/candidato-nuevo.php';
        require_once '../view/footer.php';
    }

    public function Guardar(){
        $prod = new candidato();

        $prod->id_candidato = $_REQUEST['id_candidato'];
        $prod->numero = $_REQUEST['numero'];
        $prod->id_organo = $_REQUEST['id_organo'];
        $prod->foto = $_REQUEST['foto'];
        //echo $prod->foto;
        //echo $this->model->Registrar($prod);
        $this->model->Registrar($prod);
    }

    public function Editar(){
        $prod = new candidato();

        $prod->id_candidato = $_REQUEST['id_candidato'];
        $prod->numero = $_REQUEST['numero'];
        $prod->id_organo = $_REQUEST['id_organo'];
        $prod->foto = $_REQUEST['foto'];

        $this->model->Actualizar($prod);

        header('Location: ../view/indexCA.php?c=candidato');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_candidato']);
        header('Location: ../view/indexCA.php');
    }
}
}//fin del else
?>