<?php
include "condb.php";
?>


<table>
    <thead>
        <tr>
            <td>#</td>
            <td>NAME</td>
            <td>LAST NAME</td>
            <td>#</td>
        </tr>
    </thead>
    <tbody>  
        <?php
        $sql = "SELECT * FROM tb_student ORDER BY std_id ASC";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?=$row['std_id']?></td>
            <td><?=$row['std_name']?></td>
            <td><?=$row['std_sname']?></td>
            <td><button class="btn_edit" data="<?=$row['std_id'] ?>">Edit</button></td>
            <td><button class="btn_del" data="<?=$row['std_id']?>">DEL</button></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
      
<script>
    $(".btn_del").click(function() {
        //alert($(this).attr('data'));
        let id_val = $(this).attr('data');
        $.ajax({
            url:"std_del.php",
            method:"GET",
            data: {
                id:id_val
            },
            success: function (res){
                $("#div_res").html(res);
            }
        });
    });
</script>