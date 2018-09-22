<?php 

	if (isset($_REQUEST['sendsms'])) {
		
		 $systemno = Your no;
		 $password = 'password';
		 $APIkey = "API-Key";
		 $customer_no   = $_REQUEST['contact_no'];
		 $massage   = $_REQUEST['massage'];

		

		header("Location: https://smsapi.engineeringtgr.com/send/?Mobile=$systemno&Password=$password&Key=$APIkey&Message=$massage&To=$customer_no");

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Way2sms-Demo</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container">
	  <div class="container">
	  	<h1>Way2sms</h1>
	  </div>
	  <form method="post" class="form-horizontal col-md-5">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="contact_no">contact_no:</label>
	      <div class="col-sm-10">
	        <input type="contact_no" class="form-control" id="contact_no" placeholder="Enter contact no" name="contact_no">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="massage">Massage:</label>
	      <div class="col-sm-10">          
	        <textarea class="form-control" id="massage" placeholder="Enter massage" name="massage"> </textarea>
	      </div>
	    </div>
	    
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" name="sendsms" class="btn btn-default">Submit</button>
	      </div>
	    </div>
	  </form>
	</div>


</body>
</html>
