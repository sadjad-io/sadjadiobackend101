<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>ورود</title>
    <meta charset="utf-8">
</head>
<body>

    <h2>ورود</h2>

    <form action="" method="POST">
        نام کاربری:<br>
        <input type="text" name="username" required>
        <br>
        رمز عبور:<br>
        <input type="password" name="password" required>
        <br>

        <br><br>
        <input type="submit" value="ورود">
    </form> 
    <?php
        if($login==2){
            echo "<h1>اطلاعات درست وارد نشده است‌!</h1>";
        }
    ?>
</body>
</html>
