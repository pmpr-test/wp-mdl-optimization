<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fc94b167d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\x63\150\151\x6e\x67\x5f\x70\162\157\x63\x65\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\56\152\x73\x6f\x6e"); $this->log("\114\157\157\x6b\151\156\147\40\x66\x6f\x72\x20\143\141\x63\150\145\40\x66\151\x6c\145\x2e", ["\x70\141\x74\x68" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\137\145\x6e\141\142\154\x65")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\x41\x43\x43\x45\120\124\137\x45\x4e\103\117\104\111\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\x67\172\151\x70"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\123\164\141\162\164\40\142\x75\x66\x66\x65\162\56", ["\x70\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\143\x71\153\x6f\x71\x77\143\165\x6f\x71\165\163\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\x43\141\x6e\x20\156\x6f\164\40\x73\164\141\x72\x74\x20\x62\x75\146\146\145\x72\x20\160\x72\x6f\143\x65\x73\x73\54\40\x6d\x61\171\142\145\40\160\141\147\x65\x20\156\157\164\x20\x65\170\151\x73\x74\163\x20\x6f\162\40\x6e\157\x74\40\141\x63\x74\x69\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\101\166\x6f\x69\144\40\143\141\143\150\145\x20\x70\141\x67\145\40\142\x79\40\x66\x69\x6c\164\x65\162", ["\x66\151\154\x74\145\x72" => "\160\x72\x5f\x6f\160\164\x69\x6d\x69\172\141\x74\x69\157\x6e\x5f\143\x61\x63\x68\x65\x5f\x68\x74\155\x6c\137\x64\x6f\137\x67\145\x6e\145\162\x61\x74\x65\137\x63\x61\x63\x68\151\156\x67\x5f\146\x69\x6c\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\x6a\163\157\156")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\143\x61\143\x68\145\x20\x64\151\x72\145\143\164\x6f\162\x79\40\x6e\x6f\164\40\x67\x65\156\145\162\x61\x74\145\x64\72\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\114\x61\163\164\55\x4d\x6f\144\151\x66\x69\x65\x64\72\40" . gmdate("\104\54\40\x64\x20\x4d\40\x59\40\x48\x3a\x69\72\x73", filemtime($xswggycymueygwse)) . "\40\x47\x4d\124"); } $this->log("\120\x61\x67\x65\x20\x63\141\x63\x68\x65\144\x2e", ["\x70\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\143\150\145\55\x43\157\x6e\164\x72\x6f\x6c\x3a\x20\x6e\157\x2d\x73\164\157\x72\x65\x2c\40\x6e\x6f\x2d\143\x61\x63\150\x65\x2c\x20\155\x75\x73\164\55\162\x65\x76\x61\154\151\x64\141\164\145\x2c\40\155\141\x78\x2d\141\x67\x65\x3d\60"); header("\120\x72\x61\147\x6d\141\72\x20\156\157\x2d\143\x61\143\x68\x65"); header("\105\170\x70\151\x72\145\x73\x3a\40" . gmdate("\x44\54\x20\x64\x20\115\x20\x59\40\x48\72\x69\x3a\163\40\134\x47\x5c\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\x2d\x4d\157\x64\151\146\151\145\144\x3a\x20" . gmdate("\104\54\x20\144\40\115\x20\131\40\x48\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\x69\x6e\x67\40\x63\141\x63\150\x65\40\x66\151\154\145\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\x66\x69\145\x64" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\x3a\x20{$eqgoocgaqwqcimie}", false); } } $this->log("\x53\x65\162\166\151\156\147\40\x63\141\143\x68\145\40\150\145\x61\x64\x65\x72\163\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\55\115\157\144\151\x66\151\145\144\72\x20" . gmdate("\104\x2c\40\144\x20\115\40\x59\40\x48\x3a\x69\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\x69\x6e\147\40\x67\172\151\160\x20\x63\141\x63\x68\x65\x20\146\x69\154\x65\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\155\x6f\x64\151\146\x69\145\144" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\147\x7a\151\x70\137\x65\156\x61\142\x6c\x65")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\x7a\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\155\160"; if (function_exists("\147\x7a\145\156\143\x6f\144\145")) { $gomewsucumqsiske = apply_filters("\160\x72\137\157\160\x74\151\x6d\x69\172\141\x74\151\x6f\156\137\x63\x61\143\150\145\x5f\x68\164\x6d\154\137\147\x7a\x65\x6e\143\157\144\x65\x5f\x6c\x65\166\145\154\137\143\x6f\x6d\x70\162\x65\x73\163\x69\x6f\x6e", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\x70\x72\137\157\x70\164\x69\x6d\x69\172\141\x74\151\x6f\156\137\x63\141\x63\150\x65\x5f\150\x74\155\154\x5f\x67\x65\x6e\145\162\x61\164\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\x63\x68\145\x20\x66\x69\154\145\x20\147\x65\x6e\x65\x72\141\164\145\x64\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\162\x5f\157\160\164\x69\155\151\172\x61\164\151\157\156\x5f\x63\x61\x63\150\x65\137\150\x65\x61\x64\145\x72\163\137\154\x69\x73\x74", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\155\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\162\x5f\157\x70\164\151\155\151\x7a\141\x74\151\x6f\x6e\x5f\143\141\143\x68\x65\x5f\150\x65\x61\144\145\x72\x73\137\x67\x65\156\145\x72\x61\x74\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\x61\144\x65\x72\163\x20\x63\141\x63\x68\145\40\x66\151\x6c\145\x20\x67\x65\156\x65\162\141\x74\x65\x64\56"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\x56\105\x52\x5f\120\x52\x4f\124\117\103\x4f\x4c", '') . "\40\63\x30\64\40\116\x6f\164\40\115\x6f\x64\x69\146\151\145\x64", true, 304); header("\x45\x78\x70\151\x72\x65\x73\72\40" . gmdate("\x44\x2c\x20\x64\x20\x4d\40\x59\x20\110\x3a\x69\x3a\163") . "\40\x47\115\124"); header("\x43\141\x63\x68\145\55\103\157\x6e\x74\x72\157\x6c\x3a\x20\156\157\55\143\x61\x63\150\x65\54\40\x6d\x75\163\x74\55\x72\145\x76\x61\x6c\151\x64\x61\x74\x65"); $this->log("\123\x65\x72\166\151\x6e\x67\40\x60\63\60\x34\140\x20\143\141\x63\x68\x65\x20\x66\x69\154\145\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\x69\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\x74\x6d\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\133\60\x2d\71\x41\55\x46\135\x7b\62\175\57", [$this, "\155\x71\167\157\x73\x79\151\x75\155\x65\x77\161\145\147\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\x44\x65\x74\145\x63\164\151\157\x6e\x5c\115\157\x62\151\x6c\x65\x44\145\x74\x65\143\x74") && $this->aceaeommyuooiqge()->get("\155\x6f\x62\151\154\145\x5f\x63\x61\x63\x68\145")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\x2d\x6d\x6f\142\x69\154\145"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\x5f\117\x50\x54\111\x4d\x49\x5a\x41\x54\x49\x4f\x4e\137\104\x4f\x4e\124\x5f\x4f\120\x54\111\115\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\141\160\141\x63\x68\x65\137\162\x65\161\165\x65\x73\164\x5f\150\145\x61\x64\145\162\x73")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\x6f\x64\151\x66\x69\145\x64\x2d\x53\151\156\143\x65"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\x5f\111\106\x5f\x4d\117\x44\x49\x46\111\105\104\x5f\123\x49\116\x43\x45", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\x70\164\x69\155\151\172\141\x74\151\157\x6e\x5f\x63\x61\x63\150\145\x5f\x68\164\x6d\154\137\144\157\137\x67\145\156\x65\162\x61\x74\x65\x5f\143\x61\x63\x68\x69\x6e\x67\137\x66\x69\x6c\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\x5f\x4f\120\x54\x5f\103\101\x43\x48\x45\x5f\x44\117\116\124\137\105\x4e\x43\x4f\x44\x45\x5f\x46\111\x4c\105\x4e\x41\115\x45\x53")) { $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\x2f\137\x70\162\x2d\146\151\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\55\x2d\x20\103\x61\x63\x68\x65\x64\x20\x66\x6f\162\40\x67\162\145\x61\x74\40\160\x65\x72\146\x6f\x72\155\141\156\x63\145\x20\x62\x79\x20\120\115\x50\122\40\x4f\x70\164\x69\x6d\151\172\x61\164\x69\x6f\x6e\x20\x4d\x6f\x64\x75\x6c\145"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\x20\55\40\x44\145\x62\165\147\72\40\143\x61\x63\x68\x65\144\100{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\56\x2a\51\167\160\x5c\x2d\152\x73\x6f\x6e\50\x2f\x2e\52\174\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\x72\155\x61\154\151\156\x6b\x5f\x73\x74\x72\165\x63\164\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\150\x70", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if ("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
