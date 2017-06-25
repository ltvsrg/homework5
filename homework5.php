<?php
$file = file_get_contents('package.json');
$json=json_decode($file,true);
?>
<table border=1>
<?php
foreach ($json as $key=>$arr){ ?>
    <tr>
        <th><?php echo $key;?></th>
        <?php foreach ($arr as $arrdata){?>
                <td><?php echo $arrdata;?></td>
        <?php }?>
    </tr>
<?php }?>
</table>