<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672f20b994df3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { return; } if (!isset($ywmkwiwkosakssii["\163\145\x72\166\145\162"]) && !empty($_SERVER) && is_array($_SERVER)) { $ywmkwiwkosakssii["\163\x65\x72\x76\145\x72"] = $_SERVER; } $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\150"], "\57") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\x72\166\x65\162"]) && is_array($ywmkwiwkosakssii["\163\x65\162\x76\145\162"]) ? $ywmkwiwkosakssii["\163\x65\162\166\x65\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; } return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; } return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!isset($oqwuasygwcckkios["\x73\165\143\143\x65\x73\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\x63\x65\163\163"]) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (file_exists($oqwuasygwcckkios["\x70\141\164\150"])) { include $oqwuasygwcckkios["\160\141\164\150"]; } $uiewakwqscemywuo = ["\144\145\x76\x5f\x6d\x6f\x64\x65" => 0, "\x64\x65\x62\x75\147\137\155\x6f\144\145" => 1, "\143\141\143\150\x65\x5f\167\145\x62\x70" => 0, "\x67\x7a\x69\160\137\x65\156\141\142\x6c\145" => 1, "\x63\157\x6f\x6b\x69\145\137\x68\141\163\x68" => '', "\155\157\142\x69\x6c\145\137\143\x61\143\x68\145" => 1, "\x63\x61\x63\150\145\137\145\x6e\141\x62\154\x65" => 1, "\x69\x67\156\157\162\145\x64\x5f\165\x72\x6c\x73" => [], "\162\x65\x6a\x65\143\164\x5f\x63\157\x6f\x6b\151\145\x73" => '', "\163\x65\143\162\145\164\x5f\143\141\143\150\x65\x5f\x6b\145\171" => '', "\x6c\x6f\x67\147\x65\x64\137\151\156\x5f\x63\x6f\157\x6b\151\145" => '', "\x63\157\x6d\155\157\x6e\137\143\x61\143\x68\145\x5f\154\157\147\147\x65\144\x5f\x75\x73\145\x72\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo}) { $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\110\x4f\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\x5c\x64\53\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\x73\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); } else { $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\x52\105\x51\125\105\123\x54\137\125\x52\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\77\x3c\x3d\56\x29\x2f\x2b\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\x2f\136\x28\x3f\72\45\62\x46\51\x2a\x28\x2e\52\77\x29\x28\x3f\x3a\45\x32\106\x29\x2a\44\x2f", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\160"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\x65\163\x73" => true, "\160\x61\164\x68" => $oqwuasygwcckkios]); } else { if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\x73\x73" => true, "\160\x61\164\x68" => $oqwuasygwcckkios]); } } $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\145\x73\x73" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\x70\x68\x70"]); } } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\x6a\145\143\x74\x5f\143\157\157\x6b\151\145\163"); if ($osqkgokmuiasuukg) { $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; } return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if ($iqisissicwwuksyi = $this->get("\151\147\156\x6f\x72\x65\x64\137\x75\x72\154\x73")) { $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; } return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\143\x68\x65\x5f\155\141\156\144\x61\x74\x6f\162\x79\137\x63\x6f\x6f\x6b\x69\x65\163") ?: ''; if ($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg)) { $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; } return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\x62\x75\147\x5f\155\x6f\x64\x65"); } }
