<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f13d321859c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\150\x65\x61\x64", [$this, "\163\x67\157\x6f\x6f\x75\x61\x69\147\161\167\151\141\x71\157\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\143\141\x63\150\x65\137\x68\x65\141\x64\x65\162\163\x5f\154\151\x73\x74", [$this, "\163\163\147\171\153\x75\x75\x75\143\153\x61\x6b\x79\147\167\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x61\x73\x73\145\x74\x5f\x70\162\145\154\157\x61\144\137\154\151\x6e\153\x73", []); } public function sgooouaigqwiaqoq() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto msuyygiskkumokec; } if (!headers_sent()) { goto wiiyageyqowkmmko; } echo $this->ukkcoiggmmycaeuw(); goto mowauiysyiciqaaa; wiiyageyqowkmmko: header("\61\60\x33\x20\x45\x61\162\x6c\x79\40\110\x69\x6e\x74\163", false); header("\114\x69\156\153\72\x20" . $this->wecsewaimwquoqkk(), false); mowauiysyiciqaaa: msuyygiskkumokec: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\54"; iyeswqeqcsmsoueq: } ggkgseywksemuogc: return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\156\157\x73\x63\x72\151\160\164"])) { goto sykwygmouoikuyws; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\157\x73\x63\x72\x69\x70\164"]; unset($ogiyyuwciysokiuc["\156\157\x73\143\x72\x69\160\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); sykwygmouoikuyws: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); mgscyaiwekksacco: } eiekcqosmyqmwqag: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto keiciayiyqsemsys; } $uykgysuswksgmwqy[] = "\x31\x30\63\40\x45\x61\162\x6c\171\40\x48\x69\156\x74\x73"; $uykgysuswksgmwqy["\114\151\x6e\153"] = $aiwcguiecocoyqqi; keiciayiyqsemsys: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto uecmkggsueeiyawk; } if (isset($siquossayskcwkea["\162\x65\154"])) { goto ggoquyyseekiwukq; } $siquossayskcwkea["\162\145\x6c"] = Constants::iwksyuwwwkucsisq; ggoquyyseekiwukq: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\145\154", "\x61\x73", "\x63\162\157\163\163\157\162\x69\147\151\x6e", "\x74\x79\160\x65", "\x6e\157\x70\x75\x73\150"], true))) { goto ysiuiuqawkaaamus; } goto yoociieskmuucgms; ysiuiuqawkaaamus: if (!is_string($eqgoocgaqwqcimie)) { goto qooykiaywemimcke; } $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\x3d\42{$eqgoocgaqwqcimie}\x22\73"; goto okceyucmoigyokyy; qooykiaywemimcke: $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\x3b"; okceyucmoigyokyy: yoociieskmuucgms: } dwciioycickkwawq: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\x3b"); $sogksuscggsicmac = sprintf("\x3c\45\x73\76\x3b\40\x25\163", esc_url_raw($siquossayskcwkea["\150\x72\145\146"]), $qookweymeqawmcwo); uecmkggsueeiyawk: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto iekesyeicomwcuas; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\154", "\150\162\x65\146", "\141\x73", "\143\162\157\163\163\157\x72\151\147\151\x6e", "\x74\171\160\x65", "\x6f\x6e\x6c\x6f\141\144"], true))) { goto jgaoqcmiqagoiuko; } goto ouuuacyewgmocwsc; jgaoqcmiqagoiuko: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; ouuuacyewgmocwsc: } iyakeemwaiqeueme: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\151\x6e\153", $wwgucssaecqekuek); iekesyeicomwcuas: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\x68\x72\x65\146"])) { goto wimggeysyugwwkca; } return []; wimggeysyugwwkca: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto oycikycyewimcaew; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; oycikycyewimcaew: return $siquossayskcwkea; } }
