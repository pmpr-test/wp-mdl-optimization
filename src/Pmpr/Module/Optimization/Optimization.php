<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76d1d04df             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\x70\162\137\157\x70\x74\151\x6d\151\172\141\164\x69\x6f\156\137"; const eaegumogucmwsmsk = "\x50\122\x5f\x4f\120\124\111\x4d\x49\x5a\x41\x54\x49\117\x4e\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\x69\155\151\172\x61\164\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\x72\147\x65\137\x68\x74\x6d\154\x5f\x63\141\143\150\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\x6e\x5f\151\x6e\151\x74", [$this, "\x71\141\x79\151\145\165\163\143\x73\163\x6b\151\x71\x61\143\163"]); $this->waqewsckuayqguos("\x62\145\146\157\x72\145\x5f\145\x6e\161\165\x65\x75\145\x5f\142\141\x63\x6b\145\156\144\x5f\x61\x73\163\145\164\x73", [$this, "\x65\156\x71\165\x65\165\x65"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); cecuyayqoioasumi: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x62\x61\143\153\145\x6e\x64", $eygsasmqycagyayw->get("\142\141\x63\x6b\145\x6e\x64\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\141\x63\153\x65\156\x64", $eygsasmqycagyayw->get("\142\141\x63\153\145\x6e\x64\x2e\143\x73\163"))); } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto mkwskuycuyguqqok; } $aiaeegymqoykckgo = Pattern::symcgieuakksimmu()->syugmyosqomgwywi(Pattern::symcgieuakksimmu()->kqewyqqqiyiouaou([Constants::squoamkioomemiyi => Constants::uouymeyqasaeckso, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg, Constants::cuoyscoiacswuauq => [Constants::uouymeyqasaeckso => Constants::mswoacegomcucaik, Pattern::iycqiaygcgwiwcck => Constants::gmmygyiecgmggaam]])); if (!(($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto kuicqywysciceggs; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto cuykwgmswkskqkyi; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto asmecuqiyyswueqe; } $this->syiuacooagmooima("\x63\157\156\146\151\x67", __("\103\x6f\156\146\151\x67\165\x72\141\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto csscmcacoikwsecs; asmecuqiyyswueqe: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto myoicgcuugciueis; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); myoicgcuugciueis: qwigomakwmyiwkgo: } qgoiooayqmqqsiok: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\157\156\146\151\147\x2e\160\x68\160", ["\x63\157\x6e\146\151\x67\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\162\x72\x61\x79\134\x73\x2b\134\x28\100\151", "\141\x72\x72\141\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\141\x72\x72\141\171\x5c\50\134\163\x2b\134\x29\100\x69", "\141\x72\x72\x61\x79\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\164\151\155\x69\x7a\x61\x74\x69\157\x6e\x20\x63\157\x6e\x66\151\x67\40\x66\x69\154\x65\x20\45\x73\x20\147\x65\x6e\x65\x72\x61\164\x65\x64\x20\x69\156\40\x25\163", PR__MDL__OPTIMIZATION), "\74\143\x6f\x64\145\x3e{$qogsmwakwacwqogk}\74\x2f\x63\x6f\144\145\x3e", "\74\143\x6f\144\145\76{$mkomwsiykqigmqca}\x3c\x2f\x63\x6f\144\145\x3e"), "\157\160\x74\151\x6d\x69\x7a\x61\164\151\x6f\156\x2d\143\157\x6e\x66\x69\147", Constants::smkwuwawwaqyimcq); csscmcacoikwsecs: cuykwgmswkskqkyi: qogqewiwmwiwskgm: } qiaqsassksqiuyae: kuicqywysciceggs: mkwskuycuyguqqok: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\145\x76\137\x6d\157\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\144\x65\x62\x75\x67\137\x6d\157\144\x65" => false, "\143\157\157\153\x69\x65\x5f\x68\x61\x73\150" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\x4f\113\111\105\110\x41\123\x48"), "\162\145\152\145\x63\x74\137\x63\x6f\x6f\153\x69\x65\163" => $this->mukwwwucwusmmqau(), "\x6c\x6f\147\147\145\144\137\x69\156\137\x63\x6f\x6f\153\151\145" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\107\107\x45\104\137\x49\116\x5f\113\x45\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\156\x66\151\x67\x75\162\x61\x74\151\x6f\x6e\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\x72\x65\x67\x5f\161\x75\157\164\x65", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\160\x2d\x70\x6f\x73\164\x70\141\x73\163\137"; $osqkgokmuiasuukg[] = "\167\160\x74\x6f\165\x63\150\137\x73\167\151\x74\x63\x68\137\164\x6f\x67\x67\154\145"; $osqkgokmuiasuukg[] = "\143\157\155\155\145\x6e\164\137\141\165\164\150\157\162\x5f"; $osqkgokmuiasuukg[] = "\143\157\x6d\x6d\145\156\x74\x5f\141\x75\164\x68\157\x72\x5f\x65\x6d\141\x69\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\x65\152\145\143\x74\x5f\143\x6f\157\x6b\x69\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
