<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb25ce6cfc8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use MatthiasMullie\Minify\CSS; use Pmpr\Common\Foundation\Interfaces\Constants; class Style extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::wwukgkqwyakeqwqk; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\137\x61\x64\x64\137\151\x6e\154\151\156\145\x5f\x73\164\x79\x6c\x65\137\144\x61\164\141", [$this, "\x6f\153\165\147\x75\x79\x61\143\147\x67\x73\x61\x67\x65\161\161"]); parent::kgquecmsgcouyaya(); } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) { return parent::okuguyacggsageqq($ewgwqamkygiqaawc, "\163\x74\x79\154\145"); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { $aksgkeoomwimawms = new CSS($ewgwqamkygiqaawc); return $aksgkeoomwimawms->minify(); } public function ackccoemuqacsooc(?string $ewgwqamkygiqaawc) : ?string { $ewgwqamkygiqaawc = $this->oeyciyycaaeuacsu($ewgwqamkygiqaawc); return $this->keaqaesooiggwkkg($ewgwqamkygiqaawc); } public function oeyciyycaaeuacsu($ewgwqamkygiqaawc) : string { preg_match_all("\57\x40\56\x2a\77\133\136\x7b\135\x2b\x7b\x28\x5b\x5c\x73\134\x53\x5d\53\77\175\x29\x5c\163\x2a\175\x7c\x28\x5b\141\55\172\60\55\x39\x2c\40\x2e\x28\x3a\51\43\x5c\x5b\x5c\135\75\137\76\53\x7e\x5c\55\100\x5d\53\51\173\x28\133\x5e\175\174\x5e\x7b\x5d\x2a\51\175\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[0] ?? []; if (!(is_array($meyiiwcswqmuggyg) && $meyiiwcswqmuggyg)) { goto scaciowogmayswms; } $wukkyuqigkkuocmy = array_diff_assoc($meyiiwcswqmuggyg, array_unique($meyiiwcswqmuggyg)); foreach ($wukkyuqigkkuocmy as $mqgsiqkcgqocoaam) { $ewgwqamkygiqaawc = str_replace($mqgsiqkcgqocoaam, '', $ewgwqamkygiqaawc); imgagmqusgiqissi: } aeekgeqawgsmgiqw: scaciowogmayswms: return $ewgwqamkygiqaawc; } public function keaqaesooiggwkkg($ewgwqamkygiqaawc) { return preg_replace("\57\133\136\175\x3b\x7b\x5c\156\135\53\x7b\134\163\52\175\57", '', $ewgwqamkygiqaawc); } public function awgqiogkeqaeomoa($ewgwqamkygiqaawc) { $qgowgcsuycquswmo = $this->qaekoyawqougggiq($ewgwqamkygiqaawc); if (!$qgowgcsuycquswmo) { goto yemuiyokmqoqckwu; } $yygmoeguaqyumuui = implode("\174", array_keys($qgowgcsuycquswmo)); if (!preg_match_all("\x2f\x76\141\x72\x5c\x28\x28\133\136\51\x5d{$yygmoeguaqyumuui}\51\x5c\x29\57", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg)) { goto kqsyqwwscwoswsgk; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($meyiiwcswqmuggyg[0] as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($meyiiwcswqmuggyg[1], $momcykaoccoymeig); $moyaaaascoeowegu = $gkyciwoiiisgywcs->get($qgowgcsuycquswmo, $uusmaiomayssaecw, $uammqaqiwgcmeska); if (!($moyaaaascoeowegu && $uammqaqiwgcmeska !== $moyaaaascoeowegu)) { goto sqyceswygksmmqqa; } $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, $moyaaaascoeowegu, $ewgwqamkygiqaawc); sqyceswygksmmqqa: wskccugoccagaqcw: } cesaaiguwciccysi: kqsyqwwscwoswsgk: yemuiyokmqoqckwu: return $ewgwqamkygiqaawc; } public function qaekoyawqougggiq(?string &$ewgwqamkygiqaawc = null) : array { preg_match_all("\57\72\162\157\157\x74\x5c\x73\x2a\173\x28\133\x5c\163\x5c\123\x5d\x2b\x3f\x29\175\x2f", $ewgwqamkygiqaawc, $meyiiwcswqmuggyg); $moyaaaascoeowegu = []; $qgowgcsuycquswmo = []; if (!isset($meyiiwcswqmuggyg[1])) { goto iiyamaquicwswcyu; } $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $uammqaqiwgcmeska) { $oammesyieqmwuwyi = explode("\x3b", $uammqaqiwgcmeska); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $skueimwaqauscmoc = explode("\72", $igqsaukqcqscimok); $ymqmyyeuycgmigyo = $skueimwaqauscmoc[0]; $eqgoocgaqwqcimie = $skueimwaqauscmoc[1]; if (!($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo)) { goto gyceukwoyaasuwik; } if (preg_match("\57\x76\x61\x72\x5c\50\x28\x5b\x5e\51\135\52\51\x5c\51\x2f", $eqgoocgaqwqcimie, $meyiiwcswqmuggyg)) { goto qsycguggqkgywgaq; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; goto wsyeqyekimescwkq; qsycguggqkgywgaq: $moyaaaascoeowegu[$ymqmyyeuycgmigyo] = $meyiiwcswqmuggyg[0]; wsyeqyekimescwkq: gyceukwoyaasuwik: yquysamwsoyyqcya: } syquiiogeymgicuy: $ewgwqamkygiqaawc = str_replace($uammqaqiwgcmeska, '', $ewgwqamkygiqaawc); kywmiquiiwmwgooy: } qocmmyskykeuwsae: iiyamaquicwswcyu: return $this->akuukemmseeswsom($qgowgcsuycquswmo, $moyaaaascoeowegu); } protected function usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo) { $eouekqmooogkoqoo = implode("\x7c", array_keys($qgowgcsuycquswmo)); if (!preg_match("\57{$eouekqmooogkoqoo}\x2f", $mmomgiqeqykoeukg, $meyiiwcswqmuggyg)) { goto omeookmiomoieeee; } $ksiyqouuaoymsycg = $meyiiwcswqmuggyg[0] ?? ''; if (!($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qgowgcsuycquswmo, $ksiyqouuaoymsycg))) { goto iiyggeuemwuwqiey; } $mmomgiqeqykoeukg = str_replace($mmomgiqeqykoeukg, $eqgoocgaqwqcimie, $mmomgiqeqykoeukg); iiyggeuemwuwqiey: omeookmiomoieeee: return $mmomgiqeqykoeukg; } protected function akuukemmseeswsom(array $qgowgcsuycquswmo, array $moyaaaascoeowegu) : array { if (!$moyaaaascoeowegu) { goto wcagqkquasswioos; } $oyiokksswogocuwm = count($moyaaaascoeowegu); $awqociesscimyymk = $gaeqamemwmwsyukm = $oyiokksswogocuwm; ggoyigsoyccmscum: if (!($oyiokksswogocuwm && $gaeqamemwmwsyukm)) { goto agokkauammisaqke; } foreach ($moyaaaascoeowegu as $ymqmyyeuycgmigyo => $mmomgiqeqykoeukg) { $eqgoocgaqwqcimie = $this->usauegmmsiakwico($mmomgiqeqykoeukg, $qgowgcsuycquswmo); if (!($eqgoocgaqwqcimie !== $mmomgiqeqykoeukg)) { goto cyyecekuwygaqwcy; } $qgowgcsuycquswmo[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; unset($moyaaaascoeowegu[$ymqmyyeuycgmigyo]); cyyecekuwygaqwcy: pscqogmyseiwuqye: } aigeoggkowgwwwqg: $gaeqamemwmwsyukm = count($moyaaaascoeowegu); if (!($gaeqamemwmwsyukm == $awqociesscimyymk)) { goto muqeeocooyiosouk; } goto agokkauammisaqke; muqeeocooyiosouk: $awqociesscimyymk = $gaeqamemwmwsyukm; $oyiokksswogocuwm--; goto ggoyigsoyccmscum; agokkauammisaqke: wcagqkquasswioos: return $qgowgcsuycquswmo; } }
