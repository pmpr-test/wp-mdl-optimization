<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e86b3a376             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\CDN; use CF\WordPress\Hooks; use Pmpr\Common\Foundation\Interfaces\Constants; class Cloudflare extends Common { private $hooks = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x6e\x6f\164\x69\x63\145\x73", [$this, "\x6d\145\x79\147\x73\171\167\165\x69\153\151\x6f\153\x73\153\147"])->qcsmikeggeemccuu("\141\x64\x6d\x69\156\x5f\156\157\164\151\143\145\x73", [$this, "\157\x69\153\155\151\145\171\x6f\x6f\x73\167\153\165\x71\x77\157"])->qcsmikeggeemccuu("\141\144\155\x69\156\137\156\x6f\164\151\143\x65\x73", [$this, "\x6d\x79\x6b\143\147\165\167\x6d\x61\x63\161\165\x65\x6d\x6b\x73"]); } public function meygsywuikiokskg() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!(!$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\114\117\125\104\x46\x4c\101\122\105\x5f\120\114\125\107\x49\116\137\x44\111\122") || !$uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\114\117\x55\104\106\114\x41\122\105\x5f\110\124\124\120\x32\x5f\x53\x45\122\126\x45\x52\137\120\125\123\x48\x5f\101\x43\x54\111\126\x45"))) { goto mseimosiimuuceoa; } return; mseimosiimuuceoa: if (!($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() || !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(Constants::gewmeskawiqikkoc))) { goto scaoisaaceiaweoe; } return; scaoisaaceiaweoe: $uamcoiueqaamsqma = __("\103\154\157\165\144\146\154\x61\162\145\47\x73\x20\x48\x54\124\x50\x2f\x32\40\123\x65\x72\x76\x65\162\x20\120\x75\x73\150\x20\x69\163\x20\151\x6e\143\157\x6d\160\141\x74\x69\x62\x6c\x65\x20\x77\x69\164\x68\x20\164\x68\145\x20\x66\145\x61\x74\165\x72\145\x73\x20\x6f\146\40\x52\145\155\x6f\x76\145\x20\x55\156\165\163\x65\x64\x20\103\123\123\x2e\x20\x57\x65\40\163\164\x72\x6f\156\x67\x6c\x79\x20\162\x65\x63\157\x6d\155\x65\156\144\40\x64\x69\x73\x61\x62\x6c\151\156\x67\40\x69\x74\x2e", PR__MDL__OPTIMIZATION); $this->cimaucgayqyyccoc($uamcoiueqaamsqma, "\143\x6c\157\165\x64\x66\154\141\162\145\137\163\145\x72\x76\145\162\137\x70\165\163\x68"); } public function oikmieyooswkuqwo() { } public function mykcguwmacquemks() { } private function aiomiwiwyeyqeoqs() : bool { if ($this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai("\x63\x6c\157\165\144\x66\x6c\x61\x72\145\57\x63\154\x6f\165\x64\x66\x6c\x61\162\145\x2e\160\x68\160")) { goto mcgcqaiwmkewmwue; } return false; mcgcqaiwmkewmwue: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!(empty($qkqgcaykemoiecma->get("\x63\154\x6f\x75\x64\146\x6c\141\162\145\137\x61\160\x69\x5f\x65\155\141\x69\x6c")) || empty($qkqgcaykemoiecma->get("\x63\154\157\165\144\146\x6c\141\162\145\x5f\x61\x70\x69\x5f\x6b\x65\171")) || empty($qkqgcaykemoiecma->get("\x63\154\x6f\165\x64\x66\154\x61\x72\x65\137\143\141\143\x68\x65\144\137\144\157\155\141\151\156\x5f\156\141\x6d\x65")))) { goto ziggykossqqayaki; } return false; ziggykossqqayaki: return true; } private function egakasqqyawukwco() : Hooks { if ($this->hooks) { goto sooqqqougsgcumko; } $this->hooks = new Hooks(); sooqqqougsgcumko: return $this->hooks; } public function wciuogmwscgcqkmc() { $this->egakasqqyawukwco()->purgeCacheEverything(); } public function kggeaycqkokcquqk($ooosquycguwewsao) { $this->egakasqqyawukwco()->purgeCacheByRelevantURLs($ooosquycguwewsao); } }
