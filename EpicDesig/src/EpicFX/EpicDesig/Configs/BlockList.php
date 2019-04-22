<?php
namespace EpicFX\EpicDesig\Configs;

use pocketmine\utils\Config;
use EpicFX\EpicDesig\EpicDesig;

class BlockList
{

    /**
     * 根据物品ID获取物品名
     *
     * @param string $id
     *            物品ID
     * @return string 物品名
     */
    public static function getName(string $id): string
    {
        if ($id === NULL) {
            return NULL;
        }
        $BlockList = EpicDesig::$getInstance->BlickList->get($id, NULL);
        if ($BlockList !== NULL) {
            return $BlockList;
        }
        $idx = explode(":", $id);
        if (isset($idx[1])) {
            $id = $idx[0] . ":" . $idx[1];
        } else {
            $id = $id . ":0";
        }
        $BlockList = EpicDesig::$getInstance->BlickList->get($id, NULL);
        if ($BlockList != NULL) {
            return $BlockList;
        } else {
            return $id;
        }
    }

    /**
     * 根据物品名称获取物品ID
     *
     * @param string $id
     *            物品名称
     * @return string 物品ID
     */
    public static function getID(string $Name): string
    {
        if ($Name === NULL) {
            return null;
        }
        $name = array_search($Name, EpicDesig::$getInstance->getBlickID()->getAll());
        if ($name == NULL) {
            return $Name;
        }
        return $name;
    }

    public static function makeConfig(EpicDesig $plugin)
    {
        $plugin->BlickList = new Config($plugin->getDataFolder() . "/BlickList.yml", Config::YAML, BlockList::makeDefaultBlockIdAndName());
    }

    public static function makeDefaultBlockIdAndName()
    {
        return array(
            "0:0" => "空气",
            "1:0" => "石头",
            "1:1" => "花岗岩",
            "1:2" => "磨制花岗岩",
            "1:3" => "闪长岩",
            "1:4" => "磨制闪长岩",
            "1:5" => "安山岩",
            "1:6" => "磨制安山岩",
            "2:0" => "草方块",
            "3:0" => "泥土",
            "4:0" => "圆石",
            "5:0" => "橡树木板",
            "5:1" => "云杉木板",
            "5:2" => "桦木板",
            "5:3" => "丛林树木板",
            "5:4" => "金合欢木板",
            "5:5" => "深色橡木木板",
            "6:0" => "橡树苗",
            "6:1" => "云杉树苗",
            "6:2" => "桦树苗",
            "6:3" => "丛林树苗",
            "6:4" => "金合欢树苗",
            "6:5" => "深色橡树苗",
            "7:0" => "基岩",
            "8:0" => "流动的水",
            "9:0" => "水",
            "10:0" => "流动的岩浆",
            "11:0" => "岩浆",
            "12:0" => "沙子",
            "12:1" => "红沙",
            "13:0" => "砾石",
            "14:0" => "金矿石",
            "15:0" => "铁矿石",
            "16:0" => "煤矿石",
            "17:0" => "橡木",
            "17:1" => "云杉木",
            "17:2" => "桦木",
            "17:3" => "丛林木",
            "18:0" => "橡树叶",
            "18:1" => "云杉叶",
            "18:2" => "桦树叶",
            "18:3" => "丛林树叶",
            "19:0" => "干海绵",
            "19:1" => "湿海绵",
            "20:0" => "玻璃",
            "21:0" => "青金石矿",
            "22:0" => "青金石块",
            "23:0" => "发射器",
            "24:0" => "沙石",
            "24:1" => "錾制沙石",
            "24:2" => "光滑沙石",
            "25:0" => "音符盒",
            "26:0" => "方块床",
            "27:0" => "动力铁轨",
            "28:0" => "探测铁轨",
            "29:0" => "粘性活塞",
            "30:0" => "蜘蛛网",
            "31:0" => "高草",
            "31:1" => "草",
            "31:2" => "蕨",
            "32:0" => "枯死的灌木",
            "33:0" => "活塞",
            "34:0" => "活塞臂",
            "35:0" => "白色羊毛",
            "35:1" => "橙色羊毛",
            "35:2" => "品红色羊毛",
            "35:3" => "淡蓝色羊毛",
            "35:4" => "黄色羊毛",
            "35:5" => "黄绿色羊毛",
            "35:6" => "粉红色羊毛",
            "35:7" => "灰色羊毛",
            "35:8" => "淡灰色羊毛",
            "35:9" => "青色羊毛",
            "35:10" => "紫色羊毛",
            "35:11" => "蓝色羊毛",
            "35:12" => "棕色羊毛",
            "35:13" => "绿色羊毛",
            "35:14" => "红色羊毛",
            "35:15" => "黑色羊毛",
            "37:0" => "黄花羊毛",
            "38:0" => "罂粟",
            "38:1" => "蓝色的兰花",
            "38:2" => "绒球葱",
            "38:3" => "茜草花",
            "38:4" => "红色郁金香",
            "38:5" => "橙色郁金香",
            "38:6" => "白色郁金香",
            "38:7" => "粉色郁金香",
            "38:8" => "滨菊",
            "39:0" => "棕色蘑菇",
            "40:0" => "红色蘑菇",
            "41:0" => "金块",
            "42:0" => "铁块",
            "43:0" => "双石台阶",
            "43:1" => "双沙石台阶",
            "43:2" => "双橡木台阶",
            "43:3" => "双圆石台阶",
            "43:4" => "双砖台阶",
            "43:5" => "双石砖台阶",
            "43:6" => "双石英台阶",
            "43:7" => "双地狱砖台阶",
            "44:0" => "石台阶",
            "44:1" => "沙石台阶",
            "158:0" => "橡木台阶",
            "44:3" => "圆石台阶",
            "44:4" => "砖台阶",
            "44:5" => "石砖台阶",
            "44:6" => "石英台阶",
            "44:7" => "地狱砖台阶",
            "336:0" => "砖",
            "46:0" => "TNT",
            "47:0" => "书架",
            "48:0" => "苔石",
            "49:0" => "黑曜石",
            "50:0" => "火把",
            "51:0" => "火",
            "52:0" => "刷怪笼",
            "53:0" => "橡木阶梯",
            "54:0" => "箱子",
            "55:0" => "红石粉",
            "56:0" => "钻石矿",
            "57:0" => "钻石块",
            "58:0" => "工作台",
            "60:0" => "农田",
            "61:0" => "熔炉",
            "65:0" => "梯子",
            "66:0" => "铁轨",
            "67:0" => "圆石阶梯",
            "69:0" => "拉杆",
            "70:0" => "石质压力板",
            "72:0" => "木质压力板",
            "73:0" => "红石矿",
            "74:0" => "发光的红石矿",
            "75:0" => "红石火把",
            "77:0" => "石质按钮",
            "78:0" => "顶层雪",
            "79:0" => "冰",
            "80:0" => "雪",
            "81:0" => "仙人掌",
            "82:0" => "粘土",
            "84:0" => "音乐盒",
            "85:0" => "橡木围墙",
            "85:1" => "云杉围墙",
            "85:2" => "桦木围墙",
            "85:3" => "丛林木围墙",
            "85:4" => "金合欢木围墙",
            "85:5" => "深色橡木围墙",
            "86:0" => "南瓜",
            "87:0" => "地狱岩",
            "88:0" => "灵魂沙",
            "89:0" => "萤石",
            "90:0" => "传送门",
            "91:0" => "南瓜灯",
            "354:0" => "蛋糕",
            "356:0" => "中继器",
            "95:0" => "隐形基岩",
            "96:0" => "木质陷阱门",
            "97:0" => "石头刷怪蛋",
            "97:1" => "圆石刷怪蛋",
            "97:2" => "石砖刷怪蛋",
            "98:1" => "苔石砖",
            "98:2" => "裂石砖",
            "98:3" => "錾制石砖",
            "99:0" => "棕色蘑菇块",
            "100:0" => "红色蘑菇块",
            "101:0" => "铁栏杆",
            "102:0" => "玻璃板",
            "360:0" => "西瓜",
            "104:0" => "南瓜梗",
            "106:0" => "藤蔓",
            "107:0" => "橡木围墙大门",
            "108:0" => "砖块阶梯",
            "109:0" => "石砖阶梯",
            "110:0" => "菌丝",
            "111:0" => "睡莲",
            "405:0" => "地狱砖",
            "113:0" => "地狱砖围墙",
            "114:0" => "地狱砖阶梯",
            "116:0" => "附魔台",
            "379:0" => "酿造台",
            "380:0" => "炼药锅",
            "119:0" => "末地门",
            "120:0" => "末地传送门",
            "121:0" => "末地石",
            "122:0" => "龙蛋",
            "123:0" => "红石灯",
            "128:0" => "沙石阶梯",
            "129:0" => "绿宝石矿石",
            "130:0" => "末影箱",
            "131:0" => "拌线钩",
            "132:0" => "拌线",
            "133:0" => "绿宝石块",
            "134:0" => "云杉木阶梯",
            "135:0" => "桦木阶梯",
            "136:0" => "丛林木阶梯",
            "137:0" => "命令方块",
            "138:0" => "信标",
            "139:0" => "圆石墙",
            "139:1" => "苔石墙",
            "390:0" => "花盆",
            "391:0" => "胡萝卜",
            "142:0" => "土豆",
            "143:0" => "木质按钮",
            "145:0" => "铁砧",
            "145:4" => "轻微损坏的铁砧",
            "145:8" => "严重损坏的铁砧",
            "146:0" => "陷阱箱",
            "147:0" => "重力压力板(轻型)",
            "148:0" => "重力压力板(重型)",
            "404:0" => "比较器",
            "178:0" => "阳光传感器",
            "152:0" => "红石块",
            "153:0" => "地狱石英矿石",
            "154:0" => "漏斗",
            "155:0" => "石英块",
            "155:1" => "竖纹石英块",
            "155:2" => "錾制石英块",
            "156:0" => "石英阶梯",
            "158:1" => "云杉木台阶",
            "158:2" => "桦木台阶",
            "158:3" => "丛林木台阶",
            "158:4" => "金合欢木台阶",
            "158:5" => "深色橡木台阶",
            "159:0" => "白色粘土",
            "159:1" => "橙色粘土",
            "159:2" => "品红色粘土",
            "159:3" => "淡蓝色粘土",
            "159:4" => "黄色粘土",
            "159:5" => "黄绿色粘土",
            "159:6" => "粉红色粘土",
            "159:7" => "灰色粘土",
            "159:8" => "淡灰色粘土",
            "159:9" => "青色粘土",
            "159:10" => "紫色粘土",
            "159:11" => "蓝色粘土",
            "159:12" => "棕色粘土",
            "159:13" => "绿色粘土",
            "159:14" => "红色粘土",
            "159:15" => "黑色粘土",
            "160:0" => "白色玻璃板",
            "160:1" => "橙色玻璃板",
            "160:2" => "品红色玻璃板",
            "160:3" => "淡蓝色玻璃板",
            "160:4" => "黄色玻璃板",
            "160:5" => "黄绿色玻璃板",
            "160:6" => "粉红色玻璃板",
            "160:7" => "灰色玻璃板",
            "160:8" => "淡灰色玻璃板",
            "160:9" => "青色玻璃板",
            "160:10" => "紫色玻璃板",
            "160:11" => "蓝色玻璃板",
            "160:12" => "棕色玻璃板",
            "160:13" => "绿色玻璃板",
            "160:14" => "红色玻璃板",
            "160:15" => "黑色玻璃板",
            "161:0" => "金合欢叶",
            "161:1" => "深色橡树叶",
            "162:0" => "金合欢木",
            "162:1" => "深色橡木",
            "163:0" => "金合欢木阶梯",
            "164:0" => "深色橡木阶梯",
            "165:0" => "粘液块",
            "330:0" => "铁门",
            "168:0" => "海晶石",
            "168:1" => "暗海晶石",
            "168:2" => "海晶石砖",
            "169:0" => "海晶灯",
            "170:0" => "干草捆",
            "171:0" => "白色地毯",
            "171:1" => "橙色地毯",
            "171:2" => "品红色地毯",
            "171:3" => "淡蓝色地毯",
            "171:4" => "黄色地毯",
            "171:5" => "黄绿色地毯",
            "171:6" => "粉红色地毯",
            "171:7" => "灰色地毯",
            "171:8" => "淡灰色地毯",
            "171:9" => "青色地毯",
            "171:10" => "紫色地毯",
            "171:11" => "蓝色地毯",
            "171:12" => "棕色地毯",
            "171:13" => "绿色地毯",
            "171:14" => "红色地毯",
            "171:15" => "黑色地毯",
            "172:0" => "硬化粘土",
            "173:0" => "煤炭块",
            "174:0" => "浮冰",
            "175:0" => "向日葵",
            "175:1" => "丁香",
            "175:2" => "高草丛",
            "175:3" => "大型蕨",
            "175:4" => "玫瑰丛",
            "175:5" => "牡丹",
            "176:0" => "旗帜",
            "177:0" => "悬挂的旗帜",
            "179:0" => "红沙石",
            "179:1" => "錾制红沙石",
            "179:2" => "平滑红沙石",
            "180:0" => "红沙石阶梯",
            "182:0" => "红沙石台阶",
            "182:1" => "紫珀台阶",
            "183:0" => "云杉围墙大门",
            "184:0" => "桦木围墙大门",
            "185:0" => "丛林木围墙大门",
            "186:0" => "深色橡木围墙大门",
            "187:0" => "金合欢木围墙大门",
            "188:0" => "重复命令块",
            "189:0" => "链命令块",
            "427:0" => "云杉木门",
            "194:0" => "桦木门",
            "429:0" => "丛林木门",
            "430:0" => "金合欢木门",
            "431:0" => "深色橡木门",
            "198:0" => "绿茵小道",
            "389:0" => "展示框",
            "200:0" => "合唱花",
            "201:0" => "紫珀方块",
            "201:2" => "紫珀柱子",
            "203:0" => "紫珀阶梯",
            "205:0" => "潜匿之贝箱子",
            "206:0" => "末地石砖",
            "208:0" => "末地棒",
            "209:0" => "末地门2",
            "213:0" => "岩浆方块",
            "214:0" => "地狱疣方块",
            "215:0" => "红石地狱砖",
            "216:0" => "骨头方块",
            "218:0" => "白色潜匿之贝箱子",
            "218:1" => "橙色潜匿之贝箱子",
            "218:2" => "品红色潜匿之贝箱子",
            "218:3" => "淡蓝色潜匿之贝箱子",
            "218:4" => "黄色潜匿之贝箱子",
            "218:5" => "黄绿色潜匿之贝箱子",
            "218:6" => "粉色潜匿之贝箱子",
            "218:7" => "浅灰色潜匿之贝箱子",
            "218:8" => "灰色潜匿之贝箱子",
            "218:9" => "青色潜匿之贝箱子",
            "218:10" => "紫色潜匿之贝箱子",
            "218:11" => "蓝色潜匿之贝箱子",
            "218:12" => "棕色潜匿之贝箱子",
            "218:13" => "绿色潜匿之贝箱子",
            "218:14" => "红色潜匿之贝箱子",
            "218:15" => "黑色潜匿之贝箱子",
            "219:0" => "紫色带釉陶瓦",
            "220:0" => "白色带釉陶瓦",
            "221:0" => "橙色色带釉陶瓦",
            "222:0" => "品红色带釉陶瓦",
            "223:0" => "带淡蓝釉陶瓦",
            "224:0" => "黄色带釉陶瓦",
            "225:0" => "黄绿色带釉陶瓦",
            "226:0" => "粉红色带釉陶瓦",
            "227:0" => "灰色带釉陶瓦",
            "228:0" => "淡灰色带釉陶瓦",
            "229:0" => "青色带釉陶瓦",
            "231:0" => "蓝色带釉陶瓦",
            "232:0" => "棕色带釉陶瓦",
            "233:0" => "绿色带釉陶瓦",
            "234:0" => "红色带釉陶瓦",
            "235:0" => "黑色带釉陶瓦",
            "236:0" => "白色混凝土",
            "236:1" => "橙色混凝土",
            "236:2" => "品红色混凝土",
            "236:3" => "淡蓝色混凝土",
            "236:4" => "黄色混凝土",
            "236:5" => "黄绿色混凝土",
            "236:6" => "粉红色混凝土",
            "236:7" => "灰色混凝土",
            "236:8" => "淡灰色混凝土",
            "236:9" => "青色混凝土",
            "236:10" => "紫色混凝土",
            "236:11" => "蓝色混凝土",
            "236:12" => "棕色混凝土",
            "236:13" => "绿色混凝土",
            "236:14" => "红色混凝土",
            "236:15" => "黑色混凝土",
            "237:0" => "白色混凝土粉末",
            "237:1" => "橙色混凝土粉末",
            "237:2" => "品红色混凝土粉末",
            "237:3" => "淡蓝色混凝土粉末",
            "237:4" => "黄色混凝土粉末",
            "237:5" => "黄绿色混凝土粉末",
            "237:6" => "粉红色混凝土粉末",
            "237:7" => "灰色混凝土粉末",
            "237:8" => "淡灰色混凝土粉末",
            "237:9" => "青色混凝土粉末",
            "237:10" => "紫色混凝土粉末",
            "237:11" => "蓝色混凝土粉末",
            "237:12" => "棕色混凝土粉末",
            "237:13" => "绿色混凝土粉末",
            "237:14" => "红色混凝土粉末",
            "237:15" => "黑色混凝土粉末",
            "240:0" => "共鸣植物",
            "241:0" => "白色玻璃",
            "241:1" => "橙色玻璃",
            "241:2" => "品红色玻璃",
            "241:3" => "淡蓝色玻璃",
            "241:4" => "黄色玻璃",
            "241:5" => "黄绿色玻璃",
            "241:6" => "粉红色玻璃",
            "241:7" => "灰色玻璃",
            "241:8" => "淡灰色玻璃",
            "241:9" => "青色玻璃",
            "241:10" => "紫色玻璃",
            "241:11" => "蓝色玻璃",
            "241:12" => "棕色玻璃",
            "241:13" => "绿色玻璃",
            "241:14" => "红色玻璃",
            "241:15" => "黑色玻璃",
            "243:0" => "灰化土",
            "245:0" => "切石机",
            "246:0" => "发光的黑曜石",
            "247:0" => "下界反应核(蓝)",
            "247:1" => "下界反应核(红)",
            "247:2" => "下界反应核(黑)",
            "251:0" => "观察者",
            "256:0" => "铁锹",
            "257:0" => "铁镐",
            "258:0" => "铁斧",
            "259:0" => "打火石",
            "260:0" => "苹果",
            "261:0" => "弓",
            "262:0" => "箭",
            "263:0" => "煤炭",
            "263:1" => "木炭",
            "264:0" => "钻石",
            "265:0" => "铁锭",
            "266:0" => "金锭",
            "267:0" => "铁剑",
            "268:0" => "木剑",
            "269:0" => "木锹",
            "270:0" => "木镐",
            "271:0" => "木斧",
            "272:0" => "石剑",
            "273:0" => "石锹",
            "274:0" => "石镐",
            "275:0" => "石斧",
            "276:0" => "钻石剑",
            "277:0" => "钻石锹",
            "278:0" => "钻石镐",
            "279:0" => "钻石斧",
            "280:0" => "木棍",
            "281:0" => "碗",
            "282:0" => "蘑菇煲",
            "283:0" => "金剑",
            "284:0" => "金锹",
            "285:0" => "金镐",
            "286:0" => "金斧",
            "287:0" => "蛛丝",
            "288:0" => "羽毛",
            "289:0" => "火药",
            "290:0" => "木锄",
            "291:0" => "石锄",
            "292:0" => "铁锄",
            "293:0" => "钻石锄",
            "294:0" => "金锄",
            "295:0" => "种子",
            "296:0" => "小麦",
            "297:0" => "面包",
            "298:0" => "皮革头盔",
            "299:0" => "皮革胸甲",
            "300:0" => "皮革护腿",
            "301:0" => "皮革靴子",
            "302:0" => "锁链头盔",
            "303:0" => "锁链胸甲",
            "304:0" => "锁链护腿",
            "305:0" => "锁链靴子",
            "306:0" => "铁头盔",
            "307:0" => "铁胸甲",
            "308:0" => "铁护腿",
            "309:0" => "铁靴子",
            "310:0" => "钻石头盔",
            "311:0" => "钻石胸甲",
            "312:0" => "钻石护腿",
            "313:0" => "钻石靴子",
            "314:0" => "金头盔",
            "315:0" => "金胸甲",
            "316:0" => "金护腿",
            "317:0" => "金靴子",
            "318:0" => "燧石",
            "319:0" => "生猪排",
            "320:0" => "熟猪排",
            "321:0" => "画",
            "322:0" => "金苹果",
            "323:0" => "告示牌",
            "324:0" => "橡木门",
            "325:0" => "桶",
            "325:1" => "牛奶桶",
            "325:8" => "水桶",
            "325:10" => "岩浆桶",
            "328:0" => "矿车",
            "329:0" => "鞍",
            "331:0" => "红石",
            "332:0" => "雪球",
            "333:0" => "橡木船",
            "333:1" => "云杉木船",
            "333:2" => "桦木船",
            "333:3" => "丛林木船",
            "333:4" => "金合欢木船",
            "333:5" => "深色橡木船",
            "334:0" => "皮革",
            "337:0" => "粘土球",
            "338:0" => "甘蔗",
            "339:0" => "纸",
            "340:0" => "书",
            "341:0" => "粘液球",
            "342:0" => "箱子矿车",
            "408:0" => "漏斗矿车",
            "344:0" => "鸡蛋",
            "345:0" => "指南针",
            "346:0" => "鱼竿",
            "347:0" => "时钟",
            "348:0" => "荧石粉",
            "349:0" => "鱼",
            "350:0" => "熟鱼",
            "351:0" => "墨囊",
            "351:1" => "品红色染料",
            "351:2" => "绿色染料",
            "351:3" => "可可豆",
            "351:4" => "蓝色染料",
            "351:5" => "紫色染料",
            "351:6" => "青色染料",
            "351:7" => "淡灰色染料",
            "351:8" => "灰色染料",
            "351:9" => "粉红色染料",
            "351:10" => "黄绿色染料",
            "351:11" => "黄色染料",
            "351:12" => "淡蓝色染料",
            "351:13" => "红色染料",
            "351:14" => "橙色染料",
            "351:15" => "骨粉",
            "352:0" => "骨头",
            "353:0" => "糖",
            "355:0" => "床",
            "357:0" => "曲奇",
            "358:0" => "地图(满)",
            "359:0" => "剪刀",
            "362:0" => "南瓜种子",
            "363:0" => "生牛肉",
            "364:0" => "熟牛肉",
            "365:0" => "生鸡肉",
            "366:0" => "熟鸡肉",
            "367:0" => "腐肉",
            "368:0" => "末影珍珠",
            "369:0" => "烈焰棒",
            "370:0" => "恶魂泪",
            "371:0" => "金粒",
            "372:0" => "地狱疣",
            "373:0" => "水瓶",
            "373:1" => "平凡的药水",
            "373:2" => "长久平凡的药水",
            "373:3" => "浓稠的药水",
            "373:4" => "粗制的药水",
            "373:6" => "夜视药水",
            "373:8" => "隐身药水",
            "373:11" => "跳跃药水",
            "373:13" => "抗火药水",
            "373:16" => "迅捷药水",
            "373:18" => "缓慢药水",
            "373:20" => "水肺药水",
            "373:22" => "治疗药水",
            "373:24" => "伤害药水",
            "373:27" => "剧毒药水",
            "373:30" => "生命恢复药水",
            "373:33" => "力量药水",
            "373:35" => "虚弱药水",
            "373:36" => "衰变药水",
            "374:0" => "玻璃瓶",
            "375:0" => "蜘蛛眼",
            "376:0" => "发酵蜘蛛眼",
            "377:0" => "烈焰粉",
            "378:0" => "岩浆膏",
            "381:0" => "末影之眼",
            "382:0" => "金西瓜",
            "384:0" => "经验瓶",
            "385:0" => "火球",
            "388:0" => "绿宝石",
            "392:0" => "马铃薯",
            "393:0" => "烤马铃薯",
            "394:0" => "毒马铃薯",
            "395:0" => "空地图",
            "396:0" => "金胡萝卜",
            "397:0" => "骷髅头",
            "397:1" => "凋零骷髅头",
            "397:2" => "僵尸头",
            "397:3" => "史蒂夫头",
            "397:4" => "苦力怕头",
            "397:5" => "龙头",
            "398:0" => "胡萝卜杆",
            "399:0" => "下届之星",
            "400:0" => "南瓜派",
            "403:0" => "附魔书",
            "406:0" => "地狱石英",
            "407:0" => "tnt矿车",
            "409:0" => "海晶碎片",
            "410:0" => "海晶灯粉",
            "411:0" => "生兔子肉",
            "412:0" => "熟兔子肉",
            "413:0" => "兔子煲",
            "414:0" => "兔子脚",
            "415:0" => "兔子皮",
            "416:0" => "皮革马鞍",
            "417:0" => "铁马鞍",
            "418:0" => "金马鞍",
            "419:0" => "钻石马鞍",
            "420:0" => "栓绳",
            "421:0" => "命名牌",
            "422:0" => "命令方块矿车",
            "423:0" => "生羊肉",
            "424:0" => "熟羊肉",
            "426:0" => "末影水晶",
            "428:0" => "桦树木门",
            "432:0" => "共鸣果",
            "433:0" => "爆裂共鸣果",
            "437:0" => "龙息",
            "438:0" => "喷溅的水瓶",
            "438:1" => "喷溅的平凡的药水",
            "438:2" => "喷溅的长久平凡的药水",
            "438:3" => "喷溅的浓稠的药水",
            "438:4" => "喷溅的粗制的药水",
            "438:6" => "喷溅的夜视药水",
            "438:8" => "喷溅的隐身药水",
            "438:11" => "喷溅的跳跃药水",
            "438:13" => "喷溅的抗火药水",
            "438:16" => "喷溅的迅捷药水",
            "438:18" => "喷溅的缓慢药水",
            "438:20" => "喷溅的水肺药水",
            "438:22" => "喷溅的治疗药水",
            "438:24" => "喷溅的伤害药水",
            "438:27" => "喷溅的剧毒药水",
            "438:30" => "喷溅的生命恢复药水",
            "438:33" => "喷溅的力量药水",
            "438:35" => "喷溅的虚弱药水",
            "438:36" => "喷溅的衰变药水",
            "441:0" => "遗留的水瓶",
            "441:1" => "遗留的平凡的药水",
            "441:2" => "遗留的长久平凡的药水",
            "441:3" => "遗留的浓稠的药水",
            "441:4" => "遗留的粗制的药水",
            "441:6" => "遗留的夜视药水",
            "441:8" => "遗留的隐身药水",
            "441:11" => "遗留的跳跃药水",
            "441:13" => "遗留的抗火药水",
            "441:16" => "遗留的迅捷药水",
            "441:18" => "遗留的缓慢药水",
            "441:20" => "遗留的水肺药水",
            "441:22" => "遗留的治疗药水",
            "441:24" => "遗留的伤害药水",
            "441:27" => "遗留的剧毒药水",
            "441:30" => "遗留的生命恢复药水",
            "441:33" => "遗留的力量药水",
            "441:35" => "遗留的虚弱药水",
            "441:36" => "遗留的衰变药水",
            "444:0" => "翅鞘",
            "445:0" => "潜匿之壳",
            "457:0" => "甜菜根",
            "458:0" => "甜菜种子",
            "459:0" => "甜菜根汤",
            "460:0" => "生鲑鱼",
            "461:0" => "小丑鱼",
            "462:0" => "河豚",
            "463:0" => "熟鲑鱼",
            "466:0" => "附魔的金苹果"
        );
    }
}