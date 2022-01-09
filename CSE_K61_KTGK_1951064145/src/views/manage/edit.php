<h1>Sửa thông tin dự án</h1>
<form action="" method="post">
    Tên dự án :
    <input type="text" require name="tenduan" value="<?php echo isset($_POST['tenduan']) ? $_POST['tenduan'] : $duan['tenduan']?>" require/>
    <br>
    Thời gian :
    <input type="text" require name="namthuchien" value="<?php echo isset($_POST['namthuchien']) ? $_POST['namthuchien'] : $duan['namthuchien']?>" require />
    <br>
    Lĩnh vực :
    <input type="text" require name="linhvuc" value="<?php echo isset($_POST['linhvuc']) ? $_POST['linhvuc'] : $duan['linhvuc']?>" require />
    <br>
    Nhiệm vụ :
    <input type="text" require name="nhiemvu" value="<?php echo isset($_POST['nhiemvu']) ? $_POST['nhiemvu'] : $duan['nhiemvu']?>" require />
    <br>
    Cơ quan thực hiện :
    <input type="text" require name="coquanthuchien" value="<?php echo isset($_POST['coquanthuchien']) ? $_POST['coquanthuchien'] : $duan['coquanthuchien']?>" require />
    <br>
    <input type="submit" name="submit" value="Cập nhật" />
</form>