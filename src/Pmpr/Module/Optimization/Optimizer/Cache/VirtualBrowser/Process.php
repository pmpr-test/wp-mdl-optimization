<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580826ed61d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Queue; class Process extends Queue { const aiygoaqaoqqeyqwa = Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\x61\x6c\x5f\x62\162\x6f\x77\x73\145\162\137\x6a\157\142\x5f"; const kwqseouisawgwcec = self::aiygoaqaoqqeyqwa . "\141\x64\144\x5f\152\x6f\142"; const skcaqcukeyugwmke = self::aiygoaqaoqqeyqwa . "\143\150\145\x63\x6b\x5f\x66\x69\156\151\163\150\x65\x64"; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= "\166\151\x72\164\165\141\154\137\142\162\157\167\x73\x65\162"; } public function mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq) : int { $ksaameoqigiaoigg = 0; if (!$this->ewgessyekekkocey($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time() + (int) $cqgoimumaewouews, self::skcaqcukeyugwmke, [$sameaqkagyqomooq]); } return $ksaameoqigiaoigg; } public function yoycgiiwqiagcamg($sameaqkagyqomooq, $iwywmkygwewiamwm) : int { $ksaameoqigiaoigg = 0; if (!$this->igayomwkueigeoii($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time(), self::kwqseouisawgwcec, [$sameaqkagyqomooq, $iwywmkygwewiamwm]); } return $ksaameoqigiaoigg; } public function ewgessyekekkocey($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::skcaqcukeyugwmke, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } public function igayomwkueigeoii($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::kwqseouisawgwcec, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
