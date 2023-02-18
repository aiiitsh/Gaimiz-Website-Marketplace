<?php
    session_start();
?>
<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "gaimiz"; 

$conn = new mysqli($host,$username,$password,$database);
//if($conn->connect_error)
  //  die("Connection failed: " . $conn->connect_error);

    function validate($input){

        $input= strip_tags($input);
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    $_SESSION['temp']=0;
  if($conn){  
    if ( isset($_POST['user_id'])&&  isset($_POST['password']) ) { 
        $user_id = validate($_POST['user_id']);
        $password = validate($_POST['password']);
        $_SESSION['password']=$password;
        $_SESSION['user_id']=$user_id;
    
            $result = $conn->query("SELECT * FROM users WHERE `USERNAME`= '$user_id' AND `PASSWORD`='$password'");
            
            if ($result->num_rows != 0) {
                    $_SESSION['temp'] = 1;
                    header("Location: home.html");
                    exit();
            }else{ 
                
                header("Location: login.php");
                echo("try agin or make a new account");
                    
        }
            
    
    }
   
}
else{
    // the differance between (die) and (echo) that echo will just write the nessage up but die will remove every thing then write the message in a wite website
    die("Connection failed: " . $conn->connect_error);
    //echo("not connected to the sever");
}
    
?>
