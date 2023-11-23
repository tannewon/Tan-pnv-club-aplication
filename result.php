<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php 
        $name = $_POST['name'];
        $club = $_POST['club'];
        $skill = $_POST['skills'];
        $listSkills = implode(' and ',$skill); // tra ve mot chuoi chua cac phan tu trong mang cach nhau boi chu "and";
        $Day = $_POST['day'];
    
    
    ?>
        <?php
        $imageUrl="https://png.pngtree.com/png-vector/20210902/ourmid/pngtree-golden-commendation-decoration-medal-png-image_3854124.png";
        ?>
        <img class="rounded mx-auto d-block " src="<?php echo $imageUrl; ?>">
    
    <div  class=" fs-5 text-center ">
        Thx you <?=$name  ?>
    </div>

    <div  class="fs-5 text-center">
        We received your application for the <?=$club?>
    </div>
    <div  class="fs-5 text-center">
        you are <?=$listSkills ?>
    </div>
    <div  class="fs-5 text-center">
        you will be availble on <?=$Day ?>
    </div>


    
</body>
</html>