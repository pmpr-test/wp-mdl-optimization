<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd9008d45             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\162\x67\145\137\x63\141\x63\x68\145"; const wwkyymgusywcykuk = "\x70\x72\x65\154\x6f\141\x64\x5f\160\141\147\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\160\x72\x5f\157\160\164\x5f\144\x61\163\150\142\x6f\141\x72\x64", Constants::ysgwugcqguggmigq => __("\104\141\x73\150\142\157\141\x72\144", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)]); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\144\141\163\x68\142\157\141\x72\144", "\144\x61\163\150\142\157\141\x72\144\x2e\x6a\163")->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->wwmusmkkcwsiciou($this, "\x64\141\163\x68\142\157\141\162\144", [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\x75\162\x67\x65\40\103\x61\x63\x68\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\x44\x69\x73\141\142\154\x65\x20\x44\x65\x76\x65\154\157\160\155\145\x6e\164\40\x4d\157\x64\145", PR__MDL__OPTIMIZATION) : __("\105\156\x61\142\x6c\145\40\104\145\x76\x65\x6c\157\160\x6d\x65\x6e\164\40\x4d\x6f\144\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\x6e\143\x5f\144\x61\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\162\x65\40\171\x6f\x75\x20\163\x75\x72\145\40\x61\142\157\x75\x74\x20\x70\165\162\147\145\40\x63\141\x63\x68\x65\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\x72\x65\154\x6f\x61\x64\40\151\163\40\145\x6e\x61\142\154\145\x20\141\x6e\144\x20\141\x66\x74\145\x72\x20\160\165\162\147\145\40\x63\x61\143\x68\x65\54\40\162\145\147\x65\x6e\x65\162\141\164\145\40\x63\141\x63\150\x65\x20\x66\x69\x6c\x65\40\x73\164\141\162\x74\x65\144\x20\x61\x75\164\157\x6d\141\x74\151\143\141\x6c\x6c\171\56", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\x61\x73\163" => "\x70\162\55\x6f\x70\164\x2d\160\165\x72\x67\145\55\x61\154\154\55\x63\141\143\x68\x65\40\160\162\55\x62\x74\156\x20\x62\164\156\x2d\144\x61\x6e\x67\145\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\x61\x73\163" => "\167\55\61\60\x30\40\x70\162\55\142\164\x6e\x20\142\164\x6e\x2d\141\143\x74\151\157\156\x20\x62\164\x6e\55\157\165\x74\x6c\x69\x6e\x65\x2d\x70\x72\x69\x6d\141\x72\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\x69\x73\x61\142\x6c\151\156\x67\40\104\145\166\145\x6c\x6f\x70\x6d\x65\156\x74\x20\x4d\x6f\144\x65\x20\164\x75\x72\x6e\x73\x20\x6f\156\40\143\141\143\150\x69\156\147\40\146\157\162\x20\171\157\165\x72\40\163\151\164\x65\56\40\101\162\x65\x20\171\x6f\x75\x20\163\165\x72\x65\40\x79\x6f\x75\x20\167\x61\156\164\x20\x74\x6f\40\x63\x6f\156\x74\151\156\x75\145\77", PR__MDL__OPTIMIZATION) : __("\105\156\x61\142\x6c\151\x6e\147\40\104\145\166\145\x6c\157\160\x6d\x65\x6e\164\40\x4d\157\x64\x65\40\x74\165\162\156\x73\40\157\146\x66\x20\143\x61\x63\x68\151\156\147\x20\146\157\162\x20\x79\x6f\165\162\40\x73\x69\164\145\56\40\x41\x72\145\x20\x79\x6f\165\x20\163\x75\162\x65\40\x79\157\165\40\x77\141\156\x74\x20\x74\x6f\x20\x63\x6f\156\164\151\156\x75\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\163\x73" => "\160\162\55\157\160\164\55\143\150\141\x6e\147\145\x2d\144\145\x76\55\x6d\157\144\145\x20\x70\162\x2d\142\x74\x6e\40\x62\164\x6e\55" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\141\x74\141\x2d\x64\x65\x76\x2d\155\157\x64\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\x44\145\x76\x65\x6c\157\x70\155\x65\x6e\164\40\x4d\157\x64\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\x73\163" => "\x77\x2d\x31\60\x30\x20\x70\x72\55\142\x74\156\40\x62\x74\156\55\141\x63\x74\151\157\x6e\x20\142\x74\156\x2d\x6f\165\164\x6c\151\156\145\x2d\x70\x72\x69\x6d\141\x72\x79"])]; if ($qyaaumygmwoyoeec) { } $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\163\x68\x62\x6f\141\x72\144\137\162\145\x70\157\162\164\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x70\x75\162\x63\150\141\163\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\40\x70\164\x2d\62")->gswweykyogmsyawy(__("\120\165\162\143\x68\x61\163\x65\40\122\x65\x70\x6f\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x79\x61\157\163\x67\143\163\x6f\x69\x77\155\x79\145\x6f\163\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\163\141\147\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\x30\40\160\x74\55\x32")->gswweykyogmsyawy(__("\125\163\141\x67\145\40\x52\145\160\x6f\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\x6b\143\x61\165\155\x6d\163\x63\x6b\x75\x6b\x6f\147\x63\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\x61\x6e\x65\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\x61\x73\137\167\x72\x61\160" => false, "\166\145\x72\x74\x69\143\x61\x6c" => false]), Constants::qescuiwgsyuikume => __("\x50\x75\x72\143\150\x61\x73\x65\x20\x61\156\x64\40\103\157\156\163\x75\x6d\160\x74\x69\157\x6e\40\122\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\x75\151\143\153\x5f\141\143\164\x69\157\156\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\165\x69\143\153\137\x61\x63\164\x69\157\x6e\137\x74\151\164\154\x65"] = __("\121\165\151\143\x6b\40\101\143\x74\151\x6f\x6e\163", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
