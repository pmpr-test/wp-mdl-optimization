<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a60d5dfe2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\157\x77\163\x65\x72\137\164\x74\x6c"; const ewoiqwokqwgckgko = "\x72\x65\x73\x70\x65\x63\x74\x5f\157\x72\151\147\151\156"; const semgeiqsogkegsee = "\141\143\x74\151\157\x6e\x5f\160\x61\162\x61\155\x65\164\x65\x72\x73"; const meigsywkomcimgyk = "\x73\145\164\x5f\x63\141\143\x68\x65\x5f\163\x65\x74\x74\151\156\x67\x73"; const mcquuuwkyksuqaso = "\143\141\x63\x68\x65\x5f\142\171\x5f\x64\145\x76\x69\143\x65\137\164\x79\x70\145"; const sosggameqyisqsaw = "\143\141\143\x68\145\x5f\x64\x65\143\x65\x70\x74\x69\157\156\x5f\141\162\x6d\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto xogaycsaesgqeqig; } $this->api = API::symcgieuakksimmu(); xogaycsaesgqeqig: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto gsiaskgsukseumig; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); gsiaskgsukseumig: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto syiyemqigyugagks; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); syiyemqigyugagks: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto woqkgwmkmqsuceuy; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); woqkgwmkmqsuceuy: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto omsmaougqkqigogw; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto imwiyqcekcykscui; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto umemmgiwimkymaya; imwiyqcekcykscui: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; umemmgiwimkymaya: omsmaougqkqigogw: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto eciksmgaqikwegwq; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto geasgywiogoeamek; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); geasgywiogoeamek: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto iokemmkgmcaksiqu; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\x61\x6e\40\156\157\x74\x20\143\162\145\x61\x74\145\x20\157\162\x20\146\x65\x74\143\150\x20\x63\141\143\x68\145\x20\x72\x75\x6c\145\163\145\x74\72\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto okagauksoqkoqygi; iokemmkgmcaksiqu: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto ucaoyoamaycsiacq; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto mccimkgwkkamsime; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); mccimkgwkkamsime: guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: ucaoyoamaycsiacq: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto iaoyeugekskmewgs; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto iuyagqakcieasiua; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto oasisywuwssumsok; iuyagqakcieasiua: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; oasisywuwssumsok: iaoyeugekskmewgs: okagauksoqkoqygi: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); eciksmgaqikwegwq: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto kieyoaoawqacqamy; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); kieyoaoawqacqamy: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\164\141\x72\x74\x73\137\x77\x69\x74\x68\x28\150\x74\164\160\x2e\x72\x65\161\165\145\x73\164\x2e\x75\162\x69\56\x70\x61\x74\150\54\x20\x22\x2f\x22\x29\x29", Constants::eqkeooqcsscoggia => "\103\x61\x63\150\x65\40\x46\162\x6f\x6e\164\145\156\x64\x20\101\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto qckouamqueqiykqi; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); qckouamqueqiykqi: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\x73\x74\x61\162\164\163\x5f\x77\x69\x74\x68\x28\x68\x74\x74\x70\56\x72\x65\161\165\x65\163\x74\x2e\165\162\151\x2e\x70\x61\164\x68\54\x20\42\57\x77\x70\55\141\x64\155\x69\156\x2f\x22\51\51", Constants::eqkeooqcsscoggia => "\x42\171\160\x61\x73\x73\40\x42\141\143\153\x65\x6e\144\x20\101\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto measoqewessauqma; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\x75\x64\x66\154\x61\x72\145\40\x25\x73\40\156\x6f\164\x20\145\156\164\145\162\x65\x64\x21", PR__MDL__OPTIMIZATION), __("\x65\x2d\x6d\141\151\x6c", PR__MDL__OPTIMIZATION))); measoqewessauqma: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto mcucegiogmuyogki; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\157\x75\x64\146\154\141\x72\145\40\45\x73\40\x6e\x6f\x74\40\145\156\164\x65\x72\x65\x64\41", PR__MDL__OPTIMIZATION), __("\x41\x50\111\x20\124\157\x6b\145\156", PR__MDL__OPTIMIZATION))); mcucegiogmuyogki: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto gqaimiooakyykccy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\x72\145\40\151\163\x20\141\x20\160\162\157\142\154\145\x6d\40\157\x6e\40\x66\x65\164\143\150\x69\156\147\40\162\145\154\x61\164\x65\x64\x20\144\x6f\x6d\x61\151\156\x20\164\x6f\40\145\x6e\164\145\162\x65\x64\x20\141\160\x69\x20\164\x6f\x6b\x65\156\x2e", PR__MDL__OPTIMIZATION)); gqaimiooakyykccy: goto auaigccmwqwsqsku; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto agemeseegiuuowgo; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\x75\144\x66\x6c\x61\x72\x65\x20\45\163\x20\156\x6f\164\x20\145\x6e\164\145\162\145\x64\x21", PR__MDL__OPTIMIZATION), __("\101\120\111\40\113\145\171", PR__MDL__OPTIMIZATION))); agemeseegiuuowgo: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto goswwiomuackymqi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\x72\x65\40\x69\x73\x20\x61\40\x70\162\x6f\142\154\145\155\40\x6f\156\40\x66\145\x74\x63\x68\x69\156\147\x20\162\145\154\x61\164\x65\x64\x20\172\x6f\x6e\145\40\x69\144\x20\x74\x6f\x20\x65\x6e\x74\x65\x72\x65\144\40\141\160\x69\40\x6b\145\171\56", PR__MDL__OPTIMIZATION)); goswwiomuackymqi: goto auaigccmwqwsqsku; } wiaesksmicgikqcm: auaigccmwqwsqsku: return true; } }
