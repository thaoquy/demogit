<?php
if(!isset($bien_bao_mat)){    exit();}
function trang_truoc_html() {
?>
<html>
    <head>
        <meta charset="utf_8">
        <title>Đang chuyển về trang trước</title>
    </head>
    <body>
        <script type="text/javascript">
            window.history.back();
        </script>
    </body>
</html>
<?php
}
function thong_bao_html($c) {
    $lien_ket_trang_truoc = $_SERVER['HTTP_REFERER'];
    ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thông báo</title>
        
    </head>
    <body>
        <style type="text/css">
            a.trang_truoc_c8w{text-decoration: none; color: blue; font-size: 36px; margin-left: 50px}
            a.trang_truoc_c8w:hover{color: red}
        </style>
        <script type="text/javascript">
            alert(<?php echo ($c) ?>)
        </script>
        <br><br><br><?php
                    echo $_SERVER['QUERY_STRING'];?><br><?php
                    echo $_SERVER['REQUEST_URI'];?><br><?php
                    echo $_SERVER['HTTP_HOST'];?><br><?php
                    echo $_SERVER['HTTP_REFERER'];?><br><?php
                    echo $_SERVER['SCRIPT_NAME'];?><br><?php
                    echo $_SERVER['REQUEST_METHOD'];?><br><?php
                    echo $_SERVER['REQUEST_TIME'];?><br><?php
                    echo $_SERVER['HTTP_USER_AGENT'];?><br><?php
                    echo $_SERVER['REQUEST_TIME'];?><br><?php
                    echo $_SERVER['REMOTE_ADDR'];?><br>
        <a href="<?php echo $lien_ket_trang_truoc?>" class="trang_truoc_c8w">Bấm vào đây để trở về trang trước</a>
    </body>
</html>
<?php
exit();
}
?>

