<?php


class Delete {

public $id;

    function getDelete () {

         require('server.php');

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
                $sql = "DELETE FROM user WHERE id=$this->id";

    
                $conn->exec($sql);
                echo "Record deleted successfully";
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;

                header('Location:./index.php');

    }
    function setId ($id) {

        $this->id = $id;
    }


}
?>