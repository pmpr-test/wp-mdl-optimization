<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f18cb37259d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\157\167\x73\x65\x72\137\164\x74\x6c"; const ewoiqwokqwgckgko = "\x72\145\x73\x70\145\x63\x74\137\157\x72\151\x67\x69\156"; const semgeiqsogkegsee = "\141\143\x74\x69\x6f\x6e\137\160\141\162\141\x6d\x65\x74\145\162\163"; const meigsywkomcimgyk = "\x73\x65\164\x5f\x63\141\x63\150\x65\137\163\x65\164\164\151\156\147\163"; const mcquuuwkyksuqaso = "\143\141\x63\x68\x65\137\142\x79\x5f\x64\145\166\151\x63\145\x5f\164\x79\160\x65"; const sosggameqyisqsaw = "\143\x61\x63\150\x65\x5f\x64\x65\143\145\x70\x74\x69\157\156\x5f\141\x72\155\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ucasigqmoiwaimkk; } $this->api = API::symcgieuakksimmu(); ucasigqmoiwaimkk: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uugwmywmaqomeksa; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uugwmywmaqomeksa: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto wowmysuygugawmmu; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); wowmysuygugawmmu: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto mmmqqoemusicwgqg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); mmmqqoemusicwgqg: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto gsiaskgsukseumig; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto iquugwoswgkoiieg; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto xogaycsaesgqeqig; iquugwoswgkoiieg: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; xogaycsaesgqeqig: gsiaskgsukseumig: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iuyagqakcieasiua; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto syiyemqigyugagks; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); syiyemqigyugagks: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto mccimkgwkkamsime; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\141\x6e\40\x6e\x6f\x74\x20\x63\x72\145\x61\x74\145\40\x6f\162\40\x66\145\164\143\150\40\143\x61\143\150\x65\40\x72\x75\x6c\145\x73\x65\164\x3a\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto ucaoyoamaycsiacq; mccimkgwkkamsime: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto omsmaougqkqigogw; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto umemmgiwimkymaya; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); umemmgiwimkymaya: imwiyqcekcykscui: } woqkgwmkmqsuceuy: omsmaougqkqigogw: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto guqmgiqaaowaauyo; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto geasgywiogoeamek; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto qweyymyuuqwcmkqg; geasgywiogoeamek: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; qweyymyuuqwcmkqg: guqmgiqaaowaauyo: ucaoyoamaycsiacq: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); iuyagqakcieasiua: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto oasisywuwssumsok; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); oasisywuwssumsok: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\x61\x72\x74\x73\137\x77\x69\164\x68\50\150\164\x74\x70\x2e\162\x65\161\165\145\163\164\56\x75\162\151\56\x70\141\x74\150\x2c\x20\42\x2f\x22\x29\x29", Constants::eqkeooqcsscoggia => "\x43\141\x63\x68\145\x20\106\162\157\156\164\145\x6e\144\40\101\162\145\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto iaoyeugekskmewgs; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); iaoyeugekskmewgs: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\x61\162\164\163\137\x77\151\164\x68\x28\150\164\164\x70\x2e\162\x65\161\165\145\x73\164\56\165\162\x69\x2e\160\x61\164\x68\x2c\x20\42\57\167\160\x2d\141\144\x6d\151\x6e\x2f\x22\51\x29", Constants::eqkeooqcsscoggia => "\x42\x79\160\141\x73\x73\x20\102\141\x63\x6b\145\x6e\144\40\101\162\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto iokemmkgmcaksiqu; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\165\144\x66\x6c\x61\x72\145\x20\x25\163\x20\156\x6f\x74\x20\145\156\x74\145\x72\x65\144\x21", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\141\151\154", PR__MDL__OPTIMIZATION))); iokemmkgmcaksiqu: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto kieyoaoawqacqamy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\157\x75\144\x66\x6c\141\x72\145\x20\x25\163\x20\156\157\164\40\145\156\164\x65\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\101\x50\111\40\124\x6f\153\145\156", PR__MDL__OPTIMIZATION))); kieyoaoawqacqamy: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto qckouamqueqiykqi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\162\145\x20\151\163\x20\x61\x20\160\162\157\142\154\x65\155\x20\x6f\156\x20\146\145\x74\x63\x68\151\x6e\x67\40\162\145\154\141\x74\145\x64\x20\144\157\x6d\141\151\156\40\x74\x6f\40\145\x6e\x74\145\162\145\x64\40\x61\160\x69\x20\x74\x6f\153\x65\x6e\56", PR__MDL__OPTIMIZATION)); qckouamqueqiykqi: goto okagauksoqkoqygi; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto measoqewessauqma; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\x6f\165\144\146\x6c\x61\x72\145\x20\45\x73\x20\156\x6f\164\x20\145\x6e\164\145\x72\145\x64\41", PR__MDL__OPTIMIZATION), __("\x41\120\111\40\x4b\145\x79", PR__MDL__OPTIMIZATION))); measoqewessauqma: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto auaigccmwqwsqsku; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\x72\x65\40\x69\163\40\141\x20\x70\x72\157\142\154\145\155\40\157\x6e\x20\146\145\164\143\150\151\156\147\x20\x72\145\x6c\141\x74\145\144\x20\x7a\x6f\156\x65\40\151\144\40\164\x6f\x20\x65\156\164\145\162\145\x64\x20\x61\x70\151\40\153\x65\x79\56", PR__MDL__OPTIMIZATION)); auaigccmwqwsqsku: goto okagauksoqkoqygi; } eciksmgaqikwegwq: okagauksoqkoqygi: return true; } }
