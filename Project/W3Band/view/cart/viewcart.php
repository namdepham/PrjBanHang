<!------ Include the above in your HEAD tag ---------->


<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $tong = 0; 
                        foreach ($_SESSION['mycart'] as $mycart) {
                            $hinh = $img_path.$mycart[3];
                            $thanhtien = $mycart[2]*$mycart[4];
                            $tong +=$thanhtien;
                            echo '
                        <tr>
                            <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="'.$hinh.'" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">'.$mycart[1].'</a></h4>
                                    <h5 class="media-heading"> by <a href="#">de NP</a></h5>
                                    <span> Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                </div>
                            </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                            <input type="number" class="form-control" id="exampleInputEmail1" value="'.$mycart[4].'">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$'.$mycart[2].'</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>$'.$thanhtien.'</strong></td>
                            <td class="col-sm-1 col-md-1">
                            <button type="button" class="btn btn-danger">
                                <a style="text-decoration: none; color:white" href="index.php?act=delcart&idcart='.$i.'"><span class="glyphicon glyphicon-remove"></span> Remove</a>
                            </button></td>
                        </tr>    
                       ';
                            $i+=1;
                        }
                        echo '
                                <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td><h3>Total</h3></td>
                                <td class="text-right"><h3><strong>$'.$tong.'</strong></h3></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>
                                <button type="button" class="btn btn-default">
                                    <a href="index.php" style="color:black; text-decoration: none"><span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping</a>
                                </button></td>
                                <td>
                                <button type="button" class="btn btn-success">
                                <a href="index.php?act=bill" style="color:white; text-decoration: none"><span class="glyphicon glyphicon-play"></span> Accept orders</a>
                                </button></td>
                            </tr>
                        ';
                    ?>
 
                </tbody>
            </table>
                    
        </div>
    </div>
</div>