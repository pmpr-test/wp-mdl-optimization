<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a588a282a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Common { use PageManagerEngineTrait; const swkaqiikoaickuui = "\157\x70\164\x69\x6d\x69\x7a\145"; const eueyiwccigugisqe = "\143\150\x65\143\x6b\137\x6c\151\156\x6b"; const wwgqqgayyagycysu = "\x70\165\162\147\145\137\x63\x61\x63\150\145"; const aeksqkkekigwssku = Optimization::kgswyesggeyekgmg . "\163\145\164\165\x70\137\160\141\x74\x74\145\162\156\137\141\143\164\x69\x6f\x6e"; const quuasuseuccsemsw = Optimization::kgswyesggeyekgmg . "\x61\143\x74\151\x76\x65\137\x70\x61\x74\164\145\x72\x6e\137\141\x63\x74\x69\x6f\x6e"; const qskskgmuqiggaqeg = Optimization::kgswyesggeyekgmg . "\x63\150\145\143\153\137\x70\x61\164\x74\145\162\156\x5f\x72\165\156\137\141\143\x74\x69\x6f\x6e"; const kaqawyqaekuookgi = Optimization::kgswyesggeyekgmg . "\x70\x61\x67\145\163\137\143\x61\x63\x68\x65\x5f\x73\164\141\164\x75\x73"; const kusgmosaoigiukgi = Optimization::kgswyesggeyekgmg . "\162\x65\x6f\x70\164\151\155\151\x7a\145\137\x70\x61\x74\x74\145\162\x6e\137\141\x63\164\x69\x6f\156"; const wegmeawoaymsqkyi = Optimization::kgswyesggeyekgmg . "\144\x65\x61\143\164\x69\166\141\164\145\x5f\x70\141\164\164\145\x72\156\137\141\143\x74\151\157\x6e"; const ciccegoegwcgyaqo = Optimization::kgswyesggeyekgmg . "\144\x65\x6c\145\164\145\x5f\157\x72\x70\x68\141\156\x5f\160\x61\x67\145\163\x5f\x61\143\164\x69\x6f\156"; const maqcykaweqimuomu = Optimization::kgswyesggeyekgmg . "\x63\x68\145\143\153\137\x63\x61\x6e\x64\151\144\141\x74\145\x5f\165\162\x6c\x5f\x61\x63\x74\x69\157\156"; const ggmmioeoauiyccec = Optimization::kgswyesggeyekgmg . "\x70\141\x67\145\163\x5f\143\141\143\x68\x65\x5f\x70\162\157\x67\x72\145\163\x73"; const aikyaygyasegygma = Optimization::kgswyesggeyekgmg . "\x70\x61\164\164\x65\162\156\137\155\141\156\x75\x61\154\137\x6f\x70\x74\x69\155\151\172\x65\x5f\141\x63\x74\151\x6f\156"; const esiucesqiemeickk = Optimization::kgswyesggeyekgmg . "\x70\x75\x72\x67\x65\x5f\x70\141\x74\164\x65\162\x6e\x5f\x70\141\x67\145\163\137\x63\x61\x63\150\145\x5f\141\143\x74\x69\157\x6e"; const sggmuowkoiiuacig = Optimization::kgswyesggeyekgmg . "\x73\160\145\145\144\x5f\x74\x65\163\x74\x5f\x6e\157\164\137\x64\x69\x73\x70\x61\143\x68\x61\x62\154\x65\x5f\x66\x69\170\x65\x64"; const awqksmkmsquoymem = Optimization::kgswyesggeyekgmg . "\x63\150\x61\x6e\147\x65\x5f\160\x61\147\145\x5f\x73\164\x61\164\x75\x73"; const imigmiemwmuayaca = Optimization::kgswyesggeyekgmg . "\x63\150\x61\x6e\x67\145\x5f\x70\x61\x67\x65\137\x69\155\160\x6f\162\164\x61\x6e\x74\x5f\x73\164\141\x74\x75\163"; const uyuegiyaymqqkcwa = Optimization::kgswyesggeyekgmg . "\143\x68\141\156\147\x65\x5f\x70\141\x67\x65\137\163\160\145\145\x64\137\x74\145\x73\164\137\143\x61\156\144\x69\144\141\164\145\x5f\163\164\x61\x74\x75\x73"; const ccyqqagwskwauoem = ["\143\150\x61\x6e\147\145\x5f\160\141\147\x65\x5f\163\160\145\145\x64\137\164\x65\163\x74\x5f\x63\141\x6e\144\x69\x64\141\x74\x65\x5f\x73\x74\x61\x74\x75\163" => self::uyuegiyaymqqkcwa, "\143\x68\x61\x6e\147\145\137\x70\x61\147\x65\137\x69\155\160\x6f\162\164\141\156\164\137\163\x74\x61\x74\165\163" => self::imigmiemwmuayaca, "\x70\x75\x72\147\145\137\x70\141\164\x74\x65\162\x6e\137\160\141\147\145\163\x5f\x63\141\143\150\x65" => self::esiucesqiemeickk, "\x70\141\x74\x74\x65\162\156\137\x6d\141\156\x75\x61\x6c\x5f\x6f\x70\x74\151\155\151\172\145" => self::aikyaygyasegygma, "\156\x6f\x74\x5f\x64\151\x73\x70\x61\143\150\141\142\x6c\x65\137\146\151\170\145\144" => self::sggmuowkoiiuacig, "\x70\141\x67\x65\163\x5f\x63\x61\143\150\145\x5f\x70\x72\157\147\x72\x65\x73\163" => self::ggmmioeoauiyccec, "\x63\x68\x65\x63\153\x5f\x63\x61\156\x64\151\144\x61\x74\x65\137\x6c\x69\x6e\x6b" => self::maqcykaweqimuomu, "\144\x65\x6c\x65\164\145\137\x6f\162\160\150\141\156\137\x70\x61\x67\x65\x73" => self::ciccegoegwcgyaqo, "\x63\150\141\156\147\x65\x5f\x70\x61\x67\145\x5f\x73\x74\x61\x74\x75\x73" => self::awqksmkmsquoymem, "\160\141\147\x65\163\137\143\x61\143\150\x65\x5f\x73\x74\141\x74\x75\163" => self::kaqawyqaekuookgi, "\x64\145\141\143\164\151\166\141\164\x65\x5f\x70\141\164\164\x65\x72\x6e" => self::wegmeawoaymsqkyi, "\162\145\157\x70\x74\x69\155\151\172\145\x5f\x70\x61\x74\164\145\x72\x6e" => self::kusgmosaoigiukgi, "\x63\x68\x65\143\153\137\160\141\x74\164\145\x72\x6e\137\162\x75\156" => self::qskskgmuqiggaqeg, "\141\x63\164\x69\x76\x61\164\145\x5f\x70\141\x74\164\145\x72\156" => self::quuasuseuccsemsw, "\163\x65\164\165\x70\137\x70\141\164\x74\145\162\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\143\147\x63\x71\155\151\157\x6b\163\171\x77\153\145\x6b\x61\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\x63\x69\x77\167\157\x6f\167\x77\143\x73\x63\x73\x63\x67\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\x77\x6d\161\141\x73\153\x63\x77\141\x6d\x69\147\x69\155\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\161\165\143\171\161\161\x6b\147\x73\161\171\x73\x61\157\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\167\x75\141\x71\x6f\x73\x6d\161\155\167\x6d\x65\x6f\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\x6d\x77\x75\167\171\151\141\x67\x65\145\x61\145\157\171\x75\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\153\x61\155\x67\x65\x71\157\147\x6f\163\147\x67\145\x6f\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\141\x61\145\x6d\143\163\153\x65\155\147\171\x61\157\141\157\x77"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\161\167\x79\147\x63\147\x75\171\x67\165\x63\x69\x77\157\x6b\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\163\x65\163\141\x71\153\145\163\x61\x65\x61\145\x63\x6f\141\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\x6d\147\143\x65\153\161\145\163\x63\161\155\x67\143\153\x6d\171"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\143\x79\163\x6d\x63\171\x63\153\165\165\x65\157\x61\151\x61\147"])->koaegcswmcqsiykq(self::ciccegoegwcgyaqo, [$this, "\167\x6d\161\x77\143\x77\x79\143\x6d\157\161\x6d\143\x6b\x75\x77"])->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\x63\x69\x63\145\x73\167\x67\151\163\145\x6b\151\143\x67\151"])->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\x6f\153\x6b\171\163\x65\171\x65\171\147\x61\x73\x65\x69\x6f\161"]); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto sioekkmekwygemyc; } $keccaugmemegoimu = __("\131\157\x75\x20\x68\x61\x76\x65\x20\156\157\40\160\145\x72\155\x69\x73\163\151\x6f\156\x20\x74\157\x20\144\157\x20\x74\150\151\163\56", PR__MDL__OPTIMIZATION); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\123\160\x65\x65\x64\x20\x54\x65\x73\164\40\146\x75\x6e\x63\x74\151\157\156\141\x6c\x69\x74\171\x20\146\x6f\x72\40\x63\141\x6e\x64\x69\x64\x61\164\x65\40\x70\x61\147\x65\x73\x20\x72\x65\163\x75\x6d\145\144\56", PR__MDL__OPTIMIZATION); yiowgigkkwsoqcci: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function wmqwcwycmoqmckuw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto mscyggqcesgqqksu; } $keccaugmemegoimu = __("\x59\157\165\x20\x68\x61\166\145\40\156\x6f\40\160\145\162\x6d\151\x73\163\151\157\x6e\40\164\157\40\x64\157\x20\x74\x68\x69\x73\56", PR__MDL__OPTIMIZATION); goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $occymigcemkqucuw = true; $sogksuscggsicmac = Page::symcgieuakksimmu()->qusqeaiqgggmaskw([Page::ewyamgkooeqiecwg => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); if ($sogksuscggsicmac > 0) { goto ieqesiiageaauiuw; } $keccaugmemegoimu = __("\x4e\157\x20\157\162\160\x68\141\x6e\40\x65\x6c\x65\143\164\x65\x64\40\x70\x61\x67\145\x20\x66\x6f\x75\156\144\145\x64\x2e", PR__MDL__OPTIMIZATION); goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $keccaugmemegoimu = __("\101\154\154\x20\157\x72\160\150\141\156\40\145\x6c\x65\143\164\x65\x64\x20\x70\x61\x67\x65\x73\x20\x64\145\x6c\x65\x74\145\x64\x2e", PR__MDL__OPTIMIZATION); gamqcwuwkikwqoay: oyeyomcgkmgymogq: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\x4e\157\x72\x6d\x61\154", PR__MDL__OPTIMIZATION), 1 => __("\x49\155\160\157\162\164\141\x6e\164", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\104\157\x6e\164\x20\x54\x61\153\x65\40\x53\160\x65\x65\144\40\x54\145\x73\164", PR__MDL__OPTIMIZATION), 1 => __("\x54\x61\153\145\40\x53\160\x65\145\144\x20\x54\145\163\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto suqceasgacskcmkc; } $keccaugmemegoimu = __("\131\x6f\165\40\x68\x61\x76\x65\40\x6e\157\x20\160\145\x72\x6d\x69\x73\163\x69\157\x6e\40\x74\x6f\x20\144\157\40\x74\150\151\x73\56", PR__MDL__OPTIMIZATION); goto yykqaowwsqgqysmq; suqceasgacskcmkc: $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { goto oimkeqocuguqqsqk; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto oeocukauoyosicso; oimkeqocuguqqsqk: $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { goto mogkoocsoeuyoqqa; } $keccaugmemegoimu = __("\x59\x6f\165\x72\40\x73\165\x62\x6d\x69\x73\163\x69\157\156\x20\163\x74\x61\164\x75\x73\40\151\163\x20\156\x6f\164\x20\x61\40\x76\141\154\x69\144\40\163\x74\141\x74\165\163\56", PR__MDL__OPTIMIZATION); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $sogksuscggsicmac = $iuekmkswcsacoawq->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto iesekaeqeomeuaui; } $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x50\x61\147\x65\x20\163\164\141\x74\165\163\40\x63\150\141\156\x67\145\144\x20\x74\157\40\45\163\40\163\x75\x63\143\145\x73\163\x66\165\x6c\x6c\171\x2e", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\165\162\x67\145\137\145\154\x65\143\x74\145\144\137\x70\141\x67\x65\137\150\164\155\x6c\137\x63\141\x63\150\x65", $qkcoyiyeuoyyoocy); wsesqmcqoiyyqkqi: wkwamkgkwykeqkec: oeocukauoyosicso: yykqaowwsqgqysmq: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(Pattern::ccoesaeoiusskiew); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto qsgqwyqaqiowkmco; } $keccaugmemegoimu = __("\131\x6f\x75\40\150\141\166\145\40\x6e\x6f\x20\160\145\x72\155\x69\163\163\x69\x6f\156\40\x74\157\40\144\x6f\40\164\x68\151\x73\x2e", PR__MDL__OPTIMIZATION); goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->akkkoiiymmamsauc($sameaqkagyqomooq)) { goto wwukgaquuyoissgy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\141\164\164\145\162\156\40\116\x6f\x74\x20\106\157\x75\156\x64", PR__MDL__OPTIMIZATION)); goto gsygwgsiawgmqiyi; wwukgaquuyoissgy: switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { goto ikuuiauwouuqawuw; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\x53\117\x4e", PR__MDL__OPTIMIZATION)); goto yoqakewookqoqacm; ikuuiauwouuqawuw: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\166\151\x72\164\165\141\154\137\x62\162\157\x77\x73\x65\162\137\143\x61\x63\150\145\137\x72\x65\x73\165\154\x74", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\141\x74\x74\145\x72\x6e\x20\x64\x61\x74\141\40\143\141\143\x68\x65\144\40\163\x75\x63\143\145\x73\x73\x66\x75\154\154\x79\x2e", PR__MDL__OPTIMIZATION); yoqakewookqoqacm: goto kwiggogcgciwuwqk; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\x70\x72\157\x67\162\x65\x73\163" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; goto kwiggogcgciwuwqk; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); goto kwiggogcgciwuwqk; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { goto esikeyqyuikmaiek; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x72\145\40\x69\x73\x20\156\x6f\x20\162\x65\155\x6f\164\x65\40\x72\x75\x6e\x20\146\157\162\x20\160\x61\x74\x74\145\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto okkmcocqokkskasy; esikeyqyuikmaiek: $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if (!($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq)) { goto iwsmmkqaoksmocok; } $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\151\162\x74\165\141\x6c\137\x62\x72\157\x77\163\x65\x72\137\x63\150\145\x63\153\137\x66\151\156\151\163\150\145\144", $sameaqkagyqomooq); if (!($sogksuscggsicmac !== $sameaqkagyqomooq)) { goto emqswoaawgeyosmi; } if (is_wp_error($sogksuscggsicmac)) { goto yuimwyoywaiiqacs; } if (!$sogksuscggsicmac) { goto gswcoeiisamakwii; } $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; gswcoeiisamakwii: goto ocywegekakimmwcq; yuimwyoywaiiqacs: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; ocywegekakimmwcq: emqswoaawgeyosmi: iwsmmkqaoksmocok: $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\141\x74\145\163\164\x5f\162\165\x6e" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\164\145\163\164\137\x72\165\x6e", true) : '', "\160\x61\147\x65\x73\137\143\141\143\x68\x65" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; okkmcocqokkskasy: goto kwiggogcgciwuwqk; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); goto kwiggogcgciwuwqk; case Pattern::ccoesaeoiusskiew: if (!$goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { goto esaqcqqwuussiiwo; } $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); if (is_wp_error($keccaugmemegoimu)) { goto qiiigwkqeoewsuwm; } $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); qiiigwkqeoewsuwm: esaqcqqwuussiiwo: goto kwiggogcgciwuwqk; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (is_wp_error($keccaugmemegoimu)) { goto ikqeeaysmqgcgawq; } $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); ikqeeaysmqgcgawq: goto kwiggogcgciwuwqk; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); goto kwiggogcgciwuwqk; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { goto mscgewkcqcoowweg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\155\x65\164\x68\151\156\x67\x20\167\x72\x6f\156\147\40\x6f\x6e\40\160\x75\162\147\151\156\x67\x20\160\x61\147\145\163\x20\143\141\143\150\145\56", PR__MDL__OPTIMIZATION)); goto suqcsgaosywaauuu; mscgewkcqcoowweg: $keccaugmemegoimu = __("\120\141\x67\145\x73\x20\x63\141\x63\150\x65\x20\160\165\x72\x67\x65\x64\40\x73\165\x63\143\x65\x73\x73\x66\x75\154\154\x79\56", PR__MDL__OPTIMIZATION); suqcsgaosywaauuu: goto kwiggogcgciwuwqk; case self::eueyiwccigugisqe: $keccaugmemegoimu = $this->_checkLink($eouekqmooogkoqoo); goto kwiggogcgciwuwqk; } uckewycoogsogwiy: kwiggogcgciwuwqk: gsygwgsiawgmqiyi: $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; yqagomygmeoecwey: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _checkLink($eouekqmooogkoqoo, array $ocqawgquwsqioses = []) { if ($ocqawgquwsqioses) { goto qikaewekoecykeou; } $ocqawgquwsqioses = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); qikaewekoecykeou: $ksaameoqigiaoigg = ''; if (!($iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::ogigqueukwysusii, '', true))) { goto aiccyaswigkaycqk; } $iwywmkygwewiamwm = trailingslashit($iwywmkygwewiamwm); if (isset($ocqawgquwsqioses[$iwywmkygwewiamwm])) { goto eucqomyqykgoiuge; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\122\x4c\40\151\x73\x20\156\157\164\40\x6d\x61\x74\x63\x68\145\x64\40\x74\157\x20\160\141\x74\x74\145\x72\x6e\56", PR__MDL__OPTIMIZATION)); goto usymasgsyqgsuocg; eucqomyqykgoiuge: $ksaameoqigiaoigg = $iwywmkygwewiamwm; usymasgsyqgsuocg: aiccyaswigkaycqk: return $ksaameoqigiaoigg; } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { goto syuaummumssgwwee; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\141\x74\x74\145\162\x6e\40\141\x6c\x72\145\x61\x64\171\40\x73\145\x74\165\x70\x65\144\x2e", PR__MDL__OPTIMIZATION)); goto oocuemosmeeekgas; syuaummumssgwwee: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::ogigqueukwysusii, '', true); $mokmmyiueoiqokyc = $this->wkagassgcaqeosio()->wegymsqmyauaoqce($eouekqmooogkoqoo); if ($iwywmkygwewiamwm && is_wp_error($this->_checkLink($eouekqmooogkoqoo, $mokmmyiueoiqokyc))) { goto sguskaeaaqcagqgc; } $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo, $mokmmyiueoiqokyc); if (empty($awyumwiewiauosqy)) { goto ucuoeymyqeokgsya; } $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas])) { goto egmayaiikwsskgmy; } $ueeagokqmgisgauy .= "\74\142\162\76{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; egmayaiikwsskgmy: mysueeoswqgccmui: } aueaceeyommgkicu: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\157\155\145\40\160\x61\147\x65\x20\x6e\157\x74\x20\141\x64\x64\56\40\45\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); goto yuuyikiacmmueosu; ucuoeymyqeokgsya: if ($this->wkagassgcaqeosio()->gqwuqkumkkkygwuw($jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo))) { goto oqousikwiiqagoyw; } $ksaameoqigiaoigg = $this->wkagassgcaqeosio()->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); goto zayqqeqgcwkekwws; oqousikwiiqagoyw: if ($iwywmkygwewiamwm) { goto sqyokemumceysegy; } $iwywmkygwewiamwm = array_key_first($mokmmyiueoiqokyc); sqyokemumceysegy: $sameaqkagyqomooq = $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo); $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $iwywmkygwewiamwm); zayqqeqgcwkekwws: yuuyikiacmmueosu: goto agkmiayuawacakau; sguskaeaaqcagqgc: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x52\x4c\40\x69\x73\x20\156\157\x74\40\155\x61\164\x63\150\x65\144\40\164\157\40\x70\x61\164\x74\145\x72\156\x2e", PR__MDL__OPTIMIZATION)); agkmiayuawacakau: oocuemosmeeekgas: return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { if (!(!$emyowuimauuisimy || !is_string($emyowuimauuisimy))) { goto uoeasoimegouymka; } $iuekmkswcsacoawq = Page::symcgieuakksimmu(); if (!($suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([Page::ewyamgkooeqiecwg => $sameaqkagyqomooq, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]))) { goto qkcsykuocwuyaice; } $emyowuimauuisimy = $iuekmkswcsacoawq->esewqawcwouwyesq($iuekmkswcsacoawq->qogaqkcsogcqiaic($suaemuyiacqyugsm, Constants::auqoykcmsiauccao)); qkcsykuocwuyaice: uoeasoimegouymka: $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\x72\164\165\x61\154\x5f\142\x72\157\167\x73\x65\x72\x5f\x61\x64\x64\x5f\x6a\157\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { goto qiaimmucomukkeka; } $sogksuscggsicmac = ["\x70\x61\x67\x65\x73\x5f\x63\141\x63\150\145\x5f\x73\x74\141\x74\x75\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x70\x61\x67\x65\x73\x5f\143\141\143\150\145", true), "\x70\141\164\x74\145\162\156\x5f\160\162\157\x67\x72\x65\163\163\x62\141\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\x61\164\145\163\164\x5f\162\165\x6e", true)]; goto aoquoewagkseayug; qiaimmucomukkeka: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (!(false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\165\162\x6c\x20\x65\x72\162\x6f\162"))) { goto egsycocugqyyswsi; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\x61\156\x20\156\157\x74\40\143\157\x6e\156\x65\143\164\40\x74\157\40\x73\x65\162\x76\x65\x72\40\162\151\x67\150\x74\40\156\157\x77\54\x20\x70\x6c\x65\141\x73\145\x20\x74\x72\171\x20\154\141\164\145\x72\40\157\162\40\143\157\x6e\x74\141\x63\x74\x20\165\x73\x2e", PR__MDL__OPTIMIZATION), 500); egsycocugqyyswsi: aoquoewagkseayug: return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
