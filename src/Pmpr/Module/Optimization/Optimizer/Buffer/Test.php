<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705177f65977             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\163\163\x6c" => 0, "\x77\160\137\x34\x30\64" => 1, "\163\145\x61\162\x63\150" => 1, "\155\157\142\x69\154\145" => 1, "\151\163\137\150\164\155\x6c" => 1, "\161\x75\145\162\171\x5f\x73\164\x72\151\156\x67" => 1, "\x64\157\156\157\x74\x63\141\x63\x68\x65\x70\141\147\x65" => 1, "\x72\x65\152\145\x63\164\145\144\137\143\x6f\157\153\x69\145" => 1, "\x6d\141\156\x64\x61\164\157\x72\x79\137\x63\x6f\x6f\153\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\x73\x74\x73"])) { goto yaumwqeommqigswq; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\x74\163"]); yaumwqeommqigswq: if (!(!isset($ywmkwiwkosakssii["\143\157\157\x6b\151\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto wiiqigwgyuiuksia; } $ywmkwiwkosakssii["\x63\157\157\153\x69\145\x73"] = $_COOKIE; wiiqigwgyuiuksia: if (!(!isset($ywmkwiwkosakssii["\160\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto mqoygcuqwacgycek; } $ywmkwiwkosakssii["\160\x6f\x73\164"] = $_POST; mqoygcuqwacgycek: if (!(!isset($ywmkwiwkosakssii["\147\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto agyycikucwgmysee; } $ywmkwiwkosakssii["\x67\x65\x74"] = $_GET; agyycikucwgmysee: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\x74"]) && is_array($ywmkwiwkosakssii["\147\x65\x74"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\x73\164"]) && is_array($ywmkwiwkosakssii["\x70\157\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\157\x6b\151\x65\x73"]) && is_array($ywmkwiwkosakssii["\143\157\157\x6b\x69\145\163"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\x6b\x69\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto aiukiwqmikscoswm; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\x5f\143\x75\x73\164\x6f\155\151\172\x65" => '']); aiukiwqmikscoswm: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto mcmkqgkwyqoiikcq; } $this->yauwooaeicgosquo("\x44\145\x76\40\x4d\157\144\x65\x20\105\156\141\x62\154\145\x64\x20\x61\156\144\x20\141\154\154\x20\162\x65\x71\165\x65\163\164\x20\151\x73\x20\142\171\160\x61\163\x73\x2e"); return false; mcmkqgkwyqoiikcq: if (!$this->kgkoeoeseyuugaao()) { goto ssyukuseoymackeo; } $this->yauwooaeicgosquo("\x52\157\x62\157\x74\163\56\164\x78\x74\40\157\162\x20\56\x68\164\x61\143\143\145\163\x73\x20\146\151\154\145\40\x69\163\x20\145\x78\143\154\165\x64\x65\144\56"); return false; ssyukuseoymackeo: if (!$this->gymgcceeqssmesiu()) { goto gskacikgkwcuauko; } $this->yauwooaeicgosquo("\120\x48\120\x2c\40\x58\x4d\114\54\x20\x6f\162\x20\x58\x53\114\40\146\151\x6c\x65\x20\x69\163\40\145\170\143\154\165\x64\145\x64\56"); return false; gskacikgkwcuauko: if (!$this->goecwaaykqoaaagg()) { goto yyieomeeqycmikqw; } $this->yauwooaeicgosquo("\101\144\x6d\x69\156\x20\x6f\x72\x20\x41\112\101\x58\40\125\122\114\x20\x69\x73\40\145\x78\143\x6c\165\144\145\144\56"); return false; yyieomeeqycmikqw: if (!$this->sgsscqasgeyeicoe()) { goto kwiuqqwamsimqgme; } $this->yauwooaeicgosquo("\x41\x64\155\x69\x6e\x20\x6f\x72\40\x41\x4a\x41\x58\40\125\x52\x4c\40\151\x73\40\x65\x78\143\x6c\165\x64\x65\144\56"); return false; kwiuqqwamsimqgme: if ($this->gooeyogikcusgwuu()) { goto qmegcmqemmywoqas; } $this->yauwooaeicgosquo("\122\145\161\x75\x65\x73\164\x20\155\x65\164\x68\x6f\144\40\151\x73\40\156\x6f\164\40\141\x6c\x6c\x6f\167\145\x64\56\x20\x50\141\147\x65\x20\143\x61\x6e\156\x6f\164\40\x62\x65\x20\x63\141\x63\150\145\x64\56", ["\x72\x65\161\x75\145\x73\164\x5f\155\x65\x74\150\157\144" => $this->ciyocmkwssocskiy()]); return false; qmegcmqemmywoqas: if ($this->cskwmweqysskwckg()) { goto giooasyeqwaaocea; } $this->lastError = []; return true; giooasyeqwaaocea: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\x63\x65\x73\163"]) { goto uueywyysiicuauem; } $this->yauwooaeicgosquo("\x4e\157\x20\x63\157\x6e\x66\151\147\x20\146\x69\154\x65\x20\146\157\165\x6e\x64", ["\143\x6f\x6e\x66\x69\x67\x5f\160\x61\x74\150" => $uiewakwqscemywuo["\160\x61\164\x68"]]); return false; uueywyysiicuauem: if (!($this->cskwmweqysskwckg("\x71\x75\145\x72\x79\137\x73\164\162\x69\x6e\x67") && !$this->koguieumooaesyww())) { goto seieguyaaiqismgo; } $this->yauwooaeicgosquo("\121\x75\x65\162\171\40\x73\x74\162\151\156\147\x20\x55\122\114\40\151\x73\x20\145\x78\143\x6c\165\x64\x65\x64\56", $_GET); return false; seieguyaaiqismgo: if (!($this->cskwmweqysskwckg("\163\163\154") & !$this->eqwgocqwoyyykwke())) { goto qgyoesyiasqimcoe; } $this->yauwooaeicgosquo("\x53\123\x4c\40\x63\x61\143\150\x65\40\x6e\157\164\x20\x61\160\160\x6c\x69\145\144\x20\x74\x6f\x20\160\x61\147\x65\x2e"); return false; qgyoesyiasqimcoe: if (!($this->cskwmweqysskwckg("\165\x72\x69") && !$this->qweiomkkuikwugks())) { goto kkwqmewaksmokuqy; } $this->yauwooaeicgosquo("\120\x61\x67\145\x20\x69\163\x20\145\x78\143\154\165\x64\145\144\56"); return false; kkwqmewaksmokuqy: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\143\164\x65\x64\137\x63\x6f\x6f\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto gsgkayokisiesciy; } $this->yauwooaeicgosquo("\x45\170\143\154\x75\144\x65\144\x20\143\157\x6f\x6b\151\145\40\146\x6f\x75\x6e\144\x2e", ["\145\x78\x63\154\165\x64\145\x64\x5f\143\x6f\x6f\x6b\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; gsgkayokisiesciy: if (!($this->cskwmweqysskwckg("\x6d\141\156\144\x61\x74\x6f\x72\x79\x5f\143\x6f\x6f\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto ascogkesqmuuaesq; } $this->yauwooaeicgosquo("\x4d\151\163\163\151\x6e\147\x20\x6d\x61\x6e\x64\x61\164\x6f\162\171\x20\143\x6f\x6f\x6b\x69\x65\x3a\x20\160\x61\x67\x65\x20\x6e\x6f\x74\x20\160\162\157\x63\x65\163\x73\145\144\56", ["\155\x69\x73\163\151\x6e\147\137\x63\x6f\157\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; ascogkesqmuuaesq: if (!($this->cskwmweqysskwckg("\165\x73\x65\162\137\141\x67\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto askukaucmocewkgg; } $this->yauwooaeicgosquo("\x55\x73\145\x72\x20\x41\147\x65\156\x74\40\x69\163\40\x65\170\143\154\165\144\x65\x64\56", ["\165\163\145\x72\x5f\x61\x67\x65\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\x55\123\x45\x52\x5f\101\107\105\x4e\x54")]); return false; askukaucmocewkgg: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto kiemqsgcmouqscao; } $this->yauwooaeicgosquo("\x42\x75\146\x66\145\x72\x20\143\x6f\156\164\145\x6e\x74\40\165\x6e\x64\145\162\x20\62\x35\x35\x20\x63\x68\x61\162\141\143\x74\145\x72\163\x2e"); return false; kiemqsgcmouqscao: if (!(http_response_code() !== 200)) { goto wssaaemscmmiomee; } $this->yauwooaeicgosquo("\x50\x61\x67\x65\x20\151\163\40\156\x6f\x74\40\141\40\62\x30\60\40\110\124\x54\x50\x20\x72\145\x73\160\x6f\156\x73\145\x20\141\x6e\144\x20\143\x61\x6e\156\x6f\x74\40\142\145\40\x63\x61\143\150\x65\144\x2e"); return false; wssaaemscmmiomee: if (!($this->cskwmweqysskwckg("\x64\157\156\157\x74\157\160\164\x69\x6d\x69\172\145\x70\141\x67\145") && $this->cowcgqokiosgaqic())) { goto meqmcgmksqiqcoyq; } $this->yauwooaeicgosquo("\104\117\116\x54\x4f\120\x54\111\x4d\x49\x5a\105\104\120\101\107\105\40\x69\x73\x20\x64\145\146\x69\156\x65\144\x2e\40\120\x61\x67\145\x20\143\141\156\x6e\x6f\164\40\x62\145\x20\x63\141\143\150\145\x64\x2e"); return false; meqmcgmksqiqcoyq: if (!($this->cskwmweqysskwckg("\167\160\x5f\x34\60\64") && $this->kmmyuiwaogukwqqi())) { goto euskosgaksmimgug; } $this->yauwooaeicgosquo("\x57\120\40\64\60\64\x20\160\x61\147\145\x20\x69\x73\x20\145\170\x63\154\x75\144\145\x64\56"); return false; euskosgaksmimgug: if (!($this->cskwmweqysskwckg("\163\145\141\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto iusaeoimukymskgs; } $this->yauwooaeicgosquo("\123\x65\x61\x72\143\150\40\x70\141\147\145\40\151\x73\40\x65\170\x63\x6c\165\x64\x65\x64\x2e"); return false; iusaeoimukymskgs: if (!$this->cskwmweqysskwckg("\151\163\x5f\150\x74\155\154")) { goto eaggoasiwogmquwc; } if (!($this->cmaecekuqkwmemms("\x52\105\123\x54\137\x52\x45\x51\x55\x45\x53\x54") || $this->gaiygescoqgyusaa())) { goto asciaakaoygususy; } unset($this->tests["\151\163\x5f\150\164\x6d\154"]); asciaakaoygususy: eaggoasiwogmquwc: if (!($this->cskwmweqysskwckg("\151\x73\137\x68\164\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto meoweqcaaosoomeu; } $this->yauwooaeicgosquo("\116\x6f\x20\143\x6c\157\163\x69\x6e\x67\40\74\57\150\x74\x6d\154\76\40\x77\141\x73\40\x66\x6f\x75\156\x64\56"); return false; meoweqcaaosoomeu: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\162\x5f\x6f\x70\164\151\155\151\172\x61\x74\x69\x6f\x6e\137\141\x6c\154\157\x77\137\x74\157\x5f\x73\164\141\x72\x74\x5f\142\x75\146\x66\145\162\137\160\x72\157\x63\145\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ywmoieqkigsykequ; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto iaousaauoawkqkkg; ywmoieqkigsykequ: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); iaousaauoawkqkkg: return apply_filters("\x70\162\137\157\160\164\151\155\151\172\x61\164\151\157\156\137\x68\x61\x73\137{$ymqmyyeuycgmigyo}\x5f\164\x65\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\x5c\x73\x2a\134\57\134\x73\x2a\150\164\x6d\x6c\x5c\163\52\x3e\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\77\x3a\x2e\53\x2f\x29\77" . $wp_rewrite->feed_base . "\50\77\x3a\x2f\50\77\x3a\x2e\53\x2f\x3f\51\x3f\51\x3f\x24"; return (bool) preg_match("\43\x5e\50{$uckmmkmoeikwsiqg}\51\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\x76\137\155\157\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kkwucaoumyayagcq; } return $this->eecucukcqkqysiau(__FUNCTION__); kkwucaoumyayagcq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto muwyuiikuywigwso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); muwyuiikuywigwso: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\164\163\56\x74\170\x74", "\56\x68\x74\x61\143\143\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto akoiqkoqmmmcieug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); akoiqkoqmmmcieug: akcakssqcqcouwew: } gikaiicgqyueeoco: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cgasgmiiqegqesic; } return $this->eecucukcqkqysiau(__FUNCTION__); cgasgmiiqegqesic: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto eqekaoaioiykuaiw; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto yamoiggaeugmgkku; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yamoiggaeugmgkku: eqekaoaioiykuaiw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoiuwyogucoeaoew; } return $this->eecucukcqkqysiau(__FUNCTION__); qoiuwyogucoeaoew: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qkkqiagwgaoyauki: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\144\x65\170\x2e\x70\150\x70")) { goto oyywywoqaqcykucs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oyywywoqaqcykucs: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\x78\x6d\154" => 1, "\x78\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\x4f\111\x4e\x47\137\101\112\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\123")), ["\x6f\156", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\122\x5f\x50\x4f\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\137\143\x75\163\164\157\155\151\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\x54" => 1, "\x48\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iqeqqwcmaiqakawc; } return $this->eecucukcqkqysiau(__FUNCTION__); iqeqqwcmaiqakawc: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gioqkcywauuckmua: $yccgiaiouekkouay = ["\163" => 1, "\x6c\141\156\147" => 1, "\160\145\x72\x6d\141\x6c\x69\x6e\153\137\x6e\141\155\x65" => 1, "\x6c\160\55\166\x61\x72\151\141\x74\x69\x6f\156\x2d\x69\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto miaiggsoiaekmqwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); miaiggsoiaekmqwy: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\x71\x75\145\162\x79\x5f\x73\x74\x72\x69\x6e\x67\163"); if ($yccgiaiouekkouay) { goto suoymucmyegewkmu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); suoymucmyegewkmu: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqagqomggiacosqm; } return $this->eecucukcqkqysiau(__FUNCTION__); uqagqomggiacosqm: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto mwskgsimqagmkcgq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mwskgsimqagmkcgq: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto mkuigmcgkawyawee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkuigmcgkawyawee: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto kwaqakoogeiacmwi; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; kwaqakoogeiacmwi: agqmoymkiswqswqo: } ouqwmaaskykywyqo: if (empty($eiocugauqgouiuyi)) { goto ccqgkeesikyegcik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); ccqgkeesikyegcik: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aakwscykmyyykoms; } return $this->eecucukcqkqysiau(__FUNCTION__); aakwscykmyyykoms: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto iiuawywwoaeyauge; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iiuawywwoaeyauge: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\x6d\x61\156\x64\141\164\x6f\x72\171\137\143\x6f\x6f\x6b\151\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto wcoqiwuusoeqiqwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); wcoqiwuusoeqiqwi: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto yuoyackaoigyyyso; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); yuoyackaoigyyyso: cwcmwogseemgqgqq: } oqwyemgwoossauyk: if (!empty($yiycakoikkyuokgk)) { goto kcqieuukskyiywss; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kcqieuukskyiywss: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\157\160\164\x69\155\151\x7a\141\164\151\x6f\x6e\x5f\157\x76\x65\x72\x72\151\x64\145\137\x64\x6f\x6e\x74\137\x6f\160\164\x69\x6d\x69\x7a\x65", $this->cmaecekuqkwmemms("\120\122\x5f\x4f\120\x54\111\115\x49\132\101\124\x49\x4f\x4e\137\104\x4f\x4e\x54\x5f\117\x50\124\111\115\111\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\x5f\64\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\x5f\163\x65\x61\x72\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\137\157\160\164\x69\x6d\151\172\141\164\151\157\156\137\x6f\160\164\151\155\x69\x7a\145\137\x73\145\x61\x72\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\163\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wukuisoeoeomgegu; } return $this->eecucukcqkqysiau(__FUNCTION__); wukuisoeoeomgegu: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto gsimeiqkoyqkuecq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsimeiqkoyqkuecq: if (!$this->aceaeommyuooiqge()->get("\155\157\x62\x69\154\145\x5f\x63\x61\x63\x68\145")) { goto gqywcowiigceimaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqywcowiigceimaw: $wayquiskgeuoqamk = "\62\56\x30\134\x20\115\x4d\120\174\62\64\60\170\x33\62\x30\174\x34\60\x30\130\x32\64\60\x7c\x41\x76\x61\156\164\x47\157\x7c\102\x6c\x61\143\x6b\x42\145\162\162\x79\x7c\102\x6c\x61\x7a\x65\162\174\x43\x65\x6c\x6c\x70\x68\157\x6e\145\x7c\104\141\156\x67\145\162\174\104\x6f\103\157\x4d\157\174\105\154\x61\151\x6e\x65\57\63\x2e\60\174\105\165\x64\157\162\141\127\145\x62\x7c\107\x6f\x6f\147\x6c\145\142\x6f\x74\x2d\115\x6f\x62\x69\x6c\x65\x7c\x68\151\x70\x74\x6f\x70\174\111\x45\x4d\157\x62\151\154\145\x7c\x4b\x59\x4f\103\x45\122\x41\57\x57\x58\63\61\60\x4b\174\114\107\x2f\125\x39\x39\60\x7c\115\111\104\x50\x2d\x32\56\174\115\x4d\105\x46\62\60\174\115\x4f\124\x2d\126\174\116\145\164\x46\x72\157\156\x74\x7c\116\x65\167\x74\174\116\151\x6e\164\x65\x6e\144\157\x5c\40\x57\151\151\x7c\x4e\151\x74\x72\157\x7c\116\x6f\153\151\x61\x7c\117\160\145\162\x61\x5c\x20\x4d\151\x6e\x69\174\x50\141\x6c\155\x7c\x50\x6c\x61\171\123\164\141\x74\x69\157\x6e\134\40\120\x6f\162\164\x61\x62\154\x65\x7c\x70\x6f\162\x74\x61\154\155\x6d\x6d\174\120\162\x6f\170\151\156\145\164\x7c\x50\x72\x6f\x78\x69\x4e\145\x74\x7c\x53\x48\x41\122\x50\x2d\124\x51\x2d\107\130\x31\x30\174\x53\110\107\55\151\71\60\60\x7c\123\x6d\141\x6c\x6c\174\123\x6f\x6e\x79\x45\162\x69\143\163\163\157\x6e\x7c\x53\x79\x6d\x62\x69\x61\x6e\x5c\40\x4f\123\174\x53\171\155\142\151\x61\156\117\123\x7c\x54\x53\62\x31\151\x2d\x31\60\x7c\x55\x50\56\x42\162\157\x77\x73\x65\162\x7c\x55\120\56\114\151\156\153\174\x77\145\142\x4f\123\174\x57\151\156\x64\157\167\163\x5c\x20\103\x45\x7c\127\151\x6e\x57\101\120\x7c\x59\141\x68\x6f\157\x53\x65\x65\153\145\x72\x2f\x4d\61\x41\x31\55\122\62\x44\x32\x7c\151\120\x68\157\156\145\x7c\x69\x50\157\x64\174\101\156\x64\x72\x6f\151\x64\x7c\x42\x6c\141\x63\x6b\102\x65\162\162\171\x39\x35\63\x30\x7c\114\x47\x2d\x54\x55\x39\x31\65\134\x20\x4f\142\x69\x67\157\174\114\107\105\x5c\x20\126\130\174\167\145\142\x4f\123\x7c\x4e\x6f\153\x69\x61\65\70\60\x30"; if (!preg_match("\x23\136\56\x2a\x28{$wayquiskgeuoqamk}\51\56\52\x23\x69", $uowwycywwssskuys)) { goto eyuoecmogqwkmomi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eyuoecmogqwkmomi: $wayquiskgeuoqamk = "\167\x33\x63\134\x20\x7c\167\63\143\55\x7c\141\143\x73\x2d\174\141\x6c\141\166\174\141\x6c\143\x61\x7c\141\x6d\157\151\174\x61\165\x64\151\174\141\x76\x61\156\174\142\145\x6e\x71\x7c\142\x69\162\144\174\142\154\141\143\x7c\142\x6c\x61\172\x7c\142\x72\145\167\x7c\143\x65\x6c\x6c\174\x63\154\144\143\x7c\x63\155\144\55\174\144\x61\156\x67\x7c\x64\x6f\143\157\x7c\145\x72\151\x63\174\150\x69\x70\164\174\150\164\143\x5f\174\151\x6e\x6e\x6f\174\x69\160\141\x71\174\x69\160\x6f\144\x7c\x6a\x69\147\x73\x7c\153\x64\x64\151\x7c\x6b\145\x6a\x69\174\x6c\145\x6e\x6f\x7c\154\x67\x2d\x63\174\x6c\147\x2d\144\174\x6c\x67\x2d\147\174\154\x67\145\x2d\x7c\x6c\147\x2f\165\174\x6d\141\x75\x69\174\x6d\141\x78\x6f\x7c\x6d\151\x64\160\x7c\155\x69\164\163\174\155\x6d\145\146\174\155\157\142\x69\x7c\155\157\x74\x2d\174\155\x6f\164\157\x7c\x6d\167\x62\160\x7c\156\x65\x63\55\174\156\145\167\164\x7c\x6e\157\x6b\151\x7c\160\x61\x6c\155\174\x70\x61\x6e\x61\174\160\141\156\x74\174\160\150\151\154\174\x70\154\x61\171\x7c\x70\x6f\162\164\174\160\162\157\170\174\x71\167\x61\x70\x7c\x73\141\x67\145\174\x73\141\x6d\163\174\x73\141\156\x79\174\x73\143\150\x2d\174\x73\x65\143\x2d\x7c\x73\145\156\x64\174\x73\145\162\151\174\x73\147\150\x2d\174\x73\x68\141\x72\x7c\x73\151\145\x2d\174\163\151\145\x6d\x7c\163\x6d\141\154\174\163\x6d\141\x72\174\x73\x6f\x6e\x79\x7c\163\160\150\x2d\174\x73\171\x6d\x62\174\x74\55\x6d\157\x7c\164\x65\x6c\151\x7c\x74\x69\x6d\55\174\164\x6f\x73\x68\x7c\x74\x73\x6d\x2d\174\165\160\x67\x31\x7c\x75\160\163\x69\x7c\x76\x6b\x2d\x76\x7c\x76\157\x64\x61\x7c\167\x61\x70\55\174\x77\x61\x70\x61\x7c\x77\141\x70\x69\174\167\141\x70\160\174\167\141\x70\x72\x7c\167\145\142\143\x7c\167\x69\x6e\167\x7c\167\x69\x6e\x77\x7c\x78\x64\141\134\x20\174\170\144\141\55"; if (!preg_match("\43\136\x28{$wayquiskgeuoqamk}\x29\x2e\52\43\x69", $uowwycywwssskuys)) { goto quewwumogiocouii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); quewwumogiocouii: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto geugsymgsiuuqccg; } return $this->eecucukcqkqysiau(__FUNCTION__); geugsymgsiuuqccg: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto mgwgiesscqoaqcau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mgwgiesscqoaqcau: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\137\x72\145\152\145\x63\164\137\x75\141"); if ($mqsuiayuwmwqaqwm) { goto ioacywuoyuskqmwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ioacywuoyuskqmwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto bgoygegmogcmeaou; } return $this->eecucukcqkqysiau(__FUNCTION__); bgoygegmogcmeaou: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\162\145\152\145\143\x74\x5f\x75\x72\151"); if ($escsaeeosigewsme) { goto awgaewwsskasueke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgaewwsskasueke: $yciaosuiyeieceug = !preg_match("\43\136\x28{$escsaeeosigewsme}\51\44\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\125\x53\x45\x52\x5f\101\107\x45\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cgmcwkmmcmmkiooc; } return $this->eecucukcqkqysiau(__FUNCTION__); cgmcwkmmcmmkiooc: $yygmoeguaqyumuui = [ "\110\124\x54\x50\137\103\106\x5f\103\117\x4e\x4e\105\103\124\111\116\x47\137\111\x50", "\110\x54\x54\120\137\103\114\111\x45\116\x54\137\x49\120", "\110\124\124\x50\x5f\x58\x5f\x46\x4f\122\x57\x41\x52\x44\105\104\137\x46\117\122", "\110\x54\124\120\137\130\137\106\x4f\122\127\x41\122\x44\x45\x44", "\x48\x54\x54\x50\x5f\130\137\103\114\x55\123\x54\105\122\137\103\x4c\x49\x45\116\124\137\x49\x50", "\110\x54\124\120\137\x58\137\x52\x45\x41\x4c\137\111\120", "\x48\x54\x54\120\137\106\x4f\122\127\101\x52\104\105\104\x5f\106\117\122", "\110\x54\124\120\137\x46\x4f\122\127\101\122\x44\105\104", "\122\x45\x4d\117\x54\105\x5f\x41\x44\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto uykwmucgoywoesui; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto eygqeoiskweuiuqi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); eygqeoiskweuiuqi: uykwmucgoywoesui: wwccoougkywoaoui: } iamooqskosymqsmw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\x30\56\x30\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iisieuaeyiqwckou; } return $this->eecucukcqkqysiau(__FUNCTION__); iisieuaeyiqwckou: $yywgiquyoymymqwk = [ "\62\x30\70\56\x37\60\56\62\x34\x37\56\x31\x35\x37" => '', "\x31\x37\x32\x2e\62\x35\x35\x2e\x34\x38\x2e\x31\x33\60" => '', "\61\67\x32\56\62\x35\x35\56\x34\70\56\61\x33\x31" => '', "\x31\x37\x32\x2e\x32\x35\65\56\x34\70\56\x31\x33\62" => '', "\x31\67\x32\56\x32\65\x35\56\x34\x38\56\x31\63\63" => '', "\x31\67\62\x2e\62\65\x35\56\x34\x38\x2e\x31\x33\x34" => '', "\61\x37\x32\56\x32\x35\x35\56\64\70\x2e\x31\63\x35" => '', "\x31\67\62\56\x32\x35\x35\x2e\x34\70\x2e\x31\63\x36" => '', "\61\x37\x32\x2e\62\65\x35\x2e\64\70\56\61\63\67" => '', "\61\67\62\x2e\62\65\x35\x2e\64\x38\x2e\x31\x33\x38" => '', "\61\67\62\56\62\65\x35\56\x34\x38\56\61\x33\x39" => '', "\x31\x37\62\56\x32\65\65\56\x34\x38\56\x31\x34\60" => '', "\x31\x37\62\x2e\62\65\65\x2e\x34\70\56\61\x34\61" => '', "\x31\x37\x32\56\62\x35\x35\x2e\64\70\x2e\61\64\62" => '', "\61\x37\62\56\x32\65\65\x2e\64\x38\x2e\x31\64\63" => '', "\x31\x37\x32\x2e\x32\65\x35\x2e\64\70\x2e\x31\x34\64" => '', "\x31\67\62\x2e\x32\65\65\x2e\x34\x38\56\61\64\65" => '', "\x31\67\62\x2e\62\65\65\56\x34\x38\56\x31\x34\x36" => '', "\61\x37\x32\x2e\x32\65\65\x2e\x34\x38\56\61\64\67" => '', "\65\62\x2e\x32\x32\x39\x2e\61\x32\62\56\62\x34\60" => '', "\x31\x30\64\56\x32\x31\x34\56\67\62\56\x31\x30\x31" => '', "\61\63\56\x36\66\56\67\56\x31\61" => '', "\61\x33\x2e\x38\65\x2e\62\64\x2e\x38\63" => '', "\x31\63\x2e\x38\65\x2e\x32\x34\x2e\71\x30" => '', "\x31\63\56\x38\x35\56\70\x32\x2e\x32\66" => '', "\x34\60\56\x37\64\x2e\62\64\x32\x2e\62\65\x33" => '', "\64\x30\x2e\x37\64\56\62\64\63\x2e\x31\x33" => '', "\x34\60\x2e\67\64\56\x32\64\x33\x2e\x31\x37\66" => '', "\61\60\x34\56\x32\x31\64\56\x34\x38\56\62\64\67" => '', "\61\65\67\56\x35\x35\x2e\61\70\x39\56\x31\x38\71" => '', "\x31\60\64\x2e\62\x31\x34\56\x31\61\x30\56\x31\x33\65" => '', "\67\60\x2e\63\67\56\x38\x33\x2e\x32\x34\x30" => '', "\66\65\56\x35\x32\56\x33\x36\56\x32\65\x30" => '', "\x31\63\56\x37\x38\56\62\61\x36\56\x35\66" => '', "\x35\62\56\x31\x36\x32\56\62\x31\62\x2e\x31\x36\63" => '', "\x32\63\x2e\71\x36\56\x33\x34\56\x31\60\x35" => '', "\x36\x35\56\65\62\x2e\61\x31\63\56\x32\x33\66" => '', "\61\x37\x32\56\62\65\65\x2e\66\x31\56\63\64" => '', "\x31\x37\x32\56\62\65\x35\56\66\x31\x2e\x33\x35" => '', "\x31\x37\x32\56\62\x35\65\x2e\x36\61\56\x33\x36" => '', "\61\67\x32\56\62\65\65\x2e\x36\61\56\63\67" => '', "\x31\x37\62\x2e\62\x35\65\56\66\x31\56\x33\x38" => '', "\61\67\62\56\x32\65\65\56\66\61\56\63\71" => '', "\61\x37\62\x2e\62\x35\x35\x2e\x36\61\x2e\64\60" => '', "\x35\x32\56\62\63\67\56\x32\63\65\x2e\x31\x38\x35" => '', "\65\62\x2e\x32\63\x37\x2e\x32\65\60\56\67\x33" => '', "\x35\62\x2e\62\63\67\56\62\x33\x36\x2e\x31\x34\65" => '', "\61\x30\64\56\64\x31\56\x32\56\61\71" => '', "\61\71\61\x2e\62\63\65\56\71\x38\56\61\x36\x34" => '', "\x31\71\61\x2e\x32\x33\x35\56\71\x39\56\x32\x32\x31" => '', "\x31\x39\x31\x2e\62\63\62\x2e\x31\x39\x34\x2e\65\61" => '', "\x31\60\x34\x2e\62\x31\x31\x2e\x31\x34\x33\56\70" => '', "\61\x30\x34\x2e\62\x31\61\x2e\x31\66\65\56\65\63" => '', "\x35\x32\x2e\x31\x37\x32\x2e\61\64\56\x38\x37" => '', "\x34\60\56\x38\x33\56\x38\x39\x2e\x32\61\64" => '', "\65\x32\56\61\67\65\56\x35\x37\56\x38\x31" => '', "\62\60\56\61\70\70\56\66\63\56\x31\x35\61" => '', "\62\60\x2e\65\x32\56\63\66\56\64\x39" => '', "\65\62\x2e\62\64\66\x2e\x31\x36\65\x2e\x31\x35\63" => '', "\x35\x31\56\x31\x34\64\56\61\60\x32\56\62\63\x33" => '', "\x31\x33\56\x37\66\56\71\x37\x2e\x32\62\x34" => '', "\61\x30\x32\x2e\61\x33\x33\56\x31\x36\x39\56\66\66" => '', "\x35\x32\x2e\62\x33\61\56\x31\71\x39\x2e\61\x37\x30" => '', "\x31\63\56\65\x33\56\61\x36\x32\56\67" => '', "\64\x30\x2e\x31\62\x33\x2e\62\61\x38\56\x39\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto oskwkeaemiqcaqkc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oskwkeaemiqcaqkc: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\x55\123\x45\x52\137\x41\x47\105\x4e\x54"); if ($uowwycywwssskuys) { goto kiqmcymowosckmii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kiqmcymowosckmii: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\151\156\147\144\x6f\155\120\141\x67\x65\123\160\x65\145\144\x7c\104\141\162\145\x42\x6f\x6f\163\x74\x7c\x47\x6f\157\x67\x6c\x65\x7c\120\124\123\x54\x7c\103\150\162\157\x6d\145\x2d\x4c\x69\147\150\164\150\x6f\x75\x73\145\x7c\x57\120\x20\122\x6f\x63\153\x65\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\125\105\x53\124\137\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto iaygaasesyymwgss; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); iaygaasesyymwgss: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto iwosouqsesoqcska; } return ''; iwosouqsesoqcska: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto iacwyogogoccmwsg; } return $magawcseesgowoeo; iacwyogogoccmwsg: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto wqmwcuggcisqieao; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); wqmwcuggcisqieao: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\105\x53\124\x5f\x4d\105\124\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto issgmmkcgesyeoas; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\145\137\151\x67\156\157\x72\145\x64\137\160\x61\x72\x61\155\x65\164\x65\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto qsyqcokomswykyso; } ksort($eyagkkkqkwcuygso); qsyqcokomswykyso: issgmmkcgesyeoas: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; yueosioyegouuwqo: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\56" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto yeiicwscguyokwyu; } if (strpos($euueacigmgoqkimu, "\56\x2e\57") === 0) { goto wmcucyuieqgqisis; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto ywqouwqomiqwoquu; } if (strpos($euueacigmgoqkimu, "\57\x2e\57") === 0) { goto yywwaaiicukuwcao; } if ("\57\x2e" === $euueacigmgoqkimu) { goto aacaoywsaqscgyua; } if (strpos($euueacigmgoqkimu, "\57\56\56\x2f") === 0) { goto kuimgwmkcgcoecko; } if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { goto swkeiggkawwgewuw; } if ("\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto ccyiggckemwgooco; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto giuoqsumkimmuaya; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto mssaawaiaimogowg; giuoqsumkimmuaya: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); mssaawaiaimogowg: goto umamqqwcoewcigew; ccyiggckemwgooco: $euueacigmgoqkimu = ''; umamqqwcoewcigew: goto gaiaucesmcqgqwac; swkeiggkawwgewuw: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); gaiaucesmcqgqwac: goto oaskqsoyesmmeaew; kuimgwmkcgcoecko: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); oaskqsoyesmmeaew: goto miigqygoawqmkkqm; aacaoywsaqscgyua: $euueacigmgoqkimu = "\x2f"; miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); eykiuqsamowqykam: goto qcwkymcgqacaaywc; ywqouwqomiqwoquu: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); qcwkymcgqacaaywc: goto qwsmiaegmcwuskwi; wmcucyuieqgqisis: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); qwsmiaegmcwuskwi: goto yueosioyegouuwqo; yeiicwscguyokwyu: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto yyyyawaqcowsgqcs; } yyyyawaqcowsgqcs: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto usmagcaocwiugqum; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); usmagcaocwiugqum: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto sikmqkecsiyciaei; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); sikmqkecsiyciaei: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\x73\x73\x61\147\x65" => $uamcoiueqaamsqma, "\x63\157\x6e\164\x65\170\x74" => $icwicymcioeyeyek]; } }
