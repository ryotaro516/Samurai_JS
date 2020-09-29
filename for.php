<?php
for($i=1; $i<=30; $i++){
    if($i%3==0){
        print("Fizz"."\n");
    }elseif($i%5==0){
        print("Buzz"."\n");
    }elseif($i%15==0){
        print("FizzBuzz"."\n");
    }else{
        print($i."\n");
    }
}
?>