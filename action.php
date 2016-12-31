<?


	//if form is submitted
	if (isset($_POST['submit'])) 
	{

		$name=$_POST['name']; 
		$email=$_POST['email']; 
		$phone=$_POST['phone']; 
		$submit=$_POST['submit'];  
		$tickets=$_POST['tickets']; 
		$human=intval($_POST['human']);

		//sending email of confirmation
		$from = "Demo Contact Form";
		$to="patrickfunom@live.com";
		$subject="Contact Form Message";
		$body="From: {$name}";



		//validate names 
		if(!$_POST['name'])
		{
			$errName="Please enter your name";
		}

		//validate email
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$errEmail="Please enter a valid email address";
		}

		//spam bot check
		if ($human !== 5) 
		{
			$errHuman="Your anti-spam is incorrect";
		}

		//if no errors submit form
		// if(!$errName || !$errEmail || !$errHuman)
		// {
			if (mail ($to, $subject, $body, $from)) 
			{
         		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
     		} 		
     		else 
     		{
        			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
     		}
		// }

	    //connect to database
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889;', $user, $pass);


		$ename=$_POST['name']; 
		$eemail=$_POST['email']; 
		$ephone=$_POST['phone']; 
		$etickets=$_POST['tickets']; 

		$sth=$dbh->prepare("insert into ws (name, email, phone, tickets)  
							values(:name, :email, :phone, :tickets)");
		$sth->bindParam(':name', $ename);
		$sth->bindParam(':email', $eemail);
		$sth->bindParam(':phone', $ephone);
		$sth->bindParam(':tickets', $etickets);
		$sth->execute();

		$stm=$dbh->prepare('select * from ws');
		$stm->execute();
		$result=$stm->fetchAll();

		var_dump($result);
		$dbh=null;



	// }


	var_dump($ename);







?>