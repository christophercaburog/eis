<?php
if (isset($_POST['edit'])) {
    
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $num = $_POST['num'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $editHandler = new Update();
    $editHandler->getDetails ($name, $last_name, $num, $email, $id);
    $editHandler->setDetails();


}else {
    echo "none";
}


class Update {

    public $name;
    public $last_name;
    public $number;
    public $email;
    public $id;

    function setDetails () {

        require('server.php');

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "UPDATE user SET name='$this->name', last_name='$this->name', 
                num='$this->num', email='$this->email' 
                WHERE id=$this->id";

                // Prepare statement
                $stmt = $conn->prepare($sql);

                // execute the query
                $stmt->execute();

                // echo a message to say the UPDATE succeeded
                echo $stmt->rowCount() . " records UPDATED successfully";
                header('Location:../index.php');
                }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }

            $conn = null;

    }
    function getDetails ($name, $last_name, $num, $email, $id) {

                $this->name=$name;
                $this->last_name=$last_name;
                $this->num=$last_name;
                $this->email=$email;
                $this->id=$id;


    }
}
            
            
?>