<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd9008d45             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\x69" => 1, "\163\163\154" => 0, "\x77\x70\137\64\60\x34" => 1, "\163\145\141\162\143\x68" => 1, "\155\x6f\x62\x69\154\x65" => 1, "\x69\163\137\150\164\x6d\x6c" => 1, "\x71\x75\145\x72\171\137\163\164\x72\151\156\147" => 1, "\x64\157\156\x6f\164\143\x61\x63\150\x65\x70\x61\147\145" => 1, "\x72\145\152\x65\143\x74\x65\144\x5f\143\x6f\157\x6b\x69\x65" => 1, "\155\x61\156\144\141\164\x6f\x72\171\x5f\x63\x6f\157\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (!empty($ywmkwiwkosakssii["\164\145\x73\x74\x73"])) { $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\164\163"]); } if (!isset($ywmkwiwkosakssii["\143\x6f\157\x6b\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE)) { $ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\163"] = $_COOKIE; } if (!isset($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && !empty($_POST) && is_array($_POST)) { $ywmkwiwkosakssii["\160\157\163\x74"] = $_POST; } if (!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET)) { $ywmkwiwkosakssii["\147\x65\x74"] = $_GET; } $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\147\x65\x74"]) ? $ywmkwiwkosakssii["\147\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\163\x74"]) && is_array($ywmkwiwkosakssii["\x70\157\x73\164"]) ? $ywmkwiwkosakssii["\x70\x6f\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\145\163"]) && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\x65\163"]) ? $ywmkwiwkosakssii["\143\x6f\157\153\x69\x65\x73"] : []; if ($this->ayueggmoqeeukqmq()) { $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\137\143\x75\163\164\157\155\151\x7a\145" => '']); } } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if ($this->aiukiaokcgsiomew()) { $this->yauwooaeicgosquo("\104\x65\166\40\115\157\x64\145\x20\x45\156\141\x62\x6c\145\x64\40\x61\156\x64\x20\x61\154\154\40\162\145\161\x75\x65\x73\164\x20\151\163\40\142\171\160\x61\163\163\x2e"); return false; } if ($this->kgkoeoeseyuugaao()) { $this->yauwooaeicgosquo("\122\157\x62\157\x74\x73\56\164\x78\164\x20\x6f\162\40\x2e\x68\164\x61\143\x63\x65\x73\x73\x20\146\x69\154\145\x20\151\x73\40\x65\170\143\x6c\165\144\x65\x64\56"); return false; } if ($this->gymgcceeqssmesiu()) { $this->yauwooaeicgosquo("\120\110\x50\54\40\130\115\114\x2c\40\x6f\x72\40\x58\123\114\x20\x66\151\x6c\145\x20\x69\163\x20\145\170\143\154\x75\144\145\144\56"); return false; } if ($this->goecwaaykqoaaagg()) { $this->yauwooaeicgosquo("\x41\x64\x6d\x69\x6e\x20\157\x72\40\x41\x4a\101\x58\40\x55\x52\114\40\151\163\40\145\x78\x63\x6c\165\144\145\144\56"); return false; } if ($this->sgsscqasgeyeicoe()) { $this->yauwooaeicgosquo("\101\144\155\x69\156\x20\x6f\162\40\101\112\x41\x58\40\125\x52\114\x20\151\x73\x20\145\170\x63\x6c\165\144\145\144\56"); return false; } if (!$this->gooeyogikcusgwuu()) { $this->yauwooaeicgosquo("\122\x65\x71\165\x65\x73\164\40\x6d\145\164\x68\x6f\144\x20\151\x73\40\x6e\x6f\x74\x20\141\154\x6c\x6f\x77\x65\144\56\40\x50\141\147\x65\40\143\141\x6e\x6e\x6f\x74\40\x62\145\40\143\x61\143\150\x65\144\x2e", ["\x72\x65\161\x75\145\x73\164\137\x6d\x65\164\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; } if (!$this->cskwmweqysskwckg()) { $this->lastError = []; return true; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!$uiewakwqscemywuo["\163\165\143\x63\145\x73\163"]) { $this->yauwooaeicgosquo("\116\x6f\40\x63\x6f\x6e\146\151\147\x20\146\151\x6c\x65\x20\146\157\x75\156\144", ["\143\x6f\x6e\x66\x69\x67\137\160\141\164\x68" => $uiewakwqscemywuo["\160\141\x74\150"]]); return false; } if ($this->cskwmweqysskwckg("\x71\x75\145\x72\x79\137\x73\x74\162\x69\x6e\x67") && !$this->koguieumooaesyww()) { $this->yauwooaeicgosquo("\x51\165\x65\162\171\x20\163\164\x72\x69\x6e\x67\x20\x55\x52\x4c\x20\x69\x73\x20\145\170\x63\x6c\165\144\145\x64\56", $_GET); return false; } if ($this->cskwmweqysskwckg("\163\163\154") & !$this->eqwgocqwoyyykwke()) { $this->yauwooaeicgosquo("\123\x53\x4c\40\143\x61\143\150\x65\40\156\157\164\40\x61\x70\x70\x6c\x69\145\x64\40\164\x6f\x20\x70\141\x67\x65\x2e"); return false; } if ($this->cskwmweqysskwckg("\x75\x72\151") && !$this->qweiomkkuikwugks()) { $this->yauwooaeicgosquo("\120\141\x67\145\x20\x69\x73\40\145\x78\x63\154\165\144\x65\144\56"); return false; } if ($this->cskwmweqysskwckg("\x72\145\152\145\143\x74\145\x64\137\x63\x6f\157\153\x69\145") && $this->cokqaygwwygweuyk()) { $this->yauwooaeicgosquo("\105\x78\143\x6c\x75\144\x65\144\40\143\157\x6f\x6b\151\145\x20\x66\x6f\x75\x6e\144\56", ["\x65\170\x63\154\x75\144\145\x64\x5f\143\x6f\x6f\153\151\x65\163" => $this->cokqaygwwygweuyk()]); return false; } if ($this->cskwmweqysskwckg("\x6d\141\156\144\x61\x74\x6f\162\171\137\x63\x6f\x6f\x6b\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea())) { $this->yauwooaeicgosquo("\115\151\163\x73\151\x6e\x67\x20\155\x61\x6e\x64\141\164\x6f\x72\x79\x20\143\x6f\x6f\153\151\145\x3a\x20\x70\141\x67\145\x20\156\157\x74\40\x70\x72\x6f\143\x65\x73\x73\x65\x64\56", ["\x6d\x69\x73\163\151\x6e\x67\x5f\143\157\157\153\151\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; } if ($this->cskwmweqysskwckg("\165\163\145\x72\137\x61\147\145\x6e\x74") && !$this->mqiqsuksgyekwkii()) { $this->yauwooaeicgosquo("\125\x73\145\x72\40\101\147\x65\x6e\164\x20\151\x73\x20\x65\x78\x63\x6c\165\x64\x65\x64\x2e", ["\x75\163\145\162\137\141\147\x65\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\x55\123\x45\x52\x5f\x41\107\x45\x4e\x54")]); return false; } $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (strlen($moooemyaqewumiay) <= 255) { $this->yauwooaeicgosquo("\x42\165\146\x66\x65\x72\x20\x63\x6f\x6e\x74\145\156\x74\40\165\156\x64\x65\162\x20\62\x35\65\x20\x63\x68\x61\x72\x61\x63\164\145\x72\163\56"); return false; } if (http_response_code() !== 200) { $this->yauwooaeicgosquo("\120\141\147\x65\x20\x69\x73\x20\156\157\x74\x20\x61\x20\x32\x30\60\40\x48\124\124\x50\40\162\x65\163\160\x6f\156\163\145\x20\141\x6e\144\40\x63\141\156\x6e\x6f\164\40\x62\x65\x20\x63\141\143\150\x65\x64\x2e"); return false; } if ($this->cskwmweqysskwckg("\144\157\x6e\157\164\157\x70\x74\x69\155\151\x7a\145\x70\141\x67\145") && $this->cowcgqokiosgaqic()) { $this->yauwooaeicgosquo("\104\117\116\124\x4f\120\x54\111\115\111\x5a\x45\x44\120\101\107\105\x20\x69\x73\40\144\145\146\151\156\145\x64\56\40\x50\141\147\x65\x20\143\141\x6e\x6e\157\x74\x20\x62\145\40\143\141\143\x68\x65\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\x77\x70\x5f\64\60\64") && $this->kmmyuiwaogukwqqi()) { $this->yauwooaeicgosquo("\127\x50\40\64\60\64\x20\x70\x61\x67\x65\40\x69\163\40\145\170\x63\154\x75\144\x65\x64\56"); return false; } if ($this->cskwmweqysskwckg("\163\x65\x61\162\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk()) { $this->yauwooaeicgosquo("\x53\145\141\162\x63\150\40\x70\141\147\x65\40\151\x73\40\145\170\143\x6c\x75\144\x65\144\56"); return false; } if ($this->cskwmweqysskwckg("\151\163\137\x68\x74\x6d\x6c")) { if ($this->cmaecekuqkwmemms("\x52\105\x53\x54\137\x52\x45\x51\125\x45\x53\124") || $this->gaiygescoqgyusaa()) { unset($this->tests["\x69\x73\137\150\x74\x6d\x6c"]); } } if ($this->cskwmweqysskwckg("\x69\x73\137\150\x74\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $this->yauwooaeicgosquo("\x4e\157\40\143\154\x6f\163\x69\156\147\40\74\x2f\150\164\155\154\x3e\40\x77\141\x73\x20\x66\157\165\156\x64\56"); return false; } $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\137\157\x70\164\151\x6d\151\x7a\x61\164\151\157\156\x5f\x61\154\154\x6f\x77\x5f\x74\157\137\x73\x74\141\x72\x74\x5f\x62\x75\x66\x66\145\162\137\160\162\x6f\143\145\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); } else { $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; } return apply_filters("\x70\x72\137\157\160\x74\x69\155\x69\172\x61\x74\x69\157\156\x5f\x68\x61\163\137{$ymqmyyeuycgmigyo}\x5f\x74\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\134\163\52\x5c\57\134\x73\x2a\x68\x74\x6d\154\134\163\52\76\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\x3f\72\x2e\53\57\x29\77" . $wp_rewrite->feed_base . "\50\x3f\x3a\x2f\50\x3f\72\56\x2b\x2f\77\51\x3f\51\x3f\x24"; return (bool) preg_match("\x23\136\x28{$uckmmkmoeikwsiqg}\x29\x24\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\166\137\x6d\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if (!$iyiwooigkweeewey) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $ucasskoyoewwmmii = ["\162\157\x62\157\164\x73\x2e\x74\170\x74", "\56\x68\x74\x61\x63\143\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if ($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[0] === $magawcseesgowoeo) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if (!$iyiwooigkweeewey) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (strtolower($iyiwooigkweeewey) === "\57\151\156\144\145\x78\x2e\160\150\x70") { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\150\160" => 1, "\x78\x6d\154" => 1, "\170\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\x49\x4e\x47\x5f\101\112\x41\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\123")), ["\157\x6e", "\61"]) || "\x34\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\x56\105\x52\x5f\x50\117\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\143\x75\163\x74\x6f\155\x69\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\x48\105\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if (!$eyagkkkqkwcuygso) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\x6e\x67" => 1, "\160\x65\x72\x6d\141\x6c\x69\x6e\x6b\x5f\x6e\x61\155\145" => 1, "\x6c\x70\x2d\166\141\x72\151\x61\x74\x69\x6f\156\x2d\x69\144" => 1]; if (array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\161\165\145\x72\171\137\163\164\162\x69\x6e\147\x73"); if (!$yccgiaiouekkouay) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if (!$osqkgokmuiasuukg) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if (!$eymuoguywceaakys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { $eiocugauqgouiuyi[] = $aecgggeoymywyumm; } } if (!empty($eiocugauqgouiuyi)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if (!$aaswuawqmusoucsw) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\x5f\155\x61\x6e\144\141\164\x6f\x72\x79\137\x63\157\157\x6b\151\145\x73"))); if (!$this->wemyikwikgwqwuoc()) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); } foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); } } if (empty($yiycakoikkyuokgk)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\137\x6f\x70\x74\151\x6d\x69\x7a\141\164\151\x6f\x6e\137\157\166\145\162\x72\x69\144\145\137\144\x6f\156\164\137\x6f\x70\x74\151\155\x69\x7a\x65", $this->cmaecekuqkwmemms("\120\x52\x5f\x4f\120\124\111\115\111\132\x41\124\111\x4f\x4e\x5f\x44\x4f\x4e\124\x5f\117\120\124\111\x4d\x49\x5a\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\64\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\163\145\x61\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\x5f\x6f\160\164\x69\x6d\x69\172\141\164\151\157\x6e\x5f\x6f\x70\x74\x69\x6d\x69\172\x65\137\x73\145\x61\162\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\x68\x65\137\x73\x73\x6c"); } public function yaswyamuyysomccg() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } if ($this->aceaeommyuooiqge()->get("\x6d\x6f\142\151\x6c\145\137\143\141\143\150\145")) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $wayquiskgeuoqamk = "\62\56\60\134\x20\115\x4d\120\174\62\x34\60\x78\63\x32\x30\174\64\60\60\130\x32\x34\60\174\x41\166\x61\x6e\x74\x47\157\x7c\102\x6c\x61\x63\153\x42\145\162\x72\x79\174\102\154\x61\x7a\x65\x72\174\x43\145\154\154\160\150\157\x6e\x65\174\104\x61\x6e\147\x65\x72\x7c\104\x6f\103\157\x4d\x6f\x7c\105\154\x61\151\x6e\x65\57\x33\x2e\x30\174\105\165\144\x6f\x72\x61\x57\x65\142\174\x47\x6f\x6f\x67\154\145\x62\157\x74\x2d\x4d\x6f\x62\151\154\145\x7c\x68\x69\160\x74\x6f\160\x7c\x49\x45\x4d\157\142\151\x6c\x65\x7c\113\x59\117\103\x45\122\x41\x2f\127\130\63\61\60\113\174\x4c\x47\x2f\x55\71\71\60\x7c\115\111\x44\x50\55\x32\x2e\174\115\x4d\105\x46\62\x30\x7c\115\x4f\x54\x2d\126\174\x4e\145\x74\106\x72\x6f\x6e\x74\x7c\x4e\x65\167\164\x7c\116\x69\156\x74\145\x6e\144\x6f\x5c\40\x57\x69\151\x7c\116\x69\x74\162\157\174\116\157\153\x69\x61\174\117\160\145\x72\x61\134\40\115\x69\x6e\x69\174\120\141\154\x6d\174\x50\154\x61\x79\123\164\x61\x74\x69\x6f\x6e\134\40\120\x6f\x72\164\141\142\154\x65\174\x70\x6f\162\x74\141\x6c\155\155\155\174\120\x72\x6f\170\151\156\x65\164\174\x50\162\157\x78\x69\116\145\x74\x7c\x53\110\101\x52\x50\x2d\124\x51\55\107\x58\61\x30\x7c\x53\110\107\55\x69\71\60\x30\174\123\155\141\x6c\154\x7c\123\157\156\171\x45\x72\151\143\163\x73\157\x6e\174\x53\x79\155\142\x69\x61\156\x5c\40\117\123\174\123\x79\155\x62\x69\x61\x6e\x4f\123\x7c\124\x53\x32\x31\151\55\x31\x30\174\x55\x50\56\x42\x72\157\x77\x73\145\x72\174\x55\x50\x2e\114\x69\156\153\174\x77\x65\x62\117\x53\x7c\127\x69\156\144\157\x77\x73\134\x20\x43\105\x7c\x57\x69\x6e\x57\x41\120\174\x59\x61\150\x6f\x6f\x53\x65\145\153\145\162\x2f\115\61\x41\x31\55\x52\62\104\x32\x7c\151\120\x68\157\156\x65\x7c\x69\120\x6f\x64\x7c\x41\156\x64\x72\x6f\x69\x64\x7c\102\154\x61\143\x6b\102\x65\162\x72\x79\71\65\63\x30\x7c\114\x47\x2d\x54\x55\x39\x31\x35\134\40\x4f\142\151\x67\x6f\174\114\x47\105\x5c\x20\x56\x58\x7c\167\145\142\x4f\123\174\116\x6f\153\x69\141\65\x38\x30\x30"; if (preg_match("\x23\x5e\56\x2a\x28{$wayquiskgeuoqamk}\x29\x2e\x2a\43\151", $uowwycywwssskuys)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $wayquiskgeuoqamk = "\x77\x33\143\x5c\x20\174\167\63\x63\x2d\x7c\x61\x63\163\55\174\141\x6c\x61\x76\174\141\x6c\x63\x61\174\x61\155\x6f\151\174\x61\x75\x64\x69\x7c\141\166\141\x6e\x7c\x62\145\156\x71\174\x62\x69\162\x64\174\x62\154\x61\x63\x7c\x62\154\x61\172\174\x62\162\x65\x77\174\x63\x65\x6c\154\x7c\x63\x6c\x64\143\x7c\x63\x6d\x64\55\174\144\141\x6e\147\x7c\144\x6f\143\157\174\x65\x72\151\x63\174\150\x69\x70\164\x7c\150\x74\143\137\x7c\x69\x6e\156\x6f\174\151\160\141\x71\x7c\151\x70\157\144\174\x6a\151\147\163\x7c\x6b\x64\144\x69\174\153\x65\x6a\x69\174\154\145\x6e\x6f\174\154\147\55\143\174\154\147\x2d\x64\174\154\x67\x2d\147\174\154\147\x65\x2d\174\x6c\x67\x2f\x75\x7c\155\141\x75\151\x7c\x6d\141\170\x6f\174\x6d\x69\144\160\174\x6d\x69\164\163\174\x6d\155\145\x66\x7c\155\157\142\x69\174\x6d\157\164\55\174\155\157\x74\x6f\174\x6d\167\142\x70\x7c\x6e\145\x63\x2d\174\156\x65\x77\164\174\x6e\157\153\x69\174\x70\141\154\x6d\174\160\141\156\141\174\160\x61\156\164\x7c\160\x68\x69\154\174\160\154\141\x79\x7c\x70\157\x72\x74\174\160\162\157\x78\x7c\x71\167\141\x70\174\x73\141\147\x65\x7c\x73\141\x6d\163\x7c\163\141\x6e\x79\174\163\x63\x68\x2d\x7c\163\x65\x63\55\174\163\x65\156\144\174\x73\x65\x72\x69\x7c\163\147\x68\55\x7c\163\x68\x61\x72\x7c\x73\x69\145\55\174\x73\x69\x65\155\174\x73\x6d\141\154\x7c\x73\155\x61\x72\174\163\x6f\x6e\x79\174\x73\160\150\x2d\x7c\163\x79\155\x62\x7c\x74\x2d\155\x6f\x7c\164\145\x6c\151\x7c\164\x69\x6d\x2d\174\x74\157\163\x68\174\x74\163\x6d\55\174\165\x70\x67\61\x7c\165\160\163\151\174\x76\x6b\55\166\x7c\166\x6f\144\x61\x7c\167\x61\x70\x2d\174\x77\141\160\141\x7c\x77\x61\x70\151\x7c\x77\141\160\x70\x7c\x77\141\x70\x72\174\x77\145\x62\143\174\167\x69\156\167\174\x77\151\x6e\167\x7c\x78\144\x61\134\x20\174\x78\x64\x61\55"; if (preg_match("\x23\x5e\50{$wayquiskgeuoqamk}\x29\56\52\43\x69", $uowwycywwssskuys)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\137\x72\145\x6a\x65\143\x74\x5f\x75\x61"); if (!$mqsuiayuwmwqaqwm) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\162\145\152\x65\x63\164\x5f\x75\x72\x69"); if (!$escsaeeosigewsme) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yciaosuiyeieceug = !preg_match("\x23\x5e\x28{$escsaeeosigewsme}\51\44\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\137\125\123\x45\x52\137\101\107\105\116\124"); } public function mmscegoieayuaguo() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yygmoeguaqyumuui = [ "\x48\124\124\120\x5f\x43\x46\x5f\103\x4f\x4e\x4e\x45\103\124\111\116\x47\137\x49\120", "\110\x54\124\x50\137\103\x4c\111\105\x4e\x54\x5f\x49\120", "\x48\x54\124\120\x5f\x58\x5f\106\117\x52\127\101\x52\x44\105\104\137\x46\117\x52", "\110\124\124\x50\137\130\137\x46\x4f\122\x57\x41\x52\x44\105\x44", "\110\124\x54\120\137\x58\137\x43\114\x55\123\x54\x45\122\137\x43\x4c\x49\105\116\124\x5f\x49\x50", "\110\x54\x54\120\137\x58\x5f\122\x45\101\114\x5f\111\x50", "\x48\124\124\x50\x5f\106\117\122\127\101\122\x44\105\x44\137\106\x4f\x52", "\110\124\124\120\137\106\117\122\127\x41\122\x44\x45\x44", "\122\105\x4d\117\x54\x45\137\x41\x44\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw)) { $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); } } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\x30\56\x30\56\60"); } public function ucigsowcwassokog() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yywgiquyoymymqwk = [ "\62\60\70\x2e\67\60\56\x32\64\x37\x2e\61\65\x37" => '', "\x31\x37\x32\x2e\x32\x35\65\56\64\70\x2e\61\x33\x30" => '', "\x31\x37\x32\56\x32\x35\x35\x2e\64\70\x2e\61\x33\61" => '', "\61\67\x32\x2e\x32\x35\x35\x2e\64\70\x2e\x31\x33\x32" => '', "\x31\67\x32\x2e\62\x35\x35\56\64\x38\x2e\61\63\x33" => '', "\61\67\x32\56\x32\65\x35\x2e\64\x38\x2e\x31\63\64" => '', "\61\x37\x32\x2e\x32\65\x35\x2e\x34\x38\56\61\63\65" => '', "\61\67\62\56\x32\65\x35\x2e\64\x38\x2e\61\63\66" => '', "\x31\x37\x32\x2e\62\65\x35\x2e\64\70\x2e\61\63\x37" => '', "\x31\x37\62\56\62\65\x35\x2e\64\70\56\61\x33\x38" => '', "\61\x37\x32\56\x32\65\x35\56\64\70\56\x31\x33\71" => '', "\x31\x37\x32\56\x32\x35\x35\56\64\x38\x2e\61\64\x30" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\64\x38\x2e\61\x34\61" => '', "\x31\67\62\x2e\x32\65\65\56\64\x38\x2e\x31\x34\x32" => '', "\x31\x37\62\56\62\65\65\x2e\64\70\x2e\x31\64\x33" => '', "\61\67\x32\x2e\x32\65\x35\56\x34\70\56\x31\x34\64" => '', "\61\x37\62\x2e\x32\x35\65\56\x34\x38\x2e\x31\64\65" => '', "\61\67\62\56\x32\x35\x35\56\x34\70\x2e\x31\x34\66" => '', "\61\67\62\x2e\62\65\x35\x2e\64\70\56\61\x34\67" => '', "\x35\62\56\62\62\71\56\61\62\62\56\x32\64\60" => '', "\61\x30\64\x2e\x32\x31\x34\x2e\x37\x32\56\61\60\61" => '', "\61\x33\x2e\66\x36\56\67\x2e\x31\x31" => '', "\61\x33\x2e\x38\65\56\x32\x34\x2e\70\63" => '', "\x31\x33\56\x38\x35\56\62\64\x2e\x39\x30" => '', "\61\63\x2e\x38\65\x2e\70\x32\56\x32\x36" => '', "\64\x30\x2e\x37\x34\x2e\62\64\62\x2e\62\65\63" => '', "\64\60\56\67\x34\x2e\62\x34\x33\56\x31\63" => '', "\64\60\x2e\x37\64\x2e\x32\x34\63\x2e\x31\x37\66" => '', "\61\x30\x34\56\62\61\64\x2e\x34\70\56\62\x34\x37" => '', "\61\65\x37\56\65\x35\56\61\x38\71\x2e\61\70\x39" => '', "\x31\60\64\x2e\62\x31\64\x2e\x31\61\60\x2e\x31\63\65" => '', "\x37\x30\56\63\67\x2e\x38\x33\x2e\62\x34\x30" => '', "\66\x35\x2e\x35\62\x2e\x33\x36\56\62\x35\x30" => '', "\61\63\56\67\70\x2e\62\x31\66\56\65\x36" => '', "\x35\x32\56\61\66\x32\56\62\61\x32\x2e\x31\66\63" => '', "\x32\63\x2e\71\x36\56\63\x34\x2e\x31\60\65" => '', "\66\x35\56\x35\x32\x2e\x31\61\x33\56\x32\63\x36" => '', "\61\67\x32\x2e\62\x35\65\x2e\66\x31\56\x33\64" => '', "\x31\x37\x32\56\62\65\x35\56\66\61\56\63\x35" => '', "\x31\x37\x32\56\62\x35\65\x2e\x36\x31\56\63\66" => '', "\61\67\62\56\x32\65\65\56\x36\61\x2e\x33\x37" => '', "\x31\x37\x32\x2e\x32\65\x35\56\66\x31\x2e\63\70" => '', "\61\x37\x32\x2e\x32\x35\65\x2e\66\61\x2e\63\x39" => '', "\x31\x37\x32\x2e\x32\65\65\x2e\x36\x31\56\x34\x30" => '', "\x35\x32\x2e\62\x33\x37\56\62\63\x35\56\x31\x38\65" => '', "\65\62\56\x32\63\x37\56\62\x35\60\56\67\63" => '', "\x35\62\56\62\63\67\56\x32\x33\66\x2e\x31\64\65" => '', "\61\60\64\56\x34\x31\56\62\x2e\61\x39" => '', "\x31\x39\x31\x2e\x32\63\65\56\x39\x38\x2e\61\x36\x34" => '', "\x31\x39\61\56\62\63\65\x2e\71\71\x2e\x32\x32\61" => '', "\x31\71\61\56\62\x33\x32\x2e\x31\71\x34\x2e\x35\x31" => '', "\x31\60\x34\x2e\62\61\x31\56\x31\x34\x33\x2e\x38" => '', "\61\x30\x34\56\62\x31\61\56\x31\66\x35\56\x35\x33" => '', "\65\x32\x2e\x31\67\x32\x2e\61\64\56\x38\67" => '', "\x34\x30\x2e\x38\x33\x2e\70\71\56\x32\x31\64" => '', "\x35\x32\x2e\61\67\65\56\65\x37\x2e\70\x31" => '', "\62\60\x2e\x31\x38\x38\x2e\x36\x33\56\61\x35\x31" => '', "\x32\x30\x2e\65\62\56\x33\x36\x2e\x34\71" => '', "\x35\62\56\62\64\x36\56\61\66\65\x2e\x31\65\63" => '', "\65\x31\56\61\64\64\x2e\61\x30\62\x2e\62\63\x33" => '', "\x31\x33\56\x37\66\x2e\x39\67\56\x32\x32\x34" => '', "\x31\x30\x32\56\x31\63\x33\56\61\66\x39\x2e\66\66" => '', "\65\62\56\62\63\61\56\61\x39\71\56\x31\67\60" => '', "\x31\x33\56\65\x33\x2e\x31\66\62\x2e\67" => '', "\x34\60\x2e\x31\62\63\56\62\x31\x38\56\x39\64" => '', ]; if (isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\x5f\x55\x53\x45\x52\x5f\101\107\105\116\x54"); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\151\x6e\147\x64\x6f\155\120\141\147\145\123\160\x65\145\144\x7c\104\x61\162\x65\102\157\x6f\163\x74\x7c\x47\x6f\157\147\154\x65\174\x50\124\x53\124\x7c\x43\x68\x72\157\155\x65\x2d\x4c\x69\x67\x68\x74\150\157\165\163\x65\x7c\127\120\x20\x52\157\143\x6b\145\x74\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\123\124\137\125\122\x49", ''); if ($iyiwooigkweeewey) { $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); } return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if (!$magawcseesgowoeo) { return ''; } $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if (!$agoaugssmsiumiym) { return $magawcseesgowoeo; } return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if ($magawcseesgowoeo = $this->aakgigyaookyiaqk()) { $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); } return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\x55\x45\x53\x54\x5f\115\105\124\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if ($ouwwgcimmokaqgeq) { $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\x5f\x69\147\156\x6f\x72\x65\x64\x5f\x70\x61\x72\141\155\x65\x74\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if ($eyagkkkqkwcuygso) { ksort($eyagkkkqkwcuygso); } } return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; while (strpos($euueacigmgoqkimu, "\56\57") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { if (strpos($euueacigmgoqkimu, "\x2e\56\x2f") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); } else { if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); } else { if (strpos($euueacigmgoqkimu, "\57\56\x2f") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); } else { if ("\x2f\56" === $euueacigmgoqkimu) { $euueacigmgoqkimu = "\x2f"; } else { if (strpos($euueacigmgoqkimu, "\x2f\56\56\x2f") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); } else { if ("\x2f\56\56" === $euueacigmgoqkimu) { $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); } else { if ("\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { $euueacigmgoqkimu = ''; } else { if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); } else { $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; } } } } } } } } } return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if ($this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { } } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!@defined($ymqmyyeuycgmigyo)) { @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (@defined($ymqmyyeuycgmigyo)) { $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); } return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\x73\163\x61\147\145" => $uamcoiueqaamsqma, "\x63\x6f\x6e\x74\145\x78\164" => $icwicymcioeyeyek]; } }
