<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eafa4785061             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Purge\Purge; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use WP_Error; class VirtualBrowser extends Common { use SubscriptionEngineTrait, PageManagerEngineTrait; const eoeewcigeywcquis = "\x63\162\x69\164\151\143\141\x6c\x5f\143\x73\x73"; const asgasewsyuywckgq = "\166\151\162\x74\x75\141\x6c\x5f\142\162\157\167\163\x65\162"; const cmiuooquqeyoccay = Optimization::eaegumogucmwsmsk . "\x56\x49\x52\124\125\101\114\137\102\122\x4f\x57\x53\105\x52\x5f\x43\101\x43\x48\x45\x5f\120\101\124\x48"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->sccckmuaasqgwksq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(Process::skcaqcukeyugwmke, [$this, "\141\x65\153\x75\x69\x6f\x6b\x73\x6d\161\161\143\x63\x79\165\x75"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\x61\154\x5f\142\x72\x6f\x77\x73\x65\162\x5f\x63\x61\x63\x68\x65\x5f\x72\x65\163\x75\x6c\164", [$this, "\161\161\171\161\161\157\x6b\x77\153\155\157\x63\x67\151\x61\145"], 10, 2); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x72\145\x71\x75\151\162\x65\x5f\x64\151\x72\145\143\164\x6f\x72\151\x65\x73", [$this, "\x69\x77\x75\x71\147\171\147\x6d\153\143\x73\151\141\x6b\147\153"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\166\x69\162\x74\165\x61\x6c\x5f\x62\162\x6f\167\x73\x65\x72\x5f\x63\x68\x65\x63\153\137\x66\x69\156\151\x73\x68\145\x64", [$this, "\141\x65\x6b\165\x69\157\153\x73\155\x71\161\143\x63\x79\165\165"])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\x69\162\164\165\141\154\137\x62\x72\x6f\167\163\x65\x72\x5f\141\x64\x64\x5f\x6a\157\142", [$this, "\167\x79\163\x6f\x61\x71\153\x6b\x61\171\x65\x75\x73\x73\x6d\165"], 10, 3)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\165\141\x6c\x5f\x62\162\x6f\167\163\145\162\137\x69\x73\x5f\x63\141\x63\150\145\x64", [$this, "\145\167\x71\151\x61\x65\145\147\145\157\145\157\x67\171\143\147"], 10, 2)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\165\141\x6c\x5f\x62\x72\157\167\163\145\x72\137\147\x65\164\x5f\x63\141\143\x68\145\x64\137\x64\x61\164\141", [$this, "\167\147\161\x77\143\x71\145\157\x69\x73\167\x6d\151\161\145\167"], 10, 2); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto oskwkeaemiqcaqkc; } Setting::symcgieuakksimmu(); oskwkeaemiqcaqkc: } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { goto kiqmcymowosckmii; } $this->syiuacooagmooima("\x76\151\162\x74\x75\x61\154\55\x62\162\x6f\x77\163\x65\162\55\143\x61\143\150\145\55\x70\x61\x74\150", __("\126\151\162\164\x75\141\154\40\x42\162\157\x77\x73\145\162\x20\x43\141\x63\150\x65\x20\120\x61\x74\x68", PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); goto iaygaasesyymwgss; kiqmcymowosckmii: $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::cmiuooquqeyoccay, "{$skacuygeqykiwiwy}\x2f\166\151\162\164\x75\141\154\x2d\x62\x72\x6f\x77\163\145\x72"); iaygaasesyymwgss: return $ksaameoqigiaoigg; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::cmiuooquqeyoccay); return $msyoeiaqaaseqiaw; } public function ewqiaeegeoeogycg($skqeckgiuieeusoy, $sameaqkagyqomooq) : bool { return $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->csyeqcysyissgowm($sameaqkagyqomooq)); } public function aekuioksmqqccyuu($sameaqkagyqomooq) { $syoewmweaqiqswgu = "\x76\151\x72\164\x75\x61\154\x5f\x62\x72\157\167\163\145\162\137\161\x75\145\x75\x65\x5f{$sameaqkagyqomooq}\137\x74\x72\x61\156\163\x69\x65\x6e\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = $this->gcquqoykkywkwuey($sameaqkagyqomooq); if (is_bool($sogksuscggsicmac)) { goto giuoqsumkimmuaya; } if (!is_wp_error($sogksuscggsicmac)) { goto yeiicwscguyokwyu; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\151\x72\x74\x75\141\x6c\137\142\x72\157\x77\x73\x65\x72\137\162\x65\164\162\x69\145\166\145\x5f\x72\145\x73\x75\154\x74\x5f\x66\x61\151\x6c\145\x64", $sameaqkagyqomooq); goto yueosioyegouuwqo; yeiicwscguyokwyu: $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (!(empty($wciyuagckicucysk) || $wciyuagckicucysk < 0)) { goto iwosouqsesoqcska; } $wciyuagckicucysk = 1; iwosouqsesoqcska: if ($wciyuagckicucysk <= 3) { goto iacwyogogoccmwsg; } $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; goto wqmwcuggcisqieao; iacwyogogoccmwsg: $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; wqmwcuggcisqieao: if ($wciyuagckicucysk <= 10) { goto qsyqcokomswykyso; } $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\165\x61\x6c\x5f\142\x72\157\x77\163\x65\162\x5f\x72\145\x74\162\x69\145\166\x65\x5f\x72\145\163\165\154\164\137\146\x61\x69\154\x65\x64", $sameaqkagyqomooq); goto issgmmkcgesyeoas; qsyqcokomswykyso: $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $sameaqkagyqomooq); issgmmkcgesyeoas: $sogksuscggsicmac = false; yueosioyegouuwqo: goto mssaawaiaimogowg; giuoqsumkimmuaya: $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); mssaawaiaimogowg: return $sogksuscggsicmac; } public function gcquqoykkywkwuey($sameaqkagyqomooq) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq); $ksaameoqigiaoigg = false; if (!$scwwcyaqyywsweoq) { goto kuimgwmkcgcoecko; } $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if (!($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq))) { goto gaiaucesmcqgqwac; } if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { goto umamqqwcoewcigew; } if (!($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq))) { goto ccyiggckemwgooco; } $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $sameaqkagyqomooq); ccyiggckemwgooco: goto swkeiggkawwgewuw; umamqqwcoewcigew: $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc); swkeiggkawwgewuw: gaiaucesmcqgqwac: kuimgwmkcgcoecko: if (!($scwwcyaqyywsweoq && !$ksaameoqigiaoigg)) { goto oaskqsoyesmmeaew; } $ksaameoqigiaoigg = $scwwcyaqyywsweoq; oaskqsoyesmmeaew: return $ksaameoqigiaoigg; } public function wysoaqkkayeussmu($sogksuscggsicmac, int $sameaqkagyqomooq, string $eeamcawaiqocomwy) { if ($this->ysuiqkgycmagqqyu($sameaqkagyqomooq)) { goto ywqouwqomiqwoquu; } $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::qakegsaikiimcmkc, $sameaqkagyqomooq, self::asgasewsyuywckgq, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { goto yywwaaiicukuwcao; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\156\157\164\x68\145\x72\40\x70\x72\157\143\x65\163\163\40\x61\x6c\x72\145\x61\x64\171\40\163\164\x61\x72\x74\145\144\56", PR__MDL__OPTIMIZATION), 401); goto eykiuqsamowqykam; yywwaaiicukuwcao: if (!($ccowyogiqwikkkie = $this->cqscwmqsgomkogoq()->wmeeckgouqiwiqco($sameaqkagyqomooq))) { goto miigqygoawqmkkqm; } $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy, $ccowyogiqwikkkie, $this->kmuweyayaqoeqiyw()->eiqmgkyumaiemwiq()); if (is_wp_error($sogksuscggsicmac)) { goto aacaoywsaqscgyua; } $goqqimcssiyagkwy->mysgkyccuicksmiy($sameaqkagyqomooq, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $sameaqkagyqomooq); aacaoywsaqscgyua: miigqygoawqmkkqm: eykiuqsamowqykam: ywqouwqomiqwoquu: return $sogksuscggsicmac; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x56\x69\x72\164\x75\x61\154\x20\142\162\x6f\167\163\145\162\x20\x73\x74\141\164\165\x73\40\146\141\151\154\x65\x64\x3a\40\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\x61\x73\x6f\x6e", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\126\102\x3a\40\x73\x74\x61\164\165\163\x20\146\x61\x69\154\x65\144\x20\75\76\40\45\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\x65\141\x73\x6f\x6e", ''))); goto qcwkymcgqacaaywc; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\126\x42\x3a\x20\x73\x74\141\x74\165\x73\40\143\157\155\160\x6c\x65\x74\x65\x64"); if (!($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium))) { goto qwsmiaegmcwuskwi; } $ksaameoqigiaoigg = $this->qqyqqokwkmocgiae($okuucwisauuawocs, $ewgwqamkygiqaawc); qwsmiaegmcwuskwi: goto qcwkymcgqacaaywc; } wmcucyuieqgqisis: qcwkymcgqacaaywc: return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\x2f\166\151\162\x74\165\x61\x6c\x2d\x62\162\157\167\163\145\x72\x2e\x6a\x73\x6f\x6e"); if (!(200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu)))) { goto yyyyawaqcowsgqcs; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\102\72\x20\112\123\117\116\x20\106\151\154\145\40\122\145\164\162\x69\145\x76\x65\144\x2e"); return $kuukgsmqkagwaciu; yyyyawaqcowsgqcs: return false; } public function qqyqqokwkmocgiae($sameaqkagyqomooq, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto wmycwscioqackeig; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if (!isset($icwicymcioeyeyek[Constants::skogicecygyyskkq], $icwicymcioeyeyek[Constants::mcaucuyeeiwsmmuy])) { goto sikmqkecsiyciaei; } $swyigkueoywiacam = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if (!$swyigkueoywiacam->exists($esaqeawoigqgagum)) { goto usmagcaocwiugqum; } $swyigkueoywiacam->remove($esaqeawoigqgagum); usmagcaocwiugqum: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc); sikmqkecsiyciaei: wmycwscioqackeig: if ($ksaameoqigiaoigg !== false) { goto wammkmaqucqagqww; } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\162\164\165\x61\154\x5f\142\x72\157\x77\x73\x65\162\x5f\x72\145\x73\x75\154\164\x5f\143\141\x63\x68\145\137\146\141\151\x6c\145\x64", $sameaqkagyqomooq, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\163\165\x6c\164\x20\x66\x65\164\143\150\x65\x64\40\142\x75\x74\x20\143\141\156\40\x6e\157\x74\40\x63\x61\x63\x68\x65\40\x69\x74\x2e", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x56\102\x3a\x20\x52\145\x73\x75\154\x74\40\146\x65\x74\143\150\x65\144\x20\x62\165\x74\x20\x63\141\x6e\40\156\x6f\164\x20\x63\141\143\x68\x65\40\x69\164\56"); goto iuooqassskiyeemo; wammkmaqucqagqww: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\x72\x74\165\141\x6c\x5f\x62\x72\157\167\163\145\x72\137\162\145\x73\165\x6c\164\x5f\x63\141\x63\150\x65\144", $sameaqkagyqomooq, $ewgwqamkygiqaawc); iuooqassskiyeemo: return $ksaameoqigiaoigg; } public function wgqwcqeoiswmiqew($icwicymcioeyeyek, $sameaqkagyqomooq) { if (!($esaqeawoigqgagum = $this->csyeqcysyissgowm($sameaqkagyqomooq))) { goto imykswegcuekqwio; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($esaqeawoigqgagum); if (!$ewgwqamkygiqaawc) { goto cquyuwsisgqscemm; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); cquyuwsisgqscemm: imykswegcuekqwio: return $icwicymcioeyeyek; } public function csyeqcysyissgowm(string $sameaqkagyqomooq) : string { $esaqeawoigqgagum = ''; if (!($skacuygeqykiwiwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->cmaecekuqkwmemms(self::cmiuooquqeyoccay))) { goto eokikuciuqkyauum; } $uusmaiomayssaecw = Pattern::symcgieuakksimmu()->uiiqeakeuswqomey($sameaqkagyqomooq); $esaqeawoigqgagum = "{$skacuygeqykiwiwy}\x2f{$uusmaiomayssaecw}\x2e\152\x73\157\156"; eokikuciuqkyauum: return $esaqeawoigqgagum; } }
