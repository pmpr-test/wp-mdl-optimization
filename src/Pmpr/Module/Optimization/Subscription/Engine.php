<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e86b3a376             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\154\x61\x6e\163"; const mkciamyomkiccoes = "\143\157\151\156\x73"; const owimkwkiwawmeicq = "\x75\x73\x61\x67\145\x73"; const moamckowewogygog = "\x70\x75\x72\143\150\x61\163\x65\163"; const ikmkgmwegyasgqmo = "\x72\x65\x6d\157\164\x65\x5f\141\x70\x70\163"; const uysmymaeucegyiyw = "\145\x78\x74\x72\141\137\x63\x6f\151\x6e\163"; const emywgcsiygeskckg = "\x72\145\155\x61\151\156\x5f\143\x6f\x69\x6e\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto owiguescmqyqukui; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto akyiiioycmgqyuok; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto iayguaeseyaemwkk; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); iayguaeseyaemwkk: goto ycomeuqeessamows; akyiiioycmgqyuok: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); ycomeuqeessamows: sqiyuasgusgawuoi: } gqycmyieayoegcsy: owiguescmqyqukui: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto seyygcwcaogkmaqe; } $yygmoeguaqyumuui = ["\x65\170\164\162\x61\163", "\163\165\142\x73\x63\x72\151\160\x74\x69\x6f\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto ukigmkeewuqomooc; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\142\x73\x63\162\151\x70\164\x69\x6f\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto soqkewsayowwcmco; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto ciiyqsiswkcwsocm; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto ieoeeyieoskuyiyw; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); ieoeeyieoskuyiyw: goto ugyawwukegyoqmsq; ciiyqsiswkcwsocm: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); ugyawwukegyoqmsq: soqkewsayowwcmco: kwowggaooiyqawyq: } mcuoyseuwoueyaie: ukigmkeewuqomooc: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto wwgikwuigiiqsswq; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; wwgikwuigiiqsswq: mqacqosyicuiqwia: } guummoewucyeuiek: seyygcwcaogkmaqe: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\x6e\x63\40\x44\x61\x74\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\x68\x65\40\144\141\x74\x61\40\141\163\x73\157\143\151\141\x74\145\x64\40\167\x69\164\x68\x20\171\157\165\162\40\141\x63\143\x6f\165\x6e\164\x20\151\163\40\165\160\144\141\x74\x65\x64\40\167\151\x74\150\x20\164\x68\x65\40\x73\x65\162\x76\x65\x72\x20\141\x74\x20\162\145\x67\165\x6c\x61\162\40\151\156\164\x65\x72\166\141\154\163\56\x20\x54\x6f\x20\145\156\163\x75\162\x65\x20\x74\x68\145\40\154\x61\x74\x65\163\164\40\165\x70\144\x61\x74\x65\x2c\x20\171\157\x75\40\x63\141\x6e\40\x75\160\x64\141\x74\x65\x20\171\x6f\x75\162\40\x61\x63\143\x6f\x75\156\164\40\x64\x61\x74\x61\x20\167\x69\164\x68\40\164\150\145\40\x73\145\162\x76\145\162\x20\156\x6f\x77\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\x61\163\x73" => "\157\x70\164\55\x73\x79\x6e\143\x2d\x64\x61\164\x61\x20\x70\162\55\x62\164\x6e\x20\x62\x74\x6e\x2d\160\162\x69\155\x61\162\171", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\x6c\x61\163\163" => "\167\55\x31\60\60\x20\x70\162\x2d\x62\x74\156\40\x62\164\156\x2d\141\143\164\151\x6f\x6e\40\142\x74\x6e\55\157\x75\164\154\x69\156\145\55\x70\x72\x69\x6d\x61\x72\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto ykcmomsiayaymysm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto uugiuqkesegaamqw; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); uugiuqkesegaamqw: ykcmomsiayaymysm: $eymaoksggoskuikg = __("\x55\x6e\x6b\x6e\x6f\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\x73\40\x63\157\x69\x6e\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto qoaawmmcqyacokws; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); qoaawmmcqyacokws: if ($ymyueyaumiqiuaqa <= 0) { goto uwyeycaywowwiquu; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\40\x44\141\x79", "\x25\163\40\104\141\x79\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\x61\163\x73" => "\x74\x65\x78\164\55\x73\x75\143\143\145\163\x73"]); goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\x70\151\162\x65\x64", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\163\x73" => "\164\x65\x78\x74\x2d\144\x61\x6e\147\145\162"]); cwmuqmoeauqcewoy: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto eiecgqokmuekaesc; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\x20\x50\165\162\x63\150\x61\x73\145", PR__MDL__OPTIMIZATION); goto ggsugekocmsukuci; eiecgqokmuekaesc: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); ggsugekocmsukuci: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\x73\143\162\151\160\164\151\x6f\156\40\x50\154\x61\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\154\141\x6e" => [Constants::qescuiwgsyuikume => __("\123\165\142\x73\x63\162\151\160\x74\151\x6f\156\40\120\x6c\x61\x6e", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\145\x72\x69\x6f\x64" => [Constants::qescuiwgsyuikume => __("\120\154\141\156\x20\x50\145\162\x69\x6f\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\x6d\x61\x69\x6e\x5f\144\x61\x79" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\141\x69\156\x69\156\147\x20\x54\x69\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\157\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\x43\x6f\165\156\164\40\157\x66\40\111\156\x69\x74\151\141\154\40\x43\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\x73\x65\x64\137\143\x6f\151\156\163" => [Constants::qescuiwgsyuikume => __("\125\163\x65\144\x20\x43\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\x6d\141\151\x6e\x5f\143\x6f\151\156\x73" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\x61\151\x6e\40\103\x6f\x69\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\x78\164\x72\141\40\x43\x6f\x69\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\x74\145\x73\x74\137\x70\165\162\143\x68\141\163\x65\x5f\x63\157\x75\156\164" => [Constants::qescuiwgsyuikume => __("\x4c\x61\164\145\x73\x74\40\120\x75\x72\143\x68\x61\163\x65\40\x43\157\165\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\164\145\x73\x74\x5f\x70\165\162\143\150\141\163\145\x5f\x64\141\164\145" => [Constants::qescuiwgsyuikume => __("\114\141\164\x65\x73\164\40\120\x75\x72\143\x68\x61\x73\145\40\x44\141\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\x78\x70\151\x72\141\164\x69\x6f\156" => [Constants::qescuiwgsyuikume => __("\x45\170\x70\x69\x72\145\x20\x44\x61\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\x69\x74\150\x6f\165\164\x20\145\170\x70\151\x72\x65\40\144\x61\x74\145", PR__MDL__OPTIMIZATION), ["\x63\154\141\x73\163" => "\164\145\170\164\55\163\x75\143\x63\145\163\163"])], "\143\157\x69\156\163\x5f\143\x6f\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\101\154\154\x20\103\157\x69\156\163\40\x43\x6f\165\156\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\163\145\144\x5f\x63\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\125\163\145\x64\40\103\x6f\x69\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\x6d\x61\x69\156\x5f\x63\157\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\122\x65\155\141\151\156\x20\x43\x6f\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\x61\x62\x6c\145\x5f\x61\x74\164\x72\x73" => ["\x63\154\x61\163\163" => "\155\x62\55\x30\x20\x74\141\142\x6c\x65\x20\x74\x61\142\154\x65\55\x62\x6f\162\x64\145\162\x6c\x65\x73\163"], "\164\144\137\x61\x74\x74\162\163" => ["\x63\x6c\141\x73\163" => "\160\x78\55\x30\40\x70\x79\x2d\x32"], "\154\x61\163\164\x5f\164\x64\137\x61\164\x74\x72\x73" => ["\143\154\141\x73\163" => "\x70\170\x2d\x30\x20\x70\x79\x2d\x32\x20\x66\x6f\x6e\164\x2d\167\x65\x69\x67\x68\164\55\142\157\154\x64\40\x74\145\170\x74\55\162\151\147\150\164"]]); kcwgiwimgqesukqu: } ceosmkqgqgwsowwg: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto wicuauokauykwoeu; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); wicuauokauykwoeu: $qookweymeqawmcwo = ["\154\151\163\164\137\x68\164\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\162\143\150\141\x73\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\160\x6f\x72\x74\x2f\160\165\162\143\x68\141\x73\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\164\137\150\x74\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\x61\147\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\x70\157\162\164\x2f\165\x73\141\147\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto gcecieuocqawmgci; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; gcecieuocqawmgci: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto gqeoaceyoiicoaec; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto msmmiaumiasmsiog; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; msmmiaumiasmsiog: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto oksqsucimimsswcg; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\x69\145\x77\x20\x74\x68\145\x20\106\165\x6c\x6c\40\x52\145\x70\x6f\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\x67\x6d\x65\x6e\x74" => "{$ymqmyyeuycgmigyo}\x5f\162\x65\160\x6f\x72\x74"], $eeamcawaiqocomwy), ["\143\154\x61\x73\163" => "\x70\x72\55\x62\x74\156\x20\x62\x74\156\x2d\x70\162\151\x6d\141\x72\x79\40\142\164\x6e\x2d\x61\143\x74\x69\x6f\156"]); oksqsucimimsswcg: gqeoaceyoiicoaec: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto mieoguuqiwqioeqa; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto cciakcwuweqmcose; } uckusgwkoycmkeam: cciakcwuweqmcose: if (!$uymsgmyyeikucgae) { goto gscyiqmmegqmqcoe; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\x75\x73\141\x67\x65", 0); gscyiqmmegqmqcoe: ikukqooiowqywyqo: } kkckyqmcyussauma: mieoguuqiwqioeqa: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto iomwkkieqcswkkaw; } $nsmgceoqaqogqmuw = __("\124\150\145\x72\x65\40\151\163\40\x6e\x6f\164\x20\144\x61\x74\x61\x20\x74\x6f\40\x73\150\157\x77\x20\171\x6f\x75\54\40\x70\x6c\145\x61\163\x65\40\x72\145\146\162\145\x73\x68\40\x70\x61\x67\x65\40\x6f\162\x20\143\157\156\x74\141\x63\x74\40\x75\x73\56", PR__MDL__OPTIMIZATION); goto eussqkkimciywios; iomwkkieqcswkkaw: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\x61\x6e\x5f\151\144")))) { goto igmawmwssyskqqag; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto gcqssckowmywoesw; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\157\165\162\40\123\165\x62\163\143\x72\x69\160\164\x69\157\156", PR__MDL__OPTIMIZATION)]; goto eekkcooqswqouoei; gcqssckowmywoesw: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\143\x72\x69\x74\x69\x63\x61\154\x5f\143\x73\163\137\165\x73\x61\147\x65", "\x73\160\x65\145\x64\x5f\x74\x65\163\x74\x5f\165\x73\x61\147\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto maguoggkqamaiuag; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto qosswumywsaeyqus; maguoggkqamaiuag: swicauyqusmgeccu: } qosswumywsaeyqus: if ($ycqsugugqomewkke) { goto icoiqskygugkgmkm; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\163\40\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\x6f\165\x72\40\x53\x75\x62\163\x63\162\151\160\x74\151\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto kocaieyauyiqmyiy; icoiqskygugkgmkm: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\163\40\x28\x25\163\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\x6f\x75\162\x20\x53\165\x62\x73\143\x72\x69\160\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\x20\x28\45\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\145\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; kocaieyauyiqmyiy: eekkcooqswqouoei: if (!$guacamgosccsckmq) { goto cuayqmasemsqsume; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); cuayqmasemsqsume: igmawmwssyskqqag: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\163\x65\x72\x76\x69\x63\x65\137\143\x6f\163\x74\163", ["\x70\154\141\156\x73" => $kekgkgqeyesmkywu, "\x61\143\x74\x69\x6f\x6e\163" => ["\x63\x72\151\164\x69\143\141\154\137\143\x73\163" => __("\103\x72\151\x74\x69\x63\x61\154\x20\103\123\x53", PR__MDL__OPTIMIZATION), "\x73\x70\145\145\144\x5f\164\x65\x73\164" => __("\123\160\x65\x65\144\40\x54\145\x73\164", PR__MDL__OPTIMIZATION)], "\143\x6f\x69\x6e\x5f\x6d\x61\163\x6b" => __("\45\163\x20\x63\157\151\x6e\163", PR__MDL__OPTIMIZATION), "\x73\165\142\163\x63\162\x69\x70\x74\x69\157\156\137\160\x6c\x61\156\x73\137\x74\151\164\154\145" => __("\x53\165\x62\x73\x63\x72\x69\x70\x74\x69\157\x6e\40\120\154\x61\x6e\x73", PR__MDL__OPTIMIZATION)]); eussqkkimciywios: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
