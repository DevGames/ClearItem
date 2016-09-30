<?php

namespace ItemClear;

class Event extends API implements \pocketmine\event\Listener{
        
    public function packet(\pocketmine\event\server\DataPacketReceiveEvent $ev){
        $this->getVar()->array[$ev->getPlayer()->getName()] = $ev->getPlayer();
        $this->getVar()->array["w"][$ev->getPlayer()->getName()] = $ev->getPlayer()->getLevel()->getFolderName();
    }
    
}
?>
