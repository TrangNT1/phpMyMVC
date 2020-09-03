<?php
require_once "../database/database.php";
class modelNguoiDung
{
    function themNguoiDung($user)
    {
        global $db;
        $caulenh = "INSERT INTO public.users(
                username, password, fullname, diachi)
                VALUES (:username, :password, :fullname, :diachi);";
        $sth = $db->prepare($caulenh);
        $sth->execute($user);
        return $sth->rowCount() > 0;
    }
    function suaNguoiDung($id, $username, $password, $fullName, $diaChi)
    {
        global $db;
        $caulenh = "UPDATE public.users
            SET  username=?, password=?, fullname=?, diachi=?
            WHERE id=?;";
        $params = [$username, $password, $fullName, $diaChi, $id];
        $sth = $db->prepare($caulenh);
        $sth->execute($params);
    }
    function xoanhanvien($id)
    {
        global $db;
        $caulenh = "DELETE FROM public.users
            WHERE id=?";
        $params = [$id];
        $sth = $db->prepare($caulenh);
        $sth->execute($params);
    }

    function danhsachNguoiDung()
    {
        global $db;
        $caulenh = "SELECT * FROM users";
        $thuchien = $db->query($caulenh);
        $dulieusp = $thuchien->fetchAll();
        return $dulieusp;
    }
    function laynguoidungbangid($id)
    {
        global $db;
        $caulenh = "SELECT * FROM users WHERE id= ?";
        $sth = $db->prepare($caulenh);
        $sth->execute([$id]);
        $dulieusp = $sth->fetch(PDO::FETCH_NAMED);
        return $dulieusp;
    }
    function redirect($url)
    {
        session_write_close();
        header("Location: " . $url);
        exit;
    }
}
