<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f431078326f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto cqaeiesyciakcagu; } $this->miasamwyaiagioug([$this, "\157\x6b\165\x67\x75\171\141\x63\147\x67\x73\141\147\x65\x71\161"], 50); cqaeiesyciakcagu: $this->aqaqisyssqeomwom("\x6d\x69\x6e\151\x66\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\147\165\171\141\x63\x67\x67\163\141\147\x65\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\x3c{$kqywgoqsmuswammk}\133\134\163\134\x53\135\x2a\77\76\x29\x28\133\134\163\x5c\123\135\52\77\x29\50\74\x5c\57{$kqywgoqsmuswammk}\x3e\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); acisycocoswkekik: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto aaiymmkqmocgakei; } $ewgwqamkygiqaawc = $mgaesessocgwasym; aaiymmkqmocgakei: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\x5b\x5e\134\156\134\164\134\162\135\53\50\134\x72\x5c\x74\x5c\156\77\174\x5c\164\134\156\51\x3f\x24\x2f", $nsmgceoqaqogqmuw); } }
