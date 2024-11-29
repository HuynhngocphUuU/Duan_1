<?php 
    function checkuser($user,$pass){
        $conn= connectdb();
        $stmt=$conn -> prepare ("SELECT * FROM khachhang WHERE user ='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result=$stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt-> fetchAll();
        return $kq[0]['roie'];
    }
    // function checkuser($user, $pass) {
    //     $conn = connectdb();
        
    //     // Sử dụng prepared statement để tránh SQL Injection
    //     $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user = :user AND pass = :pass");
    //     $stmt->bindParam(':user', $user);
    //     $stmt->bindParam(':pass', $pass);
    //     $stmt->execute();
    
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     if (count($result) > 0) {
    //         return $result[0]['role'];  // Trả về role của người dùng
    //     } else {
    //         return null;  // Nếu không tìm thấy người dùng
    //     }
    // }
    
?>