<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d3a1360b4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\150\151\156\147\137\160\162\157\143\x65\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qmiqicgscsuoyeqo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qmiqicgscsuoyeqo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\56\x6a\x73\x6f\156"); $this->log("\x4c\x6f\x6f\x6b\151\x6e\147\x20\146\x6f\x72\x20\x63\141\143\x68\x65\x20\x66\151\154\x65\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto ysaumykuimqigeqa; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); ysaumykuimqigeqa: if (!$this->aceaeommyuooiqge()->get("\x67\172\x69\x70\x5f\x65\156\x61\142\154\145")) { goto eyskqaccgeomqmyw; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x41\x43\x43\x45\x50\x54\137\105\116\x43\x4f\x44\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto oegaywiwywuyksaq; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); oegaywiwywuyksaq: eyskqaccgeomqmyw: if (!@is_readable($xswggycymueygwse)) { goto uiowwckamqucksim; } $this->ecsimoiakyygwais($xswggycymueygwse); uiowwckamqucksim: $this->log("\x53\164\141\x72\x74\x20\x62\x75\x66\x66\145\162\x2e", ["\x70\141\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\161\x63\x71\153\157\161\x77\143\x75\x6f\x71\165\x73\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto wscikmsmwmocsqeu; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; wscikmsmwmocsqeu: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto icawmkaswkmwicsa; } $this->log("\103\141\156\x20\x6e\x6f\164\x20\163\164\141\162\164\40\142\x75\x66\146\x65\162\40\x70\162\157\143\x65\163\163\54\x20\x6d\x61\x79\x62\145\40\x70\141\x67\145\x20\156\157\x74\40\145\x78\151\163\x74\x73\40\x6f\x72\x20\156\157\164\40\141\x63\164\151\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; icawmkaswkmwicsa: if ($this->omgegoiwsakgwwug()) { goto imsgusweocmiyygi; } $this->log("\101\166\x6f\x69\144\x20\143\x61\143\150\145\40\x70\x61\x67\145\40\x62\171\x20\146\x69\154\164\145\162", ["\x66\x69\x6c\x74\145\x72" => "\160\162\137\157\160\x74\151\155\151\172\141\x74\x69\x6f\x6e\137\x63\141\143\x68\145\x5f\x68\x74\x6d\x6c\137\x64\x6f\x5f\x67\x65\x6e\145\x72\x61\164\x65\137\x63\x61\143\150\151\156\x67\x5f\146\151\x6c\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; imsgusweocmiyygi: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto qwueqigcisoogaec; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); qwueqigcisoogaec: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto kmeekqukcecuscye; } $this->log("\143\x61\x63\150\145\40\144\x69\x72\x65\143\x74\157\162\171\x20\x6e\157\164\x20\x67\145\x6e\145\x72\x61\164\x65\144\72\x20{$qwqyukkaswwygsyg}"); goto csoeisssoumqqeoa; kmeekqukcecuscye: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\152\163\157\156")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); csoeisssoumqqeoa: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto weuueokkumksgaeo; } header("\x4c\141\163\164\55\x4d\157\x64\151\x66\x69\145\144\72\40" . gmdate("\x44\54\40\144\x20\x4d\x20\131\40\110\x3a\x69\x3a\x73", filemtime($xswggycymueygwse)) . "\40\107\115\124"); weuueokkumksgaeo: $this->log("\120\x61\147\x65\x20\x63\x61\143\x68\145\144\56", ["\160\141\x74\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\143\150\145\x2d\x43\157\x6e\164\162\x6f\154\x3a\40\156\157\55\x73\164\x6f\x72\145\54\40\x6e\x6f\x2d\143\141\143\150\145\54\x20\155\165\x73\164\55\x72\x65\x76\x61\154\x69\x64\x61\164\145\x2c\40\155\x61\x78\55\141\147\x65\75\60"); header("\120\162\x61\x67\155\141\x3a\40\x6e\x6f\55\x63\141\143\x68\145"); header("\105\170\x70\x69\162\x65\x73\x3a\40" . gmdate("\x44\54\40\x64\40\x4d\x20\x59\x20\x48\72\151\72\x73\40\134\107\134\115\x5c\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\55\115\157\144\x69\146\151\145\144\72\40" . gmdate("\104\x2c\40\x64\x20\x4d\x20\x59\x20\x48\x3a\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto igckskemqkqueukg; } readfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\151\156\x67\40\143\x61\x63\x68\x65\40\x66\151\x6c\145\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\x64\151\146\151\x65\144" => $cocykkikgmcykggu]); igckskemqkqueukg: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto momgmqemgcasyuqq; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto pssquaaiioygwqoq; } header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); goto ucugeysomcyceyos; pssquaaiioygwqoq: header($eqgoocgaqwqcimie, false); ucugeysomcyceyos: ykiyuciecskusaae: } wgmeyycmqioioaqc: $this->log("\x53\145\162\x76\x69\x6e\x67\x20\143\141\x63\150\x65\40\x68\145\141\x64\145\x72\163\56", ["\160\141\164\150" => $esaqeawoigqgagum]); momgmqemgcasyuqq: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\164\x2d\115\157\144\x69\146\x69\x65\x64\x3a\40" . gmdate("\104\x2c\40\144\40\x4d\40\131\40\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qmuikumqukcyaeqa; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\151\x6e\x67\40\147\172\151\160\40\x63\x61\143\150\x65\x20\146\151\154\145\56", ["\160\141\164\150" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\x69\x65\144" => $cocykkikgmcykggu]); qmuikumqukcyaeqa: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\145\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto keyiswqkmqqquosw; } return; keyiswqkmqqquosw: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto imaiuooqwwokwemw; } return; imaiuooqwwokwemw: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\151\x70\137\x65\x6e\x61\142\154\x65")) { goto oaseseemoaqcgqeu; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\x7a\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\145\155\160"; if (!function_exists("\x67\172\x65\156\143\x6f\144\145")) { goto mioaoacqueiyueak; } $gomewsucumqsiske = apply_filters("\160\162\137\157\160\164\x69\x6d\151\172\x61\x74\151\157\x6e\137\143\x61\143\x68\x65\137\150\164\x6d\x6c\x5f\147\x7a\145\156\x63\x6f\x64\145\137\x6c\x65\166\x65\x6c\137\x63\157\155\160\162\x65\x73\x73\151\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto mioqycmmeucswoms; } return; mioqycmmeucswoms: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); mioaoacqueiyueak: oaseseemoaqcgqeu: pmpr_do_action("\x70\162\x5f\157\x70\164\151\155\x69\x7a\141\x74\x69\157\156\x5f\x63\141\x63\x68\x65\x5f\150\x74\x6d\x6c\x5f\x67\145\156\145\x72\x61\164\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\143\x68\145\40\x66\151\x6c\145\40\147\x65\156\x65\x72\141\x74\145\144\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\162\x5f\157\x70\x74\x69\155\151\172\x61\x74\151\x6f\156\137\143\141\143\x68\x65\137\x68\x65\141\144\145\x72\x73\x5f\154\x69\x73\x74", []); if (!$uykgysuswksgmwqy) { goto kisuswmyqsocukgk; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kuymgsewmeoimeuq; } return; kuymgsewmeoimeuq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto gimsiyauegmikyka; } return; gimsiyauegmikyka: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\x72\137\157\x70\x74\151\x6d\151\x7a\141\164\x69\157\156\x5f\143\x61\143\150\x65\137\x68\145\141\144\145\x72\x73\137\x67\145\x6e\x65\162\141\164\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\145\x61\144\x65\x72\x73\40\x63\141\143\150\145\40\146\x69\154\x65\40\x67\x65\156\145\162\141\x74\145\x64\56"); kisuswmyqsocukgk: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto wisaekiyyweeemuy; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\126\x45\x52\137\x50\x52\x4f\124\117\103\x4f\114", '') . "\40\63\60\64\40\x4e\157\x74\x20\x4d\157\x64\x69\146\151\145\144", true, 304); header("\x45\170\160\x69\162\x65\163\72\40" . gmdate("\x44\x2c\x20\144\40\115\40\x59\x20\x48\x3a\x69\72\163") . "\x20\x47\115\x54"); header("\103\x61\143\x68\145\55\x43\157\x6e\164\x72\x6f\154\72\x20\156\x6f\55\143\x61\x63\150\145\x2c\40\155\x75\163\164\55\x72\145\166\x61\154\x69\x64\x61\x74\145"); $this->log("\x53\145\162\166\151\156\147\40\140\x33\60\x34\140\x20\143\x61\143\150\x65\x20\x66\151\154\145\x2e", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\x69\x66\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; wisaekiyyweeemuy: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\x2e\150\164\x6d\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\144\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\133\x30\x2d\71\x41\55\x46\135\x7b\x32\175\x2f", [$this, "\x6d\161\167\x6f\163\171\x69\x75\155\x65\x77\161\145\147\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\x74\x65\143\164\x69\x6f\x6e\x5c\x4d\x6f\x62\151\154\x65\104\x65\x74\145\143\x74") && $this->aceaeommyuooiqge()->get("\155\157\x62\x69\154\x65\x5f\143\141\143\x68\x65"))) { goto emqmqkeygumaasam; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto aosasoogesueygak; } $wkcwykowmmmwioqs .= "\x2d\155\157\x62\x69\x6c\145"; aosasoogesueygak: emqmqkeygumaasam: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\120\x54\111\x4d\x49\x5a\101\124\111\117\x4e\x5f\104\117\116\x54\137\x4f\x50\124\111\115\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\141\143\x68\x65\x5f\x72\145\x71\165\145\x73\164\137\x68\145\141\x64\x65\162\163")) { goto meegaqaesckqmyec; } $uykgysuswksgmwqy = apache_request_headers(); meegaqaesckqmyec: if ($uykgysuswksgmwqy) { goto scccyaiaggeasgqg; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x49\106\137\x4d\117\104\x49\x46\111\x45\104\x5f\x53\111\x4e\x43\x45", ''); goto asueqykmkoaimguq; scccyaiaggeasgqg: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\x4d\157\144\x69\x66\151\x65\144\x2d\x53\151\x6e\143\x65"] ?? ''; asueqykmkoaimguq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\x5f\157\x70\164\x69\155\x69\172\x61\x74\x69\x6f\156\137\x63\x61\143\x68\x65\x5f\x68\164\155\154\137\144\x6f\x5f\x67\x65\156\x65\162\141\x74\x65\137\x63\141\x63\x68\x69\x6e\147\137\146\151\x6c\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\x5f\117\x50\x54\x5f\103\101\x43\x48\x45\137\x44\117\x4e\124\x5f\105\116\x43\x4f\x44\x45\x5f\x46\x49\x4c\x45\x4e\101\115\x45\123")) { goto kcwyeqmysgqkoqcm; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); isaouwiaamimceeg: } iyocimuyeemkaaso: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); kcwyeqmysgqkoqcm: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\x2f\137\x70\x72\55\146\x69\154\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto wamgcqkaieummksu; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); wamgcqkaieummksu: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\55\55\x20\103\x61\143\150\x65\144\40\x66\x6f\162\40\x67\x72\145\141\164\40\160\145\162\x66\157\162\155\x61\x6e\143\145\x20\x62\171\x20\x50\x4d\120\122\x20\x4f\x70\164\x69\x6d\x69\x7a\x61\164\x69\157\x6e\x20\115\x6f\144\x75\x6c\x65"; if (empty($cqgoimumaewouews)) { goto mwgaaiaswusakkaq; } $kaaaegwagmaoscys .= "\x20\x2d\40\x44\145\x62\x75\x67\72\40\143\x61\x63\150\145\144\100{$cqgoimumaewouews}"; mwgaaiaswusakkaq: $kaaaegwagmaoscys .= "\40\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\x2e\52\51\x77\160\134\55\x6a\x73\157\x6e\50\x2f\x2e\x2a\x7c\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto ugowqoisymsioeye; } return false; ugowqoisymsioeye: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\x6d\141\154\151\x6e\153\x5f\163\x74\x72\165\143\164\x75\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto oeosugomyqyekmuq; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\x74\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto gooqkmwgsmseuiwq; } $ygygweamcggggmce = ''; gooqkmwgsmseuiwq: oeosugomyqyekmuq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
