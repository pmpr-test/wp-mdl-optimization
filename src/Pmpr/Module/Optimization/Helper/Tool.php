<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d3a1360b4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto eysuawiooiswaseq; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\164\x68"); $qogsmwakwacwqogk["\160\x61\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\x6f\163\x74"]) . $qogsmwakwacwqogk["\160\141\164\x68"] . "\x2e\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; eysuawiooiswaseq: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x6f\156\x66\x69\x67\x75\x72\141\x74\151\x6f\x6e\x5f\146\x69\154\145\x73\x5f\x70\x61\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\x5f\x4f\120\124\x5f\x43\x41\103\x48\x45\137\104\117\x4e\x54\x5f\x45\x4e\103\117\x44\x45\x5f\106\111\114\105\116\101\x4d\x45\123")) { goto egiauwuekseyeaeq; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); eogomkswkaqwyycm: } iecqkqoiqimmisyw: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); egiauwuekseyeaeq: return untrailingslashit($migiiksoiymissge) . "\x2f\137\160\x72\x2d\146\x69\x6c\145\163\x2f\x69\x6e\144\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\117\x70\164\151\155\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\145\x20\171\157\165\40\163\165\x72\x65\40\x61\142\157\165\x74\40\x72\x65\x4f\160\164\151\155\151\x7a\x65\40\164\150\x69\163\x20\x70\x61\x67\x65\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\163\x73" => "\x6f\x70\164\55\x70\x75\x72\147\x65\55\x70\x6f\163\x74\55\x63\x61\143\x68\x65\x20\x70\x72\55\x62\x74\156\x20\142\164\x6e\x2d\x70\x72\x69\155\141\x72\x79", "\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x64\141\x74\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\164\x61\55\155\151\x63\162\157\x6d\x6f\144\141\154\55\x63\154\157\x73\x65"]]], $meqocwsecsywiiqs, ["\x63\x6c\141\163\x73" => "\157\x70\x74\x2d\x70\x61\147\145\55\141\143\164\x69\x6f\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\164\x2d\160\x72\x65\154\157\x61\x64") || $this->ccmqswoueyeqkoeq("\x70\162\x65\154\x6f\141\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\x72\x2d\157\x70\164\x2d\162\145\x6d\x6f\164\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\156\x74\55\x6f\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\154\x6c\157\x77\137\164\x6f\137\163\x74\x61\162\x74\137\142\x75\x66\x66\145\x72\137\160\162\x6f\x63\145\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\137\x4f\120\x54\111\115\111\x5a\101\124\x49\x4f\116\137\x44\117\x4e\124\x5f\117\120\124\111\x4d\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\x79\x70\141\163\x73\x5f\x6c\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto euuekiyqwkowiees; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); euuekiyqwkowiees: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\x73\x5f\x62\x79\x70\141\163\x73", false, $migiiksoiymissge); } }
