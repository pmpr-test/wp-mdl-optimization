<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832e82cef8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Preload extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_head', [$this, 'sgooouaigqwiaqoq']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . 'cache_headers_list', [$this, 'ssgykuuuckakygwg']); } public function auwoukwweaicagsq() { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'asset_preload_links', []); } public function sgooouaigqwiaqoq() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { if (!headers_sent()) { header('103 Early Hints', false); header('Link: ' . $this->wecsewaimwquoqkk(), false); } else { echo $this->ukkcoiggmmycaeuw(); } } } public function wecsewaimwquoqkk() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { $aqykuigiuwmmcieu .= $this->gqiiiaisiqmqomww($ogiyyuwciysokiuc) . ','; } return rtrim($aqykuigiuwmmcieu, ','); } public function ukkcoiggmmycaeuw() : string { $aiwcguiecocoyqqi = $this->auwoukwweaicagsq(); $aqykuigiuwmmcieu = ''; foreach ($aiwcguiecocoyqqi as $ogiyyuwciysokiuc) { if (isset($ogiyyuwciysokiuc['noscript'])) { $cuiaccicqeqwyyuo = $ogiyyuwciysokiuc['noscript']; unset($ogiyyuwciysokiuc['noscript']); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yoamscgeuweiugse($cuiaccicqeqwyyuo); } $aqykuigiuwmmcieu .= $this->oqsucquusggqcoao($ogiyyuwciysokiuc); } return $aqykuigiuwmmcieu; } public function ssgykuuuckakygwg($uykgysuswksgmwqy) : array { $aiwcguiecocoyqqi = $this->wecsewaimwquoqkk(); if ($aiwcguiecocoyqqi) { $uykgysuswksgmwqy[] = '103 Early Hints'; $uykgysuswksgmwqy['Link'] = $aiwcguiecocoyqqi; } return $uykgysuswksgmwqy; } private function gqiiiaisiqmqomww(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { if (!isset($siquossayskcwkea['rel'])) { $siquossayskcwkea['rel'] = Constants::iwksyuwwwkucsisq; } $qookweymeqawmcwo = ''; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ['rel', 'as', 'crossorigin', 'type', 'nopush'], true)) { continue; } if (!is_string($eqgoocgaqwqcimie)) { $qookweymeqawmcwo .= " {$eqgoocgaqwqcimie};"; } else { $qookweymeqawmcwo .= " {$ymkomoccmymcoiea}=\"{$eqgoocgaqwqcimie}\";"; } } $qookweymeqawmcwo = trim($qookweymeqawmcwo); $qookweymeqawmcwo = rtrim($qookweymeqawmcwo, ';'); $sogksuscggsicmac = sprintf('<%s>; %s', esc_url_raw($siquossayskcwkea['href']), $qookweymeqawmcwo); } return $sogksuscggsicmac; } public function oqsucquusggqcoao(array $siquossayskcwkea) : string { $sogksuscggsicmac = ''; $siquossayskcwkea = $this->iwwioqumuewcikoq($siquossayskcwkea); if ($siquossayskcwkea) { $wwgucssaecqekuek = []; foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) { if (!is_scalar($eqgoocgaqwqcimie) || !is_numeric($ymkomoccmymcoiea) && !in_array($ymkomoccmymcoiea, ['rel', 'href', 'as', 'crossorigin', 'type', 'onload'], true)) { continue; } $wwgucssaecqekuek[$ymkomoccmymcoiea] = $eqgoocgaqwqcimie; } $sogksuscggsicmac = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('link', $wwgucssaecqekuek); } return $sogksuscggsicmac; } public function iwwioqumuewcikoq(array $siquossayskcwkea) : array { if (!isset($siquossayskcwkea['href'])) { return []; } if (isset($siquossayskcwkea[Constants::caoiqkqugiqqqimm])) { $siquossayskcwkea[Constants::caoiqkqugiqqqimm] = Constants::iwksyuwwwkucsisq; } return $siquossayskcwkea; } }
