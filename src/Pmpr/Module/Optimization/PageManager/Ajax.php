<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73d10da1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Container { use PageManagerEngineTrait; const wiysygukkaksueso = "\x70\162\137\157\160\164\137\160\x61\x67\x65\x5f\x6d\x61\156\141\x67\x65\x72\137"; const swkaqiikoaickuui = "\x6f\x70\164\x69\155\151\x7a\x65"; const eueyiwccigugisqe = "\143\x68\x65\x63\153\137\x6c\x69\156\153"; const wwgqqgayyagycysu = "\x70\x75\162\147\145\137\143\x61\143\x68\145"; const aeksqkkekigwssku = self::wiysygukkaksueso . "\x73\x65\164\165\x70\x5f\x70\x61\164\164\x65\x72\156\x5f\x61\x63\x74\151\157\x6e"; const quuasuseuccsemsw = self::wiysygukkaksueso . "\141\143\164\x69\x76\145\x5f\160\x61\x74\x74\145\162\x6e\137\x61\143\x74\151\157\156"; const qskskgmuqiggaqeg = self::wiysygukkaksueso . "\x63\x68\x65\143\x6b\137\x70\x61\x74\164\x65\x72\156\x5f\162\x75\x6e\x5f\141\x63\164\x69\x6f\156"; const kaqawyqaekuookgi = self::wiysygukkaksueso . "\160\x61\x67\x65\x73\x5f\x63\x61\143\150\x65\x5f\163\x74\141\x74\x75\x73"; const kusgmosaoigiukgi = self::wiysygukkaksueso . "\x72\145\x6f\160\x74\151\x6d\151\x7a\x65\137\x70\141\x74\164\145\162\156\x5f\141\x63\x74\151\x6f\156"; const wegmeawoaymsqkyi = self::wiysygukkaksueso . "\144\145\141\x63\164\x69\x76\141\x74\x65\x5f\x70\141\164\164\145\162\156\x5f\x61\143\x74\151\157\x6e"; const ciccegoegwcgyaqo = self::wiysygukkaksueso . "\x64\145\x6c\145\x74\x65\x5f\157\x72\x70\x68\x61\x6e\137\x70\141\147\145\163\x5f\x61\143\164\151\x6f\x6e"; const maqcykaweqimuomu = self::wiysygukkaksueso . "\x63\x68\x65\x63\153\137\x63\141\x6e\144\151\144\141\x74\x65\x5f\165\x72\154\x5f\x61\143\x74\x69\157\156"; const ggmmioeoauiyccec = self::wiysygukkaksueso . "\x70\x61\147\x65\x73\137\143\141\143\150\x65\x5f\x70\x72\x6f\147\162\145\x73\x73"; const aikyaygyasegygma = self::wiysygukkaksueso . "\160\141\164\164\145\x72\156\x5f\155\141\x6e\165\x61\x6c\x5f\x6f\x70\x74\x69\155\x69\172\x65\x5f\x61\x63\164\151\x6f\x6e"; const esiucesqiemeickk = self::wiysygukkaksueso . "\x70\165\x72\x67\x65\x5f\160\x61\164\x74\x65\x72\x6e\x5f\160\x61\147\x65\163\137\x63\x61\x63\x68\145\x5f\141\143\164\151\x6f\x6e"; const sggmuowkoiiuacig = self::wiysygukkaksueso . "\x73\160\x65\x65\144\137\x74\x65\x73\x74\x5f\x6e\157\164\137\144\151\163\160\x61\143\150\141\142\154\x65\137\x66\x69\170\145\144"; const awqksmkmsquoymem = self::wiysygukkaksueso . "\x63\x68\x61\x6e\147\145\x5f\x70\x61\x67\x65\x5f\163\164\141\x74\x75\x73"; const imigmiemwmuayaca = self::wiysygukkaksueso . "\143\x68\141\x6e\x67\145\137\160\141\147\145\x5f\151\x6d\160\x6f\162\164\141\x6e\164\137\163\x74\141\164\165\x73"; const uyuegiyaymqqkcwa = self::wiysygukkaksueso . "\x63\150\x61\156\147\145\137\160\141\147\145\x5f\163\160\145\x65\144\x5f\x74\x65\x73\x74\x5f\143\141\156\144\151\144\141\x74\145\x5f\163\164\141\x74\165\x73"; const ccyqqagwskwauoem = ["\143\150\141\156\x67\145\x5f\160\x61\147\145\x5f\163\x70\x65\x65\144\137\164\145\163\164\137\143\141\156\144\151\144\x61\x74\x65\x5f\x73\164\141\164\165\x73" => self::uyuegiyaymqqkcwa, "\x63\x68\141\x6e\147\145\x5f\x70\x61\x67\145\137\x69\155\x70\x6f\x72\x74\x61\x6e\164\137\163\164\x61\x74\165\163" => self::imigmiemwmuayaca, "\x70\x75\x72\x67\x65\x5f\x70\x61\x74\164\145\162\156\x5f\x70\141\147\x65\x73\137\143\141\143\150\145" => self::esiucesqiemeickk, "\x70\141\164\164\x65\x72\x6e\137\x6d\x61\x6e\165\x61\154\137\x6f\x70\164\x69\155\151\172\x65" => self::aikyaygyasegygma, "\x6e\157\164\x5f\x64\x69\x73\x70\x61\143\x68\141\142\x6c\x65\x5f\146\151\170\145\144" => self::sggmuowkoiiuacig, "\x70\141\147\x65\163\137\143\x61\x63\x68\x65\137\160\x72\x6f\x67\x72\145\163\x73" => self::ggmmioeoauiyccec, "\x63\x68\x65\143\153\137\143\141\x6e\x64\x69\x64\141\x74\145\137\154\x69\x6e\x6b" => self::maqcykaweqimuomu, "\x64\145\x6c\145\x74\145\x5f\x6f\x72\x70\x68\x61\156\137\x70\x61\x67\x65\x73" => self::ciccegoegwcgyaqo, "\x63\x68\141\156\147\145\137\x70\x61\x67\x65\137\x73\164\x61\164\x75\x73" => self::awqksmkmsquoymem, "\160\x61\147\x65\x73\137\143\141\x63\x68\145\x5f\163\164\x61\x74\x75\x73" => self::kaqawyqaekuookgi, "\144\x65\141\x63\x74\x69\x76\141\x74\x65\137\x70\x61\x74\x74\x65\x72\156" => self::wegmeawoaymsqkyi, "\x72\145\x6f\160\164\x69\155\x69\x7a\145\x5f\x70\141\x74\164\x65\x72\156" => self::kusgmosaoigiukgi, "\x63\x68\x65\143\153\137\160\x61\x74\x74\145\162\x6e\137\x72\165\156" => self::qskskgmuqiggaqeg, "\x61\x63\x74\151\166\141\164\x65\137\160\141\x74\x74\x65\162\x6e" => self::quuasuseuccsemsw, "\163\145\164\165\160\137\160\x61\x74\164\145\x72\156" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\147\x63\161\x6d\x69\x6f\x6b\163\x79\x77\x6b\x65\153\x61\x6f"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\151\x77\x77\157\x6f\167\x77\x63\x73\x63\163\143\147\x75\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\165\167\155\161\x61\163\153\143\x77\141\155\x69\x67\151\155\145"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\147\x71\165\x63\x79\x71\161\153\147\163\x71\x79\x73\x61\157\x69"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\x69\167\x75\141\x71\157\x73\155\x71\x6d\167\155\x65\x6f\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\x6d\x77\165\167\171\151\x61\x67\145\x65\x61\145\x6f\171\x75\x79"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\145\x6b\x61\155\x67\145\161\157\147\157\x73\147\x67\145\157\x61"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\141\x65\155\x63\163\153\x65\155\x67\x79\x61\x6f\141\157\x77"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\161\x77\x79\x67\x63\147\x75\171\x67\x75\x63\151\x77\157\153\165"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\145\163\x61\x71\x6b\145\x73\141\145\x61\145\x63\157\x61\x6f"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\155\147\143\145\x6b\161\145\163\143\161\x6d\x67\x63\x6b\x6d\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\163\155\143\x79\x63\x6b\165\x75\145\157\141\x69\x61\x67"])->koaegcswmcqsiykq(self::ciccegoegwcgyaqo, [$this, "\x77\155\x71\x77\143\x77\x79\x63\155\157\x71\155\143\x6b\165\x77"])->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\143\x69\143\x65\163\x77\x67\x69\x73\145\x6b\x69\143\x67\x69"])->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\x6f\x6b\x6b\171\x73\145\x79\145\171\x67\141\163\x65\151\157\x71"]); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\123\160\x65\145\144\x20\x54\x65\x73\x74\x20\146\165\156\x63\164\x69\x6f\156\141\154\151\164\x79\40\x66\157\x72\40\x63\x61\x6e\x64\151\144\141\x74\x65\40\x70\141\147\x65\163\x20\x72\x65\x73\165\155\x65\144\x2e", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __("\x59\157\165\x20\150\141\x76\x65\40\x6e\157\x20\x70\145\162\x6d\x69\x73\x73\151\157\156\40\164\x6f\40\144\157\40\x74\x68\x69\163\x2e", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function wmqwcwycmoqmckuw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $occymigcemkqucuw = true; $sogksuscggsicmac = Page::symcgieuakksimmu()->iekyeyicoyyawomk()->qusqeaiqgggmaskw([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim(Page::ewyamgkooeqiecwg)->wegeyaguowmkqiac()]); if ($sogksuscggsicmac > 0) { $keccaugmemegoimu = __("\x41\x6c\x6c\x20\157\162\160\x68\141\x6e\x20\145\154\145\143\164\145\x64\x20\160\x61\x67\145\x73\40\x64\x65\154\x65\x74\x65\144\56", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __("\116\157\x20\157\x72\x70\x68\x61\156\x20\x65\154\145\143\164\x65\144\x20\x70\x61\x67\145\x20\146\x6f\165\x6e\x64\x65\x64\56", PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = __("\131\157\x75\x20\x68\141\x76\145\x20\x6e\x6f\x20\160\x65\x72\x6d\151\163\163\151\157\x6e\x20\164\x6f\x20\x64\157\x20\x74\x68\x69\163\x2e", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\116\157\162\x6d\x61\x6c", PR__MDL__OPTIMIZATION), 1 => __("\x49\x6d\160\157\x72\x74\x61\x6e\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\x44\x6f\156\164\40\x54\141\x6b\145\40\123\x70\145\145\x64\40\124\145\x73\164", PR__MDL__OPTIMIZATION), 1 => __("\x54\141\153\x65\40\123\x70\x65\x65\x64\x20\x54\145\x73\164", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { $keccaugmemegoimu = $iuekmkswcsacoawq->gssiscqyqsacmeca()->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\x50\141\147\145\x20\x73\x74\141\x74\165\163\x20\143\x68\141\x6e\147\x65\144\x20\x74\157\x20\45\x73\x20\x73\x75\143\x63\x65\163\x73\x66\165\x6c\154\x79\56", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\165\x72\147\145\137\145\x6c\145\x63\x74\x65\x64\137\160\x61\147\145\137\150\164\155\154\137\x63\x61\x63\x68\145", $qkcoyiyeuoyyoocy); } } else { $keccaugmemegoimu = __("\131\157\x75\162\40\163\165\x62\x6d\151\x73\x73\x69\x6f\156\40\163\164\x61\164\165\x73\x20\x69\163\x20\x6e\157\x74\x20\x61\40\x76\141\154\x69\144\x20\x73\x74\x61\x74\x75\163\56", PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } else { $keccaugmemegoimu = __("\131\157\165\x20\x68\x61\166\x65\x20\x6e\x6f\x20\x70\x65\162\155\151\x73\x73\151\x6f\156\x20\x74\x6f\x20\144\x6f\x20\164\x68\x69\x73\56", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::kusgmosaoigiukgi); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->akkkoiiymmamsauc($sameaqkagyqomooq)) { switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\141\x6c\137\142\x72\x6f\x77\163\145\162\x5f\x63\x61\x63\x68\x65\x5f\162\x65\163\165\x6c\164", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\120\x61\164\x74\x65\162\156\x20\x64\141\x74\x61\40\x63\x61\143\150\x65\144\40\x73\x75\143\143\x65\x73\163\146\x75\x6c\154\171\56", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x4a\x53\117\116", PR__MDL__OPTIMIZATION)); } break; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\x6f\x67\x72\145\163\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; break; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); break; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if ($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq) { $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\166\151\x72\164\165\141\154\137\x62\162\157\167\x73\x65\162\x5f\x63\150\145\x63\153\137\x66\x69\x6e\151\163\150\145\144", $sameaqkagyqomooq); if ($sogksuscggsicmac !== $sameaqkagyqomooq) { if (is_wp_error($sogksuscggsicmac)) { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } else { if ($sogksuscggsicmac) { $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; } } } } $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\164\145\x73\164\137\162\x75\x6e" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\x74\145\x73\x74\x5f\x72\165\x6e", true) : '', "\x70\x61\x67\x65\163\x5f\143\141\x63\150\145" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\162\x65\x20\151\x73\40\x6e\x6f\40\x72\x65\x6d\157\x74\x65\40\162\x75\x6e\40\146\157\x72\40\x70\141\164\164\x65\x72\156\x2e", PR__MDL__OPTIMIZATION)); } break; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); break; case self::kusgmosaoigiukgi: if ($goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { $keccaugmemegoimu = $goqqimcssiyagkwy->uaoiiekuayauwqiq($eouekqmooogkoqoo); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); } } break; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (!is_wp_error($keccaugmemegoimu)) { $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); } break; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); break; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { $keccaugmemegoimu = __("\x50\141\147\x65\163\x20\143\x61\x63\150\x65\40\160\165\x72\147\145\x64\40\x73\x75\x63\143\145\x73\x73\146\x75\154\154\171\56", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x6d\x65\164\150\151\x6e\147\40\x77\162\x6f\156\147\40\157\x6e\x20\160\x75\x72\147\151\156\x67\40\160\141\x67\x65\x73\x20\x63\x61\143\x68\x65\x2e", PR__MDL__OPTIMIZATION)); } break; case self::eueyiwccigugisqe: $keccaugmemegoimu = $goqqimcssiyagkwy->cmcmuoosomwkakgm($eouekqmooogkoqoo); break; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\x74\x74\145\162\x6e\x20\116\157\164\40\106\157\165\x6e\x64", PR__MDL__OPTIMIZATION)); } $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; } else { $keccaugmemegoimu = __("\131\x6f\165\x20\150\x61\166\145\40\156\157\x20\160\145\162\x6d\x69\163\x73\151\x6f\156\x20\x74\x6f\40\144\x6f\40\x74\150\x69\x73\56", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $emyowuimauuisimy = $goqqimcssiyagkwy->uaoiiekuayauwqiq($eouekqmooogkoqoo); if (is_wp_error($emyowuimauuisimy)) { $ksaameoqigiaoigg = $emyowuimauuisimy; } else { if ($emyowuimauuisimy) { $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); if (empty($awyumwiewiauosqy)) { $sameaqkagyqomooq = $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo); if ($goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy); } else { $ksaameoqigiaoigg = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); } } else { $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) { $ueeagokqmgisgauy .= "\74\x62\x72\x3e{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; } } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\157\155\145\40\x70\141\x67\145\x20\x6e\157\164\x20\141\144\144\x2e\40\x25\x73", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\156\40\x6e\x6f\x74\40\x66\x69\x6e\144\40\143\141\156\144\151\x64\141\164\x65\x20\160\x61\147\x65\x20\x75\x72\x6c\40\164\157\40\x73\x74\x61\162\164\40\160\x61\164\x74\145\x72\x6e\40\x6f\160\x74\x69\x6d\x69\x7a\141\x74\x69\x6f\156\40\x70\162\157\143\145\163\x73\56", PR__MDL__OPTIMIZATION)); } } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\x74\x74\145\x72\156\40\141\154\162\145\141\144\x79\x20\x73\x65\164\x75\x70\x65\x64\x2e", PR__MDL__OPTIMIZATION)); } return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\151\162\164\165\x61\154\137\142\162\157\167\x73\145\162\x5f\141\x64\x64\x5f\152\x6f\x62", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\165\x72\x6c\x20\x65\162\162\x6f\x72")) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\156\40\156\157\x74\x20\143\157\x6e\x6e\x65\143\x74\x20\x74\157\x20\x73\145\x72\x76\145\x72\40\162\x69\x67\150\x74\40\156\157\167\x2c\x20\160\154\x65\141\x73\x65\40\x74\x72\171\x20\154\141\164\145\x72\40\x6f\x72\40\x63\157\x6e\x74\x61\x63\164\x20\165\x73\x2e", PR__MDL__OPTIMIZATION), 500); } } else { $sogksuscggsicmac = ["\160\141\147\x65\x73\x5f\x63\141\143\x68\145\137\163\x74\141\x74\x75\x73" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\141\147\x65\163\x5f\x63\x61\x63\x68\145", true), "\160\141\x74\164\145\162\x6e\137\x70\x72\x6f\x67\x72\x65\163\163\x62\x61\x72" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\154\141\x74\145\163\x74\x5f\162\x75\x6e", true)]; } return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
