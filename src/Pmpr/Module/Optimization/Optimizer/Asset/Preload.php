<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581ccae80ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Preload extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\150\x65\141\x64", [$this, "\x73\x67\x6f\157\157\x75\141\x69\147\x71\x77\x69\141\x71\157\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\143\x61\143\150\145\x5f\150\x65\x61\x64\x65\x72\163\x5f\x6c\x69\x73\x74", [$this, "\x73\163\x67\171\x6b\165\165\165\143\153\141\x6b\x79\x67\x77\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x61\163\163\x65\164\x5f\160\x72\x65\x6c\x6f\141\x64\137\x6c\151\156\153\163", []); } public function sgooouaigqwiaqoq() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { if (!headers_sent()) { header("\61\x30\x33\40\105\x61\162\x6c\x79\40\110\x69\x6e\164\x73", false); header("\114\x69\x6e\x6b\72\40" . $this->wecsewaimwquoqkk(), false); } else { echo $this->ukkcoiggmmycaeuw(); } } } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\54"; } return rtrim($aqykuigiuwmmcieu, "\x2c"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (isset($ogiyyuwciysokiuc["\x6e\157\163\x63\162\x69\160\x74"])) { $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\156\x6f\x73\143\162\151\x70\x74"]; unset($ogiyyuwciysokiuc["\156\x6f\x73\143\162\x69\160\x74"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); } $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); } return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if ($aiwcguiecocoyqqi) { $uykgysuswksgmwqy[] = "\x31\60\63\40\x45\x61\162\x6c\x79\x20\x48\x69\156\x74\x73"; $uykgysuswksgmwqy["\114\151\156\x6b"] = $aiwcguiecocoyqqi; } return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { if (!isset($siquossayskcwkea["\x72\x65\x6c"])) { $siquossayskcwkea["\162\x65\154"] = Constants::iwksyuwwwkucsisq; } $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\x6c", "\x61\163", "\x63\162\x6f\163\x73\157\x72\x69\x67\151\x6e", "\x74\171\160\x65", "\156\157\x70\x75\163\x68"], true)) { continue; } if (!is_string($eqgoocgaqwqcimie)) { $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\x3b"; } else { $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\75\x22{$eqgoocgaqwqcimie}\x22\73"; } } $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\x3b"); $sogksuscggsicmac = sprintf("\x3c\45\163\76\73\x20\x25\163", esc_url_raw($siquossayskcwkea["\x68\x72\x65\x66"]), $qookweymeqawmcwo); } return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\x65\x6c", "\x68\x72\x65\x66", "\x61\x73", "\143\x72\157\163\x73\x6f\162\151\147\x69\156", "\164\171\160\x65", "\x6f\156\x6c\157\141\x64"], true)) { continue; } $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; } $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\x69\x6e\153", $wwgucssaecqekuek); } return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (!isset($siquossayskcwkea["\x68\162\x65\146"])) { return []; } if (isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; } return $siquossayskcwkea; } }
