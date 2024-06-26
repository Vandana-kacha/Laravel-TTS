<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    function randomNumber()
    {
        echo rand ( 1000 , 9999 );
    }

    echo "<b>Print 4 digit number :</b> ";
    
    randomNumber();

    echo "<br><hr><br>";

    function simpleInterest()
    {
        echo "Amount : ".$amount = 1000;
        echo "<br>";
        echo "Rate ".$rate = 9;
        echo "<br>";
        echo "Time ".$time = 5;
        echo "<br>";
        // Calculating the SI 
        return $interest = ($amount * $rate * $time) / 100; 
    }
    
    echo "<b>Simple Interest :</b> ".simpleInterest(); 

    echo "<br><hr><br>";

    echo "Year : ".$years = 10; // number of years
    echo "<br>";
    echo "Amount : ".$initial = 10000; // Principal amount
    echo "<br>";
    echo "Rate : ".$rate = 10; // Rate of Interest
    echo "<br>";
    echo "Compount : ".$n = 4; // number of compounding in a year
    echo "<br>";

    function CompoundInterest($investment, $year, $rate=10, $n=1)
    {
        $accumulated=0;
        if ($year > 1)
        {
            $accumulated = CompoundInterest($investment, $year-1 , $rate, $n);
        } else {
            $accumulated += $investment;
        }
        $accumulated = $accumulated * pow(1 + $rate/(100 * $n),$n);
        return $accumulated;
    }

    echo "<b>Compound Interest : </b>".$totalMaturity = CompoundInterest($initial,$years,$rate,$n);

    echo "<br><hr><br>";

    echo "<b>Only even number between 1 to 10 : </b> <br><br>";

    function findEvenNumber()
    {
        for( $i=1; $i<=10; $i++ )
        {
            if( $i%2 != 0 ){
                echo $i.' <br> ';
            }
        }
    }

    echo findEvenNumber();
    
    echo "<br><hr><br>";

    echo "<b>avg of marks in 5 subject</b> <br><br>";
    function findAverage()
    {
        $total_marks = array(80,75,70,85,90);
        $total = array_sum($total_marks);
        echo $avg = $total / 5;
    }

    echo findAverage();

    echo "<br><hr><br>";

    echo "<b>find leap year</b> <br><br>";

    function leapYear()
    {
        if (date('L', strtotime("2024-01-01")) == 1) {
            echo "Leap year";
        } else {
            echo "No";
        }
    }

    echo leapYear();
    ?>
</body>
</html>

