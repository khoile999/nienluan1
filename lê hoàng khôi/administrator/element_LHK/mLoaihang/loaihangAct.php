<?php
session_start();
    
     require '../../element_LHK/mod/loaihangCls.php';

    if(isset($_GET['reqact'])){
        $requestAction = $_GET['reqact'];
        switch ($requestAction){
            case 'addnew':
                $tenloaihang = $_REQUEST['tenloaihang'];
                $mota = $_REQUEST['mota'];
                $hinhanh_file = $_FILES['fileimage']['tmp_name'];
                
                $hinhanh = base64_encode(file_get_contents(addslashes(($hinhanh_file))));  
             

                // echo $tenloaihang . '<br>';
                // echo $mota . '<br>';
                // echo $hinhanh_file. '<br>';
            

                $lh = new loaihang();
                $kq = $lh->loaihangAdd($tenloaihang, $hinhanh, $mota);
               
                if($kq){
                    header('location: ../../index.php?req=loaihangView&result=ok');
                }else{
                    header('location: ../../index.php?req=loaihangView&result=not ok');
                }
                break;
            case 'deleteloaihang':
                // // nhận dữ liệu gửi về và kiểm thử.
                $idloaihang = $_REQUEST['idloaihang'];
                // // echo $iduser;
                // // khởi tạo đối tượng và thục hiện chức năng xóa.
                $lh = new  loaihang();
                $kq = $lh->LoaihangDelete($idloaihang);
                // // xử lý kết quả trả về.
                if($kq){
                    header('location: ../../index.php?req=loaihangView&result=ok');
                }else{
                    header('location: ../../index.php?req=loaihangView&result=not ok');
                }
                break;
           
            case 'updateloaihang':
<<<<<<< HEAD
                //nhận dữ liệu và kiểm thử
=======
>>>>>>> 0c165b0 (updatesetfalse)
                $idloaihang = $_REQUEST['idloaihang'];
                $tenloaihang = $_REQUEST['tenloaihang'];
                $mota = $_REQUEST['mota'];

<<<<<<< HEAD
                if(file_exists($_FILES['fileimage']['tmp_name'])){
                    $hinhanh_file = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents(addslashes($hinhanh_file)));
                }else{
                    $hinhanh = $_REQUEST['hinhanh'];
                }
               
                //kiểm thử dữ liệu đã đầy đủ chưa?
                //echo $idloaihang . '<br>';
                //echo $tenloaihang . '<br>';
                //echo $mota . '<br>';
                //echo $hinhanh . '<br>';
               
                // tạo đối tượng và thực hiện update sau đó xữ lí kết quả trả về
                $lh = new loaihang();
                $kq = $lh->LoaihangUpdate($tenloaihang,$hinhanh,$mota,$idloaihang);
                if($kq){
                    header('location: ../../index.php?req=loaihangView&result=ok');
                }else{
=======
                // Handle image upload
                if (!empty($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh_file = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh_file));
                } else {
                    // If no new image uploaded, use existing one
                    $hinhanh = $_REQUEST['hinhanh'];
                }

                $lh = new loaihang();
                $kq = $lh->LoaihangUpdate($tenloaihang, $hinhanh, $mota, $idloaihang);
                
                if ($kq) {
                    header('location: ../../index.php?req=loaihangView&result=ok');
                } else {
>>>>>>> 0c165b0 (updatesetfalse)
                    header('location: ../../index.php?req=loaihangView&result=notok');
                }
                break;
            default:
            header('location:../../index.php?req=loaihangView');
            break;
        }
    }else{
        header('location: ../../index.php?req=loaihangView');
    }
?>