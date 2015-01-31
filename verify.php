<?php 

include_once("./libs/global.conf.php");

if(isset($_POST['submit'])){ 
     
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $usr = $_POST['username']; 
    //$pas = hash('sha256', mysql_real_escape_string($_POST['password'])); 
    $pas = $_POST['password']; 
    $query = $dbc -> query("SELECT * FROM Admins  
        WHERE Username='$usr' AND 
        Password='$pas' 
        LIMIT 1");

    $results = $query -> fetch_array();

    if(empty($results)){ 
        header("Location: login.php"); 
        exit; 
    }else{ 
        session_start(); 
        $_SESSION['username'] = $results -> Username; 
        $_SESSION['logged'] = TRUE; 
        header("Location: admin.php"); // Modify to go to the page you would like 
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.php");     
    exit; 
} 
?>
