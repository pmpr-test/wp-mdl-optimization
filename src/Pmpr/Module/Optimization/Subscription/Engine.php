<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672f20b994df3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Container { const eeyiwgsusysqessu = "\x70\154\141\156\x73"; const mkciamyomkiccoes = "\x63\x6f\x69\156\x73"; const owimkwkiwawmeicq = "\x75\x73\141\x67\x65\x73"; const moamckowewogygog = "\160\x75\162\143\150\x61\x73\145\163"; const ikmkgmwegyasgqmo = "\x72\145\x6d\x6f\x74\145\137\141\160\x70\163"; const uysmymaeucegyiyw = "\145\x78\164\x72\141\137\x63\157\x69\x6e\163"; const emywgcsiygeskckg = "\x72\x65\x6d\141\x69\x6e\x5f\x63\x6f\x69\156\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw())) { $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); } else { if (self::eeyiwgsusysqessu === $uusmaiomayssaecw) { $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); } } } } return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (is_array($icwicymcioeyeyek) && $icwicymcioeyeyek) { $yygmoeguaqyumuui = ["\145\x78\164\x72\x61\x73", "\x73\x75\142\x73\x63\162\151\160\x74\151\157\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if ($suuagcecoyuweoqk) { $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\142\x73\x63\162\151\160\164\x69\157\x6e\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if ($qkasemkceamoceiy) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $cmaccwokqweqweqi = $yakcyegsoqusmiak->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, $sqeykgyoooqysmca), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $qkasemkceamoceiy)]); if (empty($cmaccwokqweqweqi)) { $yakcyegsoqusmiak->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); } else { $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if ($aasekyoqiwumiqom !== $wuegiysyymkmsuyi) { $yakcyegsoqusmiak->gssiscqyqsacmeca()->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); } } } } } $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if (!$gigyyisyuaacmwmq) { $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; } } } return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\x79\x6e\143\40\104\x61\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\145\40\x64\141\x74\x61\40\141\x73\x73\157\x63\151\x61\x74\x65\x64\40\x77\151\x74\150\x20\171\157\165\x72\40\x61\143\143\x6f\165\x6e\x74\x20\151\x73\40\x75\160\144\141\x74\x65\144\40\167\151\164\150\x20\x74\x68\145\x20\163\145\x72\166\145\x72\x20\x61\x74\40\x72\x65\x67\x75\x6c\141\x72\x20\151\x6e\x74\x65\162\166\141\x6c\163\56\40\124\x6f\x20\145\156\x73\165\x72\x65\40\x74\150\x65\x20\x6c\141\164\145\163\x74\x20\x75\160\x64\141\164\145\x2c\40\x79\x6f\x75\40\143\x61\x6e\40\165\160\144\141\x74\x65\x20\171\157\x75\x72\40\x61\143\143\157\x75\156\x74\x20\144\141\x74\x61\40\167\151\x74\x68\40\x74\x68\145\40\x73\145\x72\x76\145\x72\x20\x6e\157\x77\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\x61\163\x73" => "\160\x72\x2d\157\160\x74\55\x73\x79\x6e\143\x2d\144\x61\x74\x61\x20\160\162\55\x62\164\156\x20\x62\164\x6e\x2d\x70\162\x69\x6d\x61\x72\171", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\154\141\x73\163" => "\x77\55\x31\60\x30\40\x70\162\x2d\x62\164\156\x20\142\164\x6e\55\x61\143\164\151\157\156\x20\142\164\156\x2d\157\x75\x74\154\151\x6e\x65\55\x70\x72\151\155\x61\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$umwagewoweuckiso) { $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if ($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek)) { $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); } } $eymaoksggoskuikg = __("\x55\156\x6b\x6e\x6f\x77\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\x20\143\157\x69\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if ($wekousyuiguacggm) { $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); } if ($ymyueyaumiqiuaqa <= 0) { $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\x78\x70\x69\x72\x65\144", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\x73\163" => "\x74\145\x78\x74\x2d\x64\141\156\147\145\162"]); } else { $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\163\40\x44\141\171", "\45\163\40\104\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\x63\x6c\141\x73\x73" => "\164\x65\170\x74\55\163\165\143\x63\x65\x73\x73"]); } $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::kumuoysauoagaiiy)->yogqsokgsqemsuoq()]); if ($okmuwqcyiyiommaq) { $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->waecsyqmwascmqoa($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->waecsyqmwascmqoa($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); } else { $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\x6f\40\120\165\x72\x63\150\x61\163\145", PR__MDL__OPTIMIZATION); } $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\165\x62\x73\143\162\x69\160\x74\x69\x6f\156\x20\x50\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\154\x61\x6e" => [Constants::qescuiwgsyuikume => __("\123\165\x62\x73\143\x72\x69\x70\x74\x69\x6f\x6e\40\120\154\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\145\162\x69\157\144" => [Constants::qescuiwgsyuikume => __("\120\154\141\x6e\40\x50\x65\162\151\157\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\155\x61\151\156\137\x64\141\x79" => [Constants::qescuiwgsyuikume => __("\x52\x65\155\141\x69\x6e\x69\156\147\40\124\151\x6d\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\x6f\151\156\x73" => [Constants::qescuiwgsyuikume => __("\103\x6f\x75\x6e\x74\x20\x6f\146\x20\111\156\x69\164\151\x61\x6c\x20\103\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\x73\145\144\x5f\143\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\125\x73\x65\x64\40\x43\157\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\162\145\x6d\x61\x69\156\137\x63\157\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\122\x65\x6d\141\x69\156\x20\103\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\170\x74\162\141\40\x43\x6f\151\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\141\164\145\x73\164\137\160\165\x72\143\150\x61\x73\x65\x5f\x63\x6f\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\114\x61\164\x65\x73\x74\40\120\165\162\x63\x68\x61\163\x65\x20\x43\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\164\145\x73\164\137\x70\x75\162\143\x68\x61\x73\x65\137\x64\x61\164\x65" => [Constants::qescuiwgsyuikume => __("\x4c\x61\164\145\163\164\x20\x50\165\x72\x63\150\x61\x73\x65\40\104\141\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\x65\x78\160\x69\x72\x61\x74\x69\157\156" => [Constants::qescuiwgsyuikume => __("\105\170\160\x69\162\145\x20\x44\x61\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\151\x74\150\x6f\165\x74\x20\145\170\160\x69\x72\x65\40\144\x61\x74\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\163\x73" => "\164\x65\x78\x74\x2d\x73\x75\x63\x63\145\x73\x73"])], "\143\157\x69\x6e\163\x5f\x63\157\165\x6e\164" => [Constants::qescuiwgsyuikume => __("\101\x6c\154\40\103\x6f\x69\156\163\x20\x43\x6f\x75\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\163\145\x64\x5f\143\157\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\x55\x73\x65\x64\x20\x43\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\x6d\141\151\156\x5f\x63\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\x61\151\156\x20\x43\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\141\x62\154\x65\x5f\x61\164\164\x72\x73" => ["\x63\x6c\x61\x73\x73" => "\x6d\142\x2d\x30\x20\164\x61\142\x6c\x65\x20\164\x61\142\x6c\x65\x2d\142\157\x72\x64\x65\x72\154\x65\x73\x73"], "\164\144\137\141\x74\164\x72\163" => ["\143\154\x61\163\x73" => "\x70\x78\55\x30\x20\160\171\x2d\x32"], "\154\141\x73\x74\x5f\x74\x64\137\141\164\x74\162\x73" => ["\143\154\x61\163\163" => "\160\170\x2d\60\x20\x70\171\55\62\40\146\157\156\x74\x2d\x77\145\151\x67\150\164\55\142\157\x6c\144\x20\164\x65\170\164\55\162\x69\x67\x68\164"]]); } return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if ($yakcyegsoqusmiak->iekyeyicoyyawomk()->ygmcsmegcysyeoss() === 0 && $this->aiamukikcuowsiku()) { Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); } $qookweymeqawmcwo = ["\x6c\x69\163\x74\x5f\x68\164\x6d\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\165\x72\143\150\x61\163\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\x72\164\57\160\165\x72\x63\150\x61\163\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\x74\137\x68\164\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\x61\147\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\160\157\x72\164\57\x75\x73\x61\x67\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis)) { $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; } return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu(Model $meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq, Constants::ckmqoekmugkggeym); if ($gikeqowakccckkqe instanceof Index) { $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->cueaickeeoiwayou()]; if ($scsaeueqgyymsyei) { $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; } $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if ($scsaeueqgyymsyei) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\x65\x77\40\x74\150\x65\40\x46\x75\154\154\40\x52\x65\x70\157\162\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\x67\x6d\x65\156\164" => "{$ymqmyyeuycgmigyo}\137\x72\x65\160\157\x72\164"], $eeamcawaiqocomwy), ["\x63\x6c\141\x73\x73" => "\160\x72\x2d\x62\164\156\x20\x62\164\156\55\x70\162\x69\x6d\x61\x72\x79\40\x62\164\156\x2d\x61\143\164\151\x6f\x6e"]); } } return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; break; } if ($uymsgmyyeikucgae) { $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\165\x73\141\x67\145", 0); } } } return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if ($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\x6c\141\156\x5f\151\144"))) { $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\143\162\x69\164\151\x63\141\x6c\137\x63\x73\163\x5f\165\163\x61\147\145", "\x73\160\145\x65\144\137\164\145\163\x74\x5f\165\x73\x61\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw]) { $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; break; } } if ($ycqsugugqomewkke) { $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\x25\163\x20\50\x25\163\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\x6f\x75\x72\x20\123\165\x62\163\143\x72\x69\x70\x74\151\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\x28\x25\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; } else { $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\x73\x20\50\45\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\x59\x6f\x75\x72\x20\123\x75\x62\163\143\x72\151\160\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; } } else { $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\x59\157\x75\162\40\123\x75\142\163\x63\x72\151\160\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION)]; } if ($guacamgosccsckmq) { array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); } } $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\145\x72\166\151\143\145\137\143\x6f\163\164\163", ["\160\154\141\x6e\x73" => $kekgkgqeyesmkywu, "\141\143\164\x69\x6f\x6e\163" => ["\x63\162\x69\x74\x69\143\x61\x6c\137\x63\163\x73" => __("\103\x72\x69\x74\x69\143\141\154\x20\x43\123\x53", PR__MDL__OPTIMIZATION), "\163\x70\145\145\x64\137\x74\x65\x73\x74" => __("\x53\160\x65\x65\x64\40\124\x65\163\x74", PR__MDL__OPTIMIZATION)], "\143\157\151\156\x5f\x6d\x61\163\x6b" => __("\x25\163\40\143\157\151\x6e\163", PR__MDL__OPTIMIZATION), "\x73\x75\x62\163\x63\x72\151\x70\x74\151\157\x6e\137\x70\x6c\x61\x6e\x73\x5f\164\x69\164\154\x65" => __("\x53\x75\x62\x73\143\162\151\160\164\x69\x6f\x6e\40\x50\154\x61\x6e\x73", PR__MDL__OPTIMIZATION)]); } else { $nsmgceoqaqogqmuw = __("\124\x68\145\x72\x65\x20\151\163\40\x6e\x6f\164\x20\x64\x61\x74\x61\40\x74\x6f\x20\x73\150\157\x77\40\171\x6f\165\x2c\x20\160\x6c\x65\x61\x73\145\x20\162\145\146\162\145\x73\150\40\x70\141\x67\145\40\x6f\x72\40\143\x6f\156\164\141\143\164\x20\165\163\56", PR__MDL__OPTIMIZATION); } return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
