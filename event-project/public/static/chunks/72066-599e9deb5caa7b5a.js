(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[72066],{85821:function(e,t,n){"use strict";n.d(t,{$q:function(){return d},Sn:function(){return u}});var r=n(11217),o=n(74596),i=n(39571),a=n(76185);function s(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?s(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):s(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let c={},d=o.Ps`
  query eventSearchWithSeries(
    $query: String!
    $lat: Float!
    $lon: Float!
    $startDateRange: DateTime
    $endDateRange: DateTime
    $eventType: EventType
    $radius: Float
    $isHappeningNow: Boolean
    $isStartingSoon: Boolean
    $categoryId: ID
    $topicCategoryId: ID
    $city: String
    $state: String
    $country: String
    $zip: String
    $sortField: KeywordSortField
    $first: Int
    $after: String
    $numberOfEventsForSeries: Int
    $seriesStartDate: Date
    $doConsolidateEvents: Boolean
  ) {
    results: eventSearch(
      filter: {
        query: $query
        lat: $lat
        lon: $lon
        startDateRange: $startDateRange
        endDateRange: $endDateRange
        eventType: $eventType
        radius: $radius
        isHappeningNow: $isHappeningNow
        isStartingSoon: $isStartingSoon
        categoryId: $categoryId
        topicCategoryId: $topicCategoryId
        city: $city
        state: $state
        country: $country
        zip: $zip
        doConsolidateEvents: $doConsolidateEvents
      }
      first: $first
      after: $after
      sort: { sortField: $sortField }
    ) {
      pageInfo {
        hasNextPage
        endCursor
      }
      totalCount
      edges {
        node {
          ...EventForFindPageSearchesWithSeries
          group {
            isNewGroup
            timezone
          }
          rsvpState
          series {
            events(numberOfEvents: $numberOfEventsForSeries, startDate: $seriesStartDate) {
              edges {
                node {
                  id
                  dateTime
                  isAttending
                  group {
                    urlname
                  }
                }
              }
            }
          }
        }
        metadata {
          recId
          recSource
        }
      }
    }
  }
  ${i.YI}
`;function u(e){let t=l(l({},c),e);return a.a(d,t)}},39571:function(e,t,n){"use strict";n.d(t,{KJ:function(){return p},LU:function(){return s},YI:function(){return v},br:function(){return a},iR:function(){return i},m8:function(){return l},mG:function(){return c},ok:function(){return f},uQ:function(){return o},vN:function(){return d}});var r=n(74596);let o=r.Ps`
  fragment GroupsPageGroup2 on Group {
    id
    name
    link
    city
    urlname
    state
    country
    timezone
    urlname
    groupPhoto: keyGroupPhoto {
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
`,i=r.Ps`
  fragment EventDetails on Event {
    id
    title
    dateTime
    duration
    endTime
    going {
      totalCount
    }
    featuredEventPhoto {
      id
      source: highResUrl
    }
    eventType
    group {
      id
      name
      urlname
      isPrimaryOrganizer
      link
      isPrivate
      city
      state
      country
      timezone
      keyGroupPhoto {
        id
        source: highResUrl
      }
    }
    isSaved
    hosts: eventHosts {
      id: memberId
      name
    }
    eventUrl
    isAttending
    maxTickets
    venue {
      name
      address
      city
      state
      country
    }
    socialLabels
  }
`,a=r.Ps`
  fragment MemberSubscriptionDetails on MemberSubscription {
    subscriptionId
    status
    startDate
    renewDate
    endDate
    provider
    trialEndDate
    lastPayment {
      id
      date
    }
    plan {
      id
      amount
      billInterval
      billIntervalUnit
    }
  }
`,s=r.Ps`
  fragment AttendeesRsvp on Rsvp {
    id
    member {
      id
      name
      allowableActions
      memberPhoto {
        id
        baseUrl
      }
      profilePrivacy {
        showInterests
        whoCanContact
      }
      topics {
        edges {
          node {
            id
            name
          }
        }
      }
      commonTopics {
        totalCount
        edges {
          node {
            id
            name
          }
        }
      }
      reasonsForJoining
    }
    membership {
      role
      status
    }
    updated
    isHost
    isFirstEvent
    status
    payStatus
    guestsCount
    answer {
      text
    }
    actions
    event {
      guestsAllowed
      numberOfAllowedGuests
      isAttending
      maxTickets
      group {
        id
        link
      }
      feeSettings {
        amount
      }
    }
    venue {
      id
      venueType
    }
  }
`,l=r.Ps`
  fragment EventByIdForAttendees on Event {
    id
    title
    eventUrl
    dateTime
    endTime
    status
    eventType
    eventHosts {
      memberId
    }
    rsvpQuestions {
      text
    }
    actions
    venue {
      name
      address
    }
    venues {
      id
      venueType
      eventVenueOptions {
        goingCount
      }
    }
    rsvps(first: $first, after: $after, filter: $filter, sort: $sort) {
      totalCount
      yesCount
      noCount
      waitlistCount
      edges {
        node {
          ...AttendeesRsvp
        }
      }
      pageInfo {
        hasPreviousPage
        hasNextPage
        endCursor
      }
    }
    group {
      id
      isPrivate
      isMember
      isPrimaryOrganizer
      link
      urlname
      proNetwork {
        id
      }
    }
  }
  ${s}
`,c=r.Ps`
  fragment BuildMeetupGroupSearch on Group {
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
      id
      baseUrl
    }
    stats {
      memberCounts {
        all
      }
    }
  }
`,d=r.Ps`
  fragment Error on PayloadError {
    code
    message
    field
  }
`,u=r.Ps`
  fragment GroupForFindPageSearchesWithSeries on Group {
    id
    isNewGroup
    isPrivate
    membershipMetadata {
      role
    }
    keyGroupPhoto {
      baseUrl
      highResUrl
      id
    }
    name
    timezone
    urlname
  }
`,v=r.Ps`
  fragment EventForFindPageSearchesWithSeries on Event {
    dateTime
    description
    eventType
    eventUrl
    featuredEventPhoto {
      baseUrl
      highResUrl
      id
    }
    feeSettings {
      accepts
      currency
    }
    id
    isAttending
    isOnline
    isSaved
    covidPrecautions {
      venueType
    }
    group {
      ...GroupForFindPageSearchesWithSeries
    }
    maxTickets
    rsvps {
      totalCount
    }
    title
    venue {
      id
      name
      lat
      lon
      city
      state
      country
    }
    socialLabels
  }
  ${u}
`;r.Ps`
  fragment EventForGuestCard on Event {
    id
    title
    eventUrl
    eventType
    dateTime
    endTime
    featuredEventPhoto {
      baseUrl
      highResUrl
      id
    }
    isOnline
    going {
      totalCount
    }
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
      timezone
      urlname
      groupPhoto {
        id
        baseUrl
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
`;let p=r.Ps`
  fragment GroupHomeEvent on Event {
    id
    title
    status
    featuredEventPhoto {
      baseUrl
      highResUrl
      id
    }
    description
    isOnline
    eventType
    venue {
      id
      name
      address
      city
      state
      country
    }
    isAttending
    eventUrl
    going {
      totalCount
    }
    dateTime
    endTime
    isFeatured
    group {
      id
      name
      timezone
    }
    actions
    isNetworkEvent
    rsvps {
      edges {
        node {
          id
          member {
            id
            name
            memberPhoto {
              id
              source: highResUrl
            }
          }
        }
      }
    }
    feeSettings {
      currency
      amount
    }
    rsvpSettings {
      rsvpsClosed
    }
    socialLabels
  }
`;r.Ps`
  fragment NewGroupSearch on Group {
    id
    name
    link
    urlname
    foundedDate
    groupPhoto {
      id
      baseUrl
    }
  }
`,r.Ps`
  fragment PopularGroupSearch on Group {
    id
    name
    link
    stats {
      memberCounts {
        all
      }
    }
  }
`;let f=r.Ps`
  fragment EventByIdPhotoAlbum on EventPhotoAlbum {
    id
    photoCount
    photoSample(number: $number) {
      id
      baseUrl
      highResUrl
    }
  }
`},872:function(e,t,n){"use strict";n.d(t,{B0:function(){return d},lD:function(){return u}});var r=n(11217),o=n(74596),i=n(39571),a=n(76185);function s(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?s(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):s(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let c={},d=o.Ps`
  query groupSearch(
    $first: Int
    $after: String
    $query: String!
    $lat: Float!
    $lon: Float!
    $radius: Float
    $categoryId: ID
    $topicCategoryId: ID
    $city: String
    $state: String
    $country: String
    $zip: String
  ) {
    results: groupSearch(
      first: $first
      after: $after
      filter: {
        query: $query
        lat: $lat
        lon: $lon
        radius: $radius
        categoryId: $categoryId
        topicCategoryId: $topicCategoryId
        city: $city
        state: $state
        country: $country
        zip: $zip
      }
    ) {
      pageInfo {
        hasNextPage
        endCursor
      }
      totalCount
      edges {
        node {
          ...BuildMeetupGroupSearch
        }
      }
    }
  }
  ${i.mG}
`;function u(e){let t=l(l({},c),e);return a.a(d,t)}},96755:function(e,t,n){"use strict";n.d(t,{BK:function(){return u},iM:function(){return d}});var r=n(11217),o=n(74596),i=n(39571),a=n(76185);function s(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?s(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):s(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let c={},d=o.Ps`
  query recommendedEventsWithSeries(
    $lat: Float!
    $lon: Float!
    $categoryId: ID
    $topicCategoryId: ID
    $startDateRange: String
    $endDateRange: String
    $first: Int
    $after: String
    $eventType: EventType
    $radius: Float
    $isHappeningNow: Boolean
    $isStartingSoon: Boolean
    $sortField: RecommendedEventsSortField
    $numberOfEventsForSeries: Int
    $seriesStartDate: Date
    $doConsolidateEvents: Boolean
    $doPromotePaypalEvents: Boolean
  ) {
    result: recommendedEvents(
      filter: {
        lat: $lat
        lon: $lon
        categoryId: $categoryId
        topicCategoryId: $topicCategoryId
        startDateRange: $startDateRange
        endDateRange: $endDateRange
        eventType: $eventType
        radius: $radius
        isHappeningNow: $isHappeningNow
        isStartingSoon: $isStartingSoon
        doConsolidateEvents: $doConsolidateEvents
        doPromotePaypalEvents: $doPromotePaypalEvents
      }
      first: $first
      after: $after
      sort: { sortField: $sortField }
    ) {
      pageInfo {
        hasNextPage
        endCursor
      }
      totalCount
      edges {
        node {
          ...EventForFindPageSearchesWithSeries
          group {
            isNewGroup
            timezone
          }
          rsvpState
          series {
            events(numberOfEvents: $numberOfEventsForSeries, startDate: $seriesStartDate) {
              edges {
                node {
                  id
                  dateTime
                  isAttending
                  group {
                    urlname
                  }
                }
              }
            }
          }
        }
        metadata {
          recId
          recSource
        }
      }
    }
  }
  ${i.YI}
`;function u(e){let t=l(l({},c),e);return a.a(d,t)}},65897:function(e,t,n){"use strict";n.d(t,{hE:function(){return u},jV:function(){return d}});var r=n(11217),o=n(74596),i=n(39571),a=n(76185);function s(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?s(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):s(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let c={},d=o.Ps`
  query getRecommendedGroups(
    $lat: Float!
    $lon: Float!
    $categoryId: ID
    $topicCategoryId: ID
    $first: Int
    $after: String
    $radius: Int
    $visibility: GroupVisibility
  ) {
    results: recommendedGroups(
      filter: {
        lat: $lat
        lon: $lon
        categoryId: $categoryId
        topicCategoryId: $topicCategoryId
        radius: $radius
        visibility: $visibility
      }
      after: $after
      first: $first
    ) {
      pageInfo {
        hasNextPage
        endCursor
      }
      totalCount
      edges {
        node {
          ...BuildMeetupGroupSearch
        }
      }
    }
  }
  ${i.mG}
`;function u(e){let t=l(l({},c),e);return a.a(d,t)}},61310:function(e,t,n){"use strict";n.d(t,{Ee:function(){return p},GG:function(){return f},Kn:function(){return v}});var r=n(11217),o=n(74596),i=n(39571),a=n(76185),s=n(37787);function l(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function c(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?l(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):l(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let d={},u=o.Ps`
  query getSavedEventsDates {
    self {
      id
      name
      savedEvents(first: 20) {
        totalCount
        pageInfo {
          hasNextPage
          endCursor
        }
        edges {
          cursor
          node {
            id
            dateTime
          }
        }
      }
    }
  }
`;function v(e){let t=c(c({},d),e);return a.a(u,t)}let p=o.Ps`
  query getSavedEvents($sort: SortOrder, $filter: SavedEventsFilter, $first: Int!, $after: String) {
    self {
      id
      name
      savedEvents(sort: $sort, filter: $filter, first: $first, after: $after) {
        totalCount
        pageInfo {
          hasNextPage
          endCursor
        }
        edges {
          cursor
          rsvpState
          node {
            ...EventDetails
            description
            venue {
              id
              address
              city
              state
              country
              lat
              lat
              lon
              name
            }
          }
        }
      }
    }
  }
  ${i.iR}
`;function f(e){let t=c(c({},d),e);return s.t(p,t)}},88318:function(e,t,n){"use strict";n.d(t,{u:function(){return i}});var r=n(47208),o=n(43540);let i=e=>{let{earlyBirdDiscount:t}=(null==e?void 0:e.feeSettings)||{},{amount:n,daysBefore:i,maximumQuantity:a,discountTicketsRemaining:s,promotionEnds:l}=t||{},c=new Date(i>0?l:e.dateTime),d=(0,r.Z)(c,new Date),{earlyBirdDiscount:u,eventVenueOptions:v}=(0,o.tO)(null==e?void 0:e.venues)||{},{amount:p,daysBefore:f,maximumQuantity:m,discountTicketsRemaining:g,promotionEnds:b}=u||{},h=new Date(i>0?b:e.dateTime),y=(0,r.Z)(h,new Date),j=d&&Boolean(n>=0&&i>=0&&(!a||s)),O=y&&Boolean(p>=0&&f>=0&&(!m||g));return{isEarlyBirdDiscount:j,isOnlineEarlyBirdDiscount:O,isEarlyBirdDiscountFull:j||O,discountedSpotsLeft:s,onlineDiscountedSpotsLeft:g,discountedAmount:n,onlineDiscountedAmount:p,discountEndDate:c,onlineDiscountEndDate:h,onlineEventVenueOptions:v}}},48565:function(e,t,n){"use strict";let r;n.d(t,{AS:function(){return v},C8:function(){return h},Ei:function(){return r},FF:function(){return b},cr:function(){return g},dv:function(){return f},eT:function(){return c},ge:function(){return d},hI:function(){return p},h_:function(){return u},rs:function(){return s},y8:function(){return l},zf:function(){return m}});var o,i=n(91757),a=n(76944);let s="find",l={events:"Find - Event Search",groups:"Find - Group Search"},c={resetFiltersClick:"resetFilters",eventSearchTabClick:"searchTab-events",groupSearchTabClick:"searchTab-groups",categoryFilterClick:"category-filter-drop-down"},d="categoryResults-eventCard",u=e=>e===i.RK.Groups?"findResults-GroupsSearch":"findResults-EventsSearch",v={all:"day-filter-any-day-option",startingSoon:"day-filter-starting-soon-option",today:"day-filter-today-option",tomorrow:"day-filter-tomorrow-option",thisWeek:"day-filter-this-week-option",thisWeekend:"day-filter-this-weekend-option",nextWeek:"day-filter-next-week-option",nextWeekend:"day-filter-next-weekend-option",custom:"day-filter-custom-filter-option"},p={all:"event-type-any-type-option",online:"event-type-online-option",inPerson:"event-type-in-person-option",indoor:"event-type-in-person-indoor-option",outdoor:"event-type-in-person-outdoor-option"},f={all:"event-distance-any-distance-option",twoMiles:"event-distance-2-miles-option",fiveMiles:"event-distance-5-miles-option",tenMiles:"event-distance-10-miles-option",twentyFiveMiles:"event-distance-25-miles-option",fiftyMiles:"event-distance-50-miles-option",hundredMiles:"event-distance-100-miles-option"},m={datetime:"sort-by-date-option",relevance:"sort-by-relevance-option"},g={shareOpen:"share-in-event-search-results",shareFacebook:"share-facebook-in-event-search-results",shareTwitter:"share-twitter-in-event-search-results",shareLinkedIn:"share-linkedin-in-event-search-results",shareEmail:"share-email-in-event-search-results",shareCopy:"share-copy-link-in-event-search-results"},b={expand:"eventSearchMap-browse-in-map",minimize:"eventSearchMap-minimizeButton",marker:"eventSearchMap-marker-click",markerResult:"eventSearchMap-markerDialogueResult-click",zoom:"eventSearchMap-zoomButton"},h=e=>{(0,a.ZP)({event:"gaEvent",eventCategory:s,eventLabel:e,eventAction:"click"})};(o=r||(r={})).FIND_EVENTS="find-events",o.FIND_GROUPS="find-groups"},49853:function(e,t,n){"use strict";n.d(t,{By:function(){return j},Gg:function(){return x},RM:function(){return O},T9:function(){return y},Wc:function(){return h},qC:function(){return b}});var r=n(11217),o=n(85821),i=n(872);n(91757);var a=n(68568),s=n(18671);n(6764);var l=n(72455),c=n(6318),d=n(89281),u=n(65897),v=n(96755);function p(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function f(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?p(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):p(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let m=function(e,t,n){let r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:a.lW,o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:a.T7;return{first:20,lat:r,lon:o,topicCategoryId:n,radius:(0,l.$6)({locale:e,distance:t})}},g=(e,t)=>{let{categoryId:n,dateRange:r,customStartDate:o,customEndDate:i,eventType:a,distance:c}=e,{begin:d,end:u}=(0,l.RY)(s.zO,s.G4,r,o,i),v=r===l.xq.STARTING_SOON.queryStringParam,p=m(t,c,n);return f(f({},p),{},{startDateRange:d,endDateRange:u,isStartingSoon:v||void 0,eventType:(0,l.rS)(a),numberOfEventsForSeries:5,seriesStartDate:s.G4.split("T")[0]})},b=function(e,t){let n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},r=arguments.length>3?arguments[3]:void 0,{sortField:o}=e,i=g(e,t);return{query:v.iM,variables:f(f({},i),{},{sortField:(0,l.sv)(o),doConsolidateEvents:!0,doPromotePaypalEvents:r},n),context:{uri:d.M}}},h=function(e,t){let n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},{keywords:r="",sortField:i}=e,a=g(e,t);return{query:o.$q,variables:f(f({},a),{},{query:r,sortField:(0,l.nA)(i),doConsolidateEvents:!0},n),context:{uri:d.M}}},y=function(e,t){let n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},{categoryId:r,distance:o}=e,i=m(t,o,r);return{query:u.jV,variables:f(f({},i),n),context:{uri:d.M}}},j=function(e,t){let n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},{categoryId:r,distance:o,keywords:a=""}=e,s=m(t,o,r),l=s.topicCategoryId?s.topicCategoryId.toString():void 0;return{query:i.B0,variables:f(f({},s),{},{query:a,topicCategoryId:l},n),context:{uri:d.M}}},O=(e,t)=>{if("indoor"!==t&&"outdoor"!==t)return e;let n=e.filter(e=>{var n,r;if("indoor"==t&&(null==e?void 0:null===(n=e.covidPrecautions)||void 0===n?void 0:n.venueType)=="INDOORS"||"outdoor"==t&&(null==e?void 0:null===(r=e.covidPrecautions)||void 0===r?void 0:r.venueType)=="OUTDOORS")return!0});return n},x=(e,t,n)=>{let r=n||t.isNewGroup;t&&r&&t.id&&(0,c.q)(e,{chapterId:t.id})}},66899:function(e,t,n){"use strict";n.d(t,{Ep:function(){return g},Lv:function(){return h},Qw:function(){return u},UM:function(){return y},_B:function(){return d},eG:function(){return v},eY:function(){return j},q1:function(){return b},rc:function(){return p},xw:function(){return m},zN:function(){return c},zi:function(){return f}});var r=n(11217),o=n(2600),i=n.n(o),a=n(65797);function s(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?s(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):s(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let c=20;function d(e,t){return l(l({},e),{},{type:t})}function u(e){if(!e)return{showPastEvents:!1,showUpcomingEvents:!1,showOrganizedEvents:!1,showSavedEvents:!1};let t=e[a.xw.PastEvents]??!1,n=e[a.xw.RSVPEvents]??!1,r=e[a.xw.OrganizingEvents]??!1,o=e[a.xw.SavedEvents]??!1;return{showPastEvents:t,showUpcomingEvents:n,showOrganizedEvents:r,showSavedEvents:o}}function v(e,t){return[...e??[],...t??[]]}function p(e,t){return e.data.self.upcomingEvents.edges.map(e=>d(e.node,t))}function f(e,t){return e.filter(e=>{let{hosts:n}=e;return!!(null!=n&&n.some(e=>e.id===t))})}function m(e,t){return null==e?void 0:e.some(e=>e.id===t)}function g(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];if(!e||0===e.length)return[];let n=[];n=t?e.sort((e,t)=>new Date(t.dateTime).getTime()-new Date(e.dateTime).getTime()):e.sort((e,t)=>new Date(e.dateTime).getTime()-new Date(t.dateTime).getTime());let r=i()(n,"id");return r}function b(e,t){if(!t)return[];let n=[];return t.showPastEvents?[...e.pastEvents.events]:(t.showOrganizedEvents&&(n=[...n,...e.organizedEvents.events]),t.showUpcomingEvents&&(n=[...n,...e.rsvpEvents.events]),t.showSavedEvents&&(n=[...n,...e.savedEvents.events]),n)}function h(e,t){var n,r,o,i,a,s,l,c,d,u,v,p,f,m,g,b;if(!e||!t)return!1;let h=(null===(n=e.getMyRsvpsLazyQueryTuple[1].data)||void 0===n?void 0:null===(r=n.self)||void 0===r?void 0:null===(o=r.upcomingEvents)||void 0===o?void 0:null===(i=o.pageInfo)||void 0===i?void 0:i.hasNextPage)??!1,y=(null===(a=e.getSelfGroupEventsByMembershipStatusLeaderLazyQueryTuple[1].data)||void 0===a?void 0:null===(s=a.self)||void 0===s?void 0:null===(l=s.upcomingEvents)||void 0===l?void 0:null===(c=l.pageInfo)||void 0===c?void 0:c.hasNextPage)??!1,j=(null===(d=e.getYourEventsPastEventsLazyQueryTuple[1].data)||void 0===d?void 0:null===(u=d.self)||void 0===u?void 0:null===(v=u.pastEvents)||void 0===v?void 0:null===(p=v.pageInfo)||void 0===p?void 0:p.hasNextPage)??!1,O=(e.getSavedEventsLazyQueryTuple&&(null===(f=e.getSavedEventsLazyQueryTuple[1].data)||void 0===f?void 0:null===(m=f.self)||void 0===m?void 0:null===(g=m.savedEvents)||void 0===g?void 0:null===(b=g.pageInfo)||void 0===b?void 0:b.hasNextPage))??!1;return t.showPastEvents?j:!!t.showUpcomingEvents&&!!h||!!t.showOrganizedEvents&&!!y||!!t.showSavedEvents&&!!O}function y(e){return e?{endCursor:e.hasNextPage?e.endCursor:"",hasNextPage:e.hasNextPage}:{endCursor:"",hasNextPage:!1}}function j(e,t){return e?"":t}},38552:function(e,t,n){"use strict";n.d(t,{Z:function(){return Z}});var r=n(11217),o=n(835),i=n.n(o),a=n(19803),s=n.n(a),l=n(50959),c=n(73193),d=n(80417),u=n(91757),v=n(66899),p=n(44636),f=n(21754),m=n(49088),g=n(11527);function b(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let h=(0,c.vU)({waitlisted:{id:"labels.waitlisted",defaultMessage:"Waitlisted"}}),y=()=>(0,g.jsx)("div",{className:"flex h-8 items-center rounded-lg bg-gray1 p-1 px-2","data-testid":"WaitlistedLabel",children:(0,g.jsx)("span",{className:"text-sm font-medium",children:(0,g.jsx)(d.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?b(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):b(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},h.waitlisted))})});var j=n(29874),O=n(98070),x=n(55853),w=n(70078);function P(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let E=(0,c.vU)({organizer:{id:"organizerLabel.organizer",defaultMessage:"Organizer"},eventHost:{id:"eventHostLabel.eventHost",defaultMessage:"Event host"}}),S=e=>{let{isNewEventCard:t}=e;return(0,g.jsx)("span",{className:s()("ml-4 self-center rounded bg-merlot px-4 py-0.5 font-medium leading-normal text-white",{"text-sm md:ml-2.5 md:rounded-lg md:px-2 md:py-1.5":t,"max-h-6 text-xs":!t}),children:(0,g.jsx)(d.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?P(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):P(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},t?E.eventHost:E.organizer))})};var N=n(99527),k=n(57622);function C(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let D=(0,c.vU)({eventCardChatButton:{id:"eventCard.chatButtonTitle",defaultMessage:"View event chat"}}),$=e=>{let{event:t,noFacePile:n,isShowSpotsLeft:o,containerName:a,isLoggedIn:c,isShowAttendingLabel:b,shareTrackingClickIds:h,isNewEventCard:P,userId:E,showEventChatButton:$,showSocialLabel:Z}=e,{dateTime:T,group:I,eventType:F,tickets:G,going:_,maxTickets:R,isAttending:M,rsvpState:z,hosts:U,channelUrl:A,socialLabels:L}=t,B=(0,N.Pk)(T),q=(0,N.Up)(T),H=z===u.S5.Waitlist&&!q,W=(0,N.iD)({maxTickets:R,going:_}),Y=(0,l.useMemo)(()=>(0,v.xw)(U,E),[U,E]),Q=P?Y:I.isOrganizer,V=(0,f.s7O)(t.group.urlname,t.id);return(0,g.jsxs)("div",{className:"flex h-full w-full items-end",children:[(0,g.jsxs)("div",{className:"flex w-full flex-col",children:[(0,g.jsxs)("div",{className:"flex items-center",children:[(0,g.jsx)(x.ZP,{going:_,spotsLeftCount:W,tickets:G,isTextLine:n||!G,isShowSpotsLeft:(0,N.xF)({isShowSpotsLeft:o,maxTickets:R,going:_}),isShowEventFullLabel:B&&!!R&&R<=_}),Q&&(0,g.jsx)(S,{isNewEventCard:P})]}),Z&&(0,g.jsx)(k.Z,{socialLabels:L,className:s()("mt-2",{"mt-6":b&&(M||H)})}),(0,g.jsx)(w.Z,{type:F,className:"mt-1 xs:p-0 md:hidden"}),b&&M&&(0,g.jsx)("div",{className:"mt-2 inline-block w-max lg:mt-4",children:(0,g.jsx)(m.Z,{isPast:q})}),b&&H&&(0,g.jsx)("div",{className:"mt-2 inline-block w-max lg:mt-4",children:(0,g.jsx)(y,{})})]}),(0,g.jsx)("div",{className:"relative flex h-8",children:$&&A&&(0,g.jsx)(i(),{href:V,passHref:!0,legacyBehavior:!0,children:(0,g.jsx)(p.ZP,{className:"absolute right-3 w-36 rounded-lg bg-viridian px-4.5 py-1.5 text-sm text-white","data-testid":"chatButton",children:(0,g.jsx)(d.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?C(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):C(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},D.eventCardChatButton))})})}),(0,g.jsxs)("div",{className:"z-10 flex h-8 items-center gap-3",children:[(0,g.jsx)(O.T,{title:t.title||"",link:t.eventUrl,groupName:I.name,containerName:a,source:u.RK.Events,trackingClickIds:h}),c&&!q&&(0,g.jsx)(j.ZP,{id:t.id,title:t.title||"",isSaved:t.isSaved,containerName:a})]})]})};var Z=$},45067:function(e,t,n){"use strict";var r=n(11217),o=n(19803),i=n.n(o),a=n(73193),s=n(80417),l=n(44278),c=n(11527);function d(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function u(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?d(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):d(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let v=(0,a.vU)({groupName:{id:"eventCardGroup.groupName",defaultMessage:"Group name"},isNewGroup:{id:"eventCardGroup.isNewGroup",defaultMessage:"New Group"}}),p=e=>{let{groupName:t,groupLocation:n,isNewGroup:r,className:o}=e;return t?(0,c.jsxs)("div",{className:i()("w-full  text-sm ",o),children:[(0,c.jsxs)("p",{className:"hidden text-gray6 md:line-clamp-1",children:[(0,c.jsxs)("span",{className:l.O,children:[(0,c.jsx)(s.Z,u({},v.groupName)),":"]}),[t,n].filter(Boolean).join(" • ")]}),r&&(0,c.jsx)("p",{className:"hidden text-viridian md:line-clamp-1 ",children:(0,c.jsx)(s.Z,u({},v.isNewGroup))}),(0,c.jsxs)("p",{className:"line-clamp-1 md:hidden",children:[(0,c.jsxs)("span",{className:l.O,children:[(0,c.jsx)(s.Z,u({},v.groupName)),":"]}),t]}),(0,c.jsx)("p",{className:"line-clamp-1 md:hidden",children:n}),r&&(0,c.jsx)("p",{className:"pt-[2px] text-viridian line-clamp-1 md:hidden",children:(0,c.jsx)(s.Z,u({},v.isNewGroup))})]}):null};t.Z=p},77966:function(e,t,n){"use strict";var r=n(11217),o=n(19803),i=n.n(o),a=n(92204),s=n.n(a),l=n(73193),c=n(80417),d=n(46803),u=n(11527);function v(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let p=s()(()=>n.e(78479).then(n.bind(n,96623)),{ssr:!1,loadableGenerated:{webpack:()=>[96623]}}),f=(0,l.vU)({suggested:{id:"homePage.suggested",defaultMessage:"Suggested"}}),m=e=>{let{dateTime:t,isSuggestedDisplayed:n,isFindPage:o,eventTimeClassName:a,isRecurringEventsHeader:s}=e;return(0,u.jsxs)("div",{className:"flex flex-col-reverse justify-between md:flex-row md:items-center",children:[s?(0,u.jsx)(p,{}):(0,u.jsx)(d.EventTimeDisplay,{dateTime:t,isFindPage:o,className:i()("pb-1 pt-1 font-medium text-darkGold line-clamp-1 lg:line-clamp-2",a)}),n&&(0,u.jsx)("p",{className:"text-sm font-medium text-primary md:text-base",children:(0,u.jsx)(c.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?v(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):v(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},f.suggested))})]})};t.Z=m},10474:function(e,t,n){"use strict";var r=n(19803),o=n.n(r),i=n(20106),a=n.n(i),s=n(31850),l=n(22776),c=n(78003),d=n(88535),u=n(11527);let v=e=>{let{photo:t,title:n,imageSize:r,children:i,imageClassName:v,wrapperClassName:p,forceContainerHeight:f,priority:m}=e;return(0,u.jsxs)("div",{className:o()("relative",p),style:{height:f??r.maxHeight},children:[t?(0,u.jsx)(a(),{priority:m,src:(0,c.FS)((0,d.s)(t,r.maxWidth,r.maxHeight,"webp")),loader:l.XI,height:r.maxHeight,width:r.maxWidth,alt:n,className:o()("rounded-t-lg",v)}):(0,u.jsx)(a(),{priority:m,src:(0,s.qb)({groupNameOrUrl:n}),loader:l.XI,height:r.maxHeight,width:r.maxWidth,alt:n,className:o()("rounded-t-lg",v)}),i]})};t.Z=v},86131:function(e,t,n){"use strict";var r=n(19803),o=n.n(r),i=n(11527);let a=e=>{let{children:t,className:n,isFindPage:r}=e,a=o()("text-gray7 font-medium text-base",n);return r?(0,i.jsx)("h2",{className:a,children:t}):(0,i.jsx)("p",{className:a,children:t})};t.Z=a},80444:function(e,t,n){"use strict";var r=n(11527);let o=e=>{let{selectedItemOnMapRef:t,eventLink:n,dataEventLabel:o,clickIdContext:i,onCardClick:a,children:s}=e;return(0,r.jsx)("a",{ref:t,className:"w-full cursor-pointer hover:no-underline",href:n,"data-event-label":o??"Event card",id:i?`event-card-in-${i}`:void 0,onClick:a,children:s})};t.Z=o},76998:function(e,t,n){"use strict";n.d(t,{E:function(){return x}});var r=n(11217),o=n(19803),i=n.n(o),a=n(50959),s=n(42150),l=n(48565),c=n(49853),d=n(24391),u=n(38552),v=n(46581),p=n(45067),f=n(77966),m=n(10474),g=n(86131),b=n(80444),h=n(70078),y=n(11527);function j(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function O(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?j(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):j(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let x="p-4 h-[170px]",w=(e,t)=>{let n;let{event:r,noFacePile:o,isShowSpotsLeft:j,containerName:w,isLoggedIn:P,showEventImageOnNarrowScreens:E,clickIdContext:S,isShowAttendingLabel:N,shareTrackingClickIds:k,isSuggestedDisplayed:C,isNewEventCard:D,dataEventLabel:$,showEventChatButton:Z,isFindPage:T,eventLink:I,onClick:F,showSocialLabel:G}=e,{images:_,dateTime:R,group:M,eventType:z,title:U}=r;null!=_&&_.length?[n]=_:n=null==M?void 0:M.groupPhoto;let{user:A}=(0,s.Z)("cache-first"),L=(0,a.useCallback)(()=>{null==F||F(),(0,c.Gg)(l.Ei.FIND_EVENTS,M,r.isNewGroup)},[M,r.isNewGroup,F]),B={selectedItemOnMapRef:t,eventLink:I,clickIdContext:S,onCardClick:L,dataEventLabel:$};return(0,y.jsxs)("div",{className:i()("relative flex h-full w-full flex-1 flex-col justify-between rounded-lg bg-white",x),children:[(0,y.jsxs)("div",{className:"flex flex-1 flex-row-reverse overflow-hidden md:flex-row",children:[(0,y.jsx)("div",{className:i()("ml-3 bg-transparent md:ml-0 md:mr-3",{"hidden md:block":!E},"d1n61gxy"),children:(0,y.jsx)(b.Z,O(O({},B),{},{children:(0,y.jsx)(m.Z,{wrapperClassName:"overflow-hidden bg-transparent w-full",imageClassName:"rounded-lg w-full absolute top-0 left-0 object-contain object-center",photo:n,title:U||"",imageSize:{maxWidth:Math.round(v.Hg),maxHeight:v.gQ},forceContainerHeight:v.xp,children:(0,y.jsx)(h.Z,{type:z,className:"absolute left-2 right-2 top-2 hidden md:flex"})})}))}),(0,y.jsxs)("div",{className:"w-full overflow-hidden",children:[(0,y.jsxs)(b.Z,O(O({},B),{},{children:[(0,y.jsx)(f.Z,{isFindPage:T,dateTime:R,isSuggestedDisplayed:C}),(0,y.jsx)(g.Z,{isFindPage:T,className:"pb-1 pt-0 line-clamp-2 lg:line-clamp-3",children:U||""}),(0,y.jsx)(p.Z,{className:"mx-auto mb-2 line-clamp-2 md:mb-4 lg:line-clamp-3",groupName:null==M?void 0:M.name,isNewGroup:null==M?void 0:M.isNewGroup})]})),(0,y.jsx)(d.ZP,{noRuntimeRender:!0,greaterThanOrEqual:"sm",children:(0,y.jsx)(u.Z,{containerName:w,event:r,isShowAttendingLabel:N,isLoggedIn:P,isShowSpotsLeft:j,noFacePile:o,shareTrackingClickIds:k,isNewEventCard:D,userId:null==A?void 0:A.id,showEventChatButton:Z,showSocialLabel:G})})]})]}),(0,y.jsx)(d.ZP,{noRuntimeRender:!0,lessThan:"sm",children:(0,y.jsx)(u.Z,{containerName:w,event:r,isShowAttendingLabel:N,isLoggedIn:P,isShowSpotsLeft:j,noFacePile:o,shareTrackingClickIds:k,isNewEventCard:D,userId:null==A?void 0:A.id,showEventChatButton:!1,showSocialLabel:G})})]})};t.Z=(0,a.memo)((0,a.forwardRef)(w)),n(64480)},72066:function(e,t,n){"use strict";n.d(t,{Z:function(){return eZ}});var r=n(50959),o=n(11217),i=n(19803),a=n.n(i),s=n(65797),l=n(47179),c=n(91757),d=n(48565),u=n(49853),v=n(29874),p=n(54976),f=n(46581),m=n(55853),g=n(45067),b=n(77966),h=n(10474),y=n(86131),j=n(70078),O=n(99527),x=n(11527);let w=(e,t)=>{let n;let{event:o,isLoggedIn:i,containerName:s,noFacePile:l,isShowSpotsLeft:w,showEventTypeTag:P=!0,cardClassNames:E={},clickIdContext:S,eventsShelfQueryLimit:N,shareTrackingClickIds:k,isSuggestedDisplayed:C,dataEventLabel:D,isSimplifiedColumn:$,eventLink:Z}=e,{images:T,dateTime:I,group:F,eventType:G,title:_,tickets:R,going:M,maxTickets:z}=o;T.length?[n]=T:n=null==F?void 0:F.groupPhoto;let U=$?f.pC:f.GK,A=(0,O.Pk)(I),L=(0,r.useCallback)(()=>{(0,u.Gg)(d.Ei.FIND_EVENTS,F,o.isNewGroup)},[F,o.isNewGroup]);return(0,x.jsx)("a",{ref:t,className:a()("inline w-full cursor-pointer hover:no-underline",E.wrapperClassName),"data-event-label":D??"Event card",href:Z,id:S?`event-card-in-${S}`:void 0,onClick:L,children:(0,x.jsxs)("div",{className:"flex h-full w-full flex-col",children:[(0,x.jsx)(h.Z,{wrapperClassName:"bg-gray1",photo:n,title:_||"",imageSize:{maxWidth:U,maxHeight:Math.round(U/f.YC)},imageClassName:"h-full",children:P&&(0,x.jsx)(j.Z,{type:G,className:"absolute left-2 top-2"})}),(0,x.jsxs)("div",{className:a()("flex h-full w-full flex-col justify-between p-3",E.textBlockClassName),children:[(0,x.jsxs)("div",{className:"overflow-hidden",children:[(0,x.jsx)(b.Z,{dateTime:I,isSuggestedDisplayed:C}),(0,x.jsx)(y.Z,{className:a()("pb-1 pt-0 line-clamp-3",E.titleClassName),children:_||""}),(0,x.jsx)(g.Z,{className:"mx-auto my-2",groupName:null==F?void 0:F.name,isNewGroup:null==F?void 0:F.isNewGroup})]}),(0,x.jsxs)("div",{className:"flex w-full justify-between",children:[(0,x.jsx)(m.ZP,{going:M??0,spotsLeftCount:(0,O.iD)({maxTickets:z,going:M}),tickets:R,isTextLine:l||!R,isShowSpotsLeft:w,isShowEventFullLabel:A}),!$&&(0,x.jsxs)("div",{className:"flex space-x-2",children:[(0,x.jsx)(p.ZP,{title:o.title||"",link:o.eventUrl,groupName:F.name,containerName:s,source:c.RK.Events,trackingClickIds:k}),i&&(0,x.jsx)(v.ZP,{id:o.id,isSaved:o.isSaved,containerName:s,eventsShelfQueryLimit:N,useCache:!0})]})]})]})]})})};var P=(0,r.memo)((0,r.forwardRef)(w)),E=n(36122),S=n(80417),N=n(88318),k=n(43540),C=n(80816),D=n(46990),$=n(45743),Z=n(73193);let T=(0,Z.vU)({eventHostedBy:{id:"eventCard.hostedBy",defaultMessage:"Hosted by"},eventGoing:{id:"eventCard.going",defaultMessage:"{NUMBER} going"},eventGoingBeFirst:{id:"eventCard.going.beFirst",defaultMessage:"Be the first"},eventPriceFree:{id:"eventCard.price.free",defaultMessage:"Free"},eventPrice:{id:"eventCard.price",defaultMessage:"From {PRICE}"},onlineEventStartTime:{id:"eventCard.onlineEvent.startTime",defaultMessage:"Starting at {TIME}"},eventStartDayTime:{id:"eventCard.event.startDayTime",defaultMessage:"{WEEKDAY} at {TIME}"},calendarIconAltText:{id:"eventCard.calendarIcon.alt",defaultMessage:"date and time"},checkIconAltText:{id:"eventCard.checkIcon.alt",defaultMessage:"going"},ticketIconAltText:{id:"eventCard.ticketIcon.alt",defaultMessage:"cost"}});function I(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function F(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?I(Object(n),!0).forEach(function(t){(0,o.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):I(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let G=e=>{let{amount:t,currency:n,classNames:r,altText:o}=e;return(0,x.jsxs)("div",{className:a()("flex items-center space-x-1.5 text-gray7",r),children:[(0,x.jsx)(D.ZP,{icon:"ticket",size:20,outline:!0,svgClassName:"text-gray6",alt:o}),(0,x.jsx)("span",{className:"inline",children:t&&n?(0,x.jsx)(S.Z,F(F({},T.eventPrice),{},{values:{PRICE:(0,x.jsx)($.Z,{amount:t,currency:n})}})):(0,x.jsx)(S.Z,F({},T.eventPriceFree))})]})};function _(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function R(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?_(Object(n),!0).forEach(function(t){(0,o.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):_(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let M=e=>{let{going:t,classNames:n,altText:r}=e,o=`${t}`;if(t>=1e3){let e=(Math.floor(t/100)/10).toFixed(1);o=`${e=e.endsWith("0")?Number(e).toFixed(0):e}k`}return(0,x.jsxs)("div",{className:a()("flex items-center space-x-1.5 text-gray7",n),children:[(0,x.jsx)(D.ZP,{icon:"check-2",size:20,outline:!0,svgClassName:"text-gray6",alt:r}),(0,x.jsx)("span",{children:t?(0,x.jsx)(S.Z,R(R({},T.eventGoing),{},{values:{NUMBER:o}})):(0,x.jsx)(S.Z,R({},T.eventGoingBeFirst))})]})};var z=n(46803);let U=e=>{let{dateTime:t,timeZone:n,altText:r}=e;return(0,x.jsxs)("div",{className:"flex items-center space-x-1.5 text-gray7",children:[(0,x.jsx)(D.ZP,{icon:"calendar",size:20,outline:!0,svgClassName:"text-gray6",alt:r}),(0,x.jsx)(z.EventTimeDisplay,{dateTime:t,timeZone:n})]})};var A=n(617);function L(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let B=(e,t,n)=>n&&n.maxWidth?n.maxWidth:e||t?f.an:f.bb,q=(e,t,n)=>e||t?Math.round(n/f.YC):f.Yf,H=e=>{let t,{event:n,clickIdContext:r,dataEventLabel:i,timeZone:l,eventLink:c,imageSize:d,layout:u=A.A.Adaptive}=e,{images:v,dateTime:p,group:f,title:m,feeSettings:g,eventType:b,venues:y}=n,{smd:O}=(0,C.Z)(),w=(0,E.Z)(),{isEarlyBirdDiscount:P,discountedAmount:D,isEarlyBirdDiscountFull:$,onlineDiscountedAmount:Z}=(0,N.u)(n),{feeSettings:I}=(0,k.Gt)(y),F=null==g?void 0:g.amount;if(P&&(F=D),b===s.tw.HYBRID&&(F=null!=g&&g.amount&&null!=I&&I.amount?Math.min(null==g?void 0:g.amount,null==I?void 0:I.amount):null,$)){let e=D||(null==g?void 0:g.amount),t=Z||(null==I?void 0:I.amount);F=e&&t?Math.min(e,t):null}null!=v&&v.length?[t]=v:t=null==f?void 0:f.groupPhoto;let _=u===A.A.Column,R=B(O,_,d),z=q(O,_,R);return(0,x.jsx)("a",{className:"group relative inline w-full cursor-pointer hover:no-underline",href:c,"data-event-label":i??"Event card",id:r?`event-card-in-${r}`:void 0,children:(0,x.jsxs)("div",{className:a()("flex h-full w-full flex-row smd:flex-col smd:flex-col-reverse",{"xs:flex-col xs:flex-col-reverse":_}),children:[(0,x.jsxs)("div",{className:a()("grow space-y-2 pr-4 smd:mt-3",{"xs:mt-3":_}),children:[(0,x.jsx)("h3",{className:a()("text-lg font-semibold leading-6 line-clamp-4 group-hover:underline smd:text-xl smd:leading-6",{"xs:text-xl xs:leading-6":_},"h1lk27w4"),children:m||""}),(0,x.jsxs)("p",{className:"text-sm font-medium text-gray6 line-clamp-2",children:[(0,x.jsx)(S.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?L(Object(n),!0).forEach(function(t){(0,o.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):L(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},T.eventHostedBy)),":\xa0",null==f?void 0:f.name]}),(0,x.jsx)("div",{children:(0,x.jsx)(U,{dateTime:p,timeZone:l,altText:w.formatMessage(T.calendarIconAltText)})}),(0,x.jsxs)("div",{className:"flex flex-wrap gap-x-4 gl:pt-1",children:[(0,x.jsx)(M,{going:(null==n?void 0:n.going)||0,altText:w.formatMessage(T.checkIconAltText)}),(0,x.jsx)(G,{amount:F,currency:null==g?void 0:g.currency,altText:w.formatMessage(T.ticketIconAltText)})]})]}),(0,x.jsx)("div",{className:a()("ml-3 bg-transparent smd:ml-0 gl:mr-0",{"xs:ml-0":_},"d1umy16x"),children:(0,x.jsx)(h.Z,{wrapperClassName:"overflow-hidden bg-transparent w-full",imageClassName:"rounded-lg w-full h-full absolute top-0 left-0 object-cover object-center group-hover:opacity-80",photo:t,title:m||"",imageSize:{maxWidth:R,maxHeight:z},children:(0,x.jsx)(j.Z,{type:b,className:a()("absolute left-2 right-2 top-2 hidden smd:flex",{"xs:flex":_})})})})]})})};var W=(0,r.memo)(H);n(74748);var Y=n(76998);let Q=e=>{let t;let{event:n}=e,{images:r,dateTime:o,group:i,title:s}=n;return null!=r&&r.length?[t]=r:t=null==i?void 0:i.groupPhoto,(0,x.jsxs)("div",{className:"flex w-full flex-1 flex-row",children:[(0,x.jsx)("div",{className:a()("mr-4 hidden overflow-hidden md:block","d1v7zmlk"),children:(0,x.jsx)(h.Z,{wrapperClassName:"w-full",imageClassName:"rounded-lg h-full object-cover object-center",photo:t,title:s||"",imageSize:{maxWidth:84,maxHeight:63}})}),(0,x.jsxs)("div",{className:"w-full overflow-hidden",children:[(0,x.jsx)(y.Z,{className:a()("mb-1 font-medium line-clamp-3 md:mb-1.5","e6v85t4"),children:s||""}),(0,x.jsx)(z.EventTimeDisplay,{dateTime:o,className:a()("font-medium text-gray6 line-clamp-1 lg:line-clamp-2","e1q889kb")})]})]})};var V=(0,r.memo)((0,r.forwardRef)(Q));n(25978);var K=n(92204),J=n.n(K),X=n(42150),ee=n(24391),et=n(38552),en=n(80444);function er(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function eo(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?er(Object(n),!0).forEach(function(t){(0,o.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):er(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let ei=J()(()=>Promise.all([n.e(1127),n.e(28486)]).then(n.bind(n,73758)),{ssr:!1,loadableGenerated:{webpack:()=>[73758]}}),ea=(e,t)=>{var n,o,i,s;let l;let{event:c,noFacePile:v,isShowSpotsLeft:p,containerName:m,isLoggedIn:O,showEventImageOnNarrowScreens:w,clickIdContext:P,isShowAttendingLabel:E,shareTrackingClickIds:S,isSuggestedDisplayed:N,isNewEventCard:k,dataEventLabel:C,showEventChatButton:D,isFindPage:$,isAboveFold:Z,eventLink:T,isRecurringEvents:I,locale:F,onClick:G,showSocialLabel:_}=e,{dateTime:R,group:M,eventType:z,series:U,title:A,images:L}=c;null!=L&&L.length?[l]=L:l=c.featuredEventPhoto?c.featuredEventPhoto:null!==(n=c.group)&&void 0!==n&&n.keyGroupPhoto?null===(s=c.group)||void 0===s?void 0:s.keyGroupPhoto:null==M?void 0:M.groupPhoto;let{user:B}=(0,X.Z)("cache-first"),q=(M.state||M.country||"").toUpperCase(),H=[M.city,q].filter(Boolean).join(", "),W=(0,r.useCallback)(()=>{null==G||G(),(0,u.Gg)(d.Ei.FIND_EVENTS,M,c.isNewGroup??M.isNewGroup)},[c.isNewGroup,M,G]),Y=a()({"h-8 mt-1.5 sm:h-0 sm:mt-0":!O}),Q=a()({"h-0 sm:h-8":!O}),V={selectedItemOnMapRef:t,eventLink:T,clickIdContext:P,onCardClick:W,dataEventLabel:C},K=eo(eo({},c),{},{going:c.going??(null===(o=c.rsvps)||void 0===o?void 0:o.totalCount),group:eo(eo({},c.group),{},{isOrganizer:c.group.isOrganizer??(null===(i=c.group.metadata)||void 0===i?void 0:i.match("ORGANIZER"))})});return(0,x.jsxs)("div",{className:"relative flex w-full flex-col",children:[(0,x.jsxs)("div",{className:"flex flex-1 flex-row-reverse overflow-hidden md:flex-row",children:[(0,x.jsx)("div",{className:a()("ml-3 bg-transparent md:ml-0 md:mr-3",{"hidden md:block":!w},"d15a685b"),children:(0,x.jsx)(en.Z,eo(eo({},V),{},{children:(0,x.jsx)(h.Z,{wrapperClassName:"overflow-hidden bg-transparent w-full",imageClassName:"rounded-lg w-full absolute top-0 left-0 object-contain object-center",photo:l,title:A||"",priority:Z,imageSize:{maxWidth:Math.round(f.Hg),maxHeight:f.gQ},forceContainerHeight:I?f.qU:null,children:(0,x.jsx)(j.Z,{type:z,className:"absolute left-2 right-2 top-2 hidden md:flex"})})}))}),(0,x.jsxs)("div",{className:"w-full overflow-hidden",children:[(0,x.jsxs)(en.Z,eo(eo({},V),{},{children:[(0,x.jsx)(b.Z,{isFindPage:$,dateTime:R,isSuggestedDisplayed:N,isRecurringEventsHeader:I}),(0,x.jsx)(y.Z,{isFindPage:$,className:"pb-1 pt-0 line-clamp-3",children:A||""}),(0,x.jsx)(g.Z,{className:"mx-auto mb-2 md:mb-4",groupName:null==M?void 0:M.name,groupLocation:H,isNewGroup:null==M?void 0:M.isNewGroup})]})),!I&&(0,x.jsx)(ee.ZP,{noRuntimeRender:!0,greaterThanOrEqual:"sm",className:Q,children:(0,x.jsx)(et.Z,{containerName:m,event:K,isShowAttendingLabel:E,isLoggedIn:O,isShowSpotsLeft:p,noFacePile:v,shareTrackingClickIds:S,isNewEventCard:k,userId:null==B?void 0:B.id,showEventChatButton:D,showSocialLabel:_})})]})]}),!I&&(0,x.jsx)(ee.ZP,{noRuntimeRender:!0,lessThan:"sm",className:Y,children:(0,x.jsx)(et.Z,{containerName:m,event:K,isShowAttendingLabel:E,isLoggedIn:O,isShowSpotsLeft:p,noFacePile:v,shareTrackingClickIds:S,isNewEventCard:k,userId:null==B?void 0:B.id,showEventChatButton:D,showSocialLabel:_})}),I&&(0,x.jsx)(ei,{eventData:U.events.edges,locale:F,timezone:c.timezone})]})};var es=(0,r.memo)((0,r.forwardRef)(ea));n(31707);var el=n(89362),ec=n(1970),ed=n(76944),eu=n(44636),ev=n(37043);function ep(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let ef=(0,Z.vU)({eventAttend:{id:"eventCardWithAttend.eventAttend",defaultMessage:"Attend"},onlineEvent:{id:"eventCardWithAttend.onlineEvent",defaultMessage:"Online"}}),em=(e,t)=>{let n;let{event:i,isGroupEvent:s,eventLink:l}=e,{images:v,dateTime:p,group:j,eventType:O,title:w,going:P}=i;null!=v&&v.length?[n]=v:n=null==j?void 0:j.groupPhoto;let E=(O&&O===c.tw.PHYSICAL)??!1,N=(j.state||j.country||"").toUpperCase(),k=[j.city,N].filter(Boolean).join(", "),C=(0,r.useCallback)(()=>{let e=s?el.A.groupUpcomingEventCardClicked:el.A.suggestedEventCardClicked;(0,ed.ZP)({event:"gaEvent",eventCategory:"EventFeedback",eventAction:"click",eventLabel:e}),(0,u.Gg)(d.Ei.FIND_EVENTS,j,i.isNewGroup)},[j,i.isNewGroup,s]);return(0,x.jsx)("a",{ref:t,className:"relative inline w-full cursor-pointer hover:no-underline",href:l,id:"event-card-in-rating-modal",onClick:C,children:(0,x.jsxs)("div",{className:"flex w-full flex-col",children:[(0,x.jsxs)("div",{className:"flex  overflow-hidden  md:flex-row",children:[(0,x.jsxs)("div",{className:"flex w-full flex-col overflow-hidden pr-2",children:[(0,x.jsx)(b.Z,{dateTime:p}),(0,x.jsx)(y.Z,{className:"pb-1 pt-0 line-clamp-3",children:w||""}),(0,x.jsx)(g.Z,{className:"mx-auto mb-2 md:mb-4",groupName:null==j?void 0:j.name})]}),(0,x.jsx)("div",{className:a()("mb-1 ml-3 bg-transparent md:ml-0 md:mr-3","d1efofxw"),children:(0,x.jsx)(h.Z,{wrapperClassName:"bg-transparent w-full",imageClassName:"rounded-lg w-full absolute top-0 left-0 object-contain object-center",photo:n,title:w||"",imageSize:{maxWidth:Math.round(f.Hg),maxHeight:f.gQ}})})]}),(0,x.jsxs)("div",{className:"mr-10 flex w-full flex-row items-center justify-between",children:[(0,x.jsx)(ee.ZP,{className:"flex flex-col",noRuntimeRender:!0,children:E?(0,x.jsx)(ev.Z,{primaryText:(0,x.jsx)(m.EW,{count:P}),secondaryText:k,secondaryTextClassName:"text-gray6"}):(0,x.jsx)(ev.Z,{primaryText:(0,x.jsx)(m.EW,{count:P}),eventType:O})}),(0,x.jsx)(eu.ZP,{variant:eu.c7.SECONDARY,"data-event-label":ec.LU.similarnearByAttend,className:a()("ds-font-small-medium h-8 py-1.5","batgi3y"),children:(0,x.jsx)(S.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?ep(Object(n),!0).forEach(function(t){(0,o.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):ep(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},ef.eventAttend))})]})]})})};var eg=(0,r.memo)((0,r.forwardRef)(em));n(48285);var eb=n(20616);let eh=e=>{let{buttonLabel:t,className:n,style:r}=e;return(0,x.jsx)(eu.ZP,{type:"button",variant:eu.c7.BORDERED_SECONDARY,className:n,style:r,children:t})},ey=(0,Z.vU)({attend:{id:"textColumnView.attend",defaultMessage:"Attend"}}),ej=(e,t)=>{let{event:n,noFacePile:o,isShowSpotsLeft:i,cardClassNames:s={},clickIdContext:l,dataEventLabel:c,eventLink:v}=e,{dateTime:p,group:f,title:h,tickets:j,going:w,maxTickets:P}=n,S=(0,E.Z)(),N=(0,O.Pk)(p),k=(0,r.useCallback)(()=>{(0,u.Gg)(d.Ei.FIND_EVENTS,f,n.isNewGroup)},[f,n.isNewGroup]);return(0,x.jsx)("a",{ref:t,className:a()("inline w-full cursor-pointer hover:no-underline",s.wrapperClassName),"data-event-label":c??"Event card",href:v,id:l?`event-card-in-${l}`:void 0,onClick:k,children:(0,x.jsx)("div",{className:"flex h-full w-full flex-col",children:(0,x.jsxs)("div",{className:a()("flex h-full w-full flex-col justify-between bg-white p-3",s.textBlockClassName),children:[(0,x.jsxs)("div",{className:"overflow-hidden",children:[(0,x.jsx)(b.Z,{dateTime:p,eventTimeClassName:"xs:text-viridian xs:py-2"}),(0,x.jsx)(y.Z,{className:a()("pb-1 pt-0 text-xl",s.titleClassName),children:h||""}),(0,x.jsx)(g.Z,{className:"mb-6",groupName:null==f?void 0:f.name,isNewGroup:null==f?void 0:f.isNewGroup}),(0,x.jsx)(eb.c,{className:"text-sm",hideTime:!0,eventType:n.eventType,venue:n.venue})]}),(0,x.jsxs)("div",{className:"flex w-full justify-between",children:[(0,x.jsx)(m.ZP,{going:w??0,spotsLeftCount:(0,O.iD)({maxTickets:P,going:w}),tickets:j,isTextLine:o||!j,isShowSpotsLeft:i,isShowEventFullLabel:N}),(0,x.jsx)("div",{className:"flex space-x-2",children:(0,x.jsx)(eh,{buttonLabel:S.formatMessage(ey.attend),className:"mb-2 font-medium",style:{padding:"6px 20px"}})})]})]})})})};var eO=(0,r.memo)((0,r.forwardRef)(ej));function ex(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function ew(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?ex(Object(n),!0).forEach(function(t){(0,o.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):ex(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let eP=a()("flex-row justify-start rounded border border-gray2","c1u48s3d"),eE=a()("w-full flex-row justify-start py-4 border-t border-gray3 md:pt-4 md:pb-5"),eS=a()("w-full flex-row justify-start py-3 border-t border-gray3 md:pb-5"),eN=a()("w-full flex-row justify-start rounded-lg md:px-4 md:py-4","m14px31h"),ek=a()("flex-row justify-start","txmv3m7"),eC=(e,t)=>{let n;let{event:r,theme:o,recommendationId:i,recommendationSource:c,dataElementName:d,cardWrapperClassName:u,isGroupEvent:v,showEventImageOnNarrowScreens:p,timeZone:m,isSimplifiedColumn:g,locale:b}=e,h=r.type===s._0.RANKED;switch(o){case f.Yz.MapRow:n=(0,x.jsx)(Y.Z,ew(ew({},e),{},{isSuggestedDisplayed:h}));break;case f.Yz.Column:n=(0,x.jsx)(P,ew(ew({},e),{},{isSuggestedDisplayed:h,isSimplifiedColumn:g}));break;case f.Yz.Row:n=(0,x.jsx)(es,ew(ew({},e),{},{isSuggestedDisplayed:h,isRecurringEvents:!!r.series,locale:b}));break;case f.Yz.GuestCardView:n=(0,x.jsx)(W,ew(ew({},e),{},{isSuggestedDisplayed:h,timeZone:m}));break;case f.Yz.RowWithAttend:n=(0,x.jsx)(eg,ew(ew({},e),{},{isGroupEvent:v}));break;case f.Yz.TextColumn:n=(0,x.jsx)(eO,ew(ew({},e),{},{isSuggestedDisplayed:h}));break;case f.Yz.MinimalView:n=(0,x.jsx)(V,ew(ew({},e),{},{showEventImageOnNarrowScreens:p}));break;default:n=(0,x.jsx)("div",{})}return(0,x.jsx)(l.Z,{ref:t,id:r.id,recommendationId:i??"",recommendationSource:c??"",dataElementName:d,className:a()({[eE]:o===f.Yz.Row,[eP]:o===f.Yz.Column&&!g,"flex-row justify-start rounded":o===f.Yz.Column&&g,[eS]:o===f.Yz.RowWithAttend,"rounded-lg border border-white":o===f.Yz.MapRow,[ek]:o===f.Yz.TextColumn,[eN]:o===f.Yz.MinimalView,"xs:border-2 xs:border-viridian lg:px-5":t},u),children:n})};var eD=(0,r.forwardRef)(eC);n(4662);let e$=(e,t)=>{let{event:n,theme:r,containerName:o,recommendationId:i,recommendationSource:a,noFacePile:s,isShowSpotsLeft:l,isLoggedIn:c,showEventTypeTag:d,cardWrapperClassName:u,cardClassNames:v,dataElementName:p,showEventImageOnNarrowScreens:f,clickIdContext:m,isShowAttendingLabel:g,eventsShelfQueryLimit:b,shareTrackingClickIds:h,isNewEventCard:y,dataEventLabel:j,showEventChatButton:O,isGroupEvent:w,isFindPage:P,timeZone:E,isSimplifiedColumn:S,isAboveFold:N,eventLink:k,locale:C,layout:D,imageSize:$,onClick:Z,showSocialLabel:T}=e;return(0,x.jsx)(eD,{ref:t,clickIdContext:m,event:n,theme:r,containerName:o,recommendationId:i??"",recommendationSource:a??"",dataElementName:p,isLoggedIn:c,noFacePile:s,isShowSpotsLeft:l,showEventTypeTag:d,cardWrapperClassName:u,cardClassNames:v,showEventImageOnNarrowScreens:f,isShowAttendingLabel:g,eventsShelfQueryLimit:b,shareTrackingClickIds:h,isNewEventCard:y,dataEventLabel:j,showEventChatButton:O,isFindPage:P,isAboveFold:N,isGroupEvent:w,timeZone:E,eventLink:k,isSimplifiedColumn:S,locale:C,layout:D,imageSize:$,onClick:Z,showSocialLabel:T})};var eZ=(0,r.memo)((0,r.forwardRef)(e$))},617:function(e,t,n){"use strict";var r;let o;n.d(t,{A:function(){return o}}),(r=o||(o={}))[r.Adaptive=0]="Adaptive",r[r.Row=1]="Row",r[r.Column=2]="Column"},89362:function(e,t,n){"use strict";n.d(t,{A:function(){return r}});let r={eventFeedbackCardSeen:"event_home_feedback_card",starRatingClicked:"event_home_feedback_card_star_click",didNotGoClicked:"event_home_feedback_card_didnt_go_click",feedbackLeftCardSeen:"event_home_feedback_left_card",feedbackModalSeen:"feedback_modal",oneStarFeedback:"feedback_one_star_click",twoStarFeedback:"feedback_two_star_click",threeStarFeedback:"feedback_three_star_click",fourStarFeedback:"feedback_four_star_click",fiveStarFeedback:"feedback_five_star_click",tileClick:"feedback_tile_click",wouldAttendAgain:"feedback_yes_click",wouldNotAttendAgain:"feedback_no_click",inFreeformTextBox:" feedback_text_click",feedbackClosed:" feedback_close_click",feedbackSubmitted:"feedback_submit_click",dismissFeedbackCLicked:"feedback_close_discard_click",dismissFeedbackCanceled:"feedback_close_cancel_click",feedbackConfirmationModalSeen:"feedback_confirmation_modal",suggestedEventCardClicked:"feedback_confirmation_suggested_event_card_click",groupUpcomingEventCardClicked:"feedback_confirmation_upcoming_event_card_click",dismissFeedbackConfirmationModal:"feedback_confirmation_dismiss_click",feedbackConfirmationCloseModal:"feedback_confirmation_close_click",feedbackConfirmationPledgeClicked:"feedback_confirmation_pledge_click"}},88535:function(e,t,n){"use strict";n.d(t,{s:function(){return s}});var r=n(31850),o=n(78003),i=n(22776),a=n(11527);let s=function(e,t,n){let a=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"jpg";return null!=e&&e.source?(0,o.pC)(e.source):null!=e&&e.highResUrl?(0,o.pC)(e.highResUrl):(0,o.oe)(null==e?void 0:e.baseUrl,null==e?void 0:e.id)?i.wm+(0,r.qb)({groupNameOrUrl:null==e?void 0:e.id},t>n):`${e.baseUrl}${e.id}/${Math.round(t)}x${Math.round(n)}.${a}`},l=function(e,t,n){let r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"jpg";return[s(e,t,n,r),`${s(e,1.5*t,1.5*n,r)} 1.5x`,`${s(e,2*t,2*n,r)} 2x`].join(", ")},c=e=>{let{image:t,width:n,height:r,critical:o=!1,className:i,alt:c,pictureClassName:d}=e;return(0,a.jsxs)("picture",{className:d,children:[(0,a.jsx)("source",{srcSet:l(t,n,r,"webp"),type:"image/webp"}),(0,a.jsx)("source",{srcSet:l(t,n,r,"jpg"),type:"image/jpeg"}),(0,a.jsx)("img",{src:s(t,n,r,"jpg"),width:n,height:r,alt:c,loading:o?"eager":"lazy",className:i})]})};t.Z=c},45743:function(e,t,n){"use strict";var r=n(50959),o=n(16337),i=n(13963),a=n(11527);let s=(0,r.memo)(e=>{let{amount:t,currency:n}=e,{locale:r}=(0,o.M)();return(0,a.jsx)(i.Z,{amount:t,locale:r,currency:n})});s.displayName="FormattedCurrency",t.Z=s},49088:function(e,t,n){"use strict";var r=n(11217),o=n(73193),i=n(80417),a=n(46990),s=n(11527);function l(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}let c=(0,o.vU)({attending:{id:"homepage.upcomingEvent.attending",defaultMessage:"Attending"},attendingPast:{id:"homepage.upcomingEvent.attendingPast",defaultMessage:"Attended"}}),d=e=>{let{isPast:t}=e;return(0,s.jsxs)("div",{className:"flex h-8 items-center rounded-lg bg-gray1 p-1 px-2",children:[(0,s.jsx)(a.ZP,{icon:"check",size:23,svgClassName:"text-confirmGreen"}),(0,s.jsx)("span",{className:"ml-1 text-sm font-medium",children:(0,s.jsx)(i.Z,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?l(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):l(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},t?c.attendingPast:c.attending))})]})};t.Z=d},29874:function(e,t,n){"use strict";n.d(t,{ZL:function(){return _},ZP:function(){return R}});var r=n(11217),o=n(96873),i=n(50959),a=n(73193),s=n(36122),l=n(46990),c=n(61310),d=n(22754),u=n(74596),v=n(11137),p=n(61439);function f(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function m(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?f(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):f(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let g={},b=u.Ps`
  mutation saveUnifiedEvent($input: SaveInput!) {
    saveUnifiedEvent(input: $input) {
      event {
        ...BuildMeetupEvent
      }
    }
  }
  ${v.bh}
`;function h(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function y(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?h(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):h(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let j={},O=u.Ps`
  mutation unsaveUnifiedEvent($input: SaveInput!) {
    unsaveUnifiedEvent(input: $input) {
      event {
        id
        isSaved
      }
    }
  }
`;var x=n(16165),w=n(42150),P=n(16337),E=n(32823),S=n(71912),N=n(21754),k=n(44636),C=n(11527);function D(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function $(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?D(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):D(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}let Z=(0,a.vU)({saveEvent:{id:"saveEventStar.saveEvent",defaultMessage:"Save event"},unsaveEvent:{id:"saveEventStar.unsaveEvent",defaultMessage:"Unsave event"}}),T=(e,t)=>{var n,r,o,i,a;let s=(null==e?void 0:null===(n=e.self)||void 0===n?void 0:null===(r=n.savedEvents)||void 0===r?void 0:r.edges)||[],l=Number(null==e?void 0:null===(o=e.self)||void 0===o?void 0:null===(i=o.savedEvents)||void 0===i?void 0:i.totalCount)||1;if(e&&s.length){let n=s.filter(e=>e.node.id!==t),r=(l-1).toString();return{self:$($({},e.self),{},{savedEvents:$($({},null===(a=e.self)||void 0===a?void 0:a.savedEvents),{},{count:r,edges:n})})}}return null},I=(e,t)=>{var n,r,o,i,a,s,l;let c=null==e?void 0:null===(n=e.self)||void 0===n?void 0:null===(r=n.savedEvents)||void 0===r?void 0:r.totalCount,d=null==e?void 0:null===(o=e.self)||void 0===o?void 0:null===(i=o.savedEvents)||void 0===i?void 0:i.edges,[u]=null===(a=(0,E.U)({totalCount:1,edges:[null==t?void 0:null===(s=t.saveUnifiedEvent)||void 0===s?void 0:s.event]}))||void 0===a?void 0:a.edges;return d&&u?$($({},e),{},{self:$($({},null==e?void 0:e.self),{},{savedEvents:$($({},null==e?void 0:null===(l=e.self)||void 0===l?void 0:l.savedEvents),{},{__typename:"MemberEventConnection",count:(c||1)+1,edges:d.concat($($({},u),{},{cursor:"",__typename:"MemberEventEdge"}))})})}):null},F=(e,t,n,r)=>{if("/"===e)return"";let o=`${(0,N.MT8)(n)}${e}`;if(Object.keys(t).length){let e=new URLSearchParams("action=saveEvent");Object.keys(t).forEach(n=>e.append(n,t[n].toString())),r&&(e.append("c",r),e.append("chapterId",r)),o=`${o}?${e.toString()}`}return o},G=e=>({filter:d.HL.Future,sort:d.As.Asc,first:e}),_=e=>{let{id:t,title:n="",isSaved:r,containerName:a,useCache:d=!1,eventsShelfQueryLimit:u,groupId:v,autoSaveEvent:f,onSaveEvent:h,onSaveEventSuccess:E}=e,{0:N,1:D}=(0,i.useState)(r),{0:$,1:_}=(0,i.useState)(!1),{asPath:R,query:M}=(0,o.useRouter)(),z=(0,x.Z)(),{locale:U}=(0,P.M)(),A=(0,s.Z)(),L=z===w.e.LOGGED_IN,B=G(u),[q,{loading:H}]=function(e){let t=m(m({},g),e);return p.D(b,t)}({variables:{input:{eventId:t}},update:(e,t)=>{let{data:n,errors:r}=t;if(r){console.error("Error saving event: ",null==r?void 0:r.map(e=>e.message));return}if(d)try{let t=e.readQuery({query:c.Ee,variables:B}),r=I(t,n);r&&e.writeQuery({query:c.Ee,data:r,variables:B})}catch(e){console.error("save event data not merged with Apollo cache:\n",e)}E&&E()},refetchQueries:["getSavedEvents"]}),[W,{loading:Y}]=function(e){let t=y(y({},j),e);return p.D(O,t)}({variables:{input:{eventId:t}},update:(e,n)=>{let{errors:r}=n;if(r){console.error("Error unsaving event: ",null==r?void 0:r.map(e=>e.message));return}if(d)try{let n=e.readQuery({query:c.Ee,variables:B}),r=T(n,t);r&&e.writeQuery({query:c.Ee,data:r,variables:B})}catch(e){console.error("Unsave event data not merged with Apollo cache:\n",e)}},refetchQueries:["getSavedEvents"]});(0,i.useEffect)(()=>{D(r)},[r]);let Q=e=>{if(e.preventDefault(),e.stopPropagation(),L){if(!H&&!Y)return D(!0),q()}else if(h)h();else{let e=F(R,M,U,v);window.location.href=`https://www.meetup.com/register/?returnUri=${e}`}return null},V=e=>(e.preventDefault(),e.stopPropagation(),H||Y)?null:(D(!1),W()),K=async()=>{await q(),_(!0),D(!0),null==E||E()};return(!N&&f&&!$&&L&&K(),N)?(0,C.jsx)(k.ZP,{className:"text-peach hover:text-lightPeach","data-testid":"unsave-event-button",onClick:V,"aria-label":`${A.formatMessage(Z.unsaveEvent)}${n?` ${n}`:""}`,"data-element-name":(0,S.m)(a,"unsaveButton"),"data-event-label":"unsave-event-icon","data-eventref":t,children:(0,C.jsx)(l.ZP,{icon:"bookmark",alt:A.formatMessage(Z.unsaveEvent)})}):(0,C.jsx)(k.ZP,{className:"text-gray6 hover:text-gray7","data-testid":"save-event-button",onClick:Q,"aria-label":`${A.formatMessage(Z.saveEvent)}${n?` ${n}`:""}`,"data-element-name":(0,S.m)(a,"saveButton"),"data-eventref":t,"data-event-label":"save-event-icon",children:(0,C.jsx)(l.ZP,{outline:!0,icon:"bookmark",alt:A.formatMessage(Z.saveEvent)})})};var R=_},32823:function(e,t,n){"use strict";n.d(t,{SE:function(){return o},U:function(){return a}});var r=n(16391);let o=e=>(0,r.Uy)(e,e=>{var t;if(!e)return e;void 0!==e.totalCount&&(e.count=e.totalCount),e.edges=null==e?void 0:null===(t=e.edges)||void 0===t?void 0:t.map(e=>{var t,n,r,o,i,a,s,l,c,d,u,v,p,f,m,g,b,h,y,j,O,x,w;return null!=e&&e.node&&(null!=e&&null!==(t=e.node)&&void 0!==t&&null!==(n=t.event)&&void 0!==n&&null!==(r=n.chat)&&void 0!==r&&r.channelUrl&&(e.node.event.channelUrl=null==e?void 0:null===(d=e.node)||void 0===d?void 0:null===(u=d.event)||void 0===u?void 0:null===(v=u.chat)||void 0===v?void 0:v.channelUrl),"object"==typeof(null==e?void 0:null===(o=e.node)||void 0===o?void 0:null===(i=o.event)||void 0===i?void 0:i.going)&&(e.node.event.going=null==e?void 0:null===(p=e.node)||void 0===p?void 0:null===(f=p.event)||void 0===f?void 0:null===(m=f.going)||void 0===m?void 0:m.totalCount),null!=e&&null!==(a=e.node)&&void 0!==a&&null!==(s=a.event)&&void 0!==s&&s.group&&(e.node.event.timezone=null==e?void 0:null===(g=e.node)||void 0===g?void 0:null===(b=g.event)||void 0===b?void 0:null===(h=b.group)||void 0===h?void 0:h.timezone,e.node.event.group.groupPhoto=null==e?void 0:null===(y=e.node)||void 0===y?void 0:null===(j=y.event)||void 0===j?void 0:null===(O=j.group)||void 0===O?void 0:O.keyGroupPhoto),null!=e&&null!==(l=e.node)&&void 0!==l&&null!==(c=l.event)&&void 0!==c&&c.featuredEventPhoto&&(e.node.event.images=[null==e?void 0:null===(x=e.node)||void 0===x?void 0:null===(w=x.event)||void 0===w?void 0:w.featuredEventPhoto])),e})}),i=e=>{var t,n,r,o,i,a,s,l,c,d;return null!=e&&e.node&&(null!=e&&e.rsvpState&&(e.node.rsvpState=null==e?void 0:e.rsvpState),"object"==typeof(null==e?void 0:null===(t=e.node)||void 0===t?void 0:t.going)&&(e.node.going=null==e?void 0:null===(o=e.node)||void 0===o?void 0:null===(i=o.going)||void 0===i?void 0:i.totalCount),null!=e&&null!==(n=e.node)&&void 0!==n&&n.group&&(e.node.timezone=null==e?void 0:null===(a=e.node)||void 0===a?void 0:null===(s=a.group)||void 0===s?void 0:s.timezone,e.node.group.groupPhoto=null==e?void 0:null===(l=e.node)||void 0===l?void 0:null===(c=l.group)||void 0===c?void 0:c.keyGroupPhoto),null!=e&&null!==(r=e.node)&&void 0!==r&&r.featuredEventPhoto&&(e.node.images=[null==e?void 0:null===(d=e.node)||void 0===d?void 0:d.featuredEventPhoto])),e},a=e=>(0,r.Uy)(e,e=>{var t;if(!e)return e;void 0!==e.totalCount&&(e.count=e.totalCount),e.edges=null==e?void 0:null===(t=e.edges)||void 0===t?void 0:t.map(i)})},71912:function(e,t,n){"use strict";function r(e,t,n){let r;return n&&(r=n.split(" ").join("-").toLowerCase()),n?`${e}-${t}-${r}`:`${e}-${t}`}n.d(t,{m:function(){return r}})},4662:function(e){e.exports={c1u48s3d:"c1u48s3d",m14px31h:"m14px31h",txmv3m7:"txmv3m7"}},74748:function(e){e.exports={h1lk27w4:"h1lk27w4",d1umy16x:"d1umy16x"}},64480:function(e){e.exports={d1n61gxy:"d1n61gxy"}},25978:function(e){e.exports={d1v7zmlk:"d1v7zmlk",e6v85t4:"e6v85t4",e1q889kb:"e1q889kb"}},31707:function(e){e.exports={d15a685b:"d15a685b"}},48285:function(e){e.exports={d1efofxw:"d1efofxw",batgi3y:"batgi3y"}}}]);