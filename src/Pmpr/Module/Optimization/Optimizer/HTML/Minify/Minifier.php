<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e823d067d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto yegkgccwomcgkumi; } $this->miasamwyaiagioug([$this, "\157\x6b\x75\147\165\x79\141\143\147\147\163\141\x67\x65\x71\x71"], 50); yegkgccwomcgkumi: $this->aqaqisyssqeomwom("\x6d\151\x6e\x69\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\x67\165\171\141\x63\147\x67\x73\141\x67\145\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\133\x5c\x73\x5c\123\135\52\x3f\76\x29\50\x5b\x5c\163\134\123\135\x2a\x3f\51\x28\x3c\134\x2f{$kqywgoqsmuswammk}\76\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto qikmwaessamuueoe; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); qikmwaessamuueoe: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto aeekgeqawgsmgiqw; } $ewgwqamkygiqaawc = $mgaesessocgwasym; aeekgeqawgsmgiqw: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\x5b\x5e\134\156\x5c\164\134\x72\135\53\50\134\x72\x5c\164\134\156\77\x7c\x5c\x74\134\x6e\51\77\44\x2f", $nsmgceoqaqogqmuw); } }
