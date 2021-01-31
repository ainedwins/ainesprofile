<?php
include 'admin/server.php';
?>

<?php
  
  $sql = "select * from home WHERE is_deleted = 0";
  
  $myquery = $conn->query($sql);
  while($row = $myquery->fetch_assoc()){
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="yesyes.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
           <h2>CURRICULUM VITAE</h2>
           <nav>
           <ul>
        <li><a href="project.html">Project page</a></li>
        <li><a href="Academics.html">Academics page</a></li>
        <li><a href="contact.php">Contacts page</a></li>
        <li><a href="admin.php">Dashboard</a></li>   
           </ul>    
           </nav>
        </header>
        <main>
            <img src="me.jpg" alt="Edwins Passport photo" width="202" height="202" style="float:right">
         <h2>Ainerukundo Edwins</h2>
        Email: <a href="mailto:ainedwins@gmail.com">ainedwins@gmail.com</a>
        <br>
        Mobile: <a href="tel:+256-77-768-8897"> 0777688897</a>.<br>
        Postal Adress: P.O.Box 10623, Kampala<br>
        Plot 21A Portbell Road, Nakawa, Kampala, Uganda
        
        <h3>Personal Statement</h3>
        <p>I am a competent mobile application software developer with
         two years’ experience developing a wide range of tools for both iOS 
         and Android for a range of clients. I have proven expertise in building 
         sports betting and gambling apps. I understand the mobile app project lifecycle 
         in depth and am very capable at all aspects of development from project planning 
         to requirements gathering through to writing and testing code, creating documentation 
         and support. I am currently seeking long-term contract positions which will allow me 
         to further improve my project management skills.</p>
        
<h3>Core Skills</h3>
     <ul>
    <li>Mobile UI design expertise</li>
    <li>Programming languages including: HTML 5, C#, C++, Java, CSS</li>
    <li>Confident with iOS and Android APIs</li>
    <li>Strong communicator, able to motivate and engage teams in multiple remote locations</li>
</ul>   
    
    <br>
    <h3>Personal Interests</h3> 
    <ul>
    <li>Tennis</li>
    <li>Football</li>
    <li>Rugby</li>
</ul>

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