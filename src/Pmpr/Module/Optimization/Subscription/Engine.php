<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4c436ce06             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\Index; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\VirtualBrowser; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Subscription\Model\Purchase; use Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser\Setting as VirtualBrowserSetting; class Engine extends Common { const eeyiwgsusysqessu = "\160\154\141\x6e\x73"; const mkciamyomkiccoes = "\143\x6f\x69\x6e\163"; const owimkwkiwawmeicq = "\x75\163\x61\147\145\x73"; const moamckowewogygog = "\x70\x75\x72\143\150\x61\x73\145\x73"; const ikmkgmwegyasgqmo = "\x72\x65\x6d\x6f\x74\145\x5f\141\160\160\x73"; const uysmymaeucegyiyw = "\x65\170\164\162\x61\137\x63\x6f\x69\x6e\x73"; const emywgcsiygeskckg = "\x72\145\155\141\x69\156\x5f\x63\x6f\151\x6e\163"; public function aackauiyyagmeqso() : array { return (array) $this->weysguygiseoukqw(self::eeyiwgsusysqessu, []); } public function sqamsikemwwsuwey() : array { return (array) $this->weysguygiseoukqw(self::uysmymaeucegyiyw, []); } public function qcgwasumiaaemeei() : array { return (array) $this->weysguygiseoukqw(Constants::eoigaocgcaekssuw, []); } public function ewgciagyquksawee() : array { return (array) $this->weysguygiseoukqw(self::mkciamyomkiccoes, []); } public function wskswuomqkmqkkmm() : array { return (array) $this->weysguygiseoukqw(self::ikmkgmwegyasgqmo, []); } public function acgeiccowcqiwmqa() { $icwicymcioeyeyek = API::symcgieuakksimmu()->msyoakwyskammgqi(); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek && ($ykquycoiqesuckco = $this->kmuweyayaqoeqiyw()))) { goto kwcscewawgicomok; } $yygmoeguaqyumuui = [self::mkciamyomkiccoes, self::eeyiwgsusysqessu, self::uysmymaeucegyiyw, self::ikmkgmwegyasgqmo, Constants::eoigaocgcaekssuw]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!empty($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qiqegseqwywcmwoe; } if (!(self::eeyiwgsusysqessu === $uusmaiomayssaecw)) { goto koiyaaokigmamqyc; } $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, ''); koiyaaokigmamqyc: goto yosyyiksyyscacus; qiqegseqwywcmwoe: $ykquycoiqesuckco->qioweyiqewmsocem($uusmaiomayssaecw, $icwicymcioeyeyek[$uusmaiomayssaecw]); yosyyiksyyscacus: amyaoueckysgmmas: } yoauoocuckogmsuw: kwcscewawgicomok: return $icwicymcioeyeyek; } public function aiamukikcuowsiku($suaemuyiacqyugsm = 1) : bool { $icwicymcioeyeyek = API::symcgieuakksimmu()->qqwmsyyqyoeeqsoo($suaemuyiacqyugsm); $gigyyisyuaacmwmq = false; if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto eysuawiooiswaseq; } $yygmoeguaqyumuui = ["\145\x78\164\162\x61\x73", "\163\165\x62\163\x63\162\151\160\164\151\x6f\156\x73"]; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $suuagcecoyuweoqk = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::qwumqqyuasyskkkc] ?? []; if (!$suuagcecoyuweoqk) { goto suscosoukqeyyqgs; } $geeyaumoyycymeks = $uusmaiomayssaecw === "\163\165\142\x73\143\x72\x69\160\164\x69\x6f\156\163"; foreach ($suuagcecoyuweoqk as $igqsaukqcqscimok) { $qkasemkceamoceiy = $igqsaukqcqscimok[Constants::gouqcwikiiygyasc]; $sqeykgyoooqysmca = $geeyaumoyycymeks ? Constants::eoigaocgcaekssuw : Constants::mayesweykoooyugy; if (!$qkasemkceamoceiy) { goto gcecamucuogcciig; } $cmaccwokqweqweqi = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); if (empty($cmaccwokqweqweqi)) { goto oaociaioauummsey; } $aasekyoqiwumiqom = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($igqsaukqcqscimok[Constants::uiwqcumqkgikqyue]); $wuegiysyymkmsuyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cmaccwokqweqweqi, Constants::uiwqcumqkgikqyue); if (!($aasekyoqiwumiqom !== $wuegiysyymkmsuyi)) { goto akoweomooyuwamow; } $yakcyegsoqusmiak->wqikesawekycweoi($cmaccwokqweqweqi, [Constants::uiwqcumqkgikqyue => $aasekyoqiwumiqom]); akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $yakcyegsoqusmiak->gscuuyuyauokoyuo([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::kumuoysauoagaiiy => $igqsaukqcqscimok[Constants::kumuoysauoagaiiy], Constants::uiwqcumqkgikqyue => $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue], Constants::acymsykymkiewqsy => $igqsaukqcqscimok[Constants::acymsykymkiewqsy], Constants::yocqkmeouaamomke => $qkasemkceamoceiy]); cueuscqkicwwicei: gcecamucuogcciig: qayiqaykkywcyisq: } aymoguycgmuggcik: suscosoukqeyyqgs: $ymiyawysimukkoso = $icwicymcioeyeyek[$uusmaiomayssaecw][Constants::ycuusiweasqygwiw] ?? []; if ($gigyyisyuaacmwmq) { goto kiewcwsykccgocuc; } $gigyyisyuaacmwmq = $ymiyawysimukkoso && isset($ymiyawysimukkoso[Constants::asmooogmgyecqqka], $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]) && $ymiyawysimukkoso[Constants::asmooogmgyecqqka] < $ymiyawysimukkoso[Constants::yusuiaeueqwieqqq]; kiewcwsykccgocuc: aqeyqwuywqcmuoce: } kikkkocywiyuyuqw: eysuawiooiswaseq: return $gigyyisyuaacmwmq; } public function kscwewuywiakosos() : string { $meqocwsecsywiiqs = __("\123\171\156\143\40\104\141\164\141", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x54\x68\145\40\x64\141\164\x61\x20\x61\163\x73\x6f\143\151\x61\164\145\144\40\167\x69\x74\x68\x20\171\x6f\x75\x72\40\x61\143\143\157\165\x6e\164\x20\151\163\x20\165\160\x64\141\164\145\144\40\167\x69\x74\150\40\164\150\145\x20\x73\145\162\x76\x65\x72\x20\x61\164\x20\162\145\x67\165\154\141\x72\x20\151\x6e\164\145\162\166\141\x6c\163\56\x20\x54\x6f\x20\145\x6e\x73\x75\162\x65\40\x74\150\145\40\154\141\164\145\x73\164\x20\x75\x70\x64\x61\x74\145\54\40\x79\x6f\165\x20\x63\x61\x6e\x20\165\x70\x64\x61\164\x65\x20\x79\x6f\165\x72\40\141\143\143\157\165\156\164\x20\144\141\x74\x61\x20\167\x69\164\x68\40\164\x68\x65\x20\x73\x65\x72\x76\145\162\x20\x6e\157\167\x2e", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\x61\163\163" => "\157\160\x74\55\x73\171\156\143\x2d\x64\141\x74\x61\x20\160\x72\55\142\164\x6e\x20\142\x74\156\x2d\x70\162\151\x6d\x61\x72\x79", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]]], $meqocwsecsywiiqs, ["\143\154\x61\x73\163" => "\x77\55\61\60\60\40\x70\162\55\142\164\x6e\x20\142\164\x6e\55\x61\143\x74\x69\x6f\x6e\x20\142\164\156\55\157\x75\x74\x6c\x69\x6e\145\55\160\162\x69\155\x61\x72\171"]); } public function samoqkkuimogeyew() : array { $qwgquweoiskugckg = $this->ewgciagyquksawee(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($umwagewoweuckiso) { goto eogomkswkaqwyycm; } $icwicymcioeyeyek = $this->acgeiccowcqiwmqa(); if (!($icwicymcioeyeyek && !is_wp_error($icwicymcioeyeyek))) { goto iecqkqoiqimmisyw; } $umwagewoweuckiso = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::eoigaocgcaekssuw); iecqkqoiqimmisyw: eogomkswkaqwyycm: $eymaoksggoskuikg = __("\x55\156\x6b\x6e\x6f\167\156", PR__MDL__OPTIMIZATION); $momcqeuuwwsaagyc = __("\45\163\40\143\x6f\x69\156\x73", PR__MDL__OPTIMIZATION); $wekousyuiguacggm = $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::icymuyeowqaciyyu); $ymyueyaumiqiuaqa = 0; if (!$wekousyuiguacggm) { goto egiauwuekseyeaeq; } $ymyueyaumiqiuaqa = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->omyucuigmqgqmwio($wekousyuiguacggm); egiauwuekseyeaeq: if ($ymyueyaumiqiuaqa <= 0) { goto euuekiyqwkowiees; } $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(_n("\x25\x73\x20\x44\x61\x79", "\x25\x73\x20\104\x61\171\x73", $ymyueyaumiqiuaqa, PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ymyueyaumiqiuaqa)), ["\143\x6c\x61\x73\x73" => "\164\145\170\x74\55\163\165\143\143\145\x73\x73"]); goto assoyoeukmqiucyq; euuekiyqwkowiees: $ymyueyaumiqiuaqa = $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\105\x78\160\151\162\x65\x64", PR__MDL__OPTIMIZATION), ["\x63\154\141\163\x73" => "\x74\145\170\x74\x2d\x64\141\156\x67\x65\162"]); assoyoeukmqiucyq: $cesmwwwcymckqaku = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::ALL] ?? 0; $mcoyqciicgkwcmac = $qwgquweoiskugckg[Constants::eoigaocgcaekssuw][Constants::gikauwqcswqcsmqw] ?? 0; $yeyequgieweqoume = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::ALL] ?? 0; $ceaoyakceaaoaaei = $qwgquweoiskugckg[Constants::mayesweykoooyugy][Constants::gikauwqcswqcsmqw] ?? 0; $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $okmuwqcyiyiommaq = $yakcyegsoqusmiak->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Constants::mayesweykoooyugy, [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::kumuoysauoagaiiy, Constants::ciyoccqkiamemcmm => Constants::omaksceqmigeaoko]]); if ($okmuwqcyiyiommaq) { goto kikkkoqiumqoeiyy; } $scyqmomasqcossoq = $ocsquaqymuwoyisw = __("\x4e\157\x20\x50\165\x72\x63\x68\141\x73\145", PR__MDL__OPTIMIZATION); goto wyqueeskecameuks; kikkkoqiumqoeiyy: $ocsquaqymuwoyisw = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::uiwqcumqkgikqyue)[Constants::ciyoccqkiamemcmm] ?? 0); $scyqmomasqcossoq = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($yakcyegsoqusmiak->qogaqkcsogcqiaic($okmuwqcyiyiommaq, Constants::kumuoysauoagaiiy), $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); wyqueeskecameuks: $gkeiousaoygaimia = [Constants::eoigaocgcaekssuw => [Constants::qescuiwgsyuikume => __("\123\165\x62\163\x63\162\x69\160\164\151\157\x6e\x20\120\154\x61\x6e", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x70\x6c\x61\156" => [Constants::qescuiwgsyuikume => __("\123\165\x62\x73\143\162\x69\x70\164\x69\x6f\156\40\120\154\141\156", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::qescuiwgsyuikume, $eymaoksggoskuikg)], "\x70\x65\162\151\x6f\144" => [Constants::qescuiwgsyuikume => __("\120\x6c\x61\x6e\40\120\145\x72\x69\x6f\x64", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::eeeyoywyquqywwoo, $eymaoksggoskuikg)], "\x72\x65\x6d\141\151\156\137\144\x61\171" => [Constants::qescuiwgsyuikume => __("\x52\x65\155\x61\x69\156\151\156\x67\40\x54\x69\155\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ymyueyaumiqiuaqa], "\x63\157\x69\x6e\163" => [Constants::qescuiwgsyuikume => __("\x43\x6f\x75\156\164\x20\x6f\146\40\x49\156\151\x74\151\x61\154\40\x43\157\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($cesmwwwcymckqaku))], "\x75\163\x65\x64\137\x63\157\x69\156\163" => [Constants::qescuiwgsyuikume => __("\x55\x73\x65\144\40\103\157\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($cesmwwwcymckqaku, $mcoyqciicgkwcmac)))], "\x72\145\155\141\x69\x6e\x5f\x63\x6f\151\x6e\163" => [Constants::qescuiwgsyuikume => __("\122\x65\x6d\x61\x69\156\x20\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $cesmwwwcymckqaku - $mcoyqciicgkwcmac)))]]], self::uysmymaeucegyiyw => [Constants::qescuiwgsyuikume => __("\105\x78\164\162\x61\40\x43\157\x69\156", PR__MDL__OPTIMIZATION), Constants::qwumqqyuasyskkkc => ["\x6c\x61\x74\x65\163\x74\x5f\x70\x75\x72\143\x68\x61\163\145\x5f\143\157\165\156\x74" => [Constants::qescuiwgsyuikume => __("\114\141\164\x65\x73\164\40\120\165\x72\143\x68\x61\163\145\x20\103\x6f\x75\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $ocsquaqymuwoyisw], "\154\x61\x74\x65\x73\164\137\160\x75\x72\143\x68\x61\163\145\x5f\x64\x61\x74\145" => [Constants::qescuiwgsyuikume => __("\114\x61\x74\145\x73\x74\x20\x50\165\x72\x63\x68\x61\163\145\x20\x44\x61\164\x65", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $scyqmomasqcossoq], "\145\x78\160\x69\x72\141\164\x69\157\x6e" => [Constants::qescuiwgsyuikume => __("\105\170\160\151\x72\145\40\104\x61\x74\145", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => $swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x57\x69\x74\150\157\x75\x74\x20\x65\170\x70\151\x72\145\x20\144\141\164\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\163" => "\164\x65\x78\x74\55\x73\x75\x63\x63\x65\163\x73"])], "\143\x6f\x69\x6e\x73\x5f\x63\x6f\x75\x6e\x74" => [Constants::qescuiwgsyuikume => __("\x41\154\x6c\x20\x43\x6f\151\156\163\x20\103\x6f\x75\x6e\x74", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($yeyequgieweqoume))], "\x75\163\x65\x64\137\x63\157\151\156\163" => [Constants::qescuiwgsyuikume => __("\125\163\145\x64\x20\x43\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(min($yeyequgieweqoume, $ceaoyakceaaoaaei)))], "\x72\145\155\141\x69\156\137\143\x6f\151\x6e\x73" => [Constants::qescuiwgsyuikume => __("\x52\145\x6d\x61\x69\156\x20\x43\x6f\151\x6e\x73", PR__MDL__OPTIMIZATION), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(max(0, $yeyequgieweqoume - $ceaoyakceaaoaaei)))]]]]; foreach ($gkeiousaoygaimia as $uusmaiomayssaecw => $keymuysuaseeokmy) { $gkeiousaoygaimia[$uusmaiomayssaecw][Constants::ugsuecoyuqcamsac] = $swqimwqeweekeusq->kuumcaywkqiasisk($keymuysuaseeokmy[Constants::qwumqqyuasyskkkc], ["\x74\141\x62\x6c\x65\137\141\x74\x74\x72\163" => ["\x63\154\x61\163\163" => "\155\x62\55\x30\x20\164\141\x62\x6c\145\x20\164\141\x62\x6c\145\x2d\x62\x6f\162\144\145\162\x6c\145\x73\x73"], "\x74\x64\x5f\141\x74\x74\162\x73" => ["\143\154\x61\x73\x73" => "\160\x78\x2d\x30\x20\x70\x79\x2d\62"], "\x6c\141\163\x74\137\164\x64\137\x61\164\x74\x72\163" => ["\143\x6c\x61\163\163" => "\160\170\55\60\40\x70\x79\x2d\x32\40\146\157\x6e\164\x2d\x77\x65\151\147\x68\x74\x2d\x62\x6f\x6c\x64\40\164\145\x78\x74\x2d\162\151\x67\x68\164"]]); msiuqseowuumiwuo: } esokkakkumskkmiu: return $gkeiousaoygaimia; } public function aaasykywsggkskse(bool $scsaeueqgyymsyei = false) : string { $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); if (!($yakcyegsoqusmiak->asskucacysemeoiu() === 0 && $this->aiamukikcuowsiku())) { goto gqycmyieayoegcsy; } Process::symcgieuakksimmu()->gposkkqsquyqiguk(2); gqycmyieayoegcsy: $qookweymeqawmcwo = ["\x6c\x69\163\x74\x5f\x68\164\x6d\154" => $this->wwqmoqsgmkosymuu($yakcyegsoqusmiak, "\x70\x75\162\x63\x68\x61\163\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\162\145\160\x6f\162\164\x2f\160\x75\162\143\150\x61\x73\145", $qookweymeqawmcwo); } public function aksiycwcekcecuec(bool $scsaeueqgyymsyei = false) : string { $qookweymeqawmcwo = ["\x6c\151\x73\x74\137\x68\164\x6d\154" => $this->wwqmoqsgmkosymuu(Remote::symcgieuakksimmu(), "\x75\163\x61\x67\x65\x73", $scsaeueqgyymsyei)]; return $this->iuygowkemiiwqmiw("\x72\145\x70\x6f\x72\164\x2f\165\x73\141\147\145", $qookweymeqawmcwo); } public function wmeeckgouqiwiqco($sameaqkagyqomooq = 0) : array { $ccowyogiqwikkkie = []; if (!(Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(VirtualBrowserSetting::eoeewcigeywcquis))) { goto sqiyuasgusgawuoi; } $ccowyogiqwikkkie[] = VirtualBrowser::eoeewcigeywcquis; sqiyuasgusgawuoi: return $ccowyogiqwikkkie; } private function wwqmoqsgmkosymuu($meywaqqsugaoeyys, string $ymqmyyeuycgmigyo, bool $scsaeueqgyymsyei = false) { $wqgwesyciiqcoocs = ''; $gikeqowakccckkqe = $meywaqqsugaoeyys->cgswceaawqgeskua(Constants::weiosaewqequuyuq); if (!$gikeqowakccckkqe instanceof Index) { goto ycomeuqeessamows; } $ywmkwiwkosakssii = [Constants::cacismqswgaewkuu => $meywaqqsugaoeyys->miwqiiqeegeqcwis()]; if (!$scsaeueqgyymsyei) { goto iayguaeseyaemwkk; } $ywmkwiwkosakssii[Constants::ausqeuugegoygouq] = 4; iayguaeseyaemwkk: $wqgwesyciiqcoocs = $gikeqowakccckkqe->ekysoioumkkwawwm($ywmkwiwkosakssii, $scsaeueqgyymsyei); if (!$scsaeueqgyymsyei) { goto akyiiioycmgqyuok; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = Page::symcgieuakksimmu()->oiucukewkckkwiqc(); $wqgwesyciiqcoocs .= $swqimwqeweekeusq->yuawgssgauywkiia(__("\126\x69\x65\x77\40\x74\150\x65\x20\x46\x75\x6c\154\40\x52\145\160\157\x72\x74", PR__MDL__OPTIMIZATION), $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\145\147\155\145\156\x74" => "{$ymqmyyeuycgmigyo}\x5f\x72\145\160\157\x72\164"], $eeamcawaiqocomwy), ["\143\154\141\163\163" => "\x70\x72\x2d\x62\164\x6e\x20\x62\164\156\55\160\162\151\155\x61\162\x79\x20\142\164\156\x2d\x61\x63\164\151\157\x6e"]); akyiiioycmgqyuok: ycomeuqeessamows: return $wqgwesyciiqcoocs; } public function sqequueykkkyoqwc($sameaqkagyqomooq) : int { $imeywacwecgemcco = 0; $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!$umwagewoweuckiso) { goto ieoeeyieoskuyiyw; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ccowyogiqwikkkie = $this->wmeeckgouqiwiqco($sameaqkagyqomooq); foreach ($ccowyogiqwikkkie as $aiamqeawckcsuaou) { $uymsgmyyeikucgae = false; switch ($aiamqeawckcsuaou) { case VirtualBrowser::eoeewcigeywcquis: $uymsgmyyeikucgae = $aiamqeawckcsuaou; goto mqacqosyicuiqwia; } mcuoyseuwoueyaie: mqacqosyicuiqwia: if (!$uymsgmyyeikucgae) { goto kwowggaooiyqawyq; } $imeywacwecgemcco += (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, $uymsgmyyeikucgae . "\137\x75\x73\141\147\145", 0); kwowggaooiyqawyq: guummoewucyeuiek: } owiguescmqyqukui: ieoeeyieoskuyiyw: return $imeywacwecgemcco; } public function gwcqgaaameykykci() : string { if ($kekgkgqeyesmkywu = $this->aackauiyyagmeqso()) { goto uwyeycaywowwiquu; } $nsmgceoqaqogqmuw = __("\124\150\x65\162\145\40\151\x73\x20\156\157\x74\x20\144\141\x74\x61\40\164\x6f\40\x73\x68\x6f\x77\40\171\157\x75\54\40\160\x6c\x65\x61\x73\145\40\162\x65\146\162\x65\163\x68\40\x70\x61\147\145\40\157\x72\x20\x63\x6f\156\164\x61\x63\x74\x20\x75\163\x2e", PR__MDL__OPTIMIZATION); goto cwmuqmoeauqcewoy; uwyeycaywowwiquu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->qcgwasumiaaemeei(); if (!($umwagewoweuckiso && ($ogaeiucyqmowuqms = $gkyciwoiiisgywcs->get($umwagewoweuckiso, "\x70\x6c\141\x6e\x5f\x69\144")))) { goto qoaawmmcqyacokws; } $guacamgosccsckmq = $kekgkgqeyesmkywu[$ogaeiucyqmowuqms] ?? ''; if ($guacamgosccsckmq) { goto seyygcwcaogkmaqe; } $guacamgosccsckmq = [Constants::eqewsqmqmsiocaeg => true, Constants::qescuiwgsyuikume => __("\131\x6f\x75\x72\40\x53\165\x62\x73\x63\162\x69\x70\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION)]; goto uugiuqkesegaamqw; seyygcwcaogkmaqe: $ycqsugugqomewkke = false; $yygmoeguaqyumuui = ["\143\162\x69\164\151\x63\141\154\137\143\163\163\x5f\165\x73\141\147\145", "\x73\x70\x65\145\x64\x5f\x74\145\x73\x74\x5f\x75\x73\x61\x67\145"]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!(isset($guacamgosccsckmq[$uusmaiomayssaecw], $umwagewoweuckiso[$uusmaiomayssaecw]) && (int) $guacamgosccsckmq[$uusmaiomayssaecw] !== (int) $umwagewoweuckiso[$uusmaiomayssaecw])) { goto soqkewsayowwcmco; } $ycqsugugqomewkke = true; $guacamgosccsckmq = $umwagewoweuckiso; goto ciiyqsiswkcwsocm; soqkewsayowwcmco: ugyawwukegyoqmsq: } ciiyqsiswkcwsocm: if ($ycqsugugqomewkke) { goto ukigmkeewuqomooc; } $guacamgosccsckmq = null; $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\x25\x73\40\x28\x25\163\x29", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] ?? '', __("\131\x6f\165\162\40\x53\x75\142\163\143\162\x69\x70\164\151\x6f\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::eqewsqmqmsiocaeg] = true; goto wwgikwuigiiqsswq; ukigmkeewuqomooc: $guacamgosccsckmq[Constants::qescuiwgsyuikume] = sprintf("\45\163\40\x28\x25\x73\x29", $guacamgosccsckmq[Constants::qescuiwgsyuikume], __("\x59\x6f\165\162\x20\x53\x75\x62\x73\143\x72\151\x70\x74\x69\157\x6e", PR__MDL__OPTIMIZATION)); $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume] = sprintf("\45\x73\40\50\x25\163\51", $kekgkgqeyesmkywu[$ogaeiucyqmowuqms][Constants::qescuiwgsyuikume], __("\116\x65\167", PR__MDL__OPTIMIZATION)); $guacamgosccsckmq[Constants::eqewsqmqmsiocaeg] = true; wwgikwuigiiqsswq: uugiuqkesegaamqw: if (!$guacamgosccsckmq) { goto ykcmomsiayaymysm; } array_splice($kekgkgqeyesmkywu, 0, 0, [$guacamgosccsckmq]); ykcmomsiayaymysm: qoaawmmcqyacokws: $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x73\x65\x72\166\151\143\x65\137\x63\x6f\163\x74\x73", ["\x70\154\x61\156\163" => $kekgkgqeyesmkywu, "\141\143\164\x69\x6f\x6e\x73" => ["\x63\x72\x69\164\x69\143\x61\x6c\137\x63\x73\163" => __("\103\x72\x69\164\151\x63\x61\x6c\40\x43\x53\123", PR__MDL__OPTIMIZATION), "\x73\x70\145\145\x64\x5f\x74\x65\163\x74" => __("\123\x70\145\x65\144\40\124\x65\x73\164", PR__MDL__OPTIMIZATION)], "\x63\x6f\151\x6e\137\x6d\x61\163\x6b" => __("\45\x73\x20\143\157\151\156\x73", PR__MDL__OPTIMIZATION), "\x73\165\142\x73\x63\162\151\160\x74\151\x6f\156\137\160\x6c\x61\156\163\x5f\164\x69\x74\154\x65" => __("\x53\x75\142\x73\x63\x72\x69\x70\x74\x69\x6f\x6e\x20\x50\x6c\141\x6e\x73", PR__MDL__OPTIMIZATION)]); cwmuqmoeauqcewoy: return $nsmgceoqaqogqmuw; } public function yeeeeqaamyquwaii($iwywmkygwewiamwm) : string { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::weayyoewessosyko => $mokawwccycoiqeka], $iwywmkygwewiamwm); } }
