<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757f9e31abf5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Purge\Purge; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class VirtualBrowser extends Common { use SubscriptionEngineTrait, PageManagerEngineTrait; const eoeewcigeywcquis = "\143\162\x69\164\151\143\x61\x6c\137\x63\x73\x73"; const asgasewsyuywckgq = "\166\151\162\x74\x75\x61\x6c\137\142\x72\157\x77\x73\145\x72"; const cmiuooquqeyoccay = Optimization::eaegumogucmwsmsk . "\126\x49\x52\124\x55\x41\x4c\x5f\x42\122\x4f\x57\123\105\x52\137\103\101\103\x48\105\137\x50\101\x54\x48"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->sccckmuaasqgwksq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(Process::skcaqcukeyugwmke, [$this, "\141\x65\x6b\x75\x69\x6f\x6b\163\155\x71\161\x63\143\x79\x75\165"])->qcsmikeggeemccuu(Process::kwqseouisawgwcec, [$this, "\167\x63\163\x61\x69\145\x65\x61\153\x67\141\141\161\x6b\171\x6b"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\166\x69\162\164\x75\141\154\137\142\x72\157\167\x73\x65\162\x5f\x63\x61\143\150\x65\x5f\x72\x65\163\165\x6c\x74", [$this, "\x71\x71\x79\161\x71\x6f\153\x77\x6b\155\x6f\x63\147\151\141\x65"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x72\145\161\x75\x69\162\145\137\x64\x69\x72\145\x63\164\157\x72\151\x65\x73", [$this, "\151\167\165\x71\147\x79\x67\155\153\143\163\151\141\153\147\153"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\x69\x72\x74\x75\x61\x6c\x5f\142\x72\x6f\167\x73\145\x72\137\143\150\145\x63\153\137\x66\151\x6e\151\163\150\x65\144", [$this, "\141\x65\153\x75\x69\x6f\153\x73\x6d\161\161\143\x63\x79\165\x75"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\x69\x72\x74\165\141\x6c\x5f\x62\x72\x6f\x77\163\145\162\137\x61\144\144\x5f\x6a\x6f\x62", [$this, "\157\163\x67\x6b\x65\171\x71\x6b\x69\171\x73\x6f\x79\x71\157\x79"], 10, 3)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\151\x72\164\165\x61\154\x5f\x62\x72\x6f\167\163\145\162\137\x69\x73\x5f\x63\x61\x63\x68\145\x64", [$this, "\x65\167\161\151\141\x65\x65\x67\145\x6f\145\x6f\147\171\143\x67"], 10, 2)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\141\154\x5f\142\x72\x6f\167\163\145\x72\x5f\x67\145\164\x5f\x63\x61\x63\150\x65\x64\x5f\144\141\164\141", [$this, "\167\147\x71\167\143\x71\145\157\x69\x73\x77\155\x69\x71\x65\167"], 10, 2); } public function mameiwsayuyquoeq() { } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::cmiuooquqeyoccay, "{$skacuygeqykiwiwy}\57\166\151\162\164\x75\x61\x6c\55\142\x72\157\x77\x73\145\x72"); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x76\151\x72\x74\165\141\x6c\55\x62\x72\157\167\x73\145\x72\x2d\143\141\143\150\x65\x2d\x70\141\x74\x68", __("\x56\x69\162\x74\x75\141\x6c\40\x42\162\157\167\x73\x65\x72\x20\x43\x61\143\x68\145\40\120\x61\164\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); } return $ksaameoqigiaoigg; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::cmiuooquqeyoccay); return $msyoeiaqaaseqiaw; } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function wcsaieeakgaaqkyk($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function osgkeyqkiysoyqoy($sogksuscggsicmac, $sameaqkagyqomooq, $eeamcawaiqocomwy = null) { return $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $sogksuscggsicmac = null; if (!empty($eeamcawaiqocomwy)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { if (!empty($this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $this->kmuweyayaqoeqiyw()->eiqmgkyumaiemwiq()); if (!is_wp_error($sogksuscggsicmac)) { $goqqimcssiyagkwy->mysgkyccuicksmiy($sameaqkagyqomooq, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x6e\157\x74\150\x65\x72\40\160\x72\157\x63\145\163\x73\x20\141\x6c\x72\145\x61\144\171\x20\163\164\x61\162\164\x65\144\x2e", PR__MDL__OPTIMIZATION), 403); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\151\164\x27\163\x20\x73\x65\x65\155\x73\x20\x74\150\145\40\x70\x61\x74\164\145\x72\x6e\40\x68\141\x73\x20\x6e\157\40\160\141\x67\x65\54\x20\x70\154\x65\x61\163\x65\x20\x75\x70\144\141\x74\x65\40\160\x61\x74\164\145\162\156\x20\141\156\x64\40\x73\145\x6c\145\x63\164\40\163\157\155\145\40\160\141\x67\x65\56", PR__MDL__OPTIMIZATION), 401); } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\166\151\x72\164\x75\x61\154\x5f\142\x72\157\167\x73\145\x72\137\x71\x75\145\x75\145\137{$sameaqkagyqomooq}\137\x74\x72\141\x6e\163\x69\x65\x6e\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\x69\162\164\165\141\x6c\137\x62\162\x6f\167\163\x65\162\137\162\145\x74\162\151\x65\166\145\x5f\162\x65\163\x75\154\164\137\x66\141\x69\x6c\145\x64", $sameaqkagyqomooq); } $sogksuscggsicmac = false; } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\x69\x72\164\x75\x61\154\137\142\x72\x6f\x77\163\145\162\x5f\x72\145\x74\162\151\x65\x76\145\137\x72\145\x73\165\154\164\x5f\x66\x61\151\154\145\x64", $sameaqkagyqomooq); } } return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\126\151\162\164\x75\x61\x6c\40\x62\162\x6f\167\163\145\x72\x20\163\164\141\x74\x75\163\x20\x66\141\x69\154\145\144\72\40\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\x61\163\x6f\156", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x56\x42\x3a\40\163\164\x61\x74\x75\163\x20\146\x61\x69\154\x65\144\40\x3d\x3e\x20\x25\163", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\141\163\157\156", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\x42\x3a\40\x73\164\x61\x74\165\x73\40\143\157\155\160\154\145\164\145\x64"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\166\151\162\x74\165\x61\154\55\x62\162\157\x77\163\145\x72\x2e\x6a\163\157\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\102\72\x20\x4a\x53\x4f\x4e\40\106\x69\154\145\x20\122\145\x74\x72\151\145\166\145\x64\56"); return $kuukgsmqkagwaciu; } return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (isset($icwicymcioeyeyek[Constants::skogicecygyyskkq], $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy])) { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($swyigkueoywiacam->exists($esaqeawoigqgagum)) { $swyigkueoywiacam->remove($esaqeawoigqgagum); } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\165\x61\154\137\142\x72\x6f\167\163\145\162\x5f\x72\x65\163\x75\154\164\x5f\x63\x61\x63\150\x65\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\151\x72\164\x75\141\x6c\x5f\x62\x72\157\167\x73\x65\162\137\x72\x65\163\165\x6c\164\137\x63\141\143\150\145\x5f\x66\x61\151\x6c\145\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x73\x75\154\164\x20\x66\x65\x74\143\x68\145\144\x20\x62\x75\164\40\x63\x61\156\40\x6e\157\164\40\143\x61\143\150\145\40\x69\x74\56", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\126\102\x3a\40\x52\x65\163\165\154\x74\40\146\x65\x74\143\x68\145\x64\40\142\165\x74\40\x63\141\156\x20\x6e\157\164\x20\x63\141\143\150\145\40\x69\x74\x2e"); } return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); } } return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if ($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay)) { $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\x2f{$uusmaiomayssaecw}\x2e\x6a\163\157\x6e"; } return $esaqeawoigqgagum; } }
