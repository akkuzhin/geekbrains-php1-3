<?php
/*
 * ЗАДАЧА №2
 * Напишите функцию, которая создает массив из $n случайных чисел и
 *  возвращает его в отсортированном по убыванию порядке
 */

 function randNumber () {
     $i = 0;
     while ($i < 10) {
         $arrRandNumber [] = rand();
         $i++;
     }
     rsort($arrRandNumber);
     return $arrRandNumber;
 }

 foreach (randNumber() as $value) {
     echo $value . '<br>';
 }