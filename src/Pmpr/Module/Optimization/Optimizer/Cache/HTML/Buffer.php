<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fbefa1d87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\143\150\x69\156\x67\137\160\x72\x6f\x63\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\x74\x68"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\56\x6a\163\157\156"); $this->log("\114\157\x6f\x6b\x69\156\147\40\x66\157\162\40\143\x61\x63\150\145\40\x66\x69\154\145\56", ["\160\x61\164\150" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\x67\172\x69\160\x5f\x65\156\x61\x62\154\x65")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\172\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\x5f\x41\x43\103\105\x50\124\137\105\x4e\x43\x4f\104\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\x53\x74\141\x72\164\x20\142\165\x66\146\145\162\x2e", ["\x70\141\164\x68" => $xswggycymueygwse]); ob_start([$this, "\157\x71\143\161\x6b\x6f\x71\167\x63\165\x6f\x71\x75\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\x43\141\x6e\x20\156\157\x74\40\163\x74\141\162\x74\x20\x62\x75\146\x66\x65\x72\x20\160\x72\157\x63\145\163\163\x2c\x20\155\141\171\x62\x65\x20\x70\141\147\x65\40\156\157\x74\x20\145\x78\x69\x73\164\x73\40\157\x72\x20\x6e\157\164\x20\141\143\164\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\101\x76\x6f\x69\x64\x20\143\x61\143\x68\x65\x20\160\x61\147\145\40\142\171\x20\x66\151\154\x74\x65\162", ["\146\151\x6c\164\x65\x72" => "\160\x72\137\x6f\160\x74\x69\x6d\151\x7a\x61\164\x69\x6f\156\x5f\x63\x61\143\150\145\x5f\x68\x74\x6d\154\x5f\144\x6f\137\x67\x65\156\145\x72\x61\x74\x65\x5f\x63\x61\x63\x68\151\156\x67\x5f\146\151\x6c\145\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\152\163\157\156")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\143\x61\143\x68\145\x20\144\x69\x72\x65\143\x74\157\162\171\x20\156\157\x74\x20\147\145\x6e\x65\x72\141\164\x65\x64\x3a\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\114\141\x73\x74\x2d\115\157\x64\151\146\x69\145\x64\72\40" . gmdate("\x44\54\x20\x64\x20\115\40\131\x20\x48\72\x69\72\163", filemtime($xswggycymueygwse)) . "\40\x47\115\x54"); } $this->log("\120\141\x67\145\40\x63\141\143\x68\145\144\56", ["\160\141\x74\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\143\x68\x65\55\x43\x6f\156\164\162\x6f\154\72\x20\156\x6f\x2d\x73\164\x6f\162\145\x2c\x20\x6e\x6f\x2d\143\141\x63\150\x65\54\40\x6d\x75\163\164\55\x72\x65\166\x61\x6c\151\144\141\164\145\54\40\155\141\170\x2d\x61\x67\145\x3d\60"); header("\x50\x72\x61\x67\155\x61\72\40\x6e\x6f\55\143\x61\143\150\x65"); header("\x45\x78\160\x69\162\145\x73\72\40" . gmdate("\x44\x2c\x20\x64\40\x4d\40\131\x20\110\x3a\151\72\163\x20\x5c\x47\x5c\115\x5c\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\x2d\115\x6f\144\151\x66\x69\x65\x64\72\x20" . gmdate("\x44\54\x20\x64\40\x4d\40\131\40\x48\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\151\156\x67\x20\143\x61\x63\150\145\40\146\x69\x6c\x65\x2e", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\155\157\144\151\x66\x69\145\x64" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\x3a\x20{$eqgoocgaqwqcimie}", false); } } $this->log("\123\145\162\x76\x69\x6e\x67\x20\143\141\143\150\x65\x20\150\x65\x61\x64\145\162\163\x2e", ["\x70\141\164\150" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\x2d\x4d\x6f\x64\x69\x66\x69\145\144\72\x20" . gmdate("\x44\x2c\40\x64\40\x4d\x20\x59\40\110\x3a\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\156\x67\x20\147\x7a\x69\160\40\x63\x61\x63\x68\x65\x20\146\x69\154\145\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\155\x6f\x64\151\x66\x69\x65\x64" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\x67\172\151\160\x5f\x65\x6e\x61\x62\x6c\x65")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\145\x6d\x70"; if (function_exists("\x67\x7a\145\x6e\x63\x6f\144\145")) { $gomewsucumqsiske = apply_filters("\x70\162\x5f\x6f\x70\164\151\x6d\x69\x7a\x61\x74\151\157\156\x5f\x63\x61\x63\150\x65\x5f\150\x74\155\154\137\147\172\x65\156\x63\x6f\x64\x65\137\x6c\x65\x76\145\154\x5f\143\157\x6d\x70\162\x65\163\x73\151\157\x6e", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\160\162\x5f\157\x70\x74\151\x6d\x69\x7a\141\x74\x69\157\156\x5f\x63\x61\143\150\145\x5f\x68\164\155\154\x5f\147\x65\156\x65\162\x61\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\141\143\x68\x65\x20\146\x69\x6c\145\40\x67\x65\x6e\145\162\141\x74\145\144\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\137\x6f\x70\164\x69\155\151\172\x61\164\151\157\156\137\x63\x61\x63\150\145\137\150\x65\x61\144\x65\x72\163\137\x6c\x69\163\x74", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\162\x5f\x6f\160\164\x69\x6d\151\x7a\141\164\x69\157\x6e\x5f\143\x61\143\x68\x65\137\150\145\141\x64\x65\162\x73\137\x67\145\x6e\145\162\x61\164\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\145\x61\x64\x65\162\163\x20\143\141\x63\150\145\40\x66\x69\154\145\40\147\x65\156\145\162\x61\x74\x65\x64\x2e"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\126\105\122\x5f\120\x52\x4f\124\x4f\103\x4f\114", '') . "\40\63\x30\64\x20\116\157\x74\x20\x4d\x6f\144\x69\x66\151\145\144", true, 304); header("\x45\x78\x70\151\x72\x65\x73\72\x20" . gmdate("\104\x2c\x20\144\40\x4d\40\x59\40\110\72\x69\x3a\163") . "\x20\107\x4d\x54"); header("\x43\x61\x63\150\x65\x2d\x43\x6f\156\164\x72\x6f\x6c\72\x20\156\x6f\55\143\x61\x63\150\x65\54\40\155\x75\163\164\x2d\162\x65\166\141\154\x69\144\x61\x74\x65"); $this->log("\x53\145\162\166\151\156\x67\x20\x60\63\60\x34\x60\x20\143\x61\x63\x68\x65\x20\x66\151\x6c\x65\x2e", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\157\144\x69\x66\151\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\x68\x74\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\x64\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\60\x2d\x39\x41\55\106\135\173\62\x7d\57", [$this, "\x6d\161\x77\x6f\x73\171\x69\165\155\x65\x77\161\145\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\104\145\164\145\143\x74\151\x6f\156\x5c\115\x6f\142\151\154\x65\104\x65\164\x65\x63\x74") && $this->aceaeommyuooiqge()->get("\155\157\x62\151\154\x65\x5f\x63\x61\x63\x68\x65")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\x2d\155\157\x62\151\x6c\x65"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\120\124\x49\115\x49\x5a\x41\x54\111\x4f\116\137\104\x4f\x4e\x54\x5f\x4f\120\124\111\x4d\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\x61\x70\141\143\150\145\x5f\x72\x65\x71\165\x65\x73\x74\137\x68\145\x61\144\145\162\163")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\157\x64\x69\x66\151\x65\x64\x2d\x53\x69\156\143\145"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\x5f\x49\x46\137\115\x4f\x44\x49\106\111\105\104\x5f\123\111\x4e\103\105", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\x5f\x6f\x70\164\x69\155\151\172\141\164\151\157\x6e\x5f\x63\141\x63\x68\145\137\x68\x74\155\x6c\x5f\144\x6f\x5f\x67\145\156\145\x72\x61\x74\x65\137\x63\141\x63\150\151\x6e\x67\x5f\x66\151\154\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\137\x4f\120\x54\137\x43\x41\103\x48\x45\137\x44\x4f\116\x54\137\105\116\x43\117\104\x45\137\x46\x49\x4c\x45\116\101\x4d\x45\x53")) { $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\57\137\x70\x72\55\x66\x69\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\x2d\x2d\40\x43\141\143\x68\x65\x64\x20\146\x6f\162\40\147\x72\145\x61\164\x20\160\x65\x72\x66\x6f\162\155\x61\156\x63\x65\x20\x62\x79\40\120\115\x50\122\x20\117\160\x74\x69\x6d\151\172\x61\x74\x69\157\156\40\x4d\157\x64\x75\154\x65"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\40\55\x20\x44\x65\142\x75\x67\72\x20\x63\141\143\150\x65\144\100{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\x20\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\56\x2a\51\167\x70\x5c\55\152\x73\157\x6e\50\57\x2e\52\174\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\x6d\141\x6c\151\x6e\153\x5f\x73\x74\x72\165\143\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\x70", "\56"], ['', "\57"], $sycgeiyakseiumqy); if ("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
