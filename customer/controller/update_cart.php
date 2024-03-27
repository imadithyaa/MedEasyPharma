<?php

define('DIR','../../');
require_once DIR . '/config.php';
// require '../config.php';

$control = new Controller(); 
$admin = new Admin();

?>

<div class="container" id="cart">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Order your Medicines </h2>
                        <p>
                        <font size="4" face="calibri" color="BLACK">MedEasy known for providing affordable and top quality medicines to the customer.</font></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex" style="gap:20px">
                                    <?php
                                    $grandtotal = 0;
                                $total = 0;
                $st=$admin->ret("SELECT * FROM `cart` inner join `medicine` on medicine.m_id=cart.m_id inner join `purchase` on purchase.pr_id=medicine.pr_id");
                while($row=$st->fetch(PDO::FETCH_ASSOC)){
                    $qty = $row['ct_qty'];
                    $price = $row['m_price'];
                    $total = $qty * $price;
                    $grandtotal = $grandtotal + $total;
                 ?>
                    <div class="single-patient mb-4 col-lg-4">
                        <img src="../admin/controller/<?php echo $row['m_image']; ?>" style="margin-left: 10px;" alt="">
                        <h3><?php echo $row['m_title']; ?></h3>
                        <h5>₹<?php echo $row['m_price']; ?></h5>

                        <p class="pt-3">
                        </p>

                        <a href="controller/delete_cart.php?ct_id=<?php echo $row['ct_id'] ?>" class="btn btn-danger text-white fw-bolder" style="float: left;margin-top: -150px;margin-left: -30px;" title="" data-original-title="Remove">×</a>
                        <div class="d-flex">
                            <div>
                                <button class="btn btn-primary" onclick="decrement(<?php echo $row['ct_id'] ?>)">-</button>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $row['ct_qty']; ?>" id="<?php echo $row['ct_id']; ?>" style="width:4vw;float:right" name="quantity" class="quantity form-control input-number" readonly>
                            </div>
                            
                            <div>
                                <button class="btn btn-primary" onclick="increment(<?php echo $row['ct_id'] ?>)">+</button>
                            </div>
                            
                        </div>
                        <?php

if(isset($_GET['ct_id'])){
    $cid=$_SESSION['c_id'];
    $ctid=$_GET['ct_id'];
    $qty=$_GET['qty'];
    
    $s=$admin->ret("SELECT * FROM `cart` inner join `medicine` on medicine.m_id=cart.m_id inner join `purchase` on purchase.pr_id=medicine.pr_id where cart.ct_id='$ctid'");
    $r=$s->fetch(PDO::FETCH_ASSOC);
    $id=$r['pr_id'];
    $qty2=$r['pr_qty'];
    $qty3=0;
    $qty3=$qty2-$qty;
     
    
    
    }
                            if($qty==$qty2){
                                // echo "<lable ><h4 class='text-danger fw-bolder'>Out of Stock</h4></lable>";
                            } else {
                                // $stm=$admin->cud("UPDATE `purchase` SET `pr_qty`='$qty3' WHERE `pr_id`= '$id' ","saved");
                                $stmt=$admin->cud("UPDATE `cart` SET `ct_qty`='$qty' WHERE `ct_id`= '$ctid' ","saved");
                            
                            }
                             ?>
                    </div>

                    <?php } ?>
                </div>
                <div style="display: flex;flex-direction:column">

                                        <div class="text-right mt-5" style="margin-left:960px">
                                            <label class="text-muted font-weight-normal m-0">Total price</label>

                                            <div class="text-large"><strong><?php echo $grandtotal ?></strong></div>
                                        </div>

                                        <div class="float-right" style="margin-left: 700px;">
                                            <a href="menu.php" class="btn fw-bolder mt-2 mr-3">Add more</a>

                                            <a href="place.php" class="btn btn-lg btn-primary mt-2 w-100">Pay</a>
                                        </div>
                                </div>
            </div>
        </div>