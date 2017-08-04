<?php
try{
    new \PDO("mysql:host=localhost;dbname=php_test","root","root");
    echo "Conexão efetuada com sucesso!";
}catch(\PDOException $e){
    echo $e->getMessage() . '\n';
}
