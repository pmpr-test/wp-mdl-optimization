<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Queue; class Process extends Queue { const aiygoaqaoqqeyqwa = Optimization::kgswyesggeyekgmg . 'virtual_browser_job_'; const kwqseouisawgwcec = self::aiygoaqaoqqeyqwa . 'add_job'; const skcaqcukeyugwmke = self::aiygoaqaoqqeyqwa . 'check_finished'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'virtual_browser'; } public function mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq) : int { $ksaameoqigiaoigg = 0; if (!$this->ewgessyekekkocey($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time() + (int) $cqgoimumaewouews, self::skcaqcukeyugwmke, [$sameaqkagyqomooq]); } return $ksaameoqigiaoigg; } public function yoycgiiwqiagcamg($sameaqkagyqomooq, $iwywmkygwewiamwm) : int { $ksaameoqigiaoigg = 0; if (!$this->igayomwkueigeoii($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time(), self::kwqseouisawgwcec, [$sameaqkagyqomooq, $iwywmkygwewiamwm]); } return $ksaameoqigiaoigg; } public function ewgessyekekkocey($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::skcaqcukeyugwmke, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } public function igayomwkueigeoii($sameaqkagyqomooq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::kwqseouisawgwcec, Constants::okeuagwgwkmiokac => [$sameaqkagyqomooq], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
