<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1377d8db9a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto eysuawiooiswaseq; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\x74\150"); $qogsmwakwacwqogk["\x70\141\164\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\163\x74"]) . $qogsmwakwacwqogk["\x70\141\x74\x68"] . "\x2e\160\150\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; eysuawiooiswaseq: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\157\156\x66\x69\x67\165\x72\141\164\151\157\x6e\x5f\x66\x69\154\x65\x73\137\160\141\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\x5f\117\x50\124\x5f\x43\x41\x43\110\x45\137\104\x4f\116\x54\137\x45\x4e\103\117\x44\105\137\106\x49\x4c\105\116\101\115\105\123")) { goto egiauwuekseyeaeq; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); eogomkswkaqwyycm: } iecqkqoiqimmisyw: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); egiauwuekseyeaeq: return untrailingslashit($migiiksoiymissge) . "\57\137\x70\x72\55\x66\x69\x6c\x65\x73\57\151\156\144\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\117\160\x74\x69\x6d\151\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\145\x20\x79\x6f\165\x20\163\x75\x72\145\40\x61\x62\157\165\x74\x20\x72\145\x4f\x70\164\x69\x6d\151\172\145\x20\164\150\x69\x73\40\160\x61\147\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\141\163\163" => "\x6f\x70\x74\55\x70\165\162\147\145\55\160\x6f\163\164\x2d\143\x61\143\x68\x65\40\x70\x72\55\x62\x74\x6e\x20\142\x74\156\x2d\160\x72\x69\x6d\141\x72\171", "\164\151\164\154\x65" => $meqocwsecsywiiqs, "\x64\x61\x74\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\x74\x61\55\x6d\x69\143\162\x6f\x6d\157\144\141\x6c\x2d\x63\154\x6f\163\x65"]]], $meqocwsecsywiiqs, ["\143\154\141\163\x73" => "\157\x70\x74\55\x70\141\x67\x65\x2d\141\143\164\x69\x6f\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\x74\x2d\x70\x72\x65\154\157\141\144") || $this->ccmqswoueyeqkoeq("\x70\162\145\154\x6f\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\x72\55\157\160\x74\55\x72\145\x6d\157\x74\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\x74\x2d\x6f\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\x6c\x6c\157\167\137\164\x6f\137\163\164\141\x72\x74\137\x62\x75\146\x66\145\162\137\x70\x72\157\x63\x65\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\137\117\120\124\x49\x4d\x49\x5a\101\x54\111\117\116\x5f\104\x4f\x4e\x54\x5f\x4f\x50\124\x49\115\x49\132\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\x79\160\141\x73\163\137\154\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto euuekiyqwkowiees; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); euuekiyqwkowiees: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\x73\137\x62\x79\160\141\163\163", false, $migiiksoiymissge); } }
