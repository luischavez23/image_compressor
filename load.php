<?php

    require './vendor/autoload.php';
    use Intervention\Image\ImageManager;

    $folder = "uploads/";
    $date = date("Ymd_His");
    $width = $_POST['width'];
    $heigth = $_POST['heigth'];

    $name = $folder.$date."_".$_FILES['image']['name'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], $name)){
        $manager = ImageManager::gd()->read($name);
        $image = $manager->cover($width, $heigth);
        $image->save($name);
        echo '<p class="text-center display-1">El archivo subió correctamente</p>';
        echo '<a href="index">Regresar a pagina de Inicio</a>';
    }else{

        echo "Error, vuelve  intentarlo";
    }

?>