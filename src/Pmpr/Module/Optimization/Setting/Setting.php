<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\HelperTrait; use Pmpr\Module\Optimization\Optimizer\HTML\Setting as HTMLSetting; use Pmpr\Module\Optimization\Optimizer\Asset\Setting as AssetSetting; use Pmpr\Module\Optimization\Optimizer\Media\Setting as MediaSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Setting as CDNAssetSetting; use Pmpr\Module\Optimization\Optimizer\Extension\Setting as ExtensionSetting; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting as CacheHTMLSetting; use Pmpr\Module\Optimization\Optimizer\Preprocess\Setting as PreprocessSetting; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare\Setting as CloudflareSetting; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Setting as SpecialPageSetting; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Setting extends BaseClass { use HelperTrait; const qiayoyomewkuswqw = 'mobile_dimension'; const acqamcqkaoggwkkm = 'desktop_dimension'; const umaucaksymaeccge = '360x800'; const aeqycwwemyeysiko = '390x844'; const imiuucoaeuuguquy = '393x873'; const aaosuccwseqeccqi = '412x823'; const esuewmgequaouqia = '412x915'; const swyqcuuksoawqeuo = '1920x1080'; const iyuyewuiiymiwaee = '1600x1200'; const aqwkikuscwyukgwo = '1366x768'; const osmaaoowcmmksguk = '1280x720'; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::kekcgssiyagioocg, 6); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __('Optimization Setting', PR__MDL__OPTIMIZATION); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __('Setting', PR__MDL__OPTIMIZATION)); } public function ykwqaukkycogooii() { $wamcomkuwysqgwgk = '%s (%s)'; $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('General Setting Configuration', PR__MDL__OPTIMIZATION))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('visitor_device')->saemoowcasogykak(IconInterface::kgeuosquiegysmmq)->gswweykyogmsyawy(__('Visitor Device', PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::qiayoyomewkuswqw)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::aaosuccwseqeccqi)->gswweykyogmsyawy(__('Mobile Screen Dimension', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::umaucaksymaeccge, sprintf($wamcomkuwysqgwgk, 'Motorola Moto E7', self::umaucaksymaeccge))->kesomeowemmyygey(self::aeqycwwemyeysiko, sprintf($wamcomkuwysqgwgk, 'Google Pixel 6a', self::aeqycwwemyeysiko))->kesomeowemmyygey(self::imiuucoaeuuguquy, sprintf($wamcomkuwysqgwgk, 'Huawei P30 Lite', self::imiuucoaeuuguquy))->kesomeowemmyygey(self::aaosuccwseqeccqi, sprintf($wamcomkuwysqgwgk, 'Moto G Power', self::esuewmgequaouqia))->kesomeowemmyygey(self::esuewmgequaouqia, sprintf($wamcomkuwysqgwgk, 'iPhone 15', self::esuewmgequaouqia)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::acqamcqkaoggwkkm)->eumecwmqmukqgyea()->eyygsasuqmommkua(self::iyuyewuiiymiwaee)->gswweykyogmsyawy(__('Desktop Screen Dimension', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::swyqcuuksoawqeuo, sprintf($wamcomkuwysqgwgk, 'Full HD', self::swyqcuuksoawqeuo))->kesomeowemmyygey(self::iyuyewuiiymiwaee, sprintf($wamcomkuwysqgwgk, 'HD+', self::iyuyewuiiymiwaee))->kesomeowemmyygey(self::aqwkikuscwyukgwo, sprintf($wamcomkuwysqgwgk, 'HD Ready', self::aqwkikuscwyukgwo))->kesomeowemmyygey(self::osmaaoowcmmksguk, sprintf($wamcomkuwysqgwgk, 'HD', self::osmaaoowcmmksguk))))); parent::ykwqaukkycogooii(); $this->oiawceqcyuywusmi(); } public function oiawceqcyuywusmi() { HTMLSetting::symcgieuakksimmu(); MediaSetting::symcgieuakksimmu(); AssetSetting::symcgieuakksimmu(); CDNAssetSetting::symcgieuakksimmu(); ExtensionSetting::symcgieuakksimmu(); SpeedTestSetting::symcgieuakksimmu(); CacheHTMLSetting::symcgieuakksimmu(); CloudflareSetting::symcgieuakksimmu(); PreprocessSetting::symcgieuakksimmu(); SpecialPageSetting::symcgieuakksimmu(); VirtualBrowserSetting::symcgieuakksimmu(); } public function gugawkcggyameeky($amakmumgguksgmum) { return $this->giiuwsmyumqwwiyq($amakmumgguksgmum, [], [Constants::ascagqcquwgmygkm => Constants::ccyeycyyykwuymsy]); } public function qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie) { switch ($omkysikckkcieckq) { case Constants::qeuquamuuwueeiyi: $this->kmyyisssekummkcg(); break; } parent::qkikgkocoikymiac($omkysikckkcieckq, $eqgoocgaqwqcimie); } public function swqaqgaeiewsykyc($qiouiwasaauyaaue = []) { $this->kmyyisssekummkcg(); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_html_cache'); parent::swqaqgaeiewsykyc($qiouiwasaauyaaue); } public function eiqmgkyumaiemwiq() : array { $yiuqooeaqugiowke = explode('x', $this->giiuwsmyumqwwiyq(self::qiayoyomewkuswqw, self::aaosuccwseqeccqi)); $kgyccakaqaeyuoau = explode('x', $this->giiuwsmyumqwwiyq(self::acqamcqkaoggwkkm, self::iyuyewuiiymiwaee)); return [Constants::skogicecygyyskkq => [Constants::qomookamaskuoswk => $yiuqooeaqugiowke[0] ?? '412', Constants::sogmkkcwuamuqegw => $yiuqooeaqugiowke[1] ?? '823'], Constants::mcaucuyeeiwsmmuy => [Constants::qomookamaskuoswk => $kgyccakaqaeyuoau[0] ?? '1600', Constants::sogmkkcwuamuqegw => $kgyccakaqaeyuoau[1] ?? '1200']]; } private function kmyyisssekummkcg() { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm(); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if ($swyigkueoywiacam->exists($qogsmwakwacwqogk)) { $swyigkueoywiacam->remove($qogsmwakwacwqogk); } } } }
