<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e29caf530             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\137\x68\x65\141\144", [$this, "\x73\147\x6f\x6f\157\x75\141\151\147\161\167\x69\141\161\x6f\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\143\x61\x63\x68\x65\137\x68\x65\x61\x64\x65\162\x73\x5f\154\x69\x73\x74", [$this, "\163\163\147\171\153\x75\x75\x75\x63\153\141\153\171\147\167\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\x73\x73\x65\164\x5f\160\x72\x65\x6c\x6f\x61\144\x5f\154\151\156\153\x73", []); } public function sgooouaigqwiaqoq() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto sykwygmouoikuyws; } if (!headers_sent()) { goto eiekcqosmyqmwqag; } echo $this->ukkcoiggmmycaeuw(); goto mgscyaiwekksacco; eiekcqosmyqmwqag: header("\x31\60\63\40\x45\141\x72\154\171\x20\x48\151\156\164\163", false); header("\x4c\151\156\x6b\72\x20" . $this->wecsewaimwquoqkk(), false); mgscyaiwekksacco: sykwygmouoikuyws: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\54"; ggoquyyseekiwukq: } keiciayiyqsemsys: return rtrim($aqykuigiuwmmcieu, "\x2c"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\x6e\157\x73\143\162\151\160\x74"])) { goto ysiuiuqawkaaamus; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\x6f\x73\143\x72\151\x70\x74"]; unset($ogiyyuwciysokiuc["\x6e\157\163\143\162\151\160\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); ysiuiuqawkaaamus: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); yoociieskmuucgms: } dwciioycickkwawq: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto qooykiaywemimcke; } $uykgysuswksgmwqy[] = "\x31\60\63\40\105\141\162\x6c\x79\x20\110\151\156\x74\x73"; $uykgysuswksgmwqy["\114\151\156\x6b"] = $aiwcguiecocoyqqi; qooykiaywemimcke: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto wimggeysyugwwkca; } if (isset($siquossayskcwkea["\162\x65\154"])) { goto okceyucmoigyokyy; } $siquossayskcwkea["\162\145\154"] = Constants::iwksyuwwwkucsisq; okceyucmoigyokyy: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\145\154", "\x61\x73", "\143\162\157\x73\163\x6f\x72\151\x67\151\x6e", "\x74\171\160\x65", "\x6e\157\160\165\163\x68"], true))) { goto ouuuacyewgmocwsc; } goto iyakeemwaiqeueme; ouuuacyewgmocwsc: if (!is_string($eqgoocgaqwqcimie)) { goto jgaoqcmiqagoiuko; } $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\x3d\x22{$eqgoocgaqwqcimie}\x22\73"; goto iekesyeicomwcuas; jgaoqcmiqagoiuko: $qookweymeqawmcwo .= "\x20{$eqgoocgaqwqcimie}\73"; iekesyeicomwcuas: iyakeemwaiqeueme: } uecmkggsueeiyawk: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\x3b"); $sogksuscggsicmac = sprintf("\74\45\163\76\x3b\x20\x25\x73", esc_url_raw($siquossayskcwkea["\150\x72\145\146"]), $qookweymeqawmcwo); wimggeysyugwwkca: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto cwsgieeaugwciiwu; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\x6c", "\x68\162\x65\x66", "\x61\x73", "\143\x72\x6f\163\x73\157\162\151\147\x69\156", "\x74\171\160\145", "\157\x6e\154\x6f\x61\x64"], true))) { goto iyekgiaayeasoggw; } goto sqokyowsuawgkusy; iyekgiaayeasoggw: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; sqokyowsuawgkusy: } oycikycyewimcaew: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\154\x69\x6e\x6b", $wwgucssaecqekuek); cwsgieeaugwciiwu: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\150\162\145\x66"])) { goto wiigoqowismumcsm; } return []; wiigoqowismumcsm: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto mwkcmgksoyycumos; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; mwkcmgksoyycumos: return $siquossayskcwkea; } }
