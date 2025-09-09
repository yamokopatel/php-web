<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>people array</title>
    </head>
    <body>
        <?php
            $people = [
                [
                    "name"=>"Deniss",
                    "email"=>"denissmail@mail.mail",
                    "languages"=>["Java","C#","php","JS"]
                ],
                [
                    "name"=>"Timurs",
                    "email"=>"timursmail@mail.mail",
                    "languages"=>["Java","php","python","C++"]
                ],
                [
                    "name"=>"Markuss",
                    "email"=>"markussmail@mail.mail",
                    "languages"=>["Java","php","C#"]
                ]
            ];

            function lineBreak($count){
                for($a = 0; $a < $count; $a++){
                    echo "<br>";
                }
            }

            function arrayToString($array){
                echo "[";
                for($a = 0; $a < count($array); $a++){
                    if(($a + 1) < count($array)){
                        echo $array[$a] . ", ";
                    }else{
                        echo $array[$a];
                    }
                }
                echo "]<br>";
            }
        ?>

        <h2>People array</h2>
        <?php
            for($a = 0; $a < count($people); $a++){
                foreach ($people[$a] as $key => $value) {
                    if($key != "languages"){
                        echo $key . ": " . $value . "<br>";
                    }else{
                        echo $key . ": " . arrayToString($value) . "<br>";
                    }
                }
                lineBreak(2);
            }
        ?>
    </body>
</html>