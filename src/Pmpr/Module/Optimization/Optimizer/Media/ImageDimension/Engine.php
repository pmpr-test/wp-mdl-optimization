<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08ff06dc0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\ImageDimension; use DOMElement; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Engine extends BufferEngine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, "\x63\x61\153\153\x79\x71\x69\x79\167\143\163\x6f\151\153\x77\x73"]); } public function cakkyqiywcsoikws($moooemyaqewumiay) { $yuumukkaswwoywya = "\x69\155\x67\x3a\156\x6f\164\50\133\167\x69\x64\164\x68\x5d\x29\x3a\x6e\x6f\164\50\133\150\145\151\x67\x68\x74\x5d\x29"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto qywkykqkeeuccoui; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!(!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\144\141\x74\141\x2d\x6c\x61\x7a\x79\55\157\x72\151\x67\151\x6e\141\154") && !$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\x64\141\x74\x61\55\156\157\x2d\x69\155\x61\147\x65\55\144\x69\x6d\145\x6e\x73\x69\157\156\163"))) { goto oqgymyiwckkwueuw; } $wyicceigkekkkwgs = []; $egsumesakcaaukem = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\162\143"); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($egsumesakcaaukem); try { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->aoaeiwswyagmesku($egsumesakcaaukem)) { goto ceaamccscgcmqgka; } if (!ini_get("\x61\154\154\157\167\x5f\x75\162\x6c\x5f\146\x6f\160\145\x6e")) { goto ycecaauekkiqacuu; } $mkomwsiykqigmqca = $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!in_array(pathinfo($mkomwsiykqigmqca, PATHINFO_EXTENSION), ["\160\156\147", "\x77\145\142\160", "\147\x69\146", "\x73\x76\147", "\x6a\160\145\147", "\152\160\147"], true)) { goto qmguoqeawegcoeoa; } $wyicceigkekkkwgs = getimagesize($yiasugywggckywoa["\163\x63\150\145\155\145"] . "\x3a\x2f\57" . $yiasugywggckywoa[Constants::ckiaowgkqoewoseo] . $mkomwsiykqigmqca); qmguoqeawegcoeoa: ycecaauekkiqacuu: goto omumkeywqqogwwue; ceaamccscgcmqgka: $mkomwsiykqigmqca = untrailingslashit(ABSPATH) . $yiasugywggckywoa[Constants::okmiyqowuqogaiiy]; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) { goto sayqggaieocmskko; } $wyicceigkekkkwgs = getimagesize($mkomwsiykqigmqca); sayqggaieocmskko: omumkeywqqogwwue: } catch (Exception $wgaoewqkwgomoaai) { } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qeswwaqqsyymqawg = $cswemwoyesycwkuq = 50; if (is_array($wyicceigkekkkwgs) && $wyicceigkekkkwgs) { goto qiikwossequwiuom; } if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, "\163\x74\x79\154\x65")) { goto ymucaguacemwsgsi; } $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\x79\154\x65"); if (!preg_match_all("\x2f\50\167\x69\x64\164\x68\51\72\x5c\163\52\50\x5c\x64\53\x29\x70\x78\x3b\174\x28\x68\145\x69\x67\150\x74\x29\x3a\x5c\163\x2a\50\x5c\x64\x2b\51\160\170\x3b\57", $kswaimykcacqyaay, $meyiiwcswqmuggyg, PREG_SET_ORDER)) { goto ociesuicgmkekcue; } foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = array_filter($uammqaqiwgcmeska); $wisgiwskwawciiee = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 1); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($uammqaqiwgcmeska, 2); $meyiiwcswqmuggyg[$wisgiwskwawciiee] = $eqgoocgaqwqcimie; wiaymoucakyaikii: } igyesgemqesackws: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::qomookamaskuoswk, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg, Constants::sogmkkcwuamuqegw, 0); ociesuicgmkekcue: ymucaguacemwsgsi: goto gaouaiemokqqgssw; qiikwossequwiuom: $qeswwaqqsyymqawg = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 0); $cswemwoyesycwkuq = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, 1); gaouaiemokqqgssw: if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto wqwmuuicoqigqwyc; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::qomookamaskuoswk, $qeswwaqqsyymqawg); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, Constants::sogmkkcwuamuqegw, $cswemwoyesycwkuq); wqwmuuicoqigqwyc: oqgymyiwckkwueuw: return $ymyisaeksssueeik; }, false); qywkykqkeeuccoui: return $moooemyaqewumiay; } }
