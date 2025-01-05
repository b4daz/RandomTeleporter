<?php

namespace RandomTeleporter;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;
use RandomTeleporter\Commands\RTPCommand;

class Main extends PluginBase
{
    use SingletonTrait;

    public static Config $config;

    protected function onLoad(): void
    {
        self::setInstance($this);
    }

    protected function onEnable(): void
    {
        $this->saveDefaultConfig();
        self::$config = $this->getConfig();
        $this->getServer()->getCommandMap()->register($this->getName(), new RTPCommand($this));
    }

    public static function isWorldEnabled(string $worldName): bool
    {
        $enabledWorlds = self::$config->getNested("worlds.enabled", []);
        return in_array($worldName, $enabledWorlds);
    }
}
