<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb25ce6cfc8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\x69" => 1, "\x73\x73\x6c" => 0, "\x77\x70\137\x34\60\x34" => 1, "\163\x65\x61\x72\x63\x68" => 1, "\x6d\157\x62\x69\154\x65" => 1, "\151\163\x5f\150\164\155\x6c" => 1, "\x71\165\x65\x72\171\x5f\x73\164\x72\151\x6e\x67" => 1, "\x64\x6f\156\x6f\x74\143\x61\x63\150\145\x70\x61\x67\x65" => 1, "\162\145\x6a\145\x63\164\145\144\137\x63\157\x6f\x6b\151\x65" => 1, "\155\x61\156\x64\141\164\157\162\171\137\x63\157\x6f\153\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\x73\x74\x73"])) { goto sagemooicmgceiug; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\x65\x73\x74\163"]); sagemooicmgceiug: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\157\x6b\x69\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto uqcwyyiykmwygeau; } $ywmkwiwkosakssii["\x63\157\x6f\153\151\x65\x73"] = $_COOKIE; uqcwyyiykmwygeau: if (!(!isset($ywmkwiwkosakssii["\160\157\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto yeiokcoikcysyimu; } $ywmkwiwkosakssii["\x70\x6f\163\x74"] = $_POST; yeiokcoikcysyimu: if (!(!isset($ywmkwiwkosakssii["\147\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto kkmwwqyesmkescyg; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; kkmwwqyesmkescyg: $this->get = !empty($ywmkwiwkosakssii["\147\145\x74"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\157\163\x74"]) && is_array($ywmkwiwkosakssii["\160\157\x73\164"]) ? $ywmkwiwkosakssii["\160\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\143\157\157\x6b\151\x65\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\157\153\151\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto uamuuwkyuqomqyuy; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\143\165\x73\164\157\155\x69\172\x65" => '']); uamuuwkyuqomqyuy: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto ekwuycsiuqwycqea; } $this->yauwooaeicgosquo("\x44\145\166\x20\115\x6f\144\145\x20\105\x6e\141\142\x6c\145\144\40\141\x6e\144\x20\x61\x6c\x6c\40\162\145\x71\x75\145\x73\x74\40\x69\x73\x20\142\x79\160\141\163\163\56"); return false; ekwuycsiuqwycqea: if (!$this->kgkoeoeseyuugaao()) { goto iyaugygcsmqqqkmo; } $this->yauwooaeicgosquo("\x52\x6f\142\x6f\x74\x73\56\164\170\x74\x20\x6f\162\x20\x2e\x68\164\x61\x63\143\x65\163\x73\40\x66\x69\154\x65\x20\x69\163\x20\145\170\x63\154\165\x64\x65\x64\56"); return false; iyaugygcsmqqqkmo: if (!$this->gymgcceeqssmesiu()) { goto cieumoqayigkoocy; } $this->yauwooaeicgosquo("\x50\110\120\54\40\130\x4d\x4c\x2c\40\x6f\x72\x20\x58\x53\x4c\40\146\x69\x6c\x65\x20\151\163\40\145\170\x63\x6c\x75\144\x65\x64\x2e"); return false; cieumoqayigkoocy: if (!$this->goecwaaykqoaaagg()) { goto yggciikgkomgeqsc; } $this->yauwooaeicgosquo("\101\144\155\151\x6e\x20\x6f\x72\40\x41\112\101\x58\40\125\122\114\40\x69\163\x20\145\170\143\x6c\x75\144\x65\x64\x2e"); return false; yggciikgkomgeqsc: if (!$this->sgsscqasgeyeicoe()) { goto eoeiaccouaymakgm; } $this->yauwooaeicgosquo("\x41\x64\x6d\151\156\40\x6f\162\40\x41\x4a\x41\x58\40\x55\122\114\40\x69\x73\40\x65\x78\143\x6c\165\x64\x65\x64\56"); return false; eoeiaccouaymakgm: if ($this->gooeyogikcusgwuu()) { goto owaimkmgemoqewmm; } $this->yauwooaeicgosquo("\x52\x65\161\x75\x65\163\164\x20\155\x65\164\x68\x6f\x64\40\x69\163\x20\156\x6f\x74\x20\141\154\x6c\x6f\x77\145\x64\56\x20\x50\x61\x67\145\x20\x63\141\156\156\x6f\x74\x20\x62\x65\40\x63\x61\143\x68\145\144\x2e", ["\162\x65\x71\165\145\163\x74\x5f\155\x65\164\150\157\x64" => $this->ciyocmkwssocskiy()]); return false; owaimkmgemoqewmm: if ($this->cskwmweqysskwckg()) { goto ysoqeuugiuswykyu; } $this->lastError = []; return true; ysoqeuugiuswykyu: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\143\145\x73\163"]) { goto usmuqsuwuueogimc; } $this->yauwooaeicgosquo("\116\x6f\40\x63\157\156\146\151\147\40\x66\151\154\145\40\146\x6f\165\156\144", ["\143\x6f\x6e\146\151\x67\x5f\160\141\x74\150" => $uiewakwqscemywuo["\160\x61\164\150"]]); return false; usmuqsuwuueogimc: if (!($this->cskwmweqysskwckg("\161\x75\145\x72\171\x5f\163\x74\x72\151\156\147") && !$this->koguieumooaesyww())) { goto koiiaewwicsckseu; } $this->yauwooaeicgosquo("\x51\x75\x65\162\x79\40\x73\164\162\151\156\147\40\x55\122\x4c\40\151\163\x20\x65\x78\x63\154\x75\144\145\x64\56", $_GET); return false; koiiaewwicsckseu: if (!($this->cskwmweqysskwckg("\x73\163\x6c") & !$this->eqwgocqwoyyykwke())) { goto umcyeiusoakewyaa; } $this->yauwooaeicgosquo("\x53\123\x4c\40\x63\141\x63\x68\145\40\156\x6f\x74\40\x61\160\x70\x6c\151\x65\144\x20\x74\x6f\x20\x70\141\147\145\x2e"); return false; umcyeiusoakewyaa: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto ksawwekgswywwuwm; } $this->yauwooaeicgosquo("\120\141\147\x65\x20\151\x73\x20\x65\x78\x63\x6c\x75\144\145\x64\56"); return false; ksawwekgswywwuwm: if (!($this->cskwmweqysskwckg("\162\x65\152\145\x63\x74\145\144\137\143\157\157\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto yuqisiwgqacgmsym; } $this->yauwooaeicgosquo("\x45\x78\x63\x6c\x75\x64\x65\x64\40\143\157\157\153\151\x65\x20\146\x6f\165\156\144\x2e", ["\145\x78\143\154\165\144\x65\144\x5f\143\157\x6f\x6b\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; yuqisiwgqacgmsym: if (!($this->cskwmweqysskwckg("\x6d\141\156\x64\x61\164\x6f\x72\171\137\x63\157\x6f\153\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto wickgagwgqqsomum; } $this->yauwooaeicgosquo("\x4d\x69\163\163\151\156\x67\40\155\141\x6e\144\x61\x74\157\x72\171\40\143\157\157\x6b\151\x65\x3a\40\x70\x61\x67\145\40\156\x6f\x74\x20\x70\x72\157\x63\145\163\163\145\144\x2e", ["\155\x69\163\163\151\x6e\147\x5f\143\x6f\157\153\151\145\163" => $this->qgymyeqwqaiwmmea()]); return false; wickgagwgqqsomum: if (!($this->cskwmweqysskwckg("\x75\163\145\x72\x5f\141\x67\145\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto wmwgeoequuwwwywa; } $this->yauwooaeicgosquo("\x55\163\x65\162\40\x41\x67\x65\x6e\164\x20\x69\x73\x20\145\170\143\154\x75\144\x65\x64\56", ["\x75\x73\145\x72\137\x61\147\x65\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\125\x53\105\x52\137\101\107\x45\116\124")]); return false; wmwgeoequuwwwywa: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto uqugcugeomqakcqo; } $this->yauwooaeicgosquo("\x42\x75\146\146\145\x72\40\143\157\x6e\164\x65\156\164\x20\x75\156\144\145\x72\40\x32\65\65\40\143\150\x61\x72\141\143\164\x65\162\163\x2e"); return false; uqugcugeomqakcqo: if (!(http_response_code() !== 200)) { goto qmoisuweiskkekca; } $this->yauwooaeicgosquo("\x50\141\x67\145\40\x69\163\x20\x6e\157\164\40\x61\x20\62\x30\60\x20\x48\x54\x54\x50\x20\x72\145\163\x70\x6f\156\163\145\40\141\156\144\40\143\141\156\x6e\x6f\164\x20\142\145\40\143\x61\x63\150\145\x64\x2e"); return false; qmoisuweiskkekca: if (!($this->cskwmweqysskwckg("\x64\x6f\156\x6f\x74\157\160\x74\151\x6d\x69\172\145\160\x61\x67\145") && $this->cowcgqokiosgaqic())) { goto wywwieycqskuqcwc; } $this->yauwooaeicgosquo("\104\117\116\124\x4f\120\x54\111\x4d\x49\x5a\x45\x44\120\x41\107\105\40\151\163\x20\x64\145\x66\x69\x6e\x65\x64\x2e\x20\120\141\147\145\40\x63\141\x6e\156\157\164\40\x62\145\40\x63\141\143\150\145\x64\56"); return false; wywwieycqskuqcwc: if (!($this->cskwmweqysskwckg("\167\160\x5f\x34\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto gwyseusuceuwwccu; } $this->yauwooaeicgosquo("\127\x50\40\64\x30\x34\40\x70\x61\x67\145\40\151\x73\40\x65\x78\x63\154\165\144\x65\144\x2e"); return false; gwyseusuceuwwccu: if (!($this->cskwmweqysskwckg("\163\x65\141\162\143\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto icouowaoycuuisqe; } $this->yauwooaeicgosquo("\123\145\141\x72\143\150\x20\x70\x61\x67\x65\40\x69\163\x20\145\170\x63\154\165\x64\145\x64\56"); return false; icouowaoycuuisqe: if (!$this->cskwmweqysskwckg("\x69\163\137\x68\x74\155\x6c")) { goto kmqusaiaiogecyiy; } if (!($this->cmaecekuqkwmemms("\x52\x45\123\124\x5f\122\105\x51\125\105\123\124") || $this->gaiygescoqgyusaa())) { goto ocmwuquguuqigose; } unset($this->tests["\x69\x73\137\150\x74\155\154"]); ocmwuquguuqigose: kmqusaiaiogecyiy: if (!($this->cskwmweqysskwckg("\x69\x73\137\150\x74\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto swckikycciugciqq; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\x6c\157\163\151\x6e\147\40\74\x2f\150\164\155\154\x3e\x20\x77\141\x73\x20\x66\x6f\x75\x6e\x64\x2e"); return false; swckikycciugciqq: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\157\160\164\151\155\x69\172\x61\164\151\157\x6e\x5f\x61\x6c\154\157\x77\137\164\157\137\163\x74\x61\162\x74\x5f\x62\165\146\146\x65\x72\137\x70\x72\157\x63\x65\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto coogyackikgmecic; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto iqwsqykoueqyyomy; coogyackikgmecic: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); iqwsqykoueqyyomy: return apply_filters("\160\x72\137\x6f\x70\x74\x69\x6d\151\172\x61\164\151\x6f\156\x5f\150\141\x73\x5f{$ymqmyyeuycgmigyo}\x5f\164\x65\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\134\x73\x2a\x5c\57\x5c\x73\52\150\164\x6d\154\x5c\163\x2a\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\77\x3a\x2e\x2b\57\51\77" . $wp_rewrite->feed_base . "\x28\77\72\57\x28\x3f\x3a\56\x2b\57\x3f\51\x3f\51\77\44"; return (bool) preg_match("\x23\136\x28{$uckmmkmoeikwsiqg}\51\x24\43\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\x76\137\155\x6f\x64\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ggaucuaykyuiikem; } return $this->eecucukcqkqysiau(__FUNCTION__); ggaucuaykyuiikem: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto egikqoaqqegawugu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egikqoaqqegawugu: $ucasskoyoewwmmii = ["\x72\157\142\x6f\164\x73\x2e\x74\x78\164", "\x2e\x68\x74\x61\x63\x63\145\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto wmcmqmmcweecqmsw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wmcmqmmcweecqmsw: yoaewquyogiimyic: } caaygouikgagsssc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aakoeuuosouyeemc; } return $this->eecucukcqkqysiau(__FUNCTION__); aakoeuuosouyeemc: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto cicegcoqyuoggiwy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qsmoiwqcuamyuwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsmoiwqcuamyuwyu: cicegcoqyuoggiwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugcwqacogqoswyse; } return $this->eecucukcqkqysiau(__FUNCTION__); ugcwqacogqoswyse: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto saekesoeysauokkq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); saekesoeysauokkq: if (!(strtolower($iyiwooigkweeewey) === "\57\151\156\144\145\170\56\x70\150\160")) { goto wycuyiukyceccaow; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wycuyiukyceccaow: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\x78\x6d\x6c" => 1, "\x78\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\x4e\x47\x5f\101\x4a\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x53")), ["\157\156", "\x31"]) || "\x34\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\x56\105\122\137\x50\x4f\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\x5f\143\165\163\x74\x6f\x6d\x69\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\124" => 1, "\110\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto meseuuacmkuowqau; } return $this->eecucukcqkqysiau(__FUNCTION__); meseuuacmkuowqau: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto sqmiymiemeegegic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sqmiymiemeegegic: $yccgiaiouekkouay = ["\x73" => 1, "\x6c\141\x6e\x67" => 1, "\x70\x65\x72\155\x61\x6c\151\156\153\137\156\141\x6d\145" => 1, "\x6c\160\55\x76\141\162\151\x61\164\151\x6f\156\x2d\151\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto csqakuuiyywassgw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); csqakuuiyywassgw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\x5f\161\165\145\x72\x79\x5f\163\164\162\x69\x6e\147\x73"); if ($yccgiaiouekkouay) { goto esqiocgueosoksyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esqiocgueosoksyq: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto csggsqueaqmwgwkk; } return $this->eecucukcqkqysiau(__FUNCTION__); csggsqueaqmwgwkk: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto sescaagayikiggyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sescaagayikiggyq: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto wwwggoemicgwwasy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwwggoemicgwwasy: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cqaeiesyciakcagu; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cqaeiesyciakcagu: gemwkqocygssmequ: } egmocemomockemia: if (empty($eiocugauqgouiuyi)) { goto acisycocoswkekik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); acisycocoswkekik: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aaiymmkqmocgakei; } return $this->eecucukcqkqysiau(__FUNCTION__); aaiymmkqmocgakei: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kucqcqeesaiacekm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kucqcqeesaiacekm: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\137\155\x61\156\144\x61\x74\x6f\x72\x79\x5f\x63\157\x6f\x6b\x69\x65\x73"))); if ($this->wemyikwikgwqwuoc()) { goto cewyaqiqmmwmauce; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); cewyaqiqmmwmauce: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto ciwggusyecgskagy; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); ciwggusyecgskagy: ycweseaccsomkioa: } scyqmcegwikkoesw: if (!empty($yiycakoikkyuokgk)) { goto sccqekuwywiisami; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sccqekuwywiisami: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\137\157\160\x74\151\155\151\x7a\x61\164\x69\x6f\x6e\x5f\157\x76\x65\x72\162\151\x64\x65\x5f\144\157\x6e\164\x5f\157\160\x74\x69\x6d\x69\x7a\145", $this->cmaecekuqkwmemms("\120\x52\137\x4f\x50\x54\111\115\x49\132\x41\124\x49\x4f\116\x5f\x44\117\x4e\x54\137\x4f\120\124\x49\115\x49\x5a\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\x5f\x34\x30\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\x5f\163\145\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\x5f\157\x70\164\x69\155\x69\x7a\141\164\x69\x6f\x6e\137\x6f\160\x74\x69\x6d\151\x7a\145\x5f\x73\x65\141\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\x73\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eokcuuwqaomkooag; } return $this->eecucukcqkqysiau(__FUNCTION__); eokcuuwqaomkooag: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qgqasacusgwmoegy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qgqasacusgwmoegy: if (!$this->aceaeommyuooiqge()->get("\x6d\157\142\151\x6c\145\137\143\x61\x63\150\x65")) { goto qscqkykqskqmisgw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qscqkykqskqmisgw: $wayquiskgeuoqamk = "\x32\x2e\x30\x5c\40\115\115\x50\x7c\x32\x34\x30\170\x33\62\x30\174\x34\60\x30\130\62\x34\60\x7c\x41\166\x61\x6e\x74\107\x6f\x7c\x42\154\x61\x63\153\x42\145\162\162\171\x7c\102\x6c\141\172\x65\162\x7c\103\x65\x6c\154\160\x68\x6f\x6e\145\x7c\104\x61\156\147\145\162\x7c\104\x6f\103\157\115\157\x7c\x45\x6c\141\x69\x6e\x65\x2f\x33\56\x30\x7c\105\x75\144\x6f\x72\141\127\x65\x62\174\x47\157\x6f\x67\154\x65\x62\x6f\x74\x2d\x4d\x6f\x62\x69\154\x65\174\150\151\x70\164\157\160\x7c\x49\105\115\x6f\142\151\x6c\x65\174\113\131\x4f\x43\x45\122\101\57\x57\x58\x33\x31\60\x4b\174\114\x47\57\125\71\71\x30\x7c\115\x49\104\x50\x2d\62\x2e\174\x4d\115\x45\x46\62\60\x7c\115\117\x54\x2d\126\x7c\116\x65\164\106\162\157\x6e\x74\x7c\116\145\167\x74\174\x4e\151\x6e\x74\x65\156\x64\157\134\x20\x57\151\x69\174\x4e\151\x74\x72\157\x7c\116\157\153\151\x61\x7c\x4f\160\x65\x72\141\134\x20\115\151\x6e\151\174\x50\141\154\155\x7c\x50\x6c\x61\x79\123\x74\x61\x74\x69\x6f\x6e\x5c\x20\x50\157\x72\164\141\142\x6c\145\x7c\160\x6f\162\164\141\154\x6d\x6d\155\174\120\162\x6f\x78\x69\156\145\164\174\120\162\157\x78\x69\x4e\145\164\174\x53\110\101\x52\x50\x2d\124\121\55\x47\x58\x31\60\x7c\x53\x48\x47\55\151\x39\x30\x30\174\123\x6d\x61\x6c\x6c\x7c\x53\x6f\x6e\x79\105\x72\x69\x63\x73\x73\x6f\156\174\x53\171\155\x62\x69\141\156\134\x20\117\123\x7c\x53\171\155\142\151\141\x6e\117\123\174\x54\x53\x32\x31\x69\x2d\61\x30\x7c\125\120\56\x42\162\157\x77\x73\145\162\174\x55\120\56\114\151\x6e\x6b\174\x77\145\142\117\x53\174\127\151\156\144\x6f\x77\x73\134\x20\103\105\x7c\127\x69\156\x57\101\120\174\131\141\150\x6f\157\123\x65\x65\x6b\x65\162\x2f\x4d\x31\101\61\55\x52\62\104\62\x7c\151\x50\150\x6f\x6e\x65\x7c\151\120\x6f\144\174\101\156\144\x72\157\x69\x64\174\102\154\141\143\x6b\102\x65\x72\x72\x79\x39\x35\63\60\174\114\107\x2d\x54\x55\71\61\65\x5c\40\x4f\x62\151\147\157\x7c\114\x47\105\x5c\x20\126\x58\174\167\145\142\117\x53\174\x4e\x6f\153\x69\x61\x35\x38\60\60"; if (!preg_match("\43\x5e\56\x2a\50{$wayquiskgeuoqamk}\x29\56\52\x23\x69", $uowwycywwssskuys)) { goto ksqgwiceoomkuuiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ksqgwiceoomkuuiy: $wayquiskgeuoqamk = "\167\63\x63\x5c\40\174\x77\63\143\55\x7c\x61\143\x73\55\174\x61\154\141\166\174\x61\x6c\143\141\x7c\x61\155\157\151\174\x61\165\x64\x69\174\141\166\x61\x6e\174\x62\145\156\x71\x7c\142\151\162\x64\174\x62\x6c\x61\143\174\142\154\x61\172\x7c\x62\162\145\x77\174\x63\x65\x6c\154\174\x63\154\x64\x63\x7c\143\155\144\55\174\x64\x61\x6e\147\174\144\157\143\157\174\145\x72\151\x63\174\150\x69\x70\164\174\150\164\143\137\x7c\x69\x6e\x6e\x6f\174\151\x70\141\x71\174\151\x70\157\x64\174\152\151\x67\163\174\x6b\x64\x64\151\174\153\145\x6a\151\x7c\x6c\145\x6e\x6f\174\x6c\x67\x2d\x63\174\154\x67\x2d\144\174\154\147\x2d\147\x7c\x6c\x67\x65\x2d\174\154\147\57\165\x7c\155\141\165\151\x7c\155\x61\x78\157\x7c\155\151\144\x70\174\155\151\164\163\x7c\x6d\x6d\145\146\174\x6d\157\x62\x69\x7c\x6d\x6f\164\55\174\x6d\157\164\x6f\x7c\155\167\x62\160\x7c\x6e\x65\143\x2d\x7c\x6e\x65\167\164\174\156\x6f\x6b\x69\x7c\160\141\154\x6d\x7c\160\141\156\x61\174\160\141\156\x74\174\160\150\151\154\174\160\x6c\141\171\174\x70\157\x72\164\174\160\162\x6f\x78\x7c\x71\x77\x61\x70\x7c\x73\x61\147\145\174\163\x61\x6d\163\174\163\141\156\x79\174\x73\x63\x68\55\x7c\x73\x65\x63\55\x7c\163\x65\x6e\x64\174\163\145\x72\x69\x7c\163\x67\150\x2d\174\x73\150\141\x72\174\163\x69\145\x2d\174\x73\x69\x65\x6d\x7c\x73\155\x61\154\174\163\x6d\x61\x72\x7c\163\x6f\156\x79\174\x73\x70\150\55\x7c\x73\171\155\x62\174\x74\x2d\x6d\157\174\164\x65\x6c\x69\x7c\x74\x69\x6d\55\174\x74\157\163\150\174\164\x73\x6d\x2d\x7c\x75\160\x67\x31\x7c\165\160\x73\151\174\x76\x6b\55\166\x7c\x76\x6f\144\x61\x7c\x77\x61\x70\55\x7c\x77\x61\160\x61\x7c\167\x61\x70\x69\x7c\x77\141\x70\160\174\x77\141\x70\162\x7c\x77\145\x62\143\174\x77\x69\156\167\x7c\167\x69\x6e\167\174\x78\144\141\134\40\x7c\x78\144\x61\x2d"; if (!preg_match("\x23\136\50{$wayquiskgeuoqamk}\51\x2e\x2a\x23\x69", $uowwycywwssskuys)) { goto gkoiyaagwgycysim; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gkoiyaagwgycysim: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ysssquieawyysiyc; } return $this->eecucukcqkqysiau(__FUNCTION__); ysssquieawyysiyc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yomoeykcqyukscmi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yomoeykcqyukscmi: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\137\162\x65\x6a\x65\143\x74\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto swmgucaogosuueug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); swmgucaogosuueug: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwsmcsiiisuocgwg; } return $this->eecucukcqkqysiau(__FUNCTION__); uwsmcsiiisuocgwg: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\x5f\x72\x65\x6a\145\x63\x74\137\x75\x72\x69"); if ($escsaeeosigewsme) { goto suaymckwwgmugsaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suaymckwwgmugsaa: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\x29\x24\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\x55\x53\x45\122\137\x41\x47\x45\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wsqoskqgyooqeyga; } return $this->eecucukcqkqysiau(__FUNCTION__); wsqoskqgyooqeyga: $yygmoeguaqyumuui = [ "\x48\x54\x54\120\137\x43\x46\137\103\x4f\x4e\116\x45\x43\x54\x49\x4e\x47\137\x49\120", "\x48\x54\124\120\137\x43\114\x49\105\x4e\x54\x5f\x49\120", "\110\x54\124\x50\137\x58\x5f\106\x4f\122\127\x41\122\104\x45\104\137\106\x4f\x52", "\x48\124\124\x50\137\x58\137\x46\117\x52\127\x41\x52\104\x45\104", "\x48\124\x54\x50\x5f\130\137\103\x4c\x55\123\x54\105\122\x5f\103\x4c\x49\105\x4e\124\137\x49\x50", "\110\124\124\120\x5f\x58\137\x52\105\101\114\137\x49\120", "\110\x54\124\120\137\x46\117\x52\127\101\122\104\105\x44\x5f\x46\x4f\122", "\110\x54\124\x50\x5f\x46\117\122\x57\x41\122\104\105\104", "\122\x45\115\x4f\124\x45\137\101\x44\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto wmcaecgwmmwuuqsq; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto igscwycsqsckmcuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); igscwycsqsckmcuq: wmcaecgwmmwuuqsq: ecqeqquikuomwgsu: } uekkkmwciocmosgg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\60\x2e\60\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ycskuioouwwemgke; } return $this->eecucukcqkqysiau(__FUNCTION__); ycskuioouwwemgke: $yywgiquyoymymqwk = [ "\x32\x30\x38\56\67\x30\x2e\62\x34\67\56\61\65\x37" => '', "\61\x37\62\56\x32\x35\65\x2e\64\70\56\x31\63\60" => '', "\61\x37\62\56\x32\65\x35\56\x34\70\56\x31\63\x31" => '', "\61\67\x32\56\62\x35\65\x2e\64\x38\x2e\61\63\62" => '', "\x31\67\62\56\62\x35\65\x2e\64\70\56\61\x33\63" => '', "\61\x37\62\56\62\x35\65\56\64\x38\x2e\61\x33\64" => '', "\x31\x37\62\x2e\62\65\x35\x2e\64\70\x2e\x31\63\x35" => '', "\61\67\62\x2e\62\65\65\x2e\64\x38\x2e\61\63\x36" => '', "\61\x37\62\x2e\x32\65\x35\x2e\64\70\56\x31\x33\x37" => '', "\61\x37\x32\x2e\62\65\65\x2e\64\70\x2e\61\x33\70" => '', "\61\x37\x32\56\62\x35\65\x2e\64\70\x2e\x31\63\x39" => '', "\61\x37\62\x2e\62\x35\65\x2e\64\x38\x2e\61\64\x30" => '', "\x31\x37\62\x2e\62\65\65\56\x34\x38\x2e\x31\x34\61" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\x34\70\56\61\x34\62" => '', "\x31\67\62\56\x32\x35\65\56\64\x38\56\x31\64\x33" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\64\x38\x2e\x31\x34\x34" => '', "\x31\x37\x32\56\62\x35\65\56\64\x38\x2e\61\64\x35" => '', "\61\x37\x32\56\62\x35\x35\x2e\64\70\x2e\x31\64\x36" => '', "\61\x37\x32\56\62\x35\x35\56\64\70\x2e\x31\x34\x37" => '', "\x35\62\56\x32\62\x39\x2e\x31\x32\x32\56\x32\x34\60" => '', "\61\60\x34\x2e\62\x31\64\x2e\x37\62\x2e\x31\60\61" => '', "\61\x33\x2e\x36\66\56\67\56\61\61" => '', "\61\63\56\70\x35\x2e\x32\64\56\x38\63" => '', "\x31\x33\x2e\x38\65\x2e\x32\x34\56\x39\60" => '', "\x31\x33\56\x38\x35\56\x38\62\x2e\x32\x36" => '', "\x34\x30\x2e\x37\64\56\62\64\x32\56\62\x35\63" => '', "\x34\x30\x2e\x37\x34\56\x32\x34\63\x2e\x31\x33" => '', "\64\x30\56\67\64\x2e\x32\x34\x33\x2e\x31\67\x36" => '', "\61\60\x34\56\62\x31\64\x2e\x34\70\x2e\x32\64\x37" => '', "\61\65\67\x2e\x35\x35\x2e\x31\70\71\56\x31\70\x39" => '', "\x31\x30\64\x2e\62\61\x34\x2e\61\x31\60\56\61\63\65" => '', "\x37\60\56\63\67\x2e\x38\63\56\x32\64\x30" => '', "\66\65\56\65\62\56\63\x36\56\62\x35\x30" => '', "\x31\63\x2e\x37\70\56\x32\x31\66\x2e\x35\66" => '', "\65\62\x2e\x31\66\62\56\62\61\x32\56\x31\x36\x33" => '', "\62\63\x2e\x39\66\x2e\63\x34\56\x31\60\x35" => '', "\66\x35\56\65\62\56\x31\x31\63\x2e\x32\63\x36" => '', "\x31\67\x32\x2e\62\65\65\56\x36\x31\56\x33\x34" => '', "\x31\67\x32\56\62\x35\x35\56\66\61\x2e\x33\65" => '', "\61\x37\x32\56\62\x35\x35\56\66\61\56\63\66" => '', "\61\x37\62\56\62\65\65\56\66\61\x2e\x33\x37" => '', "\x31\67\62\x2e\62\x35\65\56\x36\61\56\x33\x38" => '', "\61\67\62\x2e\x32\x35\x35\x2e\x36\61\56\x33\71" => '', "\61\x37\62\x2e\62\65\x35\56\66\x31\56\x34\x30" => '', "\65\x32\x2e\x32\63\x37\x2e\62\63\x35\56\x31\70\x35" => '', "\x35\x32\x2e\62\63\67\x2e\x32\65\60\x2e\67\x33" => '', "\65\x32\56\62\63\x37\x2e\x32\63\66\56\61\64\65" => '', "\61\60\x34\56\64\61\x2e\x32\56\61\71" => '', "\61\71\x31\56\x32\63\65\x2e\x39\70\x2e\x31\x36\x34" => '', "\x31\x39\x31\56\62\x33\x35\x2e\x39\x39\56\x32\x32\x31" => '', "\61\x39\61\x2e\x32\x33\x32\56\x31\71\x34\x2e\x35\x31" => '', "\x31\x30\64\56\62\61\61\x2e\x31\x34\x33\56\x38" => '', "\61\60\64\x2e\x32\61\61\56\61\x36\x35\56\x35\63" => '', "\x35\62\56\x31\x37\x32\x2e\x31\64\56\70\x37" => '', "\x34\x30\x2e\70\63\56\70\x39\x2e\x32\61\64" => '', "\x35\x32\x2e\61\67\x35\x2e\x35\67\x2e\70\61" => '', "\x32\60\x2e\x31\x38\x38\x2e\x36\x33\x2e\61\x35\61" => '', "\x32\x30\56\65\62\x2e\x33\66\x2e\64\x39" => '', "\65\x32\56\62\x34\x36\56\61\x36\65\56\61\x35\x33" => '', "\x35\61\x2e\x31\x34\x34\56\61\60\x32\56\62\63\63" => '', "\x31\63\x2e\67\x36\56\x39\67\56\62\62\64" => '', "\x31\x30\62\56\61\x33\63\x2e\61\66\x39\x2e\x36\x36" => '', "\x35\x32\x2e\x32\x33\61\56\61\71\71\x2e\61\67\60" => '', "\61\63\x2e\x35\63\x2e\61\66\62\56\67" => '', "\x34\60\x2e\x31\62\x33\x2e\62\61\70\x2e\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto syeeegeygawwqiuu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syeeegeygawwqiuu: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\125\123\x45\122\137\x41\107\105\116\124"); if ($uowwycywwssskuys) { goto iuieskocqoqkkwus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iuieskocqoqkkwus: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\x50\151\x6e\147\144\x6f\155\x50\141\147\145\x53\160\x65\x65\144\174\104\x61\162\x65\102\x6f\x6f\163\x74\174\x47\x6f\157\147\154\145\174\120\124\123\x54\174\x43\x68\x72\x6f\155\145\55\114\x69\x67\150\164\x68\157\165\163\x65\x7c\x57\x50\40\x52\x6f\x63\x6b\x65\164\x23\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\125\105\x53\x54\137\125\x52\111", ''); if (!$iyiwooigkweeewey) { goto isiqkeyciyqgkayu; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); isiqkeyciyqgkayu: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto gwayeyymscmgwqkg; } return ''; gwayeyymscmgwqkg: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto caoikoqmyeqsqqqe; } return $magawcseesgowoeo; caoikoqmyeqsqqqe: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto moimkkmkooeiyisc; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); moimkkmkooeiyisc: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\105\x53\x54\137\115\x45\124\110\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kcomueysiyyqagus; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\150\x65\137\x69\147\156\157\162\145\144\x5f\x70\x61\162\141\155\x65\164\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto amoygaweoeymiuiy; } ksort($eyagkkkqkwcuygso); amoygaweoeymiuiy: kcomueysiyyqagus: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; cqwgmwqiakmgyuee: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto ckuagmyqkyoeeaeu; } if (strpos($euueacigmgoqkimu, "\56\56\x2f") === 0) { goto wkcwuemioaiyouek; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto uiwswesymogiwsgg; } if (strpos($euueacigmgoqkimu, "\x2f\56\x2f") === 0) { goto keqagmaiqqsgkmso; } if ("\57\56" === $euueacigmgoqkimu) { goto eosmwawqaocwgccq; } if (strpos($euueacigmgoqkimu, "\57\56\56\57") === 0) { goto ggkoiouwecyiosym; } if ("\57\x2e\56" === $euueacigmgoqkimu) { goto okemsmmeceoeaswi; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto cmagycousakeeaei; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto ksgwgcguemcescqg; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto kiwiesucugwoiuum; ksgwgcguemcescqg: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); kiwiesucugwoiuum: goto eekeksysqeuoskoo; cmagycousakeeaei: $euueacigmgoqkimu = ''; eekeksysqeuoskoo: goto ossyqogewmggmaoc; okemsmmeceoeaswi: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); ossyqogewmggmaoc: goto egosmwkuuikwqeak; ggkoiouwecyiosym: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); egosmwkuuikwqeak: goto eymiqwsygoowowuu; eosmwawqaocwgccq: $euueacigmgoqkimu = "\57"; eymiqwsygoowowuu: goto ekgsawcuswowmosm; keqagmaiqqsgkmso: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ekgsawcuswowmosm: goto euogcyyayioyyiyg; uiwswesymogiwsgg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); euogcyyayioyyiyg: goto usgmimcwygsmcioa; wkcwuemioaiyouek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); usgmimcwygsmcioa: goto cqwgmwqiakmgyuee; ckuagmyqkyoeeaeu: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qggiogeyowcoaiqy; } qggiogeyowcoaiqy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ekgcquiosyesyism; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ekgcquiosyesyism: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto qosckaqceoumcasm; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); qosckaqceoumcasm: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\163\x73\x61\147\x65" => $uamcoiueqaamsqma, "\x63\157\x6e\164\x65\x78\x74" => $icwicymcioeyeyek]; } }
