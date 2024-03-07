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
                            <div class="ml-7 md:ml-0"><button class="bg-tranparent flex items-center gap-2.5 border-none pt-4 font-medium hover:cursor-pointer hover:no-underline" type="button">
                                    <div style="width: 24px; height: 24px;" data-icon-c="icon-391">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg fill-current" data-src="https://secure.meetupstatic.com/next/images/design-system-icons/arrow-left-outline.svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width:24px;height:24px;width:24px;height:24px" data-icon="icon-391">
                                                <title>icon</title>
                                                <line x1="8.75" y1="12" x2="17.25" y2="12" stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5302 4.53033C11.8231 4.23744 11.8231 3.76256 11.5302 3.46967C11.2373 3.17678 10.7624 3.17678 10.4695 3.46967L3.17663 10.7626C2.49321 11.446 2.49321 12.554 3.17663 13.2374L10.4695 20.5303C10.7624 20.8232 11.2373 20.8232 11.5302 20.5303C11.8231 20.2374 11.8231 19.7626 11.5302 19.4697L4.81051 12.75H21.2499C21.6641 12.75 21.9999 12.4142 21.9999 12C21.9999 11.5858 21.6641 11.25 21.2499 11.25H4.81051L11.5302 4.53033Z"></path>
                                            </svg></div>
                                    </div>Back to event
                                </button>
                            </div>

                            <hr>

                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <div class="message-box _success _failed">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        <h2> Your payment failed </h2>
                                        <p> Try again later </p>

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

    <style>
        ._failed {
            border-bottom: solid 4px red !important;
        }

        ._failed i {
            color: red !important;
        }

        ._success {
            box-shadow: 0 15px 25px #00000019;
            padding: 45px;
            width: 100%;
            text-align: center;
            margin: 40px auto;
            border-bottom: solid 4px #28a745;
        }

        ._success i {
            font-size: 55px;
            color: #28a745;
        }

        ._success h2 {
            margin-bottom: 12px;
            font-size: 40px;
            font-weight: 500;
            line-height: 1.2;
            margin-top: 10px;
        }

        ._success p {
            margin-bottom: 0px;
            font-size: 18px;
            color: #495057;
            font-weight: 500;
        }
    </style>
</body>

</html>
