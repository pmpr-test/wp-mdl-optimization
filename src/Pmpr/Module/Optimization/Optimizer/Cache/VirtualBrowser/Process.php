<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581596084c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Queue; class Process extends Queue { const aiygoaqaoqqeyqwa = Optimization::kgswyesggeyekgmg . "\166\151\162\164\165\x61\x6c\137\x62\x72\157\167\163\145\x72\137\152\x6f\x62\137"; const kwqseouisawgwcec = self::aiygoaqaoqqeyqwa . "\141\x64\144\x5f\x6a\x6f\x62"; const skcaqcukeyugwmke = self::aiygoaqaoqqeyqwa . "\x63\x68\145\x63\x6b\137\x66\151\x6e\x69\163\150\145\x64"; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= "\166\151\x72\164\165\x61\x6c\x5f\x62\x72\x6f\167\163\x65\162"; } public function mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq) : int { $ksaameoqigiaoigg = 0; if (!$this->ewgessyekekkocey($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time() + (int) $cqgoimumaewouews, self::skcaqcukeyugwmke, [$sameaqkagyqomooq]); } return $ksaameoqigiaoigg; } public function yoycgiiwqiagcamg($sameaqkagyqomooq, $iwywmkygwewiamwm) : int { $ksaameoqigiaoigg = 0; if (!$this->igayomwkueigeoii($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time(), self::kwqseouisawgwcec, [$sameaqkagyqomooq, $iwywmkygwewiamwm]); } return $ksaameoqigiaoigg; } public function ewgessyekekkocey($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::skcaqcukeyugwmke, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } public function igayomwkueigeoii($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::kwqseouisawgwcec, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
