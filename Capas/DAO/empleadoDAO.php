<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/empleados.php');
require_once('../BOL/persona.php');

class empleadoDAO
{
  private $pdo;
  public function __CONSTRUC();
{
          $dba = NEW DBAccess();
          $this->pdo = $dba->get_connection();
}

public function insertarEmpleado(empleado $empleado, persona $persona)
    {
        try {
            $statement = $this->pdo->prepare("call up_insertar_persona_empleados(?,?,?,?,?,?,?,?,?,?,?,?)");

            $statement->bindParam(1,$persona->__GET('nombres'));
            $statement->bindParam(2,$persona->__GET('apellidos'));
            $statement->bindParam(3,$persona->__GET('dni'));
            $statement->bindParam(4,$persona->__GET('direccion'));
            $statement->bindParam(5,$persona->__GET('fecnac'));
            $statement->bindParam(6,$persona->__GET('genero'));
            $statement->bindParam(7,$persona->__GET('email'));
            $statement->bindParam(8,$persona->__GET('telefono'));
            $statement->bindParam(9,$persona->__GET("estado"));
            $statement->bindParam(10,$persona->__GET('tipo'));

            $statement->bindParam(11,  $empleado->__GET('turno'));
            $statement->bindParam(12, $empleado->__GET('cargo'));



            $statement->execute();
            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e)
         {
            die("insertarempleado function  ->" . $e->getMessage());
        }
    }
}

 ?>
