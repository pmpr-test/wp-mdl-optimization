<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0c9956f5c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto usmagcaocwiugqum; } return; usmagcaocwiugqum: if (!(!isset($ywmkwiwkosakssii["\163\145\162\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto sikmqkecsiyciaei; } $ywmkwiwkosakssii["\163\x65\x72\166\145\162"] = $_SERVER; sikmqkecsiyciaei: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\150"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\x65\x72\x76\145\x72"]) && is_array($ywmkwiwkosakssii["\163\x65\x72\166\145\162"]) ? $ywmkwiwkosakssii["\x73\145\162\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto wmycwscioqackeig; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; wmycwscioqackeig: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto wammkmaqucqagqww; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; wammkmaqucqagqww: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iuooqassskiyeemo; } return $this->eecucukcqkqysiau(__FUNCTION__); iuooqassskiyeemo: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\165\143\x63\145\163\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\143\145\163\163"])) { goto cquyuwsisgqscemm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cquyuwsisgqscemm: if (!file_exists($oqwuasygwcckkios["\x70\x61\x74\x68"])) { goto imykswegcuekqwio; } include $oqwuasygwcckkios["\160\141\164\x68"]; imykswegcuekqwio: $uiewakwqscemywuo = ["\144\x65\x76\137\x6d\x6f\144\145" => 0, "\x64\145\142\165\147\137\x6d\157\144\145" => 1, "\143\x61\x63\x68\x65\x5f\x77\145\x62\x70" => 0, "\x67\172\x69\x70\x5f\145\156\141\142\154\x65" => 1, "\x63\x6f\157\153\151\145\137\150\x61\x73\150" => '', "\x6d\157\142\151\x6c\145\x5f\x63\141\143\150\145" => 1, "\x63\x61\143\x68\x65\x5f\x65\156\141\x62\154\145" => 1, "\151\147\x6e\x6f\x72\x65\144\137\x75\x72\x6c\163" => [], "\x72\145\x6a\x65\x63\x74\137\143\x6f\157\153\151\145\163" => '', "\x73\x65\x63\x72\145\x74\x5f\143\141\143\150\x65\x5f\153\145\171" => '', "\x6c\157\147\x67\x65\144\137\x69\156\137\143\157\x6f\x6b\x69\145" => '', "\143\157\x6d\x6d\x6f\x6e\137\143\141\143\x68\145\x5f\154\x6f\x67\147\145\144\x5f\165\163\x65\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto mqaamqyoywyekiko; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; mqaamqyoywyekiko: ykuqeyogsasokqis: } eokikuciuqkyauum: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto smkakiyekkqoggao; } return $this->eecucukcqkqysiau(__FUNCTION__); smkakiyekkqoggao: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\x54\x50\137\110\117\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\x5c\144\x2b\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\x2e")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto zggweikegkcgkmma; } return $this->eecucukcqkqysiau(__FUNCTION__); zggweikegkcgkmma: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto ekgkiioywougquka; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\x45\121\125\x45\123\124\x5f\x55\x52\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\x3c\75\x2e\x29\57\x2b\174", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\106", preg_replace("\57\136\50\77\x3a\x25\62\106\x29\52\50\x2e\x2a\77\51\50\77\72\45\x32\106\51\x2a\44\x2f", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto coskmuqsawiaeyqg; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\x70"), $yykkewcosaecgqyg))) { goto seqammocqkyswaim; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\145\x73\x73" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); seqammocqkyswaim: goto umccwcqwkoiaakmu; coskmuqsawiaeyqg: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\160\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\x75\143\143\145\163\x73" => true, "\x70\x61\x74\150" => $oqwuasygwcckkios]); umccwcqwkoiaakmu: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; gcsosokicycukoyc: } yisoawmmammassqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\145\x73\163" => false, "\160\x61\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\160\150\x70"]); goto wyyowcsciaqkuiuq; ekgkiioywougquka: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\x73\x73" => true, "\160\141\164\150" => $oqwuasygwcckkios]); wyyowcsciaqkuiuq: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\152\x65\x63\164\x5f\x63\x6f\157\x6b\151\145\x73"); if (!$osqkgokmuiasuukg) { goto imquwacukaswoyka; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; imquwacukaswoyka: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\147\x6e\157\162\145\144\x5f\165\x72\x6c\x73"))) { goto smksoismyouykeoa; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; smksoismyouykeoa: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\x61\143\x68\145\x5f\155\x61\156\x64\x61\x74\157\x72\171\137\x63\x6f\x6f\153\151\x65\163") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qwgkwokcyocqiyee; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; qwgkwokcyocqiyee: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\165\x67\x5f\155\157\144\x65"); } }
