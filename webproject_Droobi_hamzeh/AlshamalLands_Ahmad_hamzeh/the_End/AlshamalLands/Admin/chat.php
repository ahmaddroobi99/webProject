<?php
$show = true;  # Show the form
$initial_month = null;
$final_month = null;
$counts = null;
if(isset($_REQUEST['initial-month']) && isset($_REQUEST['final-month'])) {
    @$db = new mysqli('localhost', 'root', '', 'Project_Final');
    if(mysqli_connect_errno()) {
        echo "There is an error while connecting to database <br>";
        die();
    }
    $initial_month = $_REQUEST['initial-month'];
    $final_month = $_REQUEST['final-month'];
    $counts = array_fill(0, (int)$final_month - (int)$initial_month + 1, 0);
    for($k = (int)$initial_month; $k <= (int)$final_month; $k++) {
        $qry2 = "SELECT * FROM user WHERE id BETWEEN '1' AND '5'";
        $res = $db -> query($qry2);
        $total = $res -> num_rows;
        $counts[$k - $initial_month] = $total;
        $total = 0;
    }
    $db -> close();
    $show = false;  # Don't show the form, just show the chart because the data is ready
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Assignment(3) - chart.js</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            padding: 5px 30px;
        }

        canvas {
            border: 2px solid red;
            border-radius: 5px;
            width: 70%;
            height: 300px;
        }
        section {
            width: 50%;
            height: 400px;
            border: 2px solid blue;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        form {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-content: flex-start;
            flex-flow: column nowrap;
            width: 40%;
            text-align: center;
        }
        form input {
            margin: 10px;
            border: 2px solid gray;
        }
        form label {
            font-size: 16pt;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
if($show) {
    ?>
    <section>
        <form action="chat.php" method="POST">
            <form action="chat.php" method="POST">
                <label for="initial-month">Initial month:</label>
                <input type="number" id="initial-month" name="initial-month" required min="1" max="12">
                <label for="final-month">Final month:</label>
                <input type="number" id="final-month" name="final-month" required min="1" max="12">
                <input type="submit" value="Show Chart" style="cursor: pointer">
            </form>
        </form>
    </section>
    <?php
}
else {
    ?>
    <canvas id="my-chart"></canvas>
    <?php
}
?>

<script type="text/javascript">
    let myChart = document.getElementById('my-chart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let chart = new Chart(myChart, {
        type: 'doughnut',
        data: {
            labels: [
                <?php
                for($i = (int)$initial_month; $i <= (int)$final_month; $i++) {
                    echo "$i,";
                }
                ?>
            ],
            datasets: [{
                label: 'Population',
                data: [
                    <?php
                    for($i = 0; $i < sizeof($counts); $i++)
                        echo "$counts[$i],";
                    ?>
                ],
                backgroundColor: [
                    '#2ef89a',
                    '#fe3301',
                    '#4471ef',
                    '#9a5491',
                    '#fe8942',
                    '#8faa53',
                    '#fa91ae',
                    '#ee97f1',
                    '#ff00ff',
                    '#ff0000',
                    '#81efae',
                    '#cdf938'
                ],
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            }]
        },
        options: {
            title: {
                display: true,
                text: 'how many users are thier beetween 1 and 5 ID',
                fontSize: 25
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: true
            }
        },
    });
</script>
</body>
</html>