<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f9e31abf5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; abstract class Advanced extends Container { protected string $filename = ''; protected string $directory = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x69\x6e\151\x74", [$this, "\x79\x65\171\x69\x67\x75\171\145\x67\155\155\171\165\163\x65\141"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, "\163\x77\x69\x65\141\x79\x65\171\163\141\x77\x63\x65\145\153\153"]); } public function mawoacksgosuccme() : string { return $this->filename; } public function uouwqaeikimumwki() : string { return $this->directory; } public function swieayeysawceekk() { if ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()) { $iiaumsgauuyeqksw->remove($this->agkwcckksaegcsce()); } } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $this->qeoakmiowssoqaom(); } } public function qeoakmiowssoqaom() { if ($qookweymeqawmcwo = $this->gayqqwwuycceosii()) { $acqcekoeswseswws = $this->agkwcckksaegcsce(); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists($acqcekoeswseswws)) { $oceoeyaeucyymkao = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this); $sccqccoqgskgygmg = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\122\x5f\x4f\x50\124\111\115\x49\132\x41\x54\x49\117\116\x5f\126\105\x52\x53\111\117\116", ''); if ($oceoeyaeucyymkao !== $sccqccoqgskgygmg) { $iiaumsgauuyeqksw->remove($acqcekoeswseswws); } } if (!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk()) { $mkomwsiykqigmqca = $this->uouwqaeikimumwki(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\166\141\156\143\145\144\56\160\x68\x70", $qookweymeqawmcwo); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\141\143\x68\145\x5f\150\x74\155\x6c\137\x61\144\x76\141\x6e\143\145\144\137\x66\x69\x6c\145", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $this->mawoacksgosuccme(), $ewgwqamkygiqaawc); $wkcwykowmmmwioqs = $this->mawoacksgosuccme(); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\160\x74\x69\x6d\x69\172\x61\x74\151\x6f\156\x20\45\x73\40\146\151\154\145\x20\147\x65\x6e\145\x72\x61\164\x65\x64\40\163\x75\x63\x63\x65\x73\x73\146\x75\x6c\x6c\x79\40\151\x6e\x20\x25\x73\56", PR__MDL__OPTIMIZATION), $wkcwykowmmmwioqs, $mkomwsiykqigmqca), $wkcwykowmmmwioqs, Constants::smkwuwawwaqyimcq); } } } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x61\143\150\x65\137\150\164\x6d\x6c\137\x67\x65\156\145\x72\141\x74\x65\x5f\x61\x64\166\141\156\x63\145\x64\x5f\146\151\154\145", true) && !$miiyyswuessymmwe->cmaecekuqkwmemms("\120\x52\137\x4f\120\124\x49\115\111\132\101\x54\111\117\116\137\101\104\126\x41\x4e\x43\105\x44") && !$miiyyswuessymmwe->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->uouwqaeikimumwki())) { $umuecysoywoumgwo = false; $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\141\144\166\141\156\x63\145\144", sprintf(__("\x41\x64\166\141\156\143\145\x64\x20\x46\x69\x6c\145\x28\45\163\51", PR__MDL__OPTIMIZATION), $this->mawoacksgosuccme()), $this->uouwqaeikimumwki()); } return $umuecysoywoumgwo; } public function agkwcckksaegcsce() : string { return trailingslashit($this->uouwqaeikimumwki()) . $this->mawoacksgosuccme(); } public abstract function gayqqwwuycceosii() : array; }
