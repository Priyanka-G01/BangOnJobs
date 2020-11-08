<!DOCTYPE html>
<!-- saved from url=(0025)https://web.whatsapp.com/ -->
<html class="js serviceworker adownload cssanimations csstransitions webp webp-alpha webp-animation webp-lossless" dir="LTR" loc="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title>(2) WhatsApp</title><meta name="viewport" content="width=device-width"><meta name="google" content="notranslate"><meta name="format-detection" content="telephone=no"><meta name="description" content="Quickly send and receive WhatsApp messages right from your computer."><meta name="og:description" content="Quickly send and receive WhatsApp messages right from your computer."><meta name="og:url" content="https://web.whatsapp.com/"><meta name="og:title" content="WhatsApp Web"><meta name="og:image" content="https://static.facebook.com/images/whatsapp/www/whatsapp-promo.png"><link rel="apple-touch-icon" sizes="194x194" href="https://web.whatsapp.com/apple-touch-icon.png" type="image/png"><link rel="stylesheet" href="./volunteers_files/cssm_qr.81e121c10bea9424f50398eed19fffcb.css"><style>html, body, #app {
              height: 100%;
              width: 100%;
              overflow: hidden;
              padding: 0;
              margin: 0;
          }

          #app {
              position: absolute;
              top: 0;
              left: 0;
          }

          #startup, #initial_startup {
              width: 100%;
              height: 100%;
              position: fixed;
              background-color: #f0f0f0;

              -moz-user-select: none;
              -webkit-user-select: none;

              display: flex;
              align-items: center;
              justify-content: center;
              display: -webkit-box;
              display: -webkit-flex;
              -webkit-align-items: center;
              -webkit-justify-content: center;
              flex-direction: column;
              -webkit-flex-direction: column;
          }

          .spinner-container {
              -webkit-animation: rotate 2s linear infinite;
                      animation: rotate 2s linear infinite;
              z-index: 2;
          }

          .spinner-path {
              stroke-dasharray: 1,150; /* 1%, 101% circumference */
              stroke-dashoffset: 0;
              stroke: #acb9bf;
              stroke-linecap: round;
              -webkit-animation: dash 1.5s ease-in-out infinite;
                      animation: dash 1.5s ease-in-out infinite;
          }

          @keyframes rotate {
              100% { transform: rotate(360deg); }
          }
          @-webkit-keyframes rotate{
              100% { -webkit-transform: rotate(360deg); }
          }

          @keyframes dash {
              0% {
                  stroke-dasharray: 1,150;  /* 1%, 101% circumference */
                  stroke-dashoffset: 0;
              }
              50% {
                  stroke-dasharray: 90,150; /* 70%, 101% circumference */
                  stroke-dashoffset: -35;   /* 25% circumference */
              }
              100% {
                  stroke-dasharray: 90,150; /* 70%, 101% circumference */
                  stroke-dashoffset: -124;  /* -99% circumference */
              }
          }
          @-webkit-keyframes dash {
              0% {
                  stroke-dasharray: 1,150;  /* 1%, 101% circumference */
                  stroke-dashoffset: 0;
              }
              50% {
                  stroke-dasharray: 90,150; /* 70%, 101% circumference */
                  stroke-dashoffset: -35;   /* 25% circumference */
              }
              100% {
                  stroke-dasharray: 90,150; /* 70%, 101% circumference */
                  stroke-dashoffset: -124;  /* -99% circumference */
              }
          }

          .progress-container {
            width: 360px;
            position: fixed;
            padding-top: 120px;
            top: 50%;
            left: 50%;
            margin-left: -180px;
          }

          progress {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 3px;
            border: none;
            margin: 0;
            color: #00d9bb;
            background-color: #e6e6e6;
          }

          progress[value]::-webkit-progress-bar {
            background-color: #e6e6e6;
          }

          progress[value]::-webkit-progress-value {
              background-color: #00d9bb;
              transition: width 0.45s ease;
          }

          progress[value]::-moz-progress-bar {
              background-color: #00d9bb;
              transition: width 0.45s ease;
          }</style><script id="progress_script_/vendor1~app.99bb65c11f33ab3979db.js" type="text/javascript" charset="utf-8" src="./volunteers_files/vendor1_app.99bb65c11f33ab3979db.js.download"></script><script id="progress_script_/vendors~app2.1948be575c1b9b7c39e9.js" type="text/javascript" charset="utf-8" src="./volunteers_files/vendors_app2.1948be575c1b9b7c39e9.js.download"></script><script id="progress_script_/app.4666d10327cd1dac6da3.js" type="text/javascript" charset="utf-8" src="./volunteers_files/app.4666d10327cd1dac6da3.js.download"></script><link id="progress_script_/cssm_app.f8cd83b3e4d7c9451891c6a1fec34bf8.css" rel="stylesheet" href="./volunteers_files/cssm_app.f8cd83b3e4d7c9451891c6a1fec34bf8.css"><script id="progress_script_/app2.85d299d29db566c4295d.js" type="text/javascript" charset="utf-8" src="./volunteers_files/app2.85d299d29db566c4295d.js.download"></script><style id="asset-style" type="text/css"></style><script charset="utf-8" src="./volunteers_files/svg.fdab5dc40410d0001200.js.download"></script><script charset="utf-8" src="./volunteers_files/vendors_pdf.1f3f924e4c525d6d58a3.js.download"></script><script charset="utf-8" src="./volunteers_files/pdf.faa97af136d7d4f146fa.js.download"></script><script charset="utf-8" src="./volunteers_files/vendors_lazy_loaded_high_priority_components_lazy_loaded_low_priority_components.3b23bde55dfcc5e37ce0.js.download"></script><script charset="utf-8" src="./volunteers_files/lazy_loaded_high_priority_components_lazy_loaded_low_priority_components.793bd822e43e5e8e8455.js.download"></script><script charset="utf-8" src="./volunteers_files/lazy_loaded_high_priority_components.061eff28fdee667809b2.js.download"></script><script charset="utf-8" src="./volunteers_files/vendors_lazy_loaded_low_priority_components.d9916f7b2d102dc16137.js.download"></script><script charset="utf-8" src="./volunteers_files/lazy_loaded_low_priority_components.6228f650f7d940df5854.js.download"></script><script charset="utf-8" src="./volunteers_files/en-GB.098679f514a0462ca098.js.download"></script><script charset="utf-8" src="./volunteers_files/en.7644171bf2341e9f69e2.js.download"></script><link id="favicon" rel="shortcut icon" type="image/png" href="https://web.whatsapp.com/img/f02_c83a3786caa656cdcea06396bbc6c1fc.png" src="/img/f02_c83a3786caa656cdcea06396bbc6c1fc.png"></head><body class="web"><script>try {
    var systemThemeDark;
    var theme = window.localStorage.getItem('theme');
    var systemThemeMode = window.localStorage.getItem('system-theme-mode');
    if ((systemThemeMode === "true" || !theme) && window.matchMedia) {
      var systemTheme = window.matchMedia(
        '(prefers-color-scheme: dark)',
      );
      systemThemeDark = systemTheme && systemTheme.matches;
    }
    if ((theme === '"dark"') || systemThemeDark) document.body.classList.add('dark');
  } catch(e) {}</script><div id="app" data-app2="/app2.85d299d29db566c4295d.js" data-app="/app.4666d10327cd1dac6da3.js" data-vendor1="/vendor1~app.99bb65c11f33ab3979db.js" data-vendor2="/vendors~app2.1948be575c1b9b7c39e9.js" data-app-size="2503981" data-vendor1-size="1497082" data-vendor2-size="203400" data-cssm-app="/cssm_app.f8cd83b3e4d7c9451891c6a1fec34bf8.css"><div class="_347-w _2UMYL app-wrapper-web font-fix os-win"><span></span><span></span><span></span><span></span><span></span><div tabindex="-1" class="h70RQ two"><div class="_29RFr"></div><div class="YD4Yw"><div class="_1-iDe _1xXdX"><span class="_1V8rX"></span></div><div class="_1-iDe Wu52Z"><span class="_1V8rX"></span></div><div class="_1-iDe _14VS3"><span class="_1V8rX"></span></div></div><div class="_1-iDe _1xXdX"><div id="side" class="_1KyAW"><header class="_1QUKR"><div class="_1MXsz"><div class="_1BjNO" style="height: 40px; width: 40px; cursor: pointer;"><img src="./volunteers_files/pp" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_3euVJ"><div class="_3All_ _3NrAe"><span><div class="PVMjB"><div aria-disabled="false" role="button" tabindex="0" title="Status"><span data-testid="status-v3-unread" data-icon="status-v3-unread" class=""><svg id="df9d3429-f0ef-48b5-b5eb-f9d27b2deba6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12.072 1.761a10.05 10.05 0 0 0-9.303 5.65.977.977 0 0 0 1.756.855 8.098 8.098 0 0 1 7.496-4.553.977.977 0 1 0 .051-1.952zM1.926 13.64a10.052 10.052 0 0 0 7.461 7.925.977.977 0 0 0 .471-1.895 8.097 8.097 0 0 1-6.012-6.386.977.977 0 0 0-1.92.356zm13.729 7.454a10.053 10.053 0 0 0 6.201-8.946.976.976 0 1 0-1.951-.081v.014a8.097 8.097 0 0 1-4.997 7.209.977.977 0 0 0 .727 1.813l.02-.009z"></path><path fill="#009588" d="M19 1.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"></path></svg></span></div><span></span></div><div class="PVMjB"><div aria-disabled="false" role="button" tabindex="0" title="New chat"><span data-testid="chat" data-icon="chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M19.005 3.175H4.674C3.642 3.175 3 3.789 3 4.821V21.02l3.544-3.514h12.461c1.033 0 2.064-1.06 2.064-2.093V4.821c-.001-1.032-1.032-1.646-2.064-1.646zm-4.989 9.869H7.041V11.1h6.975v1.944zm3-4H7.041V7.1h9.975v1.944z"></path></svg></span></div><span></span></div><div class="PVMjB"><div aria-disabled="false" role="button" tabindex="0" title="Menu"><span data-testid="menu" data-icon="menu" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></span></div><span></span></div></span></div></div></header><span class="_1DzHI"><div class="_2kJqr"><div class="_3kqUo _2ne38 _1evad"><div class="_2vbYK"><span data-testid="alert-notification" data-icon="alert-notification" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48"><path fill="currentColor" d="M24.154 2C11.919 2 2 11.924 2 24.165S11.919 46.33 24.154 46.33s22.154-9.924 22.154-22.165S36.389 2 24.154 2zm-.744 15.428v-.618c0-.706.618-1.324 1.324-1.324s1.323.618 1.323 1.324v.618c2.559.618 4.412 2.823 4.412 5.559v3.176l-8.294-8.294a5.056 5.056 0 0 1 1.235-.441zm1.323 15.706a1.77 1.77 0 0 1-1.765-1.765h3.529a1.768 1.768 0 0 1-1.764 1.765zm7.236-.883l-1.765-1.765H17.233v-.882l1.765-1.765v-4.853a5.56 5.56 0 0 1 .794-2.912l-2.559-2.559 1.147-1.147 14.735 14.736-1.146 1.147z"></path></svg></span></div><div class="_1H4e5"><div class="aaIq_">Get notified of new messages</div><div class="_1Ox3-"><span class="mJBPm"><span class="zKq5Y">Turn on desktop notifications</span><span data-testid="chevron-right-text" data-icon="chevron-right-text" class="_2Yb1H"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 12" width="8" height="12"><path fill="currentColor" d="M2.173 1l4.584 4.725-4.615 4.615-1.103-1.103 3.512-3.512L1 2.173 2.173 1z"></path></svg></span></span></div></div></div></div></span><div tabindex="-1" class="_2EoyP"><div class="_3qx7_"><button class="_3e4VU"><div class="_1MdKA gt-MT"><span data-testid="back" data-icon="back" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12 4l1.4 1.4L7.8 11H20v2H7.8l5.6 5.6L12 20l-8-8 8-8z"></path></svg></span></div><div class="_1MdKA w-vsN"><span data-testid="search" data-icon="search" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M15.009 13.805h-.636l-.22-.219a5.184 5.184 0 0 0 1.256-3.386 5.207 5.207 0 1 0-5.207 5.208 5.183 5.183 0 0 0 3.385-1.255l.221.22v.635l4.004 3.999 1.194-1.195-3.997-4.007zm-4.808 0a3.605 3.605 0 1 1 0-7.21 3.605 3.605 0 0 1 0 7.21z"></path></svg></span></div></button><span></span><div class="J3VFH">Search or start new chat</div><label class="_3xpD_"><div tabindex="-1" class="_2FVVk cBxw-"><div class="_2FbwG" style="visibility: visible;"></div><div class="_3FRCZ copyable-text selectable-text" contenteditable="true" data-tab="3" dir="ltr"></div></div></label></div></div><div class="_1qDvT _3R02z" id="pane-side"><div tabindex="-1" data-tab="4"><div class=""><div aria-label="Chat list. Press right arrow key on a chat to open chat context menu." class="-GlrD _2xoTX" role="region" style="height: 13320px;"><div class="_210SC" style="z-index: 184; transition: none 0s ease 0s; height: 72px; transform: translateY(0px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ _8Uqu5"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="Codefury 3.0" class="_3ko75 _5h6Y_ _3Whw5">Codefury 3.0</span></div><div class="m61XR">08:31</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Matte hege madbeku?‬"><span dir="auto" class="_5h6Y_ _3Whw5">Sharath</span><span>:&nbsp;</span><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">Matte hege madbeku?</span></span></div><div class="m61XR"><span><div class="ZKn2B" style="transform: scaleX(1) scaleY(1); opacity: 1;"><span class="_31gEB" aria-label="2 unread messages">2</span></div></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 183; transition: none 0s ease 0s; height: 72px; transform: translateY(1152px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(1)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="KKSP" class="_3ko75 _5h6Y_ _3Whw5">KKSP</span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Yeah‬"><span dir="auto" class="_5h6Y_ _3Whw5">Kavana</span><span>:&nbsp;</span><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">Yeah</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 182; transition: none 0s ease 0s; height: 72px; transform: translateY(1080px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(2)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="Jai TATVA! 🔥" class="_3ko75 _5h6Y_ _3Whw5">Jai TATVA! <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🔥" draggable="false" class="b68 emoji wa _3Whw5" style="background-position: -20px -80px;"></span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Adhamya now has yet another event to cherish! 

UVCE ADHAMYA takes this opportunity to thank everyone who were a part of UVCE Vaibhava. Your participation in the event has boosted our spirit to conduct more of these! ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ಭಾಗವಹಿಸಿ, ಅದನ್ನು ಯಶಸ್ವಿಗೊಳಿಸಿದ ಎಲ್ಲರಿಗೂ ಧನ್ಯವಾದಗಳು! 

UVCE Adhamya also thanks all the clubs and club coordinators for making the event a successful one by organising various activities in such a short notice. ಕಡಿಮೆ ಸಮಯದಲ್ಲಿ ಅಚ್ಚುಕಟ್ಟಾಗಿ ಕಾರ್ಯಕ್ರಮಗಳನ್ನು ನಿರ್ವಹಿಸಿದ ಸಂಘಗಳನ್ನು ಅದಮ್ಯ ತಂಡ ವಂದಿಸುತ್ತದೆ.  

Kindly fill the feedback form, give us your honest opinion, and help us get ourselves better! ಈ ಕೆಳಗಿನ ಫೀಡ್ಬ್ಯಾಕ್ ಫಾರ್ಮ್ ನಲ್ಲಿ ನಿಮ್ಮ ಅಭಿಪ್ರಾಯ ತಿಳಿಸಿ!

http://bit.ly/vaibhavafeedback

In case you missed UVCE Vaibhava, you can still watch it on YouTube. ಒಂದು ವೇಳೆ ನೀವು ವೈಭವದಲ್ಲಿ ಭಾಗವಹಿಸದಿದ್ದಲ್ಲಿ, ಯೂಟ್ಯೂಬ್ ಅಲ್ಲಿ ನೋಡಬಹುದು.

https://youtu.be/45CG64OghEQ‬"><span dir="auto" class="_5h6Y_ _3Whw5">+91 90666 25513</span><span>:&nbsp;</span><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">Adhamya now has yet another event to cherish!&nbsp;&nbsp;&nbsp;UVCE ADHAMYA takes this opportunity to thank everyone who were a part of <strong class="_3Whw5">UVCE Vaibhava</strong>. Your participation in the event has boosted our spirit to conduct more of these! ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ಭಾಗವಹಿಸಿ, ಅದನ್ನು ಯಶಸ್ವಿಗೊಳಿಸಿದ ಎಲ್ಲರಿಗೂ ಧನ್ಯವಾದಗಳು!&nbsp;&nbsp;&nbsp;UVCE Adhamya also thanks all the clubs and club coordinators for making the event a successful one by organising various activities in such a short notice. ಕಡಿಮೆ ಸಮಯದಲ್ಲಿ ಅಚ್ಚುಕಟ್ಟಾಗಿ ಕಾರ್ಯಕ್ರಮಗಳನ್ನು ನಿರ್ವಹಿಸಿದ ಸಂಘಗಳನ್ನು ಅದಮ್ಯ ತಂಡ ವಂದಿಸುತ್ತದೆ.&nbsp;&nbsp;&nbsp;&nbsp;Kindly fill the feedback form, give us your honest opinion, and help us get ourselves better! ಈ ಕೆಳಗಿನ ಫೀಡ್ಬ್ಯಾಕ್ ಫಾರ್ಮ್ ನಲ್ಲಿ ನಿಮ್ಮ ಅಭಿಪ್ರಾಯ ತಿಳಿಸಿ!&nbsp;&nbsp;http://bit.ly/vaibhavafeedback&nbsp;&nbsp;In case you missed UVCE Vaibhava, you can still watch it on YouTube. ಒಂದು ವೇಳೆ ನೀವು ವೈಭವದಲ್ಲಿ ಭಾಗವಹಿಸದಿದ್ದಲ್ಲಿ, ಯೂಟ್ಯೂಬ್ ಅಲ್ಲಿ ನೋಡಬಹುದು.&nbsp;&nbsp;https://youtu.be/45CG64OghEQ</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 181; transition: none 0s ease 0s; height: 72px; transform: translateY(1008px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(3)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Daddy" class="_3ko75 _5h6Y_ _3Whw5">Daddy</span><div class="_3XFan"></div></span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪https://youtu.be/aIsu9SPcGbU‬"><div class="zFnXi _2RFeE"><span data-testid="status-dblcheck" data-icon="status-dblcheck" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span></div><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">https://youtu.be/aIsu9SPcGbU</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 180; transition: none 0s ease 0s; height: 72px; transform: translateY(936px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(4)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="PS whole cube" class="_3ko75 _5h6Y_ _3Whw5">PS whole cube</span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Ha‬"><span dir="auto" class="_5h6Y_ _3Whw5">Preethi</span><span>:&nbsp;</span><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">Ha</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 179; transition: none 0s ease 0s; height: 72px; transform: translateY(864px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(5)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Preethi UVCE" class="_3ko75 _5h6Y_ _3Whw5">Preethi UVCE</span><div class="_3XFan"></div></span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪🤣🤣‬"><div class="zFnXi _2RFeE"><span data-testid="status-dblcheck" data-icon="status-dblcheck" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span></div><span dir="auto" class="_3ko75 _5h6Y_ _3Whw5"><img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🤣" draggable="false" class="b89 emoji wa _3Whw5" style="background-position: -20px -80px;"><img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🤣" draggable="false" class="b89 emoji wa _3Whw5" style="background-position: -20px -80px;"></span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 178; transition: none 0s ease 0s; height: 72px; transform: translateY(792px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(6)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="IEEE UVCE 2020" class="_3ko75 _5h6Y_ _3Whw5">IEEE UVCE 2020</span></div><div class="m61XR">yesterday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪+91 97426 07946 left‬"><div class="_39Y7t"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text">+91 97426 07946 left</span></div></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 177; transition: none 0s ease 0s; height: 72px; transform: translateY(720px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(7)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="CSE -3rd sem-UVCE" class="_3ko75 _5h6Y_ _3Whw5">CSE -3rd sem-UVCE</span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Photo‬"><span dir="auto" class="_5h6Y_ _3Whw5">Thanushree</span><span>:&nbsp;</span><div class="_1myj_ status-image _1EYDN"><span data-testid="status-image" data-icon="status-image" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" width="16" height="20"><path fill="currentColor" d="M13.822 4.668H7.14l-1.068-1.09a1.068 1.068 0 0 0-.663-.278H3.531c-.214 0-.51.128-.656.285L1.276 5.296c-.146.157-.266.46-.266.675v1.06l-.001.003v6.983c0 .646.524 1.17 1.17 1.17h11.643a1.17 1.17 0 0 0 1.17-1.17v-8.18a1.17 1.17 0 0 0-1.17-1.169zm-5.982 8.63a3.395 3.395 0 1 1 0-6.79 3.395 3.395 0 0 1 0 6.79zm0-5.787a2.392 2.392 0 1 0 0 4.784 2.392 2.392 0 0 0 0-4.784z"></path></svg></span></div><span dir="auto" class="_3ko75 _5h6Y_ _3Whw5">Photo</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 176; transition: none 0s ease 0s; height: 72px; transform: translateY(648px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(8)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Shreya UVCE" class="_3ko75 _5h6Y_ _3Whw5">Shreya UVCE</span><div class="_3XFan"></div></span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪🤣‬"><span dir="auto" class="_3ko75 _5h6Y_ _3Whw5"><img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🤣" draggable="false" class="b89 emoji wa _3Whw5" style="background-position: -20px -80px;"></span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 175; transition: none 0s ease 0s; height: 72px; transform: translateY(576px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(9)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Jyothi" class="_3ko75 _5h6Y_ _3Whw5">Jyothi</span><div class="_3XFan"></div></span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Yup lo‬"><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">Yup lo</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 174; transition: none 0s ease 0s; height: 72px; transform: translateY(504px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="E-CELL Mentors (Alumni)" class="_3ko75 _5h6Y_ _3Whw5">E-CELL Mentors (Alumni)</span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪It would be great if the mentors could let me know if they would be free by this weekend to conduct the mentoring sessions‬"><span dir="auto" class="_5h6Y_ _3Whw5">+91 83174 92569</span><span>:&nbsp;</span><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">It would be great if the mentors could let me know if they would be free by this weekend to conduct the mentoring sessions</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 173; transition: none 0s ease 0s; height: 72px; transform: translateY(432px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(10)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Sanjay Kite" class="_3ko75 _5h6Y_ _3Whw5">Sanjay Kite</span><div class="_3XFan"></div></span></div><div class="m61XR">Friday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Okay..‬"><div class="zFnXi _2RFeE"><span data-testid="status-dblcheck" data-icon="status-dblcheck" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span></div><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">Okay..</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 172; transition: none 0s ease 0s; height: 72px; transform: translateY(360px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(11)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="Friends forever" class="_3ko75 _5h6Y_ _3Whw5">Friends forever</span></div><div class="m61XR">yesterday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪+91 82963 23069 changed this group&#39;s icon‬"><div class="_39Y7t"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text">+91 82963 23069 changed this group's icon</span></div></span></div><div class="m61XR"><span><div class="ZKn2B" aria-label="Muted chat"><span data-testid="muted" data-icon="muted" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 18" width="16" height="18"><path fill="currentColor" d="M11.52 9.206c0-1.4-.778-2.567-1.944-3.111v1.711L11.52 9.75v-.544zm1.945 0c0 .7-.156 1.4-.389 2.022l1.167 1.167c.544-.933.778-2.1.778-3.267 0-3.344-2.333-6.144-5.444-6.844v1.633c2.255.778 3.888 2.8 3.888 5.289zm-11.433-7L1.02 3.217l3.656 3.656H1.02v4.667h3.111l3.889 3.889v-5.211l3.344 3.344c-.544.389-1.089.7-1.789.933v1.633a6.64 6.64 0 0 0 2.878-1.4l1.556 1.556 1.011-1.011-7-7-5.988-6.067zm5.988.778L6.387 4.617 8.02 6.25V2.984z"></path></svg></span></div></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 171; transition: none 0s ease 0s; height: 72px; transform: translateY(288px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(12)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Karthik Civil UVCE" class="_3ko75 _5h6Y_ _3Whw5">Karthik Civil UVCE</span><div class="_3XFan"></div></span></div><div class="m61XR">yesterday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪chap2.pdf • 80 pages‬"><div class="_1myj_ status-document _1EYDN"><span data-testid="status-document" data-icon="status-document" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20" width="13" height="20"><path fill="currentColor" d="M10.2 3H2.5C1.7 3 1 3.7 1 4.5v10.1c0 .7.7 1.4 1.5 1.4h7.7c.8 0 1.5-.7 1.5-1.5v-10C11.6 3.7 11 3 10.2 3zm-2.6 9.7H3.5v-1.3h4.1v1.3zM9.3 10H3.5V8.7h5.8V10zm0-2.7H3.5V6h5.8v1.3z"></path></svg></span></div><span dir="auto" class="_3ko75 _5h6Y_ _3Whw5">chap2.pdf • 80 pages</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 170; transition: none 0s ease 0s; height: 72px; transform: translateY(216px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(13)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Shristi UVCE" class="_3ko75 _5h6Y_ _3Whw5">Shristi UVCE</span><div class="_3XFan"></div></span></div><div class="m61XR">yesterday</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪Photo‬"><div class="zFnXi _2RFeE"><span data-testid="status-dblcheck" data-icon="status-dblcheck" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span></div><div class="_1myj_ status-image _1EYDN"><span data-testid="status-image" data-icon="status-image" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20" width="16" height="20"><path fill="currentColor" d="M13.822 4.668H7.14l-1.068-1.09a1.068 1.068 0 0 0-.663-.278H3.531c-.214 0-.51.128-.656.285L1.276 5.296c-.146.157-.266.46-.266.675v1.06l-.001.003v6.983c0 .646.524 1.17 1.17 1.17h11.643a1.17 1.17 0 0 0 1.17-1.17v-8.18a1.17 1.17 0 0 0-1.17-1.169zm-5.982 8.63a3.395 3.395 0 1 1 0-6.79 3.395 3.395 0 0 1 0 6.79zm0-5.787a2.392 2.392 0 1 0 0 4.784 2.392 2.392 0 0 0 0-4.784z"></path></svg></span></div><span dir="auto" class="_3ko75 _5h6Y_ _3Whw5">Photo</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 169; transition: none 0s ease 0s; height: 72px; transform: translateY(144px);"><div tabindex="-1" aria-selected="false" role="option"><div class="eJ0yJ _8Uqu5"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(14)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-group" data-icon="default-group" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M105.946.25C164.318.25 211.64 47.596 211.64 106s-47.322 105.75-105.695 105.75C47.571 211.75.25 164.404.25 106S47.571.25 105.946.25z"></path><path fill="#FFF" class="primary" d="M61.543 100.988c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.174 14.246 14.246 14.246zm8.159 17.541a48.192 48.192 0 0 1 8.545-6.062c-4.174-2.217-9.641-3.859-16.704-3.859-21.844 0-28.492 15.67-28.492 15.67v8.073h26.181l.105-.248c.303-.713 3.164-7.151 10.365-13.574zm80.755-9.921c-6.854 0-12.21 1.543-16.336 3.661a48.223 48.223 0 0 1 8.903 6.26c7.201 6.422 10.061 12.861 10.364 13.574l.105.248h25.456v-8.073c-.001 0-6.649-15.67-28.492-15.67zm0-7.62c8.073 0 14.246-6.174 14.246-14.246s-6.173-14.246-14.246-14.246-14.246 6.173-14.246 14.246 6.173 14.246 14.246 14.246zm-44.093 3.21a23.21 23.21 0 0 0 4.464-.428c.717-.14 1.419-.315 2.106-.521 1.03-.309 2.023-.69 2.976-1.138a21.099 21.099 0 0 0 3.574-2.133 20.872 20.872 0 0 0 5.515-6.091 21.283 21.283 0 0 0 2.121-4.823 22.16 22.16 0 0 0 .706-3.193c.16-1.097.242-2.224.242-3.377s-.083-2.281-.242-3.377a22.778 22.778 0 0 0-.706-3.193 21.283 21.283 0 0 0-3.272-6.55 20.848 20.848 0 0 0-4.364-4.364 21.099 21.099 0 0 0-3.574-2.133 21.488 21.488 0 0 0-2.976-1.138 22.33 22.33 0 0 0-2.106-.521 23.202 23.202 0 0 0-4.464-.428c-12.299 0-21.705 9.405-21.705 21.704 0 12.299 9.406 21.704 21.705 21.704zM145.629 131a36.739 36.739 0 0 0-1.2-1.718 39.804 39.804 0 0 0-3.367-3.967 41.481 41.481 0 0 0-3.442-3.179 42.078 42.078 0 0 0-5.931-4.083 43.725 43.725 0 0 0-3.476-1.776c-.036-.016-.069-.034-.104-.05-5.692-2.581-12.849-4.376-21.746-4.376-8.898 0-16.055 1.795-21.746 4.376-.196.089-.379.185-.572.276a43.316 43.316 0 0 0-3.62 1.917 42.32 42.32 0 0 0-5.318 3.716 41.501 41.501 0 0 0-3.443 3.179 40.632 40.632 0 0 0-3.366 3.967c-.452.61-.851 1.186-1.2 1.718-.324.493-.6.943-.841 1.351l-.061.101a27.96 27.96 0 0 0-.622 1.119c-.325.621-.475.975-.475.975v11.692h82.53v-11.692s-.36-.842-1.158-2.195a35.417 35.417 0 0 0-.842-1.351z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span dir="auto" title="Coding Club : UVCE,All Yr" class="_3ko75 _5h6Y_ _3Whw5">Coding Club : UVCE,All Yr</span></div><div class="m61XR">08:15</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪♦ “Discover the hidden coder inside you.” - Coding Mafia

TOPPERS below who crossed 100+ problems in just 31 days from Codechef, Leetcode and InterviewBit

👉 Check registration availabiliy: 
https://codingclub.tech/cm

♦ ALPHABETWISE COLLEGE TOPPERS from Coding Mafia

ACEIT
Twinkle Das solved 137 🏁

ADGITM, Delhi
Puneet Garg solved 346 🏁

ADGITM, Delhi
Priyanka solved 284 🏁

ADGITM, Delhi
Utsav Shukla solved 258 🏁

ADGITM, Delhi
Nikunj solved 233 🏁

ADGITM, Delhi
Samriddhi Jain solved 214 🏁

ADGITM, Delhi
Versha Mishra solved 201 🏁

ADGITM, Delhi
Mayank Upadhyay solved 151 🏁

AIACTR
Neeraj Singh solved 126 🏁

AIT
Akash Mall solved 218 🏁

AIET Jaipur
Rohit Yadav solved 297 🏁

AIET Jaipur
Saikiran Challa solved 276 🏁

*AIT Bangalore *
Swetha Kambhampati solved 263 🏁

AKGEC Ghaziabad
Aditya Kumar solved 156 🏁

AKGEC Ghaziabad
Raghav Vasdeva solved 123 🏁

Amity University Kolkata
Zulfiqar Ali Ahmed solved 129 🏁

Amity University, Gwalior
Sahil Singh solved 375 🏁

Asansol Engineering College
Amit Das solved 111 🏁

Apeejay Stya University
Nandini Bansal solved 103 🏁

Amity Gwalior
Ajeesha S Nair solved 221 🏁

Amity,Noida
Shubham Saini solved 143 🏁

AITM
Samaya M Yallapurmath solved 143 🏁

AIT Pune
Ameet Kumar Rana solved 333 🏁

AJCE, Kerala
Gautham Sankar M S solved 202 🏁

Amrita Vishwa Vidyapeetham Bengaluru
Girish Reddy solved 128 🏁

ARMIET, Maharashtra
Nilesh Deokar solved 316 🏁

Banasthali Vidyapith, Rajasthan
Apoorva Jain solved 196 🏁

Banasthali Vidyapith, Rajasthan
Kriti Singh solved 185 🏁

Banasthali Vidyapith, Rajasthan
Aditi Mishra solved 155 🏁

Banasthali Vidyapith, Rajasthan
Shruti Bhargav solved 151 🏁

Banasthali Vidyapith, Rajasthan
Vaishnavi Gupta solved 119 🏁

Banasthali Vidyapith, Rajasthan
Tulika Tiwari solved 112 🏁

Banasthali Vidyapith, Rajasthan
Vaishnavi Upadhyay solved 102 🏁

BIT, Mesra
Arpit solved 686 🏁

BIT, Mesra
Anurag Kumar Singh solved 604 🏁

BIT Mesra
Soumya Jha solved 441 🏁

BIT Mesra
Pratik solved 251 🏁

BIT Mesra
Kislay Raj solved 248 🏁

BIT Mesra
Atishi Prasad solved 241 🏁

BIT Mesra
Osho Barman solved 215 🏁

BIT Mesra
Kunal Kujur solved 169 🏁

BIT Mesra
Soumith Aireddi solved 138 🏁

BIT Bangalore
Chaya V solved 350 🏁

BIT Jaipur
Rohit Bhati solved 403 🏁

BITS Pilani
Devang Dhall solved 258 🏁

BITS,Goa
Mahak Kothari solved 343 🏁

BMC
Gurdeep singh solved 135 🏁

BMC
Sijo jacob solved 227 🏁

BMSCE
Rohit B R solved 204 🏁

BMSCE
Abhishikat Kumar Soni solved 175 🏁

BMSCE
Pradeepa R solved 142 🏁

BMSCE
Niveditha M solved 132 🏁

BMSCE
Chandan Bagan solved 108 🏁

BMCEM
Vasu sharma solved 120 🏁

BMSIT
Prakhar Jaiswal solved 457 🏁

BMSIT
Suraj Singh Basera solved 208 🏁

BPIT
Divit Jain solved 201 🏁

BPIT
Shivam Gupta solved 190 🏁

BPIT
Aniket Sharma solved 173 🏁

BVCOE
Harshit Katyal solved 216 🏁

BVCOE
Aman Chouhan solved 388 🏁

BVC
Bharath solved 155 🏁

BVC
Megha solved 140 🏁

BV, Jaipur
Divyanshi Agarwal solved 240 🏁

BV, Rajasthan
Vartika Rana solved 405 🏁

BV, Rajasthan
Ojasvi Banwat solved 182 🏁

CBIT
Nihash Veeramachaneni solved 420 🏁

CBIT
Chethan Avinash solved 305 🏁

CBIT
Sowjanya Boddani solved 273 🏁

CBIT
Maanasvi Kodli solved 251 🏁

CBIT
Saichander A solved 234 🏁

CVRGU
Aarti Sharma solved 320 🏁

CUSAT
Shubham Chowdhuri solved 392 🏁

CUSAT
Apurva Vatsa solved 346 🏁

CUSAT
Tanmay Anand solved 155 🏁

CU
Tejas Malpani solved 102 🏁

CET Trivandrum
Giridhar G solved 241 🏁

CET Trivandrum
Benedict Isaac solved 240 🏁

CET Trivandrum
Abhishek Unnithan solved 163 🏁

CET Trivandrum
Harsha Anil Kumar solved 101 🏁

CGC, Mohali
Shivam jha solved 246 🏁

CGC
Riya solved 106 🏁

Chandigarh University
Manish Saini solved 230 🏁

Chandigarh University
Sonu Mittal solved 142 🏁

Chandigarh University
Arushi Vashisht solved 140 🏁

Chandigarh University
Mohit solved 128 🏁

Chandigarh University
Siddharth Sahoo solved 114 🏁

Chandigarh University
Siddharth Sahoo solved 114 🏁

CMRIT
Raveena Kushwah solved 230 🏁

DAIMSR, Nagpur
shraddha yadav solved 106 🏁

DAIICT Gandhinagar
Hir Desai solved 301 🏁

DAIICT Gandhinagar
Ishwa Bhatt solved 257 🏁

DAIICT Gandhinagar
Harshil Joshi solved 256 🏁

DAIICT Gandhinagar
Tanu Agrawal solved 245 🏁

DAIICT Gandhinagar
Parita Makvana solved 211 🏁

DAIICT Gandhinagar
Tejaswa Alia solved 107 🏁

DCRUST,Murthal
SAHIL solved 267 🏁

DCRUST,Murthal
Avnish solved 266 🏁

DCRUST,Murthal
Dhruv Patel solved 150 🏁

DCRUST,Murthal
Pranjali Sharma solved 141 🏁

DCRUST,Murthal
Rahul Dev solved 109 🏁

DDU, Nadiad
Chintan Sutariya solved 530 🏁

DDU, Nadiad
Maharshi Dave solved 194 🏁

DDU, Nadiad
Yash Movaliya solved 135 🏁

DDU,Gujarat
Kunj Naik solved 150 🏁

DKTE
Makarand Sahastrabuddhe solved 271 🏁

DMCE,Mumbai University
Mahima Shetty solved 310 🏁

DSCE,Bangalore
Akash H R solved 129 🏁

DSCE,Bangalore
Harsh Tibrewal solved 121 🏁

DSCE,Bangalore
Prajwala A N solved 111 🏁

DSCE,Bangalore
Raashi A S solved 107 🏁

DSCE,Bangalore
Nandita S solved 101 🏁

Dayananda sagar university
Shalini Anand solved 150 🏁

DIT, Dehradun
Sandeep Maithani solved 318 🏁

DJSCE
Jigar Vaishnav solved 159 🏁

DJSCE
Utsav Unadkat solved 148 🏁

DTU
Shubham Saini solved 590 🏁

DTU
Abhinav Chaudhary solved 562 🏁

DTU
Rohit Bharti solved 562 🏁

DTU
Utsav Prabhakar solved 327 🏁

DTU
Prabhat Gupta solved 306 🏁

DTU
Alankrit Agrawal solved 302 🏁

DTU
Shivam Jaiswal solved 300 🏁

DTU
Abhishek solved 285 🏁

DTU
Pranav Taneja solved 267 🏁

DTU
Nitin solved 236 🏁

DTU
Eklavya bhatia  solved 184 🏁

DTU
Nitin Dhemiwal  solved 170 🏁

DTU
Shivam DTU solved 148 🏁

DTU
Vishal Sengar solved 140 🏁

DTU
Swami Nandan solved 140 🏁

DTU
Aman Chandok solved 138 🏁

DTU
Sourabh yadav solved 127 🏁

DTU
Pranav Malik solved 122 🏁

DTU
Neeraj solved 121 🏁

DTU
Shruti solved 115 🏁

DTU
Saurabh solved 112 🏁

DTU
Kunal solved 109 🏁

DTU
Akash Choudhary solved 105 🏁

DTU
Dhananjay solved 103 🏁

DTU
Amogh solved 103 🏁

DTU
Hardik Rohilla solved 103 🏁

DTU
Sahil solved 100 🏁

FET, GKV
Prashant Mishra solved 210 🏁

FET, GKV
Hritesh S. Dwivedi solved 182 🏁

FET, GKV
Aman Singh solved 123 🏁

FGIET ,rbl
Vagisha Singh solved 175 🏁

Fr.Agnel, Mumbai
Akshaykumar Hanmandla solved 103 🏁

IEM , Saltlake
Rashmita Roy solved 305 🏁

GLBITM
Kamakshi Goel solved 102 🏁

GTBIT
Utkarsh Goel solved 365 🏁

GTBIT
Karanpreet Singh solved 195 🏁

GTBIT
Ramneek Kaur solved 144 🏁

GTBIT
Manpreet Singh solved 140 🏁

G.B .P.E.C
Anurag solved 136 🏁

G.B .P.E.C
Karan Nehra solved 119 🏁

GCET, V.V Nagar
Harsh Patel solved 154 🏁

GCETTB, Berhampore
Richeek Debnath solved 164 🏁

GCECT
Preeti Chatterjee solved 100 🏁

GCOE Amravati
Ayush Poptani solved 426 🏁

GCOE Amravati
Pallavi Bherde solved 154 🏁

GECA
Mandar Kulkarni solved 444 🏁

GECA
Avinash Gadekar solved 121 🏁

GECA
Ankita Kashid solved 115 🏁

Gec,Bhavnagar
Nidhi Rajkotia solved 145 🏁

GEHU, Dehradun
Ritik Gupta solved 272 🏁

GEHU Dehradun
Suraj Patni solved 220 🏁

GEHU Dehradun
Aman Punetha solved 168 🏁

GEHU, Dehradun
Shankar Singh solved 115 🏁

GEU
Abhishek Kumar Singh (aks) solved 313 🏁

GEU
Gaurav Rawat solved 252 🏁

GEU
Archit Garg solved 117 🏁

GGCT, Jabalpur
Shashank Dubey solved 147 🏁

GGCT, Jabalpur
Taranpreet kaur solved 126 🏁

GIT
suraj kumar soni solved 174 🏁

GITAM
Pulavarthi Sindhusha solved 100 🏁

GKV HARIDWAR
Shubham Sharma solved 307 🏁

GMRIT,rajam
Shahid Vali soni solved 238 🏁

GMRIT,rajam
Yaswanth Kolusu solved 163 🏁

GNDU, Amritsar
Sahil Bhandari solved 155 🏁

Govt. RIT Kottayam
Sachin Biju Jacob solved 103 🏁

GVP Vizag
Chinni Srikar solved 239 🏁

GVP Vizag
Krishna Vamsi solved 215 🏁

GVPCE
Sai Meghana Yerramsettyhna Vamsi solved 252 🏁

*GRIET *
Sivagopal arigili solved 120 🏁

HBTU, Kanpur
Pragya Katiyar solved 530 🏁

HBTU, Kanpur
Shivangi Dubey solved 218 🏁

HBTU, Kanpur
Harshita Arun solved 120 🏁

HBTU, Kanpur
Arpit Gupta solved 117 🏁

HETC
Chandrima Sarkar solved 344 🏁

HIT KOLKATA
Harshit Yadav solved 245 🏁

IARE
P. Bhargav solved 103 🏁

IET DAVV
Sunil Sahu solved 362 🏁

IET DAVV
Gaurav Gupta solved 175 🏁

IET DAVV
Eeshwari Bhatore solved 135 🏁

IET DAVV
Satyam Shivhare solved 125 🏁

IET DAVV
Shantanu Bajaj solved 120 🏁

IET DAVV
Sarthak Srivastava solved 104 🏁

IET DAVV
Shreedhar Soni solved 101 🏁

IGDTUW
Riya Rohilla solved 296 🏁

IGDTUW
Vaishnavi solved 292 🏁

IGDTUW
Paridhi Gupta solved 292 🏁

IGDTUW
Shivangi Rautela solved 289 🏁

IGDTUW
Sakshi Jain solved 205 🏁

IGDTUW
Surabhi Chaurasia solved 186 🏁

IGDTUW
Soumya Kapsime solved 164 🏁

IGDTUW
Aakanksha kumari solved 153 🏁

IGDTUW
Kavita Goodwani solved 152 🏁

IGDTUW
Meghna Tandon solved 121 🏁

IGDTUW
Shiva Singhal solved 120 🏁

IGDTUW
Anvita Bansal solved 100 🏁

IIIT Allahabad
Mukul Madaan solved 238 🏁

IIIT Allahabad
Kaushal Sahu solved 143 🏁

IIEST,Shibpur
Sunny Sharma solved 238 🏁

IIIT Delhi
Varun Khurana solved 298 🏁

IIIT Delhi
Shreya Reddy solved 243 🏁

IIIT Delhi
Anmol Singhal solved 124 🏁

IIIT Delhi
Tejas Oberoi solved 103 🏁

IIIT Delhi
Chhavi Munjal solved 103 🏁

IIIT Kalyani
Vaibhav Shukla solved 361 🏁

IIIT Kalyani
vishnu solved 156 🏁

IIIT Kalyani
Pushkar Sahay solved 102 🏁

IIIT Kalyani
Hare Krishna Singh solved 100 🏁

IIIT Lucknow
Vinamr Bajaj solved 396 🏁

IIIT,N
Akshay Kohad solved 255 🏁

IIIT Ranchi
Abhishek Mishra solved 110 🏁

IIIT Sri City
Sasikanth Rayaprolu solved 192 🏁

IIIT Sri City
Kannuru Dinesh solved 117 🏁

IIIT Sri City
AN Vaishnavi solved 102 🏁

IIIT Sonepat
Nishant Sabbarwal solved 227 🏁

IIIT Vadodara
Anusha Gupta solved 118 🏁

IIIT Vadodara
Nitik Shekhar solved 102 🏁

IIITD
Gaurav Aggarwal solved 103 🏁

IIIT Jabalpur
Ujjawal Kumar solved 423 🏁

IIITM Gwalior
Putta Bhanu Prakash solved 262 🏁

IIT BHU
Ritwik Ghorui solved 196 🏁

IIT BHU
Onkar Limkar solved 100 🏁

IIT Bombay
Shashank Agrawal solved 267 🏁

IIT Bombay
Vinit Awale solved 129 🏁

IIT Delhi
Lakshika Rathi solved 224 🏁

IIT Delhi
Amenreet Singh Sodhi solved 223 🏁

IIT Delhi
Sumanth Gaduputi solved 130 🏁

IIT Delhi
Mihir Gupta solved 100 🏁

IIT Dhanbad
Vidushi Agrawal solved 583 🏁

IIT Dhanbad
Rajan Keshari solved 512 🏁

IIT Dhanbad
Aryan Bhardwaj solved 264 🏁

IIT Dhanbad
Rishabh Tiwari solved 171 🏁

IIT Guwahati
shreya singh solved 332 🏁

IIT Guwahati
Yashwanth M solved 244 🏁

IITH
Vaibhaw Khemka solved 335 🏁

IITH
S.Sahithi solved 102 🏁

IIT Indore
Shravya Chinta solved 246 🏁

IIT Indore
Pranjal Somkuwar solved 136 🏁

IIT Indore
ROHIT NIKAM solved 108 🏁

IIT Indore
Simple Malik solved 102 🏁

IIT ISM DHANBAD
Arjit Giradkar solved 144 🏁

IIT J
Pranav Mehta solved 181 🏁

IIT Patna
Sasi Kumar solved 144 🏁

IIT Roorkee
Rapaka Vineeth Kumar solved 267 🏁

IIT Roorkee
Anmol Khemuka solved 151 🏁

IIT Roorkee
Guguloth suman naik solved 107 🏁

IIT Tirupati
Darahas Kopparapu naik solved 315 🏁

IMSEC
Rishabh Shukla solved 105 🏁

ITER, Bhubaneswar
Aditi Kumari solved 520 🏁

Jadavpur University
Saurajit Chakraborty solved 400 🏁

Jadavpur University
Abhishek Ranjan Singh solved 159 🏁

Jadavpur University
Abhinav Garg solved 105 🏁

JECRC, Jaipur
Sakshi Pokharna solved 219 🏁

JECRC, Jaipur
Aditya Sharma solved 126 🏁

JECRC, Jaipur
Lakshay Wadhwa solved 101 🏁

JEC,Jabalpur
Rajit Gupta solved 247 🏁

JEC,Jabalpur
Sankalp Tiwari solved 148 🏁

JIIT, Noida
Priya Tayal solved 332 🏁

JIIT, Noida
Abhishek Nigam solved 150 🏁

JIET Jodhpur
Sailesh Verma solved 204 🏁

JGEC
Tarpan Bhattacharya solved 106 🏁

JSSSTU, MYSORE
Surya M S solved 177 🏁

JNTUH
jyothi swaroop solved 119 🏁

JNTUHCEH
Jahanvi Reddy solved 502 🏁

JNTUHCEH
Arunkumar Tanakam solved 200 🏁

KEC,GZBD
Riya Singhal solved 115 🏁

KIET Group of Institute
Sakshi Agrawal solved 316 🏁

KIET Group of Institute
Apoorva Yadav solved 134 🏁

KIET Group of Institute
Jyoti Bhaliyan solved 120 🏁

KIIT
Aditya Mitra solved 451 🏁

KIIT
SRupali Barnwal solved 417 🏁

KIIT
Sanya Raghuwanshi solved 351 🏁

KIIT
Shankar Choudhury solved 234 🏁

KIIT
Kumar Keshav solved 223 🏁

KIIT
Nilesh Gaur solved 213 🏁

KIIT
Adnan Yousufzai solved 102 🏁

KIIT
Sornav Bhattacharya solved 140 🏁

KIIT bhubaneswar
Subhashish Nandy solved 288 🏁

KIIT bhubaneswar
Purvav Punyani solved 176 🏁

KIIT bhubaneswar
MOHIT KUMAR solved 162 🏁

KIIT bhubaneswar
Varshini Ambati solved 144 🏁

KIIT bhubaneswar
Mayank Kumar Singh solved 113 🏁

KIIT University
Faiz Mohammad solved 274 🏁

KIIT University
Archita Ganguly solved 232 🏁

KIIT University
Neha Lal solved 129 🏁

KNIT Sultanpur
Shaili Maurya solved 246 🏁

KGEC
Abhishek Pramanick solved 566 🏁

KLE Technological University, Hubli
Harshvardhan Raj solved 320 🏁

KLE Technological University, Hubli
Aditya Yadav solved 139 🏁

KLEF,AP
BODDU VAMSI KRISHNA solved 100 🏁

KLETECH
Shivam KLT solved 114 🏁

Adarsh Raj
Pawan Kumar Singh solved 277 🏁

KLETU
Pawan Kumar Singh solved 227 🏁

KLT
Shivam KLT solved 371 🏁

KMIT
Kushal solved 202 🏁

KMIT
Abhay Banda solved 116 🏁

LPU
Shaik Avaies solved 400 🏁

LPU
Deepak Dhull solved 326 🏁

LPU
Akarsh raj solved 314 🏁

LPU
Abhinav Kumar solved 280 🏁

LPU
Aashi Sachdeva solved 256 🏁

LPU
Firoz kumar solved 199 🏁

LPU
Mohan Prajapati solved 137 🏁

LPU
Vaishali Kant solved 105 🏁

LPU
Abhishek Sharma solved 100 🏁

LDCE
Siddharth Pansuria solved 215 🏁

LNCT
Shubham Kumar solved 130 🏁

LNCT
Shubhaditya Maljonia solved 114 🏁

LNCTS Bhopal
Bhumika Lalchandani solved 197 🏁

LNMIIT
Arav Khandelwal solved 248 🏁

MAIT
Damanpreet Singh solved 599 🏁

MAIT
Naman Ahuja solved 501 🏁

MAIT
Sanjali Lal solved 436 🏁

MAIT
Tushar Kumar Jain solved 339 🏁

MAIT
Nikki Goel solved 284 🏁

MAIT
Yashi Agarwal solved 277 🏁

MAIT
Abhishek Sharma solved 270 🏁

MAIT
Diksha Goyal solved 259 🏁

MAIT
Mayank Aggarwal solved 183 🏁

MAIT
Akshat Tuknait solved 179 🏁

MAIT
Amit Das solved 167 🏁

MAIT
Praveen Mani solved 164 🏁

MAIT
Shikhar Agrawal solved 159 🏁

MAIT
Ayush Aggarwal solved 121 🏁

MAIT
Siddhant Sehgal solved 120 🏁

MAIT
Shivani Dalmia solved 115 🏁

MAIT
Anmol Bansal solved 103 🏁

MAIT
Prakhar Maheshwari solved 100 🏁

MANIT, Bhopal
Arpit Chachane solved 241 🏁

MANIT, Bhopal
Siddhant Gupta solved 192 🏁

MBCET TVM
Goutham Sidhardha solved 350 🏁

Marwadi University, rajkot
Shlokkumar Soni solved 232 🏁

Medi-caps University
Piyush Maheshwari solved 382 🏁

MESCE, Malappuram
Anas Aji Muhammed solved 101 🏁

MIT Manipal
Anmol Malhotra solved 573 🏁

MIT, Manipal
Rajat Dumir solved 432 🏁

MIT Manipal
Krutika Deshpande solved 381 🏁

MIT, Manipal
Rohit Kuber solved 309 🏁

MIT, Manipal
Amogh Kokkonda solved 266 🏁

MIT, Manipal
Sujith Valluru solved 256 🏁

MIT, Manipal
Manav Ananthakumar solved 246 🏁

MIT, Manipal
Suma Sree solved 237 🏁

MIT, Manipal
Niveditha B Bhat solved 209 🏁

MIT, Manipal
Grishma P Rao solved 200 🏁

MIT, Manipal
Sushmanth Natha solved 183 🏁

MIT, Manipal
Prashant Srivastava solved 160 🏁

MIT, Manipal
Ankush Shetkar solved 156 🏁

MIT, Manipal
Rahul Mamilla solved 136 🏁

MIT, Manipal
Vishwajeet Singh Shekhawat solved 111 🏁

MIT, Manipal
Nayan Jain solved 104 🏁

MIT Mysore
Manjunath C solved 117 🏁

MIT Pune
Jay Bagrecha solved 121 🏁

MIT Pune
Yash Agrawal solved 115 🏁

MNIT
Anurag Jain solved 228 🏁

MNIT
Monarch solved 124 🏁

MNNIT Allahabad
Abhishek Jadhav solved 339 🏁

MNNIT Allahabad
Deendayal Gour solved 304 🏁

MNNIT Allahabad
Sanyam Singhal solved 193 🏁

MNNIT Allahabad
BASANT RAJPUT solved 151 🏁

MMMUT, Gorakhpur
Shresth Sahai solved 462 🏁

MMMUT, Gorakhpur
Shashank Kumar Upadhyay solved 165 🏁

Mody University of Science and Technology
Sukriti Shah solved 225 🏁

MRIIRS
Arushi Garg solved 406 🏁

MSIT
Prashant solved 550 🏁

MSIT
Eashwaran solved 450 🏁

MSIT
Paras Jain solved 434 🏁

MSIT
Chhavi bansal solved 400 🏁

MSIT
Shubham Garg solved 382 🏁

MSIT
Aditya Garg solved 366 🏁

MSIT
Ajay Gupta solved 329 🏁

MSIT
Shivam Kakkar solved 305 🏁

MSIT
Shubham Kukreti solved 297 🏁

MSIT
Ujjwal Shukla solved 246 🏁

MSIT
Piyush Raj solved 243 🏁

MSIT
Muskan Hussain solved 233 🏁

MSIT
Tarun Bawari solved 232 🏁

MSIT
Vansh Satyarthi solved 205 🏁

MSIT
Sonalika Kalra solved 202 🏁

MSIT
Tanya Mittal solved 187 🏁

MSIT
Tushar solved 182 🏁

MSIT
Yash Raj Singh solved 180 🏁

MSIT
Yash Preet solved 167 🏁

MSIT
Lakshita Malhotra solved 158 🏁

MSIT
Preeti Bidhan solved 149 🏁

MSIT
Divyansh Gupta solved 148 🏁

MSIT
Nishant Jain solved 125 🏁

MSIT
Mukul Kumar solved 109 🏁

MSIT
Kevin Singh Bagga solved 108 🏁

MSRIT
Shreyas Kadiri solved 521 🏁

MSRIT
Pruthvi P Navada solved 140 🏁

MSRIT
Anjali Kumari solved 103 🏁

MSRIT
Janardhan Muralidhar solved 101 🏁

MRIU ,Faridabad
Prakhar Goel solved 107 🏁

MU
Pritam Biswas solved 624 🏁

MUJ
Saurabh Suthar solved 433 🏁

MVSR
Anurag Sharma solved 116 🏁

MVSR
Rakesh Chary solved 103 🏁

MVSR
Mohd Salman solved 101 🏁

National Institute of Technology Silchar
Swapnanil Das solved 139 🏁

NIET, Greater Noida
Ayush Gupta solved 231 🏁

NIET, Greater Noida
Prakash Bisht solved 100 🏁

NIT ,Andhra
Raghu Ram solved 501 🏁

NIT Agartala
Ugandhar solved 217 🏁

NIT Allahabad
Abdul Khadar solved 185 🏁

NIT AP
Mittapally Bhargav Kumar solved 193 🏁

NIT Bhopal
Neelesh Lakhera solved 421 🏁

NIT Bhopal
Pradhi Das solved 217 🏁

NIT, Bhopal
Puneet Agarwal solved 203 🏁

NIT, Bhopal
Divya Singh solved 208 🏁

NIT, Bhopal
Khemendra Singh solved 162 🏁

NIT Bhopal
Nimitt Singh solved 121 🏁

DCE,HR
Paras Gautam solved 220 🏁

NIT Calicut
S R Siddharth solved 236 🏁

NIT Calicut
Emmanuel Thomas solved 226 🏁

NIT Calicut
Soujanya Namburi solved 221 🏁

NIT Calicut
Krishnanunni P solved 202 🏁

NIT Calicut
Umarul Farooque K solved 199 🏁

NIT Calicut
Gokul Sreekumar solved 192 🏁

NIT Calicut
Jessiya Joy solved 188 🏁

NIT Calicut
Varun V solved 150 🏁

NIT Calicut
pritam patel solved 124 🏁

NIT Calicut
Adarsh Joshy solved 102 🏁

NIT Calicut
Sebastian Jose solved 102 🏁

NIT Calicut
Ganesh Pupalwad solved 102 🏁

NIT Calicut
Ritu Anne Koshy solved 100 🏁

NIT Calicut
Nikhil Hulle solved 100 🏁

NIT Durgapur
Pratyush Ghosh solved 372 🏁

NIT Durgapur
Anitra Koner solved 250 🏁

NIT Durgapur
Rana Dilendra Singh solved 103 🏁

NIT Durgapur
Abhishek Basu solved 101 🏁

NIT Hamirpur
Gitanjalisolved 101 🏁

NIT Kurukshetra
Avinabh Chambial 516 🏁

NIT Kurukshetra
Paras solved 300 🏁

NIT Kurukshetra
Vaibhav Singh solved 267 🏁

NIT Kurukshetra
Isha solved 378 🏁

NIT Kurukshetra
Kanika Singla solved 210 🏁

NIT Kurukshetra
Aman Tanwar solved 203 🏁

NIT Kurukshetra
Sharmila Karra solved 193 🏁

NIT Kurukshetra
Sparsh Batra solved 100 🏁

NIT Jalandhar
Nishchal Bhuria solved 553 🏁

NIT Jalandhar
himanshu gautam solved 326 🏁

NIT Jamshedpur
Sivanag Maddineni solved 293 🏁

NIT Jamshedpur
Nallapu Rishikesh solved 252 🏁

NIT Jamshedpur
Harshleen Sando solved 206 🏁

NIT JSR
Shreya solved 393 🏁

NIT Meghalaya
Akash Gusain solved 138 🏁

NIT Meghalaya
Rajeev Ranjan Chaurasia solved 106 🏁

NIT Nagpur
Pushpesh Raj solved 318 🏁

NIT Nagpur
Ayush Mohare solved 271 🏁

NIT PATNA
Riya solved 241 🏁

NIT Patna
Pushkar Prashant solved 200 🏁

NIT Patna
Divesh solved 182 🏁

NIT Patna
Varsha Rani solved 265 🏁

NIT Puducherry
Rohan Singh Poona solved 150 🏁

NIT Raipur
Harshita Sharma solved 273 🏁

NIT Raipur
Srijan Das Biswas solved 203 🏁

NIT ROURKELA
Samay Kar solved 365 🏁

NIT Silchar
Addarsh Srivastava solved 310 🏁

NIT Silchar
Nirmi Barman solved 107 🏁

NIT Silchar
Nayan Jyoti Bhuyansolved solved 101 🏁

NIT Srinagar
Saturi Vedanth solved 320 🏁

NIT Srinagar
Subhash routhu solved 263 🏁

NIT Srinagar
Aedira poojitha solved 147 🏁

NIT Srinagar
Mahin Sagotra solved 136 🏁

NIT Srinagar
Kunal solved 128 🏁

NITK,Surathkal
Srushti H P 289 🏁

NITK,
Aakarshee Jain 300 🏁

*NIT, Trichy *
Sampurn Anand solved 302 🏁

NIT Trichy
Prashanth Prabhakar solved 236 🏁

NIT Trichy
Adithya Krishnan solved 102 🏁

NIT Uttarakhand
Kunal Rai solved 151 🏁

NIT Warangal
Nagalla Harsha Vardhan solved 210 🏁

NITK
Abhishek solved 296 🏁

NITK
Samay Kar solved 140 🏁

NITK
Nithya solved 101 🏁

NITW
Akshat Dhiman solved 393 🏁

NITW
Nitish Kumar solved 360 🏁

NITW
Biswajit Padhi solved 305 🏁

NITW
Sudeepthi Maddi solved 266 🏁

NITW
Aniket Singh solved 203 🏁

NITW
Sriphani Vardhan solved 144 🏁

NITW
Sahil Meshram solved 142 🏁

NITW
Prasun Parijat solved 112 🏁

NITW
Saad Zemam solved 101 🏁

NSIT
Md Irshad solved 263 🏁

NSIT
Anupam Poddar solved 229 🏁

NSIT
Kulvinder solved 198 🏁

NSIT
Utkarsh Sinha solved 188 🏁

NSEC,Kolkata
Naman Kumar Singhania solved 106 🏁

NSUT
Priyavrata Bansal solved 214 🏁

Nirma University
Shivam Panchal solved 300 🏁

Nirma University
Meet Rajkotiya solved 106 🏁

*NIT Bhopal *
Pankaj Nargesh solved 493 🏁

*NIT Bhopal *
Deepankar Golait solved 381 🏁

*NIT Bhopal *
Ashutosh Vishnoi solved 187 🏁

NIT Surat
Anuj solved 198 🏁

NIT Surat
Pradeep Bhati solved 197 🏁

NIT Surat
Vibhav Garg solved 176 🏁

NIT Surat
Animesh Shirke solved 155 🏁

NMAMIT,Nitte
Sunidhi Hegde solved 122 🏁

NIT Surat
Divyanshu Visiya solved 101 🏁

OCT Bhopal
saurabh kumar solved 109 🏁

PCCOE
Sanket Chaudhari solved 256 🏁

PCCOE
Sejal Zambare solved 125 🏁

PCCOE
Pratik Nikam solved 116 🏁

PCCOE
Prajakta Shinde solved 115 🏁

PCCOE
Dhanashree Bhandari solved 100 🏁

PDM, Haryana
Aman Sharma solved 149 🏁

PDPU
Dev Jariwala solved 376 🏁

PDPU
Smit Sakariya solved 188 🏁

PEC Chandigarh
Aakankasha Sharma solved 275 🏁

PEC Chandigarh
Raghav Bansal solved 191 🏁

PEC Chandigarh
Divnoor Singh solved 107 🏁

PES University
Srivathsa M solved 248 🏁

PES University
Mayank saini solved 205 🏁

PES University
Amrita Das solved 140 🏁

PES University
Payal M B solved 115 🏁

PICT, Pune
Chaitanya Gawande solved 455 🏁

PICT, Pune
Priyanka Tamhankar solved 332 🏁

PICT, Pune
Sajal Ghatpande solved 326 🏁

PICT, Pune
Shishir Jha solved 325 🏁

PICT, Pune
Kaustubh Jirapure solved 205 🏁

PICT, Pune
Vedant Joshi solved 189 🏁

PICT, Pune
Paresh Patil Shrikhande solved 138 🏁

PICT, Pune
Rohan Khole solved 131 🏁

PICT, Pune
Shreyas Kulkarni solved 117 🏁

PICT, Pune
Roshan Borale solved 110 🏁

PICT, Pune
Manav Chordia solved 100 🏁

PSIT
Vivek Kumar Sahu solved 403 🏁

PSIT
Aryan Porwal solved 215 🏁

Pune University
Paresh Patil Shrikhande solved 126 🏁

Punjab University
Ridhima Singla solved 162 🏁

Punjab University
Anubhav Tewari solved 118 🏁

Pune University
Vishvajeet Singh solved 117 🏁

PU Bangalore
Pratiksha Naik solved 259 🏁

PU Bangalore
Anubhav Tewari solved 137 🏁

PTU Jalandhar
Harsh Kumar Singhsolved 298 🏁

RCET, Bhilai
Pushpraj Singh solved 117 🏁

RCOEM, NAGPUR
Vedant Tiwari solved 351 🏁

RCOEM, NAGPUR
Ganesh Thakur solved 236 🏁

RCOEM, NAGPUR
SHUBHAM PALIWAL solved 103 🏁

REC Kannauj
Amit Kumar Yadav solved 246 🏁

RPS Balana
Sanchit Kumar  solved 100 🏁

RVCE
Bhargav N solved 417 🏁

RVCE
Chayank S solved 249 🏁

RVCE
Tushar Verma solved 212 🏁

RVCE
Bahubali Kurali solved 200 🏁

RVCE
Subham Satapathy solved 135 🏁

RVCE
Adarsh Agrawal solved 134 🏁

RVCE
Dhanush G solved 108 🏁

RIT
Himanshu Dagdi solved 175 🏁

REST,Kochi
Akash s solved 155 🏁

SAKEC
Devanshi Mehta solved 154 🏁

SAE, Pune
Afraz Momin solved 105 🏁

SASTRA University
C Rohith solved 536 🏁

SASTRA University
Ramadugula Sai Charan solved 368 🏁

SASTRA University
Ajay Vijayakumar solved 361 🏁

SASTRA University
Seshamadhav solved 308 🏁

SASTRA University
Harsha Swaraj solved 279 🏁

SASTRA UNIVERSITY
P.Venkata Saketh solved 261 🏁

SASTRA University
Nikhila Mandapaka solved 245 🏁

SASTRA University
Likhitha Koneni solved 242 🏁

SASTRA University
Jaswanth Varikuti solved 240 🏁

SASTRA University
B Pranav Madhav solved 167 🏁

SASTRA University
Ayush Singh solved 160 🏁

SASTRA University
Swarna Venkata Nageswara Kartheek solved 151 🏁

SASTRA University
Lagisetty Venkata Vyshnav solved 144 🏁

SASTRA University
Jami Anil solved 144 🏁

SASTRA University
M.Srilatha solved 123 🏁

SASTRA University
Kiruthiga T solved 100 🏁

SASTRA University
Vulli Raghunandan solved 142 🏁

SASTRA University
R.Sruthi solved 105 🏁

SASTRA University
Bhuvanesvari S solved 100 🏁

SKIT,JAIPUR
Kartikeya Tiwari solved 101 🏁

SKNCOE,Pune
Aditya Gaidhar solved 146 🏁

SKNCOE,Pune
Atharva Patwardhan solved 105 🏁

SCOE, Pune
Aman Kumar Dubey solved 110 🏁

SCOE, Pune
Rohan Mistry solved 104 🏁

SCOE, Pune
Sohan Kakatkar solved 101 🏁

SGSITS
Roli Jain solved 433 🏁

SGSITS
Jayant Partetisolved 228 🏁

SGSITS
Kuldeep Sharma solved 156 🏁

SGSITS
Pratik Jain solved 137 🏁

SGSITS
Shreya Shukla solved 132 🏁

SIT, BBSR
Sukanta Pal solved 228 🏁

Sharda University
Raushan Kumar solved 121 🏁

SJCE Mysore
Yashavantha Gowda Y D solved 127 🏁

Sir MVIT bangalore
Akhil Kumar K A solved 138 🏁

SPIT,Mumbai
Rahul Solanki solved 200 🏁

SREC
Lakshmi S solved 410 🏁

SRM
Gaurav Prasad solved 313 🏁

SRM
Rahul Sharma solved 262 🏁

SRM
Bhavesh Pachauri solved 234 🏁

SRM
Sindhu Maddineni solved 211 🏁

SRM
Prithivi Amuthan solved 169 🏁

SRM
Vibhor Shah solved 261 🏁

SRM
Neha solved 127 🏁

SRM
Gurram Bhaskar solved 123 🏁

SRM
shaik firdose solved 110 🏁

SRKR Bhimavaram,AP
Prudhvi Naidu Guddati solved 255 🏁

SRKR Bhimavaram,AP
Keerthi Sri Vijjapu solved 255 🏁

SRKR Bhimavaram,AP
Sugnanam Satya Meghana solved 255 🏁

SVIT, vasad
R S Hamsini solved 302 🏁

SVIT, vasad
Viraj Tandel solved 109 🏁

SVNIT
Dhruv Patel solved 344 🏁

SVNIT
Brijesh Rohit solved 149 🏁

SVECW
Sowmya Adidamu solved 222 🏁

STCET
Avirup Aditya solved 289 🏁

STCET
Tarun Agarwal solved 102 🏁

SVU Tirupathi
Nithish Kumar solved 116 🏁

TIT BHOPAL
Ritik Soni solved 118 🏁

TIET Patiala
Abhishek Sharma solved 567 🏁

TIET Patiala
Tavish Arora solved 450 🏁

TIET Patiala
Gurpreet Singh solved 289 🏁

TIET Patiala
Kunal Prabhakar solved 200 🏁

TIET Patiala
Arsheya Srivastava solved 124 🏁

TIET Patiala
Lakshya Gupta solved 109 🏁

TIET Patiala
Kapish Singla solved 101 🏁

TIET Patiala
Manmeet Singh Rekhi solved 101 🏁

Thapar University
Gourish Singla solved 310 🏁

Thapar University
Utkarsh Babbar solved 155 🏁

Thapar University
Mohit solved 109 🏁

Thapar University
Srishti Mittal solved 104 🏁

TMSL
Rupnarayan Kumar solved 419 🏁

TMSL
Utkarsh solved 202 🏁

THDCIHET
Shreya Sharma solved 226 🏁

VCE Hyderabad
Venkata Anand solved 139 🏁

VESIT
Sushant Patil solved 150 🏁

VEC
R Badri Narayanan solved 253 🏁

VSSUT
Manish Kumar Mohanta solved 292 🏁

VSSUT
Atul Saswat solved 191 🏁

VIIT, Pune
Ruchika Bhaisare solved 250 🏁

VIIT, Pune
Kunal Ambekar solved 202 🏁

VIIT, Pune
Samarth Patil solved 131 🏁

VIIT, Pune
Mamata Singh solved 100 🏁

VIT Pune
Ajit Yadav solved 343 🏁

VIT Pune
Atharva Tayade solved 191 🏁

VIT Pune
Prachi Pandey solved 182 🏁

VIT Pune
Aman Bhanse solved 160 🏁

VIT
Tanay solved 296 🏁

VIT
Bala koteswara sastry Dandibhotla solved 218 🏁

VIT
Aditya solved 147 🏁

VIT
Sakshi Mude solved 117 🏁

VIT Chennai
Pallav Nayak 406 🏁

VIT Vellore
Ayush Lodh 285 🏁

VIT Vellore
D.Kiran 226 🏁

VIT Vellore
Burela Sumanth 202 🏁

VJTI Mumbai
Devang Masram solved 322 🏁

VJTI Mumbai
Sharath Chandra.D solved 313 🏁

VJTI Mumbai
Yugandhari Bodapati solved 175 🏁

VJTI Mumbai
Prakash Nadgeri solved 172 🏁

VJTI Mumbai
Nishtha Rajiv Sainger solved 102 🏁

VU,Pune
Kunal Agarwal solved 136 🏁

VNRVJIET
Haneesha solved 122 🏁

TAT BBSR
Mohan P. Mandal solved 111 🏁

UIET
Mohit solved 128 🏁

UIET
Nisha  solved 100 🏁

UCER
Ujjwal Dwivedi solved 303 🏁

UCO
Surekha Iyer solved 131 🏁

UEM,Jaipur
Bikash Dutta solved 112 🏁

UPES
Arjun Bansal solved 153 🏁

UOH
Aryan Shukla solved 123 🏁

UOH
Manish Kumar solved 100 🏁

UMIT, Mumbai
Kirti Kesarwanir solved 188 🏁

USICT,GGSIPU
Shubhi Bansal solved 174 🏁

WCE Sangli
Sudhanshu Dhage solved 131 🏁

XIE
Harshal Kulkarni solved 223 🏁

YCCE
Alben Antappan solved 311 🏁

Highly recommend to join Coding Mafia batch by Coding Club India, because you can learn and practice hundreds of question in just short period of 31 days. Just search &quot;coding mafia online&quot; on Google.

And remember, keep yourself motivated. Thats it !

Dream big, stay positive, work hard, and enjoy the journey.

“Discover the hidden coder inside you.” - Coding Mafia

Coding Club India
Learn.Inspire.Grow.🏁‬"><span dir="auto" class="_5h6Y_ _3Whw5">+91 97181 67527</span><span>:&nbsp;</span><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">♦ <em class="_3Whw5"><strong class="_3Whw5">“Discover the hidden coder inside you.”</strong> - Coding Mafia</em>&nbsp;&nbsp;TOPPERS below who crossed 100+ problems in just 31 days from Codechef, Leetcode and InterviewBit&nbsp;&nbsp;<img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="👉" draggable="false" class="b37 emoji wa _3Whw5" style="background-position: -20px -20px;"> Check registration availabiliy:&nbsp;&nbsp;<strong class="_3Whw5">https://codingclub.tech/cm</strong>&nbsp;&nbsp;♦ <strong class="_3Whw5">ALPHABETWISE COLLEGE TOPPERS from Coding Mafia</strong>&nbsp;&nbsp;<strong class="_3Whw5">ACEIT</strong>
Twinkle Das solved 137 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Puneet Garg solved 346 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Priyanka solved 284 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Utsav Shukla solved 258 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Nikunj solved 233 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Samriddhi Jain solved 214 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Versha Mishra solved 201 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ADGITM, Delhi</strong>
Mayank Upadhyay solved 151 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AIACTR</strong>
Neeraj Singh solved 126 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AIT</strong>
Akash Mall solved 218 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AIET Jaipur</strong>
Rohit Yadav solved 297 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AIET Jaipur</strong>
Saikiran Challa solved 276 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;*AIT Bangalore *
Swetha Kambhampati solved 263 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AKGEC Ghaziabad</strong>
Aditya Kumar solved 156 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AKGEC Ghaziabad</strong>
Raghav Vasdeva solved 123 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Amity University Kolkata</strong>
Zulfiqar Ali Ahmed solved 129 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Amity University, Gwalior</strong>
Sahil Singh solved 375 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Asansol Engineering College</strong>
Amit Das solved 111 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Apeejay Stya University</strong>
Nandini Bansal solved 103 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Amity Gwalior</strong>
Ajeesha S Nair solved 221 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Amity,Noida</strong>
Shubham Saini solved 143 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AITM</strong>
Samaya M Yallapurmath solved 143 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AIT Pune</strong>
Ameet Kumar Rana solved 333 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">AJCE, Kerala</strong>
Gautham Sankar M S solved 202 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Amrita Vishwa Vidyapeetham Bengaluru</strong>
Girish Reddy solved 128 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">ARMIET, Maharashtra</strong>
Nilesh Deokar solved 316 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Apoorva Jain solved 196 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Kriti Singh solved 185 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Aditi Mishra solved 155 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Shruti Bhargav solved 151 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Vaishnavi Gupta solved 119 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Tulika Tiwari solved 112 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Banasthali Vidyapith, Rajasthan</strong>
Vaishnavi Upadhyay solved 102 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT, Mesra</strong>
Arpit solved 686 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT, Mesra</strong>
Anurag Kumar Singh solved 604 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Soumya Jha solved 441 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Pratik solved 251 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Kislay Raj solved 248 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Atishi Prasad solved 241 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Osho Barman solved 215 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Kunal Kujur solved 169 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Mesra</strong>
Soumith Aireddi solved 138 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Bangalore</strong>
Chaya V solved 350 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BIT Jaipur</strong>
Rohit Bhati solved 403 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BITS Pilani</strong>
Devang Dhall solved 258 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BITS,Goa</strong>
Mahak Kothari solved 343 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMC</strong>
Gurdeep singh solved 135 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMC</strong>
Sijo jacob solved 227 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSCE</strong>
Rohit B R solved 204 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSCE</strong>
Abhishikat Kumar Soni solved 175 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSCE</strong>
Pradeepa R solved 142 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSCE</strong>
Niveditha M solved 132 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSCE</strong>
Chandan Bagan solved 108 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMCEM</strong>
Vasu sharma solved 120 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSIT</strong>
Prakhar Jaiswal solved 457 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BMSIT</strong>
Suraj Singh Basera solved 208 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BPIT</strong>
Divit Jain solved 201 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BPIT</strong>
Shivam Gupta solved 190 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BPIT</strong>
Aniket Sharma solved 173 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BVCOE</strong>
Harshit Katyal solved 216 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BVCOE</strong>
Aman Chouhan solved 388 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BVC</strong>
Bharath solved 155 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BVC</strong>
Megha solved 140 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BV, Jaipur</strong>
Divyanshi Agarwal solved 240 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BV, Rajasthan</strong>
Vartika Rana solved 405 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">BV, Rajasthan</strong>
Ojasvi Banwat solved 182 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CBIT</strong>
Nihash Veeramachaneni solved 420 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CBIT</strong>
Chethan Avinash solved 305 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CBIT</strong>
Sowjanya Boddani solved 273 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CBIT</strong>
Maanasvi Kodli solved 251 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CBIT</strong>
Saichander A solved 234 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CVRGU</strong>
Aarti Sharma solved 320 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CUSAT</strong>
Shubham Chowdhuri solved 392 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CUSAT</strong>
Apurva Vatsa solved 346 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CUSAT</strong>
Tanmay Anand solved 155 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CU</strong>
Tejas Malpani solved 102 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CET Trivandrum</strong>
Giridhar G solved 241 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CET Trivandrum</strong>
Benedict Isaac solved 240 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CET Trivandrum</strong>
Abhishek Unnithan solved 163 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CET Trivandrum</strong>
Harsha Anil Kumar solved 101 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CGC, Mohali</strong>
Shivam jha solved 246 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CGC</strong>
Riya solved 106 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Chandigarh University</strong>
Manish Saini solved 230 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Chandigarh University</strong>
Sonu Mittal solved 142 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Chandigarh University</strong>
Arushi Vashisht solved 140 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Chandigarh University</strong>
Mohit solved 128 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Chandigarh University</strong>
Siddharth Sahoo solved 114 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">Chandigarh University</strong>
Siddharth Sahoo solved 114 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">CMRIT</strong>
Raveena Kushwah solved 230 <img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🏁" draggable="false" class="b28 emoji wa _3Whw5" style="background-position: 0px 0px;">&nbsp;&nbsp;<strong class="_3Whw5">DAIMSR, Nagpur</strong>
shraddha yadav solved 106 🏁&nbsp;&nbsp;<strong class="_3Whw5">DAIICT Gandhinagar</strong>
Hir Desai solved 301 🏁&nbsp;&nbsp;<strong class="_3Whw5">DAIICT Gandhinagar</strong>
Ishwa Bh…</span></span></div><div class="m61XR"><span><div class="ZKn2B"><span class="_31gEB" aria-label="1 unread message">1</span></div></span><span></span><span></span></div></div></div></div></div></div><div class="_210SC" style="z-index: 168; transition: none 0s ease 0s; height: 72px; transform: translateY(72px);"><div tabindex="0" aria-selected="true" role="option"><div class="eJ0yJ _13opk"><div class="_325lp"><div class="_1BjNO" style="height: 49px; width: 49px;"><img src="./volunteers_files/pp(15)" alt="" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_2kHpK"><div class="_3dtfX"><div class="_3CneP"><span class="_357i8"><span dir="auto" title="Prajwal UVCE" class="_3ko75 _5h6Y_ _3Whw5">Prajwal UVCE</span><div class="_3XFan"></div></span></div><div class="m61XR">08:30</div></div><div class="_1582E"><div class="_3tBW6"><span class="_2iq-U" title="‪download agthilla‬"><div class="zFnXi"><span data-testid="status-dblcheck" data-icon="status-dblcheck" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></span></div><span dir="ltr" class="_3ko75 _5h6Y_ _3Whw5">download agthilla</span></span></div><div class="m61XR"><span></span><span></span><span></span></div></div></div></div></div></div></div></div></div><div class="_2NIgT"></div></div></div></div><div class="_1-iDe Wu52Z"><div id="main" class="_2BuJM"><div class="_27lSL" data-asset-chat-background-light="true" style="opacity: 0.06;"></div><header class="_1iFv8"><div class="m7liR" role="button"><div class="_1BjNO" style="height: 40px; width: 40px;"><img src="./volunteers_files/pp(15)" draggable="false" class="_2goTk _1Jdop _3Whw5" style="visibility: visible;"><div class="_1V82l"><span data-testid="default-user" data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" class="background" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><path fill="#FFF" class="primary" d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></svg></span></div></div></div><div class="_33QME" role="button"><div class="_2FCjS"><div class="DP7CM"><span dir="auto" title="Prajwal UVCE" class="_3ko75 _5h6Y_ _3Whw5">Prajwal UVCE</span></div></div></div><div class="_3nq_A"><div class="_3All_ _3NrAe"><div class="PVMjB"><div aria-disabled="false" role="button" tabindex="0" title="Search…"><span data-testid="search-alt" data-icon="search-alt" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M15.9 14.3H15l-.3-.3c1-1.1 1.6-2.7 1.6-4.3 0-3.7-3-6.7-6.7-6.7S3 6 3 9.7s3 6.7 6.7 6.7c1.6 0 3.2-.6 4.3-1.6l.3.3v.8l5.1 5.1 1.5-1.5-5-5.2zm-6.2 0c-2.6 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2 4.6-4.6 4.6z"></path></svg></span></div><span></span></div><div class="PVMjB"><div aria-disabled="false" role="button" tabindex="0" title="Menu"><span data-testid="menu" data-icon="menu" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></span></div><span></span></div></div></div></header><span class="_6PvwY"></span><div class="_6PvwY"><span></span></div><div class="_3h-WS"><div class="_1LkpH copyable-area"><span><div class="_2uh1G" style="transform: translateY(0%); opacity: 1;"><div class="_2hqOq _2qhWD _23x2e" tabindex="-1"><div class="_2et95 _1E1g0"><span dir="auto" class="_3Whw5">TODAY</span></div></div></div></span><span><div class="_1YcH-" role="button" style="transform: scaleX(1) scaleY(1); opacity: 1;"><span class="_3M9Ef"></span><span data-testid="down" data-icon="down" class="RbeWt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" width="19" height="20"><path fill="currentColor" d="M3.8 6.7l5.7 5.7 5.7-5.7 1.6 1.6-7.3 7.2-7.3-7.2 1.6-1.6z"></path></svg></span></div></span><div class="_2-aNW" tabindex="0"><div class="_2S4JS"></div><div class="uKNCN"><div class="_2J60S" title="load earlier messages…"><span data-testid="refresh" data-icon="refresh" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M17.6 6.4C16.2 4.9 14.2 4 12 4c-4.4 0-8 3.6-8 8s3.6 8 8 8c3.7 0 6.8-2.6 7.7-6h-2.1c-.8 2.3-3 4-5.6 4-3.3 0-6-2.7-6-6s2.7-6 6-6c1.7 0 3.1.7 4.2 1.8L13 11h7V4l-2.4 2.4z"></path></svg></span></div></div><div tabindex="-1" class="z_tTQ" data-tab="7" role="region" aria-label="Message list. Press right arrow key on a message to open message context menu."><div class="_2hqOq _2qhWD focusable-list-item" tabindex="-1"><div class="_2et95 _1E1g0"><span dir="auto" class="_3Whw5">TODAY</span></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB0F8EE7B512E68AB58"><span></span><div class="_2et95 _302_B _1dvTE"><span data-testid="tail-in" data-icon="tail-in" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" fill="#0000000" d="M1.533 3.568L8 12.193V1H2.812C1.042 1 .474 2.156 1.533 3.568z"></path><path fill="currentColor" d="M1.533 2.568L8 11.193V0H2.812C1.042 0 .474 1.156 1.533 2.568z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="xOg_4"><div><div role="button" class="Yik3W" style="width: 330px; height: 330px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="width: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/e400f0a7-da6e-4584-a9d9-de4bdb0be8a4" class="_39rvu" style="width: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB0CD693EC99651A895"><span></span><div class="_2et95 _302_B"><div class="_3sKvP wQZ0F"><div class="xOg_4"><div><div role="button" class="Yik3W" style="width: 330px; height: 330px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/2wBDAQMDAwQDBAgEBAgQCwkLEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBD/wAARCABkAGIDASIAAhEBAxEB/8QAHQAAAgMAAwEBAAAAAAAAAAAAAAkGBwgBAgMEBf/EAEYQAAEDAwIDAwcHCAkFAAAAAAECAwQABREGBwgSITE4tBMUGFFWldMJIkFyc3SFFxkyMzdCV3YVI1JUYZGx0uRxgZam0f/EABwBAAEFAQEBAAAAAAAAAAAAAAUAAwQGBwIIAf/EADgRAAECBAIECwcFAQAAAAAAAAECAwAEBREGEiExUdEHExU1VGFykZKxsjI0QXGBocEWInOCwvD/2gAMAwEAAhEDEQA/APs4heJO9buSXrXElTI1qS+SmOHSG1oH6OUg4P0HrVHtqOMZrjkFSbbnbvU+6Or4GitIQ0v3CesjmcVyNMtpGVuuK/dQkZJ6EnsSCogHfZeXl6XL5EWShOk7zHmOam5qszOdy63FGwHkAIjmT6zRk+s0wDTnydO2zFpZRqzWupJtzwS87AUxGYyT0CULbcV0GBkq64zgZwKl4ieCS4bYWGTrnbu7TL5YoCC7cIktCTMhtADL3MgBLrY+cVYSgoSAcKHMpIqXxVTJl8MIWQSbAkEA/XfaDU1gqsScuZlbYIAuQCCQPl1dV4yzk+s0ZPrNcUVY4qcc5PrNGT6zXFFKFHOT6zXkVrByVdM+uvSupGO0Zr4Y6EdC64Klu2e6Os9rdQo1BpK+SYSitPnLSHCG5CAT8xxI6LAycZBx2jrUUKM9lcJSUnqKadaQ+gtuC4PwMPsvrl1h1k5VDURrhjNt43dLP26K/Lhcr7jKFuAOdAspBI/zopdPKf7VFVU4MkCb6e+LmMf1MC2jujmto/JtWy3u3TXt5diNqnRY9ujMvkfPQ06qQpxAPqUplon6grF1Wxw3b6S9h9fC/uw3p9luLPmd1htLIWprmCg62CQkuoIynm6EKWnKefmBevyjs9TXWGPaIFuuxBt9bWgFhidZp1WZmZj2ATfquCL/AEJvDXq6OtNvNLZeQlba0lKkqGQoHtBH0ioro3dnbXcKH59o3W9nuiA0l9xtqUkPsoOcF1lWHGuw9FpBqneIXjB0FoLS8+z7e6ohXzVkyOpuGu3ONyY8Fasp8s64OZsqRgkNfOJITzJCVZrG5amzc0+JdtBzfIi3z2Rvs3V5GTljNOuDJa+gg3+W0mF36vtVvsWrL1ZLTM87hW+4yYsaRzBXlmm3VJQvI6HKQDn/ABr8iiit7QClIBN48zOKC1lQFgTqgooorqOYKMZoopQoKKKKUKCiiilCgqW7U7d3LdjcGzbfWqYzEkXd5SfOHgSlptDanHF4H6RCEKITkZIAyM5ESq7eC7vL6O/EPASKh1F5cvJuvN+0lKiPmASInUphE1PsMO+ypaQfkVAGLt/NrE9u9A/8c/5VQXe7ggnbQ7c3HcKJuM1e0WpbPnERdqMVRbccS3zIUHXMkKWk8pA6cxzkAFi1Uxxjd23Wf2UPxjFZdT8UVV6babcdukqSCMqdRIB1CNlquDqKxIPOtM2UlCiDmVoIBI1qtC59mNrpm8e4ts2/hXRu2meHVuS1teVDLbbalqPJkcxwnAGR1I6gda1J+bWP8aP/AFz/AJVVDwN94ux/c53h10zmjWKq7P06dSzKuZU5QdQOm52g7Ir+CsN0yrU5UxON5lZyNahoAGwjbC4t9eCifs1t7L3Ai7hM3xm3vsolR12wxFJbcWGwtKvKucxC1oHLgdCTnpg+u1nATuTre2IvWtLuzoyM+3zx2H4pkzVZCSCtkKQGwQT0UvnBGCgdtMOuNrt13ZbjXSEzKaafakoQ6gKSHWlpcbXg/SlaUqB+gpBHUV9VBP1lUhLcVmGe5/dYatFgBa23TaLD+gKSZvjsp4uwsi5tfTck3vs0X2xlKN8nTtKiMlEzWWrnZHLhTjb0ZtBPrCSyogf4c1VzuB8nXqa2QpFx241rHvbjZUtFtuEcRXVICSQlDwUpC3CoADmDaevVQxW86Khs4pqrK8/G36iAR5eVoITGC6I+jJxOXrBII+/neErXizXbT1zkWW+22Tb7hEX5ORGktFt1pXqUk9R9B/718Vb64/tnLbc9Is7yWmI2zdLM4zEuriVcvnERxYQ2pQ/eWh1aEjHUpcVkkISBgWtVo1URV5QTCRY6iNhH/XHUYxXEFGXQp5Uqo3GtJ2g6vyD1iCiiiisBYKu3gu7y+jvxDwEiqSq7eC7vL6O/EPASKHVjm6Y7C/SYK0LnWW/kR6hDSapjjG7tus/sofjGKueqY4xu7brP7KH4xisUpfv7HbT6hHoWtc2zHYX6TGLeBvvF2P7nO8Oumc0sbgb7xdj+5zvDrpnNWLHHOSewPNUVXg55oV21eSY/N1JqC2aT09c9UXp5TVvtEN6dKWlJUUtNIK1kAdScJOAO2li7mcXW9e4N7ky4Wr7jpm1+XUuHbrPJVH83bwAEqeb5XHTgZJUcFRJSlAISNucajikcNWrgn9429J6/R59HpXNFcE0yXfYXNvJClZsouL2sAfvf7QE4Q6xNy8w3IsLKU5cxsbXuSADb4C336hG0uELix1te9bwtr9zb0btGuqFs2y4SEoD7MhKeZLbjmRzpWEqAJCllakDOD03JSf8AY/8AbVt//NNq8W1TgKE4ykGJKcQphISFi5A0C4Ov6wcwBU5moSC0TKiooVYE6TYjVfqiFb22f+n9ndbWhMVEh2Rp+eGG1jILwYWWz/1Cwkg+sCk/U6y6sec2uZG5ebysdxGPXlJFJTo1gFZLT6NhSe8HdFe4TWwHpZzaFDuI3wUUUVoMZfBV28F3eX0d+IeAkVSVXbwXd5fR34h4CRQ6sc3THYX6TBWhc6y38iPUIaTVMcY3dt1n9lD8YxVz1THGN3bdZ/ZQ/GMVilL9/Y7afUI9C1rm2Y7C/SYxbwN94ux/c53h10zmljcDfeLsf3Od4ddM5qxY45yT2B5qiq8HPNCu2ryTFG8a/dr1Z9e3+OYpXdNE41+7Xqz69v8AHMUrurNgXm5fbPpTFP4SOdUfxj1Kib7Hftq2/wD5ptXi2qb/AEoDY79te3/802rxbVN/oLj33hnsnziw8Gfur/aHlHR79Uv6p/0pJp7adk9+qX9U/wClJNPbUnAGqY/p/qInCdrlf7/4jiiiitFjKYKtnhU1Rp/Ru/2ktQ6ourFttrLsll2U+cNtKdivNIK1diU87iQVHCUg5JABIiG5+3l72s11dtD31lxL1ukKQy6pOBJYJ/qnk4JHKtOFdvTJBwQQIrUR1DdQlVISf2uJIuNihrHfE1lx2lzqXFJ/e0oGx2pN7H6iHF/lY2s/iVpX3xH/AN9U7xc7m7c3Ph+1TZ7VrzT06fNTERHiRbmy686RLZKuVCVEnCQScDoATS1qKqMrghqWfQ/xxOUg2sPgb7YvM7wiPzks5L8QBnSU3zHRcW2RdnBxqKxaY3+sVz1HeIdshFiY0ZMx5LLKVqjrCQpaiEpyegyepIHaRTH/AMrG1n8StK++I/8AvpOlFEK1hduszAmFOFJAAta+ok/mBmHsYu0CVMqloKBUVXvbWANh2QxvjM3S23uWwd80/atc2O4XK6Pw2osWFObkOLKJLTqzytklKQhtRKjgZwM5UAVyUUUSotIRRpcy6FFVyTc6PgB+IEYgri6/NCaWgJskJsNOok/mJVtTebbpzdHR2obzJEeBa7/b5kp4pKvJstyELWrCQScJSTgAmmwN7ubUuoS61ubpRaFgKSpN5jEEHsIPPSdaKhVzDrdbWhxThSUgjVeCGHMVu4ebcbQ2FhRB12tbvhv963q2is9om3WbuXpryERhbznkroy4sgAnCUJUVLUewJSCSSAASaUBRXoww/KfbixWXHnnlhttttJUpaicBIA6kk9AKcodBboYcyrKs1tYtqvvhrEeJXcRqazthOS9rG9723R50VsKx/J2aguNkt9wu2u27bOkxWnpMJUTnMZ1SAVtFSVYUUqJTkdDiiuVYqpKSQXfsd0dJwXW1AKDOvrG+Nf7ibN7d7sQ48HcHTzV2REVzsOKJaeaz2hLrfK4lJwMpCsHAyDgVAfQn4bfYF33vN+LRRWSMVGcl0cWy6pKdgUQO4GNymaVITS+MfYQpW0pST3kQehPw2+wLvveb8Wj0J+G32Bd97zfi0UU7yxUekL8at8MchUrozfgTug9Cfht9gXfe834tHoT8NvsC773m/FoopcsVHpC/GrfC5CpXRm/AndB6E/Db7Au+95vxaPQn4bfYF33vN+LRRS5YqPSF+NW+FyFSujN+BO6D0J+G32Bd97zfi0ehPw2+wLvveb8WiilyxUekL8at8LkKldGb8Cd0HoT8NvsC773m/FqR6F4aNlttr2NR6O0YzDuaElLcl59yUtnPaW/LqX5NRBI5k4OCRnBxRRTblUnnUFDjyyDrBUSPOHGaNTmVhxuXQFDUQhII+tosryDn97d/wAk/wDyiiioEFI//9k=" class="_39rvu _20GbR" style="width: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/21be7298-dd5d-44ed-910c-a0fa3cb1f4da" class="_39rvu" style="width: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB00D2C550D302B95AA"><span></span><div class="_2et95 _2B-aZ"><div class="_3sKvP wQZ0F"><div class="_1TGsd"><a target="_blank" href="https://web.whatsapp.com/#" title="Download “mail.html”" class="_3_4_I"><div class="_1Bufj uq7FF"><div class="_2w47l _1YQwQ _3Abmd _6qEOP _3ZWSD"><div class="_29eid _3KYNT _1ZYID"><div class="_3oSNt icon-doc-generic"></div></div><div class="_29eid _3KYNT h3p5g" style="flex-grow: 1;"><span dir="auto" class="_3Whw5">mail.html</span></div><div class="_29eid _3KYNT" style="flex-grow: 0;"><div class="_1-9IA"><span data-testid="audio-download" data-icon="audio-download" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34"><path fill="currentColor" d="M17 2c8.3 0 15 6.7 15 15s-6.7 15-15 15S2 25.3 2 17 8.7 2 17 2m0-1C8.2 1 1 8.2 1 17s7.2 16 16 16 16-7.2 16-16S25.8 1 17 1z"></path><path fill="currentColor" d="M22.4 17.5h-3.2v-6.8c0-.4-.3-.7-.7-.7h-3.2c-.4 0-.7.3-.7.7v6.8h-3.2c-.6 0-.8.4-.4.8l5 5.3c.5.7 1 .5 1.5 0l5-5.3c.7-.5.5-.8-.1-.8z"></path></svg></span></div></div></div></div></a><div class="_2kV_M"><span data-meta-key="type" data-testid="type" class="_17V3H" title="HTML">HTML</span><span class="_17V3H" title="302 B">302 B</span></div><div class="_38-yb"><div class="VGBA3"><span class="_18lLQ" dir="auto">07:59</span></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB0331544ECBC7D5F68"><span></span><div class="_2et95 _302_B"><div class="_3sKvP wQZ0F"><div class="xOg_4"><div><div role="button" class="Yik3W" style="width: 330px; height: 198px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="width: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/7460817e-f5c9-47b8-8904-7f3f8f4ca224" class="_39rvu" style="width: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB04F68C66FF5AC1FDE"><span></span><div class="_2et95 _2B-aZ"><div class="_3sKvP wQZ0F"><div class="_1TGsd"><a target="_blank" href="https://web.whatsapp.com/#" title="Download “mangalore.html”" class="_3_4_I"><div class="_1Bufj uq7FF"><div class="_2w47l _1YQwQ _3Abmd _6qEOP _3ZWSD"><div class="_29eid _3KYNT _1ZYID"><div class="_3oSNt icon-doc-generic"></div></div><div class="_29eid _3KYNT h3p5g" style="flex-grow: 1;"><span dir="auto" class="_3Whw5">mangalore.html</span></div><div class="_29eid _3KYNT" style="flex-grow: 0;"><div class="_1-9IA"><span data-testid="audio-download" data-icon="audio-download" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34"><path fill="currentColor" d="M17 2c8.3 0 15 6.7 15 15s-6.7 15-15 15S2 25.3 2 17 8.7 2 17 2m0-1C8.2 1 1 8.2 1 17s7.2 16 16 16 16-7.2 16-16S25.8 1 17 1z"></path><path fill="currentColor" d="M22.4 17.5h-3.2v-6.8c0-.4-.3-.7-.7-.7h-3.2c-.4 0-.7.3-.7.7v6.8h-3.2c-.6 0-.8.4-.4.8l5 5.3c.5.7 1 .5 1.5 0l5-5.3c.7-.5.5-.8-.1-.8z"></path></svg></span></div></div></div></div></a><div class="_2kV_M"><span data-meta-key="type" data-testid="type" class="_17V3H" title="HTML">HTML</span><span class="_17V3H" title="899 B">899 B</span></div><div class="_38-yb"><div class="VGBA3"><span class="_18lLQ" dir="auto">07:59</span></div></div></div><span><div class="_2nBjH _1q11a _1oarY JKWaU" style="opacity: 1;"><div data-js-context-icon="true" class="_2oA--" style="transform: translateX(0%);"><span data-testid="down-context" data-icon="down-context" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M3.3 4.6L9 10.3l5.7-5.7 1.6 1.6L9 13.4 1.7 6.2l1.6-1.6z"></path></svg></span></div></div></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div class="_2hqOq _28DtS message-in focusable-list-item" data-id="album-false_917899457618@c.us_3EB0C5FF002EDB7EA3B3-false_917899457618@c.us_3EB0048B56B4FDB095CE-4" tabindex="-1"><span></span><div class="_2et95"><div class="_269XL _3sKvP wQZ0F"><div class="_2CnEV"><div class="_9f_Bl"><div class="i9fdm"><div class="xOg_4 _3gHdd"><div><div role="button" class="Yik3W" style="width: 165px; height: 168px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="height: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/5fd81aa6-5432-4b94-a54d-f45099293797" class="_39rvu" style="height: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div></div></div><div class="_9f_Bl"><div class="_2cTOp"><div class="xOg_4 _3gHdd"><div><div role="button" class="Yik3W" style="width: 165px; height: 168px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="height: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/adf7f005-b0a0-4c3b-a62a-db288341c51f" class="_39rvu" style="height: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div></div></div><div class="_9f_Bl"><div class="MTHSM"><div class="xOg_4 _3gHdd"><div><div role="button" class="Yik3W" style="width: 165px; height: 168px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="height: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/3dac1882-4369-4c91-b84b-030bf8b312e0" class="_39rvu" style="height: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div></div></div><div class="_9f_Bl"><div class="_2rw8-"><div class="xOg_4 _3gHdd"><div><div role="button" class="Yik3W" style="width: 165px; height: 168px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="height: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/ca8c61ae-27c4-400c-b926-e33646d609f5" class="_39rvu" style="height: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div></div></div></div></div><span></span><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB0ED6FC213DA21A912"><span></span><div class="_2et95 _2B-aZ"><div class="_3sKvP wQZ0F"><div class="_1TGsd"><a target="_blank" href="https://web.whatsapp.com/#" title="Download “udupi.html”" class="_3_4_I"><div class="_1Bufj uq7FF"><div class="_2w47l _1YQwQ _3Abmd _6qEOP _3ZWSD"><div class="_29eid _3KYNT _1ZYID"><div class="_3oSNt icon-doc-generic"></div></div><div class="_29eid _3KYNT h3p5g" style="flex-grow: 1;"><span dir="auto" class="_3Whw5">udupi.html</span></div><div class="_29eid _3KYNT" style="flex-grow: 0;"><div class="_1-9IA"><span data-testid="audio-download" data-icon="audio-download" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34"><path fill="currentColor" d="M17 2c8.3 0 15 6.7 15 15s-6.7 15-15 15S2 25.3 2 17 8.7 2 17 2m0-1C8.2 1 1 8.2 1 17s7.2 16 16 16 16-7.2 16-16S25.8 1 17 1z"></path><path fill="currentColor" d="M22.4 17.5h-3.2v-6.8c0-.4-.3-.7-.7-.7h-3.2c-.4 0-.7.3-.7.7v6.8h-3.2c-.6 0-.8.4-.4.8l5 5.3c.5.7 1 .5 1.5 0l5-5.3c.7-.5.5-.8-.1-.8z"></path></svg></span></div></div></div></div></a><div class="_2kV_M"><span data-meta-key="type" data-testid="type" class="_17V3H" title="HTML">HTML</span><span class="_17V3H" title="763 B">763 B</span></div><div class="_38-yb"><div class="VGBA3"><span class="_18lLQ" dir="auto">07:59</span></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB007657D202A070777"><span></span><div class="_2et95 _302_B"><div class="_3sKvP wQZ0F"><div class="xOg_4"><div><div role="button" class="Yik3W" style="width: 330px; height: 247px;"><div class="_1iHeu"><div class="_2kLly"><img src="data:image/jpeg;base64,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" class="_39rvu _20GbR" style="height: 100%;"></div><div class="_2kLly"><img src="blob:https://web.whatsapp.com/bd3f952f-6745-48cb-9d58-fe2edef17509" class="_39rvu" style="height: 100%;"></div></div><div class="_1wnLy"></div></div><div class="_3yTyY"><div class="VGBA3 _3S403"><span class="_18lLQ" dir="auto">07:59</span></div></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="0" class="_2hqOq serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB0B13D9A7F6C3A42CD"><span></span><div class="_2et95 _2B-aZ"><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="_1TGsd"><a target="_blank" href="https://web.whatsapp.com/#" title="Download “volunteering.html”" class="_3_4_I"><div class="_1Bufj uq7FF"><div class="_2w47l _1YQwQ _3Abmd _6qEOP _3ZWSD"><div class="_29eid _3KYNT _1ZYID"><div class="_3oSNt icon-doc-generic"></div></div><div class="_29eid _3KYNT h3p5g" style="flex-grow: 1;"><span dir="auto" class="_3Whw5">volunteering.html</span></div><div class="_29eid _3KYNT" style="flex-grow: 0;"><div class="_1-9IA"><span data-testid="audio-download" data-icon="audio-download" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34"><path fill="currentColor" d="M17 2c8.3 0 15 6.7 15 15s-6.7 15-15 15S2 25.3 2 17 8.7 2 17 2m0-1C8.2 1 1 8.2 1 17s7.2 16 16 16 16-7.2 16-16S25.8 1 17 1z"></path><path fill="currentColor" d="M22.4 17.5h-3.2v-6.8c0-.4-.3-.7-.7-.7h-3.2c-.4 0-.7.3-.7.7v6.8h-3.2c-.6 0-.8.4-.4.8l5 5.3c.5.7 1 .5 1.5 0l5-5.3c.7-.5.5-.8-.1-.8z"></path></svg></span></div></div></div></div></a><div class="_2kV_M"><span data-meta-key="type" data-testid="type" class="_17V3H" title="HTML">HTML</span><span class="_17V3H" title="2 kB">2 kB</span></div><div class="_38-yb"><div class="VGBA3"><span class="_18lLQ" dir="auto">07:59</span></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq message-out focusable-list-item" data-id="true_917899457618@c.us_B3AF186F3167287A91F8D33A4CDF2C28"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-out" data-icon="tail-out" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" d="M5.188 1H0v11.193l6.467-8.625C7.526 2.156 6.958 1 5.188 1z"></path><path fill="currentColor" d="M5.188 0H0v11.193l6.467-8.625C7.526 1.156 6.958 0 5.188 0z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="You:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:06, 08/11/2020] Priya: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>Hey nan git hub open madu</span></span><span class="_2oWZe _2HWXK"></span></div></div><div class="_2frDn"><div class="VGBA3" role="button"><span class="_18lLQ" dir="auto">08:06</span><div class="_1qPwk"><span data-testid="msg-dblcheck" aria-label=" Read " data-icon="msg-dblcheck" class="_3xkAl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq _28DtS message-in focusable-list-item" data-id="false_917899457618@c.us_B1E48562E079F4D4F0E0968EC6DB6438"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-in" data-icon="tail-in" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" fill="#0000000" d="M1.533 3.568L8 12.193V1H2.812C1.042 1 .474 2.156 1.533 3.568z"></path><path fill="currentColor" d="M1.533 2.568L8 11.193V0H2.812C1.042 0 .474 1.156 1.533 2.568z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:06, 08/11/2020] Prajwal UVCE: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>Link kalsu</span></span><span class="_2oWZe"></span></div></div><div class="_2frDn"><div class="VGBA3"><span class="_18lLQ" dir="auto">08:06</span></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq message-in focusable-list-item" data-id="false_917899457618@c.us_21E9E3CB2242A07C9694448E4B437F21"><span></span><div class="_2et95 _3c94e"><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:06, 08/11/2020] Prajwal UVCE: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>i dont have github acc</span></span><span class="_2oWZe"></span></div></div><div class="_2frDn"><div class="VGBA3"><span class="_18lLQ" dir="auto">08:06</span></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq message-out focusable-list-item" data-id="true_917899457618@c.us_81C8A0ED8F2EDA4FFDBA65157CADC447"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-out" data-icon="tail-out" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" d="M5.188 1H0v11.193l6.467-8.625C7.526 2.156 6.958 1 5.188 1z"></path><path fill="currentColor" d="M5.188 0H0v11.193l6.467-8.625C7.526 1.156 6.958 0 5.188 0z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="You:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:06, 08/11/2020] Priya: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span><a href="http://github.com/Priyanka-G01/Job-website" title="http://github.com/Priyanka-G01/Job-website" target="_blank" rel="noopener noreferrer" class="_3Whw5 selectable-text invisible-space copyable-text">github.com/Priyanka-G01/Job-website</a></span></span><span class="_2oWZe _2HWXK"></span></div></div><div class="_2frDn"><div class="VGBA3" role="button"><span class="_18lLQ" dir="auto">08:06</span><div class="_1qPwk"><span data-testid="msg-dblcheck" aria-label=" Read " data-icon="msg-dblcheck" class="_3xkAl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq message-in focusable-list-item" data-id="false_917899457618@c.us_208D49235FBBBFD4499C235EF9E7D944"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-in" data-icon="tail-in" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" fill="#0000000" d="M1.533 3.568L8 12.193V1H2.812C1.042 1 .474 2.156 1.533 3.568z"></path><path fill="currentColor" d="M1.533 2.568L8 11.193V0H2.812C1.042 0 .474 1.156 1.533 2.568z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:08, 08/11/2020] Prajwal UVCE: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>Aiyhu open</span></span><span class="_2oWZe"></span></div></div><div class="_2frDn"><div class="VGBA3"><span class="_18lLQ" dir="auto">08:08</span></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq message-out focusable-list-item" data-id="true_917899457618@c.us_E994CFEE300A874548904ACF9455BB36"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-out" data-icon="tail-out" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" d="M5.188 1H0v11.193l6.467-8.625C7.526 2.156 6.958 1 5.188 1z"></path><path fill="currentColor" d="M5.188 0H0v11.193l6.467-8.625C7.526 1.156 6.958 0 5.188 0z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="You:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:09, 08/11/2020] Priya: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>Files nodha</span></span><span class="_2oWZe _2HWXK"></span></div></div><div class="_2frDn"><div class="VGBA3" role="button"><span class="_18lLQ" dir="auto">08:09</span><div class="_1qPwk"><span data-testid="msg-dblcheck" aria-label=" Read " data-icon="msg-dblcheck" class="_3xkAl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq message-in focusable-list-item" data-id="false_917899457618@c.us_36E8B7E038ECE59F3321754177A7699D"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-in" data-icon="tail-in" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" fill="#0000000" d="M1.533 3.568L8 12.193V1H2.812C1.042 1 .474 2.156 1.533 3.568z"></path><path fill="currentColor" d="M1.533 2.568L8 11.193V0H2.812C1.042 0 .474 1.156 1.533 2.568z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:09, 08/11/2020] Prajwal UVCE: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>Codefury.php nodde</span></span><span class="_2oWZe"></span></div></div><div class="_2frDn"><div class="VGBA3"><span class="_18lLQ" dir="auto">08:09</span></div></div></div><span></span></div></div></div><div tabindex="-1" class="_2hqOq serpP message-out focusable-list-item" data-id="true_917899457618@c.us_3EB09887F569E7499BB5"><span></span><div class="_2et95 _2B-aZ _1dvTE"><span data-testid="tail-out" data-icon="tail-out" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" d="M5.188 1H0v11.193l6.467-8.625C7.526 2.156 6.958 1 5.188 1z"></path><path fill="currentColor" d="M5.188 0H0v11.193l6.467-8.625C7.526 1.156 6.958 0 5.188 0z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="You:"></span><div class="_1TGsd"><a target="_blank" href="https://web.whatsapp.com/#" title="Download “Job-website.zip”" class="_3_4_I"><div class="_1Bufj _32aSc"><div class="_2w47l _1YQwQ _3Abmd _6qEOP _3ZWSD"><div class="_29eid _3KYNT _1ZYID"><div class="_3oSNt icon-doc-generic"></div></div><div class="_29eid _3KYNT h3p5g" style="flex-grow: 1;"><span dir="auto" class="_3Whw5">Job-website.zip</span></div><div class="_29eid _3KYNT" style="flex-grow: 0;"><div class="_1-9IA"><span data-testid="audio-download" data-icon="audio-download" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34"><path fill="currentColor" d="M17 2c8.3 0 15 6.7 15 15s-6.7 15-15 15S2 25.3 2 17 8.7 2 17 2m0-1C8.2 1 1 8.2 1 17s7.2 16 16 16 16-7.2 16-16S25.8 1 17 1z"></path><path fill="currentColor" d="M22.4 17.5h-3.2v-6.8c0-.4-.3-.7-.7-.7h-3.2c-.4 0-.7.3-.7.7v6.8h-3.2c-.6 0-.8.4-.4.8l5 5.3c.5.7 1 .5 1.5 0l5-5.3c.7-.5.5-.8-.1-.8z"></path></svg></span></div></div></div></div></a><div class="_2kV_M"><span data-meta-key="type" data-testid="type" class="_17V3H" title="ZIP">ZIP</span><span class="_17V3H" title="260 kB">260 kB</span></div><div class="_38-yb"><div class="VGBA3" role="button"><span class="_18lLQ" dir="auto">08:13</span><div class="_1qPwk"><span data-testid="msg-dblcheck" aria-label=" Read " data-icon="msg-dblcheck" class="_3xkAl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq serpP message-in focusable-list-item" data-id="false_917899457618@c.us_3EB0C1D93E26E708BB48"><span></span><div class="_2et95 _2B-aZ _1dvTE"><span data-testid="tail-in" data-icon="tail-in" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" fill="#0000000" d="M1.533 3.568L8 12.193V1H2.812C1.042 1 .474 2.156 1.533 3.568z"></path><path fill="currentColor" d="M1.533 2.568L8 11.193V0H2.812C1.042 0 .474 1.156 1.533 2.568z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="Prajwal UVCE:"></span><div class="_1TGsd"><a target="_blank" href="https://web.whatsapp.com/#" title="Download “bangOnJob.zip”" class="_3_4_I"><div class="_1Bufj uq7FF"><div class="_2w47l _1YQwQ _3Abmd _6qEOP _3ZWSD"><div class="_29eid _3KYNT _1ZYID"><div class="_3oSNt icon-doc-generic"></div></div><div class="_29eid _3KYNT h3p5g" style="flex-grow: 1;"><span dir="auto" class="_3Whw5">bangOnJob.zip</span></div><div class="_29eid _3KYNT" style="flex-grow: 0;"><div class="_1-9IA"><span data-testid="audio-download" data-icon="audio-download" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34"><path fill="currentColor" d="M17 2c8.3 0 15 6.7 15 15s-6.7 15-15 15S2 25.3 2 17 8.7 2 17 2m0-1C8.2 1 1 8.2 1 17s7.2 16 16 16 16-7.2 16-16S25.8 1 17 1z"></path><path fill="currentColor" d="M22.4 17.5h-3.2v-6.8c0-.4-.3-.7-.7-.7h-3.2c-.4 0-.7.3-.7.7v6.8h-3.2c-.6 0-.8.4-.4.8l5 5.3c.5.7 1 .5 1.5 0l5-5.3c.7-.5.5-.8-.1-.8z"></path></svg></span></div></div></div></div></a><div class="_2kV_M"><span data-meta-key="type" data-testid="type" class="_17V3H" title="ZIP">ZIP</span><span class="_17V3H" title="1 MB">1 MB</span></div><div class="_38-yb"><div class="VGBA3"><span class="_18lLQ" dir="auto">08:22</span></div></div></div><span></span></div><div class="_29g--" role="button"><span data-testid="forward-chat" data-icon="forward-chat" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="25" height="25"><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M14.248 6.973a.688.688 0 0 1 1.174-.488l5.131 5.136a.687.687 0 0 1 0 .973l-5.131 5.136a.688.688 0 0 1-1.174-.488v-2.319c-4.326 0-7.495 1.235-9.85 3.914-.209.237-.596.036-.511-.268 1.215-4.391 4.181-8.492 10.361-9.376v-2.22z"></path></svg></span></div></div></div><div tabindex="-1" class="_2hqOq message-out focusable-list-item" data-id="true_917899457618@c.us_3EB045ECA08D6DCF2A47"><span></span><div class="_2et95 _3c94e _1dvTE"><span data-testid="tail-out" data-icon="tail-out" class="_2-dPL"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 13" width="8" height="13"><path opacity=".13" d="M5.188 1H0v11.193l6.467-8.625C7.526 2.156 6.958 1 5.188 1z"></path><path fill="currentColor" d="M5.188 0H0v11.193l6.467-8.625C7.526 1.156 6.958 0 5.188 0z"></path></svg></span><div class="_3sKvP wQZ0F"><span aria-label="You:"></span><div class="_274yw"><div class="copyable-text" data-pre-plain-text="[08:30, 08/11/2020] Priya: "><div class="eRacY" dir="ltr"><span dir="ltr" class="_3Whw5 selectable-text invisible-space copyable-text"><span>download agthilla</span></span><span class="_2oWZe _2HWXK"></span></div></div><div class="_2frDn"><div class="VGBA3" role="button"><span class="_18lLQ" dir="auto">08:30</span><div class="_1qPwk"><span data-testid="msg-dblcheck" aria-label=" Delivered " data-icon="msg-dblcheck" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="currentColor" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div></div></div></div></div></div><div class="_3cG5o" style="height: 0px;"></div><footer tabindex="-1" class="_2vJ01"><div class="_3ee1T _1LkpH copyable-area"><div class="_1JNuk _1qLcF" style="will-change: width;"><div data-state="closed" class="_2X5R7 _2xX1H"><button tabindex="-1" class="FIHAk _3fM82 _1O_oN _1HKOF"><span data-testid="x" data-icon="x" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M19.1 17.2l-5.3-5.3 5.3-5.3-1.8-1.8-5.3 5.4-5.3-5.3-1.8 1.7 5.3 5.3-5.3 5.3L6.7 19l5.3-5.3 5.3 5.3 1.8-1.8z"></path></svg></span></button><button tabindex="-1" class="FIHAk _3fM82 a37s7 _2Q56Q _2TkoI" aria-label="Open emojis panel" data-tab="5"><span data-testid="smiley" data-icon="smiley" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M9.153 11.603c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962zm-3.204 1.362c-.026-.307-.131 5.218 6.063 5.551 6.066-.25 6.066-5.551 6.066-5.551-6.078 1.416-12.129 0-12.129 0zm11.363 1.108s-.669 1.959-5.051 1.959c-3.505 0-5.388-1.164-5.607-1.959 0 0 5.912 1.055 10.658 0zM11.804 1.011C5.609 1.011.978 6.033.978 12.228s4.826 10.761 11.021 10.761S23.02 18.423 23.02 12.228c.001-6.195-5.021-11.217-11.216-11.217zM12 21.354c-5.273 0-9.381-3.886-9.381-9.159s3.942-9.548 9.215-9.548 9.548 4.275 9.548 9.548c-.001 5.272-4.109 9.159-9.382 9.159zm3.108-9.751c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962z"></path></svg></span></button><button tabindex="-1" class="FIHAk _3fM82 _3eFiH _2TkoI"><span data-testid="gif" data-icon="gif" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M13.177 12.013l-.001-.125v-.541-.512c0-.464 0-.827-.002-1.178a.723.723 0 0 0-.557-.7.715.715 0 0 0-.826.4c-.05.115-.072.253-.073.403-.003 1.065-.003 1.917-.002 3.834v.653c0 .074.003.136.009.195a.72.72 0 0 0 .57.619c.477.091.878-.242.881-.734.002-.454.003-.817.002-1.633l-.001-.681zm-3.21-.536a35.751 35.751 0 0 0-1.651-.003c-.263.005-.498.215-.565.48a.622.622 0 0 0 .276.7.833.833 0 0 0 .372.104c.179.007.32.008.649.005l.137-.001v.102c-.001.28-.001.396.003.546.001.044-.006.055-.047.081-.242.15-.518.235-.857.275-.767.091-1.466-.311-1.745-1.006a2.083 2.083 0 0 1-.117-1.08 1.64 1.64 0 0 1 1.847-1.41c.319.044.616.169.917.376.196.135.401.184.615.131a.692.692 0 0 0 .541-.562c.063-.315-.057-.579-.331-.766-.789-.542-1.701-.694-2.684-.482-2.009.433-2.978 2.537-2.173 4.378.483 1.105 1.389 1.685 2.658 1.771.803.054 1.561-.143 2.279-.579.318-.193.498-.461.508-.803.014-.52.015-1.046.001-1.578-.009-.362-.29-.669-.633-.679zM18 4.25H6A4.75 4.75 0 0 0 1.25 9v6A4.75 4.75 0 0 0 6 19.75h12A4.75 4.75 0 0 0 22.75 15V9A4.75 4.75 0 0 0 18 4.25zM21.25 15A3.25 3.25 0 0 1 18 18.25H6A3.25 3.25 0 0 1 2.75 15V9A3.25 3.25 0 0 1 6 5.75h12A3.25 3.25 0 0 1 21.25 9v6zm-2.869-6.018H15.3c-.544 0-.837.294-.837.839V14.309c0 .293.124.525.368.669.496.292 1.076-.059 1.086-.651.005-.285.006-.532.004-1.013v-.045l-.001-.46v-.052h1.096l1.053-.001a.667.667 0 0 0 .655-.478c.09-.298-.012-.607-.271-.757a.985.985 0 0 0-.468-.122 82.064 82.064 0 0 0-1.436-.006h-.05l-.523.001h-.047v-1.051h1.267l1.22-.001c.458-.001.768-.353.702-.799-.053-.338-.35-.56-.737-.561z"></path></svg></span></button><button tabindex="-1" class="FIHAk _3fM82 _1ix2F _2TkoI"><span data-testid="sticker" data-icon="sticker" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M21.799 10.183c-.002-.184-.003-.373-.008-.548-.02-.768-.065-1.348-.173-1.939a6.6 6.6 0 0 0-.624-1.87 6.24 6.24 0 0 0-1.171-1.594 6.301 6.301 0 0 0-1.614-1.159 6.722 6.722 0 0 0-1.887-.615c-.59-.106-1.174-.15-1.961-.171-.318-.008-3.607-.012-4.631 0-.798.02-1.383.064-1.975.17a6.783 6.783 0 0 0-1.888.616 6.326 6.326 0 0 0-2.785 2.753 6.658 6.658 0 0 0-.623 1.868c-.107.591-.152 1.186-.173 1.941-.008.277-.016 2.882-.016 2.882 0 .52.008 1.647.016 1.925.02.755.066 1.349.172 1.938.126.687.33 1.3.624 1.871.303.59.698 1.126 1.173 1.595a6.318 6.318 0 0 0 1.614 1.159 6.786 6.786 0 0 0 2.146.656c.479.068.833.087 1.633.108.035.001 2.118-.024 2.578-.035a6.873 6.873 0 0 0 4.487-1.811 210.877 210.877 0 0 0 2.928-2.737 6.857 6.857 0 0 0 2.097-4.528l.066-1.052.001-.668c.001-.023-.005-.738-.006-.755zm-3.195 5.92c-.79.757-1.784 1.684-2.906 2.716a5.356 5.356 0 0 1-2.044 1.154c.051-.143.116-.276.145-.433.042-.234.06-.461.067-.74.003-.105.009-.789.009-.789.013-.483.042-.865.107-1.22.069-.379.179-.709.336-1.016.16-.311.369-.595.621-.844.254-.252.542-.458.859-.617.314-.158.65-.268 1.037-.337a8.127 8.127 0 0 1 1.253-.106s.383.001.701-.003a4.91 4.91 0 0 0 .755-.066c.186-.034.348-.105.515-.169a5.35 5.35 0 0 1-1.455 2.47zm1.663-4.757a1.128 1.128 0 0 1-.615.859 1.304 1.304 0 0 1-.371.119 3.502 3.502 0 0 1-.52.043c-.309.004-.687.004-.687.004-.613.016-1.053.049-1.502.129a5.21 5.21 0 0 0-1.447.473 4.86 4.86 0 0 0-2.141 2.115 5.088 5.088 0 0 0-.479 1.434 9.376 9.376 0 0 0-.131 1.461s-.006.684-.008.777c-.006.208-.018.37-.043.511a1.154 1.154 0 0 1-.626.86c-.072.036-.168.063-.37.098-.027.005-.25.027-.448.031-.021 0-1.157.01-1.192.009-.742-.019-1.263-.046-1.668-.126a5.27 5.27 0 0 1-1.477-.479 4.823 4.823 0 0 1-2.127-2.1 5.141 5.141 0 0 1-.482-1.453c-.09-.495-.13-1.025-.149-1.71a36.545 36.545 0 0 1-.012-.847c-.003-.292.005-3.614.012-3.879.02-.685.061-1.214.151-1.712a5.12 5.12 0 0 1 .481-1.45c.231-.449.53-.856.892-1.213.363-.36.777-.657 1.233-.886a5.26 5.26 0 0 1 1.477-.479c.503-.09 1.022-.129 1.74-.149a342.03 342.03 0 0 1 4.561 0c.717.019 1.236.058 1.737.148a5.263 5.263 0 0 1 1.476.478 4.835 4.835 0 0 1 2.126 2.098c.228.441.385.913.482 1.453.091.499.131 1.013.15 1.712.008.271.014 1.098.014 1.235a2.935 2.935 0 0 1-.037.436z"></path></svg></span></button></div><div class="_295He"><div class="PVMjB"><div aria-disabled="false" role="button" tabindex="0" title="Attach"><span data-testid="clip" data-icon="clip" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path></svg></span></div><span></span></div></div></div><div tabindex="-1" class="_3uMse"><div tabindex="-1" class="_2FVVk _2UL8j"><div class="_2FbwG" style="visibility: visible">Type a message</div><div class="_3FRCZ copyable-text selectable-text" contenteditable="true" data-tab="6" dir="ltr" spellcheck="true"></div></div></div><div class="_1JNuk"><div class="_3TDpK"><span><button class="_2r1fJ"><span data-testid="ptt" data-icon="ptt" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M11.999 14.942c2.001 0 3.531-1.53 3.531-3.531V4.35c0-2.001-1.53-3.531-3.531-3.531S8.469 2.35 8.469 4.35v7.061c0 2.001 1.53 3.531 3.53 3.531zm6.238-3.53c0 3.531-2.942 6.002-6.237 6.002s-6.237-2.471-6.237-6.002H3.761c0 4.001 3.178 7.297 7.061 7.885v3.884h2.354v-3.884c3.884-.588 7.061-3.884 7.061-7.885h-2z"></path></svg></span></button></span></div></div></div><div class="rlE2w"><div class="_1WWP0"><div class="_1qDvT"><div class="_2NIgT"></div></div><div class="_1qDvT"><div class="_2NIgT"></div></div><div class="_1qDvT"><div class="_2NIgT"></div></div><div class="_1qDvT"><div class="_2NIgT"></div></div><div class="_1qDvT"><div class="_2NIgT"></div></div><div class="_1qDvT"><div class="_2NIgT"></div></div></div></div><div class="_3V3__"></div><div class="_3FUzQ"></div></footer><span></span></div></div></div></div></div><div id="hard_expire_time" data-time="1620083841.337"></div><script>/*! Copyright (c) 2020 WhatsApp Inc. All Rights Reserved. */!function(e){var r={};function t(n){if(r[n])return r[n].exports;var o=r[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=r,t.d=function(e,r,n){t.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:n})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,r){if(1&r&&(e=t(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(t.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var o in e)t.d(n,o,function(r){return e[r]}.bind(null,o));return n},t.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(r,"a",r),r},t.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},t.p="/",t(t.s="dgeiejggee")}({bcceefiggd:function(e,r,t){"use strict";var n=t("cfjecfhbfg");Object.defineProperty(r,"__esModule",{value:!0}),r.default=r.ScriptLoaderClass=void 0;var o=n(t("eaidjcib")),a=n(t("dgcdacjddi")),i=t("dfjdhbagei"),c=n(t("bjiddchbgc")),s=n(t("jegfdjaci")),u=function(){function e(){(0,o.default)(this,e)}return(0,a.default)(e,[{key:"_loadScript",value:function(e){var r=e.src,t=e.size;return new Promise((function(e,n){var o="progress_script_"+r,a=document.getElementById(o);a&&document.head&&document.head.removeChild(a);var i=function(e){return/\.js$/.test(e)}(r)?function(e,r){var t=document.createElement("script");return t.id=r,t.type="text/javascript",t.charset="utf-8",t.src=e,t}(r,o):function(e,r){var t=document.createElement("link");return t.id=r,t.rel="stylesheet",t.href=e,t}(r,o);i.onload=function(){i.onload=i.onerror=void 0,e({progress:t,size:t,src:r})},i.onerror=function(e){i.onload=i.onerror=void 0,n(e)},document.head&&document.head.appendChild(i)}))}},{key:"loadScriptsInParallel",value:function(e,r){var t=this,n=null==r?void 0:r.onProgress,o=[],a=[],i=[],s=e.reduce((function(e,r){return e+r.size}),0),u=new c.default,d=e.map((function(e){return t._loadScript(e).then((function(r){o.push(e),u.updateProgress(r.src,r.progress),n&&n({totalSize:s,progress:u.getProgress()})})).catch((function(r){i.push(r),a.push(e)}))}));return Promise.all(d).then((function(){return{succeededScripts:o,failedScripts:a,errors:i}}))}},{key:"loadInSeriesWithRetry",value:function(e,r){var t=this,n=r.onProgress,o=e.reduce((function(e,r){return e+r.size}),0),a=new c.default;return(0,s.default)(e,(function(e){return t.loadWithRetry(e).then((function(r){return a.updateProgress(e.src,e.size),n&&n({totalSize:o,progress:a.getProgress()}),r}))})).then((function(r){return Math.random()>.9&&e.forEach((function(e,t){var n=e.src,o=r[t].errors;if(o.length){var a=o.length+1;(0,i.logAsError)({error:"[eventual success]: Bundle loaded after ".concat(a," attempts"),reason:"[eventual success]: Bundle: ".concat((0,i.getBundleName)(n)," loaded after ").concat(a," attempts in series"),stack:""})}})),{strategy:"series"}}))}},{key:"loadWithRetry",value:function(e){var r=this,t=[];return new Promise((function(n){var o=function(){return r._loadScript(e).then((function(){return n({errors:t})})).catch((function(r){window.setTimeout(o,Math.min(1e4,1e3*Math.pow(2,t.length))),t.push(r),(0,i.logScriptLoadError)(e.src,t.length)}))};o()}))}},{key:"loadScriptsWithFallbackToSeries",value:function(e,r){var t=this,n=null==r?void 0:r.onProgress,o=e.reduce((function(e,r){return e+r.size}),0),a=new c.default;return this.loadScriptsInParallel(e,{onProgress:function(e){a.updateProgress("parallel",e.progress),i()}}).then((function(e){var r=e.failedScripts;return r.length?t.loadInSeriesWithRetry(r,{onProgress:s}).then((function(){return{strategy:"series"}})):{strategy:"parallel"}}));function i(){n&&n({totalSize:o,progress:a.getProgress()})}function s(e){a.updateProgress("series",e.progress),i()}}}]),e}();var d=u;r.ScriptLoaderClass=d;var l=new u;r.default=l},bjiddchbgc:function(e,r,t){"use strict";var n=t("cfjecfhbfg");Object.defineProperty(r,"__esModule",{value:!0}),r.default=void 0;var o=n(t("eaidjcib")),a=n(t("dgcdacjddi")),i=function(){function e(){(0,o.default)(this,e),this._progressMap={}}return(0,a.default)(e,[{key:"updateProgress",value:function(e,r){if(!(r<0)){var t=this._progressMap[e]||0;this._progressMap[e]=Math.max(t,r)}}},{key:"getProgress",value:function(){var e=this;return Object.keys(this._progressMap).reduce((function(r,t){return r+e._progressMap[t]}),0)}}]),e}();r.default=i},cahfddcdga:function(e,r,t){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default=function(e){var r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"?";if(null==e)throw new Error("Unexpected null or undefined: ".concat(r));return e}},cfjecfhbfg:function(e,r){e.exports=function(e){return e&&e.__esModule?e:{default:e}}},cjighbeabh:function(e,r,t){"use strict";function n(e){return e.includes("windows")?"Windows":e.includes("mac")?"Mac OS":e.includes("linux")?"Linux":"Unparsed"}Object.defineProperty(r,"__esModule",{value:!0}),r.parseUASimple=function(e,r){var t=e.toLowerCase();return{browser:c(t),device:n(t),appVersion:r}};var o=/(chrome|firefox)\/([\w\.]+)/i,a=/(edge|opr)\/([\w\.]+)/i,i={chrome:"Chrome",edge:"Edge",opr:"Opera",firefox:"Firefox"};function c(e){var r=e.match(a)||e.match(o);return null==r?"Unparsed":"".concat(i[r[1]]," ").concat(r[2])}},dadahbedbh:function(e,r,t){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.getLogUserAgent=function(e){var r,t=e.appVersion,n=e.browser,o=e.device;return r="Web/"+n,"WhatsApp/".concat(t," ").concat(r," Device/").concat(o)}},dfjdhbagei:function(e,r,t){"use strict";var n=t("cfjecfhbfg");Object.defineProperty(r,"__esModule",{value:!0}),r.logProgressError=function(e){v(u({error:"unexpected error in progress.js",reason:String(e),stack:e.stack||""}),"progress")},r.logScriptLoadError=function(e,r){if(0===r)return;var t=s(e),n=u({error:"failed to load a js or css bundle",reason:"failed to load [".concat(t,"] on [").concat(r,"] retry"),stack:""});5===r&&v(n,"load")},r.logAsError=function(e){v(u(e),"load")},r.getBundleName=s;var o=n(t("eaceddbccb")),a=n(t("cahfddcdga")),i=t("dadahbedbh"),c=t("cjighbeabh");function s(e){return e.split(".")[0].replace(/^\//,"")}function u(e){var r=e.error,t=e.reason,n=e.stack,o=(new Date).toISOString();return"".concat(o,": error: ").concat(r,"\n").concat(o,": reason for logs: ").concat(t,"\n").concat(o,": userAgent: ").concat(window.navigator.userAgent,"\n").concat(n)}var d,l="2.2045.15",f="https://crashlogs.whatsapp.net/wa_clb_data",p="1063127757113399|745146ffa34413f9dbb5469f5370b7af",g="WAUnknownID",h="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36";function v(e,r){var t=window.navigator.userAgent;if(t!==h||!e.includes("getElementsByTagName")){var n=new FormData,s=new Blob([e],{type:"text/plain"});n.append("from",function(){if(d)return d;try{(d=JSON.parse((0,a.default)(o.default,"localStorage").getItem(g)))&&(d=d.replace("-",""))}catch(e){}if(!d){d="unknown"+Math.floor(1e10*Math.random());try{(0,a.default)(o.default,"localStorage").setItem(g,JSON.stringify(d))}catch(e){}}return d}()),n.append("agent",(0,i.getLogUserAgent)((0,c.parseUASimple)(t,l))),n.append("file",s,"logs.txt"),n.append("tags",r);var u=new XMLHttpRequest,v=f+"?access_token="+encodeURIComponent(p);u.open("POST",v,!0),u.send(n)}}},dgcdacjddi:function(e,r){function t(e,r){for(var t=0;t<r.length;t++){var n=r[t];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}e.exports=function(e,r,n){return r&&t(e.prototype,r),n&&t(e,n),e}},dgeiejggee:function(e,r,t){"use strict";var n=t("cfjecfhbfg");Object.defineProperty(r,"__esModule",{value:!0}),r.default=c;var o=n(t("dhgjdhifae")),a=t("dfjdhbagei"),i=n(t("bcceefiggd"));if(window.onerror=function(e,r,t,n,o){return(0,a.logProgressError)(o),!0},window.exeTracker=o.default,window.navigator.serviceWorker&&!window.navigator.serviceWorker.controller)try{window.navigator.serviceWorker.register("/serviceworker.js",{scope:"/"})}catch(e){}function c(){var e=document.getElementById("app");if(!e)throw new Error("root element app not found");if(!e.dataset)throw new Error("missing dataset annotations on app for bundles");var r=[{src:e.dataset.vendor1,size:+e.dataset.vendor1Size},{src:e.dataset.vendor2,size:+e.dataset.vendor2Size},{src:e.dataset.app,size:+e.dataset.appSize}],t=[{src:e.dataset.cssmApp,size:0},{src:e.dataset.app2,size:0}];i.default.loadScriptsWithFallbackToSeries(r,{onProgress:function(e){var r=document.getElementById("progressbar");r&&r.setAttribute("value",e.progress.toString())}}).then((function(e){var r="parallel"===e.strategy?i.default.loadScriptsWithFallbackToSeries(t):i.default.loadInSeriesWithRetry(t,{onProgress:function(){}});if(window.Exe)window.Exe(r.then((function(){})));else{var n=window.setTimeout((function(){(0,a.logAsError)({error:"window.Exe was not found after waiting",reason:"window.Exe was not found after waiting for ".concat(5e3," ms"),stack:""})}),5e3);o.default.onExe((function(e){window.clearTimeout(n),e(r.then((function(){}))),(0,a.logAsError)({error:"Avoided window.Exe crash",reason:"window.Exe was not ready when it was attempted to be used",stack:""})}))}return r})).catch((function(e){throw(0,a.logProgressError)(e),e}))}c()},dhgjdhifae:function(e,r,t){"use strict";var n=t("cfjecfhbfg");Object.defineProperty(r,"__esModule",{value:!0}),r.default=r.ExeTrackerClass=void 0;var o=n(t("eaidjcib")),a=n(t("dgcdacjddi")),i=function(){function e(){(0,o.default)(this,e),this._exe=null,this._callback=null}return(0,a.default)(e,[{key:"onExe",value:function(e){if(this._callback)throw new Error("An onExe callback has already been set");this._callback=e,this._runCallback()}},{key:"setExe",value:function(e){if(this._exe)throw new Error("Cannot set Exe twice");this._exe=e,this._runCallback()}},{key:"_runCallback",value:function(){this._exe&&this._callback&&this._callback(this._exe)}}]),e}(),c=i;r.ExeTrackerClass=c;var s=new i;r.default=s},eaceddbccb:function(e,r,t){"use strict";var n;Object.defineProperty(r,"__esModule",{value:!0}),r.default=void 0;try{n=window.localStorage}catch(e){}var o=n;r.default=o},eaidjcib:function(e,r){e.exports=function(e,r){if(!(e instanceof r))throw new TypeError("Cannot call a class as a function")}},jegfdjaci:function(e,r,t){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default=function(e,r){var t=[];return e.reduce((function(e,n){return e.then((function(){return r(n)})).then((function(e){return t.push(e),t}))}),Promise.resolve([]))}}});</script></body></html>