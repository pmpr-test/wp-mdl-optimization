<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356236bf3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\x72\x67\x65\x5f\143\x61\143\x68\145"; const wwkyymgusywcykuk = "\160\x72\145\x6c\157\141\144\x5f\x70\x61\x67\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\160\162\137\x6f\x70\x74\x5f\x64\141\163\150\142\x6f\x61\162\x64", Constants::ysgwugcqguggmigq => __("\104\141\x73\x68\x62\x6f\x61\x72\x64", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)]); } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x64\141\x73\150\x62\x6f\141\x72\144", "\144\x61\x73\x68\x62\x6f\141\x72\x64\56\x6a\x73")->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->wwmusmkkcwsiciou($this, "\x64\141\x73\150\142\157\141\x72\x64", [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\165\162\x67\145\40\103\x61\x63\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\x44\151\x73\141\142\x6c\145\40\x44\145\x76\145\154\x6f\x70\x6d\145\x6e\164\x20\x4d\x6f\x64\x65", PR__MDL__OPTIMIZATION) : __("\x45\x6e\x61\142\x6c\x65\x20\x44\x65\166\x65\x6c\x6f\160\155\x65\x6e\x74\40\115\157\144\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\x79\x6e\143\x5f\144\141\164\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\162\145\40\x79\x6f\x75\40\163\x75\162\x65\40\141\x62\157\165\164\x20\160\x75\x72\x67\x65\x20\x63\x61\x63\150\145\77", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\120\162\x65\154\x6f\141\144\x20\x69\x73\x20\x65\156\141\x62\x6c\x65\40\x61\156\144\40\x61\146\164\x65\x72\x20\x70\165\162\x67\x65\40\x63\x61\143\150\145\54\x20\x72\145\x67\x65\156\145\162\x61\x74\145\40\x63\x61\x63\x68\145\40\146\151\154\145\40\x73\x74\x61\x72\164\x65\x64\x20\x61\165\x74\x6f\155\141\164\151\143\x61\154\154\171\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\x73\x73" => "\160\162\55\x6f\160\164\55\x70\165\x72\x67\145\x2d\141\x6c\154\x2d\x63\x61\x63\x68\145\x20\160\162\x2d\x62\164\156\40\142\164\156\x2d\x64\x61\x6e\x67\145\x72", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\x61\x73\163" => "\167\55\61\60\60\40\160\x72\x2d\x62\x74\x6e\40\142\x74\156\x2d\x61\143\x74\151\157\x6e\x20\142\x74\x6e\55\157\165\164\154\x69\156\x65\55\160\162\151\155\x61\x72\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\x69\x73\x61\x62\x6c\x69\156\147\x20\104\x65\x76\x65\x6c\157\x70\155\145\x6e\164\40\115\157\x64\x65\x20\164\x75\162\x6e\x73\x20\x6f\x6e\40\143\x61\143\150\x69\x6e\x67\40\146\x6f\162\x20\x79\157\x75\162\40\x73\x69\164\145\56\40\101\x72\145\x20\171\x6f\165\40\163\x75\162\x65\40\171\x6f\165\40\167\141\x6e\x74\40\x74\157\40\x63\x6f\156\x74\x69\x6e\165\x65\77", PR__MDL__OPTIMIZATION) : __("\x45\x6e\x61\x62\x6c\151\x6e\147\40\104\x65\166\x65\154\x6f\160\x6d\x65\x6e\164\40\x4d\157\x64\x65\40\164\165\x72\x6e\163\x20\157\146\x66\x20\x63\x61\143\x68\x69\156\147\x20\x66\x6f\x72\40\x79\157\165\162\40\x73\151\164\145\56\40\101\162\x65\40\171\157\x75\40\x73\165\162\145\x20\171\157\x75\40\x77\x61\156\x74\x20\x74\x6f\40\x63\157\156\x74\x69\x6e\165\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\x73\x73" => "\x70\162\55\x6f\160\x74\x2d\143\150\141\x6e\x67\145\x2d\x64\x65\x76\x2d\155\157\x64\145\40\x70\x72\55\142\164\156\40\142\x74\x6e\55" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\141\x74\141\x2d\144\x65\x76\x2d\155\157\144\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\145\166\145\x6c\x6f\160\155\145\x6e\164\40\x4d\x6f\x64\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\163\163" => "\167\55\x31\60\x30\40\160\x72\55\142\x74\x6e\40\x62\x74\156\x2d\x61\143\x74\x69\157\x6e\x20\142\x74\x6e\55\157\165\164\154\x69\x6e\x65\x2d\x70\162\x69\x6d\x61\162\171"])]; if ($qyaaumygmwoyoeec) { } $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\141\x73\150\142\x6f\x61\162\x64\137\x72\145\160\157\x72\164\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x70\x75\x72\143\150\141\163\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\40\x70\164\x2d\62")->gswweykyogmsyawy(__("\x50\165\162\x63\150\141\x73\145\x20\x52\145\160\157\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\x6f\x73\147\143\163\157\151\167\x6d\171\145\x6f\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\163\x61\147\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\x30\40\160\164\x2d\62")->gswweykyogmsyawy(__("\x55\x73\141\x67\x65\x20\122\x65\160\157\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\x6b\143\x61\165\155\155\163\x63\x6b\x75\153\x6f\147\143\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\x61\x6e\x65\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\141\163\x5f\x77\162\x61\x70" => false, "\x76\x65\162\164\x69\x63\x61\154" => false]), Constants::qescuiwgsyuikume => __("\120\x75\162\x63\150\141\x73\145\x20\141\x6e\144\40\x43\x6f\x6e\x73\165\155\x70\x74\151\x6f\x6e\40\122\x65\160\157\x72\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\165\x69\x63\x6b\x5f\141\143\x74\x69\x6f\156\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\151\x63\x6b\x5f\x61\x63\x74\151\x6f\156\137\164\x69\164\x6c\x65"] = __("\121\165\x69\143\x6b\40\x41\x63\164\x69\157\x6e\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
