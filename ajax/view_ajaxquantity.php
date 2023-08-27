<?php
 include "../include/connection.php";
$qsql="SELECT * FROM `quantity_data`";
$qrun=mysqli_query($conn,$qsql);

while($qfet=mysqli_fetch_assoc($qrun)){
?>
<tr>
    <td><?php echo $qfet['qname']?></td>
    <td><?php echo $qfet['qdate']?></td>
    <td><?php echo $qfet['qtime']?></td>

    <td><a data-up="<?php echo $qfet['qid']?>" class="btn btn-primary text-white" id="update"> update</a></td>
    <td><a data-del="<?php echo $qfet['qid']?>" class="btn btn-danger text-white" id="deleted"> Deleted</a></td>
</tr>
<?php
  }
 
?>