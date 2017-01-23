<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<style>
    .body{
        height: auto;
    }
</style>

<div class = "w3-center w3-container w3-bottombar w3-border-black w3-grey">Tip calculator </div>
<body >
    <div class = "w3-container w3-yellow body">
        <div class="w3-white w3-panel w3-border w3-border-black">
            <h2 >Tip Calculator</h2>

            <?php
            if( isset($_POST['subtotal']) && isset($_POST['tip']) ){
                $subtotal = (float)$_POST['subtotal'];
                $tip = (float)$_POST['tip'];
            }
            else{
                $subtotal = $tip = $total = "";
            }
            ?>
            <form action = "http://localhost/tutorial/firstfile/index.php" method = "post">

                Bill subtotal : $ <input type = "text" name = "subtotal" value = "<?php echo $subtotal ?>"><br>


                Tip percentage:
                <form action = "http://localhost/tutorial/firstfile/calculate.php" method = 'post'>
                    <?php
                    for($i = 5;$i<=15;$i+=5){
                        ?>
                        <input type = "radio" name = "tip" value = "<?php echo $i; ?>" checked><?php echo $i; ?> %
                        <?php
                    }?>
                    <input type = "submit">

                </form>

                <div class="w3-border w3-border-blue w3-text-blue ">
                    <?php

                    if( isset($subtotal) && isset($tip) &&($subtotal > 0) ){
                        $tip = ($tip/100)*$subtotal;
                        $total = $tip+$subtotal;
                        echo "Tip: ".$tip;
                        echo "<br>Total: ".$total;
                    }
                    ?>
                </div>
            </form>
            </div>
        </div>
    </body>
<html>