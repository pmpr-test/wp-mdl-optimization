<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eafa4785061             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\143\141\x6b\x6b\x79\x71\151\x79\x77\143\163\x6f\151\x6b\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\x6d\x67\72\x6e\157\x74\50\x5b\x77\x69\144\164\x68\x5d\51\72\156\157\x74\x28\x5b\150\x65\x69\147\150\164\135\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto eguukwmoyaaieuww; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\141\55\154\x61\x7a\x79\55\157\162\x69\147\151\x6e\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\141\x2d\156\x6f\55\x69\x6d\141\x67\145\x2d\x64\x69\155\x65\156\163\x69\x6f\x6e\163"))) { goto cwomucmeuqqucyge; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto gsgocqicesmaecse; } if (!ini_get("\x61\x6c\x6c\x6f\x77\x5f\165\162\x6c\137\146\157\160\145\x6e")) { goto cuyaakuucgwmcuqq; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\156\147", "\x77\145\x62\x70", "\147\151\146", "\163\x76\147", "\x6a\x70\145\x67", "\x6a\160\147"], true)) { goto iysiwmeymsoucaka; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\x65\155\x65"] . "\x3a\57\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); iysiwmeymsoucaka: cuyaakuucgwmcuqq: goto oskwwcgyuwkiuacu; gsgocqicesmaecse: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto iiikyaquagwawkce; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); iiikyaquagwawkce: oskwwcgyuwkiuacu: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto qgmgmkeiemcqkyim; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\x79\x6c\x65")) { goto waaammoiumecaiys; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\171\154\x65"); if (!preg_match_all("\57\x28\167\x69\144\x74\150\x29\x3a\134\x73\52\x28\134\144\53\x29\x70\x78\73\174\x28\150\145\151\147\x68\x74\x29\72\134\x73\x2a\50\134\x64\53\x29\x70\170\73\x2f", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ccqkugckigeckeqa; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; swkukukimeueycaq: } qsecoiqswyiseake: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); ccqkugckigeckeqa: waaammoiumecaiys: goto oqoogougwwcqeimq; qgmgmkeiemcqkyim: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); oqoogougwwcqeimq: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto eqiiqamuyewoowwy; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); eqiiqamuyewoowwy: cwomucmeuqqucyge: return $ymyisaeksssueeik; }, false); eguukwmoyaaieuww: return $moooemyaqewumiay; } }
