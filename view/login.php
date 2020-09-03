<form action="/nguoidung/thuchiendangnhap" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td></td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="hanhdong" value="dangnhap"></td>
            <td><?=$messageError??"" ?></td>
        </tr>
    </table>
</form>