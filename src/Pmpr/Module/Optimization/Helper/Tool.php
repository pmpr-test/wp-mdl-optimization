<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd9008d45             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\164\x68"); $qogsmwakwacwqogk["\160\x61\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\164"]) . $qogsmwakwacwqogk["\x70\141\164\x68"] . "\x2e\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x6f\x6e\x66\151\x67\x75\162\x61\164\151\157\x6e\137\146\x69\x6c\145\163\x5f\x70\x61\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if (!$cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\137\x4f\120\124\137\x43\x41\x43\110\105\137\x44\x4f\x4e\124\x5f\x45\x4e\103\117\104\105\137\x46\x49\x4c\105\116\101\x4d\105\x53")) { $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); } return untrailingslashit($migiiksoiymissge) . "\57\x5f\x70\162\x2d\146\151\x6c\145\x73\57\151\x6e\144\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\117\160\164\151\x6d\x69\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\145\40\x79\157\165\40\163\x75\x72\145\x20\141\142\157\165\x74\40\x72\x65\117\x70\x74\151\155\151\x7a\x65\40\x74\x68\151\x73\x20\x70\x61\147\x65\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\141\163\163" => "\160\162\55\x6f\160\164\x2d\x70\x75\162\147\145\55\x70\157\x73\164\55\x63\141\143\150\145\40\x70\x72\55\142\164\156\x20\142\164\156\x2d\x70\x72\x69\x6d\x61\x72\x79", "\164\151\164\x6c\145" => $meqocwsecsywiiqs, "\144\141\x74\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\x74\x61\x2d\155\151\143\x72\x6f\x6d\157\x64\x61\154\x2d\143\x6c\157\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\163\163" => "\x70\x72\x2d\157\x70\x74\55\x70\141\x67\145\55\x61\x63\164\151\x6f\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x70\x72\55\157\x70\164\55\160\x72\145\154\x6f\141\x64") || $this->ccmqswoueyeqkoeq("\x70\x72\145\154\157\141\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\x2d\x6f\160\164\55\x72\145\155\157\164\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\164\55\x6f\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\154\x6c\157\167\137\x74\157\x5f\x73\164\141\x72\x74\x5f\x62\165\x66\146\145\x72\137\x70\x72\157\x63\145\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\111\115\111\132\101\124\111\117\116\137\104\x4f\116\x54\137\x4f\120\124\x49\115\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->syukqeyowauuucwi() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\171\x70\x61\163\x73\137\154\x69\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (is_bool($migiiksoiymissge) && !$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\x73\137\x62\x79\160\x61\x73\x73", false, $migiiksoiymissge); } }
