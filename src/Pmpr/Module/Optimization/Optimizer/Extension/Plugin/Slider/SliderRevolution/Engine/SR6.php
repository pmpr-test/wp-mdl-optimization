<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723572e2b020             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; use RSColorpicker; class SR6 extends Common { protected $useMultiple = ["\160\157\163\151\x74\x69\x6f\x6e\x2e\170" => "\162\157\165\156\144", "\160\157\x73\151\x74\x69\x6f\156\56\x79" => "\x72\x6f\165\156\x64", "\x73\x69\172\145\56\167\x69\x64\x74\x68" => "\x72\x6f\x75\156\144", "\163\151\x7a\145\56\150\145\151\x67\150\x74" => "\x72\x6f\165\156\144", "\x69\144\154\x65\56\x66\157\156\x74\123\x69\172\145" => "\162\x6f\x75\x6e\144", "\x69\x64\x6c\145\56\154\151\156\x65\x48\x65\x69\147\x68\164" => "\x72\157\x75\x6e\144", "\151\x64\x6c\x65\56\154\x65\x74\164\145\x72\x53\160\141\143\x69\156\x67" => null]; protected function qiccuiwooiquycsg() { $this->type = "\162\x73\55\x6d\x6f\x64\165\x6c\x65"; } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy["\165\x69\x64"] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if ($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie)) { if (isset($eqgoocgaqwqcimie[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; } else { $swwmymiaiosiyqis = $uusmaiomayssaecw; while ($swwmymiaiosiyqis = $this->qgwuyeagygomiiks($swwmymiaiosiyqis, "\x70\x72\145\x76")) { if (isset($eqgoocgaqwqcimie[$swwmymiaiosiyqis])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$swwmymiaiosiyqis]; break; } } } } if (is_array($eqgoocgaqwqcimie)) { if (isset($eqgoocgaqwqcimie["\x76"])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie["\x76"]; } else { if (isset($eqgoocgaqwqcimie["\145"])) { $eqgoocgaqwqcimie = null; } } } if ("\x61\165\164\157" === $this->cogayqawswyasksk($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = str_replace("\141\x75\164\157", "\160\x78", $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } protected function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== "\x23\141"; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$this->qgwuyeagygomiiks($momcykaoccoymeig, "\156\145\x78\x74")]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$this->qgwuyeagygomiiks($momcykaoccoymeig, "\160\x72\x65\166")]; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x74\145\170\164", null, ''); } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return false; } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { return $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ["\155\x61\162\147\151\x6e" => "\141\x75\x74\x6f", "\144\151\163\160\154\141\x79" => "\x62\x6c\x6f\143\153", "\x70\157\x73\x69\x74\x69\157\156" => "\162\145\154\x61\164\x69\x76\x65"]; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case "\163\164\141\156\x64\141\162\x64": $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\163\x69\x7a\145\x2e\167\151\144\x74\150", $yqyousioqsoaouig, "\141\165\164\x6f", false); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\x7a\x65\56\x68\x65\151\147\x68\164", $yqyousioqsoaouig, "\141\x75\x74\157", false); $eygasqqkgouqiuqk["\x6d\141\170\x2d\x68\x65\x69\147\x68\164"] = $cswemwoyesycwkuq; if (!$this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\x7a\145\56\153\145\x65\160\x42\120\x48\x65\x69\147\150\x74")) { $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if ($cwugisscoiasuuyg < $cswemwoyesycwkuq) { $cswemwoyesycwkuq = "\143\141\154\143\50\x31\60\x30\166\167\x20\x2a\x20{$cwugisscoiasuuyg}\x29"; } } $eygasqqkgouqiuqk["\x68\145\151\147\x68\164"] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki["\x68\145\x69\x67\x68\x74"] = "\x31\x30\60\45"; $eygasqqkgouqiuqk["\164\157\160"] = "\60"; $eygasqqkgouqiuqk["\x6d\141\162\x67\x69\156"] = "\x61\x75\x74\x6f"; $eygasqqkgouqiuqk["\144\x69\163\x70\154\141\x79"] = "\142\154\x6f\x63\153"; $eygasqqkgouqiuqk["\x70\x6f\x73\x69\x74\151\x6f\156"] = "\141\142\x73\x6f\154\165\x74\x65"; $eygasqqkgouqiuqk["\157\x76\x65\162\x66\x6c\x6f\167"] = "\150\x69\144\x64\145\156"; if ($this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\172\x65\x2e\x63\157\156\x74\x65\156\x74\106\110", null, "\141\165\164\x6f")) { $gyquugwkmmgwmkki["\x77\x69\144\164\150"] = $qeswwaqqsyymqawg; } $wsgmcoowcasueoka = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, "\x73\151\x7a\x65\56\155\141\170\127\x69\x64\164\150"); if ($wsgmcoowcasueoka) { $eygasqqkgouqiuqk["\167\151\144\164\x68"] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk["\155\x61\x78\55\x77\x69\144\164\150"] = $wsgmcoowcasueoka; } else { $eygasqqkgouqiuqk["\167\151\144\x74\x68"] = "\x31\x30\x30\x25"; $gyquugwkmmgwmkki["\155\141\170\55\x77\x69\x64\x74\x68"] = "\x31\60\x30\45"; } $eygasqqkgouqiuqk = $this->ayygiieakooikosk($eyagkkkqkwcuygso, "\x62\x67\x2e\x63\x6f\x6c\157\162\x2e\163\x74\x72\151\x6e\x67", $eygasqqkgouqiuqk); break; } return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; switch ($sqeykgyoooqysmca) { case Constants::gqmuoaykeqeuoukm: case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $uaqcksmcckiykyca = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\x7a\x65\x2e\x6f\x72\151\147\151\156\141\x6c\x57\x69\144\x74\x68", null, "\141\165\164\157"); $koisuyekiuggoswg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\163\151\172\x65\x2e\x6f\162\151\x67\x69\x6e\141\154\x48\x65\151\147\x68\164", null, "\x61\165\164\157"); $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\x7a\x65\x2e\167\151\144\x74\x68", $yqyousioqsoaouig, $uaqcksmcckiykyca); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\x69\172\145\56\x68\145\151\x67\x68\x74", $yqyousioqsoaouig, $koisuyekiuggoswg); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === "\x61\165\x74\157") { $qeswwaqqsyymqawg = "\x31\60\x30\x25"; } if (!$cswemwoyesycwkuq || $cswemwoyesycwkuq === "\141\165\164\x6f") { $cswemwoyesycwkuq = "\x31\60\60\x25"; } break; case Constants::mkousmkiawwousws: $egkakcquemweqoum["\x62\141\x63\153\147\162\157\165\x6e\x64\x2d\163\151\x7a\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x63\157\x6e\x74\145\x6e\x74\56\x73\x69\x7a\145", null, "\x63\x6f\166\x65\162"); $egkakcquemweqoum["\142\x61\x63\x6b\147\162\157\x75\x6e\x64\x2d\x72\145\x70\x65\x61\x74"] = "\x6e\157\x2d\x72\145\160\145\141\164"; $egkakcquemweqoum["\142\x61\143\x6b\147\x72\x6f\165\156\x64\x2d\x70\x6f\163\x69\x74\x69\x6f\156"] = "\65\x30\x25\x20\x35\60\x25"; if (isset($weyumiemecumqwiy[Constants::mkousmkiawwousws])) { $yeoawicyaoowkuuy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\155\x61\x67\x65", null, ''); $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\155\x61\147\x65\127\151\x64\x74\x68", $yqyousioqsoaouig, $qeswwaqqsyymqawg); $cswemwoyesycwkuq = "\61\60\60\x25"; if ("\146\165\x6c\154\167\151\144\x74\x68" === $this->slider->get_param("\x6c\x61\171\x6f\x75\x74\164\171\160\x65")) { $qeswwaqqsyymqawg = "\x31\60\x30\x25"; } } else { $yeoawicyaoowkuuy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x6d\x65\144\x69\141\56\x69\x6d\141\147\x65\125\x72\x6c", null, ''); } $egkakcquemweqoum["\142\x61\x63\x6b\147\x72\157\x75\x6e\144\x2d\151\x6d\141\x67\x65"] = $yeoawicyaoowkuuy; break; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\x65\56\167\151\144\164\x68", $yqyousioqsoaouig, "\141\x75\164\x6f", $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x73\151\172\x65\56\x68\x65\x69\147\150\164", $yqyousioqsoaouig, "\141\x75\x74\157", $eswoackiciccgasc); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\x6c\x65\56\167\150\151\x74\145\x53\x70\141\143\x65", $yqyousioqsoaouig); if ($qeswwaqqsyymqawg === "\141\165\164\157") { $qgssmoqemoeqyuua = "\x6e\157\x77\162\141\x70"; } if ($qgssmoqemoeqyuua) { $egkakcquemweqoum["\x77\x68\151\x74\145\55\163\x70\x61\143\x65"] = $qgssmoqemoeqyuua; } $egkakcquemweqoum["\x63\165\162\x73\157\x72"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\154\x65\56\x63\x75\x72\163\157\162", null, "\141\x75\164\157"); $egkakcquemweqoum["\146\157\x6e\x74\x2d\163\x69\x7a\145"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\154\145\56\x66\157\x6e\164\x53\x69\x7a\145", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x74\145\x78\x74\x2d\x61\x6c\151\x67\x6e"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\154\145\56\x74\x65\x78\x74\101\154\x69\x67\x6e", $yqyousioqsoaouig, "\154\145\x66\164"); $ewkagiwkykskwuii = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\154\x65\56\146\157\x6e\x74\123\164\x79\154\x65", null, "\x6f\x66\146"); if ($ewkagiwkykskwuii === "\x6f\x6e" || $ewkagiwkykskwuii === "\x69\x74\141\x6c\151\x63") { $egkakcquemweqoum["\x66\x6f\156\164\55\163\x74\171\x6c\x65"] = "\x69\x74\141\x6c\151\143"; } $egkakcquemweqoum["\x66\x6f\156\164\x2d\x66\x61\155\151\x6c\171"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\x6c\145\x2e\x66\157\156\x74\106\141\155\151\x6c\171", null, "\151\156\151\164\x69\141\154"); $egkakcquemweqoum["\146\x6f\x6e\x74\55\x77\145\151\147\150\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\x6c\x65\56\x66\x6f\156\x74\127\145\151\147\150\164", $yqyousioqsoaouig); $egkakcquemweqoum["\x6c\x69\156\145\55\150\145\151\147\x68\164"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\x6c\x65\x2e\154\x69\x6e\145\x48\145\x69\x67\150\164", $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum["\x6c\x65\x74\164\x65\162\55\163\x70\x61\143\151\156\x67"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\144\x6c\x65\56\154\x65\164\x74\145\x72\x53\160\141\143\151\156\147", $yqyousioqsoaouig, $eswoackiciccgasc); $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\x64\154\145\x2e\164\x65\170\164\x54\162\x61\x6e\x73\146\157\x72\155", null, "\156\157\156\x65"); if ($miaumeemcuuauoyk !== "\156\157\x6e\x63\145") { $egkakcquemweqoum["\164\x65\170\x74\x2d\x74\162\x61\156\163\x66\157\162\x6d"] = $miaumeemcuuauoyk; } $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\154\145\56\x74\x65\170\164\x44\145\143\x6f\162\x61\164\x69\157\156", null, "\156\x6f\156\145"); if ($wwqyeeagywueicqa !== "\156\157\156\143\x65") { $egkakcquemweqoum["\x74\145\x78\164\x2d\144\x65\x63\x6f\162\141\164\x69\157\x6e"] = $wwqyeeagywueicqa; } $egkakcquemweqoum["\x63\157\x6c\x6f\x72"] = $this->kskwoiuwqgqkmmea($weyumiemecumqwiy, "\x69\x64\x6c\145\x2e\x63\x6f\x6c\x6f\x72", $yqyousioqsoaouig, "\x23\x46\106\106"); break; } $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x74\x69\x6d\x65\x6c\151\x6e\x65\x2e\x66\x72\141\155\x65\163\56\x66\162\x61\x6d\145\x5f\x30\56\x74\162\141\156\163\146\x6f\162\155\56\x72\x6f\x74\141\x74\x69\x6f\x6e\132"); if (is_numeric($iuikoekwkkmcimwq)) { $egkakcquemweqoum["\164\162\141\x6e\163\146\157\x72\x6d"] = "\162\157\x74\x61\x74\x65\x28{$iuikoekwkkmcimwq}\x64\x65\x67\51"; } $egkakcquemweqoum["\x77\151\x64\164\x68"] = $qeswwaqqsyymqawg; $egkakcquemweqoum["\x68\x65\151\x67\150\x74"] = $cswemwoyesycwkuq; $egkakcquemweqoum = $this->ayygiieakooikosk($weyumiemecumqwiy, "\151\x64\154\x65\56\x62\141\143\x6b\147\162\157\165\156\144\103\x6f\x6c\157\x72", $egkakcquemweqoum); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\157\x73\151\164\151\x6f\156\56\170", $yqyousioqsoaouig, "\141\165\x74\x6f"); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\157\x73\151\x74\151\157\156\x2e\171", $yqyousioqsoaouig, "\x61\x75\164\x6f"); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\151\164\151\x6f\x6e\x2e\166\145\162\x74\x69\143\141\154", $yqyousioqsoaouig, "\x74\157\x70"); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\157\x73\151\164\x69\157\x6e\x2e\x68\157\162\151\x7a\157\156\x74\141\x6c", $yqyousioqsoaouig, "\154\x65\x66\164"); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum["\x66\x6c\x6f\141\x74"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\x6f\163\56\x66\x6c\x6f\141\x74", $yqyousioqsoaouig); $egkakcquemweqoum["\172\55\151\156\144\145\170"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x70\157\163\x69\164\x69\157\156\x2e\172\111\x6e\x64\145\x78", null, 0); $egkakcquemweqoum["\x6d\141\162\147\x69\156"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\x64\x6c\145\56\155\141\162\x67\151\156", $yqyousioqsoaouig); $egkakcquemweqoum["\x70\x61\x64\x64\151\x6e\x67"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\x69\144\154\x65\56\x70\141\x64\144\151\156\x67", $yqyousioqsoaouig); $egkakcquemweqoum["\160\x6f\x73\151\164\x69\157\156"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\160\x6f\x73\x69\164\x69\x6f\x6e\x2e\x70\157\163\151\x74\151\x6f\156", null, "\141\142\163\x6f\x6c\165\164\145"); $egkakcquemweqoum["\x64\151\x73\160\x6c\141\x79"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x64\151\163\160\154\141\171", $yqyousioqsoaouig, "\x62\x6c\157\143\153"); $egkakcquemweqoum["\142\157\x72\x64\x65\162\55\x72\141\x64\151\x75\163"] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\144\x6c\x65\x2e\x62\157\162\x64\x65\162\x52\x61\144\151\165\163"); $ugesiiacmkkwayqw = $this->yqooukeogwwoqeau($weyumiemecumqwiy, "\151\x64\154\145\56\142\157\x72\x64\x65\162\x57\x69\144\164\150", $yqyousioqsoaouig); if ($ugesiiacmkkwayqw) { $egkakcquemweqoum["\x62\x6f\x72\144\x65\162\55\x77\x69\x64\164\x68"] = $ugesiiacmkkwayqw; $egkakcquemweqoum["\x62\x6f\162\144\145\x72\x2d\x63\x6f\x6c\x6f\162"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\x69\x64\154\x65\56\142\x6f\x72\x64\x65\162\x43\157\154\157\x72", $yqyousioqsoaouig); $egkakcquemweqoum["\142\157\x72\x64\x65\162\55\163\x74\x79\x6c\x65"] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, "\151\144\x6c\x65\56\142\x6f\162\144\x65\162\123\x74\171\x6c\x65", $yqyousioqsoaouig); } break; } return $egkakcquemweqoum; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_param("\142\x67"); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if ($igqsaukqcqscimok && is_array($igqsaukqcqscimok)) { $yguacsiqkqgiauaa = [0, 1, 2, 3]; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { if (null !== $yqyousioqsoaouig) { $igqsaukqcqscimok = $this->qooeaookuemoqecm($igqsaukqcqscimok, $yqyousioqsoaouig); } $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? 0; if ($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= "\160\x78"; } $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40"; } } return rtrim($aqykuigiuwmmcieu); } private function ayygiieakooikosk($weyumiemecumqwiy, string $mkomwsiykqigmqca, array $egkakcquemweqoum) : array { $yyaakwowaicumqgk = $this->kskwoiuwqgqkmmea($weyumiemecumqwiy, $mkomwsiykqigmqca, null, "\x74\162\x61\156\163\160\x61\x72\x65\156\164"); if (str_contains($yyaakwowaicumqgk, "\x67\x72\x61\144\151\145\x6e\164")) { $egkakcquemweqoum["\142\141\143\x6b\147\162\x6f\165\156\144"] = $yyaakwowaicumqgk; } else { $egkakcquemweqoum["\x62\141\143\153\147\162\x6f\x75\156\144\x2d\x63\157\x6c\x6f\x72"] = $yyaakwowaicumqgk; } return $egkakcquemweqoum; } private function kskwoiuwqgqkmmea($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null, $ggauoeuaesiymgee = null) { $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig, $ggauoeuaesiymgee); if ($qoiwmokisgikggia !== "\x74\162\x61\x6e\x73\160\141\x72\x65\x6e\x74" && class_exists("\x52\123\103\157\154\157\162\x70\151\x63\153\145\162")) { $qoiwmokisgikggia = RSColorpicker::get($qoiwmokisgikggia); } return $qoiwmokisgikggia; } }
