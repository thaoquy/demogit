<?php
    $tv = "select * from banner limit 0,2";
    $tv_1 = mysqli_query($conn, $tv);
    $tv_2 = mysqli_fetch_array($tv_1);
    $link_hinh = "hinh_anh/banner/".$tv_2['hinh'];
    echo "<img src='".$link_hinh."' style= \"width: ".$tv_2['rong']."; height: ".$tv_2['cao']."\">";
?>
