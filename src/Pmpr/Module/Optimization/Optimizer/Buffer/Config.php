<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fbefa1d87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { return; } if (!isset($ywmkwiwkosakssii["\x73\145\162\x76\x65\162"]) && !empty($_SERVER) && is_array($_SERVER)) { $ywmkwiwkosakssii["\x73\x65\162\x76\145\x72"] = $_SERVER; } $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\x2f") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\145\x72\166\145\x72"]) && is_array($ywmkwiwkosakssii["\163\145\162\166\x65\162"]) ? $ywmkwiwkosakssii["\x73\x65\162\x76\145\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; } return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; } return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!isset($oqwuasygwcckkios["\163\165\x63\143\145\x73\163"]) || !$oqwuasygwcckkios["\163\165\x63\x63\145\x73\x73"]) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (file_exists($oqwuasygwcckkios["\160\x61\164\x68"])) { include $oqwuasygwcckkios["\x70\x61\164\x68"]; } $uiewakwqscemywuo = ["\x64\x65\166\137\155\157\144\x65" => 0, "\x64\145\142\x75\147\x5f\155\x6f\144\x65" => 1, "\x63\141\143\x68\145\137\167\145\142\160" => 0, "\x67\x7a\151\x70\137\145\x6e\141\142\x6c\145" => 1, "\143\157\x6f\x6b\x69\x65\x5f\150\141\x73\150" => '', "\155\157\142\151\x6c\145\x5f\143\x61\143\x68\x65" => 1, "\x63\x61\x63\150\145\x5f\x65\x6e\x61\x62\154\145" => 1, "\151\147\156\x6f\162\x65\144\x5f\x75\x72\154\x73" => [], "\162\x65\152\145\x63\164\137\x63\x6f\x6f\x6b\x69\145\x73" => '', "\x73\x65\143\x72\x65\x74\x5f\x63\141\143\150\145\137\x6b\145\171" => '', "\x6c\157\x67\147\x65\x64\x5f\151\156\137\x63\157\157\x6b\151\145" => '', "\x63\x6f\x6d\x6d\x6f\x6e\137\x63\141\x63\150\x65\137\x6c\157\147\x67\x65\x64\137\x75\163\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo}) { $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\x54\x54\120\137\x48\x4f\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\134\144\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\x63\145\x73\x73" => true, "\160\141\x74\150" => $oqwuasygwcckkios]); } else { $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\x52\105\x51\125\x45\x53\x54\x5f\x55\x52\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\x3c\75\x2e\x29\x2f\53\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\x32\106", preg_replace("\x2f\136\50\77\72\45\x32\106\51\52\50\x2e\x2a\x3f\x29\50\77\72\45\x32\x46\51\x2a\x24\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\x68\x70"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\x65\163\x73" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); } else { if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"), $yykkewcosaecgqyg)) { $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\163\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); } } $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\145\x73\x73" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\x2e\160\x68\160"]); } } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\152\145\143\164\x5f\143\157\x6f\x6b\151\145\163"); if ($osqkgokmuiasuukg) { $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; } return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if ($iqisissicwwuksyi = $this->get("\x69\147\156\x6f\162\x65\144\x5f\165\162\154\163")) { $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\x23"; } return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\143\x68\145\137\x6d\141\156\x64\x61\x74\x6f\162\x79\137\x63\157\x6f\x6b\x69\145\x73") ?: ''; if ($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg)) { $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; } return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\142\165\147\x5f\x6d\157\x64\x65"); } }
