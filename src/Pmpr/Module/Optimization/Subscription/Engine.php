<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f431078326f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\x70\x6c\141\156\163"; const mkciamyomkiccoes = "\143\157\x69\x6e\x73"; const owimkwkiwawmeicq = "\165\x73\x61\147\145\x73"; const moamckowewogygog = "\160\165\x72\x63\x68\141\163\x65\163"; const ikmkgmwegyasgqmo = "\162\x65\155\157\164\x65\x5f\141\x70\160\x73"; const uysmymaeucegyiyw = "\145\170\164\x72\x61\137\143\157\x69\x6e\163"; const emywgcsiygeskckg = "\x72\x65\x6d\141\x69\x6e\137\x63\157\x69\x6e\x73"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto ieoeeyieoskuyiyw; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto mcuoyseuwoueyaie; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto mqacqosyicuiqwia; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); mqacqosyicuiqwia: goto kwowggaooiyqawyq; mcuoyseuwoueyaie: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); kwowggaooiyqawyq: guummoewucyeuiek: } owiguescmqyqukui: ieoeeyieoskuyiyw: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto cwmuqmoeauqcewoy; } $yygmoeguaqyumuui = ["\x65\170\164\x72\x61\x73", "\x73\165\x62\163\x63\x72\x69\160\x74\x69\x6f\156\163"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto qoaawmmcqyacokws; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\x73\165\142\163\x63\162\x69\160\x74\x69\157\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto ykcmomsiayaymysm; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto seyygcwcaogkmaqe; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto wwgikwuigiiqsswq; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); wwgikwuigiiqsswq: goto uugiuqkesegaamqw; seyygcwcaogkmaqe: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); uugiuqkesegaamqw: ykcmomsiayaymysm: ukigmkeewuqomooc: } soqkewsayowwcmco: qoaawmmcqyacokws: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto uwyeycaywowwiquu; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; uwyeycaywowwiquu: ugyawwukegyoqmsq: } ciiyqsiswkcwsocm: cwmuqmoeauqcewoy: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\x63\x20\104\x61\x74\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\124\150\x65\40\144\141\x74\141\40\141\x73\x73\157\x63\x69\x61\164\x65\144\40\x77\x69\x74\150\x20\171\x6f\165\162\40\141\x63\143\157\165\x6e\164\x20\x69\163\40\x75\x70\x64\x61\x74\x65\144\40\x77\151\x74\x68\40\x74\x68\145\x20\x73\145\x72\166\x65\162\40\141\164\40\x72\145\147\x75\x6c\141\162\40\151\x6e\164\145\162\x76\x61\x6c\x73\56\40\124\x6f\x20\x65\x6e\163\165\162\145\40\x74\150\x65\x20\x6c\x61\164\x65\x73\x74\40\165\x70\144\x61\x74\145\54\x20\171\157\165\40\143\x61\x6e\40\165\x70\144\141\164\145\x20\x79\157\165\162\x20\141\x63\143\157\165\x6e\x74\x20\144\141\x74\x61\40\x77\x69\164\x68\x20\x74\x68\x65\40\x73\x65\162\x76\145\162\40\156\x6f\167\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\x61\x73\163" => "\160\x72\x2d\x6f\160\164\x2d\x73\171\156\143\x2d\x64\141\x74\x61\x20\x70\x72\x2d\x62\x74\x6e\x20\x62\164\156\55\160\x72\x69\x6d\x61\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\154\141\163\x73" => "\167\x2d\x31\60\x30\x20\160\162\x2d\142\x74\156\40\142\164\x6e\55\141\x63\164\x69\157\156\x20\142\x74\x6e\x2d\x6f\165\164\154\151\156\x65\55\160\x72\151\155\x61\162\x79"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto ggsugekocmsukuci; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto eiecgqokmuekaesc; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); eiecgqokmuekaesc: ggsugekocmsukuci: $eymaoksggoskuikg = __("\x55\156\x6b\x6e\157\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\x63\157\x69\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto ceosmkqgqgwsowwg; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); ceosmkqgqgwsowwg: if ($ymyueyaumiqiuaqa <= 0) { goto kcwgiwimgqesukqu; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\163\x20\x44\x61\171", "\x25\x73\x20\104\x61\x79\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\x63\x6c\x61\163\163" => "\164\145\x78\164\55\163\165\143\143\x65\163\x73"]); goto wicuauokauykwoeu; kcwgiwimgqesukqu: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x45\170\x70\x69\x72\145\144", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\x73\163" => "\x74\145\x78\164\x2d\144\141\x6e\x67\145\x72"]); wicuauokauykwoeu: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto gcecieuocqawmgci; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\116\157\x20\x50\165\162\143\x68\x61\163\x65", PR__MDL__OPTIMIZATION); goto msmmiaumiasmsiog; gcecieuocqawmgci: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); msmmiaumiasmsiog: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\165\142\163\143\162\x69\160\164\x69\157\x6e\40\120\154\x61\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\x6c\141\x6e" => [Constants::qescuiwgsyuikume => __("\123\x75\142\163\143\x72\151\160\x74\151\157\156\40\x50\154\x61\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\162\x69\x6f\x64" => [Constants::qescuiwgsyuikume => __("\x50\154\141\156\40\120\145\x72\x69\157\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\155\x61\x69\x6e\x5f\144\x61\x79" => [Constants::qescuiwgsyuikume => __("\122\x65\155\x61\x69\156\x69\156\x67\40\x54\151\155\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\103\157\x75\156\x74\40\x6f\x66\x20\x49\x6e\x69\164\x69\x61\154\x20\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\163\145\x64\x5f\143\157\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\125\x73\x65\x64\x20\x43\157\x69\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\x6d\141\x69\x6e\x5f\143\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\x52\x65\155\x61\151\156\40\103\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\170\x74\x72\x61\x20\x43\157\x69\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\164\145\x73\164\x5f\160\165\x72\x63\150\x61\x73\x65\x5f\143\157\165\156\x74" => [Constants::qescuiwgsyuikume => __("\114\141\x74\x65\163\x74\x20\120\165\x72\143\x68\x61\163\145\40\x43\157\x75\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\x61\x74\x65\163\x74\137\x70\x75\162\x63\150\x61\x73\x65\x5f\x64\x61\x74\145" => [Constants::qescuiwgsyuikume => __("\114\x61\x74\x65\163\x74\x20\120\x75\x72\x63\150\141\x73\x65\x20\x44\141\164\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\x65\x78\x70\x69\162\x61\164\151\157\x6e" => [Constants::qescuiwgsyuikume => __("\105\170\160\x69\x72\145\x20\x44\x61\x74\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\127\151\164\x68\x6f\165\164\40\x65\170\160\151\x72\x65\x20\x64\x61\164\x65", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\163\163" => "\164\x65\x78\164\55\x73\165\x63\x63\x65\163\x73"])], "\143\x6f\151\x6e\163\x5f\143\x6f\x75\156\x74" => [Constants::qescuiwgsyuikume => __("\101\x6c\x6c\40\x43\157\x69\x6e\x73\x20\103\157\x75\156\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\163\145\x64\x5f\x63\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\x55\163\145\x64\40\103\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\145\155\x61\151\156\137\143\157\x69\156\x73" => [Constants::qescuiwgsyuikume => __("\x52\x65\155\x61\151\156\40\103\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\141\x62\154\x65\137\x61\x74\164\x72\x73" => ["\143\154\141\x73\163" => "\x6d\142\x2d\x30\40\x74\141\x62\x6c\145\40\164\x61\142\154\x65\55\142\157\162\144\x65\x72\x6c\145\163\163"], "\x74\144\x5f\x61\164\164\x72\x73" => ["\x63\x6c\141\163\163" => "\160\x78\x2d\60\x20\x70\171\55\62"], "\154\x61\x73\164\x5f\x74\144\137\141\x74\164\x72\x73" => ["\143\154\x61\x73\x73" => "\x70\170\x2d\60\x20\160\x79\55\62\40\x66\x6f\x6e\164\x2d\167\145\151\147\150\x74\x2d\142\157\154\x64\x20\x74\x65\170\164\x2d\162\x69\x67\x68\x74"]]); gqeoaceyoiicoaec: } oksqsucimimsswcg: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto kkckyqmcyussauma; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); kkckyqmcyussauma: $qookweymeqawmcwo = ["\x6c\151\163\x74\x5f\x68\164\155\x6c" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\165\x72\143\x68\141\163\145\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\x65\160\157\162\164\57\x70\165\x72\x63\x68\x61\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\163\164\x5f\x68\164\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\x73\x61\147\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\x70\x6f\x72\x74\57\x75\x73\x61\147\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto ikukqooiowqywyqo; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; ikukqooiowqywyqo: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto gscyiqmmegqmqcoe; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto cciakcwuweqmcose; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; cciakcwuweqmcose: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto uckusgwkoycmkeam; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\x65\167\40\164\150\145\40\106\x75\x6c\154\40\x52\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x65\147\x6d\145\x6e\x74" => "{$ymqmyyeuycgmigyo}\x5f\162\145\160\x6f\x72\164"], $eeamcawaiqocomwy), ["\143\154\141\163\x73" => "\160\x72\55\x62\x74\156\x20\x62\164\x6e\x2d\160\162\x69\x6d\141\x72\x79\x20\x62\164\156\x2d\x61\x63\x74\151\157\x6e"]); uckusgwkoycmkeam: gscyiqmmegqmqcoe: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto kocaieyauyiqmyiy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto swicauyqusmgeccu; } maguoggkqamaiuag: swicauyqusmgeccu: if (!$uymsgmyyeikucgae) { goto icoiqskygugkgmkm; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\x5f\165\163\141\x67\x65", 0); icoiqskygugkgmkm: qosswumywsaeyqus: } mieoguuqiwqioeqa: kocaieyauyiqmyiy: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto okuqsqaiwwiigmyu; } $nsmgceoqaqogqmuw = __("\124\150\x65\x72\145\x20\151\x73\x20\x6e\157\164\40\144\141\x74\x61\x20\164\x6f\40\163\x68\x6f\167\x20\x79\157\x75\x2c\x20\x70\154\x65\x61\163\x65\x20\162\x65\x66\162\145\163\150\40\160\141\147\145\x20\x6f\x72\40\143\157\x6e\164\x61\143\164\40\x75\163\x2e", PR__MDL__OPTIMIZATION); goto ksiwgckusukisueg; okuqsqaiwwiigmyu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\160\154\141\x6e\137\x69\144")))) { goto gqaqamewqeaqwcia; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto eussqkkimciywios; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\157\x75\x72\x20\x53\x75\x62\163\143\x72\151\160\x74\x69\157\x6e", PR__MDL__OPTIMIZATION)]; goto ewsigoeswimiueqe; eussqkkimciywios: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\143\x72\x69\164\151\143\x61\154\137\143\x73\x73\137\165\x73\x61\147\145", "\x73\x70\145\x65\x64\137\164\x65\163\x74\137\x75\x73\x61\x67\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto cuayqmasemsqsume; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto gcqssckowmywoesw; cuayqmasemsqsume: eekkcooqswqouoei: } gcqssckowmywoesw: if ($ycqsugugqomewkke) { goto igmawmwssyskqqag; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\x73\x20\x28\x25\x73\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\157\165\x72\x20\x53\165\142\x73\x63\x72\x69\x70\164\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto iomwkkieqcswkkaw; igmawmwssyskqqag: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\x73\x20\x28\45\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\x6f\x75\x72\x20\123\x75\142\x73\143\162\x69\x70\164\x69\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\163\x20\x28\45\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\x77", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; iomwkkieqcswkkaw: ewsigoeswimiueqe: if (!$guacamgosccsckmq) { goto gaskcgoeywuyukke; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); gaskcgoeywuyukke: gqaqamewqeaqwcia: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\145\162\166\151\143\145\137\x63\157\x73\164\163", ["\x70\x6c\141\x6e\x73" => $kekgkgqeyesmkywu, "\x61\x63\164\151\x6f\156\163" => ["\143\x72\151\x74\151\143\141\154\137\x63\x73\x73" => __("\x43\x72\151\x74\151\143\141\154\x20\x43\123\123", PR__MDL__OPTIMIZATION), "\x73\160\x65\x65\x64\x5f\164\145\x73\x74" => __("\123\x70\x65\145\144\x20\x54\x65\x73\x74", PR__MDL__OPTIMIZATION)], "\143\x6f\x69\156\137\x6d\x61\x73\153" => __("\45\x73\40\x63\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), "\x73\x75\x62\163\x63\x72\x69\160\x74\x69\157\x6e\137\x70\154\x61\156\163\x5f\164\151\x74\x6c\145" => __("\x53\x75\142\x73\143\162\x69\x70\164\x69\x6f\156\40\120\154\141\156\163", PR__MDL__OPTIMIZATION)]); ksiwgckusukisueg: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
