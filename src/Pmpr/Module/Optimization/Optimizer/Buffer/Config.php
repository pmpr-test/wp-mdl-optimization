<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f0cc89158             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { return; } if (!isset($ywmkwiwkosakssii["\x73\x65\162\166\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER)) { $ywmkwiwkosakssii["\163\x65\162\166\145\x72"] = $_SERVER; } $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\150"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\x65\x72\x76\x65\162"]) && is_array($ywmkwiwkosakssii["\x73\145\x72\166\x65\x72"]) ? $ywmkwiwkosakssii["\163\145\162\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; } return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; } return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!isset($oqwuasygwcckkios["\163\165\143\x63\x65\x73\x73"]) || !$oqwuasygwcckkios["\x73\x75\x63\x63\x65\x73\163"]) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (file_exists($oqwuasygwcckkios["\160\141\x74\150"])) { include $oqwuasygwcckkios["\160\141\x74\x68"]; } $uiewakwqscemywuo = ["\x64\x65\x76\x5f\x6d\157\144\x65" => 0, "\144\x65\x62\x75\x67\137\155\x6f\144\x65" => 1, "\x63\x61\143\150\x65\x5f\x77\145\x62\160" => 0, "\147\172\151\x70\x5f\145\156\141\x62\154\145" => 1, "\x63\157\x6f\x6b\x69\x65\x5f\150\141\x73\x68" => '', "\x6d\x6f\142\x69\x6c\x65\137\x63\141\x63\x68\145" => 1, "\x63\x61\x63\x68\x65\x5f\145\156\x61\x62\154\x65" => 1, "\151\x67\x6e\x6f\x72\x65\144\x5f\165\162\x6c\x73" => [], "\162\x65\152\145\143\164\x5f\x63\x6f\157\153\x69\x65\163" => '', "\163\x65\x63\x72\x65\164\x5f\143\141\143\x68\145\x5f\x6b\x65\x79" => '', "\154\x6f\x67\147\x65\144\137\x69\x6e\x5f\143\157\157\x6b\151\145" => '', "\x63\157\x6d\x6d\157\x6e\137\143\x61\143\x68\x65\x5f\x6c\x6f\x67\x67\145\144\x5f\165\163\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo}) { $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x48\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\134\x64\53\x24\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\x65\163\163" => true, "\x70\x61\x74\x68" => $oqwuasygwcckkios]); } else { $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\x45\x51\125\105\x53\124\x5f\x55\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\x3c\75\56\x29\x2f\x2b\x7c", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\x46", preg_replace("\x2f\x5e\50\x3f\x3a\45\62\106\x29\52\50\56\x2a\77\x29\50\x3f\72\x25\x32\106\51\52\44\57", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\160"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\x65\163\163" => true, "\x70\x61\164\150" => $oqwuasygwcckkios]); } else { if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\x65\x73\x73" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); } } $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\145\163\x73" => false, "\160\141\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\x68\160"]); } } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\152\x65\x63\164\137\x63\x6f\x6f\153\x69\x65\163"); if ($osqkgokmuiasuukg) { $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; } return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if ($iqisissicwwuksyi = $this->get("\151\x67\156\157\162\145\x64\x5f\165\x72\x6c\163")) { $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; } return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\x61\143\x68\145\137\x6d\141\156\x64\141\164\x6f\162\171\137\143\157\157\153\151\145\x73") ?: ''; if ($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg)) { $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; } return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\165\x67\x5f\x6d\x6f\144\145"); } }
