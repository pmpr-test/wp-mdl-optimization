<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7b77183e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\151" => 1, "\x73\x73\x6c" => 0, "\167\160\137\64\x30\64" => 1, "\x73\145\x61\162\x63\x68" => 1, "\155\157\142\x69\154\145" => 1, "\x69\163\x5f\150\x74\x6d\154" => 1, "\161\x75\145\x72\x79\x5f\163\x74\x72\x69\x6e\x67" => 1, "\144\x6f\x6e\x6f\x74\x63\141\x63\150\145\160\141\x67\145" => 1, "\162\x65\x6a\x65\x63\x74\x65\144\x5f\143\157\157\153\151\x65" => 1, "\x6d\141\156\x64\x61\x74\157\162\x79\x5f\x63\x6f\x6f\x6b\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\x73\164\x73"])) { goto agyycikucwgmysee; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\x73\x74\x73"]); agyycikucwgmysee: if (!(!isset($ywmkwiwkosakssii["\143\157\x6f\x6b\x69\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto aiukiwqmikscoswm; } $ywmkwiwkosakssii["\x63\157\157\153\x69\145\x73"] = $_COOKIE; aiukiwqmikscoswm: if (!(!isset($ywmkwiwkosakssii["\160\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto mcmkqgkwyqoiikcq; } $ywmkwiwkosakssii["\160\157\x73\x74"] = $_POST; mcmkqgkwyqoiikcq: if (!(!isset($ywmkwiwkosakssii["\x67\145\164"]) && !empty($_GET) && is_array($_GET))) { goto ssyukuseoymackeo; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; ssyukuseoymackeo: $this->get = !empty($ywmkwiwkosakssii["\147\145\x74"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\163\164"]) && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\157\153\x69\145\163"]) && is_array($ywmkwiwkosakssii["\x63\157\157\x6b\151\145\163"]) ? $ywmkwiwkosakssii["\x63\157\x6f\153\x69\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto gskacikgkwcuauko; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\143\165\163\164\x6f\155\x69\x7a\x65" => '']); gskacikgkwcuauko: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto yyieomeeqycmikqw; } $this->yauwooaeicgosquo("\104\x65\166\x20\115\157\x64\x65\40\105\x6e\x61\142\154\x65\144\x20\x61\156\144\40\x61\x6c\x6c\x20\x72\145\x71\x75\145\163\x74\x20\x69\x73\40\142\x79\160\141\163\163\x2e"); return false; yyieomeeqycmikqw: if (!$this->kgkoeoeseyuugaao()) { goto kwiuqqwamsimqgme; } $this->yauwooaeicgosquo("\x52\157\x62\x6f\164\x73\56\x74\x78\x74\40\x6f\x72\40\x2e\x68\x74\x61\x63\143\145\163\163\40\x66\151\x6c\145\x20\x69\x73\40\145\170\x63\x6c\165\144\145\144\56"); return false; kwiuqqwamsimqgme: if (!$this->gymgcceeqssmesiu()) { goto qmegcmqemmywoqas; } $this->yauwooaeicgosquo("\x50\x48\x50\54\40\x58\x4d\x4c\x2c\x20\157\x72\40\x58\123\x4c\40\x66\151\x6c\145\40\x69\163\x20\145\170\x63\x6c\165\x64\145\144\x2e"); return false; qmegcmqemmywoqas: if (!$this->goecwaaykqoaaagg()) { goto giooasyeqwaaocea; } $this->yauwooaeicgosquo("\101\144\155\151\x6e\40\157\162\40\101\112\x41\130\x20\125\x52\114\40\x69\163\40\145\x78\x63\154\165\144\145\x64\x2e"); return false; giooasyeqwaaocea: if (!$this->sgsscqasgeyeicoe()) { goto uueywyysiicuauem; } $this->yauwooaeicgosquo("\x41\144\155\151\x6e\x20\157\x72\40\x41\x4a\x41\130\40\x55\x52\x4c\40\151\163\40\145\x78\143\154\x75\144\x65\144\x2e"); return false; uueywyysiicuauem: if ($this->gooeyogikcusgwuu()) { goto seieguyaaiqismgo; } $this->yauwooaeicgosquo("\122\x65\x71\165\145\163\164\x20\x6d\145\x74\150\157\144\x20\x69\x73\x20\156\157\164\x20\141\154\154\157\167\145\x64\x2e\40\x50\x61\x67\x65\x20\143\141\x6e\156\x6f\164\40\142\145\40\x63\x61\x63\x68\145\x64\56", ["\162\x65\161\165\145\163\x74\x5f\155\145\164\x68\157\144" => $this->ciyocmkwssocskiy()]); return false; seieguyaaiqismgo: if ($this->cskwmweqysskwckg()) { goto qgyoesyiasqimcoe; } $this->lastError = []; return true; qgyoesyiasqimcoe: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\143\x63\x65\x73\163"]) { goto kkwqmewaksmokuqy; } $this->yauwooaeicgosquo("\x4e\157\40\x63\157\156\146\x69\x67\x20\x66\151\154\x65\x20\146\157\165\156\144", ["\x63\x6f\x6e\x66\x69\147\x5f\x70\141\164\x68" => $uiewakwqscemywuo["\x70\x61\x74\x68"]]); return false; kkwqmewaksmokuqy: if (!($this->cskwmweqysskwckg("\161\165\x65\x72\x79\x5f\x73\164\162\x69\x6e\147") && !$this->koguieumooaesyww())) { goto gsgkayokisiesciy; } $this->yauwooaeicgosquo("\121\x75\145\x72\x79\x20\x73\164\162\151\156\147\x20\125\122\x4c\x20\x69\163\x20\x65\170\143\154\165\x64\x65\144\56", $_GET); return false; gsgkayokisiesciy: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto ascogkesqmuuaesq; } $this->yauwooaeicgosquo("\x53\x53\x4c\40\143\141\x63\x68\145\40\156\x6f\x74\x20\141\x70\x70\x6c\x69\145\x64\40\164\x6f\x20\x70\141\x67\145\56"); return false; ascogkesqmuuaesq: if (!($this->cskwmweqysskwckg("\165\x72\151") && !$this->qweiomkkuikwugks())) { goto askukaucmocewkgg; } $this->yauwooaeicgosquo("\x50\x61\x67\x65\40\x69\163\40\x65\170\143\x6c\x75\x64\x65\144\56"); return false; askukaucmocewkgg: if (!($this->cskwmweqysskwckg("\x72\145\152\x65\143\164\145\x64\x5f\x63\157\x6f\x6b\151\x65") && $this->cokqaygwwygweuyk())) { goto kiemqsgcmouqscao; } $this->yauwooaeicgosquo("\x45\170\x63\154\165\x64\x65\x64\40\143\157\157\x6b\x69\145\40\146\x6f\165\156\x64\56", ["\x65\170\x63\154\x75\144\x65\x64\x5f\143\157\157\153\x69\x65\x73" => $this->cokqaygwwygweuyk()]); return false; kiemqsgcmouqscao: if (!($this->cskwmweqysskwckg("\x6d\x61\x6e\144\x61\164\157\162\x79\x5f\143\x6f\157\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto wssaaemscmmiomee; } $this->yauwooaeicgosquo("\115\151\x73\163\151\x6e\x67\40\x6d\141\x6e\144\141\x74\x6f\x72\x79\x20\143\157\x6f\x6b\x69\x65\x3a\x20\160\141\147\145\40\x6e\x6f\164\40\160\x72\x6f\x63\145\163\163\145\144\x2e", ["\x6d\151\163\x73\151\x6e\147\x5f\x63\157\157\x6b\x69\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; wssaaemscmmiomee: if (!($this->cskwmweqysskwckg("\165\163\x65\162\137\x61\147\x65\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto meqmcgmksqiqcoyq; } $this->yauwooaeicgosquo("\125\x73\145\162\40\101\x67\x65\x6e\164\x20\x69\163\40\145\170\143\x6c\x75\144\x65\144\x2e", ["\165\x73\145\x72\137\141\147\x65\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\137\x55\x53\105\122\x5f\101\x47\x45\116\124")]); return false; meqmcgmksqiqcoyq: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto euskosgaksmimgug; } $this->yauwooaeicgosquo("\102\x75\146\146\145\162\x20\x63\x6f\x6e\164\x65\x6e\x74\40\x75\x6e\144\145\x72\40\62\x35\x35\x20\143\x68\x61\162\141\x63\x74\x65\x72\163\x2e"); return false; euskosgaksmimgug: if (!(http_response_code() !== 200)) { goto iusaeoimukymskgs; } $this->yauwooaeicgosquo("\120\x61\x67\x65\40\151\163\40\x6e\157\x74\40\141\40\62\60\x30\x20\x48\x54\x54\120\40\x72\145\x73\160\x6f\156\163\x65\x20\141\x6e\x64\x20\143\141\x6e\156\x6f\x74\40\142\x65\40\x63\141\x63\150\x65\x64\x2e"); return false; iusaeoimukymskgs: if (!($this->cskwmweqysskwckg("\x64\x6f\156\157\164\x6f\160\x74\151\x6d\151\172\145\160\141\x67\145") && $this->cowcgqokiosgaqic())) { goto asciaakaoygususy; } $this->yauwooaeicgosquo("\x44\x4f\116\124\x4f\120\x54\111\x4d\x49\132\105\x44\x50\101\107\x45\40\x69\x73\40\x64\145\146\151\x6e\x65\144\56\x20\x50\x61\x67\145\x20\x63\141\x6e\156\x6f\164\x20\142\x65\x20\x63\141\x63\x68\145\x64\x2e"); return false; asciaakaoygususy: if (!($this->cskwmweqysskwckg("\167\160\x5f\x34\60\64") && $this->kmmyuiwaogukwqqi())) { goto eaggoasiwogmquwc; } $this->yauwooaeicgosquo("\x57\x50\x20\x34\60\64\x20\160\141\x67\x65\x20\x69\x73\x20\x65\170\x63\154\x75\144\x65\144\x2e"); return false; eaggoasiwogmquwc: if (!($this->cskwmweqysskwckg("\x73\145\141\162\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto meoweqcaaosoomeu; } $this->yauwooaeicgosquo("\123\145\x61\162\x63\150\40\160\141\x67\x65\x20\x69\x73\40\x65\170\143\x6c\x75\144\x65\144\56"); return false; meoweqcaaosoomeu: if (!$this->cskwmweqysskwckg("\151\163\x5f\x68\164\155\x6c")) { goto iaousaauoawkqkkg; } if (!($this->cmaecekuqkwmemms("\122\x45\123\124\137\122\105\x51\125\x45\123\x54") || $this->gaiygescoqgyusaa())) { goto ywmoieqkigsykequ; } unset($this->tests["\x69\163\x5f\150\x74\155\x6c"]); ywmoieqkigsykequ: iaousaauoawkqkkg: if (!($this->cskwmweqysskwckg("\x69\163\137\150\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto kkwucaoumyayagcq; } $this->yauwooaeicgosquo("\x4e\x6f\x20\143\x6c\x6f\163\151\x6e\x67\x20\74\57\150\x74\155\154\x3e\x20\x77\x61\163\40\146\157\165\x6e\144\x2e"); return false; kkwucaoumyayagcq: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\162\137\157\x70\x74\151\155\151\x7a\141\x74\151\157\156\137\141\x6c\x6c\157\167\x5f\164\157\x5f\x73\x74\141\x72\x74\137\142\x75\146\146\x65\162\x5f\160\162\x6f\143\x65\x73\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto muwyuiikuywigwso; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto gikaiicgqyueeoco; muwyuiikuywigwso: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); gikaiicgqyueeoco: return apply_filters("\160\x72\x5f\x6f\x70\x74\151\x6d\151\172\x61\x74\x69\157\156\137\x68\141\163\137{$ymqmyyeuycgmigyo}\x5f\164\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\163\52\134\57\134\x73\52\150\164\155\x6c\x5c\x73\52\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\77\72\x2e\x2b\x2f\x29\77" . $wp_rewrite->feed_base . "\x28\x3f\x3a\57\50\x3f\x3a\56\53\x2f\x3f\x29\x3f\x29\77\x24"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\51\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\145\166\x5f\155\157\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto akcakssqcqcouwew; } return $this->eecucukcqkqysiau(__FUNCTION__); akcakssqcqcouwew: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto akoiqkoqmmmcieug; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); akoiqkoqmmmcieug: $ucasskoyoewwmmii = ["\162\x6f\142\157\164\x73\x2e\x74\170\164", "\x2e\150\164\141\143\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto eqekaoaioiykuaiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eqekaoaioiykuaiw: yamoiggaeugmgkku: } cgasgmiiqegqesic: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoiuwyogucoeaoew; } return $this->eecucukcqkqysiau(__FUNCTION__); qoiuwyogucoeaoew: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto oyywywoqaqcykucs; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qkkqiagwgaoyauki: oyywywoqaqcykucs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iqeqqwcmaiqakawc; } return $this->eecucukcqkqysiau(__FUNCTION__); iqeqqwcmaiqakawc: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gioqkcywauuckmua: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\x64\x65\170\56\160\x68\x70")) { goto miaiggsoiaekmqwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); miaiggsoiaekmqwy: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\160" => 1, "\x78\155\154" => 1, "\x78\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\116\107\x5f\101\112\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x53")), ["\157\x6e", "\61"]) || "\x34\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\105\x52\x5f\x50\x4f\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\143\165\163\164\157\155\x69\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\110\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto suoymucmyegewkmu; } return $this->eecucukcqkqysiau(__FUNCTION__); suoymucmyegewkmu: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto uqagqomggiacosqm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uqagqomggiacosqm: $yccgiaiouekkouay = ["\x73" => 1, "\154\141\x6e\x67" => 1, "\x70\145\x72\x6d\x61\x6c\151\x6e\153\137\156\x61\x6d\145" => 1, "\x6c\x70\x2d\166\141\x72\151\x61\164\151\x6f\156\x2d\151\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto mwskgsimqagmkcgq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mwskgsimqagmkcgq: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\137\161\165\x65\162\x79\x5f\x73\164\x72\x69\x6e\x67\163"); if ($yccgiaiouekkouay) { goto mkuigmcgkawyawee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkuigmcgkawyawee: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ouqwmaaskykywyqo; } return $this->eecucukcqkqysiau(__FUNCTION__); ouqwmaaskykywyqo: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto agqmoymkiswqswqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); agqmoymkiswqswqo: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kwaqakoogeiacmwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwaqakoogeiacmwi: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto iiuawywwoaeyauge; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; iiuawywwoaeyauge: aakwscykmyyykoms: } ccqgkeesikyegcik: if (empty($eiocugauqgouiuyi)) { goto wcoqiwuusoeqiqwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wcoqiwuusoeqiqwi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqwyemgwoossauyk; } return $this->eecucukcqkqysiau(__FUNCTION__); oqwyemgwoossauyk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto cwcmwogseemgqgqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cwcmwogseemgqgqq: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\137\155\141\156\x64\x61\x74\x6f\162\171\137\x63\157\x6f\153\x69\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto yuoyackaoigyyyso; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); yuoyackaoigyyyso: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto gsimeiqkoyqkuecq; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); gsimeiqkoyqkuecq: wukuisoeoeomgegu: } kcqieuukskyiywss: if (!empty($yiycakoikkyuokgk)) { goto gqywcowiigceimaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqywcowiigceimaw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\137\157\160\x74\151\155\151\172\141\164\151\157\156\x5f\x6f\166\x65\162\162\x69\x64\145\137\144\x6f\x6e\164\137\x6f\x70\x74\x69\155\151\x7a\145", $this->cmaecekuqkwmemms("\x50\x52\137\117\x50\x54\x49\x4d\111\x5a\101\x54\111\117\x4e\137\104\117\116\124\137\x4f\120\x54\111\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\137\x34\60\64") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\163\137\163\x65\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\157\x70\164\x69\155\151\x7a\141\x74\151\x6f\x6e\x5f\x6f\x70\164\151\155\x69\x7a\x65\137\x73\x65\x61\x72\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\137\163\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyuoecmogqwkmomi; } return $this->eecucukcqkqysiau(__FUNCTION__); eyuoecmogqwkmomi: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto quewwumogiocouii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); quewwumogiocouii: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\x62\x69\154\x65\x5f\x63\x61\x63\x68\145")) { goto geugsymgsiuuqccg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); geugsymgsiuuqccg: $wayquiskgeuoqamk = "\x32\x2e\60\x5c\40\115\x4d\120\174\x32\64\60\x78\63\62\x30\x7c\x34\x30\60\x58\62\64\60\174\101\x76\x61\156\164\x47\157\x7c\x42\154\141\x63\153\102\x65\162\162\171\174\x42\154\141\x7a\x65\162\174\x43\145\154\x6c\160\150\x6f\x6e\x65\x7c\x44\x61\156\147\145\162\174\x44\x6f\x43\157\x4d\157\174\105\x6c\x61\151\156\145\57\x33\56\x30\x7c\x45\165\x64\x6f\x72\141\127\145\142\x7c\107\157\157\147\x6c\145\142\157\164\55\x4d\157\x62\151\x6c\x65\x7c\150\151\x70\x74\157\x70\174\111\x45\115\x6f\142\x69\x6c\145\174\113\131\117\103\105\122\x41\x2f\x57\x58\63\61\x30\x4b\174\x4c\x47\57\x55\71\71\x30\174\115\x49\104\120\x2d\62\56\x7c\115\115\105\x46\x32\60\174\x4d\117\x54\x2d\x56\x7c\x4e\x65\164\x46\162\157\156\x74\174\x4e\145\167\x74\174\x4e\x69\x6e\x74\x65\156\144\157\x5c\x20\127\151\151\174\116\151\x74\x72\x6f\x7c\116\157\153\151\141\174\x4f\x70\x65\x72\x61\x5c\40\x4d\x69\156\x69\174\120\x61\x6c\155\x7c\120\x6c\141\171\123\x74\141\164\151\157\x6e\x5c\40\x50\157\x72\164\x61\142\x6c\x65\174\x70\x6f\x72\x74\x61\154\x6d\x6d\155\x7c\x50\x72\x6f\x78\151\x6e\x65\x74\174\x50\162\x6f\x78\151\116\x65\164\x7c\123\x48\101\x52\x50\55\124\121\x2d\107\130\x31\60\174\123\x48\x47\55\x69\x39\60\x30\174\x53\155\141\x6c\154\x7c\123\x6f\156\171\105\x72\151\143\163\x73\157\156\174\123\x79\x6d\x62\151\141\x6e\x5c\x20\117\123\x7c\123\171\x6d\142\x69\x61\x6e\x4f\123\174\124\123\x32\x31\x69\x2d\x31\x30\174\x55\120\x2e\102\162\157\167\163\145\162\174\x55\x50\56\114\x69\156\153\174\167\145\142\x4f\123\174\x57\x69\156\144\157\x77\163\134\x20\x43\105\174\x57\x69\156\x57\101\120\x7c\x59\141\150\x6f\x6f\x53\145\145\x6b\145\162\57\115\61\101\x31\55\x52\62\x44\x32\x7c\151\120\x68\157\x6e\x65\x7c\151\x50\157\x64\x7c\101\156\x64\162\157\151\144\x7c\102\154\141\x63\153\x42\145\x72\162\x79\71\x35\63\x30\174\114\x47\55\x54\125\71\x31\65\x5c\x20\x4f\x62\x69\x67\x6f\x7c\114\107\x45\x5c\40\x56\x58\x7c\167\x65\x62\117\x53\174\x4e\x6f\153\151\x61\65\x38\x30\60"; if (!preg_match("\43\136\56\52\x28{$wayquiskgeuoqamk}\x29\x2e\52\43\x69", $uowwycywwssskuys)) { goto mgwgiesscqoaqcau; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mgwgiesscqoaqcau: $wayquiskgeuoqamk = "\x77\63\143\x5c\40\174\x77\63\143\55\174\141\x63\163\x2d\174\141\x6c\141\x76\174\x61\154\143\141\x7c\x61\x6d\x6f\x69\174\x61\165\144\151\x7c\x61\x76\141\x6e\x7c\x62\x65\x6e\x71\x7c\142\x69\162\x64\x7c\x62\154\x61\x63\174\142\154\141\172\x7c\142\x72\x65\x77\x7c\x63\x65\154\x6c\x7c\x63\154\x64\x63\174\x63\155\144\x2d\x7c\144\x61\156\x67\x7c\x64\157\143\x6f\x7c\145\x72\x69\143\x7c\x68\151\x70\x74\x7c\150\x74\x63\137\174\x69\156\x6e\157\174\151\160\x61\161\174\151\160\157\144\x7c\152\151\147\x73\x7c\153\144\x64\x69\174\x6b\145\152\151\174\154\145\156\x6f\174\x6c\x67\x2d\143\x7c\154\147\x2d\x64\174\154\147\55\x67\174\x6c\147\x65\55\x7c\154\x67\57\x75\174\155\141\165\151\x7c\x6d\141\x78\157\x7c\x6d\x69\x64\160\x7c\x6d\151\164\x73\174\x6d\155\145\x66\174\155\157\x62\x69\174\x6d\x6f\x74\55\x7c\155\x6f\164\x6f\174\155\167\142\160\x7c\x6e\x65\x63\x2d\174\x6e\x65\167\x74\174\x6e\157\x6b\151\x7c\160\141\154\155\x7c\160\141\x6e\x61\174\x70\141\x6e\164\174\x70\150\151\x6c\x7c\160\x6c\x61\171\x7c\160\157\x72\164\x7c\x70\162\x6f\170\174\x71\167\141\160\174\x73\x61\x67\x65\x7c\x73\141\x6d\x73\x7c\163\x61\x6e\171\174\x73\143\x68\55\174\x73\145\143\55\x7c\x73\145\156\144\174\x73\145\162\151\x7c\x73\x67\x68\x2d\x7c\x73\x68\141\x72\x7c\163\x69\145\55\x7c\163\x69\x65\x6d\x7c\163\x6d\x61\154\x7c\x73\x6d\141\x72\x7c\163\x6f\x6e\x79\x7c\163\x70\150\55\174\163\171\x6d\x62\x7c\x74\x2d\x6d\157\x7c\x74\x65\154\x69\174\x74\151\155\55\174\x74\157\163\x68\x7c\164\x73\155\55\174\165\x70\x67\61\174\165\160\163\151\x7c\166\x6b\55\x76\174\x76\157\x64\x61\174\167\x61\x70\55\174\167\x61\160\141\174\167\141\160\x69\174\x77\141\160\x70\x7c\167\x61\160\162\x7c\167\x65\x62\x63\x7c\x77\x69\156\x77\174\167\x69\156\167\x7c\170\144\141\x5c\40\174\x78\x64\141\55"; if (!preg_match("\x23\x5e\x28{$wayquiskgeuoqamk}\51\x2e\x2a\x23\151", $uowwycywwssskuys)) { goto ioacywuoyuskqmwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ioacywuoyuskqmwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto bgoygegmogcmeaou; } return $this->eecucukcqkqysiau(__FUNCTION__); bgoygegmogcmeaou: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto awgaewwsskasueke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgaewwsskasueke: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\x5f\x72\145\152\145\143\x74\x5f\165\x61"); if ($mqsuiayuwmwqaqwm) { goto cgmcwkmmcmmkiooc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cgmcwkmmcmmkiooc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iamooqskosymqsmw; } return $this->eecucukcqkqysiau(__FUNCTION__); iamooqskosymqsmw: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\x5f\162\145\x6a\x65\x63\164\x5f\x75\162\x69"); if ($escsaeeosigewsme) { goto wwccoougkywoaoui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wwccoougkywoaoui: $yciaosuiyeieceug = !preg_match("\43\x5e\50{$escsaeeosigewsme}\51\44\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\125\x53\105\122\137\x41\107\105\x4e\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eygqeoiskweuiuqi; } return $this->eecucukcqkqysiau(__FUNCTION__); eygqeoiskweuiuqi: $yygmoeguaqyumuui = [ "\110\124\124\120\x5f\x43\106\x5f\x43\117\116\116\105\x43\x54\111\x4e\107\137\111\120", "\x48\x54\x54\120\x5f\x43\x4c\x49\105\x4e\x54\137\x49\x50", "\110\124\x54\120\x5f\130\137\106\x4f\122\127\101\x52\x44\105\104\137\x46\x4f\122", "\110\124\124\x50\x5f\x58\137\x46\117\x52\127\101\x52\x44\x45\x44", "\110\124\x54\120\137\x58\x5f\103\x4c\125\x53\x54\x45\x52\137\103\114\111\x45\x4e\124\137\x49\120", "\110\x54\124\120\137\x58\x5f\x52\105\x41\x4c\x5f\111\120", "\x48\x54\x54\x50\x5f\x46\x4f\x52\x57\101\122\104\x45\x44\x5f\106\x4f\x52", "\x48\124\x54\x50\137\x46\117\122\127\x41\122\x44\105\x44", "\x52\105\x4d\117\124\x45\x5f\x41\104\104\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto kiqmcymowosckmii; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto oskwkeaemiqcaqkc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); oskwkeaemiqcaqkc: kiqmcymowosckmii: iisieuaeyiqwckou: } uykwmucgoywoesui: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\60\56\x30\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaygaasesyymwgss; } return $this->eecucukcqkqysiau(__FUNCTION__); iaygaasesyymwgss: $yywgiquyoymymqwk = [ "\62\x30\70\x2e\x37\x30\x2e\x32\x34\67\56\61\x35\x37" => '', "\61\x37\62\56\62\x35\65\x2e\64\70\56\61\63\x30" => '', "\61\67\62\x2e\62\x35\x35\x2e\64\70\56\61\63\61" => '', "\61\67\62\x2e\x32\x35\x35\x2e\x34\70\56\x31\x33\62" => '', "\x31\x37\x32\56\x32\x35\x35\x2e\64\70\x2e\x31\63\x33" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\x34\x38\56\x31\63\x34" => '', "\x31\x37\x32\56\62\65\x35\x2e\64\70\56\61\63\65" => '', "\61\x37\x32\x2e\62\65\65\x2e\x34\70\56\61\x33\x36" => '', "\61\x37\x32\x2e\62\x35\x35\56\x34\x38\x2e\61\x33\x37" => '', "\61\67\x32\x2e\x32\65\65\x2e\64\x38\x2e\x31\63\70" => '', "\x31\67\62\56\x32\x35\x35\56\x34\x38\56\61\x33\x39" => '', "\61\67\62\x2e\62\x35\65\x2e\64\70\56\61\64\x30" => '', "\x31\67\x32\x2e\x32\x35\65\x2e\x34\70\x2e\x31\x34\x31" => '', "\61\x37\62\x2e\x32\65\65\56\x34\70\x2e\61\x34\62" => '', "\x31\x37\62\x2e\x32\65\65\x2e\x34\x38\56\x31\x34\63" => '', "\61\67\x32\x2e\x32\x35\65\56\x34\70\x2e\x31\64\64" => '', "\x31\x37\62\x2e\x32\x35\x35\x2e\x34\x38\56\61\x34\65" => '', "\x31\67\62\56\62\65\65\56\64\x38\x2e\61\64\66" => '', "\x31\67\x32\x2e\62\x35\x35\56\x34\70\x2e\61\64\x37" => '', "\x35\62\56\x32\62\x39\56\61\62\62\56\62\64\x30" => '', "\x31\x30\64\x2e\x32\61\64\56\x37\62\x2e\61\x30\61" => '', "\x31\63\56\66\x36\x2e\x37\x2e\61\x31" => '', "\x31\63\x2e\x38\x35\56\x32\64\56\x38\63" => '', "\x31\x33\x2e\x38\x35\56\x32\x34\56\71\60" => '', "\61\63\56\70\x35\x2e\x38\62\x2e\x32\x36" => '', "\64\60\x2e\x37\x34\x2e\62\64\62\56\62\65\63" => '', "\64\x30\x2e\x37\x34\x2e\62\64\63\x2e\x31\63" => '', "\x34\x30\x2e\x37\x34\56\62\64\x33\56\61\x37\66" => '', "\x31\x30\64\x2e\62\61\x34\x2e\64\70\x2e\x32\64\67" => '', "\x31\65\67\56\65\65\56\x31\x38\71\x2e\x31\x38\71" => '', "\x31\x30\64\x2e\x32\61\x34\56\61\x31\60\56\x31\x33\65" => '', "\67\60\56\63\67\56\x38\x33\x2e\62\64\60" => '', "\66\x35\56\x35\x32\x2e\63\x36\x2e\x32\65\x30" => '', "\x31\x33\x2e\x37\70\x2e\62\x31\x36\56\x35\x36" => '', "\65\x32\x2e\x31\x36\x32\56\62\x31\62\x2e\61\x36\63" => '', "\x32\x33\56\x39\66\56\x33\x34\56\61\x30\65" => '', "\x36\65\x2e\x35\62\x2e\x31\61\63\x2e\x32\x33\66" => '', "\61\x37\x32\56\62\65\65\x2e\x36\61\56\63\x34" => '', "\61\67\62\x2e\x32\x35\x35\x2e\x36\x31\56\x33\x35" => '', "\61\x37\x32\56\x32\x35\65\x2e\x36\x31\56\x33\x36" => '', "\x31\x37\x32\56\x32\x35\65\56\66\61\x2e\x33\67" => '', "\61\67\x32\56\x32\x35\x35\56\66\61\x2e\x33\70" => '', "\61\67\x32\x2e\62\x35\x35\56\x36\x31\x2e\x33\x39" => '', "\x31\x37\62\56\62\65\x35\x2e\x36\61\x2e\x34\60" => '', "\x35\x32\x2e\x32\63\67\56\x32\x33\x35\x2e\x31\70\x35" => '', "\x35\x32\x2e\x32\x33\67\56\62\x35\60\56\67\63" => '', "\x35\62\56\62\x33\67\56\x32\x33\66\56\x31\x34\x35" => '', "\x31\60\x34\56\x34\x31\x2e\x32\56\x31\71" => '', "\61\71\61\56\x32\x33\65\56\71\x38\56\61\x36\64" => '', "\x31\x39\61\x2e\x32\x33\65\x2e\71\x39\56\62\x32\x31" => '', "\x31\x39\61\56\x32\63\62\56\x31\71\64\56\x35\x31" => '', "\x31\x30\x34\x2e\x32\x31\x31\x2e\x31\x34\x33\56\70" => '', "\61\x30\x34\56\x32\x31\61\x2e\61\x36\x35\x2e\65\63" => '', "\65\x32\x2e\61\67\x32\56\61\x34\56\70\x37" => '', "\x34\x30\56\70\63\x2e\x38\x39\x2e\62\x31\64" => '', "\x35\x32\x2e\x31\x37\x35\x2e\65\67\56\x38\x31" => '', "\62\x30\56\61\x38\x38\56\66\63\x2e\61\65\61" => '', "\x32\x30\56\65\62\56\x33\x36\56\64\x39" => '', "\x35\62\x2e\62\64\x36\x2e\x31\66\x35\56\x31\65\x33" => '', "\x35\61\56\x31\x34\64\x2e\61\60\62\x2e\62\63\x33" => '', "\x31\x33\56\67\66\x2e\71\x37\56\x32\x32\x34" => '', "\x31\x30\62\x2e\x31\63\63\56\61\x36\x39\56\x36\x36" => '', "\65\62\x2e\x32\x33\61\x2e\x31\x39\71\56\61\67\60" => '', "\61\x33\56\65\x33\56\x31\x36\x32\x2e\67" => '', "\x34\60\56\x31\62\x33\x2e\62\x31\x38\x2e\x39\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto iwosouqsesoqcska; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iwosouqsesoqcska: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\x55\x53\x45\x52\x5f\101\107\x45\116\x54"); if ($uowwycywwssskuys) { goto iacwyogogoccmwsg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iacwyogogoccmwsg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\151\x6e\x67\144\157\x6d\x50\141\x67\145\123\160\x65\145\144\x7c\x44\x61\x72\x65\x42\157\x6f\x73\164\x7c\107\157\x6f\147\154\x65\x7c\x50\124\x53\124\x7c\103\150\162\x6f\155\145\55\x4c\151\x67\150\164\150\x6f\165\163\145\174\x57\120\40\x52\x6f\x63\153\145\x74\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\125\x45\x53\x54\x5f\x55\x52\x49", ''); if (!$iyiwooigkweeewey) { goto wqmwcuggcisqieao; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); wqmwcuggcisqieao: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto qsyqcokomswykyso; } return ''; qsyqcokomswykyso: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto issgmmkcgesyeoas; } return $magawcseesgowoeo; issgmmkcgesyeoas: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto yeiicwscguyokwyu; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); yeiicwscguyokwyu: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\125\x45\x53\124\x5f\115\105\124\110\x4f\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto giuoqsumkimmuaya; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\137\x69\x67\x6e\x6f\162\x65\144\137\x70\141\162\141\x6d\145\x74\145\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto yueosioyegouuwqo; } ksort($eyagkkkqkwcuygso); yueosioyegouuwqo: giuoqsumkimmuaya: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; ccyiggckemwgooco: if (!(strpos($euueacigmgoqkimu, "\56\57") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu)) { goto mssaawaiaimogowg; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\57") === 0) { goto usmagcaocwiugqum; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto qwsmiaegmcwuskwi; } if (strpos($euueacigmgoqkimu, "\x2f\56\x2f") === 0) { goto qcwkymcgqacaaywc; } if ("\x2f\56" === $euueacigmgoqkimu) { goto eykiuqsamowqykam; } if (strpos($euueacigmgoqkimu, "\x2f\56\x2e\57") === 0) { goto miigqygoawqmkkqm; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto oaskqsoyesmmeaew; } if ("\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto gaiaucesmcqgqwac; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto umamqqwcoewcigew; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto swkeiggkawwgewuw; umamqqwcoewcigew: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); swkeiggkawwgewuw: goto kuimgwmkcgcoecko; gaiaucesmcqgqwac: $euueacigmgoqkimu = ''; kuimgwmkcgcoecko: goto aacaoywsaqscgyua; oaskqsoyesmmeaew: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); aacaoywsaqscgyua: goto yywwaaiicukuwcao; miigqygoawqmkkqm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); yywwaaiicukuwcao: goto ywqouwqomiqwoquu; eykiuqsamowqykam: $euueacigmgoqkimu = "\57"; ywqouwqomiqwoquu: goto wmcucyuieqgqisis; qcwkymcgqacaaywc: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmcucyuieqgqisis: goto yyyyawaqcowsgqcs; qwsmiaegmcwuskwi: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); yyyyawaqcowsgqcs: goto sikmqkecsiyciaei; usmagcaocwiugqum: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); sikmqkecsiyciaei: goto ccyiggckemwgooco; mssaawaiaimogowg: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto wmycwscioqackeig; } wmycwscioqackeig: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto wammkmaqucqagqww; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); wammkmaqucqagqww: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto iuooqassskiyeemo; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); iuooqassskiyeemo: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\163\x73\141\x67\145" => $uamcoiueqaamsqma, "\x63\x6f\x6e\x74\x65\170\x74" => $icwicymcioeyeyek]; } }
