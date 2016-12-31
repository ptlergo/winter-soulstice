<!---
	Editor: Patrick Tunga-Lergo
	A .Hello{} Website
	Wintersoulstice
-->

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Winter Soulstice Tickets</title>
	  <?php include 'head.php'; ?>
	</head>
	<body>

	  <div id="snowflakeContainer">

			<?php include 'navbar.php'; ?>

			<div class="container-fluid formbox">

   				 <p class="snowflake">*</p>

				<header class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4"><img src="../images/w-title.svg" alt="title"></img></header>
				<p class="col-xs-12" style="text-align: center; margin-bottom: 15%; color: #ffffff; font-style: italic;">
					<a href="https://www.facebook.com/events/999514656756811/">RSVP for January 5th concert, 8PM at BackBooth</a>
				</p>
				
				<form role="form" class="form-horizontal" action="connect.php" enctype="multipart/form-data" method="POST">
						<div class="col-xs-10 col-xs-offset-1 ">
							<input class="form-control input-lg" type="text" name="name" placeholder="enter your full name" required />
						</div>
		
						<div class="col-xs-10 col-xs-offset-1">
							<input class="form-control input-lg" type="email" name="email" placeholder="enter your email" required/>
						</div>
			
						<!--<div class="col-xs-10 col-xs-offset-1">-->
						<!--	<input class="form-control input-lg" type="phone" name="phone" placeholder="10 digit phone number"/>-->
						<!--</div>-->
						
						<div class="col-xs-10 col-xs-offset-1 col-md-12 tickets-select" style="text-align: center">
							<label for="tickets"><p style="color: #fed136" >how many tickets will you reserve?</p></label>
						
							<div class="clearfix"></div>
							
							<label class="radio-inline"><input type="radio" name="tickets" value="1" required >1</label>
							<label class="radio-inline"><input type="radio" name="tickets" value="2" checked>2</label>
							<label class="radio-inline"><input type="radio" name="tickets" value="3">3</label>
							<label class="radio-inline"><input type="radio" name="tickets" value="4">4</label>
							<label class="radio-inline"><input type="radio" name="tickets" value="5">5</label>
							<label class="radio-inline"><input type="radio" name="tickets" value="6">6</label>
	
						</div>
	
						<div class="col-xs-12 col-sm-12 submit">
							<input id="submit" name="submit" type="submit" value="SUBMIT" class="btn btn-primary col-xs-12" />
						</div>
				</form>
			</div>

			<?php include 'footer.php'; ?>

		</div>
	  </div>
		<script src="/js/fallingsnow_v6.js"></script>
	</body>
</html>