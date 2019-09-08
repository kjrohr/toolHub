<?php 

function fillSelectForm() {
    $host = 'localhost';
    $db   = 'mtg';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $setArray = array();

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
        
    }
    
      try{
        // Create prepared statement
        $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'mtg'";
        $stmt = $pdo->prepare($sql);
        
        // Execute the prepared statement
        $stmt->execute();
        foreach ($stmt as $row)
        {
          $set = $row['table_name'];
          //echo $set;
          array_push($setArray, $set);
        }
      } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
      }
      
      // Close connection
      unset($pdo);
      return $setArray;
}

  

?>