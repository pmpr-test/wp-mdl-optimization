<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16c082ce5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\x69" => 1, "\x73\x73\x6c" => 0, "\x77\160\137\64\60\x34" => 1, "\163\145\141\162\x63\150" => 1, "\x6d\157\142\x69\154\x65" => 1, "\151\x73\x5f\x68\164\155\x6c" => 1, "\161\x75\x65\x72\171\x5f\163\x74\162\x69\x6e\x67" => 1, "\x64\157\156\x6f\164\143\x61\143\x68\145\160\x61\x67\x65" => 1, "\162\145\152\145\143\x74\145\144\x5f\143\157\157\x6b\x69\x65" => 1, "\155\x61\x6e\144\141\164\x6f\162\x79\x5f\x63\x6f\157\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\163\164\163"])) { goto sagemooicmgceiug; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\x73\164\x73"]); sagemooicmgceiug: if (!(!isset($ywmkwiwkosakssii["\x63\157\157\x6b\151\x65\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto uqcwyyiykmwygeau; } $ywmkwiwkosakssii["\143\157\x6f\x6b\x69\x65\163"] = $_COOKIE; uqcwyyiykmwygeau: if (!(!isset($ywmkwiwkosakssii["\x70\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto yeiokcoikcysyimu; } $ywmkwiwkosakssii["\x70\x6f\x73\164"] = $_POST; yeiokcoikcysyimu: if (!(!isset($ywmkwiwkosakssii["\x67\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto kkmwwqyesmkescyg; } $ywmkwiwkosakssii["\x67\145\x74"] = $_GET; kkmwwqyesmkescyg: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\x67\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\157\x73\164"]) && is_array($ywmkwiwkosakssii["\160\157\x73\164"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\157\157\x6b\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\143\x6f\157\x6b\x69\145\163"]) ? $ywmkwiwkosakssii["\143\157\x6f\x6b\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto uamuuwkyuqomqyuy; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\x63\x75\163\x74\x6f\x6d\151\x7a\145" => '']); uamuuwkyuqomqyuy: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto ekwuycsiuqwycqea; } $this->yauwooaeicgosquo("\104\145\166\x20\115\x6f\144\145\40\105\156\141\x62\154\145\144\x20\141\156\x64\40\141\154\x6c\40\x72\x65\161\x75\145\x73\164\x20\151\x73\x20\x62\x79\160\141\x73\x73\x2e"); return false; ekwuycsiuqwycqea: if (!$this->kgkoeoeseyuugaao()) { goto iyaugygcsmqqqkmo; } $this->yauwooaeicgosquo("\122\x6f\142\x6f\x74\x73\x2e\164\170\164\x20\157\x72\x20\x2e\150\x74\141\143\143\145\x73\163\40\146\x69\x6c\145\x20\151\163\x20\145\170\143\154\165\144\x65\x64\56"); return false; iyaugygcsmqqqkmo: if (!$this->gymgcceeqssmesiu()) { goto cieumoqayigkoocy; } $this->yauwooaeicgosquo("\120\x48\120\54\40\130\x4d\114\54\40\x6f\162\x20\x58\x53\114\40\146\x69\154\145\x20\x69\163\x20\145\170\143\154\x75\144\145\144\x2e"); return false; cieumoqayigkoocy: if (!$this->goecwaaykqoaaagg()) { goto yggciikgkomgeqsc; } $this->yauwooaeicgosquo("\x41\x64\155\x69\x6e\x20\x6f\x72\x20\101\112\x41\130\x20\125\x52\x4c\40\x69\x73\x20\x65\x78\x63\154\x75\144\145\144\x2e"); return false; yggciikgkomgeqsc: if (!$this->sgsscqasgeyeicoe()) { goto eoeiaccouaymakgm; } $this->yauwooaeicgosquo("\x41\x64\x6d\x69\156\x20\157\162\40\101\x4a\x41\130\x20\125\x52\x4c\x20\151\x73\40\145\x78\x63\x6c\x75\x64\145\x64\56"); return false; eoeiaccouaymakgm: if ($this->gooeyogikcusgwuu()) { goto owaimkmgemoqewmm; } $this->yauwooaeicgosquo("\x52\145\161\165\145\x73\x74\x20\155\x65\164\150\x6f\x64\x20\151\163\x20\x6e\x6f\x74\40\141\x6c\x6c\x6f\x77\x65\144\56\x20\x50\141\x67\x65\40\143\141\156\156\157\164\40\x62\x65\x20\x63\x61\143\150\145\144\x2e", ["\x72\x65\161\165\x65\x73\164\137\155\x65\x74\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; owaimkmgemoqewmm: if ($this->cskwmweqysskwckg()) { goto ysoqeuugiuswykyu; } $this->lastError = []; return true; ysoqeuugiuswykyu: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\x63\x63\145\163\163"]) { goto usmuqsuwuueogimc; } $this->yauwooaeicgosquo("\x4e\x6f\x20\x63\157\x6e\146\151\147\40\x66\x69\154\145\x20\x66\157\x75\156\x64", ["\x63\157\x6e\146\151\147\x5f\x70\x61\164\150" => $uiewakwqscemywuo["\160\x61\x74\x68"]]); return false; usmuqsuwuueogimc: if (!($this->cskwmweqysskwckg("\161\165\x65\162\171\137\x73\x74\162\x69\x6e\x67") && !$this->koguieumooaesyww())) { goto koiiaewwicsckseu; } $this->yauwooaeicgosquo("\121\x75\145\x72\x79\x20\x73\x74\162\151\156\x67\40\125\x52\x4c\40\x69\163\x20\145\x78\143\154\165\144\145\x64\x2e", $_GET); return false; koiiaewwicsckseu: if (!($this->cskwmweqysskwckg("\x73\x73\154") & !$this->eqwgocqwoyyykwke())) { goto umcyeiusoakewyaa; } $this->yauwooaeicgosquo("\x53\123\114\x20\x63\141\x63\150\145\x20\x6e\x6f\x74\x20\x61\160\160\154\151\145\144\x20\164\x6f\40\x70\x61\x67\145\56"); return false; umcyeiusoakewyaa: if (!($this->cskwmweqysskwckg("\165\162\151") && !$this->qweiomkkuikwugks())) { goto ksawwekgswywwuwm; } $this->yauwooaeicgosquo("\x50\x61\147\x65\x20\151\163\40\145\x78\143\154\165\x64\145\x64\56"); return false; ksawwekgswywwuwm: if (!($this->cskwmweqysskwckg("\x72\145\152\x65\143\164\145\x64\137\x63\x6f\157\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto yuqisiwgqacgmsym; } $this->yauwooaeicgosquo("\x45\x78\143\x6c\165\144\145\x64\x20\143\x6f\x6f\x6b\151\x65\40\146\x6f\x75\156\144\56", ["\145\170\x63\154\165\x64\x65\x64\137\143\157\157\153\x69\145\163" => $this->cokqaygwwygweuyk()]); return false; yuqisiwgqacgmsym: if (!($this->cskwmweqysskwckg("\x6d\x61\156\x64\141\164\x6f\x72\171\x5f\143\x6f\x6f\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto wickgagwgqqsomum; } $this->yauwooaeicgosquo("\115\151\163\163\x69\x6e\147\40\x6d\x61\x6e\144\x61\164\157\x72\171\40\x63\x6f\x6f\153\x69\x65\72\x20\160\x61\x67\x65\x20\x6e\x6f\164\40\x70\x72\x6f\x63\145\163\x73\x65\144\56", ["\155\x69\x73\x73\151\x6e\x67\137\143\x6f\x6f\x6b\x69\145\163" => $this->qgymyeqwqaiwmmea()]); return false; wickgagwgqqsomum: if (!($this->cskwmweqysskwckg("\x75\x73\x65\x72\x5f\x61\x67\x65\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto wmwgeoequuwwwywa; } $this->yauwooaeicgosquo("\125\163\x65\x72\x20\x41\147\145\156\164\40\x69\163\40\145\x78\x63\154\x75\144\x65\x64\x2e", ["\x75\163\x65\x72\x5f\141\147\145\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\x55\123\105\122\137\x41\107\105\116\x54")]); return false; wmwgeoequuwwwywa: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto uqugcugeomqakcqo; } $this->yauwooaeicgosquo("\x42\x75\x66\146\x65\162\40\143\x6f\156\164\x65\156\x74\40\165\x6e\144\x65\x72\x20\62\x35\x35\40\x63\x68\141\x72\141\x63\164\x65\x72\x73\x2e"); return false; uqugcugeomqakcqo: if (!(http_response_code() !== 200)) { goto qmoisuweiskkekca; } $this->yauwooaeicgosquo("\x50\141\x67\145\x20\151\x73\x20\156\x6f\164\40\x61\x20\x32\x30\x30\x20\x48\x54\x54\x50\x20\162\145\163\x70\x6f\156\163\x65\x20\x61\x6e\144\x20\x63\141\156\x6e\157\x74\x20\142\x65\x20\x63\141\x63\x68\145\144\56"); return false; qmoisuweiskkekca: if (!($this->cskwmweqysskwckg("\x64\x6f\156\x6f\164\157\x70\164\x69\x6d\151\172\145\160\141\x67\x65") && $this->cowcgqokiosgaqic())) { goto wywwieycqskuqcwc; } $this->yauwooaeicgosquo("\104\117\x4e\124\x4f\120\124\111\x4d\x49\132\105\104\120\101\107\x45\40\151\163\x20\x64\x65\146\151\x6e\145\x64\x2e\40\120\x61\x67\x65\40\143\x61\156\x6e\157\x74\x20\x62\145\x20\143\x61\143\x68\x65\x64\x2e"); return false; wywwieycqskuqcwc: if (!($this->cskwmweqysskwckg("\167\x70\x5f\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto gwyseusuceuwwccu; } $this->yauwooaeicgosquo("\127\x50\40\64\60\64\40\160\141\x67\145\40\x69\163\x20\145\170\143\x6c\x75\144\x65\144\56"); return false; gwyseusuceuwwccu: if (!($this->cskwmweqysskwckg("\163\145\141\x72\x63\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto icouowaoycuuisqe; } $this->yauwooaeicgosquo("\x53\145\x61\162\x63\150\40\x70\141\147\145\x20\151\x73\x20\x65\x78\x63\x6c\165\x64\x65\144\x2e"); return false; icouowaoycuuisqe: if (!$this->cskwmweqysskwckg("\x69\163\137\x68\x74\x6d\154")) { goto kmqusaiaiogecyiy; } if (!($this->cmaecekuqkwmemms("\122\105\123\x54\x5f\122\105\121\125\x45\123\x54") || $this->gaiygescoqgyusaa())) { goto ocmwuquguuqigose; } unset($this->tests["\151\163\137\150\164\155\154"]); ocmwuquguuqigose: kmqusaiaiogecyiy: if (!($this->cskwmweqysskwckg("\151\163\x5f\150\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto swckikycciugciqq; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\x6c\157\163\x69\x6e\x67\x20\x3c\x2f\x68\164\155\x6c\76\40\167\x61\163\40\x66\x6f\165\x6e\144\x2e"); return false; swckikycciugciqq: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\137\x6f\160\164\x69\155\151\x7a\x61\x74\x69\157\x6e\x5f\141\x6c\x6c\x6f\167\x5f\164\x6f\x5f\163\164\141\162\x74\137\x62\165\146\x66\x65\162\137\x70\x72\157\x63\x65\x73\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto coogyackikgmecic; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto iqwsqykoueqyyomy; coogyackikgmecic: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); iqwsqykoueqyyomy: return apply_filters("\x70\162\137\x6f\x70\164\x69\x6d\151\x7a\141\x74\151\157\156\x5f\150\x61\x73\x5f{$ymqmyyeuycgmigyo}\x5f\164\145\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\163\52\134\57\134\163\52\x68\164\155\154\x5c\163\x2a\76\x2f\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\x3f\72\56\x2b\57\51\x3f" . $wp_rewrite->feed_base . "\50\x3f\72\x2f\50\77\72\56\53\x2f\x3f\x29\x3f\x29\77\x24"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\x29\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\x76\x5f\x6d\157\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ggaucuaykyuiikem; } return $this->eecucukcqkqysiau(__FUNCTION__); ggaucuaykyuiikem: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto egikqoaqqegawugu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egikqoaqqegawugu: $ucasskoyoewwmmii = ["\x72\x6f\x62\157\164\x73\56\x74\170\x74", "\x2e\x68\x74\141\x63\x63\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto wmcmqmmcweecqmsw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wmcmqmmcweecqmsw: yoaewquyogiimyic: } caaygouikgagsssc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aakoeuuosouyeemc; } return $this->eecucukcqkqysiau(__FUNCTION__); aakoeuuosouyeemc: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto cicegcoqyuoggiwy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qsmoiwqcuamyuwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsmoiwqcuamyuwyu: cicegcoqyuoggiwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugcwqacogqoswyse; } return $this->eecucukcqkqysiau(__FUNCTION__); ugcwqacogqoswyse: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto saekesoeysauokkq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); saekesoeysauokkq: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\x6e\144\145\x78\56\160\150\160")) { goto wycuyiukyceccaow; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wycuyiukyceccaow: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\x70" => 1, "\170\155\154" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\x49\116\x47\x5f\101\x4a\x41\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x53")), ["\x6f\156", "\x31"]) || "\x34\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\105\x52\x5f\x50\117\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\143\165\x73\164\x6f\x6d\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\x48\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto meseuuacmkuowqau; } return $this->eecucukcqkqysiau(__FUNCTION__); meseuuacmkuowqau: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto sqmiymiemeegegic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sqmiymiemeegegic: $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\156\147" => 1, "\160\145\x72\x6d\x61\154\151\156\153\x5f\156\141\155\x65" => 1, "\154\x70\x2d\166\141\x72\x69\141\x74\151\x6f\x6e\55\x69\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto csqakuuiyywassgw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); csqakuuiyywassgw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\137\161\165\x65\162\171\137\163\164\162\151\156\x67\x73"); if ($yccgiaiouekkouay) { goto esqiocgueosoksyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esqiocgueosoksyq: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto csggsqueaqmwgwkk; } return $this->eecucukcqkqysiau(__FUNCTION__); csggsqueaqmwgwkk: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto sescaagayikiggyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sescaagayikiggyq: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto wwwggoemicgwwasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwwggoemicgwwasy: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cqaeiesyciakcagu; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cqaeiesyciakcagu: gemwkqocygssmequ: } egmocemomockemia: if (empty($eiocugauqgouiuyi)) { goto acisycocoswkekik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); acisycocoswkekik: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aaiymmkqmocgakei; } return $this->eecucukcqkqysiau(__FUNCTION__); aaiymmkqmocgakei: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kucqcqeesaiacekm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kucqcqeesaiacekm: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\x5f\x6d\141\156\144\x61\x74\x6f\162\171\137\x63\157\157\153\x69\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto cewyaqiqmmwmauce; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); cewyaqiqmmwmauce: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto ciwggusyecgskagy; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); ciwggusyecgskagy: ycweseaccsomkioa: } scyqmcegwikkoesw: if (!empty($yiycakoikkyuokgk)) { goto sccqekuwywiisami; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sccqekuwywiisami: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\157\x70\x74\x69\x6d\151\x7a\x61\164\x69\157\156\137\157\166\145\162\x72\151\144\145\137\x64\157\156\164\x5f\x6f\160\164\151\155\x69\172\x65", $this->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\124\111\x4d\x49\x5a\101\124\111\x4f\x4e\x5f\104\117\x4e\x54\x5f\117\x50\x54\111\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\137\64\60\64") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\x5f\163\x65\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\x5f\x6f\x70\x74\x69\155\x69\x7a\141\164\x69\x6f\156\137\157\160\x74\151\155\151\172\145\137\163\145\x61\162\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\137\163\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eokcuuwqaomkooag; } return $this->eecucukcqkqysiau(__FUNCTION__); eokcuuwqaomkooag: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qgqasacusgwmoegy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qgqasacusgwmoegy: if (!$this->aceaeommyuooiqge()->get("\x6d\157\x62\151\x6c\145\137\143\141\143\x68\x65")) { goto qscqkykqskqmisgw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qscqkykqskqmisgw: $wayquiskgeuoqamk = "\62\56\60\134\x20\x4d\x4d\120\x7c\x32\x34\x30\170\x33\x32\60\174\x34\x30\x30\130\x32\x34\60\x7c\x41\x76\141\156\x74\x47\157\174\102\x6c\x61\143\153\x42\x65\x72\x72\x79\x7c\102\x6c\141\x7a\x65\162\x7c\103\x65\154\154\x70\150\157\x6e\x65\174\x44\141\x6e\x67\x65\162\174\x44\x6f\x43\x6f\x4d\x6f\174\x45\154\141\x69\156\x65\57\63\56\x30\174\105\x75\x64\x6f\162\x61\x57\x65\142\x7c\x47\x6f\x6f\x67\154\145\142\157\164\55\x4d\x6f\142\151\154\145\174\150\151\x70\164\x6f\x70\x7c\x49\105\x4d\157\142\x69\154\145\174\x4b\131\x4f\x43\105\122\101\x2f\127\130\63\61\x30\x4b\x7c\114\107\x2f\125\71\x39\x30\174\115\111\x44\120\x2d\62\56\174\x4d\115\105\106\x32\60\174\115\117\x54\x2d\x56\x7c\x4e\x65\164\106\x72\x6f\156\x74\x7c\x4e\x65\x77\x74\x7c\x4e\x69\x6e\x74\145\x6e\x64\157\x5c\40\127\x69\151\x7c\116\151\x74\162\x6f\174\116\157\x6b\x69\x61\174\117\160\145\x72\x61\134\40\x4d\x69\156\x69\174\x50\x61\154\x6d\x7c\120\154\141\171\123\164\141\x74\x69\x6f\156\134\40\x50\157\x72\164\141\x62\x6c\x65\174\x70\157\162\x74\141\x6c\x6d\x6d\155\x7c\120\162\157\170\x69\x6e\x65\164\x7c\x50\162\157\x78\151\116\145\x74\x7c\123\110\x41\x52\x50\x2d\124\121\x2d\107\x58\61\x30\x7c\123\110\x47\55\151\71\60\60\174\x53\155\x61\154\x6c\174\123\x6f\x6e\x79\105\162\151\143\x73\163\157\156\174\123\x79\155\x62\x69\141\156\x5c\x20\x4f\x53\174\x53\171\x6d\142\151\x61\156\x4f\123\174\x54\x53\62\x31\151\55\x31\x30\x7c\x55\x50\x2e\x42\x72\157\167\x73\145\x72\174\125\x50\x2e\x4c\x69\x6e\x6b\x7c\x77\145\x62\117\x53\x7c\127\x69\156\144\x6f\x77\x73\134\x20\103\x45\x7c\127\x69\156\x57\x41\x50\x7c\x59\x61\x68\157\x6f\x53\x65\x65\153\145\162\57\x4d\x31\x41\61\55\x52\62\104\x32\x7c\x69\x50\x68\157\156\x65\x7c\x69\x50\x6f\144\174\101\156\144\162\157\x69\x64\x7c\102\154\141\x63\153\102\x65\x72\162\x79\71\x35\x33\60\x7c\114\x47\55\124\125\71\61\x35\x5c\x20\x4f\142\151\x67\157\x7c\x4c\x47\x45\x5c\40\x56\x58\x7c\x77\145\x62\117\123\x7c\x4e\157\153\x69\x61\x35\x38\60\x30"; if (!preg_match("\x23\x5e\56\52\x28{$wayquiskgeuoqamk}\x29\56\x2a\x23\151", $uowwycywwssskuys)) { goto ksqgwiceoomkuuiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ksqgwiceoomkuuiy: $wayquiskgeuoqamk = "\167\63\143\x5c\40\x7c\x77\x33\143\x2d\174\141\x63\163\x2d\174\141\x6c\x61\x76\x7c\x61\x6c\x63\x61\174\141\x6d\x6f\x69\174\141\165\x64\151\x7c\141\x76\141\156\x7c\x62\145\x6e\161\174\x62\x69\x72\144\174\x62\x6c\x61\143\x7c\x62\154\141\172\x7c\x62\x72\x65\x77\174\x63\145\154\x6c\174\143\154\x64\143\174\x63\x6d\x64\x2d\x7c\144\141\156\x67\174\144\x6f\143\157\x7c\x65\162\151\x63\174\x68\x69\160\x74\174\x68\x74\x63\x5f\174\x69\156\156\157\174\151\160\x61\x71\174\x69\160\x6f\144\174\152\x69\147\x73\174\153\x64\144\151\174\x6b\x65\x6a\x69\174\x6c\x65\x6e\x6f\174\154\x67\x2d\x63\x7c\154\147\55\x64\x7c\x6c\x67\x2d\147\174\154\x67\x65\55\174\154\147\57\165\x7c\155\x61\x75\151\x7c\155\141\170\x6f\174\x6d\x69\x64\x70\174\155\x69\x74\163\x7c\155\155\x65\x66\174\155\x6f\x62\x69\x7c\155\157\x74\55\174\155\x6f\x74\157\174\x6d\x77\x62\x70\x7c\x6e\x65\x63\x2d\x7c\x6e\x65\167\164\174\x6e\157\x6b\151\x7c\x70\x61\154\155\174\160\141\156\141\x7c\x70\x61\156\164\174\x70\150\x69\154\174\160\x6c\141\x79\x7c\x70\157\162\x74\x7c\160\x72\157\x78\174\161\x77\141\x70\x7c\163\x61\147\x65\x7c\x73\x61\155\163\x7c\163\141\x6e\171\174\x73\x63\150\x2d\174\163\145\143\x2d\x7c\x73\x65\x6e\144\x7c\163\145\162\151\174\163\147\x68\x2d\x7c\163\150\x61\162\x7c\x73\x69\x65\55\x7c\163\x69\145\155\174\x73\x6d\x61\x6c\x7c\x73\155\x61\162\x7c\163\x6f\156\x79\x7c\x73\160\x68\x2d\x7c\x73\171\155\142\174\x74\55\x6d\x6f\174\164\x65\154\x69\x7c\164\x69\x6d\x2d\x7c\164\x6f\163\x68\174\164\163\x6d\x2d\x7c\x75\160\147\61\174\x75\160\x73\x69\174\x76\x6b\55\166\174\x76\x6f\x64\x61\174\x77\x61\x70\x2d\174\167\x61\160\x61\x7c\167\x61\x70\151\174\167\141\x70\x70\174\167\x61\x70\x72\x7c\x77\x65\142\x63\174\167\151\x6e\167\x7c\167\151\x6e\167\x7c\x78\144\x61\134\40\174\170\144\141\x2d"; if (!preg_match("\43\x5e\50{$wayquiskgeuoqamk}\51\56\52\x23\151", $uowwycywwssskuys)) { goto gkoiyaagwgycysim; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gkoiyaagwgycysim: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ysssquieawyysiyc; } return $this->eecucukcqkqysiau(__FUNCTION__); ysssquieawyysiyc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yomoeykcqyukscmi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yomoeykcqyukscmi: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\162\x65\x6a\145\x63\164\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto swmgucaogosuueug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); swmgucaogosuueug: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwsmcsiiisuocgwg; } return $this->eecucukcqkqysiau(__FUNCTION__); uwsmcsiiisuocgwg: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\137\x72\145\152\145\x63\x74\x5f\x75\162\x69"); if ($escsaeeosigewsme) { goto suaymckwwgmugsaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suaymckwwgmugsaa: $yciaosuiyeieceug = !preg_match("\x23\136\x28{$escsaeeosigewsme}\51\x24\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\x55\x53\x45\122\137\x41\x47\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wsqoskqgyooqeyga; } return $this->eecucukcqkqysiau(__FUNCTION__); wsqoskqgyooqeyga: $yygmoeguaqyumuui = [ "\x48\x54\x54\x50\x5f\103\x46\137\103\117\116\116\x45\x43\124\111\x4e\107\x5f\111\x50", "\x48\124\124\120\137\103\x4c\x49\105\116\x54\137\111\x50", "\110\124\124\x50\x5f\x58\137\x46\117\122\x57\x41\122\104\105\104\x5f\106\117\x52", "\x48\124\x54\x50\137\x58\137\106\x4f\x52\127\x41\122\104\105\x44", "\x48\x54\x54\120\x5f\x58\x5f\103\x4c\125\x53\124\x45\122\x5f\x43\x4c\x49\x45\116\124\137\111\x50", "\110\124\124\x50\x5f\130\x5f\x52\105\x41\114\x5f\111\120", "\x48\x54\x54\x50\x5f\106\117\x52\x57\101\122\x44\x45\x44\137\106\x4f\x52", "\x48\x54\x54\x50\x5f\x46\117\122\127\x41\122\x44\x45\x44", "\x52\105\x4d\x4f\124\x45\x5f\x41\x44\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto wmcaecgwmmwuuqsq; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto igscwycsqsckmcuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); igscwycsqsckmcuq: wmcaecgwmmwuuqsq: ecqeqquikuomwgsu: } uekkkmwciocmosgg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\x30\56\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ycskuioouwwemgke; } return $this->eecucukcqkqysiau(__FUNCTION__); ycskuioouwwemgke: $yywgiquyoymymqwk = [ "\62\60\70\x2e\67\60\56\x32\64\x37\x2e\x31\x35\x37" => '', "\x31\67\x32\56\x32\65\65\56\64\70\56\61\63\x30" => '', "\61\x37\62\56\x32\x35\65\x2e\x34\x38\56\x31\63\61" => '', "\x31\x37\62\x2e\62\x35\65\56\x34\70\x2e\x31\63\x32" => '', "\x31\x37\62\x2e\x32\65\x35\56\64\70\x2e\61\63\63" => '', "\61\x37\62\56\62\65\65\x2e\64\70\56\x31\63\64" => '', "\61\x37\x32\56\62\x35\65\x2e\64\x38\x2e\x31\63\x35" => '', "\x31\67\x32\56\x32\x35\x35\56\x34\70\x2e\x31\x33\66" => '', "\x31\x37\x32\x2e\x32\x35\65\x2e\x34\70\56\61\63\x37" => '', "\61\67\x32\x2e\x32\65\x35\56\x34\70\x2e\61\x33\x38" => '', "\x31\x37\62\56\62\65\x35\56\64\x38\x2e\x31\63\71" => '', "\x31\67\62\x2e\x32\65\x35\56\64\x38\56\x31\x34\x30" => '', "\x31\x37\62\x2e\x32\65\x35\x2e\x34\x38\x2e\61\64\x31" => '', "\61\67\62\x2e\x32\65\65\56\64\x38\56\x31\x34\62" => '', "\61\67\62\x2e\x32\x35\65\56\x34\70\56\x31\64\63" => '', "\x31\x37\x32\x2e\62\65\65\x2e\64\x38\x2e\61\64\x34" => '', "\61\x37\62\x2e\62\x35\65\56\x34\x38\56\x31\64\x35" => '', "\x31\67\x32\x2e\62\x35\x35\x2e\64\x38\x2e\x31\64\66" => '', "\x31\67\62\56\x32\65\x35\56\x34\x38\x2e\x31\64\67" => '', "\65\x32\x2e\62\x32\x39\56\61\x32\62\56\62\x34\x30" => '', "\61\60\64\x2e\x32\x31\64\56\67\62\56\61\60\x31" => '', "\x31\x33\56\x36\66\56\x37\56\61\61" => '', "\61\x33\56\70\x35\56\x32\64\56\x38\x33" => '', "\61\x33\56\70\x35\56\x32\x34\56\71\x30" => '', "\61\63\x2e\70\x35\x2e\x38\x32\x2e\x32\66" => '', "\64\x30\56\67\x34\56\x32\64\x32\56\62\65\x33" => '', "\64\x30\56\x37\x34\x2e\62\64\63\x2e\x31\63" => '', "\x34\x30\56\67\64\x2e\62\64\x33\56\x31\67\x36" => '', "\61\60\64\x2e\x32\61\x34\56\x34\x38\x2e\62\64\x37" => '', "\61\x35\x37\56\65\65\56\61\x38\71\x2e\61\70\x39" => '', "\61\x30\x34\x2e\62\x31\64\x2e\x31\x31\x30\56\x31\x33\65" => '', "\67\x30\56\x33\x37\x2e\70\63\x2e\x32\x34\x30" => '', "\x36\x35\x2e\x35\x32\56\63\66\x2e\62\65\x30" => '', "\x31\x33\x2e\67\x38\x2e\62\61\x36\56\65\x36" => '', "\x35\62\56\x31\x36\62\x2e\62\x31\62\x2e\61\x36\x33" => '', "\x32\x33\x2e\x39\x36\56\x33\64\x2e\61\60\65" => '', "\66\x35\56\x35\62\56\x31\x31\x33\x2e\62\63\66" => '', "\61\x37\62\56\62\x35\x35\56\x36\x31\56\63\64" => '', "\x31\x37\x32\56\x32\x35\65\56\x36\61\x2e\63\x35" => '', "\61\67\x32\x2e\62\x35\x35\56\66\x31\x2e\63\x36" => '', "\61\67\x32\56\x32\65\65\x2e\66\61\56\x33\67" => '', "\61\x37\x32\56\62\65\65\56\66\x31\56\63\70" => '', "\x31\x37\62\x2e\62\x35\65\x2e\x36\61\56\x33\71" => '', "\x31\67\x32\x2e\x32\65\65\x2e\66\x31\x2e\64\60" => '', "\65\62\56\62\x33\x37\56\62\x33\x35\x2e\61\x38\65" => '', "\65\62\x2e\62\63\67\56\62\65\x30\56\67\x33" => '', "\x35\62\x2e\62\x33\67\x2e\62\63\x36\56\x31\x34\65" => '', "\x31\60\64\56\64\x31\56\x32\56\61\x39" => '', "\61\71\x31\56\62\x33\x35\56\71\x38\x2e\61\66\64" => '', "\61\71\x31\x2e\x32\x33\65\56\x39\71\x2e\62\x32\61" => '', "\x31\x39\61\56\62\63\62\56\61\x39\x34\x2e\x35\x31" => '', "\61\60\x34\x2e\62\61\x31\56\61\x34\x33\56\x38" => '', "\x31\x30\x34\56\x32\x31\x31\x2e\x31\x36\x35\x2e\65\63" => '', "\65\62\56\61\x37\x32\x2e\x31\x34\56\x38\67" => '', "\x34\x30\x2e\70\63\56\70\71\x2e\x32\61\64" => '', "\x35\62\x2e\x31\x37\x35\56\x35\x37\56\70\x31" => '', "\x32\x30\x2e\x31\70\x38\x2e\x36\63\x2e\61\65\x31" => '', "\x32\x30\x2e\x35\x32\56\63\x36\56\x34\71" => '', "\65\62\56\62\x34\x36\56\61\66\65\56\61\65\63" => '', "\65\x31\56\x31\64\64\x2e\61\60\x32\56\x32\63\63" => '', "\x31\x33\x2e\x37\66\56\71\x37\56\62\62\64" => '', "\61\60\x32\56\x31\x33\x33\x2e\61\x36\x39\x2e\x36\66" => '', "\65\62\56\x32\63\x31\56\x31\x39\x39\56\x31\x37\x30" => '', "\x31\x33\x2e\65\63\56\x31\66\x32\56\67" => '', "\64\60\x2e\x31\x32\x33\56\62\x31\x38\56\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto syeeegeygawwqiuu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syeeegeygawwqiuu: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\x55\x53\x45\122\x5f\101\x47\x45\116\124"); if ($uowwycywwssskuys) { goto iuieskocqoqkkwus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iuieskocqoqkkwus: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\151\x6e\x67\x64\x6f\155\120\x61\147\145\123\x70\145\145\144\174\x44\x61\162\145\102\x6f\157\x73\x74\174\x47\157\x6f\147\154\x65\x7c\x50\124\123\x54\x7c\103\x68\162\157\155\145\x2d\x4c\151\147\150\164\150\157\165\163\x65\x7c\127\120\40\122\x6f\x63\153\145\164\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\x53\124\137\x55\x52\x49", ''); if (!$iyiwooigkweeewey) { goto isiqkeyciyqgkayu; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); isiqkeyciyqgkayu: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto gwayeyymscmgwqkg; } return ''; gwayeyymscmgwqkg: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto caoikoqmyeqsqqqe; } return $magawcseesgowoeo; caoikoqmyeqsqqqe: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto moimkkmkooeiyisc; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); moimkkmkooeiyisc: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\105\123\x54\137\x4d\105\x54\x48\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kcomueysiyyqagus; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\150\x65\x5f\151\x67\156\x6f\x72\x65\144\137\160\141\x72\141\155\x65\x74\x65\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto amoygaweoeymiuiy; } ksort($eyagkkkqkwcuygso); amoygaweoeymiuiy: kcomueysiyyqagus: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; cqwgmwqiakmgyuee: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto ckuagmyqkyoeeaeu; } if (strpos($euueacigmgoqkimu, "\56\x2e\x2f") === 0) { goto wkcwuemioaiyouek; } if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { goto uiwswesymogiwsgg; } if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { goto keqagmaiqqsgkmso; } if ("\x2f\x2e" === $euueacigmgoqkimu) { goto eosmwawqaocwgccq; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\56\57") === 0) { goto ggkoiouwecyiosym; } if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { goto okemsmmeceoeaswi; } if ("\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { goto cmagycousakeeaei; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto ksgwgcguemcescqg; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto kiwiesucugwoiuum; ksgwgcguemcescqg: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); kiwiesucugwoiuum: goto eekeksysqeuoskoo; cmagycousakeeaei: $euueacigmgoqkimu = ''; eekeksysqeuoskoo: goto ossyqogewmggmaoc; okemsmmeceoeaswi: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); ossyqogewmggmaoc: goto egosmwkuuikwqeak; ggkoiouwecyiosym: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); egosmwkuuikwqeak: goto eymiqwsygoowowuu; eosmwawqaocwgccq: $euueacigmgoqkimu = "\57"; eymiqwsygoowowuu: goto ekgsawcuswowmosm; keqagmaiqqsgkmso: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ekgsawcuswowmosm: goto euogcyyayioyyiyg; uiwswesymogiwsgg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); euogcyyayioyyiyg: goto usgmimcwygsmcioa; wkcwuemioaiyouek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); usgmimcwygsmcioa: goto cqwgmwqiakmgyuee; ckuagmyqkyoeeaeu: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qggiogeyowcoaiqy; } qggiogeyowcoaiqy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ekgcquiosyesyism; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ekgcquiosyesyism: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto qosckaqceoumcasm; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); qosckaqceoumcasm: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\163\x73\141\x67\x65" => $uamcoiueqaamsqma, "\143\157\x6e\164\x65\x78\x74" => $icwicymcioeyeyek]; } }
