<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b5b18721             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\141\143\150\151\x6e\147\x5f\160\162\x6f\x63\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto wscikmsmwmocsqeu; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; wscikmsmwmocsqeu: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\152\163\x6f\156"); $this->log("\x4c\157\x6f\x6b\151\156\x67\40\146\x6f\x72\40\x63\x61\x63\x68\x65\40\146\151\x6c\145\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto icawmkaswkmwicsa; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); icawmkaswkmwicsa: if (!$this->aceaeommyuooiqge()->get("\147\172\x69\x70\x5f\x65\x6e\x61\142\x6c\145")) { goto qwueqigcisoogaec; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\x7a\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\101\x43\x43\x45\x50\x54\x5f\x45\116\103\x4f\x44\111\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto imsgusweocmiyygi; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); imsgusweocmiyygi: qwueqigcisoogaec: if (!@is_readable($xswggycymueygwse)) { goto kmeekqukcecuscye; } $this->ecsimoiakyygwais($xswggycymueygwse); kmeekqukcecuscye: $this->log("\x53\x74\x61\162\x74\x20\x62\165\146\146\x65\162\x2e", ["\160\141\164\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\x63\161\153\x6f\161\x77\143\x75\157\x71\x75\163\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto csoeisssoumqqeoa; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; csoeisssoumqqeoa: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto weuueokkumksgaeo; } $this->log("\x43\141\x6e\40\156\157\164\x20\x73\x74\141\x72\164\x20\x62\165\x66\x66\x65\162\x20\x70\162\x6f\143\x65\x73\163\x2c\40\x6d\x61\171\142\x65\x20\x70\x61\x67\145\x20\156\x6f\x74\x20\145\x78\151\163\x74\x73\x20\x6f\162\40\156\x6f\x74\x20\x61\x63\164\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; weuueokkumksgaeo: if ($this->omgegoiwsakgwwug()) { goto igckskemqkqueukg; } $this->log("\101\x76\157\151\x64\x20\x63\141\143\x68\x65\x20\x70\x61\x67\x65\40\x62\171\40\146\151\154\x74\x65\x72", ["\x66\x69\154\164\145\162" => "\160\162\x5f\157\x70\164\x69\155\151\x7a\141\x74\x69\x6f\x6e\x5f\x63\x61\x63\x68\145\x5f\x68\x74\x6d\x6c\x5f\144\157\137\147\145\x6e\145\162\x61\x74\x65\x5f\143\141\143\x68\x69\156\x67\x5f\146\151\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; igckskemqkqueukg: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto wgmeyycmqioioaqc; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); wgmeyycmqioioaqc: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto ykiyuciecskusaae; } $this->log("\143\141\x63\x68\x65\40\x64\x69\162\145\x63\164\157\162\x79\40\156\x6f\x74\40\x67\145\x6e\x65\162\141\x74\145\x64\x3a\x20{$qwqyukkaswwygsyg}"); goto pssquaaiioygwqoq; ykiyuciecskusaae: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\x6a\x73\x6f\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); pssquaaiioygwqoq: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto ucugeysomcyceyos; } header("\114\x61\x73\164\x2d\x4d\x6f\144\x69\x66\x69\145\x64\x3a\40" . gmdate("\104\x2c\40\x64\40\115\x20\x59\40\x48\72\151\72\163", filemtime($xswggycymueygwse)) . "\40\107\x4d\124"); ucugeysomcyceyos: $this->log("\120\141\x67\x65\40\x63\x61\143\x68\x65\x64\56", ["\160\x61\x74\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\143\150\x65\x2d\x43\x6f\156\x74\x72\x6f\x6c\x3a\x20\156\x6f\x2d\163\164\x6f\162\145\54\40\156\157\x2d\x63\x61\143\150\x65\x2c\x20\155\x75\x73\164\55\162\x65\x76\141\154\x69\144\141\x74\145\54\40\x6d\x61\x78\x2d\141\x67\x65\75\x30"); header("\x50\x72\141\x67\155\x61\72\x20\x6e\x6f\x2d\143\141\x63\150\x65"); header("\x45\x78\160\x69\162\145\x73\x3a\40" . gmdate("\104\x2c\40\144\x20\115\40\131\x20\x48\x3a\x69\x3a\x73\x20\x5c\107\134\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\x2d\115\x6f\144\151\146\x69\x65\x64\72\x20" . gmdate("\104\x2c\x20\x64\x20\x4d\x20\x59\40\110\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto momgmqemgcasyuqq; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\x69\x6e\147\40\143\x61\143\x68\145\x20\146\151\x6c\x65\56", ["\160\141\164\150" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\151\145\144" => $cocykkikgmcykggu]); momgmqemgcasyuqq: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto mioaoacqueiyueak; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto imaiuooqwwokwemw; } header("{$ymqmyyeuycgmigyo}\x3a\40{$eqgoocgaqwqcimie}", false); goto mioqycmmeucswoms; imaiuooqwwokwemw: header($eqgoocgaqwqcimie, false); mioqycmmeucswoms: keyiswqkmqqquosw: } qmuikumqukcyaeqa: $this->log("\x53\x65\162\166\151\156\147\40\143\141\143\150\145\x20\x68\x65\141\x64\x65\162\x73\x2e", ["\x70\x61\x74\x68" => $esaqeawoigqgagum]); mioaoacqueiyueak: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\x73\164\x2d\x4d\157\144\151\146\x69\145\x64\72\x20" . gmdate("\x44\54\40\144\x20\x4d\x20\x59\x20\110\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto oaseseemoaqcgqeu; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\151\156\x67\40\x67\x7a\151\160\40\x63\x61\143\150\x65\40\x66\x69\x6c\145\x2e", ["\160\141\x74\150" => $esaqeawoigqgagum, "\x6d\157\144\151\146\x69\x65\x64" => $cocykkikgmcykggu]); oaseseemoaqcgqeu: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kuymgsewmeoimeuq; } return; kuymgsewmeoimeuq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto gimsiyauegmikyka; } return; gimsiyauegmikyka: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\151\160\137\x65\156\x61\142\154\145")) { goto aosasoogesueygak; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\x6d\160"; if (!function_exists("\147\x7a\145\x6e\x63\x6f\x64\x65")) { goto wisaekiyyweeemuy; } $gomewsucumqsiske = apply_filters("\160\x72\x5f\x6f\x70\x74\151\x6d\151\x7a\x61\164\151\157\156\x5f\143\x61\x63\150\145\137\150\x74\155\154\x5f\x67\x7a\145\x6e\x63\x6f\x64\x65\x5f\x6c\145\166\x65\154\137\143\157\x6d\x70\x72\145\163\163\x69\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto kisuswmyqsocukgk; } return; kisuswmyqsocukgk: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wisaekiyyweeemuy: aosasoogesueygak: pmpr_do_action("\160\x72\x5f\157\x70\164\151\155\151\172\141\164\151\157\156\137\x63\x61\143\x68\145\x5f\x68\x74\x6d\x6c\137\147\145\x6e\145\x72\x61\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\x68\145\40\x66\151\154\145\x20\x67\145\x6e\145\x72\x61\x74\145\144\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\x72\x5f\157\160\164\151\155\151\x7a\141\164\151\157\156\137\143\x61\x63\x68\145\x5f\x68\x65\141\x64\145\162\x73\137\154\x69\x73\164", []); if (!$uykgysuswksgmwqy) { goto scccyaiaggeasgqg; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\x65\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto emqmqkeygumaasam; } return; emqmqkeygumaasam: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto meegaqaesckqmyec; } return; meegaqaesckqmyec: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\x72\x5f\157\x70\x74\151\x6d\151\x7a\141\164\x69\157\156\x5f\143\141\143\x68\145\x5f\x68\x65\x61\x64\x65\162\x73\x5f\147\145\156\x65\162\x61\164\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\150\x65\141\144\x65\162\163\x20\x63\x61\143\x68\x65\x20\146\x69\x6c\145\x20\x67\x65\x6e\x65\x72\141\164\x65\x64\x2e"); scccyaiaggeasgqg: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto asueqykmkoaimguq; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\x45\x52\x5f\x50\x52\x4f\124\x4f\x43\x4f\114", '') . "\x20\63\60\x34\40\116\157\164\x20\x4d\x6f\144\151\146\151\x65\x64", true, 304); header("\x45\170\160\x69\162\145\163\x3a\x20" . gmdate("\x44\54\40\144\x20\x4d\x20\131\40\110\x3a\x69\72\163") . "\40\107\x4d\124"); header("\x43\141\x63\150\145\x2d\103\x6f\x6e\x74\x72\x6f\154\72\40\156\x6f\x2d\x63\x61\143\150\x65\x2c\40\155\x75\163\x74\55\x72\x65\x76\x61\154\x69\144\141\x74\x65"); $this->log("\123\145\x72\166\x69\x6e\147\40\140\63\60\64\x60\40\143\x61\x63\x68\145\40\x66\x69\x6c\145\x2e", ["\160\141\164\150" => $esaqeawoigqgagum, "\x6d\157\x64\x69\x66\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; asueqykmkoaimguq: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\x68\164\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\156\144\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\x5b\60\x2d\x39\101\55\106\135\173\x32\x7d\57", [$this, "\x6d\161\167\157\x73\x79\151\165\x6d\145\x77\x71\145\x67\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\x65\164\x65\143\x74\x69\157\156\134\x4d\x6f\x62\151\x6c\x65\104\x65\x74\145\x63\x74") && $this->aceaeommyuooiqge()->get("\x6d\x6f\x62\151\154\145\137\143\x61\x63\x68\145"))) { goto isaouwiaamimceeg; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto iyocimuyeemkaaso; } $wkcwykowmmmwioqs .= "\55\155\x6f\142\x69\x6c\x65"; iyocimuyeemkaaso: isaouwiaamimceeg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\120\x54\111\115\111\132\x41\x54\111\117\x4e\x5f\x44\x4f\116\x54\x5f\117\120\124\x49\x4d\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\x61\x63\x68\145\x5f\x72\145\x71\165\x65\163\x74\137\x68\x65\x61\144\x65\162\x73")) { goto kcwyeqmysgqkoqcm; } $uykgysuswksgmwqy = apache_request_headers(); kcwyeqmysgqkoqcm: if ($uykgysuswksgmwqy) { goto wamgcqkaieummksu; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\x5f\111\106\137\x4d\x4f\x44\111\106\111\x45\x44\137\123\x49\x4e\x43\105", ''); goto mwgaaiaswusakkaq; wamgcqkaieummksu: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\115\x6f\144\x69\x66\x69\145\144\x2d\x53\x69\156\143\x65"] ?? ''; mwgaaiaswusakkaq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\x70\x74\x69\x6d\x69\172\x61\164\151\157\x6e\x5f\x63\x61\x63\150\x65\x5f\150\x74\x6d\x6c\137\144\157\137\x67\x65\156\x65\x72\x61\x74\x65\x5f\x63\141\143\x68\x69\x6e\147\137\146\x69\x6c\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\137\x4f\120\x54\x5f\x43\101\x43\110\105\137\x44\117\116\124\x5f\x45\x4e\103\117\104\x45\x5f\106\x49\114\x45\x4e\x41\115\x45\x53")) { goto oeosugomyqyekmuq; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); gooqkmwgsmseuiwq: } ugowqoisymsioeye: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); oeosugomyqyekmuq: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\57\137\x70\x72\x2d\x66\x69\x6c\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto emgssiqceagusgyg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); emgssiqceagusgyg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\x2d\40\103\141\x63\150\x65\x64\40\146\157\x72\40\x67\x72\145\141\164\x20\160\145\162\x66\157\162\155\x61\156\143\x65\x20\142\x79\x20\x50\115\x50\x52\40\x4f\x70\164\151\155\151\x7a\x61\164\x69\157\156\x20\115\x6f\144\x75\x6c\145"; if (empty($cqgoimumaewouews)) { goto ysusaysykymegguk; } $kaaaegwagmaoscys .= "\40\55\x20\x44\145\x62\x75\x67\x3a\x20\x63\x61\x63\x68\x65\x64\100{$cqgoimumaewouews}"; ysusaysykymegguk: $kaaaegwagmaoscys .= "\x20\55\55\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\50\56\x2a\51\x77\160\134\x2d\x6a\163\x6f\x6e\x28\x2f\56\52\x7c\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto yskswskmsgoouyco; } return false; yskswskmsgoouyco: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\x72\x6d\x61\x6c\151\x6e\153\x5f\163\x74\162\165\143\x74\x75\162\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto csskguekqcwcmocu; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\160\x68\160", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto oaciskoioaecgwee; } $ygygweamcggggmce = ''; oaciskoioaecgwee: csskguekqcwcmocu: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
