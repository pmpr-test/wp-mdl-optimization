<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             688b66f09a74b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; abstract class Buffer { protected ?string $id; protected ?Test $test = null; public function __construct(?Test $sssgouqemgcgwgcc) { $this->test = $sssgouqemgcgwgcc; $this->qqcykaeioiwwaqos(); } public function mwikyscisascoeea() : ?string { return $this->id; } public function wmgoigiyyeauqwaq() : Test { return $this->test; } public function gwaoiqgsuaggegwc() { $iswcokucwmiosiaq = $this->wmgoigiyyeauqwaq()->wkcsqoiqoeuccaqy(); $this->log($iswcokucwmiosiaq['message'], $iswcokucwmiosiaq['context']); } protected function log(string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->wmgoigiyyeauqwaq()->log($uamcoiueqaamsqma, $mgkceomocowocqyo); } protected function qmyusgwkaqieouwi(string $moooemyaqewumiay) { return preg_match('/<\\/html>/i', $moooemyaqewumiay); } public abstract function qqcykaeioiwwaqos(); public abstract function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string; }
