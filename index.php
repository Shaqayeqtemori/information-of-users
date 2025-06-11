<?php
$arr = array("Name"=> "Edris","Last Name"=> "Ahamdi","year of born"=> 2006,"Age"=>19,"Weight"=>65,
"Grade"=>12,"Languages"=>"English,Farsi,Pashto","Job"=>"Student");
?>
<!DOCTYPE html>
<html lang="en">
    <!-- links -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- style file link -->
        <link rel="stylesheet" href="style.css">
        <title>User Information</title>
    </head>
    <!-- start body -->
    <body>
        <div class="container">
            <a href="#" style="--clr:#22e622; --i:2">
                <span>
                    <?php
                        // print all array
                        var_dump($arr);
                        echo "<hr>";
                        // adding to value in the end
                        array_push($arr ,"Favorite-color".'=>'."Black","Nationality".'=>'."Afghan");
                        print_r($arr );
                        echo "<hr>";
                        // remove the last value
                        array_pop($arr);
                        print_r($arr );
                        // sorting all values
                        sort($arr);
                        print_r($arr);
                    ?> 
                </span>
            </a>
        </div> 
    </body>
</html>