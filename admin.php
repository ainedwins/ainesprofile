<?php
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location: login.php');
    exit;
}
?>
<?php 
include 'server.php';?>

<?php

//admin user update

if(isset($_POST['createuser'])){
    echo "<br>";

    // $pid = $_POST['pid'];
    
    $aname = $_POST['aname'];
    $aemail = $_POST['aemail'];
    $appass = $_POST['apass'];
    $appass2 = $_POST['apass2'];

    if($appass != $appass2){
        echo '
        
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
            Failed to update admin details, password mismatch
        ';
    }
    else{
        $appass = md5($appass);
        $sql = "UPDATE users SET name= '$aname',email='$aemail',password='$appass' WHERE id=1";


        if($conn->query($sql)){
            echo '
            
                <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
                Admin details Updated Successfully!
            ';
        }
        else{
            
            echo '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
                Error is here: ".$conn->error."
            </div>';
        }
    }
    

}

?>
<!-- Users -->

    <b><h2>Update Admin Details<h2></b>
    <?php
  
        $sql = "select * from users";

        $myquery = $conn->query($sql);

        echo "
        <table border='1'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        </tr>";



        while($row = $myquery->fetch_assoc()){

            echo "<tr>";

            echo "<td>" . $row['id'] . "</td>";

            echo "<td>" . $row['name'] . "</td>";

            echo "<td>" . $row['email'] . "</td>";

            echo "</tr>";

            }

            echo "</table>";

    ?>
        <form action="index.php" method="POST">
            <small>ID</small>
              <input type="text" name="aid" value="1" disabled placeholder="Enter about your name"/>
              <small>Name</small>
              <input type="text" name="aname" placeholder="Enter about your name"/>
              <small>Email </small>
              <input type="text" name="aemail" placeholder="Enter your email"/>
              <small>Password</small>
              <input type="password" name="apass" placeholder="Enter your new admin password"/><br>
              <small>Confirm password</small>
              <input type="password" name="apass2" placeholder="confirm your new admin password"/><br>
            <button type="submit" name="createuser" style="background-color: greenyellow;">Update Admin details</button>
      </form>


<!-- Contact -->
    <b><h2>Contact Information<h2></b>
        <form action="">
            <small>User Contact details</small>
            <?php
  
                $sql = "select * from contact";

                $myquery = $conn->query($sql);

                echo "
                <table border='1'>
                <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>emailaddress</th>
                <th>comments</th>
                </tr>";

                while($row = $myquery->fetch_assoc()){

                    echo "<tr>";

                    echo "<td>" . $row['firstname'] . "</td>";

                    echo "<td>" . $row['lastname'] . "</td>";

                    echo "<td>" . $row['emailaddress'] . "</td>";

                    echo "<td>" . $row['comments'] . "</td>";

                    echo "</tr>";

                    }

                    echo "</table> </div>";

            ?>
      </form>
