<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec78c96fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\160\162\137\x6f\160\x74\x69\155\x69\x7a\141\x74\x69\157\x6e\137"; const eaegumogucmwsmsk = "\120\x52\x5f\117\x50\124\x49\115\x49\x5a\x41\124\111\x4f\x4e\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\x69\155\x69\x7a\x61\164\x69\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\165\162\147\145\x5f\x63\141\x63\150\x65"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\137\151\156\x69\x74", [$this, "\x71\141\x79\x69\x65\165\x73\143\x73\163\x6b\x69\161\x61\143\163"]); $this->waqewsckuayqguos("\x62\145\146\x6f\x72\145\x5f\x65\x6e\161\165\x65\165\x65\x5f\x62\141\143\x6b\145\156\144\137\x61\x73\x73\145\x74\x73", [$this, "\x65\x6e\161\x75\145\x75\145"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x61\x6c\x6c\x6f\167\137\x74\157\x5f\x61\144\x64\137\x62\141\x63\x6b\154\151\x6e\x6b", [$this, "\163\x65\x69\141\151\x6f\153\165\x73\x67\x79\x73\x6d\x73\x79\x71"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gqeoaceyoiicoaec; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); gqeoaceyoiicoaec: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\141\x63\153\145\x6e\144", $eygsasmqycagyayw->get("\142\141\x63\x6b\145\x6e\x64\x2e\152\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\x61\143\153\x65\x6e\144", $eygsasmqycagyayw->get("\x62\x61\143\153\x65\x6e\144\x2e\143\163\163"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto kkckyqmcyussauma; } $cuakwceieagskoaa = false; kkckyqmcyussauma: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto kocaieyauyiqmyiy; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto icoiqskygugkgmkm; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto maguoggkqamaiuag; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto qosswumywsaeyqus; } $this->syiuacooagmooima("\143\x6f\x6e\x66\x69\x67", __("\x43\157\156\146\x69\147\165\162\141\x74\x69\157\156", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto swicauyqusmgeccu; qosswumywsaeyqus: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mieoguuqiwqioeqa; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mieoguuqiwqioeqa: gscyiqmmegqmqcoe: } uckusgwkoycmkeam: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\156\146\x69\147\x2e\x70\x68\160", ["\143\157\156\x66\x69\147\x73" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\162\141\171\134\x73\53\134\x28\100\x69", "\x61\162\x72\141\171\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\x61\x79\x5c\50\x5c\163\x2b\134\x29\x40\151", "\141\x72\x72\141\x79\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\x70\x74\151\x6d\x69\x7a\141\x74\x69\157\156\x20\x63\157\x6e\146\x69\x67\40\146\x69\x6c\145\x20\x25\x73\40\147\145\x6e\145\162\141\x74\x65\x64\40\151\x6e\40\x25\163", PR__MDL__OPTIMIZATION), "\74\143\x6f\x64\145\76{$qogsmwakwacwqogk}\74\57\x63\x6f\x64\145\76", "\74\143\157\144\x65\x3e{$mkomwsiykqigmqca}\74\x2f\143\157\144\145\76"), "\x6f\160\x74\151\155\151\172\x61\x74\x69\157\156\55\x63\157\x6e\x66\151\x67", Constants::smkwuwawwaqyimcq); swicauyqusmgeccu: maguoggkqamaiuag: cciakcwuweqmcose: } ikukqooiowqywyqo: icoiqskygugkgmkm: kocaieyauyiqmyiy: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\x65\x76\x5f\x6d\157\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\x64\145\142\165\x67\137\x6d\x6f\144\x65" => false, "\143\157\157\x6b\x69\x65\137\x68\x61\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x43\x4f\x4f\113\111\x45\x48\101\x53\x48"), "\x72\145\x6a\x65\143\164\x5f\x63\157\157\153\x69\145\163" => $this->mukwwwucwusmmqau(), "\x6c\157\147\147\x65\x64\137\x69\x6e\x5f\x63\x6f\x6f\x6b\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\x4f\x47\107\x45\x44\137\111\x4e\137\x4b\105\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\156\146\151\147\x75\162\141\x74\x69\157\156\163", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\147\137\x71\x75\x6f\164\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\160\157\x73\x74\160\x61\x73\163\x5f"; $osqkgokmuiasuukg[] = "\x77\160\x74\x6f\x75\143\150\137\x73\x77\x69\x74\143\x68\137\x74\x6f\147\147\x6c\x65"; $osqkgokmuiasuukg[] = "\x63\157\155\155\x65\156\x74\137\x61\x75\x74\150\x6f\x72\x5f"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\145\x6e\x74\x5f\x61\165\164\150\x6f\x72\137\x65\x6d\141\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\152\x65\143\x74\x5f\143\x6f\157\x6b\151\145\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
