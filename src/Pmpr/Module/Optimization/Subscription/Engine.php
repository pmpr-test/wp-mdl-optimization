<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7b77183e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\x6c\141\x6e\163"; const mkciamyomkiccoes = "\143\x6f\151\x6e\163"; const owimkwkiwawmeicq = "\x75\x73\x61\147\145\x73"; const moamckowewogygog = "\160\165\162\x63\150\141\x73\x65\163"; const ikmkgmwegyasgqmo = "\x72\x65\x6d\157\x74\x65\x5f\x61\x70\160\x73"; const uysmymaeucegyiyw = "\145\x78\164\x72\x61\x5f\x63\157\x69\156\x73"; const emywgcsiygeskckg = "\x72\x65\x6d\x61\151\156\137\143\x6f\151\156\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto owiguescmqyqukui; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto akyiiioycmgqyuok; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto iayguaeseyaemwkk; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); iayguaeseyaemwkk: goto ycomeuqeessamows; akyiiioycmgqyuok: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); ycomeuqeessamows: sqiyuasgusgawuoi: } gqycmyieayoegcsy: owiguescmqyqukui: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto seyygcwcaogkmaqe; } $yygmoeguaqyumuui = ["\145\170\x74\x72\x61\163", "\x73\x75\142\163\143\162\151\160\164\x69\x6f\x6e\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto ukigmkeewuqomooc; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\x62\x73\x63\x72\151\x70\x74\151\157\x6e\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto soqkewsayowwcmco; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto ciiyqsiswkcwsocm; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto ieoeeyieoskuyiyw; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); ieoeeyieoskuyiyw: goto ugyawwukegyoqmsq; ciiyqsiswkcwsocm: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); ugyawwukegyoqmsq: soqkewsayowwcmco: kwowggaooiyqawyq: } mcuoyseuwoueyaie: ukigmkeewuqomooc: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto wwgikwuigiiqsswq; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; wwgikwuigiiqsswq: mqacqosyicuiqwia: } guummoewucyeuiek: seyygcwcaogkmaqe: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\143\x20\104\141\164\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\x68\x65\x20\x64\141\x74\141\40\141\x73\x73\157\143\151\x61\164\x65\x64\40\x77\151\x74\150\x20\x79\x6f\165\x72\x20\141\143\x63\x6f\x75\156\x74\40\151\163\x20\165\x70\144\141\164\x65\x64\40\x77\x69\x74\x68\x20\164\150\x65\x20\163\x65\x72\166\145\x72\40\x61\164\x20\162\145\147\x75\154\x61\162\x20\x69\156\x74\x65\162\166\141\154\163\56\x20\x54\x6f\40\145\x6e\163\165\162\145\40\x74\x68\x65\40\154\141\x74\145\163\164\x20\165\160\144\141\x74\x65\54\x20\171\157\165\40\143\x61\156\40\165\160\x64\141\x74\x65\40\x79\157\x75\162\40\141\143\143\157\x75\156\164\40\144\141\164\x61\x20\167\151\164\150\x20\164\x68\x65\x20\x73\x65\162\166\x65\162\x20\x6e\157\167\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\x73\163" => "\x6f\160\164\x2d\163\171\156\143\55\x64\x61\x74\141\40\x70\x72\55\142\164\x6e\40\x62\x74\x6e\x2d\x70\162\151\155\141\162\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\163\163" => "\x77\55\x31\x30\60\x20\x70\x72\x2d\x62\x74\x6e\40\x62\x74\156\x2d\141\143\x74\151\x6f\156\40\142\164\x6e\55\x6f\165\x74\x6c\151\156\145\55\x70\162\151\x6d\x61\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto ykcmomsiayaymysm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto uugiuqkesegaamqw; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); uugiuqkesegaamqw: ykcmomsiayaymysm: $eymaoksggoskuikg = __("\x55\x6e\x6b\156\157\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\163\x20\x63\x6f\x69\156\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto qoaawmmcqyacokws; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); qoaawmmcqyacokws: if ($ymyueyaumiqiuaqa <= 0) { goto uwyeycaywowwiquu; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\x73\40\x44\x61\x79", "\45\163\x20\x44\x61\x79\163", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\154\141\163\x73" => "\x74\x65\170\164\55\x73\165\x63\x63\145\163\x73"]); goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\x70\151\162\x65\144", PR__MDL__OPTIMIZATION), ["\143\x6c\141\x73\163" => "\x74\145\170\164\55\x64\x61\x6e\147\x65\162"]); cwmuqmoeauqcewoy: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto eiecgqokmuekaesc; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\157\x20\x50\x75\162\x63\150\141\163\145", PR__MDL__OPTIMIZATION); goto ggsugekocmsukuci; eiecgqokmuekaesc: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); ggsugekocmsukuci: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\x75\142\x73\143\162\151\x70\x74\x69\x6f\x6e\x20\x50\x6c\x61\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\x6c\141\156" => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\x73\x63\x72\151\160\x74\x69\x6f\x6e\x20\x50\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\x65\x72\x69\x6f\x64" => [Constants::qescuiwgsyuikume => __("\x50\x6c\141\156\x20\120\x65\162\151\157\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\x6d\141\x69\x6e\137\144\x61\171" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\141\x69\156\x69\x6e\x67\40\x54\151\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\103\157\x75\x6e\x74\x20\x6f\146\40\111\156\151\x74\x69\141\x6c\x20\103\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\163\145\x64\x5f\x63\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\125\x73\145\x64\x20\103\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\155\x61\151\156\x5f\143\x6f\151\156\x73" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\141\x69\x6e\x20\103\157\151\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\170\x74\162\141\40\x43\157\x69\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\x74\x65\163\164\x5f\x70\x75\162\143\x68\x61\x73\x65\137\x63\x6f\165\x6e\164" => [Constants::qescuiwgsyuikume => __("\x4c\141\164\x65\163\164\x20\120\x75\162\x63\x68\x61\163\145\40\103\157\165\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\x6c\141\164\x65\163\x74\137\160\165\x72\x63\x68\141\163\145\137\x64\141\x74\x65" => [Constants::qescuiwgsyuikume => __("\x4c\x61\164\145\163\x74\x20\120\x75\162\x63\x68\x61\x73\x65\40\104\141\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\160\x69\162\141\x74\x69\x6f\x6e" => [Constants::qescuiwgsyuikume => __("\105\x78\160\151\162\x65\x20\x44\141\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\151\164\150\x6f\165\x74\40\x65\x78\160\x69\x72\x65\40\x64\141\x74\145", PR__MDL__OPTIMIZATION), ["\x63\154\x61\163\163" => "\x74\x65\170\164\x2d\163\165\x63\143\x65\x73\x73"])], "\143\x6f\x69\x6e\163\x5f\143\x6f\x75\156\164" => [Constants::qescuiwgsyuikume => __("\x41\154\154\x20\x43\x6f\x69\156\163\x20\103\157\x75\156\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\163\x65\x64\x5f\x63\x6f\x69\156\163" => [Constants::qescuiwgsyuikume => __("\125\x73\x65\144\40\x43\157\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\145\155\141\x69\x6e\137\143\x6f\x69\156\163" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\x61\x69\x6e\x20\103\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\x61\142\x6c\x65\x5f\141\164\x74\162\x73" => ["\x63\x6c\141\163\163" => "\155\142\x2d\60\x20\x74\x61\142\x6c\145\x20\x74\141\x62\154\x65\55\x62\157\x72\144\x65\162\154\145\163\x73"], "\164\144\137\141\x74\x74\x72\x73" => ["\x63\x6c\x61\x73\163" => "\160\x78\55\x30\40\160\x79\x2d\x32"], "\x6c\141\x73\x74\137\164\x64\x5f\x61\x74\x74\x72\163" => ["\x63\x6c\x61\x73\x73" => "\160\170\55\60\40\x70\171\55\62\x20\146\x6f\x6e\164\55\x77\145\151\147\150\164\55\142\157\154\144\x20\164\x65\170\164\x2d\162\151\x67\x68\164"]]); kcwgiwimgqesukqu: } ceosmkqgqgwsowwg: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto wicuauokauykwoeu; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); wicuauokauykwoeu: $qookweymeqawmcwo = ["\154\x69\163\164\x5f\150\x74\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\162\143\x68\x61\163\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\x72\164\x2f\160\165\x72\143\x68\x61\163\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\x69\163\164\x5f\150\164\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\163\x61\x67\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\x70\x6f\x72\x74\57\x75\163\x61\x67\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto gcecieuocqawmgci; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; gcecieuocqawmgci: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto gqeoaceyoiicoaec; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto msmmiaumiasmsiog; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; msmmiaumiasmsiog: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto oksqsucimimsswcg; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\x69\x65\167\x20\x74\150\145\x20\106\165\x6c\154\40\x52\145\160\x6f\x72\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\147\x6d\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\137\162\145\x70\157\x72\164"], $eeamcawaiqocomwy), ["\143\x6c\x61\x73\163" => "\160\162\55\x62\x74\156\x20\x62\164\156\x2d\160\162\x69\155\141\x72\x79\40\142\x74\x6e\x2d\141\143\x74\x69\x6f\156"]); oksqsucimimsswcg: gqeoaceyoiicoaec: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto mieoguuqiwqioeqa; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto cciakcwuweqmcose; } uckusgwkoycmkeam: cciakcwuweqmcose: if (!$uymsgmyyeikucgae) { goto gscyiqmmegqmqcoe; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\165\163\141\147\x65", 0); gscyiqmmegqmqcoe: ikukqooiowqywyqo: } kkckyqmcyussauma: mieoguuqiwqioeqa: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto iomwkkieqcswkkaw; } $nsmgceoqaqogqmuw = __("\x54\x68\x65\x72\145\x20\x69\x73\x20\156\157\164\40\144\x61\x74\141\x20\164\157\x20\163\x68\157\167\40\x79\157\165\54\x20\x70\x6c\x65\141\163\x65\x20\x72\145\x66\162\145\163\150\x20\160\141\147\x65\x20\157\x72\40\143\157\x6e\x74\141\x63\x74\40\x75\163\x2e", PR__MDL__OPTIMIZATION); goto eussqkkimciywios; iomwkkieqcswkkaw: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\141\156\137\x69\x64")))) { goto igmawmwssyskqqag; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto gcqssckowmywoesw; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\165\162\x20\123\x75\142\163\143\x72\151\x70\x74\151\157\x6e", PR__MDL__OPTIMIZATION)]; goto eekkcooqswqouoei; gcqssckowmywoesw: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x63\162\x69\x74\x69\143\x61\154\x5f\x63\163\x73\137\165\163\141\x67\145", "\x73\x70\145\145\x64\137\x74\145\163\164\x5f\x75\163\141\147\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto maguoggkqamaiuag; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto qosswumywsaeyqus; maguoggkqamaiuag: swicauyqusmgeccu: } qosswumywsaeyqus: if ($ycqsugugqomewkke) { goto icoiqskygugkgmkm; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\40\x28\x25\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\157\x75\x72\40\123\165\x62\x73\143\162\151\x70\x74\x69\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto kocaieyauyiqmyiy; icoiqskygugkgmkm: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\x28\45\163\51", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\157\x75\162\40\x53\165\x62\163\x63\x72\x69\x70\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\163\40\50\x25\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; kocaieyauyiqmyiy: eekkcooqswqouoei: if (!$guacamgosccsckmq) { goto cuayqmasemsqsume; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); cuayqmasemsqsume: igmawmwssyskqqag: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\145\x72\166\151\143\145\x5f\143\157\163\x74\x73", ["\160\154\x61\156\x73" => $kekgkgqeyesmkywu, "\x61\x63\x74\x69\157\x6e\x73" => ["\143\x72\151\164\151\143\141\154\137\143\x73\163" => __("\x43\x72\151\x74\151\143\141\x6c\40\103\123\x53", PR__MDL__OPTIMIZATION), "\x73\x70\x65\x65\144\137\164\145\x73\x74" => __("\123\x70\145\x65\x64\x20\x54\145\x73\164", PR__MDL__OPTIMIZATION)], "\143\157\x69\x6e\x5f\x6d\141\x73\153" => __("\45\163\40\x63\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), "\163\x75\142\163\x63\x72\x69\160\164\x69\157\156\137\160\154\141\x6e\163\x5f\x74\x69\164\154\x65" => __("\123\x75\142\x73\x63\162\x69\160\x74\x69\157\156\x20\120\x6c\x61\x6e\163", PR__MDL__OPTIMIZATION)]); eussqkkimciywios: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
