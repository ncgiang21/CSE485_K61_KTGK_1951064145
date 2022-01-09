<?php
    require_once 'src/models/ManageModels.php';

    class ManageController {
        public function index() {
            echo "<h1>Chương trình dự án KTTV BDKH </h1>";
            $duan = new Duan();
            $duans = $duan->indexDA();
            require_once 'src/views/manage/index.php';
        }

        public function add() {
            $error = '';
            if (isset($_POST['submit'])) {
                $tenduan = $_POST['tenduan'];
                $namthuchien = $_POST['namthuchien'];
                $linhvuc = $_POST['linhvuc'];
                $nhiemvu = $_POST['nhiemvu'];
                $coquanthuchien= $_POST['coquanthuchien'];
                
                $duan = new Duan();
                $duanArr = [
                    'tenduan' => $tenduan,
                    'namthuchien' => $namthuchien,
                    'linhvuc' => $linhvuc,
                    'nhiemvu' => $nhiemvu,
                    'coquanthuchien' => $coquanthuchien,
                ];

                $isInsert = $duan->insert($duanArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=manage&action=index");
                exit();
            }
            //gọi view
            require_once 'src/views/manage/add.php';
        }

        public function edit() {
            if (!isset($_GET['maduan'])) {
                $_SESSION['error'] = "Tham số không hợp lệ";
                header("Location: index.php?controller=manage&action=index");
                return;
            }

            if (!is_numeric($_GET['maduan'])) {
                $_SESSION['error'] = "Mã dự án phải là số";
                header("Location: index.php?controller=manage&action=index");
                return;
            }

            $maduan = $_GET['maduan'];
            //gọi model để lấy ra đối tượng sách theo mã dự án
            $duanModel = new Duan();
            $duan = $duanModel->getDuanById($maduan);

            //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
            // $error = '';
            if (isset($_POST['submit'])) {
                $tenduan = $_POST['tenduan'];
                $namthuchien = $_POST['namthuchien'];
                $linhvuc = $_POST['linhvuc'];
                $nhiemvu = $_POST['nhiemvu'];
                $coquanthuchien = $_POST['coquanthuchien'];
                //check validate dữ liệu
            
                //xử lý update dữ liệu vào hệ thống
                $duanModel = new Duan();
                
                $duanArr = [
                    'tenduan' => $tenduan,
                    'namthuchien' => $namthuchien,
                    'linhvuc' => $linhvuc,
                    'nhiemvu' => $nhiemvu,
                    'coquanthuchien' => $coquanthuchien,
                ];

                $isUpdate = $duanModel->update($duanArr);
            
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$maduan thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$maduan thất bại";
                }
                header("Location: index.php?controller=manage&action=index");
                exit();
                
            }
            //truyền ra view
            require_once 'src/views/manage/edit.php';

        }

        public function delete() {
            $maduan = $_GET['maduan'];
            if (!is_numeric($maduan)) {
                header("Location: index.php?controller=manage&action=index");
                exit();
            }
    
            $duan = new Duan();
            $isDelete = $duan->delete($maduan);
    
            if ($isDelete) {
                $_SESSION['success'] = "Xóa bản ghi #$maduan thành công";
            }
            else {
                $_SESSION['error'] = "Xóa bản ghi #$maduan thất bại";
            }
    
            header("Location: index.php?controller=manage&action=index");
            exit();
        }

    }
?>