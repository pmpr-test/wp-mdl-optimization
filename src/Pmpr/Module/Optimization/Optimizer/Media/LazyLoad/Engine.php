<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef5003b08f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media\LazyLoad; use DOMElement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; use Pmpr\Module\Optimization\PageManager\Model\Process; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; class Engine extends BufferEngine { use PageManagerEngineTrait; const uoogwumawwsywcaq = ["\x73\162\143" => "\x64\x61\x74\141\55\x73\162\x63", "\163\151\172\x65\163" => "\144\x61\164\141\x2d\163\151\x7a\145\163", "\163\x72\143\x73\145\164" => "\x64\141\x74\x61\55\x73\162\x63\x73\145\164", "\160\157\163\164\145\x72" => "\144\141\x74\141\x2d\x70\x6f\163\164\x65\162"]; public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\145\146\157\162\x65\x5f\145\x6e\x71\165\x65\165\x65\137\146\x72\x6f\x6e\x74\145\x6e\x64\137\141\x73\x73\145\164\163", [$this, "\145\x6e\x71\165\x65\x75\x65"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x70\x5f\x6c\x61\172\x79\137\x6c\157\x61\x64\x69\156\147\137\145\x6e\141\x62\154\x65\x64", [$this, "\x6d\147\x6b\145\161\161\x6b\x6d\163\161\x71\151\153\163\x79\157"], 10, 2); $this->miasamwyaiagioug([$this, "\x71\x73\165\163\165\x65\x67\x67\x6f\x6b\x79\x61\x61\145\x77\x6d"], 15); } public function enqueue() { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto sockocsycmkaeosg; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x6d\145\144\x69\141\x2d\x6c\x61\x7a\x79\154\x6f\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\172\171\x6c\x6f\x61\144\x2e\152\x73")))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\155\x65\144\x69\x61\55\154\141\x7a\171\x6c\x6f\x61\144")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x6c\141\172\x79\154\157\141\x64\x2e\143\163\x73"))); sockocsycmkaeosg: } public function qsusueggokyaaewm($moooemyaqewumiay) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto asoecuscmsyusmkg; } $kqywgoqsmuswammk = $this->weysguygiseoukqw(Setting::souisqooyuiygceo); if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::mkousmkiawwousws], true)) { goto ugkwqaywmwqucoeo; } $moooemyaqewumiay = $this->owqscsmucwgiqsim($moooemyaqewumiay); $moooemyaqewumiay = $this->mqqggimwoqogukwm($moooemyaqewumiay); ugkwqaywmwqucoeo: if (!in_array($kqywgoqsmuswammk, [Constants::ALL, Constants::ykigkkwgecsygowo], true)) { goto syisomgawcsqeemk; } $moooemyaqewumiay = $this->iagoosqgoismuqwe($moooemyaqewumiay); syisomgawcsqeemk: asoecuscmsyusmkg: return $moooemyaqewumiay; } public function omiaycacqkmkeeaw($moooemyaqewumiay) { $yuumukkaswwoywya = "\133\x73\x74\171\154\x65\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kiskwawumeiiieuk; } $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos) { if (!($eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\163\164\x79\154\145"))) { goto kwasqmcyiswoaiuu; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x64\141\164\141\x2d\x73\164\x79\154\x65", $eqgoocgaqwqcimie); kwasqmcyiswoaiuu: $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, "\163\x74\x79\154\145"); return $this->akqamsokouooqqgw($ymyisaeksssueeik); }); kiskwawumeiiieuk: return $moooemyaqewumiay; } public function owqscsmucwgiqsim($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\x6d\147\x3a\156\157\164\x28\x2e\x64\157\x6e\164\55\x6c\x61\172\x79\x2d\154\x6f\x61\144\x29\x2c\x20\x70\x69\143\164\x75\162\145\x3a\156\157\x74\x28\x2e\144\x6f\x6e\x74\x2d\x6c\141\x7a\x79\55\x6c\157\141\144\x29\x20\x3e\40\x73\x6f\x75\x72\x63\x65"); } public function iagoosqgoismuqwe($moooemyaqewumiay) : string { return $this->swgieuwskmoyukoq($moooemyaqewumiay, "\151\x66\162\141\x6d\145\x3a\x6e\x6f\x74\50\56\x64\157\156\164\55\x6c\x61\x7a\171\x2d\x6c\157\x61\x64\x29\54\40\166\x69\x64\x65\157\72\156\157\164\x28\x2e\144\157\x6e\164\x2d\154\141\x7a\171\x2d\154\x6f\x61\144\x29", Constants::ykigkkwgecsygowo); } public function mqqggimwoqogukwm($moooemyaqewumiay) { $yuumukkaswwoywya = "\x64\151\x76\x5b\x73\164\x79\x6c\x65\135\x2c\146\151\147\x75\162\145\133\163\x74\x79\x6c\x65\x5d\x2c\163\145\143\x74\151\157\156\x5b\x73\164\x79\154\145\135\x2c\x73\x70\x61\156\133\x73\x74\171\154\145\135\x2c\x6c\x69\x5b\x73\164\171\154\x65\x5d"; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kkmuuoscccmokkiw; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $samwssuokaguuqcs) { $kswaimykcacqyaay = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\164\171\154\145"); if (!(($eeamcawaiqocomwy = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->eqggmuyywiawyigi($kswaimykcacqyaay)) && !$this->ogomcyeyumwiqekm($eeamcawaiqocomwy, $samwssuokaguuqcs))) { goto oaqeoqsksuyyggmg; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\144\x61\x74\x61\55\x62\x67", $eeamcawaiqocomwy); $kswaimykcacqyaay = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($eeamcawaiqocomwy, "\x22{$this->kkkaiqweiaqiaycg($eeamcawaiqocomwy)}\x22", $kswaimykcacqyaay); $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\163\x74\171\154\x65", $kswaimykcacqyaay); $ymyisaeksssueeik = $this->akqamsokouooqqgw($ymyisaeksssueeik); oaqeoqsksuyyggmg: return $ymyisaeksssueeik; }); kkmuuoscccmokkiw: return $moooemyaqewumiay; } public function akqamsokouooqqgw(DOMElement $ymyisaeksssueeik) : DOMElement { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $egkyssmuqcwaciya = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x63\154\x61\163\x73"); $egkyssmuqcwaciya .= "\40\x6c\141\x7a\x79\154\157\141\144"; $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\143\x6c\141\x73\x73", rtrim($egkyssmuqcwaciya)); return $ymyisaeksssueeik; } public function meqmqgiwykuymcki() : array { $ogomymegcoacqisg = []; $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); if (!$this->weysguygiseoukqw(Setting::wsksomawosgqayso)) { goto mcqwuawosciucemq; } $cquauiyyegoequum = $goqqimcssiyagkwy->mmosakwauqogckem(Process::ikkumeueakggamkk); if (!$cquauiyyegoequum) { goto aqekkeqmmewoyawu; } foreach ($cquauiyyegoequum as $kiyaycgqkoueoscs) { $ogomymegcoacqisg[$kiyaycgqkoueoscs] = Constants::ymugckeogmscmacc; miugmimciywcgswm: } awuwuuuagqysukku: aqekkeqmmewoyawu: mcqwuawosciucemq: $yiiskoaqwycgymko = $goqqimcssiyagkwy->mmosakwauqogckem(Process::aseoemqucqqamsky); if (!($yiiskoaqwycgymko && isset($yiiskoaqwycgymko["\163\x72\143"]))) { goto emeeocqaisksyioq; } $ogomymegcoacqisg[$yiiskoaqwycgymko["\x73\x72\143"]] = Constants::sgiwkasmqqockceq; emeeocqaisksyioq: return $ogomymegcoacqisg; } public function swgieuwskmoyukoq($moooemyaqewumiay, $yuumukkaswwoywya, string $ccamueccusigaaio = Constants::mkousmkiawwousws) : string { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $yuumukkaswwoywya)) { goto kwocaqggwcksesce; } $samwssuokaguuqcs = $ycqyusukiuikceae = []; if (!($ccamueccusigaaio === Constants::mkousmkiawwousws)) { goto maggecymmmesqmqs; } $samwssuokaguuqcs = $this->ucoeomeeyokssocw($moooemyaqewumiay); $ycqyusukiuikceae = $this->meqmqgiwykuymcki(); maggecymmmesqmqs: $moooemyaqewumiay = $smuykqsageuocuos->qaqiuweqoukkgqsk($moooemyaqewumiay, $yuumukkaswwoywya, function (DOMElement $ymyisaeksssueeik) use($smuykqsageuocuos, $ycqyusukiuikceae, $samwssuokaguuqcs) { if (!$samwssuokaguuqcs) { goto qkiyyywwuiuackao; } $ogomymegcoacqisg = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x73\x72\x63"); if (!$this->aosmowmawkceeses($ogomymegcoacqisg, $samwssuokaguuqcs)) { goto ecgwgamiseokmise; } if (!isset($ycqyusukiuikceae[$ogomymegcoacqisg])) { goto csaksaisgawusswg; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, "\x66\145\x74\x63\x68\160\x72\x69\x6f\x72\151\164\x79", $ycqyusukiuikceae[$ogomymegcoacqisg]); csaksaisgawusswg: return $ymyisaeksssueeik; ecgwgamiseokmise: qkiyyywwuiuackao: foreach (self::uoogwumawwsywcaq as $msqkueqksqwmskak => $uwomkgseoiegeume) { if (!$smuykqsageuocuos->owgokkumqicyuyiy($ymyisaeksssueeik, $msqkueqksqwmskak)) { goto kuuawiosmkgqsscy; } $eqgoocgaqwqcimie = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, $msqkueqksqwmskak); if (!$eqgoocgaqwqcimie) { goto mcagemacuqyskogs; } $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $uwomkgseoiegeume, $eqgoocgaqwqcimie); mcagemacuqyskogs: if ($msqkueqksqwmskak === "\163\x72\x63") { goto easuiqiooiwgswmm; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto saiuoomgskwgyeya; easuiqiooiwgswmm: $wwgucssaecqekuek = $smuykqsageuocuos->wuuawmeqqyyyemsw($ymyisaeksssueeik); $aiooqyausygaasqm = $smuykqsageuocuos->guaqqcyuaeucmgoy($ymyisaeksssueeik, "\x64\x61\x74\141\x2d\151\x64"); $iwiewowoqmoekyqi = $this->kkkaiqweiaqiaycg($aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto aamgqoqyyooimqkm; } $smuykqsageuocuos->qeeokkmmskuyoecg($ymyisaeksssueeik, $msqkueqksqwmskak); goto cimascmiesomqgqs; aamgqoqyyooimqkm: $smuykqsageuocuos->cqieekgkogamcsqk($ymyisaeksssueeik, $msqkueqksqwmskak, $iwiewowoqmoekyqi); cimascmiesomqgqs: saiuoomgskwgyeya: kuuawiosmkgqsscy: ossakckwskyqusmm: } gyskcwykkyakeims: return $this->akqamsokouooqqgw($ymyisaeksssueeik); }, false); kwocaqggwcksesce: return $moooemyaqewumiay; } public function mgkeqqkmsqqiksyo($eqgoocgaqwqcimie, $wkgkmowokewiiaoo) : ?bool { if (!($eqgoocgaqwqcimie === false || !$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei())) { goto momuweiasiwskekw; } return $eqgoocgaqwqcimie; momuweiasiwskekw: switch ($wkgkmowokewiiaoo) { case "\x69\155\147": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::mkousmkiawwousws); goto qaewauyekqucciyc; case "\151\146\162\141\155\145": $eqgoocgaqwqcimie = !$this->yoqcwmkacmggcksg(Constants::ykigkkwgecsygowo); goto qaewauyekqucciyc; } bgakaasgwwygosyi: qaewauyekqucciyc: return $eqgoocgaqwqcimie; } public function yoqcwmkacmggcksg($kqywgoqsmuswammk) : bool { return in_array($this->weysguygiseoukqw(Setting::souisqooyuiygceo), [Constants::ALL, $kqywgoqsmuswammk], true); } public function kkkaiqweiaqiaycg($aiooqyausygaasqm, array $wwgucssaecqekuek = []) : string { $iwiewowoqmoekyqi = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\x65\x64\x69\141\x5f\x6c\x61\x7a\x79\x5f\x6c\x6f\x61\144\x5f\160\154\x61\143\x65\150\x6f\x6c\x64\145\x72", '', $aiooqyausygaasqm, $wwgucssaecqekuek); if ($iwiewowoqmoekyqi) { goto aucwccaiqwsmyuaq; } $qeswwaqqsyymqawg = absint($wwgucssaecqekuek[Constants::qomookamaskuoswk] ?? 0); $cswemwoyesycwkuq = absint($wwgucssaecqekuek[Constants::sogmkkcwuamuqegw] ?? 0); $iwiewowoqmoekyqi = (string) str_replace("\x20", "\45\x32\60", "\x64\x61\164\141\x3a\151\155\x61\147\145\x2f\163\166\147\x2b\170\155\x6c\54\x25\x33\x43\163\x76\147\40\x78\155\154\156\163\x3d\47\x68\x74\x74\160\72\x2f\57\167\167\x77\x2e\167\x33\56\157\162\x67\57\62\60\60\60\x2f\163\166\x67\x27\x20\166\151\145\167\x42\x6f\x78\x3d\47\60\x20\x30\x20{$qeswwaqqsyymqawg}\x20{$cswemwoyesycwkuq}\47\x25\x33\x45\x25\63\103\57\x73\x76\x67\45\x33\x45"); aucwccaiqwsmyuaq: return $iwiewowoqmoekyqi; } public function aciqoewcqaqqqumc($siquossayskcwkea) : bool { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->asouumsaymkgawie($siquossayskcwkea); return $this->ogomcyeyumwiqekm($siquossayskcwkea, $this->siciigyskwogeucw()); } public function aosmowmawkceeses(string $ogomymegcoacqisg, array $aowmesqseaiqimyu = []) : bool { return $this->ogomcyeyumwiqekm($ogomymegcoacqisg, $aowmesqseaiqimyu); } public function ucoeomeeyokssocw(string $moooemyaqewumiay) { $aowmesqseaiqimyu = ["\57\x77\160\x63\x66\67\137\x63\141\x70\x74\x63\x68\141\57", "\164\x69\x6d\164\150\x75\155\142\56\160\150\160\x3f\163\162\143", "\167\x6f\x6f\143\157\x6d\155\x65\x72\143\145\57\x61\x73\163\x65\164\x73\57\151\x6d\141\x67\x65\163\57\x70\x6c\141\x63\x65\150\157\154\144\x65\x72\x2e\160\156\147"]; $gyoeyakugsuggyoi = $this->meqmqgiwykuymcki(); if (!$gyoeyakugsuggyoi) { goto agyooskogigyayws; } $aowmesqseaiqimyu = array_merge($aowmesqseaiqimyu, array_keys($gyoeyakugsuggyoi)); agyooskogigyayws: return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x6d\145\x64\151\x61\137\x6c\x61\x7a\171\x6c\x6f\x61\144\x5f\145\x78\143\154\165\144\x65\x64\x5f\163\x72\143", $aowmesqseaiqimyu, $moooemyaqewumiay); } public function siciigyskwogeucw() : array { return $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\155\145\x64\x69\x61\137\x6c\141\x7a\171\x6c\x6f\x61\x64\137\x65\170\143\x6c\x75\x64\145\x64\137\141\x74\164\162\151\142\165\x74\x65\x73", ["\x64\x61\x74\141\x2d\163\x72\x63\x3d", "\x64\x61\x74\141\55\x6e\157\x2d\x6c\x61\x7a\171\75", "\144\141\x74\141\55\x6c\141\172\x79\55\157\162\151\x67\151\x6e\141\x6c\75", "\144\x61\164\x61\55\154\141\172\171\55\x73\162\x63\x3d", "\x64\141\164\x61\x2d\154\141\x7a\x79\163\162\x63\75", "\x64\x61\x74\141\x2d\154\141\x7a\171\154\157\141\144\x3d", "\x64\x61\164\141\55\x62\147\x70\157\163\151\x74\151\157\x6e\x3d", "\x64\141\164\x61\55\145\x6e\166\x69\162\x61\x2d\163\162\143\75", "\x66\x75\x6c\x6c\x75\x72\154\75", "\x6c\141\172\171\x2d\x73\154\x69\x64\x65\162\55\x69\x6d\147\75", "\144\x61\164\x61\55\x73\x72\x63\163\x65\164\x3d", "\x63\x6c\x61\163\x73\75\x22\154\x73\55\154", "\143\x6c\141\x73\x73\x3d\x22\x6c\x73\55\x62\147", "\163\157\154\151\x6c\157\161\165\171\x2d\x69\155\141\147\x65", "\154\157\x61\x64\x69\x6e\147\75\42\x65\x61\x67\x65\x72\42", "\163\167\x61\x74\143\150\55\151\x6d\x67", "\x64\x61\x74\x61\x2d\150\x65\x69\147\x68\164\55\160\x65\162\143\145\x6e\164\141\x67\145", "\144\x61\164\x61\x2d\x6c\x61\x72\x67\x65\137\x69\155\141\x67\145", "\141\166\151\141\x2d\x62\147\x2d\x73\164\171\154\x65\x2d\x66\x69\x78\x65\144", "\144\141\164\141\55\163\153\x69\160\55\x6c\141\x7a\171", "\x73\x6b\x69\160\55\154\x61\172\171", "\x69\155\141\147\145\x2d\143\157\155\x70\x61\162\x65\137\x5f"]); } public function ogomcyeyumwiqekm(string $sociqikgoyemqaac, array $aowmesqseaiqimyu) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ogomcyeyumwiqekm($sociqikgoyemqaac, $aowmesqseaiqimyu); } }
