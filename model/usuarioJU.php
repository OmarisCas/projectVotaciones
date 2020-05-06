<?php
class usuarioJU
{
	//Atributo para conexión a SGBD
	private $pdo;

	//Atributos del objeto usuario
    public $codigo;
    public $nombre1;
    public $nombre2;
    public $apellido1;
	public $apellido2;
	public $password;
	public $id_tipo_usuario;
	public $id_rol;
	public $id_programa;
	public $id_mesa;
	public $id_estado_usuario;

	//Método de conexión a SGBD.
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

	//Este método selecciona todas las tuplas de la tabla
	//usuario en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE id_rol != 'A'");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del usuario a partir del codigo
	//utilizando SQL.
	public function Obtener($codigo)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el codigo del usuario.
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE codigo = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro codigo.
			$stm->execute(array($codigo));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla usuario dado un codigo.
	public function Eliminar($codigo)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuario WHERE codigo = ?");

			$stm->execute(array($codigo));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el codigo del usuario.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE usuario SET nombre1 = ?, nombre2 = ?, apellido1 = ?, apellido2 = ?, password = ?, id_tipo_usuario = ?, id_rol = ?, id_programa = ?, id_mesa = ?, id_estado_usuario = ? WHERE codigo = ?";
			
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)->execute(array($data->nombre1,$data->nombre2,$data->apellido1,$data->apellido2,$data->password,$data->id_tipo_usuario,$data->id_rol,$data->id_programa,$data->id_mesa,$data->id_estado_usuario,$data->codigo));
		}catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo usuario a la tabla.
	public function Registrar(usuario $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO usuario (codigo,nombre1,nombre2,apellido1,apellido2,password,id_tipo_usuario,id_rol,id_programa,id_mesa,id_estado_usuario)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->codigo,
                    $data->nombre1,
                    $data->nombre2,
                    $data->apellido1,
					$data->apellido2,
					$data->password,
					$data->id_tipo_usuario,
					$data->id_rol,
					$data->id_programa,
					$data->id_mesa,
					$data->id_estado_usuario,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function ListarTipoUsuario()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM tipo_usuario");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}
	
	public function ListarRol()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM rol");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}
	
	public function ListarPrograma()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM programa");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}
	
	public function ListarMesa()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM mesa");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}
	
	public function ListarEstado()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM estado_usuario");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}	
}
