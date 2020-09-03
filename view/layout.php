<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP</title>
</head>
<style type="text/css">
    .banner {
        background-image: url(./../../images/banner-3.jpg);
        width: 100%;
        height: 600px;
    }
</style>

<body>

    <div class="top-menu">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3498db;">
            <a class="navbar-brand" href="#" style="color: #fff"><strong>PHP</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: #fff"> HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="float: right;">
                        <a class="nav-link" href="#" style="color: #fff">Đăng Xuất</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="banner">

    </div>

    <table style="margin-top: 20px">
        <tr>
            <td style="width: 50%">
                <ul style="list-style: none;">
                    <?php
                    if (isset($_SESSION["username"])) {
                    ?>
                        <li><a href="/nguoidung/danhsach">Danh sách người dùng</a></li>
                        <li><a href="/nguoidung/them">Thêm người dùng</a></li>
                        <li><a href="/nguoidung/hienthidangnhap">Đăng xuất</a></li>
                    <?php
                    } else {  ?>
                        <li>Đăng nhập</li>
                    <?php
                    }

                    ?>
                </ul>
            </td>
            <td><?php
                $controllerName::$actionName();
                ?></td>
        </tr>
    </table>

    <div class="ft-bot" style="height: 40px; margin-top: 20px; text-align: center; width: 100%; background-color: #3498db">
        <p style="margin: 0; padding-top: 10px; color: #fff">trang web php</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>