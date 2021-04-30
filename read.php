
<?php
$servername = "remotemysql.com:3306";
$username = "nTXgp5BXe0";
$password = "RQwfabtfeC";
$dbname = "nTXgp5BXe0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT product_id,name, price,qauntity,description,categories,image FROM storeManagement";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
        echo '<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class=" card  rounded shadow-sm border-1 border-success">
            <div  id="'.$row["categories"].'" class="col-sm-4 text-light ml-1 mt-1" style="boder-radius:50px">
                <h5 >
                   '.$row["categories"].'
                </h5>
            </div>
            <div class="card-body p-4"><img src="'.$row["image"].'"  alt=""
                    class="pic img-fluid d-block mx-auto mb-3" style="height: 150px;">
                <h5> <a href="#" class="text-dark">'.$row["name"].' Product</a></h5>
                <ul class="list-inline small">
                    <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-warning"></i></li>
                    <div class="float-right mr-4">
                        <h6>
                          PHP '.$row["price"].'
                        </h6>
                    </div>
                </ul>
                <div class="text-center">
                    <button type="button" class="btn btn-success" style="border-radius: 50px;"><i
                            class="fa fa-cart-plus" style="font-size:20px;color:whitesmoke"></i> Add to
                        Cart</button>
                </div>
            </div>
        </div>
    </div>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
