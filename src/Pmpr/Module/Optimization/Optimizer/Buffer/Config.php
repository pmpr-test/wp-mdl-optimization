<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4c436ce06             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto qsyqcokomswykyso; } return; qsyqcokomswykyso: if (!(!isset($ywmkwiwkosakssii["\163\x65\162\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto issgmmkcgesyeoas; } $ywmkwiwkosakssii["\x73\x65\x72\x76\145\x72"] = $_SERVER; issgmmkcgesyeoas: $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\162\x76\x65\x72"]) && is_array($ywmkwiwkosakssii["\x73\145\162\166\145\162"]) ? $ywmkwiwkosakssii["\x73\145\162\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto yeiicwscguyokwyu; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; yeiicwscguyokwyu: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto yueosioyegouuwqo; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; yueosioyegouuwqo: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto giuoqsumkimmuaya; } return $this->eecucukcqkqysiau(__FUNCTION__); giuoqsumkimmuaya: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\143\145\163\x73"]) || !$oqwuasygwcckkios["\163\x75\143\x63\x65\x73\163"])) { goto mssaawaiaimogowg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mssaawaiaimogowg: if (!file_exists($oqwuasygwcckkios["\160\141\164\150"])) { goto ccyiggckemwgooco; } include $oqwuasygwcckkios["\x70\x61\x74\150"]; ccyiggckemwgooco: $uiewakwqscemywuo = ["\144\145\x76\137\x6d\157\x64\x65" => 0, "\144\145\142\x75\147\x5f\x6d\157\x64\145" => 1, "\143\141\143\x68\x65\x5f\167\x65\x62\x70" => 0, "\x67\x7a\151\160\x5f\x65\156\x61\142\154\x65" => 1, "\x63\x6f\x6f\153\151\145\x5f\150\141\163\x68" => '', "\x6d\x6f\x62\151\x6c\x65\137\143\141\x63\150\145" => 1, "\143\141\x63\x68\x65\x5f\145\156\141\142\x6c\x65" => 1, "\151\x67\156\x6f\162\x65\144\x5f\x75\162\x6c\163" => [], "\x72\145\x6a\x65\x63\x74\137\x63\157\157\x6b\151\145\163" => '', "\163\x65\143\162\145\164\137\143\x61\x63\150\145\137\x6b\x65\x79" => '', "\154\157\147\147\x65\144\x5f\x69\x6e\137\143\157\157\153\151\145" => '', "\x63\157\x6d\x6d\x6f\x6e\x5f\143\x61\x63\150\x65\x5f\154\x6f\147\147\145\144\137\x75\163\x65\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto gaiaucesmcqgqwac; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; gaiaucesmcqgqwac: swkeiggkawwgewuw: } umamqqwcoewcigew: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kuimgwmkcgcoecko; } return $this->eecucukcqkqysiau(__FUNCTION__); kuimgwmkcgcoecko: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\x50\x5f\x48\117\x53\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\x5c\x64\x2b\x24\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oaskqsoyesmmeaew; } return $this->eecucukcqkqysiau(__FUNCTION__); oaskqsoyesmmeaew: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\150\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto qcwkymcgqacaaywc; } $mkomwsiykqigmqca = str_replace("\134", "\57", strtok($this->iuocyymeygwuweag("\x52\x45\121\x55\105\x53\124\137\125\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\x3f\x3c\75\56\51\57\x2b\x7c", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\x2f\136\50\77\x3a\45\x32\x46\51\52\x28\x2e\52\77\51\50\x3f\72\45\x32\106\x29\52\x24\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\x70\150\x70"), $yykkewcosaecgqyg)) { goto eykiuqsamowqykam; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"), $yykkewcosaecgqyg))) { goto yywwaaiicukuwcao; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\x73\163" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); yywwaaiicukuwcao: goto ywqouwqomiqwoquu; eykiuqsamowqykam: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\x63\x65\x73\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); ywqouwqomiqwoquu: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; miigqygoawqmkkqm: } aacaoywsaqscgyua: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\145\163\x73" => false, "\160\141\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\x68\x70"]); goto wmcucyuieqgqisis; qcwkymcgqacaaywc: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\x63\143\145\x73\x73" => true, "\x70\x61\164\x68" => $oqwuasygwcckkios]); wmcucyuieqgqisis: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\x65\143\x74\x5f\x63\157\157\153\151\x65\163"); if (!$osqkgokmuiasuukg) { goto qwsmiaegmcwuskwi; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; qwsmiaegmcwuskwi: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\x67\156\157\x72\145\144\x5f\165\162\x6c\163"))) { goto yyyyawaqcowsgqcs; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\x23"; yyyyawaqcowsgqcs: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\x63\x68\145\137\155\141\x6e\144\141\x74\x6f\162\x79\137\143\x6f\157\x6b\151\145\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto usmagcaocwiugqum; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; usmagcaocwiugqum: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\142\x75\147\x5f\155\157\144\x65"); } }
