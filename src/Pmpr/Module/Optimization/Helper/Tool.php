<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581d1ae35f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\164\x68"); $qogsmwakwacwqogk["\160\141\164\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\x73\164"]) . $qogsmwakwacwqogk["\x70\141\x74\150"] . "\56\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\151\x67\165\162\x61\x74\151\x6f\x6e\137\x66\151\x6c\x65\163\137\x70\x61\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if (!$cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\117\x50\124\137\x43\x41\103\x48\105\x5f\x44\117\116\x54\x5f\105\x4e\x43\x4f\x44\x45\137\106\x49\x4c\105\x4e\101\x4d\105\123")) { $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return untrailingslashit($migiiksoiymissge) . "\57\x5f\160\162\x2d\146\151\154\x65\163\x2f\151\156\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\x4f\160\x74\x69\155\x69\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\145\40\x79\x6f\x75\x20\x73\x75\x72\x65\40\141\142\x6f\x75\164\40\x72\x65\117\160\x74\x69\x6d\x69\172\145\40\164\150\151\163\40\x70\x61\x67\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\x61\x73\x73" => "\x70\x72\x2d\x6f\x70\164\55\x70\165\162\x67\145\55\x70\x6f\163\164\55\x63\x61\143\x68\x65\40\160\x72\x2d\x62\164\x6e\40\x62\x74\156\55\160\162\x69\155\x61\162\171", "\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\144\x61\x74\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\141\x2d\x6d\x69\x63\x72\x6f\155\157\144\x61\154\x2d\143\154\x6f\163\x65"]]], $meqocwsecsywiiqs, ["\x63\154\141\x73\163" => "\x70\x72\55\x6f\160\164\x2d\x70\141\147\145\x2d\141\x63\164\x69\x6f\x6e"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\55\x6f\160\x74\x2d\x70\162\145\x6c\x6f\141\144") || $this->ccmqswoueyeqkoeq("\160\x72\x65\x6c\x6f\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\x70\x72\55\157\160\x74\55\162\145\x6d\x6f\x74\145"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\156\x74\x2d\x6f\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\154\154\x6f\167\137\x74\x6f\137\163\x74\x61\x72\164\x5f\142\x75\x66\146\x65\x72\x5f\x70\x72\x6f\x63\145\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\137\117\x50\x54\x49\115\x49\x5a\x41\124\x49\117\x4e\137\104\117\116\x54\x5f\117\120\x54\111\x4d\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->syukqeyowauuucwi() && !$owaoeyikmqaeegma->goumkccmgysgqueu() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\x79\160\141\163\163\137\154\x69\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (is_bool($migiiksoiymissge) && !$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\163\137\142\171\160\141\x73\163", false, $migiiksoiymissge); } }
