<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc54f326c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\x5f\x61\x64\x64\x5f\x69\156\x6c\x69\x6e\145\137\163\x74\x79\x6c\145\137\144\x61\164\x61", [$this, "\x6f\153\165\147\165\x79\x61\x63\x67\147\163\x61\x67\x65\x71\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\164\171\x6c\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\100\x2e\x2a\77\x5b\136\x7b\x5d\53\173\x28\133\134\x73\134\123\x5d\x2b\x3f\175\x29\x5c\163\52\175\x7c\x28\133\x61\55\x7a\x30\55\71\x2c\x20\56\50\72\x29\x23\x5c\x5b\134\x5d\x3d\137\76\x2b\x7e\x5c\x2d\100\135\53\x29\173\50\x5b\136\x7d\x7c\136\x7b\135\x2a\51\175\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg) { $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\x5b\x5e\x7d\x3b\173\x5c\156\x5d\x2b\173\x5c\x73\52\175\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if ($qgowgcsuycquswmo) { $yygmoeguaqyumuui = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (preg_match_all("\57\x76\141\162\134\x28\50\133\136\51\x5d{$yygmoeguaqyumuui}\51\x5c\51\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if ($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); } } } } return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\x3a\x72\x6f\157\x74\134\163\52\x7b\x28\133\134\x73\x5c\x53\x5d\53\x3f\x29\x7d\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (isset($meyiiwcswqmuggyg[1])) { $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { if (preg_match("\x2f\x76\x61\162\134\50\x28\x5b\136\51\135\x2a\x29\134\x29\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; } else { $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } } } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); } } return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\174", array_keys($qgowgcsuycquswmo)); if (preg_match("\57{$eouekqmooogkoqoo}\57", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg)) { $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); } } return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if ($moyaaaascoeowegu) { $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; while ($oyiokksswogocuwm && $gaeqamemwmwsyukm) { foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if ($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg) { $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); } } $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if ($gaeqamemwmwsyukm == $awqociesscimyymk) { break; } $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; } } return $qgowgcsuycquswmo; } }
