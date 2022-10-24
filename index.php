<!-- insert -->
<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST["inputname"];
        $email = $_POST["inputemail"];
        $password = $_POST["inputpassword"];

        $insertquery = "insert into 1_practise_tbl(name, email, password) values( '".$name."', '".$email."','".$password."')";

        $insertqueryconnect = mysqli_query($con, $insertquery);

//         if($insertqueryconnect)
// {
//     echo "connected";
// }
// else
// {
//     echo "not connected";
// }

    }



    // fetch work
    
    
    
    ?>

    