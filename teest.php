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
    if(isset($_POST['buy'])){
        $e=$_SESSION['email'];
        $u=$_SESSION['user_id'];
        $result = $conn->query("SELECT * FROM users WHERE `EMAIL`='$e' OR `USERNAME`='$u'");
        $row=$result->fetch_assoc();
        $_SESSION['count']=$_SESSION['count']+1;
        $row['COUNT']=$_SESSION['count']+1;
        header("Location: home_copy.php");
                    exit();
        
    }
    else{

    if ( isset($_POST['user_id']) 
        && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])) {
        $mail = validate($_POST['email']);
        $user_id = validate($_POST['user_id']);
        $password = validate($_POST['password']);
        $_SESSION['email']=$mail;
        $_SESSION['user_id']=$user_id;    
    
            $result = $conn->query("SELECT * FROM users WHERE `EMAIL`='$mail' OR `USERNAME`='$user_id'");
            $row=$result->fetch_assoc();
            $_SESSION['count']=$row['COUNT'];
            if ($result->num_rows != 0) {
                    $_SESSION['temp'] = 1;
                    header("Location: login2.php?error=member already exist");
                    exit();
            }else{ 
                
                    
                    $insert = $conn->query("INSERT INTO `users`(`USERNAME`, `EMAIL`, `PASSWORD`)
                                        VALUES ('$user_id','$mail','$password')"); 

                
                    if($insert){ 
                        $result = $conn->query("SELECT * FROM users WHERE `EMAIL`='$mail' AND `PASSWORD`='$password' AND `USERNAME`='$user_id'");
            
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                
                            if ($row['USERNAME'] == $user_id) {
                
                                echo "Logged in!";
                 
                                $_SESSION['USERNAME'] = $row['USERNAME'];
                
                                header("Location: home.html");
                
                                exit();
                
                            }
                            else{ 
                                echo "registeration failed"; 
                            } 
                
            }
                     
                }else{
                    header("Location: login.html"); //kant regestration:
                    echo("registration error");
                }
        }
            
    
    }
    else{
    
        header("Location: login.html"); //kant regestration:
        echo("registration error");
        exit();
    
    }
}
}
else{
    // the differance between (die) and (echo) that echo will just write the nessage up but die will remove every thing then write the message in a wite website
    die("Connection failed: " . $conn->connect_error);
    //echo("not connected to the sever");
}
    
?>
