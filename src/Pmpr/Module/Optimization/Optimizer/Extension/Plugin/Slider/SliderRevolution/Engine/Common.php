<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef5003b08f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\Common as BaseClass; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends BaseClass { const gwcwicqkomiaaqwm = "\123\122\67"; const csiimaowugwesqke = "\x53\x52\66"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\144", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\x6e", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\155", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { goto gscckcagyggagway; } if (!(self::csiimaowugwesqke === $goqqimcssiyagkwy)) { goto suokacgwamyumagy; } $this->slider = $wwqymgsmqsouaoos->slider; suokacgwamyumagy: goto ysicqksgomomkoek; gscckcagyggagway: $this->slider = $wwqymgsmqsouaoos->slider_v7; ysicqksgomomkoek: foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; ccegsywqocccgegu: } ocgsiomyyckcausy: } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if (!($aimmgaceygcsoowq = $this->slider)) { goto ksyukmeagigokcgi; } $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if (!$ocouqoqqcgauwkuq instanceof RevSliderSlide) { goto pmaiksascsegweci; } if (!("\165\156\x70\x75\142\154\x69\x73\150\x65\144" !== $ocouqoqqcgauwkuq->get_param(["\x70\x75\142\x6c\151\163\150", "\x73\164\x61\x74\145"]))) { goto uwswkegomekswkus; } $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; goto swqkyoemiswegyci; uwswkegomekswkus: pmaiksascsegweci: yuqiqaquoygggoqc: } swqkyoemiswegyci: if (!$qiqeekyyamqqwgyy) { goto cwoaockwkoukuwae; } $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if ($this->ywogaocmueoimkuq($weyumiemecumqwiy)) { goto aeoiiewygoiwuiii; } [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; aeoiiewygoiwuiii: iwycgkausoseqmwu: } okeecmwsuoikguuo: $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); cwoaockwkoukuwae: ksyukmeagigokcgi: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\160\162\55\163\143", [], $wyumyomqwssswwyk); if (!$maiscoecwcomqack) { goto eicuywagooikuusg; } $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; eicuywagooikuusg: $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto qiyiyuwmuoamwccs; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\x70\157\163\x69\164\151\157\x6e"] = "\162\x65\x6c\141\164\x69\166\x65"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\x70\162\x2d\163") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\160\x72\x2d\163\x63") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); qiyiyuwmuoamwccs: ceesgeawumeqkcic: } iquykqikookaokgq: $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\146\x6f\156\164" => "\156\157\x72\155\x61\x6c\40\x6e\157\162\155\141\x6c\40\156\157\x72\155\141\x6c\x20\x31\x34\x70\x78\x2f\61\40\x46\157\x6e\x74\x41\x77\x65\x73\x6f\155\x65"], "\x69\133\x63\x6c\141\163\x73\136\75\x22\146\x61\x2d\x22\x5d"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\160\x72\x2d\x73", ["\x64\141\x74\x61\x2d\151\x64" => $this->slider->get_id(), "\144\x61\164\x61\55\x74\171\160\x65" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (!isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { goto cuyaakuucgwmcuqq; } $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\x70\162\55{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\x23{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto iysiwmeymsoucaka; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); iysiwmeymsoucaka: iiikyaquagwawkce: } akkmaiaiamyaikqe: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); cuyaakuucgwmcuqq: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\x64": case 1: $uoomaookgsyciacm["\155\x69\x6e\x2d\167\x69\x64\164\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto gsgocqicesmaecse; case "\x6e": case "\x74": case 2: case 3: $uoomaookgsyciacm["\x6d\141\x78\x2d\167\x69\x64\164\x68"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\x6d\x69\x6e\x2d\x77\151\144\164\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto gsgocqicesmaecse; case "\x6d": case 4: $uoomaookgsyciacm["\155\141\x78\x2d\167\x69\x64\164\150"] = $ycuyiqagsmgikago; goto gsgocqicesmaecse; } oskwwcgyuwkiuacu: gsgocqicesmaecse: return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\40\x61\x6e\144\x20"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\50{$oaukocmsckciqaok}\x3a\x20{$eqgoocgaqwqcimie}\160\x78\x29{$geqcesmqwkeayoiu}"; swkukukimeueycaq: } qsecoiqswyiseake: $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\100\155\145\144\x69\141\x20{$wocwawaaemuoqmig}\40\x7b{$ekuqiqmikiicgoss}\175"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\160\x72\x2d\x73\167\x23\x70\x72\137{$this->sliderID}\40{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); waaammoiumecaiys: } ccqkugckigeckeqa: return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!in_array($eqgoocgaqwqcimie, ["\x6e\x6f\156\x65", "\43\x61"])) { goto qgmgmkeiemcqkyim; } return ''; qgmgmkeiemcqkyim: switch ($oaukocmsckciqaok) { case "\142\x61\143\153\x67\x72\x6f\x75\x6e\x64\55\x72\x65\x70\145\x61\x74": if ($eqgoocgaqwqcimie) { goto cwomucmeuqqucyge; } $eqgoocgaqwqcimie = "\156\x6f\x2d\x72\145\x70\145\x61\x74"; cwomucmeuqqucyge: goto oqoogougwwcqeimq; case "\164\x6f\x70": case "\x6c\x65\x66\x74": case "\162\x69\x67\x68\164": case "\167\151\x64\164\150": case "\150\x65\151\147\150\164": case "\x66\x6f\156\x74\x2d\x73\x69\x7a\x65": case "\x6d\151\x6e\x2d\x77\x69\144\164\150": case "\x6d\x69\x6e\55\x68\145\x69\147\x68\x74": case "\x6d\x61\170\x2d\150\x65\x69\147\150\164": case "\164\162\141\x6e\x73\154\141\x74\145\130": case "\x74\162\141\156\163\x6c\x61\164\x65\131": case "\154\151\x6e\x65\x2d\x68\x65\x69\x67\x68\x74": case "\154\145\164\164\x65\x72\55\163\x70\x61\x63\151\x6e\147": if (!is_numeric($eqgoocgaqwqcimie)) { goto eguukwmoyaaieuww; } $eqgoocgaqwqcimie .= "\x70\170"; eguukwmoyaaieuww: goto oqoogougwwcqeimq; case "\142\141\x63\x6b\147\162\157\165\x6e\144": case "\142\x61\x63\x6b\147\162\157\x75\156\144\x2d\151\155\x61\x67\145": if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto kqkeomoaociyuoye; } $eqgoocgaqwqcimie = "\x75\x72\154\x28\x27{$eqgoocgaqwqcimie}\47\x29"; kqkeomoaociyuoye: goto oqoogougwwcqeimq; } eqiiqamuyewoowwy: oqoogougwwcqeimq: return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if ($eqgoocgaqwqcimie) { goto ywykuacciwwkwmmy; } goto kswkouussqmqsssy; ywykuacciwwkwmmy: emomkqccysciiqya: } kswkouussqmqsssy: $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto qgcgucmskokqquwk; } $eswoackiciccgasc = false; goto ismoiisskiwmmmiu; qgcgucmskokqquwk: $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; ismoiisskiwmmmiu: if (null !== $eqgoocgaqwqcimie) { goto ygqqeqgiaasoimgs; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto gsiagogeoqwqekei; ygqqeqgiaasoimgs: $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if (!($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc)) { goto uwmgacqaowuguiow; } if (!($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig)) { goto oikomikqcwikimkw; } $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\x63\141\x6c\x63\x28\x28\x31\x30\60\166\x77\40\x2f\40{$uooewkwiswcwggao}\51\40\x2a\40{$uwoyyuqywiwueaso}\x29"; oikomikqcwikimkw: uwmgacqaowuguiow: if (!(null === $eqgoocgaqwqcimie)) { goto cecamogauimuwoow; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; cecamogauimuwoow: gsiagogeoqwqekei: return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\x6d\x69\144\144\154\145", "\x63\x65\x6e\164\x65\162"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\x6d\x69\144\144\x6c\145", "\143\x65\156\x74\x65\x72"], true); if (!($iegmsyuiekaayqqy && $ymsweociooeskgwg)) { goto mogomwoquuesmcec; } $rqeoqqgeggasimwi = $egkakcquemweqoum["\164\x72\x61\x6e\163\x66\x6f\x72\x6d"] ?? ''; if ($iegmsyuiekaayqqy === "\141\x75\164\157" && $ymsweociooeskgwg === "\x61\165\164\x6f") { goto auauyoooouqkickk; } $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\x30\x70\170"; $lwqumgsaiiooowqw = "\x30\160\x78"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto iqyqgqwwaaigmuou; } if (!$egwaeiwuwuakeugo) { goto ckmkeuakisiukage; } $kweggiqywassoewa = "\x35\x30\x25"; $mcmaiqckgiuqayau = "\x74\x72\x61\x6e\163\154\141\164\x65\x59\50\55\65\x30\45\51"; ckmkeuakisiukage: if (!$auiemywmioieumqi) { goto uaiqqcsoksgukasg; } $lwqumgsaiiooowqw = "\65\60\x25"; $mcmaiqckgiuqayau = "\x74\x72\x61\156\163\154\141\x74\145\x58\50\x2d\65\x30\45\51"; uaiqqcsoksgukasg: goto sqmgqacueqiiekay; iqyqgqwwaaigmuou: $mcmaiqckgiuqayau = "\164\x72\141\x6e\x73\x6c\x61\164\x65\50\55\x35\60\x25\x2c\40\55\65\60\x25\x29"; $kweggiqywassoewa = "\x35\x30\45"; $lwqumgsaiiooowqw = "\x35\60\45"; sqmgqacueqiiekay: if (!$egwaeiwuwuakeugo) { goto iuoqiecqaoosioey; } $ywcogicgakiqmesa = "\164\157\160"; iuoqiecqaoosioey: if (!$auiemywmioieumqi) { goto woqsaqwocioumoeu; } $uyyeawaokwsoigkk = "\154\145\x66\164"; woqsaqwocioumoeu: if (!($ywcogicgakiqmesa === "\142\x6f\x74\164\x6f\x6d")) { goto ukyoyoqcyywgaywg; } $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\x70\x78"; ukyoyoqcyywgaywg: if (!($uyyeawaokwsoigkk === "\162\151\147\x68\164")) { goto ugowokkqeoeugkqe; } $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\160\x78"; ugowokkqeoeugkqe: $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if (!($iegmsyuiekaayqqy === "\141\x75\164\x6f")) { goto qmqumgawyyqqamoa; } $iegmsyuiekaayqqy = "\60"; qmqumgawyyqqamoa: if (!($ymsweociooeskgwg === "\141\x75\x74\x6f")) { goto ewcyigsymwuuogci; } $ymsweociooeskgwg = "\x30"; ewcyigsymwuuogci: $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\x74\162\141\156\163\154\141\x74\x65\x58", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\164\162\141\156\x73\154\x61\164\x65\131", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\x20\x74\x72\x61\156\163\x6c\141\x74\x65\130\50{$iegmsyuiekaayqqy}\51\x20\164\x72\x61\156\x73\154\141\164\x65\x59\x28{$ymsweociooeskgwg}\x29\40{$rqeoqqgeggasimwi}"; goto egcsskmsysqiiikm; auauyoooouqkickk: if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto wcqyakkqcgmeqaag; } if ($egwaeiwuwuakeugo) { goto yuccckoykmccwyce; } $egkakcquemweqoum[$ywcogicgakiqmesa] = "\x30\160\x78"; goto goqkegseiummeiak; yuccckoykmccwyce: $egkakcquemweqoum["\164\157\x70"] = "\x35\x30\x25"; $rqeoqqgeggasimwi = "\164\162\x61\x6e\163\154\141\x74\x65\x59\x28\55\65\60\x25\51\40{$rqeoqqgeggasimwi}"; goqkegseiummeiak: if ($auiemywmioieumqi) { goto wgeskeagymiuoigi; } $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\x30\x70\170"; goto mcoyaaiggymgcsgq; wgeskeagymiuoigi: $egkakcquemweqoum["\154\145\146\x74"] = "\65\60\45"; $rqeoqqgeggasimwi = "\x74\162\x61\x6e\163\x6c\141\164\145\130\x28\x2d\x35\60\45\51\40{$rqeoqqgeggasimwi}"; mcoyaaiggymgcsgq: goto coygueuwyguuciww; wcqyakkqcgmeqaag: $egkakcquemweqoum["\x74\157\160"] = "\x35\60\x25"; $egkakcquemweqoum["\154\145\146\164"] = "\65\60\x25"; $rqeoqqgeggasimwi = "\164\x72\x61\156\163\154\141\164\145\x28\x2d\65\x30\x25\x2c\x20\55\65\x30\x25\x29\x20{$rqeoqqgeggasimwi}"; coygueuwyguuciww: egcsskmsysqiiikm: $egkakcquemweqoum["\164\162\141\156\163\x66\x6f\x72\x6d"] = $rqeoqqgeggasimwi; mogomwoquuesmcec: return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (!(null === $yqyousioqsoaouig)) { goto akiuyguwqaukuugs; } return 1; akiuyguwqaukuugs: if (isset($this->multiple[$yqyousioqsoaouig])) { goto cyikoqssoemgwyyk; } $kkikuskasemkcygg = 1; if (!($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig))) { goto emiyocoiuwcucuwu; } $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); emiyocoiuwcucuwu: $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; cyikoqssoemgwyyk: return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\x77\151\x64\x74\x68"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\x77\x69\x64\x74\x68"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\150\x65\x69\x67\150\164"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\x68\x65\x69\x67\x68\x74"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (!is_string($eqgoocgaqwqcimie)) { goto aegiwggkecgaiocs; } if (!preg_match("\x2f\x28\x70\x78\x7c\x72\145\x6d\x7c\145\x6d\174\45\174\x76\x68\x7c\x76\x77\174\x76\x6d\151\x6e\174\166\x6d\x61\x78\x7c\x61\165\164\157\x29\44\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto uceksuykgsckwwsu; } $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; uceksuykgsckwwsu: if (!($iyqygqimawuycsyq === $eqgoocgaqwqcimie)) { goto ummsowuaoeyusgoq; } $iyqygqimawuycsyq = ''; ummsowuaoeyusgoq: aegiwggkecgaiocs: return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if (!$eqgoocgaqwqcimie) { goto eemgoyuiauwuomcw; } $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if (!($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\45")) { goto gamuuauwykwgaegc; } $eqgoocgaqwqcimie *= $eusockqasqqmoess; gamuuauwykwgaegc: if (!is_callable($ekiuyucoiagmscgy)) { goto smeeigiqmommceye; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); smeeigiqmommceye: $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; eemgoyuiauwuomcw: return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if (!($eqgoocgaqwqcimie === null)) { goto ikgwcgcgcaaaskig; } $eqgoocgaqwqcimie = $momcykaoccoymeig; ikgwcgcgcaaaskig: $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\x70\x72\x65\166": $acuayeeoiwokyomo = -1; goto amcqceoiqgmwisce; case "\x6e\145\x78\164": $acuayeeoiwokyomo = 1; goto amcqceoiqgmwisce; } csmmiwegweusuimi: amcqceoiqgmwisce: return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\x34", "\x6d"], true)) { goto syaegaiuaioeaocq; } if ($eiicaiwgqkgsekce->amkiaqeamgywsygm()) { goto imsougccawciqsuw; } return true; imsougccawciqsuw: goto ckkecwwioeywccwa; syaegaiuaioeaocq: return true; ckkecwwioeywccwa: return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
