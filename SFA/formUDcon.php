<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  	background: rgb(216, 191, 216);
	}

	.content {
  		max-width: 1000px;
  		margin: auto;
  		background: white;
  		padding: 10px;
	}
	html {
		scroll-behavior: smooth;
	}

	#section1 {
        max-width: 1000px;
  		margin: auto;
  		background-color: rgb(255, 228, 225);
	}

	/* #section2 {
  		height: 600px;
  		background-color: rgb(255, 240, 245);
	}

	#section3 {
  		background-color: rgb(255, 228, 225);
	} */

	/*topBar*/
	.topnav {
  		overflow: hidden;
  		background-color: rgb(0, 0, 0);
	}

	.topnav a {
  		float: left;
  		color: #f2f2f2;
  		text-align: center;
  		padding: 14px 16px;
  		text-decoration: none;
  		font-size: 20px;
	}

	.topnav a:hover {
  		background-color: rgb(255, 255, 255);
  		color: rgb(186, 85, 211);
	}

	.topnav a.active {
  		background-color: rgb(224, 148, 193);
  		color: rgb(0, 0, 0);
	}

	/*BtnToTopOfPage*/
	#myBtn {
  		display: none; /* Hidden by default */
  		position: fixed; /* Fixed/sticky position */
  		bottom: 20px; /* Place the button at the bottom of the page */
  		right: 30px; /* Place the button 30px from the right */
  		z-index: 99; /* Make sure it does not overlap */
  		border: none; /* Remove borders */
  		outline: none; /* Remove outline */
  		background-color: rgb(0, 0, 139); /* Set a background color */
  		color: white; /* Text color */
  		cursor: pointer; /* Add a mouse pointer on hover */
  		padding: 15px; /* Some padding */
  		border-radius: 10px; /* Rounded corners */
  		font-size: 18px; /* Increase font size */
	}

	#myBtn:hover {
		background-color: rgb(88, 133, 192); /* Add a dark-grey background on hover */
	}
	/* table {
		margin: auto;
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  border: 1px solid #ddd;
	background-color: rgb(255, 245, 238);
} */

/* th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
} */

input[type=text], input[type=password] {
  width: 70%;
  padding: 15px;
  margin: auto;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

button {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

	</style>
	<body>
    <div class="content">
        <h1>Update Concert Table</h1>
	</div>
    <div class="main" id="section1">
		<h2>&nbspConcert</h2>
		
		<form action="ConcertUpdate.php" method="post">
		&nbsp;&nbsp;&nbsp;Id Artist :&nbsp;&nbsp;
        <input type="text" placeholder="Enter Id Artist" name="id" required>
        <br><br>
        &nbsp;&nbsp;&nbsp;Concert :&nbsp;&nbsp;
        <input type="text" placeholder="Enter concert" name="Concert" required>
        <br><br>
        &nbsp;&nbsp;&nbsp;Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" placeholder="Enter Date" name="Date" required>
        <br><br>
        &nbsp;&nbsp;&nbsp;Location :&nbsp;
        <input type="text" placeholder="Enter Location" name="Location" required>
        <br><br>
        &nbsp;&nbsp;&nbsp;LinkSaleTicket :&nbsp;&nbsp;
        <input type="text" placeholder="Enter LinkSaleTicket" name="LinkSaleTicket " required>
        <br><br>
						<button type="submit" class="signupbtn" name="btnSave">Save</button>	
				</form>
							
				<form action="MusicUpdate.php">
						<button type="submit" class="cancelbtn">Cancle</button>
				</form>
        <br>

		</div>

    
</body>
</html>