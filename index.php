 <?php
include 'connect.php';  // this is refering to the connect.php
if(isset($_POST['submit'])){ // isset is set to test if the form is submitted successfully or not
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $salary=$_POST['salary'];
    
    // sql
    $sql="insert into `employees` (fullname,age,birthday,gender,salary) values('$fullname', '$age', '$birthday', '$gender', '$salary')";
   
    // mysqli_query is used to execute sql queries such as Insert,Select etccc...
    $result=mysqli_query($con,$sql); // donc ici c'est le resultat ca va executer le $con(la variable qu'on a creer pour faire la connection) et le sql(le insert queri)
    if($result){
        echo "Data inserted successfully";
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
                                    <input class="input--style-4" type="text" name="fullname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age</label>
                                    <input class="input--style-4" type="number" name="age">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        
                                        <input class="input--stylee-4 js-datepicker" type="date" name="birthday">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label   name="gender" class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="male">
                                            <span name="gender" class="checkmark"></span>
                                        </label>
                                        <label name="gender" class="radio-container" value="Female">Female
                                            <input type="radio" name="gender" value="Female">
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
                                    <input class="input--style-4" type="number" name="salary">
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                        <div class="p-t15"> 
                            <button  class="add" type="button" name="btnemployee"><a href="display.php">Click here to view List of Employees</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
