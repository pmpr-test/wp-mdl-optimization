<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16935c302e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Model\Run; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\SpeedTest\SpeedTest; class Remote extends Common { public function register() { $this->guiaswksukmgageq(__('VirtualBrowser Run', PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__('VirtualBrowser Runs', PR__MDL__OPTIMIZATION)); parent::register(); } public function uwmqacgewuauagai() { parent::uwmqacgewuauagai(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::uqgcmmosieyimiku)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Action', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, SpeedTest::quouokcgsyacigiu, __('Speed Test', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, VirtualBrowser::asgasewsyuywckgq, __('Virtual Browser', PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(VirtualBrowser::asgasewsyuywckgq))->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(Constants::uiwqcumqkgikqyue)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Data', PR__MDL__OPTIMIZATION))); } public function qcwwiyuycagsaikk($scwwcyaqyywsweoq) : int { $icwicymcioeyeyek = $this->waecsyqmwascmqoa($scwwcyaqyywsweoq, Constants::uiwqcumqkgikqyue, []); return (int) ($icwicymcioeyeyek['estimate'] ?? 30); } public function qiwceauayusousqs($scwwcyaqyywsweoq) : int { $icwicymcioeyeyek = $this->waecsyqmwascmqoa($scwwcyaqyywsweoq, Constants::uiwqcumqkgikqyue, []); return (int) ($icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso] ?? 0); } public function csyeqcysyissgowm($scwwcyaqyywsweoq) : string { $icwicymcioeyeyek = $this->waecsyqmwascmqoa($scwwcyaqyywsweoq, Constants::uiwqcumqkgikqyue, []); return (string) ($icwicymcioeyeyek['filepath'] ?? ''); } public function oqggmyigigeeqwye($scwwcyaqyywsweoq) : string { $icwicymcioeyeyek = $this->waecsyqmwascmqoa($scwwcyaqyywsweoq, Constants::uiwqcumqkgikqyue, []); return (string) ($icwicymcioeyeyek['job_id'] ?? ''); } }
