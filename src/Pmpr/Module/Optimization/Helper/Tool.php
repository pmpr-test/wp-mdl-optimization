<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0c9956f5c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto eysuawiooiswaseq; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\141\x74\x68"); $qogsmwakwacwqogk["\160\141\164\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\164"]) . $qogsmwakwacwqogk["\x70\141\164\150"] . "\x2e\160\150\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; eysuawiooiswaseq: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\157\156\x66\151\x67\x75\x72\141\164\151\157\156\x5f\146\x69\154\x65\163\137\160\x61\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\x4f\120\x54\x5f\x43\x41\103\110\105\x5f\104\117\116\124\137\105\116\x43\x4f\104\x45\x5f\106\x49\114\105\116\x41\x4d\105\x53")) { goto egiauwuekseyeaeq; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); eogomkswkaqwyycm: } iecqkqoiqimmisyw: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); egiauwuekseyeaeq: return untrailingslashit($migiiksoiymissge) . "\57\137\x70\x72\x2d\x66\x69\154\x65\x73\x2f\151\156\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\117\x70\164\x69\x6d\x69\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\x65\x20\x79\157\x75\x20\163\x75\x72\x65\x20\x61\x62\157\x75\164\x20\x72\x65\x4f\x70\x74\x69\155\x69\x7a\145\40\164\150\x69\163\x20\x70\x61\147\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\163" => "\x6f\160\164\x2d\160\x75\x72\147\x65\x2d\160\x6f\163\164\55\143\x61\143\150\x65\x20\160\162\x2d\x62\164\156\40\x62\164\156\x2d\x70\x72\x69\x6d\x61\x72\171", "\x74\x69\x74\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\x74\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\164\x61\x2d\x6d\151\x63\x72\157\155\157\x64\x61\154\x2d\x63\154\x6f\163\x65"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\163\x73" => "\157\160\164\x2d\160\x61\147\x65\55\141\143\x74\151\157\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\164\55\x70\x72\145\154\x6f\x61\x64") || $this->ccmqswoueyeqkoeq("\160\x72\145\154\157\x61\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\162\55\x6f\x70\164\55\162\x65\x6d\157\x74\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\x74\55\157\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\x6c\154\x6f\x77\x5f\164\x6f\137\163\164\x61\x72\164\137\x62\x75\146\146\x65\x72\x5f\x70\x72\x6f\x63\x65\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\137\117\x50\x54\x49\115\x49\132\x41\124\x49\117\x4e\137\x44\117\x4e\x54\137\x4f\120\x54\x49\115\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\171\160\x61\163\163\x5f\x6c\151\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto euuekiyqwkowiees; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); euuekiyqwkowiees: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\163\x5f\142\171\x70\x61\163\x73", false, $migiiksoiymissge); } }
