<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b5b18721             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\x68\x65\x61\x64", [$this, "\x73\x67\157\x6f\x6f\165\x61\151\x67\161\x77\x69\141\161\157\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\141\143\150\145\x5f\150\x65\x61\x64\x65\x72\163\x5f\x6c\x69\163\164", [$this, "\x73\163\147\171\153\165\165\165\143\153\141\153\171\147\167\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\141\x73\163\145\x74\x5f\x70\x72\145\154\x6f\141\x64\x5f\154\151\x6e\x6b\x73", []); } public function sgooouaigqwiaqoq() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto yoociieskmuucgms; } if (!headers_sent()) { goto ggoquyyseekiwukq; } echo $this->ukkcoiggmmycaeuw(); goto dwciioycickkwawq; ggoquyyseekiwukq: header("\x31\x30\x33\x20\x45\141\162\154\171\x20\x48\151\156\x74\163", false); header("\x4c\x69\x6e\153\x3a\x20" . $this->wecsewaimwquoqkk(), false); dwciioycickkwawq: yoociieskmuucgms: } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; qooykiaywemimcke: } ysiuiuqawkaaamus: return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (!isset($ogiyyuwciysokiuc["\x6e\157\x73\143\162\x69\160\164"])) { goto iyakeemwaiqeueme; } $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\x6e\157\163\143\x72\x69\160\164"]; unset($ogiyyuwciysokiuc["\x6e\x6f\x73\143\x72\151\160\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); iyakeemwaiqeueme: $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); uecmkggsueeiyawk: } okceyucmoigyokyy: return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if (!$aiwcguiecocoyqqi) { goto ouuuacyewgmocwsc; } $uykgysuswksgmwqy[] = "\61\60\x33\40\105\141\162\x6c\171\x20\110\151\x6e\164\x73"; $uykgysuswksgmwqy["\x4c\x69\x6e\153"] = $aiwcguiecocoyqqi; ouuuacyewgmocwsc: return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto cwsgieeaugwciiwu; } if (isset($siquossayskcwkea["\162\x65\154"])) { goto jgaoqcmiqagoiuko; } $siquossayskcwkea["\162\x65\154"] = Constants::iwksyuwwwkucsisq; jgaoqcmiqagoiuko: $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\x65\154", "\x61\163", "\143\x72\x6f\163\163\157\x72\151\147\x69\156", "\x74\x79\160\145", "\x6e\x6f\160\165\x73\x68"], true))) { goto oycikycyewimcaew; } goto wimggeysyugwwkca; oycikycyewimcaew: if (!is_string($eqgoocgaqwqcimie)) { goto sqokyowsuawgkusy; } $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\x3d\x22{$eqgoocgaqwqcimie}\42\73"; goto iyekgiaayeasoggw; sqokyowsuawgkusy: $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\73"; iyekgiaayeasoggw: wimggeysyugwwkca: } iekesyeicomwcuas: $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\x3b"); $sogksuscggsicmac = sprintf("\74\x25\x73\x3e\73\40\x25\x73", esc_url_raw($siquossayskcwkea["\x68\x72\145\x66"]), $qookweymeqawmcwo); cwsgieeaugwciiwu: return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if (!$siquossayskcwkea) { goto ukcukckucsyaggmw; } $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!(!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\145\154", "\x68\x72\145\146", "\141\x73", "\x63\162\157\x73\163\x6f\162\151\147\151\x6e", "\x74\x79\x70\145", "\157\x6e\154\157\x61\144"], true))) { goto aikukgimkamkgwsu; } goto mwkcmgksoyycumos; aikukgimkamkgwsu: $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; mwkcmgksoyycumos: } wiigoqowismumcsm: $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\151\x6e\x6b", $wwgucssaecqekuek); ukcukckucsyaggmw: return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (isset($siquossayskcwkea["\x68\162\x65\x66"])) { goto caskqicqwmyuugku; } return []; caskqicqwmyuugku: if (!isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { goto assyuumuuuocycyy; } $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; assyuumuuuocycyy: return $siquossayskcwkea; } }
