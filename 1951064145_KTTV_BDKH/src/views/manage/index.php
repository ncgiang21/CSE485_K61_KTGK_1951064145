
<a style="text-decoration: none" href="index.php?controller=manage&action=add">
    Thêm mới dự án
</a> <br></br>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Mã dự án</th>
        <th>Tên dự án</th>
        <th>Thời gian</th>
        <th>Lĩnh vực</th>
        <th>Nhiệm vụ</th>
        <th>Cơ quan thực hiện</th>
    </tr>

    <?php if (!empty($duans)): ?>
        <?php foreach ($duans AS $duan) : ?>
            <tr>
                <td><?php echo $duan['maduan'] ?></td>
                <td><?php echo $duan['tenduan'] ?></td>
                <td><?php echo $duan['namthuchien'] ?></td>
                <td><?php echo $duan['linhvuc'] ?></td>
                <td><?php echo $duan['nhiemvu'] ?></td>
                <td><?php echo $duan['coquanthuchien'] ?></td>
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=manage&action=detail&maduan=" . $duan['maduan'];
                    $urlEdit =
                        "index.php?controller=manage&action=edit&maduan=" . $duan['maduan'];
                    $urlDelete =
                        "index.php?controller=manage&action=delete&maduan=" . $duan['maduan'];
                    ?>
                    <a style="text-decoration: none" href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a style="text-decoration: none" href="<?php echo $urlEdit?>">Sửa</a> &nbsp;
                    <a style="text-decoration: none" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                       Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>