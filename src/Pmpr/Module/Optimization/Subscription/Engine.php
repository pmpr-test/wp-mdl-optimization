<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f12a1764bb6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\154\x61\156\x73"; const mkciamyomkiccoes = "\x63\157\151\x6e\163"; const owimkwkiwawmeicq = "\165\x73\x61\x67\145\163"; const moamckowewogygog = "\x70\165\x72\143\150\141\163\x65\x73"; const ikmkgmwegyasgqmo = "\162\145\x6d\x6f\x74\x65\137\141\160\160\x73"; const uysmymaeucegyiyw = "\145\x78\x74\x72\141\137\x63\x6f\x69\156\x73"; const emywgcsiygeskckg = "\162\145\155\x61\151\x6e\x5f\x63\x6f\x69\156\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto gqycmyieayoegcsy; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto esokkakkumskkmiu; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto wyqueeskecameuks; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); wyqueeskecameuks: goto msiuqseowuumiwuo; esokkakkumskkmiu: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); msiuqseowuumiwuo: kikkkoqiumqoeiyy: } assoyoeukmqiucyq: gqycmyieayoegcsy: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto ciiyqsiswkcwsocm; } $yygmoeguaqyumuui = ["\x65\x78\164\x72\141\x73", "\163\165\x62\x73\143\x72\x69\160\x74\151\157\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto kwowggaooiyqawyq; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\165\142\x73\143\162\151\160\164\x69\x6f\156\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto mcuoyseuwoueyaie; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto guummoewucyeuiek; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto owiguescmqyqukui; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); owiguescmqyqukui: goto mqacqosyicuiqwia; guummoewucyeuiek: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); mqacqosyicuiqwia: mcuoyseuwoueyaie: ycomeuqeessamows: } akyiiioycmgqyuok: kwowggaooiyqawyq: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto ieoeeyieoskuyiyw; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; ieoeeyieoskuyiyw: iayguaeseyaemwkk: } sqiyuasgusgawuoi: ciiyqsiswkcwsocm: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\171\x6e\143\x20\x44\141\x74\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\x68\x65\40\144\x61\x74\x61\x20\x61\163\163\x6f\x63\x69\141\x74\x65\x64\40\167\x69\164\x68\x20\171\157\165\162\x20\141\143\143\x6f\165\156\x74\40\x69\163\40\x75\160\x64\x61\164\x65\x64\x20\x77\151\x74\150\40\164\150\145\x20\163\x65\x72\166\145\162\40\141\164\x20\162\145\147\165\154\x61\162\40\x69\156\164\145\x72\166\141\x6c\163\56\x20\x54\x6f\40\x65\x6e\163\x75\x72\145\40\x74\x68\145\40\154\x61\164\x65\x73\164\x20\x75\160\x64\x61\x74\145\x2c\x20\171\157\x75\x20\143\141\x6e\x20\165\160\x64\141\164\x65\x20\171\x6f\165\x72\x20\141\143\x63\x6f\x75\x6e\x74\x20\144\x61\164\x61\x20\167\151\164\x68\40\x74\x68\x65\x20\x73\x65\x72\166\145\162\40\156\157\167\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\x61\163\163" => "\x6f\x70\164\x2d\x73\171\156\143\x2d\x64\x61\x74\141\x20\x70\x72\55\x62\x74\x6e\x20\142\x74\156\55\160\x72\151\x6d\141\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\154\x61\163\x73" => "\167\55\x31\x30\x30\40\x70\x72\x2d\x62\x74\x6e\40\x62\164\156\x2d\x61\x63\x74\x69\x6f\x6e\x20\142\164\156\55\x6f\x75\164\x6c\151\156\x65\55\x70\162\151\x6d\141\162\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto soqkewsayowwcmco; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto ugyawwukegyoqmsq; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); ugyawwukegyoqmsq: soqkewsayowwcmco: $eymaoksggoskuikg = __("\125\156\153\x6e\x6f\x77\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\x73\40\143\x6f\151\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ukigmkeewuqomooc; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ukigmkeewuqomooc: if ($ymyueyaumiqiuaqa <= 0) { goto wwgikwuigiiqsswq; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\163\x20\x44\141\171", "\45\163\40\104\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\141\x73\x73" => "\164\x65\x78\164\55\163\x75\143\x63\145\163\163"]); goto seyygcwcaogkmaqe; wwgikwuigiiqsswq: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\x70\x69\162\x65\x64", PR__MDL__OPTIMIZATION), ["\143\x6c\141\x73\163" => "\x74\x65\x78\x74\55\144\141\x6e\147\x65\162"]); seyygcwcaogkmaqe: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto uugiuqkesegaamqw; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\x6f\40\x50\165\162\x63\150\x61\163\x65", PR__MDL__OPTIMIZATION); goto ykcmomsiayaymysm; uugiuqkesegaamqw: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); ykcmomsiayaymysm: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\165\x62\x73\x63\x72\x69\x70\164\151\x6f\x6e\x20\x50\154\x61\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\154\x61\156" => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\163\143\162\151\x70\x74\151\157\x6e\x20\x50\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\x72\x69\x6f\144" => [Constants::qescuiwgsyuikume => __("\120\154\141\x6e\40\120\x65\162\x69\x6f\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\145\155\141\151\156\137\x64\x61\171" => [Constants::qescuiwgsyuikume => __("\122\x65\155\x61\151\156\x69\156\x67\40\x54\x69\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\x6f\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\103\x6f\165\156\164\40\157\x66\40\x49\x6e\x69\164\151\x61\154\x20\x43\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\x73\145\x64\137\143\x6f\151\156\x73" => [Constants::qescuiwgsyuikume => __("\x55\163\x65\x64\40\x43\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\x65\x6d\141\151\156\x5f\x63\157\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\122\x65\x6d\141\x69\x6e\40\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\170\x74\x72\x61\x20\103\x6f\151\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\164\145\x73\164\x5f\x70\x75\x72\x63\x68\x61\163\145\137\143\157\165\156\x74" => [Constants::qescuiwgsyuikume => __("\x4c\141\x74\x65\163\x74\40\x50\x75\162\143\150\x61\163\x65\40\103\x6f\165\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\x61\x74\145\163\164\137\160\165\x72\143\x68\141\163\145\137\144\141\x74\x65" => [Constants::qescuiwgsyuikume => __("\x4c\141\164\145\x73\164\40\x50\165\162\x63\x68\x61\x73\145\40\x44\141\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\x78\x70\x69\x72\141\164\151\157\x6e" => [Constants::qescuiwgsyuikume => __("\x45\170\160\x69\x72\x65\40\104\141\164\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\164\150\157\x75\x74\x20\x65\170\x70\x69\162\145\x20\x64\141\x74\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\x73\163" => "\x74\x65\x78\164\55\163\165\x63\143\x65\163\163"])], "\x63\x6f\x69\x6e\x73\137\143\157\x75\x6e\x74" => [Constants::qescuiwgsyuikume => __("\101\154\x6c\x20\103\157\151\x6e\x73\x20\103\x6f\x75\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\x73\145\x64\x5f\143\157\x69\x6e\163" => [Constants::qescuiwgsyuikume => __("\x55\x73\145\144\40\x43\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\145\x6d\x61\x69\x6e\x5f\143\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\122\x65\x6d\x61\x69\x6e\x20\103\157\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\141\142\x6c\x65\137\141\164\x74\x72\x73" => ["\x63\154\141\163\163" => "\155\x62\55\x30\40\164\141\x62\x6c\145\x20\164\x61\142\154\x65\55\142\157\x72\144\145\162\154\145\x73\x73"], "\x74\144\137\x61\164\x74\162\163" => ["\143\154\141\x73\x73" => "\x70\170\55\x30\x20\160\x79\55\62"], "\154\x61\x73\164\x5f\x74\144\137\141\164\x74\162\163" => ["\143\x6c\141\x73\x73" => "\160\170\55\60\40\x70\x79\x2d\x32\x20\146\x6f\156\164\x2d\x77\145\151\x67\150\164\x2d\142\157\154\x64\x20\x74\x65\170\x74\55\x72\x69\147\x68\164"]]); uwyeycaywowwiquu: } qoaawmmcqyacokws: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto cwmuqmoeauqcewoy; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); cwmuqmoeauqcewoy: $qookweymeqawmcwo = ["\154\x69\x73\x74\x5f\150\164\155\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\165\162\143\150\141\x73\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\160\157\x72\164\x2f\160\165\x72\143\150\x61\163\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\x69\163\164\137\x68\164\x6d\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\163\141\147\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\x70\x6f\x72\164\57\165\x73\141\x67\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto eiecgqokmuekaesc; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; eiecgqokmuekaesc: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto kcwgiwimgqesukqu; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto ggsugekocmsukuci; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; ggsugekocmsukuci: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto ceosmkqgqgwsowwg; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\151\145\167\x20\x74\x68\x65\40\x46\x75\x6c\154\40\122\145\x70\x6f\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\x67\x6d\x65\156\x74" => "{$ymqmyyeuycgmigyo}\x5f\x72\145\160\x6f\x72\164"], $eeamcawaiqocomwy), ["\143\x6c\141\x73\163" => "\160\x72\55\x62\x74\156\40\142\x74\156\55\x70\x72\151\155\x61\162\171\40\x62\x74\x6e\55\141\x63\164\151\157\156"]); ceosmkqgqgwsowwg: kcwgiwimgqesukqu: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto kkckyqmcyussauma; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto msmmiaumiasmsiog; } oksqsucimimsswcg: msmmiaumiasmsiog: if (!$uymsgmyyeikucgae) { goto gqeoaceyoiicoaec; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\x75\163\141\x67\x65", 0); gqeoaceyoiicoaec: gcecieuocqawmgci: } wicuauokauykwoeu: kkckyqmcyussauma: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto kocaieyauyiqmyiy; } $nsmgceoqaqogqmuw = __("\x54\150\x65\162\145\x20\x69\163\x20\x6e\157\x74\40\x64\x61\x74\141\40\x74\x6f\x20\163\150\157\x77\x20\171\157\x75\54\x20\160\x6c\145\x61\x73\x65\x20\162\145\146\x72\x65\x73\150\x20\x70\141\147\x65\40\x6f\162\40\143\x6f\x6e\164\x61\x63\x74\x20\x75\163\x2e", PR__MDL__OPTIMIZATION); goto gcqssckowmywoesw; kocaieyauyiqmyiy: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\x61\x6e\x5f\151\x64")))) { goto icoiqskygugkgmkm; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto qosswumywsaeyqus; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\165\x72\x20\x53\165\x62\163\143\162\151\x70\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION)]; goto swicauyqusmgeccu; qosswumywsaeyqus: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x63\x72\151\x74\151\x63\x61\154\137\x63\163\x73\137\x75\163\x61\147\x65", "\163\x70\145\145\x64\x5f\164\145\x73\x74\x5f\165\163\141\147\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto uckusgwkoycmkeam; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto ikukqooiowqywyqo; uckusgwkoycmkeam: cciakcwuweqmcose: } ikukqooiowqywyqo: if ($ycqsugugqomewkke) { goto gscyiqmmegqmqcoe; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\x28\45\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\x59\x6f\165\x72\40\123\165\142\163\x63\162\151\160\164\151\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto mieoguuqiwqioeqa; gscyiqmmegqmqcoe: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\x25\163\x20\x28\x25\163\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\157\165\162\40\123\165\142\163\143\x72\x69\x70\x74\151\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\x73\x20\50\x25\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; mieoguuqiwqioeqa: swicauyqusmgeccu: if (!$guacamgosccsckmq) { goto maguoggkqamaiuag; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); maguoggkqamaiuag: icoiqskygugkgmkm: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\145\162\x76\x69\143\x65\x5f\x63\x6f\163\x74\x73", ["\160\154\141\156\x73" => $kekgkgqeyesmkywu, "\141\x63\x74\x69\x6f\x6e\163" => ["\x63\162\x69\164\x69\143\141\x6c\x5f\x63\163\163" => __("\x43\x72\x69\x74\151\x63\x61\154\40\x43\x53\123", PR__MDL__OPTIMIZATION), "\163\160\145\145\x64\137\164\145\163\x74" => __("\123\x70\x65\x65\x64\x20\124\145\x73\164", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\156\137\x6d\141\x73\153" => __("\45\163\x20\143\157\x69\x6e\163", PR__MDL__OPTIMIZATION), "\x73\x75\142\x73\143\x72\x69\x70\x74\x69\157\x6e\x5f\160\x6c\x61\x6e\163\137\x74\151\164\x6c\x65" => __("\x53\165\142\163\x63\x72\151\160\164\x69\157\156\40\120\x6c\x61\x6e\163", PR__MDL__OPTIMIZATION)]); gcqssckowmywoesw: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
