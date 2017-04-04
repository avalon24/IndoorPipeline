<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Welcome Admin!!!</h1><br><br>

    	<a href="update_event.php">Update Event</a><br><br>
    	<a href="update_vendor.php">Update Vendor</a><br><br>
    	<a href="deactivate_vendor.php">Deactivate Vendor</a><br><br><br><br>
        
        <form action="../index.php" method="post" id="logout_form">
        <input type="hidden" name="action" value="user_logout">

           	<label>&nbsp;</label>
        	<input type="submit" value="Logout" />
        	<br><br><br>
    	</form>
</main>
<?php include '../view/ip_footer.php'; ?>