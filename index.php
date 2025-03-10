<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <?php
    $date = date('H');

    if($date < '12') {
      echo 'Good Morning';
    } elseif ($date < '18') {
      echo 'Good Afternoon';
    } else {
      echo 'Good Evening';
    }

    echo '<br>';

    switch('yellow') {
      case 'red':
        echo 'Your favorite color is red';
        break;
      case 'blue':
        echo 'Your favorite color is blue';
        break;
      case 'green':
        echo 'Your favorite color is green';
        break;
      default:
        echo 'Your favorite color is something else';
    }

    echo '<br>';

    $x = 5;

    while($x <= 10) {
      echo 'The number is: ' . $x . '<br>';
      $x++;
    };

    echo '<br>';

    do{
      echo 'The number is: ' . $x . '<br>';
      $x++;
    } while($x <= 10);

    echo '<br>';

    for($x = 0; $x <= 10; $x++) {
      echo 'The number is: ' . $x . '<br>';
    }

    echo '<br>';

    function test($name) {
      echo 'Are you ' . $name . '?';
    }

    test('Asad Ullah Shamim');

    echo '<br>';

    
  ?>

  <?php ?>

  </br>
  </br>
  </br>
  <?php
    // String
    $name = "John Doe";

    // Number
    $age = 25;

    // Boolean
    $isMale = true;

    // Array
    $foods = array("Apple", "Banana", "Orange");

    // null
    $name = null;

    // Object
    class Phone {
      var $model;
      function phoneModel($number) {
        global $model;
        $model = $number;
        echo 'This is a '.$model.' phone' . '<br>';
      }
    }

    $apple = new Phone;
    $apple->phoneModel('iPhone');

    // Use String
    echo 'I Love PHP' . '<br>';
    echo strlen('I Love PHP'). '<br>';
    echo str_word_count('I Love PHP') . '<br>';
    echo strrev('I Love PHP') . '<br>';
    echo strpos('I Love PHP', 'PHP') . '<br>';
    echo str_replace( 'PHP', 'Java', 'I Love PHP') . '<br>' . '<br>';


    // Math
    echo (pi()) . '<br>';
    echo (min(0, 150, 30, 20, -8, -200)) . '<br>';
    echo (max(0, 150, 30, 20, -8, -200)) . '<br>';
    echo (abs(-6.7)) . '<br>';
    echo (sqrt(64)) . '<br>';
    echo (round(5.60)) . '<br>';
    echo (rand(10, 100)) . '<br>' . '<br>';



    // Constants
    define('GREETING', 'Hello Everyone!');
    echo GREETING . '<br>';



    // Operators
    $x = 5;
    $y = 10;

    // Addition
    echo $x + $y . '<br>';
    // Subtraction
    echo $x - $y . '<br>';
    // Multiplication
    echo $x * $y . '<br>';
    // Division
    echo $x / $y . '<br>';
    // Modulus
    echo $x % $y . '<br>';
    // Exponential
    echo $x ** $y . '<br>' . '<br>';
    // Concatenation
    // echo $x = $y . '<br>';


    // Assignment
    $x = 5;
    $y = 10;
    
    $x += $y;
    echo $x . '<br>';
    $x -= $y;
    echo $x . '<br>';
    $x *= $y;
    echo $x . '<br>';
    $x /= $y;
    echo $x . '<br>';
    $x %= $y;
    echo $x . '<br>' . '<br>';
  ?>
</body>
</html>