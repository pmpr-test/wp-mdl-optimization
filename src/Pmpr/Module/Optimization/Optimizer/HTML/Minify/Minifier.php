<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723572e2b020             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { $this->miasamwyaiagioug([$this, "\x6f\153\165\x67\x75\x79\x61\x63\147\x67\x73\x61\x67\145\161\161"], 50); } $this->aqaqisyssqeomwom("\x6d\x69\156\151\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\x75\147\165\171\x61\x63\147\x67\x73\x61\x67\x65\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\74{$kqywgoqsmuswammk}\x5b\x5c\163\x5c\x53\135\52\x3f\x3e\x29\50\133\134\163\134\123\x5d\52\77\51\50\74\134\x2f{$kqywgoqsmuswammk}\76\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if ($mgaesessocgwasym) { $ewgwqamkygiqaawc = $mgaesessocgwasym; } return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\133\x5e\x5c\x6e\134\x74\x5c\162\x5d\x2b\x28\134\x72\134\x74\134\156\77\174\x5c\164\134\156\51\77\x24\x2f", $nsmgceoqaqogqmuw); } }
