<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7b77183e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\Common as BaseClass; use RevSliderFunctions; use RevSliderSlide; use RevSliderSlider; abstract class Common extends BaseClass { const gwcwicqkomiaaqwm = "\123\122\x37"; const csiimaowugwesqke = "\x53\x52\66"; protected $useMultiple = []; protected array $multiple = []; protected string $type = ''; protected $sliderID = 0; protected array $breakpoints = []; protected ?RevSliderSlider $slider = null; public function maqaiymckiuukses($wwqymgsmqsouaoos, string $goqqimcssiyagkwy) { $emkaqwyswammaako = [Constants::mcaucuyeeiwsmmuy => [self::csiimaowugwesqke => "\x64", self::gwcwicqkomiaaqwm => 1, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1240], Constants::ssgmqmkaaguimasg => [self::csiimaowugwesqke => "\156", self::gwcwicqkomiaaqwm => 2, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 1024], Constants::oceskmgmuoseisoq => [self::csiimaowugwesqke => "\x74", self::gwcwicqkomiaaqwm => 3, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 778], Constants::skogicecygyyskkq => [self::csiimaowugwesqke => "\x6d", self::gwcwicqkomiaaqwm => 4, Constants::iccwcygaeqmomooo => true, Constants::wikgqsqysyuoykse => 480]]; $cucuuiomouyeowaa = new RevSliderFunctions(); $kkyamqaagismicwk = $cucuuiomouyeowaa->get_global_settings(); if (self::gwcwicqkomiaaqwm === $goqqimcssiyagkwy && !empty($wwqymgsmqsouaoos->slider_v7)) { goto gsiagogeoqwqekei; } if (!(self::csiimaowugwesqke === $goqqimcssiyagkwy)) { goto ygqqeqgiaasoimgs; } $this->slider = $wwqymgsmqsouaoos->slider; ygqqeqgiaasoimgs: goto yuccckoykmccwyce; gsiagogeoqwqekei: $this->slider = $wwqymgsmqsouaoos->slider_v7; yuccckoykmccwyce: foreach ($emkaqwyswammaako as $ymqmyyeuycgmigyo => $gcgsqcoqciockquc) { $eqgoocgaqwqcimie = (int) $cucuuiomouyeowaa->get_val($kkyamqaagismicwk, [Constants::waguuiqqgsysuukq, $ymqmyyeuycgmigyo], $gcgsqcoqciockquc[Constants::wikgqsqysyuoykse]); $this->breakpoints[$gcgsqcoqciockquc[$goqqimcssiyagkwy]] = $eqgoocgaqwqcimie; wgeskeagymiuoigi: } goqkegseiummeiak: } public function suceocykemwuyiyg($wwqymgsmqsouaoos) { $nsmgceoqaqogqmuw = $kswaimykcacqyaay = ''; if (!($aimmgaceygcsoowq = $this->slider)) { goto woqsaqwocioumoeu; } $this->sliderID = $wwqymgsmqsouaoos->get_html_id(); $qiqeekyyamqqwgyy = null; foreach ($aimmgaceygcsoowq->slides as $ocouqoqqcgauwkuq) { if (!$ocouqoqqcgauwkuq instanceof RevSliderSlide) { goto ckmkeuakisiukage; } if (!("\165\x6e\x70\165\142\154\151\163\x68\x65\x64" !== $ocouqoqqcgauwkuq->get_param(["\x70\x75\x62\x6c\x69\x73\x68", "\163\x74\141\164\x65"]))) { goto coygueuwyguuciww; } $qiqeekyyamqqwgyy = $ocouqoqqcgauwkuq; goto mcoyaaiggymgcsgq; coygueuwyguuciww: ckmkeuakisiukage: wcqyakkqcgmeqaag: } mcoyaaiggymgcsgq: if (!$qiqeekyyamqqwgyy) { goto iuoqiecqaoosioey; } $wyumyomqwssswwyk = $ykwokoiuukogqgqs = ''; $this->qiccuiwooiquycsg(); $gkgeoauskcqaemye = $qiqeekyyamqqwgyy->emwyamaoaommokai(); foreach ($gkgeoauskcqaemye as $weyumiemecumqwiy) { if ($this->ywogaocmueoimkuq($weyumiemecumqwiy)) { goto sqmgqacueqiiekay; } [$cmwgmqgicwcmsuec, $geaaqoqwaskmcycg] = $this->aaqmykiemciywigu($weyumiemecumqwiy); $wyumyomqwssswwyk .= $cmwgmqgicwcmsuec; $ykwokoiuukogqgqs .= $geaaqoqwaskmcycg; sqmgqacueqiiekay: iqyqgqwwaaigmuou: } uaiqqcsoksgukasg: $maiscoecwcomqack = $this->gqkyomsuwooussyk($qiqeekyyamqqwgyy); $umegawicsoqusacm = $this->aaqmykiemciywigu($maiscoecwcomqack); [$nsmgceoqaqogqmuw, $kswaimykcacqyaay] = $this->cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $umegawicsoqusacm); iuoqiecqaoosioey: woqsaqwocioumoeu: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } public function cugysyiguwuyagco($wyumyomqwssswwyk, $ykwokoiuukogqgqs, $maiscoecwcomqack = null) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kswaimykcacqyaay = $ykwokoiuukogqgqs; $ykkwecqcmogeaqwc = $swqimwqeweekeusq->uuccukgasskgimsq("\160\x72\55\163\x63", [], $wyumyomqwssswwyk); if (!$maiscoecwcomqack) { goto ukyoyoqcyywgaywg; } $kswaimykcacqyaay .= $maiscoecwcomqack[1]; $ykkwecqcmogeaqwc .= $maiscoecwcomqack[0]; ukyoyoqcyywgaywg: $eyagkkkqkwcuygso = $this->slider->get_params(); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto ewcyigsymwuuogci; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki] = $this->gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig); $eygasqqkgouqiuqk = $this->iumqmcessgoqomqu($eygasqqkgouqiuqk); $gyquugwkmmgwmkki = $this->iumqmcessgoqomqu($gyquugwkmmgwmkki); $okisissiiqkmgmca = $eygasqqkgouqiuqk; $okisissiiqkmgmca["\160\x6f\x73\151\x74\151\157\156"] = "\162\145\154\x61\164\x69\x76\x65"; $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($eygasqqkgouqiuqk, "\160\x72\x2d\x73") . $this->ycgswoucgcsukwaq($gyquugwkmmgwmkki, "\160\x72\x2d\163\143") . $this->ycgswoucgcsukwaq($okisissiiqkmgmca)); ewcyigsymwuuogci: qmqumgawyyqqamoa: } ugowokkqeoeugkqe: $kswaimykcacqyaay .= $this->ycgswoucgcsukwaq(["\x66\x6f\156\x74" => "\x6e\157\x72\x6d\x61\x6c\40\156\157\162\155\x61\x6c\x20\156\x6f\162\155\x61\154\x20\61\64\x70\170\57\x31\x20\x46\157\156\164\101\167\145\x73\x6f\155\x65"], "\151\x5b\x63\154\x61\x73\163\x5e\x3d\x22\x66\x61\x2d\x22\135"); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->uuccukgasskgimsq("\160\162\55\x73", ["\x64\141\x74\141\x2d\x69\x64" => $this->slider->get_id(), "\144\x61\x74\x61\x2d\x74\171\160\x65" => $this->type, Constants::gouqcwikiiygyasc => $this->sliderID], $ykkwecqcmogeaqwc); return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function aaqmykiemciywigu(array $weyumiemecumqwiy) : array { $kswaimykcacqyaay = $nsmgceoqaqogqmuw = ''; if (!isset($weyumiemecumqwiy[Constants::squoamkioomemiyi])) { goto akiuyguwqaukuugs; } $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $aokagokqyuysuksm = $sqeykgyoooqysmca . $this->tsioiooeoyeieqye($weyumiemecumqwiy); $wwgucssaecqekuek = []; $kqywgoqsmuswammk = "\x70\162\x2d{$sqeykgyoooqysmca}"; $yuumukkaswwoywya = "{$kqywgoqsmuswammk}\43{$aokagokqyuysuksm}"; $ewgwqamkygiqaawc = $this->yiiekkiwayooaqiy($weyumiemecumqwiy); foreach ($this->breakpoints as $yqyousioqsoaouig => $ycuyiqagsmgikago) { if (!$this->ammywaiaowqmcssa($yqyousioqsoaouig)) { goto mogomwoquuesmcec; } $uoomaookgsyciacm = $this->yawwsmagaweysggs($yqyousioqsoaouig); $egkakcquemweqoum = $this->ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig); $egkakcquemweqoum = $this->iumqmcessgoqomqu($egkakcquemweqoum); $kswaimykcacqyaay .= $this->yqacumgcswgcesyq($uoomaookgsyciacm, $this->ycgswoucgcsukwaq($egkakcquemweqoum, $yuumukkaswwoywya)); mogomwoquuesmcec: egcsskmsysqiiikm: } auauyoooouqkickk: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); akiuyguwqaukuugs: return [$nsmgceoqaqogqmuw, $kswaimykcacqyaay]; } protected function yawwsmagaweysggs($momcykaoccoymeig) { $uoomaookgsyciacm = []; $ycuyiqagsmgikago = $this->breakpoints[$momcykaoccoymeig]; switch ($momcykaoccoymeig) { case "\x64": case 1: $uoomaookgsyciacm["\x6d\151\x6e\x2d\167\x69\x64\x74\x68"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto emiyocoiuwcucuwu; case "\156": case "\x74": case 2: case 3: $uoomaookgsyciacm["\155\141\x78\55\167\151\144\164\150"] = $ycuyiqagsmgikago - 1; $uoomaookgsyciacm["\155\x69\x6e\x2d\x77\151\144\x74\150"] = $this->uaskqakcsowgmccg($momcykaoccoymeig); goto emiyocoiuwcucuwu; case "\155": case 4: $uoomaookgsyciacm["\x6d\x61\170\x2d\167\151\x64\164\x68"] = $ycuyiqagsmgikago; goto emiyocoiuwcucuwu; } cyikoqssoemgwyyk: emiyocoiuwcucuwu: return $uoomaookgsyciacm; } protected function yqacumgcswgcesyq(array $uoomaookgsyciacm, string $ekuqiqmikiicgoss) : string { $wocwawaaemuoqmig = ''; $geqcesmqwkeayoiu = "\40\141\x6e\x64\40"; foreach ($uoomaookgsyciacm as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $wocwawaaemuoqmig .= "\x28{$oaukocmsckciqaok}\72\40{$eqgoocgaqwqcimie}\160\x78\51{$geqcesmqwkeayoiu}"; ummsowuaoeyusgoq: } uceksuykgsckwwsu: $wocwawaaemuoqmig = rtrim($wocwawaaemuoqmig, $geqcesmqwkeayoiu); return PHP_EOL . "\100\x6d\x65\x64\151\x61\40{$wocwawaaemuoqmig}\x20\173{$ekuqiqmikiicgoss}\x7d"; } protected function ycgswoucgcsukwaq(array $egkakcquemweqoum = [], string $yuumukkaswwoywya = '') : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sawckkwcugsmokmi("\160\x72\x2d\x73\167\x23\160\x72\137{$this->sliderID}\40{$yuumukkaswwoywya}", $egkakcquemweqoum); } protected function iumqmcessgoqomqu(array $egkakcquemweqoum) : array { foreach ($egkakcquemweqoum as $oaukocmsckciqaok => $eqgoocgaqwqcimie) { $egkakcquemweqoum[$oaukocmsckciqaok] = $this->awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie); gamuuauwykwgaegc: } aegiwggkecgaiocs: return array_filter($egkakcquemweqoum); } protected function awkcisaoyasicqwq($oaukocmsckciqaok, $eqgoocgaqwqcimie) { if (!in_array($eqgoocgaqwqcimie, ["\156\157\156\x65", "\x23\141"])) { goto smeeigiqmommceye; } return ''; smeeigiqmommceye: switch ($oaukocmsckciqaok) { case "\142\x61\143\x6b\x67\x72\x6f\165\156\x64\55\x72\x65\x70\x65\141\x74": if ($eqgoocgaqwqcimie) { goto amcqceoiqgmwisce; } $eqgoocgaqwqcimie = "\x6e\x6f\x2d\162\145\160\x65\x61\x74"; amcqceoiqgmwisce: goto eemgoyuiauwuomcw; case "\x74\x6f\x70": case "\x6c\145\146\164": case "\x72\x69\x67\150\164": case "\x77\x69\144\x74\150": case "\x68\145\151\147\150\x74": case "\x66\157\156\164\55\x73\151\172\x65": case "\x6d\x69\156\55\167\x69\144\x74\x68": case "\155\151\156\55\x68\145\x69\147\x68\164": case "\155\141\x78\55\x68\145\x69\x67\150\x74": case "\x74\x72\141\156\163\x6c\141\164\145\130": case "\164\162\x61\x6e\x73\x6c\x61\164\145\x59": case "\154\151\x6e\x65\x2d\x68\x65\x69\147\150\164": case "\x6c\145\x74\164\x65\162\x2d\163\x70\141\143\x69\x6e\x67": if (!is_numeric($eqgoocgaqwqcimie)) { goto csmmiwegweusuimi; } $eqgoocgaqwqcimie .= "\x70\170"; csmmiwegweusuimi: goto eemgoyuiauwuomcw; case "\142\141\x63\153\x67\162\x6f\x75\156\x64": case "\142\x61\x63\153\x67\162\x6f\165\x6e\144\55\151\x6d\141\x67\145": if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto imsougccawciqsuw; } $eqgoocgaqwqcimie = "\x75\x72\154\x28\47{$eqgoocgaqwqcimie}\x27\51"; imsougccawciqsuw: goto eemgoyuiauwuomcw; } ikgwcgcgcaaaskig: eemgoyuiauwuomcw: return $eqgoocgaqwqcimie; } protected function syckcsgsmwciwyyw($amakmumgguksgmum, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null, bool $eswoackiciccgasc = true) { $ymkqyawksmqcgsei = explode("\x2e", $mkomwsiykqigmqca); $eqgoocgaqwqcimie = $amakmumgguksgmum; foreach ($ymkqyawksmqcgsei as $agywggmyywaimwuy) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$agywggmyywaimwuy] ?? null; if ($eqgoocgaqwqcimie) { goto koceayskwssiisyi; } goto syaegaiuaioeaocq; koceayskwssiisyi: ckkecwwioeywccwa: } syaegaiuaioeaocq: $ekiuyucoiagmscgy = null; if ($eswoackiciccgasc && isset($this->useMultiple[$mkomwsiykqigmqca])) { goto auqmeqswuuioemge; } $eswoackiciccgasc = false; goto iiwcuqeosmwgogus; auqmeqswuuioemge: $ekiuyucoiagmscgy = $this->useMultiple[$mkomwsiykqigmqca]; $eswoackiciccgasc = true; iiwcuqeosmwgogus: if (null !== $eqgoocgaqwqcimie) { goto uawcmuiummigeqea; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto qmmieiquoegeaqok; uawcmuiummigeqea: $eqgoocgaqwqcimie = $this->usywmiiwiggsyium($mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); $uwoyyuqywiwueaso = (float) $eqgoocgaqwqcimie; if (!($uwoyyuqywiwueaso && !is_array($eqgoocgaqwqcimie) && $eswoackiciccgasc)) { goto wgaggmmmgeumiouk; } if (!($this->qgwuyeagygomiiks(0) !== $yqyousioqsoaouig)) { goto uqsoseuiwgukywas; } $uooewkwiswcwggao = $this->breakpoints[$yqyousioqsoaouig] ?? 1; $eqgoocgaqwqcimie = "\143\x61\x6c\x63\x28\x28\x31\60\x30\166\167\40\57\40{$uooewkwiswcwggao}\51\x20\x2a\x20{$uwoyyuqywiwueaso}\x29"; uqsoseuiwgukywas: wgaggmmmgeumiouk: if (!(null === $eqgoocgaqwqcimie)) { goto cwkouaeieiyiykim; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; cwkouaeieiyiykim: qmmieiquoegeaqok: return $eqgoocgaqwqcimie; } public function kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk) { $egwaeiwuwuakeugo = in_array($ywcogicgakiqmesa, ["\155\x69\144\x64\x6c\x65", "\x63\x65\156\164\145\162"], true); $auiemywmioieumqi = in_array($uyyeawaokwsoigkk, ["\155\x69\x64\x64\154\x65", "\x63\145\156\x74\x65\x72"], true); if (!($iegmsyuiekaayqqy && $ymsweociooeskgwg)) { goto makqqsaegsesgquq; } $rqeoqqgeggasimwi = $egkakcquemweqoum["\164\x72\x61\156\x73\146\157\162\x6d"] ?? ''; if ($iegmsyuiekaayqqy === "\x61\165\164\x6f" && $ymsweociooeskgwg === "\x61\x75\164\157") { goto mawsaauyquacosus; } $mcmaiqckgiuqayau = ''; $kweggiqywassoewa = "\x30\160\x78"; $lwqumgsaiiooowqw = "\x30\x70\170"; if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto cuamsmyiamaicwou; } if (!$egwaeiwuwuakeugo) { goto yisooseceggsgyqw; } $kweggiqywassoewa = "\65\x30\x25"; $mcmaiqckgiuqayau = "\164\x72\141\156\x73\154\x61\164\145\131\x28\x2d\x35\60\45\x29"; yisooseceggsgyqw: if (!$auiemywmioieumqi) { goto awwwoikmmaisyisy; } $lwqumgsaiiooowqw = "\65\60\x25"; $mcmaiqckgiuqayau = "\164\x72\141\156\x73\154\x61\164\145\x58\50\x2d\x35\x30\x25\x29"; awwwoikmmaisyisy: goto essokuoguqegyeua; cuamsmyiamaicwou: $mcmaiqckgiuqayau = "\164\162\x61\x6e\x73\x6c\x61\164\x65\x28\55\x35\x30\x25\54\x20\55\x35\x30\x25\x29"; $kweggiqywassoewa = "\x35\60\45"; $lwqumgsaiiooowqw = "\65\60\x25"; essokuoguqegyeua: if (!$egwaeiwuwuakeugo) { goto aqoyesawuayoeuag; } $ywcogicgakiqmesa = "\164\157\160"; aqoyesawuayoeuag: if (!$auiemywmioieumqi) { goto agoikageaeouqaqi; } $uyyeawaokwsoigkk = "\154\x65\x66\x74"; agoikageaeouqaqi: if (!($ywcogicgakiqmesa === "\142\157\x74\x74\157\x6d")) { goto ssoooeigmwugyycm; } $ymsweociooeskgwg = (int) $ymsweociooeskgwg * -1 . "\x70\170"; ssoooeigmwugyycm: if (!($uyyeawaokwsoigkk === "\162\151\x67\x68\x74")) { goto uyisqeuweamsqwgg; } $iegmsyuiekaayqqy = (int) $iegmsyuiekaayqqy * -1 . "\x70\170"; uyisqeuweamsqwgg: $egkakcquemweqoum[$ywcogicgakiqmesa] = $kweggiqywassoewa; $egkakcquemweqoum[$uyyeawaokwsoigkk] = $lwqumgsaiiooowqw; if (!($iegmsyuiekaayqqy === "\141\165\x74\x6f")) { goto icasgckmuawkaksg; } $iegmsyuiekaayqqy = "\60"; icasgckmuawkaksg: if (!($ymsweociooeskgwg === "\x61\165\164\x6f")) { goto aeywmsqkisycgqce; } $ymsweociooeskgwg = "\x30"; aeywmsqkisycgqce: $iegmsyuiekaayqqy = $this->awkcisaoyasicqwq("\164\x72\141\x6e\x73\154\x61\x74\145\x58", $iegmsyuiekaayqqy); $ymsweociooeskgwg = $this->awkcisaoyasicqwq("\164\x72\141\156\x73\154\141\x74\x65\131", $ymsweociooeskgwg); $rqeoqqgeggasimwi = "{$mcmaiqckgiuqayau}\x20\164\x72\141\156\x73\154\141\x74\145\130\50{$iegmsyuiekaayqqy}\51\40\x74\162\141\156\163\x6c\x61\164\x65\131\x28{$ymsweociooeskgwg}\51\x20{$rqeoqqgeggasimwi}"; goto cwkwkgkqasguwscg; mawsaauyquacosus: if ($egwaeiwuwuakeugo && $auiemywmioieumqi) { goto wwigiswokyqkamsu; } if ($egwaeiwuwuakeugo) { goto smmgkqeacswimyas; } $egkakcquemweqoum[$ywcogicgakiqmesa] = "\x30\x70\170"; goto kmwwamokwgagomye; smmgkqeacswimyas: $egkakcquemweqoum["\164\x6f\x70"] = "\65\60\x25"; $rqeoqqgeggasimwi = "\x74\x72\141\156\163\x6c\141\x74\x65\131\x28\x2d\65\60\x25\x29\x20{$rqeoqqgeggasimwi}"; kmwwamokwgagomye: if ($auiemywmioieumqi) { goto qquugwwesqswouyc; } $egkakcquemweqoum[$uyyeawaokwsoigkk] = "\60\160\170"; goto ewugkyumwuomukie; qquugwwesqswouyc: $egkakcquemweqoum["\x6c\x65\x66\164"] = "\x35\60\x25"; $rqeoqqgeggasimwi = "\164\x72\141\156\x73\154\141\x74\145\130\50\x2d\65\60\x25\51\40{$rqeoqqgeggasimwi}"; ewugkyumwuomukie: goto iqicwseckoykqowm; wwigiswokyqkamsu: $egkakcquemweqoum["\x74\157\160"] = "\x35\x30\x25"; $egkakcquemweqoum["\x6c\145\146\x74"] = "\65\60\x25"; $rqeoqqgeggasimwi = "\x74\162\141\x6e\x73\x6c\x61\164\x65\x28\55\65\x30\45\54\x20\x2d\x35\60\45\51\40{$rqeoqqgeggasimwi}"; iqicwseckoykqowm: cwkwkgkqasguwscg: $egkakcquemweqoum["\x74\x72\x61\156\163\146\x6f\162\155"] = $rqeoqqgeggasimwi; makqqsaegsesgquq: return $egkakcquemweqoum; } private function sywoiecuewkusuei($yqyousioqsoaouig) : float { if (!(null === $yqyousioqsoaouig)) { goto symwoekuwqcmowwo; } return 1; symwoekuwqcmowwo: if (isset($this->multiple[$yqyousioqsoaouig])) { goto koaeayomowaiywam; } $kkikuskasemkcygg = 1; if (!($oaesoigqgysugcsw = $this->wemcakmkkqkoyeow($yqyousioqsoaouig))) { goto emsuycioaeoeeeqo; } $kkikuskasemkcygg = min(1, $oaesoigqgysugcsw / $this->breakpoints[$yqyousioqsoaouig] ?? 1); emsuycioaeoeeeqo: $this->multiple[$yqyousioqsoaouig] = $kkikuskasemkcygg; koaeayomowaiywam: return $this->multiple[$yqyousioqsoaouig]; } protected function wemcakmkkqkoyeow($yqyousioqsoaouig, int $ggauoeuaesiymgee = 0) : int { $uoegiucegiomamuy = $this->contentSize["\x77\151\144\164\150"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $migimkookwymayqu = $this->contentSize["\x77\x69\x64\164\x68"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($migimkookwymayqu, $uoegiucegiomamuy); } protected function gauiuwiicosisakg($yqyousioqsoaouig, $ggauoeuaesiymgee = 0) : int { $aiyckuicisckwges = $this->contentSize["\150\x65\x69\147\150\x74"][$yqyousioqsoaouig] ?? $ggauoeuaesiymgee; $uumegessqcyuayoy = $this->contentSize["\150\145\151\x67\x68\164"][$this->qgwuyeagygomiiks(0)] ?? $ggauoeuaesiymgee; return (int) min($uumegessqcyuayoy, $aiyckuicisckwges); } protected function cogayqawswyasksk($eqgoocgaqwqcimie) : string { $iyqygqimawuycsyq = ''; if (!is_string($eqgoocgaqwqcimie)) { goto wqcquwuiqkqaoamo; } if (!preg_match("\x2f\50\160\x78\174\162\x65\155\x7c\145\x6d\174\45\x7c\166\x68\x7c\x76\x77\x7c\166\x6d\151\156\x7c\166\155\141\x78\174\x61\x75\164\157\51\44\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto ikwamukqumiokwkk; } $iyqygqimawuycsyq = $meyiiwcswqmuggyg[0]; ikwamukqumiokwkk: if (!($iyqygqimawuycsyq === $eqgoocgaqwqcimie)) { goto uueyawewomkuiiwc; } $iyqygqimawuycsyq = ''; uueyawewomkuiiwc: wqcquwuiqkqaoamo: return $iyqygqimawuycsyq; } protected function ooeaouwceyecskck($equckmqsamsmgcwy, $eqgoocgaqwqcimie, $eusockqasqqmoess, $ekiuyucoiagmscgy = null) { if (!$eqgoocgaqwqcimie) { goto syggoyqwycmmcuck; } $iyqygqimawuycsyq = $this->cogayqawswyasksk($equckmqsamsmgcwy); if (!($eusockqasqqmoess !== 1 && $iyqygqimawuycsyq !== "\45")) { goto csueasskicaaoaii; } $eqgoocgaqwqcimie *= $eusockqasqqmoess; csueasskicaaoaii: if (!is_callable($ekiuyucoiagmscgy)) { goto yyousguikogqkecs; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); yyousguikogqkecs: $eqgoocgaqwqcimie = (float) $eqgoocgaqwqcimie . $iyqygqimawuycsyq; syggoyqwycmmcuck: return $eqgoocgaqwqcimie; } protected function qgwuyeagygomiiks($momcykaoccoymeig, string $kuuiuigeacouwmaa = '') { $yygmoeguaqyumuui = array_keys($this->breakpoints); $eqgoocgaqwqcimie = $yygmoeguaqyumuui[$momcykaoccoymeig] ?? null; if (!($eqgoocgaqwqcimie === null)) { goto owwwikwqsyakweeq; } $eqgoocgaqwqcimie = $momcykaoccoymeig; owwwikwqsyakweeq: $mcmggciwccagmumi = array_search($eqgoocgaqwqcimie, $yygmoeguaqyumuui, true); $acuayeeoiwokyomo = 0; switch ($kuuiuigeacouwmaa) { case "\x70\162\145\166": $acuayeeoiwokyomo = -1; goto awmyoukmqymausgu; case "\156\145\x78\x74": $acuayeeoiwokyomo = 1; goto awmyoukmqymausgu; } eicuoesagiuykmos: awmyoukmqymausgu: return $yygmoeguaqyumuui[$mcmggciwccagmumi + $acuayeeoiwokyomo] ?? null; } protected function ammywaiaowqmcssa($yqyousioqsoaouig) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->amkiaqeamgywsygm() && in_array($yqyousioqsoaouig, [4, "\64", "\155"], true)) { goto oukacgcyoiggqosq; } if ($eiicaiwgqkgsekce->amkiaqeamgywsygm()) { goto eqkaikmaegscweqq; } return true; eqkaikmaegscweqq: goto usiiuuommggemcke; oukacgcyoiggqosq: return true; usiiuuommggemcke: return false; } protected abstract function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string; protected abstract function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string; protected abstract function uaskqakcsowgmccg($momcykaoccoymeig); protected abstract function wgogsacggwigyuee($momcykaoccoymeig); protected abstract function yiiekkiwayooaqiy($weyumiemecumqwiy) : string; protected abstract function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array; protected abstract function ywogaocmueoimkuq($weyumiemecumqwiy) : bool; protected abstract function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null); protected abstract function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool; protected abstract function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig); protected abstract function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array; protected abstract function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array; }
