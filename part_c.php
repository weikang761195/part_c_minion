<form action="/part_c.php" method="post">
  <label for="fname">Insert a hat number (n) :</label><br>
  <input type="text" id="index" name="index"><br>
  
  <input type="submit" value="Submit">
</form> 


<?php

if(!empty($_POST["index"])){

        $index_array = array();
        $prime_string = "";

        //insert data from 1 to 10000 index array
        for($i = 1; $i <= 10000 ;$i++ ){
            array_push($index_array,$i);
        }
        //loop the index array using foreach loop to fasten the loop
        foreach ($index_array as $key => $data){
            //initiate count = 0
            $count=0;
            for ($i = 0; $i <= $key;$i++){
                if($data%$index_array[$i] == 0){
                    //if divided by 1 or itself, count +1
                    $count++;
                }
                if($count > 2){
                    //not prime, break the loop, save execution time
                    break;
                }
            }
            if($count == 2){
                //if count totally is 2, mean it is prime number (divided by 1 or itself)
                //concate the prime number into string
                $prime_string = $prime_string.$data;
            }
        }
        //split the string into array with index
        $minion_start_index = str_split($prime_string);
        //slice the array with index(input), and range of 5
        $minion_new_id = array_slice($minion_start_index,  $_POST["index"], 5);
        //display data in string
        $final_result_id = implode("",$minion_new_id);
        
        var_dump($final_result_id);
}

?>