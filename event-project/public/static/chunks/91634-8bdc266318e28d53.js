(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[91634],{48151:function(e,t,n){"use strict";n.d(t,{o:function(){return d}});var r=n(11217),o=n(74596),i=n(61439);function l(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function s(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?l(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):l(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let u={},c=o.Ps`
  mutation submitFeedback($input: SubmitFeedbackInput!) {
    submitFeedback(input: $input) {
      errors {
        code
        message
      }
    }
  }
`;function d(e){let t=s(s({},u),e);return i.D(c,t)}},36672:function(e,t,n){"use strict";n.d(t,{A_:function(){return v},EE:function(){return a},Ro:function(){return u},Up:function(){return s},X_:function(){return c},iP:function(){return l},vJ:function(){return i}});var r=n(22754),o=n(21754);let i=(e,t)=>{var n;let o=null==e?void 0:null===(n=e.edges)||void 0===n?void 0:n.map(e=>null==e?void 0:e.node),i=null==o?void 0:o.filter(e=>{var n,o;return(null==e?void 0:null===(n=e.inviter)||void 0===n?void 0:n.id)===t||(null==e?void 0:null===(o=e.invitee)||void 0===o?void 0:o.id)===t&&(null==e?void 0:e.status)===r.UN.Active});return(null==i?void 0:i.length)||0},l=(e,t,n)=>{if(!n)return null;let r=i(e,t);return n-r},s=e=>{let{hours:t,minutes:n,seconds:r}=e;return!t&&!r&&1===n},u=e=>{let{hours:t,minutes:n,seconds:r}=e;return 3600*t+60*n+r},c=e=>new Date(1e3*e).toISOString().slice(11,19),d=/PT(-?\d+H)?(-?\d+M)?(-?\d+S)?$/,a=e=>{let[,t,n,r]=(null==e?void 0:e.match(d))||[];return{hours:Number((null==t?void 0:t.replace("H",""))||""),minutes:Number((null==n?void 0:n.replace("M",""))||""),seconds:Number((null==r?void 0:r.replace("S",""))||"")}},v=(e,t,n,i,l,s)=>{var u;let c=n===r.UN.Pending,d=(null==i?void 0:i.status)===r.UN.Pending&&(null==i?void 0:null===(u=i.inviter)||void 0===u?void 0:u.id)===l,a=!t&&(e<1||c||d)?`${(0,o.E8U)()}${s?`/?upsellHeader=${s}`:""}`:null;return a}},98447:function(e,t,n){"use strict";n.d(t,{DL:function(){return d},MQ:function(){return r},Oi:function(){return i},R:function(){return s},RW:function(){return u},_v:function(){return l},bX:function(){return o},pH:function(){return c},rm:function(){return a}});let r="Xp1jP7YEBYQeUKnocUPkkO",o="Aw4MAggLCggNCAABBAsCCQ",i="whatsWorthwhile",l="whyNot",s="howWasEvent",u="wouldYouGoDidntGo",c="attendAgain",d="additionalFeedback",a="noop"},17305:function(e,t,n){"use strict";var r=n(19803),o=n.n(r),i=n(73193),l=n(16986),s=n(11527);let u=e=>{let{count:t,members:n,isShowAdditionalCount:r}=e;return(0,s.jsx)("ul",{className:o()("relative flex h-[56px] w-[112px]","u9erjvc"),children:null==n?void 0:n.map((e,u)=>{let{name:c,photo:d}=e,a=u===n.length-1;return(0,s.jsxs)("li",{className:"absolute h-full w-[56px] rounded-full border border-2 border-white bg-gray4",style:{left:32*u},children:[(0,s.jsx)(l.mq,{width:52,height:52,name:c,memberPhotoUrl:null!=d&&d.id?(0,l.J1)(null==d?void 0:d.id,l.Dy.HIGHRES):null}),a&&!!t&&r&&(0,s.jsxs)(s.Fragment,{children:[(0,s.jsx)("div",{className:"d12osj2x"}),(0,s.jsxs)("div",{className:o()("ds-font-small-medium absolute left-[50%] top-[50%] text-white","dvx0s4g"),children:["+",(0,s.jsx)(i.BK,{value:t,notation:"compact"})]})]})]},u)})})};t.Z=u,n(37553)},91634:function(e,t,n){"use strict";let r;n.d(t,{Z:function(){return B}});var o,i=n(11217),l=n(19803),s=n.n(l),u=n(50959),c=n(36122),d=n(80417),a=n(44636),v=n(73193);let m=(0,v.vU)({expiresIn:{id:"connectionsPrompt.expiresIn",defaultMessage:"Expires in {HOURS, plural, one {# hour} other {# hours}}"},expiresSoon:{id:"connectionsPrompt.expiresSoon",defaultMessage:"Expires soon"},connectWith:{id:"connectionsPrompt.connectWith",defaultMessage:"Connect with someone you met..."},connectNow:{id:"connectionsPrompt.connectNow",defaultMessage:"Connect now"},didntGo:{id:"connectionsPrompt.didntGo",defaultMessage:"I didn’t go"},smthWentWrong:{id:"connectionsPrompt.smthWentWrong",defaultMessage:"Something went wrong. Please try again."},timeRunningOut:{id:"connectionsPrompt.timeRunningOut",defaultMessage:"Time is running out!"}});var p=n(46990),b=n(10474),f=n(17305),g=n(34677),h=n(21754),j=n(48151),O=n(98447),w=n(71511),P=n(74596),x=n(61439);function y(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function k(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?y(Object(n),!0).forEach(function(t){(0,i.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):y(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let S={},E=P.Ps`
  mutation suppressFeedback($input: SupressFeedbackInput!) {
    suppressFeedback(input: $input) {
      errors {
        code
        message
      }
    }
  }
`;var N=n(89281),C=n(76185);function D(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function R(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?D(Object(n),!0).forEach(function(t){(0,i.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):D(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let U={},Z=P.Ps`
  query getRecentEventForFeedback($filter: RsvpFilter) {
    homePrompt {
      ... on PostEventFeedbackPrompt {
        recentEventForFeedback {
          event {
            id
            title
            dateTime
            eventUrl
            eventHosts {
              memberId
            }
            featuredEventPhoto {
              id
              source: highResUrl
              baseUrl
            }
            group {
              id
              urlname
              name
              keyGroupPhoto {
                id
                source: highResUrl
                baseUrl
              }
            }
            memberConnectionSelectionWindow
            fundraising {
              enabled
            }
            rsvps(filter: $filter, first: 6, sort: { sortOrder: DESC }) {
              totalPotentialConnectionsCount
              edges {
                node {
                  member {
                    id
                    name
                    isOrganizer
                    isMemberPlusSubscriber
                    memberPhoto {
                      id
                      baseUrl
                      highResUrl
                    }
                  }
                  venue {
                    venueType
                  }
                }
              }
            }
          }
        }
      }
    }
  }
`;var F=n(81817),I=n(36672),M=n(29799);let W="connectionsPromptDismissedEventId",A=e=>{var t,n,r,o,i;let l=(0,F.$V)()?null===(t=localStorage)||void 0===t?void 0:t.getItem(W):"",{data:s}=function(e){let t=R(R({},U),e);return C.a(Z,t)}({skip:e,variables:{filter:{potentialMemberConnections:!0}},context:{uri:N.M}}),c=null==s?void 0:null===(n=s.homePrompt)||void 0===n?void 0:null===(r=n.recentEventForFeedback)||void 0===r?void 0:r.event;(0,u.useEffect)(()=>{if(e&&l){var t;null===(t=localStorage)||void 0===t||t.removeItem(W)}},[e,l]);let d=(0,I.EE)(null==c?void 0:c.memberConnectionSelectionWindow),a=l===(null==c?void 0:c.id)||!(null!=c&&null!==(o=c.rsvps)&&void 0!==o&&null!==(i=o.edges)&&void 0!==i&&i.length)||(null==c?void 0:c.memberConnectionSelectionWindow)===M.SB;return{eventForFeedback:a?null:c,timeRemaining:a?null:d}};var $=n(76944);(o=r||(r={})).View="view-connection-modal",o.ConnectNow="connect-now";var H=n(95951),G=n(11527);function V(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function _(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?V(Object(n),!0).forEach(function(t){(0,i.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):V(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let q=e=>{var t,n,o,i;let{forceLoggedOut:l}=e,{0:v,1:P}=(0,u.useState)(!1),{formatMessage:y}=(0,c.Z)(),N=(0,H.ZP)(),[C]=(0,j.o)(),{sendNotification:D}=(0,w.ZP)(),[R]=function(e){let t=k(k({},S),void 0);return x.D(E,t)}(),{eventForFeedback:U,timeRemaining:Z}=A(l),F=(null==U?void 0:null===(t=U.rsvps)||void 0===t?void 0:null===(n=t.edges)||void 0===n?void 0:n.length)>0&&!N,{featuredEventPhoto:M,group:V,title:q,rsvps:B,id:T}=U||{},{keyGroupPhoto:z,name:L}=V||{},{hours:Q}=Z||{},Y=!(0,I.Up)(Z||{}),X=async()=>{var e;null===(e=localStorage)||void 0===e||e.setItem(W,T),P(!0),await R({variables:{input:{eventId:T,suppress:!0}}})},J=async()=>{try{var e,t;let n=await C({variables:{input:{eventId:T,surveyId:O.MQ,responses:[{answerValue:O.RW,questionValue:O.R}]}}});if(null!=n&&null!==(e=n.data)&&void 0!==e&&null!==(t=e.submitFeedback)&&void 0!==t&&t.errors)throw Error("error");X()}catch(e){D(y(m.smthWentWrong),{type:w.Dy.ERROR,autoClose:!0})}},K=null==B?void 0:B.edges.map(e=>{var t,n,r,o,i,l;let{node:s}=e;return{id:null==s?void 0:null===(t=s.member)||void 0===t?void 0:t.id,name:null==s?void 0:null===(n=s.member)||void 0===n?void 0:n.name,photo:{id:null==s?void 0:null===(r=s.member)||void 0===r?void 0:null===(o=r.memberPhoto)||void 0===o?void 0:o.id,source:null==s?void 0:null===(i=s.member)||void 0===i?void 0:null===(l=i.memberPhoto)||void 0===l?void 0:l.highResUrl}}});return((0,u.useEffect)(()=>{!v&&F&&setTimeout(()=>{(0,$.ZP)({event:"gaEvent",eventCategory:r.View,eventAction:"view",eventLabel:r.View})},2500)},[v,F]),v||!F)?null:(0,G.jsxs)("div",{"data-event-category":r.View,children:[(0,G.jsx)("div",{className:"absolute inset-0 z-50 block bg-gray7 bg-opacity-80 sm:hidden",onClick:X}),(0,G.jsxs)("div",{className:s()("fixed bottom-0 right-0 z-modal w-full rounded-t-2xl bg-white px-4 pt-[55px] pb-[35px] sm:right-6 sm:w-[393px]","d1skqyhi"),"data-testId":"connections-prompt",children:[(0,G.jsx)("button",{className:"absolute top-4 right-4 p-1",onClick:X,"data-testid":"close-connections-prompt",children:(0,G.jsx)(p.ZP,{icon:"close",outline:!0})}),(0,G.jsx)("div",{className:"ds-font-tiny-medium mb-2 max-w-[fit-content] rounded-lg bg-marigold py-1 px-2 text-ds-mustard900",children:Y?(0,G.jsx)(d.Z,_(_({},Q<1?m.expiresSoon:m.expiresIn),{},{values:{HOURS:Q}})):(0,G.jsx)(d.Z,_({},m.timeRunningOut))}),(0,G.jsxs)("div",{className:"mb-6 flex items-center rounded-2xl bg-ds-neutral50 py-3 px-4",children:[(0,G.jsx)(b.Z,{photo:M||z,imageClassName:"rounded-xl h-full object-cover object-center",title:q||"",imageSize:{maxWidth:48,maxHeight:48}}),(0,G.jsxs)("div",{className:"ds-font-small ml-2 flex-1",children:[L,": ",q]})]}),(0,G.jsxs)("div",{className:"mb-6",children:[(0,G.jsx)("h3",{className:"ds-font-title-3 mb-2",children:(0,G.jsx)(d.Z,_({},m.connectWith))}),(0,G.jsx)(f.Z,{members:K,count:B.totalPotentialConnectionsCount-(null==B?void 0:null===(o=B.edges)||void 0===o?void 0:o.length),isShowAdditionalCount:(null==B?void 0:null===(i=B.edges)||void 0===i?void 0:i.length)>=6})]}),(0,G.jsx)(g.Z,{variant:a.c7.PRIMARY,className:"mx-auto mb-4 block w-full max-w-[345px] text-center font-medium",href:(0,h.r6c)(null==V?void 0:V.urlname,T,window.location.href),"data-event-label":r.ConnectNow,children:(0,G.jsx)(d.Z,_({},m.connectNow))}),(0,G.jsx)(a.ZP,{variant:a.c7.SIMPLE,className:"ds-font-small-medium mx-auto block underline",onClick:J,children:(0,G.jsx)(d.Z,_({},m.didntGo))})]})]})};var B=q;n(22626)},37553:function(e){e.exports={u9erjvc:"u9erjvc",d12osj2x:"d12osj2x",dvx0s4g:"dvx0s4g"}},22626:function(e){e.exports={d1skqyhi:"d1skqyhi"}}}]);