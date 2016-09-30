<?php

namespace ItemClear;

class Event extends API implements \pocketmine\event\Listener{
        
    public function onJoin(\pocketmine\event\player\PlayerJoinEvent $ev){
        $this->getVar()->array[$ev->getPlayer()->getName()] = $ev->getPlayer();
    }
    
}
?>
