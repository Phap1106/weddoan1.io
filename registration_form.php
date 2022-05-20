<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>


<body>
<table width = "400" border ="2" cellpadding ="5" align = "center">
    <tr>
        <th colspan = "2"> ĐĂNG KÝ</th>
    </tr>
    <tr>
        <td> Tên của bạn </td>
        <td>
            <input type="text " name="fname" size="30" placeholder ="Tên của bạn">
        </td>
    </tr>
    <tr>
        <td> Email </td>
        <td>
            <input type="text " name="email" size="30" placeholder ="Email đăng nhập">
        </td>
    </tr>
    <tr>
        <td> Mật khẩu</td>
        <td>
            <input type="password" name="pass" size="30" placeholder="Mật khẩu">
        </td>
    </tr>
    <tr>
        <td>Nhập lại mật khẩu</td>
        <td> 
            <input type="password" name="repass" size="30" placeholder="Nhập lại mật khẩu">
        </td>
    </tr>
    <tr>
        <td>Giới tính</td>
        <td>
            <label>
                <input type="radio" name="gender" id="boy">Nam
            </label>
            <label>
                <input type="radio" name ="gender" id="nu">Nữ
            </label>
        </td>
    </tr>
    <tr>
        <td>Ngày sinh</td>
        <td>
        <input type="date" id="birthday" name="birthday">
        </td>
    </tr>
    <tr>
        <td>Số điện thoại</td>
        <td>
            <input type="text" name="phone" size="30" placeholder ="(+84)">
        </td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td>
            <textarea col="20"> </textarea>
        </td>
    </tr>
    <tr>
        <td colspan = "2" align="center">
            &nbsp;
            <button type="button">Đăng ký</button>
        </td>
    </tr>
</body>
</html>