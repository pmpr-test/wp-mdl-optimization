<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e86b3a376             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\x6f\160\164\151\155\x69\172\x65"; const eueyiwccigugisqe = "\x63\x68\x65\x63\x6b\137\x6c\151\156\x6b"; const wwgqqgayyagycysu = "\x70\165\162\147\145\137\143\141\143\150\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\x73\145\x74\165\x70\137\160\141\x74\x74\x65\162\x6e\x5f\141\143\164\151\157\156"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\x61\143\x74\x69\166\x65\137\160\141\x74\x74\x65\162\156\x5f\141\143\x74\151\157\156"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\143\x68\145\143\153\137\160\x61\164\164\145\162\156\137\x72\x75\x6e\x5f\141\143\x74\151\x6f\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\x70\141\x67\x65\163\137\x63\141\143\150\145\x5f\x73\x74\x61\x74\x75\x73"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\162\145\157\x70\x74\x69\x6d\151\x7a\145\x5f\x70\141\x74\x74\145\x72\x6e\137\x61\143\164\151\157\156"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\x64\x65\x61\143\x74\x69\166\x61\164\x65\137\160\141\164\x74\145\162\x6e\x5f\141\x63\x74\x69\157\x6e"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\143\150\145\x63\153\137\x63\x61\x6e\x64\151\x64\141\x74\145\137\x75\x72\x6c\137\141\x63\164\151\x6f\156"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\x70\141\147\145\163\x5f\x63\x61\143\x68\145\137\x70\162\157\x67\162\x65\163\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\x70\x61\164\x74\145\162\x6e\137\x6d\141\156\x75\141\154\x5f\x6f\160\164\x69\155\151\x7a\145\137\141\143\164\x69\157\156"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\x70\165\162\147\x65\x5f\160\141\164\x74\145\162\156\137\160\x61\x67\x65\x73\137\x63\x61\143\150\145\137\141\x63\164\x69\x6f\156"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\x70\x65\145\144\x5f\x74\x65\x73\x74\137\156\157\164\137\x64\151\x73\160\x61\x63\x68\x61\x62\x6c\145\137\x66\x69\x78\145\144"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\150\x61\156\147\145\x5f\160\x61\147\x65\x5f\x73\x74\x61\164\x75\163"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\x63\150\x61\x6e\x67\145\137\160\x61\x67\x65\x5f\x69\x6d\x70\157\x72\x74\x61\156\164\137\163\x74\x61\164\165\163"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\x63\x68\141\x6e\147\145\137\160\141\x67\x65\137\163\x70\145\145\144\x5f\164\x65\x73\x74\x5f\143\x61\x6e\144\x69\144\x61\x74\x65\x5f\163\x74\x61\164\165\163"; const ccyqqagwskwauoem = ["\x63\x68\x61\156\x67\x65\137\x70\141\x67\x65\137\163\160\x65\x65\144\x5f\164\x65\163\164\x5f\143\141\x6e\144\151\x64\141\x74\145\137\163\164\141\164\165\163" => self::uyuegiyaymqqkcwa, "\143\150\141\156\147\145\137\160\141\147\x65\x5f\151\155\x70\157\162\x74\x61\x6e\x74\x5f\x73\164\141\164\165\163" => self::imigmiemwmuayaca, "\160\165\162\147\x65\137\160\x61\164\164\x65\162\x6e\x5f\160\141\147\x65\163\137\143\141\x63\150\x65" => self::esiucesqiemeickk, "\160\x61\x74\x74\145\162\x6e\137\x6d\141\156\165\x61\x6c\137\x6f\x70\164\x69\x6d\151\172\145" => self::aikyaygyasegygma, "\x6e\x6f\x74\x5f\144\151\163\160\x61\x63\150\141\x62\x6c\x65\x5f\146\x69\170\145\144" => self::sggmuowkoiiuacig, "\x70\141\147\145\163\137\x63\141\x63\x68\x65\137\x70\x72\157\147\162\145\x73\163" => self::ggmmioeoauiyccec, "\143\150\x65\x63\x6b\x5f\143\x61\156\144\x69\144\x61\164\145\137\x6c\151\x6e\153" => self::maqcykaweqimuomu, "\143\150\x61\156\x67\145\137\160\141\x67\145\137\x73\164\x61\x74\165\163" => self::awqksmkmsquoymem, "\160\141\x67\145\x73\x5f\x63\x61\x63\x68\x65\x5f\163\x74\141\x74\165\x73" => self::kaqawyqaekuookgi, "\144\145\141\x63\x74\x69\x76\141\x74\x65\x5f\x70\141\164\164\x65\x72\156" => self::wegmeawoaymsqkyi, "\162\x65\157\160\x74\x69\x6d\x69\x7a\145\137\x70\141\164\x74\145\162\x6e" => self::kusgmosaoigiukgi, "\x63\x68\x65\x63\153\137\160\x61\x74\164\145\x72\x6e\137\x72\x75\156" => self::qskskgmuqiggaqeg, "\x61\x63\164\x69\166\x61\164\145\137\x70\141\x74\164\x65\x72\x6e" => self::quuasuseuccsemsw, "\163\145\164\x75\160\x5f\x70\x61\164\164\x65\162\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\x67\x63\161\x6d\x69\x6f\x6b\x73\x79\167\153\145\153\141\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\151\167\167\157\157\167\x77\x63\x73\143\163\x63\147\165\147"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\x77\155\x71\x61\x73\153\x63\167\141\x6d\151\147\x69\x6d\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\x71\165\143\x79\161\x71\153\147\x73\161\171\x73\141\x6f\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\x77\x75\141\x71\157\x73\155\x71\x6d\x77\x6d\x65\x6f\x69\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\155\x77\x75\x77\x79\151\x61\x67\x65\145\141\145\157\171\x75\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\141\155\147\145\x71\157\147\x6f\x73\147\147\x65\157\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\x61\x65\155\x63\163\153\x65\x6d\147\171\141\157\x61\x6f\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\167\171\x67\143\x67\165\171\147\165\143\x69\x77\x6f\x6b\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\163\x61\x71\x6b\x65\163\x61\x65\141\x65\x63\157\x61\157"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\155\x67\143\x65\x6b\x71\x65\163\143\x71\155\x67\x63\x6b\155\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\163\x6d\x63\x79\143\x6b\165\165\145\x6f\141\x69\141\147"], 10, 0)->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\x63\x69\x63\x65\163\x77\x67\x69\163\x65\153\151\x63\147\151"], 10, 0)->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\x6b\153\171\163\x65\x79\145\x79\x67\x61\163\x65\151\x6f\x71"], 10, 0); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto sioekkmekwygemyc; } $keccaugmemegoimu = __("\x59\157\x75\40\150\x61\x76\145\x20\156\157\x20\160\145\162\155\x69\x73\x73\x69\157\156\x20\x74\x6f\40\x64\x6f\x20\x74\150\x69\163\x2e", PR__MDL__OPTIMIZATION); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\x70\x65\145\x64\40\x54\145\163\164\x20\x66\165\156\143\x74\x69\157\156\141\154\x69\x74\171\40\x66\x6f\x72\40\x63\141\x6e\144\151\x64\x61\x74\x65\x20\x70\141\x67\145\x73\40\162\145\x73\165\155\145\144\56", PR__MDL__OPTIMIZATION); yiowgigkkwsoqcci: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\116\x6f\x72\x6d\x61\154", PR__MDL__OPTIMIZATION), 1 => __("\111\x6d\160\157\162\x74\x61\156\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\104\x6f\156\x74\x20\124\x61\153\x65\x20\123\x70\145\x65\x64\40\x54\x65\163\164", PR__MDL__OPTIMIZATION), 1 => __("\124\x61\x6b\145\40\x53\160\x65\x65\144\x20\124\x65\x73\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto mogkoocsoeuyoqqa; } $keccaugmemegoimu = __("\131\157\x75\40\x68\141\x76\145\x20\x6e\x6f\40\160\145\162\x6d\x69\163\x73\x69\157\156\x20\x74\157\40\x64\x6f\x20\x74\150\x69\163\56", PR__MDL__OPTIMIZATION); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto iesekaeqeomeuaui; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto mscyggqcesgqqksu; } $keccaugmemegoimu = __("\x59\157\165\162\x20\163\165\x62\155\151\163\x73\151\x6f\x6e\x20\x73\x74\141\164\165\x73\x20\151\163\40\x6e\x6f\164\x20\141\x20\166\141\x6c\151\144\40\x73\x74\141\164\x75\163\x2e", PR__MDL__OPTIMIZATION); goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto ieqesiiageaauiuw; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x50\141\147\x65\40\x73\164\141\164\x75\x73\x20\143\x68\x61\x6e\147\x65\144\x20\x74\157\40\45\163\40\x73\165\143\x63\x65\163\163\146\165\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\x75\162\147\145\137\x65\154\145\x63\x74\145\x64\x5f\160\141\147\x65\137\x68\x74\155\x6c\x5f\x63\141\143\150\x65", $qkcoyiyeuoyyoocy); gamqcwuwkikwqoay: oyeyomcgkmgymogq: wsesqmcqoiyyqkqi: wkwamkgkwykeqkec: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto mscgewkcqcoowweg; } $keccaugmemegoimu = __("\131\x6f\x75\40\150\141\166\x65\x20\x6e\157\x20\160\x65\x72\155\x69\163\x73\151\157\x6e\40\164\x6f\x20\x64\157\40\x74\150\x69\x73\x2e", PR__MDL__OPTIMIZATION); goto suqcsgaosywaauuu; mscgewkcqcoowweg: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto esaqcqqwuussiiwo; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\164\164\145\x72\156\40\116\x6f\x74\x20\x46\x6f\165\156\144", PR__MDL__OPTIMIZATION)); goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto suqceasgacskcmkc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\123\117\x4e", PR__MDL__OPTIMIZATION)); goto yykqaowwsqgqysmq; suqceasgacskcmkc: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\x69\162\164\165\141\x6c\x5f\x62\x72\x6f\x77\163\145\x72\137\143\x61\143\150\x65\137\162\x65\x73\165\154\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\x50\x61\x74\x74\x65\162\x6e\x20\144\141\x74\141\40\x63\x61\143\x68\145\144\40\163\165\x63\143\x65\x73\163\x66\x75\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION); yykqaowwsqgqysmq: goto oimkeqocuguqqsqk; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\162\157\x67\162\145\163\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto oimkeqocuguqqsqk; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto oimkeqocuguqqsqk; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto yuimwyoywaiiqacs; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\162\145\40\151\x73\x20\156\x6f\x20\162\145\155\x6f\164\x65\x20\x72\165\x6e\x20\x66\x6f\x72\40\160\x61\x74\164\x65\162\156\x2e", PR__MDL__OPTIMIZATION)); goto ocywegekakimmwcq; yuimwyoywaiiqacs: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto gswcoeiisamakwii; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\151\162\x74\x75\141\x6c\137\142\x72\157\167\x73\145\x72\x5f\143\150\145\x63\153\x5f\x66\151\x6e\151\163\150\x65\x64", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto yoqakewookqoqacm; } if (is_wp_error($sogksuscggsicmac)) { goto uckewycoogsogwiy; } if (!$sogksuscggsicmac) { goto kwiggogcgciwuwqk; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; kwiggogcgciwuwqk: goto ikuuiauwouuqawuw; uckewycoogsogwiy: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; ikuuiauwouuqawuw: yoqakewookqoqacm: gswcoeiisamakwii: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\154\x61\x74\x65\163\x74\x5f\x72\x75\156" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\145\163\164\137\162\165\156", true) : '', "\x70\141\147\x65\x73\x5f\x63\x61\x63\150\x65" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; ocywegekakimmwcq: goto oimkeqocuguqqsqk; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto oimkeqocuguqqsqk; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto iwsmmkqaoksmocok; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto emqswoaawgeyosmi; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); emqswoaawgeyosmi: iwsmmkqaoksmocok: goto oimkeqocuguqqsqk; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto esikeyqyuikmaiek; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); esikeyqyuikmaiek: goto oimkeqocuguqqsqk; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto oimkeqocuguqqsqk; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto okkmcocqokkskasy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\x65\x74\150\151\x6e\x67\40\167\162\x6f\x6e\147\x20\157\156\40\160\x75\162\147\x69\156\147\40\x70\141\147\145\x73\40\x63\x61\x63\x68\x65\56", PR__MDL__OPTIMIZATION)); goto qiiigwkqeoewsuwm; okkmcocqokkskasy: $keccaugmemegoimu = __("\x50\141\147\x65\163\40\x63\141\143\x68\145\x20\x70\165\x72\147\x65\144\40\163\x75\x63\x63\x65\x73\163\x66\165\x6c\x6c\x79\56", PR__MDL__OPTIMIZATION); qiiigwkqeoewsuwm: goto oimkeqocuguqqsqk; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto oimkeqocuguqqsqk; } oeocukauoyosicso: oimkeqocuguqqsqk: ikqeeaysmqgcgawq: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; suqcsgaosywaauuu: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto wwukgaquuyoissgy; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); wwukgaquuyoissgy: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto yqagomygmeoecwey; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto gsygwgsiawgmqiyi; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x52\x4c\x20\151\x73\40\x6e\157\164\x20\155\x61\x74\x63\x68\145\x64\x20\164\157\x20\160\x61\x74\164\145\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto qsgqwyqaqiowkmco; gsygwgsiawgmqiyi: $ksaameoqigiaoigg = $iwywmkygwewiamwm; qsgqwyqaqiowkmco: yqagomygmeoecwey: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto ucuoeymyqeokgsya; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\164\164\145\x72\156\40\141\154\162\145\141\x64\171\x20\x73\145\x74\165\160\145\144\x2e", PR__MDL__OPTIMIZATION)); goto yuuyikiacmmueosu; ucuoeymyqeokgsya: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto mysueeoswqgccmui; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto zayqqeqgcwkekwws; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto oqousikwiiqagoyw; } $ueeagokqmgisgauy .= "\x3c\x62\x72\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; oqousikwiiqagoyw: sqyokemumceysegy: } aiccyaswigkaycqk: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\157\155\145\40\x70\141\x67\x65\x20\156\157\164\x20\141\x64\x64\56\40\x25\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto aueaceeyommgkicu; zayqqeqgcwkekwws: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto eucqomyqykgoiuge; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto usymasgsyqgsuocg; eucqomyqykgoiuge: if ($iwywmkygwewiamwm) { goto qikaewekoecykeou; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); qikaewekoecykeou: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); usymasgsyqgsuocg: aueaceeyommgkicu: goto egmayaiikwsskgmy; mysueeoswqgccmui: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x52\114\40\151\x73\x20\x6e\157\x74\40\155\141\x74\x63\150\145\x64\x20\x74\x6f\40\x70\141\164\x74\145\162\x6e\56", PR__MDL__OPTIMIZATION)); egmayaiikwsskgmy: yuuyikiacmmueosu: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto agkmiayuawacakau; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto sguskaeaaqcagqgc; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); sguskaeaaqcagqgc: agkmiayuawacakau: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\162\164\165\x61\x6c\x5f\142\x72\x6f\x77\163\x65\162\137\141\x64\144\137\152\157\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto oocuemosmeeekgas; } $sogksuscggsicmac = ["\x70\141\x67\x65\163\x5f\x63\x61\143\150\145\x5f\163\164\141\164\x75\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\x61\x67\x65\x73\x5f\x63\141\x63\x68\x65", true), "\x70\x61\164\164\145\x72\x6e\x5f\160\162\x6f\147\162\x65\x73\163\142\141\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\x61\164\x65\x73\x74\137\162\x75\156", true)]; goto qkcsykuocwuyaice; oocuemosmeeekgas: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\143\x75\x72\x6c\x20\145\162\x72\157\162"))) { goto syuaummumssgwwee; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\156\x20\156\157\x74\x20\x63\157\x6e\156\145\x63\x74\40\x74\x6f\40\163\x65\x72\x76\x65\162\x20\162\151\147\x68\x74\40\156\x6f\167\x2c\x20\160\x6c\145\141\x73\145\40\x74\162\x79\40\154\141\164\145\x72\x20\157\x72\40\x63\157\x6e\x74\141\143\164\40\165\x73\x2e", PR__MDL__OPTIMIZATION), 500); syuaummumssgwwee: qkcsykuocwuyaice: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
