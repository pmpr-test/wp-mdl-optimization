/*! For license information please see preprocess.DCl61PJf7.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getType(),n=PRHelper.getHook(),o=PRHelper.getServer(),c=PRHelper.getRequest(),r=PRHelper.getSetting();n.on("load",s);let i={};function s(){i={},c.ajax(r.getOption("ajax.get_pages")).onSuccess((e=>{const n=e;t.isEmpty(n)||a(n)})).onError((e=>{console.log(e)})).addNonce().send()}function a(e,n=0){if(e.hasOwnProperty(n)){const t=e[n].id,o=e[n].url;d(t,o,"desktop").then((()=>{d(t,o,"mobile").then((()=>{a(e,++n)})).catch((e=>{console.log(e)}))})).catch((e=>{console.log(e)}))}else t.isEmpty(i)||(o=i,c.ajax(r.getOption("ajax.update_pages")).addNonce().onSuccess(s).send({pages:o}));var o}async function d(n,c,r){return new Promise(((s,a)=>{void 0!==i[n]&&void 0!==i[n][r]&&a("metric already extracted.");const d=o.addParams({"dont-opt":1,"opt-preprocess":1,device:r},c),m=e.createElement(`<iframe id="calc_metrics" data-device="${r}"  src="${d}" class="${r}"/>`);m.onload=async()=>{setTimeout((()=>{const e=m.contentWindow.opt_lcp;if(t.isEmpty(e))a("can not detect lcp item.");else{const t={sliders:l(m.contentWindow)},o=function(e){return p(e,"img, video",(e=>e.src))}(m.contentWindow);void 0===i[n]&&(i[n]={lcp:{},extra:{},atf_images:{}}),i[n].lcp[r]=e,i[n].extra[r]=t,i[n].atf_images[r]=o,m.remove(),s("preprocess.")}}),2e3)},e.append(m,"body")}))}function l(e){let n,o={};return t.each(["sr7-module","rs-module"],(t=>{n=p(e,t,(e=>e.id)),o={...o,...n}})),o}function p(e,t,n){return Array.from(e.document.querySelectorAll(t)).filter((t=>function(e,t){const n=e.getBoundingClientRect();return n.top>=0&&n.left>=0&&n.bottom<=(t.innerHeight||t.document.documentElement.clientHeight)&&n.right<=(t.innerWidth||t.document.documentElement.clientWidth)}(t,e))).map(n)}}();