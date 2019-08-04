<?php include_once('config.php');?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	
	<title>AF - Tool</title>
</head>
<body >
	<!-- <div class="overlay"></div> -->
	<div class="container">
		<!-- <div class="mt-2 mb-4">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 ml-auto mr-auto">
				<div class="col-sm-12 border border-primary shadow rounded bg-white py-2 text-center"> -->
					<h1>Welcome <?php echo ucfirst($_SESSION['name']); ?></h1>
					<?php include 'headerNav.php';?>
					<form method="post">
						
    <div class="form-row">
    	<div class="form-group col-md-3">
	        <label>Name <span class="text-danger">*</span></label>
	        <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required>
    	</div>
    	<div class="form-group col-md-3">
	    	<label>User Phone <span class="text-danger">*</span></label>
	        <input type="tel" name="userphone" id="userphone" class="form-control" placeholder="Enter user phone" required>
    	</div>
    	<div class="form-group col-md-3">
	    	<label>Remark <span class="text-danger">*</span></label>
	        <input type="text" name="username" id="username" class="form-control" placeholder="Enter remark" required>	
    	</div>
        
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
        <label>Order Type <span class="text-danger">*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter order type" required>
    </div>
    <div class="form-group col-md-3">
        <label>Reference By <span class="text-danger">*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Reference By" required>
    </div>
    <div class="form-group col-md-3">
        <label>Reference Any <span class="text-danger">*</span></label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Reference Any" required>
    </div>
</div>
    <div class="form-group">
        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Save</button>
    </div>
</form>
					<!-- <a href="logout.php" class="text-muted"><i class="fa fa-fw fa-power-off"></i> Logout</a> -->
				<!-- </div> -->
			<!-- </div> --> <!--/.col-xs-12 col-sm-8 col-md-6 col-lg-4-->
		<!-- </div> --> <!--/.mt-2 mb-4-->
	</div> <!--/.container-->
	
	<!-- Optional JavaScript --> 
	<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
	
</body>
</html>