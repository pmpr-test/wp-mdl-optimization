<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f1c30b6e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\160\162\137\x6f\160\164\151\x6d\151\x7a\x61\164\x69\x6f\x6e\x5f"; const eaegumogucmwsmsk = "\120\x52\137\x4f\120\x54\111\115\x49\132\101\x54\x49\117\116\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\x6d\151\172\141\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION); }, Constants::sguyaymiiiiewame => Setting::class])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\162\147\x65\137\150\164\x6d\x6c\x5f\143\x61\143\x68\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\151\156\x69\x74", [$this, "\161\x61\x79\x69\x65\x75\163\x63\163\163\153\151\161\x61\x63\163"]); $this->waqewsckuayqguos("\x62\145\x66\x6f\x72\x65\x5f\145\156\161\x75\145\x75\145\137\142\141\x63\153\145\x6e\144\137\141\x73\163\145\164\x73", [$this, "\145\x6e\x71\165\145\165\x65"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Capability::symcgieuakksimmu(); } } Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x62\141\x63\153\145\x6e\144", "\142\141\x63\153\x65\x6e\144\56\152\163")->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, "\x62\x61\x63\x6b\x65\x6e\x64", "\x62\x61\x63\x6b\x65\x6e\x64\x2e\143\163\163")); } public function qayieuscsskiqacs() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if (($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk())) { foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if (!$iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (is_string($uiewakwqscemywuo)) { $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); } } $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\x6f\156\146\151\x67\x2e\160\x68\x70", ["\143\157\x6e\146\151\x67\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\x72\x72\x61\171\134\163\x2b\x5c\x28\x40\x69", "\x61\162\x72\141\x79\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\x72\141\171\134\x28\x5c\163\53\134\x29\100\x69", "\141\162\162\x61\171\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\x70\164\151\155\151\172\141\x74\x69\x6f\x6e\40\143\157\x6e\146\x69\147\x20\x66\x69\x6c\x65\x20\x25\163\x20\147\x65\x6e\145\x72\141\164\145\144\40\x69\156\40\x25\163", PR__MDL__OPTIMIZATION), "\x3c\143\x6f\x64\145\x3e{$qogsmwakwacwqogk}\x3c\x2f\143\x6f\x64\x65\76", "\74\x63\x6f\x64\x65\x3e{$mkomwsiykqigmqca}\x3c\57\143\157\x64\145\x3e"), "\157\x70\164\x69\x6d\x69\172\x61\164\x69\157\x6e\55\x63\x6f\x6e\x66\x69\147", Constants::smkwuwawwaqyimcq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x63\157\156\x66\151\x67", __("\x43\157\156\146\x69\147\x75\162\x61\x74\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); } } } } } } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\x76\x5f\155\157\x64\145" => $this->weysguygiseoukqw(Constants::qeuquamuuwueeiyi, false), "\x64\145\x62\x75\147\137\x6d\x6f\x64\145" => false, "\x63\x6f\x6f\153\151\145\x5f\x68\141\x73\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\117\113\x49\105\x48\101\x53\x48"), "\162\145\x6a\145\x63\x74\x5f\143\x6f\157\x6b\151\x65\x73" => $this->mukwwwucwusmmqau(), "\154\157\x67\x67\145\x64\137\151\156\137\143\157\x6f\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\107\x45\x44\137\111\116\137\x4b\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\x66\151\147\x75\x72\141\x74\151\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\145\147\x5f\161\x75\157\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\x70\x6f\x73\164\x70\x61\163\163\137"; $osqkgokmuiasuukg[] = "\x77\x70\164\157\165\143\x68\137\163\167\151\164\x63\150\137\x74\157\x67\147\x6c\145"; $osqkgokmuiasuukg[] = "\x63\157\155\x6d\145\x6e\164\137\x61\165\x74\x68\157\162\137"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\x65\x6e\x74\x5f\141\x75\164\150\157\x72\x5f\x65\x6d\141\x69\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\145\x63\164\x5f\x63\157\157\x6b\151\x65\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
