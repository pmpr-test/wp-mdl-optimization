<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\SpecialPage; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\HTML; class Cache extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('comment_cookie_lifetime', [$this, 'aacguiqkgyyimygk']); $this->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'cache_query_strings', [$this, 'ekayaceksyyyoaye']); } public function mameiwsayuyquoeq() { HTML::symcgieuakksimmu(); WPCache::symcgieuakksimmu(); SpecialPage::symcgieuakksimmu(); VirtualBrowser::symcgieuakksimmu(); } public function aacguiqkgyyimygk($uagwomscgeccywsq) { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'cache_comment_cookie_lifetime', 3 * MINUTE_IN_SECONDS); } public function ekayaceksyyyoaye($kewscequsakouquq) { global $is_nginx; if ($is_nginx) { $kewscequsakouquq[] = 'q'; } return $kewscequsakouquq; } }
