<?php include 'view/ip_header.php'; ?>
<main>
    <h1>Login Page!!!</h1>
    <form action="index.php" method="post" id="login_form">
        <input type="hidden" name="action" value="user_login">

        <label>User ID   :</label>
        <input type="text" name="user_name" />
        <br>
        
        <label>Password  :</label>
        <input type="password" name="password" />
        <br>

        <label>User Type :</label>
        <select name="user_type">
            <option value="ADMIN">ADMIN
            <option value="VENDOR">VENDOR
        </select>
        <br><br><br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Login" />
        <br><br>
    </form>
    
</main>
<?php include 'view/ip_footer.php'; ?>