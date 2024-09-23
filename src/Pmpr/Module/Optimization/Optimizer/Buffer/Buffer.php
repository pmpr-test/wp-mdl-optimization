<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1eae701745             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; abstract class Buffer { protected ?string $id; protected ?Test $test = null; public function __construct(?Test $sssgouqemgcgwgcc) { $this->test = $sssgouqemgcgwgcc; $this->qqcykaeioiwwaqos(); } public function mwikyscisascoeea() : ?string { return $this->id; } public function wmgoigiyyeauqwaq() : Test { return $this->test; } public function gwaoiqgsuaggegwc() { $iswcokucwmiosiaq = $this->wmgoigiyyeauqwaq()->wkcsqoiqoeuccaqy(); $this->log($iswcokucwmiosiaq["\155\x65\163\x73\x61\x67\145"], $iswcokucwmiosiaq["\143\x6f\x6e\164\x65\170\164"]); } protected function log(string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->wmgoigiyyeauqwaq()->log($uamcoiueqaamsqma, $mgkceomocowocqyo); } protected function qmyusgwkaqieouwi(string $moooemyaqewumiay) { return preg_match("\x2f\x3c\x5c\x2f\150\x74\x6d\x6c\x3e\x2f\x69", $moooemyaqewumiay); } public abstract function qqcykaeioiwwaqos(); public abstract function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string; }
