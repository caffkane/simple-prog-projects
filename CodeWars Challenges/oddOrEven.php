<?php

function odd_or_even(array $a): string {
    $count = 0;
    if(sizeof($a)===0){
      return 'even';
    }
    
    for($i = 0; $i < sizeof($a); $i++){
      $count += $a[$i];
    }  
    
    if($count % 2 === 0){
      return 'even';  
    } else {
      return 'odd';
    }
  
  }

// Found a much cleaner solution, super simple for php

function odd_or_even(array $a): string {
    return array_sum($a) % 2 ? 'odd' : 'even';
  }


/*
Task:
Given an array of numbers (a list in groovy), determine whether the sum of all of the numbers is odd or even.

Give your answer in string format as 'odd' or 'even'.

If the input array is empty consider it as: [0] (array with a zero).

Example:
odd_or_even([0]); // => 'even'
odd_or_even([2, 5, 34, 6]); // => 'odd'
odd_or_even([0, -1, -5]); // => 'even'

*/