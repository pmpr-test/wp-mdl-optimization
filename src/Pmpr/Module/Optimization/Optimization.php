<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0c5f88d120             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\160\x72\137\157\160\164\x69\x6d\151\x7a\x61\164\151\x6f\x6e\137"; const eaegumogucmwsmsk = "\120\x52\137\117\x50\x54\111\115\111\x5a\x41\x54\111\117\116\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\x70\164\x69\x6d\x69\172\x61\164\151\x6f\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\x70\x75\162\147\x65\x5f\x63\141\143\x68\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x69\156\x69\x74", [$this, "\161\x61\171\x69\145\165\163\x63\x73\x73\x6b\x69\x71\x61\143\163"]); $this->waqewsckuayqguos("\142\145\146\x6f\162\145\x5f\145\156\x71\165\x65\165\145\137\x62\141\143\x6b\x65\156\144\137\x61\x73\x73\x65\164\163", [$this, "\145\156\x71\x75\x65\165\x65"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); cecuyayqoioasumi: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x62\141\x63\153\x65\x6e\144", $eygsasmqycagyayw->get("\142\141\x63\153\x65\156\144\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\141\x63\x6b\145\x6e\144", $eygsasmqycagyayw->get("\x62\x61\143\153\x65\x6e\x64\56\x63\x73\x73"))); } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto mkwskuycuyguqqok; } if (!(($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto kuicqywysciceggs; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto cuykwgmswkskqkyi; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto asmecuqiyyswueqe; } $this->syiuacooagmooima("\x63\x6f\x6e\x66\x69\x67", __("\x43\157\156\x66\151\147\165\162\x61\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto csscmcacoikwsecs; asmecuqiyyswueqe: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto myoicgcuugciueis; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); myoicgcuugciueis: qwigomakwmyiwkgo: } qgoiooayqmqqsiok: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\146\x69\x67\x2e\160\x68\x70", ["\143\157\156\x66\x69\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\x72\x61\171\134\163\53\x5c\x28\100\151", "\x61\162\162\x61\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\x72\x61\x79\x5c\50\x5c\x73\x2b\x5c\x29\100\x69", "\141\162\x72\141\171\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\117\160\x74\151\x6d\x69\172\141\164\x69\157\156\40\143\157\156\x66\151\x67\x20\146\151\x6c\x65\40\45\163\40\x67\145\156\x65\162\141\x74\145\144\x20\x69\x6e\x20\45\163", PR__MDL__OPTIMIZATION), "\x3c\143\157\144\145\x3e{$qogsmwakwacwqogk}\74\x2f\143\157\144\145\76", "\74\143\157\x64\145\x3e{$mkomwsiykqigmqca}\x3c\57\143\x6f\144\x65\76"), "\157\x70\x74\x69\155\151\x7a\141\164\x69\x6f\156\55\x63\x6f\156\x66\151\x67", Constants::smkwuwawwaqyimcq); csscmcacoikwsecs: cuykwgmswkskqkyi: qogqewiwmwiwskgm: } qiaqsassksqiuyae: kuicqywysciceggs: mkwskuycuyguqqok: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\145\166\137\155\157\x64\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\x62\165\x67\137\x6d\x6f\x64\x65" => false, "\143\157\x6f\153\151\145\x5f\150\141\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\117\x4f\113\111\105\110\101\123\110"), "\x72\x65\x6a\145\x63\164\137\143\x6f\157\x6b\x69\145\x73" => $this->mukwwwucwusmmqau(), "\x6c\x6f\147\147\x65\x64\137\151\x6e\137\x63\x6f\157\x6b\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\x47\107\x45\104\137\x49\x4e\x5f\113\105\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\x6e\146\x69\x67\x75\x72\x61\x74\151\x6f\156\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\145\147\137\161\165\x6f\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\55\x70\x6f\x73\164\x70\141\x73\x73\x5f"; $osqkgokmuiasuukg[] = "\x77\160\164\157\x75\143\150\x5f\x73\167\x69\x74\143\x68\x5f\164\157\147\147\154\145"; $osqkgokmuiasuukg[] = "\x63\157\x6d\x6d\x65\x6e\x74\x5f\x61\165\164\x68\x6f\162\137"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\x6e\x74\x5f\141\x75\x74\x68\x6f\162\137\145\155\x61\x69\154\x5f"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\x6a\x65\143\164\x5f\x63\157\x6f\x6b\x69\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
