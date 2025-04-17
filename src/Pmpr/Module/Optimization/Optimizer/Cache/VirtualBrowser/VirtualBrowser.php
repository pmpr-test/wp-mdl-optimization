<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbb9b4545             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Purge\Purge; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class VirtualBrowser extends Common { use SubscriptionEngineTrait, PageManagerEngineTrait; const eoeewcigeywcquis = 'critical_css'; const asgasewsyuywckgq = 'virtual_browser'; const cmiuooquqeyoccay = Optimization::eaegumogucmwsmsk . 'VIRTUAL_BROWSER_CACHE_PATH'; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->sccckmuaasqgwksq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(Process::skcaqcukeyugwmke, [$this, 'aekuioksmqqccyuu'])->qcsmikeggeemccuu(Process::kwqseouisawgwcec, [$this, 'wcsaieeakgaaqkyk'], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'virtual_browser_cache_result', [$this, 'qqyqqokwkmocgiae'], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('require_directories', [$this, 'iwuqgygmkcsiakgk'])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'virtual_browser_check_finished', [$this, 'aekuioksmqqccyuu'])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'virtual_browser_add_job', [$this, 'osgkeyqkiysoyqoy'], 10, 3)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'virtual_browser_is_cached', [$this, 'ewqiaeegeoeogycg'], 10, 2)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'virtual_browser_get_cached_data', [$this, 'wgqwcqeoiswmiqew'], 10, 2); } public function mameiwsayuyquoeq() { } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::cmiuooquqeyoccay, "{$skacuygeqykiwiwy}/virtual-browser"); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, 'virtual-browser-cache-path', __('Virtual Browser Cache Path', PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); } return $ksaameoqigiaoigg; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::cmiuooquqeyoccay); return $msyoeiaqaaseqiaw; } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function wcsaieeakgaaqkyk($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function osgkeyqkiysoyqoy($sogksuscggsicmac, $sameaqkagyqomooq, $eeamcawaiqocomwy = null) { return $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $sogksuscggsicmac = null; if (!empty($eeamcawaiqocomwy)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { if (!empty($this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $this->kmuweyayaqoeqiyw()->eiqmgkyumaiemwiq()); if (!is_wp_error($sogksuscggsicmac)) { $goqqimcssiyagkwy->mysgkyccuicksmiy($sameaqkagyqomooq, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Another process already started.', PR__MDL__OPTIMIZATION), 403); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('it\'s seems the pattern has no page, please update pattern and select some page.', PR__MDL__OPTIMIZATION), 401); } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "virtual_browser_queue_{$sameaqkagyqomooq}_transient"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'virtual_browser_retrieve_result_failed', $sameaqkagyqomooq); } $sogksuscggsicmac = false; } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'virtual_browser_retrieve_result_failed', $sameaqkagyqomooq); } } return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('Virtual browser status failed: %s', PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, 'reason', ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf('VB: status failed => %s', $gkyciwoiiisgywcs->get($sogksuscggsicmac, 'reason', ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('VB: status completed'); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}/virtual-browser.json"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('VB: JSON File Retrieved.'); return $kuukgsmqkagwaciu; } return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (isset($icwicymcioeyeyek[Constants::skogicecygyyskkq], $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy])) { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($swyigkueoywiacam->exists($esaqeawoigqgagum)) { $swyigkueoywiacam->remove($esaqeawoigqgagum); } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'virtual_browser_result_cached', $sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'virtual_browser_result_cache_failed', $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Result fetched but can not cache it.', PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('VB: Result fetched but can not cache it.'); } return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); } } return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if ($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay)) { $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}/{$uusmaiomayssaecw}.json"; } return $esaqeawoigqgagum; } }
