<?php
    $filecounter = "counter.txt";
    $fl = fopen($filecounter, "r+");
    $hit = fread($fl, filesize($filecounter));
    fclose($fl);
    $fl = fopen($filecounter, "w+");
    $hit = $hit + 1;
    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post 10</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Berkah <span>computer</span></h1>
        </div>
        <div class="list">
            <div class="img">
                <div class="img-product" style="background-image : url('aset/brg1.png');"></div>
            </div>
            <div class="desk">
                <p>Kingston SSD 480GB</p>
                <label>Rp. </label>
                <input type="text" value="450000" id="harga_hardisk">
            </div>
            <div class="qty">
                <div class="qty-desk">
                    <p>Qty</p>
                    <input type="number" id="hardisk">
                </div>
            </div>
        </div>
        <div class="list">
            <div class="img">
                <div class="img-product" style="background-image : url('aset/brg2.png');"></div>
            </div>
            <div class="desk">
                <p>Samsung Portable SSD 500GB</p>
                <label>Rp. </label>
                <input type="text" value="500000" id="harga_samsungSSD">
            </div>
            <div class="qty">
                <div class="qty-desk">
                    <p>Qty</p>
                    <input type="number" id="samsungSSD">
                </div>
            </div>
        </div>
        <div class="list">
            <div class="img">
                <div class="img-product" style="background-image : url('aset/brg3.png');"></div>
            </div>
            <div class="desk">
                <p>Samsung T5 Portable 500GB</p>
                <label>Rp. </label>
                <input type="text" value="750000" id="harga_samsungPortable">
            </div>
            <div class="qty">
                <div class="qty-desk">
                    <p>Qty</p>
                    <input type="number" id="samsungPortable">
                </div>
            </div>
        </div>
        <div class="list">
            <div class="img">
                <div class="img-product" style="background-image : url('aset/brg4.png');"></div>
            </div>
            <div class="desk">
                <p>Asrock TRX40 Taichi</p>
                <label>Rp. </label>
                <input type="text" value="2500000" id="harga_asrockTRX">
            </div>
            <div class="qty">
                <div class="qty-desk">
                    <p>Qty</p>
                    <input type="number" id="asrockTRX">
                </div>
            </div>
        </div>
        <div class="list">
            <div class="img">
                <div class="img-product" style="background-image : url('aset/brg5.png');"></div>
            </div>
            <div class="desk">
                <p>Edifier Headphone</p>
                <label>Rp. </label>
                <input type="text" value="75000" id="harga_edifier">
            </div>
            <div class="qty">
                <div class="qty-desk">
                    <p>Qty</p>
                    <input type="number" id="edifier">
                </div>
            </div>
        </div>

        <div class="order">
                <div class="left">
                    <p>Discount (%)</p>
                    <p>Sub total</p>
                </div>
                <div class="right">
                    <input type="text" id="disc">
                    <p id="sub_total">Rp. 0</p>
                </div>
        </div>

        <div class="total-display">
        
                <p>Total</p>
        
                <p id="total">Rp. 0</p>
        
        </div>
        <button class="btn" onclick="Hitung()">CHECKOUT</button>

        

    </div>
    <div class="visit">
        
            <div class="img">
                <img src="aset/chart.png" alt="">
            </div>
            <p>Total Visitor</p>
            <p class="counter"><?= $hit ?></p>
      
    </div>
    <script src="app.js"></script>
</body>
</html>
