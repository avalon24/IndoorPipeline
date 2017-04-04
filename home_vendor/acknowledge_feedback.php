<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Acknowledge Feedback!!!</h1>
    <h3>  Sorry!! Site is under maintenance and does not allow you to submit!</h3>
    <form action="index.php" method="post" id="FeedbackResponse">
        <input type="hidden" name="action" value="acknowledge_fdbk">

        <label>Select Feedback :</label>
        <select name="Feedback_Desc">
            <option value="FB1">Feedback1
            <option value="FB2">Feedback2
            <option value="F23">Feedback3
        </select>
        <br><br>

        <label>Your Response:</label><br>
        <input type="text" style="width: 250px; height: 50px;" name="vendor_response" />
        <br><br><br>
    </form>
    
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