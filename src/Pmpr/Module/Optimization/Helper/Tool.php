<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb25af783f1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto eciksmgaqikwegwq; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\x74\150"); $qogsmwakwacwqogk["\x70\141\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\163\x74"]) . $qogsmwakwacwqogk["\x70\141\164\150"] . "\x2e\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; eciksmgaqikwegwq: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\157\156\x66\151\x67\x75\162\141\x74\151\x6f\x6e\x5f\146\x69\154\x65\163\137\160\141\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\137\x4f\120\x54\137\x43\x41\x43\x48\x45\x5f\x44\117\x4e\x54\x5f\105\x4e\x43\x4f\x44\x45\137\106\x49\x4c\105\116\x41\x4d\105\123")) { goto measoqewessauqma; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); qckouamqueqiykqi: } kieyoaoawqacqamy: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); measoqewessauqma: return untrailingslashit($migiiksoiymissge) . "\x2f\x5f\x70\162\55\146\x69\x6c\145\x73\57\151\156\144\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\117\160\x74\151\x6d\x69\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\145\x20\171\157\165\x20\163\165\x72\145\40\141\142\x6f\165\164\x20\162\145\117\x70\164\x69\155\151\172\145\40\164\150\151\x73\x20\160\141\x67\145\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\163\163" => "\157\160\x74\55\160\x75\162\147\145\55\160\x6f\x73\164\x2d\x63\141\x63\150\145\x20\x70\x72\x2d\x62\164\156\40\142\x74\x6e\55\160\162\x69\x6d\141\162\x79", "\x74\151\164\154\x65" => $meqocwsecsywiiqs, "\x64\141\x74\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\164\x61\x2d\x6d\x69\143\162\157\155\x6f\144\x61\x6c\55\x63\154\157\x73\x65"]]], $meqocwsecsywiiqs, ["\143\x6c\141\163\x73" => "\x6f\160\164\x2d\x70\141\147\145\x2d\141\143\x74\151\x6f\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\x74\x2d\x70\162\145\x6c\157\141\x64") || $this->ccmqswoueyeqkoeq("\160\162\145\154\157\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\x2d\157\x70\x74\55\x72\x65\155\157\x74\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\156\164\55\x6f\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\x6c\x6c\157\167\137\x74\x6f\137\163\164\x61\x72\164\137\142\165\x66\146\x65\162\137\160\x72\x6f\143\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\111\115\x49\x5a\101\124\111\x4f\x4e\x5f\x44\x4f\x4e\x54\x5f\117\120\124\x49\115\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\x79\x70\x61\x73\163\137\154\151\x73\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto auaigccmwqwsqsku; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); auaigccmwqwsqsku: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\163\137\x62\171\160\141\x73\x73", false, $migiiksoiymissge); } }
