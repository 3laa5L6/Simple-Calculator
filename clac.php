
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Maths Calculator</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>
    <h1>Simple Calculator:</h1>
    <div class=container>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["sign"])): ?>
        <div>
            <h1>
                &nbsp;
            <?php


                    $n1 = $_POST['num1'];
                    $n2 = $_POST["num2"];
                    $sign = $_POST["sign"];

                    function maths($num1,$num2,$sgn){
                        if($sgn=="plus"){
                            return $num1 + $num2;
                        }elseif($sgn=="negative"){
                            return $num1 - $num2;
                        }elseif($sgn=="star"){
                            return $num1 * $num2;
                        }elseif($sgn=="slash"){
                            return $num1 / $num2;
                        }
                    }
                    $maths = maths($n1,$n2,$sign);

                if(is_float($maths)){

                    $float = number_format($maths,strlen($maths));
                    echo $float;
                    echo "<br>";
                    echo "As an integer number: " . round($float);
                }elseif(is_integer($maths)){
                    
                    $int = number_format($maths);
                    echo $int;
                }

            ?>
            </h1>
        </div>
        <?php endif; ?>

        <div>
        <form action="" method="post">
            <input type="number" name="num1" id="" placeholder="Write first number" autofocus>
            <select name="sign" id="">
                <option disabled selected >select</option>
                <option value="plus">+</option>
                <option value="negative">-</option>
                <option value="star">*</option>
                <option value="slash">/</option>
            </select>
            <input type="number" name="num2" placeholder="Write second number">
            <input type="submit">
        </form>
        </div>
    </div>
</body>
</html>