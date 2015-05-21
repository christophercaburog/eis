<?php


if(isset($_POST['add'])) {
    
    $name = $_POST['name']; 
    $last_name = $_POST['last_name'];  
    $num = $_POST['num'];  
    $email = $_POST['email'];   



    $add_holder = new Add();
    $add_holder->getDetails($name, $last_name, $num, $email);
    $add_holder->setDetails();
   

} 


//class

class Add {

        public $name;
        public $last_name;
        public $num;
        public $email;

        function setDetails () {
        require_once('server.php');

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO user (id, name, last_name, num, email)
                VALUES (NULL, '$this->name', '$this->last_name', '$this->num', '$this->email')";
                
                $conn->exec($sql);
                echo "New record created successfully";
                
                }

            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;
               
                header('Location:../add.php');
        }
        function getDetails ($name, $last_name, $num, $email) {

                $this->name=$name;
                $this->last_name=$last_name;
                $this->num=$num;
                $this->email=$email;
                
        }
        function output() {
            echo $this->name;
        }

            

}




?>