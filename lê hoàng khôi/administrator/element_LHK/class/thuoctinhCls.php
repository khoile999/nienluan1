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
class ThuocTinh extends Database
{
    // Lấy tất cả các thuộc tính
    public function ThuocTinhGetAll()
    {
        $sql = 'SELECT * FROM thuoctinh';
        
        $getAll = $this->connect->prepare($sql);
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();
        
        return $getAll->fetchAll();
    }

    // Thêm mới một thuộc tính
    public function ThuocTinhAdd($tenthuoctinh, $mota, $hinhanh)
    {
        $sql = "INSERT INTO thuoctinh (tenthuoctinh, mota, hinhanh) VALUES (?, ?, ?)";
        $data = array($tenthuoctinh, $mota, $hinhanh);
        
        $add = $this->connect->prepare($sql);
        $add->execute($data);
        
        return $add->rowCount();
    }

    // Xóa thuộc tính theo id
    public function ThuocTinhDelete($idthuoctinh)
    {
<<<<<<< HEAD
        $sql = "DELETE FROM thuoctinh WHERE idthuoctinh = ?";
        $data = array($idthuoctinh);
        
        $del = $this->connect->prepare($sql);
        $del->execute($data);
        
        return $del->rowCount();
=======
        try {
            // Start transaction
            $this->connect->beginTransaction();
            
            // First delete related records in tthh table
            $sql_tthh = "DELETE FROM tthh WHERE idthuoctinh = ?";
            $del_tthh = $this->connect->prepare($sql_tthh);
            $del_tthh->execute(array($idthuoctinh));
            
            // Then delete the thuoctinh record
            $sql_thuoctinh = "DELETE FROM thuoctinh WHERE idthuoctinh = ?";
            $del_thuoctinh = $this->connect->prepare($sql_thuoctinh);
            $del_thuoctinh->execute(array($idthuoctinh));
            
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

    // Cập nhật thuộc tính
    public function ThuocTinhUpdate($tenthuoctinh, $mota, $hinhanh, $idthuoctinh)
    {
        $sql = "UPDATE thuoctinh SET tenthuoctinh = ?, mota = ?, hinhanh = ? WHERE idthuoctinh = ?";
        $data = array($tenthuoctinh, $mota, $hinhanh, $idthuoctinh);
        
        $update = $this->connect->prepare($sql);
        $update->execute($data);
        
        return $update->rowCount();
    }

    // Lấy thông tin thuộc tính theo id
    public function ThuocTinhGetById($idthuoctinh)
    {
        $sql = 'SELECT * FROM thuoctinh WHERE idthuoctinh = ?';
        $data = array($idthuoctinh);
        
        $getOne = $this->connect->prepare($sql);
        $getOne->setFetchMode(PDO::FETCH_OBJ);
        $getOne->execute($data);
        
        return $getOne->fetch();
    }
}
?>
