<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580826ed61d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\160\x72\137\x6f\160\x74\151\155\x69\x7a\x61\x74\x69\x6f\x6e\x5f"; const eaegumogucmwsmsk = "\x50\122\x5f\117\x50\124\111\115\111\132\101\124\x49\x4f\116\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\155\151\172\x61\x74\151\157\x6e", PR__MDL__OPTIMIZATION); }, Constants::sguyaymiiiiewame => Setting::class])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\165\162\x67\x65\x5f\x68\164\155\154\x5f\143\141\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\x5f\x69\x6e\x69\x74", [$this, "\161\141\171\151\x65\x75\163\x63\163\x73\153\x69\x71\141\x63\x73"]); $this->waqewsckuayqguos("\142\x65\x66\x6f\162\x65\x5f\145\x6e\161\165\x65\165\x65\x5f\142\x61\143\153\145\x6e\x64\x5f\141\163\x73\145\x74\163", [$this, "\x65\x6e\161\165\x65\x75\x65"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Capability::symcgieuakksimmu(); } } Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x62\141\x63\x6b\x65\156\x64", "\142\141\x63\153\145\x6e\144\56\x6a\x73")->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, "\142\x61\x63\x6b\145\156\x64", "\x62\141\x63\153\x65\156\144\56\143\163\163")); } public function qayieuscsskiqacs() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if (($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk())) { foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if (!$iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (is_string($uiewakwqscemywuo)) { $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); } } $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\146\151\147\x2e\x70\x68\160", ["\143\x6f\x6e\146\151\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\x72\141\x79\x5c\x73\53\x5c\50\100\x69", "\141\x72\162\141\171\x28", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\x72\x61\x79\134\x28\x5c\163\x2b\x5c\x29\x40\x69", "\141\162\162\x61\171\x28\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\x70\164\x69\155\151\172\141\x74\x69\x6f\x6e\x20\143\157\x6e\x66\151\147\x20\x66\151\154\x65\x20\x25\x73\40\147\145\156\x65\162\141\164\145\144\x20\151\x6e\40\45\163", PR__MDL__OPTIMIZATION), "\x3c\143\157\x64\145\x3e{$qogsmwakwacwqogk}\74\57\143\157\x64\145\76", "\74\143\157\x64\145\76{$mkomwsiykqigmqca}\74\x2f\143\157\144\145\x3e"), "\157\x70\164\151\155\x69\x7a\141\x74\x69\157\x6e\x2d\143\157\x6e\146\x69\147", Constants::smkwuwawwaqyimcq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x63\157\x6e\x66\x69\x67", __("\x43\x6f\x6e\x66\x69\147\x75\x72\x61\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); } } } } } } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\x76\137\155\157\x64\x65" => $this->weysguygiseoukqw(Constants::qeuquamuuwueeiyi, false), "\144\x65\142\165\147\x5f\155\x6f\144\145" => false, "\143\157\157\x6b\x69\145\x5f\150\141\x73\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\117\x4f\x4b\111\105\x48\x41\123\110"), "\x72\145\x6a\145\x63\164\x5f\x63\157\x6f\153\x69\x65\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\147\x67\x65\x64\x5f\x69\x6e\x5f\143\157\x6f\x6b\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\x47\107\x45\104\137\x49\x4e\x5f\113\105\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\x6e\146\x69\x67\165\162\x61\164\151\157\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\x72\x65\147\x5f\161\165\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\x2e\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\x2d\160\x6f\x73\164\160\x61\163\x73\137"; $osqkgokmuiasuukg[] = "\x77\x70\164\x6f\x75\x63\150\x5f\163\167\x69\164\143\x68\137\x74\x6f\147\x67\154\x65"; $osqkgokmuiasuukg[] = "\x63\x6f\x6d\155\145\156\164\x5f\x61\165\164\x68\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\143\x6f\155\155\145\156\164\137\141\x75\x74\x68\x6f\x72\137\145\155\141\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\152\x65\143\x74\137\143\x6f\x6f\153\x69\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
