<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a3df79fb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\163\x73\154" => 0, "\x77\x70\137\64\60\x34" => 1, "\163\145\x61\x72\143\x68" => 1, "\155\157\142\151\154\x65" => 1, "\151\163\x5f\x68\x74\x6d\x6c" => 1, "\161\165\x65\x72\171\x5f\163\x74\x72\151\156\x67" => 1, "\144\157\156\x6f\164\143\141\x63\x68\x65\x70\x61\x67\145" => 1, "\162\145\x6a\x65\143\x74\x65\144\137\143\157\x6f\x6b\x69\145" => 1, "\x6d\x61\x6e\144\141\164\157\x72\x79\x5f\x63\x6f\157\153\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\x73\x74\163"])) { goto yyieomeeqycmikqw; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\x73\164\x73"]); yyieomeeqycmikqw: if (!(!isset($ywmkwiwkosakssii["\143\x6f\157\153\151\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto kwiuqqwamsimqgme; } $ywmkwiwkosakssii["\143\157\157\153\151\145\x73"] = $_COOKIE; kwiuqqwamsimqgme: if (!(!isset($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && !empty($_POST) && is_array($_POST))) { goto qmegcmqemmywoqas; } $ywmkwiwkosakssii["\160\x6f\163\164"] = $_POST; qmegcmqemmywoqas: if (!(!isset($ywmkwiwkosakssii["\x67\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto giooasyeqwaaocea; } $ywmkwiwkosakssii["\147\x65\164"] = $_GET; giooasyeqwaaocea: $this->get = !empty($ywmkwiwkosakssii["\x67\145\164"]) && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && is_array($ywmkwiwkosakssii["\160\x6f\163\x74"]) ? $ywmkwiwkosakssii["\160\157\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\x6f\x6f\x6b\x69\145\163"]) && is_array($ywmkwiwkosakssii["\x63\157\x6f\x6b\x69\145\x73"]) ? $ywmkwiwkosakssii["\143\157\x6f\x6b\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto uueywyysiicuauem; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\x63\x75\163\x74\x6f\x6d\151\x7a\x65" => '']); uueywyysiicuauem: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto seieguyaaiqismgo; } $this->yauwooaeicgosquo("\x44\x65\x76\40\115\x6f\144\x65\x20\x45\x6e\x61\142\154\145\144\x20\x61\x6e\144\x20\141\x6c\154\40\x72\145\161\x75\145\163\x74\40\151\x73\40\x62\171\160\x61\163\x73\x2e"); return false; seieguyaaiqismgo: if (!$this->kgkoeoeseyuugaao()) { goto qgyoesyiasqimcoe; } $this->yauwooaeicgosquo("\x52\157\142\157\164\163\x2e\164\x78\x74\40\157\x72\x20\56\150\164\x61\143\143\x65\163\x73\40\146\151\x6c\x65\40\x69\163\x20\x65\x78\x63\154\x75\144\x65\x64\56"); return false; qgyoesyiasqimcoe: if (!$this->gymgcceeqssmesiu()) { goto kkwqmewaksmokuqy; } $this->yauwooaeicgosquo("\x50\110\x50\x2c\40\130\x4d\114\54\x20\x6f\x72\40\x58\x53\114\x20\146\151\x6c\145\40\x69\x73\40\x65\170\x63\154\165\x64\145\144\56"); return false; kkwqmewaksmokuqy: if (!$this->goecwaaykqoaaagg()) { goto gsgkayokisiesciy; } $this->yauwooaeicgosquo("\x41\x64\155\151\x6e\x20\157\x72\x20\101\x4a\x41\130\40\125\x52\114\x20\x69\163\x20\x65\x78\x63\154\165\x64\x65\144\x2e"); return false; gsgkayokisiesciy: if (!$this->sgsscqasgeyeicoe()) { goto ascogkesqmuuaesq; } $this->yauwooaeicgosquo("\101\x64\x6d\x69\156\x20\x6f\162\x20\x41\x4a\x41\130\x20\x55\x52\114\x20\151\x73\x20\145\x78\x63\x6c\x75\144\x65\144\56"); return false; ascogkesqmuuaesq: if ($this->gooeyogikcusgwuu()) { goto askukaucmocewkgg; } $this->yauwooaeicgosquo("\122\145\161\x75\145\x73\164\40\155\x65\164\150\157\144\40\x69\x73\40\156\157\164\x20\x61\x6c\x6c\x6f\x77\x65\144\x2e\x20\x50\141\x67\x65\x20\143\141\156\156\157\x74\x20\x62\145\40\143\x61\x63\150\x65\x64\56", ["\x72\x65\x71\165\x65\163\164\137\x6d\x65\164\x68\157\x64" => $this->ciyocmkwssocskiy()]); return false; askukaucmocewkgg: if ($this->cskwmweqysskwckg()) { goto kiemqsgcmouqscao; } $this->lastError = []; return true; kiemqsgcmouqscao: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\143\x63\145\x73\x73"]) { goto wssaaemscmmiomee; } $this->yauwooaeicgosquo("\x4e\x6f\40\143\x6f\156\146\x69\147\40\146\x69\x6c\x65\x20\146\157\x75\156\x64", ["\x63\157\x6e\146\151\147\x5f\160\x61\164\150" => $uiewakwqscemywuo["\x70\x61\164\x68"]]); return false; wssaaemscmmiomee: if (!($this->cskwmweqysskwckg("\161\x75\145\162\171\x5f\x73\164\162\x69\x6e\x67") && !$this->koguieumooaesyww())) { goto meqmcgmksqiqcoyq; } $this->yauwooaeicgosquo("\121\x75\x65\162\x79\x20\163\x74\162\x69\156\147\x20\x55\122\114\x20\x69\x73\40\x65\x78\x63\x6c\165\x64\x65\x64\56", $_GET); return false; meqmcgmksqiqcoyq: if (!($this->cskwmweqysskwckg("\163\163\x6c") & !$this->eqwgocqwoyyykwke())) { goto euskosgaksmimgug; } $this->yauwooaeicgosquo("\123\x53\x4c\40\143\x61\x63\x68\145\x20\156\157\x74\x20\x61\x70\x70\154\x69\145\x64\40\164\157\40\x70\141\x67\145\56"); return false; euskosgaksmimgug: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto iusaeoimukymskgs; } $this->yauwooaeicgosquo("\x50\141\x67\x65\x20\151\163\x20\145\170\x63\154\x75\x64\145\144\56"); return false; iusaeoimukymskgs: if (!($this->cskwmweqysskwckg("\x72\x65\x6a\x65\143\x74\x65\144\x5f\x63\x6f\x6f\153\151\x65") && $this->cokqaygwwygweuyk())) { goto asciaakaoygususy; } $this->yauwooaeicgosquo("\x45\170\x63\154\x75\144\145\x64\x20\143\157\x6f\153\151\x65\x20\x66\x6f\165\156\x64\x2e", ["\x65\x78\x63\x6c\165\x64\x65\144\137\143\x6f\157\x6b\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; asciaakaoygususy: if (!($this->cskwmweqysskwckg("\155\x61\x6e\144\x61\x74\x6f\162\171\137\x63\x6f\x6f\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto eaggoasiwogmquwc; } $this->yauwooaeicgosquo("\x4d\151\x73\x73\x69\x6e\x67\x20\x6d\141\x6e\144\x61\164\x6f\162\171\x20\143\157\x6f\x6b\x69\x65\x3a\x20\160\141\x67\x65\x20\156\157\x74\40\x70\162\157\x63\145\x73\x73\145\x64\56", ["\x6d\151\163\x73\x69\x6e\147\137\143\157\x6f\x6b\x69\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; eaggoasiwogmquwc: if (!($this->cskwmweqysskwckg("\165\x73\x65\162\137\x61\x67\x65\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto meoweqcaaosoomeu; } $this->yauwooaeicgosquo("\125\163\x65\x72\40\x41\147\145\156\164\x20\x69\163\x20\145\x78\x63\154\165\144\145\x64\x2e", ["\165\163\145\162\x5f\x61\147\x65\156\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\x55\123\x45\x52\x5f\x41\x47\105\x4e\x54")]); return false; meoweqcaaosoomeu: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ywmoieqkigsykequ; } $this->yauwooaeicgosquo("\x42\165\146\146\145\162\40\143\x6f\156\x74\145\x6e\164\x20\165\156\x64\x65\162\40\x32\x35\65\40\143\x68\141\x72\x61\x63\x74\x65\x72\163\56"); return false; ywmoieqkigsykequ: if (!(http_response_code() !== 200)) { goto iaousaauoawkqkkg; } $this->yauwooaeicgosquo("\x50\141\x67\x65\x20\x69\x73\x20\x6e\x6f\x74\40\x61\40\62\x30\x30\x20\110\124\124\x50\x20\162\145\x73\x70\x6f\156\x73\x65\40\141\x6e\144\x20\x63\141\156\156\157\x74\x20\x62\145\x20\x63\x61\143\x68\x65\x64\56"); return false; iaousaauoawkqkkg: if (!($this->cskwmweqysskwckg("\x64\157\x6e\157\x74\157\160\164\x69\155\151\x7a\145\x70\x61\x67\145") && $this->cowcgqokiosgaqic())) { goto kkwucaoumyayagcq; } $this->yauwooaeicgosquo("\x44\x4f\x4e\124\x4f\120\124\111\x4d\x49\x5a\105\x44\120\101\x47\105\x20\x69\163\40\144\x65\146\151\x6e\145\x64\x2e\40\x50\x61\x67\145\x20\143\x61\x6e\156\x6f\x74\x20\x62\145\40\143\x61\143\150\145\x64\x2e"); return false; kkwucaoumyayagcq: if (!($this->cskwmweqysskwckg("\167\160\x5f\x34\60\64") && $this->kmmyuiwaogukwqqi())) { goto muwyuiikuywigwso; } $this->yauwooaeicgosquo("\127\120\40\x34\x30\64\40\x70\141\x67\145\40\151\x73\x20\145\170\143\154\165\x64\145\x64\x2e"); return false; muwyuiikuywigwso: if (!($this->cskwmweqysskwckg("\163\x65\141\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto gikaiicgqyueeoco; } $this->yauwooaeicgosquo("\123\x65\x61\162\143\x68\x20\x70\x61\147\145\40\151\x73\40\145\170\x63\x6c\165\x64\x65\x64\x2e"); return false; gikaiicgqyueeoco: if (!$this->cskwmweqysskwckg("\x69\163\137\150\x74\155\154")) { goto akoiqkoqmmmcieug; } if (!($this->cmaecekuqkwmemms("\122\x45\123\124\137\x52\x45\121\125\105\123\x54") || $this->gaiygescoqgyusaa())) { goto akcakssqcqcouwew; } unset($this->tests["\x69\163\x5f\x68\164\155\154"]); akcakssqcqcouwew: akoiqkoqmmmcieug: if (!($this->cskwmweqysskwckg("\x69\163\x5f\x68\x74\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto cgasgmiiqegqesic; } $this->yauwooaeicgosquo("\116\157\x20\143\x6c\x6f\163\151\156\147\x20\74\57\x68\x74\155\154\x3e\40\x77\x61\x73\40\146\157\165\x6e\144\56"); return false; cgasgmiiqegqesic: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\x5f\157\x70\x74\x69\x6d\x69\172\x61\x74\151\x6f\x6e\137\x61\x6c\154\157\167\137\x74\157\x5f\163\x74\141\x72\x74\x5f\x62\165\x66\x66\145\x72\x5f\160\x72\x6f\x63\x65\x73\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto yamoiggaeugmgkku; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto eqekaoaioiykuaiw; yamoiggaeugmgkku: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); eqekaoaioiykuaiw: return apply_filters("\160\x72\x5f\x6f\x70\x74\151\155\x69\172\141\x74\x69\x6f\156\137\x68\141\x73\137{$ymqmyyeuycgmigyo}\x5f\164\145\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\x5c\163\52\x5c\x2f\x5c\163\x2a\150\164\x6d\154\x5c\163\x2a\76\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\x3f\x3a\56\53\57\x29\77" . $wp_rewrite->feed_base . "\50\x3f\72\57\50\77\x3a\56\x2b\x2f\x3f\51\77\51\x3f\x24"; return (bool) preg_match("\43\136\50{$uckmmkmoeikwsiqg}\x29\44\43\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\145\166\137\x6d\x6f\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoiuwyogucoeaoew; } return $this->eecucukcqkqysiau(__FUNCTION__); qoiuwyogucoeaoew: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qkkqiagwgaoyauki: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\164\x73\x2e\164\170\164", "\x2e\x68\164\x61\143\x63\145\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gioqkcywauuckmua: iqeqqwcmaiqakawc: } oyywywoqaqcykucs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto miaiggsoiaekmqwy; } return $this->eecucukcqkqysiau(__FUNCTION__); miaiggsoiaekmqwy: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto uqagqomggiacosqm; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto suoymucmyegewkmu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suoymucmyegewkmu: uqagqomggiacosqm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mwskgsimqagmkcgq; } return $this->eecucukcqkqysiau(__FUNCTION__); mwskgsimqagmkcgq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto mkuigmcgkawyawee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkuigmcgkawyawee: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\144\145\x78\56\160\150\x70")) { goto ouqwmaaskykywyqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ouqwmaaskykywyqo: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\x78\x6d\154" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\x4e\107\x5f\x41\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\123")), ["\x6f\x6e", "\61"]) || "\x34\x34\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\105\122\x5f\x50\x4f\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\137\143\165\x73\164\157\x6d\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\124" => 1, "\110\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto agqmoymkiswqswqo; } return $this->eecucukcqkqysiau(__FUNCTION__); agqmoymkiswqswqo: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto kwaqakoogeiacmwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwaqakoogeiacmwi: $yccgiaiouekkouay = ["\163" => 1, "\154\141\x6e\x67" => 1, "\160\145\x72\x6d\141\154\x69\x6e\153\137\156\141\x6d\x65" => 1, "\154\x70\55\166\141\x72\151\x61\x74\151\157\x6e\x2d\151\144" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ccqgkeesikyegcik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ccqgkeesikyegcik: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\x63\150\145\x5f\161\165\145\x72\x79\x5f\163\164\x72\151\156\x67\163"); if ($yccgiaiouekkouay) { goto aakwscykmyyykoms; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aakwscykmyyykoms: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iiuawywwoaeyauge; } return $this->eecucukcqkqysiau(__FUNCTION__); iiuawywwoaeyauge: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto wcoqiwuusoeqiqwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wcoqiwuusoeqiqwi: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oqwyemgwoossauyk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oqwyemgwoossauyk: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto kcqieuukskyiywss; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; kcqieuukskyiywss: yuoyackaoigyyyso: } cwcmwogseemgqgqq: if (empty($eiocugauqgouiuyi)) { goto wukuisoeoeomgegu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wukuisoeoeomgegu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsimeiqkoyqkuecq; } return $this->eecucukcqkqysiau(__FUNCTION__); gsimeiqkoyqkuecq: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gqywcowiigceimaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqywcowiigceimaw: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\145\137\155\141\x6e\x64\x61\x74\x6f\162\171\137\x63\x6f\157\153\151\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto eyuoecmogqwkmomi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); eyuoecmogqwkmomi: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto mgwgiesscqoaqcau; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); mgwgiesscqoaqcau: geugsymgsiuuqccg: } quewwumogiocouii: if (!empty($yiycakoikkyuokgk)) { goto ioacywuoyuskqmwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ioacywuoyuskqmwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\x72\x5f\157\160\164\x69\x6d\x69\x7a\141\164\151\x6f\x6e\x5f\x6f\166\145\x72\162\151\144\145\137\144\157\x6e\x74\137\157\x70\164\151\155\x69\x7a\145", $this->cmaecekuqkwmemms("\120\x52\137\117\120\x54\111\115\x49\132\x41\124\x49\x4f\x4e\137\x44\117\x4e\124\x5f\x4f\120\x54\111\x4d\111\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\137\64\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\x5f\x73\145\x61\x72\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\x5f\x6f\x70\164\x69\x6d\151\x7a\x61\164\151\157\x6e\137\157\x70\x74\x69\155\151\172\145\x5f\163\x65\x61\162\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\137\x73\x73\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto bgoygegmogcmeaou; } return $this->eecucukcqkqysiau(__FUNCTION__); bgoygegmogcmeaou: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto awgaewwsskasueke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgaewwsskasueke: if (!$this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\x6c\x65\x5f\x63\141\143\x68\x65")) { goto cgmcwkmmcmmkiooc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cgmcwkmmcmmkiooc: $wayquiskgeuoqamk = "\x32\x2e\60\x5c\x20\x4d\115\120\174\62\64\60\x78\63\x32\x30\x7c\x34\60\x30\x58\x32\x34\60\174\x41\x76\141\x6e\x74\x47\157\x7c\x42\154\x61\143\153\102\145\162\x72\171\x7c\102\154\x61\x7a\145\162\x7c\x43\145\x6c\x6c\x70\150\157\x6e\145\x7c\104\141\x6e\x67\145\162\174\104\x6f\103\x6f\x4d\x6f\x7c\105\154\141\x69\156\145\57\x33\x2e\x30\x7c\x45\165\144\157\162\x61\x57\x65\142\x7c\107\157\157\x67\x6c\145\x62\157\x74\x2d\x4d\157\x62\151\154\x65\x7c\x68\151\160\164\157\x70\174\111\x45\115\x6f\142\151\154\x65\174\113\131\x4f\103\105\122\x41\x2f\x57\130\x33\x31\60\x4b\x7c\x4c\107\x2f\125\71\x39\60\174\115\111\104\x50\55\x32\x2e\x7c\x4d\115\x45\106\62\x30\x7c\115\117\x54\55\126\174\116\145\x74\x46\162\157\x6e\x74\174\x4e\145\x77\164\x7c\x4e\151\x6e\x74\x65\156\x64\x6f\x5c\x20\127\x69\151\x7c\x4e\x69\x74\x72\x6f\174\116\157\x6b\151\x61\174\117\160\x65\x72\x61\x5c\x20\x4d\x69\156\x69\x7c\120\141\154\155\174\x50\154\x61\171\123\164\141\x74\151\x6f\156\134\40\120\x6f\x72\x74\141\142\154\x65\x7c\x70\x6f\x72\x74\141\x6c\x6d\x6d\155\174\x50\162\x6f\170\x69\x6e\x65\164\x7c\x50\162\x6f\x78\x69\x4e\145\164\174\x53\x48\x41\x52\120\x2d\124\x51\x2d\107\130\x31\x30\174\123\x48\x47\x2d\151\x39\x30\x30\x7c\123\x6d\141\154\x6c\174\123\x6f\x6e\171\x45\x72\x69\143\x73\x73\157\156\174\x53\171\x6d\x62\151\141\156\x5c\40\x4f\123\174\x53\x79\155\142\x69\141\x6e\x4f\123\174\124\x53\x32\61\x69\55\x31\x30\x7c\x55\x50\x2e\102\162\157\x77\x73\145\x72\x7c\125\x50\56\114\x69\x6e\153\x7c\167\x65\142\117\123\174\127\151\x6e\144\157\x77\163\x5c\x20\x43\105\174\127\151\156\127\x41\120\x7c\x59\x61\150\x6f\x6f\x53\x65\145\153\x65\x72\x2f\115\x31\x41\61\x2d\122\x32\x44\62\174\151\120\x68\157\156\x65\174\151\x50\157\x64\x7c\101\x6e\x64\x72\157\151\144\174\x42\154\141\x63\153\102\145\x72\162\171\x39\65\63\x30\174\x4c\x47\55\x54\x55\71\61\x35\x5c\x20\117\142\151\x67\157\x7c\x4c\x47\105\134\x20\126\130\174\x77\x65\x62\117\x53\x7c\x4e\x6f\x6b\x69\141\65\x38\60\60"; if (!preg_match("\43\x5e\x2e\52\x28{$wayquiskgeuoqamk}\x29\56\52\43\x69", $uowwycywwssskuys)) { goto iamooqskosymqsmw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iamooqskosymqsmw: $wayquiskgeuoqamk = "\167\x33\143\x5c\x20\174\x77\63\x63\x2d\x7c\141\x63\163\x2d\x7c\141\x6c\x61\166\174\x61\x6c\143\141\x7c\141\x6d\x6f\x69\174\x61\x75\x64\151\x7c\141\x76\141\156\174\142\145\x6e\161\174\142\151\162\144\174\142\x6c\141\x63\x7c\x62\x6c\141\x7a\x7c\142\162\x65\x77\174\143\145\154\154\174\143\x6c\x64\143\174\143\x6d\144\x2d\174\x64\141\156\x67\174\144\157\x63\x6f\x7c\145\x72\x69\x63\x7c\150\x69\x70\x74\174\150\164\143\x5f\x7c\x69\x6e\156\x6f\x7c\151\160\x61\x71\x7c\x69\160\157\144\174\x6a\x69\x67\163\174\153\144\144\151\x7c\x6b\145\152\x69\174\x6c\x65\x6e\x6f\174\154\147\55\x63\x7c\x6c\147\x2d\144\x7c\154\147\55\147\x7c\154\147\145\x2d\174\x6c\147\x2f\x75\174\155\x61\x75\151\x7c\x6d\141\170\157\174\x6d\x69\144\x70\x7c\x6d\151\164\163\174\x6d\x6d\145\146\x7c\x6d\157\x62\x69\x7c\155\x6f\164\55\x7c\155\x6f\164\x6f\x7c\155\167\x62\160\174\156\x65\143\55\x7c\156\x65\x77\x74\x7c\156\157\x6b\x69\174\160\141\154\x6d\x7c\x70\x61\x6e\141\174\x70\x61\156\164\x7c\160\150\151\x6c\x7c\x70\154\x61\x79\174\160\x6f\x72\x74\174\160\162\x6f\170\174\161\x77\x61\160\174\163\x61\147\145\174\163\x61\x6d\163\174\163\141\x6e\x79\174\163\143\x68\55\x7c\x73\145\143\55\x7c\x73\145\156\144\x7c\x73\145\162\x69\174\163\147\x68\x2d\174\x73\150\x61\x72\174\163\x69\x65\55\x7c\163\151\x65\155\174\163\155\x61\x6c\x7c\x73\155\141\x72\x7c\163\157\x6e\171\x7c\x73\160\x68\55\x7c\x73\x79\155\142\x7c\x74\x2d\155\157\174\164\145\x6c\x69\x7c\x74\x69\x6d\55\174\x74\157\x73\150\174\164\163\155\x2d\x7c\165\160\147\x31\x7c\x75\x70\x73\x69\x7c\166\x6b\x2d\166\x7c\x76\x6f\x64\141\174\x77\141\160\55\x7c\x77\141\160\141\x7c\167\141\160\x69\174\167\141\x70\x70\174\x77\x61\x70\162\x7c\x77\x65\x62\143\x7c\167\x69\156\167\x7c\x77\x69\x6e\167\174\170\x64\x61\134\40\174\170\144\x61\55"; if (!preg_match("\x23\136\x28{$wayquiskgeuoqamk}\x29\x2e\52\x23\151", $uowwycywwssskuys)) { goto wwccoougkywoaoui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwccoougkywoaoui: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eygqeoiskweuiuqi; } return $this->eecucukcqkqysiau(__FUNCTION__); eygqeoiskweuiuqi: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto uykwmucgoywoesui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uykwmucgoywoesui: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\x72\145\152\x65\x63\164\137\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto iisieuaeyiqwckou; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iisieuaeyiqwckou: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oskwkeaemiqcaqkc; } return $this->eecucukcqkqysiau(__FUNCTION__); oskwkeaemiqcaqkc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\x5f\162\145\x6a\145\x63\x74\x5f\x75\162\x69"); if ($escsaeeosigewsme) { goto kiqmcymowosckmii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kiqmcymowosckmii: $yciaosuiyeieceug = !preg_match("\x23\x5e\x28{$escsaeeosigewsme}\51\44\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\137\x55\123\x45\x52\137\x41\107\105\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaygaasesyymwgss; } return $this->eecucukcqkqysiau(__FUNCTION__); iaygaasesyymwgss: $yygmoeguaqyumuui = [ "\110\124\124\x50\137\x43\x46\137\103\x4f\x4e\116\105\103\x54\x49\116\107\137\x49\120", "\x48\124\x54\x50\x5f\103\114\111\105\x4e\x54\x5f\x49\120", "\110\x54\124\x50\x5f\130\x5f\x46\117\122\127\101\x52\104\105\x44\x5f\106\117\122", "\x48\x54\124\120\137\130\137\x46\x4f\122\127\x41\x52\x44\x45\x44", "\110\124\124\120\137\x58\137\x43\x4c\125\x53\x54\x45\x52\x5f\x43\x4c\x49\x45\116\x54\137\111\120", "\110\124\124\x50\137\130\137\x52\x45\101\x4c\x5f\111\120", "\110\124\124\120\137\106\117\x52\x57\101\122\104\105\104\137\106\117\x52", "\110\124\124\120\x5f\x46\117\x52\x57\101\122\x44\105\x44", "\122\105\x4d\117\124\105\137\x41\104\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto qsyqcokomswykyso; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wqmwcuggcisqieao; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wqmwcuggcisqieao: qsyqcokomswykyso: iacwyogogoccmwsg: } iwosouqsesoqcska: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\60\x2e\x30\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto issgmmkcgesyeoas; } return $this->eecucukcqkqysiau(__FUNCTION__); issgmmkcgesyeoas: $yywgiquyoymymqwk = [ "\x32\60\70\56\67\x30\56\62\x34\x37\56\x31\x35\x37" => '', "\x31\x37\x32\x2e\62\65\65\56\64\x38\56\x31\x33\60" => '', "\61\67\62\x2e\62\x35\65\x2e\x34\70\x2e\x31\x33\x31" => '', "\61\x37\62\x2e\x32\x35\65\x2e\64\x38\x2e\x31\63\62" => '', "\x31\x37\x32\56\62\x35\x35\x2e\x34\70\56\x31\x33\x33" => '', "\x31\67\62\56\62\65\65\x2e\x34\x38\56\61\63\64" => '', "\x31\x37\x32\56\62\x35\x35\x2e\64\x38\x2e\61\63\65" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\64\x38\x2e\x31\x33\x36" => '', "\61\x37\x32\56\x32\65\x35\56\x34\x38\56\61\63\x37" => '', "\61\x37\x32\x2e\x32\65\65\x2e\x34\70\x2e\61\x33\x38" => '', "\61\67\x32\x2e\x32\x35\x35\56\x34\70\56\x31\x33\x39" => '', "\61\x37\x32\56\x32\x35\65\x2e\64\70\x2e\x31\x34\x30" => '', "\x31\67\62\x2e\62\65\65\56\64\x38\x2e\61\x34\x31" => '', "\61\x37\x32\x2e\x32\65\x35\56\x34\70\56\61\64\62" => '', "\61\x37\62\x2e\62\x35\65\56\64\70\x2e\61\64\x33" => '', "\x31\x37\x32\x2e\62\x35\65\x2e\x34\70\56\61\x34\64" => '', "\61\x37\62\56\62\x35\x35\56\64\70\56\x31\x34\x35" => '', "\61\67\62\x2e\62\x35\x35\56\64\70\56\x31\x34\66" => '', "\x31\67\62\x2e\x32\65\x35\56\x34\x38\56\61\x34\x37" => '', "\x35\x32\56\62\62\71\56\61\x32\x32\x2e\62\64\60" => '', "\61\60\64\56\62\x31\x34\56\x37\62\56\x31\x30\61" => '', "\61\x33\x2e\x36\66\x2e\67\x2e\x31\61" => '', "\61\63\x2e\x38\x35\x2e\x32\x34\56\x38\63" => '', "\61\63\56\70\65\56\62\x34\56\71\x30" => '', "\61\x33\56\x38\65\56\x38\62\56\62\66" => '', "\x34\60\x2e\67\64\x2e\62\x34\x32\x2e\x32\x35\63" => '', "\64\60\56\x37\64\x2e\x32\64\63\x2e\61\x33" => '', "\x34\60\x2e\x37\x34\56\62\64\x33\56\x31\x37\x36" => '', "\61\x30\64\x2e\x32\61\x34\56\64\x38\x2e\x32\x34\x37" => '', "\x31\65\x37\56\x35\x35\x2e\x31\70\71\56\x31\x38\x39" => '', "\x31\x30\64\56\62\61\x34\56\61\61\x30\56\61\63\x35" => '', "\x37\60\x2e\x33\67\x2e\70\63\56\62\x34\x30" => '', "\66\65\x2e\65\x32\56\63\66\56\62\x35\60" => '', "\61\x33\56\x37\70\56\x32\x31\x36\x2e\x35\66" => '', "\x35\62\56\61\x36\62\56\62\x31\62\x2e\x31\66\x33" => '', "\x32\63\56\71\x36\56\63\x34\x2e\61\60\65" => '', "\x36\65\x2e\x35\62\56\61\61\x33\56\62\63\66" => '', "\61\x37\62\x2e\62\65\x35\x2e\x36\x31\x2e\x33\x34" => '', "\x31\x37\62\x2e\62\x35\x35\x2e\x36\61\56\x33\x35" => '', "\61\x37\62\x2e\x32\65\x35\x2e\x36\61\56\63\66" => '', "\61\x37\x32\x2e\62\65\65\x2e\x36\x31\x2e\x33\x37" => '', "\x31\x37\x32\x2e\x32\x35\x35\56\66\61\56\x33\x38" => '', "\x31\67\x32\x2e\x32\x35\x35\x2e\x36\61\x2e\63\71" => '', "\x31\67\x32\x2e\x32\x35\65\x2e\x36\x31\56\64\60" => '', "\x35\x32\56\62\x33\67\56\62\63\65\56\61\x38\65" => '', "\x35\x32\x2e\x32\63\67\x2e\62\65\x30\56\x37\63" => '', "\x35\62\x2e\62\63\x37\56\x32\63\66\56\x31\64\x35" => '', "\x31\x30\64\56\x34\61\56\62\56\61\x39" => '', "\61\x39\x31\56\x32\63\65\56\71\x38\56\61\66\x34" => '', "\x31\71\x31\56\62\x33\65\x2e\71\71\x2e\62\x32\61" => '', "\x31\x39\61\x2e\x32\63\x32\56\x31\71\x34\x2e\x35\x31" => '', "\61\x30\x34\x2e\62\61\x31\56\x31\x34\x33\x2e\70" => '', "\x31\x30\64\x2e\x32\x31\x31\x2e\61\66\65\56\65\63" => '', "\x35\62\x2e\61\x37\62\56\x31\64\x2e\x38\67" => '', "\x34\x30\x2e\x38\x33\x2e\x38\x39\x2e\62\x31\64" => '', "\65\x32\56\x31\67\65\56\x35\67\56\x38\x31" => '', "\62\60\56\x31\70\x38\x2e\x36\x33\x2e\x31\x35\61" => '', "\62\x30\x2e\65\x32\x2e\x33\x36\56\x34\71" => '', "\65\x32\56\62\64\66\56\61\66\x35\56\61\65\63" => '', "\65\61\56\x31\64\x34\56\61\60\x32\56\62\x33\x33" => '', "\61\x33\56\x37\x36\56\71\x37\x2e\62\x32\64" => '', "\x31\60\62\56\x31\63\63\x2e\x31\66\71\x2e\66\x36" => '', "\x35\62\56\62\x33\x31\56\x31\x39\x39\x2e\61\x37\x30" => '', "\x31\63\56\x35\x33\56\x31\x36\62\56\x37" => '', "\x34\60\56\x31\62\x33\x2e\62\61\70\56\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto yeiicwscguyokwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yeiicwscguyokwyu: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\x5f\x55\123\x45\x52\137\x41\x47\105\116\124"); if ($uowwycywwssskuys) { goto yueosioyegouuwqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yueosioyegouuwqo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\x69\x6e\x67\x64\x6f\155\x50\x61\147\x65\123\160\145\x65\x64\174\104\x61\162\x65\102\157\157\x73\x74\x7c\107\157\157\x67\154\x65\174\x50\124\x53\x54\x7c\103\150\x72\x6f\x6d\x65\x2d\114\151\147\x68\x74\x68\x6f\x75\x73\x65\x7c\x57\x50\40\x52\x6f\143\x6b\x65\x74\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\125\105\123\x54\137\x55\x52\x49", ''); if (!$iyiwooigkweeewey) { goto giuoqsumkimmuaya; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); giuoqsumkimmuaya: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto mssaawaiaimogowg; } return ''; mssaawaiaimogowg: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ccyiggckemwgooco; } return $magawcseesgowoeo; ccyiggckemwgooco: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto umamqqwcoewcigew; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); umamqqwcoewcigew: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\x55\x45\123\x54\x5f\115\105\x54\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto gaiaucesmcqgqwac; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\137\151\x67\x6e\x6f\162\x65\144\x5f\160\x61\x72\x61\x6d\145\x74\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto swkeiggkawwgewuw; } ksort($eyagkkkqkwcuygso); swkeiggkawwgewuw: gaiaucesmcqgqwac: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; oaskqsoyesmmeaew: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\56" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu)) { goto kuimgwmkcgcoecko; } if (strpos($euueacigmgoqkimu, "\x2e\56\x2f") === 0) { goto cquyuwsisgqscemm; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto wammkmaqucqagqww; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2f") === 0) { goto sikmqkecsiyciaei; } if ("\57\x2e" === $euueacigmgoqkimu) { goto yyyyawaqcowsgqcs; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\57") === 0) { goto wmcucyuieqgqisis; } if ("\x2f\x2e\56" === $euueacigmgoqkimu) { goto ywqouwqomiqwoquu; } if ("\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto yywwaaiicukuwcao; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto aacaoywsaqscgyua; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto miigqygoawqmkkqm; aacaoywsaqscgyua: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: $euueacigmgoqkimu = ''; eykiuqsamowqykam: goto qcwkymcgqacaaywc; ywqouwqomiqwoquu: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); qcwkymcgqacaaywc: goto qwsmiaegmcwuskwi; wmcucyuieqgqisis: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); qwsmiaegmcwuskwi: goto usmagcaocwiugqum; yyyyawaqcowsgqcs: $euueacigmgoqkimu = "\57"; usmagcaocwiugqum: goto wmycwscioqackeig; sikmqkecsiyciaei: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmycwscioqackeig: goto iuooqassskiyeemo; wammkmaqucqagqww: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); iuooqassskiyeemo: goto imykswegcuekqwio; cquyuwsisgqscemm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); imykswegcuekqwio: goto oaskqsoyesmmeaew; kuimgwmkcgcoecko: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto eokikuciuqkyauum; } eokikuciuqkyauum: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ykuqeyogsasokqis; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ykuqeyogsasokqis: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto mqaamqyoywyekiko; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); mqaamqyoywyekiko: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\x73\x73\x61\147\x65" => $uamcoiueqaamsqma, "\143\x6f\x6e\164\145\170\x74" => $icwicymcioeyeyek]; } }
