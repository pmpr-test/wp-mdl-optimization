<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_add_inline_style_data', [$this, 'okuguyacggsageqq']); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, 'style'); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all('/@.*?[^{]+{([\\s\\S]+?})\\s*}|([a-z0-9, .(:)#\\[\\]=_>+~\\-@]+){([^}|^{]*)}/', $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg) { $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); } } return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace('/[^};{\\n]+{\\s*}/', '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if ($qgowgcsuycquswmo) { $yygmoeguaqyumuui = implode('|', array_keys($qgowgcsuycquswmo)); if (preg_match_all("/var\\(([^)]{$yygmoeguaqyumuui})\\)/", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if ($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu) { $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); } } } } return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all('/:root\\s*{([\\s\\S]+?)}/', $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (isset($meyiiwcswqmuggyg[1])) { $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode(';', $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode(':', $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { if (preg_match('/var\\(([^)]*)\\)/', $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; } else { $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } } } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); } } return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode('|', array_keys($qgowgcsuycquswmo)); if (preg_match("/{$eouekqmooogkoqoo}/", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg)) { $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); } } return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if ($moyaaaascoeowegu) { $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; while ($oyiokksswogocuwm && $gaeqamemwmwsyukm) { foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if ($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg) { $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); } } $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if ($gaeqamemwmwsyukm == $awqociesscimyymk) { break; } $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; } } return $qgowgcsuycquswmo; } }
