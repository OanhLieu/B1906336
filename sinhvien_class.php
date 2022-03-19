<?php 
    class sinhvien{
        public $mssv;
        public $hoten;
        public $ngaysinh;

        //gan gia tri cho thuoc tinh
        function set_sinhvien($hoten,$mssv,$ngaysinh) {
            $this->hoten = $hoten;
            $this->mssv = $mssv;
            $this->ngaysinh = $ngaysinh;
          }
        //tra ve gia tri
          function get_sinhvien() {
            return $this->hoten;
            return $this->mssv;
            return $this->ngaysinh;
          }
        
        //phuong thuc xay dung
          function __construct($hoten,$mssv,$ngaysinh) {
            $this->hoten = $hoten;
            $this->mssv = $mssv;
            $this->ngaysinh = $ngaysinh;
          }
        //phuong thuc huy
        
        function __destruct() {
            echo "Họ tên sinh viên: {$this->hoten}.";
            echo "<br/>";
            echo "Mã số sinh viên: {$this->mssv}.";
            echo "<br/>";
            echo "Ngày sinh của sinh viên: {$this->ngaysinh}.";
          }
        
    }
    $sv=new sinhvien("Lieu Kieu Oanh","B1906336","20/11/2001");
    
?>