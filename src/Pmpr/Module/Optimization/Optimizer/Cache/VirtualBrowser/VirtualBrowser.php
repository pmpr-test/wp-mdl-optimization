<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758102f55148             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Purge\Purge; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class VirtualBrowser extends Common { use SubscriptionEngineTrait, PageManagerEngineTrait; const eoeewcigeywcquis = "\x63\x72\x69\164\x69\143\141\154\137\x63\163\x73"; const asgasewsyuywckgq = "\x76\151\x72\164\165\x61\154\x5f\x62\162\x6f\x77\163\145\162"; const cmiuooquqeyoccay = Optimization::eaegumogucmwsmsk . "\x56\x49\122\x54\x55\101\x4c\137\x42\122\117\x57\x53\x45\122\x5f\103\101\103\x48\x45\x5f\120\101\x54\110"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->sccckmuaasqgwksq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(Process::skcaqcukeyugwmke, [$this, "\141\x65\153\x75\x69\x6f\x6b\163\155\161\161\143\143\171\165\x75"])->qcsmikeggeemccuu(Process::kwqseouisawgwcec, [$this, "\x77\x63\163\x61\151\x65\x65\x61\153\x67\141\x61\161\153\x79\153"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\165\141\154\x5f\142\x72\x6f\167\x73\x65\162\137\143\141\143\x68\x65\x5f\162\x65\x73\165\154\x74", [$this, "\161\161\x79\161\x71\x6f\153\167\x6b\x6d\157\143\x67\x69\141\145"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x72\x65\161\x75\151\162\145\x5f\144\x69\x72\145\x63\x74\x6f\x72\151\145\x73", [$this, "\x69\x77\165\x71\x67\x79\147\x6d\x6b\143\163\x69\x61\x6b\x67\153"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\151\x72\x74\165\x61\x6c\x5f\142\x72\157\167\x73\145\x72\137\x63\x68\x65\x63\x6b\137\x66\151\x6e\151\163\x68\x65\x64", [$this, "\x61\145\x6b\165\151\x6f\x6b\x73\x6d\161\161\x63\143\x79\x75\165"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\151\x72\x74\165\x61\154\x5f\x62\162\x6f\167\x73\x65\162\x5f\141\x64\x64\x5f\152\x6f\142", [$this, "\x6f\163\147\153\145\171\161\153\x69\171\x73\157\171\161\x6f\x79"], 10, 3)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\x69\162\164\x75\141\x6c\x5f\142\x72\157\x77\163\145\162\x5f\x69\x73\137\x63\x61\143\x68\145\x64", [$this, "\145\x77\161\x69\x61\145\x65\147\x65\157\x65\157\x67\x79\143\147"], 10, 2)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\141\x6c\x5f\x62\x72\157\x77\163\x65\162\x5f\x67\145\x74\137\143\141\143\150\145\144\137\x64\x61\164\141", [$this, "\x77\147\x71\167\x63\x71\x65\157\x69\163\167\x6d\151\x71\145\167"], 10, 2); } public function mameiwsayuyquoeq() { } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::cmiuooquqeyoccay, "{$skacuygeqykiwiwy}\57\x76\x69\x72\x74\165\x61\x6c\x2d\x62\x72\x6f\x77\x73\145\x72"); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x76\x69\162\x74\165\x61\x6c\x2d\142\x72\x6f\x77\x73\x65\x72\x2d\143\x61\143\150\145\x2d\x70\141\164\x68", __("\x56\151\x72\x74\x75\141\154\x20\102\x72\157\167\x73\145\x72\40\103\x61\x63\150\x65\x20\120\141\x74\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); } return $ksaameoqigiaoigg; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::cmiuooquqeyoccay); return $msyoeiaqaaseqiaw; } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function wcsaieeakgaaqkyk($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function osgkeyqkiysoyqoy($sogksuscggsicmac, $sameaqkagyqomooq, $eeamcawaiqocomwy = null) { return $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $sogksuscggsicmac = null; if (!empty($eeamcawaiqocomwy)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { if (!empty($this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $this->kmuweyayaqoeqiyw()->eiqmgkyumaiemwiq()); if (!is_wp_error($sogksuscggsicmac)) { $goqqimcssiyagkwy->mysgkyccuicksmiy($sameaqkagyqomooq, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x6e\x6f\x74\150\x65\162\40\x70\162\157\x63\x65\x73\x73\x20\x61\154\162\145\141\x64\x79\x20\163\164\x61\162\164\145\x64\x2e", PR__MDL__OPTIMIZATION), 403); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\151\x74\x27\163\x20\x73\x65\x65\155\163\x20\164\x68\x65\40\160\x61\164\164\145\x72\x6e\x20\150\141\163\x20\156\157\40\x70\x61\147\145\x2c\40\x70\x6c\145\x61\163\x65\x20\165\160\x64\x61\164\x65\x20\160\x61\x74\164\145\162\156\x20\141\x6e\x64\40\163\145\x6c\145\x63\164\x20\163\157\x6d\145\x20\160\141\147\x65\x2e", PR__MDL__OPTIMIZATION), 401); } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\166\x69\162\164\x75\141\154\x5f\142\162\157\167\163\145\x72\137\x71\165\145\165\x65\x5f{$sameaqkagyqomooq}\x5f\164\x72\141\156\x73\151\145\156\x74"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\165\141\x6c\137\x62\162\x6f\x77\x73\145\x72\137\x72\145\x74\x72\x69\x65\x76\x65\x5f\x72\145\x73\165\x6c\x74\137\146\141\151\x6c\145\144", $sameaqkagyqomooq); } $sogksuscggsicmac = false; } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\151\x72\164\165\x61\154\137\142\162\157\167\163\145\162\137\162\x65\x74\162\151\x65\x76\145\x5f\x72\x65\163\165\x6c\x74\137\146\141\x69\154\145\144", $sameaqkagyqomooq); } } return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\126\x69\162\x74\x75\141\154\x20\142\x72\157\x77\163\x65\x72\40\x73\164\141\164\x75\x73\x20\146\141\151\154\x65\x64\72\40\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\141\163\157\156", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x56\102\72\x20\x73\x74\141\x74\165\x73\40\x66\141\x69\x6c\x65\144\x20\x3d\76\40\x25\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\145\x61\163\x6f\x6e", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\102\72\x20\163\x74\141\164\x75\163\x20\143\x6f\155\x70\x6c\145\x74\145\144"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\166\x69\x72\164\165\x61\154\55\x62\x72\157\x77\x73\145\162\56\152\163\x6f\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\102\x3a\x20\x4a\x53\x4f\116\40\x46\151\154\145\x20\122\145\164\162\151\145\x76\145\x64\x2e"); return $kuukgsmqkagwaciu; } return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (isset($icwicymcioeyeyek[Constants::skogicecygyyskkq], $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy])) { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($swyigkueoywiacam->exists($esaqeawoigqgagum)) { $swyigkueoywiacam->remove($esaqeawoigqgagum); } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\x69\x72\164\165\x61\x6c\137\142\162\x6f\x77\163\145\x72\137\162\x65\163\x75\x6c\x74\137\143\141\x63\150\x65\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\141\154\137\x62\162\x6f\167\x73\x65\x72\x5f\x72\x65\163\x75\x6c\164\137\x63\x61\143\150\x65\137\146\x61\151\x6c\x65\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x73\x75\x6c\x74\40\146\145\164\x63\x68\145\144\x20\142\165\x74\x20\x63\x61\x6e\40\x6e\x6f\164\x20\143\x61\143\x68\x65\40\x69\164\56", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\102\72\40\x52\145\163\x75\154\164\x20\146\x65\164\x63\150\x65\144\x20\x62\165\164\40\143\x61\x6e\x20\x6e\157\164\40\143\x61\143\x68\x65\40\x69\x74\x2e"); } return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); } } return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if ($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay)) { $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\x2f{$uusmaiomayssaecw}\x2e\x6a\163\157\156"; } return $esaqeawoigqgagum; } }
