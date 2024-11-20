<?php
$s = '../../element_LHK/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './element_LHK/mod/database.php';
    if (!file_exists($f)) {
        $f = './administrator/element_LHK/mod/database.php';
    }
}
require_once $f;
class hanghoa extends Database
{
    public function HanghoaGetAll()
    {
        $sql = 'select * from hanghoa';
        $getAll = $this->connect->prepare($sql);
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();
        return $getAll->fetchAll();
    }

    public function HanghoaAdd($tenhanghoa, $mota, $giathamkhao, $hinhanh, $idloaihang, $idthuonghieu)
    {   
        $sql = "INSERT INTO hanghoa (tenhanghoa, mota, giathamkhao, hinhanh, idloaihang, idthuonghieu) VALUES (?,?,?,?,?,?)";
        $data = array($tenhanghoa, $mota, $giathamkhao, $hinhanh, $idloaihang, $idthuonghieu);
        $add = $this->connect->prepare($sql);
        $add->execute($data);
        return $add->rowCount();
    }

    public function HanghoaDelete($idhanghoa)
    {
<<<<<<< HEAD
        $sql = "DELETE from hanghoa where idhanghoa = ?";
        $data = array($idhanghoa);
        $del = $this->connect->prepare($sql);
        $del->execute($data);
        return $del->rowCount();
=======
        try {
            // Start transaction
            $this->connect->beginTransaction();
            
            // First delete related records in dongia table
            $sql_dongia = "DELETE FROM dongia WHERE idHangHoa = ?";
            $del_dongia = $this->connect->prepare($sql_dongia);
            $del_dongia->execute(array($idhanghoa));
            
            // Then delete the hanghoa record
            $sql_hanghoa = "DELETE FROM hanghoa WHERE idhanghoa = ?";
            $del_hanghoa = $this->connect->prepare($sql_hanghoa);
            $del_hanghoa->execute(array($idhanghoa));
            
            // Commit transaction
            $this->connect->commit();
            return true;
            
        } catch (PDOException $e) {
            // Rollback transaction on error
            $this->connect->rollBack();
            return false;
        }
>>>>>>> 0c165b0 (updatesetfalse)
    }

    public function HanghoaUpdate($tenhanghoa, $hinhanh, $mota, $giathamkhao, $idloaihang, $idthuonghieu, $idhanghoa)
    {
        $sql = "UPDATE hanghoa set tenhanghoa=?, hinhanh=?, mota=?, giathamkhao=?, idloaihang=?, idthuonghieu=? WHERE idhanghoa =?";
        $data = array($tenhanghoa, $hinhanh, $mota, $giathamkhao, $idloaihang, $idthuonghieu, $idhanghoa);
        $update = $this->connect->prepare($sql);
        $update->execute($data);
        return $update->rowCount();
    }

    public function HanghoaGetbyId($idhanghoa)
    {
        $sql = 'select * from hanghoa where idhanghoa=?';
        $data = array($idhanghoa);
        $getOne = $this->connect->prepare($sql);
        $getOne->setFetchMode(PDO::FETCH_OBJ);
        $getOne->execute($data);
        return $getOne->fetch();
    }

    public function HanghoaGetbyIdloaihang($idloaihang)
    {
        $sql = 'select * from hanghoa where idloaihang=?';
        $data = array($idloaihang);
        $getOne = $this->connect->prepare($sql);
        $getOne->setFetchMode(PDO::FETCH_OBJ);
        $getOne->execute($data);
        return $getOne->fetchAll();
    }

    public function HanghoaGetbyIdthuonghieu($idthuonghieu)
    {
        $sql = 'select * from hanghoa where idthuonghieu=?';
        $data = array($idthuonghieu);
        $getOne = $this->connect->prepare($sql);
        $getOne->setFetchMode(PDO::FETCH_OBJ);
        $getOne->execute($data);
        return $getOne->fetchAll();
    }

    public function HanghoaUpdatePrice($idhanghoa, $giaban)
    {
        $sql = "UPDATE hanghoa SET giathamkhao = ? WHERE idhanghoa = ?";
        $data = array($giaban, $idhanghoa);

        $update = $this->connect->prepare($sql);
        $update->execute($data);
        return $update->rowCount();
    }
}
