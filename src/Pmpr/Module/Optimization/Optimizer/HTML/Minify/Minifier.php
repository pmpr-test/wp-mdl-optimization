<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f18cb37259d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csggsqueaqmwgwkk; } $this->miasamwyaiagioug([$this, "\157\x6b\165\x67\165\171\x61\143\147\x67\x73\141\x67\145\x71\x71"], 50); csggsqueaqmwgwkk: $this->aqaqisyssqeomwom("\155\151\156\x69\x66\171\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\147\165\171\x61\143\x67\x67\163\x61\147\145\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\x3c{$kqywgoqsmuswammk}\x5b\x5c\x73\134\x53\x5d\x2a\x3f\76\x29\50\133\x5c\163\x5c\x53\x5d\x2a\x3f\x29\50\74\x5c\57{$kqywgoqsmuswammk}\x3e\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto sescaagayikiggyq; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); sescaagayikiggyq: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wwwggoemicgwwasy; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wwwggoemicgwwasy: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\136\x5c\156\134\x74\134\162\x5d\x2b\x28\x5c\x72\134\x74\x5c\x6e\77\x7c\x5c\164\x5c\156\51\x3f\x24\57", $nsmgceoqaqogqmuw); } }
