(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[59055],{47208:function(e,t,r){"use strict";r.d(t,{Z:function(){return i}});var n=r(22340),o=r(99157);function i(e,t){(0,o.Z)(2,arguments);var r=(0,n.Z)(e),i=(0,n.Z)(t);return r.getTime()>i.getTime()}},71879:function(e,t,r){var n=r(43846),o=r(20426);e.exports=function(e,t,r){return e&&e.length?n(e,0,(t=r||void 0===t?1:o(t))<0?0:t):[]}},11137:function(e,t,r){"use strict";r.d(t,{G0:function(){return w},KV:function(){return v},Ls:function(){return L},ME:function(){return y},Md:function(){return b},R7:function(){return i},TG:function(){return A},Um:function(){return P},V1:function(){return o},Ww:function(){return T},Y:function(){return x},bf:function(){return h},bh:function(){return u},cl:function(){return N},i:function(){return p},mw:function(){return C},rT:function(){return Z},ub:function(){return M},vN:function(){return d},wM:function(){return j},wi:function(){return s},yh:function(){return S},z9:function(){return O}});var n=r(74596);let o=n.Ps`
  fragment GroupSettingsTopic on Topic {
    urlkey
    id
    name
  }
`,i=n.Ps`
  fragment PhotoDetails on Image {
    id
    baseUrl
    source
  }
`,s=n.Ps`
  fragment BasicGroupSettings on GroupSettings {
    id
    name
    description
    customMemberLabel
    country
    zip
    city
    urlname
    emailListAddress
    link
    socialNetworks {
      service
      identifier
      status
    }
    activeTopics {
      ...GroupSettingsTopic
    }
    recommendedTopics(first: 5) {
      edges {
        node {
          ...GroupSettingsTopic
        }
      }
    }
    groupPhoto {
      ...PhotoDetails
    }
    video {
      url
    }
  }
  ${o}
  ${i}
`,a=n.Ps`
  fragment GroupDetails on Group {
    id
    name
    urlname
    timezone
    link
    city
    state
    country
    groupPhoto {
      ...PhotoDetails
    }
  }
  ${i}
`,l=n.Ps`
  fragment BuildMeetupGroup on Group {
    id
    slug
    isPrivate
    isOrganizer
    isNewGroup
    ...GroupDetails
  }
  ${a}
`,c=n.Ps`
  fragment TicketsConnection on EventTicketsConnection {
    count
    edges {
      node {
        id
        user {
          id
          name
          memberPhoto {
            ...PhotoDetails
          }
        }
      }
    }
  }
  ${i}
`,u=n.Ps`
  fragment BuildMeetupEvent on Event {
    id
    title
    dateTime
    endTime
    description
    duration
    timezone
    eventType
    currency
    images {
      ...PhotoDetails
    }
    venue {
      id
      address
      neighborhood
      city
      state
      country
      lat
      lng
      zoom
      name
      radius
    }
    onlineVenue {
      type
      url
    }
    isSaved
    eventUrl
    group {
      ...BuildMeetupGroup
    }
    going
    maxTickets
    tickets(input: { first: 3 }) {
      ...TicketsConnection
    }
    isAttending
    rsvpState
  }
  ${i}
  ${l}
  ${c}
`;n.Ps`
  fragment CityOption on City {
    id
    name
  }
`;let d=n.Ps`
  fragment Error on PayloadError {
    code
    message
    field
  }
`;n.Ps`
  fragment EventByIdPhotoAlbum on EventPhotoAlbum {
    id
    photoCount
    photoSample(amount: $amount) {
      id
      baseUrl
      source
    }
  }
`;let p=n.Ps`
  fragment EventCalendarUrls on Event {
    id
    calendarExportUrls {
      google
      ical
      outlook
      yahoo
    }
  }
`,m=n.Ps`
  fragment EventCommentLiker on User {
    id
    name
    memberPhoto {
      baseUrl
      id
    }
  }
`,v=n.Ps`
  fragment EventCommentLikersConnection on EventCommentLikerConnection {
    count
    pageInfo {
      hasPreviousPage
      hasNextPage
      startCursor
      endCursor
    }
    edges {
      node {
        ...EventCommentLiker
      }
      memberPhoto {
        id
        baseUrl
      }
    }
  }
  ${m}
`,g=n.Ps`
  fragment EventCommentEdge on EventComment {
    id
    eventId
    text
    created
    likeCount
    link
    member {
      id
      name
      memberPhoto {
        baseUrl
        id
      }
      isMemberPlusSubscriber
      isOrganizer
    }
    memberPhoto {
      baseUrl
      id
    }
    inReplyTo
    reportLink
    isLiked
    allowedActions {
      canFlagSpam
      canDelete
      canUnlike
      canLike
    }
  }
`,f=n.Ps`
  fragment EventByIdComment on EventComment {
    ...EventCommentEdge
    replies(limit: 100, offset: 0) {
      count
      edges {
        node {
          ...EventCommentEdge
        }
      }
    }
  }
  ${g}
`,h=n.Ps`
  fragment EventCommentsConnection on EventCommentConnection {
    count
    pageInfo {
      hasPreviousPage
      hasNextPage
      startCursor
      endCursor
    }
    edges {
      node {
        ...EventByIdComment
      }
    }
  }
  ${f}
`,b=n.Ps`
  fragment EdgeBuildMeetupGroupSearch on Group {
    id
    name
    link
    description
    link
    city
    state
    country
    isPrivate
    isNewGroup
    groupPhoto {
      ...PhotoDetails
    }
    stats {
      memberCounts {
        all
      }
    }
  }
  ${i}
`,y=n.Ps`
  fragment UpcomingEventDetails on Event {
    id
    title
    eventUrl
    dateTime
    isSaved
    timezone
    isAttending
    venue {
      address
      city
      state
      country
    }
    isOnline
    eventType
    going
    maxTickets
    tickets(input: { first: 3 }) {
      ...TicketsConnection
    }
  }
  ${c}
`;n.Ps`
  fragment GroupCard on Group {
    ...EdgeBuildMeetupGroupSearch
    upcomingEvents: unifiedUpcomingEvents(input: { first: 1 }) {
      count
      edges {
        cursor
        node {
          ...UpcomingEventDetails
        }
      }
    }
  }
  ${b}
  ${y}
`;let O=n.Ps`
  fragment GroupPrivacySettings on GroupSettings {
    id
    name
    privacy
    groupPhoto {
      ...PhotoDetails
    }
  }
  ${i}
`,j=n.Ps`
  fragment GroupProNetworkMap on Group {
    id
    name
    latitude
    longitude
    city
    state
    country
    link
  }
`,w=n.Ps`
  fragment GroupsPageGroup on Group {
    id
    name
    link
    city
    urlname
    state
    country
    timezone
    urlname
    groupPhoto {
      id
      baseUrl
    }
    organizer {
      id
    }
    stepUpInfo {
      organizerNominees {
        id
      }
      closingDate
    }
  }
`;n.Ps`
  fragment LocationDetails on Location {
    city
    country
    localized_country_name
    state
    name_string
    lat
    lon
    zip
    borough
    neighborhood
  }
`;let P=n.Ps`
  fragment MemberProfileGroupsConnectionFragment on MemberProfileGroupsConnection {
    pageInfo {
      hasNextPage
      startCursor
      endCursor
    }
    edges {
      node {
        id
        name
        urlname
        groupPhoto {
          ...PhotoDetails
        }
      }
    }
  }
  ${i}
`,x=n.Ps`
  fragment MemberProfileTopicsConnectionFragment on TopicsConnection {
    pageInfo {
      hasNextPage
      startCursor
      endCursor
    }
    edges {
      node {
        id
        name
        urlkey
      }
    }
  }
`,E=n.Ps`
  fragment TicketImageDetails on Image {
    id
    baseUrl
  }
`,k=n.Ps`
  fragment TicketEventDetails on Event {
    id
    title
    dateTime
    endTime
    duration
    going
    maxTickets
    timezone
    images {
      ...TicketImageDetails
    }
    eventType
    hosts {
      id
      name
      email
    }
    group {
      id
      name
      isOrganizer
      link
      isPrivate
      city
      state
      country
      groupPhoto {
        ...TicketImageDetails
      }
    }
    isSaved
    eventUrl
    isAttending
    rsvpState
  }
  ${E}
`;n.Ps`
  fragment myRsvpTicketDetails on UserTicketsConnection {
    count
    pageInfo {
      hasNextPage
      endCursor
    }
    edges {
      cursor
      node {
        id
        event {
          ...TicketEventDetails
        }
      }
    }
  }
  ${k}
`;let C=n.Ps`
  fragment NewMembersGroupSettings on GroupSettings {
    id
    name
    joinMode
    needsPhoto
    needsQuestions
    questions {
      id
      question
      sort
    }
    welcomeBlurb
    urlname
    groupPhoto {
      ...PhotoDetails
    }
  }
  ${i}
`,N=n.Ps`
  fragment NodeId on Node {
    id
  }
`,T=n.Ps`
  fragment OAuthClientFragment on OAuthClient {
    id
    title
    applicationUrl
    redirectUrl
    key
    secret
    status
    signingKeys(input: { first: 2 }) {
      count
      edges {
        node {
          id
        }
      }
    }
  }
`,S=n.Ps`
  fragment OptionalFeaturesGroupSettings on GroupSettings {
    id
    name
    mailingListMode
    listAddress
    feeCurrency {
      iso
      description
    }
    boardsMode
    allowMemberPhotoUploads
    urlname
    groupPhoto {
      ...PhotoDetails
    }
  }
  ${i}
`;n.Ps`
  fragment PageInfoDetails on PageInfo {
    hasNextPage
    endCursor
  }
`;let D=n.Ps`
  fragment SelfTicketDetailsEvent on Event {
    title
    dateTime
    eventType
    images {
      ...PhotoDetails
    }
    venue {
      id
      address
      neighborhood
      city
      state
      country
      lat
      lng
      zoom
      name
      radius
    }
    eventUrl
    group {
      id
      name
      groupPhoto {
        ...PhotoDetails
      }
    }
    rsvpState
  }
  ${i}
`;n.Ps`
  fragment SelfTicketDetails on Ticket {
    event {
      ...SelfTicketDetailsEvent
    }
  }
  ${D}
`;let M=n.Ps`
  fragment Sponsor on GroupSponsor {
    id
    logo
    image {
      id
    }
    name
    description
    url
  }
`;n.Ps`
  fragment TicketDetails on Ticket {
    id
    slugId
    url
    event {
      ...TicketEventDetails
    }
  }
  ${k}
`,n.Ps`
  fragment TicketEventDetailsWithChatChannel on Event {
    ...TicketEventDetails
    group {
      urlname
    }
    channelUrl
  }
  ${k}
`;let A=n.Ps`
  fragment UpcomingGroupEvent on Event {
    ...UpcomingEventDetails
    group {
      ...EdgeBuildMeetupGroupSearch
    }
  }
  ${y}
  ${b}
`,U=n.Ps`
  fragment EventByIdAttendees on Ticket {
    id
    url
    isHost
    status
    guestsCount
    payStatus
    membership {
      role
      status
      memberPhoto {
        id
        baseUrl
      }
    }
    updatedAt
    answer {
      questionId
      text
    }
    event {
      id
      group {
        id
        link
      }
      timezone
      guestsAllowed
      isAttending
      maxTickets
      feeSettings {
        required
        amount
      }
      numberOfAllowedGuests
      rsvpEventQuestion {
        id
        question
      }
    }
    user {
      id
      name
      memberPhoto {
        id
        baseUrl
      }
      profilePrivacy {
        whoCanContact
      }
      commonGroups {
        count
        edges {
          node {
            id
            name
          }
        }
      }
    }
  }
`;n.Ps`
  fragment EventByIdForAttendeesPage on Event {
    id
    title
    description
    eventUrl
    dateTime
    endTime
    status
    timezone
    isAttending
    venue {
      name
      address
    }
    uiActions {
      canOpen
      canClose
      canEmailAttendees
      canDownloadAttendees
      canTakeAttendance
    }
    isOnline
    going
    maxTickets
    isNetworkEvent
    hosts {
      id
      name
      memberPhoto {
        baseUrl
        id
      }
    }
    attendingTicket {
      isHost
    }
    tickets(input: { first: $first, sort: $sort, status: $status }) {
      count
      yesCount
      noCount
      waitlistCount
      edges {
        node {
          ...EventByIdAttendees
        }
      }
    }
    group {
      id
      name
      isPrivate
      link
      joinMode
      topicCategory {
        id
        name
        urlkey
      }
      topics {
        id
        urlkey
        name
      }
      urlname
      country
      isPrimaryOrganizer
      isOrganizer
      isMember
      needsPhoto
      proNetwork {
        id
        urlname
        name
        link
        status
        isMemberEmailShared
      }
      membershipMetadata {
        status
      }
    }
  }
  ${U}
`;let I=n.Ps`
  fragment EventByIdPublic on Event {
    id
    token
    title
    description
    eventUrl
    status
    eventType
    imageUrl
    dateTime
    timezone
    endTime
    image {
      id
      source
    }
    isFeatured
    venue {
      id
      name
      address
      city
      state
      country
      lat
      lng
    }
    isOnline
    going
    maxTickets
    currency
    timeStatus
    series {
      description
    }
    waiting
    waitlistMode
    guestsAllowed
    numberOfAllowedGuests
    proCompleteRsvp {
      isEnabled
      link
    }
    topics {
      edges {
        node {
          id
          name
        }
      }
    }
    rsvpSurveySettings {
      requiresProQuestionnaire
      enabledByDefault
      isSponsored
      sponsor {
        name
        url
      }
      questions {
        questionId
        text
        type
        required
        characterLimit
      }
    }
    rsvpEventQuestion {
      id
      question
      required
      answer
    }
    images {
      baseUrl
      id
    }
    rsvpSettings {
      rsvpOpenTime
      rsvpCloseTime
    }
    covidPrecautions {
      masks
      vaccinations
      details
      venueType
    }
    isNetworkEvent
    hosts {
      id
      name
      memberPhoto {
        baseUrl
        id
      }
    }
    host {
      id
      name
      memberPhoto {
        baseUrl
        id
      }
    }
    hostPhoto {
      baseUrl
      id
    }
    waiting
    waitlistMode
    feeSettings {
      amount
      accepts
      required
      currency
      earlyBirdDiscount {
        id
        amount
        daysBefore
        maximumQuantity
        discountTicketsRemaining
      }
      hasPromoCodes
    }
    networkEvent {
      rsvpCount
      groupCount
    }
    speakerDetails {
      name
      description
      photo {
        id
        baseUrl
      }
      socialNetworks {
        service
        url
      }
    }
    group {
      id
      name
      isPrivate
      link
      joinMode
      topicCategory {
        id
        name
        urlkey
      }
      topics {
        id
        urlkey
        name
      }
      urlname
      country
      state
      city
      needsPhoto
      proNetwork {
        id
        urlname
        name
        link
        status
        isMemberEmailShared
      }
      featuredEvent {
        id
      }
      stats {
        memberCounts {
          all
        }
      }
      needsQuestions
      duesSettings {
        amount
        paymentType
        currency
        interval
        feeDescription
        trialPeriodDays
      }
      questions {
        id
        question
        sort
      }
      sponsors {
        edges {
          node {
            id
            name
            description
            url
            logo
          }
        }
      }
      groupPhoto {
        id
        baseUrl
      }
      status
    }
  }
`,G=n.Ps`
  fragment EventByIdClientOnly on Event {
    id
    token
    isSaved
    isAttending
    isFeatured
    going
    chat {
      status
    }
    venues {
      id
      eventVenueOptions {
        rsvpLimit
        guestLimit
        goingCount
        howToFindUs
        feeSettings {
          required
          amount
          accepts
          currency
        }
      }
      earlyBirdDiscount {
        id
        amount
        daysBefore
        maximumQuantity
        discountTicketsRemaining
      }
    }
    ticket {
      id
      guestsCount
      isHost
      payStatus
      venue {
        venueType
      }
    }
    communicationSettings {
      chat
      comments
    }
    howToFindUs
    uiActions {
      canAddPhotos
      canAddComments
      canAnnounce
      canDelete
      canFeature
      canUnfeature
      canEdit
      canCopy
      canEmailAttendees
      canOpen
      canClose
      canCancel
      canDeleteChatMessage
    }
    rsvpEventQuestion {
      answer
    }
    rsvpState
    channelUrl
    creatorMember {
      id
    }
    fundraising {
      enabled
    }
    networkEvent {
      rsvpCount
      groupCount
    }
    speakerDetails {
      name
      description
      photo {
        id
        baseUrl
      }
      socialNetworks {
        service
        url
      }
    }
    group {
      id
      isPrimaryOrganizer
      isOrganizer
      isMember
      featuredEvent {
        id
      }
      membershipDues {
        groupName
        amount
        currency
        interval
        trialPeriodDays
        canCheckout
        isCanceled
        isMemberExempt
        membershipInfo {
          membershipDuesStatus
          trialEndDate
          paidEndDate
          graceEndDate
        }
      }
      membershipMetadata {
        status
        memberPhoto {
          id
          baseUrl
        }
      }
      fundraising {
        enabled
        fundraiser {
          id
        }
        partner {
          url
          key
        }
      }
      stats {
        eventRatings {
          total
          average
        }
      }
      organizer {
        id
        paypalSettings {
          eventFee {
            enabled
            paypalMerchantAccount {
              id
              status
            }
          }
        }
      }
    }
  }
`,Z=n.Ps`
  fragment EventById on Event {
    ...EventByIdPublic
    ...EventByIdClientOnly
  }
  ${I}
  ${G}
`,L=n.Ps`
  fragment GroupSettingsDashboard on GroupSettings {
    id
    name
    memberDuesSettingsUrl
    groupPhoto {
      ...PhotoDetails
    }
  }
  ${i}
`;n.Ps`
  fragment GuestCardEvent on Event {
    id
    title
    eventUrl
    eventType
    dateTime
    endTime
    timezone
    images {
      baseUrl
      id
    }
    isOnline
    going
    feeSettings {
      amount
      currency
      earlyBirdDiscount {
        amount
        daysBefore
        maximumQuantity
        discountTicketsRemaining
      }
    }
    group {
      id
      name
      urlname
      groupPhoto {
        ...PhotoDetails
      }
    }
    venues {
      id
      earlyBirdDiscount {
        amount
        daysBefore
        maximumQuantity
      }
      eventVenueOptions {
        goingCount
        feeSettings {
          amount
        }
      }
    }
  }
  ${i}
`},62304:function(e,t,r){"use strict";r.d(t,{n:function(){return i}});var n=r(50959),o=r(36122);let i=e=>{var t;let{0:i,1:s}=(0,n.useState)([]),a=(0,o.Z)();(0,n.useEffect)(()=>{let e=async()=>{try{let{countries:e}=await r.e(87431).then(r.bind(r,87431));s(e)}catch(e){}};e()},[]);let l=null===(t=i.find(t=>!!t[e]))||void 0===t?void 0:t[e];return l?a.formatMessage(l):void 0}},84388:function(e,t,r){"use strict";var n=r(50959),o=r(18230);t.Z=function(e){let{parentRef:t,isOpen:r,placement:i="bottom",strategy:s="absolute",updateHash:a,popperModifiers:l}=e,c=(0,n.useRef)(),{0:u,1:d}=(0,n.useState)(!1),{styles:p,attributes:m,forceUpdate:v}=(0,o.D)(t,null==c?void 0:c.current,{placement:i,strategy:s,modifiers:l});return(0,n.useEffect)(()=>{r&&null!=c&&c.current&&d(!0),r||d(!1)},[c,r,d]),(0,n.useEffect)(()=>{v&&r&&(u||void 0!==a)&&v()},[u,v,r,a]),{styles:p,attributes:m,popupRef:c,isElementReady:u}}},16532:function(e,t,r){"use strict";r.d(t,{Z:function(){return i}});var n=r(60067),o=r(11527);function i(e){return(0,o.jsx)("main",{children:(0,o.jsx)(n.Z,{title:e.title,message:e.message,children:e.icon})})}},1970:function(e,t,r){"use strict";r.d(t,{BJ:function(){return i},GD:function(){return p},LI:function(){return s},LU:function(){return c},UK:function(){return m},XA:function(){return l},YD:function(){return v},Z2:function(){return u},bN:function(){return o},g7:function(){return d},nb:function(){return a}});var n=r(76944);let o="eventHome",i="eventChat",s="Event Chat",a="eventRSVP",l="Event RSVP",c={seeMore:"see-more-events",allAttendees:"event-all-attendees",eventAttendee:"event-attendee",infoView:"event-group",hostBy:"hosted-by",privacyGroupInfo:"privacy-group-info-group-section",addEventToCalendar:"add-event-to-calendar",addEventToCalendarGoogle:"add-event-to-calendar-google",addEventToCalendarICal:"add-event-to-calendar-ical",addEventToCalendarOutlook:"add-event-to-calendar-outlook",addEventToCalendarYahoo:"add-event-to-calendar-yahoo",forwardToAFriend:"forward-to-friend",forwardToAFriendFB:"forward-to-friend-facebook",forwardToAFriendTwitter:"forward-to-friend-twitter",forwardToAFriendLI:"forward-to-friend-linkedin",forwardToAFriendEmail:"forward-to-friend-email",eventLocation:"event-location",eventMap:"event-map",reportEvent:e=>`report-event-${e}`,eventPhoto:"event-photo",eventAllPhoto:"event-all-photos",commentSend:"comment-send",commentReply:"comment-reply",commentLike:"comment-like",viewLikes:"comment-view-likes",similarEventsNearBy:"similar-nearby-event-card",upcomingEventsNearBy:"upcoming-near-by-event-card",similarEventsNearByAllEvents:"similar-nearby-all-events",similarnearByAttend:"attend",newGroupBottom:"new-group-bottom",saveEvent:"save-event-btn-saveButton",shareEvent:"share-btn-share-click",eventRsvp:e=>`event-rsvp-${e}`,onlineEventLink:"online-event-link",onlineEventLinkContinue:"event_home_online_event_link_click",addPhoto:"add-photo",moreGroupEvents:"more-group-events",dropdown:"dropdown",organizerTool:"organizer-tool",topAnnounce:"announce",manageAttendees:"manage-attendees",contactAttendees:"contact-attendees",closeRSVP:"close-rsvps",editEvent:"edit-event",copyEvent:"copy-event",cancelEvent:"cancel-event",bannerIos:"banner-get-app-ios",bannerAndroid:"banner-get-app-android",bannerClose:"banner-get-app-close",modalConfirmCancel:"modal-confrim-cancel",rsvpGroupModal:"group-question-modal-confirm",rsvpEventModal:"event-question-modal-confirm",completeRsvpBanner:"complete-rsvp-banner",completeRsvpModal:"complete-rsvp-modal",completeRsvpActionBar:"complete-rsvp-action-bar",editRsvpGoing:"edit-rsvp-modal-confirm",editRsvpNotGoing:"edit-rsvp-modal-not-going",emailCoreToProNudge:"event-page-email-core-to-pro-nudge",emailCoreToProNudgeModalCTA:"event-home-interstitial-try-pro",upgradeToProEventHome:"upgradeEventhome-seemore",upgradeToProEventHomeModal:"upgradeEventhomeModal-seemore",organizerUpgradeToProPage:"organizerUpgradeEventhome",featureEvent:"feature-event",unfeatureEvent:"unfeature-event",featureEventConfirm:"feature-event-confirm",unfeatureEventConfirm:"unfeature-event-confirm",replaceFeaturedEventConfirm:"replace-featured-event-confirm",eventChat:"event-chat",joinEventChat:"join-event-chat",leaveEventChat:"leave-event-chat",leaveEventChatSubmit:"leave-event-chat-submit",leaveEventChatCancel:"leave-event-chat-cancel",muteEventChat:"mute-event-chat",unmuteEventChat:"unmute-event-chat",eventTopicList:"event-topic-list"},u={top:"top",body:"body",info:"info",actionBar:"action-bar"},d={RSVP:"RSVP",eventHome:"Event Home"},p=e=>{(0,n.ZP)({event:"gaEvent",eventAction:"click",eventCategory:d.eventHome,eventLabel:c.eventTopicList,eventTopic:e})},m=e=>{var t;(0,n.ZP)({event:"rsvp",ga4Event:"rsvp",eventCategory:"RSVP",eventAction:"Success",eventLabel:"Yes",eventId:e.eventId,groupId:e.groupId,isEventOnline:e.isEventOnline,eventStartTime:e.eventStartTime,socialLabels:null==e?void 0:null===(t=e.socialLabels)||void 0===t?void 0:t.join(", ").toLowerCase()})},v={host:"hosted-by",attendees:"attendees",comments:"comments",covid:"covid-measures",details:"event-details",photos:"photos",events:"events",people:"people",speaker:"speaker",sponsors:"sponsors",similarEvents:"similar-events",upcomingEventsNearBy:"upcoming-events-near-by",topics:"topics",eventGroup:"event-group",eventInfo:"event-info"}},32854:function(e,t,r){"use strict";r.d(t,{QE:function(){return s},ul:function(){return a}});var n=r(21754);let o={t5:"aberdeen-city",t6:"aberdeenshire",t7:"angus",q6:"antrim",q7:"ards",t8:"argyll-and-bute",q8:"armagh",q9:"ballymena",r1:"ballymoney",r2:"banbridge",a4:"bath-and-north-east-somerset",a5:"bedfordshire",r3:"belfast","03":"berkshire",x2:"blaenau-gwent",x3:"bridgend",b9:"buckinghamshire",x4:"caerphilly",c3:"cambridgeshire",x5:"cardiff",x7:"carmarthenshire",r4:"carrickfergus",r5:"castlereagh",x6:"ceredigion",c5:"cheshire",b7:"city-of-bristol",u8:"city-of-edinburgh",u1:"clackmannanshire",r6:"coleraine",x8:"conwy",r7:"cookstown",c6:"cornwall",r8:"craigavon",c9:"cumbria",x9:"denbighshire",d3:"derbyshire",s6:"derry-city",d4:"devon",d6:"dorset",r9:"down",u2:"dumfries-and-galloway",u3:"dundee-city",s1:"dungannon",d8:"durham",u4:"east-ayrshire",u5:"east-dunbartonshire",u6:"east-lothian",u7:"east-renfrewshire",e1:"east-riding-of-yorkshire",e2:"east-sussex",w8:"eilean-siar",e4:"essex",u9:"falkirk",s2:"fermanagh",v1:"fife",y1:"flintshire",v2:"glasgow-city",e6:"gloucestershire",17:"greater-london",18:"greater-manchester",gk:"guernsey",y2:"gwynedd",f2:"hampshire",f7:"herefordshire",f8:"hertfordshire",v3:"highland",v4:"inverclyde",x1:"isle-of-anglesey",im:"isle-of-man",g2:"isle-of-wight",je:"jersey",g5:"kent",h2:"lancashire",s3:"larne",h5:"leicestershire",s4:"limavady",h7:"lincolnshire",s5:"lisburn",s7:"magherafelt",28:"merseyside",y3:"merthyr-tydfil",v5:"midlothian",y4:"monmouthshire",v6:"moray",s8:"moyle",y5:"neath-port-talbot",y6:"newport",s9:"newry-and-mourne",t1:"newtownabbey",i9:"norfolk",j1:"northamptonshire",v7:"north-ayrshire",t2:"north-down",v8:"north-lanarkshire",j6:"northumberland",j7:"north-yorkshire",j9:"nottinghamshire",t3:"omagh",v9:"orkney-islands",k2:"oxfordshire",y7:"pembrokeshire",w1:"perth-and-kinross",y8:"powys",w2:"renfrewshire",y9:"rhondda-cynon-taff",l4:"rutland",t9:"scottish-borders",w3:"shetland-islands",l6:"shropshire",m3:"somerset",w4:"south-ayrshire",w5:"south-lanarkshire",37:"south-yorkshire",m9:"staffordshire",w6:"stirling",t4:"strabane",n5:"suffolk",n7:"surrey",z1:"swansea",z3:"the-vale-of-glamorgan",z2:"torfaen",41:"tyne-and-wear",p3:"warwickshire",w7:"west-dunbartonshire",w9:"west-lothian",43:"west-midlands",p6:"west-sussex",45:"west-yorkshire",p8:"wiltshire",q4:"worcestershire",z4:"wrexham"};function i(e,t,r){return t&&"gb"===t.toLowerCase()||r&&"gb"===r.toLowerCase()?o[e.toLowerCase()]:e.toLowerCase()}let s=e=>{let{locale:t,country:r,city:o,state:s,country_code:a=""}=e,l=r.toLowerCase(),c=encodeURI(o),u="";return s&&(u=i(s,a,r)),(0,n.Re3)({queryString:{source:"GROUPS",location:[l,u,c].filter(e=>e).join("--")},locale:t})},a=e=>{let{locale:t,country:r,city:o,state:s,country_code:a="",keywords:l}=e,c=r.toLowerCase(),u=encodeURI(o),d="";return s&&(d=i(s,a,r)),(0,n.Re3)({queryString:{keywords:l,source:"EVENTS",location:[c,d,u].filter(e=>e).join("--")},locale:t})}},9505:function(e,t,r){"use strict";r.r(t),r.d(t,{__N_SSP:function(){return eK},default:function(){return eW}});var n=r(11217),o=r(96873),i=r(50959),s=r(36122),a=r(16165),l=r(16532),c=r(73172),u=r(38800),d=r(47652),p=r(73193),m=r(80417),v=r(16337),g=r(44636),f=r(34677),h=r(21754),b=r(62304),y=r(78003),O=r(32854),j=r(48),w=r.n(j),P=r(71879),x=r.n(P),E=r(20106),k=r.n(E),C=r(835),N=r.n(C),T=r(16986),S=r(22776),D=r(11527);function M(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function A(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?M(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):M(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let U=(0,p.vU)({organizedBy:{id:"topicsOverview.largestGroup.organizedBy",defaultMessage:"Organized by {NAME}"}}),I=e=>{var t,r,n,o,i;let{index:a,organizer:l,members:c,who:u,name:d,cityLink:p,href:v,samplePhotos:g}=e,f=(0,s.Z)();return(0,D.jsxs)("div",{className:"flex gap-2",children:[(0,D.jsx)("span",{className:"block min-w-[32px] text-[28px] font-semibold",children:a+1}),(0,D.jsxs)("div",{className:"w-full justify-between gap-3 sm:flex",children:[(0,D.jsxs)("div",{className:"flex flex-1 flex-col",children:[(0,D.jsx)(N(),{href:v,className:"hover:no-underline",children:(0,D.jsx)("h3",{className:"font-bold",children:d})}),!!c&&(0,D.jsxs)("span",{className:"text-sm",children:[(0,D.jsxs)("span",{className:"text-gray6",children:[f.formatNumber(c)," ",u]})," | ",p]}),(0,D.jsxs)("div",{className:"mt-2 flex items-center gap-5 text-gray6",children:[(0,D.jsx)(T.mq,{twoLetters:!0,memberPhotoUrl:null==l?void 0:null===(t=l.memberPhoto)||void 0===t?void 0:t.highResUrl,loading:"lazy",width:32,height:32,className:"block h-8 w-8 min-w-[32px] rounded-full bg-cover bg-center",name:d}),(0,D.jsx)(m.Z,A(A({},U.organizedBy),{},{values:{NAME:null==l?void 0:l.name}}))]})]}),(null==g?void 0:g.length)>=3&&(0,D.jsxs)(N(),{href:v,className:"mt-2 flex gap-2 sm:mt-0",children:[(0,D.jsx)("div",{className:"relative h-[130px] w-full sm:w-[160px]",children:(0,D.jsx)(k(),{id:null==g?void 0:null===(r=g[0])||void 0===r?void 0:r.id,src:(0,y.FS)((0,y.pC)(null==g?void 0:null===(n=g[0])||void 0===n?void 0:n.url)),loader:S.XI,fill:!0,title:(null==g?void 0:null===(o=g[0])||void 0===o?void 0:o.caption)||"",alt:(null==g?void 0:null===(i=g[0])||void 0===i?void 0:i.caption)||"",className:"object-cover object-center"})}),(0,D.jsx)("div",{className:"space-y-2",children:x()(w()(g),2).map(e=>(0,D.jsx)("div",{className:"relative block h-[60px] w-[80px] bg-cover bg-center",children:(0,D.jsx)(k(),{id:null==e?void 0:e.id,src:(0,y.FS)((0,y.pC)(null==e?void 0:e.url)),loader:S.XI,fill:!0,title:(null==e?void 0:e.caption)||"",alt:(null==e?void 0:e.caption)||"",className:"object-cover object-center"})},e.id))})]})]})]})};function G(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function Z(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?G(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):G(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let L=(0,p.vU)({title:{id:"topicsOverview.largestGroup.title",defaultMessage:"Largest {TOPIC_NAME} groups"},showAll:{id:"topicsOverview.largestGroup.showAll",defaultMessage:"Show all"}}),B=e=>{let{country:t,city:r,state:n,locale:o}=e,i=(0,b.n)(t);return(0,D.jsxs)(f.Z,{variant:g.c7.SIMPLE,href:(0,O.QE)({locale:o,state:n,city:r,country:t}),children:[r,", ",i]})},z=e=>{var t;return null==e?void 0:null===(t=e.edges)||void 0===t?void 0:t.map(e=>{let{node:t}=e;return Z(Z({},t),{},{url:(0,y.pC)(null==t?void 0:t.url)})})},_=e=>{var t;let{largestGroup:r,topicName:n,urlkey:o}=e,{locale:i}=(0,v.M)(),s=null==r?void 0:null===(t=r.edges)||void 0===t?void 0:t.map(e=>{let{node:t}=e;return t});return null!=s&&s.length?(0,D.jsxs)("div",{className:"border-y border-gray2 px-5 pb-5 pt-10",children:[(0,D.jsx)("h2",{className:"text-center text-[28px] font-semibold",children:(0,D.jsx)(m.Z,Z(Z({},L.title),{},{values:{TOPIC_NAME:n}}))}),(0,D.jsx)("div",{className:"mt-10 space-y-5",children:null==s?void 0:s.map((e,t)=>{let{state:r,city:n,country:o,customMemberLabel:s,memberships:a,urlname:l,id:c,name:u,organizer:d,samplePhotos:p}=e;return(0,D.jsx)(I,{who:s,samplePhotos:z(p),index:t,name:u,href:(0,h.ZI7)(l),members:null==a?void 0:a.totalCount,organizer:d,cityLink:(0,D.jsx)(B,{city:n,country:o,locale:i,state:r})},c)})}),(0,D.jsx)("div",{className:"mt-10 text-center",children:(0,D.jsx)(f.Z,{variant:g.c7.SIMPLE,href:(0,h.Bjz)(i,o),children:(0,D.jsx)(m.Z,Z({},L.showAll))})})]}):null},$={chess:"chesscom",writing:"shut-up-write","microsoft-azure":"microsoftglobal"},R=(0,p.vU)({chessPlayers:{id:"topicsOverview.largestNetwork.chessPlayers",defaultMessage:"Chess players"},members:{id:"topicsOverview.largestNetwork.members",defaultMessage:"members"},microsoftEnthusiasts:{id:"topicsOverview.largestNetwork.microsoftEnthusiasts",defaultMessage:" Microsoft enthusiasts"}}),q={[$.chess]:{who:R.chessPlayers,samplePhotos:[{url:"https://v.fastcdn.co/u/f91f856b/63525059-0-Layer-6.jpg"},{url:"https://v.fastcdn.co/u/f91f856b/63525069-0-Layer-7.jpg"},{url:"https://v.fastcdn.co/u/f91f856b/62563390-0-highres-506855701.jpg"}],link:"https://www.meetup.com/lp/meetup-chess/",organizer:{name:"Chess.com Team",photo:{photo_link:"https://secure.meetupstatic.com/photos/member/a/7/9/1/highres_314082897.jpeg"}}},[$.writing]:{who:R.members,samplePhotos:[{url:"https://secure.meetupstatic.com/photos/event/a/8/6/3/highres_513823107.jpeg"},{url:"https://secure.meetupstatic.com/photos/event/9/4/d/4/highres_514238100.jpeg"},{url:"https://secure.meetupstatic.com/photos/event/8/a/0/c/highres_513635340.jpeg"}],link:"https://www.meetup.com/pro/shut-up-write/",organizer:{name:"Shut Up & Write!",photo:{photo_link:"https://secure.meetupstatic.com/photos/member/a/e/1/f/highres_316424575.jpeg"}}},[$["microsoft-azure"]]:{networkName:"Microsoft Global Community",who:R.microsoftEnthusiasts,samplePhotos:[{url:"https://secure.meetupstatic.com/photos/event/d/1/a/f/highres_515033679.jpeg"},{url:"https://secure.meetupstatic.com/photos/event/d/1/4/9/highres_514193577.jpeg"},{url:"https://secure.meetupstatic.com/photos/event/7/8/f/e/highres_514830974.jpeg"}],link:"https://www.meetup.com/pro/microsoftglobal/",organizer:{name:"Microsoft",photo:{photo_link:"https://secure.meetupstatic.com/photos/member/6/9/4/5/highres_287726949.jpeg"}}}};function F(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function V(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?F(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):F(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let H=(0,p.vU)({title:{id:"topicsOverview.largestNetwork.title",defaultMessage:"Largest {TOPIC_NAME} network"},worldwide:{id:"topicsOverview.largestNetwork.worldwide",defaultMessage:"Worldwide"}}),Q=e=>{var t;let{urlname:r,topicName:n,proNetworkByUrlname:o}=e,{formatMessage:i}=(0,s.Z)(),{name:a,primaryAdmin:l,networkAnalytics:c}=o||{},{link:u,who:d,samplePhotos:p,organizer:v,networkName:h}=q[r]||{};return(0,D.jsxs)("div",{className:"border-t border-gray2 px-5 pb-5 pt-10",children:[(0,D.jsx)("h2",{className:"mb-10 text-center text-[28px] font-semibold",children:(0,D.jsx)(m.Z,V(V({},H.title),{},{values:{TOPIC_NAME:n}}))}),(0,D.jsx)(I,{index:0,who:i(d),name:a||h,members:null==c?void 0:c.totalMembers,href:u,organizer:{name:(null==l?void 0:l.name)||(null==v?void 0:v.name),memberPhoto:{highResUrl:null==v?void 0:null===(t=v.photo)||void 0===t?void 0:t.photo_link}},samplePhotos:p,cityLink:(0,D.jsx)(f.Z,{variant:g.c7.SIMPLE,href:u,children:i(H.worldwide)})})]})};var Y=r(68568),J=r(89281),K=r(74596),W=r(76185);function X(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function ee(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?X(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):X(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let et={},er=K.Ps`
  query getNearestGroups($urlkey: String!, $countryCode: String!, $lat: Float, $lon: Float) {
    topicByUrlkey(urlkey: $urlkey) {
      nearestGroups: countryGroups(
        first: 4
        lat: $lat
        lon: $lon
        countryCode: $countryCode
        sort: NEAREST
      ) {
        edges {
          node {
            name
            city
            country
            urlname
            customMemberLabel
            memberships {
              totalCount
            }
            keyGroupPhoto {
              highResUrl
              id
            }
          }
        }
      }
    }
  }
`;var en=r(19803),eo=r.n(en);r(82691),r(17247),r(47179),r(55853),r(99527),r(1970),(0,p.vU)({eventAttend:{id:"eventCard.eventAttend",defaultMessage:"Attend"}});var ei=r(46990);r(46803),r(20616),r(5327),(0,p.vU)({eventPhoto:{id:"LegacyEventCard.eventPhoto",defaultMessage:"Event photo"},eventCanceled:{id:"LegacyEventCard.eventCanceled",defaultMessage:"This event was canceled."},manageMenuLabel:{id:"LegacyEventCard.manageMenuLabel",defaultMessage:"Manage"},networkEventInfoTooltip:{id:"LegacyEventCard.networkEventInfoTooltip.v2",defaultMessage:"A network event is created by a network administrator and visible across 2 or more groups."},networkEventHeaderTitle:{id:"EventCard.networkEventHeaderTitle",defaultMessage:"Network event"}}),r(36027),eo()("flex-row justify-start rounded-lg border border-gray1 xs:p-5 !bg-white","ci96ymx");let es=e=>{let{photo:t,defaultCaption:r,className:n,children:o}=e;return(0,D.jsx)("span",{role:"img",className:eo()("keepAspect--16-9","thumb","display--block",n),style:{backgroundImage:`url(${t.photo_link})`},"aria-label":r,children:!!o&&o})};r(32529);var ea=r(31850);let el=e=>({photo_link:(0,S.Jn)((0,ea.qb)({groupNameOrUrl:e}))}),ec=e=>/https:\/\/secure\.meetupstatic\.com/g.test(e),eu=e=>{let{urlname:t,name:r,members:n,who:o,dateTime:i,imageUrl:s}=e;return(0,D.jsxs)(N(),{href:(0,h.ZI7)(t),className:"hover:no-underline",children:[(0,D.jsx)(es,{photo:ec(s)?{photo_link:(0,y.pC)(s)}:el(t),defaultCaption:r,className:"relative block h-[158px] w-full rounded-lg bg-cover bg-center before:absolute before:block before:h-full before:w-full before:rounded-lg before:bg-black/[.15]",children:(0,D.jsxs)("div",{className:"relative z-10 p-4 text-white drop-shadow-lg",children:[(0,D.jsx)("div",{className:"font-bold",children:r}),(0,D.jsx)("div",{className:"",children:n+" "+o})]})}),i&&(0,D.jsx)("div",{className:"mt-2 text-xs",children:i})]})};function ed(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function ep(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?ed(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):ed(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let em=(0,p.vU)({title:{id:"topicsOverview.nearestGroups.title",defaultMessage:"{TOPIC_NAME} groups near you"},moreLocalGroups:{id:"topicsOverview.nearestGroups.startedAt",defaultMessage:"More local groups"}}),ev=e=>{var t,r,n,o,i;let{urlkey:s,topicName:a,country:l}=e,{locale:c}=(0,v.M)(),u=(0,Y.TH)(),{data:d,loading:p}=function(e){let t=ee(ee({},et),e);return W.a(er,t)}({variables:{urlkey:s,countryCode:l||"global",lat:null==u?void 0:null===(t=u.userLocation)||void 0===t?void 0:t.lat,lon:null==u?void 0:null===(r=u.userLocation)||void 0===r?void 0:r.lon},context:{uri:J.M}}),b=null==d?void 0:null===(n=d.topicByUrlkey)||void 0===n?void 0:null===(o=n.nearestGroups)||void 0===o?void 0:null===(i=o.edges)||void 0===i?void 0:i.map(e=>{let{node:t}=e;return t});return!(null!=b&&b.length)||p?null:(0,D.jsxs)("div",{className:"border-t border-gray2 px-5  pb-5 pt-10",children:[(0,D.jsxs)("div",{className:"flex items-center justify-between",children:[(0,D.jsx)("h2",{className:"text-[28px] font-semibold",children:(0,D.jsx)(m.Z,ep(ep({},em.title),{},{values:{TOPIC_NAME:a}}))}),(0,D.jsx)(f.Z,{variant:g.c7.SIMPLE,className:"h-fit font-medium",href:(0,h.Re3)({queryString:{source:"GROUPS",keywords:a},locale:c}),children:(0,D.jsx)(m.Z,ep({},em.moreLocalGroups))})]}),(0,D.jsx)("div",{className:"mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-4",children:null==b?void 0:b.map(e=>{let{urlname:t,name:r,customMemberLabel:n,memberships:o,keyGroupPhoto:i}=e;return(0,D.jsx)(eu,{urlname:t,members:null==o?void 0:o.totalCount,name:r,who:n,imageUrl:null==i?void 0:i.highResUrl},t)})})]})};function eg(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function ef(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?eg(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):eg(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let eh=(0,p.vU)({title:{id:"topicsOverview.newestGroups.title",defaultMessage:"Newest {TOPIC_NAME} groups"},startedAt:{id:"topicsOverview.newestGroups.startedAt",defaultMessage:"Started {DATE} in {CITY}, {COUNTRY}"}}),eb=e=>{let{topicName:t,newestGroup:r}=e,n=null==r?void 0:r.edges.map(e=>{let{node:t}=e;return t});return null!=n&&n.length?(0,D.jsxs)("div",{className:"mt-8 px-5 md:mt-10",children:[(0,D.jsx)("div",{className:"text-center text-[28px] font-semibold",children:(0,D.jsx)(m.Z,ef(ef({},eh.title),{},{values:{TOPIC_NAME:t}}))}),(0,D.jsx)("div",{className:"mt-5 grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3",children:null==n?void 0:n.map(e=>{let{urlname:t,name:r,customMemberLabel:n,memberships:o,city:i,country:s,keyGroupPhoto:a}=e;return(0,D.jsx)(eu,{urlname:t,members:null==o?void 0:o.totalCount,name:r,who:n,imageUrl:null==a?void 0:a.highResUrl,dateTime:(0,D.jsx)(m.Z,ef(ef({},eh.startedAt),{},{values:{DATE:(0,D.jsx)(p.Ji,{value:0,month:"short",day:"numeric"}),CITY:i,COUNTRY:s}}))},t)})})]}):null};function ey(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}let eO=(0,p.vU)({title:{id:"topicsOverview.relatedTopics.title.V2",defaultMessage:"Related Topics:"}}),ej=e=>{var t;let{relatedTopics:r,country:o}=e,{locale:i}=(0,v.M)(),s=null==r?void 0:null===(t=r.edges)||void 0===t?void 0:t.map(e=>{let{node:t}=e;return t});return(0,D.jsxs)("div",{className:"mx-5 mt-10 flex flex-wrap",children:[(0,D.jsx)("span",{className:"mr-5 font-medium",children:(0,D.jsx)(m.Z,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?ey(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):ey(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}({},eO.title))}),null==s?void 0:s.map(e=>{let{name:t,urlkey:r}=e;return(0,D.jsx)("div",{className:"after:px-2.5 after:text-black after:content-['\xb7'] last:after:hidden",children:(0,D.jsx)(f.Z,{variant:g.c7.SIMPLE,href:(0,h.mis)((0,h.tuK)(i,r,o)),title:t,children:t})},r)})]})};var ew=r(5964),eP=r(37787);function ex(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function eE(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?ex(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):ex(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let ek={},eC=K.Ps`
  query getSuggestedTopicsByName($query: String!) {
    suggestTopics(query: $query) {
      edges {
        node {
          id
          name
          urlkey
        }
      }
    }
  }
`;var eN=r(92699),eT=r(46734),eS=r(56850);function eD(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function eM(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?eD(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):eD(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let eA=(0,p.vU)({searchTopics:{id:"topicsOverview.searchModal.searchTopics",defaultMessage:"Search topics"},haveNoResult:{id:"topicsOverview.searchModal.haveNoResult",defaultMessage:'Sorry, we couldn\'t find any topics matching "{VALUE}"'},suggested:{id:"topicsOverview.searchModal.suggested",defaultMessage:"Suggested"}}),eU=e=>{var t,r;let{currentTopicName:n,handleModalClose:o}=e,[s,{data:a,loading:l}]=function(e){let t=eE(eE({},ek),e);return eP.t(eC,t)}({variables:{query:n},context:{uri:J.M}}),{0:c,1:u}=(0,i.useState)(n),{0:d,1:p}=(0,i.useState)(""),v=null==a?void 0:null===(t=a.suggestTopics)||void 0===t?void 0:null===(r=t.edges)||void 0===r?void 0:r.map(e=>{let{node:t}=e;return t}),g=e=>{p(e.currentTarget.value)},f=()=>{u(n),p("")};return(0,eN.Z)(()=>d&&u(d),500,[d]),(0,i.useEffect)(()=>{c&&s({variables:{query:c}})},[c,s]),(0,D.jsxs)("div",{children:[(0,D.jsx)("span",{className:"pt-2 text-[28px] font-semibold",children:(0,D.jsx)(m.Z,eM({},eA.searchTopics))}),(0,D.jsx)("div",{className:"mt-5",children:(0,D.jsx)(eS.Z,{className:"xs:rounded-lg xs:border-gray5 xs:py-2 xs:pl-10",id:"topics-search",value:d,onChange:g,iconv2:(0,D.jsx)(ei.ZP,{icon:"search",size:24,outline:!0,svgClassName:"text-gray6"}),iconClassName:"-translate-y-0.5",clearIconClassName:"top-1/2 -translate-y-1/2 right-5 h-fit",clearIconOutline:!1,showClearIcon:!0,onClearValue:f})}),(0,D.jsx)("div",{className:"mt-5",children:l?(0,D.jsx)(eT.Z,{className:"mx-auto"}):null!=v&&v.length?(0,D.jsxs)(D.Fragment,{children:[c===n&&(0,D.jsx)("span",{className:"block border-b border-gray2 py-5 font-medium ",children:(0,D.jsx)(m.Z,eM({},eA.suggested))}),null==v?void 0:v.map(e=>{let{name:t,urlkey:r}=e;return(0,D.jsx)(N(),{className:"block border-b border-gray2 py-5 last:border-0 hover:text-titleColor hover:no-underline",href:(0,h.I8l)(r),onClick:o,children:t},r)})]}):(0,D.jsx)(m.Z,eM(eM({},eA.haveNoResult),{},{values:{VALUE:c}}))})]})};function eI(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function eG(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?eI(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):eI(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let eZ=(0,p.vU)({defaultDescription:{id:"topicsOverview.topicHeader.defaultDescription",defaultMessage:"Meet other local people interested in {TOPIC_NAME}: share experiences, inspire and encourage each other! Join a {TOPIC_NAME} group."},members:{id:"topicsOverview.topicHeader.members",defaultMessage:"members"},groups:{id:"topicsOverview.topicHeader.groups",defaultMessage:"groups"}}),eL=e=>{let{topic:t}=e,r=(0,s.Z)(),{0:n,1:o}=(0,i.useState)(!1),{name:a,description:l,countryStats:c}=t||{},u=()=>{o(!0)},d=()=>{o(!1)};return(0,D.jsxs)("div",{className:"mx-5 mt-10",children:[(0,D.jsx)("button",{className:"mx-auto block cursor-pointer",onClick:u,children:(0,D.jsxs)("h1",{className:"flex items-center gap-2 text-[42px] font-bold text-titleColor",children:[a,(0,D.jsx)(ei.ZP,{icon:"caretDown",size:24,outline:!0,svgClassName:"mt-1"})]})}),(0,D.jsxs)("div",{className:"mt-10 flex flex-col-reverse justify-between gap-4 md:flex-row",children:[(0,D.jsx)("span",{children:l||(0,D.jsx)(m.Z,eG(eG({},eZ.defaultDescription),{},{values:{TOPIC_NAME:a}}))}),(0,D.jsxs)("div",{className:"ml-5 flex h-fit justify-center md:min-w-[260px]",children:[(0,D.jsxs)("div",{className:"border-r border-gray2 pr-5",children:[(0,D.jsx)("div",{className:"font-medium",children:r.formatNumber(null==c?void 0:c.memberCount)}),(0,D.jsx)("span",{children:(0,D.jsx)(m.Z,eG({},eZ.members))})]}),(0,D.jsxs)("div",{className:"pl-5",children:[(0,D.jsx)("div",{className:"font-medium",children:r.formatNumber(null==c?void 0:c.groupCount)}),(0,D.jsx)("span",{children:(0,D.jsx)(m.Z,eG({},eZ.groups))})]})]})]}),(0,D.jsx)(ew.default,{isOpen:n,onClose:d,children:(0,D.jsx)(eU,{currentTopicName:null==t?void 0:t.name,handleModalClose:d})})]})};function eB(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function ez(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?eB(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):eB(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let e_=(0,p.vU)({joinButton:{id:"topicsOverview.joinButton",defaultMessage:"Join {TOPIC_NAME} groups"}}),e$=e=>{let{topic:t,urlkey:r,country:n,showLoginButton:o,proNetworkByUrlname:i}=e,{locale:s}=(0,v.M)(),{relatedTopics:a,largestGroup:l,newestGroup:c}=t||{};return(0,D.jsxs)("div",{className:"mx-auto max-w-[840px]",children:[(0,D.jsx)(eL,{topic:t}),o&&(0,D.jsx)(f.Z,{variant:g.c7.PRIMARY,href:(0,h.Re3)({queryString:{source:"GROUPS",keywords:null==t?void 0:t.name},locale:s}),className:"mx-5 mt-5 block !px-5 !py-2.5 text-center text-sm font-medium md:w-fit",children:(0,D.jsx)(m.Z,ez(ez({},e_.joinButton),{},{values:{TOPIC_NAME:null==t?void 0:t.name}}))}),(0,D.jsx)(ej,{relatedTopics:a,country:n}),$[r]&&(0,D.jsx)(Q,{urlname:$[r],proNetworkByUrlname:i,topicName:null==t?void 0:t.name}),(0,D.jsx)(ev,{topicName:null==t?void 0:t.name,urlkey:r,country:n}),(0,D.jsx)(_,{largestGroup:l,topicName:null==t?void 0:t.name,urlkey:null==t?void 0:t.urlkey}),(0,D.jsx)(eb,{topicName:null==t?void 0:t.name,newestGroup:c})]})};var eR=r(35777),eq=r(95495),eF=r(94787),eV=r(81817),eH=r(42150),eQ=r(84804);function eY(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}let eJ=e=>{let{urlkey:t,country:r,proNetworkByUrlname:p,countryList:m,showErrorPage:v,topic:g,isWhiteListed:f}=e,{formatMessage:h}=(0,s.Z)(),{asPath:b}=(0,o.useRouter)(),y=(0,a.Z)(),O=y===eH.e.LOGGED_OUT;return((0,i.useEffect)(()=>{null!=g&&!f&&O&&(0,eV.$V)()&&(0,eQ.y)()},[g,f,O]),null==g||null==g.name)?(0,D.jsx)("div",{className:"flex min-h-screen w-full items-center justify-center",children:(0,D.jsx)(eT.Z,{size:"xl"})}):(0,D.jsxs)(eq.Z,{noConstraint:!0,pageTrackingId:"Topics overview",headerProps:{hideSearch:!0,className:"xs:mb-0"},children:[(0,D.jsx)(eF.ZP,{title:h(u.Z.topicsOverview,{TOPICS_NAME:null==g?void 0:g.name}),path:b}),!v&&(0,D.jsx)("main",{id:eR.Om,children:(0,D.jsx)(d.Z,{isTopicsOverview:!0,country:r,urlkey:t,topicName:null==g?void 0:g.name,countryList:m,children:(0,D.jsx)(e$,{showLoginButton:O,urlkey:t,country:r,topic:g,proNetworkByUrlname:p})})})||(0,D.jsx)(l.Z,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?eY(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):eY(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}({},c.oT))]})};var eK=!0,eW=eJ},5964:function(e,t,r){"use strict";r.r(t);var n=r(92204),o=r.n(n);let i=o()(()=>Promise.all([r.e(72470),r.e(94470),r.e(97789),r.e(23457)]).then(r.bind(r,75040)),{ssr:!1,loadableGenerated:{webpack:()=>[75040]}});t.default=i},5327:function(e,t,r){"use strict";var n=r(11217),o=r(96470),i=r(19803),s=r.n(i),a=r(50959),l=r(84388),c=r(76729),u=r(54420),d=r(80021),p=r.n(d),m=r(11527);let v=["isOpen","children","parentRef","placement","updateHash","onClose"];function g(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function f(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?g(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):g(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let h=s()("p-4 rounded-sm text-white absolute text-left bg-tooltipDark z-tooltip inline-block","t1tqlh7s"),b=e=>{let{isOpen:t,children:r,parentRef:n,placement:i="auto",updateHash:d,onClose:g}=e,b=(0,o.Z)(e,v),y=(0,a.useRef)(),{styles:O,attributes:j,popupRef:w,isElementReady:P}=(0,l.Z)({parentRef:n,isOpen:t,placement:i,updateHash:d,popperModifiers:[{name:"offset",options:{offset:[0,8]}},{name:"arrow",options:{padding:8,element:null==y?void 0:y.current}}]});if((0,u.Z)(w,g),(0,a.useEffect)(()=>{let e;return t&&g&&(e=(0,c.Z)(window,{Escape:g})),()=>{var t;null===(t=e)||void 0===t||t()}},[t,g]),!t)return null;let x=s()(b.className,p().tooltip,h,!P&&"hidden");return(0,m.jsxs)("div",f(f(f({ref:w},b),{},{style:O.popper},j.popper),{},{className:x,children:[(0,m.jsx)("div",{ref:y,style:O.arrow,className:p().tip,"data-popper-arrow":!0}),r]}))};t.Z=b,r(69099)},46734:function(e,t,r){"use strict";var n=r(11217),o=r(96470),i=r(19803),s=r.n(i),a=r(11527);let l=["size"];function c(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r.push.apply(r,n)}return r}function u(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?c(Object(r),!0).forEach(function(t){(0,n.Z)(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):c(Object(r)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}let d={xs:16,sm:24,md:32,lg:40,xl:64,"2xl":120},p=e=>{let{size:t="md"}=e,r=(0,o.Z)(e,l),n=d[t]||d.md;return(0,a.jsx)("div",u(u({},r),{},{className:s()(r.className,"fill-current stroke-current text-gray3"),style:{width:n,height:n},children:(0,a.jsxs)("svg",{viewBox:"0 0 32 32",children:[(0,a.jsx)("path",{opacity:".1",d:"M16 0 A16 16 0 0 0 16 32 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 16 28 A12 12 0 0 1 16 4"}),(0,a.jsx)("path",{d:"M16 0 A16 16 0 0 1 32 16 L28 16 A12 12 0 0 0 16 4z",children:(0,a.jsx)("animateTransform",{attributeName:"transform",type:"rotate",from:"0 16 16",to:"360 16 16",dur:"0.7s",repeatCount:"indefinite"})})]})}))};t.Z=p},84804:function(e,t,r){"use strict";r.d(t,{y:function(){return o}});var n=r(21754);let o=()=>{let e=window.location.href;window.location.replace((0,n.EMs)(void 0,e))}},36027:function(e){e.exports={t14913da:"t14913da",d1s3a3a6:"d1s3a3a6"}},32529:function(e){e.exports={ci96ymx:"ci96ymx"}},69099:function(e){e.exports={t1tqlh7s:"t1tqlh7s"}},80021:function(e){e.exports={tooltip:"Tooltip_tooltip__PB0aY",tip:"Tooltip_tip__yK5Jv"}},76729:function(e,t){"use strict";var r=["Shift","Meta","Alt","Control"],n="object"==typeof navigator&&/Mac|iPod|iPhone|iPad/.test(navigator.platform)?"Meta":"Control";t.Z=function(e,t,o){void 0===o&&(o={});var i,s,a=null!=(i=o.timeout)?i:1e3,l=null!=(s=o.event)?s:"keydown",c=Object.keys(t).map(function(e){return[e.trim().split(" ").map(function(e){var t=e.split(/\b\+/),r=t.pop();return[t=t.map(function(e){return"$mod"===e?n:e}),r]}),t[e]]}),u=new Map,d=null,p=function(e){e instanceof KeyboardEvent&&(c.forEach(function(t){var n,o=t[0],i=t[1],s=u.get(o)||o;(n=s[0])[1].toUpperCase()!==e.key.toUpperCase()&&n[1]!==e.code||n[0].find(function(t){return!e.getModifierState(t)})||r.find(function(t){return!n[0].includes(t)&&n[1]!==t&&e.getModifierState(t)})?e.getModifierState(e.key)||u.delete(o):s.length>1?u.set(o,s.slice(1)):(u.delete(o),i(e))}),d&&clearTimeout(d),d=setTimeout(u.clear.bind(u),a))};return e.addEventListener(l,p),function(){e.removeEventListener(l,p)}}}}]);