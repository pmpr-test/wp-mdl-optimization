<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1342030351             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\150\x69\156\x67\137\160\x72\157\143\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qmiqicgscsuoyeqo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qmiqicgscsuoyeqo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\152\x73\157\x6e"); $this->log("\x4c\x6f\x6f\153\x69\156\147\x20\x66\x6f\162\x20\143\141\143\x68\145\x20\146\151\154\145\x2e", ["\x70\x61\164\150" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto ysaumykuimqigeqa; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); ysaumykuimqigeqa: if (!$this->aceaeommyuooiqge()->get("\147\x7a\151\x70\137\145\x6e\141\142\154\145")) { goto eyskqaccgeomqmyw; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\x41\103\x43\105\120\x54\137\105\x4e\103\x4f\x44\111\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto oegaywiwywuyksaq; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); oegaywiwywuyksaq: eyskqaccgeomqmyw: if (!@is_readable($xswggycymueygwse)) { goto uiowwckamqucksim; } $this->ecsimoiakyygwais($xswggycymueygwse); uiowwckamqucksim: $this->log("\123\x74\141\x72\x74\x20\x62\x75\x66\146\x65\162\x2e", ["\x70\141\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\x71\143\x71\153\157\161\167\x63\x75\157\x71\x75\163\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto wscikmsmwmocsqeu; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; wscikmsmwmocsqeu: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto icawmkaswkmwicsa; } $this->log("\x43\x61\x6e\x20\156\x6f\164\x20\163\164\x61\x72\x74\x20\x62\x75\146\x66\x65\x72\x20\x70\162\x6f\x63\145\163\163\x2c\x20\155\x61\x79\x62\x65\x20\x70\141\x67\x65\40\x6e\157\x74\40\x65\x78\x69\x73\164\163\40\x6f\x72\40\x6e\x6f\x74\x20\x61\143\164\151\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; icawmkaswkmwicsa: if ($this->omgegoiwsakgwwug()) { goto imsgusweocmiyygi; } $this->log("\x41\166\157\x69\144\40\x63\x61\x63\x68\145\x20\160\141\147\145\40\142\x79\40\x66\x69\x6c\164\145\162", ["\146\151\154\x74\x65\x72" => "\160\x72\137\157\x70\164\151\155\x69\x7a\x61\164\151\x6f\156\137\x63\x61\x63\150\145\x5f\x68\x74\x6d\x6c\x5f\x64\x6f\x5f\147\x65\156\145\x72\141\164\x65\137\143\141\x63\x68\x69\x6e\x67\137\x66\x69\x6c\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; imsgusweocmiyygi: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto qwueqigcisoogaec; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); qwueqigcisoogaec: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto kmeekqukcecuscye; } $this->log("\143\x61\x63\x68\x65\40\x64\x69\162\x65\x63\164\x6f\x72\171\x20\x6e\157\164\40\147\145\x6e\145\162\x61\164\x65\144\72\40{$qwqyukkaswwygsyg}"); goto csoeisssoumqqeoa; kmeekqukcecuscye: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\x6a\x73\x6f\156")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); csoeisssoumqqeoa: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto weuueokkumksgaeo; } header("\x4c\x61\x73\164\55\115\x6f\144\x69\146\x69\145\144\x3a\40" . gmdate("\x44\x2c\x20\x64\x20\x4d\x20\131\40\x48\72\151\x3a\x73", filemtime($xswggycymueygwse)) . "\40\x47\x4d\x54"); weuueokkumksgaeo: $this->log("\120\141\x67\x65\x20\143\x61\x63\150\145\144\56", ["\160\141\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\x63\150\x65\55\x43\x6f\156\164\162\157\154\72\x20\x6e\157\55\x73\164\157\x72\x65\54\40\156\x6f\55\x63\141\x63\x68\145\x2c\40\155\165\163\164\x2d\x72\145\x76\141\154\151\144\x61\x74\x65\x2c\40\x6d\x61\x78\x2d\141\147\x65\75\60"); header("\120\x72\x61\x67\x6d\141\x3a\x20\x6e\157\55\143\x61\x63\x68\145"); header("\x45\170\160\x69\x72\x65\x73\x3a\x20" . gmdate("\104\54\40\144\x20\x4d\x20\x59\x20\110\x3a\x69\72\x73\40\x5c\107\134\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\163\164\x2d\115\x6f\x64\151\x66\x69\x65\144\x3a\x20" . gmdate("\104\x2c\x20\x64\x20\x4d\x20\x59\40\110\72\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto igckskemqkqueukg; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\166\151\x6e\147\x20\x63\x61\x63\x68\145\x20\x66\151\154\145\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\x69\x65\x64" => $cocykkikgmcykggu]); igckskemqkqueukg: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto momgmqemgcasyuqq; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto pssquaaiioygwqoq; } header("{$ymqmyyeuycgmigyo}\72\x20{$eqgoocgaqwqcimie}", false); goto ucugeysomcyceyos; pssquaaiioygwqoq: header($eqgoocgaqwqcimie, false); ucugeysomcyceyos: ykiyuciecskusaae: } wgmeyycmqioioaqc: $this->log("\x53\x65\162\166\x69\x6e\147\40\143\141\143\150\x65\40\150\145\x61\x64\145\x72\x73\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum]); momgmqemgcasyuqq: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\x73\164\x2d\115\x6f\144\x69\x66\151\145\x64\72\x20" . gmdate("\104\54\x20\144\x20\115\40\x59\x20\110\x3a\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qmuikumqukcyaeqa; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\x69\x6e\147\40\x67\x7a\151\160\40\x63\141\x63\x68\145\40\x66\x69\x6c\x65\x2e", ["\x70\141\164\150" => $esaqeawoigqgagum, "\x6d\157\144\151\x66\x69\145\144" => $cocykkikgmcykggu]); qmuikumqukcyaeqa: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto keyiswqkmqqquosw; } return; keyiswqkmqqquosw: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto imaiuooqwwokwemw; } return; imaiuooqwwokwemw: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\172\x69\160\x5f\145\156\x61\x62\154\x65")) { goto oaseseemoaqcgqeu; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\145\155\x70"; if (!function_exists("\x67\172\145\156\x63\x6f\144\145")) { goto mioaoacqueiyueak; } $gomewsucumqsiske = apply_filters("\x70\x72\137\157\160\164\x69\x6d\x69\x7a\141\x74\151\x6f\156\137\x63\x61\143\150\x65\x5f\x68\164\155\x6c\x5f\x67\172\x65\156\x63\157\144\x65\x5f\x6c\145\x76\145\154\137\143\x6f\155\x70\x72\x65\x73\163\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto mioqycmmeucswoms; } return; mioqycmmeucswoms: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); mioaoacqueiyueak: oaseseemoaqcgqeu: pmpr_do_action("\160\x72\x5f\x6f\160\x74\151\x6d\151\x7a\141\x74\x69\x6f\156\137\x63\141\143\150\x65\x5f\x68\164\155\154\137\147\145\156\145\162\x61\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\x63\x68\x65\x20\x66\151\154\145\40\147\x65\156\145\162\141\164\x65\144\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\137\157\160\x74\151\x6d\151\x7a\x61\x74\x69\157\156\137\x63\x61\x63\x68\x65\x5f\x68\x65\141\144\145\x72\163\x5f\154\151\163\x74", []); if (!$uykgysuswksgmwqy) { goto kisuswmyqsocukgk; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\x65\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kuymgsewmeoimeuq; } return; kuymgsewmeoimeuq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto gimsiyauegmikyka; } return; gimsiyauegmikyka: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\162\x5f\157\160\x74\151\x6d\x69\x7a\x61\x74\x69\157\156\x5f\x63\x61\143\x68\145\137\x68\145\141\x64\x65\162\163\x5f\x67\x65\156\145\x72\x61\164\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\141\x64\x65\162\x73\x20\143\x61\x63\x68\145\x20\146\151\x6c\145\40\147\145\156\145\162\x61\164\145\144\x2e"); kisuswmyqsocukgk: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto wisaekiyyweeemuy; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\x45\x52\x5f\x50\x52\117\x54\x4f\x43\117\114", '') . "\40\63\x30\64\x20\116\157\164\40\x4d\157\144\x69\x66\x69\x65\144", true, 304); header("\x45\170\160\x69\162\x65\x73\72\40" . gmdate("\104\x2c\x20\144\x20\115\x20\x59\40\x48\x3a\x69\72\x73") . "\40\107\x4d\124"); header("\103\x61\143\x68\145\x2d\103\157\x6e\164\x72\157\154\x3a\40\x6e\157\55\143\x61\x63\x68\x65\54\x20\155\165\163\x74\x2d\162\145\166\141\x6c\x69\x64\x61\x74\x65"); $this->log("\x53\145\x72\x76\x69\x6e\147\40\x60\63\x30\x34\140\x20\143\x61\143\150\145\x20\146\151\x6c\145\56", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\x69\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; wisaekiyyweeemuy: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\164\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\144\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\60\55\x39\101\55\106\135\173\62\175\57", [$this, "\155\161\x77\x6f\163\x79\151\x75\155\x65\x77\161\x65\x67\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\x74\145\x63\164\x69\x6f\x6e\x5c\115\157\x62\151\154\145\x44\145\x74\x65\143\164") && $this->aceaeommyuooiqge()->get("\x6d\157\142\151\154\x65\x5f\143\141\x63\x68\145"))) { goto emqmqkeygumaasam; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto aosasoogesueygak; } $wkcwykowmmmwioqs .= "\55\x6d\x6f\x62\151\x6c\145"; aosasoogesueygak: emqmqkeygumaasam: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\137\x4f\120\x54\111\115\111\x5a\x41\124\111\117\116\137\104\117\x4e\x54\137\x4f\120\124\111\x4d\111\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\x61\x63\150\145\x5f\162\x65\x71\x75\145\163\x74\137\x68\x65\x61\x64\145\162\163")) { goto meegaqaesckqmyec; } $uykgysuswksgmwqy = apache_request_headers(); meegaqaesckqmyec: if ($uykgysuswksgmwqy) { goto scccyaiaggeasgqg; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\x49\106\137\x4d\117\x44\x49\x46\111\x45\x44\137\x53\x49\x4e\x43\105", ''); goto asueqykmkoaimguq; scccyaiaggeasgqg: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\x2d\x4d\x6f\x64\x69\x66\151\x65\x64\55\123\x69\x6e\143\145"] ?? ''; asueqykmkoaimguq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\x6f\160\164\x69\155\x69\172\x61\x74\x69\157\x6e\x5f\143\x61\143\x68\145\137\x68\x74\x6d\154\x5f\x64\157\137\147\x65\156\x65\162\141\x74\145\x5f\143\141\x63\x68\151\156\147\x5f\146\151\154\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\x5f\117\120\124\x5f\103\101\103\110\105\137\104\117\x4e\124\x5f\x45\116\103\117\104\x45\x5f\x46\111\x4c\105\x4e\101\x4d\x45\123")) { goto kcwyeqmysgqkoqcm; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); isaouwiaamimceeg: } iyocimuyeemkaaso: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); kcwyeqmysgqkoqcm: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\57\137\160\x72\x2d\146\x69\x6c\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto wamgcqkaieummksu; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); wamgcqkaieummksu: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\55\40\103\x61\143\x68\145\x64\x20\146\157\x72\x20\x67\162\x65\x61\164\40\x70\145\x72\146\x6f\162\155\141\156\143\x65\x20\142\171\40\x50\115\x50\122\40\117\x70\x74\151\x6d\x69\172\x61\164\151\x6f\156\40\115\x6f\x64\x75\154\145"; if (empty($cqgoimumaewouews)) { goto mwgaaiaswusakkaq; } $kaaaegwagmaoscys .= "\40\x2d\40\x44\x65\x62\x75\147\72\40\x63\x61\x63\x68\145\144\100{$cqgoimumaewouews}"; mwgaaiaswusakkaq: $kaaaegwagmaoscys .= "\x20\x2d\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\56\52\51\x77\x70\x5c\x2d\x6a\x73\157\x6e\x28\x2f\56\52\x7c\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto ugowqoisymsioeye; } return false; ugowqoisymsioeye: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\162\x6d\141\154\151\156\x6b\x5f\x73\x74\x72\x75\x63\164\x75\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto oeosugomyqyekmuq; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\x68\160", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto gooqkmwgsmseuiwq; } $ygygweamcggggmce = ''; gooqkmwgsmseuiwq: oeosugomyqyekmuq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
