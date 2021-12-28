<hr>
<form method="post" action="index.php?act=billconfirm">
<div class="container mt-5">
<div class="reciept">
	<div class="row" style="margin-top:10px;">
		<div class="col-md-8">
			<div class="col-md-3">
            <img class="media-object img-thumbnail user-img" style="height: 80px;" alt="User Picture" src="view/image/deNPcut.png"></div>
		   <div class="col-md-9 text-right">
			<h4 class="heading">De NP Clothings</h4>
			<h5 class="heading">De NP LIMITED LIABILITY COMPANY</h5>
			<h6 class="heading">+84 904525881</h6>
			</div>
		</div>
		<div class="col-md-4">
			
			<div class="form-group">
              <label class="col-md-4 control" >Date </label>
              <div class="col-md-8">
                <input id="" name="name" type="text" placeholder="10-May-2017 02:05 pm" class="form-control">
              </div>
            </div>
		                
		    <div class="form-group">
              <label class="col-md-4 control" >Reciept No. </label>
              <div class="col-md-8">
                <input id="" name="name" type="text" placeholder="12349" class="form-control">
              </div>
            </div>
		                
		</div>
	</div>
	<br/>
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    
    ?>
	<div class="row">
		<div class="col-md-12">
            <div class="form-group">
              <label class="col-md-3 control" for=""> Name :</label>
              <div class="col-md-9">
                <input id="" name="bill_name" type="text" placeholder="Your name" class="form-control" value="<?=$user?>">
              </div>
            </div>
			<div class="form-group">
              <label class="col-md-3 control" for="">Address :</label>
              <div class="col-md-9">
                <input id="" name="bill_address" type="text" placeholder="Address" class="form-control" value="<?=$address?>">
              </div>
            </div>
         </div>
     </div>
	 <div class="row">
		<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-6 control" for="">Phone number :</label>
              <div class="col-md-6" style="padding-left:20px;">
                <input id="" name="bill_tel" type="text" placeholder="Phone number" class="form-control"  value="<?=$tel?>">
              </div>
            </div>
            </div>
			<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-3 control" for="">Email :</label>
              <div class="col-md-9">
                <input id="" name="bill_email" type="text" placeholder="Email" class="form-control"  value="<?=$email?>">
              </div>
            </div>
            </div>
            </div>

    <?php
    }else{
    ?>

    <div class="row">
		<div class="col-md-12">
            <div class="form-group">
              <label class="col-md-3 control" for=""> Name :</label>
              <div class="col-md-9">
                <input id="" name="bill_name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
			<div class="form-group">
              <label class="col-md-3 control" for="">Address :</label>
              <div class="col-md-9">
                <input id="" name="bill_address" type="text" placeholder="Address" class="form-control" >
              </div>
            </div>
         </div>
     </div>
	 <div class="row">
		<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-6 control" for="">Phone number :</label>
              <div class="col-md-6" style="padding-left:20px;">
                <input id="" name="bill_tel" type="text" placeholder="Phone number" class="form-control"  >
              </div>
            </div>
            </div>
			<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-3 control" for="">Email :</label>
              <div class="col-md-9">
                <input id="" name="bill_email" type="text" placeholder="Email" class="form-control" >
              </div>
            </div>
            </div>
            </div>

    <?php 
    }
    ?>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
              <label class="col-md-12 control" for="name">Order List:</label>
              <div class="col-md-12">
                <?php include "viewcart.php";?>
              </div>
            </div>
            </div>
            </div>
			<br/>
			<div class="row">
		<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-3 control" for="name">Cash :</label>
              <div class="col-md-9">
                <input id="checkbox2" name="pttt" value="1" type="radio"  class="form-control">
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-md-3 control">Bank Transfer :</label>
              <div class="col-md-9">
                <input id="checkbox2" name="pttt" value="2" type="radio" class="form-control">
              </div>
            </div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
              <label class="col-sm-3 control">Bank Name :</label>
              <div class="col-sm-9">
                <input id="" disabled name="bank" type="text" value="Ngân Hàng Tiên Phong (TP Bank)" class="form-control">
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-sm-3 control" >Account :</label>
              <div class="col-sm-9">
                <input id="" disabled name="banknumber" type="text" value="02793227791" class="form-control">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-3 control" >Name :</label>
              <div class="col-sm-9">
                <input id="" name="accountname" disabled type="text" value="Phạm Hoài Nam" class="form-control">
              </div>
            </div>
            <div class="form-group">
            
              <div class="col-sm-9">
                <input id="" name="soluong" type="hidden" value="<?=$i?>" class="form-control">
              </div>
            </div>

            <div class="form-group">

              <div class="col-sm-9">
                <input id="" name="bill_price" type="hidden" value="<?=$tong?>" class="form-control">
              </div>
            </div>
		 </div>
            </div>
			<br/>
			<div class="row">
		
		</div>
		<div class="row" >
		<div class="col-md-9">
		</div>
		<div class="col-md-3">
			<div class="form-group">
              <input class="btn btn-primary" name="payment"  type="submit" value ="Payment"/>
      </div>
		</div>
		</div>
		</div>
	</div>
</div>
</div>
</form>
<style>
    input[type="text"]{
		border-top: none !important;
		border-right: none !important;
		border-left: none !important;
		border-bottom: 1px dotted pink !important;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
	}
	
	.heading{
    color: black;
}

.control{
padding-top:7px;
}

.reciept{
    border-top: 5px solid pink;
    -webkit-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    -moz-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    margin-top: 10px;
	margin-bottom: 10px;
}
</style>