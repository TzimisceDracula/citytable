<?php
//Подключение БД
include "db.php";

$section2="";

if($res = mysqli_query($conn,"SELECT * FROM city ORDER BY id DESC"))
{
    while($row = mysqli_fetch_assoc($res))
    {
        $id_val = htmlentities($row['id']);
        $name_val = htmlentities($row['name']);
        $photo_val = htmlentities($row['photo']);
        $preview_val = htmlentities($row['preview']);

        $section2 .= "<a href=\"".$photo_val."\" class=\"tm-slider-img\"><img src=\"".$preview_val."\" alt=\"Image\" class=\"img-fluid\">".$name_val."</a>";
    }
}

mysqli_close($conn);
