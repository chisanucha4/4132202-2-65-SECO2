<?php
echo "Hello PHP !!";
//phpinfo();
$num = 10;
$name = "Ome";

echo "GET : " . $_GET['name'];
echo "POST : " . $_POST['pass'];

?>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo $name ?></td>
        </tr>
        <?php
            for($i = 2; $1 <5; $i++){
        
        ?>
        <tr>
            <td><?$i?></td>
            <td><?= $name ?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>