<?php
/*
Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.

It should remove all values from list a, which are present in list b.

arrayDiff([1,2],[1]) == [2]
If a value is present in b, all of its occurrences must be removed from the other:

arrayDiff([1,2,2,2,3],[2]) == [1,3]
*/
function arrayDiff($a, $b) {
  $result = [];
  foreach($a as $element)
  {
    $flag = false;
    foreach($b as $compare_item)
    {
      if ($compare_item == $element)
      {  
         $flag = true;
         break;
      }
    }
    if($flag == false)
      $result [] = $element;
  }
  return $result;
}
