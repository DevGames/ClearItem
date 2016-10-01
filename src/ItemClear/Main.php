<?php
namespace ItemClear;
class Main extends \pocketmine\plugin\PluginBase{
    public $config;
    public function onEnable(){
        $cfg = ["Worlds" => array("World","World"),"Item" => array(0,0),];
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Task($this), 20);
        $this->config = new \pocketmine\utils\Config($this->getDataFolder()."config.yml",\pocketmine\utils\Config::YAML,$cfg);
        $this->config->save();
    }
}
?>
