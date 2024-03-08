<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="service" content="web-next" />
    <meta name="X-Location" content="east" />
    <meta name="X-Build-Version" content="653174276de4c8f5413fa3e7dd4444df3907735b" />
    <title>Meetup | Find Local Groups, Events, and Activities Near You</title>
    <link rel="preload" href="{{ asset('static/css/bcea3cd8d38f11bc.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('static/css/bcea3cd8d38f11bc.css') }}" data-n-g="" />
    <link rel="preload" href="{{ asset('static/css/75ee24eefa911890.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('static/css/75ee24eefa911890.css') }}" data-n-p="" /><noscript data-n-css=""></noscript>

</head>

<body class="font-body" style="overflow: visible; height: auto">
    <div id="__next"><noscript id="google-tag-manager"></noscript>
        <div role="status" aria-live="polite" class="sr-only"></div>
        <div class=""><a class="text-viridian focus:p-2 bg-white c1r8us06" href="#main">Skip to content</a>
            <div id="a11y-announcement"></div>
            <div class="flex min-h-screen flex-col" id="page" data-event-category="eventHome">
                <div class="opacity-100" style="opacity: 0; pointer-events: none; transition: opacity 200ms linear 0s;">
                    <div class="fixed left-0 top-0 z-progress h-[3px] w-full w-full bg-[#00a6bf] drop-shadow" style="margin-left: -100%; transition: margin-left 200ms linear 0s;">
                        <div class="absolute right-0 block h-full w-[100px] opacity-100" style="box-shadow: rgb(0, 166, 191) 0px 0px 10px, rgb(0, 166, 191) 0px 0px 5px; transform: rotate(3deg) translate(0px, -4px);"></div>
                    </div>

                </div>
                @include('inc.evento-front-nav')
                <div class="flex flex-grow flex-col">
                    <main id="main" class="flex flex-grow flex-col items-center justify-between">
                        <div class="flex flex-grow flex-col items-center"></div>
                        <div class="px-5 w-full border-b border-shadowColor bg-white py-2 lg:py-6" data-event-label="top">
                            <div class="md:max-w-screen mx-auto">
                                <h1 class="overflow-hidden overflow-ellipsis text-3xl font-bold leading-snug">{{ @$event->title }} </h1><a href="https://www.meetup.com/new-zealand-backpackers/events/299156767//attendees/" class="block w-fit hover:no-underline" data-event-label="hosted-by" aria-label="Hosted By Chogo R.">
                                </a>
                            </div>

                            <div class="flex">
                                <div class="ml-7 md:ml-0"><button class="bg-tranparent flex items-center gap-2.5 border-none pt-4 font-medium hover:cursor-pointer hover:no-underline" type="button">
                                        <div style="width: 24px; height: 24px;" data-icon-c="icon-391">
                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg fill-current" data-src="https://secure.meetupstatic.com/next/images/design-system-icons/arrow-left-outline.svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width:24px;height:24px;width:24px;height:24px" data-icon="icon-391">
                                                    <title>icon</title>
                                                    <line x1="8.75" y1="12" x2="17.25" y2="12" stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5302 4.53033C11.8231 4.23744 11.8231 3.76256 11.5302 3.46967C11.2373 3.17678 10.7624 3.17678 10.4695 3.46967L3.17663 10.7626C2.49321 11.446 2.49321 12.554 3.17663 13.2374L10.4695 20.5303C10.7624 20.8232 11.2373 20.8232 11.5302 20.5303C11.8231 20.2374 11.8231 19.7626 11.5302 19.4697L4.81051 12.75H21.2499C21.6641 12.75 21.9999 12.4142 21.9999 12C21.9999 11.5858 21.6641 11.25 21.2499 11.25H4.81051L11.5302 4.53033Z"></path>
                                                </svg></div>
                                        </div>Back to event
                                    </button></div>
                                <div class="mt-8 rounded-lg px-6 gl:w-full xl:w-[1120px] xl:px-0">

                                    <div class="bg-white p-6">
                                        <h1 class="text-3xl font-semibold">You're going!</h1>
                                        <div class="relative overflow-hidden block md:hidden mt-3 rounded-xs" style="height: 140px;">
                                            <img alt="Meetup HTB Morocco : 9th Event" loading="lazy" width="286" height="140" decoding="async" data-nimg="1" class="rounded-t-lg rounded-lg " src="https://secure-content.meetupstatic.com/images/classic-events/516027012/286x140.webp?w=640" style="color: transparent;">
                                        </div>
                                        <div class="mt-6 grid grid-cols-2 gap-6">
                                            <div class="relative overflow-hidden hidden md:block rounded-lg">
                                                {!!DNS2D::getBarcodeHTML("Your reservation is confirmed , you can come at : ".$reservation->event->start_date, 'QRCODE', 15, 15) !!}
                                            </div>
                                            <div>
                                                <p class="font-semibold leading-6">{{$reservation->event->title}}</p><span class="my-2 flex items-center text-primary">
                                                    <div style="width: 20px; height: 20px;" data-icon-c="icon-392">
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="injected-svg fill-current" data-src="https://secure.meetupstatic.com/next/images/design-system-icons/calendar-confirmed-outline.svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width:20px;height:20px;width:20px;height:20px" data-icon="icon-392">
                                                                <title>icon</title>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 2.44772 6.44772 2 7 2C7.55228 2 8 2.44772 8 3V4H16V3C16 2.44772 16.4477 2 17 2C17.5523 2 18 2.44772 18 3V4H19C20.1046 4 21 4.89543 21 6V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V6C3 4.89543 3.89543 4 5 4H6V3ZM19 5.5H5C4.72386 5.5 4.5 5.72386 4.5 6V19C4.5 19.2761 4.72386 19.5 5 19.5H19C19.2761 19.5 19.5 19.2761 19.5 19V6C19.5 5.72386 19.2761 5.5 19 5.5ZM18 8.75C18 9.16421 17.6642 9.5 17.25 9.5H6.75C6.33579 9.5 6 9.16421 6 8.75C6 8.33579 6.33579 8 6.75 8H17.25C17.6642 8 18 8.33579 18 8.75ZM16.0715 12.4857C16.3397 12.1701 16.3013 11.6968 15.9857 11.4285C15.6701 11.1603 15.1968 11.1987 14.9285 11.5143L11.1752 15.93L9.49827 14.4394C9.18869 14.1643 8.71463 14.1921 8.43944 14.5017C8.16425 14.8113 8.19214 15.2854 8.50173 15.5606L10.3697 17.2209C10.8937 17.6868 11.6984 17.6305 12.1525 17.0962L16.0715 12.4857Z"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="flex flex-col text-sm uppercase leading-5 tracking-tight ml-1 text-sm normal-case leading-6 md:text-base">
                                                        <time class="" datetime="2024-03-08T21:00:00+01:00[Africa/Casablanca]" title="Fri Mar 08 2024 21:00:00 GMT+0200 (Israel Standard Time)">
                                                    
                                                           {{ $reservation->event->start_date}}
                                                    </time>
                                                </div>
                                                </span>
                                                <div class="mt-6 sm:mt-0">
                                                    <div class="my-2.5">
                                                        <div><button tabindex="0" role="button" class="cursor-pointer text-viridian ds-font-body-medium xs:w-[316px] sm:w-full max-w-[380px] mb-4 s17sl16g" data-event-label="add-event-to-calendar" aria-expanded="true">Add to calendar</button></div>
                                                        <div class="flex gap-4">
                                                            <div class="sm:w-full"><button class="h-12 items-center max-w-[380px] xs:w-[316px] sm:w-full  flex justify-center font-medium py-3.5 lg:py-2.5 lg:px-8 px-4 rounded-lg border-2 border-viridian rounded-lg leading-8 transition-all fill-current text-viridian hover:border-buttonHoverSecondary focus:outline focus:outline-offset-2 focus:outline-2 focus:outline-viridian" aria-label="Share event Meetup HTB Morocco : 9th Event" tabindex="0" data-element-name="share-btn-share-click" data-event-label="share-btn-share-click" data-testid="share-btn">
                                                                    <div class="flex items-center flex-row-reverse">
                                                                        <div data-icon-c="icon-393">
                                                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg fill-current" data-src="https://secure.meetupstatic.com/next/images/design-system-icons/share-outline.svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-icon="icon-393">
                                                                                    <title>Share this event</title>
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8232 5.23741C10.9807 5.07992 11.25 5.19146 11.25 5.41419L11.25 14.25C11.25 14.6642 11.5858 15 12 15C12.4142 15 12.75 14.6642 12.75 14.25V5.41418C12.75 5.19146 13.0193 5.07992 13.1768 5.23741L15.9697 8.0303C16.2626 8.32319 16.7374 8.32319 17.0303 8.0303C17.3232 7.73741 17.3232 7.26253 17.0303 6.96964L13.2374 3.17675C12.554 2.49333 11.446 2.49333 10.7626 3.17675L6.96967 6.96964C6.67678 7.26253 6.67678 7.73741 6.96967 8.0303C7.26256 8.32319 7.73744 8.32319 8.03033 8.0303L10.8232 5.23741ZM9.25 10H6C4.89543 10 4 10.8954 4 12V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V12C20 10.8954 19.1046 10 18 10H14.75V11.5H18C18.2761 11.5 18.5 11.7239 18.5 12V20C18.5 20.2761 18.2761 20.5 18 20.5H6C5.72386 20.5 5.5 20.2761 5.5 20V12C5.5 11.7239 5.72386 11.5 6 11.5H9.25V10Z"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <a href="{{route('downloadPDF',['id'=>$reservation->id])}}" class="px-2"> Export as pdf </a>
                                                                    </div>
                                                                </button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </main>
                </div>
                @include('inc.evento-front-footer')
            </div>
        </div>
        <div id="modal"></div>
    </div>

    
    <script type="text/javascript" id="customClickToDatalayer">
        var eventAtt = google_tag_manager["rm"]["2062945"](27);
        if (void 0 != eventAtt) {
            var eventAttList = eventAtt.split("::"),
                category = eventAttList[0],
                action = eventAttList[1],
                label = eventAttList[2];
            window.dataLayer.push({
                event: "customClickEvent",
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            })
        };
    </script>
</body>

</html>
