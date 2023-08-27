<?php
include "./include/connection.php";
 $action=$_GET['action'];
    @$up=$_POST['updated'];
 @$delid=$_POST['deleted']; 
  // echo $delidd=$_POST['delet'];
if($action=='addcatagory'){
  $cname=strtolower( mysqli_real_escape_string($conn,$_POST['cname']));
  $cdes=mysqli_real_escape_string($conn,$_POST['cdes']);
  $cdate=date("d-m-Y");
  date_default_timezone_set("Asia/Karachi");
  $ctime=date('h:i:s a');

  $csql="SELECT * FROM `catagories` WHERE `cname`='$cname'";
  $crun=mysqli_query($conn,$csql);
  $fet=mysqli_fetch_assoc($crun);
  
  if($fet){
    echo 3;
  }else{
    $sql="INSERT INTO `catagories` (`cname`,`cdes`,`cdate`,`ctime`)VALUES('$cname','$cdes','$cdate','$ctime')";
    $run=mysqli_query($conn,$sql);
    if($run){
      echo 1;
    }
  }

}elseif($action=='viewcatagory'){

  $sql="SELECT * FROM `catagories`";
  
  $run=mysqli_query($conn,$sql);
                                                
  while($fet=mysqli_fetch_assoc($run)){
        ?>
<tr>
    <td><?php echo $fet['cname'];?></td>
    <td><?php echo $fet['cdes'];?></td>
    <td><?php echo $fet['cdate'];?></td>
    <td><?php echo $fet['ctime'];?></td>
    <td><a class="btn btn-success  text-white" target="_blank" id="update" data-up="<?php echo $fet['cid']?>">Update</a>
    </td>
    <td><a class="btn btn-danger text-white  deleted" target="_blank" id="deleted"
            data-delet="<?php echo $fet['cid']?>">deleted</a>
    </td>
</tr>
<?php
}

}elseif($action=='updatecatagory1'){

  $csql="SELECT * FROM `catagories` WHERE `cid`='$up'";
   $crun=mysqli_query($conn,$csql);
   $fet=mysqli_fetch_assoc($crun);
 
?>
<div class="model-body">
    <section class="section">
        <div class="section-body">
            <div class="row justify-content-center  ">

                <div class="card ">
                    <form id="catagory_editform">
                        <div class="card-header">
                            <h4>Catagories</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Catagories Name</label>
                                <input type="text" name="cname" class="form-control"
                                    value="<?php echo $fet['cname'];?>">
                                <input type="hidden" name="cids" class="form-control" value="<?php echo $fet['cid'];?>">
                            </div>


                            <div class="form-group mb-0">
                                <label>Description</label>
                                <textarea class="form-control" align='left'
                                    name="cdes"><?php echo $fet['cdes'];?></textarea>


                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button name="submit" id="submited" class="btn btn-primary">Updated Catagory</button>
                        </div>
                        <div id="close-btn">X</div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
<?php
}elseif($action='modelsubcatagory'){
    
    $subsql="SELECT * FROM `subcatagorys` WHERE `subid`='$up'";
    $subrun=mysqli_query($conn,$subsql );
    $subfet=mysqli_fetch_assoc($subrun);
    ?>
<div class="model-body">
    <section class="section">
        <div class="section-body">
            <div class="row justify-content-center  ">

                <div class="card">
                    <form id="viewmodelsubcatagory">
                        <div class="card-header">
                            <h4>Sub Catagories</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>choose catagories</label>
                                <select name="catagory" class="form-control" id="">
                                    <option selected>choose a catagory</option>
                                    <?php
                                                $sql="SELECT * FROM `catagories`";
                                                $run=mysqli_query($conn,$sql);

                                                while($fet=mysqli_fetch_assoc($run)){
                                                    ?>
                                    <option value="<?php echo $fet['cid']?>"><?php echo $fet['cname']?>

                                    </option>
                                    <?php
                                                }
                                                ?>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label> Sub Catagories Name</label>
                                    <input type="text" name="subname" value="<?php echo  $subfet['subname'];?>"
                                        class="form-control">
                                </div>


                                <div class="form-group mb-0">
                                    <label>Sub Catagories Description</label>
                                    <textarea class="form-control" name="subdes">
                                                <?php echo $subfet['subdes'];?>
                                                </textarea>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button name="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div id="close-btn">X</div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
<?php
        }

elseif($action=='updatecatagory'){
 
    $cname=strtolower( mysqli_real_escape_string($conn,$_POST['cname']));
    $cdes=mysqli_real_escape_string($conn,$_POST['cdes']);
    $id=mysqli_real_escape_string($conn,$_POST['cids']);
    $cdate=date("d-m-Y");
    date_default_timezone_set("Asia/Karachi");
    $ctime=date('h:i:s a');
  
      $sql="UPDATE `catagories` SET `cname`='$cname',`cdes`='$cdes',`cdate`='$cdate',`ctime`='$ctime' WHERE `cid`='$id'";
      $run=mysqli_query($conn,$sql);
      if($run){
        echo 1;
        
      }else{
        echo 3;
      }
    
    }


elseif($action=='deletedcatagory'){

  $sql="DELETE FROM `catagories` WHERE `cid`='$delid'";
  $run=mysqli_query($conn,$sql);
 
   
   if($run){
     echo 1;
     
   }else{
    echo 2;
     
   }
 

  
    }
  
  elseif($action=='addsubcatagory'){
    $subname=strtolower(mysqli_real_escape_string($conn,$_POST['subname']));
    $subdes=mysqli_real_escape_string($conn,$_POST['subdes']);
    $catagory=mysqli_real_escape_string($conn,$_POST['catagory']);
    $subdate=date("d-m-Y");
    date_default_timezone_set("Asia/Karachi");
    $subtime=date('h:i:s a');
    $chsql="SELECT * FROM `subcatagorys` WHERE `subname`='$subname' and `catagory`='$catagory'";
    $chrun=mysqli_query($conn,$chsql);
    $chfet=mysqli_fetch_assoc($chrun);
    if(empty($subname) || !empty($chfet)){
        echo 3;
    }else{
        if($chfet){
            echo 3;
        }else{
            $subsql="INSERT INTO `subcatagorys`(`subname`,`subdes`,`catagory`,`subdate`,subtime) VALUES('$subname','$subdes','$catagory','$subdate','$subtime')";
            $subrun=mysqli_query($conn,$subsql);
         if($subrun){
          echo 1;
         }
        }
       

    }
 }elseif($action =='view_sub_catagory'){


                         $sql="SELECT * FROM `catagories` INNER JOIN `subcatagorys` ON cid=catagory";
                         $run=mysqli_query($conn,$sql);
                          
                         while($fet=mysqli_fetch_assoc($run)){

                         
                        ?>
<tr>
    <td><?php echo $fet['cname'];?></td>
    <td><?php echo $fet['subname'];?></td>
    <td><?php echo $fet['subdes'];?></td>
    <td><?php echo $fet['subdate'];?></td>
    <td><?php echo $fet['subtime'];?></td>
    <td><a class="btn btn-success" id="update" target="_blank" data-up="<?php echo $fet['subid']?>">Update</a>
    </td>
    <td><a class="btn btn-danger" id="deleted" target="_blank" data-del="<?php echo $fet['subid']?>">delete</a>
    </td>
</tr>
<?php

 }


}

elseif($action=='deletedsubcatagory'){
  
 $desql="DELETE FROM `subcatagorys`WHERE `subid`='$delid'";
 $derun=mysqli_query($conn,$desql);
 if($derun){
    echo 1;
 }else{
  echo 2;
 }

}
elseif($action=='add_supplier'){
  @$supname=strtolower(mysqli_real_escape_string($conn,$_POST['supname']));
 @$supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
 @$supcontact=mysqli_real_escape_string($conn,$_POST['supcontact']);
 @$supcompanyname=mysqli_real_escape_string($conn,$_POST['supcompanyname']);
 date_default_timezone_set("Asia/Karachi");
 @$supdate=date("d-m-Y");
 @$suptime=date("h:i:s a");

 $supsql="SELECT * FROM `supplier` WHERE `supname`='$supname' or `supcontact`='$supcontact' or `supcompanyname`='$supcompanyname'";
 $suprun=mysqli_query($conn,$supsql);
 $supfet=mysqli_fetch_assoc($suprun);
 if(empty($supname) || !empty($supfet)){
     echo 3;
 }else{

 
 $sql="INSERT INTO `supplier`(`supname`,`supemail`,`supcontact`,`supcompanyname`,`supdate`,`suptime`)VALUES('$supname','$supemail','$supcontact','$supcompanyname','$supdate','$suptime')";
 $run=mysqli_query($conn,$sql);
 if($run){
    echo 1;
 }else{
    echo 3;
 }

}
}elseif($action=='view_supplier'){

  $sql="SELECT * FROM `supplier`";
  $run=mysqli_query($conn,$sql);
  while($fet=mysqli_fetch_assoc($run)){

      ?>
<tr>
    <td><?php echo $fet['supname']?></td>
    <td><?php echo $fet['supemail']?></td>
    <td><?php echo $fet['supcontact']?></td>
    <td><?php echo $fet['supcompanyname']?></td>
    <td><?php echo $fet['supdate']?></td>
    <td><?php echo $fet['suptime']?></td>
    <td><a data-up="<?php echo $fet['supid']?>" id="update" class="btn btn-primary"> update</a></td>
    <td><a data-del="<?php echo $fet['supid']?>" id="deleted" class="btn btn-danger"> Deleted</a></td>
</tr>


<?php              
  }

}elseif($action=='deletedsupplier'){
  
$sql="DELETE FROM `supplier` WHERE `supid`='$delid'";
$run=mysqli_query($conn,$sql);
if($run){
echo 1;
}else{
  echo 2;
}

}
elseif($action=='add_product'){
  
 $cat1=strtolower(mysqli_real_escape_string($conn,$_POST['cat1']));
 $subcatagory=mysqli_real_escape_string($conn,$_POST['subcatagory']);
 $pname=mysqli_real_escape_string($conn,$_POST['pname']);
 $pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
 $pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
 $supply=mysqli_real_escape_string($conn,$_POST['supply']);
 $quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
 @$pcompany=mysqli_real_escape_string($conn,$_POST['pcompany']);
 $supplier=mysqli_real_escape_string($conn,$_POST['supplier']);
 @$status=mysqli_real_escape_string($conn,$_POST['online']);
 
 $pimage=$_FILES['pimage']['name'];
 date_default_timezone_set("Asia/Karachi");
 $pdate=date("d-m-Y");
 $ptime=date("h:i:s a");

 $exe=strtolower(pathinfo($pimage,PATHINFO_EXTENSION));
 $arr=array("jpg","jpeg","png");
 

 $psql="SELECT * FROM `product_data` WHERE `pcode`='$pcode' and `pname`='$pname' ";
 $prun=mysqli_query($conn,$psql);
 $pfet=mysqli_fetch_assoc($prun);

 if(empty($pname) || empty($status)){
    echo 3;
    
}else{

 if( !empty($pfet) ){
     echo 3;
    
 }else{
    if(in_array($exe,$arr)){
        $pimage=rand(1,1000000).".".$exe;
        $pimage=array($pimage);
        $pimage=implode(",",$pimage);
        $prsql="INSERT INTO `product_data`(`cat1`,`subcatagory`,`pname`,`pcode`, `quantity`,`pcompany`, `pprice`,`supply`,`pdate`,`ptime`,`pimage`,`supplier`,`status`)VALUES('$cat1','$subcatagory','$pname','$pcode','$quantity','$pcompany','$pprice','$supply','$pdate','$ptime','$pimage','$supplier','$status')";
        $prrun=mysqli_query($conn,$prsql);
    }else{
 echo 3;
    }
 
if(empty($pimage)){
    $prsql="INSERT INTO `product_data`(`cat1`,`subcatagory`,`pname`,`pcode`, `quantity`,`pcompany`, `pprice`,`supply`,`pdate`,`ptime`,`supplier`,`status`)VALUES('$cat1','$subcatagory','$pname','$pcode','$quantity','$pcompany','$pprice','$supply','$pdate','$ptime','$supplier','$status')";
        $prrun=mysqli_query($conn,$prsql);
        echo 3;
}
 
 if($prrun){
    echo 1;
    move_uploaded_file($_FILES['pimage']['tmp_name'],"./img/".$pimage);
 }else{
    echo 3;
 }
}

}
}elseif($action=='view_product'){
  $prsql="SELECT * FROM `product_data` INNER JOIN `catagories` ON `cat1`=`cid` INNER JOIN `subcatagorys` ON `subcatagory`=`subid` INNER JOIN `quantity_data` ON `quantity`=`qid` INNER JOIN `supplier` ON `supplier`=`supid`";
                                                        $prrun=mysqli_query($conn,$prsql);
                                                        while($prfet=mysqli_fetch_assoc($prrun)){
                                                           $p=$prfet['pimage']; 
                                                           

                                                            ?>
<tr>
    <td><?php echo $prfet['cname']?></td>
    <td><?php echo $prfet['subname']?></td>
    <td><?php echo $prfet['supname']?></td>
    <td><?php echo $prfet['pname']?></td>
    <td><img src="<?php echo "./img/".$p?>" alt="" width="100"></td>
    <td><?php echo $prfet['pcode']?></td>
    <td><?php echo $prfet['qname']?></td>
    <td><?php echo $prfet['supcompanyname']?></td>
    <td><?php echo $prfet['pprice']?></td>
    <td><?php echo $prfet['supply']?></td>
    <td><?php echo $prfet['status']?></td>

    <td><a data-up="<?php echo $prfet['pid']?>" id="updated" class="btn btn-primary"> update</a></td>
    <td><a data-del="<?php echo $prfet['pid']?>" id="deleted" class="btn btn-danger"> Deleted</a></td>
</tr>
<?php
                                                        }  
                                                     
                                                 
}elseif($action=='deletedproduct'){
  
  $sql="DELETE FROM `product_data` WHERE `pid`='$delid'";
  $run=mysqli_query($conn,$sql);
  if($run){
  echo 1;
  
  }else{
    echo 2;
  }
}elseif($action=='addquantity'){
  
    $qname=strtolower(mysqli_real_escape_string($conn,$_POST['qname']));
    
    
    date_default_timezone_set("Asia/Karachi");
    $qdate=date("d-m-Y");
    $qtime=date("h:i:s a");
   
    
    
   
    $qsql="SELECT * FROM `Quantity_data` WHERE `qname`='$qname'";
    $qrun=mysqli_query($conn,$qsql);
    $qfet=mysqli_fetch_assoc($qrun);
   
    if(empty($qname)|| !empty($qfet)){
        echo 3;
    }else{
       
           $qsql="INSERT INTO `Quantity_data`(`qname`,`qdate`,`qtime`)VALUES('$qname','$qdate','$qtime')";
           $qrun=mysqli_query($conn,$qsql);
       }
    
    if($qrun){
       echo 1;
       
    }else{
       echo 3;
    }
   
  
}elseif($action=='updatequantity'){

  $qname=strtolower(mysqli_real_escape_string($conn,$_POST['qname']));
  @$qid=strtolower(mysqli_real_escape_string($conn,$_POST['id']));
 
  date_default_timezone_set("Asia/Karachi");
  $qdate=date("d-m-Y");
  $qtime=date("h:i:s a");
 
  $qsql="SELECT * FROM `Quantity_data` WHERE `qname`='$qname'";
  $qrun=mysqli_query($conn,$qsql);
  $qfet=mysqli_fetch_assoc($qrun);
 
  if($qfet){
    echo 3;
  }else{
      $qsql="UPDATE `Quantity_data` SET `qname`='$qname',`qdate`='$qdate',`qtime`='$qtime' WHERE `qid`='$qid'";
      $qrun=mysqli_query($conn,$qsql);
      if($qrun){
       echo 1;
      
    }else{
       echo 3;
    }
    }
   
  }
  
  

elseif($action=='updatequantity1'){

  $qusql="SELECT * FROM `Quantity_data` WHERE `qid`='$up'";
$qurun=mysqli_query($conn,$qusql);
$qufet=mysqli_fetch_assoc($qurun);


?>
<div class="model-body">
    <section class="section">
        <div class="section-body">
            <div class="row justify-content-center  ">

                <div class="card">
                    <form id="editform">
                        <div class="card-header">
                            <h4>Add Quantity </h4>
                        </div>

                        <div class="card-body">

                            <br>
                            <div class="input-group">
                                <input type="text" name="qname" value="<?php echo $qufet['qname']?>"
                                    placeholder="Quantity name" class="form-control">
                                <input type="hidden" name="id" id="qid" value="<?php echo $qufet['qid']?>">
                            </div>
                            <br><br>
                        </div>
                        <div class="card-footer text-right">
                            <button name="submit" id="submited" class="btn btn-success">Update Quantity</button>
                        </div>
                        <div id="close-btn">X</div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
<?php
}


elseif($action=='delquantity'){

$sql="DELETE FROM `Quantity_data` WHERE `qid`='$delid'";
$run=mysqli_query($conn,$sql);
if($run){
echo 1 ;

}else{
echo 2;
}

}

elseif($action='viewQuantity'){


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
 
}


 