<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c4541eb2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Preload extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\x68\x65\x61\x64", [$this, "\163\x67\x6f\157\157\165\x61\x69\147\161\x77\151\x61\161\x6f\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\141\143\150\x65\x5f\x68\x65\141\x64\x65\x72\x73\137\x6c\151\163\164", [$this, "\163\163\x67\x79\x6b\x75\165\x75\143\x6b\x61\x6b\171\x67\167\x67"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x61\163\163\145\x74\x5f\x70\162\x65\154\x6f\141\144\137\x6c\151\156\153\163", []); } public function sgooouaigqwiaqoq() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { if (!headers_sent()) { header("\61\x30\x33\40\x45\x61\x72\x6c\x79\x20\110\151\x6e\x74\163", false); header("\114\x69\156\153\72\x20" . $this->wecsewaimwquoqkk(), false); } else { echo $this->ukkcoiggmmycaeuw(); } } } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; } return rtrim($aqykuigiuwmmcieu, "\x2c"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (isset($ogiyyuwciysokiuc["\x6e\157\163\x63\x72\x69\x70\164"])) { $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\x6e\x6f\x73\x63\162\151\x70\164"]; unset($ogiyyuwciysokiuc["\x6e\157\163\143\x72\x69\x70\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); } $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); } return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if ($aiwcguiecocoyqqi) { $uykgysuswksgmwqy[] = "\x31\60\x33\x20\105\x61\162\154\x79\40\110\151\x6e\164\163"; $uykgysuswksgmwqy["\x4c\x69\156\153"] = $aiwcguiecocoyqqi; } return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { if (!isset($siquossayskcwkea["\162\x65\x6c"])) { $siquossayskcwkea["\x72\x65\154"] = Constants::iwksyuwwwkucsisq; } $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\145\x6c", "\x61\x73", "\143\x72\157\x73\x73\157\x72\x69\x67\151\156", "\x74\171\160\145", "\x6e\x6f\160\165\163\150"], true)) { continue; } if (!is_string($eqgoocgaqwqcimie)) { $qookweymeqawmcwo .= "\x20{$eqgoocgaqwqcimie}\73"; } else { $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\75\42{$eqgoocgaqwqcimie}\42\73"; } } $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\74\x25\163\76\x3b\40\45\x73", esc_url_raw($siquossayskcwkea["\150\162\145\x66"]), $qookweymeqawmcwo); } return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\x65\x6c", "\150\x72\x65\146", "\141\x73", "\143\162\157\x73\x73\x6f\x72\x69\147\x69\x6e", "\164\x79\160\x65", "\x6f\x6e\x6c\x6f\x61\x64"], true)) { continue; } $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; } $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\154\151\x6e\153", $wwgucssaecqekuek); } return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (!isset($siquossayskcwkea["\x68\x72\x65\146"])) { return []; } if (isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; } return $siquossayskcwkea; } }
