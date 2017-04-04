<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Welcome Vendor!!!</h1>
    	
    	<a href="upload_deals.php">Update latest Deals</a><br><br>
    	<a href="update_info.php">Update Vendor Info</a><br><br>
        <a href="acknowledge_feedback.php">Acknowledge Feedbacks</a><br><br><br><br>
    	
        <form action="../index.php" method="post" id="logout_form">
        <input type="hidden" name="action" value="user_logout">

           	<label>&nbsp;</label>
        	<input type="submit" value="Logout" />
        	<br><br><br>
    	</form>
</main>
<?php include '../view/ip_footer.php'; ?>