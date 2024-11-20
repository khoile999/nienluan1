<?php
session_start();
require '../../element_LHK/class/dongiaCls.php';

if (isset($_REQUEST['idDonGia'])) {
    $idDonGia = $_REQUEST['idDonGia'];
    $apDung = ($_REQUEST['apDung'] === 'true');
    
    $dongiaObj = new Dongia();
    $dongia = $dongiaObj->DongiaGetbyId($idDonGia);
    
    $kq = $dongiaObj->DongiaUpdateStatus($idDonGia, $apDung);
    
    if ($kq) {
        if ($apDung) {
            $dongiaObj->HanghoaUpdatePrice($dongia->idHangHoa, $dongia->giaBan);
        }
        header('location: ../../index.php?req=dongiaView&result=ok');
    } else {
        header('location: ../../index.php?req=dongiaView&result=notok');
    }
} else {
    header('location: ../../index.php?req=dongiaView');
}
?> 