<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Cloudflare extends Common { const kakkwkmmmaykeoeq = Optimization::kgswyesggeyekgmg . 'cloudflare'; const suyoqewagugqoeuy = self::kakkwkmmmaykeoeq . Constants::wassgkgmoyygyaya; const cuocomkikquemaqq = self::suyoqewagugqoeuy . 'cache_metadata'; public function ikcgmcycisiccyuc() { $this->guyooeyuaoocssog(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'wamqmcywecyquske'])->qcsmikeggeemccuu('admin_init', [$this, 'osiqmmmksqqmscmc']); $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue']); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'dev_mode_changed', [$this, 'kegscecmagiegose'])->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'before_start_preload_urls', [$this, 'cycumuyqauaekoyq']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'preload_request_args', [$this, 'yiaacewmkwcwaowk'])->aqaqisyssqeomwom(self::suyoqewagugqoeuy . Constants::yyicwqsqaecyqwco, [$this, 'yusooeuwemoqcwmm'], 10, 0); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Controller::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function enqueue() { $this->caokeucsksukesyo()->usugyumcgeaaowsi()->wwmusmkkcwsiciou($this, 'cloudflare', [Constants::wyucqaeuuqkesque => Ajax::ccyqqagwskwauoem]); } public function kegscecmagiegose($wquasmyyscuqaqom) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (in_array($wquasmyyscuqaqom, [Constants::ON, Constants::OFF], true) && $goqqimcssiyagkwy->omimwscgequgiaue()) { $yeacayasgueouoqc = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if (!is_wp_error($yeacayasgueouoqc)) { if ($yeacayasgueouoqc) { if ($yeacayasgueouoqc !== $wquasmyyscuqaqom) { $csgemygcekwywekw = $this->uykissogmuaaocsg()->emukusgiakigsoms($wquasmyyscuqaqom); if (!is_wp_error($csgemygcekwywekw)) { Setting::symcgieuakksimmu()->awwuyycwuuuggkqy($wquasmyyscuqaqom); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug('CF: Dev Mode changed successfully.'); } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("CF: Something wrong on changing dev mode, {$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($csgemygcekwywekw)}"); } } else { Setting::symcgieuakksimmu()->awwuyycwuuuggkqy($wquasmyyscuqaqom); } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("CF: can not fetch current dev mode, {$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($yeacayasgueouoqc)}"); } } } public function yiaacewmkwcwaowk($ywmkwiwkosakssii) { if ($aecgggeoymywyumm = $this->weysguygiseoukqw(Setting::emausmuaoecugeeg)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($aecgggeoymywyumm, 'Name'); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($aecgggeoymywyumm, 'Value'); if ($ymqmyyeuycgmigyo && $eqgoocgaqwqcimie) { $ywmkwiwkosakssii[Constants::gmosckicggqkicim]['Cookie'] = "{$ymqmyyeuycgmigyo}={$eqgoocgaqwqcimie}"; } } return $ywmkwiwkosakssii; } public function cycumuyqauaekoyq() { if ($aecgggeoymywyumm = $this->uykissogmuaaocsg()->mgmmiqgyemaeicim()->yuyomsisoyaokqgu()) { $this->uykissogmuaaocsg()->ewqscwwmugoqwomg(Setting::emausmuaoecugeeg, $aecgggeoymywyumm); } } public function osiqmmmksqqmscmc() { if ($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wewwcsywcagywaay = $goqqimcssiyagkwy->omimwscgequgiaue(false); if ($wewwcsywcagywaay && !is_wp_error($wewwcsywcagywaay)) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!$this->weysguygiseoukqw(Setting::iqksqseqeqmaukkk)) { $eggwswqquakgowom = $goqqimcssiyagkwy->iqokecwcgkaookuc(); if (is_wp_error($eggwswqquakgowom)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('Can not get cloudflare zones list: %s', PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($eggwswqquakgowom)), self::suyoqewagugqoeuy . 'get_zone_list', Constants::imkacwmiuiykyuim); } else { if (is_array($eggwswqquakgowom)) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iyamemcoiwsucioi, $eggwswqquakgowom); $this->caokeucsksukesyo()->mskuyeumceaigegs()->info('Cloudflare zone ids fetched successfully.', $eggwswqquakgowom); if ($kkuqeemoawuaqiwu = $ykquycoiqesuckco->uiwouioqckimcqsq($eggwswqquakgowom)) { $qmykgskisgoyymoc = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (is_wp_error($qmykgskisgoyymoc)) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iqksqseqeqmaukkk, $kkuqeemoawuaqiwu); } } } } } if (!$ykquycoiqesuckco->yoaiuuuwwssswyqa()) { $wquasmyyscuqaqom = $goqqimcssiyagkwy->ymkgoumkoycwwmmq(); if ($wquasmyyscuqaqom && !is_wp_error($wquasmyyscuqaqom)) { $ykquycoiqesuckco->awwuyycwuuuggkqy($wquasmyyscuqaqom); } else { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wquasmyyscuqaqom); if (is_wp_error($wquasmyyscuqaqom)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('Can not get cloudflare development mode: %s', PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($iswcokucwmiosiaq)), self::suyoqewagugqoeuy . 'get_dev_mode', Constants::imkacwmiuiykyuim); } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("Can not get development mode data. {$iswcokucwmiosiaq}"); } } if (!$this->yusooeuwemoqcwmm() || !$goqqimcssiyagkwy->ammwuioucccacgwc()) { $qmykgskisgoyymoc = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (is_wp_error($qmykgskisgoyymoc)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($qmykgskisgoyymoc), self::suyoqewagugqoeuy . 'enable_page_cache', Constants::imkacwmiuiykyuim); } } } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('Please complete cloudflare tab information: %s', PR__MDL__OPTIMIZATION), $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wewwcsywcagywaay)), self::suyoqewagugqoeuy . 'configuration'); } } } public function wamqmcywecyquske() { $seiwgiesegcmssam = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); if ($seiwgiesegcmssam) { $wcyykoegqiuckcku = $meakksicouekcgoe->owygwqwawqoiusis($this, 'buster')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'buster.js'))->yiuoscqaekcgiyuy('data-cfasync', 1); $meakksicouekcgoe->yawoscugkyysowie($wcyykoegqiuckcku)->qeqgammgesiwiysc($wcyykoegqiuckcku); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $meakksicouekcgoe->wwmusmkkcwsiciou($this, 'cloudflare', ['ajax' => Constants::myikkigscysoykgy, 'selector' => implode(', ', ['#editor .editor-post-permalink__link', '#wp-admin-bar-my-sites-list a', '#editor .editor-post-preview', '#wp-admin-bar-site-name a', '#wp-admin-bar-view-site a', '#sample-permalink a', '#wp-admin-bar-view a', '#editor .is-link', '.row-actions a', '#message a', '.preview']), 'buster' => self::kakkwkmmmaykeoeq, 'purge_post_cache' => ['title' => __('Purge Post Cache', PR__MDL__OPTIMIZATION)]]); } else { $meakksicouekcgoe->qkqeooqcomucuwyk($this, 'cloudflare', ['buster' => self::kakkwkmmmaykeoeq, 'selector' => 'a']); } } public function goewgasukwccacim() { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy(untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ieokeoyugcmwuumq())); preg_match('#[^.]*\\.[^.]{2,3}(?:\\.[^.]{2,3})?$#', $eeamcawaiqocomwy, $meyiiwcswqmuggyg); return $meyiiwcswqmuggyg[0] ?? ''; } public function guyooeyuaoocssog() { if ($this->wsaocqmcggmqiskw() && !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim()) { $_SERVER['HTTPS'] = Constants::ON; } } private function wsaocqmcggmqiskw() : bool { $aaqqeciegmgusoye = false; $mqkcyikamyyaqicq = ['HTTP_CF_VISITOR', 'HTTP_X_FORWARDED_PROTO']; foreach ($mqkcyikamyyaqicq as $kwsemgmaugsiusqg) { if (isset($_SERVER[$kwsemgmaugsiusqg]) && is_string($_SERVER[$kwsemgmaugsiusqg]) && str_contains($_SERVER[$kwsemgmaugsiusqg], 'https')) { $aaqqeciegmgusoye = true; break; } } return $aaqqeciegmgusoye; } }
