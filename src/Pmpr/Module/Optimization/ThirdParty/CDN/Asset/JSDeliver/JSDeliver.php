<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e823d067d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\x74\164\x70\x73\x3a\57\x2f\143\x64\156\56\x6a\163\x64\x65\x6c\151\166\x72\x2e\156\145\x74\x2f"; const qswqmkwmqmggomug = "\150\x74\x74\160\x73\x3a\x2f\57\144\x61\164\x61\x2e\152\163\x64\x65\x6c\151\x76\162\x2e\x63\x6f\x6d\x2f\x76\61\x2f\154\157\x6f\153\165\160\57\150\141\163\x68\57"; const iqcyaamgiewkaowe = "\57\x5c\57\134\52\x5b\x5c\163\x5c\x53\135\52\x3f\x5c\x2a\134\x2f\x7c\x5c\57\134\x2f\x2e\x2a\x3f\50\77\72\134\156\x7c\x24\x29\57"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\171\x71\x67\x69\x71\161\x61\171\x61\155\171\x65\x65\155\165\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\163\161\167\161\141\161\157\167\x67\x65\x79\171\141\x79\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto qmgueimkwqmsakis; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); qmgueimkwqmsakis: iiuuwuwcwamqegey: } csucwwqcsaymyiuk: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto kuyqusuycscumuek; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); kuyqusuycscumuek: uscissuaiyuiukea: } ooqmaweuqmcmwsuk: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto mwwygasiagaqsimo; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\57"); if (false !== $kuuiuigeacouwmaa) { goto cycwgukowsksmkyc; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto siuyaemoiiqyoggo; cycwgukowsksmkyc: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\164\164\160\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); siuyaemoiiqyoggo: if (!$ykscweuoqwqcmsmo) { goto euoscysqgugsqewc; } $mgeemcksyiuqaemy = hash("\x73\150\141\62\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto gcogomgmqcgkeceg; } if (preg_match("\x2f\x77\160\55\x63\x6f\x6e\x74\145\156\164\134\57\160\x6c\165\147\151\x6e\x73\x5c\x2f\50\x3f\x3c\x70\x6c\165\x67\151\x6e\x3e\133\136\134\57\135\x2a\51\134\x2f\50\77\74\146\x69\x6c\145\x3e\56\x2a\x29\57\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto iyyaiuccouqowyga; } if (!preg_match("\x2f\167\160\55\143\x6f\156\164\x65\156\164\134\x2f\x74\x68\x65\x6d\x65\x73\134\57\50\77\x3c\x74\x68\145\x6d\x65\x3e\133\136\134\x2f\135\52\x29\134\57\x28\x3f\74\x66\x69\x6c\145\x3e\x2e\52\51\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto iwcmgioeaiyuacwi; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto icuukwkwqeoogyae; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto aycqgowuwagcgque; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\57\164\150\145\x6d\145\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto iauwkeeaqsgweeoo; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; iauwkeeaqsgweeoo: aycqgowuwagcgque: icuukwkwqeoogyae: iwcmgioeaiyuacwi: goto ikqagqacuwcgwmqy; iyyaiuccouqowyga: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto ywoyioqqyuocoygk; } $plugin_file = ABSPATH . "\167\160\55\143\x6f\156\x74\145\156\164\57\x70\x6c\x75\147\x69\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2e\160\150\160"; if (file_exists($plugin_file)) { goto eimouyomcoqkmaae; } $php_files = glob(ABSPATH . "\x77\x70\55\x63\x6f\156\164\x65\x6e\164\57\x70\x6c\165\147\x69\x6e\x73\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\x2a\x2e\160\150\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto gimquiiwucueoqkw; } goto qioswooukgoowsuc; gimquiiwucueoqkw: ggoimgeeuugseiwk: } qioswooukgoowsuc: goto kkwqmoeeqygoimwg; eimouyomcoqkmaae: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); kkwqmoeeqygoimwg: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto awgmyaycugswmwae; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\57\160\154\165\x67\x69\156\x73\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\164\x61\x67\x73\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto mwqcykaeywsmoumm; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; mwqcykaeywsmoumm: awgmyaycugswmwae: ywoyioqqyuocoygk: ikqagqacuwcgwmqy: goto cksomiiqscosigke; gcogomgmqcgkeceg: if (!("\x57\x6f\x72\x64\x50\162\145\x73\x73\57\x57\x6f\x72\144\x50\x72\x65\x73\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto koemwyegoqwiikom; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); koemwyegoqwiikom: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto qycsooiomiugimqc; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; qycsooiomiugimqc: cksomiiqscosigke: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto ugmukcwgcioqgywy; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\x2e\155\151\x6e", strrpos($myeuaywkqeuqowes, "\56"), 0); ugmukcwgcioqgywy: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\145\x78\x74"] !== $gqqycaoyaweqigmi["\x65\x78\x74"])) { goto kisccmsaieigisiu; } $myeuaywkqeuqowes = ''; kisccmsaieigisiu: euoscysqgugsqewc: mwwygasiagaqsimo: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\xa", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto wucacaegysmiusai; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\150\141\62\x35\x36"] = $mgeemcksyiuqaemy; wucacaegysmiusai: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto eeomcmuiqwgwwuqk; } return false; eeomcmuiqwgwwuqk: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\150\x61\62\x35\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { goto yeaqsiqgakskoykg; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto esgyqksmcukeuwyk; yeaqsiqgakskoykg: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto mseokuecmeoyoggk; } $acqcekoeswseswws = $ogomymegcoacqisg; goto uookseqsmsqgweuy; mseokuecmeoyoggk: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); uookseqsmsqgweuy: esgyqksmcukeuwyk: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\150\145\141\144\145\162\x73" => ["\x55\163\x65\162\x2d\101\x67\145\x6e\x74" => "\120\x4d\x50\x52\40\117\160\x74\x69\x6d\151\172\141\x74\151\x6f\x6e\40\x4d\157\144\x75\x6c\x65\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
