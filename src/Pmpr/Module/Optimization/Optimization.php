<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb242fc74db             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ComponentInitiator { use HelperTrait; const kgswyesggeyekgmg = "\x70\x72\137\157\x70\x74\151\x6d\151\x7a\x61\x74\x69\x6f\156\x5f"; const eaegumogucmwsmsk = "\x50\x52\137\x4f\x50\x54\111\x4d\x49\x5a\101\x54\x49\117\116\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\164\151\x6d\x69\x7a\141\164\151\157\x6e", PR__MDL__OPTIMIZATION); }])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . "\160\x75\162\147\145\137\x63\141\x63\x68\145"); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\x5f\151\x6e\151\164", [$this, "\161\141\x79\151\145\x75\163\143\163\163\153\x69\x71\141\x63\163"]); $this->waqewsckuayqguos("\x62\145\x66\157\162\145\137\x65\x6e\x71\x75\x65\165\x65\x5f\142\141\143\153\145\156\x64\x5f\141\163\x73\145\164\x73", [$this, "\145\x6e\161\x75\145\x75\145"]); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto gscyiqmmegqmqcoe; } Dashboard::symcgieuakksimmu(); Capability::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); gscyiqmmegqmqcoe: Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\142\141\143\x6b\x65\x6e\144", $eygsasmqycagyayw->get("\142\x61\x63\x6b\145\x6e\x64\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x62\141\143\x6b\145\x6e\144", $eygsasmqycagyayw->get("\142\x61\x63\x6b\145\x6e\x64\x2e\143\163\163"))); } public function qayieuscsskiqacs() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto igmawmwssyskqqag; } if (!(($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()))) { goto cuayqmasemsqsume; } foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if ($iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { goto eekkcooqswqouoei; } $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { goto kocaieyauyiqmyiy; } $this->syiuacooagmooima("\x63\x6f\156\x66\151\147", __("\103\157\156\x66\x69\x67\x75\162\x61\x74\151\157\x6e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); goto gcqssckowmywoesw; kocaieyauyiqmyiy: $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (!is_string($uiewakwqscemywuo)) { goto icoiqskygugkgmkm; } $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); icoiqskygugkgmkm: maguoggkqamaiuag: } swicauyqusmgeccu: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\143\x6f\x6e\146\151\147\x2e\160\x68\160", ["\x63\157\x6e\x66\x69\147\163" => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace("\x40\x61\x72\162\141\171\x5c\x73\x2b\134\50\x40\151", "\141\162\162\141\x79\50", $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace("\x40\141\x72\162\141\x79\134\50\x5c\163\53\134\51\x40\x69", "\x61\x72\162\x61\171\50\x29", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\x74\x69\x6d\151\x7a\x61\164\x69\157\x6e\x20\143\x6f\156\x66\151\x67\x20\146\151\154\145\40\45\x73\x20\x67\145\156\145\x72\141\164\145\144\x20\151\156\x20\45\163", PR__MDL__OPTIMIZATION), "\74\143\x6f\x64\x65\x3e{$qogsmwakwacwqogk}\74\x2f\x63\x6f\x64\x65\76", "\74\143\157\144\145\x3e{$mkomwsiykqigmqca}\x3c\57\x63\x6f\144\x65\x3e"), "\157\160\164\151\155\151\x7a\141\x74\x69\x6f\156\55\x63\157\156\146\x69\147", Constants::smkwuwawwaqyimcq); gcqssckowmywoesw: eekkcooqswqouoei: qosswumywsaeyqus: } mieoguuqiwqioeqa: cuayqmasemsqsume: igmawmwssyskqqag: } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ["\x64\x65\x76\137\x6d\x6f\144\x65" => Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false), "\x64\145\x62\165\x67\x5f\x6d\157\x64\145" => false, "\143\x6f\x6f\153\x69\x65\x5f\x68\141\163\x68" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\103\x4f\117\x4b\111\105\110\101\x53\x48"), "\162\145\x6a\x65\x63\x74\x5f\x63\157\x6f\x6b\x69\x65\163" => $this->mukwwwucwusmmqau(), "\154\x6f\147\x67\x65\144\137\x69\x6e\137\143\x6f\157\x6b\151\x65" => $uuwwyaeymswgsgsi->cmaecekuqkwmemms("\114\117\x47\x47\x45\104\x5f\111\x4e\x5f\113\x45\131")]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\x6e\x66\x69\x67\165\162\x61\x74\151\157\x6e\x73", $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map("\x70\162\x65\147\x5f\x71\x75\157\x74\145", $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode("\56\53", $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = "\167\160\55\160\x6f\x73\x74\160\141\163\163\x5f"; $osqkgokmuiasuukg[] = "\x77\160\x74\x6f\165\143\x68\x5f\x73\167\x69\164\143\x68\137\x74\x6f\147\x67\154\x65"; $osqkgokmuiasuukg[] = "\143\x6f\x6d\x6d\x65\x6e\x74\x5f\x61\x75\x74\150\x6f\x72\137"; $osqkgokmuiasuukg[] = "\x63\157\155\x6d\145\156\x74\x5f\141\x75\164\150\x6f\162\x5f\145\155\x61\x69\x6c\137"; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x72\145\x6a\x65\143\x74\137\143\157\157\153\151\145\163", $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode("\174", $osqkgokmuiasuukg); } }
