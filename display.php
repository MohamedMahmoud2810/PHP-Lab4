<?php

include 'config.php';


$sql = 'SELECT * FROM user ';
mysqli_select_db ($conn,$dbname);

$result = mysqli_query($conn,$sql);

if(! $result){
    die('could not retrieve data<br>'.mysqli_error($conn));
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM user WHERE user_id = '$id' ";
    $run = mysqli_query($conn,$delete);

    if($run){
        header("location:display.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        h1{
            
        }
        .btn-success{
            margin-left: 1000px;
            width: 250px;
            margin-bottom: 150px ;
        }
        i{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class = "container">
    <h1>User View Datails</h1>
    <button type="button" onclick = "goToForm()" class="btn btn-success">Add New User</button>
    </div>
    <table class="table table-striped table-bordered container">
        <thead>
            <tr>
                <th scope="col-lg-6">ID</th>
                <th scope="col-lg-6">Name</th>
                <th scope="col-lg-6">Email</th>
                <th scope="col-lg-6">Gender</th>
                <th scope="col-lg-6">Mail Status</th>
                <th scope="col-lg-6" name="action">Action</th>
            </tr>
        </thead>

        
            
        
            
        <?php 
            if(mysqli_num_rows($result) > 0 ){
            
            while($data = mysqli_fetch_assoc($result)) {
        ?>
            <tbody>
                <tr class="col-sm-6">
                    
                    <td> <?php echo $data['user_id'] ?> </td>
                    <td> <?php echo $data['user_name'] ?> </td>
                    <td> <?php echo $data['user_email'] ?> </td>
                    <td> <?php echo $data['gender'] ?> </td>
                    <td> <?php echo $data['mail_status'] ?> </td>
                    <td col-sm-8>   <a href="view.php?id=<?= $data['user_id']; ?>">
                                    <i class="fa-sharp fa-solid fa-eye"></i>    
                                </a>

                                <a href="edit.php?id=<?=$data['user_id'];?>">
                                    <i class="fa-solid fa-pen-to-square"></i> 
                                </a>

                                <a href='?id=<?=$data['user_id'];?>'>
                                    <i class="fa-solid fa-trash-can" >  </i>
                                </a>
                    
                    
                    
                    </td>
                </tr>

                <?php 
                }} else{ ?>
                    <tr>
                        <td colspan = "8">No Data found</td>
                    </tr>
                    </tbody>
                }
                
                <?php } ?>
            
        
    </table>
    
    <script src="https://kit.fontawesome.com/6eae3aa998.js" crossorigin="anonymous"></script>
    <script>
        function goToForm() {
            window.location.href="form.php";
        }
    </script>
</body>
</html>