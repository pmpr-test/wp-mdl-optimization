<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758114e5f226             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; class SR7 extends Common { protected $useMultiple = ["\154\x68" => "\x72\x6f\165\x6e\144", "\x70\157\x73\56\170" => "\x72\157\165\156\144", "\160\157\163\56\171" => "\162\x6f\x75\x6e\x64", "\x73\x69\x7a\145\x2e\167" => "\x72\157\165\x6e\x64", "\163\x69\172\x65\x2e\x68" => "\x72\x6f\165\x6e\x64", "\146\x6f\x6e\164\56\x6c\163" => null, "\x66\x6f\x6e\x74\x2e\x73\151\172\x65" => "\x72\157\x75\156\x64"]; protected array $useSizes = []; protected int $level = 4; protected function qiccuiwooiquycsg() { $this->type = "\x73\x72\x37\x2d\155\x6f\x64\x75\154\145"; $eyagkkkqkwcuygso = $this->slider->get_params(); $this->useSizes = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\165\123\151\172\145", null, []); $this->level = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x6c\x65\166\x65\154", null, 4); } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy[Constants::gouqcwikiiygyasc] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if ($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie) && isset($eqgoocgaqwqcimie[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; } return $eqgoocgaqwqcimie; } public function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return $this->useSizes[$yqyousioqsoaouig] && !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== "\x23\x61"; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig + 1]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig - 1]; } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return "\x73\154\x69\144\145\142\x67" === $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\x75\142\x74\171\160\x65"); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ["\x6d\x61\x72\147\x69\156" => "\141\x75\164\157", "\x64\151\x73\x70\154\x61\171" => "\142\154\x6f\x63\x6b", "\160\157\x73\151\x74\151\x6f\156" => "\162\145\x6c\141\x74\x69\x76\x65"]; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case "\x73\164\x61\156\144\141\x72\144": $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\x7a\x65\56\x77\151\x64\164\150", $yqyousioqsoaouig, "\141\x75\164\x6f"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\151\x7a\x65\56\150\x65\x69\147\x68\x74", $yqyousioqsoaouig, "\x61\165\164\157"); $aqiccywoiqiskwaw = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\x7a\x65\x2e\146\165\x6c\x6c\x57\151\x64\x74\x68", null, true); $kisgwkkagogawumc = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\172\x65\x2e\x66\x75\x6c\154\x48\x65\x69\147\x68\x74"); $eygasqqkgouqiuqk["\155\x61\x78\55\150\x65\151\x67\150\164"] = $cswemwoyesycwkuq; if (!$kisgwkkagogawumc) { $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if ($cwugisscoiasuuyg < $cswemwoyesycwkuq) { $cswemwoyesycwkuq = "\143\x61\x6c\x63\50\x31\x30\60\x76\167\40\x2a\x20{$cwugisscoiasuuyg}\51"; } } $eygasqqkgouqiuqk["\x68\x65\151\147\150\x74"] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki["\150\x65\x69\x67\150\x74"] = "\61\60\60\x25"; $eygasqqkgouqiuqk["\x6d\141\x72\147\151\x6e"] = "\141\165\164\157"; $eygasqqkgouqiuqk["\144\151\163\x70\154\141\171"] = "\142\154\x6f\x63\153"; $eygasqqkgouqiuqk["\x70\157\163\x69\x74\x69\157\156"] = "\x61\142\x73\157\154\x75\x74\145"; $eygasqqkgouqiuqk["\157\x76\145\162\146\x6c\157\x77"] = "\150\151\144\x64\145\156"; $gyquugwkmmgwmkki["\x77\151\x64\164\x68"] = $qeswwaqqsyymqawg; if (!$aqiccywoiqiskwaw) { $eygasqqkgouqiuqk["\x77\x69\144\x74\x68"] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk["\x6d\141\x78\x2d\x77\151\x64\x74\150"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\x7a\145\56\x6d\x61\x78\127\x69\144\x74\x68", null, 0); } else { $eygasqqkgouqiuqk["\x77\x69\x64\164\x68"] = "\61\60\60\x25"; $gyquugwkmmgwmkki["\x6d\141\x78\x2d\167\x69\x64\x74\x68"] = "\61\x30\x30\45"; } $eygasqqkgouqiuqk["\142\141\143\x6b\147\x72\157\x75\156\x64"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\142\147\x2e\143\x6f\154\x6f\162\56\163\164\x72\151\x6e\147", null, "\x74\x72\141\156\x73\160\141\x72\x65\x6e\x74"); break; } return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $ueamwqwegewocqgc = $weyumiemecumqwiy["\x73\165\x62\164\171\x70\x65"] ?? ''; switch ($sqeykgyoooqysmca) { case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\x69\172\x65\56\167", $yqyousioqsoaouig, "\x61\165\x74\157"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\x7a\145\56\x68", $yqyousioqsoaouig, "\x61\165\x74\x6f"); $egkakcquemweqoum["\x6d\151\156\x2d\x77\x69\144\x74\x68"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\145\56\x6d\151\x6e\x57", $yqyousioqsoaouig); $egkakcquemweqoum["\155\151\x6e\x2d\150\145\151\147\150\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\x7a\145\x2e\155\x69\156\x48", $yqyousioqsoaouig); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (isset($weyumiemecumqwiy["\142\x67"]["\151\155\x61\147\145"])) { $egkakcquemweqoum["\164\x6f\x70"] = "\60"; $egkakcquemweqoum["\x62\x61\143\x6b\147\162\157\x75\156\144\55\x69\155\x61\147\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\151\155\x61\x67\x65\56\x73\x72\x63"); $oiegiwogmwmawkeo = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\147\56\x69\x6d\x61\x67\x65\56\x73\x69\x7a\x65"); $egkakcquemweqoum["\x62\141\143\x6b\147\x72\157\x75\x6e\x64\55\163\x69\172\145"] = $oiegiwogmwmawkeo === "\x70\x65\x72\143\145\156\x74\x61\x67\x65" ? $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\147\x2e\x69\155\x61\147\145\x2e\163\x69\172\x65\x56\x61\154") : $oiegiwogmwmawkeo; $egkakcquemweqoum["\x62\141\x63\x6b\147\162\157\165\156\x64\x2d\162\145\160\145\141\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\x2e\x69\155\x61\x67\145\56\x72\145\160\x65\x61\164", null, "\156\x6f\55\x72\x65\160\145\141\164"); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\147\56\151\x6d\x61\147\x65\x2e\160\157\x73\56\x78", null, "\x30"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\147\56\151\155\141\147\145\x2e\x70\x6f\163\56\x79", null, "\60"); $egkakcquemweqoum["\x62\x61\143\x6b\x67\162\x6f\x75\x6e\144\55\160\157\163\151\x74\151\x6f\156"] = "{$iegmsyuiekaayqqy}\x20{$ymsweociooeskgwg}"; } if (!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === "\x61\165\x74\x6f") { $qeswwaqqsyymqawg = "\61\x30\60\x25"; } if (!$cswemwoyesycwkuq || $cswemwoyesycwkuq === "\141\165\x74\x6f") { $cswemwoyesycwkuq = "\x31\60\60\45"; } $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\56\x63\x6f\x6c\157\x72\56\163\164\x72\151\156\147"); if ($qoiwmokisgikggia) { $egkakcquemweqoum["\x62\141\143\x6b\x67\162\157\165\x6e\x64"] = $qoiwmokisgikggia; } break; case Constants::mkousmkiawwousws: $egkakcquemweqoum["\x62\141\x63\x6b\x67\162\x6f\165\x6e\144\x2d\x73\x69\x7a\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\157\156\x74\x65\x6e\x74\56\x73\x69\172\145", null, "\143\x6f\156\x74\x61\151\156"); $egkakcquemweqoum["\x62\x61\143\x6b\x67\x72\x6f\165\x6e\x64\55\162\x65\160\145\141\164"] = "\156\x6f\55\x72\x65\x70\x65\141\164"; $egkakcquemweqoum["\x62\x61\x63\153\147\x72\x6f\165\x6e\x64\x2d\160\x6f\163\151\x74\x69\157\x6e"] = "\x35\x30\x25\x20\x35\60\x25"; $egkakcquemweqoum["\x62\141\143\153\147\x72\157\x75\x6e\144\55\x69\155\x61\x67\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\x6f\156\x74\145\x6e\164\x2e\163\162\x63", null, ''); break; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm && $ueamwqwegewocqgc !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\172\145\x2e\167", $yqyousioqsoaouig, "\x61\165\164\x6f", $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\x65\x2e\150", $yqyousioqsoaouig, "\141\165\164\x6f", $eswoackiciccgasc); $egkakcquemweqoum["\x62\x61\143\153\x67\162\157\x75\x6e\x64"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\x2e\143\x6f\x6c\157\162\x2e\163\x74\162\151\x6e\x67", null, "\164\x72\x61\x6e\163\x70\x61\162\x65\x6e\x74"); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x77\163", $yqyousioqsoaouig); if ($qeswwaqqsyymqawg === "\141\x75\164\157") { $qgssmoqemoeqyuua = "\156\157\x77\162\141\160"; } if ($qgssmoqemoeqyuua) { $egkakcquemweqoum["\167\150\151\x74\145\55\163\x70\141\143\x65"] = $qgssmoqemoeqyuua; } $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\x6e\x74\x65\x6e\164\x2e\144\x65\x63\x6f", null, "\156\157\x6e\x65"); if ($wwqyeeagywueicqa !== "\156\x6f\156\143\x65") { $egkakcquemweqoum["\x74\145\x78\x74\x2d\x64\x65\143\157\162\x61\x74\151\x6f\x6e"] = $wwqyeeagywueicqa; } $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\x6f\x6e\x74\145\156\x74\56\164\162\x61\x6e\163", null, "\x6e\157\156\145"); if ($miaumeemcuuauoyk !== "\156\x6f\156\143\145") { $egkakcquemweqoum["\164\145\170\x74\55\164\x72\x61\x6e\163\146\157\162\155"] = $miaumeemcuuauoyk; } $egkakcquemweqoum["\146\157\156\164\x2d\163\x69\172\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\x6e\x74\56\x73\151\x7a\x65", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x74\x65\x78\164\55\141\x6c\151\147\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\x41", $yqyousioqsoaouig, "\154\x65\x66\164"); $egkakcquemweqoum["\146\x6f\x6e\164\x2d\x66\141\x6d\x69\154\171"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x66\157\x6e\164\56\x66\x61\x6d\151\x6c\x79", null, "\x69\156\151\164\x69\x61\154"); $egkakcquemweqoum["\x66\x6f\156\x74\55\x77\x65\x69\x67\x68\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\157\156\x74\56\x77\145\x69\147\150\x74", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\154\x69\x6e\x65\x2d\x68\x65\151\147\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\154\x68", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\154\x65\x74\x74\145\x72\55\x73\160\141\x63\151\156\x67"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\156\x74\x2e\154\163", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x63\157\x6c\x6f\x72"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\157\154\x6f\162", $yqyousioqsoaouig, "\x23\106\x46\x46"); break; } $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\x6c\56\151\x6e\56\x63\x6f\x6e\x74\x65\156\x74\x2e\141\x6c\x6c\56\x30\56\162\x5a"); if (is_numeric($iuikoekwkkmcimwq)) { $egkakcquemweqoum["\164\x72\x61\x6e\x73\146\157\x72\155"] = "\162\157\x74\141\164\145\50{$iuikoekwkkmcimwq}\x64\x65\x67\x29"; } $egkakcquemweqoum["\167\151\144\164\150"] = $qeswwaqqsyymqawg; $egkakcquemweqoum["\x68\145\151\x67\150\164"] = $cswemwoyesycwkuq; $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\x73\x2e\170", $yqyousioqsoaouig, "\141\x75\164\157"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\x73\56\171", $yqyousioqsoaouig, "\x61\165\164\x6f"); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\163\x2e\166", $yqyousioqsoaouig, "\164\157\160"); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\56\x68", $yqyousioqsoaouig, "\154\x65\146\164"); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum["\x66\154\x6f\141\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\x73\56\146\154\157\x61\x74", $yqyousioqsoaouig); $egkakcquemweqoum["\x7a\x2d\151\156\144\145\x78"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\172\111\156\x64\145\x78", null, 1); $egkakcquemweqoum["\x6d\x61\x72\147\x69\156"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x6d", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x61\x64\144\151\x6e\x67"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\160", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x6f\163\x69\x74\x69\157\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\x2e\x70\x6f\x73"); $egkakcquemweqoum["\x76\x65\x72\x74\x69\x63\141\154\55\141\154\151\147\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x76\x41", null, "\164\x6f\160"); $egkakcquemweqoum["\144\x69\x73\160\x6c\x61\x79"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\144\x69\163\160\154\141\x79", $yqyousioqsoaouig, "\142\x6c\157\143\153"); $egkakcquemweqoum["\x62\157\x72\144\x65\x72\x2d\x72\141\144\x69\x75\x73"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x72\x61\144\x69\x75\163"); $eeaqcswmqmqgkgcc = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\157\x72\144\x65\x72\x2e\143"); if ($eeaqcswmqmqgkgcc) { $egkakcquemweqoum["\x62\x6f\162\x64\x65\x72\55\167\151\x64\x74\150"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\142\x6f\162\x64\x65\162\56\x77", $yqyousioqsoaouig); $egkakcquemweqoum["\142\157\x72\x64\145\x72\55\143\x6f\154\157\x72"] = $eeaqcswmqmqgkgcc; $egkakcquemweqoum["\142\157\x72\x64\145\x72\x2d\163\164\x79\x6c\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\157\x72\x64\145\x72\x2e\x73", $yqyousioqsoaouig); } break; } return $egkakcquemweqoum; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\x6f\156\164\145\x6e\x74\x2e\164\x65\170\x74", null, ''); } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { $equckmqsamsmgcwy = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); $cqcuwemuusesmqsq = 1; if ($yqyousioqsoaouig !== null) { $icuyogeyaokmwusi = 4; if (is_array($eqgoocgaqwqcimie)) { $piuesceqiguuskme = $yqyousioqsoaouig; while (isset($this->useSizes[$piuesceqiguuskme]) && !$this->useSizes[$piuesceqiguuskme] && $piuesceqiguuskme > 0) { $piuesceqiguuskme--; } if ($equckmqsamsmgcwy === "\x23\x61" || !$equckmqsamsmgcwy || !$this->useSizes[$yqyousioqsoaouig] && isset($this->useMultiple[$mkomwsiykqigmqca])) { $uqmawqusmmkkkoaq = null; for ($ciyackuwsqkoqese = $piuesceqiguuskme; $ciyackuwsqkoqese >= $icuyogeyaokmwusi; $ciyackuwsqkoqese--) { if ($this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; break; } } if ($uqmawqusmmkkkoaq === null) { for ($ciyackuwsqkoqese = $piuesceqiguuskme; $ciyackuwsqkoqese < 4; $ciyackuwsqkoqese++) { if ($this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; break; } } } if ($uqmawqusmmkkkoaq !== null && $icuyogeyaokmwusi === 0 && $piuesceqiguuskme === 0) { $cqcuwemuusesmqsq = max(1, (int) $this->slider->get_param(["\163\x69\x7a\x65", "\167\151\144\x74\x68", 0])) / max(1, (int) $this->slider->get_param(["\x73\151\x7a\x65", "\167\x69\x64\164\150", $uqmawqusmmkkkoaq], 1)); } $qsqwqsymmqeoqwcu = null; if ($uqmawqusmmkkkoaq !== null) { $qsqwqsymmqeoqwcu = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $uqmawqusmmkkkoaq) ?: null; } if (!$qsqwqsymmqeoqwcu) { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } if (!is_array($qsqwqsymmqeoqwcu)) { $qsqwqsymmqeoqwcu = $this->ooeaouwceyecskck($qsqwqsymmqeoqwcu, (float) $qsqwqsymmqeoqwcu, $cqcuwemuusesmqsq); } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } return $qsqwqsymmqeoqwcu; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_bg_layer(); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if ($igqsaukqcqscimok) { $yguacsiqkqgiauaa = ["\x74", "\162", "\x62", "\x6c"]; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? ''; if (null !== $yqyousioqsoaouig && is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$yqyousioqsoaouig] ?? ''; } if ($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= "\160\x78"; } $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; } } return rtrim($aqykuigiuwmmcieu); } }
