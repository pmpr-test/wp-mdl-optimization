<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d8d7adaa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\x69" => 1, "\163\163\154" => 0, "\x77\x70\137\64\60\64" => 1, "\163\145\x61\162\143\x68" => 1, "\155\x6f\x62\151\154\145" => 1, "\x69\163\137\150\x74\x6d\154" => 1, "\x71\165\145\x72\171\x5f\x73\164\x72\151\156\x67" => 1, "\162\145\152\145\143\164\x65\144\137\143\157\157\x6b\x69\145" => 1, "\x6d\x61\x6e\x64\x61\x74\157\162\x79\137\x63\x6f\157\153\151\145" => 1, "\144\157\x6e\x6f\164\157\x70\x74\x69\155\151\172\145\x70\x61\x67\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (!empty($ywmkwiwkosakssii["\x74\x65\163\164\x73"])) { $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\x65\163\x74\163"]); } if (!isset($ywmkwiwkosakssii["\x63\157\157\x6b\151\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE)) { $ywmkwiwkosakssii["\x63\x6f\157\153\151\145\x73"] = $_COOKIE; } if (!isset($ywmkwiwkosakssii["\160\157\x73\x74"]) && !empty($_POST) && is_array($_POST)) { $ywmkwiwkosakssii["\x70\x6f\163\164"] = $_POST; } if (!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET)) { $ywmkwiwkosakssii["\x67\x65\164"] = $_GET; } $this->get = !empty($ywmkwiwkosakssii["\147\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\x65\x74"]) ? $ywmkwiwkosakssii["\147\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\163\x74"]) && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\143\157\x6f\x6b\151\145\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\157\x6b\x69\145\x73"] : []; if ($this->ayueggmoqeeukqmq()) { $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\137\143\x75\163\x74\157\155\151\x7a\x65" => '']); } } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if ($this->aiukiaokcgsiomew()) { $this->yauwooaeicgosquo("\x44\x65\x76\x20\x4d\x6f\144\x65\40\x45\x6e\x61\142\x6c\x65\x64\40\141\x6e\x64\x20\141\x6c\154\x20\162\x65\x71\165\145\x73\164\40\151\163\x20\x62\171\160\x61\x73\x73\56"); return false; } if ($this->kgkoeoeseyuugaao()) { $this->yauwooaeicgosquo("\122\x6f\x62\157\x74\163\56\164\x78\x74\x20\157\x72\40\x2e\x68\164\141\143\143\145\x73\163\x20\146\x69\x6c\x65\x20\x69\163\40\x65\x78\143\x6c\165\x64\x65\x64\56"); return false; } if ($this->gymgcceeqssmesiu()) { $this->yauwooaeicgosquo("\x50\110\120\54\x20\130\115\114\54\40\157\x72\40\130\x53\114\x20\146\x69\154\145\x20\151\x73\40\x65\x78\143\x6c\165\144\x65\144\56"); return false; } if ($this->goecwaaykqoaaagg()) { $this->yauwooaeicgosquo("\101\x64\x6d\151\156\x20\157\162\x20\101\112\x41\130\x20\x55\x52\114\x20\151\x73\x20\x65\x78\x63\x6c\x75\x64\x65\x64\56"); return false; } if ($this->sgsscqasgeyeicoe()) { $this->yauwooaeicgosquo("\101\144\x6d\x69\x6e\40\x6f\162\x20\101\x4a\x41\130\x20\x55\122\114\40\151\x73\x20\145\170\x63\154\x75\144\x65\144\56"); return false; } if (!$this->gooeyogikcusgwuu()) { $this->yauwooaeicgosquo("\122\145\161\165\x65\x73\164\x20\155\x65\x74\x68\157\x64\x20\151\163\x20\156\157\164\40\141\x6c\x6c\157\x77\145\144\56\x20\x50\141\x67\x65\x20\143\x61\156\156\157\164\40\142\x65\40\143\x61\143\150\x65\x64\x2e", ["\162\145\161\165\x65\x73\x74\137\x6d\145\x74\x68\x6f\144" => $this->ciyocmkwssocskiy()]); return false; } if (!$this->cskwmweqysskwckg()) { $this->lastError = []; return true; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!$uiewakwqscemywuo["\163\165\143\x63\145\163\163"]) { $this->yauwooaeicgosquo("\116\157\x20\143\x6f\156\146\x69\147\40\146\151\x6c\145\40\146\157\165\x6e\144", ["\143\x6f\156\x66\151\147\x5f\x70\141\x74\x68" => $uiewakwqscemywuo["\160\x61\164\x68"]]); return false; } if ($this->cskwmweqysskwckg("\161\165\145\162\x79\x5f\x73\x74\162\x69\156\x67") && !$this->koguieumooaesyww()) { $this->yauwooaeicgosquo("\121\x75\145\x72\x79\x20\x73\x74\162\x69\156\147\x20\125\x52\x4c\x20\151\x73\x20\x65\170\143\154\x75\x64\x65\144\56", $_GET); return false; } if ($this->cskwmweqysskwckg("\x73\x73\154") & !$this->eqwgocqwoyyykwke()) { $this->yauwooaeicgosquo("\x53\123\114\40\x63\141\x63\x68\145\40\156\x6f\164\40\x61\x70\x70\154\x69\145\x64\40\x74\157\40\160\141\147\145\x2e"); return false; } if ($this->cskwmweqysskwckg("\165\x72\x69") && !$this->qweiomkkuikwugks()) { $this->yauwooaeicgosquo("\120\141\147\x65\40\151\163\x20\145\x78\x63\x6c\165\x64\145\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\162\x65\x6a\x65\143\x74\145\x64\137\143\157\157\153\151\145") && $this->cokqaygwwygweuyk()) { $this->yauwooaeicgosquo("\x45\x78\143\x6c\165\144\x65\144\x20\x63\157\157\x6b\x69\145\40\x66\x6f\165\156\144\56", ["\145\x78\x63\x6c\165\144\145\144\x5f\143\x6f\x6f\153\x69\x65\163" => $this->cokqaygwwygweuyk()]); return false; } if ($this->cskwmweqysskwckg("\155\141\156\x64\x61\x74\157\162\171\x5f\143\x6f\157\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea())) { $this->yauwooaeicgosquo("\115\151\163\x73\151\x6e\x67\40\155\141\x6e\x64\x61\x74\x6f\162\x79\x20\143\157\x6f\x6b\x69\145\72\40\160\x61\x67\145\x20\x6e\157\x74\40\x70\162\x6f\143\x65\163\163\x65\144\56", ["\x6d\151\163\x73\x69\156\x67\x5f\x63\157\157\153\151\145\163" => $this->qgymyeqwqaiwmmea()]); return false; } if ($this->cskwmweqysskwckg("\x75\x73\145\x72\137\x61\x67\145\x6e\164") && !$this->mqiqsuksgyekwkii()) { $this->yauwooaeicgosquo("\125\163\x65\x72\40\x41\147\145\156\164\40\x69\163\40\x65\170\143\x6c\165\144\x65\x64\56", ["\x75\x73\x65\x72\137\x61\147\x65\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x55\x53\x45\122\x5f\101\x47\105\116\x54")]); return false; } $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (strlen($moooemyaqewumiay) <= 255) { $this->yauwooaeicgosquo("\x42\165\146\x66\x65\162\40\143\157\x6e\164\145\156\x74\x20\x75\x6e\144\145\162\40\62\65\65\40\x63\x68\x61\162\141\x63\164\x65\162\x73\x2e"); return false; } if (http_response_code() !== 200) { $this->yauwooaeicgosquo("\120\x61\147\145\40\x69\x73\40\156\x6f\x74\x20\141\40\x32\x30\x30\40\x48\x54\x54\x50\40\162\x65\x73\160\157\x6e\x73\x65\x20\x61\156\144\40\143\141\156\x6e\157\164\40\142\x65\40\143\141\143\150\145\144\56"); return false; } if ($this->cskwmweqysskwckg("\144\157\156\157\x74\x6f\160\164\151\155\151\x7a\x65\x70\x61\147\x65") && $this->cowcgqokiosgaqic()) { $kgicwkyskyemksca = $this->cmaecekuqkwmemms("\120\122\137\x4f\120\x54\x49\x4d\x49\132\x41\124\111\117\x4e\x5f\104\x4f\x4e\x54\137\x4f\x50\x54\111\x4d\111\x5a\105", ''); $this->yauwooaeicgosquo("\104\x4f\x4e\124\x4f\120\124\111\x4d\111\132\x45\104\x50\101\x47\x45\x20\151\x73\x20\x64\x65\x66\x69\x6e\145\x64\x2e\40\120\x61\147\x65\x20\x63\x61\x6e\156\x6f\x74\40\x62\x65\x20\143\x61\143\x68\145\144\x3a\x20{$kgicwkyskyemksca}"); return false; } if ($this->cskwmweqysskwckg("\167\x70\137\x34\60\64") && $this->kmmyuiwaogukwqqi()) { $this->yauwooaeicgosquo("\127\120\40\x34\x30\x34\x20\x70\x61\x67\145\40\x69\163\x20\145\170\143\x6c\165\144\x65\144\x2e"); return false; } if ($this->cskwmweqysskwckg("\163\x65\141\x72\x63\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk()) { $this->yauwooaeicgosquo("\123\145\x61\162\143\150\40\x70\x61\147\x65\40\x69\163\40\145\x78\x63\154\x75\144\x65\x64\x2e"); return false; } if ($this->cskwmweqysskwckg("\x69\163\x5f\150\164\155\154")) { if ($this->cmaecekuqkwmemms("\122\x45\123\x54\137\x52\105\121\x55\105\x53\124") || $this->gaiygescoqgyusaa()) { unset($this->tests["\x69\x73\137\150\x74\155\154"]); } } if ($this->cskwmweqysskwckg("\151\x73\x5f\150\x74\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $this->yauwooaeicgosquo("\x4e\157\x20\x63\154\157\x73\x69\x6e\147\40\x3c\x2f\150\x74\x6d\x6c\x3e\x20\x77\x61\x73\40\146\157\x75\156\144\56"); return false; } $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\137\x6f\160\164\x69\x6d\x69\172\x61\x74\151\x6f\156\137\141\x6c\154\x6f\167\x5f\164\x6f\137\163\164\141\162\x74\x5f\142\x75\x66\146\x65\x72\x5f\160\162\x6f\x63\145\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); } else { $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; } return apply_filters("\x70\162\x5f\x6f\160\164\151\155\x69\x7a\141\x74\151\x6f\156\137\150\x61\x73\x5f{$ymqmyyeuycgmigyo}\x5f\164\145\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\x3c\134\163\x2a\x5c\57\134\163\x2a\150\164\x6d\154\x5c\163\x2a\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\x3f\x3a\56\53\57\51\x3f" . $wp_rewrite->feed_base . "\50\77\72\57\50\x3f\x3a\x2e\x2b\57\77\x29\x3f\51\77\x24"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\51\44\x23\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\166\137\x6d\157\x64\x65"); } public function kgkoeoeseyuugaao() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if (!$iyiwooigkweeewey) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $ucasskoyoewwmmii = ["\x72\x6f\x62\x6f\x74\x73\x2e\x74\x78\x74", "\x2e\150\x74\x61\143\143\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if ($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg)) { if ($meyiiwcswqmuggyg[0] === $magawcseesgowoeo) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if (!$iyiwooigkweeewey) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } if (strtolower($iyiwooigkweeewey) === "\x2f\151\x6e\144\145\x78\x2e\x70\150\x70") { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\170\x6d\x6c" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\116\x47\137\x41\112\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\123")), ["\x6f\156", "\x31"]) || "\64\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\x45\122\137\120\117\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\x63\165\163\164\157\155\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\110\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if (!$eyagkkkqkwcuygso) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\156\147" => 1, "\160\x65\162\155\x61\x6c\x69\x6e\153\x5f\x6e\141\155\x65" => 1, "\x6c\x70\x2d\166\x61\x72\x69\141\164\x69\x6f\156\55\151\x64" => 1]; if (array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\137\161\x75\145\162\x79\137\163\164\162\151\156\x67\x73"); if (!$yccgiaiouekkouay) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if (!$osqkgokmuiasuukg) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if (!$eymuoguywceaakys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { $eiocugauqgouiuyi[] = $aecgggeoymywyumm; } } if (!empty($eiocugauqgouiuyi)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if (!$aaswuawqmusoucsw) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\137\155\141\156\x64\141\164\157\x72\x79\137\143\157\157\153\151\x65\163"))); if (!$this->wemyikwikgwqwuoc()) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); } foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); } } if (empty($yiycakoikkyuokgk)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return apply_filters("\x70\x72\x5f\x6f\x70\164\151\x6d\151\x7a\141\164\151\157\x6e\x5f\x6f\166\x65\x72\x72\x69\x64\145\137\x64\x6f\x6e\x74\137\x6f\160\x74\x69\155\x69\172\x65", $this->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\111\115\111\132\101\x54\111\x4f\116\x5f\104\117\116\124\137\117\120\124\x49\x4d\x49\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\137\x34\60\x34") && is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\x5f\163\145\x61\x72\143\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\x72\137\x6f\x70\164\151\x6d\151\x7a\x61\164\151\x6f\156\x5f\x6f\x70\x74\x69\x6d\151\172\x65\137\x73\x65\x61\162\143\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\143\x68\145\137\163\x73\154"); } public function yaswyamuyysomccg() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } if ($this->aceaeommyuooiqge()->get("\x6d\157\142\151\x6c\x65\x5f\143\x61\x63\150\145")) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $wayquiskgeuoqamk = "\62\56\x30\134\x20\115\x4d\x50\x7c\62\x34\60\x78\63\x32\60\174\64\60\60\130\x32\64\60\174\x41\x76\x61\156\x74\107\157\174\x42\154\141\143\x6b\x42\x65\162\x72\171\x7c\102\x6c\141\172\145\x72\x7c\x43\145\x6c\x6c\x70\x68\x6f\x6e\x65\174\104\x61\x6e\x67\145\x72\174\x44\157\x43\x6f\115\x6f\174\x45\154\x61\x69\x6e\x65\57\63\x2e\x30\x7c\x45\x75\x64\x6f\162\x61\127\145\142\x7c\107\x6f\x6f\x67\154\x65\x62\157\x74\55\115\x6f\x62\x69\x6c\145\x7c\x68\151\160\x74\x6f\x70\174\x49\x45\x4d\157\142\151\154\x65\174\x4b\131\117\x43\105\x52\101\x2f\x57\x58\x33\x31\x30\x4b\x7c\x4c\107\57\125\71\71\60\174\x4d\111\104\120\55\62\x2e\174\x4d\x4d\105\x46\x32\60\174\x4d\117\124\x2d\126\174\x4e\x65\x74\x46\162\x6f\156\x74\x7c\x4e\145\x77\x74\x7c\116\x69\156\x74\x65\x6e\144\157\134\x20\x57\x69\151\x7c\116\151\x74\162\x6f\174\x4e\x6f\153\151\141\174\117\160\x65\x72\141\x5c\x20\115\x69\156\151\174\x50\141\154\x6d\174\120\x6c\141\x79\123\164\x61\164\151\157\x6e\134\40\120\157\162\x74\141\142\154\145\x7c\x70\x6f\162\x74\x61\x6c\x6d\x6d\x6d\x7c\x50\x72\x6f\170\151\156\x65\x74\174\120\x72\157\x78\151\x4e\x65\x74\174\x53\x48\x41\x52\120\x2d\x54\x51\x2d\107\130\x31\60\x7c\x53\x48\x47\x2d\x69\x39\60\x30\174\x53\x6d\x61\154\x6c\174\123\x6f\x6e\171\105\x72\x69\143\163\163\x6f\x6e\174\123\x79\155\142\x69\x61\156\134\40\x4f\x53\174\123\171\155\x62\151\x61\156\x4f\x53\x7c\x54\x53\x32\61\151\x2d\x31\60\174\x55\120\56\x42\162\157\167\x73\145\162\x7c\x55\120\x2e\114\151\x6e\x6b\174\x77\145\x62\117\123\x7c\x57\x69\156\x64\x6f\x77\163\x5c\x20\x43\x45\174\127\151\156\127\101\120\174\x59\141\150\x6f\157\x53\145\145\153\x65\x72\x2f\115\x31\x41\61\x2d\x52\62\x44\x32\x7c\151\x50\x68\157\156\x65\x7c\x69\120\157\144\x7c\x41\156\x64\162\157\x69\x64\174\102\x6c\x61\143\x6b\x42\x65\x72\x72\x79\x39\x35\x33\60\174\x4c\x47\x2d\124\x55\x39\61\65\134\x20\x4f\142\151\147\157\x7c\114\107\x45\134\40\126\130\174\x77\x65\x62\x4f\x53\174\116\x6f\x6b\x69\x61\65\70\x30\x30"; if (preg_match("\43\x5e\x2e\x2a\x28{$wayquiskgeuoqamk}\51\56\x2a\x23\x69", $uowwycywwssskuys)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } $wayquiskgeuoqamk = "\167\63\x63\134\x20\x7c\x77\x33\x63\55\x7c\x61\x63\163\55\x7c\x61\154\x61\x76\174\x61\154\143\141\x7c\141\155\157\x69\174\141\165\x64\x69\174\x61\x76\x61\156\x7c\142\145\156\x71\174\142\x69\x72\144\174\x62\154\x61\x63\174\142\154\141\x7a\174\x62\162\x65\x77\174\143\x65\x6c\x6c\x7c\143\x6c\x64\143\x7c\143\155\x64\x2d\174\x64\141\x6e\147\174\x64\x6f\143\x6f\x7c\x65\x72\151\143\x7c\150\x69\x70\x74\x7c\x68\164\x63\x5f\174\x69\156\156\x6f\174\x69\160\141\161\x7c\151\160\157\144\174\152\x69\x67\x73\174\x6b\144\144\151\174\153\x65\x6a\151\174\154\x65\156\157\174\154\147\55\143\x7c\x6c\147\x2d\144\x7c\154\x67\x2d\x67\174\154\147\145\55\x7c\154\147\57\x75\174\155\141\165\151\x7c\x6d\141\x78\157\x7c\x6d\x69\144\x70\x7c\x6d\x69\x74\x73\x7c\155\x6d\145\x66\174\155\x6f\x62\151\x7c\x6d\x6f\x74\x2d\x7c\155\x6f\164\157\174\x6d\x77\x62\x70\174\156\145\x63\55\x7c\x6e\x65\x77\164\174\x6e\157\153\151\174\160\141\154\x6d\174\x70\x61\156\x61\x7c\x70\x61\156\164\x7c\x70\150\x69\154\x7c\160\x6c\x61\171\x7c\160\157\162\164\174\x70\x72\157\170\x7c\161\x77\x61\160\x7c\x73\x61\x67\145\x7c\163\x61\155\x73\174\163\141\x6e\171\174\163\143\x68\55\174\163\x65\143\55\174\163\145\156\x64\174\x73\145\162\151\x7c\163\147\150\x2d\x7c\x73\150\141\162\x7c\163\151\145\55\x7c\x73\x69\x65\155\174\163\155\x61\154\x7c\x73\x6d\141\x72\174\163\x6f\x6e\x79\174\x73\160\150\55\x7c\163\171\155\142\174\164\55\x6d\157\x7c\164\x65\x6c\151\x7c\164\x69\155\55\174\x74\x6f\x73\150\174\164\x73\x6d\x2d\174\165\160\147\x31\x7c\165\160\163\x69\174\x76\153\x2d\166\174\166\x6f\x64\x61\174\x77\141\x70\x2d\174\x77\x61\160\x61\174\x77\x61\x70\151\174\167\x61\x70\160\x7c\167\141\x70\162\x7c\x77\145\x62\x63\174\x77\x69\156\167\174\x77\x69\156\x77\x7c\x78\144\x61\134\40\x7c\170\144\141\55"; if (preg_match("\43\x5e\50{$wayquiskgeuoqamk}\51\x2e\52\x23\x69", $uowwycywwssskuys)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\x72\145\x6a\x65\143\164\137\x75\141"); if (!$mqsuiayuwmwqaqwm) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\x5f\162\x65\152\145\x63\164\137\165\162\151"); if (!$escsaeeosigewsme) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $yciaosuiyeieceug = !preg_match("\43\x5e\50{$escsaeeosigewsme}\51\x24\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\137\125\x53\x45\x52\137\101\x47\x45\116\x54"); } public function mmscegoieayuaguo() { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yygmoeguaqyumuui = [ "\x48\x54\124\120\x5f\103\106\x5f\103\x4f\x4e\x4e\x45\x43\124\x49\x4e\107\x5f\x49\x50", "\x48\124\x54\120\x5f\x43\114\x49\x45\x4e\x54\137\x49\120", "\x48\124\124\x50\x5f\130\x5f\x46\x4f\x52\127\101\x52\104\105\104\x5f\106\117\122", "\110\124\124\120\x5f\130\137\106\117\122\127\x41\122\104\105\104", "\x48\x54\x54\120\x5f\x58\137\x43\114\x55\123\124\x45\x52\137\103\x4c\x49\105\x4e\x54\137\x49\120", "\110\x54\124\x50\137\130\137\x52\105\x41\114\137\x49\120", "\x48\x54\124\x50\137\106\117\122\x57\101\x52\x44\x45\x44\137\x46\x4f\x52", "\110\x54\x54\x50\137\106\117\122\127\x41\122\104\x45\x44", "\122\105\x4d\117\124\105\x5f\101\x44\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw)) { $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP)) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); } } } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\x2e\x30\x2e\x30\56\60"); } public function ucigsowcwassokog() : bool { if ($this->koeusmomaqogossg(__FUNCTION__)) { return $this->eecucukcqkqysiau(__FUNCTION__); } $yywgiquyoymymqwk = [ "\x32\60\x38\x2e\x37\60\56\62\x34\x37\x2e\61\65\x37" => '', "\61\67\62\x2e\62\x35\65\56\x34\70\56\x31\63\x30" => '', "\x31\x37\x32\56\62\65\x35\x2e\x34\x38\56\x31\x33\x31" => '', "\61\67\x32\56\62\x35\x35\x2e\64\x38\x2e\x31\63\62" => '', "\x31\67\x32\56\x32\x35\65\56\x34\x38\x2e\x31\x33\63" => '', "\x31\67\x32\x2e\62\65\65\56\x34\x38\56\61\63\x34" => '', "\x31\x37\62\56\x32\x35\x35\56\x34\x38\56\61\x33\65" => '', "\61\67\62\56\62\x35\65\56\x34\x38\x2e\x31\63\x36" => '', "\61\x37\x32\x2e\62\65\65\56\64\x38\56\x31\63\67" => '', "\x31\x37\62\56\62\x35\x35\x2e\x34\x38\x2e\x31\63\70" => '', "\x31\x37\x32\x2e\x32\x35\x35\56\x34\x38\x2e\61\63\71" => '', "\x31\x37\62\x2e\x32\65\x35\x2e\64\70\x2e\x31\x34\x30" => '', "\61\67\x32\x2e\62\65\65\x2e\64\70\x2e\x31\x34\x31" => '', "\61\x37\x32\x2e\62\65\65\56\x34\x38\56\61\64\62" => '', "\61\67\62\x2e\x32\x35\65\56\x34\70\56\x31\64\x33" => '', "\x31\67\62\x2e\62\65\65\56\64\70\56\x31\x34\x34" => '', "\x31\67\x32\x2e\x32\x35\65\x2e\x34\70\56\61\x34\x35" => '', "\61\67\62\56\62\65\x35\56\x34\x38\x2e\61\x34\x36" => '', "\x31\67\62\x2e\x32\65\x35\x2e\x34\70\x2e\61\64\67" => '', "\x35\62\56\62\x32\71\56\x31\x32\62\56\x32\x34\x30" => '', "\61\x30\x34\x2e\62\x31\x34\56\67\62\56\61\x30\61" => '', "\61\63\56\66\66\x2e\67\56\x31\x31" => '', "\x31\x33\56\70\x35\56\x32\64\x2e\x38\63" => '', "\61\x33\x2e\70\65\56\62\64\56\x39\60" => '', "\61\x33\56\x38\x35\56\70\x32\x2e\x32\66" => '', "\x34\x30\x2e\67\64\x2e\62\x34\62\x2e\x32\65\x33" => '', "\x34\60\56\67\x34\x2e\62\x34\63\56\x31\x33" => '', "\64\60\56\67\64\56\x32\x34\x33\x2e\61\x37\x36" => '', "\x31\60\64\56\62\61\64\56\x34\70\56\x32\64\x37" => '', "\x31\x35\67\56\x35\65\x2e\x31\70\71\x2e\x31\x38\x39" => '', "\61\x30\x34\56\62\x31\64\56\61\61\60\56\x31\63\x35" => '', "\x37\60\x2e\63\x37\56\x38\x33\56\62\64\60" => '', "\66\x35\56\x35\62\x2e\x33\66\x2e\62\65\60" => '', "\x31\63\x2e\67\x38\x2e\62\61\66\x2e\65\x36" => '', "\65\x32\56\61\x36\62\56\x32\x31\x32\56\x31\x36\x33" => '', "\62\x33\x2e\71\66\x2e\x33\64\56\61\x30\65" => '', "\66\x35\x2e\x35\62\56\61\x31\63\x2e\62\63\66" => '', "\x31\x37\62\56\x32\65\65\56\66\61\56\x33\x34" => '', "\x31\67\62\x2e\x32\x35\65\56\x36\x31\56\63\x35" => '', "\x31\x37\x32\56\x32\65\65\x2e\66\x31\x2e\x33\66" => '', "\61\67\x32\56\x32\65\x35\x2e\x36\x31\56\x33\x37" => '', "\61\x37\x32\x2e\62\65\65\x2e\66\x31\x2e\63\70" => '', "\61\67\62\56\62\x35\65\56\66\61\x2e\63\x39" => '', "\x31\x37\x32\56\62\65\65\56\66\x31\56\x34\x30" => '', "\65\x32\x2e\62\63\x37\56\x32\63\x35\x2e\61\x38\x35" => '', "\x35\62\56\x32\x33\67\x2e\62\x35\60\56\x37\63" => '', "\65\x32\56\62\63\x37\x2e\62\63\66\x2e\x31\x34\65" => '', "\x31\x30\x34\56\64\61\x2e\62\x2e\61\x39" => '', "\x31\x39\61\x2e\x32\63\65\x2e\71\70\x2e\61\x36\64" => '', "\x31\71\x31\56\x32\63\65\56\71\x39\56\x32\x32\x31" => '', "\x31\x39\61\x2e\x32\63\62\x2e\x31\71\64\x2e\65\61" => '', "\x31\x30\64\56\62\61\x31\56\61\x34\x33\x2e\x38" => '', "\x31\x30\64\56\x32\x31\61\56\x31\66\x35\x2e\x35\63" => '', "\x35\62\56\x31\67\62\x2e\x31\x34\x2e\70\67" => '', "\64\60\56\x38\x33\x2e\x38\x39\x2e\62\x31\64" => '', "\65\x32\56\x31\67\65\56\65\67\56\x38\61" => '', "\x32\60\x2e\x31\x38\x38\x2e\66\63\56\61\x35\x31" => '', "\x32\60\56\x35\x32\x2e\63\x36\x2e\x34\x39" => '', "\x35\62\56\x32\64\66\x2e\x31\66\65\56\x31\x35\63" => '', "\x35\x31\x2e\61\x34\x34\x2e\61\60\x32\56\62\x33\x33" => '', "\61\63\x2e\x37\x36\56\x39\x37\x2e\x32\62\64" => '', "\x31\x30\62\56\x31\x33\x33\56\x31\x36\71\56\66\x36" => '', "\x35\x32\56\x32\63\x31\x2e\61\x39\x39\56\61\67\60" => '', "\x31\x33\56\65\63\56\x31\66\62\x2e\x37" => '', "\x34\60\x2e\x31\x32\x33\56\x32\x31\70\56\x39\x34" => '', ]; if (isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x5f\125\x53\x45\122\x5f\x41\x47\x45\116\124"); if (!$uowwycywwssskuys) { return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\151\156\x67\x64\157\x6d\120\x61\x67\145\x53\160\x65\x65\144\174\104\141\162\x65\x42\157\157\163\x74\174\107\x6f\x6f\x67\154\145\174\120\x54\123\x54\174\103\x68\x72\157\x6d\145\55\114\x69\147\x68\x74\x68\x6f\x75\163\145\x7c\127\120\x20\x52\x6f\143\x6b\x65\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\x55\x45\123\x54\137\x55\122\111", ''); if ($iyiwooigkweeewey) { $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); } return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if (!$magawcseesgowoeo) { return ''; } $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if (!$agoaugssmsiumiym) { return $magawcseesgowoeo; } return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if ($magawcseesgowoeo = $this->aakgigyaookyiaqk()) { $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); } return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\x55\x45\x53\x54\137\115\105\124\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if ($ouwwgcimmokaqgeq) { $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\137\x69\x67\x6e\x6f\162\145\x64\137\160\x61\162\x61\x6d\x65\x74\145\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if ($eyagkkkqkwcuygso) { ksort($eyagkkkqkwcuygso); } } return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; while (strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { if (strpos($euueacigmgoqkimu, "\56\x2e\x2f") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); } else { if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); } else { if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); } else { if ("\x2f\56" === $euueacigmgoqkimu) { $euueacigmgoqkimu = "\x2f"; } else { if (strpos($euueacigmgoqkimu, "\x2f\56\56\57") === 0) { $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); } else { if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); } else { if ("\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { $euueacigmgoqkimu = ''; } else { if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); } else { $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; } } } } } } } } } return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if ($this->cmaecekuqkwmemms("\120\x52\x5f\104\105\102\x55\107", false)) { $icwicymcioeyeyek["\x70\145\x72\155\x61\x6c\151\156\153"] = $this->aakgigyaookyiaqk(); if (function_exists("\x70\162\137\147\145\x74\137\x66\157\x75\156\144\x61\164\151\157\156")) { pr_get_foundation()->caokeucsksukesyo()->mskuyeumceaigegs()->debug($uamcoiueqaamsqma, $icwicymcioeyeyek); } else { if ($icwicymcioeyeyek) { $uamcoiueqaamsqma .= "\72\40" . print_r($icwicymcioeyeyek, true); } error_log($uamcoiueqaamsqma); } } } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (!@defined($ymqmyyeuycgmigyo)) { @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); } } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (@defined($ymqmyyeuycgmigyo)) { $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); } return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\x73\163\141\147\145" => $uamcoiueqaamsqma, "\143\x6f\x6e\164\x65\x78\x74" => $icwicymcioeyeyek]; } }
