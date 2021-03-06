<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/pacientes.php');
require_once('../BOL/persona.php');

class pacienteDAO
{
  private $pdo;
  public function __CONSTRUC();
}
          $dba = NEW DBAccess();
          $this->pdo = $dba->get_connection();
}

public function insertarPaciente(empleado $paciente, persona $persona)
    {
        try {
            $statement = $this->pdo->prepare("call up_insertar_persona_empleados(?,?,?,?,?,?,?,?,?,?,?)");

            $statement->bindValue(1,  $persona->__GET('nombres'));
            $statement->bindValue(2,  $persona->__GET('apellidos'));
            $statement->bindValue(3,  $persona->__GET('dni'));
            $statement->bindValue(4,  $persona->__GET('direccion'));
            $statement->bindValue(5,  $persona->__GET('fecnac'));
            $statement->bindValue(6,  $persona->__GET('genero'));
            $statement->bindValue(7,  $persona->__GET('email'));
            $statement->bindValue(8,  $persona->__GET('telefono'));
            $statement->bindValue(9,  $persona->__GET('estado'));
            $statement->bindValue(10, $persona->__GET('tipo'));

            $statement->bindValue(11,  $paciente->__GET('nrohistoria'));




            $statement->execute();
            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die("insertarpaciente function  ->" . $e->getMessage());
        }
    }

 ?>
