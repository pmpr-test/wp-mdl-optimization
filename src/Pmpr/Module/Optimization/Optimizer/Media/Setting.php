<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Media; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Setting\SettingSegment; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; use Pmpr\Module\Optimization\Optimizer\Media\ImageDimension\Setting as ImageDimensionSetting; class Setting extends SettingSegment { const aqywkwyscogcecei = 'media_'; const meciimymegqueigk = self::aqywkwyscogcecei . 'lazy_load_'; const uwgswmisuuigoucw = self::meciimymegqueigk . 'images'; const gowiqmkskqiqsgsc = self::meciimymegqueigk . 'iframe_and_videos'; public function mameiwsayuyquoeq() { LazyLoadSetting::symcgieuakksimmu(); ImageDimensionSetting::symcgieuakksimmu(); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('media')->jyumyyugiwwiqomk(20)->gswweykyogmsyawy(__('Media', PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::eeycgeueeukoscmu)->gucwmccyimoagwcm(__('Optimize image, vide and ...', PR__MDL__OPTIMIZATION))); } }
