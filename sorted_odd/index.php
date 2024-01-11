<?php
/*
Instructions
Output
Task
You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

Examples
[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
*/

function sortArray(array $arr) : array {
    // Return a sorted array.
    $sorted_array = [];

    $odd_numbers = []; //get the odd numbers first into an array
    foreach($arr as $item){    
      if($item %2 != 0){
        $odd_numbers[] = $item;
      }
  }
  
  sort($odd_numbers); //sort the odd numbers in ascending order // you can use the rsort($array) to sort them in descending order
  
  /**In this loop, the function reconstructs the final sorted array ($sorted_array). 
   * If the current number in the original array is odd, it takes the smallest element from the sorted odd numbers array (array_shift($odd_numbers)) and adds it to the $sorted_array. 
   * If the number is even, it adds the original even number to the $sorted_array. */

  foreach($arr as $item){
    if($item %2 != 0){
        $sorted_array[] = array_shift($odd_numbers);
    }else{
        $sorted_array[] = $item;
    }
  }

return $sorted_array;

}
//test the function
$result = sortArray([5, 8, 6, 3, 4]);
print_r($result);