<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b472f16c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\154\x61\x6e\163"; const mkciamyomkiccoes = "\x63\x6f\x69\156\x73"; const owimkwkiwawmeicq = "\165\163\141\147\145\x73"; const moamckowewogygog = "\x70\165\x72\x63\150\141\x73\145\163"; const ikmkgmwegyasgqmo = "\162\145\x6d\x6f\164\145\137\141\x70\x70\163"; const uysmymaeucegyiyw = "\145\170\164\x72\141\x5f\143\157\x69\156\x73"; const emywgcsiygeskckg = "\x72\x65\x6d\x61\x69\156\x5f\143\157\151\156\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto ieoeeyieoskuyiyw; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto mcuoyseuwoueyaie; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto mqacqosyicuiqwia; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); mqacqosyicuiqwia: goto kwowggaooiyqawyq; mcuoyseuwoueyaie: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); kwowggaooiyqawyq: guummoewucyeuiek: } owiguescmqyqukui: ieoeeyieoskuyiyw: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto cwmuqmoeauqcewoy; } $yygmoeguaqyumuui = ["\x65\170\164\162\x61\x73", "\163\165\x62\x73\143\x72\x69\x70\164\151\157\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto qoaawmmcqyacokws; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\142\163\143\162\151\160\x74\151\157\x6e\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto ykcmomsiayaymysm; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto seyygcwcaogkmaqe; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto wwgikwuigiiqsswq; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); wwgikwuigiiqsswq: goto uugiuqkesegaamqw; seyygcwcaogkmaqe: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); uugiuqkesegaamqw: ykcmomsiayaymysm: ukigmkeewuqomooc: } soqkewsayowwcmco: qoaawmmcqyacokws: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto uwyeycaywowwiquu; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; uwyeycaywowwiquu: ugyawwukegyoqmsq: } ciiyqsiswkcwsocm: cwmuqmoeauqcewoy: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\143\40\x44\141\164\x61", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\x68\x65\x20\x64\x61\x74\141\40\x61\x73\x73\157\x63\x69\x61\x74\x65\144\40\167\x69\164\150\x20\171\x6f\165\162\x20\141\x63\x63\x6f\165\156\x74\x20\151\163\x20\x75\160\x64\x61\164\145\x64\x20\167\151\x74\x68\x20\164\150\145\x20\x73\x65\162\166\x65\x72\x20\x61\164\40\162\145\147\x75\x6c\x61\x72\x20\151\156\x74\x65\x72\x76\141\x6c\163\56\40\x54\157\40\145\156\x73\x75\x72\x65\40\164\x68\145\x20\x6c\x61\164\145\x73\x74\x20\x75\160\x64\x61\164\145\54\40\171\157\x75\x20\x63\x61\x6e\40\165\160\144\141\x74\145\x20\171\x6f\165\162\40\x61\x63\143\157\165\x6e\x74\x20\x64\141\x74\141\x20\167\151\x74\x68\40\164\150\x65\40\x73\x65\x72\x76\x65\162\40\156\x6f\167\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\x70\x72\x2d\x6f\x70\x74\x2d\x73\x79\x6e\143\55\144\x61\x74\x61\40\x70\162\55\x62\164\156\40\x62\164\156\55\160\162\x69\155\x61\162\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\154\141\x73\163" => "\167\x2d\x31\x30\60\x20\x70\x72\55\x62\x74\x6e\40\142\164\156\x2d\141\x63\x74\x69\x6f\156\x20\x62\x74\x6e\x2d\157\165\164\154\151\156\145\55\160\x72\x69\155\141\x72\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto ggsugekocmsukuci; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto eiecgqokmuekaesc; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); eiecgqokmuekaesc: ggsugekocmsukuci: $eymaoksggoskuikg = __("\125\x6e\x6b\156\x6f\x77\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\x73\x20\x63\157\151\x6e\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ceosmkqgqgwsowwg; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ceosmkqgqgwsowwg: if ($ymyueyaumiqiuaqa <= 0) { goto kcwgiwimgqesukqu; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\x73\x20\x44\x61\x79", "\45\x73\40\104\x61\x79\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\141\163\163" => "\164\145\170\164\55\x73\165\x63\143\145\x73\x73"]); goto wicuauokauykwoeu; kcwgiwimgqesukqu: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\x70\x69\x72\145\x64", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\163" => "\x74\x65\x78\x74\55\x64\141\156\x67\x65\162"]); wicuauokauykwoeu: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gcecieuocqawmgci; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\157\x20\x50\x75\x72\x63\x68\141\163\145", PR__MDL__OPTIMIZATION); goto msmmiaumiasmsiog; gcecieuocqawmgci: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); msmmiaumiasmsiog: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\165\142\163\143\162\151\x70\164\151\157\x6e\40\120\x6c\141\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\154\x61\156" => [Constants::qescuiwgsyuikume => __("\x53\x75\142\163\143\x72\x69\x70\x74\x69\157\x6e\x20\x50\x6c\x61\x6e", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\145\162\x69\157\144" => [Constants::qescuiwgsyuikume => __("\x50\154\141\x6e\40\120\x65\x72\x69\157\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\162\x65\x6d\x61\x69\156\137\x64\141\x79" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\141\151\156\x69\156\x67\x20\x54\x69\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\143\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\x43\157\165\x6e\164\x20\x6f\x66\x20\111\x6e\x69\x74\151\x61\154\x20\103\x6f\x69\156\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\x73\x65\144\x5f\x63\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\x55\x73\x65\x64\40\103\x6f\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\155\x61\x69\x6e\137\143\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\122\x65\x6d\x61\151\x6e\40\103\157\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\x78\164\162\x61\40\103\157\x69\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\154\x61\x74\145\163\x74\x5f\160\x75\x72\x63\x68\141\163\x65\137\143\x6f\165\156\164" => [Constants::qescuiwgsyuikume => __("\x4c\x61\x74\x65\x73\164\40\120\165\162\x63\x68\x61\163\145\x20\103\157\x75\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\141\x74\x65\x73\x74\137\160\165\162\143\150\141\163\145\x5f\x64\x61\164\x65" => [Constants::qescuiwgsyuikume => __("\x4c\141\x74\145\x73\x74\x20\x50\165\x72\143\x68\x61\163\145\40\x44\x61\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\x65\x78\x70\x69\162\141\x74\151\157\x6e" => [Constants::qescuiwgsyuikume => __("\x45\x78\x70\x69\x72\145\40\104\x61\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\151\164\x68\x6f\x75\164\40\x65\170\160\x69\x72\x65\x20\144\x61\x74\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\x73\x73" => "\164\145\x78\164\55\163\165\x63\x63\x65\163\x73"])], "\143\x6f\x69\156\x73\x5f\143\157\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\x41\154\x6c\40\103\157\151\x6e\163\x20\x43\x6f\165\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\163\145\144\137\143\x6f\x69\x6e\x73" => [Constants::qescuiwgsyuikume => __("\125\163\x65\144\40\x43\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\155\141\x69\156\x5f\x63\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\141\151\156\x20\x43\157\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\141\x62\154\145\x5f\141\164\164\162\x73" => ["\x63\154\141\x73\x73" => "\155\x62\55\60\40\x74\x61\x62\154\x65\40\164\141\x62\154\x65\55\x62\157\162\144\x65\x72\154\145\163\163"], "\x74\x64\x5f\x61\x74\164\x72\163" => ["\x63\x6c\x61\x73\163" => "\x70\170\55\x30\40\160\171\x2d\x32"], "\154\141\x73\164\x5f\x74\144\x5f\x61\164\x74\162\163" => ["\143\x6c\x61\x73\x73" => "\x70\x78\x2d\60\40\x70\x79\x2d\x32\40\146\x6f\x6e\164\x2d\x77\145\151\147\x68\164\x2d\142\x6f\x6c\144\40\x74\145\x78\x74\x2d\x72\151\147\150\x74"]]); gqeoaceyoiicoaec: } oksqsucimimsswcg: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto kkckyqmcyussauma; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); kkckyqmcyussauma: $qookweymeqawmcwo = ["\154\151\x73\x74\137\x68\164\x6d\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\x72\x63\150\141\x73\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\x70\157\162\x74\57\160\165\162\x63\150\x61\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\163\164\137\150\164\x6d\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\165\x73\x61\147\145\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\160\157\x72\164\x2f\x75\x73\141\x67\x65", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto ikukqooiowqywyqo; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; ikukqooiowqywyqo: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto gscyiqmmegqmqcoe; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto cciakcwuweqmcose; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; cciakcwuweqmcose: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto uckusgwkoycmkeam; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\x56\x69\x65\x77\x20\164\150\145\x20\x46\165\154\154\40\x52\x65\x70\157\x72\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\145\x67\155\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\x5f\162\x65\160\x6f\x72\164"], $eeamcawaiqocomwy), ["\x63\154\141\163\163" => "\x70\x72\55\142\x74\x6e\x20\142\164\x6e\x2d\160\162\151\155\x61\x72\x79\40\142\x74\x6e\x2d\x61\143\164\151\x6f\x6e"]); uckusgwkoycmkeam: gscyiqmmegqmqcoe: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto kocaieyauyiqmyiy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto swicauyqusmgeccu; } maguoggkqamaiuag: swicauyqusmgeccu: if (!$uymsgmyyeikucgae) { goto icoiqskygugkgmkm; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\163\141\x67\x65", 0); icoiqskygugkgmkm: qosswumywsaeyqus: } mieoguuqiwqioeqa: kocaieyauyiqmyiy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto okuqsqaiwwiigmyu; } $nsmgceoqaqogqmuw = __("\x54\x68\x65\x72\x65\x20\151\163\40\x6e\x6f\x74\x20\x64\x61\164\x61\40\164\157\40\163\150\157\x77\40\x79\x6f\x75\54\x20\x70\x6c\x65\141\x73\145\x20\162\x65\146\162\145\x73\150\40\x70\x61\147\145\x20\157\x72\x20\x63\x6f\156\164\x61\x63\x74\40\x75\163\56", PR__MDL__OPTIMIZATION); goto ksiwgckusukisueg; okuqsqaiwwiigmyu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\x6c\x61\156\x5f\x69\144")))) { goto gqaqamewqeaqwcia; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto eussqkkimciywios; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\x59\157\165\162\40\x53\x75\x62\x73\x63\x72\151\160\164\151\x6f\156", PR__MDL__OPTIMIZATION)]; goto ewsigoeswimiueqe; eussqkkimciywios: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\143\162\x69\164\x69\143\x61\154\137\143\163\163\137\165\163\x61\x67\x65", "\x73\x70\145\x65\144\137\x74\145\163\164\137\165\163\141\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto cuayqmasemsqsume; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto gcqssckowmywoesw; cuayqmasemsqsume: eekkcooqswqouoei: } gcqssckowmywoesw: if ($ycqsugugqomewkke) { goto igmawmwssyskqqag; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\50\45\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\x59\x6f\x75\162\40\x53\x75\142\x73\143\162\x69\160\164\x69\x6f\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto iomwkkieqcswkkaw; igmawmwssyskqqag: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\163\40\x28\x25\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\157\x75\162\40\x53\x75\x62\x73\x63\162\151\x70\164\151\157\156", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\x20\50\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\145\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; iomwkkieqcswkkaw: ewsigoeswimiueqe: if (!$guacamgosccsckmq) { goto gaskcgoeywuyukke; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); gaskcgoeywuyukke: gqaqamewqeaqwcia: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\162\166\x69\x63\x65\x5f\x63\x6f\x73\x74\163", ["\160\x6c\141\156\163" => $kekgkgqeyesmkywu, "\141\143\x74\151\157\156\x73" => ["\143\x72\x69\x74\x69\x63\x61\x6c\137\143\x73\x73" => __("\103\x72\151\x74\151\143\x61\154\40\103\x53\123", PR__MDL__OPTIMIZATION), "\163\x70\x65\x65\x64\x5f\164\x65\x73\164" => __("\x53\160\145\145\x64\x20\x54\145\x73\164", PR__MDL__OPTIMIZATION)], "\x63\x6f\x69\156\x5f\x6d\x61\x73\153" => __("\45\163\40\x63\157\x69\x6e\163", PR__MDL__OPTIMIZATION), "\x73\x75\142\x73\143\x72\151\x70\x74\x69\x6f\156\137\160\154\x61\156\163\137\x74\x69\x74\154\145" => __("\123\165\142\163\143\162\151\x70\164\151\157\x6e\x20\x50\x6c\x61\x6e\163", PR__MDL__OPTIMIZATION)]); ksiwgckusukisueg: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
