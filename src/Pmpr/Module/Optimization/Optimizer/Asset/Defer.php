<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; class Defer extends Engine { public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, 'gkesqqmoaumyqiso'], 24)->miasamwyaiagioug([$this, 'gsicesgwaskaukgs'], 25); } public function gkesqqmoaumyqiso($moooemyaqewumiay) { if ($this->yqguesaguewsugog()) { $kygqgqsmyegimaoe = $this->uakokyiygeukkwyq($moooemyaqewumiay); preg_match_all('#<script\\s+(?:[^>]+[\\s\'"])?src\\s*=\\s*[\'"]\\s*?(?<url>[^\'"]+)\\s*?[\'"](?:[^>]+)?\\/?>#i', $kygqgqsmyegimaoe, $meyiiwcswqmuggyg, PREG_SET_ORDER); if ($meyiiwcswqmuggyg) { $couiucmsqaieciue = $this->yyymaeeksgioeiai(); if (@preg_replace("#({$couiucmsqaieciue})#i", '', 'dummy-string')) { foreach ($meyiiwcswqmuggyg as $scwiymciagumsuiw) { if (preg_match("#({$couiucmsqaieciue})#i", $scwiymciagumsuiw[Constants::auqoykcmsiauccao])) { continue; } if (preg_match('/\\s+(?:async|defer)/i', $scwiymciagumsuiw[0])) { continue; } $imiciuukguwcsoik = str_replace('>', ' defer>', $scwiymciagumsuiw[0]); $moooemyaqewumiay = str_replace($scwiymciagumsuiw[0], $imiciuukguwcsoik, $moooemyaqewumiay); } } } } return $moooemyaqewumiay; } public function gsicesgwaskaukgs($moooemyaqewumiay) { if ($this->yqguesaguewsugog()) { $couiucmsqaieciue = $this->yyymaeeksgioeiai(); if (!preg_match('/(jquery(?:.*)?\\.js)/i', $couiucmsqaieciue)) { $kygqgqsmyegimaoe = $this->uakokyiygeukkwyq($moooemyaqewumiay); preg_match_all('#<script(?:[^>]*)>(?<content>[\\s\\S]*?)</script>#msi', $kygqgqsmyegimaoe, $meyiiwcswqmuggyg, PREG_SET_ORDER); if ($meyiiwcswqmuggyg) { $yucoookoucaiyemq = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'asset_defer_jquery_patterns', 'jQuery|\\$\\.\\(|\\$\\('); $yswgmcgwgusuaowo = ''; foreach ($meyiiwcswqmuggyg as $wisummakkacwcgue) { if (empty($wisummakkacwcgue['content'])) { continue; } if (preg_match('/(application\\/ld\\+json)/i', $wisummakkacwcgue[0])) { continue; } if (empty($yswgmcgwgusuaowo) || preg_match("/({$yswgmcgwgusuaowo})/msi", $wisummakkacwcgue[Constants::ssmskyqgcmeiayco])) { continue; } if (!empty($yucoookoucaiyemq) && !preg_match("/({$yucoookoucaiyemq})/msi", $wisummakkacwcgue[Constants::ssmskyqgcmeiayco])) { continue; } $imiciuukguwcsoik = str_replace($wisummakkacwcgue[Constants::ssmskyqgcmeiayco], $this->aueyakqgekqgakcw($wisummakkacwcgue[Constants::ssmskyqgcmeiayco]), $wisummakkacwcgue[0]); $moooemyaqewumiay = str_replace($wisummakkacwcgue[0], $imiciuukguwcsoik, $moooemyaqewumiay); } } } } return $moooemyaqewumiay; } public function aueyakqgekqgakcw(string $ewgwqamkygiqaawc) : string { return sprintf("window.addEventListener('DOMContentLoaded', function() {%s});", $ewgwqamkygiqaawc); } public function yyymaeeksgioeiai() : string { $couiucmsqaieciue = $this->kmuweyayaqoeqiyw()->gugawkcggyameeky(Setting::goaeqsqkouyekmoo); $couiucmsqaieciue = (array) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'asset_defer_js_excludes', $couiucmsqaieciue); return implode('|', $couiucmsqaieciue); } public function yqguesaguewsugog() : bool { return $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei(); } }
