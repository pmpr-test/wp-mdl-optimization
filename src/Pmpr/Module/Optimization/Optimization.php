<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Dashboard\Dashboard; use Pmpr\Module\Optimization\Optimizer\Optimizer; use Pmpr\Module\Optimization\PageManager\PageManager; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Subscription\Subscription; use Pmpr\Module\Optimization\ThirdParty\ThirdParty; use Pmpr\Module\Optimization\Traits\HelperTrait; class Optimization extends ModuleInitiator { use HelperTrait; const kgswyesggeyekgmg = 'pr_optimization_'; const eaegumogucmwsmsk = 'PR_OPTIMIZATION_'; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Optimization', PR__MDL__OPTIMIZATION); }, Constants::sguyaymiiiiewame => Setting::class])->eokmosoqmeiakwki(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::yyicwqsqaecyqwco); })->gwcqooogwwkcamag(function () { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs)->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . 'purge_html_cache'); }); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'qayieuscsskiqacs']); $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue']); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Dashboard::symcgieuakksimmu(); Subscription::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { Capability::symcgieuakksimmu(); } } Optimizer::symcgieuakksimmu(); ThirdParty::symcgieuakksimmu(); PageManager::symcgieuakksimmu(); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'backend', 'backend.js')->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, 'backend', 'backend.css')); } public function qayieuscsskiqacs() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { if (($ucasskoyoewwmmii = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->igyiymiwguiiqgqm()) && ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk())) { foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk => $mkomwsiykqigmqca) { if (!$iiaumsgauuyeqksw->exists(trailingslashit($mkomwsiykqigmqca) . $qogsmwakwacwqogk)) { $oyuikeusicgqgwak = $this->weqsyyuyccsemacu($qogsmwakwacwqogk); if ($iiaumsgauuyeqksw->mkdir($mkomwsiykqigmqca) && $iiaumsgauuyeqksw->coeoweawgagkycwe($mkomwsiykqigmqca)) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) { if (is_string($uiewakwqscemywuo)) { $oyuikeusicgqgwak[$uusmaiomayssaecw] = $yyauwyaeewsickwk->amkcmaguoecyiscg($uiewakwqscemywuo, false); } } $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw('config.php', ['configs' => $oyuikeusicgqgwak]); $ewgwqamkygiqaawc = preg_replace('@array\\s+\\(@i', 'array(', $ewgwqamkygiqaawc); $ewgwqamkygiqaawc = preg_replace('@array\\(\\s+\\)@i', 'array()', $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $qogsmwakwacwqogk, $ewgwqamkygiqaawc); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('Optimization config file %s generated in %s', PR__MDL__OPTIMIZATION), "<code>{$qogsmwakwacwqogk}</code>", "<code>{$mkomwsiykqigmqca}</code>"), 'optimization-config', Constants::smkwuwawwaqyimcq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, 'config', __('Configuration', PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca); } } } } } } public function weqsyyuyccsemacu($qogsmwakwacwqogk) : array { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $oyuikeusicgqgwak = ['dev_mode' => $this->weysguygiseoukqw(Constants::qeuquamuuwueeiyi, false), 'debug_mode' => false, 'cookie_hash' => $uuwwyaeymswgsgsi->cmaecekuqkwmemms('COOKIEHASH'), 'reject_cookies' => $this->mukwwwucwusmmqau(), 'logged_in_cookie' => $uuwwyaeymswgsgsi->cmaecekuqkwmemms('LOGGED_IN_KEY')]; return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . 'configurations', $oyuikeusicgqgwak, $qogsmwakwacwqogk); } public function mukwwwucwusmmqau() : string { $guqkkoqomcqgkkgm = explode(COOKIEHASH, LOGGED_IN_COOKIE); $guqkkoqomcqgkkgm = array_map('preg_quote', $guqkkoqomcqgkkgm); $guqkkoqomcqgkkgm = implode('.+', $guqkkoqomcqgkkgm); $osqkgokmuiasuukg[] = $guqkkoqomcqgkkgm; $osqkgokmuiasuukg[] = 'wp-postpass_'; $osqkgokmuiasuukg[] = 'wptouch_switch_toggle'; $osqkgokmuiasuukg[] = 'comment_author_'; $osqkgokmuiasuukg[] = 'comment_author_email_'; $osqkgokmuiasuukg = (array) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . 'reject_cookies', $osqkgokmuiasuukg); $osqkgokmuiasuukg = array_filter($osqkgokmuiasuukg); $osqkgokmuiasuukg = array_flip(array_flip($osqkgokmuiasuukg)); return implode('|', $osqkgokmuiasuukg); } }
