<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1ae35f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; class SR7 extends Common { protected $useMultiple = ["\154\150" => "\x72\x6f\x75\156\144", "\160\x6f\163\56\x78" => "\x72\x6f\165\156\144", "\x70\x6f\x73\56\x79" => "\162\x6f\165\x6e\x64", "\x73\151\x7a\x65\56\x77" => "\x72\x6f\x75\x6e\144", "\x73\x69\172\x65\56\x68" => "\162\x6f\x75\156\x64", "\x66\157\156\164\x2e\154\x73" => null, "\146\157\156\164\56\163\x69\172\145" => "\x72\x6f\165\x6e\x64"]; protected array $useSizes = []; protected int $level = 4; protected function qiccuiwooiquycsg() { $this->type = "\x73\x72\67\x2d\155\157\x64\x75\154\145"; $eyagkkkqkwcuygso = $this->slider->get_params(); $this->useSizes = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x75\123\151\172\x65", null, []); $this->level = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\154\145\166\x65\x6c", null, 4); } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy[Constants::gouqcwikiiygyasc] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if ($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie) && isset($eqgoocgaqwqcimie[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; } return $eqgoocgaqwqcimie; } public function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return $this->useSizes[$yqyousioqsoaouig] && !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== "\x23\141"; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig + 1]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig - 1]; } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return "\x73\x6c\151\x64\x65\x62\147" === $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\165\x62\x74\x79\160\145"); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ["\155\x61\162\x67\x69\x6e" => "\141\x75\x74\x6f", "\x64\x69\x73\160\x6c\141\x79" => "\142\x6c\x6f\143\153", "\x70\x6f\163\x69\164\151\157\x6e" => "\162\x65\154\141\164\151\166\145"]; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case "\x73\164\141\x6e\x64\x61\162\x64": $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\172\145\x2e\167\x69\144\x74\x68", $yqyousioqsoaouig, "\141\165\164\157"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\172\x65\x2e\150\x65\x69\x67\x68\164", $yqyousioqsoaouig, "\141\x75\x74\x6f"); $aqiccywoiqiskwaw = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\x7a\x65\56\x66\x75\x6c\154\127\x69\x64\x74\x68", null, true); $kisgwkkagogawumc = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\172\145\x2e\x66\x75\154\x6c\110\x65\151\x67\x68\x74"); $eygasqqkgouqiuqk["\155\x61\x78\55\x68\145\x69\x67\x68\x74"] = $cswemwoyesycwkuq; if (!$kisgwkkagogawumc) { $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if ($cwugisscoiasuuyg < $cswemwoyesycwkuq) { $cswemwoyesycwkuq = "\143\x61\x6c\143\x28\x31\x30\x30\166\x77\x20\x2a\x20{$cwugisscoiasuuyg}\x29"; } } $eygasqqkgouqiuqk["\x68\145\x69\147\x68\x74"] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki["\x68\145\151\x67\x68\x74"] = "\61\x30\x30\45"; $eygasqqkgouqiuqk["\155\x61\162\x67\x69\156"] = "\141\165\164\x6f"; $eygasqqkgouqiuqk["\x64\151\163\x70\154\x61\171"] = "\x62\154\x6f\143\x6b"; $eygasqqkgouqiuqk["\160\x6f\x73\x69\164\x69\x6f\x6e"] = "\x61\142\x73\x6f\x6c\x75\x74\145"; $eygasqqkgouqiuqk["\157\x76\145\162\x66\154\x6f\x77"] = "\x68\151\144\144\145\x6e"; $gyquugwkmmgwmkki["\x77\151\144\164\150"] = $qeswwaqqsyymqawg; if (!$aqiccywoiqiskwaw) { $eygasqqkgouqiuqk["\x77\x69\x64\164\x68"] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk["\155\141\x78\55\x77\151\144\x74\150"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\x69\x7a\x65\56\x6d\x61\x78\127\151\x64\x74\x68", null, 0); } else { $eygasqqkgouqiuqk["\x77\x69\x64\x74\150"] = "\61\60\x30\x25"; $gyquugwkmmgwmkki["\x6d\x61\x78\55\x77\151\144\164\150"] = "\x31\x30\60\45"; } $eygasqqkgouqiuqk["\x62\141\143\x6b\x67\162\x6f\x75\x6e\144"] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x62\x67\x2e\x63\157\x6c\x6f\x72\56\x73\x74\x72\151\156\x67", null, "\x74\162\x61\x6e\x73\x70\x61\162\145\156\x74"); break; } return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $ueamwqwegewocqgc = $weyumiemecumqwiy["\163\165\142\x74\x79\160\x65"] ?? ''; switch ($sqeykgyoooqysmca) { case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\172\x65\x2e\x77", $yqyousioqsoaouig, "\141\x75\x74\x6f"); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\145\x2e\x68", $yqyousioqsoaouig, "\x61\x75\x74\x6f"); $egkakcquemweqoum["\x6d\151\x6e\55\167\x69\144\x74\150"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\172\x65\x2e\x6d\x69\x6e\127", $yqyousioqsoaouig); $egkakcquemweqoum["\155\151\x6e\55\x68\x65\151\x67\150\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\145\56\x6d\151\x6e\x48", $yqyousioqsoaouig); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (isset($weyumiemecumqwiy["\142\147"]["\151\x6d\x61\147\145"])) { $egkakcquemweqoum["\x74\x6f\x70"] = "\60"; $egkakcquemweqoum["\x62\x61\143\x6b\147\162\157\x75\156\144\x2d\x69\155\141\x67\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\56\151\155\x61\147\x65\56\163\x72\x63"); $oiegiwogmwmawkeo = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\x2e\151\155\x61\147\145\56\x73\x69\172\x65"); $egkakcquemweqoum["\x62\x61\143\x6b\x67\162\157\165\156\x64\55\163\151\172\x65"] = $oiegiwogmwmawkeo === "\x70\x65\x72\143\x65\x6e\x74\x61\147\145" ? $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\147\x2e\151\155\x61\147\145\x2e\x73\151\x7a\x65\126\141\x6c") : $oiegiwogmwmawkeo; $egkakcquemweqoum["\x62\x61\143\153\x67\162\157\x75\x6e\x64\x2d\x72\x65\160\x65\x61\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\151\x6d\141\x67\145\56\x72\145\160\x65\141\164", null, "\156\157\x2d\162\x65\160\x65\141\x74"); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\56\151\x6d\x61\x67\145\56\x70\x6f\x73\56\170", null, "\x30"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\142\x67\x2e\x69\x6d\x61\x67\x65\x2e\x70\x6f\163\x2e\171", null, "\60"); $egkakcquemweqoum["\142\x61\x63\x6b\x67\x72\157\x75\x6e\144\x2d\x70\157\x73\x69\164\x69\157\156"] = "{$iegmsyuiekaayqqy}\40{$ymsweociooeskgwg}"; } if (!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === "\141\165\164\157") { $qeswwaqqsyymqawg = "\x31\60\60\45"; } if (!$cswemwoyesycwkuq || $cswemwoyesycwkuq === "\141\165\164\x6f") { $cswemwoyesycwkuq = "\61\x30\x30\x25"; } $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\147\x2e\143\157\154\x6f\x72\x2e\163\x74\162\x69\x6e\x67"); if ($qoiwmokisgikggia) { $egkakcquemweqoum["\x62\141\x63\153\147\x72\x6f\x75\156\144"] = $qoiwmokisgikggia; } break; case Constants::mkousmkiawwousws: $egkakcquemweqoum["\x62\x61\x63\x6b\x67\162\157\x75\156\144\55\163\x69\x7a\x65"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\157\x6e\x74\x65\156\164\x2e\163\151\172\x65", null, "\143\157\x6e\164\x61\x69\x6e"); $egkakcquemweqoum["\142\x61\x63\153\147\162\157\165\156\x64\x2d\162\x65\160\x65\x61\x74"] = "\156\157\x2d\x72\145\x70\x65\x61\164"; $egkakcquemweqoum["\x62\141\x63\153\x67\x72\x6f\x75\156\x64\55\x70\x6f\x73\x69\x74\x69\x6f\156"] = "\x35\60\45\x20\x35\x30\45"; $egkakcquemweqoum["\x62\141\143\x6b\147\x72\157\x75\156\x64\x2d\151\x6d\141\147\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\157\x6e\164\145\x6e\164\x2e\163\162\x63", null, ''); break; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm && $ueamwqwegewocqgc !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\x7a\x65\x2e\167", $yqyousioqsoaouig, "\x61\165\164\x6f", $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\145\56\150", $yqyousioqsoaouig, "\141\x75\x74\x6f", $eswoackiciccgasc); $egkakcquemweqoum["\x62\141\143\x6b\147\x72\x6f\x75\156\x64"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x67\x2e\143\x6f\154\x6f\162\x2e\x73\x74\162\x69\156\x67", null, "\164\x72\141\156\163\160\141\162\x65\x6e\164"); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\167\x73", $yqyousioqsoaouig); if ($qeswwaqqsyymqawg === "\141\165\164\157") { $qgssmoqemoeqyuua = "\x6e\x6f\x77\x72\141\160"; } if ($qgssmoqemoeqyuua) { $egkakcquemweqoum["\x77\150\151\164\145\55\163\160\x61\x63\x65"] = $qgssmoqemoeqyuua; } $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\156\164\145\156\x74\56\x64\145\x63\x6f", null, "\156\157\x6e\x65"); if ($wwqyeeagywueicqa !== "\x6e\x6f\x6e\143\x65") { $egkakcquemweqoum["\x74\145\x78\x74\55\x64\145\143\x6f\x72\141\x74\x69\x6f\x6e"] = $wwqyeeagywueicqa; } $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\143\x6f\156\x74\145\156\164\56\164\x72\141\156\163", null, "\x6e\x6f\156\x65"); if ($miaumeemcuuauoyk !== "\156\157\x6e\143\145") { $egkakcquemweqoum["\x74\145\x78\164\x2d\164\162\x61\156\x73\x66\x6f\162\x6d"] = $miaumeemcuuauoyk; } $egkakcquemweqoum["\146\157\156\164\55\163\x69\172\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x66\157\x6e\164\x2e\163\151\x7a\145", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\164\145\170\x74\55\141\154\x69\x67\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\x41", $yqyousioqsoaouig, "\154\145\146\x74"); $egkakcquemweqoum["\146\x6f\156\164\55\146\x61\155\x69\x6c\171"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x66\157\156\164\x2e\146\141\x6d\x69\154\171", null, "\151\x6e\151\x74\151\141\x6c"); $egkakcquemweqoum["\146\x6f\x6e\x74\55\x77\x65\151\147\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x66\x6f\156\164\56\167\x65\x69\147\x68\x74", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\154\x69\156\x65\x2d\150\x65\x69\x67\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x6c\150", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\154\145\x74\x74\145\162\x2d\163\160\x61\x63\x69\156\147"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\146\x6f\156\164\56\154\163", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\143\x6f\154\x6f\x72"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\154\x6f\x72", $yqyousioqsoaouig, "\43\x46\x46\106"); break; } $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x74\154\56\x69\x6e\x2e\x63\x6f\156\x74\145\156\164\x2e\x61\154\x6c\x2e\x30\56\x72\x5a"); if (is_numeric($iuikoekwkkmcimwq)) { $egkakcquemweqoum["\164\162\141\156\163\146\157\x72\x6d"] = "\x72\157\164\x61\164\145\x28{$iuikoekwkkmcimwq}\x64\x65\147\x29"; } $egkakcquemweqoum["\167\151\144\164\150"] = $qeswwaqqsyymqawg; $egkakcquemweqoum["\150\x65\x69\147\x68\x74"] = $cswemwoyesycwkuq; $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\x73\56\170", $yqyousioqsoaouig, "\141\165\x74\157"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\163\x2e\171", $yqyousioqsoaouig, "\141\165\x74\x6f"); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\163\56\166", $yqyousioqsoaouig, "\164\x6f\x70"); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\56\x68", $yqyousioqsoaouig, "\154\145\x66\x74"); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum["\146\154\157\x61\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\56\146\154\x6f\x61\x74", $yqyousioqsoaouig); $egkakcquemweqoum["\x7a\55\x69\x6e\x64\x65\x78"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x7a\111\x6e\144\x65\170", null, 1); $egkakcquemweqoum["\x6d\141\162\147\151\156"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x6d", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x61\x64\144\x69\x6e\147"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x70", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x6f\x73\151\x74\151\157\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\x73\x2e\160\157\163"); $egkakcquemweqoum["\x76\x65\162\x74\151\143\x61\154\x2d\x61\154\x69\x67\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x76\101", null, "\x74\x6f\x70"); $egkakcquemweqoum["\x64\x69\x73\x70\x6c\x61\171"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x64\x69\x73\x70\154\141\171", $yqyousioqsoaouig, "\142\x6c\x6f\143\153"); $egkakcquemweqoum["\x62\157\x72\x64\145\x72\55\x72\x61\x64\151\165\163"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x72\x61\144\151\165\x73"); $eeaqcswmqmqgkgcc = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\157\x72\x64\145\162\x2e\x63"); if ($eeaqcswmqmqgkgcc) { $egkakcquemweqoum["\142\157\162\x64\145\162\55\x77\x69\x64\164\150"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\142\x6f\162\144\x65\162\x2e\167", $yqyousioqsoaouig); $egkakcquemweqoum["\x62\x6f\x72\144\145\x72\55\143\x6f\x6c\x6f\162"] = $eeaqcswmqmqgkgcc; $egkakcquemweqoum["\142\x6f\162\x64\x65\x72\55\163\x74\x79\154\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x62\x6f\x72\x64\145\x72\56\x73", $yqyousioqsoaouig); } break; } return $egkakcquemweqoum; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\x6e\x74\145\156\x74\x2e\164\145\x78\164", null, ''); } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { $equckmqsamsmgcwy = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); $cqcuwemuusesmqsq = 1; if ($yqyousioqsoaouig !== null) { $icuyogeyaokmwusi = 4; if (is_array($eqgoocgaqwqcimie)) { $piuesceqiguuskme = $yqyousioqsoaouig; while (isset($this->useSizes[$piuesceqiguuskme]) && !$this->useSizes[$piuesceqiguuskme] && $piuesceqiguuskme > 0) { $piuesceqiguuskme--; } if ($equckmqsamsmgcwy === "\x23\x61" || !$equckmqsamsmgcwy || !$this->useSizes[$yqyousioqsoaouig] && isset($this->useMultiple[$mkomwsiykqigmqca])) { $uqmawqusmmkkkoaq = null; for ($ciyackuwsqkoqese = $piuesceqiguuskme; $ciyackuwsqkoqese >= $icuyogeyaokmwusi; $ciyackuwsqkoqese--) { if ($this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; break; } } if ($uqmawqusmmkkkoaq === null) { for ($ciyackuwsqkoqese = $piuesceqiguuskme; $ciyackuwsqkoqese < 4; $ciyackuwsqkoqese++) { if ($this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; break; } } } if ($uqmawqusmmkkkoaq !== null && $icuyogeyaokmwusi === 0 && $piuesceqiguuskme === 0) { $cqcuwemuusesmqsq = max(1, (int) $this->slider->get_param(["\x73\x69\x7a\x65", "\167\151\x64\164\150", 0])) / max(1, (int) $this->slider->get_param(["\163\x69\172\x65", "\x77\x69\144\x74\x68", $uqmawqusmmkkkoaq], 1)); } $qsqwqsymmqeoqwcu = null; if ($uqmawqusmmkkkoaq !== null) { $qsqwqsymmqeoqwcu = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $uqmawqusmmkkkoaq) ?: null; } if (!$qsqwqsymmqeoqwcu) { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } if (!is_array($qsqwqsymmqeoqwcu)) { $qsqwqsymmqeoqwcu = $this->ooeaouwceyecskck($qsqwqsymmqeoqwcu, (float) $qsqwqsymmqeoqwcu, $cqcuwemuusesmqsq); } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } return $qsqwqsymmqeoqwcu; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_bg_layer(); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if ($igqsaukqcqscimok) { $yguacsiqkqgiauaa = ["\164", "\x72", "\142", "\x6c"]; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? ''; if (null !== $yqyousioqsoaouig && is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$yqyousioqsoaouig] ?? ''; } if ($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= "\160\x78"; } $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; } } return rtrim($aqykuigiuwmmcieu); } }
