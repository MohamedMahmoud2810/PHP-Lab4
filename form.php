<?php
include 'database.php';
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
        form{
            
            margin:10px 180px;

        }
        .form-group{
            margin-top:50px
        }
        .btn{
            padding-left:20px;
            margin-left:40px;
            
        }
        .header{
            padding : 30px;
            margin-left:150px;
            
        }
        .h{
            font-size:25px;
            color:grey;
            
        }
        h2{
            border-bottom : 1px solid grey;
            width: 1000px;
            margin-left:170px;
        
        }
    </style>
    </head>
<body>
    <h1 class="header">User Registration Form</h1>
    <h2></h2>
    <p class="header h">Please fill this form and submit to add user in data base</p>
    <form  method = "POST" >
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="inputEmail3" name = "username" placeholder="Name" required>
        </div>
    </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="inputEmail3" name = "useremail" placeholder="Email" required>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male" >
            <label class="form-check-label" for="gender1">
                Male
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female">
            <label class="form-check-label" for="gender2">
                Female
            </label>
        
        </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-2">Email-Check</div>
        <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="hidden" name = "check" id="gridCheck1" value = "No">
            <input class="form-check-input" type="checkbox" name = "check" id="gridCheck1" value = "Yes">
            <label class="form-check-label" for="gridCheck1">
            Recieve Emails From Us
            </label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" name = "submit" class="btn btn-primary">Sign in</button>
        <button type="reset" class="btn btn-secondary" onclick="goToDetails()">cancel</button>
        </div>
    </div>
    </form>

    <script>
        function goToDetails() {
            window.location.href="display.php";
        }
    </script>
</body>
</html>