<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b472f16c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto cqaeiesyciakcagu; } $this->miasamwyaiagioug([$this, "\x6f\x6b\165\147\165\x79\141\x63\147\x67\x73\141\147\x65\x71\161"], 50); cqaeiesyciakcagu: $this->aqaqisyssqeomwom("\155\151\156\x69\146\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\153\165\x67\165\x79\x61\143\147\x67\x73\141\x67\145\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\74{$kqywgoqsmuswammk}\133\134\x73\134\x53\135\x2a\x3f\x3e\51\50\x5b\x5c\x73\x5c\x53\x5d\x2a\x3f\x29\50\x3c\134\x2f{$kqywgoqsmuswammk}\76\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto acisycocoswkekik; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); acisycocoswkekik: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto aaiymmkqmocgakei; } $ewgwqamkygiqaawc = $mgaesessocgwasym; aaiymmkqmocgakei: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\133\136\134\156\134\164\134\x72\135\53\x28\134\x72\134\164\x5c\x6e\x3f\x7c\134\x74\134\156\51\x3f\x24\57", $nsmgceoqaqogqmuw); } }
