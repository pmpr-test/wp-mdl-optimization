<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08ff06dc0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x70\137\x61\x64\144\137\x69\156\154\151\156\x65\x5f\163\164\x79\x6c\x65\x5f\x64\141\x74\x61", [$this, "\x6f\x6b\x75\x67\x75\171\x61\x63\147\147\x73\x61\147\x65\x71\x71"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\x73\x74\171\154\x65"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\x40\x2e\52\x3f\x5b\x5e\x7b\x5d\x2b\x7b\50\133\x5c\163\134\x53\135\53\77\175\51\134\163\x2a\x7d\x7c\50\133\141\55\x7a\x30\x2d\71\x2c\40\x2e\50\x3a\x29\x23\x5c\x5b\134\x5d\x3d\137\76\53\176\x5c\55\x40\135\53\51\x7b\x28\x5b\x5e\x7d\x7c\x5e\x7b\135\x2a\x29\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto icouowaoycuuisqe; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); gwyseusuceuwwccu: } wywwieycqskuqcwc: icouowaoycuuisqe: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\x2f\x5b\136\175\x3b\x7b\134\x6e\135\53\173\134\163\52\x7d\x2f", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto iqwsqykoueqyyomy; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\x61\x72\134\50\x28\133\136\x29\135{$yygmoeguaqyumuui}\51\x5c\x29\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto coogyackikgmecic; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto swckikycciugciqq; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); swckikycciugciqq: kmqusaiaiogecyiy: } ocmwuquguuqigose: coogyackikgmecic: iqwsqykoueqyyomy: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\x2f\72\162\157\157\164\134\163\52\173\50\x5b\x5c\x73\x5c\123\135\53\77\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto cicegcoqyuoggiwy; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto qsmoiwqcuamyuwyu; } if (preg_match("\x2f\x76\x61\162\134\x28\50\133\x5e\51\x5d\x2a\x29\134\x29\57", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto wmcmqmmcweecqmsw; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto aakoeuuosouyeemc; wmcmqmmcweecqmsw: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; aakoeuuosouyeemc: qsmoiwqcuamyuwyu: yoaewquyogiimyic: } caaygouikgagsssc: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); egikqoaqqegawugu: } ggaucuaykyuiikem: cicegcoqyuoggiwy: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match("\57{$eouekqmooogkoqoo}\x2f", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto saekesoeysauokkq; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto ugcwqacogqoswyse; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); ugcwqacogqoswyse: saekesoeysauokkq: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto sescaagayikiggyq; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; meseuuacmkuowqau: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto wycuyiukyceccaow; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto esqiocgueosoksyq; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); esqiocgueosoksyq: csqakuuiyywassgw: } sqmiymiemeegegic: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto csggsqueaqmwgwkk; } goto wycuyiukyceccaow; csggsqueaqmwgwkk: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto meseuuacmkuowqau; wycuyiukyceccaow: sescaagayikiggyq: return $qgowgcsuycquswmo; } }
