<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>ثبت نام</title>
    <meta charset="utf-8">
</head>
<body>

    <h2>فرم ثبت نام</h2>

    <form action="" method="POST">
        نام کاربری:<br>
        <input type="text" name="username" required>
        <br>
        رمز عبور:<br>
        <input type="password" name="password" required>
        <br>

        نام شما:<br>
        <input type="text" name="name">
        <br>

        نام خانوادگی شما:<br>
        <input type="text" name="lastname">
        <br>

        <br><br>
        <input type="submit" value="تایید">
    </form> 
    <?php
        if($signup==1){
            echo "<h1>ثبت نام با موفقیت انجام شد</h1>";
        } else if($signup==2){
            echo "<h1>این کاربر قبلا ثبت نام شده</h1>";
        }
    ?>
</body>
</html>
