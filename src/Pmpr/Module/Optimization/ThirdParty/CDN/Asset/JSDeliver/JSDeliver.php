<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8f0d0713             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\x68\x74\x74\x70\163\72\x2f\x2f\x63\x64\156\x2e\152\x73\x64\145\154\151\166\162\56\x6e\145\164\57"; const qswqmkwmqmggomug = "\x68\164\x74\160\x73\x3a\x2f\x2f\144\141\164\x61\x2e\x6a\163\144\145\154\151\166\x72\x2e\x63\157\155\57\x76\x31\x2f\x6c\157\157\153\x75\160\x2f\x68\141\163\150\57"; const iqcyaamgiewkaowe = "\57\x5c\57\134\x2a\x5b\x5c\x73\134\123\x5d\x2a\x3f\x5c\x2a\134\x2f\174\134\x2f\134\57\x2e\x2a\x3f\x28\77\72\134\x6e\x7c\x24\x29\57"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\171\161\x67\151\161\x71\x61\x79\141\155\171\x65\x65\x6d\165\165"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\141\x73\161\x77\161\x61\x71\157\167\147\x65\x79\x79\x61\x79\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto siuyaemoiiqyoggo; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); siuyaemoiiqyoggo: cycwgukowsksmkyc: } kuyqusuycscumuek: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto qioswooukgoowsuc; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); qioswooukgoowsuc: qycsooiomiugimqc: } koemwyegoqwiikom: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto yeaqsiqgakskoykg; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\57"); if (false !== $kuuiuigeacouwmaa) { goto ggoimgeeuugseiwk; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto gimquiiwucueoqkw; ggoimgeeuugseiwk: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\x74\164\160\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); gimquiiwucueoqkw: if (!$ykscweuoqwqcmsmo) { goto uookseqsmsqgweuy; } $mgeemcksyiuqaemy = hash("\163\150\x61\x32\65\66", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto mwwygasiagaqsimo; } if (preg_match("\x2f\167\x70\55\143\157\156\164\x65\x6e\164\134\57\160\154\165\147\x69\156\163\x5c\57\50\77\74\x70\x6c\165\147\x69\x6e\76\x5b\x5e\x5c\57\x5d\x2a\x29\134\57\50\77\x3c\146\151\154\x65\x3e\56\52\x29\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto kisccmsaieigisiu; } if (!preg_match("\57\x77\160\x2d\x63\157\156\x74\x65\156\x74\x5c\x2f\x74\150\145\155\x65\163\x5c\57\50\x3f\x3c\x74\x68\x65\155\x65\x3e\x5b\x5e\x5c\57\x5d\x2a\x29\134\x2f\50\77\74\146\151\154\145\x3e\x2e\x2a\x29\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto ugmukcwgcioqgywy; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto cksomiiqscosigke; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto gcogomgmqcgkeceg; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\57\164\150\145\155\145\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\x2f{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto ikqagqacuwcgwmqy; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; ikqagqacuwcgwmqy: gcogomgmqcgkeceg: cksomiiqscosigke: ugmukcwgcioqgywy: goto euoscysqgugsqewc; kisccmsaieigisiu: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto iyyaiuccouqowyga; } $plugin_file = ABSPATH . "\167\x70\55\143\157\156\164\x65\x6e\x74\57\x70\x6c\165\x67\151\x6e\x73\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\160\x68\160"; if (file_exists($plugin_file)) { goto iauwkeeaqsgweeoo; } $php_files = glob(ABSPATH . "\167\x70\x2d\143\x6f\x6e\x74\145\156\x74\57\160\x6c\165\147\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\x2a\x2e\x70\x68\x70"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto ywoyioqqyuocoygk; } goto mwqcykaeywsmoumm; ywoyioqqyuocoygk: awgmyaycugswmwae: } mwqcykaeywsmoumm: goto aycqgowuwagcgque; iauwkeeaqsgweeoo: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); aycqgowuwagcgque: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto iwcmgioeaiyuacwi; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\x2f\160\154\x75\x67\x69\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\57\x74\141\x67\163\x2f{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\57{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto icuukwkwqeoogyae; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; icuukwkwqeoogyae: iwcmgioeaiyuacwi: iyyaiuccouqowyga: euoscysqgugsqewc: goto wucacaegysmiusai; mwwygasiagaqsimo: if (!("\127\x6f\x72\x64\120\162\x65\x73\x73\57\x57\157\162\144\x50\x72\145\x73\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto eimouyomcoqkmaae; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); eimouyomcoqkmaae: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[Constants::NAME]}\100{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto kkwqmoeeqygoimwg; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; kkwqmoeeqygoimwg: wucacaegysmiusai: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto eeomcmuiqwgwwuqk; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\155\151\156", strrpos($myeuaywkqeuqowes, "\56"), 0); eeomcmuiqwgwwuqk: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\170\164"] !== $gqqycaoyaweqigmi["\x65\170\x74"])) { goto mseokuecmeoyoggk; } $myeuaywkqeuqowes = ''; mseokuecmeoyoggk: uookseqsmsqgweuy: yeaqsiqgakskoykg: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\xa", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto esgyqksmcukeuwyk; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\163\x68\x61\x32\65\x36"] = $mgeemcksyiuqaemy; esgyqksmcukeuwyk: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto iigmgswcogqemgao; } return false; iigmgswcogqemgao: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\163\x68\x61\x32\65\66", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\x2f\57")) { goto aeockieewgkequae; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\x2f"); goto omqyuuomwywmqeiq; aeockieewgkequae: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto ycaqooeeseougumo; } $acqcekoeswseswws = $ogomymegcoacqisg; goto eceeoiwuagocweus; ycaqooeeseougumo: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); eceeoiwuagocweus: omqyuuomwywmqeiq: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\x68\x65\x61\144\x65\x72\163" => ["\x55\x73\145\x72\x2d\101\147\x65\156\x74" => "\120\x4d\120\x52\x20\x4f\160\x74\x69\x6d\151\x7a\x61\x74\151\157\156\x20\x4d\x6f\144\x75\154\x65\57" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }
