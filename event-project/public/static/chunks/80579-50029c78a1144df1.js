(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[80579],{323:function(e,t,r){"use strict";var s=r(50959);t.Z=function(e){let t=(0,s.useRef)(null),r=(0,s.useRef)(null);return(0,s.useEffect)(()=>{r.current=t.current,t.current=e},[e]),r}},80579:function(e,t,r){"use strict";let s;r.d(t,{Z:function(){return es}});var a,l=r(11217),n=r(71997),o=r(19803),i=r.n(o),c=r(50959),d=r(73193),u=r(36122),h=r(80417),m=r(46990),f=r(323),g=r(22521),x=r(72455);let p=(e,t,r,s)=>{if(!e||!t)return"/find";let a=new URLSearchParams;return r&&Object.keys(r).length&&Object.entries(r).forEach(e=>{let[t,r]=e;a.append(t,r)}),a.append(e,t),"startingSoon"===t&&a.append("eventType","online"),s&&"en-US"!==s?`/${s}/find/?${a.toString()}`:`/find/?${a.toString()}`},b=e=>e.replace(/ /g,"%20"),v=e=>{let t="";if(e.city&&e.country){let r=[];if(r.push(e.country.toLowerCase()),e.state)r.push(e.state.toLowerCase());else{let t=(0,x.TI)(e);t&&r.push(b(t))}r.push(b(e.city)),t=`/${r.join("--")}`}return t},j=e=>{let{location:t,shortName:r,isPregenerated:s}=e;if(r===g.K4.SAVED)return"/saved-events";if(r===g.K4.NOW)return p("dateRange","startingSoon");if(r===g.K4.RECOMMENDED_ONLINE)return p("eventType","online");let a="/find";return t&&!s&&(a=`${a}${v(t)}`),r&&(a=`${a}/${r}`),a};var O=r(71912),y=r(64228),N=r(24391),E=r(96470),C=r(44636),w=r(68283),A=r(11527);let S=["onClick","className","children"],k=["children"],L=["children"];function P(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);t&&(s=s.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,s)}return r}function M(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?P(Object(r),!0).forEach(function(t){(0,l.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):P(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let D=e=>{let{onClick:t,className:r,children:s}=e,a=(0,E.Z)(e,S),l=i()("by3xc9a","border border-shadowColor");return(0,A.jsx)(C.ZP,M(M({tabIndex:-1,"aria-hidden":"true",onClick:t,className:i()("absolute inset-y-0 z-10 my-auto rounded-full bg-white",l,r)},a),{},{children:s}))},R=e=>{let{children:t}=e,r=(0,E.Z)(e,k),{onScrollLeft:s}=(0,c.useContext)(w.r);return(0,A.jsx)(D,M(M({},r),{},{onClick:e=>{e.stopPropagation(),s()},className:i()("-left-5",r.className),"data-testid":"carousel-button-left",children:t}))},T=e=>{let{children:t}=e,r=(0,E.Z)(e,L),{onScrollRight:s}=(0,c.useContext)(w.r);return(0,A.jsx)(D,M(M({},r),{},{onClick:e=>{e.stopPropagation(),s()},className:"-right-5","data-testid":"carousel-button-right",children:t}))};r(5e3);let Z=e=>{let{headerText:t="",children:r}=e;return(0,A.jsxs)("div",{className:"flex items-end items-center justify-between","data-testid":"carousel-header",children:[(0,A.jsx)("h2",{className:"text-xl font-semibold md:text-3xl md:font-bold",children:t}),r]})};var I=r(835),G=r.n(I),$=r(44278),z=r(34677);let B=e=>{let{mobileCopy:t,desktopCopy:r,isLarge:s,route:a,dataElementName:l,dataEventLabel:n}=e;return s?(0,A.jsx)("div",{children:(0,A.jsx)(G(),{href:a,passHref:!0,legacyBehavior:!0,children:(0,A.jsxs)(z.Z,{className:"mt-3 w-full flex-grow",variant:C.c7.PRIMARY,"data-event-label":n||"Carousel See All Link",children:[(0,A.jsx)("span",{className:$.O,children:t}),(0,A.jsx)("span",{"aria-hidden":"true",children:r})]})})}):(0,A.jsxs)(G(),{href:a,className:"text-viridian no-underline","data-testid":"seeAllButton","data-element-name":l,"data-event-label":n||"Carousel See All Link",children:[(0,A.jsx)("span",{className:$.O,children:t}),(0,A.jsx)("span",{"aria-hidden":"true",children:r})]})};(a=s||(s={})).Avatars="avatars",a.Text="text";let U=e=>{let{descriptionType:t=s.Avatars,className:r}=e;return(0,A.jsx)("div",{className:i()("flex h-56 w-64 flex-col justify-around bg-white",r),children:(0,A.jsxs)("div",{className:"flex h-full flex-col py-5",children:[(0,A.jsx)("div",{className:"mb-2 h-6 w-3/6 bg-gray1"}),(0,A.jsx)("div",{className:"mb-2 h-5 w-10/12 bg-gray1"}),(0,A.jsx)("div",{className:"h-6 w-9/12 bg-gray1"}),t===s.Avatars?(0,A.jsxs)("div",{className:"mt-4 flex h-4",children:[(0,A.jsx)("div",{className:"z-10 mt-1 h-7 w-7 rounded-full bg-gray1"}),(0,A.jsx)("div",{className:"z-20 -ml-2 mt-1 h-7 w-7 rounded-full bg-gray1"}),(0,A.jsx)("div",{className:"z-10 -ml-2 mt-1 h-7 w-7 rounded-full bg-gray1"})]}):(0,A.jsxs)("div",{className:"mt-5",children:[(0,A.jsx)("div",{className:"mb-2 h-5 w-10/12 bg-gray1"}),(0,A.jsx)("div",{className:"h-5 w-9/12 bg-gray1"})]})]})})},H=e=>{let{failedLoadMessage:t,tryAgainMessage:r,tryAgainAriaLabelMessage:s}=e,a=()=>{window.location.reload()};return(0,A.jsxs)("div",{className:"absolute left-1/2 top-1/2 z-30 h-28 w-80 -translate-x-2/4 -translate-y-2/4 transform text-center text-lg font-medium",children:[(0,A.jsx)("div",{className:"pb-4","data-testid":"failed-message",children:t}),(0,A.jsx)("button",{className:"no-underline",role:"navigation","aria-label":s,onClick:a,"data-testid":"try-again-button",children:r})]})},_=["hasError","visibleItemsCount","skeletonDescription","skeletonItemClassName","className"];function F(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);t&&(s=s.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,s)}return r}let K=e=>{let{hasError:t,visibleItemsCount:r,skeletonDescription:s,skeletonItemClassName:a,className:n}=e,o=(0,E.Z)(e,_),c=Array.from(Array(r).keys());return(0,A.jsxs)("ul",{className:i()("relative ml-0 flex w-full list-none justify-between md:pl-0",n),"data-testid":"SkeletonLoader",children:[t&&(0,A.jsx)(H,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?F(Object(r),!0).forEach(function(t){(0,l.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):F(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}({},o)),c.map(e=>(0,A.jsx)("li",{className:"mr-5","data-testid":"skeleton-item",children:(0,A.jsx)(U,{className:a,descriptionType:s})},e))]})};var V=(0,c.memo)(K);function X(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);t&&(s=s.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,s)}return r}function q(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?X(Object(r),!0).forEach(function(t){(0,l.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):X(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let Y=(0,d.vU)({seeAll:{id:"seeAllLink.seeAll",defaultMessage:"See all"},seeAllCategoryEvents:{id:"seeAllLink.seeAllCategoryEvents",defaultMessage:"See all {CATEGORY} events"},seeMoreSavedEvents:{id:"seeMoreLink.seeMoreSavedEvents",defaultMessage:"More saved events"},seeAllDefaultEvents:{id:"seeAllLink.seeAllDefaultEvents",defaultMessage:"See all events"},seeAllGroups:{id:"seeAllLink.seeAllGroups",defaultMessage:"See all groups"},eventsFailedToLoad:{id:"eventShelfLoadingState.eventsFailedToLoad",defaultMessage:"Events failed to load"},tryAgainButton:{id:"eventShelfLoadingState.tryAgainButton",defaultMessage:"Try again"},errorStateAriaLabel:{id:"eventShelfLoadingState.errorStateAriaLabel",defaultMessage:"Events failed to load, try again by reloading the page"}}),Q=(e,t,r)=>{let s="",a=e.formatMessage(Y.seeAll);return"groups"===t?(s=e.formatMessage(Y.seeAllGroups),a=e.formatMessage(Y.seeAllGroups)):t===g.K4.SAVED?(s=e.formatMessage(Y.seeMoreSavedEvents),a=e.formatMessage(Y.seeMoreSavedEvents)):s=t&&r?e.formatMessage(Y.seeAllCategoryEvents,{CATEGORY:r.toLowerCase()}):e.formatMessage(Y.seeAllDefaultEvents),{mobile:s,desktop:a}},W=(e,t,r)=>"groups"===t?"/groups":j({location:e,shortName:t,isPregenerated:r}),J=(0,n.Z)("ul")({name:"ListTabletStyled",class:"llz4ox5",vars:{"llz4ox5-0":[e=>{let{translateX:t}=e;return`translateX(${-t}px)`}]}}),ee=(0,n.Z)("ul")({name:"ListStyled",class:"luhu1ea",vars:{"luhu1ea-0":[e=>{let{translateX:t}=e;return`translateX(${-t}px)`}]}}),et=e=>{let{isTabletView:t,translateX:r,className:s,children:a,onScroll:l}=e;return t?(0,A.jsx)(J,{onScroll:l,translateX:r,className:s,children:a}):(0,A.jsx)(ee,{onScroll:l,translateX:r,className:s,children:a})},er=e=>{let{userLocation:t,loading:r,error:s,headerText:a="",children:l,containerName:n,itemsData:o,isPregenerated:d,alwaysDisplayIfDataExists:x,seeAllCopy:p,seeAllUrl:b,isLargeSeeAllButton:v,seeAllEventLabel:j,hideTitles:E,emptyStateWidget:C,reduceScrollConstraint:S,isTabletView:k,listComponentClasses:L="space-x-5",onActiveItemChange:P}=e,{page:M,resetPage:D,onScrollLeft:I}=(0,c.useContext)(w.r),G=(0,u.Z)(),$=(0,f.Z)(o.length),z=k?y.Q_:y.ph,U=k?y.F3:y.Xe,H=!C&&0===o.length||r,_=!x||x&&o.length>=o.visibleCount;if(s&&console.error("Error fetching shelf: ",s),(0,c.useEffect)(()=>{M&&$.current&&o.length&&$.current>o.length?($.current=o.length,I()):M&&o.length<=o.visibleCount&&D()},[M,D,o,$,I]),!r&&o.length<o.visibleCount&&!x&&!s)return null;let F=_&&0!==o.length&&M>0&&!s,K=_&&0!==o.length&&M<o.length-o.visibleCount&&!s,{mobile:X,desktop:J}=p||Q(G,o.shortName,a),ee=b||W(t,o.shortName,d),er=o.shortName===g.K4.SAVED&&o.length<o.visibleCount+1||"groups"===o.shortName&&o.length<g.vc||o.name===g.wQ.UPCOMING,es={[`${y.vR} ${U} md:px-0`]:S},ea=e=>{if(P){let t=e.target.children,r=[...t].filter(e=>!!e.innerHTML).map(e=>Math.abs(e.getBoundingClientRect().x)),s=r.indexOf(Math.min(...r));P(s)}};return(0,A.jsxs)("section",{id:o.name,"aria-busy":H,"aria-label":a,children:[!E&&(0,A.jsx)(Z,{headerText:a??"",children:!er&&X&&J&&(0,A.jsx)(N.ZP,{greaterThanOrEqual:"md",children:(0,A.jsx)(B,{mobileCopy:X,desktopCopy:J,isLarge:v,route:ee,dataElementName:(0,O.m)("carouselShelf","seeAll",a??""),dataEventLabel:j})})}),(0,A.jsxs)("div",{className:"relative pt-4 sm:pt-8",children:[F&&(0,A.jsx)(A.Fragment,{children:k?(0,A.jsx)(N.ZP,{greaterThanOrEqual:"xl",children:(0,A.jsx)(R,{"data-event-label":"Carousel Left Button","data-element-name":(0,O.m)(n,"chevron",a??""),children:(0,A.jsx)("div",{className:"absolute left-[9px] top-[10px]",children:(0,A.jsx)(m.ZP,{icon:"caretLeft",outline:!0,size:16,svgClassName:"stroke-current stroke-1 text-black"})})})}):(0,A.jsx)(N.ZP,{greaterThanOrEqual:"sm",children:(0,A.jsx)(R,{"data-event-label":"Carousel Left Button","data-element-name":(0,O.m)(n,"chevron",a??""),children:(0,A.jsx)("div",{className:"absolute left-[9px] top-[10px]",children:(0,A.jsx)(m.ZP,{icon:"caretLeft",outline:!0,size:16,svgClassName:"stroke-current stroke-1 text-black"})})})})}),(0,A.jsx)("div",{className:i()("overflow-hidden",{[`-mx-${y.O2} sm:-mx-${z} md:mx-0`]:S}),children:(0,A.jsx)("div",{children:H||s?(0,A.jsx)(V,{visibleItemsCount:o.visibleCount,hasError:Boolean(s),tryAgainMessage:(0,A.jsx)(h.Z,q({},Y.tryAgainButton)),tryAgainAriaLabelMessage:Y.errorStateAriaLabel.defaultMessage,failedLoadMessage:(0,A.jsx)(h.Z,q({},Y.eventsFailedToLoad)),className:i()(es)}):(0,A.jsxs)(et,{translateX:M*o.width,isTabletView:k,onScroll:ea,className:i()("flex transform-gpu list-none",L,es),children:[c.Children.map(l,e=>(0,A.jsx)("li",{className:"flex-shrink-0 w-auto flex-grow-0",children:e})),!!C&&o.length<o.visibleCount&&(0,A.jsx)("li",{className:"w-auto flex-1",children:C}),S&&(0,A.jsx)("li",{className:"w-auto md:hidden",children:(0,A.jsx)("div",{className:"w-px"})})]})})}),K&&(0,A.jsx)(A.Fragment,{children:k?(0,A.jsx)(N.ZP,{greaterThanOrEqual:"xl",children:(0,A.jsx)(T,{"data-event-label":"Carousel Right Button","data-element-name":(0,O.m)(n,"chevron",a??""),children:(0,A.jsx)("div",{className:"absolute left-[9px] top-[10px]",children:(0,A.jsx)(m.ZP,{icon:"caretRight",outline:!0,size:16,svgClassName:"stroke-current stroke-1 text-black"})})})}):(0,A.jsx)(N.ZP,{greaterThanOrEqual:"sm",children:(0,A.jsx)(T,{"data-event-label":"Carousel Right Button","data-element-name":(0,O.m)(n,"chevron",a??""),children:(0,A.jsx)("div",{className:"absolute left-[9px] top-[10px]",children:(0,A.jsx)(m.ZP,{icon:"caretRight",outline:!0,size:16,svgClassName:"stroke-current stroke-1 text-black"})})})})})]}),!er&&!E&&(0,A.jsx)(N.ZP,{lessThan:"md",className:"mt-5",children:(0,A.jsx)(B,{mobileCopy:X,desktopCopy:J,isLarge:v,route:ee,dataElementName:(0,O.m)("carouselShelf","seeAll",a??"")})})]})};var es=er;r(59020)},68283:function(e,t,r){"use strict";r.d(t,{r:function(){return l}});var s=r(50959),a=r(11527);let l=(0,s.createContext)({page:0,onScrollLeft:()=>{},onScrollRight:()=>{},resetPage:()=>{}}),n=e=>{let{children:t}=e,{0:r,1:n}=(0,s.useState)(0),o=(0,s.useCallback)(()=>{n(r-1)},[r,n]),i=(0,s.useCallback)(()=>{n(r+1)},[r,n]),c=(0,s.useCallback)(()=>{n(0)},[]),d=(0,s.useMemo)(()=>({page:r,onScrollLeft:o,onScrollRight:i,resetPage:c}),[r,o,i,c]);return(0,a.jsx)(l.Provider,{value:d,children:t})};t.Z=n},22521:function(e,t,r){"use strict";var s,a;let l,n;r.d(t,{K4:function(){return n},Oh:function(){return o},vc:function(){return i},wQ:function(){return l}}),(s=l||(l={})).RECOMMENDED="recommended",s.SAVED="saved",s.NEARBY="nearby",s.TECH="tech",s.CAREER="career",s.HEALTH="health",s.LEARNING="learning",s.SOCIAL="social",s.OUTDOOR="outdoors",s.NOW="starting-soon",s.RECOMMENDED_ONLINE="recommended-online",s.SUGGESTED="suggested",s.UPCOMING="upcoming",(a=n||(n={})).RECOMMENDED="recommended",a.SAVED="saved",a.NEARBY="nearby",a.TECH="tech",a.CAREER="career-business",a.HEALTH="health-wellness",a.LEARNING="education",a.SOCIAL="social",a.OUTDOOR="outdoors-adventure",a.NOW="starting-soon",a.RECOMMENDED_ONLINE="recommended-online",a.SUGGESTED="suggested";let o=8,i=9},59020:function(e){e.exports={llz4ox5:"llz4ox5",luhu1ea:"luhu1ea"}},5e3:function(e){e.exports={by3xc9a:"by3xc9a"}}}]);