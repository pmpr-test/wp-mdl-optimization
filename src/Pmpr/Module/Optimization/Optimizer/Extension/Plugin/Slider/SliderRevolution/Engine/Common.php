<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1eae701745             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\Common as BaseClass; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends BaseClass { const gwcwicqkomiaaqwm = "\x53\122\x37"; const csiimaowugwesqke = "\x53\122\x36"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\x64", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\156", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\155", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { goto gsiagogeoqwqekei; } if (!(self::csiimaowugwesqke === $goqqimcssiyagkwy)) { goto ygqqeqgiaasoimgs; } $this->slider = $wwqymgsmqsouaoos->slider; ygqqeqgiaasoimgs: goto yuccckoykmccwyce; gsiagogeoqwqekei: $this->slider = $wwqymgsmqsouaoos->slider_v7; yuccckoykmccwyce: foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; wgeskeagymiuoigi: } goqkegseiummeiak: } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if (!($aimmgaceygcsoowq = $this->slider)) { goto woqsaqwocioumoeu; } $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if (!$ocouqoqqcgauwkuq instanceof RevSliderSlide) { goto ckmkeuakisiukage; } if (!("\165\156\x70\x75\x62\x6c\x69\163\150\x65\144" !== $ocouqoqqcgauwkuq->get_param(["\x70\165\142\x6c\x69\163\150", "\163\164\141\x74\x65"]))) { goto coygueuwyguuciww; } $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; goto mcoyaaiggymgcsgq; coygueuwyguuciww: ckmkeuakisiukage: wcqyakkqcgmeqaag: } mcoyaaiggymgcsgq: if (!$qiqeekyyamqqwgyy) { goto iuoqiecqaoosioey; } $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if ($this->ywogaocmueoimkuq($weyumiemecumqwiy)) { goto sqmgqacueqiiekay; } [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; sqmgqacueqiiekay: iqyqgqwwaaigmuou: } uaiqqcsoksgukasg: $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); iuoqiecqaoosioey: woqsaqwocioumoeu: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\160\162\55\163\143", [], $wyumyomqwssswwyk); if (!$maiscoecwcomqack) { goto ukyoyoqcyywgaywg; } $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; ukyoyoqcyywgaywg: $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto ewcyigsymwuuogci; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\160\157\x73\151\164\151\157\x6e"] = "\x72\145\x6c\x61\x74\151\166\145"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\160\162\55\163") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\160\x72\55\163\143") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); ewcyigsymwuuogci: qmqumgawyyqqamoa: } ugowokkqeoeugkqe: $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\146\157\156\x74" => "\x6e\157\x72\x6d\141\154\x20\156\x6f\162\155\x61\x6c\40\156\x6f\162\x6d\x61\154\x20\61\x34\x70\170\x2f\x31\x20\106\157\x6e\x74\x41\x77\145\x73\x6f\x6d\x65"], "\151\x5b\x63\x6c\141\x73\163\x5e\75\x22\146\141\55\42\x5d"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\x70\x72\x2d\x73", ["\144\x61\164\141\x2d\151\144" => $this->slider->get_id(), "\144\x61\164\x61\x2d\x74\171\x70\145" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (!isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { goto akiuyguwqaukuugs; } $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\x70\162\55{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\43{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto mogomwoquuesmcec; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); mogomwoquuesmcec: egcsskmsysqiiikm: } auauyoooouqkickk: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); akiuyguwqaukuugs: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\144": case 1: $uoomaookgsyciacm["\155\151\x6e\55\167\x69\144\x74\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto emiyocoiuwcucuwu; case "\x6e": case "\x74": case 2: case 3: $uoomaookgsyciacm["\155\x61\x78\x2d\x77\151\x64\164\150"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\x6d\x69\x6e\55\x77\151\x64\x74\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto emiyocoiuwcucuwu; case "\155": case 4: $uoomaookgsyciacm["\x6d\x61\x78\55\167\x69\144\164\x68"] = $ycuyiqagsmgikago; goto emiyocoiuwcucuwu; } cyikoqssoemgwyyk: emiyocoiuwcucuwu: return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\40\141\x6e\x64\x20"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\50{$oaukocmsckciqaok}\72\x20{$eqgoocgaqwqcimie}\160\170\x29{$geqcesmqwkeayoiu}"; ummsowuaoeyusgoq: } uceksuykgsckwwsu: $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\x40\155\x65\x64\151\141\40{$wocwawaaemuoqmig}\x20\x7b{$ekuqiqmikiicgoss}\x7d"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\160\x72\x2d\x73\167\x23\160\x72\137{$this->sliderID}\x20{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); gamuuauwykwgaegc: } aegiwggkecgaiocs: return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!in_array($eqgoocgaqwqcimie, ["\x6e\x6f\156\145", "\43\141"])) { goto smeeigiqmommceye; } return ''; smeeigiqmommceye: switch ($oaukocmsckciqaok) { case "\142\x61\143\x6b\x67\x72\x6f\x75\x6e\x64\x2d\162\145\160\145\x61\164": if ($eqgoocgaqwqcimie) { goto amcqceoiqgmwisce; } $eqgoocgaqwqcimie = "\156\157\x2d\x72\x65\160\145\x61\x74"; amcqceoiqgmwisce: goto eemgoyuiauwuomcw; case "\164\157\160": case "\x6c\145\x66\164": case "\162\x69\x67\x68\164": case "\x77\151\144\x74\150": case "\x68\145\x69\147\150\x74": case "\x66\x6f\x6e\164\x2d\x73\x69\172\145": case "\x6d\151\156\55\x77\151\x64\x74\x68": case "\x6d\151\x6e\x2d\x68\x65\x69\x67\150\164": case "\x6d\141\170\55\150\x65\x69\x67\x68\164": case "\164\x72\141\x6e\x73\x6c\141\164\x65\130": case "\x74\x72\141\x6e\x73\154\x61\x74\x65\131": case "\154\x69\x6e\145\55\x68\145\151\x67\x68\x74": case "\x6c\x65\x74\x74\145\x72\x2d\x73\x70\x61\x63\151\x6e\147": if (!is_numeric($eqgoocgaqwqcimie)) { goto csmmiwegweusuimi; } $eqgoocgaqwqcimie .= "\160\170"; csmmiwegweusuimi: goto eemgoyuiauwuomcw; case "\142\x61\143\153\x67\162\157\x75\156\x64": case "\x62\141\143\x6b\x67\x72\x6f\x75\x6e\144\x2d\x69\155\x61\x67\145": if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto imsougccawciqsuw; } $eqgoocgaqwqcimie = "\x75\162\154\50\47{$eqgoocgaqwqcimie}\47\51"; imsougccawciqsuw: goto eemgoyuiauwuomcw; } ikgwcgcgcaaaskig: eemgoyuiauwuomcw: return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if ($eqgoocgaqwqcimie) { goto koceayskwssiisyi; } goto syaegaiuaioeaocq; koceayskwssiisyi: ckkecwwioeywccwa: } syaegaiuaioeaocq: $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto auqmeqswuuioemge; } $eswoackiciccgasc = false; goto iiwcuqeosmwgogus; auqmeqswuuioemge: $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; iiwcuqeosmwgogus: if (null !== $eqgoocgaqwqcimie) { goto uawcmuiummigeqea; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto qmmieiquoegeaqok; uawcmuiummigeqea: $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if (!($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc)) { goto wgaggmmmgeumiouk; } if (!($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig)) { goto uqsoseuiwgukywas; } $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\x63\141\x6c\143\50\x28\x31\x30\x30\166\167\40\57\x20{$uooewkwiswcwggao}\x29\x20\52\x20{$uwoyyuqywiwueaso}\x29"; uqsoseuiwgukywas: wgaggmmmgeumiouk: if (!(null === $eqgoocgaqwqcimie)) { goto cwkouaeieiyiykim; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; cwkouaeieiyiykim: qmmieiquoegeaqok: return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\x6d\151\x64\x64\154\x65", "\143\x65\x6e\x74\x65\162"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\155\151\144\144\x6c\x65", "\143\145\156\164\x65\x72"], true); if (!($iegmsyuiekaayqqy && $ymsweociooeskgwg)) { goto makqqsaegsesgquq; } $rqeoqqgeggasimwi = $egkakcquemweqoum["\164\x72\141\x6e\x73\146\x6f\162\155"] ?? ''; if ($iegmsyuiekaayqqy === "\x61\x75\x74\x6f" && $ymsweociooeskgwg === "\141\165\x74\x6f") { goto mawsaauyquacosus; } $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\60\160\x78"; $lwqumgsaiiooowqw = "\60\160\x78"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto cuamsmyiamaicwou; } if (!$egwaeiwuwuakeugo) { goto yisooseceggsgyqw; } $kweggiqywassoewa = "\x35\60\45"; $mcmaiqckgiuqayau = "\x74\x72\141\x6e\163\x6c\x61\164\145\131\50\55\x35\x30\45\51"; yisooseceggsgyqw: if (!$auiemywmioieumqi) { goto awwwoikmmaisyisy; } $lwqumgsaiiooowqw = "\x35\60\45"; $mcmaiqckgiuqayau = "\164\162\x61\x6e\x73\x6c\141\x74\x65\x58\50\x2d\65\x30\x25\x29"; awwwoikmmaisyisy: goto essokuoguqegyeua; cuamsmyiamaicwou: $mcmaiqckgiuqayau = "\164\x72\x61\x6e\163\154\141\164\145\50\55\x35\x30\45\x2c\40\x2d\x35\60\45\51"; $kweggiqywassoewa = "\65\60\45"; $lwqumgsaiiooowqw = "\x35\60\45"; essokuoguqegyeua: if (!$egwaeiwuwuakeugo) { goto aqoyesawuayoeuag; } $ywcogicgakiqmesa = "\164\x6f\160"; aqoyesawuayoeuag: if (!$auiemywmioieumqi) { goto agoikageaeouqaqi; } $uyyeawaokwsoigkk = "\154\145\146\164"; agoikageaeouqaqi: if (!($ywcogicgakiqmesa === "\x62\x6f\x74\164\157\155")) { goto ssoooeigmwugyycm; } $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\160\170"; ssoooeigmwugyycm: if (!($uyyeawaokwsoigkk === "\x72\x69\147\x68\164")) { goto uyisqeuweamsqwgg; } $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\160\x78"; uyisqeuweamsqwgg: $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if (!($iegmsyuiekaayqqy === "\141\x75\x74\157")) { goto icasgckmuawkaksg; } $iegmsyuiekaayqqy = "\x30"; icasgckmuawkaksg: if (!($ymsweociooeskgwg === "\x61\x75\x74\x6f")) { goto aeywmsqkisycgqce; } $ymsweociooeskgwg = "\60"; aeywmsqkisycgqce: $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\164\162\141\156\x73\x6c\x61\164\145\x58", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\x74\x72\x61\x6e\163\x6c\x61\164\x65\x59", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\40\164\x72\x61\156\x73\154\141\x74\x65\x58\x28{$iegmsyuiekaayqqy}\51\40\164\162\x61\x6e\163\154\x61\164\145\x59\x28{$ymsweociooeskgwg}\51\x20{$rqeoqqgeggasimwi}"; goto cwkwkgkqasguwscg; mawsaauyquacosus: if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto wwigiswokyqkamsu; } if ($egwaeiwuwuakeugo) { goto smmgkqeacswimyas; } $egkakcquemweqoum[$ywcogicgakiqmesa] = "\x30\160\170"; goto kmwwamokwgagomye; smmgkqeacswimyas: $egkakcquemweqoum["\164\x6f\160"] = "\65\60\45"; $rqeoqqgeggasimwi = "\164\x72\x61\156\x73\x6c\141\164\x65\131\50\55\x35\x30\x25\51\40{$rqeoqqgeggasimwi}"; kmwwamokwgagomye: if ($auiemywmioieumqi) { goto qquugwwesqswouyc; } $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\60\x70\170"; goto ewugkyumwuomukie; qquugwwesqswouyc: $egkakcquemweqoum["\x6c\145\x66\164"] = "\x35\x30\45"; $rqeoqqgeggasimwi = "\164\162\141\x6e\x73\x6c\141\164\x65\x58\x28\x2d\x35\x30\x25\x29\x20{$rqeoqqgeggasimwi}"; ewugkyumwuomukie: goto iqicwseckoykqowm; wwigiswokyqkamsu: $egkakcquemweqoum["\x74\x6f\x70"] = "\65\60\45"; $egkakcquemweqoum["\154\x65\146\164"] = "\x35\x30\x25"; $rqeoqqgeggasimwi = "\x74\162\141\156\163\154\141\x74\x65\50\x2d\65\60\45\54\x20\x2d\x35\x30\45\51\x20{$rqeoqqgeggasimwi}"; iqicwseckoykqowm: cwkwkgkqasguwscg: $egkakcquemweqoum["\x74\162\x61\156\x73\146\x6f\162\x6d"] = $rqeoqqgeggasimwi; makqqsaegsesgquq: return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (!(null === $yqyousioqsoaouig)) { goto symwoekuwqcmowwo; } return 1; symwoekuwqcmowwo: if (isset($this->multiple[$yqyousioqsoaouig])) { goto koaeayomowaiywam; } $kkikuskasemkcygg = 1; if (!($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig))) { goto emsuycioaeoeeeqo; } $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); emsuycioaeoeeeqo: $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; koaeayomowaiywam: return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\x77\x69\x64\x74\x68"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\x77\x69\144\164\150"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\x68\x65\x69\x67\150\164"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\x68\145\151\x67\x68\164"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (!is_string($eqgoocgaqwqcimie)) { goto wqcquwuiqkqaoamo; } if (!preg_match("\57\x28\x70\170\x7c\162\x65\x6d\174\x65\x6d\x7c\x25\174\166\150\174\166\167\x7c\166\155\151\156\174\x76\155\x61\x78\174\141\x75\x74\x6f\x29\44\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto ikwamukqumiokwkk; } $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; ikwamukqumiokwkk: if (!($iyqygqimawuycsyq === $eqgoocgaqwqcimie)) { goto uueyawewomkuiiwc; } $iyqygqimawuycsyq = ''; uueyawewomkuiiwc: wqcquwuiqkqaoamo: return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if (!$eqgoocgaqwqcimie) { goto syggoyqwycmmcuck; } $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if (!($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\x25")) { goto csueasskicaaoaii; } $eqgoocgaqwqcimie *= $eusockqasqqmoess; csueasskicaaoaii: if (!is_callable($ekiuyucoiagmscgy)) { goto yyousguikogqkecs; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); yyousguikogqkecs: $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; syggoyqwycmmcuck: return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if (!($eqgoocgaqwqcimie === null)) { goto owwwikwqsyakweeq; } $eqgoocgaqwqcimie = $momcykaoccoymeig; owwwikwqsyakweeq: $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\x70\x72\145\166": $acuayeeoiwokyomo = -1; goto awmyoukmqymausgu; case "\156\x65\x78\164": $acuayeeoiwokyomo = 1; goto awmyoukmqymausgu; } eicuoesagiuykmos: awmyoukmqymausgu: return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\x34", "\155"], true)) { goto oukacgcyoiggqosq; } if ($eiicaiwgqkgsekce->amkiaqeamgywsygm()) { goto eqkaikmaegscweqq; } return true; eqkaikmaegscweqq: goto usiiuuommggemcke; oukacgcyoiggqosq: return true; usiiuuommggemcke: return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
