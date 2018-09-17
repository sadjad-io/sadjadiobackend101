<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>افزودن جزوه</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form action="" method="POST">
        نام فایل<br>
        <input type="text" name="bookname" placeholder="نام فایل را وارد کن." required>
        <br>

        توضیحات<br>
        <textarea  rows="4" cols="30" type="text" name="bookdisc" placeholder="یک توضیح همینطوری وار دکن" required></textarea>
        <br>

        تعداد صفحه<br>
        <input type="number" name="bookpageNum" required>
        <br><br>

        لطفا نوع فایل خود را مشخص کنید:<br>
        <input type="radio" name="bookType" value="0" required> نمونه سوال
        <input type="radio" name="bookType" value="1"> جزوه درسی

        <br>
        <br>

        <select name="colleges">
        <?php
            foreach ($colleges as $value) {
                $id = $value['id'];
                $name = $value['name'];
                echo "<option value=\"$id\">$name</option>";
            }
        ?>
        </select> 

        <select>
        <?php
            foreach ($courses as $value) {
                $id = $value['id'];
                $name = $value['name'];
                echo "<option value=\"$id\">$name</option>";
            }
        ?>
        </select> 

        <select>
        <?php
            foreach ($teachers as $value) {
                $id = $value['id'];
                $name = $value['name'];
                $lastname = $value['lastname'];
                echo "<option value=\"$id\">$name  $lastname</option>";
            }
        ?>
        </select> 

        <br><br>
‍        آپلود فایل جزوه/امتحان<br>
        <input type="file" name="bookname" placeholder="نام فایل را وارد کن." required>
        <br>
        <br>
        یک عکس از یک بخش جزوه بزار:<br>
        <input type="file" name="bookname" placeholder="نام فایل را وارد کن." required>
        <br>

        <br>

        <br><br>
        <input type="submit" value="تایید">
    </form> 

</body>
</html>
