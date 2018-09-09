<?php
class ForArrayClass
{
    public $arr1;
    public $needle;
    public $count;
    
    public function __construct(array $arr1){
        $this->arr1 = $arr1;
        $this->needle = 9;
        $this->getCountArr();
    }
    public function getCountArr() {
        $this->count = count($this->arr1);
    }
    
    // array_sum
    public function arraySum() {
        $sum = $this->arr1[0] - $this->arr1[0];
        foreach ($this->arr1 as $value) {
            $sum += $value;
        }
        
        return $sum;
    }
    
    // in_array
    public function inArray() {
        
        foreach ($this->arr1  as $value) {
            
            if ($value == $this->needle) {
                return true;  
            }
        }
        
        return false;
        
    }
       
     // sort
     public function sortArray() {
        
        $change = $this->arr1[0];
        $temp = $this->count;
        
        for ($i=0; $i<$temp; $i++) {
            $temp = $i-$i;
            
            for ($j=0; $j<$this->count-1; $j++) {
               
                if ($this->arr1[$j] > $this->arr1[$j+1]) {
                    $change = $this->arr1[$j];
                    $this->arr1[$j] = $this->arr1[$j+1];
                    $this->arr1[$j+1] = $change;
                    $temp++;
                }
            }
        }
        
        return $this->arr1;
    }
    
}

class ForDiffArray extends ForArrayClass
{

	function __construct(array $arr1) {
       parent::__construct($arr1);
   }

    // array_diff
    public function arrayDiff($arrayForDiff) {
        
        foreach ($this->arr1 as $key => $value1) {
            
            foreach ($arrayForDiff as $value2) {
                if ($value1 === $value2) {
                    unset($this->arr1[$key]);
                }
            }
        }
        return $this->arr1;
    }
}


$obj = new ForArrayClass([5, 7, 1, 4, 19, 8, 75, 14]);
var_dump($obj->arraySum());
var_dump($obj->inArray());
var_dump($obj->sortArray());

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");

$childObj = new ForDiffArray($array1);
var_dump ($childObj->arrayDiff($array2));
