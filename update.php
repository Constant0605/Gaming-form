<?php

// ici les codes du haut sont utiliser pour update les infrmations dans le tableau
include 'connect.php';
$id=$_GET['updateid']; // ici on a creer une variable id qui vas store tout les id
$sql="Select * from `employees` where id=$id"; // ici ca veut dire qu'il vas selectionner dans le tableau employees l'id que l'utilisateur a selectionner
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$fullname=$row["fullname"];
$age=$row["age"];
$birthday=$row["birthday"];
$gender=$row["gender"] ;
$salary=$row["salary"];


if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];
    
    $sql="update `employees` set id=$id, fullname='$fullname', age='$age', birthday='$birthday', gender='$gender', salary='$salary' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Form</title>

    <link href="css/main.css" rel="stylesheet" media="all">
</head>


<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Employees Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Full name</label>
                                    <input class="input--style-4" type="text" name="fullname" value=<?php echo $fullname?> >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age</label>
                                    <input class="input--style-4" type="number" name="age" value=<?php echo $age?>>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        
                                        <input class="input--stylee-4 js-datepicker" type="date" name="birthday" value=<?php echo $birthday?>>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label   name="gender" class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value=<?php echo $gender?>>
                                            <span name="gender" class="checkmark"></span>
                                        </label>
                                        <label name="gender" class="radio-container" value="Female">Female
                                            <input type="radio" name="gender" value=<?php echo $gender?>>
                                            <span  name="gender" class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Salary</label>
                                    <input class="input--style-4" type="number" name="salary" value=<?php echo $salary?>>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
