<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/item.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Refurbished Razer Blade 17</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="1">
                    <div class="img-con">
                        <img src="../products/razerblade17.jpg" alt="">
                    </div>
                    <div class="right-con">
                      
                        <!-- (PRODUCT 6) -->
                        <h1 class="name-js">Refurbished Razer Blade 17</h1>
                        <div class="description">
                        This gaming laptop, meticulously restored to pristine condition, combines Razer's cutting-edge technology with the affordability of a refurbished device.
                        </div>
                        <div class="price-div"><span class="price">PHP58,640.75</span>(5% off)</div>
                        <div class="sub-descript">
                            <li>Free update to Windows 11 when available.* Comes with Windows 10 Home</li>
                            <li>NVIDIA® GeForce RTX™ 2080 Super Max-Q</li>
                            <li>1TB PCIe NVMe</li>
                        </div>
                        
                        <div class="add-div">
                            <div class="qnty-td">
                                <div class="minus-btn">-</div>
                                <div class="qnty-js"><input type="text" class="qnty-input" min="1" value="1"></div>
                                <div class="add-btn">+</div>
                            </div>
                            <button class="add-cart">Add to cart</button>    
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </main>
    
    <?php include("./footer.php"); ?>

    <script src="../scripts/quantity.js"></script>
    <script src="../scripts/cartSolo.js"></script>
</body>
</html>