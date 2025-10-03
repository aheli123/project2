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
        //   echo "Connected successfully";

      
        $txtemail=$_POST["email"];
       $txtpassword=$_POST["password"];

        $sql="SELECT email, password FROM `Appointment`;";
        $rs1 = mysqli_query($conn,$sql);
        $f=0;
        if ($rs1->num_rows > 0)
        {
             while($row = $rs1->fetch_assoc())
             {
                 if($txtemail===$row["email"])
                 {
                    if($txtpassword===$row["password"])
               
                 {
                     $f=1;
                     break;
                 }
                // echo "email: ".$row["email"]."<br>";
                // echo "password: ".$row["password"]."<br>"."<br>";
                }
             }
        }
          
        if($f==1)
        {
            header("Location: indexcopy.html");
        }
         else
        {
            header("Location: err.html");    
        }
        
    //    echo $txtemail;
    //   echo $txtpassword;
    //    if($txtemail==="admin" && $txtpassword==="#12psw21")
    //     {
           
           
    //         $sql="SELECT * FROM `APPOINTMENT` ORDER BY ID DESC;";
    //         $rs1 = mysqli_query($conn,$sql);
            
    //         if ($rs1->num_rows > 0)
    //         {
                
    //             echo "<table class=\"table table-hover\"><tr class=\"success\"><th>ID</th><th>NAME</th><th>MOBILE</th><th>EMAIL</th><th>PASSWORD</th><th>CONFIRMPASSWORD</th></tr>";
    //             while($row = $rs1->fetch_assoc())
    //             {
    //                 echo "<tr class=\"success\"><td>" .$row["ID"]. "</td><td>" .$row["NAME"]. "</td><td><center>" .$row["MOBILE"]. "</center></td><td><center>" .$row["EMAIL"]. "</center></td><td><center>" .$row["PASSWORD"]. "</center></td><td><center>" .$row["CONFIRMPASSWORD"]. "</center></td></tr>";
    //             }
    //             echo "</table>";
    //         }
    //          else{
    //         echo "0 results";
    //          }

        //database insert into SQl code
    //     $sql = "INSERT INTO `Appointment` ( `NAME`, `MOBILE`, `EMAIL`, `PASSWORD`, `CONFIRMPASSWORD`) VALUES ('$txtname', '$txtmob', '$txtemail', '$txtpassword', '$txtcpass');";
    //     // INSERT INTO `APPOINTMENT` (`ID`, `NAME`, `MOBILE`, `EMAIL`, `PASSWORD`, `CPASSWORD`) VALUES ('1', 'Aheli Khan', '9051247045', 'khanaheli02@gmail.com', 'SudebMukherjee', 'SudebMukherjee');
        
    //     //insert in database
    //     $rs = mysqli_query($conn, $sql);

    //     if($rs)
    //     {
    //         header("Location: submission.html");
    //         exit;
    //     }
    //     else{
    //         header('Locaton: err.html');
    //         exit;
    //     }
     }
     ?>


