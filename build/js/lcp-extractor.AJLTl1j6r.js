/*! For license information please see lcp-extractor.AJLTl1j6r.js.LICENSE.txt */
!function(){window.pr_opt_lcp={};const e=new PerformanceObserver((e=>{const t=e.getEntries(),n=t[t.length-1].element;switch(window.pr_opt_lcp.img=0,window.pr_opt_lcp.path=(e=>{if("BODY"===e.tagName)return"BODY";const t=[];for(;e.parentElement&&"BODY"!==e.tagName;){let n=1,o=e;for(;o.previousElementSibling;o=o.previousElementSibling,n++);t.unshift(e.tagName+":nth-child("+n+")"),e=e.parentElement}return t.join(">").toLowerCase()})(n),n.tagName.toLowerCase()){case"img":case"video":window.pr_opt_lcp.img=1,window.pr_opt_lcp.src=n.src;break;default:const e=((e,t)=>(e.currentStyle||window.getComputedStyle(e,null)).getPropertyValue(t))(n,"background-image").match(/url\(["']?([^"']*)["']?\)/);e&&void 0!==e[1]&&(window.pr_opt_lcp.img=1,window.pr_opt_lcp.src=e[1])}}));e.observe({type:"largest-contentful-paint",buffered:!0}),document.addEventListener("visibilitychange",(()=>{"hidden"===document.visibilityState&&(e.takeRecords(),e.disconnect())}))}();