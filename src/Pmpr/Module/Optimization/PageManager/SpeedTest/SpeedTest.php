<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page as PageModel; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class SpeedTest extends Container { use PageManagerEngineTrait; const smsimmcqmsmgyuii = 'speedtest'; const quouokcgsyacigiu = 'speed_test'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu(Process::eqcogaqyemgysumq, [$this, 'aykyegsqiswmimuy'], 10, 2)->qcsmikeggeemccuu(Process::asueeykmyygakoqs, [$this, 'aekuioksmqqccyuu'], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'cache_html_generated', [$this, 'mckwqiommeiyweyw'], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Page::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $this->qckwuesaysuoqcuk() && !$this->guaegcucuwakigoa() && !$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('Your site is unavailable (%s) by Google for page speed testing.', PR__MDL__OPTIMIZATION), 'HTTP Status Code 403') . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('More Information', PR__MDL__OPTIMIZATION), $this->kmuweyayaqoeqiyw()->gamgkoooceoaaeie('speed_test')), 'site-not-dispatchable'); } } public function mckwqiommeiyweyw($esaqeawoigqgagum, $eeamcawaiqocomwy) { if (basename($esaqeawoigqgagum) === 'index.html' && $this->gcqaaiygcykaqwym()) { $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); $eeamcawaiqocomwy = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy, false); $suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eeamcawaiqocomwy, Constants::auqoykcmsiauccao); if ($suaemuyiacqyugsm && $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::aewquksqwqiawiei, 0)) { Process::symcgieuakksimmu()->gkimgkucuskgagqo($iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy), $iuekmkswcsacoawq->mwyqswsaeeewsosm($suaemuyiacqyugsm)); } } } public function aykyegsqiswmimuy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy); if (!is_wp_error($sogksuscggsicmac)) { $this->wkagassgcaqeosio()->qiskoakuecueiauy($qkcoyiyeuoyyoocy, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Another process already started.', PR__MDL__OPTIMIZATION), 401); } } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $syoewmweaqiqswgu = "speed_test_queue_{$qkcoyiyeuoyyoocy}_transient"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $sogksuscggsicmac = $this->paekekswsswiicis($qkcoyiyeuoyyoocy); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { if (!API::symcgieuakksimmu()->goaikaqccaawcswu()) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::quyascocmiiossme, true); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('Your site is unavailable (%s) by Google for page speed testing.', PR__MDL__OPTIMIZATION), 'HTTP Status Code 403')); } else { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $qkcoyiyeuoyyoocy); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'speed_test_retrieve_result_failed', $qkcoyiyeuoyyoocy); } $sogksuscggsicmac = false; } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'speed_test_retrieve_result_failed', $qkcoyiyeuoyyoocy); } } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'speed_test_retrieve_result_failed', $qkcoyiyeuoyyoocy); } return $sogksuscggsicmac; } public function paekekswsswiicis($qkcoyiyeuoyyoocy) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $qkcoyiyeuoyyoocy); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}/speedtest.json"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Speed Test: JSON File Retrieved.'); return $kuukgsmqkagwaciu; } return false; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('Speed Test status failed: %s', PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, 'reason', ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf('Speed Test: status failed => %s', $gkyciwoiiisgywcs->get($sogksuscggsicmac, 'reason', ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Speed Test: status completed'); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if ($sogksuscggsicmac) { $icwicymcioeyeyek = [Model::aaegquasauuywyey => $sogksuscggsicmac[Constants::auugqowqueaocgsu] ?? 0]; $yygmoeguaqyumuui = ['score', 'fcp', 'lcp', 'cls', 'tbt', 'si']; $yqkagouksaimoyqa = [Constants::mcaucuyeeiwsmmuy, Constants::skogicecygyyskkq]; foreach ($yqkagouksaimoyqa as $ykeeyqcewuccwkeo) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $eqgoocgaqwqcimie = $sogksuscggsicmac[$ykeeyqcewuccwkeo][$uusmaiomayssaecw] ?? false; if ($eqgoocgaqwqcimie !== false) { $icwicymcioeyeyek["{$ykeeyqcewuccwkeo}_{$uusmaiomayssaecw}"] = $eqgoocgaqwqcimie; } } } if ($icwicymcioeyeyek) { $icwicymcioeyeyek[Constants::egukegmcemkeegqq] = $qkcoyiyeuoyyoocy; $sogksuscggsicmac = Model::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $ksaameoqigiaoigg = true; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("Speed Test: {$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])}."); } } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'speed_test_result_saved', $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'speed_test_result_save_failed', $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Result fetched but can not save it.', PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Speed Test: Result fetched but can not save it.'); } return $ksaameoqigiaoigg; } public function qckwuesaysuoqcuk() : bool { return $this->weysguygiseoukqw(Setting::uauwkaimuwugwwma, false); } public function guaegcucuwakigoa() : bool { return !$this->weysguygiseoukqw(Setting::quyascocmiiossme, false); } public function gcqaaiygcykaqwym() : bool { return $this->qckwuesaysuoqcuk() && $this->guaegcucuwakigoa(); } }
