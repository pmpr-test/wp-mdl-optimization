<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eafa4785061             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\x74\164\160\163\72\x2f\57\x63\x64\x6e\56\x6a\163\x64\145\154\x69\166\162\x2e\156\x65\x74\x2f"; const qswqmkwmqmggomug = "\150\x74\x74\160\x73\72\x2f\57\x64\141\x74\141\x2e\x6a\163\144\145\154\151\166\x72\56\143\157\x6d\x2f\x76\61\57\x6c\x6f\x6f\153\165\160\x2f\x68\x61\x73\x68\57"; const iqcyaamgiewkaowe = "\57\134\x2f\134\52\x5b\134\x73\x5c\x53\135\52\77\x5c\52\134\x2f\174\134\57\134\x2f\x2e\52\77\50\x3f\72\134\156\174\x24\x29\57"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\x67\151\161\161\x61\171\141\155\171\145\145\x6d\x75\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\163\161\167\x71\141\161\x6f\167\x67\145\171\171\141\x79\167"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto siuyaemoiiqyoggo; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); siuyaemoiiqyoggo: cycwgukowsksmkyc: } kuyqusuycscumuek: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto qioswooukgoowsuc; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); qioswooukgoowsuc: qycsooiomiugimqc: } koemwyegoqwiikom: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto yeaqsiqgakskoykg; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\x2f\x2f"); if (false !== $kuuiuigeacouwmaa) { goto ggoimgeeuugseiwk; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\x74\x74\x70\72" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); gimquiiwucueoqkw: if (!$ykscweuoqwqcmsmo) { goto uookseqsmsqgweuy; } $mgeemcksyiuqaemy = hash("\163\150\141\62\x35\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto mwwygasiagaqsimo; } if (preg_match("\x2f\x77\160\55\x63\157\x6e\164\x65\156\x74\134\x2f\160\x6c\x75\147\151\x6e\x73\134\x2f\x28\77\74\160\154\x75\x67\151\156\76\x5b\x5e\134\x2f\135\52\x29\x5c\57\x28\x3f\74\146\151\154\x65\76\x2e\52\x29\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto kisccmsaieigisiu; } if (!preg_match("\x2f\167\160\x2d\x63\x6f\x6e\164\x65\x6e\x74\134\57\x74\x68\x65\x6d\x65\x73\134\x2f\50\77\x3c\x74\x68\145\x6d\145\x3e\133\136\x5c\x2f\x5d\52\51\x5c\x2f\50\77\74\x66\x69\154\x65\x3e\x2e\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto ugmukcwgcioqgywy; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto cksomiiqscosigke; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto gcogomgmqcgkeceg; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\57\164\x68\145\155\145\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto ikqagqacuwcgwmqy; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; ikqagqacuwcgwmqy: gcogomgmqcgkeceg: cksomiiqscosigke: ugmukcwgcioqgywy: goto euoscysqgugsqewc; kisccmsaieigisiu: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto iyyaiuccouqowyga; } $plugin_file = ABSPATH . "\167\x70\55\143\157\x6e\x74\x65\x6e\x74\57\160\154\x75\147\151\x6e\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\x70\150\x70"; if (file_exists($plugin_file)) { goto iauwkeeaqsgweeoo; } $php_files = glob(ABSPATH . "\x77\x70\55\143\157\156\x74\145\156\x74\x2f\160\x6c\x75\147\x69\x6e\x73\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x2a\x2e\x70\x68\x70"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto ywoyioqqyuocoygk; } goto mwqcykaeywsmoumm; ywoyioqqyuocoygk: awgmyaycugswmwae: } mwqcykaeywsmoumm: goto aycqgowuwagcgque; iauwkeeaqsgweeoo: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); aycqgowuwagcgque: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto iwcmgioeaiyuacwi; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\x2f\160\154\x75\x67\x69\156\163\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\164\141\147\x73\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto icuukwkwqeoogyae; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; icuukwkwqeoogyae: iwcmgioeaiyuacwi: iyyaiuccouqowyga: euoscysqgugsqewc: goto wucacaegysmiusai; mwwygasiagaqsimo: if (!("\x57\x6f\x72\x64\120\162\145\x73\x73\x2f\127\157\162\x64\120\162\x65\163\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto eimouyomcoqkmaae; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); eimouyomcoqkmaae: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\57{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto kkwqmoeeqygoimwg; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; kkwqmoeeqygoimwg: wucacaegysmiusai: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto eeomcmuiqwgwwuqk; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\155\151\156", strrpos($myeuaywkqeuqowes, "\56"), 0); eeomcmuiqwgwwuqk: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\145\170\x74"] !== $gqqycaoyaweqigmi["\145\x78\164"])) { goto mseokuecmeoyoggk; } $myeuaywkqeuqowes = ''; mseokuecmeoyoggk: uookseqsmsqgweuy: yeaqsiqgakskoykg: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto esgyqksmcukeuwyk; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\163\x68\141\x32\65\x36"] = $mgeemcksyiuqaemy; esgyqksmcukeuwyk: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto iigmgswcogqemgao; } return false; iigmgswcogqemgao: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\x73\x68\x61\x32\x35\x36", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\57\57")) { goto aeockieewgkequae; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto omqyuuomwywmqeiq; aeockieewgkequae: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto ycaqooeeseougumo; } $acqcekoeswseswws = $ogomymegcoacqisg; goto eceeoiwuagocweus; ycaqooeeseougumo: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); eceeoiwuagocweus: omqyuuomwywmqeiq: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\x68\x65\x61\144\145\x72\163" => ["\x55\x73\x65\x72\x2d\x41\147\145\156\x74" => "\x50\115\x50\122\40\x4f\x70\164\151\155\x69\172\x61\x74\x69\x6f\x6e\40\x4d\157\144\x75\154\x65\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
