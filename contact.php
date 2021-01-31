<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "edwins";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    
}
?>
<?php
if(isset($_POST['contact'])){
  echo "<br>";

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $emailaddress = $_POST['emailaddress'];
  $comments = $_POST['comments'];

  $sql = "insert into contact (firstname,lastname,emailaddress,comments) values 
  ('$firstname','$lastname','$emailaddress','$comments')";

  if($conn->query($sql)){
      echo '
    
          <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
          Your message has been sent successfully';
  }
  else{
      
      echo '
      <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
          Error is here: ".$conn->error."
      ';
  }

}

?>
    <!DOCTYPE html>
<html>
    <head>
<title>Contact page</title>
<link rel="stylesheet" href="yesyes.css">
    </head>
    <body>
        <header>
         <h2>CONTACT ME</h2>
         <nav>
         <ul>
        <li><a href="index.html">Home page</a></li>
        <li><a href="project.html">Project page</a></li>
        <li><a href="Academics.html">Academics page</a></li>  
</ul>  
</nav>
        </header>
<main>    
Ask me any questions, drop your comments or call me on <a href="tel:+256-077-768-8897"> 0777688897</a>. I would 
be happy to receive your responses and answer your questions.<br>
<br>
<b>Please fill in your contact information and comments</b>
    <form action="contact.php" method="POST">
        <p><label for="fname">First Name</label></p>
        <p><input type="text" id="fname" name="firstname" placeholder="Your name.."></p>
        <p><label for="lname">Last Name</label></p>
        <p><input type="text" id="lname" name="lastname" placeholder="Your last name.."></p>
        <p><label for="EMAIL">E-mail Address</label></p>
        <p><input type="text" id="EMAIL" name="emailaddress" placeholder="Your E-mail address.."></p>
        <p><label for="subject">Please leave your comment here:</label></p>
       <p> <textarea id="subject" name="comments" rows="4" cols="55"></textarea></p>
    <input type="submit" name="contact"value="Click here to Submit"/>
    <input type="reset" value="Erase and Start Over" />

      </form><br>
<footer>
    <p>
        <a href="https://pinterest.com/ainedwins"><img src="ico_pinterest.svg" alt="pinterest"></a>
        <a href="https://twitter.com/ainedwins"><img src="ico_twitter.svg" alt="twitter"></a>
        <a href="https://youtube.com/ainedwins"><img src="ico_youtube.svg" alt="Youtube"></a>
        <a href="https://instagram.com/ainedwins"><img src="ico_instagram.svg" alt="Instagram"></a>
    </p>
    <span class="copyright">All Rights Reserved.</span>
    </footer>
</main>
    </body>
</html>