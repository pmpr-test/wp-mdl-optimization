<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f12a1764bb6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\x68\151\156\x67\x5f\160\x72\157\x63\x65\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qmiqicgscsuoyeqo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qmiqicgscsuoyeqo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\152\x73\157\156"); $this->log("\x4c\x6f\x6f\153\151\x6e\x67\x20\x66\157\x72\x20\143\x61\143\x68\x65\x20\146\x69\x6c\145\56", ["\160\x61\x74\150" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto ysaumykuimqigeqa; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); ysaumykuimqigeqa: if (!$this->aceaeommyuooiqge()->get("\x67\172\151\x70\x5f\x65\156\141\142\x6c\x65")) { goto eyskqaccgeomqmyw; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\x5f\x41\x43\103\x45\x50\x54\137\x45\116\103\x4f\104\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto oegaywiwywuyksaq; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); oegaywiwywuyksaq: eyskqaccgeomqmyw: if (!@is_readable($xswggycymueygwse)) { goto uiowwckamqucksim; } $this->ecsimoiakyygwais($xswggycymueygwse); uiowwckamqucksim: $this->log("\123\x74\x61\162\x74\40\142\165\x66\x66\x65\162\x2e", ["\x70\x61\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\161\x63\161\x6b\157\161\167\143\x75\x6f\x71\165\163\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto wscikmsmwmocsqeu; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; wscikmsmwmocsqeu: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto icawmkaswkmwicsa; } $this->log("\x43\141\156\x20\x6e\157\164\x20\x73\x74\141\x72\x74\x20\x62\165\146\146\x65\162\x20\x70\x72\157\x63\145\163\163\x2c\40\x6d\x61\x79\x62\x65\x20\x70\x61\x67\145\x20\x6e\157\164\x20\145\x78\151\x73\x74\x73\40\x6f\162\40\x6e\157\164\40\x61\143\164\x69\166\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; icawmkaswkmwicsa: if ($this->omgegoiwsakgwwug()) { goto imsgusweocmiyygi; } $this->log("\101\x76\157\x69\144\x20\x63\x61\x63\x68\x65\40\x70\x61\147\145\40\x62\x79\40\146\x69\154\164\x65\162", ["\x66\x69\x6c\164\x65\162" => "\160\162\137\x6f\160\x74\x69\155\x69\x7a\141\164\x69\157\x6e\137\143\141\143\x68\x65\x5f\x68\164\x6d\x6c\x5f\x64\157\137\147\145\x6e\145\162\141\164\145\x5f\143\141\x63\x68\151\156\x67\x5f\146\151\x6c\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; imsgusweocmiyygi: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto qwueqigcisoogaec; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); qwueqigcisoogaec: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto kmeekqukcecuscye; } $this->log("\x63\141\143\x68\x65\x20\144\x69\162\145\143\x74\x6f\x72\171\40\156\157\x74\40\x67\x65\x6e\145\162\141\164\x65\144\72\40{$qwqyukkaswwygsyg}"); goto csoeisssoumqqeoa; kmeekqukcecuscye: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\x6a\x73\x6f\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); csoeisssoumqqeoa: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto weuueokkumksgaeo; } header("\114\x61\x73\164\55\x4d\157\x64\x69\146\151\145\144\72\40" . gmdate("\104\54\x20\x64\x20\x4d\40\131\x20\x48\72\x69\x3a\x73", filemtime($xswggycymueygwse)) . "\40\107\115\124"); weuueokkumksgaeo: $this->log("\x50\x61\x67\145\40\143\141\x63\150\145\144\56", ["\x70\141\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\143\x68\x65\55\103\x6f\x6e\x74\162\157\x6c\x3a\x20\x6e\x6f\55\x73\x74\x6f\162\145\x2c\x20\x6e\x6f\55\143\x61\x63\x68\145\54\40\x6d\x75\x73\164\x2d\x72\145\166\x61\154\x69\x64\x61\x74\x65\54\40\155\x61\170\x2d\141\147\x65\75\60"); header("\x50\162\x61\x67\x6d\141\x3a\x20\156\x6f\55\x63\141\143\x68\145"); header("\105\170\x70\151\162\x65\163\72\x20" . gmdate("\x44\x2c\x20\x64\40\x4d\40\x59\40\x48\72\151\72\x73\x20\x5c\107\134\x4d\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\164\x2d\x4d\157\144\151\x66\151\x65\144\72\x20" . gmdate("\x44\54\x20\144\x20\115\40\x59\40\x48\x3a\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto igckskemqkqueukg; } readfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\x69\x6e\x67\x20\x63\x61\143\x68\145\40\x66\151\x6c\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\x69\146\x69\x65\144" => $cocykkikgmcykggu]); igckskemqkqueukg: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto momgmqemgcasyuqq; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto pssquaaiioygwqoq; } header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); goto ucugeysomcyceyos; pssquaaiioygwqoq: header($eqgoocgaqwqcimie, false); ucugeysomcyceyos: ykiyuciecskusaae: } wgmeyycmqioioaqc: $this->log("\123\145\162\x76\151\156\x67\40\x63\141\x63\x68\145\x20\x68\145\x61\144\145\162\163\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum]); momgmqemgcasyuqq: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\x73\164\x2d\x4d\x6f\144\151\146\x69\x65\x64\72\x20" . gmdate("\x44\x2c\40\144\x20\x4d\40\131\x20\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qmuikumqukcyaeqa; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\151\x6e\x67\x20\147\172\x69\160\x20\x63\141\143\x68\x65\x20\x66\151\x6c\145\x2e", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); qmuikumqukcyaeqa: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto keyiswqkmqqquosw; } return; keyiswqkmqqquosw: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto imaiuooqwwokwemw; } return; imaiuooqwwokwemw: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\137\145\156\x61\142\154\x65")) { goto oaseseemoaqcgqeu; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\x6d\x70"; if (!function_exists("\x67\x7a\x65\x6e\143\157\144\x65")) { goto mioaoacqueiyueak; } $gomewsucumqsiske = apply_filters("\160\162\x5f\157\160\x74\151\155\x69\172\x61\164\x69\157\156\137\x63\x61\143\x68\x65\x5f\150\164\155\154\x5f\x67\172\x65\156\143\157\144\145\137\154\145\x76\145\154\x5f\143\157\155\160\x72\x65\x73\x73\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto mioqycmmeucswoms; } return; mioqycmmeucswoms: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); mioaoacqueiyueak: oaseseemoaqcgqeu: pmpr_do_action("\160\162\137\x6f\160\164\x69\x6d\151\172\x61\164\x69\157\156\137\143\x61\143\150\145\x5f\150\x74\155\154\x5f\x67\145\x6e\145\162\x61\x74\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\150\145\x20\146\x69\x6c\145\40\x67\x65\156\x65\162\141\164\x65\144\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\162\137\157\x70\x74\x69\155\151\x7a\141\164\x69\157\156\137\x63\x61\143\x68\x65\x5f\x68\145\x61\144\x65\162\x73\x5f\x6c\x69\x73\164", []); if (!$uykgysuswksgmwqy) { goto kisuswmyqsocukgk; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\145\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kuymgsewmeoimeuq; } return; kuymgsewmeoimeuq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto gimsiyauegmikyka; } return; gimsiyauegmikyka: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\160\x72\137\157\160\x74\x69\x6d\151\x7a\x61\x74\x69\x6f\156\x5f\143\141\x63\150\x65\137\150\145\141\144\x65\x72\x73\x5f\x67\x65\x6e\145\x72\141\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\150\x65\141\144\x65\162\163\40\x63\x61\143\x68\145\40\146\x69\x6c\x65\40\x67\145\156\x65\x72\141\x74\x65\x64\x2e"); kisuswmyqsocukgk: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto wisaekiyyweeemuy; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\x56\105\x52\137\120\x52\117\x54\x4f\x43\117\114", '') . "\40\x33\60\x34\x20\x4e\157\164\x20\x4d\x6f\144\x69\146\x69\145\x64", true, 304); header("\x45\x78\x70\x69\x72\x65\x73\72\40" . gmdate("\x44\x2c\40\144\40\x4d\x20\x59\40\x48\72\151\72\163") . "\40\x47\x4d\124"); header("\103\x61\143\150\145\55\103\157\x6e\164\x72\157\x6c\72\40\156\x6f\x2d\143\141\143\150\x65\54\x20\x6d\x75\163\164\55\x72\x65\x76\141\x6c\x69\144\x61\x74\x65"); $this->log("\x53\145\x72\166\151\x6e\147\40\140\63\60\x34\140\40\143\141\x63\150\145\40\146\x69\x6c\x65\x2e", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\144\151\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; wisaekiyyweeemuy: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\164\x6d\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\x30\55\x39\101\55\106\x5d\173\x32\x7d\57", [$this, "\155\x71\167\157\163\171\151\165\x6d\145\x77\x71\x65\147\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\145\164\x65\143\164\x69\x6f\156\134\x4d\157\x62\151\x6c\145\x44\x65\164\x65\x63\x74") && $this->aceaeommyuooiqge()->get("\155\157\x62\151\x6c\x65\x5f\x63\141\x63\x68\x65"))) { goto emqmqkeygumaasam; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto aosasoogesueygak; } $wkcwykowmmmwioqs .= "\x2d\x6d\157\x62\151\x6c\145"; aosasoogesueygak: emqmqkeygumaasam: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\x4f\120\124\111\115\x49\x5a\101\124\111\117\116\137\x44\x4f\116\x54\x5f\x4f\120\124\x49\115\111\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\x61\x63\150\145\137\162\x65\161\165\145\163\x74\x5f\150\x65\x61\x64\145\x72\163")) { goto meegaqaesckqmyec; } $uykgysuswksgmwqy = apache_request_headers(); meegaqaesckqmyec: if ($uykgysuswksgmwqy) { goto scccyaiaggeasgqg; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\111\x46\137\x4d\x4f\x44\111\106\111\105\104\x5f\123\111\x4e\x43\x45", ''); goto asueqykmkoaimguq; scccyaiaggeasgqg: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\55\x4d\157\x64\x69\146\151\x65\x64\55\x53\x69\x6e\143\145"] ?? ''; asueqykmkoaimguq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\137\x6f\x70\x74\x69\155\x69\172\141\x74\x69\157\x6e\137\143\141\143\x68\x65\x5f\x68\x74\155\154\x5f\x64\x6f\x5f\x67\145\156\x65\162\141\164\x65\137\x63\141\143\x68\x69\x6e\x67\x5f\146\x69\x6c\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\x4f\120\x54\x5f\103\101\103\x48\105\x5f\x44\x4f\x4e\x54\137\105\116\x43\x4f\x44\105\137\x46\111\x4c\x45\116\101\x4d\105\x53")) { goto kcwyeqmysgqkoqcm; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); isaouwiaamimceeg: } iyocimuyeemkaaso: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); kcwyeqmysgqkoqcm: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\57\137\x70\162\55\x66\151\154\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto wamgcqkaieummksu; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); wamgcqkaieummksu: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\x2d\40\103\x61\x63\150\x65\x64\40\146\x6f\162\40\x67\162\x65\141\x74\x20\160\x65\162\x66\157\162\x6d\141\156\x63\x65\40\142\x79\40\x50\x4d\120\122\40\x4f\160\164\151\x6d\151\172\141\x74\x69\157\x6e\40\115\x6f\144\165\154\x65"; if (empty($cqgoimumaewouews)) { goto mwgaaiaswusakkaq; } $kaaaegwagmaoscys .= "\40\x2d\x20\104\145\x62\x75\147\x3a\x20\143\x61\x63\x68\145\144\100{$cqgoimumaewouews}"; mwgaaiaswusakkaq: $kaaaegwagmaoscys .= "\40\55\55\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\56\52\51\167\x70\x5c\x2d\152\163\x6f\156\50\x2f\56\x2a\x7c\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto ugowqoisymsioeye; } return false; ugowqoisymsioeye: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\x72\x6d\x61\154\151\156\x6b\x5f\163\164\x72\x75\143\164\x75\x72\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto oeosugomyqyekmuq; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\150\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto gooqkmwgsmseuiwq; } $ygygweamcggggmce = ''; gooqkmwgsmseuiwq: oeosugomyqyekmuq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
