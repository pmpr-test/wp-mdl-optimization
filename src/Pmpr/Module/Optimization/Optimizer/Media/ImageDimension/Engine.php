<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1eae701745             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\x6b\x6b\x79\161\x69\x79\x77\x63\x73\157\151\x6b\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\155\x67\72\156\157\x74\50\x5b\167\x69\x64\x74\x68\x5d\51\72\x6e\x6f\x74\50\133\150\x65\151\x67\150\164\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto easuiqiooiwgswmm; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\x61\55\x6c\141\172\171\55\x6f\x72\x69\x67\x69\156\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\141\x2d\156\157\x2d\x69\x6d\x61\x67\x65\x2d\144\x69\155\145\x6e\x73\151\157\x6e\x73"))) { goto cimascmiesomqgqs; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto emeeocqaisksyioq; } if (!ini_get("\141\x6c\x6c\x6f\167\137\165\162\x6c\137\x66\157\x70\x65\x6e")) { goto mcqwuawosciucemq; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\x70\156\147", "\x77\x65\x62\160", "\147\151\146", "\163\x76\147", "\152\x70\145\147", "\x6a\160\x67"], true)) { goto aqekkeqmmewoyawu; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\150\x65\x6d\x65"] . "\72\57\57" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); aqekkeqmmewoyawu: mcqwuawosciucemq: goto maggecymmmesqmqs; emeeocqaisksyioq: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto miugmimciywcgswm; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); miugmimciywcgswm: maggecymmmesqmqs: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto ossakckwskyqusmm; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\164\x79\154\x65")) { goto gyskcwykkyakeims; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\154\x65"); if (!preg_match_all("\57\50\x77\x69\x64\164\x68\51\x3a\134\x73\x2a\50\134\x64\x2b\x29\160\x78\x3b\x7c\x28\150\x65\151\147\150\x74\51\72\x5c\163\52\50\134\144\x2b\x29\160\170\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto qkiyyywwuiuackao; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; ecgwgamiseokmise: } csaksaisgawusswg: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); qkiyyywwuiuackao: gyskcwykkyakeims: goto mcagemacuqyskogs; ossakckwskyqusmm: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); mcagemacuqyskogs: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto aamgqoqyyooimqkm; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); aamgqoqyyooimqkm: cimascmiesomqgqs: return $ymyisaeksssueeik; }, false); easuiqiooiwgswmm: return $moooemyaqewumiay; } }
