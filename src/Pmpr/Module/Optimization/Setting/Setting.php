<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f0cc89158             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\HelperTrait; use Pmpr\Module\Optimization\Optimizer\HTML\Setting as HTMLSetting; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\Setting as MediaSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Setting as CDNAssetSetting; use Pmpr\Module\Optimization\Optimizer\Extension\Setting as ExtensionSetting; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting as CacheHTMLSetting; use Pmpr\Module\Optimization\Optimizer\Preprocess\Setting as PreprocessSetting; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare\Setting as CloudflareSetting; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Setting as SpecialPageSetting; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Setting extends BaseClass { use HelperTrait; const qiayoyomewkuswqw = "\x6d\157\142\151\x6c\x65\137\144\x69\155\145\156\x73\151\x6f\156"; const acqamcqkaoggwkkm = "\x64\145\x73\153\164\x6f\160\137\x64\x69\x6d\x65\x6e\x73\x69\x6f\x6e"; const umaucaksymaeccge = "\63\66\60\x78\70\60\x30"; const aeqycwwemyeysiko = "\x33\71\60\170\x38\64\x34"; const imiuucoaeuuguquy = "\x33\x39\63\x78\70\x37\63"; const aaosuccwseqeccqi = "\64\61\62\170\x38\x32\63"; const esuewmgequaouqia = "\64\x31\62\x78\x39\x31\65"; const swyqcuuksoawqeuo = "\x31\x39\x32\60\x78\61\x30\x38\x30"; const iyuyewuiiymiwaee = "\61\66\60\x30\x78\61\62\x30\x30"; const aqwkikuscwyukgwo = "\61\x33\66\66\170\67\x36\70"; const osmaaoowcmmksguk = "\x31\x32\70\x30\x78\x37\x32\60"; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::kekcgssiyagioocg, 6); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __("\x4f\x70\164\x69\x6d\151\172\x61\x74\x69\x6f\156\x20\x53\145\x74\x74\x69\156\x67", PR__MDL__OPTIMIZATION); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\145\x74\x74\x69\x6e\x67", PR__MDL__OPTIMIZATION)); } public function ykwqaukkycogooii() { $wamcomkuwysqgwgk = "\x25\x73\x20\x28\45\x73\x29"; $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\x6e\x65\x72\141\x6c", PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__("\107\x65\156\145\162\141\154\40\123\145\164\x74\x69\156\x67\40\103\157\156\146\151\x67\x75\x72\x61\164\151\x6f\156", PR__MDL__OPTIMIZATION))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x76\x69\163\151\164\157\x72\x5f\x64\145\x76\151\x63\145")->saemoowcasogykak(IconInterface::kgeuosquiegysmmq)->gswweykyogmsyawy(__("\126\151\163\x69\164\157\x72\x20\x44\145\166\x69\143\145", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::qiayoyomewkuswqw)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::aaosuccwseqeccqi)->gswweykyogmsyawy(__("\x4d\157\x62\151\154\145\40\123\x63\x72\x65\x65\156\40\104\151\155\145\x6e\163\x69\x6f\156", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::umaucaksymaeccge, sprintf($wamcomkuwysqgwgk, "\115\x6f\164\x6f\x72\157\x6c\141\40\x4d\x6f\164\157\x20\x45\67", self::umaucaksymaeccge))->kesomeowemmyygey(self::aeqycwwemyeysiko, sprintf($wamcomkuwysqgwgk, "\107\157\157\x67\x6c\x65\x20\x50\x69\170\145\154\x20\66\x61", self::aeqycwwemyeysiko))->kesomeowemmyygey(self::imiuucoaeuuguquy, sprintf($wamcomkuwysqgwgk, "\x48\x75\141\167\x65\151\40\x50\x33\60\x20\x4c\151\164\x65", self::imiuucoaeuuguquy))->kesomeowemmyygey(self::aaosuccwseqeccqi, sprintf($wamcomkuwysqgwgk, "\115\157\164\157\40\x47\x20\x50\157\x77\x65\x72", self::esuewmgequaouqia))->kesomeowemmyygey(self::esuewmgequaouqia, sprintf($wamcomkuwysqgwgk, "\151\x50\x68\x6f\156\145\x20\x31\x35", self::esuewmgequaouqia)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::acqamcqkaoggwkkm)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::iyuyewuiiymiwaee)->gswweykyogmsyawy(__("\104\x65\163\x6b\164\x6f\160\40\123\143\x72\145\x65\x6e\x20\104\151\x6d\x65\x6e\x73\x69\157\x6e", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::swyqcuuksoawqeuo, sprintf($wamcomkuwysqgwgk, "\106\165\x6c\x6c\40\110\x44", self::swyqcuuksoawqeuo))->kesomeowemmyygey(self::iyuyewuiiymiwaee, sprintf($wamcomkuwysqgwgk, "\110\x44\x2b", self::iyuyewuiiymiwaee))->kesomeowemmyygey(self::aqwkikuscwyukgwo, sprintf($wamcomkuwysqgwgk, "\x48\104\40\x52\x65\x61\144\x79", self::aqwkikuscwyukgwo))->kesomeowemmyygey(self::osmaaoowcmmksguk, sprintf($wamcomkuwysqgwgk, "\110\x44", self::osmaaoowcmmksguk))))); parent::ykwqaukkycogooii(); $this->oiawceqcyuywusmi(); } public function oiawceqcyuywusmi() { HTMLSetting::symcgieuakksimmu(); MediaSetting::symcgieuakksimmu(); AssetSetting::symcgieuakksimmu(); CDNAssetSetting::symcgieuakksimmu(); ExtensionSetting::symcgieuakksimmu(); SpeedTestSetting::symcgieuakksimmu(); CacheHTMLSetting::symcgieuakksimmu(); CloudflareSetting::symcgieuakksimmu(); PreprocessSetting::symcgieuakksimmu(); SpecialPageSetting::symcgieuakksimmu(); VirtualBrowserSetting::symcgieuakksimmu(); } public function gugawkcggyameeky($amakmumgguksgmum) { return $this->giiuwsmyumqwwiyq($amakmumgguksgmum, [], [Constants::ascagqcquwgmygkm => Constants::ccyeycyyykwuymsy]); } public function qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie) { switch ($omkysikckkcieckq) { case Constants::qeuquamuuwueeiyi: $this->kmyyisssekummkcg(); break; } parent::qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie); } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { $this->kmyyisssekummkcg(); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\x75\x72\x67\145\x5f\x68\x74\x6d\x6c\x5f\x63\141\143\150\x65"); parent::swqaqgaeiewsykyc($qiouiwasaauyaaue); } public function eiqmgkyumaiemwiq() : array { $yiuqooeaqugiowke = explode("\170", $this->giiuwsmyumqwwiyq(self::qiayoyomewkuswqw, self::aaosuccwseqeccqi)); $kgyccakaqaeyuoau = explode("\x78", $this->giiuwsmyumqwwiyq(self::acqamcqkaoggwkkm, self::iyuyewuiiymiwaee)); return [Constants::skogicecygyyskkq => [Constants::qomookamaskuoswk => $yiuqooeaqugiowke[0] ?? "\64\61\x32", Constants::sogmkkcwuamuqegw => $yiuqooeaqugiowke[1] ?? "\70\62\x33"], Constants::mcaucuyeeiwsmmuy => [Constants::qomookamaskuoswk => $kgyccakaqaeyuoau[0] ?? "\x31\66\x30\x30", Constants::sogmkkcwuamuqegw => $kgyccakaqaeyuoau[1] ?? "\x31\x32\60\60"]]; } private function kmyyisssekummkcg() { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if ($swyigkueoywiacam->exists($qogsmwakwacwqogk)) { $swyigkueoywiacam->remove($qogsmwakwacwqogk); } } } }
