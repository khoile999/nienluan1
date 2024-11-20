<<<<<<< HEAD

=======
>>>>>>> 0c165b0 (updatesetfalse)
<h2>Cập nhật loại hàng</h2>
<?php
    require '../../element_LHK/mod/loaihangCls.php'; 

<<<<<<< HEAD
    if (isset($_GET['idloaihang'])) 
        $idloaihang = $_GET['idloaihang'];
        $lhObj = new loaihang();
        $getLhUpdate = $lhObj->LoaihangGetbyID($idloaihang);
    
=======
    if (isset($_GET['idloaihang'])) {
        $idloaihang = $_GET['idloaihang'];
        $lhObj = new loaihang();
        $getLhUpdate = $lhObj->LoaihangGetbyID($idloaihang);
    }
>>>>>>> 0c165b0 (updatesetfalse)
?>

<div>
    <form name="updateloaihang" id="formupdatelh" method="post" action='./element_LHK/mLoaihang/loaihangAct.php?reqact=updateloaihang' enctype="multipart/form-data">
        <input type="hidden" name="idloaihang" value="<?php echo $getLhUpdate->idloaihang; ?>"/>
        <input type="hidden" name="hinhanh" value="<?php echo $getLhUpdate->hinhanh; ?>"/>
        <table>
            <tr>
<<<<<<< HEAD
                <td> Tên loại hàng: </td>
                <td><input type="text" name="tenloaihang" value="<?php echo $getLhUpdate->tenloaihang; ?>" required></td>
            </tr>
            <tr>
                <td> Mô tả: </td>
                <td><input type="text" name="mota" value="<?php echo $getLhUpdate->mota; ?>" required></td>
            </tr>
            <tr>
                <td> Hình ảnh: </td>
                <td><input type="file" name="fileimage"></td>
            </tr>
          
        </table>
   
    <img src="data:image/png;base64,<?php echo $getLhUpdate->hinhanh; ?>" width="150">
    </form>
    <tr>
                <td><input type="submit" id="btnsubmit" value="Cập nhật"></td>
                <td><b id="noteFrom"></b></td>
            </tr>
=======
                <td>Tên loại hàng:</td>
                <td><input type="text" name="tenloaihang" value="<?php echo $getLhUpdate->tenloaihang; ?>" required></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td><input type="text" name="mota" value="<?php echo $getLhUpdate->mota; ?>" required></td>
            </tr>
            <tr>
                <td>Hình ảnh:</td>
                <td>
                    <input type="file" name="fileimage">
                    <img src="data:image/png;base64,<?php echo $getLhUpdate->hinhanh; ?>" width="150">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" id="btnsubmit" value="Cập nhật" class="btn btn-success">
                    <b id="noteForm"></b>
                </td>
            </tr>
        </table>
    </form>
>>>>>>> 0c165b0 (updatesetfalse)
</div>
