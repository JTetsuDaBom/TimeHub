<?php
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\events\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getLogger()->info("T-Hub plugin enabled made by MegaTheDev");
  }
  public function onDisable(){
    $this->getLogger()->info('T-Hub disabled restart the server to enable the plugin");
  }
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args){
  
  }
}
