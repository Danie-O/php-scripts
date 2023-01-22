<!DOCTYPE html>
<html>
    <head>
        <title>FUNCTION BANK</title>
    </head>

    <body>
        <?php
            function greet($name){
                echo "Welcome " .$name;
                echo "<p>";
            }

            //function with args
            function maximum($a, $b, $c){
                $a; $b; $c;
                /*echo "Enter 3 numbers";
                
                $b = readline('Number 2: ');
                echo "<p>";
                $c = readline('Number 3: ');
                */
                $max = $a;
                if($b>=$max && $b>=$c)
                    $max= $b;
                else if($c>$max)
                    $max = $c;
                echo "Maximum of numbers entered is: $max";

            }

            function smallest($a, $b, $c){
                $a; $b; $c;
                $least = $a;

                if($b<=$least && $b<=$c)
                    $least = $b;
                else if($c<$least)
                    $least = $c;

                return $least;
            }

            //function with args and return type
            function biggest($a, $b, $c){
                $a; $b; $c;
               
                $max = $a;
                if($b>=$max && $b>=$c)
                    $max= $b;
                else if($c>$max)
                    $max = $c;
                
                    return $max;

            }

            //function to print out a list in ascending order
            function ascend(array $x){

                sort($x);
                echo "NUMBERS IN ASCENDING ORDER: ";
                echo "<p>";
                foreach($x as $i){
                    echo "  " .$i;
                    
                }
                echo "<p>";
            }


            //function to print out a list in descending order
            function descend($y){

                rsort($y);
                echo "NUMBERS IN DESCENDING ORDER: ";
                echo "<p>";
                foreach($y as $i){
                    echo "  " .$i ." ,";
                    
                }
                echo "<p>";
            }

            //Random number generator btw. 1 and 10
            function random($x){

                echo "TICKET NUMBER: ";
                for($i=0; $i<$x; $i++){
                    echo "  " .(rand(1,10));
                }
            }
        ?>
   </body>
</html>