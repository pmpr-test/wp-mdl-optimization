<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7aea357a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\CommonTrait; class Optimization extends ComponentInitiator { use CommonTrait; const kgswyesggeyekgmg = "\160\x72\137\157\160\164\x69\x6d\151\172\141\x74\151\157\156\137"; const eaegumogucmwsmsk = "\x50\122\x5f\x4f\120\124\x49\115\111\x5a\101\x54\x49\x4f\x4e\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\x69\155\x69\x7a\x61\x74\151\157\156", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\165\162\147\x65\x5f\143\x61\x63\150\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\x69\x6e\x69\x74", [$this, "\161\x61\171\151\x65\x75\x73\x63\x73\x73\153\x69\x71\141\143\x73"]); $this->waqewsckuayqguos("\142\x65\x66\x6f\x72\x65\137\x65\x6e\x71\165\145\x75\x65\137\x62\141\143\x6b\145\x6e\144\x5f\141\163\x73\x65\164\163", [$this, "\145\x6e\161\x75\145\x75\x65"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\141\x6c\x6c\157\x77\137\x74\x6f\x5f\x61\144\x64\137\142\141\143\153\154\151\156\x6b", [$this, "\x73\x65\x69\141\x69\x6f\x6b\165\x73\x67\171\163\x6d\163\171\161"]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gqeoaceyoiicoaec; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); gqeoaceyoiicoaec: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\x61\143\153\x65\156\x64", $eygsasmqycagyayw->get("\142\141\x63\153\x65\x6e\x64\56\152\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\x61\x63\x6b\x65\x6e\x64", $eygsasmqycagyayw->get("\142\141\x63\153\x65\x6e\144\56\143\163\x73"))); } public function seiaiokusgysmsyq($cuakwceieagskoaa) { if (!($cuakwceieagskoaa && $this->eiykqgmgyuowgeog() > 0)) { goto kkckyqmcyussauma; } $cuakwceieagskoaa = false; kkckyqmcyussauma: return $cuakwceieagskoaa; } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto kocaieyauyiqmyiy; } if (!(($ucasskoyoewwmmii = $this->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto icoiqskygugkgmkm; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto maguoggkqamaiuag; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto qosswumywsaeyqus; } $this->syiuacooagmooima("\x63\x6f\x6e\x66\x69\x67", __("\103\157\156\x66\151\x67\x75\162\141\x74\x69\157\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto swicauyqusmgeccu; qosswumywsaeyqus: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto mieoguuqiwqioeqa; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); mieoguuqiwqioeqa: gscyiqmmegqmqcoe: } uckusgwkoycmkeam: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x63\x6f\x6e\146\151\147\x2e\160\x68\160", ["\x63\x6f\x6e\x66\151\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\141\162\x72\x61\171\x5c\163\x2b\x5c\x28\x40\151", "\141\x72\162\141\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\100\x61\162\162\x61\x79\x5c\x28\x5c\x73\x2b\134\51\x40\151", "\x61\x72\x72\x61\x79\x28\51", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\164\x69\155\151\172\x61\164\x69\x6f\156\x20\x63\x6f\x6e\x66\x69\x67\40\x66\x69\154\145\40\x25\163\x20\x67\x65\156\145\x72\141\x74\145\144\x20\x69\156\40\x25\163", PR__MDL__OPTIMIZATION), "\74\x63\x6f\144\145\76{$qogsmwakwacwqogk}\x3c\x2f\143\157\x64\x65\x3e", "\74\143\x6f\x64\x65\x3e{$mkomwsiykqigmqca}\x3c\57\143\x6f\144\145\x3e"), "\157\160\164\x69\155\151\172\x61\164\x69\x6f\x6e\55\x63\x6f\156\146\151\x67", Constants::smkwuwawwaqyimcq); swicauyqusmgeccu: maguoggkqamaiuag: cciakcwuweqmcose: } ikukqooiowqywyqo: icoiqskygugkgmkm: kocaieyauyiqmyiy: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\144\x65\166\137\155\x6f\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\x64\x65\x62\165\147\137\x6d\x6f\x64\145" => false, "\x63\x6f\x6f\x6b\151\145\137\x68\141\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\x4f\113\111\105\x48\101\x53\x48"), "\x72\145\152\145\x63\x74\x5f\x63\157\157\153\151\145\x73" => $this->mukwwwucwusmmqau(), "\154\x6f\147\147\145\x64\x5f\151\156\137\143\157\157\x6b\x69\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\x4c\117\x47\107\105\x44\x5f\111\x4e\x5f\113\x45\x59")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\157\x6e\x66\x69\x67\x75\162\141\x74\151\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\160\162\145\147\x5f\x71\x75\x6f\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\x2b", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\x77\x70\x2d\160\157\163\x74\x70\x61\163\x73\137"; $osqkgokmuiasuukg[] = "\167\x70\164\157\x75\143\x68\x5f\163\x77\151\x74\x63\x68\x5f\164\157\x67\x67\154\x65"; $osqkgokmuiasuukg[] = "\x63\157\x6d\155\x65\156\x74\137\141\x75\x74\x68\x6f\162\137"; $osqkgokmuiasuukg[] = "\x63\x6f\155\155\145\x6e\164\x5f\141\165\164\150\157\x72\137\x65\x6d\141\151\154\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\162\x65\152\145\x63\164\x5f\143\157\157\153\x69\x65\x73", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\x7c", $osqkgokmuiasuukg); } }
