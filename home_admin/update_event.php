<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Update Event Details!!!</h1>
    <form action="." method="post" id="EventUpdate">
        <input type="hidden" name="action" value="update_event">

        <label>Description:</label>
        <input type="text" style="width: 250px; height: 50px;" name="event_desc"/>
        <br><br>
        
        <label>Start date & time  :</label>
        <input type="text" name="start_stamp" />
        <br>

        <label>Stop date & time  :</label>
        <input type="text" name="stop_stamp" />
        <br><br>

        <label>Location  :</label>
        <input type="text" name="location" />
        <br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update" />
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
            <br><br>
    </form>
</main>
<?php include '../view/ip_footer.php'; ?>