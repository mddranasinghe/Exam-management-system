
<?php
include "db_connection.php";
?>
<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Registration_No = $_POST["Registration_No"];
    

    $stmt = $conn->prepare("SELECT gender,Name_with_initials, Name_denoted_by_initial, Address,Mobile_Phone_no,Date_of_admission  FROM students WHERE  Registration_No= ?");
    $stmt->bind_param("s", $Registration_No);
    $stmt->execute();
    

    $result = $stmt->get_result();
    
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $gender = $row["gender"];
        $Name_with_initials = $row["Name_with_initials"];
        $Name_denoted_by_initial = $row["Name_denoted_by_initial"];
        $Address = $row["Address"];
        $Mobile_Phone_no = $row["Mobile_Phone_no"];
        $Date_of_admission = $row["Date_of_admission"];
       
    } else {
    
        $gender = "";
        $Name_with_initials = "";
        $Name_denoted_by_initial = "";
        $Address = "";
        $Mobile_Phone_no  = "";
        $Date_of_admission= "";
    }
} else {

    $Registration_No = "";
    $gender = "";
    $Name_with_initials = "";
    $Name_denoted_by_initial = "";
    $Address = "";
    $Mobile_Phone_no  = "";
    $Date_of_admission= "";
}
?>

<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    $semester=$_POST["semester"];
    $faculty=$_POST["faculty"];
    
 
    $stmt = $conn->prepare("SELECT *  FROM course_offerings WHERE  year= ? and semester= ? and faculty= ?");
    $stmt->bind_param("sss",$year,$semester,$faculty);
    $stmt->execute(); 
    

    $result = $stmt->get_result();
   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $course_code_1 = $row["course_code_1"];
        $subject_name_1 = $row["subject_name_1"];
        $course_code_2 = $row["course_code_2"];
        $subject_name_2 = $row["subject_name_2"];

        $course_code_3 = $row["course_code_3"];
        $subject_name_3 = $row["subject_name_3"];
        $course_code_4 = $row["course_code_4"];
        $subject_name_4 = $row["subject_name_4"];
        
        $course_code_5 = $row["course_code_5"];
        $subject_name_5 = $row["subject_name_5"];
        $course_code_6 = $row["course_code_6"];
        $subject_name_6 = $row["subject_name_6"];
       

        $course_code_7 = $row["course_code_7"];
        $subject_name_7 = $row["subject_name_7"];
        $course_code_8 = $row["course_code_8"];
        $subject_name_8 = $row["subject_name_8"];

        $course_code_9 = $row["course_code_9"];
        $subject_name_9 = $row["subject_name_9"];
        $course_code_10 = $row["course_code_10"];
        $subject_name_10 = $row["subject_name_10"];
    } else {
     
        $course_code_1 = "";
        $subject_name_1 = "";
        $course_code_2= "";
        $subject_name_2 = "";

        $course_code_3 = "";
        $subject_name_3 = "";
        $course_code_4= "";
        $subject_name_4 = "";

        $course_code_5= "";
        $subject_name_5 = "";
        $course_code_6= "";
        $subject_name_6 = "";

        $course_code_7 = "";
        $subject_name_7 = "";
        $course_code_8= "";
        $subject_name_8 = "";

        $course_code_9= "";
        $subject_name_9 = "";
        $course_code_10= "";
        $subject_name_10 = "";
 
    }
} else {

    $year  = "";
    $semester= "";
    $faculty = "";
    $course_code_1 = "";
    $subject_name_1 = "";
    $course_code_2= "";
    $subject_name_2 = "";
    $course_code_3 = "";
    $subject_name_3 = "";
    $course_code_4= "";
    $subject_name_4 = "";

    $course_code_5= "";
    $subject_name_5 = "";
    $course_code_6= "";
    $subject_name_6 = "";

    $course_code_7 = "";
    $subject_name_7 = "";
    $course_code_8= "";
    $subject_name_8 = "";

    $course_code_9= "";
    $subject_name_9 = "";
    $course_code_10= "";
    $subject_name_10 = "";
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>exam entry page</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 



 <style type="text/css">
    	   .wapper{
            width:1972px;
            height: 1360px;
           
            
            
        }
        .sec{
           
            width: 1972px;
            height: 1300px;
            margin-top:-20px; 
            background-color:#e4bfe2;
        }

        .box1  img
        {
        
            border-radius:50%;
            width:70px;
            height:70px;
            margin-top:30px;
            margin-left:50%;
        
        }

        .box2 
        {
            border-color:black;
            border: 5px;
            width:110px;
            height:70px;
            float:right;
            font-size:20px;
            margin-top:-50px;
            margin-right:400px;
            text-align:center;
        
        }
       table{
        text-align:left;
        width:1000px;

       
       }
       tr{
        width:600px;

       }

       
       td {
  text-align: left;
}
       

       
    </style>	
  
</head>
<body>

<section>
	<DIV class="wapper">
        <section class="sec">
			
			
        <div style="float:center;width:1200px;height:100%;background-color:#white;margin-left:30px;margin-top:0px;"> 
                        <div class ="box1">   
				<div class ="box1">
                    <img src="n.png" style="float:center;">
                </div>


                
                    <h3 style="text-align:center;text-transform: uppercase;margin:2px;margin-left:50px;">University of Vavuniya,srilanka</h3s>
                    <h4 style="text-align:center;margin:2px;"><u>Examination Entry Form For Proper Candidates</u></h4>
                    <h4 style="text-align:center;margin:2px;">(to be completed and returned to the deputy registrar, examination and student admission)</h4>


                

                    <form name="Registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
                        <div class="login"> 
                            <div style="float:left;">
                            <label for="IndexNo">Index No(for office only)</label>
                            <input  type="text" name="IndexNo" placeholder="Index No(for office only)"style="width: 200px;height: 35px;">
                            </div>  
                        
                            <div  style="float:right;">
                         
                        
                        </div><br><br><br>
                      
                    
                         
                        <div>
                        <label for="Registration_No">1. Registration No &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
                        <input type="text" name="Registration_No" id="Registration_No"placeholder="Registration No" style="width: 200px;height: 35px;" value="<?php echo htmlspecialchars($Registration_No); ?>">
                        <input type="submit" value="Search">
                        </div><br>

                       
                        <div>
                        <label for="gender">2.Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                        <input type="text" name="gender"id="gender" placeholder="gender"style="width: 200px;height: 35px;" value="<?php echo htmlspecialchars($gender); ?>">

                        <input type="text" name="Name_with_initials"id="Name_with_initials" placeholder="Name with initials"style="width: 700px;height: 35px;" value="<?php echo htmlspecialchars($Name_with_initials); ?>">
                        </div><br>

                        <div>
                        <label for="Name_denoted_by_initial">3. Name denoted by initial &nbsp &nbsp  &nbsp:</label>
                        <input  type="text" name="Name_denoted_by_initial"id="Name_denoted_by_initial" placeholder="Name denoted by initial"style="width: 700px;height: 35px;" value="<?php echo htmlspecialchars($Name_denoted_by_initial); ?>">
                        </div>  <br>
                    

                        <div>
                        <label for="Address(Present)">4. Address(Present) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp:</label>
                        <input  type="text" name="Address" id="Address" placeholder="Address(Present)"style="width: 700px;height: 35px;" value="<?php echo htmlspecialchars($Address); ?>">
                        </div>  <br>
                    
                        <div>
                        <label for="Mobile_Phone_no">5. Mobile Phone no &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                        <input type="text" name="Mobile_Phone_no"  id="Mobile_Phone_no" placeholder="Mobile Phone no" style="width: 200px;height: 35px;"value="<?php echo htmlspecialchars($Mobile_Phone_no); ?>">
                        </div><br>

                        <div>
                        <label for="Date_of_admission">6. Date of admission &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp:</label>
                        <input type="text" name="Date_of_admission" placeholder="Date of admission" style="width: 200px;height: 35px;" value="<?php echo htmlspecialchars($Date_of_admission); ?>">
                        </div><br>
                        <div>
                        <label for="Name_of_the_examination">7. Name of the examination &nbsp &nbsp:</label>
                        <select name="Name_of_the_examination" id="Name_of_the_examination"style="width: 700px;height: 35px;">
                                    <option value="">Select The Exam</option>
                                    <option value="First Year First Semester Examination In Information Communication Technology">First Year First Semester Examination In Information Communication Technology</option>
                                    <option value="First Year Second Semester Examination In Information Communication Technology">First Year Second Semester Examination In Information Communication Technology</option>
                                    <option value="Second Year First Semester Examination In Information Communication Technology">Second Year First Semester Examination In Information Communication Technology</option>
                                    <option value="Second Year Second Semester Examination In Information Communication Technology">Second Year Second Semester Examination In Information Communication Technology</option>
                                    <option value="Third Year First Semester Examination In Information Communication Technology">Third Year First Semester Examination In Information Communication Technology</option>
                                    <option value="Third Year Second Semester Examination In Information Communication Technology">Third Year Second Semester Examination In Information Communication Technology</option>
                                    <option value="Forth Year First Semester Examination In Information Communication Technology">Forth Year First Semester Examination In Information Communication Technology</option>
                                    <option value="Forth Year Second Semester Examination In Information Communication Technology">Forth Year Second Semester Examination In Information Communication Technology</option>
                                </select>
                            </div> <br>
                    
                <table class="margin-right:10px;">

                    <tr >
                        <td>
                        <div>
                        <label for="year_of_the_examination">8. year of the examination &nbsp  </label>
                                <select name="year" id="year"style="width: 150px;height: 35px;"  value="<?php echo htmlspecialchars($year); ?>" >
                                    <option value="">Select year</option>
                                    <option value="1st year">1st year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>

                                   
                                </select>
                                </div><br>
                                </td>
                                <td>
                        <div>
                        <label for="Semester">9. Semester &nbsp </label>
                                <select name="semester" id="language"style="width: 150px;height: 35px;"value="<?php echo htmlspecialchars($semester); ?>">
                                    <option value="">Select semester</option>
                                    <option value="1st semester">1st semester</option>
                                    <option value="2nd semester">2nd semester</option>
                                </select>
                        </div>  <br>
                        </td>
                        <td>
                         <label for="Faculty of"> 10.Faculty of</label>
                            <select name="faculty" id="faculty"style="width: 150px;height: 35px;"value="<?php echo htmlspecialchars($faculty); ?>">
                                    <option value="">Select faculty &nbsp</option>
                                    <option value="Technological studies">Technological studies</option>
                                    <option value="applied sceince">applied sceince</option>
                                    <option value="manegment">manegment</option>
                                </select>
                            </div>
                            <input type="submit" value="Search">

                        </td>
                        </tr>
                        </table>
                        <h4>
                        Details of the  subjects being applied<br>
                        (column 3 to 5 should be completed by the lecture)
                        </h4>

                        <table border="1px">
                            <tr>
                                <td rowspan="2">course code</td>
                                <td rowspan="2">subject title (ii)</td>
                                <td rowspan="2">whether all in course<br> assignment submitted<br>yes/no</td>
                                <td colspan="2">semester attendence</td>
                               
                            </tr>
                            <tr>
                                <td>whether full filled <br>attendance requirement </td>
                                <td>signature of the lecture (5)</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_1"  style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_1); ?>"></td>
                                <td><input type="text" name="subject_name_1"  style="width: 300px;height: 30px;"value="<?php echo htmlspecialchars($subject_name_1); ?>" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_2"  style="width: 100px;height: 30px;"value="<?php echo htmlspecialchars($course_code_2); ?>" ></td>
                                <td><input type="text" name="subject_name_2" style="width: 300px;height: 30px;"value="<?php echo htmlspecialchars($subject_name_2); ?>" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_3"  style="width: 100px;height: 30px;"value="<?php echo htmlspecialchars($course_code_3); ?>" ></td>
                                <td><input type="text" name="subject_name_3" style="width: 300px;height: 30px;" value="<?php echo htmlspecialchars($subject_name_3); ?>" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_4" style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_4); ?>"></td>
                                <td><input type="text" name="subject_name_4" style="width: 300px;height: 30px;"value="<?php echo htmlspecialchars($subject_name_4); ?>"  ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_5"  style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_5); ?>"></td>
                                <td><input type="text" name="subject_name_5" style="width: 300px;height: 30px;"value="<?php echo htmlspecialchars($subject_name_5); ?>"  ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_6"  style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_6); ?>"></td>
                                <td><input type="text" name="subject_name_6" style="width: 300px;height: 30px;" value="<?php echo htmlspecialchars($subject_name_6); ?>" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_7"  style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_7); ?>"></td>
                                <td><input type="text" name="subject_name_7"  style="width: 300px;height: 30px;"value="<?php echo htmlspecialchars($subject_name_7); ?>"  ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_8" style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_8); ?>"></td>
                                <td><input type="text" name="subject_name_8" style="width: 300px;height: 30px;"value="<?php echo htmlspecialchars($subject_name_8); ?>"  ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="course_code_9"  style="width: 100px;height: 30px;" value="<?php echo htmlspecialchars($course_code_9); ?>"></td>
                                <td><input type="text" name="subject_name_9"  style="width: 300px;height: 30px;" value="<?php echo htmlspecialchars($subject_name_9); ?>" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            <tr>
                                <td><input type="text" name="Dcourse_code_10"  style="width: 100px;height: 30px;"value="<?php echo htmlspecialchars($course_code_10); ?>" ></td>
                                <td><input type="text" name="subject_name_10" style="width: 300px;height: 30px;" value="<?php echo htmlspecialchars($subject_name_10); ?>" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
            
                            </tr>
                            
                        </table>

                        <div style="float:right;margin-top:20px;margin-right:50px;">
                        <input class="btn btn-default"style="height: 35px ; width: 80px;color: white;background-color:red; margin: 2px;" type="submit" name="submit" value="submit">&nbsp &nbsp &nbsp &nbsp 
					    <input class="btn btn-default" type="reset" name="reset" value="reset" style="height:35px ;color: white;width: 80px;background-color: red;">
                        </div>

					
				    </form>
                </div>
				
				<?php

                    if(isset($_POST['submit']))
                    {
                        $count=0;
                        $sql="SELECT Registration_No from `examEnrty`";
                        $res=mysqli_query($conn,$sql);

                        while($row=mysqli_fetch_assoc($res))
                        {
                        if($row['Registration_No']==$_POST['Registration_No'])
                        {
                            $count=$count+1;
                        }
                        }
                        if($count==0)
                        {
                        mysqli_query($conn,"INSERT INTO `examEnrty` VALUES(
                            '$_POST[faculty]',
                            '$_POST[Name_of_the_examination]',
                            '$_POST[year]', 
                            '$_POST[semester]',
                            '$_POST[gender]',
                            '$_POST[Name_with_initials]',
                            '$_POST[Name_denoted_by_initial]',
                            '$_POST[Registration_No]',
                            '$_POST[Address]', 
                            '$_POST[Mobile_Phone_no]',
                            '$_POST[Date_of_admission]',
                            '$_POST[course_code_1]',
                            '$_POST[subject_name_1]', 
                            '$_POST[course_code_2]', 
                            '$_POST[subject_name_2]');");
                        
                    
                        ?>
                        <script type="text/javascript">
                        alert("Registration successful");
                        </script>
                    
                            

                        <?php
                        }
                        else
                        {

                        ?>
                            <script type="text/javascript">
                            alert("The username already exist.");
                            </script>
                        <?php

                        }

                    }

                ?>
      
		
</div>



</body>
</html>