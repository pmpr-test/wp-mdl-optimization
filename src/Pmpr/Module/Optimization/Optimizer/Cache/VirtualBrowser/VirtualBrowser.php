<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b1fa9ac4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Purge\Purge; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class VirtualBrowser extends Common { use SubscriptionEngineTrait, PageManagerEngineTrait; const eoeewcigeywcquis = "\x63\162\x69\x74\x69\143\141\x6c\x5f\143\163\x73"; const asgasewsyuywckgq = "\166\x69\162\x74\165\x61\154\x5f\x62\162\x6f\x77\163\x65\162"; const cmiuooquqeyoccay = Optimization::eaegumogucmwsmsk . "\x56\111\122\124\125\x41\x4c\137\102\122\117\x57\x53\105\x52\137\x43\x41\103\110\x45\137\120\101\x54\110"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->sccckmuaasqgwksq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(Process::skcaqcukeyugwmke, [$this, "\141\x65\153\165\x69\157\x6b\x73\x6d\161\161\143\x63\x79\x75\x75"])->qcsmikeggeemccuu(Process::kwqseouisawgwcec, [$this, "\x77\143\x73\141\x69\x65\145\x61\153\x67\141\141\x71\153\x79\153"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\166\151\162\x74\165\141\x6c\137\x62\162\157\167\x73\145\x72\x5f\x63\141\143\150\145\x5f\162\145\163\x75\x6c\x74", [$this, "\x71\161\x79\161\x71\x6f\x6b\167\153\155\x6f\x63\147\x69\141\145"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x72\145\161\x75\151\162\145\137\x64\x69\162\145\x63\x74\157\162\151\145\163", [$this, "\x69\167\x75\161\x67\x79\x67\x6d\x6b\143\x73\x69\x61\153\x67\153"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\165\x61\154\x5f\x62\162\157\x77\163\145\162\x5f\x63\x68\x65\143\153\x5f\146\x69\x6e\x69\x73\150\145\144", [$this, "\x61\x65\x6b\165\x69\x6f\153\163\155\161\x71\x63\143\x79\x75\x75"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\151\162\x74\165\x61\154\137\x62\x72\157\167\x73\x65\x72\x5f\141\x64\144\x5f\x6a\x6f\x62", [$this, "\x6f\163\147\153\145\171\x71\x6b\x69\x79\x73\157\171\x71\157\x79"], 10, 3)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\x69\162\x74\165\141\154\x5f\x62\x72\157\167\163\145\x72\x5f\x69\163\137\143\x61\143\x68\x65\x64", [$this, "\145\x77\161\x69\x61\145\x65\x67\145\x6f\145\x6f\x67\x79\x63\x67"], 10, 2)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\165\141\154\137\x62\162\x6f\167\x73\145\x72\x5f\x67\x65\164\x5f\x63\x61\143\150\145\144\x5f\x64\141\x74\x61", [$this, "\167\x67\x71\x77\x63\161\145\157\151\x73\x77\x6d\151\x71\x65\167"], 10, 2); } public function mameiwsayuyquoeq() { } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::cmiuooquqeyoccay, "{$skacuygeqykiwiwy}\x2f\166\x69\162\x74\x75\141\154\55\x62\x72\x6f\x77\x73\x65\162"); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x76\x69\162\x74\165\141\x6c\55\x62\x72\x6f\167\163\145\162\x2d\143\x61\x63\x68\145\55\160\x61\x74\x68", __("\126\151\x72\x74\165\141\x6c\x20\102\162\x6f\167\x73\x65\x72\x20\x43\x61\143\x68\145\x20\120\x61\x74\150", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); } return $ksaameoqigiaoigg; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::cmiuooquqeyoccay); return $msyoeiaqaaseqiaw; } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function wcsaieeakgaaqkyk($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function osgkeyqkiysoyqoy($sogksuscggsicmac, $sameaqkagyqomooq, $eeamcawaiqocomwy = null) { return $this->wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy); } public function wgkoamcoeecmwgqo($sameaqkagyqomooq, $eeamcawaiqocomwy = null) { $sogksuscggsicmac = null; if (!empty($eeamcawaiqocomwy)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { if (!empty($this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $this->kmuweyayaqoeqiyw()->eiqmgkyumaiemwiq()); if (!is_wp_error($sogksuscggsicmac)) { $goqqimcssiyagkwy->mysgkyccuicksmiy($sameaqkagyqomooq, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x6e\157\x74\x68\x65\162\40\x70\162\157\143\145\x73\x73\x20\141\x6c\x72\145\141\x64\171\40\163\164\x61\162\x74\x65\x64\x2e", PR__MDL__OPTIMIZATION), 403); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x69\x74\47\x73\40\163\145\x65\x6d\163\x20\x74\150\x65\x20\x70\x61\x74\164\x65\162\156\40\x68\141\x73\40\156\157\40\160\141\147\x65\54\x20\160\154\145\x61\163\145\40\x75\x70\x64\141\164\x65\40\160\141\x74\x74\x65\162\156\40\141\156\144\40\x73\145\x6c\145\143\164\x20\x73\157\155\x65\40\160\141\x67\145\56", PR__MDL__OPTIMIZATION), 401); } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\x76\151\x72\x74\165\x61\154\137\142\162\157\167\163\x65\x72\137\161\165\x65\x75\145\x5f{$sameaqkagyqomooq}\137\x74\162\x61\x6e\163\151\145\x6e\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\x75\x61\x6c\137\142\x72\157\167\x73\145\162\x5f\x72\x65\x74\162\x69\x65\166\145\x5f\x72\x65\163\x75\154\164\x5f\x66\141\151\154\145\144", $sameaqkagyqomooq); } $sogksuscggsicmac = false; } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\151\162\164\x75\141\x6c\x5f\142\162\157\167\x73\x65\162\x5f\162\x65\164\162\151\145\166\x65\137\x72\145\x73\165\154\164\137\146\x61\x69\154\x65\144", $sameaqkagyqomooq); } } return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\126\x69\162\x74\x75\141\x6c\40\142\x72\x6f\x77\163\x65\162\40\x73\x74\x61\164\165\163\40\146\x61\x69\154\x65\x64\x3a\40\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\141\x73\x6f\156", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x56\x42\x3a\40\163\x74\x61\x74\165\x73\x20\146\x61\x69\154\x65\x64\40\75\x3e\x20\45\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\x61\x73\x6f\x6e", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\126\102\x3a\40\x73\164\x61\164\x75\x73\x20\143\x6f\155\160\154\145\164\x65\144"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\x2f\x76\151\162\x74\165\141\x6c\55\x62\162\x6f\167\x73\145\162\x2e\152\x73\157\x6e"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\x42\x3a\x20\x4a\x53\117\x4e\40\106\x69\154\x65\40\122\145\x74\162\151\x65\166\x65\144\56"); return $kuukgsmqkagwaciu; } return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (isset($icwicymcioeyeyek[Constants::skogicecygyyskkq], $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy])) { $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($swyigkueoywiacam->exists($esaqeawoigqgagum)) { $swyigkueoywiacam->remove($esaqeawoigqgagum); } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\x61\x6c\137\142\x72\x6f\x77\x73\145\162\x5f\x72\145\163\165\154\164\x5f\143\x61\143\150\x65\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\x72\164\165\141\154\137\142\162\x6f\x77\x73\x65\x72\137\x72\145\163\165\154\x74\x5f\143\x61\143\150\x65\137\x66\x61\151\x6c\145\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\163\165\154\x74\40\x66\x65\164\x63\150\145\x64\40\142\165\164\40\143\141\156\40\156\x6f\x74\x20\x63\141\143\150\x65\x20\151\164\x2e", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\x42\x3a\x20\122\145\x73\165\x6c\164\40\x66\145\x74\x63\x68\145\144\40\142\165\164\40\143\x61\x6e\x20\156\157\164\40\x63\x61\x63\x68\x65\x20\x69\164\x2e"); } return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if ($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq)) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if ($ewgwqamkygiqaawc) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); } } return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if ($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay)) { $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\57{$uusmaiomayssaecw}\56\x6a\x73\x6f\156"; } return $esaqeawoigqgagum; } }
