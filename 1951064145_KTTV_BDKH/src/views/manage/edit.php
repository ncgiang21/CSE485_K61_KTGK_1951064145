<form action="" method="post">
    Tên dự án :
    <input type="text" name="tenduan" value="<?php echo isset($_POST['tenduan']) ? $_POST['tenduan'] : $duan['tenduan']?>"/>
    <br>
    Thời gian :
    <input type="text" name="namthuchien" value="<?php echo isset($_POST['namthuchien']) ? $_POST['namthuchien'] : $duan['namthuchien']?>" />
    <br>
    Lĩnh vực :
    <input type="text" name="linhvuc" value="<?php echo isset($_POST['linhvuc']) ? $_POST['linhvuc'] : $duan['linhvuc']?>" />
    <br>
    Nhiệm vụ :
    <input type="text" name="nhiemvu" value="<?php echo isset($_POST['nhiemvu']) ? $_POST['nhiemvu'] : $duan['nhiemvu']?>" />
    <br>
    Cơ quan thực hiện :
    <input type="text" name="coquanthuchien" value="<?php echo isset($_POST['coquanthuchien']) ? $_POST['coquanthuchien'] : $duan['coquanthuchien']?>" />
    <br>
    <input type="submit" name="submit" value="Cập nhật" />
</form>