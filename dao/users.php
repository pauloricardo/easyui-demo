<?php
include_once '../../config/db.php';
class Users {

    public $connection;
    function __construct(){
       $this->connection = DB::connect('localhost','php_test','root','root');
    }
    public function select(){
        $select = $this->connection->query("SELECT * FROM usuarios ORDER BY id");
        $stmt = $select->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
    public function update($id, $values){
        $updateFields = [];
        foreach($values as $key => $value){
            $updateFields[] = $key . ' = ' . "'".$value."'";    
        }
        $joinUpdateFields = join(',', $updateFields);
        $updateStmt = $this->connection->prepare("UPDATE usuarios SET usuario = :usuario, telefone = :telefone WHERE id = :id");
        try{
            return $updateStmt->execute([
                'usuario' => $values['usuario'],
                'telefone' => $values['telefone'],
                'id' => $id
           ]);
        }catch(\PDOException $e){
            var_dump($e->getMessage());
        }
    }
    public function insert($values){
        $result = [];
        $prpInsert = $this->connection->prepare("INSERT INTO usuarios(usuario,telefone) VALUES(:usuario, :telefone)");
        try{
            $prpInsert->execute($values);
            return true;
        }catch(\PDOException $e){
            var_dump($e->getMessage());
        }
    }
    public function delete(){

    }
}


?>