<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7aea357a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto yegkgccwomcgkumi; } $this->miasamwyaiagioug([$this, "\x6f\x6b\x75\147\165\171\141\143\147\147\163\141\147\145\161\x71"], 50); yegkgccwomcgkumi: $this->aqaqisyssqeomwom("\155\151\156\x69\x66\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\165\x67\x75\x79\x61\143\147\x67\x73\x61\147\x65\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\x3c{$kqywgoqsmuswammk}\x5b\134\163\134\123\135\x2a\x3f\76\x29\50\x5b\x5c\163\x5c\123\x5d\52\x3f\51\50\74\x5c\57{$kqywgoqsmuswammk}\76\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto qikmwaessamuueoe; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); qikmwaessamuueoe: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto aeekgeqawgsmgiqw; } $ewgwqamkygiqaawc = $mgaesessocgwasym; aeekgeqawgsmgiqw: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\133\x5e\134\x6e\134\164\x5c\x72\x5d\53\50\134\162\x5c\x74\x5c\156\77\x7c\134\x74\x5c\156\x29\x3f\44\x2f", $nsmgceoqaqogqmuw); } }
