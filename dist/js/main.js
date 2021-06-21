/*! For license information please see main.js.LICENSE.txt */
(()=>{var e={866:()=>{if($(window).width()<=768){var e=document.getElementById("js-footer-nav"),n=document.getElementById("js-p-hamburger-menu"),t=e.clientHeight,o=window.innerHeight,a=document.documentElement.scrollHeight-o,i=0,s=0;window.addEventListener("scroll",(function(){(i=window.scrollY)>t&&i>s&&(e.classList.add("l-footer-nav__active"),n.classList.add("p-hamburger-menu__active")),(i<t||i<s||a<=i)&&(e.classList.remove("l-footer-nav__active"),n.classList.remove("p-hamburger-menu__active")),s=i}))}else{var A=document.getElementById("js-header-nav");document.addEventListener("scroll",(function(){document.getElementById("js-header-nav__on").getBoundingClientRect().bottom<0?A.classList.add("l-header-nav__active"):A.classList.remove("l-header-nav__active")}))}},172:()=>{$((function(){lightbox.option({alwaysShowNavOnTouchDevices:!0,albumLabel:"ギャラリー： %1 of %2",disableScrolling:!0,fadeDuration:600,fitImagesInViewport:!0,imageFadeDuration:600,positionFromTop:0,resizeDuration:700,showImageNumberLabel:!1,wrapAround:!0})}))},274:()=>{function e(){document.getElementById("js-loading").classList.remove("js-loading__active")}window.addEventListener("load",(function(){setTimeout(e,500)})),setTimeout(e,5e3)},65:()=>{function e(n){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(n)}!function(n,t,o){function a(n,t){return e(n)===t}function i(e){var n=d.className,t=u._config.classPrefix||"";if(f&&(n=n.baseVal),u._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}u._config.enableClasses&&(n+=" "+t+e.join(" "+t),f?d.className.baseVal=n:d.className=n)}function s(n,t){if("object"==e(n))for(var o in n)c(n,o)&&s(o,n[o]);else{var a=(n=n.toLowerCase()).split("."),A=u[a[0]];if(2==a.length&&(A=A[a[1]]),void 0!==A)return u;t="function"==typeof t?t():t,1==a.length?u[a[0]]=t:(!u[a[0]]||u[a[0]]instanceof Boolean||(u[a[0]]=new Boolean(u[a[0]])),u[a[0]][a[1]]=t),i([(t&&0!=t?"":"no-")+a.join("-")]),u._trigger(n,t)}return u}var A=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout((function(){n(t[e])}),0)},addTest:function(e,n,t){r.push({name:e,fn:n,options:t})},addAsyncTest:function(e){r.push({name:null,fn:e})}},u=function(){};u.prototype=l,u=new u;var c,d=t.documentElement,f="svg"===d.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;c=a(e,"undefined")||a(e.call,"undefined")?function(e,n){return n in e&&a(e.constructor.prototype[n],"undefined")}:function(n,t){return e.call(n,t)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),u.hasOwnProperty(e)&&setTimeout((function(){u._trigger(e,u[e])}),0)},l._trigger=function(e,n){if(this._l[e]){var t=this._l[e];setTimeout((function(){var e;for(e=0;e<t.length;e++)(0,t[e])(n)}),0),delete this._l[e]}},u._q.push((function(){l.addTest=s})),u.addAsyncTest((function(){function e(e,n,t){function o(n){var o=!(!n||"load"!==n.type)&&1==a.width;s(e,"webp"===e&&o?new Boolean(o):o),t&&t(n)}var a=new Image;a.onerror=o,a.onload=o,a.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],t=n.shift();e(t.name,t.uri,(function(t){if(t&&"load"===t.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)}))})),function(){var e,n,t,o,i,s;for(var l in r)if(r.hasOwnProperty(l)){if(e=[],(n=r[l]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=a(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)1===(s=e[i].split(".")).length?u[s[0]]=o:(!u[s[0]]||u[s[0]]instanceof Boolean||(u[s[0]]=new Boolean(u[s[0]])),u[s[0]][s[1]]=o),A.push((o?"":"no-")+s.join("-"))}}(),i(A),delete l.addTest,delete l.addAsyncTest;for(var m=0;m<u._q.length;m++)u._q[m]();n.Modernizr=u}(window,document)}},n={};function t(o){var a=n[o];if(void 0!==a)return a.exports;var i=n[o]={exports:{}};return e[o](i,i.exports,t),i.exports}t.n=e=>{var n=e&&e.__esModule?()=>e.default:()=>e;return t.d(n,{a:n}),n},t.d=(e,n)=>{for(var o in n)t.o(n,o)&&!t.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:n[o]})},t.o=(e,n)=>Object.prototype.hasOwnProperty.call(e,n),(()=>{"use strict";t(65),t(866),t(172),t(274)})()})();
//# sourceMappingURL=main.js.map