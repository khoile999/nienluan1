<?php
require './administrator/element_LHK/mod/hanghoaCls.php';
$hanghoa = new hanghoa();

if (isset($_GET['reqView'])) {
    $idloaihang = $_GET['reqView'];
    $list_hanghoa = $hanghoa->HanghoaGetbyIdloaihang($idloaihang);
    $s = count($list_hanghoa);
} else {
    $list_hanghoa = $hanghoa->HanghoaGetAll();
    $s = count($list_hanghoa);
}
?>

<div>
    <?php
    foreach ($list_hanghoa as $v) {
    ?>
        <a href="./index.php?reqHanghoa=<?php echo $v->idhanghoa; ?>">
            <div class="itemsHanghoa">
                <img class="imgHanghoa" src="data:image/png;base64,<?php echo $v->hinhanh; ?>">
                Sản Phẩm: <?php echo $v->tenhanghoa; ?><br>
                Giá bán: <?php echo $v->giathamkhao; ?><br>
            </div>
<<<<<<< HEAD
=======
            
>>>>>>> 0c165b0 (updatesetfalse)
        </a>
    <?php
    }
    ?>
</div>