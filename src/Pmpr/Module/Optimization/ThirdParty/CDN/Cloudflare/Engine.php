<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356236bf3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\162\157\x77\163\145\x72\137\x74\x74\x6c"; const ewoiqwokqwgckgko = "\162\x65\163\160\x65\x63\164\x5f\x6f\x72\x69\147\x69\x6e"; const semgeiqsogkegsee = "\x61\143\x74\151\x6f\x6e\137\160\141\162\x61\x6d\x65\x74\145\x72\163"; const meigsywkomcimgyk = "\163\145\164\137\x63\141\x63\x68\x65\137\x73\x65\x74\164\x69\x6e\147\x73"; const mcquuuwkyksuqaso = "\x63\141\143\150\x65\x5f\142\x79\137\x64\145\x76\151\x63\145\x5f\x74\171\160\x65"; const sosggameqyisqsaw = "\143\x61\143\x68\145\137\x64\x65\x63\x65\x70\164\x69\x6f\x6e\x5f\x61\x72\155\157\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if (!$this->api) { $this->api = API::symcgieuakksimmu(); } return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); } return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if ($keyoqcuykssgcoau !== '') { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $ksaameoqigiaoigg = $kwogmsuwiyakckuo; } } return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau)) { $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); } if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if ($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc)) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if ($ymawgemiwyykseqg) { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); } } } $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if ($emqycqesyamqucem && is_string($emqycqesyamqucem)) { $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\x61\156\x20\x6e\157\164\40\143\x72\145\141\x74\x65\x20\x6f\162\x20\146\145\164\x63\150\40\143\x61\143\150\x65\40\162\x75\x6c\x65\163\145\x74\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); } $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); } return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\141\x72\x74\x73\137\167\x69\x74\150\x28\x68\164\x74\x70\x2e\162\x65\x71\165\145\x73\x74\56\165\162\151\56\160\x61\164\x68\x2c\x20\x22\x2f\42\x29\x29", Constants::eqkeooqcsscoggia => "\103\x61\x63\x68\145\x20\x46\x72\x6f\x6e\x74\x65\156\144\x20\x41\162\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\141\162\x74\163\137\x77\x69\164\x68\50\150\x74\164\160\56\162\x65\161\165\x65\x73\164\56\x75\x72\x69\56\x70\x61\164\150\x2c\40\x22\57\167\x70\55\141\x64\155\x69\156\57\42\51\x29", Constants::eqkeooqcsscoggia => "\x42\171\160\x61\163\163\40\102\141\x63\153\x65\x6e\144\x20\x41\x72\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\165\144\146\x6c\x61\x72\145\x20\x25\163\x20\156\157\164\40\x65\x6e\x74\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\145\x2d\x6d\141\x69\x6c", PR__MDL__OPTIMIZATION))); } switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\x75\144\x66\x6c\x61\162\145\40\x25\x73\40\156\x6f\164\40\x65\x6e\164\145\x72\145\144\x21", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\x54\157\153\145\x6e", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\162\145\x20\151\163\40\141\x20\160\162\x6f\x62\154\145\x6d\x20\x6f\x6e\40\146\x65\x74\143\x68\151\x6e\x67\x20\162\x65\x6c\x61\164\145\144\40\x64\157\155\x61\151\x6e\x20\x74\157\40\x65\x6e\x74\145\x72\x65\144\40\141\160\151\x20\x74\x6f\x6b\145\156\x2e", PR__MDL__OPTIMIZATION)); } break; case Setting::fsekswokoseswcqm: if (empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\157\x75\144\146\x6c\141\162\145\40\x25\163\40\x6e\157\x74\40\x65\156\x74\x65\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\x4b\x65\171", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\x65\162\145\40\151\163\40\x61\x20\160\x72\x6f\142\x6c\x65\155\40\157\x6e\40\146\145\164\x63\x68\151\156\147\40\x72\145\154\x61\x74\x65\x64\40\x7a\157\x6e\145\40\151\x64\x20\x74\157\40\x65\x6e\164\145\162\145\144\40\x61\160\151\x20\153\x65\171\56", PR__MDL__OPTIMIZATION)); } break; } return true; } }
