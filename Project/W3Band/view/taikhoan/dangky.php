<hr>

<div class="container-fluid mt-5 mb-5">
    <section class="container">
		<div class="container-page">
                <form method="post" action="index.php?act=dangky">
                <h3 class="dark-grey">Registration</h3>
                    <div class="form-group col-lg-12">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" id="" value="">
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" id="" value="">
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="" value="">
                    </div>
                                    
                    <div class="form-group col-lg-12">
                        <label> Address</label>
                        <input type="text" name="address" class="form-control" id="" value="">
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <label>Telephone</label>
                        <input type="tel" name="tel" class="form-control" id="" >
                    </div>			
                    
                    <div class="form-group col-lg-12">
                        <input type="checkbox" class="checkbox" /> Sigh up for our newsletter
                    </div>

                    <div class="form-group col-lg-12">
                        <input type="checkbox" class="checkbox" /> Send notifications to this email
                    </div>	
                    <div class="form-group col-lg-12">
                        <input class="btn btn-primary" type ="submit" value="Register" name="register"/>
                    </div>				
                    <?php
                        if (isset($thongbao)&&$thongbao!='') {
                            echo '<h3 style="color:red">'.$thongbao.'<h3>';
                        
                        }
                
                    ?>
                </form>
                    
			
		</div>
	</section>
</div>