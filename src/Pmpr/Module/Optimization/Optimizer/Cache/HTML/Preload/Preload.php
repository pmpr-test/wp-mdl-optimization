<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting as HTMLCacheSetting; class Preload extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu(Process::kegeqyusqiqwoogi, [$this, 'qksiewgokusgiymc']); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'preload_urls', [$this, 'wayeeyksqmmsiaqk'])->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'cache_html_all_purged', [$this, 'kskkiwcaysuwwswg'])->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . 'cache_html_urls_purged', [$this, 'qqeqoascycueoiiu']); } public function kskkiwcaysuwwswg() { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'get_all_available_pages', [], Constants::auqoykcmsiauccao); $this->qqeqoascycueoiiu($auwuoyyagaiegwae); } public function qqeqoascycueoiiu($auwuoyyagaiegwae) { if ($auwuoyyagaiegwae && is_array($auwuoyyagaiegwae)) { $this->wayeeyksqmmsiaqk($auwuoyyagaiegwae); } } public function wayeeyksqmmsiaqk(array $auwuoyyagaiegwae) { $ogiyyuwciysokiuc = $this->weysguygiseoukqw(Setting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); if (Constants::uucoeqmmykkwsmqc !== $ogiyyuwciysokiuc) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'before_start_preload_urls', $auwuoyyagaiegwae); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { if (is_string($eeamcawaiqocomwy)) { Process::symcgieuakksimmu()->kaoqwwwaoiuigckc($eeamcawaiqocomwy); } } } } public function qksiewgokusgiymc(string $eeamcawaiqocomwy) { if (!$this->ysuiqkgycmagqqyu($eeamcawaiqocomwy)) { if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(HTMLCacheSetting::egcsacmywomuowsc)) { $okycmmskgswewacc[] = [Constants::auqoykcmsiauccao => $eeamcawaiqocomwy, Constants::okeuagwgwkmiokac => [Constants::osmyiwigoaisauug => $this->qoukkqqsoisiimuu()], Constants::kkuekowmgwuussue => true]; } $okycmmskgswewacc[] = [Constants::auqoykcmsiauccao => $eeamcawaiqocomwy, Constants::okeuagwgwkmiokac => [Constants::osmyiwigoaisauug => 'PMPR Optimization/Preload'], Constants::kkuekowmgwuussue => false]; $okycmmskgswewacc = (array) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'preload_before_preload_url', $okycmmskgswewacc, $eeamcawaiqocomwy); if ($okycmmskgswewacc = array_filter($okycmmskgswewacc)) { foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $eeamcawaiqocomwy = $aqmwamyiwgeeymqa[Constants::auqoykcmsiauccao] ?? ''; if ($eeamcawaiqocomwy && is_string($eeamcawaiqocomwy)) { $ywmkwiwkosakssii = (array) ($aqmwamyiwgeeymqa[Constants::okeuagwgwkmiokac] ?? []); $ywmkwiwkosakssii = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'preload_request_args', $ywmkwiwkosakssii, $eeamcawaiqocomwy); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ukemmqiequgsesak($eeamcawaiqocomwy, $ywmkwiwkosakssii); $gwmuismyoeikeqim = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'preload_delay_between_requests', 500000); usleep($gwmuismyoeikeqim); } } } } } public function qoukkqqsoisiimuu() : string { $yuwymayicwwqiske = 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1'; $acmauumqisawsmqu = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'preload_mobile_user_agent_prefix', $yuwymayicwwqiske); if ($acmauumqisawsmqu && is_string($acmauumqisawsmqu)) { $yuwymayicwwqiske = $acmauumqisawsmqu; } return "PMPR Optimization/Preload {$yuwymayicwwqiske}"; } }
