<?php

    /*
        Editor: Patrick Tunga-Lergo
    	A .Hello{} Website
    	Wintersoulstice
    */
    
 
    if(isset($_POST['submit']))
    {
       
		
        $servername = getenv('IP');
        $username = getenv('C9_USER');
        $password = "";
        $database = "wintersoulstice";
        $dbport = 3306;
    
        // Create connection
        // $db = new mysqli($servername, $username, $password, $database, $dbport);
        $db = new PDO('mysql:host=localhost;dbname=wintersoulstice;port=3306;', $username, $password);
    
        
        
        
        $ename=$_POST['name']; 
    	$eemail=$_POST['email']; 
    	$ephone=$_POST['phone']; 
    	$etickets=$_POST['tickets']; 
    		
    		
    
    	$sth=$db->prepare('insert into ws (name, email, phone, tickets)  
    					   values(:name, :email, :phone, :tickets)');
    							
    							
    
    	$sth->bindParam(":name", $ename);
    		$sth->bindParam(':email', $eemail);
    		$sth->bindParam(':phone', $ephone);
    		$sth->bindParam(':tickets', $etickets);
    		$sth->execute();
    
    // 		$sth=$db->prepare('select * from ws');
    // 		$sth->execute();
    // 		$result=$sth->fetchAll();
    
    // 		var_dump($result);
    		$db=null;
    		
    // 		echo 'complete';
    // 		echo '<script> window.location.href = "complete.php";</script>';
    // 		include 'complete.php';
       
       
            header('Location: complete.php');
    		
    }


?>