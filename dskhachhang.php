<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .thumbnail {
            height: 60px;
            width: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "ngoc trinh", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "1.jpg"),
        "2" => array("ten" => "hoang thuy linh", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "2.jpg"),
        "3" => array("ten" => "kieu anh herra", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "3.jpg"),
        "4" => array("ten" => "thu dung", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "4.jpeg")

    );
    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><div class='thumbnail'><image src = '" . $values['anh'] . "'/></div></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>