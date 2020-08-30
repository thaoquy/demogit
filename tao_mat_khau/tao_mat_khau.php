     <?php
        if(isset($_GET['oo'])){
        $lien_ket_trang_truoc = $_SERVER['HTTP_REFERER'];
    ?>

    <head>
        <meta charset="utf-8">
        <title>Thông báo</title>
        
    </head>
    <body>
        <style type="text/css">
            a.trang_truoc_c8w{text-decoration: none; color: blue; font-size: 36px; margin-left: 50px}
            a.trang_truoc_c8w:hover{color: red}
        </style>
        
        <br><br><br>
        <a href="<?php echo $lien_ket_trang_truoc?>" class="trang_truoc_c8w">Bấm vào đây để trở về trang trước</a>
        <script type="text/javascript">
            alert("<?php echo "đã chuyển trang" ?>")
        </script>
    </body>
</html>
<?php

exit();
}
?>
<html>
    <head>
        <meta charset="utf-8" >
        <title>
            Tạo mật mã
        </title>
    </head>
    <body>
        <?php
        $c ="admin";
        $mat_khau = md5($c);
        $mat_khau = md5($mat_khau);
        echo $mat_khau."<hr>";
        ?>
        <form action="" method="post">
<select name="dropdown">
<option value="co so du lieu" >SQL</option>
<option value="ngon ngu lap trinh" selected>Java</option>
</select>
<input type="submit" value="Submit" />

            
        </form>
    </body>
</html>

