<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { return; } if (!isset($ywmkwiwkosakssii['server']) && !empty($_SERVER) && is_array($_SERVER)) { $ywmkwiwkosakssii['server'] = $_SERVER; } $this->path = rtrim($ywmkwiwkosakssii['path'], '/') . '/'; $this->server = !empty($ywmkwiwkosakssii['server']) && is_array($ywmkwiwkosakssii['server']) ? $ywmkwiwkosakssii['server'] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; } return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; } return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!isset($oqwuasygwcckkios['success']) || !$oqwuasygwcckkios['success']) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (file_exists($oqwuasygwcckkios['path'])) { include $oqwuasygwcckkios['path']; } $uiewakwqscemywuo = ['dev_mode' => 0, 'debug_mode' => 1, 'cache_webp' => 0, 'gzip_enable' => 1, 'cookie_hash' => '', 'mobile_cache' => 1, 'cache_enable' => 1, 'ignored_urls' => [], 'reject_cookies' => '', 'secret_cache_key' => '', 'logged_in_cookie' => '', 'common_cache_logged_users' => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo}) { $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag('HTTP_HOST', (string) time()); $gwgucoaaqcwwciqq = preg_replace('/:\\d+$/', '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, '.')); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}.php"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ['success' => true, 'path' => $oqwuasygwcckkios]); } else { $mkomwsiykqigmqca = str_replace('\\', '/', strtok($this->iuocyymeygwuweag('REQUEST_URI', ''), '?')); $mkomwsiykqigmqca = preg_replace('|(?<=.)/+|', '/', $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode('%2F', preg_replace('/^(?:%2F)*(.*?)(?:%2F)*$/', '$1', rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . '.' . $uwgioieamckgqics . '.php') && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . '.' . $uwgioieamckgqics . '.php'), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . '.' . $uwgioieamckgqics . '.php'; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ['success' => true, 'path' => $oqwuasygwcckkios]); } else { if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . '.' . $miawkwqioaeasiig . $uwgioieamckgqics . '.php') && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . '.' . $miawkwqioaeasiig . $uwgioieamckgqics . '.php'), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . '.' . $miawkwqioaeasiig . $uwgioieamckgqics . '.php'; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ['success' => true, 'path' => $oqwuasygwcckkios]); } } $miawkwqioaeasiig .= $uwgioieamckgqics . '.'; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ['success' => false, 'path' => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode('/', $mkomwsiykqigmqca) . '.php']); } } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get('reject_cookies'); if ($osqkgokmuiasuukg) { $osqkgokmuiasuukg = "#{$osqkgokmuiasuukg}#"; } return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if ($iqisissicwwuksyi = $this->get('ignored_urls')) { $iqisissicwwuksyi = "#{$iqisissicwwuksyi}#"; } return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get('cache_mandatory_cookies') ?: ''; if ($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg)) { $osqkgokmuiasuukg = "#{$osqkgokmuiasuukg}#"; } return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get('debug_mode'); } }
