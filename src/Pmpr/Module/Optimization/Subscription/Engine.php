<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b1fa9ac4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Container { const eeyiwgsusysqessu = "\x70\x6c\141\x6e\x73"; const mkciamyomkiccoes = "\x63\157\x69\x6e\x73"; const owimkwkiwawmeicq = "\x75\163\x61\x67\145\163"; const moamckowewogygog = "\160\x75\x72\143\x68\x61\163\145\163"; const ikmkgmwegyasgqmo = "\162\x65\x6d\x6f\x74\145\137\141\x70\x70\163"; const uysmymaeucegyiyw = "\x65\170\x74\162\141\x5f\143\157\151\x6e\x73"; const emywgcsiygeskckg = "\162\145\155\x61\151\x6e\137\x63\157\151\156\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw())) { $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); } else { if (self::eeyiwgsusysqessu === $uusmaiomayssaecw) { $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); } } } } return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (is_array($icwicymcioeyeyek) && $icwicymcioeyeyek) { $yygmoeguaqyumuui = ["\145\170\164\162\141\163", "\x73\x75\142\163\143\x72\151\160\164\151\157\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if ($suuagcecoyuweoqk) { $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\x62\x73\x63\162\x69\x70\x74\x69\157\x6e\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if ($qkasemkceamoceiy) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $cmaccwokqweqweqi = $yakcyegsoqusmiak->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, $sqeykgyoooqysmca), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $qkasemkceamoceiy)]); if (empty($cmaccwokqweqweqi)) { $yakcyegsoqusmiak->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); } else { $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if ($aasekyoqiwumiqom !== $wuegiysyymkmsuyi) { $yakcyegsoqusmiak->gssiscqyqsacmeca()->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); } } } } } $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if (!$gigyyisyuaacmwmq) { $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; } } } return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\x6e\x63\40\x44\141\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\145\40\x64\x61\164\x61\x20\x61\163\x73\x6f\143\x69\141\164\x65\144\x20\x77\151\x74\x68\40\171\x6f\x75\x72\x20\x61\143\143\x6f\x75\156\x74\40\x69\x73\40\165\x70\x64\141\x74\145\144\x20\167\151\164\x68\x20\x74\150\145\40\x73\x65\x72\x76\145\162\x20\141\164\x20\162\145\147\165\154\x61\162\x20\151\x6e\164\145\162\166\141\154\163\56\x20\x54\157\40\145\156\x73\x75\x72\x65\40\164\150\x65\x20\154\x61\164\145\x73\164\x20\x75\160\x64\141\164\145\54\40\171\x6f\165\x20\143\141\156\x20\x75\160\144\x61\x74\x65\x20\x79\x6f\x75\x72\40\141\x63\x63\x6f\x75\156\164\40\144\x61\164\141\x20\x77\151\164\150\40\164\150\x65\x20\163\x65\162\x76\145\162\40\x6e\x6f\x77\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\x70\162\x2d\157\160\164\55\x73\171\156\143\x2d\144\x61\164\x61\x20\x70\x72\55\142\164\x6e\40\x62\x74\156\x2d\x70\x72\151\x6d\141\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\x6c\x61\x73\x73" => "\167\x2d\x31\x30\x30\x20\160\x72\x2d\x62\x74\x6e\40\142\x74\x6e\55\141\143\x74\x69\157\156\40\142\164\156\55\x6f\165\x74\x6c\x69\x6e\x65\55\160\162\151\155\141\162\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$umwagewoweuckiso) { $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); } } $eymaoksggoskuikg = __("\125\156\153\x6e\157\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\x73\40\x63\x6f\151\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if ($wekousyuiguacggm) { $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); } if ($ymyueyaumiqiuaqa <= 0) { $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\160\151\x72\145\x64", PR__MDL__OPTIMIZATION), ["\x63\154\x61\163\x73" => "\164\x65\x78\164\55\x64\x61\156\x67\145\x72"]); } else { $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\x73\40\x44\141\x79", "\x25\163\x20\x44\x61\x79\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\x63\x6c\141\163\163" => "\x74\145\x78\x74\55\163\165\x63\x63\x65\x73\163"]); } $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::kumuoysauoagaiiy)->yogqsokgsqemsuoq()]); if ($okmuwqcyiyiommaq) { $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->waecsyqmwascmqoa($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->waecsyqmwascmqoa($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); } else { $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\40\120\x75\162\143\150\x61\x73\x65", PR__MDL__OPTIMIZATION); } $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\165\142\x73\143\x72\x69\160\164\x69\157\x6e\x20\120\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\154\x61\x6e" => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\163\143\162\151\x70\x74\151\x6f\156\40\120\154\x61\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\145\x72\x69\x6f\x64" => [Constants::qescuiwgsyuikume => __("\120\x6c\141\x6e\x20\x50\145\x72\151\157\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\145\155\x61\151\156\137\x64\141\x79" => [Constants::qescuiwgsyuikume => __("\122\x65\155\x61\x69\156\x69\156\147\x20\x54\151\155\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x43\x6f\x75\156\x74\40\157\146\40\x49\x6e\151\164\x69\x61\154\40\103\157\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\x73\145\144\137\x63\x6f\151\156\163" => [Constants::qescuiwgsyuikume => __("\x55\x73\x65\144\40\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\145\x6d\141\151\x6e\137\143\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\122\145\155\x61\151\156\40\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\x78\x74\x72\x61\x20\103\x6f\151\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\164\145\163\164\137\160\165\x72\143\150\x61\163\x65\137\143\x6f\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\114\x61\164\145\x73\164\40\120\x75\162\x63\x68\141\x73\145\x20\103\x6f\165\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\x61\164\145\x73\x74\137\160\x75\x72\143\x68\141\163\x65\x5f\144\x61\x74\145" => [Constants::qescuiwgsyuikume => __("\114\141\x74\x65\163\x74\40\x50\165\162\143\x68\x61\163\x65\40\104\x61\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\x70\151\x72\141\x74\x69\157\x6e" => [Constants::qescuiwgsyuikume => __("\x45\x78\x70\151\162\145\x20\x44\x61\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\164\x68\x6f\165\x74\x20\145\x78\x70\151\162\x65\40\x64\x61\164\x65", PR__MDL__OPTIMIZATION), ["\143\154\x61\163\163" => "\164\145\x78\x74\x2d\163\165\143\x63\x65\x73\x73"])], "\x63\157\x69\x6e\x73\137\x63\157\165\156\164" => [Constants::qescuiwgsyuikume => __("\101\154\x6c\40\103\157\151\156\x73\40\x43\157\165\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\163\x65\x64\137\x63\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\x55\163\x65\x64\40\x43\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\x6d\x61\151\156\x5f\143\157\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x52\x65\155\141\x69\156\x20\103\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\141\142\154\145\137\x61\164\x74\x72\163" => ["\143\154\x61\163\x73" => "\155\142\55\x30\x20\x74\x61\x62\x6c\145\40\164\141\x62\x6c\145\55\142\x6f\x72\x64\145\x72\x6c\145\163\163"], "\164\144\x5f\141\x74\x74\162\x73" => ["\143\154\141\163\163" => "\x70\x78\x2d\60\x20\x70\x79\x2d\x32"], "\154\141\163\164\137\x74\x64\x5f\x61\x74\x74\162\x73" => ["\143\154\141\x73\x73" => "\x70\170\55\x30\x20\x70\x79\55\x32\x20\x66\157\156\x74\55\167\145\151\x67\x68\x74\55\x62\157\154\144\40\164\x65\x78\164\x2d\x72\151\147\x68\x74"]]); } return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if ($yakcyegsoqusmiak->iekyeyicoyyawomk()->ygmcsmegcysyeoss() === 0 && $this->aiamukikcuowsiku()) { Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); } $qookweymeqawmcwo = ["\154\151\x73\x74\137\150\x74\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\162\x63\x68\141\x73\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\x70\x6f\162\164\57\160\165\x72\x63\150\141\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\151\163\164\137\150\x74\x6d\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\141\147\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\x70\157\x72\164\57\x75\x73\141\147\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis)) { $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; } return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu(Model $meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($gikeqowakccckkqe instanceof Index) { $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->cueaickeeoiwayou()]; if ($scsaeueqgyymsyei) { $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; } $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if ($scsaeueqgyymsyei) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\145\167\40\164\150\145\40\106\x75\154\154\x20\122\x65\160\x6f\162\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\147\155\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\137\x72\x65\x70\x6f\162\x74"], $eeamcawaiqocomwy), ["\x63\x6c\x61\163\163" => "\x70\162\x2d\142\x74\x6e\40\142\164\x6e\55\160\x72\x69\155\141\x72\171\40\142\x74\156\x2d\x61\143\x74\x69\x6f\156"]); } } return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; break; } if ($uymsgmyyeikucgae) { $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\165\163\x61\x67\145", 0); } } } return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if ($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\141\156\137\x69\144"))) { $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x63\x72\x69\164\151\143\141\154\137\143\x73\x73\x5f\x75\x73\141\x67\145", "\x73\x70\145\x65\x64\137\x74\145\163\x74\x5f\x75\163\x61\147\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw]) { $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; break; } } if ($ycqsugugqomewkke) { $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\50\45\x73\51", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\157\x75\x72\x20\x53\165\x62\163\143\x72\x69\160\x74\x69\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\40\50\x25\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\145\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; } else { $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\40\x28\45\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\157\x75\x72\40\x53\165\142\x73\x63\162\151\160\x74\151\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; } } else { $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\x59\x6f\x75\162\x20\x53\x75\x62\163\143\x72\151\160\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION)]; } if ($guacamgosccsckmq) { array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); } } $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\x72\166\151\143\145\137\x63\157\163\164\163", ["\x70\154\x61\x6e\x73" => $kekgkgqeyesmkywu, "\141\143\164\151\157\156\163" => ["\143\x72\151\x74\151\x63\141\x6c\137\143\x73\163" => __("\x43\x72\151\164\x69\143\141\x6c\x20\103\x53\123", PR__MDL__OPTIMIZATION), "\x73\160\x65\x65\x64\137\x74\x65\163\x74" => __("\123\160\x65\145\144\40\124\x65\163\x74", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\x6e\x5f\x6d\x61\x73\153" => __("\45\163\40\x63\x6f\151\156\163", PR__MDL__OPTIMIZATION), "\x73\x75\x62\163\x63\162\151\x70\164\x69\x6f\x6e\137\x70\x6c\141\x6e\163\x5f\x74\x69\x74\x6c\x65" => __("\123\165\x62\163\x63\x72\151\x70\x74\x69\157\156\40\x50\154\141\x6e\x73", PR__MDL__OPTIMIZATION)]); } else { $nsmgceoqaqogqmuw = __("\124\x68\145\162\x65\40\x69\x73\x20\156\157\164\40\x64\x61\x74\x61\x20\164\157\40\x73\x68\x6f\x77\x20\x79\157\165\x2c\40\x70\x6c\x65\x61\163\145\40\x72\x65\x66\x72\x65\163\x68\40\160\x61\147\145\40\157\162\x20\143\157\156\x74\x61\143\x74\40\x75\163\x2e", PR__MDL__OPTIMIZATION); } return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
