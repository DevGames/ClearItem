<?php
namespace ItemClear;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener{
    public $array = array();
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new Event(), $this);
        $this->getServer ()->getScheduler ()->scheduleRepeatingTask (new Task ($this), 20);
    }
}
?>
