<?php
    require_once "./src/config/database.php";

    class Duan {
        public $maduan;
        public $tenduan;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST,
                DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }

        public function insert($duan = []) {
            $connection = $this->connectDb();
            //tạo và thực thi truy vấn
            $queryInsert = "INSERT INTO duan (`tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) 
            VALUES ('{$duan['tenduan']}', '{$duan['namthuchien']}', '{$duan['linhvuc']}', 
            '{$duan['nhiemvu']}', '{$duan['coquanthuchien']}')";
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);

            return $isInsert;
        }

        public function indexDA() {
            $connection = $this->connectDb();
            //truy vấn
            $querySelect = "SELECT * FROM duan";
            $results = mysqli_query($connection, $querySelect);
            $duans = [];
            if (mysqli_num_rows($results) > 0) {
                $duans = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            $this->closeDb($connection);
    
            return $duans;
        }

        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getDuanById($maduan = null) {
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM duan WHERE maduan=$maduan";
            $results = mysqli_query($connection, $querySelect);
            $duan = [];
            if (mysqli_num_rows($results) > 0) {
                $duans = mysqli_fetch_all($results, MYSQLI_ASSOC);
                $duan = $duans[0];
            }
            $this->closeDb($connection);
    
            return $duan;
        }

        public function update($duan) {
          
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE duan SET `tenduan` = '{$duan['tenduan']}', `namthuchien` = '{$duan['namthuchien']}',  `linhvuc` = '{$duan['linhvuc']}'
            ,  `nhiemvu` = '{$duan['nhiemvu']}',  `coquanthuchien` = '{$duan['coquanthuchien']}'  WHERE `maduan` = {$duan['maduan']} ";
            $isUpdate = mysqli_query($connection, $queryUpdate);
            $this->closeDb($connection);
    
            return $isUpdate;
        }

        public function delete($maduan = null) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM duan WHERE maduan = $maduan";
            $isDelete = mysqli_query($connection, $queryDelete);
    
            $this->closeDb($connection);
    
            return $isDelete;
        }
    }
 ?>