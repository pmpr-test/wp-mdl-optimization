<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0c9956f5c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\57\x6e\157\164\146\157\x75\156\x64"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\64\x2e\x74\x78\x74"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\57\64\x30\x34\x2e\150\164\155\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto ikygockuuyimmmwk; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto yweucowesgsoewyc; } $megmggkiokqkcwou = []; yweucowesgsoewyc: ikygockuuyimmmwk: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto muimagegskoisckc; } if (is_array($essikcmqiyqaqoaq)) { goto uwmcugkwqwcuqqsq; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); uwmcugkwqwcuqqsq: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto cycasoiysmksuwqk; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); cycasoiysmksuwqk: muimagegskoisckc: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto yicaqocukqoauqgc; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); yicaqocukqoauqgc: } }
