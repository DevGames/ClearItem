<?php

namespace ItemClear;

class API extends ABI{
    
    public function getPlayer($array,$index){
        if($array === $this || ! is_array($array) ){
            return;
        }
    }
    
    public function getVar(){
        return $this;
    }
    
    public static function getArray(){
        return;
    }
}
?>
