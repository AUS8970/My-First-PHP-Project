<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
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
    echo (rand(10, 100)) . '<br>';
  ?>
</body>
</html>