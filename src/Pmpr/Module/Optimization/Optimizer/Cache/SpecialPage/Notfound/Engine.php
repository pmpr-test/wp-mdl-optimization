<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132909708a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; class Engine extends Common { public function gskqygiceygcguyo() : string { return untrailingslashit($this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) . "\x2f\x6e\157\164\146\x6f\165\156\144"; } public function guwogeosiyasimgk() : string { return "{$this->gskqygiceygcguyo()}\57\x34\60\x34\x2e\x74\170\164"; } public function wuceuyakuwiquase() : string { return "{$this->gskqygiceygcguyo()}\x2f\x34\x30\64\56\150\164\x6d\x6c"; } public function cqqyaosqycscowyw() : array { $megmggkiokqkcwou = []; $esaqeawoigqgagum = $this->guwogeosiyasimgk(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($esaqeawoigqgagum)) { goto ikygockuuyimmmwk; } $megmggkiokqkcwou = file($esaqeawoigqgagum, FILE_IGNORE_NEW_LINES); if ($megmggkiokqkcwou) { goto yweucowesgsoewyc; } $megmggkiokqkcwou = []; yweucowesgsoewyc: ikygockuuyimmmwk: return $megmggkiokqkcwou; } public function iuwqmqagcwaeoksk(?string $aaokuekaimigoyue, ?array $essikcmqiyqaqoaq = null) { $ksaameoqigiaoigg = false; if (!$aaokuekaimigoyue) { goto muimagegskoisckc; } if (is_array($essikcmqiyqaqoaq)) { goto uwmcugkwqwcuqqsq; } $essikcmqiyqaqoaq = $this->cqqyaosqycscowyw(); uwmcugkwqwcuqqsq: if (!($essikcmqiyqaqoaq && in_array($aaokuekaimigoyue, $essikcmqiyqaqoaq, true))) { goto cycasoiysmksuwqk; } $ksaameoqigiaoigg = array_search($aaokuekaimigoyue, $essikcmqiyqaqoaq, true); cycasoiysmksuwqk: muimagegskoisckc: return $ksaameoqigiaoigg; } public function kywqieosgkokaiue(?string $aaokuekaimigoyue) { if (!($this->iuwqmqagcwaeoksk($aaokuekaimigoyue) === false)) { goto yicaqocukqoauqgc; } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->guwogeosiyasimgk(), $aaokuekaimigoyue . PHP_EOL, FILE_APPEND); yicaqocukqoauqgc: } }
