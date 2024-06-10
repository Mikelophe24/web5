<?php 
class formchinh_ctrl extends controller{
    private $ds;
    function __construct()
    {
        $this->ds=$this->model('Thigiuaki_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'formchinh_v'
        ]);
    }
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $makhoa=$_POST['txtMaKhoa'];
            $tenkhoa=$_POST['txtTenKhoa'];
            $scbgd=isset($_POST['txtSCBGD']) ? isset($_POST['txtSCBGD']) : '';
            $dulieu=$this->ds->thi_find($makhoa,$tenkhoa);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinh_v',
                'dulieu'=>$dulieu,
                'makhoa'=>$makhoa,
                'tenkhoa'=>$tenkhoa,
                'scbgd'=>$scbgd
            ]);
        }
    }
    function timkiem1(){
        
        $makhoa='';
        $tenkhoa='';
        $scbgd=isset($_POST['txtSCBGD']) ? isset($_POST['txtSCBGD']) : '';
        $dulieu=$this->ds->thi_find($makhoa,$tenkhoa);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'formchinh_v',
            'dulieu'=>$dulieu,
            'makhoa'=>$makhoa,
            'tenkhoa'=>$tenkhoa,
            'scbgd'=>$scbgd
        ]);
    
}
    function xoa($id){
        $kq=$this->ds->thi_del($id);
        if($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
        $makhoa=isset($_POST['txtMaKhoa']) ? isset($_POST['txtMaKhoa']) : '' ;
        $tenkhoa=isset($_POST['txtTenKhoa']) ? isset($_POST['txtTenKhoa']) : '';
        $scbgd=isset($_POST['txtSCBGD']) ? isset($_POST['txtSCBGD']) : '';
        $dulieu=$this->ds->thi_find($makhoa,$tenkhoa);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'formchinh_v',
            'dulieu'=>$dulieu,
            'makhoa'=>$makhoa,
            'tenkhoa'=>$tenkhoa,
            'scbgd'=>$scbgd

        ]);
    }
    function sua($id){
        $this->view('Masterlayout',[
            'page'=>'formsua_v',
            'dulieu'=>$this->ds->thi_find1($id)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtID'];
            $makhoa=$_POST['txtMaKhoa'];
            $tenkhoa=$_POST['txtTenKhoa'];
            $scbgd = $_POST['txtSCBGD'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->ds->thi_upd($id,$makhoa,$tenkhoa,$scbgd);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else
                echo "<script>alert('Sửa thất bại!')</script>";
           
            //Gọi lại giao diện và truyền $dulieu ra
            $makhoa=$_POST['txtMaKhoa'];
            $tenkhoa=$_POST['txtTenKhoa'];
            $scbgd = $_POST['txtSCBGD'];
            $dulieu=$this->ds->thi_find($makhoa,$tenkhoa);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinh_v',
                'dulieu'=>$dulieu,
                'makhoa'=>$makhoa,
                'tenkhoa'=>$tenkhoa,
                'scbgd'=>$scbgd
            ]);
                
        }
    }
}
?>
