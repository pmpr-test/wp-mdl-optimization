<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832450bd77             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Model\Run; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\PageManager\Model\Common as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; abstract class Common extends BaseClass { public function register() { $this->saemoowcasogykak(IconInterface::swuawocyuuooooow); $this->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::esewkmgyoesiksyw)->acokiqqgsmoqaeyu()->eyygsasuqmommkua(Constants::qakegsaikiimcmkc)->kesomeowemmyygey(1, Constants::qakegsaikiimcmkc, __('Pattern', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::imywcsggckkcywgk, __('Page', PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__('Target Type', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::eqgewieksoieoqiq)->gswweykyogmsyawy(__('Target', PR__MDL__OPTIMIZATION))->iwwmociiuayuwssq([$this, 'moukeyoacwuokuwo']))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::eksgkcqkmumuceii)->eyygsasuqmommkua(Constants::imeeweugyyqmiykw)->kesomeowemmyygey(1, Constants::imeeweugyyqmiykw, __('System', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::meksegaoamowuwoq, __('User', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(3, Constants::kscoywmuawqeykio, __('Cron Job', PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__('Initiator', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __('Pending', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::eyemmiwoaayukksq, __('In Progress', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(3, Constants::uasuowkaguiwoouw, __('Failed', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(4, Constants::amcogigwsaqssuai, __('Completed', PR__MDL__OPTIMIZATION))->gswweykyogmsyawy(__('Status', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::UPDATED_AT)->gswweykyogmsyawy(__('Updated At', PR__MDL__OPTIMIZATION))); parent::uwmqacgewuauagai(); } public function moukeyoacwuokuwo($eqgoocgaqwqcimie, $mksyucucyswaukig) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); switch ($this->ogegcqqcukiaqscy(Constants::esewkmgyoesiksyw, $mksyucucyswaukig)) { case Constants::qakegsaikiimcmkc: $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->akkkoiiymmamsauc($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $uuyucgkyusckoaeq->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::emkkgysokckswycs, Constants::emkkgysokckswycs => $jwkieqegmyuwayce, Constants::ckmqoekmugkggeym => $eouekqmooogkoqoo]); } else { $eqgoocgaqwqcimie = __('Not Found', PR__MDL__OPTIMIZATION); } break; case Constants::imywcsggckkcywgk: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if ($suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $uuyucgkyusckoaeq->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::emkkgysokckswycs, Constants::emkkgysokckswycs => $iuekmkswcsacoawq, Constants::ckmqoekmugkggeym => $suaemuyiacqyugsm]); } else { $eqgoocgaqwqcimie = __('Not Found', PR__MDL__OPTIMIZATION); } break; } return $eqgoocgaqwqcimie; } }
