<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eaf9d55aac3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use WpOrg\Requests\Exception; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\x68\151\x6e\147\x5f\160\162\157\x63\145\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\164\x68"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto ywsywoumuaykkeaa; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; ywsywoumuaykkeaa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\152\163\157\x6e"); $this->log("\114\157\157\x6b\x69\156\x67\x20\146\x6f\x72\40\x63\x61\143\150\145\40\x66\x69\154\145\x2e", ["\160\141\x74\x68" => $xswggycymueygwse]); if (!@is_readable($kqeuymmkaacwmkic)) { goto wsqiqkiucakewgou; } $this->egygswiqouyukscu($kqeuymmkaacwmkic); wsqiqkiucakewgou: if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\x5f\x65\x6e\141\x62\154\145")) { goto wiiqigwgyuiuksia; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\172\151\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\x41\x43\x43\x45\120\x54\x5f\105\116\x43\x4f\104\x49\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto yaumwqeommqigswq; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); yaumwqeommqigswq: wiiqigwgyuiuksia: if (!@is_readable($xswggycymueygwse)) { goto mqoygcuqwacgycek; } $this->ecsimoiakyygwais($xswggycymueygwse); mqoygcuqwacgycek: $this->log("\123\164\141\x72\x74\x20\142\165\146\x66\x65\162\x2e", ["\160\x61\x74\150" => $xswggycymueygwse]); ob_start([$this, "\157\x71\143\x71\153\157\161\167\143\165\x6f\x71\165\x73\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto agyycikucwgmysee; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; agyycikucwgmysee: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto aiukiwqmikscoswm; } $this->log("\x43\141\156\x20\x6e\157\164\40\163\x74\x61\162\164\x20\142\x75\x66\146\x65\x72\x20\x70\x72\157\x63\x65\x73\163\54\x20\x6d\141\171\142\x65\40\160\141\147\x65\x20\x6e\x6f\x74\40\145\170\151\163\164\x73\x20\157\x72\40\156\157\164\40\141\x63\x74\151\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; aiukiwqmikscoswm: if ($this->omgegoiwsakgwwug()) { goto mcmkqgkwyqoiikcq; } $this->log("\101\x76\x6f\x69\144\x20\x63\x61\x63\150\x65\x20\x70\141\x67\x65\40\142\171\x20\x66\151\x6c\x74\145\162", ["\x66\x69\154\164\145\x72" => "\x70\x72\137\x6f\160\164\x69\155\x69\172\141\164\x69\157\x6e\137\143\x61\x63\x68\145\137\x68\164\x6d\x6c\x5f\x64\157\x5f\147\x65\x6e\145\162\x61\x74\x65\x5f\143\x61\x63\x68\151\x6e\x67\137\x66\x69\x6c\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; mcmkqgkwyqoiikcq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto ssyukuseoymackeo; } $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); ssyukuseoymackeo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto gskacikgkwcuauko; } $this->log("\143\141\x63\x68\x65\x20\x64\151\162\145\143\x74\x6f\x72\171\x20\x6e\157\x74\x20\x67\x65\x6e\145\x72\x61\164\145\x64\72\40{$qwqyukkaswwygsyg}"); goto yyieomeeqycmikqw; gskacikgkwcuauko: $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\152\x73\157\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); yyieomeeqycmikqw: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto kwiuqqwamsimqgme; } header("\114\x61\163\x74\x2d\x4d\157\x64\151\x66\x69\145\144\x3a\40" . gmdate("\104\x2c\x20\x64\40\115\x20\131\x20\x48\x3a\x69\x3a\163", filemtime($xswggycymueygwse)) . "\x20\107\x4d\x54"); kwiuqqwamsimqgme: $this->log("\x50\141\147\145\x20\143\x61\x63\150\145\144\x2e", ["\160\141\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\x63\150\145\55\x43\x6f\x6e\x74\162\157\154\x3a\x20\x6e\x6f\55\163\x74\x6f\x72\x65\x2c\40\x6e\x6f\55\x63\141\143\x68\145\54\40\x6d\165\x73\164\x2d\162\145\x76\141\x6c\151\x64\141\164\x65\54\40\155\141\x78\x2d\x61\x67\145\x3d\60"); header("\x50\x72\x61\x67\155\x61\72\40\156\157\x2d\x63\x61\x63\x68\145"); header("\105\x78\160\x69\162\145\163\x3a\x20" . gmdate("\x44\54\40\144\x20\115\x20\131\40\x48\x3a\x69\72\163\x20\134\107\x5c\115\x5c\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\x73\164\55\115\x6f\144\151\146\151\145\144\x3a\40" . gmdate("\104\x2c\40\x64\x20\x4d\40\131\40\110\72\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qmegcmqemmywoqas; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\x6e\147\x20\x63\141\143\150\145\40\146\x69\154\145\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\155\157\144\151\146\x69\145\144" => $cocykkikgmcykggu]); qmegcmqemmywoqas: exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if (!$uykgysuswksgmwqy) { goto kkwqmewaksmokuqy; } foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { goto seieguyaaiqismgo; } header("{$ymqmyyeuycgmigyo}\72\x20{$eqgoocgaqwqcimie}", false); goto qgyoesyiasqimcoe; seieguyaaiqismgo: header($eqgoocgaqwqcimie, false); qgyoesyiasqimcoe: uueywyysiicuauem: } giooasyeqwaaocea: $this->log("\123\145\x72\166\x69\156\147\x20\x63\141\143\150\x65\x20\150\145\141\x64\145\162\x73\56", ["\160\141\164\x68" => $esaqeawoigqgagum]); kkwqmewaksmokuqy: } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\x2d\115\157\144\x69\x66\151\x65\144\72\x20" . gmdate("\x44\54\x20\144\x20\x4d\40\131\x20\x48\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto gsgkayokisiesciy; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\151\x6e\x67\40\x67\172\x69\x70\40\143\x61\143\x68\x65\x20\146\x69\x6c\x65\56", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\x6d\157\144\x69\146\151\x65\x64" => $cocykkikgmcykggu]); gsgkayokisiesciy: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto ascogkesqmuuaesq; } return; ascogkesqmuuaesq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto askukaucmocewkgg; } return; askukaucmocewkgg: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\151\x70\x5f\145\156\x61\x62\154\145")) { goto meqmcgmksqiqcoyq; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\145\x6d\160"; if (!function_exists("\147\172\145\x6e\x63\157\144\x65")) { goto wssaaemscmmiomee; } $gomewsucumqsiske = apply_filters("\160\x72\x5f\x6f\160\x74\151\x6d\151\x7a\141\164\151\x6f\156\137\x63\141\143\x68\x65\137\150\164\x6d\x6c\137\147\172\x65\156\143\x6f\144\x65\x5f\154\145\166\145\154\137\143\157\155\160\x72\145\x73\x73\151\x6f\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto kiemqsgcmouqscao; } return; kiemqsgcmouqscao: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); wssaaemscmmiomee: meqmcgmksqiqcoyq: pmpr_do_action("\160\162\137\x6f\x70\164\x69\155\x69\172\141\164\x69\x6f\x6e\137\143\141\x63\150\145\137\x68\x74\x6d\154\x5f\x67\145\x6e\x65\x72\x61\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\143\150\x65\x20\x66\x69\154\145\40\x67\145\156\x65\x72\141\164\x65\144\56"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\x70\162\x5f\x6f\x70\164\151\155\x69\x7a\141\x74\x69\x6f\156\x5f\143\141\143\150\x65\137\x68\145\x61\x64\x65\x72\x73\x5f\x6c\x69\x73\x74", []); if (!$uykgysuswksgmwqy) { goto asciaakaoygususy; } $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\x65\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto euskosgaksmimgug; } return; euskosgaksmimgug: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { goto iusaeoimukymskgs; } return; iusaeoimukymskgs: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\162\137\x6f\x70\164\151\x6d\151\x7a\x61\164\151\157\156\x5f\143\141\143\150\x65\x5f\x68\x65\141\x64\x65\x72\x73\x5f\x67\x65\x6e\x65\162\x61\164\x65\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\145\141\x64\x65\x72\x73\40\143\141\x63\150\x65\x20\146\151\x6c\x65\40\x67\145\156\145\x72\141\x74\x65\144\x2e"); asciaakaoygususy: } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto eaggoasiwogmquwc; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\105\x52\137\x50\122\x4f\124\x4f\x43\117\x4c", '') . "\x20\x33\60\x34\40\x4e\x6f\164\40\115\157\144\151\146\x69\x65\144", true, 304); header("\105\x78\x70\151\162\145\x73\x3a\40" . gmdate("\104\54\x20\144\x20\x4d\40\x59\x20\x48\72\151\x3a\x73") . "\x20\107\x4d\124"); header("\x43\x61\x63\x68\145\x2d\x43\157\156\164\162\x6f\x6c\x3a\x20\x6e\157\55\143\141\143\150\x65\x2c\x20\x6d\165\163\164\x2d\x72\145\x76\141\x6c\x69\x64\x61\164\145"); $this->log("\x53\x65\x72\x76\x69\156\x67\x20\x60\x33\x30\64\x60\x20\143\141\143\x68\145\x20\146\151\154\145\56", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\157\144\x69\146\151\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; eaggoasiwogmquwc: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\150\164\x6d\x6c") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\133\x30\x2d\71\x41\55\106\x5d\x7b\62\x7d\x2f", [$this, "\155\x71\167\157\163\x79\151\x75\155\145\167\x71\145\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\104\145\164\x65\x63\164\x69\x6f\156\x5c\x4d\x6f\142\x69\x6c\x65\104\145\164\x65\143\x74") && $this->aceaeommyuooiqge()->get("\x6d\157\142\x69\154\145\x5f\143\x61\x63\x68\145"))) { goto ywmoieqkigsykequ; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto meoweqcaaosoomeu; } $wkcwykowmmmwioqs .= "\x2d\155\157\x62\x69\154\145"; meoweqcaaosoomeu: ywmoieqkigsykequ: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\x5f\117\120\x54\111\115\x49\132\101\124\x49\117\x4e\137\x44\x4f\116\124\137\x4f\120\124\111\115\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\x61\143\x68\x65\137\162\145\161\165\145\x73\x74\137\150\145\x61\x64\145\162\x73")) { goto iaousaauoawkqkkg; } $uykgysuswksgmwqy = apache_request_headers(); iaousaauoawkqkkg: if ($uykgysuswksgmwqy) { goto kkwucaoumyayagcq; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x5f\111\106\x5f\x4d\117\104\111\106\111\x45\104\137\123\111\x4e\x43\x45", ''); goto muwyuiikuywigwso; kkwucaoumyayagcq: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\x4d\x6f\144\151\146\151\x65\144\55\123\x69\156\x63\145"] ?? ''; muwyuiikuywigwso: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\137\157\x70\164\151\x6d\x69\172\x61\164\x69\x6f\x6e\137\143\141\143\x68\145\x5f\x68\164\155\154\137\x64\x6f\137\x67\145\x6e\x65\x72\141\x74\x65\x5f\x63\x61\x63\150\151\156\147\137\146\151\x6c\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\117\120\x54\x5f\x43\101\103\x48\x45\x5f\104\117\116\124\137\x45\116\x43\x4f\x44\x45\137\106\111\x4c\105\116\x41\x4d\105\x53")) { goto akoiqkoqmmmcieug; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); akcakssqcqcouwew: } gikaiicgqyueeoco: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); akoiqkoqmmmcieug: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\x2f\x5f\x70\x72\55\146\x69\x6c\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto cgasgmiiqegqesic; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); cgasgmiiqegqesic: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\55\x2d\x20\103\141\x63\x68\145\x64\x20\x66\157\162\x20\x67\x72\145\141\164\x20\160\145\x72\x66\x6f\x72\155\141\x6e\143\145\40\x62\x79\40\120\115\120\x52\40\x4f\160\164\151\x6d\151\x7a\141\x74\x69\x6f\156\x20\x4d\x6f\x64\x75\x6c\145"; if (empty($cqgoimumaewouews)) { goto yamoiggaeugmgkku; } $kaaaegwagmaoscys .= "\40\55\40\x44\x65\142\x75\147\x3a\x20\143\141\x63\x68\145\144\100{$cqgoimumaewouews}"; yamoiggaeugmgkku: $kaaaegwagmaoscys .= "\x20\55\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\x2e\x2a\51\x77\x70\134\x2d\x6a\x73\157\x6e\x28\x2f\x2e\x2a\174\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto eqekaoaioiykuaiw; } return false; eqekaoaioiykuaiw: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\162\x6d\x61\154\151\156\x6b\x5f\x73\164\x72\165\x63\x74\165\162\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto qkkqiagwgaoyauki; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\x70", "\56"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto qoiuwyogucoeaoew; } $ygygweamcggggmce = ''; qoiuwyogucoeaoew: qkkqiagwgaoyauki: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }
