<?php



    function hello(){
        echo "Hello";


    }
    function hello1(){
        $user ="youser";
        echo "Hello " . $user;


    }
    function hello2(){
        $user ="yousef";

        if($user === "yousef"){
        echo "Hello " . $user;
        }else{
            echo "bye " .$user;
        }    

    }
    function hello3($x){
        $user =$x;

        if($user === "yousef"){
        echo "Hello " . $user;
        }else{
            echo "bye " .$user;
        }    

    }

    function add($y1,$y2){
        return $y1 + $y2;

    }
    



    hello();
    echo "<br>";
    hello1();
    echo "<br>";
    hello2();
    echo "<br>";
    hello3("y");
    echo "<br>";
    echo add(1,2); 
    








?>