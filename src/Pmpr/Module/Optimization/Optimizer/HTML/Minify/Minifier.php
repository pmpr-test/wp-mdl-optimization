<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8f0d0713             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto mgiwqumikeuieocg; } $this->miasamwyaiagioug([$this, "\x6f\x6b\165\x67\x75\x79\141\143\x67\x67\163\141\147\x65\x71\161"], 50); mgiwqumikeuieocg: $this->aqaqisyssqeomwom("\x6d\x69\x6e\x69\146\x79\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\x75\147\165\171\141\143\147\147\x73\x61\147\145\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\133\134\x73\134\123\135\52\x3f\76\x29\x28\133\x5c\163\x5c\x53\135\x2a\77\51\50\74\134\x2f{$kqywgoqsmuswammk}\x3e\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto yegkgccwomcgkumi; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); yegkgccwomcgkumi: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto qikmwaessamuueoe; } $ewgwqamkygiqaawc = $mgaesessocgwasym; qikmwaessamuueoe: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\133\x5e\x5c\x6e\134\x74\134\x72\135\x2b\50\134\x72\134\164\134\x6e\77\174\134\164\x5c\156\51\77\44\57", $nsmgceoqaqogqmuw); } }
