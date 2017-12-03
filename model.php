<?php
require ("connection.php");
    
class Model 
{
    public function getExercises($limit) 
    {
        $connectionHandler = new Connection;
        $connection = $connectionHandler->connect();

        try {
            $sql = 
            'SELECT `exercise_name` FROM `exercises`
            ORDER BY RAND()
            LIMIT :limit;';
            $statement = $connection->prepare($sql);
            $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
                echo 'Statement failed: ' . $e->getMessage();
                die;
        }

        $result = $statement->fetchAll();
        $connection = null;

        return $result;
    }
}