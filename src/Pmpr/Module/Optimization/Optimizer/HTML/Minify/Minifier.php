<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc54f326c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { $this->miasamwyaiagioug([$this, "\x6f\153\165\147\165\x79\x61\x63\x67\147\163\x61\x67\x65\x71\161"], 50); } $this->aqaqisyssqeomwom("\155\x69\156\x69\x66\x79\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\x75\147\x75\171\x61\x63\147\147\163\141\147\x65\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\133\x5c\163\134\123\x5d\52\77\x3e\x29\50\x5b\134\x73\x5c\123\135\x2a\77\51\50\74\x5c\57{$kqywgoqsmuswammk}\x3e\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if ($mgaesessocgwasym) { $ewgwqamkygiqaawc = $mgaesessocgwasym; } return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\x5e\x5c\156\x5c\x74\134\162\135\53\x28\134\x72\x5c\164\134\156\77\174\134\x74\134\x6e\x29\77\x24\x2f", $nsmgceoqaqogqmuw); } }
