<?php 

    include 'init.php'; 
    if(!$users->isLoggedIn()) {
	    header("Location: admin/login.php");	
    } else {
	    header("Location: ticket.php");	
    }
    
    $user = $users->getUserInfo();
?>