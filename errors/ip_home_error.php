<?php include '../view/ip_header.php'; ?>
<div id="main">
    <h1 class="top">Error</h1>
    <p class="first_paragraph"><?php echo $error; ?></p>

    <form action="./home.php" method="post" id="goback_form">
            <label>&nbsp;</label>
            <input type="submit" value="Go Back" />
    </form>
    
</div>
<?php include '../view/ip_footer.php'; ?>