<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f9e31abf5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\HelperTrait; use Pmpr\Module\Optimization\Optimizer\HTML\Setting as HTMLSetting; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\Setting as MediaSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Setting as CDNAssetSetting; use Pmpr\Module\Optimization\Optimizer\Extension\Setting as ExtensionSetting; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting as CacheHTMLSetting; use Pmpr\Module\Optimization\Optimizer\Preprocess\Setting as PreprocessSetting; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare\Setting as CloudflareSetting; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Setting as SpecialPageSetting; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Setting extends BaseClass { use HelperTrait; const qiayoyomewkuswqw = "\155\157\142\x69\154\145\x5f\x64\x69\155\145\x6e\x73\151\x6f\156"; const acqamcqkaoggwkkm = "\x64\145\163\x6b\x74\157\160\137\144\151\x6d\x65\x6e\x73\151\x6f\x6e"; const umaucaksymaeccge = "\63\x36\x30\170\70\x30\60"; const aeqycwwemyeysiko = "\63\x39\x30\x78\70\x34\x34"; const imiuucoaeuuguquy = "\63\71\x33\170\x38\67\63"; const aaosuccwseqeccqi = "\x34\x31\62\x78\70\62\63"; const esuewmgequaouqia = "\64\x31\62\x78\x39\x31\65"; const swyqcuuksoawqeuo = "\61\x39\62\60\170\x31\x30\x38\60"; const iyuyewuiiymiwaee = "\61\66\x30\x30\x78\x31\x32\x30\x30"; const aqwkikuscwyukgwo = "\x31\x33\66\x36\170\67\x36\70"; const osmaaoowcmmksguk = "\x31\62\x38\x30\x78\67\x32\60"; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::kekcgssiyagioocg, 6); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\x4f\x70\x74\x69\155\151\172\141\164\x69\x6f\156\x20\x53\x65\164\x74\x69\156\x67", PR__MDL__OPTIMIZATION); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\145\x74\164\151\156\x67", PR__MDL__OPTIMIZATION)); } public function ykwqaukkycogooii() { $wamcomkuwysqgwgk = "\45\163\x20\50\x25\x73\51"; $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\x47\145\x6e\145\162\x61\154", PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__("\x47\x65\156\145\162\x61\x6c\x20\x53\145\x74\x74\x69\156\147\40\x43\157\156\146\x69\x67\165\x72\x61\164\151\157\156", PR__MDL__OPTIMIZATION))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x76\151\163\x69\x74\157\x72\137\x64\145\166\151\x63\145")->saemoowcasogykak(IconInterface::kgeuosquiegysmmq)->gswweykyogmsyawy(__("\x56\x69\x73\151\164\157\162\x20\104\145\x76\x69\143\145", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::qiayoyomewkuswqw)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::aaosuccwseqeccqi)->gswweykyogmsyawy(__("\x4d\157\142\x69\x6c\x65\x20\x53\x63\162\145\x65\x6e\x20\x44\x69\155\145\156\x73\x69\x6f\x6e", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::umaucaksymaeccge, sprintf($wamcomkuwysqgwgk, "\x4d\x6f\164\157\162\157\x6c\x61\x20\115\x6f\x74\157\x20\105\x37", self::umaucaksymaeccge))->kesomeowemmyygey(self::aeqycwwemyeysiko, sprintf($wamcomkuwysqgwgk, "\x47\157\x6f\x67\x6c\145\x20\x50\x69\x78\145\154\40\66\x61", self::aeqycwwemyeysiko))->kesomeowemmyygey(self::imiuucoaeuuguquy, sprintf($wamcomkuwysqgwgk, "\110\165\141\x77\145\151\40\120\x33\x30\x20\114\151\164\145", self::imiuucoaeuuguquy))->kesomeowemmyygey(self::aaosuccwseqeccqi, sprintf($wamcomkuwysqgwgk, "\x4d\157\x74\x6f\40\x47\x20\120\157\x77\145\x72", self::esuewmgequaouqia))->kesomeowemmyygey(self::esuewmgequaouqia, sprintf($wamcomkuwysqgwgk, "\x69\x50\x68\157\156\145\40\61\x35", self::esuewmgequaouqia)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::acqamcqkaoggwkkm)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::iyuyewuiiymiwaee)->gswweykyogmsyawy(__("\x44\x65\163\153\164\x6f\160\40\123\143\162\145\145\156\x20\x44\x69\x6d\x65\x6e\163\x69\x6f\x6e", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::swyqcuuksoawqeuo, sprintf($wamcomkuwysqgwgk, "\106\x75\x6c\x6c\x20\110\x44", self::swyqcuuksoawqeuo))->kesomeowemmyygey(self::iyuyewuiiymiwaee, sprintf($wamcomkuwysqgwgk, "\110\x44\53", self::iyuyewuiiymiwaee))->kesomeowemmyygey(self::aqwkikuscwyukgwo, sprintf($wamcomkuwysqgwgk, "\x48\104\40\122\145\141\x64\171", self::aqwkikuscwyukgwo))->kesomeowemmyygey(self::osmaaoowcmmksguk, sprintf($wamcomkuwysqgwgk, "\x48\104", self::osmaaoowcmmksguk))))); parent::ykwqaukkycogooii(); $this->oiawceqcyuywusmi(); } public function oiawceqcyuywusmi() { HTMLSetting::symcgieuakksimmu(); MediaSetting::symcgieuakksimmu(); AssetSetting::symcgieuakksimmu(); CDNAssetSetting::symcgieuakksimmu(); ExtensionSetting::symcgieuakksimmu(); SpeedTestSetting::symcgieuakksimmu(); CacheHTMLSetting::symcgieuakksimmu(); CloudflareSetting::symcgieuakksimmu(); PreprocessSetting::symcgieuakksimmu(); SpecialPageSetting::symcgieuakksimmu(); VirtualBrowserSetting::symcgieuakksimmu(); } public function gugawkcggyameeky($amakmumgguksgmum) { return $this->giiuwsmyumqwwiyq($amakmumgguksgmum, [], [Constants::ascagqcquwgmygkm => Constants::ccyeycyyykwuymsy]); } public function qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie) { switch ($omkysikckkcieckq) { case Constants::qeuquamuuwueeiyi: $this->kmyyisssekummkcg(); break; } parent::qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie); } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { $this->kmyyisssekummkcg(); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\165\162\x67\145\x5f\x68\164\x6d\154\137\x63\x61\x63\x68\x65"); parent::swqaqgaeiewsykyc($qiouiwasaauyaaue); } public function eiqmgkyumaiemwiq() : array { $yiuqooeaqugiowke = explode("\170", $this->giiuwsmyumqwwiyq(self::qiayoyomewkuswqw, self::aaosuccwseqeccqi)); $kgyccakaqaeyuoau = explode("\x78", $this->giiuwsmyumqwwiyq(self::acqamcqkaoggwkkm, self::iyuyewuiiymiwaee)); return [Constants::skogicecygyyskkq => [Constants::qomookamaskuoswk => $yiuqooeaqugiowke[0] ?? "\64\61\x32", Constants::sogmkkcwuamuqegw => $yiuqooeaqugiowke[1] ?? "\x38\x32\x33"], Constants::mcaucuyeeiwsmmuy => [Constants::qomookamaskuoswk => $kgyccakaqaeyuoau[0] ?? "\x31\66\60\x30", Constants::sogmkkcwuamuqegw => $kgyccakaqaeyuoau[1] ?? "\61\62\x30\60"]]; } private function kmyyisssekummkcg() { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if ($swyigkueoywiacam->exists($qogsmwakwacwqogk)) { $swyigkueoywiacam->remove($qogsmwakwacwqogk); } } } }
