<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb25af783f1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\x74\151\x6d\151\x7a\145"; const eueyiwccigugisqe = "\143\150\145\143\x6b\x5f\x6c\x69\x6e\x6b"; const wwgqqgayyagycysu = "\x70\x75\162\x67\x65\137\x63\141\x63\x68\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\145\x74\165\x70\137\160\141\x74\164\145\162\x6e\x5f\x61\x63\164\x69\157\x6e"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\x61\x63\164\x69\166\x65\137\x70\x61\x74\x74\x65\x72\x6e\x5f\x61\x63\x74\151\x6f\156"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\150\x65\x63\x6b\x5f\x70\141\x74\x74\x65\162\156\137\162\165\x6e\137\x61\143\164\x69\x6f\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\x70\141\x67\145\163\x5f\143\x61\x63\150\x65\137\x73\x74\x61\164\165\x73"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\x72\x65\x6f\x70\164\151\155\x69\172\x65\137\160\x61\x74\x74\x65\x72\156\137\141\143\164\151\x6f\156"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\x64\145\141\143\164\151\166\141\x74\145\x5f\x70\141\x74\x74\x65\x72\x6e\137\141\143\164\151\x6f\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\143\150\145\143\x6b\137\143\x61\156\x64\x69\x64\x61\164\x65\x5f\165\162\x6c\x5f\141\143\x74\151\157\x6e"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\160\141\147\145\x73\137\143\141\x63\x68\x65\137\160\162\157\147\162\145\x73\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\160\x61\164\164\x65\162\x6e\137\x6d\x61\156\165\141\x6c\137\x6f\x70\164\151\155\x69\x7a\145\x5f\x61\x63\164\151\157\156"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\x70\x75\162\x67\145\137\x70\x61\x74\x74\x65\x72\x6e\137\160\x61\147\x65\x73\x5f\143\141\x63\150\145\137\141\143\164\x69\x6f\156"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\163\x70\145\x65\144\x5f\x74\x65\163\164\x5f\x6e\x6f\x74\x5f\x64\x69\x73\160\x61\x63\150\x61\142\154\145\x5f\x66\x69\170\145\x64"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\x68\141\156\x67\x65\137\x70\x61\x67\x65\x5f\x73\x74\141\164\x75\x73"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\143\x68\x61\x6e\147\145\x5f\160\141\x67\x65\137\151\x6d\x70\x6f\x72\x74\141\156\x74\x5f\x73\164\x61\164\x75\163"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\x63\x68\x61\x6e\147\145\137\x70\x61\x67\x65\137\x73\160\145\x65\x64\x5f\x74\145\163\164\x5f\143\141\x6e\144\x69\144\141\164\145\x5f\x73\164\x61\164\x75\163"; const ccyqqagwskwauoem = ["\143\x68\x61\x6e\147\x65\137\160\x61\147\145\x5f\x73\160\145\145\144\137\x74\x65\x73\x74\x5f\x63\141\x6e\144\x69\x64\141\x74\145\137\163\x74\141\164\x75\163" => self::uyuegiyaymqqkcwa, "\143\x68\x61\156\x67\145\x5f\x70\141\x67\145\x5f\151\x6d\x70\x6f\162\x74\x61\x6e\164\x5f\x73\164\141\164\x75\163" => self::imigmiemwmuayaca, "\x70\165\x72\x67\145\137\160\x61\x74\164\145\x72\156\x5f\x70\141\147\145\x73\137\x63\x61\143\150\145" => self::esiucesqiemeickk, "\160\141\164\x74\145\x72\x6e\137\x6d\141\156\x75\141\154\137\x6f\x70\x74\x69\x6d\x69\172\x65" => self::aikyaygyasegygma, "\x6e\157\164\x5f\x64\x69\x73\160\141\143\x68\141\142\154\145\137\146\151\x78\x65\144" => self::sggmuowkoiiuacig, "\x70\141\147\x65\x73\137\143\x61\143\x68\145\137\x70\162\157\x67\162\145\163\163" => self::ggmmioeoauiyccec, "\143\150\x65\x63\153\137\143\141\x6e\x64\151\x64\x61\x74\145\x5f\x6c\151\x6e\153" => self::maqcykaweqimuomu, "\143\x68\x61\x6e\x67\145\x5f\x70\x61\x67\x65\x5f\163\x74\x61\164\x75\x73" => self::awqksmkmsquoymem, "\160\141\147\145\163\x5f\x63\141\x63\150\x65\137\163\164\x61\164\x75\163" => self::kaqawyqaekuookgi, "\144\x65\x61\143\x74\x69\166\141\164\145\137\x70\141\164\164\145\162\156" => self::wegmeawoaymsqkyi, "\162\145\x6f\x70\x74\x69\x6d\x69\172\145\137\160\x61\x74\x74\x65\x72\156" => self::kusgmosaoigiukgi, "\x63\x68\x65\143\x6b\x5f\160\141\164\164\x65\162\x6e\137\x72\x75\x6e" => self::qskskgmuqiggaqeg, "\141\143\x74\x69\x76\141\x74\x65\x5f\x70\141\x74\x74\x65\162\156" => self::quuasuseuccsemsw, "\x73\x65\x74\165\160\x5f\160\141\x74\x74\x65\162\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\147\143\x71\x6d\x69\157\x6b\163\171\x77\x6b\x65\153\141\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\151\167\x77\157\157\167\167\x63\163\143\163\x63\147\165\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\x77\155\x71\141\163\x6b\x63\x77\x61\155\x69\147\x69\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\x71\165\x63\171\161\x71\x6b\x67\163\161\171\x73\141\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\x77\165\x61\161\x6f\163\155\161\155\x77\155\x65\x6f\x69\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\167\165\167\x79\x69\141\147\x65\x65\x61\145\x6f\171\x75\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\141\x6d\x67\x65\x71\157\147\157\163\x67\147\145\157\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\x61\145\155\x63\x73\x6b\x65\155\x67\x79\x61\x6f\x61\x6f\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\x77\171\x67\x63\x67\165\171\147\165\x63\151\167\x6f\153\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\163\141\x71\x6b\x65\163\141\x65\x61\x65\x63\x6f\x61\157"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\x6d\147\143\x65\153\161\x65\x73\x63\x71\x6d\x67\x63\153\x6d\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\x73\155\x63\171\x63\153\x75\x75\145\x6f\x61\x69\x61\147"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\147\x63\151\143\x65\x73\x77\x67\x69\x73\x65\153\151\143\x67\x69"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\153\x6b\x79\x73\145\171\x65\171\147\141\163\x65\x69\x6f\161"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto kymkucucyeoeikim; } $keccaugmemegoimu = __("\131\x6f\x75\40\150\141\166\145\40\x6e\x6f\x20\x70\x65\x72\x6d\x69\163\x73\x69\x6f\x6e\x20\x74\157\x20\144\x6f\40\x74\150\x69\163\56", PR__MDL__OPTIMIZATION); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\x70\x65\x65\144\x20\124\145\163\x74\x20\x66\x75\156\x63\x74\151\157\x6e\141\154\x69\164\171\40\x66\157\162\x20\143\x61\x6e\144\151\x64\x61\164\x65\40\160\141\x67\x65\x73\x20\162\x65\163\x75\155\x65\x64\x2e", PR__MDL__OPTIMIZATION); usquiuuyiyqaeyiu: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\x4e\157\162\x6d\x61\x6c", PR__MDL__OPTIMIZATION), 1 => __("\111\155\x70\x6f\x72\x74\141\156\164", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\104\157\156\x74\40\124\141\x6b\x65\40\123\160\145\x65\x64\x20\124\x65\163\x74", PR__MDL__OPTIMIZATION), 1 => __("\124\x61\x6b\145\40\x53\160\x65\x65\x64\x20\x54\145\163\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto suqkuqygkkgwyaie; } $keccaugmemegoimu = __("\131\x6f\165\40\150\x61\x76\145\40\x6e\157\x20\160\x65\x72\x6d\x69\163\x73\x69\x6f\156\40\164\x6f\x20\x64\157\40\x74\150\151\163\x2e", PR__MDL__OPTIMIZATION); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto gaomwagkcciesyqy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto aegysmeecgcgayyw; gaomwagkcciesyqy: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto uqqaiagaeqgqgaiy; } $keccaugmemegoimu = __("\x59\157\165\x72\x20\163\x75\x62\x6d\x69\x73\163\151\157\156\x20\x73\164\141\x74\x75\x73\x20\x69\x73\x20\156\157\x74\40\141\40\166\141\x6c\x69\144\40\163\x74\x61\164\x75\x73\x2e", PR__MDL__OPTIMIZATION); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto qicwaskssogcokgm; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto uguigkcmukuouway; qicwaskssogcokgm: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\120\x61\x67\145\x20\x73\x74\x61\x74\165\x73\40\143\150\x61\156\147\145\x64\40\x74\x6f\x20\45\163\x20\163\x75\143\x63\x65\x73\163\x66\x75\154\x6c\171\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\x75\x72\147\145\137\145\x6c\145\x63\x74\x65\144\137\160\x61\x67\145\137\x68\x74\155\154\137\143\141\x63\x68\145", $qkcoyiyeuoyyoocy); uguigkcmukuouway: esuiysskoweawsue: aegysmeecgcgayyw: soaccwqimeksgwiw: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = __("\131\157\165\x20\x68\x61\166\x65\40\156\157\40\x70\145\162\x6d\x69\x73\x73\151\157\x6e\40\164\x6f\40\x64\x6f\40\x74\x68\x69\163\x2e", PR__MDL__OPTIMIZATION); goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto wgewmqieuamsoayy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\164\164\145\x72\x6e\40\116\157\164\x20\x46\x6f\x75\x6e\x64", PR__MDL__OPTIMIZATION)); goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto cgiscsqwwgqqaeqi; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\123\117\116", PR__MDL__OPTIMIZATION)); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\x74\x75\141\x6c\x5f\142\162\x6f\167\163\x65\x72\x5f\x63\x61\143\150\x65\137\x72\145\x73\x75\154\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\164\164\x65\x72\156\40\144\141\164\x61\x20\143\x61\x63\x68\145\144\x20\163\165\143\x63\145\163\163\x66\165\154\x6c\171\x2e", PR__MDL__OPTIMIZATION); syiqkaasoueowwui: goto wiysogeqqwgioyka; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\157\x67\x72\145\163\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto wiysogeqqwgioyka; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto wiysogeqqwgioyka; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\145\40\151\163\x20\x6e\157\x20\x72\x65\x6d\157\164\145\x20\x72\x75\156\x20\x66\x6f\x72\40\x70\x61\x74\x74\145\x72\156\56", PR__MDL__OPTIMIZATION)); goto egyyiccaeeiooaua; ooeausyowguqicuo: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto gkyawqqcmigqgaiq; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\x69\162\164\x75\x61\154\137\x62\x72\x6f\167\163\x65\x72\x5f\x63\150\x65\143\153\137\x66\x69\156\151\x73\x68\145\x64", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto wmywuusgukmmaams; } if (is_wp_error($sogksuscggsicmac)) { goto ewymsmkkiksgwysk; } if (!$sogksuscggsicmac) { goto giaacoqqqsekcayy; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; giaacoqqqsekcayy: goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; cmegwsegsosyqcai: wmywuusgukmmaams: gkyawqqcmigqgaiq: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\164\145\163\x74\x5f\162\165\156" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\x65\x73\x74\x5f\162\165\156", true) : '', "\160\x61\x67\x65\163\x5f\143\x61\x63\150\x65" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; egyyiccaeeiooaua: goto wiysogeqqwgioyka; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto wiysogeqqwgioyka; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto cewmoqyysgsmuiya; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto scisgsyemmsekgos; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); scisgsyemmsekgos: cewmoqyysgsmuiya: goto wiysogeqqwgioyka; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto igooksugieceoege; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); igooksugieceoege: goto wiysogeqqwgioyka; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto wiysogeqqwgioyka; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto omqiayeucoioqoao; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\x65\x74\x68\x69\156\x67\x20\x77\162\x6f\156\x67\x20\x6f\x6e\x20\160\165\162\x67\x69\156\147\x20\160\x61\147\x65\163\40\143\x61\143\150\x65\x2e", PR__MDL__OPTIMIZATION)); goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $keccaugmemegoimu = __("\120\141\147\145\163\40\143\x61\143\x68\x65\x20\160\x75\x72\x67\x65\144\x20\163\x75\143\143\x65\163\163\x66\x75\154\x6c\171\x2e", PR__MDL__OPTIMIZATION); ugqaaewwmkocwwgy: goto wiysogeqqwgioyka; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto wiysogeqqwgioyka; } skkamseieeusycye: wiysogeqqwgioyka: kqgcyoscsusgoaqi: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; sggawugoykqcmsug: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto wkeuuycukmuqiaom; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); wkeuuycukmuqiaom: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto owmuceyswmgueasi; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto wakmayaoqoskekqy; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\122\114\x20\x69\163\40\x6e\x6f\164\40\x6d\x61\164\143\x68\145\144\40\x74\x6f\x20\160\141\x74\164\145\162\156\56", PR__MDL__OPTIMIZATION)); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $ksaameoqigiaoigg = $iwywmkygwewiamwm; qmuwoecuacmkwgem: owmuceyswmgueasi: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto mqicocmqegwukkwg; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\x74\x74\145\162\156\40\x61\154\162\x65\x61\144\x79\x20\163\x65\x74\x75\x70\x65\144\x2e", PR__MDL__OPTIMIZATION)); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto asiqwuoswmigcaki; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto iwsuawwqomaowuii; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto qoqskyuuwueqkquk; } $ueeagokqmgisgauy .= "\74\x62\162\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; qoqskyuuwueqkquk: wagqgeqymeqoeuyi: } msemumccgceyugmg: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\x6f\155\145\40\160\x61\147\x65\40\x6e\157\164\40\141\144\x64\56\40\45\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto wcugqegqsuuuwqao; iwsuawwqomaowuii: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto eeauyscekuckoues; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto eogwckcymuugikuy; eeauyscekuckoues: if ($iwywmkygwewiamwm) { goto mwsmsguqqkcwiiuk; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); mwsmsguqqkcwiiuk: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); eogwckcymuugikuy: wcugqegqsuuuwqao: goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\122\114\40\151\x73\x20\156\157\x74\x20\x6d\x61\x74\x63\x68\x65\x64\40\164\157\x20\160\141\x74\x74\145\162\156\56", PR__MDL__OPTIMIZATION)); ciykoyeioqgyaeqo: qgeugwymkkiacwoc: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto ouamogymawucwswu; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto emmsycooskoqmgeg; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); emmsycooskoqmgeg: ouamogymawucwswu: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\x69\x72\164\x75\x61\x6c\137\x62\x72\157\x77\163\145\x72\x5f\141\144\x64\137\x6a\157\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto acsqgiuageaasiyy; } $sogksuscggsicmac = ["\x70\x61\x67\145\163\x5f\143\x61\x63\x68\145\137\163\164\x61\164\x75\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\x61\147\x65\x73\x5f\143\141\x63\x68\x65", true), "\x70\141\164\x74\145\162\x6e\x5f\160\162\157\147\162\145\163\x73\142\x61\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\164\x65\x73\164\137\x72\x75\156", true)]; goto oomguqikqokqwgku; acsqgiuageaasiyy: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\143\x75\162\x6c\40\145\162\x72\157\162"))) { goto mugqyyeayeyggqqk; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\156\x20\156\157\164\40\x63\x6f\x6e\x6e\145\x63\x74\40\x74\157\40\x73\145\162\166\x65\x72\40\162\151\147\150\x74\40\156\157\x77\x2c\40\160\154\145\x61\163\x65\40\x74\x72\171\x20\x6c\x61\164\x65\162\x20\x6f\162\x20\143\x6f\x6e\x74\x61\143\x74\40\165\x73\56", PR__MDL__OPTIMIZATION), 500); mugqyyeayeyggqqk: oomguqikqokqwgku: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
