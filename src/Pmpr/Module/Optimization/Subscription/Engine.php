<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef5003b08f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\x6c\141\156\163"; const mkciamyomkiccoes = "\x63\157\x69\156\163"; const owimkwkiwawmeicq = "\165\x73\141\x67\x65\x73"; const moamckowewogygog = "\x70\165\162\x63\150\x61\163\x65\163"; const ikmkgmwegyasgqmo = "\x72\x65\155\157\164\145\137\x61\x70\x70\x73"; const uysmymaeucegyiyw = "\145\170\164\x72\x61\x5f\143\157\x69\156\x73"; const emywgcsiygeskckg = "\162\x65\155\141\x69\156\137\x63\x6f\x69\156\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto kwcscewawgicomok; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qiqegseqwywcmwoe; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto koiyaaokigmamqyc; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); koiyaaokigmamqyc: goto yosyyiksyyscacus; qiqegseqwywcmwoe: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); yosyyiksyyscacus: amyaoueckysgmmas: } yoauoocuckogmsuw: kwcscewawgicomok: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto eysuawiooiswaseq; } $yygmoeguaqyumuui = ["\145\170\x74\x72\141\x73", "\x73\165\x62\x73\x63\x72\151\x70\164\x69\157\x6e\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto suscosoukqeyyqgs; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\x75\x62\163\x63\x72\151\x70\x74\x69\x6f\x6e\x73"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto gcecamucuogcciig; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto oaociaioauummsey; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto akoweomooyuwamow; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); cueuscqkicwwicei: gcecamucuogcciig: qayiqaykkywcyisq: } aymoguycgmuggcik: suscosoukqeyyqgs: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto kiewcwsykccgocuc; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; kiewcwsykccgocuc: aqeyqwuywqcmuoce: } kikkkocywiyuyuqw: eysuawiooiswaseq: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\x53\171\x6e\x63\40\x44\x61\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\150\x65\40\x64\x61\x74\x61\40\x61\163\x73\157\143\x69\x61\x74\x65\144\40\x77\151\164\150\x20\171\x6f\165\x72\40\x61\x63\143\157\x75\156\164\x20\x69\163\40\x75\x70\144\x61\164\145\x64\40\x77\151\164\x68\x20\x74\150\x65\x20\x73\145\x72\x76\145\162\x20\141\x74\x20\x72\x65\147\165\x6c\x61\x72\40\x69\x6e\164\145\162\x76\141\154\163\x2e\x20\x54\x6f\x20\145\x6e\163\165\162\x65\40\164\x68\x65\x20\154\141\164\145\163\164\x20\x75\x70\144\141\x74\x65\54\40\171\157\x75\40\x63\141\156\x20\x75\160\144\x61\164\145\x20\x79\157\x75\x72\40\x61\x63\143\157\165\x6e\164\x20\x64\141\164\x61\40\167\x69\164\150\40\x74\x68\145\40\163\x65\x72\166\145\x72\40\x6e\157\167\56", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\163\x73" => "\157\x70\x74\x2d\x73\x79\156\143\x2d\144\x61\x74\x61\x20\x70\x72\x2d\x62\x74\x6e\x20\142\164\156\x2d\160\162\x69\155\x61\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\x63\x6c\141\x73\x73" => "\167\55\61\60\x30\x20\x70\162\x2d\x62\x74\156\x20\142\x74\x6e\55\141\x63\x74\151\x6f\156\x20\x62\164\156\55\157\165\164\154\151\156\x65\55\x70\x72\x69\x6d\x61\x72\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto eogomkswkaqwyycm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto iecqkqoiqimmisyw; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); iecqkqoiqimmisyw: eogomkswkaqwyycm: $eymaoksggoskuikg = __("\125\156\153\156\157\167\x6e", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\x25\x73\x20\x63\x6f\151\x6e\163", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto egiauwuekseyeaeq; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); egiauwuekseyeaeq: if ($ymyueyaumiqiuaqa <= 0) { goto euuekiyqwkowiees; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\45\163\40\x44\x61\171", "\45\163\x20\x44\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\154\x61\163\x73" => "\x74\x65\x78\164\55\x73\x75\143\143\145\x73\163"]); goto assoyoeukmqiucyq; euuekiyqwkowiees: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\160\151\162\145\144", PR__MDL__OPTIMIZATION), ["\143\154\141\x73\x73" => "\164\145\x78\x74\x2d\144\141\x6e\147\145\162"]); assoyoeukmqiucyq: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto kikkkoqiumqoeiyy; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\x6f\40\120\x75\162\x63\150\141\x73\145", PR__MDL__OPTIMIZATION); goto wyqueeskecameuks; kikkkoqiumqoeiyy: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); wyqueeskecameuks: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\x53\x75\x62\163\x63\162\151\160\164\x69\157\x6e\x20\120\x6c\x61\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\160\x6c\141\x6e" => [Constants::qescuiwgsyuikume => __("\123\x75\142\x73\143\x72\x69\160\x74\x69\x6f\x6e\40\120\x6c\x61\x6e", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\160\145\162\151\157\x64" => [Constants::qescuiwgsyuikume => __("\x50\154\141\x6e\x20\x50\145\x72\x69\x6f\144", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\145\x6d\x61\151\x6e\137\x64\x61\x79" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\141\x69\x6e\x69\156\x67\40\124\x69\x6d\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\103\157\165\156\x74\x20\x6f\146\x20\x49\156\x69\x74\151\x61\154\40\103\157\151\156\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\165\163\x65\144\x5f\x63\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\125\163\x65\144\40\x43\157\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\x65\155\141\x69\x6e\x5f\143\x6f\151\156\163" => [Constants::qescuiwgsyuikume => __("\122\145\x6d\x61\x69\x6e\x20\103\157\x69\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\x45\x78\x74\162\x61\40\x43\157\x69\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\141\x74\x65\163\x74\x5f\x70\165\162\143\x68\141\163\145\137\143\157\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\114\141\164\145\163\164\x20\120\165\x72\143\x68\141\x73\145\40\x43\157\x75\156\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\x61\164\145\x73\x74\x5f\160\165\x72\143\150\x61\163\x65\137\x64\141\164\145" => [Constants::qescuiwgsyuikume => __("\114\x61\164\145\163\164\x20\120\165\162\x63\150\141\x73\145\x20\x44\x61\164\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\170\x70\x69\x72\x61\164\x69\x6f\x6e" => [Constants::qescuiwgsyuikume => __("\x45\x78\160\151\x72\x65\40\x44\x61\164\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\x69\x74\150\157\165\164\40\x65\170\x70\x69\x72\x65\x20\x64\x61\164\145", PR__MDL__OPTIMIZATION), ["\143\154\141\163\163" => "\x74\145\170\164\55\x73\165\143\143\x65\x73\163"])], "\143\157\151\156\x73\x5f\143\x6f\x75\x6e\164" => [Constants::qescuiwgsyuikume => __("\101\154\x6c\40\103\x6f\151\x6e\163\40\103\157\x75\x6e\164", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\165\163\145\144\137\x63\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\x55\163\145\144\40\103\157\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\162\x65\x6d\141\x69\x6e\137\143\157\151\156\x73" => [Constants::qescuiwgsyuikume => __("\x52\x65\x6d\141\x69\x6e\x20\x43\157\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\164\x61\142\154\x65\x5f\141\x74\x74\162\x73" => ["\143\154\x61\x73\163" => "\155\x62\x2d\60\40\164\x61\142\x6c\145\x20\x74\141\x62\154\145\55\142\x6f\162\144\145\162\x6c\145\163\163"], "\164\144\x5f\141\164\164\x72\x73" => ["\x63\154\141\x73\x73" => "\x70\170\55\x30\x20\160\171\55\x32"], "\x6c\141\163\x74\x5f\x74\144\x5f\141\164\x74\162\x73" => ["\x63\154\141\163\163" => "\x70\x78\55\60\x20\160\171\x2d\x32\x20\x66\157\x6e\164\x2d\167\145\151\147\150\x74\55\x62\x6f\154\144\x20\164\145\170\164\x2d\x72\x69\147\x68\164"]]); msiuqseowuumiwuo: } esokkakkumskkmiu: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto gqycmyieayoegcsy; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); gqycmyieayoegcsy: $qookweymeqawmcwo = ["\154\151\x73\x74\x5f\150\164\x6d\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\160\x75\x72\x63\150\x61\163\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\160\x6f\162\164\57\160\165\162\143\150\x61\163\x65", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\154\151\x73\x74\137\x68\x74\155\x6c" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\163\x61\x67\x65\163", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\x65\160\157\162\164\57\165\x73\141\x67\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto sqiyuasgusgawuoi; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; sqiyuasgusgawuoi: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto ycomeuqeessamows; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto iayguaeseyaemwkk; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; iayguaeseyaemwkk: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto akyiiioycmgqyuok; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\151\x65\167\x20\164\150\x65\40\106\165\154\x6c\40\x52\145\160\x6f\162\164", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\x67\155\x65\x6e\164" => "{$ymqmyyeuycgmigyo}\x5f\162\145\x70\157\x72\164"], $eeamcawaiqocomwy), ["\x63\154\x61\x73\x73" => "\160\x72\x2d\x62\164\x6e\40\x62\x74\156\x2d\x70\x72\x69\155\141\162\171\x20\142\x74\156\55\141\143\x74\x69\157\156"]); akyiiioycmgqyuok: ycomeuqeessamows: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto ieoeeyieoskuyiyw; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto mqacqosyicuiqwia; } mcuoyseuwoueyaie: mqacqosyicuiqwia: if (!$uymsgmyyeikucgae) { goto kwowggaooiyqawyq; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\165\x73\141\x67\145", 0); kwowggaooiyqawyq: guummoewucyeuiek: } owiguescmqyqukui: ieoeeyieoskuyiyw: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto uwyeycaywowwiquu; } $nsmgceoqaqogqmuw = __("\124\x68\x65\162\x65\x20\x69\163\x20\x6e\157\x74\40\144\x61\164\141\40\164\x6f\40\x73\x68\x6f\x77\40\171\x6f\165\x2c\40\x70\x6c\145\141\163\145\40\162\145\x66\162\145\163\150\40\160\141\147\145\40\157\x72\x20\x63\x6f\x6e\x74\141\143\164\x20\165\x73\56", PR__MDL__OPTIMIZATION); goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\154\x61\156\137\151\x64")))) { goto qoaawmmcqyacokws; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto seyygcwcaogkmaqe; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\x75\x72\40\123\x75\x62\163\143\162\x69\x70\x74\x69\157\156", PR__MDL__OPTIMIZATION)]; goto uugiuqkesegaamqw; seyygcwcaogkmaqe: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\x63\162\x69\x74\151\143\x61\x6c\137\x63\x73\163\x5f\165\x73\x61\147\x65", "\x73\160\145\x65\144\137\x74\x65\x73\164\x5f\x75\163\x61\x67\x65"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto soqkewsayowwcmco; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto ciiyqsiswkcwsocm; soqkewsayowwcmco: ugyawwukegyoqmsq: } ciiyqsiswkcwsocm: if ($ycqsugugqomewkke) { goto ukigmkeewuqomooc; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\163\x20\50\x25\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\x6f\x75\x72\40\123\x75\142\163\x63\162\151\160\164\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto wwgikwuigiiqsswq; ukigmkeewuqomooc: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\x28\x25\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\131\x6f\165\162\40\x53\165\142\163\x63\x72\151\x70\164\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\x20\50\45\x73\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\x4e\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; wwgikwuigiiqsswq: uugiuqkesegaamqw: if (!$guacamgosccsckmq) { goto ykcmomsiayaymysm; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); ykcmomsiayaymysm: qoaawmmcqyacokws: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\145\162\x76\151\x63\145\x5f\x63\x6f\x73\164\163", ["\x70\x6c\x61\x6e\x73" => $kekgkgqeyesmkywu, "\141\x63\x74\151\x6f\156\163" => ["\x63\162\151\x74\151\143\141\x6c\137\143\163\163" => __("\x43\x72\151\x74\x69\143\x61\x6c\40\103\123\123", PR__MDL__OPTIMIZATION), "\163\x70\145\145\144\137\x74\x65\163\164" => __("\x53\x70\x65\145\x64\40\x54\145\x73\164", PR__MDL__OPTIMIZATION)], "\143\157\151\x6e\137\x6d\x61\163\x6b" => __("\x25\163\x20\143\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), "\163\x75\142\x73\x63\162\151\160\164\151\157\156\x5f\160\x6c\141\x6e\163\137\x74\x69\x74\154\145" => __("\x53\165\x62\x73\x63\162\x69\160\164\151\x6f\x6e\40\120\x6c\x61\156\163", PR__MDL__OPTIMIZATION)]); cwmuqmoeauqcewoy: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
