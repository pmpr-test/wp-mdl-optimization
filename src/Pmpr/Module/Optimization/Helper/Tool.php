<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c4541eb2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\x74\x68"); $qogsmwakwacwqogk["\x70\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\x73\x74"]) . $qogsmwakwacwqogk["\160\x61\x74\150"] . "\56\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x6f\x6e\x66\x69\147\165\162\x61\164\x69\x6f\x6e\x5f\146\151\x6c\x65\163\x5f\160\141\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if (!$cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\137\117\x50\x54\137\103\x41\103\110\x45\x5f\104\x4f\116\124\x5f\x45\x4e\x43\117\104\105\137\x46\x49\x4c\105\x4e\x41\115\105\123")) { $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); } return untrailingslashit($migiiksoiymissge) . "\x2f\x5f\160\x72\x2d\146\151\x6c\x65\163\x2f\151\x6e\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\117\x70\164\x69\x6d\x69\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\x72\145\x20\x79\x6f\165\x20\x73\165\162\145\40\x61\142\157\165\164\40\x72\145\117\160\164\x69\x6d\x69\172\145\40\x74\x68\x69\x73\40\x70\x61\147\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\160\x72\55\157\x70\x74\x2d\x70\165\162\147\145\55\160\x6f\163\164\55\143\x61\x63\150\x65\x20\x70\162\x2d\x62\164\x6e\x20\142\x74\156\x2d\160\x72\151\x6d\x61\162\171", "\164\x69\164\154\145" => $meqocwsecsywiiqs, "\144\x61\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\141\x2d\155\x69\143\x72\157\155\x6f\x64\x61\x6c\x2d\143\154\157\x73\x65"]]], $meqocwsecsywiiqs, ["\143\154\x61\163\163" => "\160\x72\x2d\157\x70\x74\x2d\x70\141\x67\145\55\x61\143\x74\151\x6f\x6e"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\55\x6f\x70\x74\55\160\162\x65\154\x6f\141\144") || $this->ccmqswoueyeqkoeq("\160\162\145\x6c\x6f\141\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\x72\55\157\x70\x74\x2d\162\x65\x6d\157\164\145"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\x6e\x74\55\x6f\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\x6c\x6c\x6f\167\x5f\164\157\x5f\163\x74\x61\162\164\137\x62\165\x66\146\x65\x72\x5f\x70\x72\157\143\145\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\117\120\x54\111\x4d\111\132\x41\x54\111\x4f\x4e\x5f\104\x4f\116\x54\x5f\117\120\124\111\x4d\111\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->syukqeyowauuucwi() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\171\x70\141\x73\163\x5f\154\151\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (is_bool($migiiksoiymissge) && !$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\x5f\x62\171\x70\141\163\163", false, $migiiksoiymissge); } }
