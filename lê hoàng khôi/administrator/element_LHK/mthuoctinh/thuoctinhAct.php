<?php
session_start();
require '../../element_LHK/class/thuoctinhCls.php';

if (isset($_GET['reqact'])) {
    $requestAction = $_GET['reqact'];
    switch ($requestAction) {
        case 'addnew':
            $tenthuoctinh = $_REQUEST['tenthuoctinh'];
            $mota = $_REQUEST['mota'];
            $hinhanh_file = $_FILES['fileimage']['tmp_name'];
<<<<<<< HEAD
            $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh_file)));
            $tt = new ThuocTinh();
            $kq = $tt->ThuocTinhAdd($tenthuoctinh, $mota, $hinhanh);

=======
            
            if (!empty($hinhanh_file)) {
                $hinhanh = base64_encode(file_get_contents($hinhanh_file));
            } else {
                $hinhanh = '';
            }

            $tt = new ThuocTinh();
            $kq = $tt->ThuocTinhAdd($tenthuoctinh, $mota, $hinhanh);
            
>>>>>>> 0c165b0 (updatesetfalse)
            if ($kq) {
                header('location: ../../index.php?req=thuoctinhView&result=ok');
            } else {
                header('location: ../../index.php?req=thuoctinhView&result=notok');
            }
            break;

        case 'deletethuoctinh':
            $idthuoctinh = $_REQUEST['idthuoctinh'];
<<<<<<< HEAD

            $tt = new ThuocTinh();
            $kq = $tt->ThuocTinhDelete($idthuoctinh);

=======
            $tt = new ThuocTinh();
            $kq = $tt->ThuocTinhDelete($idthuoctinh);
            
>>>>>>> 0c165b0 (updatesetfalse)
            if ($kq) {
                header('location: ../../index.php?req=thuoctinhView&result=ok');
            } else {
                header('location: ../../index.php?req=thuoctinhView&result=notok');
            }
            break;

        case 'updatethuoctinh':
            $idthuoctinh = $_REQUEST['idthuoctinh'];
            $tenthuoctinh = $_REQUEST['tenthuoctinh'];
            $mota = $_REQUEST['mota'];
<<<<<<< HEAD
            if(file_exists($_FILES['fileimage']['tmp_name'])){
                $hinhanh_file = $_FILES['fileimage']['tmp_name'];
                $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh_file)));
            }else{
                $hinhanh = $_REQUEST['hinhanh'];
            }
            $tt = new ThuocTinh();
            $kq = $tt->ThuocTinhUpdate($tenthuoctinh, $mota, $hinhanh, $idthuoctinh);

=======
            
            // Check if a new image was uploaded
            if (!empty($_FILES['fileimage']['tmp_name'])) {
                $hinhanh = base64_encode(file_get_contents($_FILES['fileimage']['tmp_name']));
            } else {
                // If no new image, use the existing one
                $hinhanh = $_REQUEST['hinhanh'];
            }

            $tt = new ThuocTinh();
            $kq = $tt->ThuocTinhUpdate($tenthuoctinh, $mota, $hinhanh, $idthuoctinh);
            
>>>>>>> 0c165b0 (updatesetfalse)
            if ($kq) {
                header('location: ../../index.php?req=thuoctinhView&result=ok');
            } else {
                header('location: ../../index.php?req=thuoctinhView&result=notok');
            }
            break;

        default:
            header('location: ../../index.php?req=thuoctinhView');
            break;
    }
} else {
    header('location: ../../index.php?req=thuoctinhView');
}
?>
