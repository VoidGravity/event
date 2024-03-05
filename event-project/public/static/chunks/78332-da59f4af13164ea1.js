(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[78332],{67128:function(e,t){"use strict";t.Z=function(){return Array.prototype.slice.call(arguments).filter(Boolean).join(" ")}},43348:function(e,t,n){"use strict";n.d(t,{Up:function(){return N},Vv:function(){return D},ch:function(){return S}});var r,o,a,i,c,u,s=n(50959);(r=i||(i={})).INITIAL="initial",r.PENDING="pending",r.REJECTED="rejected",r.RESOLVED="resolved",(o=c||(c={})).LOADING_STATUS="setLoadingStatus",o.RESET_OPTIONS="resetOptions",o.SET_BRAINTREE_INSTANCE="braintreeInstance",(a=u||(u={})).NUMBER="number",a.CVV="cvv",a.EXPIRATION_DATE="expirationDate",a.EXPIRATION_MONTH="expirationMonth",a.EXPIRATION_YEAR="expirationYear",a.POSTAL_CODE="postalCode";var l="data-react-paypal-script-id",d={DATA_CLIENT_TOKEN:"data-client-token",DATA_USER_ID_TOKEN:"data-user-id-token",DATA_SDK_INTEGRATION_SOURCE:"data-sdk-integration-source",DATA_SDK_INTEGRATION_SOURCE_VALUE:"react-paypal-js",DATA_NAMESPACE:"data-namespace"},f="paypal",p=function(){return(p=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e}).apply(this,arguments)};function v(e,t){var n={};for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&0>t.indexOf(r)&&(n[r]=e[r]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols)for(var o=0,r=Object.getOwnPropertySymbols(e);o<r.length;o++)0>t.indexOf(r[o])&&Object.prototype.propertyIsEnumerable.call(e,r[o])&&(n[r[o]]=e[r[o]]);return n}function m(e,t,n){if(n||2==arguments.length)for(var r,o=0,a=t.length;o<a;o++)!r&&o in t||(r||(r=Array.prototype.slice.call(t,0,o)),r[o]=t[o]);return e.concat(r||Array.prototype.slice.call(t))}function E(e){return void 0===e&&(e=f),window[e]}function y(e){var t=e.reactComponentName,n=e.sdkComponentKey,r=e.sdkRequestedComponents,o=void 0===r?"":r,a=e.sdkDataNamespace,i=n.charAt(0).toUpperCase().concat(n.substring(1)),c="Unable to render <".concat(t," /> because window.").concat(void 0===a?f:a,".").concat(i," is undefined.");if(!o.includes(n)){var u=[o,n].filter(Boolean).join();c+="\nTo fix the issue, add '".concat(n,"' to the list of components passed to the parent PayPalScriptProvider:")+"\n`<PayPalScriptProvider options={{ components: '".concat(u,"'}}>`.")}return c}function h(e){return"react-paypal-js-".concat(function(e){for(var t="",n=0;n<e.length;n++){var r=e[n].charCodeAt(0)*n;e[n+1]&&(r+=e[n+1].charCodeAt(0)*(n-1)),t+=String.fromCharCode(97+Math.abs(r)%26)}return t}(JSON.stringify(e)))}function A(e,t){var n,r,o;switch(t.type){case c.LOADING_STATUS:return p(p({},e),{loadingStatus:t.value});case c.RESET_OPTIONS:return r=e.options[l],(null==(o=self.document.querySelector("script[".concat(l,'="').concat(r,'"]')))?void 0:o.parentNode)&&o.parentNode.removeChild(o),delete t.value[l],p(p({},e),{loadingStatus:i.PENDING,options:p(p({},t.value),((n={})[l]="".concat(h(t.value)),n[d.DATA_SDK_INTEGRATION_SOURCE]=d.DATA_SDK_INTEGRATION_SOURCE_VALUE,n))});case c.SET_BRAINTREE_INSTANCE:return p(p({},e),{braintreePayPalCheckoutInstance:t.value});default:return e}}var g=(0,s.createContext)(null);function N(){var e=function(e){if("function"==typeof(null==e?void 0:e.dispatch)&&0!==e.dispatch.length)return e;throw Error("usePayPalScriptReducer must be used within a PayPalScriptProvider")}((0,s.useContext)(g));return[p(p({},e),{isInitial:e.loadingStatus===i.INITIAL,isPending:e.loadingStatus===i.PENDING,isResolved:e.loadingStatus===i.RESOLVED,isRejected:e.loadingStatus===i.REJECTED}),e.dispatch]}(0,s.createContext)({});var S=function(e){var t=e.className,n=e.disabled,r=void 0!==n&&n,o=e.children,a=e.forceReRender,i=v(e,["className","disabled","children","forceReRender"]),c="".concat(void 0===t?"":t," ").concat(r?"paypal-buttons-disabled":"").trim(),u=(0,s.useRef)(null),l=(0,s.useRef)(null),f=N()[0],h=f.isResolved,A=f.options,g=(0,s.useState)(null),b=g[0],T=g[1],C=(0,s.useState)(!0),P=C[0],R=C[1],D=(0,s.useState)(null)[1];function w(){null!==l.current&&l.current.close().catch(function(){})}return(0,s.useEffect)(function(){if(!1===h)return w;var e=E(A[d.DATA_NAMESPACE]);if(void 0===e||void 0===e.Buttons)return D(function(){throw Error(y({reactComponentName:S.displayName,sdkComponentKey:"buttons",sdkRequestedComponents:A.components,sdkDataNamespace:A[d.DATA_NAMESPACE]}))}),w;try{l.current=e.Buttons(p(p({},i),{onInit:function(e,t){T(t),"function"==typeof i.onInit&&i.onInit(e,t)}}))}catch(e){return D(function(){throw Error("Failed to render <PayPalButtons /> component. Failed to initialize:  ".concat(e))})}return!1===l.current.isEligible()?(R(!1),w):(u.current&&l.current.render(u.current).catch(function(e){null!==u.current&&0!==u.current.children.length&&D(function(){throw Error("Failed to render <PayPalButtons /> component. ".concat(e))})}),w)},m(m([h],void 0===a?[]:a,!0),[i.fundingSource],!1)),(0,s.useEffect)(function(){null!==b&&(!0===r?b.disable().catch(function(){}):b.enable().catch(function(){}))},[r,b]),s.createElement(s.Fragment,null,P?s.createElement("div",{ref:u,style:r?{opacity:.38}:{},className:c}):o)};function b(e,t){void 0===t&&(t={});var n=document.createElement("script");return n.src=e,Object.keys(t).forEach(function(e){n.setAttribute(e,t[e]),"data-csp-nonce"===e&&n.setAttribute("nonce",t["data-csp-nonce"])}),n}function T(){if("undefined"==typeof Promise)throw Error("Promise is undefined. To resolve the issue, use a Promise polyfill.");return Promise}function C(e,t){if("object"!=typeof e||null===e)throw Error("Expected an options object.");if(void 0!==t&&"function"!=typeof t)throw Error("Expected PromisePonyfill to be a function.")}S.displayName="PayPalButtons";var P=function(e){var t=e.className,n=e.children,r=v(e,["className","children"]),o=N()[0],a=o.isResolved,i=o.options,c=(0,s.useRef)(null),u=(0,s.useState)(!0),l=u[0],f=u[1],m=(0,s.useState)(null)[1],h=function(e){var t=c.current;if(!t||!e.isEligible())return f(!1);t.firstChild&&t.removeChild(t.firstChild),e.render(t).catch(function(e){null!==t&&0!==t.children.length&&m(function(){throw Error("Failed to render <PayPalMarks /> component. ".concat(e))})})};return(0,s.useEffect)(function(){if(!1!==a){var e=E(i[d.DATA_NAMESPACE]);if(void 0===e||void 0===e.Marks)return m(function(){throw Error(y({reactComponentName:P.displayName,sdkComponentKey:"marks",sdkRequestedComponents:i.components,sdkDataNamespace:i[d.DATA_NAMESPACE]}))});h(e.Marks(p({},r)))}},[a,r.fundingSource]),s.createElement(s.Fragment,null,l?s.createElement("div",{ref:c,className:void 0===t?"":t}):n)};P.displayName="PayPalMarks";var R=function(e){var t=e.className,n=e.forceReRender,r=v(e,["className","forceReRender"]),o=N()[0],a=o.isResolved,i=o.options,c=(0,s.useRef)(null),u=(0,s.useRef)(null),l=(0,s.useState)(null)[1];return(0,s.useEffect)(function(){if(!1!==a){var e=E(i[d.DATA_NAMESPACE]);if(void 0===e||void 0===e.Messages)return l(function(){throw Error(y({reactComponentName:R.displayName,sdkComponentKey:"messages",sdkRequestedComponents:i.components,sdkDataNamespace:i[d.DATA_NAMESPACE]}))});u.current=e.Messages(p({},r)),u.current.render(c.current).catch(function(e){null!==c.current&&0!==c.current.children.length&&l(function(){throw Error("Failed to render <PayPalMessages /> component. ".concat(e))})})}},m([a],void 0===n?[]:n,!0)),s.createElement("div",{ref:c,className:void 0===t?"":t})};R.displayName="PayPalMessages";var D=function(e){var t,n=e.options,r=void 0===n?{"client-id":"test"}:n,o=e.children,a=e.deferLoading,u=void 0!==a&&a,f=(0,s.useReducer)(A,{options:p(p({},r),((t={})[l]="".concat(h(r)),t[d.DATA_SDK_INTEGRATION_SOURCE]=d.DATA_SDK_INTEGRATION_SOURCE_VALUE,t)),loadingStatus:u?i.INITIAL:i.PENDING}),v=f[0],m=f[1];return(0,s.useEffect)(function(){if(!1===u&&v.loadingStatus===i.INITIAL)return m({type:c.LOADING_STATUS,value:i.PENDING});if(v.loadingStatus===i.PENDING){var e=!0;return(function(e,t){if(void 0===t&&(t=T()),C(e,t),"undefined"==typeof window)return t.resolve(null);var n,r,o,a,i,c,u,s,l,d,f,p=(s="https://www.paypal.com/sdk/js",(u=e).sdkBaseURL&&(s=u.sdkBaseURL,delete u.sdkBaseURL),r=(n=u)["merchant-id"],o=n["data-merchant-id"],a="",i="",Array.isArray(r)?r.length>1?(a="*",i=r.toString()):a=r.toString():"string"==typeof r&&r.length>0?a=r:"string"==typeof o&&o.length>0&&(a="*",i=o),n["merchant-id"]=a,n["data-merchant-id"]=i,d=(l=Object.keys(u).filter(function(e){return void 0!==u[e]&&null!==u[e]&&""!==u[e]}).reduce(function(e,t){var n=u[t].toString();return"data-"===t.substring(0,5)?e.dataAttributes[t]=n:e.queryParams[t]=n,e},{queryParams:{},dataAttributes:{}})).queryParams,f=l.dataAttributes,{url:"".concat(s,"?").concat((c="",Object.keys(d).forEach(function(e){0!==c.length&&(c+="&"),c+=e+"="+d[e]}),c)),dataAttributes:f}),v=p.url,m=p.dataAttributes,E=m["data-namespace"]||"paypal",y=window[E];return function(e,t){var n=document.querySelector('script[src="'.concat(e,'"]'));if(null===n)return null;var r=b(e,t),o=n.cloneNode();if(delete o.dataset.uidAuto,Object.keys(o.dataset).length!==Object.keys(r.dataset).length)return null;var a=!0;return Object.keys(o.dataset).forEach(function(e){o.dataset[e]!==r.dataset[e]&&(a=!1)}),a?n:null}(v,m)&&y?t.resolve(y):(function(e,t){void 0===t&&(t=T()),C(e,t);var n=e.url,r=e.attributes;if("string"!=typeof n||0===n.length)throw Error("Invalid url.");if(void 0!==r&&"object"!=typeof r)throw Error("Expected attributes to be an object.");return new t(function(e,t){var o,a,i,c,u,s;if("undefined"==typeof window)return e();a=(o={url:n,attributes:r,onSuccess:function(){return e()},onError:function(){var e=Error('The script "'.concat(n,'" failed to load.'));return window.fetch?fetch(n).then(function(n){return 200===n.status&&t(e),n.text()}).then(function(e){var n;t(Error((n=e.split("/* Original Error:")[1])?n.replace(/\n/g,"").replace("*/","").trim():e))}).catch(function(e){t(e)}):t(e)}}).url,i=o.attributes,c=o.onSuccess,u=o.onError,(s=b(a,i)).onerror=u,s.onload=c,document.head.insertBefore(s,document.head.firstElementChild)})})({url:v,attributes:m},t).then(function(){var e=window[E];if(e)return e;throw Error("The window.".concat(E," global variable is not available."))})})(v.options).then(function(){e&&m({type:c.LOADING_STATUS,value:i.RESOLVED})}).catch(function(t){console.error("".concat("Failed to load the PayPal JS SDK script."," ").concat(t)),e&&m({type:c.LOADING_STATUS,value:i.REJECTED})}),function(){e=!1}}},[v.options,u,v.loadingStatus]),s.createElement(g.Provider,{value:p(p({},v),{dispatch:m})},o)}},15912:function(e,t,n){"use strict";var r=n(16935),o={"text/plain":"Text","text/html":"Url",default:"Text"};e.exports=function(e,t){var n,a,i,c,u,s,l,d,f=!1;t||(t={}),i=t.debug||!1;try{if(u=r(),s=document.createRange(),l=document.getSelection(),(d=document.createElement("span")).textContent=e,d.style.all="unset",d.style.position="fixed",d.style.top=0,d.style.clip="rect(0, 0, 0, 0)",d.style.whiteSpace="pre",d.style.webkitUserSelect="text",d.style.MozUserSelect="text",d.style.msUserSelect="text",d.style.userSelect="text",d.addEventListener("copy",function(n){if(n.stopPropagation(),t.format){if(n.preventDefault(),void 0===n.clipboardData){i&&console.warn("unable to use e.clipboardData"),i&&console.warn("trying IE specific stuff"),window.clipboardData.clearData();var r=o[t.format]||o.default;window.clipboardData.setData(r,e)}else n.clipboardData.clearData(),n.clipboardData.setData(t.format,e)}t.onCopy&&(n.preventDefault(),t.onCopy(n.clipboardData))}),document.body.appendChild(d),s.selectNodeContents(d),l.addRange(s),!document.execCommand("copy"))throw Error("copy command was unsuccessful");f=!0}catch(r){i&&console.error("unable to copy using execCommand: ",r),i&&console.warn("trying IE specific stuff");try{window.clipboardData.setData(t.format||"text",e),t.onCopy&&t.onCopy(window.clipboardData),f=!0}catch(r){i&&console.error("unable to copy using clipboardData: ",r),i&&console.error("falling back to prompt"),n="message"in t?t.message:"Copy to clipboard: #{key}, Enter",a=(/mac os x/i.test(navigator.userAgent)?"⌘":"Ctrl")+"+C",c=n.replace(/#{\s*key\s*}/g,a),window.prompt(c,e)}}finally{l&&("function"==typeof l.removeRange?l.removeRange(s):l.removeAllRanges()),d&&document.body.removeChild(d),u()}return f}},72340:function(e,t,n){var r=n(30404),o=n(42448);e.exports=function(e,t,n){(void 0===n||o(e[t],n))&&(void 0!==n||t in e)||r(e,t,n)}},97254:function(e,t,n){var r=n(5929),o=n(72340),a=n(91030),i=n(10715),c=n(36838),u=n(37390),s=n(72014);e.exports=function e(t,n,l,d,f){t!==n&&a(n,function(a,u){if(f||(f=new r),c(a))i(t,n,u,l,e,d,f);else{var p=d?d(s(t,u),a,u+"",t,n,f):void 0;void 0===p&&(p=a),o(t,u,p)}},u)}},10715:function(e,t,n){var r=n(72340),o=n(39767),a=n(27136),i=n(47165),c=n(36404),u=n(30353),s=n(24669),l=n(57348),d=n(61563),f=n(92042),p=n(36838),v=n(69143),m=n(73806),E=n(72014),y=n(85111);e.exports=function(e,t,n,h,A,g,N){var S=E(e,n),b=E(t,n),T=N.get(b);if(T){r(e,n,T);return}var C=g?g(S,b,n+"",e,t,N):void 0,P=void 0===C;if(P){var R=s(b),D=!R&&d(b),w=!R&&!D&&m(b);C=b,R||D||w?s(S)?C=S:l(S)?C=i(S):D?(P=!1,C=o(b,!0)):w?(P=!1,C=a(b,!0)):C=[]:v(b)||u(b)?(C=S,u(S)?C=y(S):(!p(S)||f(S))&&(C=c(b))):P=!1}P&&(N.set(b,C),A(C,b,h,g,N),N.delete(b)),r(e,n,C)}},77991:function(e,t,n){var r=n(5125),o=n(97616);e.exports=function(e){return r(function(t,n){var r=-1,a=n.length,i=a>1?n[a-1]:void 0,c=a>2?n[2]:void 0;for(i=e.length>3&&"function"==typeof i?(a--,i):void 0,c&&o(n[0],n[1],c)&&(i=a<3?void 0:i,a=1),t=Object(t);++r<a;){var u=n[r];u&&e(t,u,r,i)}return t})}},72014:function(e){e.exports=function(e,t){if(("constructor"!==t||"function"!=typeof e[t])&&"__proto__"!=t)return e[t]}},57348:function(e,t,n){var r=n(47428),o=n(55073);e.exports=function(e){return o(e)&&r(e)}},59933:function(e,t,n){var r=n(80732),o=n(55073);e.exports=function(e){return"number"==typeof e||o(e)&&"[object Number]"==r(e)}},67929:function(e,t,n){var r=n(97254),o=n(77991)(function(e,t,n){r(e,t,n)});e.exports=o},71879:function(e,t,n){var r=n(43846),o=n(20426);e.exports=function(e,t,n){return e&&e.length?r(e,0,(t=n||void 0===t?1:o(t))<0?0:t):[]}},85111:function(e,t,n){var r=n(92434),o=n(37390);e.exports=function(e){return r(e,o(e))}},76729:function(e,t){"use strict";var n=["Shift","Meta","Alt","Control"],r="object"==typeof navigator&&/Mac|iPod|iPhone|iPad/.test(navigator.platform)?"Meta":"Control";t.Z=function(e,t,o){void 0===o&&(o={});var a,i,c=null!=(a=o.timeout)?a:1e3,u=null!=(i=o.event)?i:"keydown",s=Object.keys(t).map(function(e){return[e.trim().split(" ").map(function(e){var t=e.split(/\b\+/),n=t.pop();return[t=t.map(function(e){return"$mod"===e?r:e}),n]}),t[e]]}),l=new Map,d=null,f=function(e){e instanceof KeyboardEvent&&(s.forEach(function(t){var r,o=t[0],a=t[1],i=l.get(o)||o;(r=i[0])[1].toUpperCase()!==e.key.toUpperCase()&&r[1]!==e.code||r[0].find(function(t){return!e.getModifierState(t)})||n.find(function(t){return!r[0].includes(t)&&r[1]!==t&&e.getModifierState(t)})?e.getModifierState(e.key)||l.delete(o):i.length>1?l.set(o,i.slice(1)):(l.delete(o),a(e))}),d&&clearTimeout(d),d=setTimeout(l.clear.bind(l),c))};return e.addEventListener(u,f),function(){e.removeEventListener(u,f)}}},16935:function(e){e.exports=function(){var e=document.getSelection();if(!e.rangeCount)return function(){};for(var t=document.activeElement,n=[],r=0;r<e.rangeCount;r++)n.push(e.getRangeAt(r));switch(t.tagName.toUpperCase()){case"INPUT":case"TEXTAREA":t.blur();break;default:t=null}return e.removeAllRanges(),function(){"Caret"===e.type&&e.removeAllRanges(),e.rangeCount||n.forEach(function(t){e.addRange(t)}),t&&t.focus()}}}}]);