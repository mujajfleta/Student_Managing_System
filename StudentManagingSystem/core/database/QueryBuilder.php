<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        
        try {
            $statement = $this->pdo->prepare($sql);
            
            $statement->execute($parameters);
        } catch (Exception $e) {
            
           echo $e->getMessage();
        }
    }

    public function selectUserById($id){
        $statement = $this->pdo->prepare("select * from perdoruesi where user_id='$id' limit 1");
    
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectUserByEmail($email){
        $statement = $this->pdo->prepare("select * from perdoruesi where email='$email' limit 1");
        
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectDetyraByVleresimi($table){
        $statement = $this->pdo->prepare("select * from {$table} where vleresimi is NULL");
    
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectAssigmentsByVleresimi($table){
        $statement = $this->pdo->prepare("select * from {$table} where vleresimi is NOT NULL");
    
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUserProfile($user_id, $username,$password){
        $sql = "update perdoruesi set username='$username',password='$password'  where user_id ='$user_id'";
        try {
            $statement = $this->pdo->prepare($sql);
            
            $statement->execute($parameters);
        } catch (Exception $e) {
            
           echo $e->getMessage();
        }
    }

    public function selectAssigmentsByID($make){
        $statement = $this->pdo->prepare("select * from detyrat_e_dorezuara where ID='$make'");
    
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateVleresimi($ID,$vleresimi){
        $sql="update detyrat_e_dorezuara set vleresimi='$vleresimi' where ID='$ID'";
        try {
            $statement = $this->pdo->prepare($sql);
            
            $statement->execute();
        } catch (Exception $e) {
            
           echo $e->getMessage();
        }
    }

    public function selectIDDetyra($table){
        $statement = $this->pdo->prepare("SELECT ID_detyra FROM detyrat");
    
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_BOTH);
    }

    public function getUsersPassword($user_id){
        $statement = $this->pdo->prepare("SELECT password from perdoruesi where user_id='$user_id'");
    
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_BOTH);
    }

}