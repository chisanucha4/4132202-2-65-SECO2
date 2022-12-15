<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<?php
include "condb.php";
?>
<div id = "div_res"></div>
<table>
    <thead>
        <tr>
          <td>#</td>
          <td>NAME</td>
          <td>LAST NAME</td>
          <td></td>
          <td></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_student ORDER BY std_id ASC";
        $result = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
           <td><?= $row['std_id'] ?></td>
           <td><?= $row['std_name'] ?></td>
           <td><? $row['std_sname'] ?></td>
           <td><button class="btn_edit" data="<?=$row['std_id']?>">Edit</button></td>
           <td><button  class="btn_del" data="<?=$row['std_id']?>">DEL</button></td>
        </tr>
        <?php
        } //while
        ?>
    </tbody>
</table>

<script>
    $(".btn_del").clik(function(){
        //alert($(this).attr('data'));
        let id_val = $(this).atter('data');
        $.ajax({
            url:"del.php",
            method:"GET",
            data:{id:id_val},
            success: function (res){
                $("#idv_res").html(res);

            }
        });
    });
</script>

