<?php
namespace ItemClear;
class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener{
    public $array = array();
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new Event(), $this);
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Task($this), 20);
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new TaskItem($this), 20);
        $cfg = [
            "Worlds" => array("World","World"),
            "Item" => array(0,0),
        ];
        $config = new \pocketmine\utils\Config($this->getDataFolder()."config.yml",\pocketmine\utils\Config::YAML,$cfg);
        $config->save()
    }
}
?>
