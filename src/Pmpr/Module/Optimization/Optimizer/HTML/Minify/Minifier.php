<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e86b3a376             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csggsqueaqmwgwkk; } $this->miasamwyaiagioug([$this, "\157\x6b\165\147\165\171\141\x63\147\x67\163\141\147\x65\161\161"], 50); csggsqueaqmwgwkk: $this->aqaqisyssqeomwom("\x6d\151\156\151\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\153\165\x67\165\171\x61\143\x67\x67\x73\x61\147\x65\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\x3c{$kqywgoqsmuswammk}\x5b\134\x73\134\x53\x5d\x2a\77\x3e\51\x28\x5b\134\163\x5c\123\x5d\52\x3f\x29\x28\x3c\x5c\57{$kqywgoqsmuswammk}\76\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto sescaagayikiggyq; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); sescaagayikiggyq: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wwwggoemicgwwasy; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wwwggoemicgwwasy: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\x5b\136\134\x6e\x5c\x74\x5c\162\135\x2b\x28\134\x72\134\164\134\156\x3f\174\x5c\x74\x5c\156\51\x3f\x24\x2f", $nsmgceoqaqogqmuw); } }
