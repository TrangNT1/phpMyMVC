<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table cellpadding="10" style="background: #ccc">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Fullname</td>
            <td>Địa chỉ</td>
            <td>Sửa/Xóa</td>
        </tr>
        <?php foreach ($lsNguoiDung as $u) { ?>
            <tr>
                <td> <?php echo $u['id'] ?> </td>
                <td> <?php echo $u['username'] ?> </td>
                <td> <?php echo $u['password'] ?> </td>
                <td> <?php echo $u['fullname'] ?> </td>
                <td> <?php echo $u['diachi'] ?> </td>
                <td>
                    <a href="index.php?hanhdong=sua&id=<?php echo $u['id'] ?>">Sửa</a>
                    /<a href="index.php?hanhdong=xoa&id=<?php echo $u['id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>