<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b5b18721             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\150\x74\x74\160\163\72\57\57\x63\x64\x6e\56\152\163\x64\x65\154\x69\166\162\56\x6e\x65\164\57"; const qswqmkwmqmggomug = "\x68\164\x74\160\163\72\x2f\x2f\x64\x61\x74\141\56\x6a\x73\x64\145\x6c\151\166\162\x2e\143\x6f\155\x2f\x76\x31\x2f\154\x6f\157\x6b\165\x70\x2f\150\x61\x73\x68\57"; const iqcyaamgiewkaowe = "\57\134\x2f\x5c\52\x5b\x5c\163\x5c\x53\135\x2a\77\x5c\52\x5c\57\174\x5c\57\134\57\56\52\77\x28\77\x3a\134\156\174\x24\51\x2f"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\156\151\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\x67\x69\x71\161\x61\171\141\x6d\171\145\x65\x6d\165\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\163\161\x77\x71\141\x71\157\167\x67\x65\171\x79\141\x79\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto mugeiwyysiemwaym; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); mugeiwyysiemwaym: awimwukcyiceackk: } ycueoqkeakismiqw: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto cyymeyomuakqakwo; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); cyymeyomuakqakwo: cquikgykuscqmigw: } euymeegkukskiowq: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto omekuqkuugyocmoc; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\x2f"); if (false !== $kuuiuigeacouwmaa) { goto uwscegkmmumymoaq; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto gkwoqoeaecgkymeu; uwscegkmmumymoaq: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\164\x74\x70\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); gkwoqoeaecgkymeu: if (!$ykscweuoqwqcmsmo) { goto qswqmgiwiyyqwioa; } $mgeemcksyiuqaemy = hash("\x73\x68\x61\x32\65\x36", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto ysggiwiksocomkek; } if (preg_match("\x2f\x77\x70\55\143\x6f\156\x74\x65\x6e\164\134\57\x70\x6c\x75\x67\x69\x6e\x73\x5c\x2f\x28\x3f\x3c\160\x6c\165\147\x69\156\76\x5b\x5e\134\57\135\52\x29\134\x2f\50\x3f\74\x66\x69\x6c\x65\76\x2e\x2a\51\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto gkuwmiusoqwesqoo; } if (!preg_match("\57\167\160\x2d\143\x6f\156\x74\145\156\164\134\57\164\150\145\155\x65\163\134\57\50\77\x3c\x74\x68\145\155\145\76\133\x5e\x5c\x2f\135\52\51\134\x2f\50\x3f\74\x66\151\154\x65\x3e\x2e\52\x29\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto ieoiygycmseqmmgc; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto qaikeckkiwasykwk; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto wcioaoeiiawwqqqq; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\160\x2f\x74\150\x65\x6d\x65\x73\57{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto cqemkecywkkwaaii; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; cqemkecywkkwaaii: wcioaoeiiawwqqqq: qaikeckkiwasykwk: ieoiygycmseqmmgc: goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto kmiqskugkmaiugae; } $plugin_file = ABSPATH . "\167\x70\x2d\143\x6f\x6e\164\145\x6e\164\x2f\x70\x6c\x75\147\x69\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2e\x70\150\160"; if (file_exists($plugin_file)) { goto qgyaeoqgekocwkmw; } $php_files = glob(ABSPATH . "\x77\x70\55\143\157\x6e\164\x65\x6e\164\x2f\160\154\x75\x67\x69\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\x2a\x2e\160\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto yukacyeckkwagusw; } goto ewoqyogcaksucksk; yukacyeckkwagusw: wgeueumgacuuuama: } ewoqyogcaksucksk: goto sieykcqauaygcais; qgyaeoqgekocwkmw: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); sieykcqauaygcais: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto iuaeeeeggkikuiig; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\x2f\x70\154\165\x67\151\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\164\x61\x67\x73\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto simkiasocoimioew; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; simkiasocoimioew: iuaeeeeggkikuiig: kmiqskugkmaiugae: wmsiqkyqsiysgcyy: goto wkqwywgikoyqkyeg; ysggiwiksocomkek: if (!("\127\x6f\162\x64\x50\x72\145\x73\163\57\127\x6f\x72\x64\120\x72\145\163\163" === $icwicymcioeyeyek[Constants::NAME])) { goto ouaoyqugwsagkqaa; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); ouaoyqugwsagkqaa: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto auaywaskqooasiuq; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; auaywaskqooasiuq: wkqwywgikoyqkyeg: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto wqieuwguumokgyqg; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\x6d\x69\156", strrpos($myeuaywkqeuqowes, "\56"), 0); wqieuwguumokgyqg: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\145\170\164"] !== $gqqycaoyaweqigmi["\x65\x78\x74"])) { goto aueiggyawkmkamum; } $myeuaywkqeuqowes = ''; aueiggyawkmkamum: qswqmgiwiyyqwioa: omekuqkuugyocmoc: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto giuswooyckooaoms; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\x61\x32\65\x36"] = $mgeemcksyiuqaemy; giuswooyckooaoms: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto uogkcsaewswoaosw; } return false; uogkcsaewswoaosw: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\150\141\62\x35\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { goto eqemoayymokeqaqi; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto keewmqmgqegumiwa; eqemoayymokeqaqi: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto miqmoasmioksggkm; } $acqcekoeswseswws = $ogomymegcoacqisg; goto cykaikwsaskgeemo; miqmoasmioksggkm: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); cykaikwsaskgeemo: keewmqmgqegumiwa: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\x65\141\144\x65\162\163" => ["\x55\x73\145\x72\x2d\101\x67\145\x6e\164" => "\x50\x4d\120\122\40\x4f\160\x74\151\x6d\x69\x7a\141\164\151\x6f\156\40\x4d\x6f\x64\x75\x6c\145\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
