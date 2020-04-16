<?php
 function calculate($expression){
     if (gettype($expression)== "string"){
         $terms = exSplit($expression);

     }
     else{
         $terms = array($expression);
     }
     $r = '';
     while (count($terms) >0){
         $i = 

     }

 }
 function exSplit($ex){

 }
 function derivative($terms){

 }
 function matchindex($terms){
     

 }
 function chainrule($terms){

 }
 $trigoperations = array('sin', 'cos', 'tan', 'sec', 'csc', 'cot');
