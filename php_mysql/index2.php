<?php
//texto para hacer otro push :v
$db_host = "localhost";
$db_nombre = "products";
$db_usario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usario, $db_passwd, $db_nombre);
$consulta = "Select * FROM PRODUCTS";
$products = mysqli_query($connexio, $consulta);

?>
<link rel="stylesheet" href="estilos.css">
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
    </tr>
    </thead>
    <?php foreach ($products as $i => $productos) { ?>
        <tr>
            <th scope="row"><?php echo $i+ 1?></th>
            <td><?php echo $productos['name'] ?></td>
            <td><?php echo $productos['description'] ?></td>
            <td><?php echo $productos['price'] ?></td>
            <td><button type="button" class="btn btn-outline-primary">Edit</button> </td>
            <td><button type="button" class="btn btn-outline-danger">Delete</button> </td>
        </tr>
    <?php } ?>
</table>
</body>
