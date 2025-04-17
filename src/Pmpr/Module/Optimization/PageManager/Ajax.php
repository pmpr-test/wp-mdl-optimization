<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbb9b4545             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Container { use PageManagerEngineTrait; const wiysygukkaksueso = 'pr_opt_page_manager_'; const swkaqiikoaickuui = 'optimize'; const eueyiwccigugisqe = 'check_link'; const wwgqqgayyagycysu = 'purge_cache'; const aeksqkkekigwssku = self::wiysygukkaksueso . 'setup_pattern_action'; const quuasuseuccsemsw = self::wiysygukkaksueso . 'active_pattern_action'; const qskskgmuqiggaqeg = self::wiysygukkaksueso . 'check_pattern_run_action'; const kaqawyqaekuookgi = self::wiysygukkaksueso . 'pages_cache_status'; const kusgmosaoigiukgi = self::wiysygukkaksueso . 'reoptimize_pattern_action'; const wegmeawoaymsqkyi = self::wiysygukkaksueso . 'deactivate_pattern_action'; const ciccegoegwcgyaqo = self::wiysygukkaksueso . 'delete_orphan_pages_action'; const maqcykaweqimuomu = self::wiysygukkaksueso . 'check_candidate_url_action'; const ggmmioeoauiyccec = self::wiysygukkaksueso . 'pages_cache_progress'; const aikyaygyasegygma = self::wiysygukkaksueso . 'pattern_manual_optimize_action'; const esiucesqiemeickk = self::wiysygukkaksueso . 'purge_pattern_pages_cache_action'; const sggmuowkoiiuacig = self::wiysygukkaksueso . 'speed_test_not_dispachable_fixed'; const awqksmkmsquoymem = self::wiysygukkaksueso . 'change_page_status'; const imigmiemwmuayaca = self::wiysygukkaksueso . 'change_page_important_status'; const uyuegiyaymqqkcwa = self::wiysygukkaksueso . 'change_page_speed_test_candidate_status'; const ccyqqagwskwauoem = ['change_page_speed_test_candidate_status' => self::uyuegiyaymqqkcwa, 'change_page_important_status' => self::imigmiemwmuayaca, 'purge_pattern_pages_cache' => self::esiucesqiemeickk, 'pattern_manual_optimize' => self::aikyaygyasegygma, 'not_dispachable_fixed' => self::sggmuowkoiiuacig, 'pages_cache_progress' => self::ggmmioeoauiyccec, 'check_candidate_link' => self::maqcykaweqimuomu, 'delete_orphan_pages' => self::ciccegoegwcgyaqo, 'change_page_status' => self::awqksmkmsquoymem, 'pages_cache_status' => self::kaqawyqaekuookgi, 'deactivate_pattern' => self::wegmeawoaymsqkyi, 'reoptimize_pattern' => self::kusgmosaoigiukgi, 'check_pattern_run' => self::qskskgmuqiggaqeg, 'activate_pattern' => self::quuasuseuccsemsw, 'setup_pattern' => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, 'cgcqmioksywkekao'])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, 'ciwwoowwcscscgug'])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, 'uwmqaskcwamigime'])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, 'gqucyqqkgsqysaoi'])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, 'iwuaqosmqmwmeoiw'])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, 'mwuwyiageeaeoyuy'])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, 'ekamgeqogosggeoa'])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, 'aaemcskemgyaoaow'])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, 'qwygcguyguciwoku'])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, 'sesaqkesaeaecoao']); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, 'mgcekqescqmgckmy']); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, 'cysmcyckuueoaiag'])->koaegcswmcqsiykq(self::ciccegoegwcgyaqo, [$this, 'wmqwcwycmoqmckuw'])->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, 'gciceswgisekicgi'])->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, 'okkyseyeygaseioq']); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __('Speed Test functionality for candidate pages resumed.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function wmqwcwycmoqmckuw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $occymigcemkqucuw = true; $sogksuscggsicmac = Page::symcgieuakksimmu()->iekyeyicoyyawomk()->qusqeaiqgggmaskw([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim(Page::ewyamgkooeqiecwg)->wegeyaguowmkqiac()]); if ($sogksuscggsicmac > 0) { $keccaugmemegoimu = __('All orphan elected pages deleted.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __('No orphan elected page founded.', PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __('Normal', PR__MDL__OPTIMIZATION), 1 => __('Important', PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __('Dont Take Speed Test', PR__MDL__OPTIMIZATION), 1 => __('Take Speed Test', PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { $keccaugmemegoimu = $iuekmkswcsacoawq->gssiscqyqsacmeca()->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__('Page status changed to %s successfully.', PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_elected_page_html_cache', $qkcoyiyeuoyyoocy); } } else { $keccaugmemegoimu = __('Your submission status is not a valid status.', PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::kusgmosaoigiukgi); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->akkkoiiymmamsauc($sameaqkagyqomooq)) { switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'virtual_browser_cache_result', $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __('Pattern data cached successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('JSON', PR__MDL__OPTIMIZATION)); } break; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ['progress' => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; break; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); break; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if ($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq) { $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'virtual_browser_check_finished', $sameaqkagyqomooq); if ($sogksuscggsicmac !== $sameaqkagyqomooq) { if (is_wp_error($sogksuscggsicmac)) { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } else { if ($sogksuscggsicmac) { $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; } } } } $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, 'latest_run' => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, 'latest_run', true) : '', 'pages_cache' => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('There is no remote run for pattern.', PR__MDL__OPTIMIZATION)); } break; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); break; case self::kusgmosaoigiukgi: if ($goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { $keccaugmemegoimu = $goqqimcssiyagkwy->uaoiiekuayauwqiq($eouekqmooogkoqoo); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); } } break; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (!is_wp_error($keccaugmemegoimu)) { $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); } break; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); break; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { $keccaugmemegoimu = __('Pages cache purged successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Something wrong on purging pages cache.', PR__MDL__OPTIMIZATION)); } break; case self::eueyiwccigugisqe: $keccaugmemegoimu = $goqqimcssiyagkwy->cmcmuoosomwkakgm($eouekqmooogkoqoo); break; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Pattern Not Found', PR__MDL__OPTIMIZATION)); } $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $emyowuimauuisimy = $goqqimcssiyagkwy->uaoiiekuayauwqiq($eouekqmooogkoqoo); if (is_wp_error($emyowuimauuisimy)) { $ksaameoqigiaoigg = $emyowuimauuisimy; } else { if ($emyowuimauuisimy) { $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); if (empty($awyumwiewiauosqy)) { $sameaqkagyqomooq = $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo); if ($goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy); } else { $ksaameoqigiaoigg = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); } } else { $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) { $ueeagokqmgisgauy .= "<br>{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; } } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('Some page not add. %s', PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not find candidate page url to start pattern optimization process.', PR__MDL__OPTIMIZATION)); } } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Pattern already setuped.', PR__MDL__OPTIMIZATION)); } return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'virtual_browser_add_job', [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, 'curl error')) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not connect to server right now, please try later or contact us.', PR__MDL__OPTIMIZATION), 500); } } else { $sogksuscggsicmac = ['pages_cache_status' => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, 'pages_cache', true), 'pattern_progressbar' => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, 'latest_run', true)]; } return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
