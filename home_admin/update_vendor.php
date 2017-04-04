<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Update Vendor details!!!</h1>
    <form action="." method="post" id="VendorUpdate">
        <input type="hidden" name="action" value="update_vendor">

        <label>Current Vendor :</label>
        <select name="vendor_name">
            <option value="Macy's">Macy's
            <option value="JCPenny">JCPenny
            <option value="Nike">Nike
	    <option value="Dillard's">Dillard's
	    <option value="Chamberlain's">Chamberlain's
        </select>
        <br>

        <label>Replacing Vendor:</label>
        <input type="text" name="new_name" />
        <br>

        <label>Replacing category:</label>
        <select name="category_type">
            <option value="02">Retail
            <option value="03">Pharma
            <option value="01">Food
            <option value="04">Hardware
            <option value="05">Jewelry
        </select>
        <br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Replace" />
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
