<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa6601788             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { $this->miasamwyaiagioug([$this, "\157\153\165\147\x75\x79\141\x63\147\147\163\x61\x67\x65\161\161"], 50); } $this->aqaqisyssqeomwom("\x6d\x69\156\151\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\153\165\x67\x75\171\x61\143\x67\147\163\141\147\145\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\x3c{$kqywgoqsmuswammk}\133\134\x73\x5c\123\135\x2a\x3f\x3e\x29\50\133\134\x73\134\123\x5d\x2a\77\x29\x28\74\x5c\x2f{$kqywgoqsmuswammk}\x3e\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if ($mgaesessocgwasym) { $ewgwqamkygiqaawc = $mgaesessocgwasym; } return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\x5b\136\134\x6e\134\x74\x5c\162\x5d\x2b\50\134\162\x5c\x74\x5c\x6e\x3f\174\134\164\134\x6e\51\x3f\x24\57", $nsmgceoqaqogqmuw); } }
