<?php
if(!isset($bien_bao_mat)){exit();}
$so_dong_tren_mot_trang = 20;
if(!isset($_GET['trang'])){$_GET['trang'] =1;}

$tv = "select count(*) from menu_ngang";
$tv_1 = mysqli_query($conn, $tv);
$tv_2 = mysqli_fetch_array($tv_1);
$so_trang = ceil($tv_2[0]/$so_dong_tren_mot_trang);

$tvbd = ($_GET['trang']-1)*$so_dong_tren_mot_trang;
$tv = "select id, ten from menu_ngang order by id limit $tvbd, $so_dong_tren_mot_trang";
$tv_1 = mysqli_query($conn, $tv);        
?>
<table width="990px" class="tb_a1">
    <tr style="background: #ccffff; height: 40px">
        <td width="550px"><b>Tên</b></td>
        <td align="center" width="220px"><b>Sửa</b></td>
        <td align="center" width="220px"><b>Xóa</b></td>
    </tr>
    <?php
    while($tv_2 = mysqli_fetch_array($tv_1)){
        $ten= $tv_2['ten'];
        $id = $tv_2['id'];
        $link_sua = "?thamso=sua_menu_ngang&id=".$id."&trang=".$_GET['trang'];
        $link_xoa = "?thamso=xoa_menu_ngang&id=".$id;
    ?>   
    
    
    <tr class="a_1">
        <td>
            <a href=<?php echo $link_sua;?> class="lk_a1"><?php echo $tv_2['ten']?></a>
        </td>
        <td align="center">
            <a href=<?php echo $link_sua;?> class="lk_a1">Sửa</a>
        </td>
        <td align="center">
            <a href=<?php echo $link_xoa;?> class="lk_a1">Xóa</a>
        </td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="3" align="center">
            <br>
            <?php
            for($i = 1; $i <= $so_trang;$i++){
                $link_phan_trang = "?thamso=quan_ly_menu_ngang&trang=$i";
                echo "<a href= '$link_phan_trang' class='phan_trang'>$i</a>";
            }
            ?>
            <br><br>
        </td>
    </tr>
</table>

