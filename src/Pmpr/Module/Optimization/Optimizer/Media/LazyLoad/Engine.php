<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1eae701745             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\x73\x72\x63" => "\144\141\164\x61\55\163\162\x63", "\163\151\172\145\x73" => "\144\141\164\141\x2d\x73\151\x7a\145\x73", "\x73\162\x63\x73\145\164" => "\x64\x61\164\x61\55\163\162\143\163\x65\x74", "\160\x6f\x73\164\x65\x72" => "\144\141\164\x61\55\160\157\x73\x74\145\x72"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\x66\157\x72\x65\x5f\x65\156\x71\165\145\165\145\x5f\x66\162\x6f\x6e\164\145\156\144\x5f\141\x73\x73\x65\x74\163", [$this, "\x65\x6e\161\x75\145\x75\145"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\137\x6c\141\x7a\171\x5f\x6c\x6f\x61\x64\x69\156\147\137\145\x6e\x61\142\x6c\145\x64", [$this, "\x6d\x67\x6b\x65\161\x71\153\155\x73\161\x71\x69\x6b\x73\171\x6f"], 10, 2); $this->miasamwyaiagioug([$this, "\x71\x73\165\x73\x75\x65\147\147\x6f\x6b\171\x61\x61\x65\167\155"], 15); } public function enqueue() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto momuweiasiwskekw; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\x65\144\x69\141\55\x6c\141\172\x79\x6c\157\x61\x64")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\x61\172\x79\x6c\157\x61\144\x2e\x6a\163")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x6d\145\144\x69\x61\x2d\x6c\x61\x7a\171\154\157\141\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\154\x61\172\x79\x6c\157\141\144\x2e\x63\163\x73"))); momuweiasiwskekw: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto aucwccaiqwsmyuaq; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto qaewauyekqucciyc; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); qaewauyekqucciyc: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto bgakaasgwwygosyi; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); bgakaasgwwygosyi: aucwccaiqwsmyuaq: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\x5b\163\164\x79\x6c\x65\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto iiiwsgameuomumgw; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\x74\x79\x6c\x65"))) { goto agyooskogigyayws; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\164\141\55\x73\164\x79\154\145", $eqgoocgaqwqcimie); agyooskogigyayws: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\x73\x74\171\154\x65"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); iiiwsgameuomumgw: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\x69\155\147\72\x6e\x6f\x74\x28\56\144\157\x6e\x74\55\x6c\x61\x7a\171\55\x6c\x6f\x61\x64\x29\x2c\40\160\x69\x63\164\165\x72\145\72\156\157\x74\x28\x2e\144\157\156\164\55\154\x61\172\x79\55\x6c\157\141\144\51\40\x3e\x20\163\157\165\x72\143\x65"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\146\x72\x61\155\145\72\156\157\x74\x28\x2e\x64\157\156\x74\55\x6c\x61\172\171\x2d\154\x6f\x61\x64\x29\54\x20\166\x69\x64\x65\157\x3a\156\157\164\x28\56\144\x6f\x6e\164\55\x6c\x61\x7a\171\55\x6c\157\x61\x64\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\144\151\x76\x5b\163\164\171\x6c\145\135\54\x66\x69\x67\165\162\145\133\163\x74\x79\154\145\135\x2c\163\145\x63\164\151\157\x6e\x5b\163\164\x79\154\x65\x5d\x2c\163\x70\141\x6e\133\163\164\171\154\145\135\54\x6c\x69\133\x73\x74\171\x6c\x65\135"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto scockmiqikwwkqse; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\x79\154\145"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto mcukocaaoyuugoeu; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\x61\164\x61\55\x62\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\42{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\x22", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x73\164\171\154\145", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); mcukocaaoyuugoeu: return $ymyisaeksssueeik; }); scockmiqikwwkqse: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\143\154\141\x73\x73"); $egkyssmuqcwaciya .= "\x20\154\x61\x7a\x79\x6c\x6f\x61\x64"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x63\x6c\141\163\163", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto kssuqmsgmaaeqigw; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto egwgyekaiqomyeaa; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; cgwokqwakqcmiieo: } okycquokqoamsquy: egwgyekaiqomyeaa: kssuqmsgmaaeqigw: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\163\162\143"]))) { goto uwusswwekqcsisus; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\163\x72\x63"]] = Constants::sgiwkasmqqockceq; uwusswwekqcsisus: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto uyksacasqywyessc; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto mciumqyyossyiuyk; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); mciumqyyossyiuyk: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto mukwsuuuqcgesmwc; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto kqyeukywmgismyaq; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto acaeigkmigikeuyu; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\146\145\x74\x63\150\160\162\x69\157\x72\x69\164\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); acaeigkmigikeuyu: return $ymyisaeksssueeik; kqyeukywmgismyaq: mukwsuuuqcgesmwc: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto wyqmeyoaggwuioak; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto wykuosegisygosiq; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); wykuosegisygosiq: if ($msqkueqksqwmskak === "\x73\162\143") { goto omemqagskckoeoog; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto aeuosggumiiwoesm; omemqagskckoeoog: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\144\141\164\141\55\x69\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto ugikgkwuwmgymgus; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto gsgyayuaekgyoumc; ugikgkwuwmgymgus: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); gsgyayuaekgyoumc: aeuosggumiiwoesm: wyqmeyoaggwuioak: omgcsmsikaggaooc: } cqeoguiqiymkyweo: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); uyksacasqywyessc: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei())) { goto sqmqwqeoygcmqcim; } return $eqgoocgaqwqcimie; sqmqwqeoygcmqcim: switch ($wkgkmowokewiiaoo) { case "\151\x6d\x67": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto syykqmkiyoekqsek; case "\151\x66\x72\x61\x6d\x65": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto syykqmkiyoekqsek; } aiqekkyauwswayyq: syykqmkiyoekqsek: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\x69\x61\137\x6c\x61\172\171\x5f\x6c\x6f\141\144\137\160\x6c\141\143\x65\x68\x6f\154\144\145\x72", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto mmcikqikqecaeswu; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\x20", "\x25\x32\60", "\x64\141\164\x61\x3a\151\155\141\x67\x65\57\163\x76\x67\53\170\x6d\154\x2c\x25\63\103\163\x76\x67\40\170\155\154\156\x73\75\47\x68\x74\164\160\72\x2f\57\x77\167\167\x2e\167\63\56\157\162\x67\x2f\62\60\x30\x30\x2f\x73\166\x67\x27\40\x76\151\145\167\102\x6f\170\75\47\60\x20\x30\40{$qeswwaqqsyymqawg}\x20{$cswemwoyesycwkuq}\x27\45\x33\105\x25\x33\x43\x2f\163\166\x67\x25\63\x45"); mmcikqikqecaeswu: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\x2f\167\160\x63\146\67\x5f\x63\141\160\x74\x63\150\141\57", "\x74\151\x6d\x74\x68\x75\x6d\142\x2e\160\x68\160\77\163\162\x63", "\167\x6f\x6f\143\157\x6d\155\x65\162\x63\x65\x2f\141\163\163\145\164\x73\x2f\x69\x6d\x61\x67\145\x73\x2f\x70\154\x61\x63\145\x68\x6f\154\144\145\162\56\x70\156\x67"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto ywsywoumuaykkeaa; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); ywsywoumuaykkeaa: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\x69\x61\137\x6c\x61\172\x79\x6c\157\x61\144\x5f\x65\x78\143\x6c\x75\x64\145\x64\137\163\x72\x63", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\145\x64\151\141\137\x6c\141\172\171\154\x6f\x61\x64\x5f\145\x78\143\x6c\165\x64\145\144\x5f\x61\x74\164\162\151\x62\165\164\145\x73", ["\144\x61\164\141\x2d\163\162\143\x3d", "\x64\141\164\141\x2d\156\x6f\55\x6c\141\x7a\x79\x3d", "\144\x61\164\141\55\154\141\x7a\171\x2d\157\x72\x69\147\151\156\141\x6c\x3d", "\x64\x61\164\x61\55\x6c\141\172\x79\55\163\162\143\75", "\x64\141\x74\141\55\154\141\x7a\x79\163\162\143\x3d", "\x64\141\x74\x61\x2d\154\141\x7a\171\154\157\141\x64\x3d", "\x64\x61\x74\x61\55\x62\147\160\157\163\151\x74\151\157\x6e\75", "\144\x61\x74\141\55\x65\156\166\151\162\x61\x2d\x73\x72\x63\x3d", "\x66\x75\x6c\154\165\162\x6c\75", "\x6c\141\172\x79\55\163\x6c\151\x64\x65\162\x2d\151\155\x67\75", "\144\141\164\x61\55\163\x72\x63\x73\x65\164\x3d", "\x63\x6c\x61\x73\163\x3d\x22\154\163\55\154", "\143\x6c\x61\x73\x73\x3d\x22\x6c\163\x2d\x62\147", "\x73\x6f\x6c\x69\x6c\157\x71\x75\x79\x2d\151\x6d\x61\x67\x65", "\x6c\x6f\x61\144\x69\156\147\75\x22\x65\141\147\145\x72\42", "\x73\x77\141\164\143\x68\55\151\x6d\x67", "\x64\x61\x74\141\x2d\150\x65\151\x67\x68\x74\x2d\160\x65\162\x63\x65\156\164\x61\147\145", "\x64\x61\164\x61\55\x6c\x61\x72\147\x65\x5f\151\155\141\x67\x65", "\x61\166\x69\141\55\142\x67\x2d\x73\164\171\x6c\145\55\146\x69\x78\x65\x64", "\144\x61\x74\x61\x2d\x73\153\151\160\x2d\x6c\x61\172\x79", "\163\153\x69\x70\x2d\x6c\141\172\171", "\x69\155\141\147\x65\x2d\143\157\155\160\x61\x72\x65\137\137"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
