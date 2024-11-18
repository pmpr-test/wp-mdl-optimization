<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd9008d45             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\PageManager\SpeedTest\Setting as SpeedTestSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class Ajax extends Container { use PageManagerEngineTrait; const wiysygukkaksueso = "\160\162\137\157\x70\x74\x5f\160\x61\x67\145\137\x6d\141\156\x61\x67\x65\162\137"; const swkaqiikoaickuui = "\157\x70\164\151\155\151\172\145"; const eueyiwccigugisqe = "\143\x68\x65\x63\x6b\x5f\x6c\x69\x6e\153"; const wwgqqgayyagycysu = "\x70\165\162\147\145\x5f\143\x61\x63\150\x65"; const aeksqkkekigwssku = self::wiysygukkaksueso . "\163\145\x74\165\160\137\x70\x61\164\x74\x65\x72\x6e\137\141\143\x74\151\157\x6e"; const quuasuseuccsemsw = self::wiysygukkaksueso . "\x61\x63\x74\x69\x76\x65\x5f\160\x61\164\x74\145\162\x6e\137\x61\143\x74\151\157\x6e"; const qskskgmuqiggaqeg = self::wiysygukkaksueso . "\x63\x68\145\143\x6b\x5f\160\141\x74\164\145\162\156\137\162\165\156\x5f\141\143\164\x69\157\156"; const kaqawyqaekuookgi = self::wiysygukkaksueso . "\x70\x61\x67\145\x73\137\143\x61\143\x68\145\137\x73\164\141\x74\x75\x73"; const kusgmosaoigiukgi = self::wiysygukkaksueso . "\162\145\x6f\160\x74\151\155\x69\x7a\145\x5f\x70\141\x74\164\145\162\x6e\137\x61\143\x74\x69\x6f\x6e"; const wegmeawoaymsqkyi = self::wiysygukkaksueso . "\144\x65\141\x63\164\151\166\141\164\x65\x5f\160\141\164\x74\145\162\x6e\137\141\143\x74\x69\x6f\x6e"; const ciccegoegwcgyaqo = self::wiysygukkaksueso . "\x64\x65\154\145\x74\145\x5f\157\162\x70\x68\x61\156\137\x70\x61\x67\145\x73\137\141\x63\164\151\157\156"; const maqcykaweqimuomu = self::wiysygukkaksueso . "\x63\x68\x65\x63\x6b\x5f\143\141\x6e\144\x69\144\x61\164\x65\x5f\165\x72\x6c\x5f\x61\x63\x74\151\157\156"; const ggmmioeoauiyccec = self::wiysygukkaksueso . "\x70\141\147\x65\x73\x5f\x63\x61\x63\x68\x65\137\x70\162\x6f\147\x72\x65\x73\x73"; const aikyaygyasegygma = self::wiysygukkaksueso . "\160\141\164\x74\145\162\156\x5f\x6d\x61\x6e\x75\141\154\137\x6f\x70\x74\151\x6d\151\172\x65\137\x61\143\164\x69\157\x6e"; const esiucesqiemeickk = self::wiysygukkaksueso . "\160\x75\162\147\x65\137\x70\x61\x74\164\145\162\x6e\x5f\x70\x61\147\x65\163\137\x63\x61\143\x68\x65\x5f\x61\x63\x74\x69\157\x6e"; const sggmuowkoiiuacig = self::wiysygukkaksueso . "\x73\x70\x65\145\x64\x5f\164\x65\x73\164\x5f\x6e\x6f\x74\137\x64\x69\163\160\141\143\150\x61\142\154\145\x5f\x66\151\170\145\x64"; const awqksmkmsquoymem = self::wiysygukkaksueso . "\x63\150\x61\156\x67\x65\x5f\x70\x61\x67\x65\x5f\163\164\x61\x74\165\163"; const imigmiemwmuayaca = self::wiysygukkaksueso . "\x63\x68\141\x6e\x67\x65\x5f\x70\x61\x67\145\137\151\x6d\x70\x6f\162\164\x61\x6e\164\137\163\x74\x61\164\165\x73"; const uyuegiyaymqqkcwa = self::wiysygukkaksueso . "\x63\x68\x61\156\147\145\x5f\x70\x61\147\x65\137\163\x70\x65\x65\x64\137\164\145\x73\164\137\143\141\x6e\x64\x69\144\141\164\x65\137\163\164\141\164\165\x73"; const ccyqqagwskwauoem = ["\143\150\x61\x6e\147\145\x5f\160\x61\x67\145\x5f\163\x70\x65\x65\x64\x5f\x74\145\x73\x74\137\x63\141\156\x64\151\144\x61\x74\145\x5f\x73\x74\x61\164\x75\x73" => self::uyuegiyaymqqkcwa, "\143\x68\x61\x6e\x67\x65\x5f\160\141\x67\145\x5f\x69\155\x70\157\x72\x74\x61\x6e\x74\137\x73\x74\141\164\165\x73" => self::imigmiemwmuayaca, "\x70\165\x72\x67\x65\137\x70\141\164\164\145\x72\x6e\x5f\160\x61\147\145\163\137\143\141\x63\x68\145" => self::esiucesqiemeickk, "\160\x61\x74\164\145\x72\x6e\x5f\155\x61\156\x75\x61\x6c\137\157\160\x74\151\155\151\172\x65" => self::aikyaygyasegygma, "\156\157\x74\x5f\x64\x69\x73\160\141\x63\150\x61\x62\154\145\x5f\x66\x69\x78\145\x64" => self::sggmuowkoiiuacig, "\160\x61\147\145\163\x5f\143\x61\x63\x68\x65\x5f\160\162\x6f\147\x72\x65\x73\163" => self::ggmmioeoauiyccec, "\143\x68\145\x63\153\x5f\x63\141\156\x64\x69\x64\x61\x74\x65\x5f\154\x69\156\x6b" => self::maqcykaweqimuomu, "\x64\x65\x6c\145\x74\145\137\x6f\162\x70\x68\141\156\137\x70\x61\x67\145\163" => self::ciccegoegwcgyaqo, "\143\x68\x61\156\x67\x65\137\160\141\x67\145\137\163\164\141\x74\x75\x73" => self::awqksmkmsquoymem, "\x70\x61\x67\x65\x73\x5f\143\141\x63\150\x65\x5f\163\x74\x61\x74\165\x73" => self::kaqawyqaekuookgi, "\144\145\141\143\x74\151\166\x61\164\145\x5f\x70\141\164\x74\145\162\x6e" => self::wegmeawoaymsqkyi, "\x72\145\157\160\x74\151\155\x69\172\145\137\160\141\x74\164\145\162\156" => self::kusgmosaoigiukgi, "\143\150\145\x63\153\137\x70\x61\164\x74\x65\x72\156\137\162\165\156" => self::qskskgmuqiggaqeg, "\141\x63\164\x69\166\141\164\x65\x5f\x70\x61\x74\164\x65\x72\x6e" => self::quuasuseuccsemsw, "\163\x65\x74\165\x70\x5f\x70\x61\164\164\x65\x72\x6e" => self::aeksqkkekigwssku]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::aeksqkkekigwssku, [$this, "\x63\147\143\x71\155\151\x6f\x6b\x73\x79\167\x6b\x65\153\141\157"])->koaegcswmcqsiykq(self::quuasuseuccsemsw, [$this, "\143\151\x77\167\157\x6f\167\x77\x63\163\143\x73\143\147\165\x67"])->koaegcswmcqsiykq(self::qskskgmuqiggaqeg, [$this, "\x75\x77\x6d\x71\141\x73\153\143\167\141\x6d\151\x67\151\155\x65"])->koaegcswmcqsiykq(self::kaqawyqaekuookgi, [$this, "\x67\161\165\x63\x79\161\x71\x6b\147\x73\161\171\x73\x61\x6f\151"])->koaegcswmcqsiykq(self::kusgmosaoigiukgi, [$this, "\151\167\x75\x61\x71\x6f\163\x6d\161\x6d\167\155\145\157\151\x77"])->koaegcswmcqsiykq(self::wegmeawoaymsqkyi, [$this, "\x6d\167\x75\x77\x79\x69\x61\x67\x65\145\x61\145\157\171\165\171"])->koaegcswmcqsiykq(self::maqcykaweqimuomu, [$this, "\x65\x6b\141\155\147\x65\x71\157\147\157\x73\147\x67\x65\x6f\141"])->koaegcswmcqsiykq(self::ggmmioeoauiyccec, [$this, "\x61\141\x65\155\x63\x73\153\x65\155\147\x79\141\x6f\x61\157\167"])->koaegcswmcqsiykq(self::aikyaygyasegygma, [$this, "\x71\x77\x79\x67\143\147\165\171\147\165\x63\x69\167\x6f\153\x75"])->koaegcswmcqsiykq(self::esiucesqiemeickk, [$this, "\x73\x65\163\141\x71\153\x65\163\x61\145\x61\x65\143\x6f\141\157"]); $this->koaegcswmcqsiykq(self::sggmuowkoiiuacig, [$this, "\x6d\x67\143\x65\153\x71\x65\x73\x63\161\x6d\147\x63\153\x6d\x79"]); $this->koaegcswmcqsiykq(self::awqksmkmsquoymem, [$this, "\x63\x79\163\155\x63\x79\x63\153\165\x75\145\x6f\141\x69\x61\x67"])->koaegcswmcqsiykq(self::ciccegoegwcgyaqo, [$this, "\x77\155\161\x77\x63\167\171\143\155\x6f\161\155\x63\153\165\167"])->koaegcswmcqsiykq(self::imigmiemwmuayaca, [$this, "\x67\143\151\143\145\x73\x77\x67\x69\x73\x65\153\x69\143\147\x69"])->koaegcswmcqsiykq(self::uyuegiyaymqqkcwa, [$this, "\157\x6b\153\x79\x73\145\x79\145\x79\x67\x61\163\145\x69\x6f\x71"]); } public function mgcekqescqmgckmy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $occymigcemkqucuw = true; Setting::symcgieuakksimmu()->qioweyiqewmsocem(SpeedTestSetting::quyascocmiiossme, false, false); $keccaugmemegoimu = __("\x53\160\x65\x65\144\x20\x54\145\163\x74\x20\146\165\x6e\143\x74\151\157\156\x61\154\x69\164\x79\40\146\x6f\x72\40\143\x61\156\x64\151\144\x61\164\x65\40\x70\141\147\x65\163\40\x72\x65\x73\x75\155\x65\x64\x2e", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __("\x59\157\165\40\x68\x61\x76\145\40\x6e\157\x20\x70\x65\x72\x6d\151\163\x73\x69\157\156\x20\164\157\x20\144\x6f\40\164\x68\x69\163\x2e", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function wmqwcwycmoqmckuw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $occymigcemkqucuw = true; $sogksuscggsicmac = Page::symcgieuakksimmu()->iekyeyicoyyawomk()->qusqeaiqgggmaskw([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim(Page::ewyamgkooeqiecwg)->wegeyaguowmkqiac()]); if ($sogksuscggsicmac > 0) { $keccaugmemegoimu = __("\101\x6c\154\40\157\x72\160\x68\x61\x6e\40\x65\x6c\x65\143\x74\145\x64\40\160\x61\x67\x65\163\40\144\x65\154\145\x74\145\x64\56", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __("\116\157\x20\157\x72\160\x68\x61\x6e\x20\x65\x6c\x65\x63\164\x65\144\x20\x70\x61\147\x65\x20\x66\x6f\165\x6e\x64\145\144\56", PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = __("\x59\157\165\x20\x68\x61\166\145\x20\156\x6f\40\x70\145\162\155\151\x73\x73\151\157\x6e\40\x74\157\40\144\157\x20\x74\150\151\x73\56", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function cysmcyckuueoaiag() { $this->ssgwweggiwmeowkw(Constants::ciywsqoeiymemsys, Page::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)); } public function gciceswgisekicgi() { $this->ssgwweggiwmeowkw(Page::uyeaawkisqygakmy, [0 => __("\116\x6f\162\x6d\141\154", PR__MDL__OPTIMIZATION), 1 => __("\111\x6d\x70\x6f\x72\164\141\156\x74", PR__MDL__OPTIMIZATION)]); } public function okkyseyeygaseioq() { $this->ssgwweggiwmeowkw(Page::aewquksqwqiawiei, [0 => __("\104\x6f\x6e\164\40\x54\x61\x6b\145\x20\x53\160\x65\x65\x64\40\124\145\x73\x74", PR__MDL__OPTIMIZATION), 1 => __("\x54\x61\x6b\145\40\x53\160\x65\145\x64\40\x54\145\163\x74", PR__MDL__OPTIMIZATION)]); } public function ssgwweggiwmeowkw($qgoqiacsiccwoawi = Constants::ciywsqoeiymemsys, $oqseeekuqisekiwy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $qkcoyiyeuoyyoocy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys, 0); if (isset($oqseeekuqisekiwy[$iueymcwwscwqkiyq])) { $keccaugmemegoimu = $iuekmkswcsacoawq->gssiscqyqsacmeca()->wqikesawekycweoi($qkcoyiyeuoyyoocy, [$qgoqiacsiccwoawi => $iueymcwwscwqkiyq]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__("\120\141\x67\145\x20\163\164\x61\164\x75\163\40\143\150\x61\156\x67\x65\144\x20\x74\x6f\40\x25\x73\40\x73\x75\x63\143\145\163\163\146\x75\x6c\x6c\171\56", PR__MDL__OPTIMIZATION), $oqseeekuqisekiwy[$iueymcwwscwqkiyq]); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x70\x75\x72\x67\145\x5f\x65\154\x65\x63\164\x65\x64\x5f\x70\141\x67\145\x5f\150\x74\155\154\137\x63\141\x63\150\145", $qkcoyiyeuoyyoocy); } } else { $keccaugmemegoimu = __("\131\x6f\165\162\40\163\x75\142\x6d\151\163\x73\x69\157\x6e\x20\x73\x74\x61\x74\165\163\x20\151\x73\40\x6e\x6f\164\40\x61\40\166\x61\154\x69\144\40\163\x74\141\164\165\x73\56", PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } else { $keccaugmemegoimu = __("\x59\157\x75\x20\150\x61\166\x65\x20\156\157\40\x70\145\x72\155\151\163\x73\x69\x6f\156\40\x74\x6f\x20\x64\x6f\40\164\x68\x69\x73\x2e", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qwygcguyguciwoku() { $this->cgywqskcmcgkwueu(self::aikyaygyasegygma); } public function gqucyqqkgsqysaoi() { $this->cgywqskcmcgkwueu(self::kaqawyqaekuookgi); } public function aaemcskemgyaoaow() { $this->cgywqskcmcgkwueu(self::ggmmioeoauiyccec); } public function uwmqaskcwamigime() { $this->cgywqskcmcgkwueu(self::qskskgmuqiggaqeg); } public function iwuaqosmqmwmeoiw() { $this->cgywqskcmcgkwueu(self::kusgmosaoigiukgi); } public function cgcqmioksywkekao() { $this->cgywqskcmcgkwueu(Constants::gqgwsyegwkicuomu); } public function ciwwoowwcscscgug() { $this->cgywqskcmcgkwueu(Constants::kueyauseicqqwesu); } public function mwuwyiageeaeoyuy() { $this->cgywqskcmcgkwueu(Constants::yewqymwwigegyeuk); } public function ekamgeqogosggeoa() { $this->cgywqskcmcgkwueu(self::eueyiwccigugisqe); } public function sesaqkesaeaecoao() { $this->cgywqskcmcgkwueu(self::wwgqqgayyagycysu); } private function cgywqskcmcgkwueu($aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $keccaugmemegoimu = false; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $sameaqkagyqomooq = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::qakegsaikiimcmkc, 0, true); if ($eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->akkkoiiymmamsauc($sameaqkagyqomooq)) { switch ($aiamqeawckcsuaou) { case self::aikyaygyasegygma: $smgooosyoeqwcaeg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::qmwqkaeamecekiso); if ($smgooosyoeqwcaeg) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x76\151\x72\164\165\141\x6c\137\142\x72\157\167\163\145\162\137\x63\141\x63\x68\145\137\162\145\x73\165\154\x74", $sameaqkagyqomooq, wp_unslash($smgooosyoeqwcaeg)); $keccaugmemegoimu = __("\x50\141\x74\x74\145\162\156\x20\x64\x61\164\141\40\143\x61\143\150\145\x64\40\163\165\143\x63\145\x73\163\146\x75\154\154\x79\x2e", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\112\x53\x4f\116", PR__MDL__OPTIMIZATION)); } break; case self::ggmmioeoauiyccec: $keccaugmemegoimu = ["\160\x72\157\x67\x72\x65\x73\x73" => $goqqimcssiyagkwy->emygimuicqcskaam($sameaqkagyqomooq), Constants::ciywsqoeiymemsys => $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq, false)]; break; case self::kaqawyqaekuookgi: $keccaugmemegoimu = $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq); break; case self::qskskgmuqiggaqeg: if ($scwwcyaqyywsweoq = $goqqimcssiyagkwy->iwuigwiooogcgwwu($sameaqkagyqomooq)) { $iueymcwwscwqkiyq = Remote::symcgieuakksimmu()->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $scwwcyaqyywsweoq); if ($iueymcwwscwqkiyq === Constants::eyemmiwoaayukksq) { $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\x75\x61\x6c\137\142\162\157\167\163\145\162\x5f\143\150\x65\143\x6b\137\146\x69\x6e\151\163\x68\145\x64", $sameaqkagyqomooq); if ($sogksuscggsicmac !== $sameaqkagyqomooq) { if (is_wp_error($sogksuscggsicmac)) { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } else { if ($sogksuscggsicmac) { $iueymcwwscwqkiyq = Constants::amcogigwsaqssuai; } } } } $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, "\x6c\x61\x74\x65\163\x74\137\x72\165\156" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\164\x65\163\x74\137\x72\165\156", true) : '', "\x70\141\x67\145\x73\137\143\141\x63\x68\145" => $iueymcwwscwqkiyq !== Constants::eyemmiwoaayukksq ? $goqqimcssiyagkwy->ygkgmccmouykyygk($sameaqkagyqomooq) : '']; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\162\x65\40\151\x73\x20\x6e\x6f\x20\162\145\x6d\157\x74\x65\40\162\x75\x6e\x20\x66\x6f\x72\x20\160\141\x74\164\x65\x72\x6e\x2e", PR__MDL__OPTIMIZATION)); } break; case Constants::gqgwsyegwkicuomu: $keccaugmemegoimu = $this->_setupPattern($eouekqmooogkoqoo); break; case self::kusgmosaoigiukgi: if ($goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { $keccaugmemegoimu = $goqqimcssiyagkwy->uaoiiekuayauwqiq($eouekqmooogkoqoo); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->_optimizePattern($sameaqkagyqomooq, $keccaugmemegoimu); } } break; case Constants::kueyauseicqqwesu: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); if (!is_wp_error($keccaugmemegoimu)) { $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); } break; case Constants::yewqymwwigegyeuk: $keccaugmemegoimu = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::uucoeqmmykkwsmqc); break; case self::wwgqqgayyagycysu: if ($goqqimcssiyagkwy->sesaqkesaeaecoao($eouekqmooogkoqoo)) { $keccaugmemegoimu = __("\x50\141\147\x65\163\40\143\x61\x63\150\145\x20\x70\165\162\x67\x65\x64\x20\x73\165\x63\143\x65\163\x73\x66\165\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\x65\164\x68\x69\156\147\x20\167\x72\157\156\147\x20\x6f\x6e\x20\x70\x75\162\147\151\156\x67\40\x70\141\147\145\x73\40\143\x61\x63\x68\x65\x2e", PR__MDL__OPTIMIZATION)); } break; case self::eueyiwccigugisqe: $keccaugmemegoimu = $goqqimcssiyagkwy->cmcmuoosomwkakgm($eouekqmooogkoqoo); break; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\x74\164\145\x72\x6e\x20\x4e\x6f\164\40\106\x6f\165\156\x64", PR__MDL__OPTIMIZATION)); } $occymigcemkqucuw = !is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu; } else { $keccaugmemegoimu = __("\x59\x6f\165\x20\150\141\166\x65\x20\x6e\x6f\40\160\x65\162\x6d\151\163\x73\151\157\156\x20\x74\x6f\x20\144\157\x20\164\x68\151\x73\x2e", PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function _setupPattern($eouekqmooogkoqoo) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); if (!$jwkieqegmyuwayce->wuwcyeequuwaeias($eouekqmooogkoqoo)) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $emyowuimauuisimy = $goqqimcssiyagkwy->uaoiiekuayauwqiq($eouekqmooogkoqoo); if (is_wp_error($emyowuimauuisimy)) { $ksaameoqigiaoigg = $emyowuimauuisimy; } else { if ($emyowuimauuisimy) { $awyumwiewiauosqy = $this->_assignMatchedPagesToPattern($eouekqmooogkoqoo); if (empty($awyumwiewiauosqy)) { $sameaqkagyqomooq = $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo); if ($goqqimcssiyagkwy->gqwuqkumkkkygwuw($sameaqkagyqomooq)) { $ksaameoqigiaoigg = $this->_optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy); } else { $ksaameoqigiaoigg = $goqqimcssiyagkwy->cmgakiqmkkiokgmk($eouekqmooogkoqoo, Constants::eqewsqmqmsiocaeg); } } else { $ueeagokqmgisgauy = ''; foreach ($awyumwiewiauosqy as $igqsaukqcqscimok) { if (isset($igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) && $igqsaukqcqscimok[Constants::iwyueouqaqegmcas]) { $ueeagokqmgisgauy .= "\74\x62\x72\76{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($igqsaukqcqscimok[Constants::iwyueouqaqegmcas])}"; } } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x53\x6f\x6d\x65\40\x70\x61\147\145\x20\x6e\157\x74\40\x61\144\144\56\40\x25\163", PR__MDL__OPTIMIZATION), $ueeagokqmgisgauy)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\x6e\x20\156\157\x74\40\x66\x69\x6e\x64\x20\x63\x61\156\144\x69\144\141\x74\145\40\x70\x61\x67\145\x20\x75\x72\154\x20\164\x6f\40\163\x74\141\x72\x74\40\160\141\x74\x74\145\x72\156\40\x6f\160\x74\x69\155\x69\172\x61\164\151\x6f\x6e\40\160\x72\157\x63\x65\163\x73\x2e", PR__MDL__OPTIMIZATION)); } } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\x61\x74\164\145\x72\x6e\40\141\154\162\x65\141\x64\x79\x20\x73\145\164\165\160\x65\x64\x2e", PR__MDL__OPTIMIZATION)); } return $ksaameoqigiaoigg; } private function _optimizePattern($sameaqkagyqomooq, $emyowuimauuisimy = '') { $sogksuscggsicmac = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x76\x69\162\x74\165\x61\154\137\x62\162\x6f\x77\163\145\162\x5f\x61\x64\x64\x5f\152\157\142", [], $sameaqkagyqomooq, $emyowuimauuisimy); if (is_wp_error($sogksuscggsicmac)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); if (false !== $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($iswcokucwmiosiaq, "\x63\x75\x72\154\x20\145\162\162\x6f\x72")) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\156\40\x6e\x6f\x74\40\143\157\x6e\156\145\x63\164\x20\164\x6f\40\163\145\x72\x76\x65\162\40\162\x69\x67\150\164\40\156\x6f\167\x2c\x20\x70\x6c\x65\x61\163\x65\x20\x74\162\171\40\x6c\141\164\x65\x72\40\x6f\x72\x20\x63\157\156\x74\x61\x63\164\40\165\163\x2e", PR__MDL__OPTIMIZATION), 500); } } else { $sogksuscggsicmac = ["\x70\141\147\145\x73\137\x63\x61\143\150\x65\x5f\163\x74\x61\164\165\163" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\160\141\x67\x65\163\137\143\141\x63\x68\x65", true), "\160\x61\164\164\x65\x72\x6e\137\x70\x72\157\147\x72\x65\163\x73\x62\x61\162" => $this->wkagassgcaqeosio()->voqagyawicswcaau($sameaqkagyqomooq, "\x6c\141\x74\x65\x73\164\x5f\162\x75\x6e", true)]; } return $sogksuscggsicmac; } private function _assignMatchedPagesToPattern($eouekqmooogkoqoo, array $mokmmyiueoiqokyc = []) : array { return $this->wkagassgcaqeosio()->iwuykycuaameiqes($eouekqmooogkoqoo, $mokmmyiueoiqokyc); } }
