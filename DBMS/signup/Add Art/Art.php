<?php
@include'config.php';
session_start();

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 12500000000) {
            $em = "Sorry, your file is too large.";
            header("Location: addArt.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database



                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $price= mysqli_real_escape_string($conn, $_POST['price']);
                $about = mysqli_real_escape_string($conn, $_POST['about']);
                $medium = $_POST['medium'];
                $color = $_POST['color'];
                $style = $_POST['style'];
                $materials = $_POST['materials'];
                $height = mysqli_real_escape_string($conn, $_POST['height']);
                $width = mysqli_real_escape_string($conn, $_POST['width']);
                $size = $_POST['size'];
                $impasto = $_POST['impasto'];
                $user = $_SESSION['id'];
                $date = date('Y-m-d', strtotime($_POST['date']));
                $insert = "INSERT INTO art(name, price, about, medium, color, materials, style, url, height, width,impasto, size,user,date1) VALUES
                ('$name', '$price','$about','$medium','$color','$materials','$style','$new_img_name', '$height','$width','$impasto','$size','$user','$date')";
                mysqli_query($conn, $insert);




                header("Location: personalArtView.php");
            }else {
                $em = "You can't upload files of this type";
                header("Location: addArt.php?error=$em");
            }
        }
    }else {
        $em = "unknown error occurred!";
        header("Location: addArt.php?error=$em");
    }

}else {
    header("Location: addArt.php");
}

?>
