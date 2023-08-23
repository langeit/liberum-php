<?php 
include '../init.php';
if($users->isLoggedIn()) {
	header('Location: admin/ticket.php');
}
$errorMessage = $users->login();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Helpdesk System with PHP & MySQL</title>
    </head>
    <body>
        
    
<div class="container contact">	
	<h2>Helpdesk System</h2>	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#00796B;color:white;">
				<div class="panel-title">User Login</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php 
					if (isset($errorMessage)) { 
						if ($errorMessage != '') {
				?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						Admin: admin@webdamn.com<br>
						password:123	<br><br>
						User: smith@webdamn.com<br>
						password:123							
						</div>						
					</div>	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
</body>
</html>