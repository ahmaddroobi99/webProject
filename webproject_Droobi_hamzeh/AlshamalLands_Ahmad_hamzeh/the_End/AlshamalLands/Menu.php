<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'Project_Final');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu_CAFE</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" href="css/menu2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>


</head>
<body>


<?php
require_once('connection.php');

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$pdo = Database::connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//    $product_name = test_input($_POST['product_name']);
//    $des = test_input($_POST['des']);
//    $type = test_input($_POST['type']);
//    $price = test_input($_POST['price']);

//    $sql = "insert into products (product_name,des,type,price) values (?,?,?,?)";
//    $result = $pdo->prepare($sql);
//    try {
//        $result->execute(array($product_name, $des, $type, $price));
//        echo "<div class='alert alert-success alert-dismissable'>";
//        echo "<a  class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
//        echo "<strong>Success!</strong> Added One Record</div>";
//
//    } catch (Exception $e) {
//        echo "<div class='alert alert-danger alert-dismissable'>";
//        echo "<a  class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
//        echo "<strong>ERROR!</strong> {$e->getMessage()}</div>";
//    }

}

$sql = "select * from products";
$result = $pdo->prepare($sql);
$result->execute();
?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<header>
    <nav>
        <div class="row clearfix">
            <img src="imgs/logo.jpg" class="logo" width="100px" height="100px">

            <ul class="main-nav animated slideInDown" id="check-class">
                <li><a href="Home.php">HOME</a></li>
                <li><a href="Menu.html">MENU</a></li>
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Contact.php">CONTACT US</a></li>
            </ul>
            <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <br>

    <div class="main-content-header">

        <div class="row" style="text-align: center; margin-bottom: 5%;">
            <div class="col">
                <button style="margin-right: 5px; width:25%;" type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#cart">Your Orders (<span class="total-count"></span>)
                </button>
                <button style="margin-right: 5px; width:25%;" class="clear-cart btn btn-danger">Clear Orders</button>
            </div>
        </div>

        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <br>
        <h1>M E N U</h1>
        <br>
        <button class="tablink" onclick="openPage('Lands', this, '#bf55ec')">Lands</button>
        <button class="tablink" onclick="openPage('Departments', this, '#bf55ec')">Demoartments</button>
        <button class="tablink" onclick="openPage('Cars', this, '#bf55ec') " id="defaultOpen">Cars</button>
        <button class="tablink" onclick="openPage('Free', this, '#bf55ec')">Free Market</button>


        <div id="Lands" class="tabcontent">
            <h3>Lands</h3>
            <br>
            <hr>


            <div class="row" style="grid-auto-flow: column;">

                    <?php
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        if($row['type']=='land'){?>
                <div class="column">
                    <h2><?php echo "{$row['product_name']}"; ?></h2>
                    <p><?php echo "{$row['des']}" ?></p>
                    <p style="font-family: body; color: #bf55ec;"><?php echo "{$row['price']}"; ?></p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="RISTRETTO" data-price="145"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
                    <?php }} ?>

            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>ESPRESSO</h2>-->
<!--                    <p>A strong black coffee — a blast of energy. Can be had with cold milk to taste.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 145</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="ESPRESSO" data-price="145"-->
<!--                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>CAFÉ LATTE</h2>-->
<!--                    <p>A shot of Espresso topped with steamed milk and foam, served in a tall mug. The more milky-->
<!--                        kind!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 225</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="CAFÉ LATTE"-->
<!--                       data-price="225" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
                <div class="column">
                    <h2>Land number 3 Nablus</h2>
                    <p>this land is near an-najah university , good area with reach of electricity and watar.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 150000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 3 Nablus"
                       data-price="150000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Land number 4 Tubas</h2>
                    <p>this land is near AL-turkey hospital , good area with reach of electricity and watar.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 20000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 4 Tubas"
                       data-price="20000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>CAPPUCCINO</h2>
                    <p>The Viennese style, frothy coffee with milk, topped with a dash of chocolate. Perfectly
                        relaxing.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 195</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="CAPPUCCINO"
                       data-price="195" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>DOUBLE ESPRESSO</h2>
                    <p>Two Espressos in one.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 195</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="DOUBLE ESPRESSO"
                       data-price="195" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Land number 5 tulkarem</h2>
                    <p>good area with reach of electricity and watar.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 25000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 5 tulkarem"
                       data-price="25000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Land number 6 jeinin</h2>
                    <p>good area with reach of electricity and watar.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 30000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 6 jeinin"
                       data-price="30000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Land number 7 jeinin</h2>
                    <p>good area with reach of electricity and watar.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 23000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 7 jeinin"
                       data-price="23000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>
            <br>
            <img src="imgs/menu/menul.png" alt="Paris" class="center">
            <br>
            <h3>Speical lands</h3>
            <br>
            <p style="text-align: center;">here you can get a maximux/minmum price for lands</p>
            <br>
            <hr>
            <br>
            <p>for mor information call the number 0599648940</p>
<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>Land number 8 Al-Fara Camp</h2>-->
<!--                    <p>good area with reach of electricity.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 7000</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 8 Al-Fara Camp"-->
<!--                       data-price="7000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>Land number 8 Tubas</h2>-->
<!--                    <p>good area with reach of watar.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 8000</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 8 Tubas"-->
<!--                       data-price="8000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>ICED MOCHACCINO</h2>-->
<!--                    <p>Shot of Espresso and chocolate syrup blended together with cold milk and topped with whipped-->
<!--                        cream.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 215</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="ICED MOCHACCINO"-->
<!--                       data-price="215" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>ICED AMERICANO</h2>-->
<!--                    <p>Freshly-pulled Espresso, chilled over ice, with a dash of milk.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 195</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="ICED AMERICANO"-->
<!--                       data-price="195" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
            <br>
            <h3>Low price lands</h3>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Land number 8 Al-Fara Camp</h2>
                    <p>good area with reach of electricity and watar</p>
                    <p style="font-family: body; color: #bf55ec;">RS 7000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 8 Al-Fara Camp"
                       data-price="7000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

            </div>

            <h3>High price lands</h3>
            <p style="text-align: center;">This lands it has a lot of advanteges like position, good soil,good commiunity.</p>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Land number 9 Rammallah</h2>
                    <p style="font-family: body; color: #bf55ec;">RS 500000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Land number 9 Rammallah"
                       data-price="500000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

            </div>
        </div>


        <!------Departments----->

        <div id="Departments" class="tabcontent">
            <h3>City : Rammallah</h3>
            <br>
            <hr>

            <div class="row" style="grid-auto-flow: column;">

                <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    if($row['type']=='department'){?>
                        <div class="column">
                            <h2><?php echo "{$row['product_name']}"; ?></h2>
                            <p><?php echo "{$row['des']}" ?></p>
                            <p style="font-family: body; color: #bf55ec;"><?php echo "{$row['price']}"; ?></p>
                            <a style="font-family: body; text-decoration: none;" href="#" data-name="RISTRETTO" data-price="145"
                               class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                        </div>
                    <?php }} ?>

            </div>

            <!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>SUPERFOOD MIXED FRUIT BOWL</h2>-->
<!--                    <p>A selection of the season’s freshest fruit with a sprinkling of your choice of seeds – sunflower,-->
<!--                        melon, flax and pumpkin.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 325</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="SUPERFOOD MIXED FRUIT BOWL"-->
<!--                       data-price="325" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>COTTAGE CHEESE ON TOAST</h2>-->
<!--                    <p>A light breakfast option of herbed and baked cottage cheese on our bakery whole wheat toast,-->
<!--                        served with a dollop of salsa.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 325</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="COTTAGE CHEESE ON TOAST"-->
<!--                       data-price="325" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
                <div class="column">
                    <h2>Residential Building</h2>
                    <p>its near the main market .</p>
                    <p style="font-family: body; color: #bf55ec;">RS 7000 each</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Residential Building"
                       data-price="7000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 2</h2>
                    <p>A perfect look and good servicis</p>
                    <p style="font-family: body; color: #bf55ec;">RS 12000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 2"
                       data-price="12000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 3</h2>
                    <p>A perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 9000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Apartment 3" data-price="9000"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>
            <br>
            <h3>City : Nablus</h3>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Apartment 4</h2>
                    <p>A perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 5000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 4"
                       data-price="5000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 5</h2>
                    <p> perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 6000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 5" data-price="6000"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 6</h2>
                    <p>A perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 7000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 6"
                       data-price="7000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 7</h2>
                    <p>A perfect look and good servicis</p>
                    <p style="font-family: body; color: #bf55ec;">RS 7000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Apartment 7" data-price="7000" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>MOROCCAN COUSCOUS SALAD</h2>-->
<!--                    <p>A classic Moroccan salad, with couscous, pickled bell peppers, chickpeas, corn and olives in a-->
<!--                        tangy dressing.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 345</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="MOROCCAN COUSCOUS SALAD"-->
<!--                       data-price="345" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>SPINACH AND APPLE SALAD</h2>-->
<!--                    <p>Rich in antioxidants, tossed with goat cheese and toasted almonds in a special balsamic vinegar-->
<!--                        dressing.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 345</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="SPINACH AND APPLE SALAD"-->
<!--                       data-price="345" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <br>-->
<!--            <div class="row">-->
<!--                <div class="column" style="background-color:transparent; width:50%; ">-->
<!--                    <img src="imgs/menu/salad1.jpg" alt="Salad1" style="width:100%;">-->
<!--                </div>-->
<!--                <div class="column" style="background-color:transparent; width:50%; ">-->
<!--                    <img src="imgs/menu/salad2.jpg" alt="salad2" style="width:100%;">-->
<!--                </div>-->
<!--            </div>-->
            <br>
            <h3>City : Hebron</h3>
            <br>
            <p style="text-align: center;">The lands of ibrahiem peace ubon him.</p>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Apartment 8</h2>
                    <p>A perfect look and good servicis , near AL-ibrahem Mosqe.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 12000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 8"
                       data-price="12000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 9</h2>
                    <p>A perfect look and good servicis , ceter of the city.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 15000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 9"
                       data-price="15000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 10</h2>
                    <p>A perfect look and good servicis , north the city.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 9000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 10"
                       data-price="9000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 11</h2>
                    <p>A perfect look and good servicis , out of the city with reach of all servicies.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 7000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 11"
                       data-price="7000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <br>
            <h3>City : Jerico</h3>
            <br>
            <p>The lowest city on earth with many monuments and resorts and the oldest city in history.</p>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Apartment 12</h2>
                    <p>A perfect look and good servicis , center of the city.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 15000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Apartment 12" data-price="15000"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 13</h2>
                    <p>A perfect look and good servicis , out of the city with reach of all servicies.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 5000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 13"
                       data-price="5000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 14</h2>
                    <p>A perfect look and good servicis , south of the city with reach of all servicies</p>
                    <p style="font-family: body; color: #bf55ec;">RS 10000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Apartment 14" data-price="10000" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 15</h2>
                    <p>A perfect look and good servicis , near hisham-bin-Abd Almalek.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 17000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 15"
                       data-price="17000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>BAKED NACHOS & HOT SALSA</h2>-->
<!--                    <p>Café Barista baked Nachos topped with melted cheese served with red salsa.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 245</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="BAKED NACHOS & HOT SALSA"-->
<!--                       data-price="245" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>LEBANESE PLATTER</h2>-->
<!--                    <p>A three dip platter — hummus, moutabel & labneh, served with falafel and pita bread. Café-->
<!--                        Barista style!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 425</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="LEBANESE PLATTER"-->
<!--                       data-price="425" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>SUNDRIED TOMATO & BASIL PESTO WHOLEWHEAT BREAT</h2>-->
<!--                    <p>Our delicious freshly baked bread is served with herbed butter and is perfect to share!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 275</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#"-->
<!--                       data-name="SUNDRIED TOMATO & BASIL PESTO WHOLEWHEAT BREAT" data-price="275"-->
<!--                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
            <br>
            <img src="imgs/menu/ram1.jpg" alt="menu2" class="center" style="width: 50%">
            <br>
            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/ram2.jpg" alt="menu3" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/ram3.jpg" alt="menu4" style="width:100%;">
                </div>
            </div>
            <br>
            <h3>City : Jenin</h3>
            <br>
            <p style="text-align: center;"> is a Palestinian city in the northern West Bank.
                It serves as the administrative center of the Jenin Governorate
                and is a major center for the surrounding towns.n
                2007 the city had a population of 39,004.[1] Jenin is under the administration of the Palestinian Authority.</p>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Apatment 16</h2>
                    <p>North of the city having a perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 10000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 16"
                       data-price="10000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 17</h2>
                    <p>South of the city having a perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 12000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 17"
                       data-price="12000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 18</h2>
                    <p>center of the city having a perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 14000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Apartment 18" data-price="14000" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 19</h2>
                    <p>Near the Hospital a perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">Rs 9000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Apartment 19" data-price="9000" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/je2.jpg" alt="san1" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/je3.jpg" alt="san2" style="width:100%;">
                </div>
            </div>
            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/je1.jpg" alt="san3" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/je4.jpg" alt="san4" style="width:100%;">
                </div>
            </div>
            <br>
            <h3>City : Tulkarm</h3>
            <br>
            <p> is a Palestinian city in the West Bank, located in the Tulkarm Governorate. The Israeli city of Netanya is to the west, the Palestinian cities of Nablus and Jenin to the east. According to the Palestinian Central Bureau
                of Statistics, in 2007 Tulkarm had a population of 51,300 while its adjacent refugee camp had a population of 10,641</p>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Apartment 20</h2>
                    <p>Near the Al-Razi Hospital a perfect look and good servicis</p>
                    <p style="font-family: body; color: #bf55ec;">RS 15000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 20"
                       data-price="15000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 21</h2>
                    <p>North the city having a perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 10000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 21" data-price="10000"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 22</h2>
                    <p>South the city having a perfect look and good servicis .</p>
                    <p style="font-family: body; color: #bf55ec;">RS 11000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 22"
                       data-price="11000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 23</h2>
                    <p>Center the city having a perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">Rs 7000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 23"
                       data-price="7000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>BEAN & SALSA QUESADILLA</h2>-->
<!--                    <p>Quesadillas loaded with red beans, salsa, lettuce and oozing cheddar cheese. Thank You-->
<!--                        Mexico!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 425</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="BEAN & SALSA QUESADILLA"-->
<!--                       data-price="425" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>PITA POCKET</h2>-->
<!--                    <p>Pita bread filled with crunchy lettuce, tomatoes, nutritious falafals made with cottage cheese &-->
<!--                        bulghur wheat, all in a traditional zatziki dressing.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">Rs 425</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="PITA POCKET"-->
<!--                       data-price="425" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
            <br>
            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/tul1.jpg" alt="main1" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/tul2.jpg" alt="main2" style="width:100%;">
                </div>
            </div>
            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/tul3.jpg" alt="main3" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/tul4.jpg" alt="main4" style="width:100%;">
                </div>
            </div>
            <br>

            <h3>City : Tubas</h3>
            <br>
            <p> is a Palestinian city in the northeastern West Bank, located northeast of Nablus, west of the Jordan Valley.
                A city of over 63,000 inhabitants, it serves as the economic and administrative center of the Tubas Governorate.
                Its urban area consists of 2,271 dunams (227 hectares).
                It is governed by a municipal council of
                15 members and most of its working inhabitants
                are employed in agriculture or public services. Khalid Samir Abdel Razzek is the current mayor of Tubas</p>
            <hr>
            <br>
            <div class="row">
                <div class="column">
                    <h2>Apartment 24</h2>
                    <p>Three Room with kitchen and bathroom</p>
                    <p style="font-family: body; color: #bf55ec;">RS 6000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 24"
                       data-price="6000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 25</h2>
                    <p>6 Room with Swimming pool and garden.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 20000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 25"
                       data-price="20000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Apartment 26</h2>
                    <p>4 Room with garden and perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 9000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 26"
                       data-price="9000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apartment 27</h2>
                    <p>Center of the Town and perfect look and good servicis.</p>
                    <p style="font-family: body; color: #bf55ec;">Rs 10000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apartment 27"
                       data-price="10000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>TUSCANY PIZZA</h2>-->
<!--                    <p>For those who love their Italian flavours, this is an excellent choice with basil pesto, balsamic-->
<!--                        sundried tomatoes and fresh parmesan!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 425</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="TUSCANY PIZZA"-->
<!--                       data-price="425" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>PENNE ALL'ARRABBIATA</h2>-->
<!--                    <p>Your choice of penne or spaghetti in a rich arrabbiata sauce, with tomatoes, garlic and crushed-->
<!--                        red chillies, cooked in olive oil. Accompanied with warm garlic bread and a helping of-->
<!--                        nutritious sprout salad.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">Rs 425</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="PENNE ALL'ARRABBIATA"-->
<!--                       data-price="425" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>GARDEN PESTO</h2>-->
<!--                    <p>Fusilli pasta in a fresh basil and coriander pesto, flavoured with olive oil & parmesan. Served-->
<!--                        with freshly baked warm bread and salad. Simply superb!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 425</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="GARDEN PESTO"-->
<!--                       data-price="425" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>LASAGNA VERDURA</h2>-->
<!--                    <p>Lasagna with fresh spinach and mushrooms, in a traditional sauce, subtly flavoured with oregano,-->
<!--                        and topped with cheese. Accompanied with fresh warm garlic bread.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">Rs 495</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="LASAGNA VERDURA"-->
<!--                       data-price="495" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

            <br>
            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/tu1.jpg" alt="piz1" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/tu2.jpg" alt="piz2" style="width:100%;">
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="column" style="background-color:transparent; width:50%; ">-->
<!--                    <img src="imgs/menu/piz3.jpg" alt="piz3" style="width:100%;">-->
<!--                </div>-->
<!--                <div class="column" style="background-color:transparent; width:50%; ">-->
<!--                    <img src="imgs/menu/piz4.jpg" alt="piz4" style="width:100%;">-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <!------- Cars---->

        <div id="Cars" class="tabcontent">
            <h3>Cars</h3>
            <br>
            <p style="text-align: center;">We recommend ...to call us for more information phone : 0599648940</p>
            <br>
            <hr> <div class="row" style="grid-auto-flow: column;">

                <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    if($row['type']=='car'){?>
                        <div class="column">
                            <h2><?php echo "{$row['product_name']}"; ?></h2>
                            <p><?php echo "{$row['des']}" ?></p>
                            <p style="font-family: body; color: #bf55ec;"><?php echo "{$row['price']}"; ?></p>
                            <a style="font-family: body; text-decoration: none;" href="#" data-name="RISTRETTO" data-price="145"
                               class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                        </div>
                    <?php }} ?>

            </div>

            <!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>GOOEY CHOCOLATE CAKE</h2>-->
<!--                    <p>A sumptuous, melt-in-the-mouth cake. Really gooey!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 275</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="GOOEY CHOCOLATE CAKE"-->
<!--                       data-price="275" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>CARROT AND WALNUT CAKE</h2>-->
<!--                    <p>A nourishing cake made with jaggery and farm fresh carrots, full of goodness!</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 275</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="CARROT AND WALNUT CAKE"-->
<!--                       data-price="275" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
                <div class="column">
                    <h2>Mercedes-Benz</h2>
                    <p>he comfort, the premium upholstery, the plush carpeting, polished wood trim, sleek styling, LED mood lighting, an awesome array of information and entertainment options; even the scent signals that this vehicle is special.
                        If you demand the finer things in life your automobile should be a Mercedes-Benz</p>
                    <p style="font-family: body; color: #bf55ec;">RS 90000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Mercedes-Benz" data-price="90000"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>BMW</h2>
                    <p>BMW or by its full name Bayerische Motoren Werke AG, is a German manufacturer of luxury vehicles. But BMW doesn't just produce brilliant luxury road cars,
                        they are also famed for their contribution to sports cars and motorcycles..</p>
                    <p style="font-family: body; color: #bf55ec;">RS 80000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="BMW" data-price="80000" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Audi</h2>
                    <p>This German luxury brand is known for technology and style as much as its performance, well-crafted interiors, and its trademark Quattro all-wheel-drive system. Nearly every model is a solid performer with a high-grade interior.
                        Ride and handling are accomplished and the cabin is quiet..</p>
                    <p style="font-family: body; color: #bf55ec;">RS 85000</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Audi" data-price="85000" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Mazda</h2>
                    <p>The Mazda Motor Corporation is based in Fuchu, Aki District, Hiroshima Prefecture, Japan. Best known for their rotary engine technology, Mazda has become one of the world's premier automakers,
                        producing sporty and efficient vehicles for everyone to experience..</p>
                    <p style="font-family: body; color: #bf55ec;">RS 70000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Mazda"
                       data-price="70000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>BANANA WALNUT CAKE</h2>-->
<!--                    <p>A deliciously wholesome fruit and nut cake.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 275</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="BANANA WALNUT CAKE"-->
<!--                       data-price="275" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>LEMON CHEESE CAKE</h2>-->
<!--                    <p>An amazing lo-cal lemon cheese cake. Start spreading the news...</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 351</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="LEMON CHEESE CAKE"-->
<!--                       data-price="351" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>YOGURT AND MUESLI PARFAIT</h2>-->
<!--                    <p>An all time favourite! Don’t miss it, it's also lo-cal.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 351</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="YOGURT AND MUESLI PARFAIT"-->
<!--                       data-price="351" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

            <br>
            <div class="row">
                <div class="column" style="background-color:transparent; width:33.3%; ">
                    <img src="imgs/menu/marc.jpg" alt="cak1" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:33.3%; ">
                    <img src="imgs/menu/bm.jpg" alt="cak2" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:33.3%; ">
                    <img src="imgs/menu/au.jpg" alt="cak3" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:33.3%; ">
                    <img src="imgs/menu/mazda.jpg" alt="cak4" style="width:100%;">
                </div>
            </div>

<!--            <div class="row">-->
<!---->
<!--                <div class="column" style="background-color:transparent; width:33.3%; ">-->
<!--                    <img src="imgs/menu/cak4.jpg" alt="cak4" style="width:100%;">-->
<!--                </div>-->
<!--                <div class="column" style="background-color:transparent; width:33.3%; ">-->
<!--                    <img src="imgs/menu/cak5.jpg" alt="cak5" style="width:100%;">-->
<!--                </div>-->
<!--                <div class="column" style="background-color:transparent; width:33.3%; ">-->
<!--                    <img src="imgs/menu/cak6.jpg" alt="cak6" style="width:100%;">-->
<!--                </div>-->
<!--            </div>-->

            <br>

            <h3>MOTOR BIKE</h3>
            <br>
            <hr>
            <div class="row">
                <div class="column">
                    <h2>Motor 1</h2>
                    <p>Sport bike alot of speed and strong body</p>
                    <p style="font-family: body; color: #bf55ec;">RS 50000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Motor 1"
                       data-price="50000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Motor 2</h2>A
                    <p>Sport bike alot of speed and strong body</p>
                    <p style="font-family: body; color: #bf55ec;">RS 55000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Motor 2"
                       data-price="55000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Motor 3</h2>
                    <p>Sport bike alot of speed and strong body.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 40000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Motor 3"
                       data-price="40000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Motor 4</h2>
                    <p>Sport bike alot of speed and strong body.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 30000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Motor 4" data-price="30000"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/b1.jpg" alt="d1" style="width:100%;">
                </div>
                <div class="column" style="background-color:transparent; width:50%; ">
                    <img src="imgs/menu/b2.jpg" alt="d2" style="width:100%;">
                </div>
            </div>
        </div>

        <!------free market----->
        <div id="Free" class="tabcontent">
            <h3>Free market for second hand used products </h3>
            <br>
            <p style="text-align: center;">Café Barista users the freshest of fruits and vegetables to give you real
                taste and energy!</p>
            <br>
            <hr>

            <div class="row" style="grid-auto-flow: column;">

                <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    if($row['type']=='free'){?>
                        <div class="column">
                            <h2><?php echo "{$row['product_name']}"; ?></h2>
                            <p><?php echo "{$row['des']}" ?></p>
                            <p style="font-family: body; color: #bf55ec;"><?php echo "{$row['price']}"; ?></p>
                            <a style="font-family: body; text-decoration: none;" href="#" data-name="RISTRETTO" data-price="145"
                               class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                        </div>
                    <?php }} ?>

            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>SWEET LIME</h2>-->
<!--                    <p>A refreshing and cool fruit, it builds vitality and resistance against disease, rich in Vitamin-->
<!--                        C.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 210</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="SWEET LIME"-->
<!--                       data-price="210" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>PINEAPPLE</h2>A-->
<!--                    <p>Is a good kidney and body cleanser. Contains Vitamins A, B2, C.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 210</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="PINEAPPLE" data-price="210"-->
<!--                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
                <div class="column">
                    <h2>WATERMELON</h2>
                    <p>A high-lycopene fruit rich in Vitamin B6 and keeps the body hydrated and energetic.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 275</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="WATERMELON"
                       data-price="275" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>COCONUT WATER</h2>
                    <p>Fresh, cooling and energizing. Full of Vitamins. A, B & C.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 145</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="COCONUT WATER"
                       data-price="145" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>CARROT</h2>
                    <p>Rich in Vitamin A, this is great for the eyes and cleanses the body.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 245</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="CARROT" data-price="245"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>POMEGRANATE</h2>
                    <p>Pomegranate is good for digestion and increasing blood circulation.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 315</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="POMEGRANATE"
                       data-price="315" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>MANGO JUICE</h2>
                    <p>Rich in antioxidant vitamins A, C & E and boosts the immune system.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 275</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="MANGO JUICE"
                       data-price="275" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>
            <br>

            <h3> Electornics Devieces</h3>
            <br>
            <hr>
            <div class="row">
                <div class="column">
                    <h2>Desktop computers</h2>
                    <p>Core i7 , 8th Generation , 1 tera memory ,The Vostro 5490 also features faster boot times, thanks to the 256GB M. 2 NVMe PCIe SSD. </p>
                    <p style="font-family: body; color: #bf55ec;">RS 4000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Desktop computers"
                       data-price="4000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>IPhone 11</h2>A
                    <p>The iPhone 11 succeeds the iPhone XR, and it features a 6.1-inch LCD display that Apple calls a "Liquid Retina HD Display." It features a 1792 x 828 resolution at 326ppi, a 1400:1 contrast ratio, 625 nits max brightness,
                        True Tone support for adjusting the white balance to the ambient lighting, and wide color support.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 2500</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="IPhone 11"
                       data-price="2500" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h2>Laptop MSI</h2>
                    <p> The best MSI gaming laptop should prove a capable mobile PC that offers high gaming frame rates, outstanding build quality, and excellent all-around functionality.
                        It's a name that's often associated with powerful gaming components and some of the best gaming laptops around..</p>
                    <p style="font-family: body; color: #bf55ec;">RS 5000</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Laptop MSI"
                       data-price="5000" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Apple iPad Air</h2>
                    <p>Apple's iPad Air is an iOS tablet that is lighter and thinner than Apple's previous tablets.
                        iPad Air runs the iOS 7 operating system and features a 64-bit Apple A7 processor and 1 GB of RAM..</p>
                    <p style="font-family: body; color: #bf55ec;">RS 2489</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Apple iPad Air" data-price="2489"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>FOUNTAIN OF YOUTH</h2>-->
<!--                    <p>Pineapple & Coconut - A natural detox. It contains Vitamins A & C, potassium, magnesium, calcium-->
<!--                        phosphorus and B-Complex.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 295</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="FOUNTAIN OF YOUTH"-->
<!--                       data-price="295" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!---->
<!--                <div class="column">-->
<!--                    <h2>SWEET BLISS</h2>-->
<!--                    <p>Apple & Sweet Lime - A great appetizer, it helps strengthen the body’s immune system and builds-->
<!--                        body resistance. Rich in Vitamins C & B, iron, potassium, calcium and phosphorus.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 295</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="SWEET BLISS"-->
<!--                       data-price="295" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="column">-->
<!--                    <h2>TROPICAL DELIGHT</h2>-->
<!--                    <p>Papaya, ESPRESSO, Apple & Pomegranate - A combination of goodness that adds to the body’s defence-->
<!--                        system. A strong anti-oxidant, it is also anti-ageing. Rich in Vitamins C & B, iron, potassium,-->
<!--                        calcium and phosphorus.</p>-->
<!--                    <p style="font-family: body; color: #bf55ec;">RS 295</p>-->
<!--                    <a style="font-family: body; text-decoration: none;" href="#" data-name="TROPICAL DELIGHT"-->
<!--                       data-price="295" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>-->
<!--                </div>-->
<!--            </div>-->
            <br>
            <img src="imgs/menu/tab.jpg" alt="j1" class="center">
            <br>
            <h3>Bicycles</h3>
            <br>
            <hr>
            <div class="row">
                <div class="column">
                    <h2>Racing bicycle</h2>
                    <p>A racing bicycle, also known as a road bike, and once popularly known as a ten speed, is a bicycle designed for competitive road cycling, a sport governed by and according to the rules of the Union Cycliste Internationale (UCI).
                        The UCI rules were altered in 1934 to exclude recumbent bicycles.</p>
                    <p style="font-family: body; color: #bf55ec;">RS 990</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Racing bicycle" data-price="990"
                       class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>

                <div class="column">
                    <h2>Mountain bicycle</h2>
                    <p>These durable, rugged bikes are made for riding narrow dirt trails. They have wide, flat handlebars for control; two-inch or wider tires with knobby tread for traction;
                        and wide-range drivetrains and hydraulic disc brakes for handling steep climbs and descents</p>
                    <p style="font-family: body; color: #bf55ec;">RS 890</p>
                    <a style="font-family: body; text-decoration: none;" href="#"
                       data-name="Mountain bicycle" data-price="890" class="add-to-cart btn btn-primary"
                       onclick="myFunction()">Add to Order</a>
                </div>
                <br>
                <div>
                    <img src="imgs/menu/bi.jpg" alt="j1" class="center">
                </div>
            </div>
            <br>
            <h3> Lassi</h3>
            <br>
            <hr>
            <div class="row">
                <div class="column">
                    <h2>Classic, Banana, Mango (seasonal)</h2>
                    <p style="font-family: body; color: #bf55ec;">RS 195 each</p>
                    <a style="font-family: body; text-decoration: none;" href="#" data-name="Classic, Banana, Mango"
                       data-price="195" class="add-to-cart btn btn-primary" onclick="myFunction()">Add to Order</a>
                </div>
            </div>
        </div>
    </div>


</header>
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-size: 200%;">Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        <table style="color: black; font-family: body; font-style: bold;" class="show-cart table">

                </table>
                        <div style="color: black; font-family: body; >Total price: Rs <span class="total-cart"></span></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button href="order_OR_Sale.php"  type="button" class="btn btn-primary"> Checkout</button>
                <a href="Home.php">HOME</a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    function slideshow() {
        var x = document.getElementById('check-class');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function openPage(pageName, elmnt, color) {

        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }


        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }

        document.getElementById(pageName).style.display = "block";

        elmnt.style.backgroundColor = color;
    }

    document.getElementById("defaultOpen").click();

    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }


    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // List View
    function listView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "100%";
        }
    }

    //Grid View
    function gridView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "50%";
        }
    }
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src="css/script.js"></script>
<script>
    function myFunction() {
        alert("Item added in your order");
    }
</script>
</body>
</html>