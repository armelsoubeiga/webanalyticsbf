<?php

if(isset($_POST['submit']))
    { 
      
        $username= htmlspecialchars($_POST['username']);
        $email= htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $text= htmlspecialchars($_POST['text']);
		
		$db=new PDO('mysql:host=localhost; dbname=webanalytics_sign_up','root','');

        if($username&&$email&&$password)           
        {
			$sql="INSERT INTO user VALUES('$username','$email','$password','$text')";
			$req = $db->prepare($sql);
			$req->execute();
       }
		else echo "Veuilez saisir tous les champs !";
    }	
	
?>


<?php
header("Location:https://armelsoubeiga2.shinyapps.io/websondage/");
?>