<?php
namesapce Thub;

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
    $this->getLogger()->info("plugin has been disabled");
  }
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
    switch(strtolower($cmd->getName())){
      case "thub":
        if(!$sender instanceof Player){
          $sender->sendMessage("please use this command in game");
          return false;
        }
        if(!$sender->hasPermission("thub.use")){
          $sender->sendMessage("You do not have permission to use this command");
          return false;
        }
        $this->getScheduler()->scheduleRepeatingTask(new Countdown($this, $sender), 20);
    }
    return true;
  }
}
