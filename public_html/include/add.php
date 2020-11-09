<?php
//Перенаправление на главную
header("Location: ../index.php");

//Обработка файлов изображений
$uploaddir = $_SERVER['DOCUMENT_ROOT']."/img/gallery/";
$uploadfile1 = $uploaddir . basename($_FILES['foto']['name']);
$uploadfile2 = $uploaddir . basename($_FILES['foto_prev']['name']);

//Ссылки на изображения для БД
$dir="/img/gallery/";
$src1=$dir.$_FILES['foto']['name'];
$src2=$dir.$_FILES['foto_prev']['name'];

//Загрузка файлов на сервер
if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile1) and move_uploaded_file($_FILES['foto_prev']['tmp_name'], $uploadfile2)) 
    {
        //Добавление города в БД
        include "db.php";

        $name = mysqli_real_escape_string($conn,$_POST['name']);
    
        if($stmt = $conn->prepare("INSERT INTO city(name, photo, preview) VALUES (?, ? , ?)"))
        {
            $stmt->bind_param("sss", $name,$src1,$src2);
            if(!$stmt->execute())
            {
                print_r("Error : $conn->error");
            }
            } else{
                print_r("Error preparing: $conn->error");
            }
        mysqli_close($conn);
        exit;
    } else {
        echo "Не получилось, не фартануло\n";
    }