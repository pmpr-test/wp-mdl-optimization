<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581ccae80ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\160\x72\137\157\160\164\151\x6d\151\172\x61\x74\x69\157\156\137"; const eaegumogucmwsmsk = "\x50\122\x5f\x4f\120\x54\111\115\x49\x5a\x41\124\x49\x4f\116\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\x70\164\151\x6d\x69\x7a\141\x74\x69\157\156", PR__MDL__OPTIMIZATION); }, Constants::sguyaymiiiiewame => Setting::class])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\x72\147\145\137\150\x74\155\x6c\x5f\143\x61\143\x68\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\156\x5f\x69\156\151\x74", [$this, "\x71\x61\171\151\145\x75\x73\x63\x73\x73\153\151\x71\x61\x63\x73"]); $this->waqewsckuayqguos("\x62\145\x66\x6f\x72\x65\x5f\145\x6e\161\x75\145\165\145\x5f\142\x61\x63\153\x65\156\x64\137\x61\x73\163\x65\164\x73", [$this, "\145\x6e\161\x75\145\165\145"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Capability::symcgieuakksimmu(); } } Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x62\x61\x63\153\x65\156\144", "\x62\141\143\x6b\145\156\144\56\x6a\163")->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, "\142\x61\x63\153\x65\156\x64", "\x62\141\143\153\x65\x6e\x64\x2e\x63\x73\163")); } public function qayieuscsskiqacs() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if (($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk())) { foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if (!$iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (is_string($uiewakwqscemywuo)) { $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); } } $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\x6e\x66\x69\147\56\160\150\x70", ["\143\157\156\x66\x69\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\162\x61\x79\134\x73\53\134\50\100\151", "\141\162\162\141\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\162\x72\141\x79\134\50\134\163\x2b\134\51\x40\x69", "\x61\162\x72\141\x79\50\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\160\164\x69\155\x69\172\x61\164\x69\157\x6e\x20\x63\157\x6e\x66\151\147\x20\146\151\x6c\x65\40\x25\x73\40\147\x65\156\145\162\141\164\x65\144\x20\x69\x6e\40\45\x73", PR__MDL__OPTIMIZATION), "\x3c\143\x6f\x64\145\x3e{$qogsmwakwacwqogk}\x3c\57\x63\x6f\144\x65\76", "\74\x63\x6f\x64\145\76{$mkomwsiykqigmqca}\x3c\57\143\x6f\144\145\x3e"), "\x6f\x70\x74\151\155\x69\x7a\x61\x74\x69\x6f\x6e\x2d\143\157\x6e\146\151\x67", Constants::smkwuwawwaqyimcq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x63\x6f\x6e\x66\x69\147", __("\103\x6f\x6e\x66\151\147\165\162\141\x74\151\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); } } } } } } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\x76\x5f\x6d\x6f\144\x65" => $this->weysguygiseoukqw(Constants::qeuquamuuwueeiyi, false), "\144\x65\x62\165\x67\137\x6d\x6f\144\145" => false, "\143\157\157\x6b\151\145\x5f\150\x61\163\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\117\117\x4b\x49\105\x48\101\x53\x48"), "\162\x65\152\145\143\164\x5f\143\x6f\x6f\x6b\151\145\163" => $this->mukwwwucwusmmqau(), "\154\157\x67\x67\145\144\137\151\156\137\143\x6f\157\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\x47\x45\104\x5f\111\116\x5f\113\105\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\146\151\x67\165\162\x61\164\x69\157\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\147\x5f\x71\x75\157\x74\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\160\157\163\164\160\141\x73\163\137"; $osqkgokmuiasuukg[] = "\x77\x70\164\x6f\x75\143\150\x5f\x73\x77\151\164\x63\x68\x5f\x74\157\147\147\154\145"; $osqkgokmuiasuukg[] = "\143\157\155\155\x65\x6e\164\x5f\141\165\164\150\157\162\137"; $osqkgokmuiasuukg[] = "\143\157\x6d\155\145\x6e\164\x5f\141\x75\164\150\x6f\x72\137\145\x6d\x61\151\x6c\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\x6a\145\143\x74\x5f\x63\157\157\153\151\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
