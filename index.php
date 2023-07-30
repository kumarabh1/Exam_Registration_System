<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP demo</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    .container{
        width: 80%;
        background-color: #c4eed0ff; ;
        margin: auto;
    }
    .container h1{
        text-align: center;
        color: red;
        font-family: 'Sriracha', cursive;
    }
    .container p{
        text-align: center;
        font-size: 20px;
        color: green;
        padding: 8px;
    }
    input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}


</style>
<body>
    <div class="container">
    <h1>Engineering Entrance Exam </h1>
    <p>Student Registration</p>
    <?php
// set connection variable
$server = "localhost";
$username = "root";
$password = "";
// create a database connection
$con = mysqli_connect($server, $username, $password);
// check connection success
// if(!$con){echo "Success connecting to the db";}


// $insert = false;
// if(isset($_POST['name'])){
//     // Set connection variables
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//     // Create a database connection
//     $con = mysqli_connect($server, $username, $password);

//     // Check for connection success
//     if(!$con){
//         die("connection to this database failed due to" . mysqli_connect_error());
//     }
//     // echo "Success connecting to the db";

//     // Collect post variables
//     $name = $_POST['name'];
//     $gender = $_POST['gender'];
//     $age = $_POST['age'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $desc = $_POST['desc'];
//     $sql = "INSERT INTO `test`.`student` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `d/t`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//     // echo $sql;

//     // Execute the query
//     if($con->query($sql) == true){
//         // echo "Successfully inserted";

//         // Flag for successful insertion
//         $insert = true;
//     }
//     else{
//         echo "ERROR: $sql <br> $con->error";
//     }

//     // Close the database connection
//     $con->close();
// }








//     if($insert == true){
//         echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
//         }
    ?>
    <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="age"  id="age"   placeholder="Enter your Age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone" required maxlength="10">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 

    </form>    

        // <?PHP 
          
        //   $variable1=10;
        //   $variable2=50;
        //   $variable3="Hello World"; 
        //   echo $variable1;
        //   echo "<br>";
        //   echo $variable2;
        //   echo "<br>"; 
        //   echo $variable3;
        //   echo "<br>";
         // $variable4= array("Java","Php","Python","Ruby","C");
        //   echo "The value of Array are ".$variable4[0]."<br>";
        //   echo "The value of Array are ".$variable4[1]."<br>";
        //   echo "The value of Array are ".$variable4[2]."<br>";
        //   echo "The value of Array are ".$variable4[3]."<br>";
        //   echo "The value of Array are ".$variable4[4]."<br>";
        //   for($a=0;$a<5;$a++){
        //       echo "The value of Array are ".$variable4[$a]."<br>";
        //   }
        //   echo str_word_count($variable3);

        // ?>
    </div>
    
</body>
</html>