<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76d1d04df             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Process; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BaseClass { use PageManagerEngineTrait; public function gimogqqgyqwiwsmi() : bool { return true; } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $cwiqececuoeacuaa = Pattern::symcgieuakksimmu()->cwkywyqksyucoyia([Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]); foreach ($cwiqececuoeacuaa as $eouekqmooogkoqoo) { $this->sksuceuccwmiokoe($eouekqmooogkoqoo); icouowaoycuuisqe: } gwyseusuceuwwccu: return true; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($ccamueccusigaaio); if (!$sameaqkagyqomooq) { goto ocmwuquguuqigose; } $iwywmkygwewiamwm = $this->wkagassgcaqeosio()->uaoiiekuayauwqiq($ccamueccusigaaio); return Process::symcgieuakksimmu()->yoycgiiwqiagcamg($sameaqkagyqomooq, $iwywmkygwewiamwm) > 0; ocmwuquguuqigose: return false; } }
