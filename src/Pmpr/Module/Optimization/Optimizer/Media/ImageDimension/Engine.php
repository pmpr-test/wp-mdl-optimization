<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0c5f88d120             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\x61\153\153\x79\x71\151\171\x77\143\x73\157\151\x6b\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\x6d\x67\x3a\156\157\164\x28\133\x77\x69\x64\164\x68\135\51\x3a\156\x6f\x74\x28\133\x68\x65\151\147\x68\x74\x5d\51"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto gyskcwykkyakeims; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\141\x2d\x6c\141\172\171\x2d\x6f\162\151\x67\151\x6e\141\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\x61\x2d\x6e\x6f\55\x69\155\x61\147\x65\55\144\x69\x6d\145\156\163\151\x6f\156\x73"))) { goto qkiyyywwuiuackao; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto kkmuuoscccmokkiw; } if (!ini_get("\x61\x6c\154\x6f\167\137\x75\x72\154\137\x66\157\160\x65\x6e")) { goto oaqeoqsksuyyggmg; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\x70\x6e\x67", "\167\145\x62\x70", "\147\151\146", "\163\166\x67", "\152\x70\x65\x67", "\152\x70\x67"], true)) { goto kiskwawumeiiieuk; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\145\155\x65"] . "\72\x2f\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); kiskwawumeiiieuk: oaqeoqsksuyyggmg: goto awuwuuuagqysukku; kkmuuoscccmokkiw: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto kwasqmcyiswoaiuu; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); kwasqmcyiswoaiuu: awuwuuuagqysukku: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto maggecymmmesqmqs; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\171\x6c\145")) { goto emeeocqaisksyioq; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\x6c\145"); if (!preg_match_all("\57\x28\167\x69\144\164\x68\x29\x3a\x5c\x73\52\50\134\144\53\x29\x70\170\x3b\x7c\50\x68\x65\x69\147\x68\164\51\x3a\134\x73\x2a\x28\x5c\x64\53\x29\x70\x78\x3b\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto mcqwuawosciucemq; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; aqekkeqmmewoyawu: } miugmimciywcgswm: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); mcqwuawosciucemq: emeeocqaisksyioq: goto csaksaisgawusswg; maggecymmmesqmqs: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); csaksaisgawusswg: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto ecgwgamiseokmise; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); ecgwgamiseokmise: qkiyyywwuiuackao: return $ymyisaeksssueeik; }, false); gyskcwykkyakeims: return $moooemyaqewumiay; } }
