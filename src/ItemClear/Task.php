<?php

namespace NawafPluginARC;

class Task extends \pocketmine\scheduler\PluginTask{
        
    public $owner;

    public function __construct(API $owner) {
    $this->owner = $owner;
    }
    
    public function onRun($tick){
        foreach ($this->owner->getServer()->getOnlinePlayers() as $p){
        $a = $this->owner->getPlayer($this->owner->getVar()->array, $p);
        foreach ($a->getInventory()->getContents() as $inv){
           if($a->getLevel()->getFolderName() == $this->owner->array["w"][$a->getName()]){
            if($inv->getId() == $item){
                $a->getInventory()->removeItem(\pocketmine\item\Item::get($item,0,PHP_INT_MAX));
          }
          }
        }
    }
  }
}
?>
