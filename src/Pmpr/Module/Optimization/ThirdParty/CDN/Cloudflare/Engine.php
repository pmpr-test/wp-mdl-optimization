<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec01cb5e285             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\x62\x72\x6f\167\x73\145\162\137\x74\164\154"; const ewoiqwokqwgckgko = "\x72\145\163\160\x65\x63\x74\137\157\x72\x69\147\x69\156"; const semgeiqsogkegsee = "\141\x63\164\x69\157\156\137\160\141\x72\x61\155\145\x74\x65\162\x73"; const meigsywkomcimgyk = "\163\145\164\x5f\143\141\x63\x68\x65\x5f\163\145\164\x74\151\156\x67\163"; const mcquuuwkyksuqaso = "\143\x61\x63\x68\x65\x5f\x62\171\137\144\145\166\151\x63\145\137\x74\x79\160\x65"; const sosggameqyisqsaw = "\143\x61\x63\150\145\x5f\144\x65\143\x65\160\164\x69\157\x6e\x5f\141\162\155\157\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto cwugokqsmiomgmqg; } $this->api = API::symcgieuakksimmu(); cwugokqsmiomgmqg: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uuuceqkseqkqawko; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uuuceqkseqkqawko: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto ekoegocuqoycoeyq; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); ekoegocuqoycoeyq: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto yksamaucqkqsawkk; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); yksamaucqkqsawkk: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto mocaoayiouggauiy; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto akeoaicoieaiekcw; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto kskqquqsegiiogek; akeoaicoieaiekcw: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; kskqquqsegiiogek: mocaoayiouggauiy: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto gkkwmqoacciwomqs; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto ygskksomysgaokek; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); ygskksomysgaokek: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto weouocwmwicayyiy; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\103\141\x6e\x20\x6e\157\164\x20\x63\x72\145\141\x74\x65\40\x6f\162\40\146\145\x74\x63\150\40\143\141\x63\x68\145\40\x72\x75\154\x65\163\145\x74\72\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto ggyoywwggggekycs; weouocwmwicayyiy: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto wyugqoowakyicyic; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto becceuuwokgoaewy; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); becceuuwokgoaewy: qgkiguggkyiycwow: } wwcwmkowgooocaem: wyugqoowakyicyic: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto iuysqgmmgqiywssm; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto aeaciamekuqyieys; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto ugiqiewymimqecsu; aeaciamekuqyieys: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; ugiqiewymimqecsu: iuysqgmmgqiywssm: ggyoywwggggekycs: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); gkkwmqoacciwomqs: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto kucqcgeesiccuuia; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); kucqcgeesiccuuia: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\141\162\164\x73\137\x77\x69\164\x68\x28\150\164\x74\160\56\x72\145\161\x75\x65\163\x74\56\x75\162\151\56\x70\141\164\x68\x2c\x20\42\57\x22\x29\x29", Constants::eqkeooqcsscoggia => "\x43\141\x63\x68\x65\40\x46\162\157\156\164\145\x6e\144\x20\101\x72\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto oycuaqewsskgkqci; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); oycuaqewsskgkqci: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\163\x74\141\x72\x74\x73\x5f\167\151\x74\x68\x28\150\x74\164\160\56\x72\145\x71\x75\x65\x73\x74\x2e\165\x72\x69\x2e\x70\141\164\x68\54\x20\42\x2f\x77\x70\55\x61\x64\x6d\151\x6e\x2f\x22\51\x29", Constants::eqkeooqcsscoggia => "\102\171\x70\141\163\163\40\x42\141\143\x6b\145\x6e\144\40\101\162\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto ocmagamuyawyiyka; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\157\165\144\146\x6c\141\162\x65\x20\x25\x73\x20\x6e\x6f\164\40\145\156\x74\145\x72\145\x64\41", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\x61\x69\x6c", PR__MDL__OPTIMIZATION))); ocmagamuyawyiyka: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto syoeqaqkseguwmgy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\157\165\x64\x66\x6c\141\162\x65\40\45\163\40\156\157\x74\x20\x65\156\164\145\x72\x65\144\41", PR__MDL__OPTIMIZATION), __("\x41\120\x49\x20\x54\157\x6b\145\156", PR__MDL__OPTIMIZATION))); syoeqaqkseguwmgy: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto sgiouaqukyycswqm; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\x72\x65\40\151\x73\40\141\40\160\x72\x6f\x62\154\145\x6d\x20\157\156\40\x66\x65\164\x63\x68\151\x6e\x67\x20\x72\145\x6c\x61\164\x65\x64\x20\x64\157\155\141\151\156\40\x74\x6f\40\145\156\164\x65\162\145\144\x20\141\160\151\x20\164\157\153\145\156\56", PR__MDL__OPTIMIZATION)); sgiouaqukyycswqm: goto amqgiisymksuuuss; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto gwkawguwsamuomuo; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\157\165\x64\x66\154\x61\x72\145\x20\x25\163\40\x6e\157\164\x20\x65\156\x74\x65\x72\145\144\41", PR__MDL__OPTIMIZATION), __("\101\120\x49\40\x4b\x65\x79", PR__MDL__OPTIMIZATION))); gwkawguwsamuomuo: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto ucasigqmoiwaimkk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\162\145\x20\x69\163\x20\x61\40\160\x72\x6f\x62\154\145\x6d\x20\157\156\40\x66\145\164\143\150\x69\156\x67\40\x72\145\x6c\141\x74\x65\144\x20\172\x6f\x6e\145\x20\151\x64\x20\164\157\x20\145\x6e\x74\145\x72\x65\144\x20\141\160\x69\x20\x6b\145\171\x2e", PR__MDL__OPTIMIZATION)); ucasigqmoiwaimkk: goto amqgiisymksuuuss; } iwgmywqocewwgoeo: amqgiisymksuuuss: return true; } }
