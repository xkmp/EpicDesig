<?php
namespace EpicFX\EpicDesig;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use EpicFX\EpicDesig\Instrument\SmallTools;
use EpicFX\EpicDesig\PlayerEvent\PlayerEvent;
use EpicFX\EpicDesig\Instrument\CheckForUpdates;
use EpicFX\EpicDesig\Configs\BlockList;
use EpicFX\EpicDesig\Configs\Configs;
use pocketmine\utils\Config;

// 2019年4月17日 下午4:06:35
class EpicDesig extends PluginBase implements Listener
{

    /**
     *
     * @var EpicDesig
     */
    public static $getInstance;
    /**
     * 主配置文件
     *
     * @var Config
     */
    public $Config;

    /**
     * 方块名称ID对照表
     *
     * @var Config
     */
    public $BlickList;

    public function onEnable()
    { // error_reporting(0);
        @date_default_timezone_set('Etc/GMT-8');
        $start = $this->getServer()->getPluginManager();
        $start->registerEvents(new PlayerEvent($this), $this);
        $start->registerEvents($this, $this);
        new Configs($this);
        BlockList::makeConfig($this);
        if ($this->Config->get("更新检查")) {
            new CheckForUpdates($this);
        }
        $this->getLogger()->info(SmallTools::getFontColor($this->getName() . "插件启动！作者：小凯     QQ：2508543202  感谢使用！"));
    }

    public function onLoad()
    {
        self::$getInstance = $this;
        $this->getLogger()->info(SmallTools::getFontColor($this->getName() . "插件加载中....."));
    }

    public function onDisable()
    {
        $this->getLogger()->info(SmallTools::getFontColor($this->getName() . "插件关闭！QAQ你居然把我关闭了，是不是不爱我了."));
    }
}
?>