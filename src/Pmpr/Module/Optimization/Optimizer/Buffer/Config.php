<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16c082ce5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto skaayekywasksoug; } return; skaayekywasksoug: if (!(!isset($ywmkwiwkosakssii["\163\145\x72\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto gkoyqgogsukuowqi; } $ywmkwiwkosakssii["\163\145\x72\166\145\162"] = $_SERVER; gkoyqgogsukuowqi: $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\x68"], "\x2f") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\163\145\162\x76\145\162"]) && is_array($ywmkwiwkosakssii["\163\145\162\166\145\162"]) ? $ywmkwiwkosakssii["\163\145\x72\166\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto sgikkoswwyesqomo; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; sgikkoswwyesqomo: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto aayysiegiyweiyuu; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; aayysiegiyweiyuu: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cksoeiwawiygyiyg; } return $this->eecucukcqkqysiau(__FUNCTION__); cksoeiwawiygyiyg: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\165\x63\143\x65\x73\x73"]) || !$oqwuasygwcckkios["\x73\x75\143\x63\x65\163\x73"])) { goto cyqokqcacysioeyc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cyqokqcacysioeyc: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\x68"])) { goto akwwuuiykscgicuw; } include $oqwuasygwcckkios["\160\141\164\x68"]; akwwuuiykscgicuw: $uiewakwqscemywuo = ["\x64\145\166\x5f\x6d\x6f\144\145" => 0, "\144\x65\142\165\147\137\155\x6f\144\x65" => 1, "\143\141\x63\150\145\137\167\x65\142\160" => 0, "\147\172\x69\x70\x5f\x65\x6e\141\x62\154\145" => 1, "\143\157\157\153\151\x65\137\x68\x61\x73\150" => '', "\x6d\x6f\x62\x69\154\x65\137\x63\x61\x63\150\145" => 1, "\x63\141\143\x68\145\137\145\x6e\141\142\154\x65" => 1, "\x69\x67\x6e\x6f\x72\145\144\x5f\x75\162\154\x73" => [], "\x72\x65\x6a\145\x63\164\x5f\143\157\157\x6b\151\x65\163" => '', "\x73\145\143\x72\x65\x74\x5f\x63\x61\x63\x68\145\x5f\153\145\171" => '', "\x6c\x6f\x67\x67\x65\144\137\x69\156\137\x63\x6f\157\x6b\151\145" => '', "\x63\157\x6d\155\x6f\x6e\137\x63\x61\143\150\x65\137\x6c\157\x67\x67\145\x64\x5f\165\x73\x65\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto gsusqquicmukegcs; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; gsusqquicmukegcs: iikgiaocummweiga: } ueqsiwuwumoqgsck: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wcsysckgigeykkwy; } return $this->eecucukcqkqysiau(__FUNCTION__); wcsysckgigeykkwy: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\120\x5f\x48\x4f\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\x3a\134\144\53\44\57", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto scgmwokeuqwiekkk; } return $this->eecucukcqkqysiau(__FUNCTION__); scgmwokeuqwiekkk: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto wycmcqaauqkgegau; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\x45\121\125\x45\x53\x54\x5f\125\x52\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\77\74\75\56\51\57\x2b\174", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\57\136\x28\x3f\72\45\62\106\51\x2a\50\x2e\52\x3f\51\50\77\72\x25\x32\x46\51\x2a\x24\57", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg)) { goto acsigwcaesyyoiie; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70"), $yykkewcosaecgqyg))) { goto iyikuwuweqigiuey; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\x63\143\x65\x73\x73" => true, "\160\x61\x74\x68" => $oqwuasygwcckkios]); iyikuwuweqigiuey: goto aqaaqeucgoegeeuk; acsigwcaesyyoiie: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\x65\x73\163" => true, "\x70\141\164\150" => $oqwuasygwcckkios]); aqaaqeucgoegeeuk: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; gysmmooawoeggaow: } ceusyscosamyaiws: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\x73\x73" => false, "\160\x61\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\x2e\x70\150\x70"]); goto qcweoyigoaeacsow; wycmcqaauqkgegau: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\x65\x73\163" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); qcweoyigoaeacsow: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\x65\x63\x74\137\x63\157\x6f\x6b\151\145\x73"); if (!$osqkgokmuiasuukg) { goto iyceygqsmokgmams; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; iyceygqsmokgmams: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\156\157\162\145\x64\137\x75\x72\x6c\163"))) { goto wcekgciqeggiiwgk; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\43"; wcekgciqeggiiwgk: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\143\141\143\x68\145\137\155\141\x6e\x64\141\x74\x6f\x72\x79\x5f\143\x6f\157\x6b\x69\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto gkwuewqmqeswqukg; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; gkwuewqmqeswqukg: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\165\x67\x5f\x6d\157\144\x65"); } }
