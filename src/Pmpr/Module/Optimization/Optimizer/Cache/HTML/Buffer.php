<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356236bf3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\x68\x69\156\147\x5f\160\x72\x6f\143\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\x61\164\150"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\152\x73\x6f\156"); $this->log("\114\x6f\x6f\x6b\151\x6e\x67\40\146\157\x72\40\143\x61\x63\150\145\40\146\151\x6c\145\56", ["\x70\141\x74\x68" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\147\x7a\151\x70\137\145\x6e\141\x62\x6c\x65")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x41\103\103\105\x50\x54\x5f\105\116\103\x4f\x44\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\x67\x7a\x69\160"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\x53\164\x61\x72\x74\x20\142\x75\146\146\x65\x72\x2e", ["\160\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\x63\x71\153\x6f\x71\x77\x63\165\x6f\161\165\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\103\141\156\x20\156\157\164\x20\163\164\141\162\164\x20\142\x75\x66\x66\x65\x72\x20\x70\162\157\x63\x65\163\163\x2c\40\155\141\171\142\x65\x20\x70\x61\147\x65\x20\x6e\157\164\40\145\x78\x69\163\x74\x73\40\157\162\x20\x6e\157\164\x20\141\143\x74\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\101\166\x6f\x69\144\x20\x63\141\x63\150\x65\x20\x70\141\147\x65\40\x62\171\40\146\151\154\164\x65\x72", ["\146\x69\x6c\x74\x65\x72" => "\160\162\x5f\x6f\x70\x74\x69\x6d\x69\x7a\141\164\x69\157\156\137\x63\x61\143\150\x65\137\150\164\x6d\x6c\x5f\x64\x6f\x5f\147\145\x6e\x65\x72\x61\164\x65\137\143\x61\143\150\x69\x6e\x67\137\x66\x69\x6c\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\152\x73\x6f\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\x63\141\143\x68\x65\40\x64\151\162\145\143\x74\x6f\162\171\40\x6e\157\164\40\147\145\156\x65\162\141\164\145\144\72\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\x4c\141\x73\x74\55\x4d\157\x64\151\x66\x69\145\144\72\40" . gmdate("\104\x2c\x20\144\40\x4d\x20\131\40\x48\72\x69\72\x73", filemtime($xswggycymueygwse)) . "\x20\x47\115\x54"); } $this->log("\x50\x61\x67\x65\x20\x63\141\x63\x68\x65\x64\x2e", ["\160\141\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\143\x68\145\x2d\103\157\x6e\x74\162\157\x6c\x3a\x20\156\x6f\55\x73\x74\x6f\x72\x65\x2c\x20\156\x6f\55\x63\141\x63\x68\145\54\40\x6d\x75\163\x74\x2d\162\145\x76\141\154\x69\x64\x61\x74\145\54\x20\x6d\141\x78\x2d\x61\x67\x65\75\60"); header("\x50\162\141\x67\155\x61\x3a\40\x6e\157\55\143\x61\143\x68\145"); header("\x45\x78\160\151\x72\x65\x73\x3a\x20" . gmdate("\x44\54\40\x64\x20\115\40\131\x20\110\x3a\x69\72\163\40\134\107\134\x4d\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\163\x74\x2d\x4d\157\144\x69\x66\151\x65\144\72\x20" . gmdate("\x44\x2c\40\144\x20\x4d\40\x59\x20\110\72\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\x69\x6e\147\40\x63\141\x63\150\145\x20\146\x69\x6c\x65\56", ["\160\141\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\144\151\x66\151\145\x64" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); } } $this->log("\123\145\162\166\151\x6e\147\40\143\141\143\x68\145\40\x68\x65\141\x64\145\162\x73\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\55\115\157\x64\x69\146\151\x65\144\x3a\40" . gmdate("\104\54\40\144\x20\115\40\131\40\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\123\145\162\x76\151\x6e\x67\x20\x67\x7a\x69\x70\40\x63\141\x63\x68\x65\x20\146\151\154\x65\56", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\146\x69\145\144" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\155\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\x67\172\x69\160\x5f\x65\156\141\x62\154\x65")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\x7a\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\x6d\x70"; if (function_exists("\147\x7a\x65\x6e\x63\x6f\x64\145")) { $gomewsucumqsiske = apply_filters("\160\x72\137\157\160\x74\x69\x6d\x69\172\x61\x74\151\x6f\x6e\137\143\x61\x63\150\x65\x5f\x68\x74\155\x6c\x5f\147\172\x65\x6e\143\x6f\144\x65\x5f\154\x65\x76\x65\x6c\137\143\157\x6d\160\162\x65\163\163\x69\157\156", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\x70\162\137\x6f\160\164\151\x6d\x69\x7a\x61\x74\151\x6f\x6e\137\x63\x61\143\x68\145\x5f\150\x74\155\154\x5f\x67\x65\x6e\x65\162\141\x74\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\x61\x63\150\145\x20\146\151\154\x65\x20\147\x65\156\x65\x72\141\x74\145\144\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\137\157\160\164\x69\x6d\x69\x7a\x61\164\151\x6f\x6e\137\x63\141\x63\x68\145\x5f\x68\145\x61\x64\145\x72\163\137\x6c\x69\x73\x74", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\155\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\162\x5f\x6f\x70\164\151\155\151\172\x61\x74\151\x6f\x6e\137\143\x61\x63\x68\145\x5f\x68\x65\x61\x64\x65\x72\x73\137\x67\x65\x6e\145\162\x61\164\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\145\x61\x64\x65\162\x73\x20\x63\x61\143\x68\145\40\x66\x69\154\145\x20\x67\145\156\x65\x72\x61\x74\145\x64\56"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\x52\x5f\120\x52\117\124\117\x43\x4f\114", '') . "\x20\x33\60\64\40\116\157\x74\40\115\157\x64\x69\146\151\x65\x64", true, 304); header("\105\170\x70\151\162\x65\163\x3a\40" . gmdate("\104\54\x20\x64\40\115\40\131\x20\x48\x3a\x69\72\163") . "\40\x47\x4d\x54"); header("\103\x61\143\150\x65\55\103\157\x6e\x74\162\157\154\72\40\x6e\157\55\x63\141\x63\150\145\x2c\40\155\165\163\x74\x2d\162\145\x76\x61\154\151\x64\141\164\145"); $this->log("\123\145\162\166\151\x6e\x67\x20\140\63\60\64\140\40\x63\141\143\x68\145\40\146\151\x6c\x65\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\x66\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\150\164\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\x64\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\x5b\x30\55\71\101\x2d\106\135\x7b\62\175\57", [$this, "\155\x71\167\x6f\163\x79\x69\165\x6d\145\x77\x71\145\147\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\x44\145\164\x65\143\164\x69\157\x6e\x5c\x4d\x6f\x62\x69\x6c\145\104\145\x74\145\143\164") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\151\154\x65\137\x63\141\143\x68\x65")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\55\x6d\x6f\142\151\154\x65"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\x5f\x4f\x50\x54\111\x4d\111\x5a\x41\x54\111\x4f\x4e\137\104\117\x4e\124\x5f\117\x50\x54\111\x4d\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\x61\x70\x61\x63\x68\145\137\162\x65\x71\x75\x65\x73\x74\x5f\x68\145\141\144\x65\x72\163")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\157\x64\151\x66\151\x65\144\x2d\123\151\x6e\x63\x65"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\111\x46\x5f\x4d\117\x44\111\106\111\105\104\137\x53\111\x4e\x43\105", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\x5f\157\160\x74\x69\x6d\x69\172\x61\x74\151\x6f\156\137\143\141\x63\150\x65\137\150\x74\155\154\x5f\144\157\x5f\x67\145\x6e\145\x72\141\164\x65\x5f\x63\x61\143\150\x69\156\147\137\x66\x69\154\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\117\x50\124\x5f\x43\101\103\x48\105\137\x44\x4f\x4e\x54\137\105\x4e\103\x4f\x44\x45\137\106\111\x4c\x45\x4e\101\115\105\x53")) { $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\x2f\x5f\x70\162\55\x66\x69\154\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\55\55\40\x43\x61\143\150\145\x64\40\146\x6f\162\x20\147\x72\x65\141\164\40\160\x65\162\x66\157\x72\155\x61\x6e\x63\x65\40\x62\x79\40\x50\x4d\x50\x52\x20\x4f\160\x74\x69\x6d\151\x7a\x61\164\x69\157\x6e\x20\x4d\157\144\x75\154\145"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\x20\55\40\104\x65\142\165\x67\72\40\143\141\x63\150\x65\144\x40{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\40\55\x2d\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\x2e\x2a\51\167\160\x5c\x2d\152\163\157\x6e\x28\x2f\x2e\x2a\x7c\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\x6d\141\154\151\156\153\x5f\x73\x74\162\165\x63\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if ("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
