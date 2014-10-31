<html>
  <head>
    <title>Accessing Elements</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
  </head>
  <body>
    <p>
      <?php


        require_once(__DIR__ . "/control/create-db.php");
        







        $tens = array("do","re","mi","alex");
        $do = 0;
        $re = 1;
        $mi = 2;
        $alex = 3;
        $myname = "xiang";
        $im=imagecreate(300, 200);
        imagecolorallocate($im, 40, 20, 250);
        imagejpeg($im,'dead.jpg');
        
       
        echo "</h1>$myname</h1>";







  class Person {
          public $me = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
        
       
      ?>
    </p>









 <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript" src="main.js"></script>








    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
<script type="text/javaScript" src="bootstrap.min.js"></script>
<script type="text/javaScript" src="java.js"></script>
  </body>
</html>