<?php 
class Thigiuaki_m extends connectDB{
    public function thi_ins($id,$makhoa,$tenkhoa,$scbgd){
        $sql="INSERT INTO khoa VALUES ('$id','$makhoa','$tenkhoa','$scbgd')";
        return mysqli_query($this->con,$sql);
    }
    public function thi_all(){
        $sql="Select * From khoa";
        return mysqli_query($this->con,$sql);
    }
    function checktrungmaid($id){
        $sql="Select * From khoa Where id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    public function thi_find($makhoa,$tenkhoa){
        $sql="SELECT * FROM khoa WHERE makhoa like '%$makhoa%' 
        AND tenkhoa like '%$tenkhoa%'";
        return mysqli_query($this->con,$sql);
    }
    public function thi_find1($id){
        $sql="SELECT * FROM khoa WHERE id like '%$id%'";
        return mysqli_query($this->con,$sql);
    }
    function thi_del($id){
        $sql="DELETE FROM khoa WHERE id = '$id'";
        return mysqli_query($this->con,$sql);
    }
    function thi_upd($id,$makhoa,$tenkhoa,$scbgd){
        $sql="UPDATE khoa SET makhoa='$makhoa',tenkhoa='$tenkhoa',scbgd='$scbgd'
        WHERE id='$id'";
        return mysqli_query($this->con,$sql);
    }
}
?>