<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb242fc74db             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\165\x72\x67\x65\137\143\x61\143\x68\x65"; const wwkyymgusywcykuk = "\x70\x72\x65\x6c\157\141\x64\137\x70\x61\147\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x6f\160\x74\137\144\141\x73\x68\x62\x6f\141\x72\144", Constants::ysgwugcqguggmigq => __("\x44\x61\163\x68\x62\157\x61\162\x64", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x61\x73\x68\x62\x6f\x61\x72\144", $gaumukogkkgkiiuo->get("\x64\x61\x73\150\x62\157\x61\162\x64\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\x61\x73\150\x62\x6f\141\x72\144", ["\141\x6a\x61\170" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\165\x72\147\x65\x20\103\141\143\150\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\x73\x61\x62\x6c\x65\40\x44\x65\166\145\x6c\x6f\160\155\x65\x6e\x74\x20\115\x6f\144\x65", PR__MDL__OPTIMIZATION) : __("\x45\156\x61\x62\154\x65\40\104\145\x76\145\154\x6f\x70\x6d\x65\x6e\164\x20\115\x6f\x64\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\163\171\156\143\x5f\x64\141\x74\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\101\x72\x65\x20\x79\x6f\x75\x20\x73\x75\162\x65\40\x61\x62\x6f\x75\x74\40\160\x75\x72\147\145\x20\x63\x61\143\x68\x65\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\162\145\x6c\157\141\x64\40\151\163\x20\x65\x6e\x61\142\x6c\145\40\x61\x6e\x64\x20\x61\x66\164\x65\x72\40\x70\165\162\147\145\40\143\141\143\x68\145\54\x20\x72\145\x67\145\x6e\x65\162\141\x74\145\40\x63\141\143\x68\x65\40\x66\151\154\x65\40\163\164\141\162\164\x65\144\40\x61\x75\x74\x6f\155\x61\164\151\x63\141\154\x6c\171\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\141\x73\x73" => "\x6f\160\164\55\x70\165\x72\x67\x65\55\141\x6c\154\55\143\x61\143\x68\x65\x20\160\x72\55\142\x74\156\40\x62\x74\156\x2d\144\141\156\x67\145\x72", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\x6c\x61\x73\163" => "\x77\55\61\60\60\40\160\x72\x2d\142\x74\x6e\40\142\x74\x6e\55\141\x63\x74\x69\157\x6e\x20\142\164\156\55\157\165\x74\x6c\151\x6e\x65\55\160\162\x69\155\141\162\x79"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\151\x73\x61\142\154\151\156\x67\40\104\145\166\145\154\x6f\160\x6d\145\156\164\x20\115\x6f\144\x65\x20\164\x75\x72\156\163\40\157\156\40\x63\141\143\x68\x69\x6e\147\40\x66\x6f\162\40\x79\x6f\165\162\x20\x73\151\x74\x65\56\40\101\x72\x65\x20\x79\x6f\165\40\163\x75\162\145\x20\x79\157\165\x20\167\141\x6e\164\x20\x74\157\x20\x63\x6f\x6e\x74\x69\156\165\x65\77", PR__MDL__OPTIMIZATION) : __("\x45\156\x61\142\154\x69\x6e\x67\x20\x44\x65\166\x65\x6c\157\160\155\x65\x6e\x74\x20\115\157\144\145\40\x74\165\x72\x6e\163\x20\157\x66\146\40\143\141\143\150\x69\x6e\147\x20\x66\x6f\162\40\171\x6f\x75\x72\x20\x73\x69\x74\145\56\40\101\162\x65\x20\x79\157\165\40\x73\165\x72\x65\40\171\x6f\165\40\167\141\156\x74\40\x74\x6f\x20\x63\157\x6e\x74\x69\x6e\x75\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\141\163\x73" => "\x6f\160\x74\55\143\x68\x61\x6e\x67\145\x2d\144\145\166\x2d\155\157\x64\x65\40\x70\x72\55\x62\164\x6e\40\142\164\x6e\55" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\141\164\x61\55\x64\145\x76\55\155\157\x64\145" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\145\x76\145\154\157\x70\x6d\145\x6e\164\40\115\x6f\x64\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\141\x73\163" => "\x77\55\x31\x30\60\40\160\162\x2d\142\164\x6e\40\x62\164\156\x2d\141\143\x74\x69\157\156\x20\142\164\156\55\x6f\165\x74\x6c\x69\x6e\x65\x2d\160\x72\x69\x6d\141\162\x79"])]; if (!$qyaaumygmwoyoeec) { goto uwyeycaywowwiquu; } uwyeycaywowwiquu: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\x61\163\150\142\157\141\x72\144\137\x72\145\x70\157\162\x74\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\x75\162\x63\x68\x61\x73\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\x30\40\x70\164\55\62")->gswweykyogmsyawy(__("\120\x75\x72\x63\150\141\x73\145\x20\x52\x65\x70\x6f\162\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\171\141\157\163\147\143\163\157\x69\167\x6d\x79\145\x6f\x73\161"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\163\141\x67\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\x20\160\164\x2d\62")->gswweykyogmsyawy(__("\125\163\141\x67\x65\40\x52\145\160\x6f\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\153\143\x61\165\155\155\163\x63\153\165\153\157\147\143\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\x61\156\x65\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\141\163\x5f\x77\162\141\160" => false, "\x76\145\x72\x74\x69\x63\141\154" => false]), Constants::qescuiwgsyuikume => __("\120\x75\x72\x63\150\x61\x73\145\x20\x61\156\144\40\103\157\x6e\x73\165\x6d\160\164\151\x6f\156\x20\x52\x65\x70\157\162\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\x75\x69\x63\x6b\x5f\141\143\164\x69\157\156\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\165\x69\x63\x6b\137\141\x63\x74\151\157\156\x5f\164\151\164\154\x65"] = __("\x51\x75\x69\143\x6b\x20\x41\143\164\151\x6f\x6e\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
