<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd9008d45             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use RSColorpicker; class SR6 extends Common { protected $useMultiple = ["\x70\x6f\163\151\164\151\157\x6e\x2e\x78" => "\x72\x6f\165\156\144", "\x70\x6f\x73\151\164\151\157\x6e\56\x79" => "\162\x6f\165\x6e\x64", "\x73\151\x7a\x65\56\x77\151\144\x74\x68" => "\x72\x6f\165\x6e\144", "\163\151\x7a\x65\x2e\x68\145\x69\147\150\164" => "\x72\x6f\165\x6e\x64", "\x69\x64\x6c\x65\56\x66\x6f\x6e\164\x53\x69\172\145" => "\x72\157\165\x6e\144", "\x69\x64\x6c\145\x2e\154\151\x6e\145\110\145\151\147\x68\x74" => "\162\x6f\x75\156\x64", "\151\144\154\x65\56\x6c\145\164\x74\x65\x72\123\160\141\143\x69\156\x67" => null]; protected function qiccuiwooiquycsg() { $this->type = "\162\x73\x2d\155\x6f\144\x75\154\x65"; } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy["\165\x69\144"] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if ($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie)) { if (isset($eqgoocgaqwqcimie[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; } else { $swwmymiaiosiyqis = $uusmaiomayssaecw; while ($swwmymiaiosiyqis = $this->qgwuyeagygomiiks($swwmymiaiosiyqis, "\x70\162\145\x76")) { if (isset($eqgoocgaqwqcimie[$swwmymiaiosiyqis])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$swwmymiaiosiyqis]; break; } } } } if (is_array($eqgoocgaqwqcimie)) { if (isset($eqgoocgaqwqcimie["\x76"])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie["\166"]; } else { if (isset($eqgoocgaqwqcimie["\x65"])) { $eqgoocgaqwqcimie = null; } } } if ("\141\165\164\x6f" === $this->cogayqawswyasksk($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = str_replace("\141\165\x74\x6f", "\x70\170", $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } protected function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== "\x23\141"; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$this->qgwuyeagygomiiks($momcykaoccoymeig, "\x6e\x65\x78\164")]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$this->qgwuyeagygomiiks($momcykaoccoymeig, "\160\x72\x65\x76")]; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\164\145\170\x74", null, ''); } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return false; } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { return $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ["\155\141\162\x67\151\x6e" => "\x61\x75\164\157", "\x64\151\163\160\154\x61\x79" => "\142\x6c\x6f\143\153", "\x70\157\x73\x69\x74\x69\x6f\156" => "\x72\145\154\141\x74\151\166\x65"]; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case "\x73\164\x61\156\144\x61\162\x64": $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\x7a\145\x2e\167\x69\x64\164\150", $yqyousioqsoaouig, "\x61\x75\x74\157", false); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\x7a\x65\x2e\x68\x65\151\x67\150\x74", $yqyousioqsoaouig, "\141\x75\x74\157", false); $eygasqqkgouqiuqk["\x6d\141\170\x2d\x68\145\151\147\x68\164"] = $cswemwoyesycwkuq; if (!$this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\151\x7a\145\x2e\153\145\145\160\x42\x50\110\x65\x69\x67\150\164")) { $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if ($cwugisscoiasuuyg < $cswemwoyesycwkuq) { $cswemwoyesycwkuq = "\143\x61\154\x63\x28\x31\60\x30\x76\x77\40\52\40{$cwugisscoiasuuyg}\51"; } } $eygasqqkgouqiuqk["\x68\x65\151\x67\x68\164"] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki["\150\x65\151\147\x68\x74"] = "\61\60\x30\45"; $eygasqqkgouqiuqk["\x74\157\160"] = "\x30"; $eygasqqkgouqiuqk["\155\141\x72\147\x69\x6e"] = "\141\x75\x74\157"; $eygasqqkgouqiuqk["\x64\151\x73\160\x6c\x61\x79"] = "\142\x6c\157\143\153"; $eygasqqkgouqiuqk["\x70\157\163\151\164\151\157\x6e"] = "\141\142\163\x6f\154\x75\164\x65"; $eygasqqkgouqiuqk["\157\166\145\162\146\154\x6f\x77"] = "\x68\x69\144\x64\145\x6e"; if ($this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\151\172\145\56\x63\x6f\156\x74\145\156\164\106\x48", null, "\141\165\164\157")) { $gyquugwkmmgwmkki["\x77\x69\x64\x74\150"] = $qeswwaqqsyymqawg; } $wsgmcoowcasueoka = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\x7a\145\56\155\x61\x78\x57\x69\144\164\x68"); if ($wsgmcoowcasueoka) { $eygasqqkgouqiuqk["\x77\x69\144\x74\150"] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk["\x6d\x61\170\x2d\167\x69\x64\x74\150"] = $wsgmcoowcasueoka; } else { $eygasqqkgouqiuqk["\167\151\144\164\150"] = "\61\x30\x30\45"; $gyquugwkmmgwmkki["\x6d\141\170\x2d\167\151\x64\164\150"] = "\61\60\x30\x25"; } $eygasqqkgouqiuqk = $this->ayygiieakooikosk($eyagkkkqkwcuygso, "\142\x67\x2e\x63\157\154\x6f\162\x2e\x73\164\x72\151\x6e\x67", $eygasqqkgouqiuqk); break; } return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; switch ($sqeykgyoooqysmca) { case Constants::gqmuoaykeqeuoukm: case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $uaqcksmcckiykyca = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\145\56\x6f\162\151\147\151\156\x61\x6c\x57\151\144\x74\150", null, "\x61\165\x74\157"); $koisuyekiuggoswg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\x69\x7a\145\56\x6f\x72\151\147\x69\156\141\154\110\145\151\x67\x68\x74", null, "\141\x75\x74\x6f"); $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\x65\x2e\x77\151\x64\164\150", $yqyousioqsoaouig, $uaqcksmcckiykyca); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\x69\172\x65\56\150\x65\151\x67\x68\x74", $yqyousioqsoaouig, $koisuyekiuggoswg); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === "\141\x75\x74\x6f") { $qeswwaqqsyymqawg = "\x31\x30\x30\x25"; } if (!$cswemwoyesycwkuq || $cswemwoyesycwkuq === "\141\x75\164\x6f") { $cswemwoyesycwkuq = "\61\x30\x30\x25"; } break; case Constants::mkousmkiawwousws: $egkakcquemweqoum["\x62\141\143\153\147\162\157\x75\156\144\x2d\x73\151\x7a\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\156\x74\145\x6e\x74\56\163\151\x7a\145", null, "\143\x6f\x76\145\x72"); $egkakcquemweqoum["\142\x61\x63\153\147\162\157\165\156\144\x2d\x72\145\x70\145\141\164"] = "\x6e\157\55\x72\x65\160\x65\141\164"; $egkakcquemweqoum["\142\x61\x63\x6b\147\162\x6f\165\x6e\x64\x2d\160\x6f\163\x69\164\x69\x6f\156"] = "\x35\x30\x25\40\x35\x30\45"; if (isset($weyumiemecumqwiy[Constants::mkousmkiawwousws])) { $yeoawicyaoowkuuy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x6d\141\x67\145", null, ''); $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\155\x61\147\145\127\x69\x64\164\150", $yqyousioqsoaouig, $qeswwaqqsyymqawg); $cswemwoyesycwkuq = "\x31\60\x30\x25"; if ("\146\165\154\154\x77\151\144\164\150" === $this->slider->get_param("\154\x61\x79\157\165\164\x74\171\160\x65")) { $qeswwaqqsyymqawg = "\61\60\60\x25"; } } else { $yeoawicyaoowkuuy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x6d\145\x64\151\141\x2e\x69\x6d\x61\x67\145\x55\162\x6c", null, ''); } $egkakcquemweqoum["\142\141\x63\153\147\162\157\165\x6e\x64\x2d\x69\x6d\x61\147\145"] = $yeoawicyaoowkuuy; break; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\x65\x2e\167\151\x64\164\150", $yqyousioqsoaouig, "\141\165\164\157", $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\x7a\x65\56\150\x65\151\147\150\x74", $yqyousioqsoaouig, "\141\165\164\157", $eswoackiciccgasc); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\154\145\x2e\x77\150\151\164\x65\x53\x70\141\x63\x65", $yqyousioqsoaouig); if ($qeswwaqqsyymqawg === "\x61\x75\164\x6f") { $qgssmoqemoeqyuua = "\156\157\x77\162\141\x70"; } if ($qgssmoqemoeqyuua) { $egkakcquemweqoum["\167\x68\151\164\145\x2d\x73\x70\x61\x63\145"] = $qgssmoqemoeqyuua; } $egkakcquemweqoum["\143\165\162\x73\x6f\162"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\x6c\x65\56\143\x75\162\163\x6f\162", null, "\x61\x75\x74\x6f"); $egkakcquemweqoum["\146\157\156\164\x2d\163\x69\x7a\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\154\145\56\x66\157\x6e\x74\x53\x69\172\145", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x74\x65\170\x74\55\141\x6c\x69\x67\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\144\154\x65\x2e\164\x65\170\164\101\154\151\147\x6e", $yqyousioqsoaouig, "\154\x65\x66\x74"); $ewkagiwkykskwuii = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\144\154\145\x2e\x66\x6f\156\x74\123\164\x79\x6c\x65", null, "\157\x66\146"); if ($ewkagiwkykskwuii === "\157\156" || $ewkagiwkykskwuii === "\151\164\x61\154\x69\143") { $egkakcquemweqoum["\x66\x6f\x6e\164\x2d\x73\164\171\154\x65"] = "\x69\x74\x61\x6c\x69\x63"; } $egkakcquemweqoum["\146\157\x6e\164\55\146\x61\155\x69\x6c\171"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\x6c\x65\56\146\x6f\156\x74\x46\141\155\x69\x6c\171", null, "\151\156\151\x74\151\x61\154"); $egkakcquemweqoum["\x66\157\156\x74\55\x77\x65\151\x67\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\x6c\x65\x2e\x66\157\x6e\164\x57\x65\x69\x67\150\164", $yqyousioqsoaouig); $egkakcquemweqoum["\x6c\x69\156\145\55\150\145\151\147\150\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\x6c\145\x2e\154\151\156\145\110\x65\x69\147\150\164", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x6c\145\x74\164\x65\162\55\x73\160\141\x63\x69\x6e\x67"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\144\154\145\56\154\145\x74\x74\x65\162\123\x70\x61\x63\x69\156\x67", $yqyousioqsoaouig, $eswoackiciccgasc); $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\154\x65\56\164\x65\170\164\x54\x72\141\156\x73\146\157\162\155", null, "\156\157\156\145"); if ($miaumeemcuuauoyk !== "\156\x6f\x6e\143\145") { $egkakcquemweqoum["\x74\x65\x78\164\55\164\162\141\x6e\163\146\157\162\155"] = $miaumeemcuuauoyk; } $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\x6c\145\x2e\x74\145\x78\x74\x44\145\143\157\x72\141\x74\x69\x6f\x6e", null, "\x6e\x6f\156\145"); if ($wwqyeeagywueicqa !== "\x6e\157\156\143\x65") { $egkakcquemweqoum["\x74\145\x78\164\x2d\144\145\x63\x6f\162\x61\x74\x69\x6f\x6e"] = $wwqyeeagywueicqa; } $egkakcquemweqoum["\x63\157\154\157\x72"] = $this->kskwoiuwqgqkmmea($weyumiemecumqwiy, "\x69\x64\x6c\x65\x2e\143\x6f\154\x6f\x72", $yqyousioqsoaouig, "\x23\106\106\106"); break; } $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x74\x69\x6d\145\x6c\151\x6e\x65\x2e\x66\x72\141\155\145\163\x2e\146\x72\x61\x6d\x65\137\60\56\164\x72\141\x6e\x73\x66\x6f\x72\x6d\x2e\x72\157\164\x61\x74\x69\157\x6e\x5a"); if (is_numeric($iuikoekwkkmcimwq)) { $egkakcquemweqoum["\164\x72\141\x6e\163\146\x6f\x72\155"] = "\x72\x6f\164\x61\x74\145\x28{$iuikoekwkkmcimwq}\x64\x65\x67\51"; } $egkakcquemweqoum["\167\151\144\x74\x68"] = $qeswwaqqsyymqawg; $egkakcquemweqoum["\x68\145\x69\147\150\x74"] = $cswemwoyesycwkuq; $egkakcquemweqoum = $this->ayygiieakooikosk($weyumiemecumqwiy, "\x69\144\x6c\x65\x2e\x62\141\143\x6b\147\162\x6f\165\156\x64\x43\157\154\x6f\162", $egkakcquemweqoum); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\163\151\164\x69\157\x6e\x2e\170", $yqyousioqsoaouig, "\x61\165\164\157"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\x73\151\x74\151\157\156\x2e\171", $yqyousioqsoaouig, "\141\x75\x74\x6f"); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\151\164\151\x6f\x6e\56\x76\145\162\x74\x69\x63\x61\x6c", $yqyousioqsoaouig, "\x74\157\160"); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\151\164\x69\157\x6e\x2e\x68\157\162\151\x7a\x6f\156\164\141\x6c", $yqyousioqsoaouig, "\x6c\x65\146\164"); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum["\x66\x6c\157\141\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\56\x66\x6c\x6f\x61\164", $yqyousioqsoaouig); $egkakcquemweqoum["\x7a\x2d\151\156\x64\x65\x78"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\163\x69\164\151\x6f\156\56\x7a\x49\156\x64\x65\170", null, 0); $egkakcquemweqoum["\x6d\141\x72\147\151\x6e"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\144\154\145\x2e\155\x61\162\147\151\156", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\141\144\144\x69\156\147"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\x64\154\x65\56\160\141\144\x64\x69\x6e\x67", $yqyousioqsoaouig); $egkakcquemweqoum["\160\157\x73\151\164\x69\x6f\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\163\x69\164\x69\157\x6e\56\160\157\x73\151\x74\x69\157\156", null, "\x61\x62\x73\157\x6c\x75\x74\x65"); $egkakcquemweqoum["\144\x69\x73\x70\154\141\x79"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x64\151\x73\160\x6c\x61\x79", $yqyousioqsoaouig, "\142\x6c\x6f\143\153"); $egkakcquemweqoum["\x62\157\162\x64\x65\x72\x2d\162\x61\144\x69\165\x73"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\x64\x6c\145\56\x62\157\162\x64\x65\162\x52\x61\x64\151\165\x73"); $ugesiiacmkkwayqw = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\x64\154\145\x2e\142\157\x72\x64\x65\162\x57\151\x64\x74\x68", $yqyousioqsoaouig); if ($ugesiiacmkkwayqw) { $egkakcquemweqoum["\142\157\x72\x64\x65\x72\55\167\x69\144\164\150"] = $ugesiiacmkkwayqw; $egkakcquemweqoum["\x62\x6f\x72\x64\145\x72\55\x63\157\x6c\x6f\162"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\154\145\x2e\x62\x6f\x72\x64\x65\x72\103\x6f\x6c\x6f\x72", $yqyousioqsoaouig); $egkakcquemweqoum["\142\x6f\162\x64\x65\x72\x2d\x73\x74\x79\x6c\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\x6c\145\56\x62\157\x72\x64\145\x72\123\164\x79\154\x65", $yqyousioqsoaouig); } break; } return $egkakcquemweqoum; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_param("\x62\x67"); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if ($igqsaukqcqscimok && is_array($igqsaukqcqscimok)) { $yguacsiqkqgiauaa = [0, 1, 2, 3]; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { if (null !== $yqyousioqsoaouig) { $igqsaukqcqscimok = $this->qooeaookuemoqecm($igqsaukqcqscimok, $yqyousioqsoaouig); } $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? 0; if ($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= "\x70\x78"; } $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20"; } } return rtrim($aqykuigiuwmmcieu); } private function ayygiieakooikosk($weyumiemecumqwiy, string $mkomwsiykqigmqca, array $egkakcquemweqoum) : array { $yyaakwowaicumqgk = $this->kskwoiuwqgqkmmea($weyumiemecumqwiy, $mkomwsiykqigmqca, null, "\x74\162\141\156\163\160\x61\162\x65\156\164"); if (str_contains($yyaakwowaicumqgk, "\147\x72\x61\144\x69\x65\156\x74")) { $egkakcquemweqoum["\142\141\143\x6b\147\162\157\165\x6e\144"] = $yyaakwowaicumqgk; } else { $egkakcquemweqoum["\x62\141\143\x6b\x67\162\157\x75\x6e\144\55\143\x6f\x6c\157\162"] = $yyaakwowaicumqgk; } return $egkakcquemweqoum; } private function kskwoiuwqgqkmmea($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null) { $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig, $ggauoeuaesiymgee); if ($qoiwmokisgikggia !== "\x74\x72\x61\x6e\x73\x70\x61\x72\x65\156\164" && class_exists("\x52\123\x43\157\x6c\x6f\x72\x70\151\143\153\145\x72")) { $qoiwmokisgikggia = RSColorpicker::get($qoiwmokisgikggia); } return $qoiwmokisgikggia; } }
