<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27a0f7c0c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\x68\x69\x6e\147\137\x70\x72\157\143\145\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\150"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto wscikmsmwmocsqeu; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; wscikmsmwmocsqeu: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\x73\157\x6e"); $this->log("\x4c\x6f\157\153\x69\x6e\x67\x20\146\x6f\162\x20\143\141\143\150\x65\x20\x66\151\x6c\x65\56", ["\160\x61\x74\150" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto icawmkaswkmwicsa; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); icawmkaswkmwicsa: if (!$this->aceaeommyuooiqge()->get("\x67\172\151\160\137\145\156\x61\x62\154\145")) { goto qwueqigcisoogaec; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\101\x43\103\x45\x50\x54\x5f\x45\x4e\x43\117\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\147\x7a\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto imsgusweocmiyygi; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); imsgusweocmiyygi: qwueqigcisoogaec: if (!@is_readable($xswggycymueygwse)) { goto kmeekqukcecuscye; } $this->ecsimoiakyygwais($xswggycymueygwse); kmeekqukcecuscye: $this->log("\x53\x74\141\162\x74\x20\142\x75\146\146\145\x72\x2e", ["\x70\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\x63\161\153\x6f\x71\x77\x63\x75\x6f\x71\165\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto csoeisssoumqqeoa; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; csoeisssoumqqeoa: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto weuueokkumksgaeo; } $this->log("\x43\x61\156\40\x6e\x6f\164\40\x73\x74\141\x72\x74\40\x62\x75\146\x66\145\x72\40\x70\162\x6f\x63\x65\163\163\x2c\x20\x6d\x61\x79\x62\x65\40\x70\x61\147\x65\40\156\157\x74\40\x65\170\151\163\x74\x73\x20\x6f\162\x20\x6e\157\164\x20\x61\143\x74\151\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; weuueokkumksgaeo: if ($this->omgegoiwsakgwwug()) { goto igckskemqkqueukg; } $this->log("\101\x76\x6f\x69\x64\40\x63\141\x63\150\x65\40\160\x61\147\145\x20\142\x79\x20\146\151\154\164\145\x72", ["\146\151\154\164\x65\x72" => "\160\162\137\x6f\x70\164\x69\x6d\151\172\141\x74\151\157\x6e\137\x63\x61\143\x68\x65\137\150\x74\155\x6c\137\144\x6f\137\147\x65\156\x65\162\x61\164\x65\137\143\141\143\x68\151\156\147\x5f\146\151\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; igckskemqkqueukg: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto wgmeyycmqioioaqc; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); wgmeyycmqioioaqc: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto ykiyuciecskusaae; } $this->log("\143\141\143\150\145\x20\144\x69\x72\145\143\x74\157\162\171\x20\x6e\157\x74\40\147\145\156\x65\x72\141\x74\x65\x64\72\40{$qwqyukkaswwygsyg}"); goto pssquaaiioygwqoq; ykiyuciecskusaae: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\x6a\163\x6f\156")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); pssquaaiioygwqoq: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto ucugeysomcyceyos; } header("\114\x61\163\164\55\115\x6f\144\151\x66\151\145\144\72\40" . gmdate("\x44\x2c\x20\x64\x20\115\40\x59\40\110\x3a\x69\x3a\163", filemtime($xswggycymueygwse)) . "\x20\107\x4d\x54"); ucugeysomcyceyos: $this->log("\120\x61\x67\x65\x20\x63\141\x63\x68\145\x64\x2e", ["\160\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\x63\x68\145\x2d\103\x6f\156\164\162\157\154\x3a\40\156\157\x2d\163\x74\x6f\162\x65\54\40\x6e\x6f\55\x63\x61\143\150\x65\x2c\40\155\x75\163\164\x2d\x72\x65\x76\141\154\151\144\x61\164\x65\54\x20\x6d\141\170\55\x61\147\145\x3d\x30"); header("\x50\x72\141\147\155\141\x3a\x20\156\157\x2d\x63\x61\x63\x68\x65"); header("\105\x78\x70\151\x72\x65\x73\x3a\x20" . gmdate("\104\54\x20\144\x20\115\x20\x59\x20\x48\72\151\72\163\40\x5c\x47\x5c\x4d\x5c\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\55\x4d\157\144\x69\x66\151\x65\144\72\x20" . gmdate("\104\54\40\x64\x20\115\40\x59\x20\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto momgmqemgcasyuqq; } readfile($esaqeawoigqgagum); $this->log("\123\x65\x72\166\x69\x6e\x67\x20\143\x61\x63\x68\145\40\x66\x69\154\145\56", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\151\145\x64" => $cocykkikgmcykggu]); momgmqemgcasyuqq: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto mioaoacqueiyueak; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto imaiuooqwwokwemw; } header("{$ymqmyyeuycgmigyo}\72\x20{$eqgoocgaqwqcimie}", false); goto mioqycmmeucswoms; imaiuooqwwokwemw: header($eqgoocgaqwqcimie, false); mioqycmmeucswoms: keyiswqkmqqquosw: } qmuikumqukcyaeqa: $this->log("\123\x65\x72\x76\151\156\x67\40\x63\141\x63\x68\145\40\x68\145\x61\x64\x65\x72\x73\56", ["\160\141\164\x68" => $esaqeawoigqgagum]); mioaoacqueiyueak: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\163\164\55\x4d\x6f\144\151\x66\151\x65\x64\x3a\40" . gmdate("\104\x2c\x20\144\x20\115\x20\x59\40\x48\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto oaseseemoaqcgqeu; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\151\x6e\147\x20\x67\x7a\151\160\40\x63\141\x63\x68\x65\40\146\x69\154\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\144\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); oaseseemoaqcgqeu: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\155\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto kuymgsewmeoimeuq; } return; kuymgsewmeoimeuq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto gimsiyauegmikyka; } return; gimsiyauegmikyka: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\137\x65\x6e\141\x62\x6c\145")) { goto aosasoogesueygak; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\x7a\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\155\x70"; if (!function_exists("\147\172\x65\156\x63\x6f\144\145")) { goto wisaekiyyweeemuy; } $gomewsucumqsiske = apply_filters("\160\162\137\157\160\x74\x69\155\151\x7a\141\x74\x69\157\x6e\137\143\x61\143\150\x65\x5f\x68\x74\x6d\x6c\x5f\x67\x7a\x65\x6e\x63\x6f\144\145\137\154\145\166\x65\x6c\137\x63\157\155\160\162\145\163\x73\151\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto kisuswmyqsocukgk; } return; kisuswmyqsocukgk: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wisaekiyyweeemuy: aosasoogesueygak: pmpr_do_action("\160\x72\137\x6f\160\164\x69\x6d\x69\x7a\141\164\x69\x6f\x6e\x5f\143\x61\143\150\x65\137\150\164\155\x6c\x5f\x67\x65\x6e\145\162\141\x74\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\143\x68\x65\40\x66\151\154\145\40\x67\145\156\x65\x72\x61\164\145\x64\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\162\x5f\157\160\164\151\155\151\x7a\141\164\x69\157\x6e\x5f\143\141\143\x68\145\137\x68\x65\141\144\x65\162\163\137\x6c\151\163\164", []); if (!$uykgysuswksgmwqy) { goto scccyaiaggeasgqg; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto emqmqkeygumaasam; } return; emqmqkeygumaasam: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto meegaqaesckqmyec; } return; meegaqaesckqmyec: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\162\x5f\x6f\160\x74\x69\155\151\172\x61\164\x69\x6f\156\137\143\x61\143\x68\x65\x5f\x68\x65\141\144\x65\162\163\137\147\145\x6e\145\x72\x61\x74\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\141\x64\145\162\x73\x20\143\141\x63\150\145\40\146\x69\x6c\145\x20\x67\145\156\145\x72\x61\x74\x65\x64\56"); scccyaiaggeasgqg: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto asueqykmkoaimguq; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\x56\105\x52\137\x50\x52\x4f\x54\x4f\x43\117\x4c", '') . "\40\x33\60\x34\40\116\x6f\164\x20\115\157\x64\151\x66\x69\145\x64", true, 304); header("\105\x78\160\x69\x72\x65\163\72\x20" . gmdate("\104\54\40\x64\40\x4d\40\131\x20\110\72\x69\72\163") . "\40\107\115\x54"); header("\x43\141\143\x68\145\55\103\157\x6e\x74\162\x6f\x6c\72\40\x6e\x6f\x2d\x63\x61\x63\150\145\x2c\40\x6d\x75\163\164\55\x72\x65\x76\x61\154\151\x64\141\164\x65"); $this->log("\x53\x65\162\166\x69\156\x67\x20\140\x33\x30\64\140\40\x63\141\x63\150\x65\x20\146\x69\154\x65\x2e", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\144\151\x66\151\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; asueqykmkoaimguq: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\164\155\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\60\x2d\x39\x41\55\106\x5d\x7b\x32\x7d\x2f", [$this, "\155\161\167\x6f\163\x79\x69\165\x6d\x65\x77\161\x65\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\145\x74\x65\143\x74\x69\x6f\x6e\134\x4d\157\142\x69\x6c\x65\x44\x65\164\x65\x63\x74") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\154\145\x5f\143\141\x63\150\145"))) { goto isaouwiaamimceeg; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto iyocimuyeemkaaso; } $wkcwykowmmmwioqs .= "\x2d\155\157\142\x69\x6c\145"; iyocimuyeemkaaso: isaouwiaamimceeg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\137\x4f\x50\x54\111\115\111\132\x41\x54\x49\x4f\116\137\x44\117\x4e\124\x5f\x4f\x50\x54\x49\115\111\132\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\141\143\150\145\x5f\x72\145\161\165\145\x73\x74\x5f\x68\145\x61\144\145\x72\163")) { goto kcwyeqmysgqkoqcm; } $uykgysuswksgmwqy = apache_request_headers(); kcwyeqmysgqkoqcm: if ($uykgysuswksgmwqy) { goto wamgcqkaieummksu; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\111\x46\137\x4d\117\104\x49\x46\111\105\x44\137\123\x49\x4e\x43\x45", ''); goto mwgaaiaswusakkaq; wamgcqkaieummksu: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\146\55\x4d\x6f\x64\151\x66\x69\x65\x64\x2d\123\151\156\143\145"] ?? ''; mwgaaiaswusakkaq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\137\157\160\x74\x69\155\x69\172\141\x74\151\157\156\137\x63\x61\x63\x68\145\137\x68\164\155\154\x5f\x64\x6f\137\147\x65\x6e\x65\x72\x61\164\x65\x5f\143\x61\143\150\x69\156\147\137\x66\x69\x6c\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\x4f\120\x54\x5f\x43\101\103\x48\x45\x5f\x44\x4f\x4e\x54\x5f\105\x4e\x43\117\x44\105\137\x46\x49\114\x45\116\101\x4d\x45\123")) { goto oeosugomyqyekmuq; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); gooqkmwgsmseuiwq: } ugowqoisymsioeye: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); oeosugomyqyekmuq: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\134") . "\x2f\x5f\160\162\x2d\146\151\x6c\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto emgssiqceagusgyg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); emgssiqceagusgyg: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\55\55\x20\x43\x61\x63\x68\x65\144\40\146\157\x72\x20\147\162\145\141\164\40\x70\x65\162\x66\x6f\x72\155\x61\x6e\143\145\40\142\171\40\120\115\x50\122\40\x4f\x70\x74\151\x6d\151\172\x61\164\x69\x6f\x6e\x20\x4d\157\144\x75\x6c\x65"; if (empty($cqgoimumaewouews)) { goto ysusaysykymegguk; } $kaaaegwagmaoscys .= "\40\x2d\x20\104\145\x62\x75\147\x3a\x20\143\x61\143\150\x65\x64\x40{$cqgoimumaewouews}"; ysusaysykymegguk: $kaaaegwagmaoscys .= "\40\x2d\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\x2e\52\51\x77\x70\134\x2d\x6a\x73\157\156\50\57\56\x2a\x7c\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto yskswskmsgoouyco; } return false; yskswskmsgoouyco: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\162\155\141\x6c\x69\156\x6b\137\163\x74\x72\x75\x63\164\x75\162\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto csskguekqcwcmocu; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\160\150\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto oaciskoioaecgwee; } $ygygweamcggggmce = ''; oaciskoioaecgwee: csskguekqcwcmocu: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
