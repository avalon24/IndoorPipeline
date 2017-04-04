<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Upload deals available!!!</h1>
    <form action="." method="post" id="DealUpdate">
        <input type="hidden" name="action" value="update_deals">

        <label>Description:</label>
        <input type="text" style="width: 250px; height: 50px;" name="deal_desc"/>
        <br><br>
        
        <label>Select Vendor :</label>
        <select name="vendor_name">
            <option value="Macy's">Macy's
            <option value="JCPenny">JCPenny
            <option value="Nike">Nike
	    <option value="Dillard's">Dillard's
	    <option value="Chamberlin's">Chamberlin's
        </select>
        <br>

        <label>Start date & time  :</label>
        <input type="text" name="start_stamp" /><br>
        <i>eg. YYYY-MM-DD HH:MM:SS</i><br>
	<br>
        <label>Stop date & time  :</label>
        <input type="text" name="stop_stamp" /><br>
        <i>eg. YYYY-MM-DD HH:MM:SS</i><br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Upload" /><br>
        <br>
    </form><br><br><br>
    
    <form action="./home.php" method="post" id="goback_form">
            <label>&nbsp;</label>
            <input type="submit" value="Go Back" />
    </form><br>
    
    <form action="../index.php" method="post" id="logout_form">
        <input type="hidden" name="action" value="user_logout">

            <label>&nbsp;</label>
            <input type="submit" value="Logout" />
            <br><br><br>
    </form>
</main>
<?php include '../view/ip_footer.php'; ?>
