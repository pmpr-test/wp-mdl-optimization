<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27a0f7c0c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\154\x61\x6e\163"; const mkciamyomkiccoes = "\143\x6f\x69\156\163"; const owimkwkiwawmeicq = "\165\x73\141\147\x65\163"; const moamckowewogygog = "\x70\x75\162\143\x68\x61\163\x65\163"; const ikmkgmwegyasgqmo = "\x72\x65\x6d\157\x74\145\x5f\x61\x70\160\163"; const uysmymaeucegyiyw = "\145\170\x74\162\x61\137\143\157\x69\156\x73"; const emywgcsiygeskckg = "\x72\145\155\141\x69\x6e\x5f\143\x6f\151\x6e\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto owiguescmqyqukui; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto akyiiioycmgqyuok; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto iayguaeseyaemwkk; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); iayguaeseyaemwkk: goto ycomeuqeessamows; akyiiioycmgqyuok: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); ycomeuqeessamows: sqiyuasgusgawuoi: } gqycmyieayoegcsy: owiguescmqyqukui: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto seyygcwcaogkmaqe; } $yygmoeguaqyumuui = ["\x65\x78\x74\162\x61\163", "\163\165\x62\x73\x63\x72\151\x70\164\151\x6f\x6e\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto ukigmkeewuqomooc; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\x75\142\x73\143\162\151\x70\164\151\x6f\x6e\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto soqkewsayowwcmco; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto ciiyqsiswkcwsocm; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto ieoeeyieoskuyiyw; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); ieoeeyieoskuyiyw: goto ugyawwukegyoqmsq; ciiyqsiswkcwsocm: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); ugyawwukegyoqmsq: soqkewsayowwcmco: kwowggaooiyqawyq: } mcuoyseuwoueyaie: ukigmkeewuqomooc: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto wwgikwuigiiqsswq; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; wwgikwuigiiqsswq: mqacqosyicuiqwia: } guummoewucyeuiek: seyygcwcaogkmaqe: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\x79\x6e\143\40\x44\x61\164\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\x68\x65\x20\144\x61\x74\x61\x20\x61\x73\163\x6f\143\x69\x61\x74\145\144\40\x77\151\164\x68\40\x79\157\x75\x72\x20\x61\x63\143\x6f\x75\156\164\40\x69\163\40\165\160\144\141\164\x65\144\x20\167\x69\x74\150\40\x74\150\x65\x20\x73\145\x72\166\x65\162\x20\141\x74\40\x72\145\147\x75\x6c\x61\162\x20\x69\156\x74\145\x72\x76\141\x6c\163\x2e\x20\124\157\x20\x65\156\163\x75\x72\145\40\164\x68\x65\40\x6c\x61\164\x65\163\164\x20\x75\x70\144\141\164\x65\54\x20\171\x6f\x75\40\143\x61\x6e\x20\x75\x70\144\141\164\145\x20\x79\x6f\165\x72\40\x61\143\x63\157\x75\x6e\164\40\x64\141\x74\141\40\167\151\164\x68\40\164\150\x65\x20\x73\x65\x72\x76\x65\x72\x20\x6e\x6f\x77\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\x6f\160\164\55\163\x79\156\x63\x2d\x64\141\x74\141\x20\x70\x72\x2d\x62\x74\156\40\142\164\156\55\x70\162\x69\x6d\141\162\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\154\141\163\163" => "\167\x2d\x31\60\60\x20\160\x72\x2d\x62\x74\156\x20\x62\x74\x6e\55\141\143\x74\x69\x6f\156\40\x62\164\156\x2d\157\x75\x74\154\x69\x6e\145\x2d\x70\x72\151\155\141\x72\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto ykcmomsiayaymysm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto uugiuqkesegaamqw; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); uugiuqkesegaamqw: ykcmomsiayaymysm: $eymaoksggoskuikg = __("\x55\x6e\153\x6e\157\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\40\x63\x6f\x69\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto qoaawmmcqyacokws; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); qoaawmmcqyacokws: if ($ymyueyaumiqiuaqa <= 0) { goto uwyeycaywowwiquu; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\40\104\141\171", "\x25\163\40\104\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\154\141\x73\163" => "\x74\x65\170\x74\55\x73\x75\x63\x63\145\163\x73"]); goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\x70\x69\x72\x65\x64", PR__MDL__OPTIMIZATION), ["\143\154\141\163\163" => "\164\x65\x78\164\x2d\144\x61\x6e\x67\x65\x72"]); cwmuqmoeauqcewoy: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto eiecgqokmuekaesc; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\x6f\40\120\x75\x72\143\150\x61\163\x65", PR__MDL__OPTIMIZATION); goto ggsugekocmsukuci; eiecgqokmuekaesc: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); ggsugekocmsukuci: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\x75\142\163\x63\162\151\x70\x74\x69\157\x6e\x20\120\x6c\x61\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\x6c\141\x6e" => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\x73\143\162\x69\x70\x74\x69\x6f\x6e\40\120\154\x61\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\145\162\x69\157\144" => [Constants::qescuiwgsyuikume => __("\120\x6c\141\156\40\x50\145\162\x69\157\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\x65\155\141\x69\x6e\137\144\x61\171" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\141\151\x6e\151\x6e\x67\40\124\151\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\103\157\x75\x6e\164\x20\x6f\x66\40\x49\156\x69\x74\x69\141\154\40\103\x6f\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\x73\x65\x64\x5f\143\x6f\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x55\163\145\144\x20\x43\x6f\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\x6d\x61\151\x6e\137\143\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\122\x65\155\141\151\156\x20\x43\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\170\164\162\141\x20\103\157\151\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\164\145\x73\x74\x5f\x70\165\162\143\150\141\x73\x65\x5f\x63\x6f\x75\156\164" => [Constants::qescuiwgsyuikume => __("\114\141\x74\x65\x73\164\x20\120\165\162\143\x68\141\163\145\x20\x43\157\x75\156\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\x74\x65\163\x74\137\160\x75\162\x63\x68\141\x73\x65\x5f\144\141\x74\145" => [Constants::qescuiwgsyuikume => __("\114\141\x74\x65\x73\x74\x20\x50\165\162\x63\x68\141\163\x65\x20\104\141\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\x70\x69\x72\141\x74\151\157\x6e" => [Constants::qescuiwgsyuikume => __("\x45\170\160\151\162\145\x20\104\141\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\x69\x74\150\x6f\165\x74\40\x65\x78\x70\151\162\145\x20\144\x61\164\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\163\163" => "\164\145\x78\164\55\x73\165\143\x63\x65\x73\163"])], "\x63\157\151\156\x73\x5f\143\157\165\156\x74" => [Constants::qescuiwgsyuikume => __("\x41\x6c\154\x20\103\x6f\151\x6e\x73\40\x43\157\165\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\163\145\x64\137\143\157\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\125\163\x65\x64\40\103\157\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\155\x61\x69\156\x5f\143\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\141\151\156\40\x43\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\141\142\x6c\x65\137\141\164\x74\162\x73" => ["\143\154\141\163\163" => "\x6d\142\55\60\40\164\141\142\154\x65\40\164\x61\142\154\145\x2d\142\157\x72\x64\x65\162\x6c\145\x73\163"], "\164\x64\x5f\141\164\164\162\x73" => ["\x63\154\141\x73\163" => "\160\170\x2d\60\40\160\171\x2d\x32"], "\x6c\141\163\164\x5f\x74\144\x5f\141\x74\x74\162\163" => ["\143\154\x61\x73\x73" => "\160\170\x2d\60\40\160\171\55\x32\40\x66\x6f\x6e\164\55\167\145\151\147\150\x74\x2d\x62\157\x6c\144\40\x74\145\170\164\x2d\162\151\x67\x68\x74"]]); kcwgiwimgqesukqu: } ceosmkqgqgwsowwg: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto wicuauokauykwoeu; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); wicuauokauykwoeu: $qookweymeqawmcwo = ["\154\x69\163\164\x5f\x68\164\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\165\162\143\150\x61\163\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\162\164\x2f\x70\165\162\x63\x68\x61\x73\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\x69\163\x74\x5f\150\x74\155\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\163\141\147\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\160\x6f\162\164\x2f\165\163\x61\x67\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto gcecieuocqawmgci; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; gcecieuocqawmgci: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto gqeoaceyoiicoaec; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto msmmiaumiasmsiog; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; msmmiaumiasmsiog: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto oksqsucimimsswcg; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\x65\x77\x20\164\150\x65\40\x46\165\154\x6c\x20\122\x65\x70\157\162\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\147\x6d\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\137\x72\145\x70\157\x72\164"], $eeamcawaiqocomwy), ["\143\154\x61\x73\163" => "\160\162\x2d\x62\x74\156\40\142\164\156\x2d\160\x72\x69\155\141\x72\x79\40\142\164\156\55\x61\x63\x74\151\x6f\156"]); oksqsucimimsswcg: gqeoaceyoiicoaec: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto mieoguuqiwqioeqa; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto cciakcwuweqmcose; } uckusgwkoycmkeam: cciakcwuweqmcose: if (!$uymsgmyyeikucgae) { goto gscyiqmmegqmqcoe; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\165\163\141\x67\145", 0); gscyiqmmegqmqcoe: ikukqooiowqywyqo: } kkckyqmcyussauma: mieoguuqiwqioeqa: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto iomwkkieqcswkkaw; } $nsmgceoqaqogqmuw = __("\x54\x68\145\162\x65\40\x69\163\40\x6e\x6f\x74\40\144\x61\x74\141\x20\x74\157\40\x73\x68\157\167\x20\171\x6f\x75\54\x20\x70\x6c\x65\x61\163\145\40\x72\x65\x66\162\x65\x73\x68\40\x70\x61\x67\x65\x20\157\162\40\x63\157\156\164\x61\143\164\40\x75\163\x2e", PR__MDL__OPTIMIZATION); goto eussqkkimciywios; iomwkkieqcswkkaw: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\x6c\x61\156\137\151\x64")))) { goto igmawmwssyskqqag; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto gcqssckowmywoesw; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\165\x72\40\123\165\x62\x73\x63\162\x69\x70\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)]; goto eekkcooqswqouoei; gcqssckowmywoesw: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x63\x72\x69\x74\x69\143\141\154\x5f\143\163\163\x5f\165\163\x61\147\x65", "\163\x70\x65\x65\x64\137\164\x65\163\x74\x5f\x75\163\141\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto maguoggkqamaiuag; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto qosswumywsaeyqus; maguoggkqamaiuag: swicauyqusmgeccu: } qosswumywsaeyqus: if ($ycqsugugqomewkke) { goto icoiqskygugkgmkm; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\50\45\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\x6f\165\162\40\123\165\x62\163\x63\x72\151\160\x74\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto kocaieyauyiqmyiy; icoiqskygugkgmkm: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\x28\x25\163\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\157\x75\162\x20\x53\165\142\163\143\x72\x69\x70\x74\151\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\50\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\145\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; kocaieyauyiqmyiy: eekkcooqswqouoei: if (!$guacamgosccsckmq) { goto cuayqmasemsqsume; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); cuayqmasemsqsume: igmawmwssyskqqag: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\x65\x72\x76\151\x63\x65\x5f\x63\x6f\x73\164\163", ["\160\x6c\141\156\163" => $kekgkgqeyesmkywu, "\141\x63\x74\x69\x6f\156\x73" => ["\x63\x72\x69\x74\151\x63\141\x6c\137\143\163\163" => __("\103\x72\151\164\151\143\141\154\40\x43\123\123", PR__MDL__OPTIMIZATION), "\163\160\x65\x65\144\137\164\x65\163\164" => __("\123\x70\x65\145\144\x20\x54\x65\x73\164", PR__MDL__OPTIMIZATION)], "\143\x6f\151\x6e\137\155\x61\163\153" => __("\45\163\x20\143\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), "\163\165\x62\x73\x63\x72\x69\x70\164\x69\157\x6e\137\160\154\x61\156\163\x5f\164\x69\164\x6c\145" => __("\x53\x75\142\x73\x63\x72\x69\160\x74\151\157\x6e\x20\x50\x6c\141\x6e\163", PR__MDL__OPTIMIZATION)]); eussqkkimciywios: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
