<?php
class connectMod {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "ten_database"); // Đảm bảo thông tin đúng
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
    }

    public function selectall($sql) {
        $result = $this->conn->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
