<?php



class Calculator {
    public $result = 0;
    
    private $exeptionMessages = array(
        'division' => 'divizion by zero',
        'invalid_arg' => 'Arg must be a number'
    );
    
    public function __construct() {}
    
    public function operation($funcion, $var){
        if(!is_numeric($var)){
            return $this->exeption();
        }
        
        return $this->$funcion($var);
    }
    
    protected function plus($var){
        return $this->result += $var;
    }
    
    protected function minus($var){
        return $this->result -= $var;
    }
    
    protected function divide($var = 0){
        return $this->result /= $var;
    }
    
    protected function multiply($var){
        return $this->result *= $var;
    }
    
    public function round($var, $decimals = 0){
        echo $this->result = round($var, $decimals);
    }
    
    protected function exeption($name){
        throw new Exception($this->$exeptionMessages[$name]);
    }
    
}