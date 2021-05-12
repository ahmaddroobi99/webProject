<?php include ("function.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/order_or.css">
</head>

<body>
<p class="tip">Click on button in image container</p>

<div class="cont">
    <form method="post" action="order_OR_Sale.php">
    <div class="form sign-in">
        <h2>Welcome HI Hi,</h2>
        <label>
            <span>product name</span>
            <input  name ="product_name"type="text" />
        </label>
        <label>
            <span>phone number</span>
            <input type="text" name="phone"/>
        </label>
        <p class="forgot-pass">contact us</p>
        <button type="submit" class="submit"  name="bye_btn">request_to_buy</button>
        <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
    </div>
    </form >


    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h2>New here?</h2>
                <p>Add your product to get the Admin notice and post it for you</p>
            </div>
            <div class="img__text m--in">
                <h2>One of us?</h2>
                <p> request to bye any product you liked from our menu website</p>
            </div>
            <div class="img__btn">
                <span class="m--up">Sale a Pro</span>
                <span class="m--in">Bye a product</span>
            </div>
        </div>
        <form method ="post" action="order_OR_Sale.php">
        <div class="form sign-up">
            <h2>Time to feel like home,</h2>
            <label>
                <span>name of the product </span>
                <input type="text" name="prod_name"/>
            </label>
            <label>
                <span>Descrpition </span>
                <textarea type="text" style="width=400px; height: 150px;" name="description" ></textarea>
            </label>
            <label>
                <span>price of product</span>
                <input type="text" name="price"/>
            </label>
            <label>
                <span>phone</span>
                <input type="text" name="phone" />
            </label>
            <button type="submit" class="submit" name="sale_btn">Sale this pro</button>
            <button type="button" class="fb-btn">Join with <span>facebook</span></button>
        </div>
        </form>
    </div>
</div>

<script>
    document.querySelector('.img__btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>
</body>

</html>
