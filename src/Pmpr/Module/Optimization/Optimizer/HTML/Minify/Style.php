<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f134058bae5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\x5f\x61\x64\144\x5f\151\x6e\x6c\x69\156\x65\x5f\163\x74\x79\x6c\145\137\x64\141\164\x61", [$this, "\157\153\x75\x67\x75\x79\141\143\x67\x67\163\x61\x67\x65\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\164\171\154\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\x2e\x2a\77\133\x5e\173\135\x2b\173\x28\133\x5c\x73\134\123\135\53\x3f\x7d\51\x5c\163\x2a\x7d\x7c\x28\x5b\141\x2d\x7a\x30\55\x39\54\40\x2e\50\72\51\43\x5c\x5b\x5c\135\x3d\137\x3e\x2b\176\x5c\55\100\x5d\x2b\x29\x7b\50\133\136\x7d\174\136\173\135\52\51\x7d\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto csggsqueaqmwgwkk; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); esqiocgueosoksyq: } csqakuuiyywassgw: csggsqueaqmwgwkk: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\57\x5b\x5e\175\x3b\173\134\156\x5d\x2b\x7b\x5c\x73\52\x7d\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto cqaeiesyciakcagu; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\166\x61\x72\x5c\50\50\x5b\136\x29\x5d{$yygmoeguaqyumuui}\51\134\x29\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto gemwkqocygssmequ; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto egmocemomockemia; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); egmocemomockemia: wwwggoemicgwwasy: } sescaagayikiggyq: gemwkqocygssmequ: cqaeiesyciakcagu: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\x2f\x3a\x72\x6f\157\164\x5c\x73\x2a\173\x28\x5b\x5c\163\x5c\x53\135\x2b\x3f\x29\x7d\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto sccqekuwywiisami; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto ciwggusyecgskagy; } if (preg_match("\x2f\x76\141\162\x5c\x28\50\x5b\136\51\135\x2a\x29\x5c\x29\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto scyqmcegwikkoesw; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto ycweseaccsomkioa; scyqmcegwikkoesw: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; ycweseaccsomkioa: ciwggusyecgskagy: cewyaqiqmmwmauce: } kucqcqeesaiacekm: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); aaiymmkqmocgakei: } acisycocoswkekik: sccqekuwywiisami: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match("\57{$eouekqmooogkoqoo}\x2f", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto qgqasacusgwmoegy; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto eokcuuwqaomkooag; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); eokcuuwqaomkooag: qgqasacusgwmoegy: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto uwsmcsiiisuocgwg; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; ksqgwiceoomkuuiy: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto qscqkykqskqmisgw; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto yomoeykcqyukscmi; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); yomoeykcqyukscmi: ysssquieawyysiyc: } gkoiyaagwgycysim: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto swmgucaogosuueug; } goto qscqkykqskqmisgw; swmgucaogosuueug: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto ksqgwiceoomkuuiy; qscqkykqskqmisgw: uwsmcsiiisuocgwg: return $qgowgcsuycquswmo; } }
