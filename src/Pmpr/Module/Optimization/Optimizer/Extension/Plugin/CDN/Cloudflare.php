<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16935c302e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\CDN; use CF\WordPress\Hooks; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; class Cloudflare extends Container { private $hooks = null; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_notices', [$this, 'meygsywuikiokskg'])->qcsmikeggeemccuu('admin_notices', [$this, 'oikmieyooswkuqwo'])->qcsmikeggeemccuu('admin_notices', [$this, 'mykcguwmacquemks']); } public function meygsywuikiokskg() { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); if (!$uuwwyaeymswgsgsi->cmaecekuqkwmemms('CLOUDFLARE_PLUGIN_DIR') || !$uuwwyaeymswgsgsi->cmaecekuqkwmemms('CLOUDFLARE_HTTP2_SERVER_PUSH_ACTIVE')) { return; } if ($this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw() || !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(Constants::gewmeskawiqikkoc)) { return; } $uamcoiueqaamsqma = __('Cloudflare\'s HTTP/2 Server Push is incompatible with the features of Remove Unused CSS. We strongly recommend disabling it.', PR__MDL__OPTIMIZATION); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, $uamcoiueqaamsqma, 'cloudflare_server_push'); } public function oikmieyooswkuqwo() { } public function mykcguwmacquemks() { } private function aiomiwiwyeyqeoqs() : bool { if (!$this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai('cloudflare/cloudflare.php')) { return false; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (empty($qkqgcaykemoiecma->get('cloudflare_api_email')) || empty($qkqgcaykemoiecma->get('cloudflare_api_key')) || empty($qkqgcaykemoiecma->get('cloudflare_cached_domain_name'))) { return false; } return true; } private function egakasqqyawukwco() : Hooks { if (!$this->hooks) { $this->hooks = new Hooks(); } return $this->hooks; } public function wciuogmwscgcqkmc() { $this->egakasqqyawukwco()->purgeCacheEverything(); } public function kggeaycqkokcquqk($ooosquycguwewsao) { $this->egakasqqyawukwco()->purgeCacheByRelevantURLs($ooosquycguwewsao); } }
