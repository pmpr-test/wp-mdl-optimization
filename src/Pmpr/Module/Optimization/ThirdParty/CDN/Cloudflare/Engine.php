<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27a0f7c0c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\x6f\167\163\x65\x72\x5f\x74\164\154"; const ewoiqwokqwgckgko = "\162\145\x73\x70\145\143\164\x5f\x6f\x72\151\147\151\156"; const semgeiqsogkegsee = "\x61\x63\164\151\x6f\156\x5f\x70\x61\x72\x61\x6d\145\x74\145\162\x73"; const meigsywkomcimgyk = "\x73\x65\164\137\143\141\x63\x68\x65\x5f\163\145\x74\164\151\x6e\x67\x73"; const mcquuuwkyksuqaso = "\x63\x61\x63\150\145\x5f\x62\171\x5f\144\145\166\151\x63\x65\137\164\171\160\x65"; const sosggameqyisqsaw = "\x63\x61\x63\x68\x65\137\144\145\143\145\160\164\x69\x6f\156\137\x61\162\x6d\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ucasigqmoiwaimkk; } $this->api = API::symcgieuakksimmu(); ucasigqmoiwaimkk: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uugwmywmaqomeksa; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uugwmywmaqomeksa: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto wowmysuygugawmmu; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); wowmysuygugawmmu: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto mmmqqoemusicwgqg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); mmmqqoemusicwgqg: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto gsiaskgsukseumig; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto iquugwoswgkoiieg; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto xogaycsaesgqeqig; iquugwoswgkoiieg: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; xogaycsaesgqeqig: gsiaskgsukseumig: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iuyagqakcieasiua; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto syiyemqigyugagks; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); syiyemqigyugagks: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto mccimkgwkkamsime; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\x61\156\40\x6e\x6f\x74\40\x63\x72\x65\141\x74\x65\x20\x6f\162\x20\146\x65\164\143\x68\x20\143\x61\x63\x68\x65\x20\x72\165\x6c\x65\163\x65\164\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto ucaoyoamaycsiacq; mccimkgwkkamsime: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto omsmaougqkqigogw; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto umemmgiwimkymaya; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); umemmgiwimkymaya: imwiyqcekcykscui: } woqkgwmkmqsuceuy: omsmaougqkqigogw: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto guqmgiqaaowaauyo; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto geasgywiogoeamek; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto qweyymyuuqwcmkqg; geasgywiogoeamek: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; qweyymyuuqwcmkqg: guqmgiqaaowaauyo: ucaoyoamaycsiacq: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); iuyagqakcieasiua: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto oasisywuwssumsok; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); oasisywuwssumsok: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\163\x74\141\x72\x74\x73\137\x77\x69\x74\x68\50\x68\164\164\160\x2e\x72\145\161\x75\145\163\x74\x2e\165\162\x69\56\x70\x61\x74\x68\54\40\x22\57\42\x29\x29", Constants::eqkeooqcsscoggia => "\103\x61\x63\150\145\40\106\x72\157\156\x74\145\156\144\x20\x41\x72\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto iaoyeugekskmewgs; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); iaoyeugekskmewgs: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\x61\162\164\x73\x5f\x77\151\x74\150\x28\150\x74\x74\160\56\162\145\x71\165\145\x73\x74\56\x75\x72\x69\x2e\x70\x61\x74\x68\x2c\40\x22\x2f\167\160\x2d\141\x64\x6d\151\156\57\42\x29\51", Constants::eqkeooqcsscoggia => "\102\x79\160\x61\163\163\40\x42\x61\x63\153\x65\x6e\144\x20\x41\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto iokemmkgmcaksiqu; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\157\x75\x64\x66\154\141\x72\145\40\x25\163\40\x6e\x6f\x74\x20\x65\x6e\x74\x65\x72\145\x64\x21", PR__MDL__OPTIMIZATION), __("\145\x2d\155\141\x69\x6c", PR__MDL__OPTIMIZATION))); iokemmkgmcaksiqu: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto kieyoaoawqacqamy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\165\144\146\x6c\x61\162\145\40\45\163\x20\x6e\x6f\164\x20\145\x6e\x74\145\162\145\x64\x21", PR__MDL__OPTIMIZATION), __("\101\120\111\x20\x54\157\153\145\156", PR__MDL__OPTIMIZATION))); kieyoaoawqacqamy: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto qckouamqueqiykqi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\162\x65\x20\x69\163\x20\x61\x20\160\x72\x6f\x62\154\145\155\40\157\156\x20\x66\145\164\x63\x68\151\x6e\147\x20\162\145\154\x61\x74\x65\144\x20\x64\x6f\155\x61\151\156\x20\x74\157\40\x65\156\164\x65\x72\x65\x64\x20\x61\x70\x69\40\164\157\153\145\156\56", PR__MDL__OPTIMIZATION)); qckouamqueqiykqi: goto okagauksoqkoqygi; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto measoqewessauqma; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\x75\x64\146\154\141\x72\x65\x20\45\163\x20\x6e\x6f\164\40\145\156\164\x65\162\x65\144\x21", PR__MDL__OPTIMIZATION), __("\101\x50\x49\x20\x4b\x65\171", PR__MDL__OPTIMIZATION))); measoqewessauqma: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto auaigccmwqwsqsku; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\x65\x72\145\40\151\163\x20\141\x20\160\162\157\x62\x6c\145\155\x20\x6f\156\x20\146\x65\x74\143\150\151\156\x67\x20\x72\x65\154\x61\x74\x65\x64\x20\x7a\157\156\x65\x20\151\144\x20\x74\x6f\40\x65\156\164\x65\162\x65\144\40\141\160\151\x20\153\x65\171\x2e", PR__MDL__OPTIMIZATION)); auaigccmwqwsqsku: goto okagauksoqkoqygi; } eciksmgaqikwegwq: okagauksoqkoqygi: return true; } }
