<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15e8e06c9b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\162\147\145\x5f\143\x61\x63\150\x65"; const wwkyymgusywcykuk = "\160\x72\145\154\x6f\x61\144\137\x70\141\x67\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x6f\x70\x74\x5f\x64\x61\163\150\x62\157\x61\162\x64", Constants::ysgwugcqguggmigq => __("\104\x61\163\150\x62\157\141\162\x64", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x61\x73\150\142\157\141\x72\x64", $gaumukogkkgkiiuo->get("\x64\141\x73\150\x62\x6f\x61\162\x64\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\141\163\150\x62\x6f\141\162\x64", ["\x61\x6a\141\170" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\165\162\x67\x65\40\x43\141\x63\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\x44\151\163\141\142\154\x65\40\104\x65\166\x65\x6c\157\160\x6d\x65\x6e\164\x20\115\157\x64\145", PR__MDL__OPTIMIZATION) : __("\105\156\x61\x62\154\x65\40\x44\145\x76\x65\154\x6f\160\155\x65\156\x74\x20\x4d\x6f\144\x65", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\x6e\143\137\x64\141\x74\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\171\157\x75\x20\x73\165\x72\x65\40\x61\x62\157\x75\164\40\160\165\x72\147\x65\x20\x63\141\143\150\145\77", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\162\x65\x6c\x6f\x61\144\40\x69\x73\40\145\x6e\x61\x62\x6c\145\40\x61\156\x64\x20\x61\146\164\x65\x72\40\x70\x75\x72\147\x65\x20\143\x61\143\150\x65\54\40\x72\145\x67\x65\x6e\145\162\x61\x74\145\x20\143\141\x63\x68\145\40\146\151\154\x65\x20\x73\164\141\x72\x74\x65\x64\40\x61\165\x74\157\x6d\x61\164\x69\143\x61\154\154\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\x61\x73\x73" => "\x6f\160\164\x2d\160\x75\x72\147\x65\55\x61\x6c\x6c\x2d\143\141\x63\x68\145\x20\160\162\55\142\164\156\x20\142\x74\156\55\144\x61\156\147\x65\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\x63\x6c\x61\x73\x73" => "\167\55\x31\x30\60\40\160\162\55\x62\x74\x6e\40\x62\x74\156\55\x61\143\x74\151\157\x6e\40\x62\x74\156\55\157\x75\164\x6c\151\156\145\55\x70\x72\151\x6d\141\162\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\151\163\x61\x62\154\x69\x6e\x67\x20\x44\145\166\x65\154\157\x70\155\145\x6e\x74\x20\x4d\157\144\145\x20\x74\165\x72\156\x73\x20\x6f\156\x20\143\141\x63\x68\x69\156\x67\40\146\157\162\40\171\x6f\165\162\x20\163\x69\x74\145\56\40\101\x72\145\x20\171\x6f\x75\x20\x73\x75\x72\145\40\x79\x6f\x75\x20\x77\141\x6e\x74\40\x74\x6f\40\143\x6f\156\x74\151\156\x75\145\77", PR__MDL__OPTIMIZATION) : __("\105\x6e\x61\x62\x6c\x69\x6e\x67\40\104\145\x76\x65\x6c\x6f\160\x6d\145\x6e\x74\x20\x4d\x6f\x64\x65\x20\164\x75\x72\156\163\40\x6f\146\146\40\143\141\x63\150\x69\x6e\147\x20\x66\157\162\x20\171\157\x75\x72\40\163\151\164\x65\x2e\40\101\162\x65\x20\171\157\x75\40\x73\x75\x72\145\40\171\x6f\x75\40\167\141\x6e\164\40\164\157\40\143\x6f\156\x74\x69\156\165\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\x61\x73\163" => "\x6f\160\x74\x2d\143\x68\x61\156\147\145\x2d\x64\145\x76\55\x6d\x6f\144\x65\x20\x70\x72\x2d\x62\164\156\40\x62\x74\x6e\x2d" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\x61\x74\x61\x2d\x64\x65\166\55\x6d\157\x64\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\145\166\x65\154\157\x70\x6d\x65\x6e\x74\x20\115\157\x64\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\141\x73\x73" => "\x77\55\61\x30\60\x20\x70\162\55\x62\x74\156\x20\x62\164\x6e\x2d\x61\143\164\x69\x6f\x6e\x20\142\x74\156\x2d\157\x75\x74\154\151\x6e\145\x2d\160\x72\151\x6d\141\x72\171"])]; if (!$qyaaumygmwoyoeec) { goto amyaoueckysgmmas; } amyaoueckysgmmas: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\141\163\x68\x62\157\x61\162\x64\x5f\x72\145\160\157\162\x74\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\162\143\x68\141\163\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\x30\x20\x70\x74\x2d\x32")->gswweykyogmsyawy(__("\120\x75\162\x63\150\x61\x73\x65\40\x52\x65\160\157\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x79\x61\157\163\x67\x63\x73\157\151\167\155\171\x65\157\163\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\x73\x61\x67\x65\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\60\x20\x70\x74\x2d\62")->gswweykyogmsyawy(__("\125\163\x61\147\145\x20\122\x65\160\x6f\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x64\x6b\143\x61\x75\x6d\155\x73\x63\x6b\165\x6b\157\x67\x63\155"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\x70\x61\156\145\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\x61\x73\137\167\162\x61\160" => false, "\x76\145\162\164\x69\x63\x61\154" => false]), Constants::qescuiwgsyuikume => __("\120\165\x72\143\150\x61\x73\145\40\141\x6e\x64\x20\103\x6f\156\163\x75\155\x70\164\151\157\x6e\40\x52\x65\x70\157\x72\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\161\x75\x69\x63\153\137\141\x63\164\x69\157\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\165\x69\x63\153\137\x61\143\x74\x69\x6f\156\137\x74\x69\164\x6c\x65"] = __("\x51\165\x69\x63\153\x20\101\143\x74\151\x6f\156\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
