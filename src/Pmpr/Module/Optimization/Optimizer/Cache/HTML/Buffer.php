<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf66918980             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\150\x69\x6e\x67\x5f\x70\x72\x6f\x63\145\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mmqkuymyyycywmqu; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; mmqkuymyyycywmqu: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\152\x73\x6f\x6e"); $this->log("\x4c\157\157\x6b\151\x6e\147\x20\x66\x6f\x72\40\x63\141\143\150\145\x20\146\151\x6c\x65\56", ["\x70\141\164\x68" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto iaockwkwaiqgeuyu; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); iaockwkwaiqgeuyu: if (!$this->aceaeommyuooiqge()->get("\147\172\151\160\x5f\145\x6e\141\142\x6c\145")) { goto icmsyimgycuocisu; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\101\103\103\x45\x50\124\137\105\116\103\117\x44\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto oeeasouoaaoaaemm; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); oeeasouoaaoaaemm: icmsyimgycuocisu: if (!@is_readable($xswggycymueygwse)) { goto wassyiqsqasaoiau; } $this->ecsimoiakyygwais($xswggycymueygwse); wassyiqsqasaoiau: $this->log("\x53\164\141\162\x74\40\142\165\146\146\145\x72\56", ["\x70\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\x71\143\x71\153\157\161\x77\143\x75\x6f\x71\165\x73\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto uekueeyqaackuwao; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; uekueeyqaackuwao: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto uaiiuywoakccusge; } $this->log("\x43\141\x6e\40\x6e\x6f\x74\40\x73\164\x61\x72\x74\40\x62\165\146\x66\x65\162\40\x70\162\157\x63\x65\x73\x73\x2c\40\155\141\171\142\x65\40\160\141\147\x65\x20\156\157\164\40\145\x78\151\x73\164\163\40\157\x72\x20\x6e\157\x74\x20\141\x63\164\151\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; uaiiuywoakccusge: if ($this->omgegoiwsakgwwug()) { goto ysiwoiqiaosqoikm; } $this->log("\101\x76\157\151\x64\40\143\141\x63\150\145\x20\160\x61\147\145\x20\142\171\40\x66\x69\154\x74\x65\162", ["\x66\151\154\164\145\x72" => "\160\x72\137\157\x70\x74\x69\155\151\172\141\x74\x69\157\156\x5f\x63\141\x63\x68\145\x5f\x68\x74\x6d\154\137\x64\x6f\137\x67\145\156\x65\x72\x61\164\145\x5f\x63\x61\x63\x68\151\156\x67\137\x66\x69\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ysiwoiqiaosqoikm: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto eieiwacwqkgsewai; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); eieiwacwqkgsewai: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto gokwmwmaumiwscua; } $this->log("\x63\141\x63\x68\x65\x20\x64\151\x72\x65\143\x74\157\162\171\x20\x6e\157\x74\x20\x67\x65\x6e\145\x72\141\164\145\144\72\x20{$qwqyukkaswwygsyg}"); goto eauiumeeyckucuyc; gokwmwmaumiwscua: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\x6a\x73\157\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); eauiumeeyckucuyc: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto gigiwwouakeekoim; } header("\x4c\x61\x73\x74\x2d\115\x6f\x64\x69\x66\x69\145\144\x3a\x20" . gmdate("\104\54\x20\144\40\115\40\x59\x20\x48\72\151\x3a\163", filemtime($xswggycymueygwse)) . "\x20\x47\x4d\x54"); gigiwwouakeekoim: $this->log("\x50\141\x67\x65\x20\x63\x61\143\150\x65\144\x2e", ["\x70\141\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\x63\x68\x65\55\103\157\156\x74\x72\x6f\154\x3a\x20\156\157\55\163\164\x6f\x72\x65\x2c\x20\156\157\x2d\143\x61\x63\x68\145\54\40\x6d\165\x73\x74\55\x72\145\x76\x61\x6c\x69\144\x61\164\x65\54\x20\x6d\x61\170\55\x61\x67\x65\75\60"); header("\120\x72\x61\147\x6d\141\72\40\156\157\55\143\141\143\150\x65"); header("\x45\x78\160\x69\162\x65\163\x3a\40" . gmdate("\x44\54\40\x64\40\115\x20\131\40\x48\x3a\x69\x3a\163\40\x5c\107\x5c\x4d\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\x2d\115\x6f\x64\151\x66\x69\145\x64\72\x20" . gmdate("\x44\x2c\40\144\40\x4d\x20\x59\40\x48\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto esuuweysgwuwcuue; } readfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\151\x6e\x67\x20\143\x61\143\150\145\40\x66\151\x6c\x65\x2e", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\155\157\x64\151\146\151\x65\144" => $cocykkikgmcykggu]); esuuweysgwuwcuue: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto saycoceqywiekqsi; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto gskaqcgccswmuqsy; } header("{$ymqmyyeuycgmigyo}\72\x20{$eqgoocgaqwqcimie}", false); goto uccuykggugcmiyam; gskaqcgccswmuqsy: header($eqgoocgaqwqcimie, false); uccuykggugcmiyam: qugsgsscqyikugyc: } ykuycowuguumseuu: $this->log("\123\x65\x72\166\151\x6e\x67\x20\143\141\143\150\x65\40\x68\145\141\144\x65\162\163\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum]); saycoceqywiekqsi: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\x73\x74\55\115\x6f\144\151\146\151\145\144\x3a\x20" . gmdate("\104\x2c\x20\x64\40\x4d\40\x59\x20\110\x3a\x69\72\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sqaowueaequoigsa; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\151\x6e\147\x20\x67\172\x69\x70\40\x63\141\x63\x68\145\x20\x66\151\154\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\144\151\146\151\x65\144" => $cocykkikgmcykggu]); sqaowueaequoigsa: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto eqmauwqqowsiwaue; } return; eqmauwqqowsiwaue: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto waycokyiesmqgqcg; } return; waycokyiesmqgqcg: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\160\x5f\145\x6e\x61\x62\x6c\x65")) { goto kkogaccoqmsmmkmo; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\145\x6d\160"; if (!function_exists("\147\172\145\x6e\143\157\x64\145")) { goto yuyiqaawwgaywgqo; } $gomewsucumqsiske = apply_filters("\160\x72\137\157\x70\x74\x69\x6d\x69\172\141\x74\x69\x6f\x6e\x5f\143\x61\x63\150\x65\x5f\x68\x74\155\154\x5f\x67\x7a\x65\x6e\143\157\144\x65\137\x6c\145\x76\x65\x6c\x5f\143\157\155\160\x72\145\x73\163\151\x6f\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto yqkyoaiwcyqeaqwu; } return; yqkyoaiwcyqeaqwu: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); yuyiqaawwgaywgqo: kkogaccoqmsmmkmo: pmpr_do_action("\x70\162\137\157\160\x74\x69\155\151\x7a\141\x74\x69\157\x6e\x5f\143\141\x63\x68\145\137\x68\x74\x6d\154\137\147\x65\x6e\x65\x72\x61\x74\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\x61\x63\150\145\x20\x66\151\154\145\x20\x67\x65\156\x65\x72\x61\164\x65\144\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\x72\x5f\x6f\x70\164\151\x6d\151\172\141\164\x69\157\156\x5f\143\141\x63\150\x65\137\150\145\x61\144\145\162\163\x5f\x6c\x69\x73\164", []); if (!$uykgysuswksgmwqy) { goto oegaywiwywuyksaq; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto qmiqicgscsuoyeqo; } return; qmiqicgscsuoyeqo: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto ysaumykuimqigeqa; } return; ysaumykuimqigeqa: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\x72\137\x6f\160\x74\151\155\151\x7a\x61\x74\151\x6f\x6e\137\143\141\x63\x68\145\x5f\x68\145\141\144\x65\162\163\x5f\x67\145\156\145\162\x61\164\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\150\145\141\144\145\x72\163\x20\x63\141\x63\150\x65\40\146\x69\154\145\40\x67\x65\x6e\145\x72\141\x74\x65\144\56"); oegaywiwywuyksaq: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto eyskqaccgeomqmyw; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\122\137\x50\x52\x4f\x54\117\103\117\114", '') . "\40\63\60\x34\x20\x4e\157\x74\x20\115\x6f\x64\x69\x66\151\x65\x64", true, 304); header("\x45\170\x70\x69\x72\145\x73\x3a\40" . gmdate("\104\54\40\x64\x20\115\x20\x59\x20\110\72\151\72\x73") . "\40\x47\115\x54"); header("\103\141\143\150\145\x2d\103\157\x6e\164\162\157\x6c\x3a\x20\x6e\x6f\55\143\141\x63\x68\x65\x2c\x20\x6d\165\x73\164\x2d\162\145\x76\141\154\x69\x64\x61\x74\145"); $this->log("\x53\145\x72\x76\x69\156\147\40\x60\63\x30\x34\x60\x20\143\x61\x63\150\x65\x20\x66\151\x6c\145\x2e", ["\160\141\164\x68" => $esaqeawoigqgagum, "\155\x6f\x64\x69\x66\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; eyskqaccgeomqmyw: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\150\164\155\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\60\55\x39\x41\55\x46\x5d\173\x32\175\x2f", [$this, "\x6d\x71\x77\157\x73\171\151\x75\155\x65\x77\x71\145\147\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\164\x65\143\x74\x69\157\156\x5c\115\157\142\151\154\145\104\145\164\145\x63\x74") && $this->aceaeommyuooiqge()->get("\155\157\142\x69\x6c\x65\x5f\x63\x61\143\150\x65"))) { goto wscikmsmwmocsqeu; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto uiowwckamqucksim; } $wkcwykowmmmwioqs .= "\55\155\x6f\142\x69\x6c\145"; uiowwckamqucksim: wscikmsmwmocsqeu: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\137\x4f\120\124\111\x4d\111\132\x41\x54\x49\x4f\x4e\x5f\104\x4f\x4e\124\137\117\120\x54\111\115\x49\132\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\x61\x63\150\145\x5f\x72\145\161\x75\145\x73\x74\137\x68\145\x61\x64\x65\162\x73")) { goto icawmkaswkmwicsa; } $uykgysuswksgmwqy = apache_request_headers(); icawmkaswkmwicsa: if ($uykgysuswksgmwqy) { goto imsgusweocmiyygi; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\111\x46\137\115\x4f\x44\x49\106\111\105\x44\x5f\x53\x49\x4e\103\105", ''); goto qwueqigcisoogaec; imsgusweocmiyygi: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\x4d\157\144\x69\x66\151\x65\x64\55\x53\151\156\143\145"] ?? ''; qwueqigcisoogaec: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\x6f\160\164\151\155\151\172\x61\164\x69\x6f\x6e\x5f\x63\141\x63\150\x65\x5f\150\x74\x6d\154\137\x64\x6f\137\x67\x65\x6e\145\x72\x61\164\x65\x5f\143\141\x63\x68\151\x6e\147\x5f\x66\x69\x6c\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\x5f\x4f\120\x54\137\103\x41\103\110\105\x5f\x44\x4f\x4e\124\x5f\x45\x4e\103\x4f\x44\x45\x5f\106\x49\x4c\x45\116\101\x4d\x45\123")) { goto weuueokkumksgaeo; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); csoeisssoumqqeoa: } kmeekqukcecuscye: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); weuueokkumksgaeo: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\x2f\137\x70\x72\55\146\151\154\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto igckskemqkqueukg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); igckskemqkqueukg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\55\55\x20\103\x61\x63\x68\145\144\x20\146\157\x72\40\x67\x72\145\x61\164\x20\x70\145\x72\x66\157\x72\x6d\141\x6e\143\x65\40\142\171\40\120\x4d\x50\x52\x20\117\x70\164\x69\x6d\x69\x7a\141\x74\151\157\156\x20\115\157\144\x75\154\145"; if (empty($cqgoimumaewouews)) { goto wgmeyycmqioioaqc; } $kaaaegwagmaoscys .= "\40\x2d\40\x44\x65\x62\165\147\x3a\40\x63\141\143\150\x65\144\x40{$cqgoimumaewouews}"; wgmeyycmqioioaqc: $kaaaegwagmaoscys .= "\x20\x2d\x2d\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\50\56\52\x29\167\x70\x5c\55\x6a\163\x6f\x6e\50\x2f\56\x2a\174\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto ykiyuciecskusaae; } return false; ykiyuciecskusaae: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\x72\155\141\154\151\156\153\137\x73\164\162\x75\x63\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ucugeysomcyceyos; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\x74\150"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\x70", "\56"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto pssquaaiioygwqoq; } $ygygweamcggggmce = ''; pssquaaiioygwqoq: ucugeysomcyceyos: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
