<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc54f326c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Preload extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\150\x65\141\x64", [$this, "\163\147\x6f\x6f\x6f\165\141\x69\147\x71\x77\x69\141\x71\x6f\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . "\x63\141\143\x68\x65\137\x68\145\141\144\145\162\163\x5f\154\151\163\x74", [$this, "\x73\163\x67\x79\153\165\165\x75\143\153\x61\153\171\147\x77\147"]); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x61\x73\x73\x65\164\x5f\160\x72\145\154\157\141\144\137\154\151\x6e\153\x73", []); } public function sgooouaigqwiaqoq() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { if (!headers_sent()) { header("\x31\x30\63\40\x45\141\162\x6c\x79\40\x48\x69\x6e\164\163", false); header("\114\x69\x6e\x6b\x3a\40" . $this->wecsewaimwquoqkk(), false); } else { echo $this->ukkcoiggmmycaeuw(); } } } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . "\x2c"; } return rtrim($aqykuigiuwmmcieu, "\54"); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (isset($ogiyyuwciysokiuc["\x6e\x6f\x73\x63\x72\x69\160\x74"])) { $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc["\x6e\x6f\x73\x63\162\x69\x70\164"]; unset($ogiyyuwciysokiuc["\x6e\157\163\x63\x72\151\x70\164"]); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); } $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); } return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if ($aiwcguiecocoyqqi) { $uykgysuswksgmwqy[] = "\61\60\63\40\105\x61\162\154\171\x20\110\151\x6e\164\x73"; $uykgysuswksgmwqy["\x4c\151\x6e\x6b"] = $aiwcguiecocoyqqi; } return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { if (!isset($siquossayskcwkea["\x72\x65\x6c"])) { $siquossayskcwkea["\162\145\154"] = Constants::iwksyuwwwkucsisq; } $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\162\x65\154", "\141\x73", "\x63\162\157\x73\163\157\x72\x69\147\x69\156", "\164\x79\160\145", "\156\x6f\x70\x75\x73\150"], true)) { continue; } if (!is_string($eqgoocgaqwqcimie)) { $qookweymeqawmcwo .= "\40{$eqgoocgaqwqcimie}\73"; } else { $qookweymeqawmcwo .= "\x20{$ymkomoccmymcoiea}\75\42{$eqgoocgaqwqcimie}\x22\73"; } } $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, "\73"); $sogksuscggsicmac = sprintf("\74\x25\x73\76\x3b\x20\45\163", esc_url_raw($siquossayskcwkea["\150\162\x65\x66"]), $qookweymeqawmcwo); } return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ["\x72\x65\154", "\150\162\145\146", "\x61\x73", "\143\x72\x6f\163\163\x6f\162\151\x67\151\156", "\164\x79\160\x65", "\x6f\156\154\157\141\x64"], true)) { continue; } $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; } $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x6c\x69\x6e\153", $wwgucssaecqekuek); } return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (!isset($siquossayskcwkea["\x68\162\145\146"])) { return []; } if (isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; } return $siquossayskcwkea; } }
