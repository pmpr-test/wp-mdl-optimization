<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580826ed61d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; abstract class Advanced extends Container { protected string $filename = ''; protected string $directory = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\151\x6e\151\164", [$this, "\171\145\171\151\x67\x75\171\145\x67\x6d\x6d\x79\165\163\145\141"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, "\163\x77\151\x65\x61\171\x65\x79\163\141\x77\143\x65\145\153\153"]); } public function mawoacksgosuccme() : string { return $this->filename; } public function uouwqaeikimumwki() : string { return $this->directory; } public function swieayeysawceekk() { if ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()) { $iiaumsgauuyeqksw->remove($this->agkwcckksaegcsce()); } } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $this->qeoakmiowssoqaom(); } } public function qeoakmiowssoqaom() { if ($qookweymeqawmcwo = $this->gayqqwwuycceosii()) { $acqcekoeswseswws = $this->agkwcckksaegcsce(); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists($acqcekoeswseswws)) { $oceoeyaeucyymkao = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this); $sccqccoqgskgygmg = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\x52\137\117\120\x54\111\115\x49\132\101\124\x49\x4f\x4e\x5f\x56\105\x52\x53\x49\117\x4e", ''); if ($oceoeyaeucyymkao !== $sccqccoqgskgygmg) { $iiaumsgauuyeqksw->remove($acqcekoeswseswws); } } if (!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk()) { $mkomwsiykqigmqca = $this->uouwqaeikimumwki(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\166\x61\156\x63\x65\144\56\160\150\160", $qookweymeqawmcwo); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\141\x63\150\x65\x5f\x68\x74\155\154\137\141\x64\x76\141\156\x63\x65\x64\137\x66\151\154\x65", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $this->mawoacksgosuccme(), $ewgwqamkygiqaawc); $wkcwykowmmmwioqs = $this->mawoacksgosuccme(); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\x70\x74\x69\155\151\172\x61\164\x69\x6f\156\40\x25\x73\x20\146\151\154\145\40\x67\145\x6e\145\x72\x61\164\145\x64\40\x73\x75\x63\143\x65\x73\163\x66\165\x6c\x6c\x79\40\151\x6e\x20\45\x73\x2e", PR__MDL__OPTIMIZATION), $wkcwykowmmmwioqs, $mkomwsiykqigmqca), $wkcwykowmmmwioqs, Constants::smkwuwawwaqyimcq); } } } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x61\x63\x68\145\x5f\150\x74\155\x6c\137\147\x65\x6e\x65\x72\x61\164\x65\x5f\141\x64\166\141\x6e\x63\145\144\137\146\x69\x6c\145", true) && !$miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\124\111\115\x49\132\x41\x54\x49\x4f\116\137\101\x44\x56\x41\116\103\x45\x44") && !$miiyyswuessymmwe->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->uouwqaeikimumwki())) { $umuecysoywoumgwo = false; $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\141\144\x76\141\156\x63\x65\x64", sprintf(__("\x41\144\x76\141\x6e\143\145\x64\x20\x46\151\x6c\x65\x28\x25\x73\51", PR__MDL__OPTIMIZATION), $this->mawoacksgosuccme()), $this->uouwqaeikimumwki()); } return $umuecysoywoumgwo; } public function agkwcckksaegcsce() : string { return trailingslashit($this->uouwqaeikimumwki()) . $this->mawoacksgosuccme(); } public abstract function gayqqwwuycceosii() : array; }
