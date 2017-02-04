<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning CI</title>
</head>
<body>
    <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>

    <form action="<?= site_url('login_ctr') ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" />
        <label for="password"></label>
        <input type="text" name="user_password" />
        <button type="submit">Login</button>
    </form>
</body>
</html>
