"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[92249],{92249:function(e,t,n){n.d(t,{h:function(){return _}});var o,r=!!("undefined"!=typeof window&&window.document&&window.document.createElement),i=void 0;function s(e){e.handlers===e.nextHandlers&&(e.nextHandlers=e.handlers.slice())}function l(e){this.target=e,this.events={}}l.prototype.getEventHandlers=function(e,t){var n=String(e)+" "+String(t?!0===t?100:(t.capture<<0)+(t.passive<<1)+(t.once<<2):0);return this.events[n]||(this.events[n]={handlers:[],handleEvent:void 0},this.events[n].nextHandlers=this.events[n].handlers),this.events[n]},l.prototype.handleEvent=function(e,t,n){var o=this.getEventHandlers(e,t);o.handlers=o.nextHandlers,o.handlers.forEach(function(e){e&&e(n)})},l.prototype.add=function(e,t,n){var o=this,r=this.getEventHandlers(e,n);s(r),0===r.nextHandlers.length&&(r.handleEvent=this.handleEvent.bind(this,e,n),this.target.addEventListener(e,r.handleEvent,n)),r.nextHandlers.push(t);var i=!0;return function(){if(i){i=!1,s(r);var l=r.nextHandlers.indexOf(t);r.nextHandlers.splice(l,1),0===r.nextHandlers.length&&(o.target&&o.target.removeEventListener(e,r.handleEvent,n),r.handleEvent=void 0)}}};var a="__consolidated_events_handlers__";function c(e,t,n,o){e[a]||(e[a]=new l(e));var s=o?(void 0===i&&(i=function(){if(!r||!window.addEventListener||!window.removeEventListener||!Object.defineProperty)return!1;var e=!1;try{var t=Object.defineProperty({},"passive",{get:function(){e=!0}}),n=function(){};window.addEventListener("testPassiveEventSupport",n,t),window.removeEventListener("testPassiveEventSupport",n,t)}catch(e){}return e}()),i)?o:!!o.capture:void 0;return e[a].add(t,n,s)}var p=n(50959),u=n(56237);function f(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function v(e){return(v=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function d(e,t){return(d=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function h(e,t){var n=!isNaN(parseFloat(e))&&isFinite(e)?parseFloat(e):"px"===e.slice(-2)?parseFloat(e.slice(0,-2)):void 0;if("number"==typeof n)return n;var o=function(e){if("%"===e.slice(-1))return parseFloat(e.slice(0,-1))/100}(e);if("number"==typeof o)return o*t}var w="above",y="inside",b="below",m="invisible";function g(e){return"string"==typeof e.type}var E=[];function T(e){E.push(e),o||(o=setTimeout(function(){var e;for(o=null;e=E.shift();)e()},0));var t=!0;return function(){if(t){t=!1;var n=E.indexOf(e);-1!==n&&(E.splice(n,1),!E.length&&o&&(clearTimeout(o),o=null))}}}var _=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&d(e,t)}(s,e);var t,o,r,i=(t=function(){if("undefined"==typeof Reflect||!Reflect.construct||Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],function(){})),!0}catch(e){return!1}}(),function(){var e,n,o=v(s);if(t){var r=v(this).constructor;n=Reflect.construct(o,arguments,r)}else n=o.apply(this,arguments);return(e=n)&&("object"==typeof e||"function"==typeof e)?e:function(e){if(void 0===e)throw ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(this)});function s(e){var t;return!function(e,t){if(!(e instanceof t))throw TypeError("Cannot call a class as a function")}(this,s),(t=i.call(this,e)).refElement=function(e){t._ref=e},t}return o=[{key:"componentDidMount",value:function(){var e=this;s.getWindow()&&(this.cancelOnNextTick=T(function(){e.cancelOnNextTick=null;var t=e.props,n=t.children;t.debug,function(e,t){if(e&&!g(e)&&!t)throw Error("<Waypoint> needs a DOM element to compute boundaries. The child you passed is neither a DOM element (e.g. <div>) nor does it use the innerRef prop.\n\nSee https://goo.gl/LrBNgw for more info.")}(n,e._ref),e._handleScroll=e._handleScroll.bind(e),e.scrollableAncestor=e._findScrollableAncestor(),e.scrollEventListenerUnsubscribe=c(e.scrollableAncestor,"scroll",e._handleScroll,{passive:!0}),e.resizeEventListenerUnsubscribe=c(window,"resize",e._handleScroll,{passive:!0}),e._handleScroll(null)}))}},{key:"componentDidUpdate",value:function(){var e=this;s.getWindow()&&this.scrollableAncestor&&!this.cancelOnNextTick&&(this.cancelOnNextTick=T(function(){e.cancelOnNextTick=null,e._handleScroll(null)}))}},{key:"componentWillUnmount",value:function(){s.getWindow()&&(this.scrollEventListenerUnsubscribe&&this.scrollEventListenerUnsubscribe(),this.resizeEventListenerUnsubscribe&&this.resizeEventListenerUnsubscribe(),this.cancelOnNextTick&&this.cancelOnNextTick())}},{key:"_findScrollableAncestor",value:function(){var e=this.props,t=e.horizontal,o=e.scrollableAncestor;if(o)return"window"===o?n.g.window:o;for(var r=this._ref;r.parentNode&&(r=r.parentNode)!==document.body;){var i=window.getComputedStyle(r),s=(t?i.getPropertyValue("overflow-x"):i.getPropertyValue("overflow-y"))||i.getPropertyValue("overflow");if("auto"===s||"scroll"===s||"overlay"===s)return r}return window}},{key:"_handleScroll",value:function(e){if(this._ref){var t=this._getBounds(),n=t.viewportBottom-t.viewportTop==0?m:t.viewportTop<=t.waypointTop&&t.waypointTop<=t.viewportBottom||t.viewportTop<=t.waypointBottom&&t.waypointBottom<=t.viewportBottom||t.waypointTop<=t.viewportTop&&t.viewportBottom<=t.waypointBottom?y:t.viewportBottom<t.waypointTop?b:t.waypointTop<t.viewportTop?w:m,o=this._previousPosition,r=this.props,i=(r.debug,r.onPositionChange),s=r.onEnter,l=r.onLeave,a=r.fireOnRapidScroll;if(this._previousPosition=n,o!==n){var c={currentPosition:n,previousPosition:o,event:e,waypointTop:t.waypointTop,waypointBottom:t.waypointBottom,viewportTop:t.viewportTop,viewportBottom:t.viewportBottom};i.call(this,c),n===y?s.call(this,c):o===y&&l.call(this,c),a&&(o===b&&n===w||o===w&&n===b)&&(s.call(this,{currentPosition:y,previousPosition:o,event:e,waypointTop:t.waypointTop,waypointBottom:t.waypointBottom,viewportTop:t.viewportTop,viewportBottom:t.viewportBottom}),l.call(this,{currentPosition:n,previousPosition:y,event:e,waypointTop:t.waypointTop,waypointBottom:t.waypointBottom,viewportTop:t.viewportTop,viewportBottom:t.viewportBottom}))}}}},{key:"_getBounds",value:function(){var e,t,n=this.props,o=n.horizontal;n.debug;var r=this._ref.getBoundingClientRect(),i=r.left,s=r.top,l=r.right,a=r.bottom;this.scrollableAncestor===window?(e=o?window.innerWidth:window.innerHeight,t=0):(e=o?this.scrollableAncestor.offsetWidth:this.scrollableAncestor.offsetHeight,t=o?this.scrollableAncestor.getBoundingClientRect().left:this.scrollableAncestor.getBoundingClientRect().top);var c=this.props,p=c.bottomOffset,u=h(c.topOffset,e),f=h(p,e),v=t+e;return{waypointTop:o?i:s,waypointBottom:o?l:a,viewportTop:t+u,viewportBottom:v-f}}},{key:"render",value:function(){var e=this,t=this.props.children;return t?g(t)||(0,u.isForwardRef)(t)?p.cloneElement(t,{ref:function(n){e.refElement(n),t.ref&&("function"==typeof t.ref?t.ref(n):t.ref.current=n)}}):p.cloneElement(t,{innerRef:this.refElement}):p.createElement("span",{ref:this.refElement,style:{fontSize:0}})}}],f(s.prototype,o),r&&f(s,r),s}(p.PureComponent);_.above=w,_.below=b,_.inside=y,_.invisible=m,_.getWindow=function(){if("undefined"!=typeof window)return window},_.defaultProps={debug:!1,scrollableAncestor:void 0,children:void 0,topOffset:"0px",bottomOffset:"0px",horizontal:!1,onEnter:function(){},onLeave:function(){},onPositionChange:function(){},fireOnRapidScroll:!0},_.displayName="Waypoint"}}]);