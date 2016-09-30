<?php

namespace ItemClear;

class Task extends \pocketmine\scheduler\PluginTask{
        
    public $owner;

    public function __construct(API $owner) {
    $this->owner = $owner;
    }
    
    public function onRun($tick){
       foreach($this->owner->getVar()->config->get("worlds") as $worldconfig){foreach($this->owner->getVar()->config->get("Item") as $items){
        foreach ($this->owner->getServer()->getOnlinePlayers() as $p){
        $a = $this->owner->getPlayer($this->owner->getVar()->array, $p);
        foreach ($a->getInventory()->getContents() as $inv){
           if($worldconfig == $this->owner->array["w"][$a->getName()]){
            if($inv->getId() == $items){
                $a->getInventory()->removeItem(\pocketmine\item\Item::get($items,0,PHP_INT_MAX));
           }}}
          }
        }
    }
  }
}
?>
