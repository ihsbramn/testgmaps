<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>text hotel embed</title>
</head>

<body>

<?php
    include('connect.php');
    $db = new database();
    $data_hotel = $db->show_hotel();
    $no =1;
?>
<br>
<div class="container">
    <h2 class="text-center"> Hotel Bandung</h2>
</div>

<div class="container">
<table class="table">
    <thead>
        <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Nama Hotel</th>
        <th scope="col">Deskripsi Hotel</th>
        <th scope="col">Maps</th>
        </tr>
    </thead>
    <?php 
    
    foreach($data_hotel as $row) {

    ?>
    <tbody>
        <tr>
        <th scope="row"><?php echo $no++ ?></th>
        <td><?php echo $row['h_name']; ?></td>
        <td><?php echo $row['h_description']; ?></td>
        <td><iframe src="<?php echo $row['h_maps']; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
        </tr>
    </tbody>
    <?php
    }
    ?>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>