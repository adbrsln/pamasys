 <?php 
include 'include/check.php';
include '../include/db.php';
$transid = $_GET["id"];
if (isset($_GET["id"])) {
   
   $query3="SELECT distinct corder.imglink as imglink,corder.status as status, details.name as name,details.address as address , details.notel as notel FROM corder join details on corder.user_id = details.num WHERE corder.transactionid = '$transid'"; //index details
	$result3 =mysqli_query($connect,$query3);
	$count = mysqli_num_rows($result3);

			
	if ($count > 0){
		$query="SELECT corder.item_id, corder.qty as qty  , corder.total as subtotal, corder.ftotal as total, item.itemName as itemname,item.num FROM corder join item on corder.item_id = item.num WHERE transactionid = '$transid'";
		$result=mysqli_query($connect,$query); 

		$query2="SELECT DISTINCT num,ftotal,status FROM corder WHERE transactionid = '$transid'";
		$result2=mysqli_query($connect,$query2); 
		while($row3 = mysqli_fetch_assoc($result2)){
			$ftotal = $row3['ftotal'];
			$status = $row3['status'];
            $orderid = $row3['num'];
            if ($status == 'Complete'){
                $paramstatus ="btn btn-primary disabled";
                $paramstatus2 ="btn btn-success disabled";
                $paramstatus3 ="btn btn-danger disabled";
            }else if ($status == 'Waiting Confirmation') {
                $paramstatus ="btn btn-primary ";
                $paramstatus2 ="btn btn-success disabled";
                $paramstatus3 ="btn btn-danger ";
            }else {
                 $paramstatus ="btn btn-primary disabled";
                $paramstatus2 ="btn btn-success ";
                $paramstatus3 ="btn btn-danger ";
            }
		}

	}
		else {
			 echo '<script>window.location = "/projekweb/customer/index.php?e=f";</script>'; 
		}
	
}
	
?>
  <!-- Header Content -->
   <?php include "include/header.php"; ?>
    <!-- end header Content -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Transaction <small>Details</small>
                            <div class="pull-right">Order ID: OFS<?php echo $orderid;?></div>
                        </h1>
                        
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-12">
                    <form method = "POST" action ="index.php">
                    
                    <table class = "table">
                          
                        <tr>

                            <?php while($row2 = mysqli_fetch_assoc($result3)){  
                            ?>
                            <td class = "col-md-6">
                            <Strong>Customer Order Information</Strong></br></br>
                                Status :   <Strong><?php echo $row2['status']; $img = $row2['imglink']; ?></Strong></br>
                                Name :<?php echo $row2['name']; ?></br>
                                Phone Number : <?php echo $row2['notel']; ?></br>
                                Address : <?php echo $row2['address']; ?></br>
                                </td></div>

                                <td class = "col-md-2" colspan="">
                                
                                </td>
                                <td class = "col-md-2" colspan="1">
                                
                                </td>  
                                <td class = "col-md-2" colspan="1">
                                <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Proof Of Payment</button>
                                </td>

                                <?php  }  ?>
                        </tr>

                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price per unit</th>
                            <th>Price</th>
                        </tr>
                        <?php while($row2 = mysqli_fetch_assoc($result)){  
                            $ppunit = $row2['subtotal']/$row2['qty'];
                            ?>
                        <tr>
                            <td><?php echo $row2['itemname']; ?></td>
                            <td><?php echo $row2['qty']; ?></td>
                            <td><?php echo $ppunit; ?></td>
                            <td><?php echo $row2['subtotal']; ?></td>

                        </tr>
                        <?php  }  ?> 
                        </hr>
                        <tr>


                        <th >

                            Total you have to pay :<strong>RM <?= $ftotal?></strong>


                        </th>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>
                    </table>
                    
                <hr>
                <div class="pull-right">
                    <a   class = "<?php echo $paramstatus;?>"  href="status.php?id=<?=$transid;?>&type=Approve">Approve Order</a>
                    <a   class = "<?php echo $paramstatus2;?>"  href="status.php?id=<?=$transid;?>&type=complete">Complete Order</a>
                    <a  onclick = "return del();" class = "<?php echo $paramstatus3;?>" href="status.php?id=<?=$transid;?>&type=cancel" >Cancel Order</a>
                </div>
                 </form>
                </div>
        </div>
         <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header ">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Customer Proof Of Payment</h4>
                            </div>
                            <div class="modal-body">
                              <div class="thumbnail">
                                   <?php if($img != ''){ $param = '../customer/uploads/'.$img;}else $param =''; ?>
                                <img  src="<?php echo $param; ?>" alt="" width ="800" height ="500">
                                 
                                </div>
                            </div>
                            <div class="modal-footer">
                              
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                          </div>

                        </div>
                      </div>
</div>
    <!-- /.footer -->
    <?php include "include/footer.php"; ?>

