<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b4f7e33a8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\163\x73\154" => 0, "\x77\160\137\x34\x30\64" => 1, "\x73\x65\141\162\143\x68" => 1, "\155\157\x62\151\154\x65" => 1, "\x69\x73\137\150\164\x6d\154" => 1, "\x71\165\145\162\x79\x5f\x73\x74\x72\151\x6e\x67" => 1, "\144\157\x6e\x6f\x74\143\141\143\x68\x65\x70\141\x67\145" => 1, "\x72\145\152\x65\x63\164\x65\144\x5f\143\x6f\157\153\151\145" => 1, "\x6d\x61\156\144\x61\x74\157\162\171\x5f\143\x6f\x6f\x6b\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\x73\164\163"])) { goto yyieomeeqycmikqw; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\164\163"]); yyieomeeqycmikqw: if (!(!isset($ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto kwiuqqwamsimqgme; } $ywmkwiwkosakssii["\143\157\x6f\x6b\x69\145\163"] = $_COOKIE; kwiuqqwamsimqgme: if (!(!isset($ywmkwiwkosakssii["\160\x6f\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto qmegcmqemmywoqas; } $ywmkwiwkosakssii["\x70\x6f\163\x74"] = $_POST; qmegcmqemmywoqas: if (!(!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto giooasyeqwaaocea; } $ywmkwiwkosakssii["\x67\x65\x74"] = $_GET; giooasyeqwaaocea: $this->get = !empty($ywmkwiwkosakssii["\147\145\x74"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\147\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\x73\164"]) && is_array($ywmkwiwkosakssii["\160\x6f\163\x74"]) ? $ywmkwiwkosakssii["\160\x6f\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\157\x6b\x69\145\x73"]) && is_array($ywmkwiwkosakssii["\x63\x6f\157\x6b\x69\x65\163"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto uueywyysiicuauem; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\137\x63\165\x73\x74\157\x6d\x69\x7a\145" => '']); uueywyysiicuauem: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto seieguyaaiqismgo; } $this->yauwooaeicgosquo("\x44\x65\x76\x20\115\x6f\144\x65\40\105\156\141\142\x6c\x65\144\x20\141\156\x64\x20\141\x6c\x6c\x20\x72\x65\161\165\x65\163\x74\x20\x69\x73\40\142\171\x70\x61\x73\163\56"); return false; seieguyaaiqismgo: if (!$this->kgkoeoeseyuugaao()) { goto qgyoesyiasqimcoe; } $this->yauwooaeicgosquo("\122\157\x62\157\x74\163\56\x74\170\x74\x20\x6f\x72\x20\56\x68\x74\141\143\143\145\x73\x73\40\x66\151\154\x65\40\151\163\40\145\x78\143\x6c\165\144\x65\x64\x2e"); return false; qgyoesyiasqimcoe: if (!$this->gymgcceeqssmesiu()) { goto kkwqmewaksmokuqy; } $this->yauwooaeicgosquo("\120\x48\120\54\x20\x58\x4d\x4c\x2c\40\157\162\40\130\123\x4c\40\x66\x69\154\145\x20\x69\163\40\x65\170\143\154\165\144\x65\x64\56"); return false; kkwqmewaksmokuqy: if (!$this->goecwaaykqoaaagg()) { goto gsgkayokisiesciy; } $this->yauwooaeicgosquo("\x41\144\x6d\151\156\40\x6f\162\x20\x41\x4a\101\130\40\125\x52\x4c\x20\x69\163\x20\x65\170\143\x6c\165\144\x65\144\x2e"); return false; gsgkayokisiesciy: if (!$this->sgsscqasgeyeicoe()) { goto ascogkesqmuuaesq; } $this->yauwooaeicgosquo("\101\144\x6d\x69\x6e\40\x6f\162\x20\x41\112\x41\130\x20\x55\x52\114\x20\151\x73\x20\145\170\x63\154\165\144\145\x64\x2e"); return false; ascogkesqmuuaesq: if ($this->gooeyogikcusgwuu()) { goto askukaucmocewkgg; } $this->yauwooaeicgosquo("\122\x65\161\165\145\163\164\40\155\145\164\150\x6f\x64\x20\151\163\40\x6e\x6f\164\x20\x61\x6c\x6c\157\x77\145\x64\56\40\120\141\147\x65\40\143\x61\x6e\156\157\x74\40\142\x65\40\x63\x61\143\150\145\x64\56", ["\x72\x65\161\165\145\x73\x74\137\155\145\x74\150\157\144" => $this->ciyocmkwssocskiy()]); return false; askukaucmocewkgg: if ($this->cskwmweqysskwckg()) { goto kiemqsgcmouqscao; } $this->lastError = []; return true; kiemqsgcmouqscao: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\x63\143\x65\163\x73"]) { goto wssaaemscmmiomee; } $this->yauwooaeicgosquo("\116\157\40\x63\157\156\146\151\147\40\x66\151\154\145\x20\x66\x6f\x75\x6e\144", ["\x63\157\x6e\x66\151\x67\137\x70\141\x74\150" => $uiewakwqscemywuo["\160\x61\164\x68"]]); return false; wssaaemscmmiomee: if (!($this->cskwmweqysskwckg("\x71\165\x65\x72\x79\137\163\164\162\x69\156\x67") && !$this->koguieumooaesyww())) { goto meqmcgmksqiqcoyq; } $this->yauwooaeicgosquo("\121\x75\145\x72\x79\x20\x73\x74\x72\x69\x6e\x67\40\x55\122\114\40\151\x73\x20\145\170\x63\x6c\x75\144\145\x64\56", $_GET); return false; meqmcgmksqiqcoyq: if (!($this->cskwmweqysskwckg("\163\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto euskosgaksmimgug; } $this->yauwooaeicgosquo("\123\x53\114\40\143\141\143\x68\145\40\156\x6f\164\40\141\x70\x70\154\151\x65\x64\x20\164\157\x20\x70\141\147\145\x2e"); return false; euskosgaksmimgug: if (!($this->cskwmweqysskwckg("\x75\x72\x69") && !$this->qweiomkkuikwugks())) { goto iusaeoimukymskgs; } $this->yauwooaeicgosquo("\x50\x61\x67\145\x20\151\163\40\x65\170\x63\154\x75\x64\145\144\56"); return false; iusaeoimukymskgs: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\x63\x74\x65\x64\137\143\x6f\157\x6b\151\145") && $this->cokqaygwwygweuyk())) { goto asciaakaoygususy; } $this->yauwooaeicgosquo("\105\x78\x63\x6c\x75\144\x65\x64\40\143\x6f\157\x6b\151\x65\40\146\x6f\x75\x6e\x64\56", ["\x65\170\143\154\165\x64\x65\144\137\x63\157\157\153\151\145\x73" => $this->cokqaygwwygweuyk()]); return false; asciaakaoygususy: if (!($this->cskwmweqysskwckg("\x6d\141\156\x64\141\164\x6f\x72\171\x5f\143\x6f\x6f\153\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto eaggoasiwogmquwc; } $this->yauwooaeicgosquo("\115\x69\163\163\x69\156\x67\x20\x6d\141\x6e\x64\141\164\157\x72\171\40\143\x6f\157\153\151\x65\72\x20\x70\x61\x67\145\40\x6e\x6f\164\40\160\162\157\143\x65\163\x73\x65\x64\x2e", ["\x6d\151\163\x73\x69\x6e\x67\x5f\x63\157\157\x6b\151\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; eaggoasiwogmquwc: if (!($this->cskwmweqysskwckg("\x75\x73\145\x72\x5f\141\x67\x65\156\x74") && !$this->mqiqsuksgyekwkii())) { goto meoweqcaaosoomeu; } $this->yauwooaeicgosquo("\125\x73\145\x72\x20\x41\x67\145\x6e\164\x20\x69\x73\40\145\170\x63\x6c\165\x64\x65\x64\x2e", ["\165\x73\145\x72\x5f\141\147\x65\156\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\137\x55\x53\105\122\137\x41\107\x45\x4e\124")]); return false; meoweqcaaosoomeu: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ywmoieqkigsykequ; } $this->yauwooaeicgosquo("\102\x75\x66\146\145\x72\40\x63\157\x6e\164\145\x6e\x74\x20\165\156\144\x65\162\x20\x32\65\x35\x20\x63\x68\x61\162\141\143\164\x65\x72\x73\56"); return false; ywmoieqkigsykequ: if (!(http_response_code() !== 200)) { goto iaousaauoawkqkkg; } $this->yauwooaeicgosquo("\x50\x61\147\145\40\x69\x73\40\156\x6f\164\40\x61\x20\x32\x30\60\x20\x48\124\x54\120\40\162\145\163\x70\157\x6e\163\145\40\x61\156\144\x20\x63\141\x6e\x6e\x6f\164\x20\x62\145\x20\x63\x61\x63\x68\x65\144\x2e"); return false; iaousaauoawkqkkg: if (!($this->cskwmweqysskwckg("\144\157\156\x6f\x74\157\x70\164\151\x6d\151\172\x65\x70\141\147\x65") && $this->cowcgqokiosgaqic())) { goto kkwucaoumyayagcq; } $this->yauwooaeicgosquo("\104\117\116\x54\117\x50\124\111\x4d\111\x5a\105\104\120\x41\x47\x45\x20\x69\163\40\x64\145\146\151\156\x65\144\56\40\120\x61\x67\145\40\x63\141\156\x6e\x6f\x74\40\x62\145\x20\143\x61\x63\x68\145\144\x2e"); return false; kkwucaoumyayagcq: if (!($this->cskwmweqysskwckg("\x77\160\137\x34\x30\64") && $this->kmmyuiwaogukwqqi())) { goto muwyuiikuywigwso; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\64\40\160\141\x67\145\x20\x69\x73\x20\145\170\x63\154\x75\144\145\144\56"); return false; muwyuiikuywigwso: if (!($this->cskwmweqysskwckg("\x73\145\141\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto gikaiicgqyueeoco; } $this->yauwooaeicgosquo("\x53\x65\x61\162\143\x68\40\x70\x61\x67\145\x20\151\163\x20\145\x78\143\154\165\144\145\144\56"); return false; gikaiicgqyueeoco: if (!$this->cskwmweqysskwckg("\151\163\137\x68\x74\155\x6c")) { goto akoiqkoqmmmcieug; } if (!($this->cmaecekuqkwmemms("\x52\105\123\x54\137\122\105\x51\x55\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto akcakssqcqcouwew; } unset($this->tests["\151\163\137\x68\x74\155\x6c"]); akcakssqcqcouwew: akoiqkoqmmmcieug: if (!($this->cskwmweqysskwckg("\x69\x73\x5f\x68\x74\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto cgasgmiiqegqesic; } $this->yauwooaeicgosquo("\116\157\x20\x63\154\x6f\163\x69\156\147\x20\74\57\x68\164\155\154\76\40\167\141\x73\x20\146\x6f\x75\x6e\144\x2e"); return false; cgasgmiiqegqesic: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\137\x6f\160\164\x69\155\x69\x7a\x61\164\x69\x6f\156\137\x61\x6c\154\157\167\x5f\164\x6f\137\x73\164\141\x72\x74\x5f\142\x75\146\x66\x65\162\137\160\x72\x6f\x63\145\x73\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto yamoiggaeugmgkku; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto eqekaoaioiykuaiw; yamoiggaeugmgkku: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); eqekaoaioiykuaiw: return apply_filters("\x70\162\x5f\157\160\164\x69\155\151\x7a\141\164\151\x6f\156\x5f\x68\x61\x73\137{$ymqmyyeuycgmigyo}\x5f\164\145\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\x5c\x73\x2a\x5c\x2f\x5c\x73\x2a\150\164\155\x6c\x5c\x73\52\x3e\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\x3f\x3a\56\x2b\57\51\77" . $wp_rewrite->feed_base . "\50\77\72\57\50\x3f\72\x2e\x2b\x2f\77\x29\77\x29\x3f\44"; return (bool) preg_match("\43\136\50{$uckmmkmoeikwsiqg}\x29\x24\x23\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\145\166\137\155\x6f\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qoiuwyogucoeaoew; } return $this->eecucukcqkqysiau(__FUNCTION__); qoiuwyogucoeaoew: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qkkqiagwgaoyauki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qkkqiagwgaoyauki: $ucasskoyoewwmmii = ["\x72\157\x62\157\x74\163\x2e\164\x78\164", "\56\x68\164\141\143\143\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto gioqkcywauuckmua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gioqkcywauuckmua: iqeqqwcmaiqakawc: } oyywywoqaqcykucs: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto miaiggsoiaekmqwy; } return $this->eecucukcqkqysiau(__FUNCTION__); miaiggsoiaekmqwy: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto uqagqomggiacosqm; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto suoymucmyegewkmu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suoymucmyegewkmu: uqagqomggiacosqm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mwskgsimqagmkcgq; } return $this->eecucukcqkqysiau(__FUNCTION__); mwskgsimqagmkcgq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto mkuigmcgkawyawee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mkuigmcgkawyawee: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\156\x64\x65\x78\56\x70\150\160")) { goto ouqwmaaskykywyqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ouqwmaaskykywyqo: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\x78\x6d\154" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\x49\x4e\107\137\x41\112\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\x53")), ["\157\156", "\61"]) || "\64\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\126\x45\122\x5f\x50\117\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\x5f\x63\165\163\x74\157\155\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\x54" => 1, "\x48\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto agqmoymkiswqswqo; } return $this->eecucukcqkqysiau(__FUNCTION__); agqmoymkiswqswqo: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto kwaqakoogeiacmwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwaqakoogeiacmwi: $yccgiaiouekkouay = ["\163" => 1, "\154\141\x6e\x67" => 1, "\x70\x65\162\x6d\x61\x6c\x69\x6e\153\137\x6e\x61\155\145" => 1, "\154\160\x2d\x76\x61\162\x69\x61\x74\x69\x6f\x6e\55\151\x64" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ccqgkeesikyegcik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ccqgkeesikyegcik: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\x5f\161\165\x65\162\171\137\x73\x74\x72\151\156\147\x73"); if ($yccgiaiouekkouay) { goto aakwscykmyyykoms; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aakwscykmyyykoms: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iiuawywwoaeyauge; } return $this->eecucukcqkqysiau(__FUNCTION__); iiuawywwoaeyauge: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto wcoqiwuusoeqiqwi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wcoqiwuusoeqiqwi: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oqwyemgwoossauyk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oqwyemgwoossauyk: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto kcqieuukskyiywss; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; kcqieuukskyiywss: yuoyackaoigyyyso: } cwcmwogseemgqgqq: if (empty($eiocugauqgouiuyi)) { goto wukuisoeoeomgegu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wukuisoeoeomgegu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsimeiqkoyqkuecq; } return $this->eecucukcqkqysiau(__FUNCTION__); gsimeiqkoyqkuecq: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gqywcowiigceimaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqywcowiigceimaw: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\141\x63\150\145\137\x6d\x61\x6e\x64\x61\x74\x6f\x72\171\x5f\143\157\157\153\x69\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto eyuoecmogqwkmomi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); eyuoecmogqwkmomi: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto mgwgiesscqoaqcau; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); mgwgiesscqoaqcau: geugsymgsiuuqccg: } quewwumogiocouii: if (!empty($yiycakoikkyuokgk)) { goto ioacywuoyuskqmwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ioacywuoyuskqmwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\137\157\x70\164\x69\x6d\151\172\x61\x74\151\x6f\x6e\x5f\157\x76\x65\162\162\151\144\145\x5f\x64\157\x6e\164\x5f\x6f\160\164\151\155\x69\172\x65", $this->cmaecekuqkwmemms("\120\x52\137\117\x50\x54\111\x4d\111\132\x41\x54\111\x4f\x4e\137\x44\117\x4e\x54\x5f\117\120\124\x49\x4d\x49\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\64\x30\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\137\163\145\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\157\x70\x74\151\155\x69\172\141\164\x69\157\156\x5f\x6f\x70\164\x69\155\x69\172\145\x5f\x73\x65\x61\x72\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\x5f\163\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto bgoygegmogcmeaou; } return $this->eecucukcqkqysiau(__FUNCTION__); bgoygegmogcmeaou: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto awgaewwsskasueke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); awgaewwsskasueke: if (!$this->aceaeommyuooiqge()->get("\155\157\142\x69\154\x65\137\x63\x61\x63\150\145")) { goto cgmcwkmmcmmkiooc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cgmcwkmmcmmkiooc: $wayquiskgeuoqamk = "\62\56\60\134\40\x4d\115\120\174\x32\64\60\170\x33\62\60\x7c\x34\60\60\x58\x32\64\x30\174\101\166\x61\x6e\x74\x47\157\174\x42\154\141\x63\x6b\102\x65\162\162\x79\x7c\x42\x6c\141\x7a\x65\x72\174\103\145\154\x6c\x70\x68\157\x6e\145\x7c\104\x61\156\147\145\162\x7c\x44\x6f\x43\x6f\115\x6f\174\105\x6c\x61\151\x6e\x65\x2f\x33\x2e\60\x7c\x45\165\144\x6f\162\141\x57\145\142\174\107\157\157\x67\x6c\145\x62\157\x74\55\x4d\x6f\x62\x69\154\145\x7c\150\151\x70\164\x6f\160\174\111\x45\x4d\157\x62\151\x6c\x65\174\x4b\x59\x4f\103\x45\122\x41\57\x57\130\63\61\60\113\x7c\x4c\x47\x2f\x55\x39\x39\60\x7c\115\111\x44\x50\x2d\x32\x2e\174\115\115\105\x46\62\60\174\115\117\x54\x2d\126\174\116\x65\164\106\162\x6f\156\164\x7c\116\x65\167\x74\174\x4e\x69\x6e\x74\x65\156\144\x6f\134\x20\127\151\x69\174\x4e\151\164\162\x6f\174\x4e\157\153\151\141\x7c\117\x70\145\x72\141\134\40\115\x69\156\x69\174\x50\x61\x6c\155\174\120\154\141\171\123\x74\x61\164\x69\157\156\x5c\x20\120\157\162\164\141\x62\154\x65\x7c\x70\157\x72\x74\x61\154\155\x6d\155\x7c\120\162\157\x78\x69\x6e\145\164\x7c\x50\162\x6f\170\151\116\x65\164\x7c\x53\x48\101\122\120\55\x54\x51\55\x47\x58\61\x30\174\123\x48\107\55\x69\71\60\x30\174\123\155\x61\x6c\x6c\174\123\x6f\x6e\171\105\162\151\x63\163\163\x6f\x6e\174\x53\171\155\x62\151\x61\x6e\x5c\x20\117\123\174\123\171\x6d\142\151\x61\x6e\x4f\x53\x7c\x54\x53\x32\61\151\55\61\x30\174\125\120\56\x42\162\x6f\167\x73\145\x72\174\125\120\x2e\114\151\x6e\153\174\x77\x65\142\x4f\x53\x7c\x57\151\156\x64\x6f\167\163\134\40\x43\x45\x7c\127\x69\156\127\x41\120\174\131\141\x68\x6f\x6f\x53\x65\x65\153\x65\162\57\115\x31\101\x31\55\x52\x32\x44\x32\174\x69\x50\x68\157\x6e\145\x7c\151\x50\157\x64\x7c\101\156\144\162\157\x69\x64\x7c\x42\x6c\x61\143\153\x42\x65\162\x72\x79\x39\65\x33\x30\x7c\114\107\x2d\x54\x55\71\61\65\x5c\40\117\142\151\147\157\174\114\x47\x45\x5c\x20\x56\130\x7c\167\x65\142\117\123\174\116\157\x6b\x69\141\x35\x38\x30\60"; if (!preg_match("\x23\136\x2e\52\x28{$wayquiskgeuoqamk}\x29\x2e\x2a\43\151", $uowwycywwssskuys)) { goto iamooqskosymqsmw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iamooqskosymqsmw: $wayquiskgeuoqamk = "\x77\x33\x63\134\40\174\x77\x33\x63\x2d\174\141\x63\163\55\174\141\154\x61\x76\174\x61\x6c\143\141\x7c\x61\155\157\x69\x7c\x61\165\144\151\174\x61\x76\141\x6e\174\x62\145\156\x71\x7c\142\151\162\144\174\142\x6c\x61\x63\174\142\x6c\141\172\x7c\x62\162\145\167\x7c\x63\145\x6c\x6c\x7c\143\x6c\x64\x63\x7c\x63\155\x64\55\174\144\x61\156\x67\x7c\144\157\143\157\174\x65\x72\x69\143\x7c\150\x69\x70\x74\174\150\x74\x63\x5f\x7c\x69\156\156\x6f\174\151\160\141\x71\x7c\151\x70\157\144\x7c\x6a\151\x67\x73\x7c\x6b\144\144\x69\174\x6b\x65\x6a\x69\174\x6c\x65\156\x6f\x7c\x6c\147\55\143\x7c\154\x67\55\x64\x7c\154\x67\x2d\x67\174\x6c\x67\x65\x2d\174\x6c\147\x2f\165\174\155\141\165\x69\x7c\155\x61\x78\x6f\x7c\x6d\151\x64\160\174\155\x69\164\163\174\x6d\155\145\146\x7c\x6d\x6f\142\151\x7c\155\x6f\164\55\174\155\157\x74\x6f\x7c\x6d\167\142\160\174\x6e\145\143\55\174\x6e\145\167\164\174\x6e\157\153\151\x7c\160\x61\154\x6d\x7c\x70\x61\156\x61\x7c\x70\x61\x6e\164\174\x70\x68\151\154\174\x70\154\x61\x79\174\x70\x6f\162\x74\x7c\x70\x72\x6f\170\174\x71\x77\x61\160\174\x73\x61\x67\x65\174\x73\x61\155\163\174\x73\141\x6e\x79\x7c\x73\x63\x68\55\x7c\x73\x65\143\x2d\x7c\x73\145\156\144\x7c\x73\x65\x72\151\174\163\147\150\x2d\174\163\150\141\x72\x7c\x73\151\145\x2d\174\x73\151\145\x6d\x7c\163\x6d\141\x6c\174\163\155\x61\162\174\x73\157\156\x79\x7c\x73\x70\150\x2d\174\163\171\x6d\x62\x7c\164\55\155\157\174\x74\145\154\x69\x7c\x74\x69\x6d\55\x7c\x74\x6f\163\150\174\x74\x73\155\55\174\x75\x70\x67\x31\174\x75\x70\163\x69\174\166\153\55\166\174\x76\x6f\144\141\x7c\x77\141\x70\x2d\174\x77\141\x70\141\174\x77\141\160\x69\174\x77\141\160\160\174\x77\x61\160\x72\x7c\x77\145\x62\143\x7c\167\x69\156\167\174\x77\151\156\x77\x7c\170\x64\141\134\40\174\170\x64\x61\x2d"; if (!preg_match("\x23\x5e\50{$wayquiskgeuoqamk}\x29\x2e\52\43\x69", $uowwycywwssskuys)) { goto wwccoougkywoaoui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwccoougkywoaoui: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eygqeoiskweuiuqi; } return $this->eecucukcqkqysiau(__FUNCTION__); eygqeoiskweuiuqi: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto uykwmucgoywoesui; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uykwmucgoywoesui: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\143\x68\x65\137\162\145\152\145\143\x74\137\x75\141"); if ($mqsuiayuwmwqaqwm) { goto iisieuaeyiqwckou; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iisieuaeyiqwckou: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oskwkeaemiqcaqkc; } return $this->eecucukcqkqysiau(__FUNCTION__); oskwkeaemiqcaqkc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\162\145\x6a\145\143\164\137\165\x72\151"); if ($escsaeeosigewsme) { goto kiqmcymowosckmii; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kiqmcymowosckmii: $yciaosuiyeieceug = !preg_match("\43\136\50{$escsaeeosigewsme}\51\x24\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\125\123\105\122\137\101\x47\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iaygaasesyymwgss; } return $this->eecucukcqkqysiau(__FUNCTION__); iaygaasesyymwgss: $yygmoeguaqyumuui = [ "\x48\x54\124\x50\x5f\x43\106\x5f\x43\x4f\x4e\116\105\103\x54\111\116\107\x5f\111\120", "\x48\124\124\120\x5f\x43\x4c\x49\x45\116\124\137\111\x50", "\110\x54\124\120\137\130\x5f\106\117\x52\127\101\122\104\x45\x44\137\x46\117\x52", "\x48\124\124\x50\x5f\x58\137\106\117\x52\x57\x41\x52\x44\x45\104", "\110\x54\124\x50\x5f\130\137\103\x4c\125\x53\124\x45\x52\x5f\x43\114\111\105\x4e\x54\x5f\111\120", "\110\124\124\x50\137\x58\137\122\x45\101\114\x5f\x49\x50", "\110\x54\124\x50\x5f\x46\117\x52\x57\x41\x52\104\x45\x44\x5f\106\117\122", "\110\x54\124\120\x5f\106\x4f\x52\x57\x41\122\x44\x45\104", "\122\105\x4d\x4f\124\x45\x5f\x41\104\104\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto qsyqcokomswykyso; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wqmwcuggcisqieao; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wqmwcuggcisqieao: qsyqcokomswykyso: iacwyogogoccmwsg: } iwosouqsesoqcska: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\x2e\x30\x2e\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto issgmmkcgesyeoas; } return $this->eecucukcqkqysiau(__FUNCTION__); issgmmkcgesyeoas: $yywgiquyoymymqwk = [ "\x32\x30\70\x2e\x37\60\56\x32\x34\67\x2e\61\x35\67" => '', "\x31\67\62\56\x32\x35\x35\56\x34\70\x2e\x31\63\60" => '', "\61\x37\x32\x2e\x32\x35\65\x2e\64\x38\x2e\61\63\61" => '', "\61\67\62\56\62\65\65\x2e\x34\x38\x2e\x31\63\62" => '', "\61\x37\x32\56\62\65\65\56\64\x38\x2e\61\63\63" => '', "\61\x37\x32\x2e\x32\x35\x35\56\64\70\56\x31\x33\x34" => '', "\61\67\62\x2e\x32\65\65\x2e\64\x38\56\61\x33\x35" => '', "\x31\67\62\56\62\x35\65\x2e\64\70\56\61\x33\66" => '', "\61\67\62\x2e\x32\65\65\56\x34\x38\56\61\63\67" => '', "\x31\x37\x32\56\x32\65\65\56\x34\x38\56\61\63\70" => '', "\61\x37\62\x2e\62\x35\65\x2e\64\70\x2e\61\x33\71" => '', "\61\67\62\x2e\62\65\x35\x2e\64\x38\x2e\x31\x34\x30" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\64\70\56\61\64\x31" => '', "\x31\67\62\56\62\x35\x35\x2e\x34\70\56\x31\x34\62" => '', "\61\67\62\x2e\x32\65\65\56\64\x38\x2e\61\64\63" => '', "\61\x37\62\x2e\62\x35\65\x2e\x34\70\56\x31\x34\x34" => '', "\61\x37\x32\56\x32\65\65\x2e\x34\70\56\61\64\x35" => '', "\x31\x37\x32\x2e\62\x35\65\x2e\x34\70\x2e\x31\64\x36" => '', "\61\x37\62\56\62\65\x35\56\64\x38\x2e\x31\64\x37" => '', "\x35\62\x2e\x32\62\x39\56\61\x32\62\56\62\64\x30" => '', "\x31\60\x34\56\62\61\x34\x2e\67\62\56\x31\x30\x31" => '', "\x31\x33\x2e\66\66\56\x37\56\x31\x31" => '', "\x31\x33\x2e\x38\65\56\62\x34\x2e\70\63" => '', "\x31\x33\56\70\x35\56\x32\x34\x2e\x39\x30" => '', "\x31\x33\56\70\x35\56\x38\x32\56\62\66" => '', "\64\x30\x2e\x37\64\x2e\62\x34\62\x2e\x32\65\x33" => '', "\64\x30\56\x37\x34\56\x32\x34\63\x2e\x31\63" => '', "\x34\60\56\67\x34\x2e\62\x34\x33\x2e\x31\67\x36" => '', "\61\60\64\x2e\x32\61\x34\56\x34\x38\56\62\64\x37" => '', "\61\65\67\56\65\x35\x2e\x31\x38\71\56\x31\70\71" => '', "\61\60\64\56\x32\61\64\56\61\x31\60\56\x31\x33\65" => '', "\x37\x30\56\x33\x37\x2e\70\63\56\62\64\60" => '', "\66\x35\x2e\65\x32\56\x33\66\56\62\x35\x30" => '', "\x31\63\56\x37\x38\56\x32\61\66\x2e\x35\x36" => '', "\65\62\56\x31\x36\x32\x2e\x32\61\62\56\61\x36\63" => '', "\x32\x33\56\x39\x36\x2e\x33\x34\56\x31\60\x35" => '', "\66\x35\x2e\65\x32\56\x31\x31\63\56\x32\x33\x36" => '', "\61\x37\x32\56\x32\x35\65\x2e\x36\x31\x2e\x33\64" => '', "\x31\x37\x32\x2e\x32\x35\65\56\66\x31\x2e\x33\x35" => '', "\61\67\x32\x2e\x32\65\65\56\x36\61\56\x33\66" => '', "\61\67\x32\56\62\65\65\56\66\61\x2e\63\x37" => '', "\61\x37\62\x2e\x32\65\65\x2e\66\x31\56\63\x38" => '', "\x31\x37\x32\56\x32\65\x35\x2e\66\61\x2e\x33\x39" => '', "\x31\x37\x32\x2e\62\x35\x35\56\66\x31\56\64\x30" => '', "\65\x32\x2e\62\x33\x37\56\x32\63\x35\56\x31\x38\65" => '', "\65\62\x2e\x32\63\x37\56\62\x35\60\56\x37\63" => '', "\x35\62\x2e\62\63\x37\x2e\x32\63\x36\56\x31\x34\x35" => '', "\61\x30\x34\56\64\61\x2e\x32\56\x31\x39" => '', "\61\x39\x31\x2e\x32\63\65\56\71\x38\x2e\x31\66\x34" => '', "\x31\71\x31\x2e\x32\x33\x35\56\x39\71\56\x32\x32\x31" => '', "\61\71\61\x2e\x32\63\62\56\x31\71\x34\56\x35\x31" => '', "\x31\x30\x34\56\62\61\x31\x2e\x31\64\x33\x2e\x38" => '', "\x31\60\x34\x2e\x32\x31\61\56\61\66\x35\56\65\63" => '', "\x35\x32\x2e\x31\x37\x32\56\61\x34\x2e\x38\67" => '', "\64\60\56\70\x33\56\x38\71\56\62\x31\64" => '', "\65\62\x2e\61\67\x35\56\x35\x37\x2e\70\x31" => '', "\x32\60\x2e\61\x38\70\x2e\x36\63\x2e\61\65\x31" => '', "\x32\60\56\x35\62\56\x33\66\56\64\x39" => '', "\65\62\x2e\x32\64\66\x2e\x31\66\65\x2e\x31\x35\x33" => '', "\x35\x31\x2e\61\64\x34\56\61\60\x32\x2e\x32\63\x33" => '', "\61\63\56\x37\x36\x2e\x39\x37\56\62\x32\x34" => '', "\61\60\62\56\61\x33\63\x2e\61\66\x39\x2e\x36\66" => '', "\65\x32\56\62\x33\x31\x2e\x31\x39\71\x2e\x31\x37\60" => '', "\61\x33\x2e\x35\x33\x2e\61\66\x32\56\67" => '', "\64\x30\56\x31\62\x33\56\x32\61\70\56\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto yeiicwscguyokwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yeiicwscguyokwyu: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\137\x55\123\105\122\x5f\101\x47\105\116\124"); if ($uowwycywwssskuys) { goto yueosioyegouuwqo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yueosioyegouuwqo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\x69\x6e\147\144\157\x6d\120\x61\147\x65\123\160\145\x65\x64\x7c\104\x61\162\x65\x42\x6f\x6f\x73\x74\174\x47\x6f\x6f\147\x6c\145\x7c\120\x54\x53\x54\174\103\150\162\157\155\x65\55\114\x69\x67\x68\x74\x68\x6f\x75\163\x65\174\x57\120\40\122\x6f\x63\x6b\145\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\125\105\x53\124\137\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto giuoqsumkimmuaya; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); giuoqsumkimmuaya: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto mssaawaiaimogowg; } return ''; mssaawaiaimogowg: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ccyiggckemwgooco; } return $magawcseesgowoeo; ccyiggckemwgooco: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto umamqqwcoewcigew; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); umamqqwcoewcigew: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\105\x53\124\137\115\105\124\110\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto gaiaucesmcqgqwac; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\137\x69\x67\156\x6f\162\x65\x64\137\x70\141\162\141\x6d\145\164\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto swkeiggkawwgewuw; } ksort($eyagkkkqkwcuygso); swkeiggkawwgewuw: gaiaucesmcqgqwac: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; oaskqsoyesmmeaew: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto kuimgwmkcgcoecko; } if (strpos($euueacigmgoqkimu, "\56\56\57") === 0) { goto cquyuwsisgqscemm; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto wammkmaqucqagqww; } if (strpos($euueacigmgoqkimu, "\57\56\x2f") === 0) { goto sikmqkecsiyciaei; } if ("\57\56" === $euueacigmgoqkimu) { goto yyyyawaqcowsgqcs; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2e\57") === 0) { goto wmcucyuieqgqisis; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto ywqouwqomiqwoquu; } if ("\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto yywwaaiicukuwcao; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto aacaoywsaqscgyua; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto miigqygoawqmkkqm; aacaoywsaqscgyua: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); miigqygoawqmkkqm: goto eykiuqsamowqykam; yywwaaiicukuwcao: $euueacigmgoqkimu = ''; eykiuqsamowqykam: goto qcwkymcgqacaaywc; ywqouwqomiqwoquu: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); qcwkymcgqacaaywc: goto qwsmiaegmcwuskwi; wmcucyuieqgqisis: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); qwsmiaegmcwuskwi: goto usmagcaocwiugqum; yyyyawaqcowsgqcs: $euueacigmgoqkimu = "\x2f"; usmagcaocwiugqum: goto wmycwscioqackeig; sikmqkecsiyciaei: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmycwscioqackeig: goto iuooqassskiyeemo; wammkmaqucqagqww: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); iuooqassskiyeemo: goto imykswegcuekqwio; cquyuwsisgqscemm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); imykswegcuekqwio: goto oaskqsoyesmmeaew; kuimgwmkcgcoecko: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto eokikuciuqkyauum; } eokikuciuqkyauum: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ykuqeyogsasokqis; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ykuqeyogsasokqis: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto mqaamqyoywyekiko; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); mqaamqyoywyekiko: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\163\163\x61\147\x65" => $uamcoiueqaamsqma, "\143\157\156\x74\x65\x78\164" => $icwicymcioeyeyek]; } }
