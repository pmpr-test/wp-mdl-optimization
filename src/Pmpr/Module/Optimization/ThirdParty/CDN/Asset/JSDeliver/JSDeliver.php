<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76d1d04df             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\x74\x74\x70\163\72\x2f\57\x63\144\x6e\x2e\x6a\163\x64\x65\x6c\151\x76\x72\x2e\156\x65\x74\x2f"; const qswqmkwmqmggomug = "\150\x74\164\x70\163\x3a\x2f\x2f\x64\141\x74\141\56\152\x73\144\x65\x6c\x69\166\x72\x2e\x63\x6f\x6d\57\166\x31\57\x6c\157\157\153\x75\x70\57\x68\x61\x73\150\x2f"; const iqcyaamgiewkaowe = "\x2f\134\x2f\134\52\133\x5c\x73\134\123\x5d\52\x3f\134\52\134\x2f\174\x5c\x2f\x5c\57\56\52\77\x28\77\72\x5c\x6e\174\44\x29\x2f"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\156\151\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\171\161\147\x69\x71\x71\141\171\141\x6d\x79\x65\145\155\165\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\x73\x71\x77\161\141\161\157\x77\x67\145\x79\x79\x61\171\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto cqemkecywkkwaaii; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); cqemkecywkkwaaii: kmiqskugkmaiugae: } iuaeeeeggkikuiig: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto ieoiygycmseqmmgc; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); ieoiygycmseqmmgc: qaikeckkiwasykwk: } wcioaoeiiawwqqqq: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto ekmogkwmcqsykgsq; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\x2f"); if (false !== $kuuiuigeacouwmaa) { goto gkuwmiusoqwesqoo; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\x74\x74\160\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); wmsiqkyqsiysgcyy: if (!$ykscweuoqwqcmsmo) { goto aiwygewkmigcwusw; } $mgeemcksyiuqaemy = hash("\163\x68\141\x32\65\x36", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto omgkuuyoiugcymmy; } if (preg_match("\x2f\167\x70\55\x63\x6f\x6e\164\x65\x6e\x74\134\57\x70\x6c\x75\x67\x69\x6e\163\x5c\x2f\50\77\74\x70\x6c\x75\147\x69\156\x3e\133\x5e\x5c\57\x5d\52\51\x5c\x2f\x28\x3f\74\x66\151\x6c\145\76\56\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto uiqycwuommmmuowy; } if (!preg_match("\x2f\167\160\x2d\x63\x6f\x6e\x74\x65\x6e\x74\x5c\57\x74\x68\x65\x6d\x65\x73\134\x2f\x28\x3f\x3c\164\150\145\155\145\76\x5b\x5e\134\x2f\x5d\52\51\x5c\57\x28\77\74\146\151\154\x65\76\56\52\51\57\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto iqamwyasyoqsugeu; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto oqsecqsucukywaee; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto keewmqmgqegumiwa; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\160\x2f\164\150\145\x6d\x65\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto eqemoayymokeqaqi; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; eqemoayymokeqaqi: keewmqmgqegumiwa: oqsecqsucukywaee: iqamwyasyoqsugeu: goto moqcomgmwiamuomq; uiqycwuommmmuowy: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto cykaikwsaskgeemo; } $plugin_file = ABSPATH . "\167\160\55\x63\157\156\x74\145\156\x74\57\x70\x6c\165\x67\x69\x6e\163\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\x70\x68\x70"; if (file_exists($plugin_file)) { goto omekuqkuugyocmoc; } $php_files = glob(ABSPATH . "\167\160\x2d\x63\x6f\156\164\x65\x6e\164\x2f\x70\x6c\x75\x67\x69\x6e\163\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\52\56\160\150\x70"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto qswqmgiwiyyqwioa; } goto wqieuwguumokgyqg; qswqmgiwiyyqwioa: aueiggyawkmkamum: } wqieuwguumokgyqg: goto giuswooyckooaoms; omekuqkuugyocmoc: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); giuswooyckooaoms: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto miqmoasmioksggkm; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\160\x2f\x70\x6c\165\x67\x69\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x74\x61\x67\163\x2f{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto uogkcsaewswoaosw; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; uogkcsaewswoaosw: miqmoasmioksggkm: cykaikwsaskgeemo: moqcomgmwiamuomq: goto kumuckkicykgwqqm; omgkuuyoiugcymmy: if (!("\127\x6f\x72\144\x50\162\145\x73\163\57\127\157\x72\x64\x50\x72\x65\x73\163" === $icwicymcioeyeyek[Constants::NAME])) { goto ysggiwiksocomkek; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); ysggiwiksocomkek: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\100{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto wkqwywgikoyqkyeg; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; wkqwywgikoyqkyeg: kumuckkicykgwqqm: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto sguyyaygwyikaggk; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\155\x69\x6e", strrpos($myeuaywkqeuqowes, "\56"), 0); sguyyaygwyikaggk: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\145\x78\164"] !== $gqqycaoyaweqigmi["\145\170\x74"])) { goto ayyyeiyaosoacoqm; } $myeuaywkqeuqowes = ''; ayyyeiyaosoacoqm: aiwygewkmigcwusw: ekmogkwmcqsykgsq: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto ksoawacwkgasqgmk; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\x61\x32\x35\66"] = $mgeemcksyiuqaemy; ksoawacwkgasqgmk: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto yqeqouqemksasmqc; } return false; yqeqouqemksasmqc: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\x73\150\141\x32\x35\x36", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\x2f")) { goto emioyucskiowqumg; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\57"); goto jkaemsuwyyoamwim; emioyucskiowqumg: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto wgaqkacekoyiwggi; } $acqcekoeswseswws = $ogomymegcoacqisg; goto cscskwugoamcmqyu; wgaqkacekoyiwggi: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); cscskwugoamcmqyu: jkaemsuwyyoamwim: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\x68\145\141\144\x65\162\163" => ["\x55\x73\145\162\55\101\x67\145\156\x74" => "\x50\115\x50\122\x20\117\x70\x74\x69\x6d\151\x7a\141\164\x69\x6f\x6e\x20\115\x6f\x64\x75\154\x65\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
