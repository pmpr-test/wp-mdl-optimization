<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf66918980             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto ksawwekgswywwuwm; } $this->miasamwyaiagioug([$this, "\157\x6b\165\147\165\x79\141\x63\147\x67\163\x61\x67\x65\161\x71"], 50); ksawwekgswywwuwm: $this->aqaqisyssqeomwom("\x6d\x69\x6e\151\x66\x79\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\147\165\x79\x61\143\x67\147\x73\141\147\x65\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\74{$kqywgoqsmuswammk}\x5b\134\163\x5c\x53\x5d\x2a\x3f\76\x29\x28\x5b\x5c\x73\x5c\x53\x5d\52\x3f\51\x28\74\x5c\57{$kqywgoqsmuswammk}\x3e\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto yuqisiwgqacgmsym; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); yuqisiwgqacgmsym: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wickgagwgqqsomum; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wickgagwgqqsomum: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\133\136\134\156\x5c\x74\x5c\x72\135\53\x28\x5c\x72\x5c\x74\134\x6e\77\174\x5c\x74\134\x6e\x29\77\x24\x2f", $nsmgceoqaqogqmuw); } }
