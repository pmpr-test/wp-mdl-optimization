<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a588a282a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\x62\x72\x6f\167\163\145\x72\137\x74\164\154"; const ewoiqwokqwgckgko = "\x72\x65\x73\160\x65\x63\164\137\x6f\x72\151\x67\151\x6e"; const semgeiqsogkegsee = "\141\x63\x74\x69\x6f\156\x5f\x70\x61\162\x61\x6d\x65\164\145\x72\163"; const meigsywkomcimgyk = "\x73\145\164\x5f\143\x61\143\150\x65\137\163\145\x74\164\151\156\x67\163"; const mcquuuwkyksuqaso = "\x63\x61\x63\x68\x65\137\x62\171\137\144\145\166\151\143\x65\137\164\x79\x70\x65"; const sosggameqyisqsaw = "\143\x61\x63\150\145\x5f\x64\x65\143\145\160\x74\151\157\156\137\x61\x72\155\157\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto xogaycsaesgqeqig; } $this->api = API::symcgieuakksimmu(); xogaycsaesgqeqig: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto gsiaskgsukseumig; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); gsiaskgsukseumig: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto syiyemqigyugagks; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); syiyemqigyugagks: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto woqkgwmkmqsuceuy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); woqkgwmkmqsuceuy: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto omsmaougqkqigogw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto imwiyqcekcykscui; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto umemmgiwimkymaya; imwiyqcekcykscui: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; umemmgiwimkymaya: omsmaougqkqigogw: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto eciksmgaqikwegwq; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto geasgywiogoeamek; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); geasgywiogoeamek: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto iokemmkgmcaksiqu; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\141\x6e\x20\x6e\x6f\164\x20\143\162\x65\x61\x74\145\40\x6f\x72\40\146\145\x74\143\x68\40\x63\x61\x63\x68\145\40\x72\165\x6c\x65\x73\x65\164\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto okagauksoqkoqygi; iokemmkgmcaksiqu: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto ucaoyoamaycsiacq; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto mccimkgwkkamsime; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); mccimkgwkkamsime: guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: ucaoyoamaycsiacq: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto iaoyeugekskmewgs; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto iuyagqakcieasiua; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto oasisywuwssumsok; iuyagqakcieasiua: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; oasisywuwssumsok: iaoyeugekskmewgs: okagauksoqkoqygi: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); eciksmgaqikwegwq: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto kieyoaoawqacqamy; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); kieyoaoawqacqamy: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\164\141\162\x74\163\137\x77\x69\164\x68\x28\x68\x74\x74\x70\x2e\162\x65\161\x75\x65\x73\x74\56\x75\162\x69\56\x70\141\x74\x68\54\x20\42\x2f\x22\51\51", Constants::eqkeooqcsscoggia => "\x43\x61\x63\150\145\40\106\x72\x6f\x6e\164\x65\x6e\x64\x20\101\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto qckouamqueqiykqi; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qckouamqueqiykqi: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\x61\162\164\x73\137\x77\151\164\x68\50\x68\x74\x74\160\x2e\x72\x65\161\x75\x65\x73\164\56\165\162\151\56\160\x61\x74\150\x2c\40\42\x2f\167\160\x2d\141\x64\x6d\x69\156\57\x22\x29\51", Constants::eqkeooqcsscoggia => "\102\171\x70\x61\x73\163\x20\102\141\143\x6b\145\156\x64\x20\101\x72\145\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto measoqewessauqma; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\157\x75\144\146\154\x61\x72\145\40\x25\163\40\x6e\x6f\164\x20\145\156\x74\145\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\145\55\155\141\151\154", PR__MDL__OPTIMIZATION))); measoqewessauqma: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto mcucegiogmuyogki; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\165\144\x66\x6c\x61\162\x65\40\45\x73\40\x6e\157\x74\x20\145\x6e\x74\145\162\x65\x64\41", PR__MDL__OPTIMIZATION), __("\101\120\111\x20\124\157\x6b\x65\x6e", PR__MDL__OPTIMIZATION))); mcucegiogmuyogki: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto gqaimiooakyykccy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\162\x65\40\x69\163\x20\x61\40\x70\162\x6f\142\154\x65\x6d\x20\157\156\x20\x66\x65\164\x63\x68\151\x6e\147\x20\x72\145\154\x61\164\x65\144\40\144\157\155\141\151\156\x20\x74\157\x20\x65\x6e\164\145\162\x65\x64\40\x61\x70\x69\x20\164\157\153\145\x6e\x2e", PR__MDL__OPTIMIZATION)); gqaimiooakyykccy: goto auaigccmwqwsqsku; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto agemeseegiuuowgo; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\x75\x64\x66\154\x61\x72\145\40\45\x73\x20\156\157\x74\x20\x65\156\164\145\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\101\120\x49\x20\x4b\145\x79", PR__MDL__OPTIMIZATION))); agemeseegiuuowgo: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto goswwiomuackymqi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\x72\145\40\151\163\40\141\x20\160\x72\x6f\142\154\145\x6d\x20\157\156\x20\x66\x65\164\143\x68\x69\156\147\40\x72\145\x6c\x61\x74\145\144\x20\172\x6f\x6e\x65\x20\151\144\x20\x74\157\x20\145\156\x74\145\x72\x65\x64\40\x61\160\x69\40\x6b\145\171\x2e", PR__MDL__OPTIMIZATION)); goswwiomuackymqi: goto auaigccmwqwsqsku; } wiaesksmicgikqcm: auaigccmwqwsqsku: return true; } }
