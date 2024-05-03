<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

/*
    if(!empty($name)){
        if(!empty($email)){
            if(!empty($password)){*/
                
                $server = "localhost";
                $username="root";
                $password="";
                $dbname="login_page";
                $conn = new mysqli($server,$username,$password,$dbname);
                 if(mysqli_connect_error()){
                   die('connect error('.mysqli_connect_error().')'.mysqli_connect_error()); 
                 }
                 else{
                    $sql = "INSERT INTO reg_table(name,email,password) values('$name','$email','$password') ";
                    if($conn->query($sql)){
                        echo"new record is inserted successfully";
                    }else{
                        echo "error:";//.$sql "<br>".$conn->error;
                    }
                 }/*
            }else{
                echo "password should not be empty";
                die();
            }

        }else{
            echo "email should not be empty";
            die();
        }
    }else{
        echo "name should not be empty";
        die();
    }
    /*
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "password: $password <br>";
   


    $con = new Mysqli("localhost","root","","login_page");
    if($con-> connect_error){
        die("failed: ".$con->connect_error);

    }else{
        $stmt = $con->prepare("select * from reg_table where email =?");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0);

    }else{
        echo"<h2> invalid</h2>";
    }
*/
?>