<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
   
    <style type="text/css">
        .full-page {
            width: 65%;
            height: 100%;
            background-color: #f2f2f2;
            margin-left:10%;
            margin-top:10%;
            padding:20px;
        }

        .insert-box {
        }
        table {

            padding: 200px;
            width:70%;
            height: 70%;
        }
        tr
        {
            height:50px;
            
        }
        .addBox
        {
            margin-left:250px;
            
        }
body
{
  background-color:#e4bfe2;
}
    </style>
</head>
<body>

<div class="addBox">
    <div class="full-page">
        <h2>Add User</h2>
        <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="insert-box">
    

            <table>
  <tr>
    <td><label for="regNum"style=" width:250px;">Registration Number:</label></td>
    <td><input type="text" class="form-control" placeholder="Registration Number" name="regNum" id="regNum" style="height:30px; width:400px;"></td>
    </tr>
    <tr>
        <td>
    <label for=" Name_with_initials" > Name with initials &nbsp &nbsp &nbsp </label></td>
    <td>
                                    <select name="gender" id="language"style="width: 250px;height: 35px;"class="form-control">
                                        <option value="">Select gender</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Miss.">Miss.</option>
                                        <option value="Mis.">Mis.</option>
                                    </select>
                                    </td>
    </tr>
  <tr>
    <td><label for="name">Name with Initials:</label></td>
    <td><input type="text" class="form-control" placeholder="Name with Initials" name="name" id="name" style="height:30px; width:400px;"></td>
     </tr>
  <tr>
    <td><label for="initialName">Name Denoted by Initial:</label></td>
    <td><input type="text" class="form-control" placeholder="Name Denoted by Initial" name="initialName" id="initialName" style="height:30px; width:400px;"></td>
  </tr>
  <tr>
    <td><label for="password">Password:</label></td>
    <td><input class="form-control" type="password" name="password" placeholder="Password" id="password" required="" style="height:30px; width:250px;"></td>
  </tr>
  <tr>
    <td><label for="admissionDate">Admission Date:</label></td>
    <td><input type="date" class="form-control" name="admissionDate" id="admissionDate" placeholder="Admision Date" style="height:30px; width:250px;"></td>
  </tr>
  <tr>
    <td><label for="phone">Mobile Phone Number:</label></td>
    <td><input type="text" class="form-control" placeholder="Mobile Phone Number" name="phone" id="phone" style="height:30px; width:250px;"></td>
  </tr>
  <tr>
    <td><label for="address">Address:</label></td>
    <td><input type="text" class="form-control" placeholder="Address" name="address" id="address" style="height:30px; width:400px;"></td>
  </tr>
</table>




<div >
    
  <input class="btn btn-outline-primary" type="submit" name="Submit" value="Submit">&nbsp &nbsp &nbsp &nbsp 
  <input class="btn btn-outline-danger" type="reset" name="Reset" value="Reset">
</div>





            
            </div>
        </form>
    </div>

    <?php
    
    include "db_connection.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        if (!empty($_POST['regNum']) && !empty($_POST['password'])) {

            
        //    $regNum = mysqli_real_escape_string($conn, $_POST['regNum']);
          //  $password = mysqli_real_escape_string($conn, $_POST['password']);


            $regNum = mysqli_real_escape_string($conn, $_POST['regNum']);
            $gender= mysqli_real_escape_string($conn, $_POST['gender']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $initialName = mysqli_real_escape_string($conn, $_POST['initialName']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $admissionDate = mysqli_real_escape_string($conn, $_POST['admissionDate']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);

            
            $sql = "INSERT INTO students (Registration_No,gender,  Name_with_initials, Name_denoted_by_initial, password,Date_of_admission,Mobile_Phone_no ,Address) VALUES ('$regNum','$gender', '$name','$initialName','$password','$admissionDate','$phone',' $address')";

    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    // Close the database connection
    $conn->close();
    ?>
    </div>
</body>
</html>
