!function(e,t,n){function o(e,t){return typeof e===t}function r(){var e,t,n,r,i,s,a;for(var l in T)if(T.hasOwnProperty(l)){if(e=[],t=T[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=o(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?S[a[0]]=r:(!S[a[0]]||S[a[0]]instanceof Boolean||(S[a[0]]=new Boolean(S[a[0]])),S[a[0]][a[1]]=r),w.push((r?"":"no-")+a.join("-"))}}function i(e){var t=x.className,n=S._config.classPrefix||"";if(_&&(t=t.baseVal),S._config.enableJSClass){var o=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(o,"$1"+n+"js$2")}S._config.enableClasses&&(t+=" "+n+e.join(" "+n),_?x.className.baseVal=t:x.className=t)}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):_?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(e,t){if("object"==typeof e)for(var n in e)E(e,n)&&a(n,e[n]);else{e=e.toLowerCase();var o=e.split("."),r=S[o[0]];if(2==o.length&&(r=r[o[1]]),void 0!==r)return S;t="function"==typeof t?t():t,1==o.length?S[o[0]]=t:(!S[o[0]]||S[o[0]]instanceof Boolean||(S[o[0]]=new Boolean(S[o[0]])),S[o[0]][o[1]]=t),i([(t&&0!=t?"":"no-")+o.join("-")]),S._trigger(e,t)}return S}function l(){var e=t.body;return e||(e=s(_?"svg":"body"),e.fake=!0),e}function u(e,n,o,r){var i,a,u,c,f="modernizr",d=s("div"),p=l();if(parseInt(o,10))for(;o--;)u=s("div"),u.id=r?r[o]:f+(o+1),d.appendChild(u);return i=s("style"),i.type="text/css",i.id="s"+f,(p.fake?p:d).appendChild(i),p.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),d.id=f,p.fake&&(p.style.background="",p.style.overflow="hidden",c=x.style.overflow,x.style.overflow="hidden",x.appendChild(p)),a=n(d,e),p.fake?(p.parentNode.removeChild(p),x.style.overflow=c,x.offsetHeight):d.parentNode.removeChild(d),!!a}function c(e,t){return!!~(""+e).indexOf(t)}function f(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function d(e,t){return function(){return e.apply(t,arguments)}}function p(e,t,n){var r;for(var i in e)if(e[i]in t)return!1===n?e[i]:(r=t[e[i]],o(r,"function")?d(r,n||t):r);return!1}function h(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function v(t,o){var r=t.length;if("CSS"in e&&"supports"in e.CSS){for(;r--;)if(e.CSS.supports(h(t[r]),o))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];r--;)i.push("("+h(t[r])+":"+o+")");return i=i.join(" or "),u("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function m(e,t,r,i){function a(){u&&(delete k.style,delete k.modElem)}if(i=!o(i,"undefined")&&i,!o(r,"undefined")){var l=v(e,r);if(!o(l,"undefined"))return l}for(var u,d,p,h,m,g=["modernizr","tspan","samp"];!k.style&&g.length;)u=!0,k.modElem=s(g.shift()),k.style=k.modElem.style;for(p=e.length,d=0;p>d;d++)if(h=e[d],m=k.style[h],c(h,"-")&&(h=f(h)),k.style[h]!==n){if(i||o(r,"undefined"))return a(),"pfx"!=t||h;try{k.style[h]=r}catch(e){}if(k.style[h]!=m)return a(),"pfx"!=t||h}return a(),!1}function g(e,t,n,r,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+A.join(s+" ")+s).split(" ");return o(t,"string")||o(t,"undefined")?m(a,t,r,i):(a=(e+" "+N.join(s+" ")+s).split(" "),p(a,t,n))}function y(e,t,o){return g(e,n,n,t,o)}var w=[],T=[],C={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){T.push({name:e,fn:t,options:n})},addAsyncTest:function(e){T.push({name:null,fn:e})}},S=function(){};S.prototype=C,S=new S,S.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),S.addTest("picture","HTMLPictureElement"in e);var x=t.documentElement,_="svg"===x.nodeName.toLowerCase(),b=C._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];C._prefixes=b,S.addTest("video",function(){var e=s("video"),t=!1;try{(t=!!e.canPlayType)&&(t=new Boolean(t),t.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),t.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),t.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),t.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),t.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(e){}return t}),S.addTest("csscalc",function(){var e="width:",t=s("a");return t.style.cssText=e+b.join("calc(10px);"+e),!!t.style.length}),S.addTest("inlinesvg",function(){var e=s("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)});var P=function(){function e(e,t){var r;return!!e&&(t&&"string"!=typeof t||(t=s(t||"div")),e="on"+e,r=e in t,!r&&o&&(t.setAttribute||(t=s("div")),t.setAttribute(e,""),r="function"==typeof t[e],t[e]!==n&&(t[e]=n),t.removeAttribute(e)),r)}var o=!("onblur"in t.documentElement);return e}();C.hasEvent=P,S.addTest("inputsearchevent",P("search"));var E;!function(){var e={}.hasOwnProperty;E=o(e,"undefined")||o(e.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),C._l={},C.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),S.hasOwnProperty(e)&&setTimeout(function(){S._trigger(e,S[e])},0)},C._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,o;for(e=0;e<n.length;e++)(o=n[e])(t)},0),delete this._l[e]}},S._q.push(function(){C.addTest=a}),S.addTest("svgasimg",t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var z=C.testStyles=u;S.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var o=["@media (",b.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");z(o,function(e){n=9===e.offsetTop})}return n}),z("#modernizr { height: 50vh; }",function(t){var n=parseInt(e.innerHeight/2,10),o=parseInt((e.getComputedStyle?getComputedStyle(t,null):t.currentStyle).height,10);S.addTest("cssvhunit",o==n)}),z("#modernizr { width: 50vw; }",function(t){var n=parseInt(e.innerWidth/2,10),o=parseInt((e.getComputedStyle?getComputedStyle(t,null):t.currentStyle).width,10);S.addTest("cssvwunit",o==n)});var j="Moz O ms Webkit",A=C._config.usePrefixes?j.split(" "):[];C._cssomPrefixes=A;var N=C._config.usePrefixes?j.toLowerCase().split(" "):[];C._domPrefixes=N;var L={elem:s("modernizr")};S._q.push(function(){delete L.elem});var k={style:L.elem.style};S._q.unshift(function(){delete k.style}),C.testAllProps=g,C.testAllProps=y,S.addTest("cssanimations",y("animationName","a",!0)),S.addTest("flexbox",y("flexBasis","1px",!0)),S.addTest("overflowscrolling",y("overflowScrolling","touch",!0)),S.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&y("transform","scale(1)",!0)}),S.addTest("hiddenscroll",function(){return z("#modernizr {width:100px;height:100px;overflow:scroll}",function(e){return e.offsetWidth===e.clientWidth})}),r(),i(w),delete C.addTest,delete C.addAsyncTest;for(var I=0;I<S._q.length;I++)S._q[I]();e.Modernizr=S}(window,document);