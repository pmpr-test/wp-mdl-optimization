<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c4541eb2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\150\151\156\x67\x5f\160\x72\157\x63\x65\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\150"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\163\157\x6e"); $this->log("\x4c\x6f\157\x6b\151\156\147\x20\x66\157\x72\40\143\x61\143\150\x65\40\146\x69\x6c\145\56", ["\x70\x61\164\x68" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\x67\x7a\151\x70\x5f\145\156\141\x62\154\x65")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\137\101\103\103\105\120\124\x5f\x45\116\x43\x4f\x44\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\147\172\151\x70"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\x53\164\x61\x72\164\40\x62\x75\x66\146\145\x72\56", ["\x70\x61\x74\150" => $xswggycymueygwse]); ob_start([$this, "\157\161\143\161\x6b\x6f\x71\167\143\165\157\161\165\163\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\x43\x61\x6e\40\156\x6f\164\40\163\x74\141\162\164\x20\x62\165\x66\146\145\x72\40\x70\x72\157\x63\x65\163\163\54\x20\155\x61\x79\x62\x65\x20\160\x61\x67\145\40\156\157\x74\40\145\170\151\x73\x74\163\x20\x6f\x72\40\156\x6f\164\x20\x61\143\164\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\x41\166\157\151\144\x20\x63\141\x63\150\x65\x20\160\x61\147\145\40\x62\x79\40\146\151\154\x74\145\162", ["\x66\151\x6c\x74\145\x72" => "\160\x72\x5f\x6f\160\164\151\x6d\x69\x7a\x61\x74\x69\x6f\x6e\137\x63\141\143\150\145\137\x68\x74\x6d\154\137\x64\157\137\x67\x65\156\145\x72\141\164\x65\x5f\143\141\143\x68\151\156\x67\137\x66\x69\x6c\145\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\152\163\x6f\156")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\143\x61\143\x68\145\40\x64\x69\x72\145\x63\164\157\x72\171\x20\x6e\x6f\164\40\x67\x65\156\x65\162\x61\x74\145\144\72\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\114\x61\x73\x74\55\115\x6f\144\151\x66\151\145\144\72\x20" . gmdate("\104\x2c\40\144\40\115\x20\131\40\110\72\151\72\163", filemtime($xswggycymueygwse)) . "\x20\107\115\124"); } $this->log("\120\x61\x67\145\x20\143\141\143\x68\x65\144\x2e", ["\x70\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\x63\150\x65\x2d\x43\157\156\x74\x72\157\154\x3a\x20\156\x6f\55\x73\164\x6f\x72\x65\54\40\x6e\157\x2d\143\x61\143\150\x65\x2c\40\x6d\165\x73\164\55\162\x65\x76\141\x6c\x69\144\141\164\x65\x2c\x20\x6d\141\x78\55\x61\x67\145\75\60"); header("\x50\162\x61\x67\155\141\72\x20\156\157\55\x63\x61\143\150\145"); header("\x45\170\x70\x69\162\145\163\x3a\40" . gmdate("\104\x2c\x20\x64\40\x4d\40\131\x20\110\72\x69\x3a\163\40\x5c\107\x5c\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\x2d\115\x6f\x64\151\x66\x69\x65\144\72\x20" . gmdate("\104\x2c\40\x64\40\115\x20\131\40\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\151\156\147\x20\143\x61\x63\x68\145\40\x66\151\x6c\x65\56", ["\x70\141\164\150" => $esaqeawoigqgagum, "\155\x6f\x64\x69\x66\151\x65\x64" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\72\x20{$eqgoocgaqwqcimie}", false); } } $this->log("\x53\x65\x72\x76\151\x6e\147\40\143\x61\143\x68\x65\40\x68\145\141\x64\x65\162\163\x2e", ["\x70\141\x74\150" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\55\115\157\144\x69\146\151\x65\144\72\x20" . gmdate("\x44\54\x20\144\x20\x4d\40\131\x20\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\x69\x6e\147\40\x67\x7a\151\x70\40\x63\141\143\x68\x65\x20\x66\151\x6c\x65\56", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\155\157\144\151\x66\151\x65\144" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\x67\172\151\160\137\x65\x6e\x61\x62\x6c\x65")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\155\160"; if (function_exists("\147\172\145\156\143\x6f\x64\x65")) { $gomewsucumqsiske = apply_filters("\160\162\x5f\157\160\164\151\155\151\x7a\x61\164\151\157\156\137\x63\x61\143\150\x65\137\150\x74\155\x6c\x5f\x67\x7a\145\x6e\x63\157\144\145\137\x6c\145\166\145\154\x5f\143\x6f\155\160\x72\x65\x73\163\151\157\156", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\160\x72\x5f\157\160\164\151\155\151\x7a\141\164\x69\157\156\137\x63\x61\143\x68\x65\x5f\150\164\x6d\x6c\137\x67\145\156\x65\162\x61\164\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\x63\150\x65\x20\146\151\154\x65\x20\x67\145\156\x65\x72\141\164\145\144\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\162\x5f\x6f\x70\x74\151\x6d\151\x7a\x61\164\151\x6f\156\x5f\x63\x61\x63\x68\x65\137\x68\145\x61\144\145\162\163\137\154\x69\163\164", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\145\155\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\162\137\x6f\x70\x74\151\155\x69\x7a\x61\x74\151\157\x6e\x5f\x63\141\143\x68\145\x5f\x68\x65\141\144\x65\162\x73\137\x67\x65\156\145\162\141\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\150\x65\141\x64\x65\x72\x73\40\x63\141\143\x68\145\40\146\151\x6c\x65\x20\147\x65\156\145\x72\141\164\145\x64\56"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\x56\105\122\137\x50\x52\x4f\124\117\x43\x4f\x4c", '') . "\x20\63\60\64\x20\116\x6f\x74\40\x4d\x6f\144\x69\146\151\145\x64", true, 304); header("\105\x78\x70\x69\162\x65\x73\x3a\x20" . gmdate("\104\x2c\40\144\40\115\40\131\40\110\x3a\x69\72\163") . "\x20\107\115\124"); header("\x43\x61\x63\x68\145\x2d\x43\157\x6e\x74\162\157\154\72\x20\x6e\x6f\55\x63\x61\x63\150\x65\x2c\40\155\x75\x73\164\55\x72\145\x76\x61\x6c\x69\x64\141\x74\145"); $this->log("\123\x65\x72\x76\151\x6e\147\x20\x60\x33\60\64\140\40\143\x61\143\x68\x65\x20\x66\151\x6c\145\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\164\155\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\60\55\x39\x41\55\x46\135\173\62\175\x2f", [$this, "\x6d\161\x77\157\x73\x79\151\165\155\145\x77\161\x65\147\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\104\145\x74\x65\143\x74\x69\x6f\156\x5c\x4d\x6f\142\151\154\145\x44\145\x74\145\143\x74") && $this->aceaeommyuooiqge()->get("\155\x6f\x62\151\154\145\137\143\141\143\150\145")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\x2d\155\x6f\x62\x69\x6c\145"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\x4f\x50\124\111\115\x49\132\101\124\x49\x4f\x4e\137\104\x4f\x4e\x54\x5f\117\x50\x54\111\115\x49\132\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\x61\x70\x61\x63\x68\145\x5f\x72\x65\x71\165\x65\x73\164\x5f\150\x65\141\144\145\162\x73")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\157\144\x69\146\x69\145\144\x2d\x53\x69\x6e\x63\145"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\x49\x46\x5f\x4d\x4f\104\111\x46\x49\105\104\x5f\x53\111\x4e\x43\x45", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\137\157\160\164\151\x6d\151\x7a\x61\x74\x69\157\x6e\x5f\x63\x61\x63\x68\145\137\150\164\155\154\137\x64\157\x5f\x67\x65\156\x65\x72\141\x74\145\x5f\x63\x61\x63\150\151\x6e\147\137\146\151\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\137\x4f\120\124\137\x43\101\x43\x48\105\x5f\104\x4f\x4e\124\x5f\x45\x4e\103\x4f\104\x45\137\106\111\114\105\x4e\x41\x4d\105\123")) { $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\57\x5f\160\x72\x2d\x66\151\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\55\40\103\141\143\x68\x65\144\x20\146\x6f\x72\40\147\162\x65\141\164\x20\160\x65\162\x66\x6f\x72\x6d\x61\156\x63\x65\x20\142\x79\40\x50\x4d\120\x52\40\x4f\160\x74\x69\155\151\172\x61\164\x69\157\x6e\x20\x4d\157\x64\x75\154\145"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\x20\x2d\40\104\145\x62\x75\147\72\x20\x63\x61\143\150\145\x64\x40{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\40\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\56\x2a\51\167\x70\134\x2d\152\x73\157\156\x28\57\x2e\x2a\174\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\162\155\141\x6c\x69\x6e\153\x5f\163\x74\162\165\143\164\x75\162\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\150\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if ("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
