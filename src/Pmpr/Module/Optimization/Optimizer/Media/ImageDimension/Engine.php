<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b472f16c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\141\x6b\x6b\x79\x71\x69\171\x77\143\163\x6f\151\x6b\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\155\147\x3a\156\157\x74\x28\133\167\151\x64\x74\150\x5d\x29\72\156\157\164\50\133\150\x65\151\147\x68\164\135\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qaewauyekqucciyc; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\x61\164\141\x2d\154\x61\x7a\171\55\x6f\x72\151\x67\151\x6e\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\141\x2d\x6e\157\x2d\x69\x6d\x61\x67\x65\x2d\x64\151\155\x65\156\x73\x69\157\156\x73"))) { goto momuweiasiwskekw; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto gyskcwykkyakeims; } if (!ini_get("\141\154\154\157\167\x5f\165\x72\154\137\x66\157\160\x65\156")) { goto qkiyyywwuiuackao; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\x70\156\147", "\167\x65\x62\x70", "\147\x69\146", "\163\x76\147", "\x6a\160\145\x67", "\152\x70\x67"], true)) { goto ecgwgamiseokmise; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\143\x68\x65\155\x65"] . "\x3a\57\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); ecgwgamiseokmise: qkiyyywwuiuackao: goto ossakckwskyqusmm; gyskcwykkyakeims: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto csaksaisgawusswg; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); csaksaisgawusswg: ossakckwskyqusmm: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto saiuoomgskwgyeya; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\164\x79\x6c\x65")) { goto easuiqiooiwgswmm; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\154\x65"); if (!preg_match_all("\57\x28\167\x69\144\164\150\51\x3a\x5c\x73\x2a\x28\134\x64\x2b\51\x70\170\x3b\x7c\50\150\145\x69\147\x68\164\x29\72\x5c\x73\x2a\50\x5c\x64\53\51\x70\x78\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto cimascmiesomqgqs; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; aamgqoqyyooimqkm: } mcagemacuqyskogs: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); cimascmiesomqgqs: easuiqiooiwgswmm: goto kuuawiosmkgqsscy; saiuoomgskwgyeya: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); kuuawiosmkgqsscy: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto kwocaqggwcksesce; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); kwocaqggwcksesce: momuweiasiwskekw: return $ymyisaeksssueeik; }, false); qaewauyekqucciyc: return $moooemyaqewumiay; } }
