<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e29caf530             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto cquyuwsisgqscemm; } return; cquyuwsisgqscemm: if (!(!isset($ywmkwiwkosakssii["\x73\x65\x72\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto imykswegcuekqwio; } $ywmkwiwkosakssii["\x73\145\x72\166\x65\x72"] = $_SERVER; imykswegcuekqwio: $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\150"], "\57") . "\57"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\x72\166\x65\x72"]) && is_array($ywmkwiwkosakssii["\163\145\x72\x76\x65\162"]) ? $ywmkwiwkosakssii["\x73\145\x72\x76\145\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto eokikuciuqkyauum; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; eokikuciuqkyauum: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto ykuqeyogsasokqis; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; ykuqeyogsasokqis: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mqaamqyoywyekiko; } return $this->eecucukcqkqysiau(__FUNCTION__); mqaamqyoywyekiko: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\x63\x63\145\x73\163"]) || !$oqwuasygwcckkios["\163\165\143\143\x65\163\163"])) { goto smkakiyekkqoggao; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); smkakiyekkqoggao: if (!file_exists($oqwuasygwcckkios["\160\141\x74\x68"])) { goto zggweikegkcgkmma; } include $oqwuasygwcckkios["\160\x61\164\150"]; zggweikegkcgkmma: $uiewakwqscemywuo = ["\144\x65\166\137\155\157\x64\145" => 0, "\144\x65\142\x75\x67\137\155\157\x64\145" => 1, "\x63\x61\x63\150\145\x5f\x77\x65\x62\x70" => 0, "\x67\x7a\151\x70\137\x65\x6e\141\142\154\x65" => 1, "\143\157\157\x6b\x69\x65\137\150\x61\163\x68" => '', "\x6d\x6f\x62\x69\x6c\145\137\x63\141\143\x68\145" => 1, "\143\x61\x63\150\x65\x5f\145\156\141\x62\154\x65" => 1, "\151\147\x6e\x6f\x72\145\144\137\165\162\x6c\x73" => [], "\162\x65\152\x65\143\164\137\143\157\157\153\x69\x65\163" => '', "\x73\145\143\x72\145\164\137\143\141\143\150\145\x5f\153\145\171" => '', "\x6c\x6f\147\x67\x65\144\x5f\x69\x6e\x5f\x63\157\157\153\x69\x65" => '', "\143\x6f\x6d\x6d\x6f\x6e\137\x63\141\143\x68\x65\137\x6c\157\x67\147\145\x64\137\x75\x73\145\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto seqammocqkyswaim; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; seqammocqkyswaim: gcsosokicycukoyc: } yisoawmmammassqk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto coskmuqsawiaeyqg; } return $this->eecucukcqkqysiau(__FUNCTION__); coskmuqsawiaeyqg: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\x48\124\124\x50\x5f\110\117\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\72\134\x64\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto umccwcqwkoiaakmu; } return $this->eecucukcqkqysiau(__FUNCTION__); umccwcqwkoiaakmu: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto maeccckgcsaaumkw; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\105\x51\x55\105\x53\124\137\x55\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\x7c\50\77\x3c\x3d\56\x29\57\53\174", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\106", preg_replace("\x2f\x5e\x28\x3f\72\x25\x32\x46\x29\x2a\50\x2e\x2a\77\51\50\x3f\x3a\45\x32\x46\51\52\x24\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto smksoismyouykeoa; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\150\160"), $yykkewcosaecgqyg))) { goto imquwacukaswoyka; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\163\x73" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); imquwacukaswoyka: goto qwgkwokcyocqiyee; smksoismyouykeoa: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\163\x73" => true, "\x70\141\164\150" => $oqwuasygwcckkios]); qwgkwokcyocqiyee: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; wyyowcsciaqkuiuq: } ekgkiioywougquka: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\145\163\x73" => false, "\x70\x61\164\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\160\x68\x70"]); goto gcoeaokkagaaeuse; maeccckgcsaaumkw: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\145\x73\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); gcoeaokkagaaeuse: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\152\145\x63\x74\137\143\x6f\x6f\153\x69\145\x73"); if (!$osqkgokmuiasuukg) { goto kcqueaewmayywqeq; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; kcqueaewmayywqeq: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\147\x6e\x6f\162\x65\x64\137\x75\x72\x6c\163"))) { goto uagsgicwwcakecwq; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; uagsgicwwcakecwq: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\x63\150\145\137\155\141\x6e\x64\x61\x74\157\162\171\137\x63\x6f\157\153\x69\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto qocgmocqauaaekii; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; qocgmocqauaaekii: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\x65\x62\x75\147\137\155\157\x64\145"); } }
