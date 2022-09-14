<?php
    $fullname = $_POST['fullname'];
    $avatar = $_POST['avatar'];
    $star = $_POST['star'];
    $specialize = $_POST['specialize'];
    $experience = $_POST['experience'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $zalo = $_POST['zalo'];

    $conn = new mysqli('localhost', 'root', '' , 'datamembertbt');
    mysqli_set_charset($conn, 'UTF8');
    $sql = "INSERT INTO infor_member(fullname,avatar,star,specialize,experience,phone_number,email,facebook,zalo) VALUES ('$fullname','$avatar','$star','$specialize','$experience','$phone_number','$email','$facebook','$zalo')";
    $result = $conn->query($sql);
    if ($result) {
        echo 'Đã thêm thành công';
    } else {
        echo 'kẻ thất bại';
    }
    $conn->close();
?>