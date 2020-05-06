<?php
class mesa
{
	private $pdo;

    public $id_mesa;
    public $nombre;
    public $id_lugar;
 
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM mesa");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_mesa)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM mesa WHERE id_mesa = ?");
			$stm->execute(array($id_mesa));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_mesa)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM mesa WHERE id_mesa = ?");

			$stm->execute(array($id_mesa));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE mesa SET
						nombre          = ?,
						id_lugar        = ?
				    WHERE id_mesa = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->id_lugar,
                        $data->id_mesa
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(mesa $data)
	{
		try
		{
		$sql = "INSERT INTO mesa (id_mesa,nombre,id_lugar)
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_mesa,
                    $data->nombre,
                    $data->id_lugar,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function ListarID()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM mesa");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function ListarOrgano()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM votos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
}
