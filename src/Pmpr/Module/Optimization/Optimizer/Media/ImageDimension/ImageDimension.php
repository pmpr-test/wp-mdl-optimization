<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581ccae80ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; class ImageDimension extends Engine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\x61\x6b\x6b\x79\161\x69\171\x77\x63\x73\157\151\x6b\167\163"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\151\155\x67\x3a\x6e\x6f\164\50\x5b\167\151\144\x74\x68\x5d\x29\72\x6e\157\x74\50\133\x68\x65\x69\147\150\x74\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\x74\x61\55\x6c\x61\172\171\x2d\x6f\x72\151\147\151\156\x61\x6c") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\x61\164\141\x2d\x6e\157\x2d\151\x6d\x61\x67\x65\55\144\151\x6d\x65\156\163\x69\x6f\x6e\163")) { $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if ($this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); } } else { if (ini_get("\141\x6c\x6c\x6f\x77\x5f\165\162\x6c\x5f\146\x6f\160\x65\x6e")) { $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\x6e\147", "\167\145\x62\x70", "\x67\151\146", "\163\x76\x67", "\152\x70\145\x67", "\152\x70\147"], true)) { $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\x73\143\x68\x65\155\145"] . "\72\x2f\x2f" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); } } } } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); } else { if ($smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x73\x74\171\154\145")) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\171\154\145"); if (preg_match_all("\57\50\167\151\x64\164\150\x29\x3a\x5c\x73\52\x28\x5c\x64\x2b\x29\x70\x78\x3b\x7c\50\150\145\x69\x67\x68\x74\x29\72\134\163\52\50\134\144\x2b\x29\x70\x78\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; } $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); } } } if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); } } return $ymyisaeksssueeik; }, false); } return $moooemyaqewumiay; } }
