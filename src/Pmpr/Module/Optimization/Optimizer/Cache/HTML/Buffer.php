<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b4f7e33a8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\143\x61\x63\150\151\156\147\137\x70\162\157\143\145\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\150"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto csoeisssoumqqeoa; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; csoeisssoumqqeoa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\x73\157\x6e"); $this->log("\114\157\x6f\x6b\151\x6e\147\x20\x66\157\162\x20\x63\141\x63\150\145\40\x66\151\154\x65\x2e", ["\x70\141\164\150" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto weuueokkumksgaeo; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); weuueokkumksgaeo: if (!$this->aceaeommyuooiqge()->get("\147\172\x69\x70\137\145\156\141\142\154\145")) { goto wgmeyycmqioioaqc; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\x7a\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\137\x41\x43\103\x45\120\x54\x5f\105\x4e\103\x4f\x44\x49\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\147\172\151\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto igckskemqkqueukg; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); igckskemqkqueukg: wgmeyycmqioioaqc: if (!@is_readable($xswggycymueygwse)) { goto ykiyuciecskusaae; } $this->ecsimoiakyygwais($xswggycymueygwse); ykiyuciecskusaae: $this->log("\123\x74\x61\x72\x74\x20\142\165\x66\x66\145\x72\x2e", ["\x70\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\157\161\x63\161\153\x6f\x71\167\143\x75\157\x71\165\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto pssquaaiioygwqoq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; pssquaaiioygwqoq: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto ucugeysomcyceyos; } $this->log("\103\141\156\x20\156\x6f\164\x20\x73\164\x61\162\x74\x20\x62\165\146\146\145\162\40\160\x72\x6f\143\145\x73\x73\x2c\40\x6d\x61\x79\x62\x65\x20\160\x61\x67\x65\x20\156\x6f\x74\40\145\170\x69\x73\x74\x73\x20\157\162\40\156\157\x74\x20\141\x63\164\x69\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ucugeysomcyceyos: if ($this->omgegoiwsakgwwug()) { goto momgmqemgcasyuqq; } $this->log("\x41\x76\157\x69\x64\40\143\x61\x63\x68\x65\x20\160\x61\147\145\x20\142\x79\40\146\x69\x6c\x74\145\x72", ["\x66\151\154\x74\145\x72" => "\x70\162\137\x6f\x70\164\151\x6d\151\x7a\x61\164\151\157\x6e\x5f\143\x61\143\x68\145\137\x68\164\155\154\x5f\x64\x6f\137\147\145\156\145\162\141\164\145\137\143\x61\x63\150\151\156\x67\137\x66\x69\154\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; momgmqemgcasyuqq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto qmuikumqukcyaeqa; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); qmuikumqukcyaeqa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto keyiswqkmqqquosw; } $this->log("\x63\141\x63\150\145\x20\144\x69\162\x65\143\x74\x6f\162\171\x20\156\x6f\x74\x20\x67\145\x6e\145\162\x61\164\x65\144\72\x20{$qwqyukkaswwygsyg}"); goto imaiuooqwwokwemw; keyiswqkmqqquosw: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\56\152\163\x6f\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); imaiuooqwwokwemw: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto mioqycmmeucswoms; } header("\x4c\x61\x73\x74\x2d\x4d\x6f\144\151\x66\151\145\144\x3a\x20" . gmdate("\x44\x2c\40\144\x20\115\40\x59\x20\110\x3a\x69\72\x73", filemtime($xswggycymueygwse)) . "\40\x47\115\x54"); mioqycmmeucswoms: $this->log("\120\141\147\145\x20\x63\x61\x63\x68\x65\x64\56", ["\x70\x61\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\x63\x68\x65\x2d\103\157\x6e\164\x72\157\x6c\x3a\40\156\157\55\163\x74\157\162\145\x2c\x20\x6e\157\55\143\x61\x63\150\x65\54\40\x6d\165\x73\x74\x2d\x72\145\x76\141\154\151\x64\x61\164\x65\54\40\x6d\x61\170\x2d\141\147\x65\x3d\60"); header("\120\162\x61\147\x6d\x61\72\x20\x6e\x6f\x2d\x63\x61\x63\x68\x65"); header("\105\x78\x70\151\x72\x65\x73\72\40" . gmdate("\x44\54\x20\144\40\115\40\x59\40\110\72\151\72\x73\40\134\107\134\x4d\x5c\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\163\164\55\115\x6f\x64\151\146\151\145\144\x3a\x20" . gmdate("\104\x2c\x20\x64\x20\x4d\x20\131\x20\110\72\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto mioaoacqueiyueak; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\x76\151\x6e\147\x20\143\141\x63\150\x65\x20\x66\x69\x6c\x65\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\x6f\x64\151\146\x69\145\144" => $cocykkikgmcykggu]); mioaoacqueiyueak: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto wisaekiyyweeemuy; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto gimsiyauegmikyka; } header("{$ymqmyyeuycgmigyo}\x3a\40{$eqgoocgaqwqcimie}", false); goto kisuswmyqsocukgk; gimsiyauegmikyka: header($eqgoocgaqwqcimie, false); kisuswmyqsocukgk: kuymgsewmeoimeuq: } oaseseemoaqcgqeu: $this->log("\x53\145\162\166\x69\x6e\147\x20\143\141\143\x68\x65\x20\150\145\141\144\x65\162\163\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum]); wisaekiyyweeemuy: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\55\x4d\x6f\144\x69\146\x69\145\x64\72\x20" . gmdate("\104\x2c\40\x64\x20\115\x20\131\40\x48\x3a\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto aosasoogesueygak; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\x69\156\x67\40\x67\x7a\151\x70\x20\x63\141\143\x68\x65\40\x66\151\154\145\x2e", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\157\x64\151\146\x69\x65\x64" => $cocykkikgmcykggu]); aosasoogesueygak: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto emqmqkeygumaasam; } return; emqmqkeygumaasam: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto meegaqaesckqmyec; } return; meegaqaesckqmyec: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\x7a\151\160\x5f\145\x6e\141\142\154\145")) { goto iyocimuyeemkaaso; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\151\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\x6d\160"; if (!function_exists("\147\x7a\145\x6e\x63\157\144\x65")) { goto asueqykmkoaimguq; } $gomewsucumqsiske = apply_filters("\160\x72\137\157\160\164\x69\x6d\x69\x7a\x61\x74\x69\157\x6e\x5f\x63\141\143\x68\x65\x5f\150\x74\155\154\x5f\147\172\145\156\x63\x6f\144\145\137\x6c\x65\166\145\154\137\x63\157\x6d\160\x72\145\163\163\151\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto scccyaiaggeasgqg; } return; scccyaiaggeasgqg: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); asueqykmkoaimguq: iyocimuyeemkaaso: pmpr_do_action("\160\x72\x5f\157\160\164\151\155\x69\172\x61\x74\x69\157\156\x5f\143\141\x63\x68\145\x5f\150\x74\x6d\154\137\x67\x65\156\x65\x72\x61\x74\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\141\x63\x68\145\x20\146\x69\x6c\x65\x20\x67\145\156\x65\x72\x61\164\x65\x64\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\x72\x5f\x6f\x70\164\151\x6d\x69\x7a\141\x74\151\x6f\156\x5f\x63\x61\143\x68\145\x5f\x68\145\x61\x64\x65\162\x73\137\154\151\163\164", []); if (!$uykgysuswksgmwqy) { goto wamgcqkaieummksu; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto isaouwiaamimceeg; } return; isaouwiaamimceeg: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto kcwyeqmysgqkoqcm; } return; kcwyeqmysgqkoqcm: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\x72\137\157\x70\x74\151\x6d\x69\172\141\x74\151\157\x6e\137\x63\141\143\x68\x65\137\150\145\x61\144\145\x72\x73\x5f\147\x65\x6e\145\162\x61\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\145\x61\144\x65\162\163\40\x63\141\143\x68\x65\40\146\x69\154\x65\x20\147\x65\156\x65\162\141\x74\x65\144\56"); wamgcqkaieummksu: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto mwgaaiaswusakkaq; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\105\122\x5f\120\122\x4f\x54\117\x43\117\114", '') . "\x20\x33\x30\64\x20\116\x6f\x74\40\115\157\x64\x69\146\151\x65\144", true, 304); header("\x45\170\160\151\x72\145\163\72\40" . gmdate("\104\x2c\x20\144\x20\x4d\x20\x59\x20\110\72\x69\72\x73") . "\x20\107\115\124"); header("\x43\x61\143\150\145\x2d\103\x6f\156\164\162\157\x6c\72\x20\x6e\157\x2d\143\141\143\150\145\x2c\40\155\x75\163\164\55\x72\x65\166\141\x6c\151\x64\x61\164\x65"); $this->log("\x53\145\x72\x76\x69\156\147\40\140\63\60\64\x60\40\x63\x61\143\150\145\x20\146\151\154\x65\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\x69\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; mwgaaiaswusakkaq: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\164\155\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\x30\x2d\71\101\55\106\x5d\x7b\x32\x7d\57", [$this, "\155\x71\x77\x6f\x73\x79\151\x75\155\145\167\x71\145\147\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\145\164\145\x63\164\x69\x6f\x6e\134\x4d\x6f\x62\x69\154\145\x44\x65\x74\x65\143\164") && $this->aceaeommyuooiqge()->get("\x6d\157\142\x69\x6c\145\x5f\x63\141\143\150\145"))) { goto gooqkmwgsmseuiwq; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto ugowqoisymsioeye; } $wkcwykowmmmwioqs .= "\55\x6d\157\x62\151\154\x65"; ugowqoisymsioeye: gooqkmwgsmseuiwq: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\x50\124\111\115\111\132\x41\124\111\117\x4e\x5f\104\117\116\x54\x5f\x4f\120\124\x49\115\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\x61\x63\150\145\x5f\x72\x65\161\x75\x65\163\164\x5f\x68\x65\x61\x64\x65\162\163")) { goto oeosugomyqyekmuq; } $uykgysuswksgmwqy = apache_request_headers(); oeosugomyqyekmuq: if ($uykgysuswksgmwqy) { goto emgssiqceagusgyg; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\x49\106\x5f\115\117\104\x49\106\x49\x45\104\137\x53\111\116\103\x45", ''); goto ysusaysykymegguk; emgssiqceagusgyg: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\115\157\x64\151\x66\x69\145\x64\x2d\123\x69\156\143\145"] ?? ''; ysusaysykymegguk: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\137\157\x70\x74\151\155\x69\172\141\164\151\x6f\x6e\137\x63\141\x63\150\x65\137\150\x74\155\x6c\x5f\144\157\x5f\x67\145\156\145\162\x61\x74\145\x5f\x63\141\x63\150\151\156\x67\x5f\146\x69\154\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\x5f\117\x50\x54\x5f\103\101\x43\x48\x45\137\x44\x4f\x4e\x54\137\105\x4e\x43\x4f\x44\105\137\106\111\114\x45\x4e\x41\115\x45\123")) { goto csskguekqcwcmocu; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); oaciskoioaecgwee: } yskswskmsgoouyco: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); csskguekqcwcmocu: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\x2f\137\x70\162\55\x66\x69\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto mmusoowesqcmuqew; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); mmusoowesqcmuqew: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\55\55\x20\x43\141\143\x68\x65\144\40\146\x6f\x72\x20\147\162\145\141\x74\40\x70\145\162\146\x6f\x72\155\141\156\x63\145\x20\x62\x79\x20\120\115\120\x52\x20\x4f\160\x74\151\155\151\172\x61\x74\x69\x6f\x6e\x20\115\157\x64\x75\154\145"; if (empty($cqgoimumaewouews)) { goto wkwkeicwosmkcygc; } $kaaaegwagmaoscys .= "\40\55\40\104\145\x62\165\x67\x3a\x20\143\x61\143\150\x65\144\x40{$cqgoimumaewouews}"; wkwkeicwosmkcygc: $kaaaegwagmaoscys .= "\40\55\x2d\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\50\56\52\x29\167\x70\x5c\55\152\163\157\x6e\50\x2f\56\x2a\x7c\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto ugcyukgoaiiysymc; } return false; ugcyukgoaiiysymc: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\155\x61\x6c\x69\156\x6b\137\163\x74\x72\165\x63\x74\x75\x72\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto kygcymkakucoeock; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\x61\164\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto yuoyeeuqqaockyqw; } $ygygweamcggggmce = ''; yuoyeeuqqaockyqw: kygcymkakucoeock: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
