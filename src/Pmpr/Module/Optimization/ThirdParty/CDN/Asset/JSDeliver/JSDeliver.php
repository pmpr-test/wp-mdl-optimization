<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b1fa9ac4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; class JSDeliver extends Container { const uaiimqkkiecgmkwm = "\x68\x74\x74\160\163\x3a\x2f\57\x63\x64\156\56\x6a\x73\x64\145\154\x69\x76\x72\56\x6e\145\164\x2f"; const qswqmkwmqmggomug = "\150\x74\x74\x70\163\x3a\57\x2f\x64\141\x74\141\x2e\x6a\163\144\145\x6c\x69\166\x72\56\143\157\155\x2f\x76\61\57\x6c\x6f\x6f\x6b\165\x70\x2f\x68\141\163\x68\57"; const iqcyaamgiewkaowe = "\57\134\x2f\x5c\52\x5b\x5c\x73\x5c\x53\x5d\x2a\x3f\134\x2a\x5c\x2f\x7c\x5c\57\x5c\x2f\x2e\52\77\x28\x3f\x3a\x5c\156\174\44\51\57"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\x69\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\x67\151\x71\x71\x61\x79\x61\x6d\171\x65\x65\x6d\165\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\163\x71\167\x71\141\161\157\x77\x67\x65\171\171\x61\x79\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oammesyieqmwuwyi = $gcskoooiimggowew->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $gcskoooiimggowew::gycwocuuococmiqw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::iocouekmygsaocuo)->wegeyaguowmkqiac()]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->waecsyqmwascmqoa($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if ($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq))) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); } } } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (time() - strtotime($gcskoooiimggowew->waecsyqmwascmqoa($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } } } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if ($wsqkocmmsoiquqwm) { $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\57"); if (false !== $kuuiuigeacouwmaa) { $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\164\x74\160\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); } else { $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); } if ($ykscweuoqwqcmsmo) { $mgeemcksyiuqaemy = hash("\163\150\x61\62\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { if ("\x57\x6f\x72\144\120\162\145\163\163\57\127\157\162\144\x50\x72\x65\x73\163" === $icwicymcioeyeyek[Constants::NAME]) { $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\100{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } else { if (preg_match("\57\167\160\x2d\x63\x6f\156\164\145\x6e\x74\x5c\57\160\x6c\x75\147\151\x6e\163\x5c\57\50\x3f\74\x70\154\165\x67\x69\156\76\133\x5e\134\57\135\52\51\134\x2f\x28\x3f\74\x66\151\x6c\x65\x3e\56\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]) { $plugin_file = ABSPATH . "\167\160\x2d\x63\x6f\x6e\x74\x65\156\x74\57\x70\x6c\165\x67\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2e\x70\150\x70"; if (file_exists($plugin_file)) { $muqcqaqwsaoagykg = get_plugin_data($plugin_file); } else { $php_files = glob(ABSPATH . "\167\160\55\143\157\x6e\164\x65\156\164\57\160\x6c\x75\147\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\52\x2e\160\150\x70"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if ($muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { break; } } } if ($muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\57\x70\x6c\x75\147\151\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\x74\141\x67\163\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } } } else { if (preg_match("\x2f\x77\x70\x2d\x63\157\x6e\x74\145\156\164\x5c\57\164\150\145\x6d\x65\x73\x5c\57\x28\x3f\x3c\x74\150\x65\155\x65\x3e\x5b\x5e\134\57\135\52\51\134\57\50\77\74\x66\x69\x6c\x65\x3e\56\52\x29\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]) { $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if ($mumucmmgemqwqiia->exists()) { $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\160\57\x74\x68\x65\x6d\x65\163\57{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if ($this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { $myeuaywkqeuqowes = $mckmqeqaekwkwems; } } } } } } if (!$this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\x6d\151\x6e", strrpos($myeuaywkqeuqowes, "\56"), 0); } $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if ($wuayakmyggcomiuy["\x65\170\x74"] !== $gqqycaoyaweqigmi["\145\170\x74"]) { $myeuaywkqeuqowes = ''; } } } return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if ($ykscweuoqwqcmsmo) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\x61\62\65\x36"] = $mgeemcksyiuqaemy; } return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200) { return false; } $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\x73\x68\x61\62\x35\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\x2f\x2f")) { $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); } else { $acqcekoeswseswws = $ogomymegcoacqisg; } } else { $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); } return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\x65\x61\144\x65\162\x73" => ["\125\x73\145\x72\x2d\x41\147\x65\156\164" => "\x50\x4d\120\122\x20\117\160\164\151\155\x69\x7a\141\164\151\157\156\x20\115\x6f\x64\165\x6c\x65\57" . $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this)]]; } }
