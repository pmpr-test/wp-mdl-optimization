<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76d1d04df             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\Common as BaseClass; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends BaseClass { const gwcwicqkomiaaqwm = "\123\x52\67"; const csiimaowugwesqke = "\123\122\x36"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\144", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\156", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\x6d", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { goto qquugwwesqswouyc; } if (!(self::csiimaowugwesqke === $goqqimcssiyagkwy)) { goto kmwwamokwgagomye; } $this->slider = $wwqymgsmqsouaoos->slider; kmwwamokwgagomye: goto ewugkyumwuomukie; qquugwwesqswouyc: $this->slider = $wwqymgsmqsouaoos->slider_v7; ewugkyumwuomukie: foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; iqicwseckoykqowm: } wwigiswokyqkamsu: } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if (!($aimmgaceygcsoowq = $this->slider)) { goto icasgckmuawkaksg; } $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if (!$ocouqoqqcgauwkuq instanceof RevSliderSlide) { goto essokuoguqegyeua; } if (!("\165\x6e\160\x75\142\x6c\x69\163\x68\145\144" !== $ocouqoqqcgauwkuq->get_param(["\160\165\x62\x6c\x69\x73\150", "\163\x74\x61\164\145"]))) { goto cuamsmyiamaicwou; } $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; goto yisooseceggsgyqw; cuamsmyiamaicwou: essokuoguqegyeua: awwwoikmmaisyisy: } yisooseceggsgyqw: if (!$qiqeekyyamqqwgyy) { goto uyisqeuweamsqwgg; } $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if ($this->ywogaocmueoimkuq($weyumiemecumqwiy)) { goto ssoooeigmwugyycm; } [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; ssoooeigmwugyycm: agoikageaeouqaqi: } aqoyesawuayoeuag: $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); uyisqeuweamsqwgg: icasgckmuawkaksg: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\x72\55\x73\x63", [], $wyumyomqwssswwyk); if (!$maiscoecwcomqack) { goto aeywmsqkisycgqce; } $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; aeywmsqkisycgqce: $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto makqqsaegsesgquq; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\160\x6f\163\151\x74\x69\157\x6e"] = "\x72\x65\x6c\x61\164\x69\166\x65"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\160\162\x2d\x73") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\160\x72\55\x73\143") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); makqqsaegsesgquq: cwkwkgkqasguwscg: } mawsaauyquacosus: $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\146\x6f\x6e\x74" => "\156\x6f\x72\x6d\x61\x6c\x20\x6e\157\x72\x6d\141\154\x20\156\157\162\155\x61\x6c\x20\61\x34\x70\x78\x2f\61\x20\x46\157\156\x74\101\x77\x65\x73\157\155\x65"], "\x69\133\143\x6c\x61\163\x73\136\x3d\42\x66\141\x2d\42\135"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\162\55\163", ["\x64\141\x74\x61\x2d\x69\144" => $this->slider->get_id(), "\144\141\164\x61\x2d\x74\x79\x70\145" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (!isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { goto ikwamukqumiokwkk; } $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\x70\162\x2d{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\43{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto koaeayomowaiywam; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); koaeayomowaiywam: emsuycioaeoeeeqo: } symwoekuwqcmowwo: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); ikwamukqumiokwkk: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\144": case 1: $uoomaookgsyciacm["\155\x69\156\x2d\x77\151\x64\x74\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto uueyawewomkuiiwc; case "\x6e": case "\x74": case 2: case 3: $uoomaookgsyciacm["\x6d\x61\170\x2d\167\151\x64\x74\x68"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\x6d\x69\x6e\x2d\167\x69\x64\x74\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto uueyawewomkuiiwc; case "\155": case 4: $uoomaookgsyciacm["\x6d\141\x78\55\167\x69\x64\164\150"] = $ycuyiqagsmgikago; goto uueyawewomkuiiwc; } wqcquwuiqkqaoamo: uueyawewomkuiiwc: return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\40\x61\156\x64\x20"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\x28{$oaukocmsckciqaok}\72\40{$eqgoocgaqwqcimie}\x70\x78\51{$geqcesmqwkeayoiu}"; yyousguikogqkecs: } csueasskicaaoaii: $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\100\x6d\x65\x64\151\141\40{$wocwawaaemuoqmig}\x20\x7b{$ekuqiqmikiicgoss}\x7d"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\x70\x72\x2d\x73\x77\43\x70\162\x5f{$this->sliderID}\x20{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); owwwikwqsyakweeq: } syggoyqwycmmcuck: return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!in_array($eqgoocgaqwqcimie, ["\156\x6f\156\145", "\43\x61"])) { goto awmyoukmqymausgu; } return ''; awmyoukmqymausgu: switch ($oaukocmsckciqaok) { case "\142\x61\143\x6b\x67\162\157\x75\156\x64\x2d\162\145\x70\145\x61\x74": if ($eqgoocgaqwqcimie) { goto oukacgcyoiggqosq; } $eqgoocgaqwqcimie = "\x6e\x6f\x2d\162\x65\x70\145\141\164"; oukacgcyoiggqosq: goto eicuoesagiuykmos; case "\164\157\x70": case "\154\145\x66\x74": case "\x72\151\147\150\164": case "\167\151\144\x74\x68": case "\150\145\x69\x67\150\164": case "\146\157\x6e\164\55\x73\x69\x7a\145": case "\x6d\x69\x6e\55\x77\151\x64\164\150": case "\x6d\151\x6e\x2d\150\x65\151\x67\150\164": case "\x6d\141\x78\x2d\x68\x65\151\147\x68\164": case "\x74\x72\x61\x6e\x73\154\x61\164\x65\x58": case "\x74\162\141\x6e\x73\154\141\x74\x65\131": case "\154\x69\x6e\x65\x2d\150\145\151\x67\150\164": case "\154\x65\164\164\x65\x72\x2d\x73\x70\x61\x63\151\x6e\147": if (!is_numeric($eqgoocgaqwqcimie)) { goto usiiuuommggemcke; } $eqgoocgaqwqcimie .= "\x70\x78"; usiiuuommggemcke: goto eicuoesagiuykmos; case "\x62\141\x63\153\147\x72\x6f\165\x6e\144": case "\x62\x61\143\x6b\x67\x72\157\165\156\x64\55\x69\x6d\141\x67\x65": if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto aagewueuesckuqke; } $eqgoocgaqwqcimie = "\165\x72\x6c\50\x27{$eqgoocgaqwqcimie}\47\51"; aagewueuesckuqke: goto eicuoesagiuykmos; } eqkaikmaegscweqq: eicuoesagiuykmos: return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if ($eqgoocgaqwqcimie) { goto ckscysysmayieagk; } goto mkauomqacwwmyigy; ckscysysmayieagk: cmsgssaekakgcqmg: } mkauomqacwwmyigy: $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto aimaqcomigwccomu; } $eswoackiciccgasc = false; goto osawsyawkikquqya; aimaqcomigwccomu: $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; osawsyawkikquqya: if (null !== $eqgoocgaqwqcimie) { goto yoeaiskyyqgqiwga; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto ioaeiakqkiuqymoq; yoeaiskyyqgqiwga: $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if (!($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc)) { goto ckagywkumgkaswyy; } if (!($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig)) { goto cgoqqicyaiwasqme; } $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\143\x61\154\143\x28\x28\61\60\60\166\167\x20\x2f\x20{$uooewkwiswcwggao}\x29\40\52\x20{$uwoyyuqywiwueaso}\51"; cgoqqicyaiwasqme: ckagywkumgkaswyy: if (!(null === $eqgoocgaqwqcimie)) { goto oswgoyqaacoyqegu; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; oswgoyqaacoyqegu: ioaeiakqkiuqymoq: return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\x6d\x69\x64\x64\x6c\x65", "\143\145\156\164\x65\x72"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\155\x69\x64\144\154\145", "\143\x65\156\164\x65\162"], true); if (!($iegmsyuiekaayqqy && $ymsweociooeskgwg)) { goto uwsgccckqqookusc; } $rqeoqqgeggasimwi = $egkakcquemweqoum["\164\x72\141\156\x73\x66\x6f\162\x6d"] ?? ''; if ($iegmsyuiekaayqqy === "\x61\x75\x74\x6f" && $ymsweociooeskgwg === "\141\165\164\x6f") { goto siwekyoigwegiosa; } $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\x30\x70\170"; $lwqumgsaiiooowqw = "\x30\x70\170"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto qqowguycmsmuauyu; } if (!$egwaeiwuwuakeugo) { goto rwaeioueucocosgu; } $kweggiqywassoewa = "\65\60\x25"; $mcmaiqckgiuqayau = "\x74\x72\141\x6e\163\154\x61\x74\x65\131\x28\x2d\x35\x30\45\x29"; rwaeioueucocosgu: if (!$auiemywmioieumqi) { goto cuqusekekewuseio; } $lwqumgsaiiooowqw = "\x35\60\x25"; $mcmaiqckgiuqayau = "\x74\x72\141\156\x73\154\x61\x74\145\130\50\x2d\x35\60\x25\x29"; cuqusekekewuseio: goto yseacqgykcseamce; qqowguycmsmuauyu: $mcmaiqckgiuqayau = "\164\162\x61\x6e\x73\x6c\141\x74\x65\50\55\x35\60\x25\54\40\x2d\65\x30\45\51"; $kweggiqywassoewa = "\65\60\45"; $lwqumgsaiiooowqw = "\x35\x30\x25"; yseacqgykcseamce: if (!$egwaeiwuwuakeugo) { goto xkgykmoskoqykakc; } $ywcogicgakiqmesa = "\x74\157\160"; xkgykmoskoqykakc: if (!$auiemywmioieumqi) { goto aoiaykkukcyyoaio; } $uyyeawaokwsoigkk = "\x6c\145\146\x74"; aoiaykkukcyyoaio: if (!($ywcogicgakiqmesa === "\x62\157\x74\x74\x6f\155")) { goto ksmmosiwmsousgkg; } $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\x70\170"; ksmmosiwmsousgkg: if (!($uyyeawaokwsoigkk === "\x72\151\x67\150\164")) { goto komaoacquqwgysgc; } $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\x70\170"; komaoacquqwgysgc: $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if (!($iegmsyuiekaayqqy === "\x61\165\164\x6f")) { goto ckyeeqwsugcoksek; } $iegmsyuiekaayqqy = "\60"; ckyeeqwsugcoksek: if (!($ymsweociooeskgwg === "\141\165\164\157")) { goto msegcuqmgweissmw; } $ymsweociooeskgwg = "\60"; msegcuqmgweissmw: $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\164\162\x61\156\163\x6c\x61\164\145\x58", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\x74\x72\x61\156\163\x6c\141\164\145\131", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\40\164\162\x61\156\x73\154\x61\x74\145\130\50{$iegmsyuiekaayqqy}\51\40\x74\162\141\x6e\163\154\x61\164\145\131\x28{$ymsweociooeskgwg}\x29\x20{$rqeoqqgeggasimwi}"; goto ucuyaouwikuyyemm; siwekyoigwegiosa: if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto wowakayqsywcaogm; } if ($egwaeiwuwuakeugo) { goto cssysqmcgcuwyyuu; } $egkakcquemweqoum[$ywcogicgakiqmesa] = "\60\160\x78"; goto aesgakksmyecsusi; cssysqmcgcuwyyuu: $egkakcquemweqoum["\x74\x6f\x70"] = "\65\x30\45"; $rqeoqqgeggasimwi = "\x74\162\141\156\x73\x6c\141\164\x65\x59\50\x2d\65\x30\x25\x29\x20{$rqeoqqgeggasimwi}"; aesgakksmyecsusi: if ($auiemywmioieumqi) { goto igewmkyikyaiamsq; } $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\60\x70\170"; goto guosgucaaeueacgu; igewmkyikyaiamsq: $egkakcquemweqoum["\154\145\x66\164"] = "\65\60\45"; $rqeoqqgeggasimwi = "\x74\162\x61\156\x73\x6c\x61\x74\145\x58\50\55\x35\60\45\x29\x20{$rqeoqqgeggasimwi}"; guosgucaaeueacgu: goto ogwosuisocqykoma; wowakayqsywcaogm: $egkakcquemweqoum["\x74\157\160"] = "\65\x30\45"; $egkakcquemweqoum["\154\145\146\x74"] = "\65\60\x25"; $rqeoqqgeggasimwi = "\x74\162\x61\x6e\x73\x6c\141\x74\145\50\55\65\60\x25\x2c\x20\x2d\65\x30\x25\x29\x20{$rqeoqqgeggasimwi}"; ogwosuisocqykoma: ucuyaouwikuyyemm: $egkakcquemweqoum["\164\x72\x61\156\x73\146\157\162\x6d"] = $rqeoqqgeggasimwi; uwsgccckqqookusc: return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (!(null === $yqyousioqsoaouig)) { goto iwccwiiumyyccquy; } return 1; iwccwiiumyyccquy: if (isset($this->multiple[$yqyousioqsoaouig])) { goto zsweawcwmisoogao; } $kkikuskasemkcygg = 1; if (!($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig))) { goto swmmiykiawycgoes; } $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); swmmiykiawycgoes: $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; zsweawcwmisoogao: return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\167\x69\x64\x74\150"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\x77\151\144\x74\150"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\150\x65\x69\147\x68\x74"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\x68\145\151\x67\x68\x74"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (!is_string($eqgoocgaqwqcimie)) { goto myegqayeyqaigmqi; } if (!preg_match("\x2f\x28\160\170\x7c\x72\145\155\174\145\155\x7c\x25\x7c\166\150\174\x76\x77\174\x76\155\151\x6e\174\x76\155\141\x78\x7c\x61\165\164\x6f\x29\x24\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto caiiwysgssyqoouc; } $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; caiiwysgssyqoouc: if (!($iyqygqimawuycsyq === $eqgoocgaqwqcimie)) { goto ycoomucecckyease; } $iyqygqimawuycsyq = ''; ycoomucecckyease: myegqayeyqaigmqi: return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if (!$eqgoocgaqwqcimie) { goto kuyeoaemuwcqkoae; } $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if (!($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\x25")) { goto qqocmsauqkwoscqy; } $eqgoocgaqwqcimie *= $eusockqasqqmoess; qqocmsauqkwoscqy: if (!is_callable($ekiuyucoiagmscgy)) { goto asoweekcciigkweo; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); asoweekcciigkweo: $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; kuyeoaemuwcqkoae: return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if (!($eqgoocgaqwqcimie === null)) { goto cuwasskqkoysieey; } $eqgoocgaqwqcimie = $momcykaoccoymeig; cuwasskqkoysieey: $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\160\x72\145\166": $acuayeeoiwokyomo = -1; goto mqigiiusqaieqeaa; case "\156\145\170\164": $acuayeeoiwokyomo = 1; goto mqigiiusqaieqeaa; } igeiewqcwieuawms: mqigiiusqaieqeaa: return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\x34", "\x6d"], true)) { goto egumckcoaaowkgoy; } if ($eiicaiwgqkgsekce->amkiaqeamgywsygm()) { goto wuqysikmouuiawwi; } return true; wuqysikmouuiawwi: goto qyeewwmuogssaegc; egumckcoaaowkgoy: return true; qyeewwmuogssaegc: return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
