<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d8d7adaa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\x62\x72\157\167\x73\x65\x72\137\x74\x74\x6c"; const ewoiqwokqwgckgko = "\x72\145\163\x70\145\x63\164\x5f\x6f\x72\x69\147\x69\x6e"; const semgeiqsogkegsee = "\x61\x63\164\151\x6f\156\x5f\160\x61\x72\x61\155\145\164\145\x72\163"; const meigsywkomcimgyk = "\163\145\164\x5f\143\141\143\150\x65\x5f\x73\145\x74\x74\151\x6e\147\163"; const mcquuuwkyksuqaso = "\143\141\143\150\x65\x5f\x62\171\x5f\144\145\x76\x69\143\x65\x5f\164\x79\160\x65"; const sosggameqyisqsaw = "\x63\141\143\x68\x65\137\x64\x65\x63\x65\160\x74\x69\157\x6e\x5f\141\162\x6d\157\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if (!$this->api) { $this->api = API::symcgieuakksimmu(); } return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); } return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if ($keyoqcuykssgcoau !== '') { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $ksaameoqigiaoigg = $kwogmsuwiyakckuo; } } return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau)) { $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); } if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if ($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc)) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if ($ymawgemiwyykseqg) { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); } } } $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if ($emqycqesyamqucem && is_string($emqycqesyamqucem)) { $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\x61\x6e\x20\156\157\x74\40\x63\x72\145\x61\x74\145\x20\157\162\x20\x66\x65\164\x63\x68\x20\143\141\143\150\x65\40\x72\165\154\x65\x73\145\164\x3a\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); } $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); } return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\163\x74\141\x72\164\163\x5f\x77\151\x74\150\50\x68\164\x74\x70\56\162\145\x71\165\x65\x73\164\56\x75\162\151\56\x70\x61\164\x68\54\x20\x22\x2f\x22\51\51", Constants::eqkeooqcsscoggia => "\103\141\x63\x68\145\40\106\x72\x6f\x6e\x74\x65\156\144\x20\x41\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\164\x61\x72\x74\x73\137\167\x69\x74\150\x28\150\x74\164\x70\x2e\x72\145\161\x75\145\163\x74\x2e\165\162\x69\x2e\x70\141\x74\150\x2c\x20\x22\57\x77\x70\x2d\x61\x64\155\x69\156\57\x22\x29\51", Constants::eqkeooqcsscoggia => "\102\x79\160\141\x73\x73\40\102\x61\x63\x6b\x65\x6e\144\x20\x41\x72\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\x6f\165\144\146\x6c\x61\162\x65\x20\x25\x73\40\156\157\164\x20\145\x6e\164\x65\162\145\144\41", PR__MDL__OPTIMIZATION), __("\145\55\155\141\151\x6c", PR__MDL__OPTIMIZATION))); } switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\157\165\x64\x66\x6c\x61\x72\145\x20\x25\163\x20\x6e\x6f\x74\x20\x65\156\164\145\162\145\x64\41", PR__MDL__OPTIMIZATION), __("\x41\x50\x49\40\x54\157\x6b\x65\156", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\162\x65\40\151\163\x20\141\x20\160\x72\x6f\x62\154\145\155\x20\x6f\156\40\146\145\x74\x63\x68\151\156\147\x20\162\145\x6c\141\x74\145\x64\x20\144\x6f\x6d\x61\151\x6e\40\x74\157\40\x65\156\164\145\162\145\144\x20\x61\160\151\40\x74\x6f\153\x65\x6e\x2e", PR__MDL__OPTIMIZATION)); } break; case Setting::fsekswokoseswcqm: if (empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\x75\144\x66\x6c\x61\x72\145\40\x25\163\40\156\x6f\x74\40\x65\156\x74\x65\162\x65\x64\41", PR__MDL__OPTIMIZATION), __("\x41\x50\111\x20\x4b\145\171", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\162\x65\40\x69\x73\x20\141\40\x70\162\157\142\x6c\145\155\40\x6f\x6e\x20\x66\x65\x74\x63\150\151\x6e\147\40\162\x65\154\x61\x74\x65\144\40\172\x6f\156\145\x20\151\144\x20\x74\157\40\145\x6e\164\145\162\x65\x64\40\x61\160\x69\x20\x6b\x65\x79\56", PR__MDL__OPTIMIZATION)); } break; } return true; } }
