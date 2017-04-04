<?php include '../view/ip_header.php'; ?>
<main>
    <h1>Update Vendor details!!!</h1>
    <form action="." method="post" id="VendorUpdate1">
        <input type="hidden" name="action" value="update_vendor1">

        <label>Select Vendor :</label>
        <select name="vendor_name">
            <option value="Macy's">Macy's
            <option value="JCPenny">JCPenny
            <option value="JewelD">JewelD
        </select>
        <br>

        <label>Phone Number:</label>
        <input type="text" name="vendor_phn" />
        <br><i>eg. 609-676-6229</i><br><br>

        <label>email ID:</label>
        <input type="text" name="vendor_email" />
        <br>

        <label>Website link:</label>
        <input type="text" name="vendor_weblink" />
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
            <br><br><br>
    </form>
</main>
<?php include '../view/ip_footer.php'; ?>