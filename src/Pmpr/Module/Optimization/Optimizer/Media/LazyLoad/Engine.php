<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae19a7b618             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\163\x72\x63" => "\x64\x61\164\141\x2d\x73\x72\143", "\x73\151\x7a\145\163" => "\144\x61\164\x61\x2d\x73\151\x7a\145\163", "\x73\162\x63\x73\145\x74" => "\144\141\x74\141\x2d\x73\162\143\x73\145\x74", "\160\157\x73\x74\145\x72" => "\144\141\164\x61\x2d\x70\157\163\x74\x65\x72"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\145\146\157\162\x65\137\x65\x6e\161\165\x65\x75\145\137\146\x72\157\156\164\x65\156\x64\x5f\141\163\x73\x65\x74\x73", [$this, "\x65\156\161\x75\x65\x75\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\x5f\154\141\172\x79\137\154\157\141\x64\x69\156\147\x5f\145\x6e\x61\142\154\145\144", [$this, "\155\x67\x6b\145\161\x71\153\x6d\x73\x71\x71\x69\x6b\163\x79\x6f"], 10, 2); $this->miasamwyaiagioug([$this, "\161\x73\165\x73\x75\145\147\x67\x6f\153\x79\x61\x61\x65\167\155"], 15); } public function enqueue() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto emomkqccysciiqya; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\x65\x64\x69\x61\55\x6c\141\172\171\154\157\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\x79\154\x6f\141\x64\x2e\x6a\x73")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\x65\144\x69\141\55\x6c\x61\172\171\x6c\x6f\x61\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\171\154\157\141\144\56\143\x73\x73"))); emomkqccysciiqya: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto ismoiisskiwmmmiu; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto ywykuacciwwkwmmy; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); ywykuacciwwkwmmy: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto qgcgucmskokqquwk; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); qgcgucmskokqquwk: ismoiisskiwmmmiu: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\163\164\171\154\145\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto uwmgacqaowuguiow; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\171\x6c\145"))) { goto oikomikqcwikimkw; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\141\55\x73\x74\x79\x6c\145", $eqgoocgaqwqcimie); oikomikqcwikimkw: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\163\x74\171\x6c\x65"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); uwmgacqaowuguiow: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\155\x67\x3a\156\x6f\164\x28\56\144\157\156\164\x2d\154\x61\x7a\x79\55\x6c\157\x61\x64\x29\x2c\x20\160\151\143\164\x75\x72\x65\72\x6e\x6f\x74\50\56\144\157\156\x74\55\x6c\x61\172\171\x2d\154\x6f\x61\144\51\x20\x3e\40\163\x6f\165\162\143\145"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\146\162\x61\155\145\72\156\x6f\x74\50\x2e\x64\x6f\x6e\164\55\154\x61\x7a\171\55\x6c\x6f\141\144\51\54\x20\x76\151\x64\x65\157\72\156\157\164\x28\x2e\x64\x6f\x6e\x74\x2d\x6c\x61\x7a\x79\x2d\x6c\x6f\141\144\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\x64\151\x76\x5b\163\164\171\x6c\145\135\x2c\146\151\147\165\162\x65\x5b\x73\x74\171\x6c\x65\x5d\x2c\x73\145\x63\164\151\157\x6e\133\x73\164\x79\x6c\x65\x5d\54\x73\x70\x61\156\133\x73\164\x79\x6c\x65\x5d\54\154\x69\x5b\163\x74\x79\154\145\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto ygqqeqgiaasoimgs; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x74\171\x6c\145"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto cecamogauimuwoow; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\x2d\x62\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\42{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\x22", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\163\164\x79\x6c\145", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); cecamogauimuwoow: return $ymyisaeksssueeik; }); ygqqeqgiaasoimgs: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\x6c\x61\x73\x73"); $egkyssmuqcwaciya .= "\x20\154\x61\172\x79\154\157\x61\144"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\154\x61\x73\x73", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto wgeskeagymiuoigi; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto goqkegseiummeiak; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; yuccckoykmccwyce: } gsiagogeoqwqekei: goqkegseiummeiak: wgeskeagymiuoigi: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\163\x72\143"]))) { goto mcoyaaiggymgcsgq; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\x73\x72\143"]] = Constants::sgiwkasmqqockceq; mcoyaaiggymgcsgq: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto auauyoooouqkickk; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto wcqyakkqcgmeqaag; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); wcqyakkqcgmeqaag: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto uaiqqcsoksgukasg; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\162\143"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto ckmkeuakisiukage; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto coygueuwyguuciww; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\146\x65\164\x63\x68\x70\x72\x69\157\x72\x69\164\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); coygueuwyguuciww: return $ymyisaeksssueeik; ckmkeuakisiukage: uaiqqcsoksgukasg: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto ewcyigsymwuuogci; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto iuoqiecqaoosioey; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); iuoqiecqaoosioey: if ($msqkueqksqwmskak === "\163\x72\143") { goto ugowokkqeoeugkqe; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto qmqumgawyyqqamoa; ugowokkqeoeugkqe: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\141\x74\141\x2d\151\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto woqsaqwocioumoeu; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto ukyoyoqcyywgaywg; woqsaqwocioumoeu: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); ukyoyoqcyywgaywg: qmqumgawyyqqamoa: ewcyigsymwuuogci: sqmgqacueqiiekay: } iqyqgqwwaaigmuou: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); auauyoooouqkickk: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei())) { goto egcsskmsysqiiikm; } return $eqgoocgaqwqcimie; egcsskmsysqiiikm: switch ($wkgkmowokewiiaoo) { case "\x69\155\147": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto mogomwoquuesmcec; case "\x69\x66\162\141\155\x65": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto mogomwoquuesmcec; } akiuyguwqaukuugs: mogomwoquuesmcec: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\145\144\x69\x61\x5f\154\141\x7a\171\x5f\154\157\x61\x64\137\x70\154\x61\143\145\150\x6f\x6c\x64\x65\x72", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto emiyocoiuwcucuwu; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\x20", "\x25\62\x30", "\x64\141\x74\141\72\x69\x6d\141\147\145\x2f\163\166\x67\x2b\170\x6d\154\54\x25\x33\x43\163\166\147\40\170\x6d\154\156\163\x3d\x27\150\x74\x74\160\72\57\x2f\167\167\x77\x2e\x77\x33\x2e\157\162\147\x2f\x32\x30\60\60\x2f\163\x76\147\47\x20\166\151\145\167\x42\157\170\x3d\x27\x30\x20\x30\40{$qeswwaqqsyymqawg}\x20{$cswemwoyesycwkuq}\x27\x25\63\x45\x25\x33\x43\57\x73\166\x67\45\x33\x45"); emiyocoiuwcucuwu: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\x2f\x77\x70\x63\x66\67\137\143\141\160\164\x63\150\141\x2f", "\164\151\x6d\x74\x68\165\155\142\56\x70\150\x70\77\x73\162\143", "\167\157\157\143\x6f\155\x6d\x65\162\x63\145\x2f\141\163\x73\x65\x74\x73\57\151\155\x61\147\145\x73\57\160\x6c\141\143\x65\x68\x6f\154\144\145\162\x2e\160\x6e\147"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto cyikoqssoemgwyyk; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); cyikoqssoemgwyyk: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\144\151\141\x5f\154\141\x7a\x79\x6c\157\141\144\137\145\x78\143\154\165\144\x65\144\137\163\x72\x63", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\x65\144\151\141\x5f\x6c\141\x7a\171\154\157\x61\x64\137\x65\170\143\154\165\144\x65\x64\x5f\x61\164\x74\x72\x69\x62\x75\x74\145\163", ["\144\141\x74\141\55\x73\x72\143\x3d", "\x64\141\164\141\x2d\156\157\x2d\x6c\x61\172\171\x3d", "\144\141\164\141\x2d\154\141\172\171\55\157\x72\151\x67\x69\x6e\x61\154\x3d", "\144\141\164\141\55\x6c\x61\172\171\x2d\x73\162\143\75", "\x64\x61\x74\141\55\154\x61\172\171\x73\x72\143\x3d", "\x64\x61\164\141\x2d\154\141\x7a\x79\x6c\x6f\x61\x64\75", "\144\141\164\x61\55\x62\x67\x70\x6f\163\x69\x74\151\x6f\156\75", "\x64\x61\164\141\55\x65\x6e\x76\151\162\141\x2d\163\162\x63\75", "\x66\x75\154\154\165\x72\x6c\75", "\x6c\x61\172\171\55\x73\x6c\151\x64\145\162\x2d\151\x6d\147\x3d", "\x64\x61\164\141\55\x73\x72\x63\x73\x65\164\75", "\x63\x6c\141\x73\x73\x3d\x22\154\163\x2d\154", "\x63\x6c\141\x73\x73\x3d\x22\x6c\163\x2d\x62\147", "\x73\x6f\154\x69\154\x6f\161\x75\x79\55\151\155\x61\147\x65", "\154\157\x61\144\151\156\147\75\x22\145\x61\147\x65\x72\x22", "\x73\167\141\x74\143\x68\55\151\155\x67", "\x64\x61\x74\141\55\150\145\x69\x67\150\x74\55\160\145\x72\143\x65\156\x74\141\147\145", "\144\x61\x74\x61\55\x6c\141\162\x67\145\137\x69\155\141\147\145", "\x61\166\x69\141\x2d\x62\x67\55\x73\x74\171\154\x65\x2d\x66\x69\x78\145\144", "\144\141\164\x61\55\163\153\x69\160\55\154\x61\172\171", "\163\153\x69\160\55\x6c\141\x7a\x79", "\x69\x6d\141\x67\145\x2d\143\157\155\160\141\162\x65\137\x5f"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
