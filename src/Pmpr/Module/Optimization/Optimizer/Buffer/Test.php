<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae19a7b618             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\151" => 1, "\x73\163\x6c" => 0, "\x77\160\x5f\x34\60\x34" => 1, "\x73\x65\141\x72\143\x68" => 1, "\x6d\x6f\142\x69\x6c\145" => 1, "\151\163\137\x68\x74\x6d\154" => 1, "\x71\165\145\162\x79\x5f\x73\x74\x72\x69\156\x67" => 1, "\144\157\x6e\x6f\164\143\x61\143\150\x65\160\141\x67\145" => 1, "\162\x65\x6a\145\143\164\145\144\137\143\157\x6f\x6b\151\x65" => 1, "\x6d\141\156\x64\x61\x74\x6f\x72\171\x5f\143\157\x6f\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\x73\164\x73"])) { goto sagemooicmgceiug; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\x73\x74\x73"]); sagemooicmgceiug: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\157\x6b\x69\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto uqcwyyiykmwygeau; } $ywmkwiwkosakssii["\143\157\157\153\x69\x65\163"] = $_COOKIE; uqcwyyiykmwygeau: if (!(!isset($ywmkwiwkosakssii["\160\157\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto yeiokcoikcysyimu; } $ywmkwiwkosakssii["\160\157\163\164"] = $_POST; yeiokcoikcysyimu: if (!(!isset($ywmkwiwkosakssii["\x67\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto kkmwwqyesmkescyg; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; kkmwwqyesmkescyg: $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\163\164"]) && is_array($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\145\163"]) && is_array($ywmkwiwkosakssii["\143\157\157\153\x69\x65\x73"]) ? $ywmkwiwkosakssii["\143\157\157\153\x69\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto uamuuwkyuqomqyuy; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\137\143\x75\163\164\x6f\x6d\x69\172\145" => '']); uamuuwkyuqomqyuy: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto ekwuycsiuqwycqea; } $this->yauwooaeicgosquo("\x44\x65\166\40\115\x6f\144\x65\40\x45\x6e\x61\x62\154\145\144\x20\x61\156\x64\40\x61\x6c\x6c\x20\x72\x65\x71\x75\145\x73\x74\x20\151\x73\x20\x62\171\160\x61\163\163\56"); return false; ekwuycsiuqwycqea: if (!$this->kgkoeoeseyuugaao()) { goto iyaugygcsmqqqkmo; } $this->yauwooaeicgosquo("\122\157\142\157\x74\163\56\x74\x78\x74\40\157\x72\40\56\x68\x74\x61\x63\143\x65\163\x73\x20\146\151\x6c\145\x20\151\x73\x20\x65\170\x63\154\165\x64\145\144\56"); return false; iyaugygcsmqqqkmo: if (!$this->gymgcceeqssmesiu()) { goto cieumoqayigkoocy; } $this->yauwooaeicgosquo("\x50\110\120\x2c\40\x58\115\114\x2c\x20\157\162\x20\130\x53\114\x20\x66\x69\154\x65\x20\x69\x73\40\145\170\x63\x6c\x75\144\145\144\x2e"); return false; cieumoqayigkoocy: if (!$this->goecwaaykqoaaagg()) { goto yggciikgkomgeqsc; } $this->yauwooaeicgosquo("\101\x64\x6d\151\x6e\x20\157\162\40\101\112\101\130\40\125\x52\x4c\x20\x69\x73\x20\145\x78\143\x6c\x75\x64\145\144\56"); return false; yggciikgkomgeqsc: if (!$this->sgsscqasgeyeicoe()) { goto eoeiaccouaymakgm; } $this->yauwooaeicgosquo("\101\144\155\x69\x6e\x20\x6f\162\x20\101\x4a\x41\x58\x20\125\x52\114\x20\x69\x73\x20\145\170\143\154\165\x64\x65\144\x2e"); return false; eoeiaccouaymakgm: if ($this->gooeyogikcusgwuu()) { goto owaimkmgemoqewmm; } $this->yauwooaeicgosquo("\x52\x65\161\x75\145\x73\x74\40\x6d\x65\x74\x68\x6f\144\x20\151\163\40\x6e\157\164\x20\141\154\x6c\157\x77\145\144\56\40\120\x61\x67\x65\40\x63\x61\156\156\157\164\x20\142\145\40\x63\x61\143\x68\145\144\56", ["\162\145\161\x75\145\x73\x74\x5f\155\x65\x74\150\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; owaimkmgemoqewmm: if ($this->cskwmweqysskwckg()) { goto ysoqeuugiuswykyu; } $this->lastError = []; return true; ysoqeuugiuswykyu: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\143\x65\x73\x73"]) { goto usmuqsuwuueogimc; } $this->yauwooaeicgosquo("\x4e\157\x20\143\157\156\x66\x69\x67\x20\x66\x69\154\145\40\146\x6f\165\156\x64", ["\143\x6f\x6e\146\151\x67\137\160\141\x74\150" => $uiewakwqscemywuo["\160\x61\164\150"]]); return false; usmuqsuwuueogimc: if (!($this->cskwmweqysskwckg("\x71\165\x65\x72\171\x5f\163\164\162\151\x6e\x67") && !$this->koguieumooaesyww())) { goto koiiaewwicsckseu; } $this->yauwooaeicgosquo("\x51\x75\x65\162\171\x20\163\x74\162\151\156\x67\40\125\x52\114\x20\x69\163\40\x65\170\x63\154\x75\x64\145\x64\56", $_GET); return false; koiiaewwicsckseu: if (!($this->cskwmweqysskwckg("\163\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto umcyeiusoakewyaa; } $this->yauwooaeicgosquo("\123\123\x4c\x20\143\141\x63\150\145\x20\156\x6f\x74\40\x61\160\x70\154\151\145\144\x20\x74\x6f\x20\160\x61\x67\x65\x2e"); return false; umcyeiusoakewyaa: if (!($this->cskwmweqysskwckg("\x75\162\x69") && !$this->qweiomkkuikwugks())) { goto ksawwekgswywwuwm; } $this->yauwooaeicgosquo("\120\141\147\145\40\x69\163\x20\145\170\143\x6c\165\x64\145\x64\x2e"); return false; ksawwekgswywwuwm: if (!($this->cskwmweqysskwckg("\162\x65\x6a\x65\x63\164\x65\144\137\x63\x6f\157\153\151\145") && $this->cokqaygwwygweuyk())) { goto yuqisiwgqacgmsym; } $this->yauwooaeicgosquo("\105\x78\x63\x6c\x75\x64\x65\x64\40\143\157\x6f\x6b\x69\145\40\146\157\x75\156\144\x2e", ["\145\x78\143\154\x75\x64\x65\x64\x5f\x63\x6f\157\153\x69\145\x73" => $this->cokqaygwwygweuyk()]); return false; yuqisiwgqacgmsym: if (!($this->cskwmweqysskwckg("\x6d\x61\x6e\x64\x61\164\157\162\x79\137\x63\x6f\157\x6b\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto wickgagwgqqsomum; } $this->yauwooaeicgosquo("\x4d\151\x73\x73\151\156\147\40\155\141\x6e\144\x61\x74\x6f\162\x79\40\x63\x6f\x6f\153\151\145\72\x20\x70\x61\147\x65\40\x6e\157\x74\40\x70\x72\157\x63\x65\x73\x73\145\x64\56", ["\155\x69\163\x73\x69\156\x67\137\x63\157\x6f\x6b\151\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; wickgagwgqqsomum: if (!($this->cskwmweqysskwckg("\165\x73\145\x72\x5f\141\147\145\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto wmwgeoequuwwwywa; } $this->yauwooaeicgosquo("\125\x73\145\x72\40\x41\x67\145\156\164\40\151\163\40\x65\170\x63\x6c\165\x64\145\144\56", ["\x75\x73\145\162\137\x61\x67\x65\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\137\125\x53\105\x52\x5f\101\107\x45\116\124")]); return false; wmwgeoequuwwwywa: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto uqugcugeomqakcqo; } $this->yauwooaeicgosquo("\102\x75\146\146\145\x72\40\x63\x6f\156\x74\145\x6e\164\x20\165\156\144\x65\162\40\x32\x35\x35\40\143\x68\141\162\141\x63\164\x65\162\x73\x2e"); return false; uqugcugeomqakcqo: if (!(http_response_code() !== 200)) { goto qmoisuweiskkekca; } $this->yauwooaeicgosquo("\x50\141\x67\145\x20\151\163\40\x6e\x6f\x74\x20\x61\x20\x32\60\x30\40\x48\124\x54\120\x20\x72\x65\163\160\157\156\163\145\40\141\x6e\144\x20\x63\x61\156\x6e\157\x74\40\142\x65\x20\x63\141\x63\150\145\144\56"); return false; qmoisuweiskkekca: if (!($this->cskwmweqysskwckg("\x64\157\156\157\164\x6f\x70\x74\x69\155\151\172\x65\160\141\147\x65") && $this->cowcgqokiosgaqic())) { goto wywwieycqskuqcwc; } $this->yauwooaeicgosquo("\104\117\116\124\x4f\120\124\111\x4d\111\x5a\105\x44\120\x41\x47\x45\x20\151\x73\x20\144\x65\146\151\x6e\x65\144\56\40\x50\x61\x67\x65\x20\x63\x61\x6e\x6e\157\x74\x20\x62\145\x20\143\141\143\x68\x65\x64\56"); return false; wywwieycqskuqcwc: if (!($this->cskwmweqysskwckg("\167\160\137\64\60\64") && $this->kmmyuiwaogukwqqi())) { goto gwyseusuceuwwccu; } $this->yauwooaeicgosquo("\x57\120\40\64\x30\64\x20\x70\x61\147\x65\40\x69\163\40\145\x78\143\154\165\144\x65\x64\x2e"); return false; gwyseusuceuwwccu: if (!($this->cskwmweqysskwckg("\163\x65\x61\162\143\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto icouowaoycuuisqe; } $this->yauwooaeicgosquo("\123\x65\x61\x72\x63\150\40\160\141\x67\145\x20\x69\163\x20\x65\x78\143\154\165\x64\145\144\x2e"); return false; icouowaoycuuisqe: if (!$this->cskwmweqysskwckg("\151\x73\x5f\x68\164\x6d\x6c")) { goto kmqusaiaiogecyiy; } if (!($this->cmaecekuqkwmemms("\122\105\x53\124\137\122\105\121\125\x45\x53\x54") || $this->gaiygescoqgyusaa())) { goto ocmwuquguuqigose; } unset($this->tests["\151\163\x5f\x68\164\x6d\x6c"]); ocmwuquguuqigose: kmqusaiaiogecyiy: if (!($this->cskwmweqysskwckg("\151\x73\137\x68\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto swckikycciugciqq; } $this->yauwooaeicgosquo("\x4e\x6f\x20\143\x6c\157\x73\151\156\147\40\74\x2f\150\x74\x6d\x6c\76\x20\x77\141\163\x20\146\x6f\165\156\x64\56"); return false; swckikycciugciqq: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\137\x6f\160\x74\x69\155\151\x7a\x61\x74\151\157\156\137\141\154\x6c\x6f\167\x5f\164\157\137\x73\164\x61\162\164\137\x62\x75\146\x66\145\162\x5f\x70\x72\x6f\143\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto coogyackikgmecic; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto iqwsqykoueqyyomy; coogyackikgmecic: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); iqwsqykoueqyyomy: return apply_filters("\x70\162\x5f\157\160\x74\x69\x6d\151\x7a\x61\164\x69\x6f\156\137\150\x61\x73\137{$ymqmyyeuycgmigyo}\x5f\x74\145\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\x73\52\x5c\x2f\x5c\163\52\x68\164\155\x6c\134\163\x2a\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\77\x3a\56\x2b\57\x29\77" . $wp_rewrite->feed_base . "\x28\x3f\72\x2f\x28\77\72\x2e\x2b\x2f\77\x29\77\x29\x3f\44"; return (bool) preg_match("\43\136\x28{$uckmmkmoeikwsiqg}\x29\x24\x23\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\x76\137\155\x6f\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ggaucuaykyuiikem; } return $this->eecucukcqkqysiau(__FUNCTION__); ggaucuaykyuiikem: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto egikqoaqqegawugu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egikqoaqqegawugu: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\164\163\56\164\x78\164", "\x2e\x68\164\x61\x63\x63\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto wmcmqmmcweecqmsw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wmcmqmmcweecqmsw: yoaewquyogiimyic: } caaygouikgagsssc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aakoeuuosouyeemc; } return $this->eecucukcqkqysiau(__FUNCTION__); aakoeuuosouyeemc: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto cicegcoqyuoggiwy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qsmoiwqcuamyuwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsmoiwqcuamyuwyu: cicegcoqyuoggiwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugcwqacogqoswyse; } return $this->eecucukcqkqysiau(__FUNCTION__); ugcwqacogqoswyse: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto saekesoeysauokkq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); saekesoeysauokkq: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\x6e\144\145\x78\x2e\x70\x68\x70")) { goto wycuyiukyceccaow; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wycuyiukyceccaow: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\x70" => 1, "\170\x6d\x6c" => 1, "\x78\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\x49\x4e\x47\137\x41\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\123")), ["\x6f\156", "\61"]) || "\x34\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\126\105\122\x5f\x50\117\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\143\x75\163\164\157\155\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\110\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto meseuuacmkuowqau; } return $this->eecucukcqkqysiau(__FUNCTION__); meseuuacmkuowqau: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto sqmiymiemeegegic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sqmiymiemeegegic: $yccgiaiouekkouay = ["\163" => 1, "\154\141\x6e\x67" => 1, "\x70\x65\x72\155\x61\x6c\x69\156\x6b\x5f\x6e\141\155\x65" => 1, "\154\x70\x2d\166\141\162\151\141\x74\x69\157\156\55\x69\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto csqakuuiyywassgw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); csqakuuiyywassgw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\137\x71\165\145\x72\x79\137\163\x74\x72\151\156\x67\163"); if ($yccgiaiouekkouay) { goto esqiocgueosoksyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esqiocgueosoksyq: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto csggsqueaqmwgwkk; } return $this->eecucukcqkqysiau(__FUNCTION__); csggsqueaqmwgwkk: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto sescaagayikiggyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sescaagayikiggyq: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto wwwggoemicgwwasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwwggoemicgwwasy: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cqaeiesyciakcagu; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cqaeiesyciakcagu: gemwkqocygssmequ: } egmocemomockemia: if (empty($eiocugauqgouiuyi)) { goto acisycocoswkekik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); acisycocoswkekik: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aaiymmkqmocgakei; } return $this->eecucukcqkqysiau(__FUNCTION__); aaiymmkqmocgakei: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kucqcqeesaiacekm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kucqcqeesaiacekm: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\137\155\x61\x6e\x64\x61\x74\x6f\162\x79\x5f\143\x6f\157\x6b\151\x65\x73"))); if ($this->wemyikwikgwqwuoc()) { goto cewyaqiqmmwmauce; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); cewyaqiqmmwmauce: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto ciwggusyecgskagy; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); ciwggusyecgskagy: ycweseaccsomkioa: } scyqmcegwikkoesw: if (!empty($yiycakoikkyuokgk)) { goto sccqekuwywiisami; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sccqekuwywiisami: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\x5f\157\x70\x74\x69\x6d\x69\172\141\164\x69\157\156\137\x6f\x76\145\162\162\151\x64\145\x5f\144\157\156\x74\137\x6f\160\164\151\x6d\151\172\145", $this->cmaecekuqkwmemms("\x50\122\x5f\x4f\x50\124\x49\x4d\x49\132\101\x54\111\117\116\x5f\104\117\116\x54\137\117\120\124\111\115\x49\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\137\x34\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\163\x65\141\x72\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\x6f\160\164\x69\155\151\x7a\141\164\x69\x6f\156\137\157\x70\x74\151\x6d\151\x7a\x65\x5f\x73\145\x61\x72\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\x73\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eokcuuwqaomkooag; } return $this->eecucukcqkqysiau(__FUNCTION__); eokcuuwqaomkooag: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qgqasacusgwmoegy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qgqasacusgwmoegy: if (!$this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\x6c\145\137\x63\141\x63\150\x65")) { goto qscqkykqskqmisgw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qscqkykqskqmisgw: $wayquiskgeuoqamk = "\62\56\60\134\x20\115\115\120\174\x32\x34\x30\170\63\x32\60\x7c\64\60\x30\x58\62\x34\60\x7c\x41\x76\x61\x6e\164\x47\157\x7c\x42\154\x61\x63\153\102\145\x72\x72\x79\174\102\154\141\x7a\x65\x72\174\103\145\x6c\x6c\x70\x68\157\156\x65\x7c\104\141\x6e\147\145\x72\x7c\104\x6f\x43\157\x4d\157\174\105\154\141\x69\156\145\57\x33\x2e\x30\x7c\105\165\144\157\x72\141\x57\x65\x62\174\107\x6f\x6f\x67\x6c\145\x62\x6f\164\55\x4d\157\142\151\154\145\174\x68\151\160\x74\x6f\x70\174\111\105\x4d\157\x62\x69\154\145\174\113\x59\x4f\x43\105\x52\101\57\x57\x58\x33\61\x30\113\174\114\107\57\x55\x39\71\x30\x7c\x4d\x49\104\x50\x2d\x32\56\174\x4d\x4d\x45\x46\62\60\x7c\115\x4f\124\x2d\x56\174\x4e\x65\164\106\x72\x6f\x6e\164\174\116\145\167\164\174\x4e\151\x6e\x74\x65\x6e\x64\x6f\x5c\x20\x57\x69\151\174\x4e\151\x74\x72\157\174\x4e\x6f\x6b\x69\x61\x7c\x4f\160\x65\x72\x61\x5c\x20\x4d\x69\x6e\x69\x7c\120\141\x6c\x6d\x7c\120\x6c\x61\171\123\164\x61\x74\151\157\x6e\134\x20\120\157\162\x74\141\142\x6c\145\x7c\160\157\x72\164\141\x6c\x6d\155\155\174\120\162\157\x78\151\x6e\145\164\x7c\120\x72\157\170\151\116\x65\x74\x7c\x53\110\101\122\x50\55\x54\121\x2d\107\x58\61\60\x7c\123\110\x47\55\151\x39\60\x30\x7c\123\155\141\x6c\154\x7c\123\157\156\171\105\x72\x69\x63\x73\163\x6f\156\174\x53\171\155\142\x69\x61\x6e\134\x20\x4f\x53\174\123\x79\x6d\142\x69\x61\x6e\117\x53\x7c\x54\123\x32\x31\151\55\x31\x30\x7c\125\120\56\x42\162\157\x77\x73\145\162\174\125\x50\x2e\x4c\x69\156\x6b\174\x77\145\142\117\123\174\127\151\156\x64\157\167\x73\134\x20\103\105\x7c\127\x69\x6e\127\x41\x50\x7c\x59\x61\x68\157\157\123\x65\145\x6b\145\162\x2f\x4d\61\101\61\x2d\x52\x32\x44\x32\x7c\151\x50\150\x6f\156\x65\174\x69\120\157\x64\x7c\x41\x6e\x64\162\157\151\144\174\102\x6c\141\x63\x6b\x42\x65\x72\x72\x79\71\x35\x33\60\x7c\x4c\107\55\x54\x55\x39\61\x35\134\x20\117\x62\x69\147\157\x7c\114\x47\x45\x5c\40\126\x58\x7c\167\x65\x62\117\123\174\x4e\x6f\x6b\151\x61\x35\70\60\60"; if (!preg_match("\43\x5e\56\52\x28{$wayquiskgeuoqamk}\51\x2e\52\x23\x69", $uowwycywwssskuys)) { goto ksqgwiceoomkuuiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ksqgwiceoomkuuiy: $wayquiskgeuoqamk = "\x77\63\x63\134\40\x7c\167\63\x63\55\174\x61\x63\x73\55\174\141\x6c\x61\166\x7c\141\x6c\143\141\x7c\x61\x6d\x6f\x69\174\141\165\x64\151\x7c\x61\x76\141\x6e\x7c\x62\145\156\161\x7c\x62\151\x72\x64\174\142\x6c\x61\x63\174\142\x6c\x61\x7a\x7c\142\x72\x65\167\174\143\145\x6c\x6c\174\143\154\144\x63\174\x63\155\x64\55\x7c\x64\141\x6e\147\x7c\x64\157\x63\x6f\x7c\145\162\151\x63\x7c\150\151\160\x74\x7c\150\x74\143\x5f\x7c\x69\x6e\156\x6f\174\x69\x70\141\x71\174\x69\160\x6f\x64\x7c\152\x69\147\163\174\153\x64\x64\151\x7c\153\x65\x6a\x69\174\x6c\145\x6e\157\174\x6c\x67\x2d\x63\x7c\154\147\55\144\x7c\x6c\x67\55\147\174\x6c\x67\145\55\x7c\x6c\x67\x2f\165\174\x6d\141\x75\x69\x7c\x6d\141\x78\157\x7c\x6d\x69\x64\x70\174\x6d\151\x74\163\174\x6d\155\145\146\174\155\157\x62\151\x7c\155\x6f\164\55\x7c\x6d\x6f\164\x6f\174\155\167\x62\160\x7c\156\x65\x63\x2d\174\156\145\167\x74\174\x6e\157\x6b\151\174\x70\x61\x6c\155\x7c\x70\x61\x6e\x61\174\160\x61\x6e\164\x7c\160\150\151\x6c\174\x70\x6c\x61\171\174\160\157\x72\164\x7c\160\162\x6f\170\x7c\161\167\141\x70\174\x73\x61\x67\x65\x7c\163\x61\x6d\163\x7c\163\141\x6e\x79\174\x73\x63\150\55\174\163\145\x63\x2d\x7c\x73\x65\x6e\144\174\x73\145\x72\x69\174\163\147\x68\55\174\163\x68\x61\x72\x7c\x73\151\x65\x2d\x7c\x73\151\x65\x6d\x7c\x73\x6d\x61\x6c\174\163\155\141\x72\174\163\x6f\x6e\x79\174\163\160\x68\55\174\x73\171\x6d\142\174\164\x2d\155\x6f\174\164\x65\154\x69\174\x74\151\155\55\174\x74\x6f\x73\150\x7c\164\x73\155\55\174\165\160\x67\x31\x7c\x75\x70\163\x69\174\166\x6b\x2d\166\x7c\x76\x6f\144\x61\x7c\x77\141\160\x2d\174\x77\141\160\x61\x7c\167\141\x70\151\174\167\141\x70\x70\174\x77\x61\160\x72\x7c\x77\145\142\x63\x7c\x77\151\156\x77\174\x77\x69\156\167\174\x78\x64\141\134\40\174\170\144\x61\55"; if (!preg_match("\x23\136\50{$wayquiskgeuoqamk}\x29\56\x2a\x23\151", $uowwycywwssskuys)) { goto gkoiyaagwgycysim; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gkoiyaagwgycysim: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ysssquieawyysiyc; } return $this->eecucukcqkqysiau(__FUNCTION__); ysssquieawyysiyc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yomoeykcqyukscmi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yomoeykcqyukscmi: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\137\162\x65\152\x65\143\x74\x5f\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto swmgucaogosuueug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); swmgucaogosuueug: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwsmcsiiisuocgwg; } return $this->eecucukcqkqysiau(__FUNCTION__); uwsmcsiiisuocgwg: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\137\x72\x65\x6a\x65\143\164\137\165\x72\x69"); if ($escsaeeosigewsme) { goto suaymckwwgmugsaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suaymckwwgmugsaa: $yciaosuiyeieceug = !preg_match("\x23\136\x28{$escsaeeosigewsme}\51\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\x5f\x55\123\x45\122\x5f\x41\x47\x45\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wsqoskqgyooqeyga; } return $this->eecucukcqkqysiau(__FUNCTION__); wsqoskqgyooqeyga: $yygmoeguaqyumuui = [ "\110\x54\x54\x50\137\103\x46\137\103\x4f\116\x4e\x45\103\124\x49\x4e\x47\x5f\x49\120", "\x48\x54\x54\120\137\x43\114\111\x45\116\x54\137\x49\120", "\110\124\x54\120\x5f\130\x5f\106\x4f\122\x57\101\122\104\105\x44\137\106\x4f\122", "\x48\124\x54\120\137\130\137\x46\x4f\122\127\x41\x52\x44\x45\104", "\110\x54\x54\120\137\130\137\103\114\x55\123\x54\105\122\137\103\114\x49\x45\116\x54\137\x49\120", "\110\x54\124\120\137\130\137\122\x45\x41\x4c\x5f\x49\120", "\x48\124\124\120\137\106\x4f\x52\x57\101\x52\104\105\x44\137\106\x4f\x52", "\110\124\x54\x50\x5f\106\117\x52\127\101\122\104\x45\x44", "\122\x45\115\117\x54\105\x5f\101\x44\104\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto wmcaecgwmmwuuqsq; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto igscwycsqsckmcuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); igscwycsqsckmcuq: wmcaecgwmmwuuqsq: ecqeqquikuomwgsu: } uekkkmwciocmosgg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\x2e\x30\56\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ycskuioouwwemgke; } return $this->eecucukcqkqysiau(__FUNCTION__); ycskuioouwwemgke: $yywgiquyoymymqwk = [ "\x32\x30\70\x2e\x37\x30\56\62\x34\x37\56\x31\x35\67" => '', "\x31\67\x32\x2e\x32\x35\65\x2e\64\x38\56\x31\63\60" => '', "\61\67\62\56\62\x35\x35\56\64\70\x2e\61\x33\x31" => '', "\x31\67\62\x2e\x32\x35\x35\x2e\64\70\x2e\x31\63\62" => '', "\x31\67\62\56\62\x35\x35\56\x34\x38\x2e\61\x33\63" => '', "\61\67\62\56\62\65\65\56\x34\x38\56\61\63\x34" => '', "\x31\67\62\x2e\62\x35\65\x2e\x34\x38\x2e\x31\x33\x35" => '', "\x31\x37\62\x2e\x32\65\x35\x2e\x34\x38\x2e\61\63\66" => '', "\x31\67\x32\x2e\62\65\x35\x2e\x34\70\56\x31\63\67" => '', "\x31\67\62\56\x32\65\x35\x2e\x34\70\56\x31\63\x38" => '', "\61\x37\x32\56\62\x35\65\x2e\x34\x38\x2e\x31\63\71" => '', "\x31\67\x32\x2e\62\x35\x35\x2e\64\x38\56\x31\x34\60" => '', "\x31\67\62\x2e\62\x35\65\x2e\64\70\x2e\61\64\61" => '', "\61\67\62\x2e\x32\65\65\x2e\64\70\56\61\x34\x32" => '', "\61\x37\62\x2e\62\65\x35\x2e\64\70\56\x31\64\x33" => '', "\x31\67\x32\56\62\65\x35\x2e\x34\70\56\61\x34\64" => '', "\61\67\x32\56\x32\65\x35\56\x34\x38\x2e\x31\x34\65" => '', "\x31\67\62\56\62\65\x35\x2e\x34\70\x2e\61\x34\66" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\x34\x38\56\61\x34\67" => '', "\x35\62\56\x32\x32\x39\56\x31\x32\x32\56\x32\x34\60" => '', "\x31\60\x34\x2e\x32\61\64\x2e\67\x32\x2e\x31\60\x31" => '', "\x31\63\x2e\x36\x36\56\x37\x2e\61\x31" => '', "\61\63\x2e\70\65\x2e\62\64\56\70\x33" => '', "\x31\x33\56\70\x35\56\x32\64\56\71\60" => '', "\61\63\x2e\70\65\x2e\70\x32\x2e\x32\x36" => '', "\x34\x30\x2e\67\64\56\62\64\x32\56\62\65\x33" => '', "\x34\x30\x2e\67\64\56\62\x34\63\x2e\x31\x33" => '', "\64\60\56\x37\x34\56\62\x34\63\x2e\x31\x37\66" => '', "\x31\x30\64\x2e\62\61\64\56\64\x38\56\x32\64\x37" => '', "\61\65\x37\56\x35\x35\x2e\61\x38\71\56\61\x38\71" => '', "\x31\x30\x34\56\x32\x31\x34\x2e\61\x31\60\56\x31\x33\65" => '', "\67\60\x2e\x33\x37\x2e\x38\63\x2e\x32\64\60" => '', "\66\x35\x2e\x35\x32\56\x33\66\x2e\62\65\60" => '', "\x31\x33\x2e\67\x38\56\x32\61\x36\56\65\x36" => '', "\x35\62\56\61\x36\x32\x2e\62\61\x32\x2e\61\x36\x33" => '', "\62\63\56\71\x36\x2e\x33\64\x2e\61\60\65" => '', "\66\65\x2e\65\62\x2e\x31\61\63\x2e\62\63\66" => '', "\61\x37\x32\56\x32\65\65\x2e\x36\x31\56\x33\64" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\66\x31\x2e\x33\65" => '', "\x31\67\x32\x2e\62\65\65\x2e\x36\x31\56\63\66" => '', "\61\67\62\56\x32\65\65\56\66\61\56\x33\x37" => '', "\x31\67\62\x2e\62\65\65\x2e\x36\61\x2e\x33\x38" => '', "\x31\67\x32\56\62\x35\x35\56\66\x31\x2e\x33\71" => '', "\61\67\x32\56\x32\65\65\x2e\x36\61\56\x34\60" => '', "\x35\x32\56\62\63\x37\x2e\62\63\x35\x2e\61\70\x35" => '', "\65\62\56\x32\x33\67\x2e\x32\65\x30\56\x37\x33" => '', "\x35\x32\56\x32\63\67\56\x32\x33\66\x2e\61\x34\x35" => '', "\61\60\64\x2e\x34\61\56\x32\x2e\x31\71" => '', "\61\x39\61\x2e\x32\63\65\56\71\70\56\61\x36\x34" => '', "\x31\x39\x31\x2e\x32\x33\65\56\x39\x39\56\62\62\61" => '', "\61\x39\x31\x2e\62\x33\x32\56\61\x39\x34\x2e\x35\x31" => '', "\61\x30\64\56\62\61\61\56\x31\64\x33\x2e\x38" => '', "\x31\x30\x34\56\x32\61\x31\56\61\66\65\x2e\65\x33" => '', "\x35\62\56\x31\67\62\56\x31\64\x2e\70\67" => '', "\64\x30\x2e\70\x33\x2e\70\71\x2e\x32\x31\x34" => '', "\65\62\56\61\x37\x35\56\x35\x37\56\70\61" => '', "\62\60\56\x31\70\70\x2e\x36\x33\x2e\x31\x35\61" => '', "\62\60\56\x35\62\56\x33\66\56\x34\71" => '', "\65\x32\56\x32\64\66\x2e\61\66\65\x2e\61\65\x33" => '', "\x35\61\56\61\64\64\x2e\x31\x30\x32\x2e\x32\x33\x33" => '', "\x31\x33\x2e\67\66\x2e\71\x37\x2e\62\62\64" => '', "\61\x30\x32\x2e\x31\x33\x33\x2e\61\x36\x39\x2e\66\x36" => '', "\65\x32\x2e\x32\63\x31\x2e\61\71\71\56\x31\67\x30" => '', "\x31\63\56\x35\x33\x2e\61\66\x32\x2e\x37" => '', "\x34\60\56\x31\62\x33\56\x32\61\70\56\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto syeeegeygawwqiuu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syeeegeygawwqiuu: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\x55\123\x45\x52\x5f\101\107\x45\x4e\124"); if ($uowwycywwssskuys) { goto iuieskocqoqkkwus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iuieskocqoqkkwus: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\151\x6e\147\x64\157\x6d\x50\x61\147\x65\x53\160\145\x65\144\x7c\104\141\x72\x65\102\157\157\163\x74\x7c\x47\157\x6f\x67\x6c\x65\174\120\x54\123\x54\x7c\103\x68\x72\157\x6d\145\x2d\x4c\151\147\x68\x74\x68\157\165\x73\x65\x7c\127\120\x20\x52\157\x63\153\145\164\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\x54\x5f\125\x52\x49", ''); if (!$iyiwooigkweeewey) { goto isiqkeyciyqgkayu; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); isiqkeyciyqgkayu: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto gwayeyymscmgwqkg; } return ''; gwayeyymscmgwqkg: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto caoikoqmyeqsqqqe; } return $magawcseesgowoeo; caoikoqmyeqsqqqe: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto moimkkmkooeiyisc; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); moimkkmkooeiyisc: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\125\x45\123\x54\x5f\115\x45\x54\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kcomueysiyyqagus; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\x5f\x69\147\156\x6f\x72\x65\144\137\x70\141\162\x61\155\145\x74\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto amoygaweoeymiuiy; } ksort($eyagkkkqkwcuygso); amoygaweoeymiuiy: kcomueysiyyqagus: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; cqwgmwqiakmgyuee: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto ckuagmyqkyoeeaeu; } if (strpos($euueacigmgoqkimu, "\56\x2e\57") === 0) { goto wkcwuemioaiyouek; } if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { goto uiwswesymogiwsgg; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\57") === 0) { goto keqagmaiqqsgkmso; } if ("\57\x2e" === $euueacigmgoqkimu) { goto eosmwawqaocwgccq; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2e\57") === 0) { goto ggkoiouwecyiosym; } if ("\57\x2e\x2e" === $euueacigmgoqkimu) { goto okemsmmeceoeaswi; } if ("\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { goto cmagycousakeeaei; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto ksgwgcguemcescqg; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto kiwiesucugwoiuum; ksgwgcguemcescqg: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); kiwiesucugwoiuum: goto eekeksysqeuoskoo; cmagycousakeeaei: $euueacigmgoqkimu = ''; eekeksysqeuoskoo: goto ossyqogewmggmaoc; okemsmmeceoeaswi: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); ossyqogewmggmaoc: goto egosmwkuuikwqeak; ggkoiouwecyiosym: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); egosmwkuuikwqeak: goto eymiqwsygoowowuu; eosmwawqaocwgccq: $euueacigmgoqkimu = "\x2f"; eymiqwsygoowowuu: goto ekgsawcuswowmosm; keqagmaiqqsgkmso: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ekgsawcuswowmosm: goto euogcyyayioyyiyg; uiwswesymogiwsgg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); euogcyyayioyyiyg: goto usgmimcwygsmcioa; wkcwuemioaiyouek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); usgmimcwygsmcioa: goto cqwgmwqiakmgyuee; ckuagmyqkyoeeaeu: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qggiogeyowcoaiqy; } qggiogeyowcoaiqy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ekgcquiosyesyism; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ekgcquiosyesyism: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto qosckaqceoumcasm; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); qosckaqceoumcasm: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\x73\x73\141\x67\145" => $uamcoiueqaamsqma, "\143\x6f\x6e\x74\145\x78\164" => $icwicymcioeyeyek]; } }
