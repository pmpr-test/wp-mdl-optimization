<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758114e5f226             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\150\x69\156\x67\x5f\160\162\157\143\x65\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\163\157\156"); $this->log("\114\x6f\x6f\x6b\151\156\147\40\x66\157\162\x20\143\x61\x63\x68\x65\x20\x66\x69\154\x65\56", ["\x70\141\164\150" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\147\x7a\151\160\137\x65\156\x61\142\154\x65")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\x7a\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\101\x43\103\105\x50\x54\x5f\105\116\x43\117\104\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\147\x7a\151\x70"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\123\164\141\162\x74\x20\x62\x75\146\146\x65\x72\56", ["\x70\141\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\x63\161\x6b\x6f\161\167\143\165\157\161\165\163\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\103\141\156\x20\x6e\157\x74\40\x73\x74\141\162\164\40\142\165\146\146\145\162\x20\160\162\x6f\x63\145\163\x73\x2c\x20\x6d\x61\171\x62\145\40\x70\x61\x67\x65\x20\x6e\x6f\x74\40\145\170\x69\x73\164\x73\40\157\x72\40\x6e\x6f\x74\x20\x61\x63\x74\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\101\166\157\151\x64\x20\143\141\x63\150\145\x20\x70\x61\x67\x65\40\142\171\x20\146\x69\154\x74\x65\x72", ["\x66\x69\x6c\x74\145\162" => "\160\x72\x5f\x6f\x70\x74\151\155\x69\x7a\x61\x74\151\x6f\156\137\x63\x61\x63\x68\145\137\150\x74\155\x6c\137\144\x6f\137\147\145\156\145\162\x61\164\145\137\x63\141\x63\150\151\x6e\x67\137\146\x69\x6c\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\x6a\x73\x6f\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\x63\x61\143\150\x65\x20\x64\x69\x72\x65\x63\164\157\x72\x79\x20\156\157\164\40\x67\145\x6e\145\162\141\164\145\x64\x3a\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\x4c\141\163\164\x2d\115\157\x64\151\x66\x69\x65\144\72\x20" . gmdate("\x44\x2c\x20\144\40\115\40\x59\x20\110\x3a\151\72\x73", filemtime($xswggycymueygwse)) . "\x20\x47\115\x54"); } $this->log("\x50\141\x67\x65\x20\143\x61\x63\x68\145\144\56", ["\x70\x61\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\x63\150\145\x2d\103\x6f\x6e\164\162\157\x6c\x3a\x20\156\x6f\x2d\163\x74\157\162\x65\54\x20\156\x6f\55\143\x61\x63\150\145\54\x20\x6d\x75\x73\164\55\x72\x65\166\x61\154\151\x64\141\x74\145\x2c\40\x6d\x61\170\55\x61\x67\x65\x3d\60"); header("\x50\162\141\147\x6d\x61\72\40\x6e\157\55\x63\x61\x63\150\145"); header("\x45\170\x70\x69\162\145\x73\x3a\x20" . gmdate("\104\54\40\x64\x20\115\x20\131\x20\x48\x3a\x69\x3a\163\x20\x5c\107\x5c\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\x74\55\115\157\144\151\x66\x69\x65\x64\x3a\x20" . gmdate("\x44\x2c\x20\x64\x20\115\40\131\x20\x48\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\x69\156\147\x20\x63\x61\143\150\145\x20\146\151\x6c\145\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\157\144\x69\x66\151\145\144" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); } } $this->log("\x53\x65\162\166\x69\x6e\x67\x20\x63\141\x63\150\145\x20\x68\145\x61\x64\145\162\x73\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\x74\x2d\x4d\x6f\x64\151\x66\x69\x65\144\72\40" . gmdate("\104\54\x20\x64\x20\115\x20\x59\x20\110\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\x69\x6e\x67\40\147\x7a\x69\160\40\x63\x61\143\150\x65\x20\x66\151\x6c\145\56", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\155\157\144\151\x66\151\x65\x64" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\155\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\147\x7a\x69\160\x5f\145\x6e\x61\142\x6c\145")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\x7a\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\145\x6d\160"; if (function_exists("\147\172\145\x6e\x63\157\144\x65")) { $gomewsucumqsiske = apply_filters("\x70\x72\137\x6f\160\164\x69\x6d\151\x7a\141\164\x69\157\156\x5f\x63\141\x63\150\145\137\x68\x74\x6d\x6c\x5f\x67\172\145\x6e\x63\x6f\x64\145\137\x6c\x65\x76\145\x6c\137\x63\157\x6d\160\x72\x65\x73\163\x69\157\x6e", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\x70\162\137\157\x70\164\x69\155\x69\172\141\x74\x69\x6f\x6e\137\143\x61\143\150\x65\137\x68\164\155\x6c\137\x67\145\x6e\x65\x72\141\x74\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\143\150\145\x20\x66\x69\x6c\x65\40\x67\145\156\x65\162\141\x74\145\144\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\162\137\157\160\164\x69\x6d\151\x7a\x61\x74\x69\157\x6e\137\x63\x61\x63\150\x65\137\x68\145\x61\144\x65\x72\163\x5f\x6c\x69\x73\x74", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\x6d\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\162\x5f\157\160\164\151\155\151\172\x61\164\151\x6f\156\137\143\x61\x63\x68\145\137\150\145\141\144\145\162\x73\x5f\147\145\x6e\x65\162\141\x74\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\141\144\x65\162\x73\x20\143\141\143\x68\145\x20\146\x69\x6c\x65\x20\147\x65\x6e\x65\x72\141\x74\145\144\x2e"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\105\122\x5f\x50\x52\x4f\124\x4f\103\117\x4c", '') . "\40\x33\x30\x34\40\x4e\x6f\x74\x20\x4d\x6f\144\151\x66\151\145\144", true, 304); header("\x45\x78\160\151\162\145\163\x3a\x20" . gmdate("\x44\54\40\144\x20\115\x20\x59\x20\x48\x3a\151\x3a\x73") . "\x20\107\115\x54"); header("\103\x61\143\x68\x65\x2d\103\x6f\x6e\x74\162\x6f\x6c\72\x20\x6e\x6f\55\143\141\x63\150\x65\x2c\x20\155\165\163\x74\x2d\162\145\x76\x61\154\151\144\141\x74\145"); $this->log("\x53\145\162\x76\151\156\x67\x20\140\63\x30\x34\x60\40\x63\141\x63\150\x65\x20\x66\151\154\145\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\157\x64\x69\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\150\164\x6d\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\x5b\x30\x2d\71\101\x2d\x46\x5d\173\x32\175\x2f", [$this, "\155\x71\167\157\163\x79\151\165\155\145\x77\161\145\147\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\104\x65\164\145\143\164\x69\x6f\156\134\x4d\x6f\142\151\154\x65\x44\145\x74\x65\x63\164") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\151\x6c\145\x5f\143\141\x63\150\145")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\55\x6d\157\x62\x69\x6c\x65"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\x5f\x4f\x50\x54\111\x4d\x49\132\101\124\111\117\x4e\x5f\104\x4f\x4e\x54\137\117\x50\124\111\x4d\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\141\160\141\x63\x68\x65\137\x72\x65\x71\x75\x65\x73\x74\x5f\150\x65\141\144\x65\x72\x73")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\146\x2d\x4d\x6f\x64\151\x66\x69\145\144\x2d\x53\151\x6e\143\145"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x49\106\x5f\115\x4f\x44\x49\x46\x49\105\x44\x5f\123\111\x4e\103\105", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\x5f\157\x70\x74\151\x6d\151\172\x61\x74\x69\157\x6e\137\143\141\x63\150\x65\x5f\x68\164\155\x6c\x5f\144\157\x5f\x67\145\156\x65\162\x61\164\x65\x5f\x63\141\143\150\151\156\147\137\146\x69\x6c\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\137\117\120\124\137\103\101\103\110\105\x5f\x44\117\x4e\x54\137\105\116\x43\117\104\x45\x5f\x46\x49\114\105\116\101\x4d\x45\123")) { $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\134") . "\57\x5f\160\x72\x2d\146\x69\154\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\x2d\x2d\40\103\141\143\x68\145\144\x20\x66\157\162\x20\147\162\145\141\164\40\160\x65\x72\146\157\x72\x6d\x61\x6e\x63\x65\x20\x62\x79\x20\120\x4d\120\x52\x20\x4f\160\164\x69\x6d\x69\172\x61\x74\151\x6f\x6e\x20\x4d\157\144\165\x6c\145"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\40\x2d\40\104\145\142\x75\x67\x3a\40\x63\x61\x63\x68\x65\x64\x40{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\56\52\x29\x77\160\x5c\55\152\x73\x6f\156\50\57\56\52\174\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\162\x6d\x61\154\151\156\x6b\137\163\x74\x72\x75\143\164\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\x61\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\x70\x68\x70", "\56"], ['', "\57"], $sycgeiyakseiumqy); if ("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
