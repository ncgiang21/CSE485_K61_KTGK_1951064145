<h1>
    Thêm mới dự án
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Tên dự án :
    <input type="text" name="tenduan" value="" />
    <br />
    Thời gian :
    <input type="text" name="namthuchien" value="" />
    <br />
    Lĩnh vực :
    <input type="text" name="linhvuc" value="" />
    <br />
    Nhiệm vụ :
    <input type="text" name="nhiemvu" value="" />
    <br />
    Cơ quan thực hiện :
    <input type="text" name="coquanthuchien" value="" />
    <br />
    <input type="submit" name="submit" value="Lưu" />
</form>