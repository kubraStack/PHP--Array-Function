<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
      echo "<pre>";
        $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

        //*array_map fonksiyonu ile boş olan değerleri bulduk.
        $map_arr = array_map(function($e){
            global $planets;
            if ($e == " ") {
                return null;
            }else{
                return $e;
            }
        },$planets);

        //*array_filter fonksiyonu ile önceki dizinin içindeki boş değer filtrelemesi yaptık

        $filtered_arr = array_filter($map_arr, function($e){
            return $e != " " ? $e : false;
        });

        //*

        function create($i){
            global $filtered_arr;
            global $planets;
            $result = array_flip($filtered_arr);
            return array_rand($result,$i);
        }

        // print_r($filtered_arr);

        print_r(create(3));
    ?>
    
</body>
</html>