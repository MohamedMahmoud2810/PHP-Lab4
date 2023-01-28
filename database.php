<?php
//create db & select
    require_once 'config.php';

    if(isset($_POST['update_user'])){

        $user_id = $_POST['user_id'];
        $name = $_POST['username'];
        $email = $_POST['useremail'];
        $gender = $_POST['gender'];
        $status = $_POST['check'];

        $sql = "UPDATE SET user user_name = '$name' ,
                                user_email = '$email' ,
                                gender = '$gender',
                                mail_status = '$status'
                                where user_id = '$user_id' ";
        $run = mysqli_query($conn,$sql);

        if($run){
            echo "user updated successfully";
            
            
        }else{
            echo "can not update user";
            
            
        }
        
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['username'];
        $email = $_POST['useremail'];
        $gender = $_POST['gender'];
        $status = $_POST['check'];

    

        // $sql = 'INSERT INTO user (user_name , user_email , gender , mail_status) 
        // VALUES ("$name" , "$email" , "$gender" , "$status") ';

        $sql = "INSERT INTO user (user_name , user_email , gender , mail_status)
        VALUES ('. $name. ', '$email' , '$gender' , '$status') ";
        $retval = mysqli_query ($conn,$sql);

        header("Location: display.php");

    }

    
    
    

    
    
?>
