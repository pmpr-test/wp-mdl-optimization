<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fc94b167d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\151" => 1, "\163\x73\x6c" => 0, "\x61\x6d\x70" => 1, "\167\x70\137\64\x30\64" => 1, "\163\145\x61\x72\143\150" => 1, "\155\x6f\x62\151\x6c\x65" => 1, "\x69\x73\x5f\150\x74\x6d\154" => 1, "\161\165\x65\x72\171\x5f\x73\x74\x72\x69\156\147" => 1, "\162\x65\152\x65\143\x74\x65\x64\137\x63\x6f\157\153\151\145" => 1, "\x6d\x61\156\144\x61\164\x6f\x72\171\137\143\157\157\x6b\151\145" => 1, "\x64\157\x6e\157\164\157\160\x74\151\x6d\151\172\145\160\141\147\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (!empty($ywmkwiwkosakssii["\x74\145\x73\164\163"])) { $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\x73\x74\x73"]); } if (!isset($ywmkwiwkosakssii["\143\157\x6f\153\x69\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE)) { $ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\x73"] = $_COOKIE; } if (!isset($ywmkwiwkosakssii["\x70\x6f\163\x74"]) && !empty($_POST) && is_array($_POST)) { $ywmkwiwkosakssii["\x70\x6f\x73\164"] = $_POST; } if (!isset($ywmkwiwkosakssii["\x67\x65\x74"]) && !empty($_GET) && is_array($_GET)) { $ywmkwiwkosakssii["\147\145\x74"] = $_GET; } $this->get = !empty($ywmkwiwkosakssii["\147\x65\164"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\x67\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\157\163\164"]) && is_array($ywmkwiwkosakssii["\x70\157\163\164"]) ? $ywmkwiwkosakssii["\x70\157\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\157\153\151\145\x73"]) && is_array($ywmkwiwkosakssii["\143\x6f\157\153\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\157\x6f\153\151\x65\x73"] : []; if ($this->ayueggmoqeeukqmq()) { $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\x63\165\x73\x74\x6f\155\x69\x7a\145" => '']); } } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if ($this->aiukiaokcgsiomew()) { $this->yauwooaeicgosquo("\x44\145\x76\40\115\157\x64\x65\x20\105\x6e\141\142\x6c\x65\144\x20\x61\156\x64\x20\x61\154\154\40\x72\145\x71\x75\x65\163\x74\40\x69\x73\x20\142\x79\x70\141\163\163\x2e"); return false; } if ($this->kgkoeoeseyuugaao()) { $this->yauwooaeicgosquo("\122\157\x62\157\x74\x73\x2e\x74\170\x74\40\157\x72\40\x2e\x68\164\x61\x63\x63\x65\x73\x73\x20\x66\x69\x6c\145\40\x69\163\x20\x65\x78\x63\154\165\144\x65\144\x2e"); return false; } if ($this->gymgcceeqssmesiu()) { $this->yauwooaeicgosquo("\120\110\120\x2c\40\x58\x4d\114\x2c\40\157\162\x20\x58\123\114\40\x66\151\154\145\x20\151\163\40\145\170\143\x6c\x75\x64\145\144\56"); return false; } if ($this->goecwaaykqoaaagg()) { $this->yauwooaeicgosquo("\x41\x64\x6d\x69\156\x20\157\162\x20\x41\112\x41\x58\x20\125\122\x4c\x20\x69\163\x20\145\x78\143\154\x75\x64\x65\x64\56"); return false; } if ($this->sgsscqasgeyeicoe()) { $this->yauwooaeicgosquo("\x41\x64\155\151\x6e\40\157\162\40\101\x4a\101\x58\40\x55\x52\x4c\x20\151\163\40\x65\170\143\154\165\144\145\x64\56"); return false; } if (!$this->gooeyogikcusgwuu()) { $this->yauwooaeicgosquo("\122\145\161\165\145\x73\x74\40\155\x65\164\150\x6f\144\40\x69\x73\x20\x6e\157\164\x20\x61\154\x6c\157\167\x65\x64\56\40\x50\141\147\x65\x20\143\141\156\x6e\x6f\164\x20\x62\x65\40\x63\x61\x63\x68\x65\x64\56", ["\x72\145\x71\165\x65\x73\164\137\x6d\145\x74\150\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; } if (!$this->cskwmweqysskwckg()) { $this->lastError = []; return true; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!$uiewakwqscemywuo["\x73\165\143\143\x65\x73\163"]) { $this->yauwooaeicgosquo("\x4e\157\x20\x63\x6f\x6e\x66\x69\x67\x20\x66\x69\x6c\145\40\x66\157\x75\156\x64", ["\143\x6f\x6e\x66\x69\x67\x5f\x70\x61\164\150" => $uiewakwqscemywuo["\160\x61\x74\x68"]]); return false; } if ($this->cskwmweqysskwckg("\161\x75\145\162\171\137\163\164\x72\x69\x6e\147") && !$this->koguieumooaesyww()) { $this->yauwooaeicgosquo("\x51\x75\145\162\171\x20\x73\x74\x72\x69\x6e\x67\x20\125\x52\x4c\x20\x69\x73\x20\x65\x78\x63\154\x75\144\145\x64\56", $_GET); return false; } if ($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke()) { $this->yauwooaeicgosquo("\123\123\114\x20\x63\x61\x63\150\x65\x20\156\157\x74\x20\141\160\x70\154\151\x65\144\40\x74\157\40\160\x61\147\145\x2e"); return false; } if ($this->cskwmweqysskwckg("\165\162\x69") && !$this->qweiomkkuikwugks()) { $this->yauwooaeicgosquo("\120\x61\x67\145\40\x69\163\40\x65\x78\x63\x6c\x75\x64\145\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\162\x65\x6a\x65\x63\x74\145\x64\x5f\143\157\x6f\x6b\x69\x65") && $this->cokqaygwwygweuyk()) { $this->yauwooaeicgosquo("\105\x78\143\154\x75\144\x65\144\x20\143\157\157\x6b\x69\x65\40\146\157\165\x6e\144\x2e", ["\145\170\143\154\165\x64\145\x64\x5f\x63\x6f\157\x6b\x69\145\x73" => $this->cokqaygwwygweuyk()]); return false; } if ($this->cskwmweqysskwckg("\x6d\x61\x6e\x64\x61\x74\x6f\162\171\x5f\143\157\157\x6b\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea())) { $this->yauwooaeicgosquo("\115\x69\163\163\151\x6e\x67\x20\x6d\x61\156\144\x61\x74\x6f\162\x79\x20\x63\x6f\x6f\153\x69\145\72\40\x70\141\147\145\x20\x6e\x6f\164\40\x70\162\157\143\x65\x73\x73\145\144\56", ["\x6d\x69\x73\x73\151\x6e\x67\137\x63\x6f\157\x6b\x69\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; } if ($this->cskwmweqysskwckg("\x75\x73\145\x72\137\x61\147\145\156\164") && !$this->mqiqsuksgyekwkii()) { $this->yauwooaeicgosquo("\125\163\x65\x72\x20\101\x67\145\156\x74\x20\x69\163\40\145\x78\x63\x6c\x75\144\x65\x64\x2e", ["\x75\163\x65\162\137\141\147\145\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\125\x53\105\x52\137\101\107\105\116\124")]); return false; } $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (strlen($moooemyaqewumiay) <= 255) { $this->yauwooaeicgosquo("\x42\x75\x66\x66\145\x72\x20\143\x6f\x6e\x74\x65\x6e\x74\x20\x75\x6e\x64\145\162\x20\x32\x35\x35\x20\143\150\141\162\141\x63\164\x65\x72\x73\x2e"); return false; } if (http_response_code() !== 200) { $this->yauwooaeicgosquo("\120\141\x67\145\40\151\163\40\x6e\157\164\40\141\x20\62\60\60\x20\x48\124\124\x50\x20\x72\x65\163\160\157\x6e\163\x65\x20\x61\x6e\144\40\143\141\x6e\x6e\157\164\x20\x62\145\x20\143\x61\143\x68\x65\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\144\x6f\156\157\164\157\160\164\x69\x6d\151\x7a\145\x70\141\147\145") && $this->cowcgqokiosgaqic()) { $this->yauwooaeicgosquo("\104\117\116\124\117\x50\124\x49\115\111\132\105\104\120\101\107\105\40\151\x73\x20\x64\x65\146\x69\156\x65\144\56\40\120\x61\x67\145\40\143\x61\x6e\x6e\x6f\164\x20\142\145\x20\143\141\143\150\145\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\x77\160\x5f\64\60\x34") && $this->kmmyuiwaogukwqqi()) { $this->yauwooaeicgosquo("\127\120\40\64\x30\64\x20\x70\x61\147\145\40\x69\x73\x20\x65\x78\143\x6c\x75\x64\x65\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\x61\155\x70") && $this->goumkccmgysgqueu()) { $this->yauwooaeicgosquo("\101\115\x50\x20\160\141\x67\x65\x73\x20\x69\163\x20\145\170\x63\154\x75\x64\x65\x64\56"); return false; } if ($this->cskwmweqysskwckg("\163\145\x61\162\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk()) { $this->yauwooaeicgosquo("\123\145\x61\x72\143\x68\x20\x70\141\x67\145\40\151\x73\40\145\170\143\x6c\165\x64\145\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\x69\163\x5f\150\x74\x6d\154")) { if ($this->cmaecekuqkwmemms("\x52\x45\123\124\137\122\x45\121\x55\x45\x53\x54") || $this->gaiygescoqgyusaa()) { unset($this->tests["\x69\x73\x5f\x68\x74\155\x6c"]); } } if ($this->cskwmweqysskwckg("\x69\163\x5f\x68\x74\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $this->yauwooaeicgosquo("\116\x6f\40\x63\154\x6f\163\151\156\x67\x20\74\x2f\x68\x74\x6d\154\76\x20\167\x61\x73\40\x66\x6f\x75\x6e\x64\x2e"); return false; } $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\x6f\x70\x74\151\x6d\x69\172\141\164\x69\x6f\156\x5f\x61\x6c\154\x6f\x77\x5f\x74\x6f\x5f\x73\x74\141\x72\164\x5f\142\165\146\146\x65\x72\x5f\x70\x72\157\143\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); } else { $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; } return apply_filters("\x70\162\x5f\x6f\x70\x74\x69\x6d\x69\172\141\164\x69\157\156\x5f\150\x61\163\x5f{$ymqmyyeuycgmigyo}\137\x74\145\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\x73\x2a\134\x2f\134\163\52\150\164\x6d\154\134\x73\52\x3e\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\x3f\72\x2e\x2b\x2f\51\77" . $wp_rewrite->feed_base . "\x28\x3f\x3a\57\50\77\72\56\53\x2f\x3f\x29\x3f\51\77\x24"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\x29\44\x23\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\x65\166\x5f\x6d\157\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if (!$iyiwooigkweeewey) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $ucasskoyoewwmmii = ["\162\157\142\x6f\x74\x73\56\x74\170\164", "\x2e\150\164\x61\143\143\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if ($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[0] === $magawcseesgowoeo) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if (!$iyiwooigkweeewey) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (strtolower($iyiwooigkweeewey) === "\57\151\156\x64\x65\x78\56\160\x68\160") { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\170\155\x6c" => 1, "\170\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\111\x4e\x47\137\x41\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\123")), ["\157\156", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\122\x5f\x50\x4f\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\x63\165\163\164\157\155\151\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\110\105\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if (!$eyagkkkqkwcuygso) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yccgiaiouekkouay = ["\x73" => 1, "\154\141\156\x67" => 1, "\x70\x65\162\155\141\154\x69\x6e\153\x5f\156\x61\155\x65" => 1, "\154\x70\x2d\x76\141\162\x69\141\164\151\157\156\55\x69\144" => 1]; if (array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\137\x71\165\145\x72\171\x5f\x73\x74\162\151\x6e\x67\x73"); if (!$yccgiaiouekkouay) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if (!$osqkgokmuiasuukg) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if (!$eymuoguywceaakys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { $eiocugauqgouiuyi[] = $aecgggeoymywyumm; } } if (!empty($eiocugauqgouiuyi)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if (!$aaswuawqmusoucsw) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\x5f\155\x61\x6e\144\x61\x74\157\162\171\137\x63\157\157\153\151\x65\x73"))); if (!$this->wemyikwikgwqwuoc()) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); } foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); } } if (empty($yiycakoikkyuokgk)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\x5f\x6f\160\164\151\155\x69\172\141\164\151\157\x6e\x5f\157\x76\x65\x72\x72\151\x64\x65\x5f\144\157\156\x74\137\157\160\164\x69\155\151\x7a\x65", $this->cmaecekuqkwmemms("\x50\122\x5f\x4f\x50\124\x49\x4d\x49\132\x41\x54\x49\117\x4e\137\x44\x4f\116\x54\x5f\117\x50\124\x49\115\111\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\x5f\64\60\x34") && is_404(); } public function goumkccmgysgqueu() : bool { return function_exists("\x69\x73\137\141\x6d\160\x5f\x65\156\x64\160\157\151\x6e\x74") && is_amp_endpoint() || function_exists("\151\x73\x5f\141\155\160") && is_amp(); } public function gouusicsisumuiei() : bool { return function_exists("\151\163\x5f\x73\145\x61\162\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\x6f\160\x74\x69\155\x69\172\141\164\151\157\x6e\137\x6f\x70\164\151\x6d\151\172\x65\137\x73\x65\141\x72\143\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\143\150\x65\137\x73\x73\154"); } public function yaswyamuyysomccg() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } if ($this->aceaeommyuooiqge()->get("\x6d\157\x62\x69\154\145\x5f\143\141\143\150\145")) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $wayquiskgeuoqamk = "\62\x2e\60\134\40\x4d\x4d\x50\174\x32\64\x30\170\x33\x32\60\x7c\x34\60\x30\130\62\x34\x30\x7c\101\x76\x61\156\x74\x47\157\x7c\x42\154\x61\x63\153\102\x65\162\162\171\x7c\x42\154\x61\x7a\145\162\x7c\x43\x65\154\x6c\160\150\x6f\x6e\x65\x7c\x44\141\156\x67\145\162\x7c\x44\x6f\103\x6f\115\x6f\174\105\154\141\x69\x6e\145\57\x33\56\x30\174\105\165\x64\x6f\x72\x61\x57\x65\x62\174\x47\x6f\157\147\x6c\145\x62\157\x74\x2d\115\x6f\142\151\154\x65\174\150\151\160\x74\x6f\x70\x7c\111\x45\x4d\157\142\151\x6c\145\174\x4b\131\x4f\x43\x45\122\x41\57\x57\130\x33\61\60\113\x7c\114\107\x2f\x55\71\71\60\174\115\x49\x44\x50\55\x32\56\174\115\115\x45\x46\x32\x30\174\115\x4f\124\55\126\x7c\x4e\145\164\x46\162\x6f\156\x74\174\x4e\145\x77\x74\x7c\116\151\156\164\x65\156\x64\157\134\40\x57\x69\151\x7c\116\x69\x74\x72\x6f\174\x4e\x6f\x6b\x69\141\x7c\x4f\160\145\x72\x61\134\x20\115\x69\x6e\151\174\x50\141\x6c\x6d\x7c\120\x6c\141\x79\123\x74\x61\164\x69\157\x6e\134\40\120\x6f\162\164\x61\x62\154\145\x7c\x70\x6f\x72\x74\141\154\155\155\x6d\174\120\162\x6f\x78\x69\x6e\145\164\x7c\x50\x72\157\x78\x69\116\145\164\174\x53\110\101\x52\120\x2d\x54\x51\x2d\107\130\61\60\x7c\123\110\107\55\x69\x39\x30\60\x7c\123\155\141\154\154\174\123\157\156\x79\x45\x72\151\x63\163\163\157\x6e\174\x53\171\155\142\x69\x61\x6e\134\40\x4f\x53\x7c\x53\x79\x6d\x62\151\141\x6e\117\123\x7c\124\123\x32\61\x69\x2d\x31\60\174\x55\x50\x2e\x42\x72\157\x77\163\145\162\x7c\x55\120\56\x4c\151\x6e\x6b\174\167\x65\142\117\123\174\127\151\156\144\x6f\167\x73\134\x20\103\105\174\127\x69\x6e\x57\101\x50\x7c\x59\x61\150\157\157\x53\x65\x65\x6b\x65\162\x2f\x4d\x31\x41\61\55\122\x32\x44\x32\x7c\x69\120\150\x6f\156\145\174\x69\120\157\144\x7c\101\156\144\x72\x6f\151\144\x7c\102\154\141\x63\x6b\102\145\x72\x72\x79\71\x35\63\x30\x7c\x4c\107\55\124\125\x39\61\x35\x5c\40\x4f\x62\x69\x67\157\x7c\114\107\x45\134\40\126\x58\174\167\145\142\117\123\x7c\x4e\157\153\x69\x61\65\x38\60\60"; if (preg_match("\x23\136\56\x2a\50{$wayquiskgeuoqamk}\x29\x2e\52\x23\151", $uowwycywwssskuys)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $wayquiskgeuoqamk = "\167\63\x63\134\x20\174\167\x33\143\55\174\141\143\x73\x2d\x7c\x61\154\141\x76\174\141\154\x63\x61\174\141\155\157\151\174\141\165\144\x69\174\x61\x76\141\x6e\174\x62\x65\156\x71\x7c\142\151\x72\144\x7c\x62\154\x61\143\x7c\142\x6c\141\172\174\x62\x72\145\167\174\143\x65\x6c\154\174\x63\x6c\144\143\174\x63\155\144\x2d\174\x64\x61\156\147\x7c\x64\157\x63\x6f\x7c\145\x72\x69\x63\x7c\150\x69\x70\x74\174\150\x74\143\137\x7c\x69\156\x6e\x6f\174\151\160\141\x71\x7c\x69\160\x6f\x64\174\x6a\x69\147\163\x7c\x6b\144\144\151\x7c\153\145\152\151\174\x6c\145\x6e\x6f\174\154\x67\x2d\x63\x7c\x6c\x67\55\144\x7c\x6c\x67\55\147\x7c\x6c\147\x65\x2d\x7c\154\x67\57\165\174\x6d\141\x75\151\174\155\x61\170\157\x7c\155\151\144\x70\x7c\x6d\x69\x74\163\x7c\155\x6d\145\146\174\x6d\157\x62\x69\174\155\157\x74\x2d\174\x6d\157\x74\157\174\x6d\x77\142\x70\x7c\156\145\143\x2d\x7c\156\145\x77\x74\174\x6e\x6f\153\151\174\x70\141\154\x6d\x7c\x70\141\x6e\141\x7c\x70\x61\156\x74\x7c\160\150\151\x6c\x7c\x70\154\x61\x79\x7c\x70\x6f\x72\164\174\160\162\x6f\x78\174\x71\x77\141\160\174\163\x61\x67\x65\x7c\163\141\x6d\163\x7c\163\141\156\x79\174\x73\143\x68\x2d\x7c\x73\x65\x63\55\174\163\x65\156\144\x7c\x73\x65\162\151\174\163\x67\x68\55\x7c\163\150\x61\162\x7c\x73\151\145\x2d\x7c\x73\151\145\x6d\174\163\155\141\x6c\174\163\155\x61\x72\174\x73\157\x6e\171\x7c\x73\160\150\55\x7c\x73\171\155\142\x7c\164\55\x6d\157\174\164\145\x6c\x69\x7c\164\151\155\x2d\x7c\x74\157\x73\150\x7c\164\163\155\x2d\174\x75\x70\147\x31\x7c\x75\160\x73\151\x7c\166\x6b\55\x76\x7c\166\x6f\144\141\x7c\x77\x61\160\55\174\x77\141\160\141\x7c\167\x61\x70\x69\x7c\x77\x61\x70\x70\174\x77\x61\x70\162\x7c\167\145\142\x63\174\x77\x69\156\x77\x7c\x77\x69\x6e\x77\174\x78\x64\x61\134\40\x7c\x78\x64\x61\55"; if (preg_match("\43\x5e\x28{$wayquiskgeuoqamk}\51\56\52\x23\151", $uowwycywwssskuys)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\x5f\x72\x65\152\x65\143\x74\x5f\165\141"); if (!$mqsuiayuwmwqaqwm) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\137\x72\145\152\145\143\164\x5f\x75\162\x69"); if (!$escsaeeosigewsme) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yciaosuiyeieceug = !preg_match("\x23\136\50{$escsaeeosigewsme}\x29\x24\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\x5f\125\x53\105\122\x5f\101\x47\x45\x4e\124"); } public function mmscegoieayuaguo() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yygmoeguaqyumuui = [ "\110\124\124\120\x5f\x43\106\137\x43\117\x4e\116\105\103\x54\x49\116\x47\x5f\111\x50", "\x48\x54\124\x50\137\103\x4c\x49\105\116\x54\137\x49\120", "\110\x54\124\x50\x5f\x58\137\x46\x4f\x52\x57\101\x52\104\105\104\x5f\x46\x4f\122", "\110\x54\x54\x50\x5f\x58\137\x46\x4f\122\127\101\x52\104\105\104", "\110\124\x54\120\x5f\130\x5f\103\114\x55\123\x54\105\122\137\x43\x4c\x49\x45\116\x54\x5f\x49\x50", "\x48\x54\x54\120\x5f\x58\137\122\x45\101\114\137\x49\x50", "\110\124\124\120\x5f\x46\x4f\122\x57\x41\x52\104\x45\x44\137\x46\117\x52", "\110\124\x54\x50\137\106\x4f\122\x57\x41\x52\x44\105\104", "\122\x45\115\x4f\x54\105\x5f\x41\x44\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw)) { $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); } } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\x30\56\60"); } public function ucigsowcwassokog() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yywgiquyoymymqwk = [ "\x32\x30\70\56\x37\x30\x2e\62\64\x37\x2e\x31\x35\x37" => '', "\61\67\x32\56\x32\65\65\56\x34\x38\56\x31\x33\x30" => '', "\x31\x37\x32\56\62\65\65\56\64\x38\x2e\x31\63\x31" => '', "\x31\x37\x32\x2e\x32\x35\x35\56\x34\70\56\x31\x33\x32" => '', "\x31\67\x32\x2e\62\65\x35\x2e\64\70\x2e\61\63\x33" => '', "\x31\x37\x32\x2e\x32\x35\x35\x2e\64\x38\x2e\x31\x33\64" => '', "\x31\x37\62\56\x32\x35\x35\56\x34\70\x2e\x31\63\65" => '', "\61\x37\x32\56\x32\65\65\56\x34\x38\56\x31\x33\66" => '', "\61\67\62\56\x32\65\65\56\64\x38\56\61\x33\x37" => '', "\x31\x37\x32\56\62\65\65\56\64\70\x2e\x31\x33\70" => '', "\61\67\62\56\x32\x35\65\x2e\x34\x38\56\x31\63\x39" => '', "\x31\67\x32\x2e\x32\65\x35\x2e\64\70\56\x31\x34\60" => '', "\x31\x37\62\x2e\x32\65\x35\56\x34\70\56\x31\x34\x31" => '', "\x31\x37\x32\56\62\65\x35\x2e\64\70\x2e\61\64\62" => '', "\x31\67\x32\56\x32\x35\x35\x2e\x34\x38\x2e\x31\64\x33" => '', "\61\67\62\56\x32\65\x35\x2e\x34\x38\56\x31\64\x34" => '', "\x31\67\62\56\x32\65\x35\56\64\70\56\61\64\x35" => '', "\61\x37\x32\56\62\65\x35\56\x34\70\x2e\61\64\x36" => '', "\x31\x37\x32\56\x32\65\x35\56\x34\70\56\x31\64\x37" => '', "\x35\62\x2e\x32\62\71\56\x31\x32\62\x2e\62\64\x30" => '', "\x31\x30\x34\x2e\62\61\x34\56\67\62\x2e\x31\x30\x31" => '', "\x31\x33\x2e\x36\66\56\67\56\61\61" => '', "\61\x33\x2e\70\x35\x2e\x32\64\x2e\70\63" => '', "\x31\63\56\x38\x35\x2e\62\64\x2e\x39\x30" => '', "\x31\x33\x2e\70\65\x2e\70\x32\56\62\x36" => '', "\64\60\x2e\x37\x34\x2e\x32\64\62\x2e\x32\x35\63" => '', "\64\60\x2e\x37\64\x2e\x32\64\x33\56\61\x33" => '', "\64\x30\x2e\x37\x34\56\x32\64\x33\56\x31\67\66" => '', "\x31\60\x34\56\62\x31\64\56\x34\70\56\62\64\67" => '', "\x31\65\67\56\x35\x35\x2e\61\x38\71\56\61\70\71" => '', "\x31\x30\x34\56\x32\61\x34\56\61\x31\60\56\x31\x33\x35" => '', "\67\60\x2e\x33\x37\x2e\x38\63\56\x32\64\x30" => '', "\66\x35\x2e\65\x32\x2e\63\66\56\x32\65\x30" => '', "\x31\63\x2e\x37\70\x2e\x32\61\66\x2e\65\x36" => '', "\65\x32\x2e\61\66\x32\x2e\62\x31\62\56\x31\x36\x33" => '', "\x32\x33\56\x39\x36\56\x33\x34\56\x31\x30\65" => '', "\x36\x35\56\x35\62\56\x31\61\63\x2e\x32\x33\x36" => '', "\61\x37\62\56\62\x35\65\56\x36\61\x2e\63\x34" => '', "\x31\67\62\56\62\65\x35\56\x36\61\56\63\65" => '', "\x31\67\62\x2e\62\x35\65\56\x36\x31\56\x33\x36" => '', "\61\x37\62\56\x32\65\x35\56\x36\x31\x2e\63\67" => '', "\61\x37\62\56\x32\65\x35\x2e\66\61\x2e\63\70" => '', "\x31\x37\62\x2e\62\65\x35\x2e\66\61\x2e\x33\x39" => '', "\61\67\62\x2e\x32\65\x35\x2e\66\61\x2e\x34\60" => '', "\x35\62\56\62\63\x37\56\62\63\x35\56\61\x38\65" => '', "\65\62\56\x32\x33\x37\x2e\x32\65\x30\x2e\x37\63" => '', "\x35\62\x2e\62\63\67\56\x32\x33\x36\56\x31\x34\x35" => '', "\x31\60\x34\56\64\61\56\x32\56\61\71" => '', "\x31\71\x31\56\x32\63\x35\56\x39\70\x2e\61\66\64" => '', "\x31\71\x31\x2e\62\63\65\x2e\x39\71\x2e\62\62\61" => '', "\x31\x39\x31\56\62\x33\x32\x2e\x31\x39\x34\56\65\61" => '', "\61\x30\64\x2e\62\x31\x31\56\61\64\x33\56\x38" => '', "\x31\60\64\x2e\62\61\61\x2e\61\x36\x35\56\65\63" => '', "\x35\62\x2e\x31\67\x32\56\61\x34\x2e\x38\67" => '', "\x34\x30\56\70\x33\x2e\70\x39\x2e\x32\61\x34" => '', "\x35\x32\56\x31\67\x35\x2e\65\x37\56\x38\61" => '', "\x32\60\56\61\70\70\56\66\63\x2e\61\x35\61" => '', "\62\60\56\65\62\x2e\x33\x36\x2e\x34\71" => '', "\65\x32\56\62\64\x36\x2e\x31\x36\65\56\x31\65\63" => '', "\x35\61\56\61\x34\x34\56\61\60\62\56\x32\x33\63" => '', "\x31\x33\56\x37\66\x2e\71\x37\x2e\62\62\64" => '', "\x31\60\x32\56\x31\x33\63\56\61\x36\71\56\x36\66" => '', "\x35\x32\56\x32\x33\x31\x2e\x31\71\71\56\x31\67\x30" => '', "\x31\x33\x2e\65\x33\x2e\61\66\x32\56\x37" => '', "\64\60\56\x31\x32\x33\x2e\62\x31\70\x2e\x39\64" => '', ]; if (isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\125\123\105\122\x5f\101\107\105\x4e\124"); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\x69\x6e\x67\x64\157\155\120\141\147\145\x53\160\145\x65\x64\174\104\x61\162\x65\x42\x6f\x6f\163\x74\x7c\107\157\157\x67\154\145\174\120\x54\x53\124\174\x43\x68\162\157\x6d\x65\55\x4c\x69\x67\x68\x74\x68\157\165\163\145\x7c\127\120\x20\122\157\x63\x6b\145\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\x45\123\124\137\125\122\x49", ''); if ($iyiwooigkweeewey) { $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); } return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if (!$magawcseesgowoeo) { return ''; } $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if (!$agoaugssmsiumiym) { return $magawcseesgowoeo; } return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if ($magawcseesgowoeo = $this->aakgigyaookyiaqk()) { $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); } return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\x55\x45\x53\x54\x5f\115\105\124\110\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if ($ouwwgcimmokaqgeq) { $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\145\x5f\x69\x67\156\x6f\162\145\144\137\x70\x61\x72\141\x6d\x65\164\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if ($eyagkkkqkwcuygso) { ksort($eyagkkkqkwcuygso); } } return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; while (strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { if (strpos($euueacigmgoqkimu, "\x2e\56\x2f") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); } else { if (strpos($euueacigmgoqkimu, "\56\57") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); } else { if (strpos($euueacigmgoqkimu, "\57\56\57") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); } else { if ("\57\56" === $euueacigmgoqkimu) { $euueacigmgoqkimu = "\57"; } else { if (strpos($euueacigmgoqkimu, "\x2f\x2e\56\57") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); } else { if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); } else { if ("\56" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { $euueacigmgoqkimu = ''; } else { if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); } else { $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; } } } } } } } } } return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if ($this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { } } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!@defined($ymqmyyeuycgmigyo)) { @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (@defined($ymqmyyeuycgmigyo)) { $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); } return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\163\163\x61\x67\145" => $uamcoiueqaamsqma, "\143\157\x6e\164\x65\170\x74" => $icwicymcioeyeyek]; } }
