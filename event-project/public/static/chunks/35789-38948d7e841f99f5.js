(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[35789],{16986:function(e,t,n){"use strict";let r;n.d(t,{Dy:function(){return r},J1:function(){return O},Q$:function(){return N},ky:function(){return y},mq:function(){return M},o8:function(){return x}});var i,l=n(11217),o=n(96470),u=n(19803),a=n.n(u),s=n(71879),c=n.n(s),d=n(50959),f=n(73193),h=n(36122),p=n(78003),g=n(38423),m=n(11527);let v=["initial","isEmpty","fill"],b=["isRemoved","name","twoLetters","memberPhotoUrl","memberPhotoWebPUrl","width","height","isLoading","pictureClassName","isLazy","badgeClassName","badgeSize","dropSize"];function w(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function j(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?w(Object(n),!0).forEach(function(t){(0,l.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):w(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}(i=r||(r={})).THUMB="thumb",i.HIGHRES="highres";let y=(0,f.vU)({photoOf:{id:"avatar.photoOf",defaultMessage:"Photo of {NAME}"}}),O=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:r.THUMB;if("0"==`${e}`)return null;let n=Number(e)%6e4+(Number(e)%6e4<0?6e4:0),i=n.toString(16).split("").join("/");return`https://secure.meetupstatic.com/photos/member/${i}/${t}_${e}.jpeg`},x=e=>{let{initial:t,isEmpty:n,fill:r}=e,i=(0,o.Z)(e,v);return(0,m.jsx)("svg",j(j({role:"presentation",viewBox:"0 0 75 74",version:"1.1"},i),{},{children:(0,m.jsx)("g",{stroke:"none",strokeWidth:"1",fill:"none",fillRule:"evenodd",children:(0,m.jsx)("g",{transform:"translate(-750.000000, -109.000000)",children:(0,m.jsx)("g",{transform:"translate(787.926915, 146.475953) rotate(-120.000000) translate(-787.926915, -146.475953) translate(750.426915, 110.475953)",children:(0,m.jsxs)("g",{transform:"translate(0.350000, 0.000000)",children:[(0,m.jsx)("path",{d:"M35.66773,0.88851 C16.15488,0.88851 0.33628,16.70676 0.33628,36.21961 C0.33628,55.73246 16.15488,71.55106 35.66773,71.55106 C55.18093,71.55106 70.99918,55.73246 70.99918,36.21961 C70.99918,16.70676 55.18093,0.88851 35.66773,0.88851 L35.66773,0.88851 Z",fill:r}),(0,m.jsx)("path",{d:"M38.117625,0.188335 C18.604775,0.188335 2.786525,16.006935 2.786525,35.519785 C2.786525,55.032635 18.604775,70.850885 38.117625,70.850885 C57.630825,70.850885 73.449075,55.032635 73.449075,35.519785 C73.449075,16.006935 57.630825,0.188335 38.117625,0.188335 Z",stroke:"#353E48",strokeWidth:"1.75",strokeLinecap:"round",strokeLinejoin:"round"}),n&&(0,m.jsxs)("g",{transform:"rotate(120 38,36) scale(1.8) translate(9.2, 7.5)",children:[(0,m.jsx)("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M12 10.5C13.933 10.5 15.5 8.933 15.5 7C15.5 5.067 13.933 3.5 12 3.5C10.067 3.5 8.5 5.067 8.5 7C8.5 8.933 10.067 10.5 12 10.5ZM12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z",fill:"#353E48"}),(0,m.jsx)("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M19.5 17.6515C17.5925 15.7049 14.9381 14.5 12 14.5C9.0619 14.5 6.40748 15.7049 4.5 17.6515V19.5H19.5V17.6515ZM21 17.4407C21 17.197 20.9122 16.9605 20.7453 16.7829C18.5565 14.4543 15.4481 13 12 13C8.55192 13 5.44351 14.4543 3.25467 16.7829C3.08776 16.9605 3 17.197 3 17.4407V20C3 20.5523 3.44772 21 4 21H20C20.5523 21 21 20.5523 21 20V17.4407Z",fill:"#353E48"})]}),(0,m.jsx)("text",{className:"select-none",transform:"rotate(120 38,36)",x:"50%",y:"50%",textAnchor:"middle",fill:"#333E48",fontSize:"30px",dy:".3em",children:t})]})})})})}))},C=[0,1,2,3],P=Math.floor(Math.random()*C.length),$=["#97CAD1","#B3C4AC","#F1A080","#FFAD43"],N=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";if(!e)return P;let t=e.split("").reduce((e,t)=>{let n=(e<<5)-e+t.charCodeAt(0);return n&n},0);return Math.abs(t)%C.length},U=(e,t)=>{let{0:n,1:r}=(0,d.useState)(!!t);return(0,d.useEffect)(()=>{if(e)return;let n=async()=>{try{await (0,p.Bi)(t),r(!0)}catch(e){r(!1)}};t&&n()},[e,t,r]),{hasImage:n}},M=e=>{let{isRemoved:t,name:n,twoLetters:r,memberPhotoUrl:i,memberPhotoWebPUrl:l,width:u=48,height:s=48,isLoading:d,pictureClassName:f,isLazy:p=!1,badgeClassName:v,badgeSize:w,dropSize:O}=e,C=(0,o.Z)(e,b),P=(0,h.Z)(),M=l||i,{hasImage:E}=U(p,M);if(d)return(0,m.jsx)("div",{style:O?void 0:{width:u,height:s},className:a()("w-full rounded-full",g.f,null==C?void 0:C.className)});if(t)return(0,m.jsx)("img",j({className:f,src:"/images/apps/MeetupAppLogo.svg",alt:"",role:"presentation",width:u,height:s},C));if(null===M||!E){let e=(r?c()(null==n?void 0:n.split(" "),2):[n]).map(e=>((null==e?void 0:e.substring(0,1))||"").toUpperCase()).join("");return(0,m.jsx)(x,j({initial:e,isEmpty:!e,fill:n?$[N(n)]:"#F1A080",width:u,height:s},C))}return(0,m.jsxs)("picture",{className:f,children:[l&&(0,m.jsxs)(m.Fragment,{children:[(0,m.jsx)("source",{srcSet:l,type:"image/webp"}),(0,m.jsx)("source",{srcSet:i,type:"image/jpeg"})]}),(0,m.jsx)("img",j(j({alt:P.formatMessage(y.photoOf,{NAME:n}),src:i,style:O?void 0:{width:u,height:s,minWidth:u,minHeight:s},loading:p?"lazy":"eager"},C),{},{className:a()("rounded-full object-cover",null==C?void 0:C.className)}))]})}},49147:function(e,t,n){"use strict";var r=n(19803),i=n.n(r),l=n(78003),o=n(16986),u=n(67438),a=n(11527);let s=(e,t)=>e&&!/\/0\/.*_0\./.test(e)&&"0"!=`${t}`,c=e=>{let{members:t,size:n=3,imageSize:r=34}=e;return(0,a.jsx)("ul",{className:"flex",children:Array(Math.min(n,(null==t?void 0:t.length)||0)).fill(0).map((e,c)=>{var d;let{photo:f,name:h}=t[c],p=s(null==f?void 0:f.baseUrl,null==f?void 0:f.id)?(0,u.sQ)(f,32,32,""):null,g=s(null==f?void 0:f.baseUrl,null==f?void 0:f.id)?null===(d=(0,l.FS)(p))||void 0===d?void 0:d.replace(".jpg",".webp").replace(/\?.*/,""):null,m=s(null==f?void 0:f.source,null==f?void 0:f.id)?null==f?void 0:f.source:null;m&&(p=(0,l.FS)((0,l.mu)(m)));let v=!!(p||g||m);return(0,a.jsx)("li",{style:{zIndex:n-c},className:i()("l1w37v0b"),children:(0,a.jsx)(o.mq,{twoLetters:!0,memberPhotoUrl:p,memberPhotoWebPUrl:g,loading:"lazy",width:v?r:r-2,height:v?r:r-2,className:i()(v&&"border border-white bg-gray2","rounded-full"),name:h})},c)})})};t.ZP=c,n(40636)},67438:function(e,t,n){"use strict";n.d(t,{sQ:function(){return s}});var r=n(20106),i=n.n(r),l=n(31850),o=n(78003),u=n(22776),a=n(11527);let s=function(e,t,n){let r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"";if(!e)return`${u.wm}${(0,l.qb)({groupNameOrUrl:r})}`;let i=Math.round(t);return`${null==e?void 0:e.baseUrl}${null==e?void 0:e.id}/${i}x${Math.round(n)}.jpg?w=${i}`},c=e=>{let{width:t,height:n,seed:r,image:i}=e,a=s(i,t,n,r);return((0,o.oe)(null==i?void 0:i.baseUrl,null==i?void 0:i.id)||!(null!=i&&i.baseUrl))&&(a=u.wm+(0,l.qb)({groupNameOrUrl:r},t>n)),a},d=e=>{let{image:t,aspectRatio:n,width:r,height:l,critical:o=!1,className:s,alt:d,onLoad:f,quality:h,fallbackSeed:p,fill:g,ariaHidden:m}=e,v=c({width:r,height:r/(n||1),image:t,seed:p||(null==t?void 0:t.id)});return(0,a.jsx)(i(),{loader:u.XI,src:v,className:s,loading:o?"eager":"lazy",width:r,height:l,alt:d,onLoad:f,quality:h,"data-testid":"next-image",fill:!!g,"aria-hidden":m})};t.ZP=d},38423:function(e,t,n){"use strict";n.d(t,{f:function(){return u}});var r=n(19803),i=n.n(r),l=n(74182),o=n.n(l);let{shimmer:u}=o();i()(o().shimmerText,u)},48630:function(e,t,n){"use strict";var r=n(11217),i=n(96470),l=n(20106),o=n.n(l),u=n(22776),a=n(11527);let s=["isPresentation"];function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let d=e=>{let{isPresentation:t}=e,n=(0,i.Z)(e,s);return(0,a.jsx)(o(),function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({loader:u.XI,"aria-hidden":t,role:t?"presentation":void 0,width:(null==n?void 0:n.width)??100,height:(null==n?void 0:n.height)??100},n))};t.Z=d},31850:function(e,t,n){"use strict";n.d(t,{d7:function(){return r},qb:function(){return u}});let r=function(e,t){let n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"jpg";return`${e}${t}/68x68.${n}`},i=Array(15).fill(0).map((e,t)=>`/images/fallbacks/group-cover-${t+1}-wide.webp`),l=Array(15).fill(0).map((e,t)=>`/images/fallbacks/group-cover-${t+1}-square.webp`),o=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",t=e.split("").reduce((e,t)=>{let n=(e<<5)-e+t.charCodeAt(0);return n&n},0);return Math.abs(t)%i.length},u=function(e){let t=!(arguments.length>1)||void 0===arguments[1]||arguments[1];return(t?i:l)[o(e.groupNameOrUrl)]}},78003:function(e,t,n){"use strict";let r;n.d(t,{$T:function(){return N},M6:function(){return O},Xc:function(){return y},zc:function(){return r},UP:function(){return u},e$:function(){return a},ic:function(){return c},n0:function(){return s},Uu:function(){return w},vL:function(){return f},Bi:function(){return d},ix:function(){return p},WO:function(){return h},Zk:function(){return g},px:function(){return E},qz:function(){return b},z2:function(){return L},bs:function(){return A},Wf:function(){return j},$B:function(){return C},JN:function(){return M},qp:function(){return v},BI:function(){return U},pC:function(){return R},mu:function(){return S},FS:function(){return k},oe:function(){return Z},fR:function(){return P}});let i=e=>new Promise(t=>{setTimeout(t,e)});var l,o=n(23945);(l=r||(r={})).Png="PNG",l.Jpeg="JPEG",l.Gif="GIF";let u="image/jpeg",a=.85,s=15e6,c=24e6,d=e=>new Promise((t,n)=>{let r=e instanceof File?URL.createObjectURL(e):e,i=new Image;i.addEventListener("load",()=>t(i)),i.addEventListener("error",n),i.src=r}),f=()=>document.createElement("canvas"),h=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:u,n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:a,r=n,i=e.toDataURL(t,r);for(;i.length>s;){if((r-=.1)<0){i=e.toDataURL(t,.01);break}i=e.toDataURL(t,r)}return i},p=e=>{let t=-4,n={r:0,g:0,b:0},r=0,{length:i}=e.data;for(;(t+=20)<i;)r+=1,n.r+=e.data[t],n.g+=e.data[t+1],n.b+=e.data[t+2];return n.r=~~(n.r/r),n.g=~~(n.g/r),n.b=~~(n.b/r),(n.r<<16)+(n.g<<8)+n.b},g=e=>new Promise(t=>{let n=new FileReader;n.addEventListener("load",async()=>{t(n.result)},!1),n.readAsDataURL(e)}),m=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",[,n]=(null==t?void 0:t.match(/image\/(\w+)/))||[];return n?e.replace(/\.\w+$/,`.${n}`):e},v=e=>e.replace(/\.\w+$/,""),b=async function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"image.jpg";return new Promise(n=>{let r=new XMLHttpRequest;r.responseType="blob",r.onload=()=>{var e,i;n(new File([r.response],m(t,null==r?void 0:null===(e=r.response)||void 0===e?void 0:e.type),{type:null==r?void 0:null===(i=r.response)||void 0===i?void 0:i.type}))},r.open("GET",e),r.send()})},w=async function(e,t){let n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:a,r=await d(e),i=f();i.width=r.width,i.height=r.height;let l=i.getContext("2d");return l.fillStyle="#FFF",l.fillRect(0,0,i.width,i.height),l.drawImage(r,0,0),h(i,t,n)},j=async e=>{let t=await d(e);return((null==t?void 0:t.width)||1)/((null==t?void 0:t.height)||1)},y=1200,O=675,x=(e,t)=>(e.minWidth??0)<=t.width&&(e.maxWidth??1/0)>=t.width&&(e.minHeight??0)<=t.height&&(e.maxHeight??1/0)>=t.height,C=async(e,t)=>{try{let n=await d(e);return x(t,n)}catch(e){return!1}},P=async function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,n=0,r=async()=>{try{let t=await d(`${e}?r=${Math.random()}`);return t}catch(e){if((n+=1)>=t)throw e;return await i(n*n*200),r()}};return r()},$="https://secure.meetupstatic.com",N="https://secure-content.meetupstatic.com/images/classic-events/",U=e=>`${$}${e}`,M=e=>`${$}${e}`.replace("highres","member"),E=e=>`${$}${e}`.replace("highres","clean"),L=e=>{let t=e.toLowerCase().trim();return t.includes("image/png")?r.Png:t.includes("image/gif")?r.Gif:r.Jpeg},k=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return null==e?void 0:e.replace(".jpeg",".webp")},R=e=>null==e?void 0:e.replace("highres","event"),S=e=>null==e?void 0:e.replace("highres","thumb"),Z=(e,t)=>((null==e?void 0:e.includes(N))||(null==e?void 0:e.includes("images/event/")))&&o.Ov.test(t),A=e=>e&&"-1"!==e&&"0"!==e},40636:function(e){e.exports={l1w37v0b:"l1w37v0b"}}}]);