<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $servername = "sql110.infinityfree.com";
        $username ="if0_37099930";
        $password ="ovR8Hz4LAxP";
       
        //Create connection
        $conn=new mysqli($servername, $username, $password,"if0_37099930_netflixdemo");

        //Check connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        //  echo "Connected successfully";

        $txtName=$_POST["fname"];
        $txtmob=$_POST["mobile"];
        $txtemail=$_POST["email"];
        $txtpassword=$_POST["password"];
        $txtcpass=$_POST["cpass"];
        // echo $txtName;
        // echo $txtmob;
        // echo $txtemail;
        // echo $txtpassword;
        // echo $txtcpass;

        //database insert into SQl code
        $sql = "INSERT INTO `Appointment` ( `NAME`, `MOBILE`, `EMAIL`, `PASSWORD`, `CONFIRMPASSWORD`) VALUES ('$txtname', '$txtmob', '$txtemail', '$txtpassword', '$txtcpass');";
        // INSERT INTO `APPOINTMENT` (`ID`, `NAME`, `MOBILE`, `EMAIL`, `PASSWORD`, `CPASSWORD`) VALUES ('1', 'Aheli Khan', '9051247045', 'khanaheli02@gmail.com', 'SudebMukherjee', 'SudebMukherjee');
        
        //insert in database
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            header("Location: submission.html");
            exit;
        }
        else{
            header('Locaton: err.html');
            exit;
        }
     }
    ?>
