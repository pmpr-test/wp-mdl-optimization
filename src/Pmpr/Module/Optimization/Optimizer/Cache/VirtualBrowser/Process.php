<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1ae35f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Queue; class Process extends Queue { const aiygoaqaoqqeyqwa = Optimization::kgswyesggeyekgmg . "\166\x69\162\x74\x75\x61\154\137\142\x72\x6f\167\163\145\x72\x5f\x6a\157\142\x5f"; const kwqseouisawgwcec = self::aiygoaqaoqqeyqwa . "\x61\x64\144\137\152\157\142"; const skcaqcukeyugwmke = self::aiygoaqaoqqeyqwa . "\x63\150\x65\x63\x6b\137\x66\151\x6e\x69\163\150\145\x64"; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= "\166\x69\162\x74\165\x61\154\137\142\162\157\167\x73\145\162"; } public function mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq) : int { $ksaameoqigiaoigg = 0; if (!$this->ewgessyekekkocey($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time() + (int) $cqgoimumaewouews, self::skcaqcukeyugwmke, [$sameaqkagyqomooq]); } return $ksaameoqigiaoigg; } public function yoycgiiwqiagcamg($sameaqkagyqomooq, $iwywmkygwewiamwm) : int { $ksaameoqigiaoigg = 0; if (!$this->igayomwkueigeoii($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time(), self::kwqseouisawgwcec, [$sameaqkagyqomooq, $iwywmkygwewiamwm]); } return $ksaameoqigiaoigg; } public function ewgessyekekkocey($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::skcaqcukeyugwmke, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } public function igayomwkueigeoii($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::kwqseouisawgwcec, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
