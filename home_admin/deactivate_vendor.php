<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Vendor Deactivation!!!</h1>
    <form action="." method="post">
        <input type="hidden" name="action" value="remove_vendor">

        <label>Select Vendor :</label>
        <select name="vendor_name">
            <option value="Macy's">Macy's
            <option value="JCPenny">JCPenny
            <option value="JewelD">JewelD
        </select>
        <br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Deactivate" />
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