



<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled is-u2f-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-34c6c7ea3bae6030fc23766f3ef694eacb994505393d0bece21d0d9595f14876.css" integrity="sha256-NMbH6juuYDD8I3ZvPvaU6suZRQU5PQvs4h0NlZXxSHY=" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-e5aca7d81bd4265581f44e481fd80d7bf8707a49baa79f5d071d1041d54a5d13.css" integrity="sha256-5ayn2BvUJlWB9E5IH9gNe/hwekm6p59dBx0QQdVKXRM=" media="all" rel="stylesheet" />
    
    
    
    

    <link as="script" href="https://assets-cdn.github.com/assets/frameworks-8d53a291d725eed1eb92d6049716584477fcb8d67d1f9aff5c248de8246a9f30.js" rel="preload" />
    
    <link as="script" href="https://assets-cdn.github.com/assets/github-5c11bc7ab28486412bfa8692a930786268c59ebb5ade4b9561e788095c2756c0.js" rel="preload" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=1020">
    
    
    <title>phpjs/strtotime.js at master · kvz/phpjs</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="https://avatars3.githubusercontent.com/u/26752?v=3&amp;s=400" name="twitter:image:src" /><meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="kvz/phpjs" name="twitter:title" /><meta content="phpjs - php.js is a resource that offers community-built JavaScript alternatives to PHP functions" name="twitter:description" />
      <meta content="https://avatars3.githubusercontent.com/u/26752?v=3&amp;s=400" property="og:image" /><meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="kvz/phpjs" property="og:title" /><meta content="https://github.com/kvz/phpjs" property="og:url" /><meta content="phpjs - php.js is a resource that offers community-built JavaScript alternatives to PHP functions" property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="web-socket" href="wss://live.github.com/_sockets/OTQyMTc2MjpkYjE2NmIwZWZhM2QzY2QxZDMwNThkY2NkNzhmODZjZjo1NGUxYWRlOGMyNWEwYWYxZTU1N2VlYWU2NTM2OTMxY2I4ZDRlOTUzYjMxYjE4ODNlNzIxYjY0OTFkNTI2YzAx--bb6244580f88e04583d3909b5d92b0e20a68b9a3">
    <meta name="pjax-timeout" content="1000">
    <link rel="sudo-modal" href="/sessions/sudo_modal">

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
<meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="B4FE29E3:2082:10EDF5BC:57108D49" name="octolytics-dimension-request_id" /><meta content="9421762" name="octolytics-actor-id" /><meta content="emharis" name="octolytics-actor-login" /><meta content="5b639c41e65a8d90ca8fc57d1739a4b0a654b75e5d229adefbecc2a027ae5abd" name="octolytics-actor-hash" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" name="analytics-location" />



  <meta class="js-ga-set" name="dimension1" content="Logged In">



        <meta name="hostname" content="github.com">
    <meta name="user-login" content="emharis">

        <meta name="expected-hostname" content="github.com">
      <meta name="js-proxy-site-detection-payload" content="MjQzOGNhY2ZkMzlmYjAxZDA5NGVlYTNhMTlkZWEyNjcxNjAzOGY4YmUyOTMzOTg3YTk1ZTQ1YTE5YzcyMWNkM3x7InJlbW90ZV9hZGRyZXNzIjoiMTgwLjI1NC40MS4yMjciLCJyZXF1ZXN0X2lkIjoiQjRGRTI5RTM6MjA4MjoxMEVERjVCQzo1NzEwOEQ0OSIsInRpbWVzdGFtcCI6MTQ2MDcwMjU0N30=">

      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta content="b8adf4500295b94adced68b584b96458cf04bad9" name="form-nonce" />

    <meta http-equiv="x-pjax-version" content="bea5e86eb89366626a2d439b59108e52">
    

      
  <meta name="description" content="phpjs - php.js is a resource that offers community-built JavaScript alternatives to PHP functions">
  <meta name="go-import" content="github.com/kvz/phpjs git https://github.com/kvz/phpjs.git">

  <meta content="26752" name="octolytics-dimension-user_id" /><meta content="kvz" name="octolytics-dimension-user_login" /><meta content="296239" name="octolytics-dimension-repository_id" /><meta content="kvz/phpjs" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="296239" name="octolytics-dimension-repository_network_root_id" /><meta content="kvz/phpjs" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/kvz/phpjs/commits/master.atom" rel="alternate" title="Recent Commits to phpjs:master" type="application/atom+xml">


      <link rel="canonical" href="https://github.com/kvz/phpjs/blob/master/functions/datetime/strtotime.js" data-pjax-transient>
  </head>


  <body class="logged-in   env-production linux vis-public page-blob">
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"></div>
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



        <div class="header header-logged-in true" role="banner">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
  <svg aria-hidden="true" class="octicon octicon-mark-github" height="28" version="1.1" viewBox="0 0 16 16" width="28"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path></svg>
</a>


        <div class="header-search scoped-search site-scoped-search js-site-search" role="search">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/kvz/phpjs/search" class="js-site-search-form" data-scoped-search-url="/kvz/phpjs/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <label class="form-control header-search-wrapper js-chromeless-input-container">
      <div class="header-search-scope">This repository</div>
      <input type="text"
        class="form-control header-search-input js-site-search-focus js-site-search-field is-clearable"
        data-hotkey="s"
        name="q"
        placeholder="Search"
        aria-label="Search this repository"
        data-unscoped-placeholder="Search GitHub"
        data-scoped-placeholder="Search"
        tabindex="1"
        autocapitalize="off">
    </label>
</form></div>


      <ul class="header-nav left" role="navigation">
        <li class="header-nav-item">
          <a href="/pulls" class="js-selected-navigation-item header-nav-link" data-ga-click="Header, click, Nav menu - item:pulls context:user" data-hotkey="g p" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls">
            Pull requests
</a>        </li>
        <li class="header-nav-item">
          <a href="/issues" class="js-selected-navigation-item header-nav-link" data-ga-click="Header, click, Nav menu - item:issues context:user" data-hotkey="g i" data-selected-links="/issues /issues/assigned /issues/mentioned /issues">
            Issues
</a>        </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://gist.github.com/" data-ga-click="Header, go to gist, text:gist">Gist</a>
          </li>
      </ul>

    
<ul class="header-nav user-nav right" id="user-links">
  <li class="header-nav-item">
    
    <a href="/notifications" aria-label="You have unread notifications" class="header-nav-link notification-indicator tooltipped tooltipped-s js-socket-channel js-notification-indicator" data-channel="notification-changed-v2:9421762" data-ga-click="Header, go to notifications, icon:unread" data-hotkey="g n">
        <span class="mail-status unread"></span>
        <svg aria-hidden="true" class="octicon octicon-bell" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 12v1H0v-1l0.73-0.58c0.77-0.77 0.81-2.55 1.19-4.42 0.77-3.77 4.08-5 4.08-5 0-0.55 0.45-1 1-1s1 0.45 1 1c0 0 3.39 1.23 4.16 5 0.38 1.88 0.42 3.66 1.19 4.42l0.66 0.58z m-7 4c1.11 0 2-0.89 2-2H5c0 1.11 0.89 2 2 2z"></path></svg>
</a>
  </li>

  <li class="header-nav-item dropdown js-menu-container">
    <a class="header-nav-link tooltipped tooltipped-s js-menu-target" href="/new"
       aria-label="Create new…"
       data-ga-click="Header, create new, icon:add">
      <svg aria-hidden="true" class="octicon octicon-plus left" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 9H7v5H5V9H0V7h5V2h2v5h5v2z"></path></svg>
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <ul class="dropdown-menu dropdown-menu-sw">
        
<a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>


  <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="kvz/phpjs">This repository</span>
  </div>
    <a class="dropdown-item" href="/kvz/phpjs/issues/new" data-ga-click="Header, create new issue">
      New issue
    </a>

      </ul>
    </div>
  </li>

  <li class="header-nav-item dropdown js-menu-container">
    <a class="header-nav-link name tooltipped tooltipped-sw js-menu-target" href="/emharis"
       aria-label="View profile and more"
       data-ga-click="Header, show menu, icon:avatar">
      <img alt="@emharis" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/9421762?v=3&amp;s=40" width="20" />
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <div class="dropdown-menu  dropdown-menu-sw">
        <div class=" dropdown-header header-nav-current-user css-truncate">
            Signed in as <strong class="css-truncate-target">emharis</strong>

        </div>


        <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="/emharis" data-ga-click="Header, go to profile, text:your profile">
            Your profile
          </a>
        <a class="dropdown-item" href="/stars" data-ga-click="Header, go to starred repos, text:your stars">
          Your stars
        </a>
          <a class="dropdown-item" href="/explore" data-ga-click="Header, go to explore, text:explore">
            Explore
          </a>
          <a class="dropdown-item" href="/integrations" data-ga-click="Header, go to integrations, text:integrations">
            Integrations
          </a>
        <a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
          Help
        </a>


          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
            Settings
          </a>

          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/logout" class="logout-form" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="EnsPeNMyPDu2Yg6Qn755e6yV7gjabDFwT4y5fgp3jpas3g7lRc9JCzs9LsojM1E9GuX++oi2e0R9T164ECjCjw==" /></div>
            <button class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
              Sign out
            </button>
</form>
      </div>
    </div>
  </li>
</ul>


    
  </div>
</div>


      


    <div id="start-of-content" class="accessibility-aid"></div>

      <div id="js-flash-container">
</div>


    <div role="main" class="main-content">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>
      
<div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
  <div class="container repohead-details-container">

    

<ul class="pagehead-actions">

  <li>
        <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="i46UZn273DuU8bsxYzUK55pVvsnOcErDPJsLiuxak9pW5LPEqnzyQy2C/XcG71OpFBLq/32dpEXjKVWeJ/4keg==" /></div>      <input class="form-control" id="repository_id" name="repository_id" type="hidden" value="296239" />

        <div class="select-menu js-menu-container js-select-menu">
          <a href="/kvz/phpjs/subscription"
            class="btn btn-sm btn-with-count select-menu-button js-menu-target" role="button" tabindex="0" aria-haspopup="true"
            data-ga-click="Repository, click Watch settings, action:blob#show">
            <span class="js-select-button">
              <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6c4.94 0 7.94-6 7.94-6S13 2 8.06 2z m-0.06 10c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4z m2-4c0 1.11-0.89 2-2 2s-2-0.89-2-2 0.89-2 2-2 2 0.89 2 2z"></path></svg>
              Watch
            </span>
          </a>
          <a class="social-count js-social-count" href="/kvz/phpjs/watchers">
            218
          </a>

        <div class="select-menu-modal-holder">
          <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
            <div class="select-menu-header js-navigation-enable" tabindex="-1">
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48-3.75-3.75-3.75 3.75-1.48-1.48 3.75-3.75L0.77 4.25l1.48-1.48 3.75 3.75 3.75-3.75 1.48 1.48-3.75 3.75z"></path></svg>
              <span class="select-menu-title">Notifications</span>
            </div>

              <div class="select-menu-list js-navigation-container" role="menu">

                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
                  <div class="select-menu-item-text">
                    <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                    <span class="select-menu-item-heading">Not watching</span>
                    <span class="description">Be notified when participating or @mentioned.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6c4.94 0 7.94-6 7.94-6S13 2 8.06 2z m-0.06 10c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4z m2-4c0 1.11-0.89 2-2 2s-2-0.89-2-2 0.89-2 2-2 2 0.89 2 2z"></path></svg>
                      Watch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
                  <div class="select-menu-item-text">
                    <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                    <span class="select-menu-item-heading">Watching</span>
                    <span class="description">Be notified of all conversations.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6c4.94 0 7.94-6 7.94-6S13 2 8.06 2z m-0.06 10c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4z m2-4c0 1.11-0.89 2-2 2s-2-0.89-2-2 0.89-2 2-2 2 0.89 2 2z"></path></svg>
                      Unwatch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
                  <div class="select-menu-item-text">
                    <input id="do_ignore" name="do" type="radio" value="ignore" />
                    <span class="select-menu-item-heading">Ignoring</span>
                    <span class="description">Never be notified.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-mute" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8 2.81v10.38c0 0.67-0.81 1-1.28 0.53L3 10H1c-0.55 0-1-0.45-1-1V7c0-0.55 0.45-1 1-1h2l3.72-3.72c0.47-0.47 1.28-0.14 1.28 0.53z m7.53 3.22l-1.06-1.06-1.97 1.97-1.97-1.97-1.06 1.06 1.97 1.97-1.97 1.97 1.06 1.06 1.97-1.97 1.97 1.97 1.06-1.06-1.97-1.97 1.97-1.97z"></path></svg>
                      Stop ignoring
                    </span>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
</form>
  </li>

  <li>
    
  <div class="js-toggler-container js-social-container starring-container ">

    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/kvz/phpjs/unstar" class="js-toggler-form starred" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="Q3O8N6Njpy5rjhhAkvSrC8VJOQTySUuPgwtqVjVr/Yi1gtmARekKkr44VpOEbz3uaGDlUjea1MiYTKUnWmfoCQ==" /></div>
      <button
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Unstar this repository" title="Unstar kvz/phpjs"
        data-ga-click="Repository, click unstar button, action:blob#show; text:Unstar">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 6l-4.9-0.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14l4.33-2.33 4.33 2.33L10.4 9.26 14 6z"></path></svg>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/kvz/phpjs/stargazers">
          2,449
        </a>
</form>
    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/kvz/phpjs/star" class="js-toggler-form unstarred" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ZmxfpwCN4BxXQy4a6888l0dUW1P/PSFqCRQPZ7IkdWzZk5y0xjkCgfnUoyNfFB4f5E2TYHNpnNfrlyLmCgMGgw==" /></div>
      <button
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Star this repository" title="Star kvz/phpjs"
        data-ga-click="Repository, click star button, action:blob#show; text:Star">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 6l-4.9-0.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14l4.33-2.33 4.33 2.33L10.4 9.26 14 6z"></path></svg>
        Star
      </button>
        <a class="social-count js-social-count" href="/kvz/phpjs/stargazers">
          2,449
        </a>
</form>  </div>

  </li>

  <li>
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/kvz/phpjs/fork" class="btn-with-count" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="GjZnX+nqS03hoyRRnDmEm/v2uuHbXtcVOcqyLzrnMdrO+B7kU4BWORv6GyVTLQL7jjyrBG3nJPCBe/QG/YEigg==" /></div>
            <button
                type="submit"
                class="btn btn-sm btn-with-count"
                data-ga-click="Repository, show fork modal, action:blob#show; text:Fork"
                title="Fork your own copy of kvz/phpjs to your account"
                aria-label="Fork your own copy of kvz/phpjs to your account">
              <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path d="M8 1c-1.11 0-2 0.89-2 2 0 0.73 0.41 1.38 1 1.72v1.28L5 8 3 6v-1.28c0.59-0.34 1-0.98 1-1.72 0-1.11-0.89-2-2-2S0 1.89 0 3c0 0.73 0.41 1.38 1 1.72v1.78l3 3v1.78c-0.59 0.34-1 0.98-1 1.72 0 1.11 0.89 2 2 2s2-0.89 2-2c0-0.73-0.41-1.38-1-1.72V9.5l3-3V4.72c0.59-0.34 1-0.98 1-1.72 0-1.11-0.89-2-2-2zM2 4.2c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2z m3 10c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2z m3-10c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2z"></path></svg>
              Fork
            </button>
</form>
    <a href="/kvz/phpjs/network" class="social-count">
      1,041
    </a>
  </li>
</ul>

    <h1 class="entry-title public ">
  <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M4 9h-1v-1h1v1z m0-3h-1v1h1v-1z m0-2h-1v1h1v-1z m0-2h-1v1h1v-1z m8-1v12c0 0.55-0.45 1-1 1H6v2l-1.5-1.5-1.5 1.5V14H1c-0.55 0-1-0.45-1-1V1C0 0.45 0.45 0 1 0h10c0.55 0 1 0.45 1 1z m-1 10H1v2h2v-1h3v1h5V11z m0-10H2v9h9V1z"></path></svg>
  <span class="author" itemprop="author"><a href="/kvz" class="url fn" rel="author">kvz</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a href="/kvz/phpjs" data-pjax="#js-repo-pjax-container">phpjs</a></strong>

</h1>

  </div>
  <div class="container">
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/kvz/phpjs" aria-selected="true" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /kvz/phpjs" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M9.5 3l-1.5 1.5 3.5 3.5L8 11.5l1.5 1.5 4.5-5L9.5 3zM4.5 3L0 8l4.5 5 1.5-1.5L2.5 8l3.5-3.5L4.5 3z"></path></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a href="/kvz/phpjs/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /kvz/phpjs/issues" itemprop="url">
        <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z m1 3H6v5h2V4z m0 6H6v2h2V10z"></path></svg>
        <span itemprop="name">Issues</span>
        <span class="counter">41</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/kvz/phpjs/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /kvz/phpjs/pulls" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M11 11.28c0-1.73 0-6.28 0-6.28-0.03-0.78-0.34-1.47-0.94-2.06s-1.28-0.91-2.06-0.94c0 0-1.02 0-1 0V0L4 3l3 3V4h1c0.27 0.02 0.48 0.11 0.69 0.31s0.3 0.42 0.31 0.69v6.28c-0.59 0.34-1 0.98-1 1.72 0 1.11 0.89 2 2 2s2-0.89 2-2c0-0.73-0.41-1.38-1-1.72z m-1 2.92c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2zM4 3c0-1.11-0.89-2-2-2S0 1.89 0 3c0 0.73 0.41 1.38 1 1.72 0 1.55 0 5.56 0 6.56-0.59 0.34-1 0.98-1 1.72 0 1.11 0.89 2 2 2s2-0.89 2-2c0-0.73-0.41-1.38-1-1.72V4.72c0.59-0.34 1-0.98 1-1.72z m-0.8 10c0 0.66-0.55 1.2-1.2 1.2s-1.2-0.55-1.2-1.2 0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2z m-1.2-8.8c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2z"></path></svg>
      <span itemprop="name">Pull requests</span>
      <span class="counter">31</span>
      <meta itemprop="position" content="3">
</a>  </span>


  <a href="/kvz/phpjs/pulse" class="js-selected-navigation-item reponav-item" data-selected-links="pulse /kvz/phpjs/pulse">
    <svg aria-hidden="true" class="octicon octicon-pulse" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M11.5 8L8.8 5.4 6.6 8.5 5.5 1.6 2.38 8H0V10h3.6L4.5 8.2l0.9 5.4L9 8.5l1.6 1.5H14V8H11.5z"></path></svg>
    Pulse
</a>
  <a href="/kvz/phpjs/graphs" class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors /kvz/phpjs/graphs">
    <svg aria-hidden="true" class="octicon octicon-graph" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M16 14v1H0V0h1v14h15z m-11-1H3V8h2v5z m4 0H7V3h2v10z m4 0H11V6h2v7z"></path></svg>
    Graphs
</a>

</nav>

  </div>
</div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    

<a href="/kvz/phpjs/blob/458e595f90a82e8d80105c4784defd380222306b/functions/datetime/strtotime.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:2b21cdd60f796c68fb21b6d8899a5cfa -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu branch-select-menu js-menu-container js-select-menu left">
  <button class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    title="master"
    type="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48-3.75-3.75-3.75 3.75-1.48-1.48 3.75-3.75L0.77 4.25l1.48-1.48 3.75 3.75 3.75-3.75 1.48 1.48-3.75 3.75z"></path></svg>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="form-control js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/Atry-patch-1/functions/datetime/strtotime.js"
               data-name="Atry-patch-1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="Atry-patch-1">
                Atry-patch-1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/array_rand-patch-1/functions/datetime/strtotime.js"
               data-name="array_rand-patch-1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="array_rand-patch-1">
                array_rand-patch-1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/buildnpm/functions/datetime/strtotime.js"
               data-name="buildnpm"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="buildnpm">
                buildnpm
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/eslint/functions/datetime/strtotime.js"
               data-name="eslint"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="eslint">
                eslint
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/gettype/functions/datetime/strtotime.js"
               data-name="gettype"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="gettype">
                gettype
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/gh-pages/functions/datetime/strtotime.js"
               data-name="gh-pages"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="gh-pages">
                gh-pages
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-cli-0.11.1/functions/datetime/strtotime.js"
               data-name="greenkeeper-cli-0.11.1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-cli-0.11.1">
                greenkeeper-cli-0.11.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-glob-6.0.0/functions/datetime/strtotime.js"
               data-name="greenkeeper-glob-6.0.0"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-glob-6.0.0">
                greenkeeper-glob-6.0.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-glob-6.0.1/functions/datetime/strtotime.js"
               data-name="greenkeeper-glob-6.0.1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-glob-6.0.1">
                greenkeeper-glob-6.0.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-jscs-2.5.0/functions/datetime/strtotime.js"
               data-name="greenkeeper-jscs-2.5.0"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-jscs-2.5.0">
                greenkeeper-jscs-2.5.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-jscs-2.5.1/functions/datetime/strtotime.js"
               data-name="greenkeeper-jscs-2.5.1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-jscs-2.5.1">
                greenkeeper-jscs-2.5.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-jscs-2.7.0/functions/datetime/strtotime.js"
               data-name="greenkeeper-jscs-2.7.0"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-jscs-2.7.0">
                greenkeeper-jscs-2.7.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-mocha-2.3.4/functions/datetime/strtotime.js"
               data-name="greenkeeper-mocha-2.3.4"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-mocha-2.3.4">
                greenkeeper-mocha-2.3.4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.4.0/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.4.0"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.4.0">
                greenkeeper-npm-check-updates-2.4.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.4.1/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.4.1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.4.1">
                greenkeeper-npm-check-updates-2.4.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.4.2/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.4.2"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.4.2">
                greenkeeper-npm-check-updates-2.4.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.5.0/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.5.0"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.5.0">
                greenkeeper-npm-check-updates-2.5.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.5.1/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.5.1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.5.1">
                greenkeeper-npm-check-updates-2.5.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.5.2/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.5.2"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.5.2">
                greenkeeper-npm-check-updates-2.5.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.5.3/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.5.3"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.5.3">
                greenkeeper-npm-check-updates-2.5.3
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/greenkeeper-npm-check-updates-2.5.4/functions/datetime/strtotime.js"
               data-name="greenkeeper-npm-check-updates-2.5.4"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="greenkeeper-npm-check-updates-2.5.4">
                greenkeeper-npm-check-updates-2.5.4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/hilmishariff-patch-1/functions/datetime/strtotime.js"
               data-name="hilmishariff-patch-1"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="hilmishariff-patch-1">
                hilmishariff-patch-1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/kvz/phpjs/blob/master/functions/datetime/strtotime.js"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="master">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/mfaber-strtotime/functions/datetime/strtotime.js"
               data-name="mfaber-strtotime"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="mfaber-strtotime">
                mfaber-strtotime
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/strtotime-for-date_parse/functions/datetime/strtotime.js"
               data-name="strtotime-for-date_parse"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="strtotime-for-date_parse">
                strtotime-for-date_parse
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/travis/functions/datetime/strtotime.js"
               data-name="travis"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="travis">
                travis
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/kvz/phpjs/blob/whitespacefixes/functions/datetime/strtotime.js"
               data-name="whitespacefixes"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text" title="whitespacefixes">
                whitespacefixes
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group right">
    <a href="/kvz/phpjs/find/master"
          class="js-pjax-capture-input btn btn-sm"
          data-pjax
          data-hotkey="t">
      Find file
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button">Copy path</button>
  </div>
  <div class="breadcrumb js-zeroclipboard-target">
    <span class="repo-root js-repo-root"><span class="js-path-segment"><a href="/kvz/phpjs"><span>phpjs</span></a></span></span><span class="separator">/</span><span class="js-path-segment"><a href="/kvz/phpjs/tree/master/functions"><span>functions</span></a></span><span class="separator">/</span><span class="js-path-segment"><a href="/kvz/phpjs/tree/master/functions/datetime"><span>datetime</span></a></span><span class="separator">/</span><strong class="final-path">strtotime.js</strong>
  </div>
</div>


  <div class="commit-tease">
      <span class="right">
        <a class="commit-tease-sha" href="/kvz/phpjs/commit/303ffd6d84414f4605bd0e78c5f63d8913815a98" data-pjax>
          303ffd6
        </a>
        <time datetime="2016-04-01T12:21:47Z" is="relative-time">Apr 1, 2016</time>
      </span>
      <div>
        <img alt="@kvz" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/26752?v=3&amp;s=40" width="20" />
        <a href="/kvz" class="user-mention" rel="author">kvz</a>
          <a href="/kvz/phpjs/commit/303ffd6d84414f4605bd0e78c5f63d8913815a98" class="message" data-pjax="true" title="Switch to using standard + ESLint

Squashed commit of the following:

commit 78c99cc851b867330a9f42c06cb2ff8ce7cbcbdc
Author: Kevin van Zonneveld &lt;kevin@vanzonneveld.net&gt;
Date:   Fri Apr 1 14:21:32 2016 +0200

    Standard Coding Style post

commit dfdf0756f5e2ec5360a07824471b58086f070a2c
Author: Kevin van Zonneveld &lt;kevin@vanzonneveld.net&gt;
Date:   Fri Apr 1 13:50:45 2016 +0200

    Exclude a few rules

commit d38d8fa5b7507f98f5ab1eb001908df3b55577b2
Author: Kevin van Zonneveld &lt;kevin@vanzonneveld.net&gt;
Date:   Fri Apr 1 13:31:16 2016 +0200

    Add back js-beautify

commit c88ab28ff7bc22aac444fdc33bdddc7b5c32aaf1
Author: Kevin van Zonneveld &lt;kevin@vanzonneveld.net&gt;
Date:   Fri Apr 1 13:21:08 2016 +0200

    Upgrade node dependencies

    - update travis
    - Correct doc typo re &#39;DIR&#39; vs &#39;FILE&#39;
      Close #222
    - mention realpath for match event
    - Be more explicit about which kind of pattern is supported by the `ignore` option.
      Cf. #207 comment (got stuck into it as well).
    - Add new fixtures for dot ignore tests
    - Ignores are always dot:true
      Fix #223
      Fix #226
      Fix #166
    - code-ify the type defs in API doc
    - v6.0.0
    - Remove negation and comments as promised for v6
    - v6.0.1
    - Appveyor yml file
    - remove unnecessary options object manipulation
    - v6.0.2
    - Revert &quot;remove unnecessary options object manipulation&quot;
      This reverts commit eb6319ff50ae8ef4f9f287fdd4d8f67ba083bba2.
      Turns out those options ARE relevant, for Minimatch, though not for
      glob.  Oh well.
      Fix #239
    - v6.0.3
    - update badges to add appveyor and coveralls
      remove david-dm, since I don&#39;t really get much value out of it.  I run
      &#39;npm outdated&#39; enough to find issues.
    - add node 5 to travis-ci
    - simplify appveyor.yml file
      Also adds a few details that make things go faster
    - Upgrade to tap@4
      Required a slight change since Istanbul now includes a
      fs.readdirSync(), which triggered the ENOTSUP test monkeypatch.
    - Fix appveyor install of node
      Thanks @appveyor support!
    - remove util._extend
      fix #240
    - tap@5
    - v6.0.4
    - Raise error if cwd is not a directory
      Fix #235
    - v7.0.0
    - add package name to readme
      Fix #230
    - changelog
      Fix #179
    - Fix race condition when all patterns are ignored
      Fix #232
    - v7.0.1
    - Properly exclude dirs using nodir when root is set
      Fix #221
    - update tap to 5.7.0
    - v7.0.2
    - test: fix some paths for windows
    - remove incorrect absolute-ness check in makeAbs
    - Prevent incorrect nodir results on Windows
      Ensure that everything in the cache always uses correct slashes, and
      always test against absolute paths when checking anything in the cache.
    - optimization: only abs the cwd once
    - v7.0.3

    - New: `no-duplicate-imports` rule (fixes #3478)
    - Docs: Distinguish examples in rules under Variables part 2
    - Docs: Distinguish examples in rules under Best Practices part 3
    - Fix: Improve file path resolution (fixes #5314)
      Squashed commits:
      28b1368252360ce1f5e01831f4a4339dd43a79b3 Clean up tests
      fe805b5aa68f63bde521aeee31af94b7224b0efd Further test cleanup
      c8e45c89d4e4bcf27efbf8106d179d2bde3fa53d Pull out and fix path resolution for ignored-paths
      4647bfcb0794fd1cd299d49071e3cc22df3e095a Use process.cwd() at time of construction
      fb8f2fab0ddb862ad840117d11468a62dd67a2e3 Do not ignore files with `../` as dotfiles
      ba2cf77c483e0098e11c67963317030b064c349e Consistently use resolved paths
      abe62795cf9ea6f6efa9fa89476e80d9a56da5b5 Clean up cli.js tests
      1a347bb1584258ad47012f38a9725e98f78b7fee Deal with relative file paths
      f02b1ba5ac9b8204d4d96b7067cf0c0ece3a1525 Shim path.isAbsolute for node 0.10
      8510d639523675e0e14c51fa7ef09c4910ba166b Test for file existence before directory check
      05ff54994f012269945c5712fd98ca1e1f4b1cf1 Use path-is-absolute ponyfill
      34e9a1571bbe686cca7d3e924f4d4b94f9ec4b0c Avoid process.chdir in glob-util tests
      baaa07e1671eb8515b0a7fb6c3af3cc2c18701ed Force posix style paths
      a521d6c7f4e5e29ac612e77948978d5bafc1ae26 Update to node-ignore 3.x and address PR comments
      fc1f56249592c1a94b123d408f015333d37f9221 Update shelljs and glob
    - Docs: Separate parser and config questions in issue template
    - Fix: object-curly-spacing doesn&#39;t know types (fixes #5537) (fixes #5538)
      `object-curly-spacing` was blindly checking the penultimate token for
      `objectsInObjects` and `arraysInObjects` options and it was confusing
      computed member expressions and function expressions with array and
      object expressions respectively. This patch adds a type check for the
      penultimate tokens owner node.
    - Merge pull request #5541 from platinumazure/issue-template
      Docs: Separate parser and config questions in issue template
    - Merge pull request #5545 from eslint/issue-5538
      Fix: object-curly-spacing doesn&#39;t know types
    - Fix: `brace-style` erroneously ignoring certain errors (fixes #5197)
      `brace-style` was ignoring almost all `allman` checks when
      `allowSingleLine` option was set. It was also ignoring closing brace
      errors when there was a body error with a single-line body.
    - Fix: `quote-props` false positive on certain keys (fixes #5532)
      This patch ensures the &quot;tokenized&quot; version of the key is an exact match
      to avoid any false positives when the key includes spaces around of it
      or has &quot;comment blocks&quot; in it such as `//..` or `/*..*/`
    - Merge pull request #5561 from eslint/issue-5532
      Fix: `quote-props` false positive on certain keys
    - Fix: valid-jsdoc correctly checks type union (fixes #5260)
      Correctly checks type union when it is a property of type application
    - Merge pull request #5565 from kaicataldo/fixes5260
      Fix: valid-jsdoc correctly checks type union (fixes #5260)
    - Docs: Make `prefer-template` examples consistent.
    - Docs: Invalid json in `configuring.md`
    - Merge pull request #5571 from eslint/docs-prefer-template-examples
      Docs: Make `prefer-template` examples consistent.
    - Merge pull request #5572 from eslint/docs-configuring
      Docs: Invalid json in `configuring.md`
    - Merge pull request #5461 from eslint/issue5314
      Improve file path resolution
    - Merge pull request #5455 from SimenB/duplicate-imports
      New: `no-duplicate-imports` rule (fixes #3478)
    - Docs: Fix typo in CLI help message
      Use the imperative form like other descriptions.
    - Fix: `no-useless-constructor` clash (fixes #5573)
    - Fix: Ensure allowing `await` as a property name (fixes #5564)
    - Merge pull request #5580 from eslint/no-useless-constructor/fix-crash
      Fix: `no-useless-constructor` clash (fixes #5573)
    - Merge pull request #5581 from eslint/core/add-test-for-await
      Fix: Ensure allowing `await` as a property name (fixes #5564)
    - Merge pull request #5578 from ryym/cli-help-message
      Docs: Fix typo in CLI help message
    - Update: replace MD5 hashing of cache files with MurmurHash (fixes #5522)
    - Merge pull request #5560 from michaelficarra/GH-5522
      Update: replace MD5 hashing of cache files with MurmurHash (fixes #5522)
    - Merge pull request #5539 from pedrottimark/distinguish-examples-variables-2
      Docs: Distinguish examples in rules under Variables part 2
    - Merge pull request #5544 from pedrottimark/distinguish-examples-best-practices-3
      Docs: Distinguish examples in rules under Best Practices part 3
    - Update: Overrides for space-unary-ops (fixes #5060)
    - Docs: Fix typo in code snippet for no-unmodified-loop-condition rule
    - Merge pull request #5589 from cvrebert/patch-1
      Docs: Fix typo in code snippet for no-unmodified-loop-condition rule
    - Fix: `prefer-const` got to not change scopes (refs #5284)
    - Fix: handle personal package.json without config (fixes #5496)
    - Merge pull request #5528 from dchowitz/issue5496
      Fix: handle personal package.json without config (fixes #5496)
    - Merge pull request #5591 from eslint/prefer-const/ensure-same-scope
      Fix: `prefer-const` got to not change scopes (refs #5284)
    - Fix: Respect &#39;ignoreTrailingComments&#39; in max-len rule (fixes #5563)
    - Merge pull request #5597 from pvamshi/master
      Fix: respect &#39;ignoreTrailingComments&#39; in max-len rule (fixes #5563)
    - Docs: correct the no-confusing-arrow docs
    - Merge pull request #5574 from afahim/issue5060
      Update: Overrides for space-unary-ops (fixes #5060)
    - Fix: leading comments added from previous node (fixes #5531)
    - Merge pull request #5604 from kaicataldo/fixes5531
      Fix: leading comments added from previous node (fixes #5531)
    - Fix: `prefer-const` false positive at non-blocked if (fixes #5610)
    - Merge pull request #5618 from eslint/prefer-const/fix-non-blocked-if
      Fix: `prefer-const` false positive at non-blocked if (fixes #5610)
    - Docs: Remove or rewrite references to former ecmaFeatures
    - Update: Enforce repo coding conventions via ESLint (refs #5188)
      Dogfood space-in-parens and lines-around-comment rules in ESLint repo.
    - Merge pull request #5620 from pedrottimark/former-ecmafeatures
      Docs: Remove or rewrite references to former ecmaFeatures
    - Fix: Allow default ignored files to be unignored (fixes #5410)
    - Docs: Clarify `linebreak-style` docs (fixes #5628)
    - Merge pull request #5602 from 2color/patch-1
      Update no-confusing-arrow.md
    - Merge pull request #5629 from eslint/issue5628
      Docs: Clarify `linebreak-style` docs (fixes #5628)
    - Update: Allow autoconfiguration for JSX code (fixes #5511)
    - Merge pull request #5635 from eslint/issue5511
      Update: Allow autoconfiguration for JSX code (fixes #5511)
    - Docs: Update team list with new members
    - Merge pull request #5637 from eslint/team
      Docs: Update team list with new members
    - Docs: Consistent wording in rules README
    - Docs: Add michaelficarra as committer
    - Merge pull request #5643 from eslint/docs-new-committer
      Docs: Add michaelficarra as committer
    - Docs: Update no-sequences rule docs for clarity (fixes #5536)
    - Merge pull request #5557 from eslint/issue-5197
      Fix: `brace-style` erroneously ignoring certain errors
    - Merge pull request #5630 from eslint/readme-consistent-wording
      Docs: Consistent wording in rules README
    - Merge pull request #5627 from eslint/issue5410
      Fix: Allow default ignored files to be unignored (fixes #5410)
    - Docs: Distinguish examples in rules under Best Practices part 4
    - Fix: `--no-ignore` should not un-ignore default ignores (fixes #5547)
    - Fix: `radix` rule false positive at shadowed variables (fixes #5639)
    - Upgrade: chai to 3.5.0 (fixes #5647)
    - Merge pull request #5649 from eslint/issue5647
      Upgrade: chai to 3.5.0 (fixes #5647)
    - Merge pull request #5650 from eslint/fixes5536
      Docs: Update no-sequences rule docs for clarity (fixes #5536)
    - Merge pull request #5596 from pedrottimark/distinguish-examples-best-practices-4
      Docs: Distinguish examples in rules under Best Practices part 4
    - Docs: Distinguish examples in rules under Node.js and CommonJS
    - Merge pull request #5642 from eslint/radix/check-shadowing
      Fix: `radix` rule false positive at shadowed variables (fixes #5639)
    - Fix: incorrect config message (fixes #5653)
      Update &quot;warning&quot; to &quot;warn&quot;
    - Update: Add &#39;caughtErrors&#39; to rule no-unused-vars (fixes #3837)
    - Merge pull request #5656 from s0ph1e/fix-incorrect-config-message-for-warn
      Fix incorrect config message (fixes #5653)
    - Fix: missing support for json sub configs (fixes #5413)
    - New: max-statements-per-line (fixes #5424)
    - Docs: remove brace expansion from configuring.md (refs #5314)
      Remove mention of brace expansion after conversation in #5314
    - Merge pull request #5525 from scriptdaemon/issue-5424
      New: max-statements-per-line (fixes #5424)
    - Merge pull request #5617 from BarryThePenguin/patch-1
      Docs: remove brace expansion from configuring.md
    - Merge pull request #5414 from noamokman/issue5413
      Fix: missing support for json sub configs
    - New: Rule - No useless escape (fixes #5460)
    - Upgrade: globals 9.x (fixes #5668)
    - Docs: Add link to &quot;Proposing a Rule Change&quot; in README
    - Docs: Add link to chat room in README primary links
    - Build: Fix phantomjs CI problems (fixes #5666)
    - Merge pull request #5669 from eslint/upgrade-globals
      Upgrade: globals 9.x (fixes #5668)
    - Merge pull request #5670 from eslint/docs-readme-rule-changes
      Docs: Add link to &quot;Proposing a Rule Change&quot; in README
    - Merge pull request #5671 from eslint/docs-readme-link-chatroom
      Docs: Add link to chat room in README primary links
    - Merge pull request #5673 from eslint/issue5666
      Build: Add phantomjs cdn to build (fixes #5666)
    - Merge pull request #5607 from pvamshi/issue3837
      Update: Add &#39;caughtErrors&#39; to rule no-unused-vars (fixes #3837)
    - Merge pull request #5632 from onurtemizkan/issue-5460
      New: Rule - No useless escape (fixes #5460)
    - Merge pull request #5648 from eslint/issue5547
      Fix: `--no-ignore` should not un-ignore default ignores (fixes #5547)
    - Docs: Clarify --ext does not apply to globs (fixes #5452)
    - Merge pull request #5598 from pedrottimark/distinguish-examples-nodejs-common-js
      Docs: Distinguish examples in rules under Node.js and CommonJS
    - Merge pull request #5622 from platinumazure/eslint-config-in-line-1
      Update: Enforce repo coding conventions via ESLint (refs #5188)
    - Merge pull request #5625 from eslint/issue5452
      Docs: Clarify --ext does not apply to globs (fixes #5452)
    - Build: Bundle dependencies in package.json (fixes #5013)
      This adds the bundledDependencies section to package.json and also
      upgrades eslint-release to the version that will update the bundled
      dependencies as part of the release.
    - Merge pull request #5676 from eslint/issue5013
      Build: Bundle dependencies in package.json (fixes #5013)
    - Docs: Remove ES2016 from experimental section of README
      Also added a section indicating criteria for when we will consider those features for ESLint rules (i.e., when it has been added to the ECMAScript standard).
    - Merge pull request #5576 from platinumazure/readme-experimental-edit
      Docs: Remove ES2016 from experimental section of README
    - Fix: lines-around-comment in ESLint repo, part 2 (refs #5188)
    - Merge pull request #5677 from platinumazure/lines-around-comment
      Fix: lines-around-comment in ESLint repo, part 2 (refs #5188)
    - Build: package.json and changelog update for 2.5.0
    - 2.5.0
    - Fix: don&#39;t use path.extname with undefined value (fixes #5678)
      In the current versions of node path.* can be called on any arbitrary
      value and will return an empty string on invalid input.
      As of node v6 path will assert that values passed to it are strings,
      and as such will throw on `undefined`
      This commit moved the logic of using `path.extname` inside of the
      processText  function in `lib/cli-engine.js`. so that it will not call
      `path.extname` if a filename is not passed.
      This change should not affect any other parts of the system, and the
      test suite is 100% working on node v4, v5, and master.
      fixes #5678
    - 2.5.1
    - Docs: Manual changelog update for v2.5.1
    - Docs: Use string severity
    - Merge pull request #5684 from scriptdaemon/docs-string-severity
      Docs: Use string severity
    - Docs: Typo fix
      Changed article from &quot;an&quot; to &quot;a&quot; in front of &quot;string&quot;.
    - Build: Fix bundling script (fixes #5680)
    - Merge pull request #5663 from Isti115/patch-1
      Docs: Fix: Typo
    - Merge pull request #5688 from eslint/issue5680
      Build: Fix bundling script (fixes #5680)
    - Docs: Distinguish examples in rules under Best Practices part 2
    - Merge pull request #5506 from pedrottimark/distinguish-examples-best-practices-2
      Docs: Distinguish examples in rules under Best Practices part 2
    - Merge pull request #5683 from TheAlphaNerd/validate-before-using-path
      fix: don&#39;t use path.extname with undefined value
    - Fix: make the default of `options.cwd` in runtime (fixes #5694)
    - Merge pull request #5697 from eslint/core/fix-default-of-cliengine-cwd
      Fix: make the default of `options.cwd` in runtime (fixes #5694)
    - Fix: Correct default for indentation in `eslint --init` (fixes #5698)
    - Docs: Reorder FAQ in README
    - Merge pull request #5699 from eslint/issue5698
      Fix: Correct default for indentation in `eslint --init` (fixes #5698)
    - Docs: Remove mention of minimatch for .eslintignore
      We no longer use minimatch for ignore patterns, instead using `ignore`
      to match `.gitignore` format exactly.
    - Merge pull request #5702 from eslint/doc-eslintignore
      Docs: Remove mention of minimatch for .eslintignore
    - Merge pull request #5700 from eslint/docs-readme-faq
      Docs: Reorder FAQ in README
    - Build: package.json and changelog update for 2.5.2
    - 2.5.2
    - Build: Disable bundling dependencies (fixes #5687)
    - Merge pull request #5708 from eslint/issue5687
      Build: Disable bundling dependencies (fixes #5687)
    - Build: package.json and changelog update for 2.5.3
    - 2.5.3

    - Fix typo in test/reporters/nyan.js
      peinding -&gt; pending
    - Merge pull request #1909 from berkerpeksag/patch-1
      Fix typo in test/reporters/nyan.js
    - remove duplication of mocha.opts on process.argv
    - MERge pull request #1910 from nexdrew/fix/mocha-opts-dupe
      Fix duplication of mocha.opts on process.argv
    - Update debug dependency to 2.2.0
      debug@2.0.0 has a vulnerability in its dependency on ms@0.6.2.
      debug@2.2.0 has updated its ms dependency to a version without this vulnerability.
    - Merge pull request #1954 from joeycozza/master
      Update debug dependency to 2.2.0
    - Release 2.3.4
    - Silence Bluebird js warnings
    - Merge pull request #1967 from krisr/kris-silence-warnings
      Silence Bluebird js warnings
    - Fixes #1794
      Moves Mocha interface allocation to after require option has been processed to allow for use of custom Mocha UI&#39;s.
    - Simplify function call.
    - support --perf-basic-prof
    - use chalk for base reporter colors; closes #1200
    - propagate &quot;file&quot; property across suites and tests for &quot;exports&quot; interface
    - make sure the xunit output dir exists before trying to write to it
      Fixes #1994
    - fix lint errors
    - Merge pull request #1995 from ianwremmel/fix-xunit-hang
      make sure the xunit output dir exists before trying to write to it
    - support for strict mode
      - fixes #1879
      - fixes #1821
    - XUnit Reporter Writes to stdout, falls back to console.log
      Fixes #1674; provides support *much* needed for [mocha-phantomjs](https://github.com/nathanboktae/mocha-phantomjs) (see [#133](https://github.com/nathanboktae/mocha-phantomjs/issues/133), [#220](https://github.com/nathanboktae/mocha-phantomjs/issues/220), etc).  Maintains support for running the XUnit reporter in a browser (unlike the previously reverted PR #1068).
      ping @alemangui, @nathanboktae
      Thanks all.
    - Fix HTML reporting display to show errors if done is called multiple times, or if an exception is thrown after done is called.
    - Fix non ES5 regexp
      ES5 appears to require that { be escaped when not used as part of a quantifier. While this works fine in browsers it appears to choke less lenient runtimes (e.g. Duktape)
    - always reference the correct it from it.only
    - Merge pull request #1965 from cowboyd/dont-double-install-bdd-ui
      Dont double install bdd ui
    - Merge pull request #2021 from zetaben/patch-1
      Fix non ES5 compliant regexp
    - Alter feature detection
    - Merge pull request #2005 from jonnyreeves/patch-1
      XUnit Reporter Writes to stdout, falls back to console.log
    - Merge pull request #1999 from tmont/use-strict-fix
      support for strict mode
    - Merge pull request #1993 from segrey/master
      propagate &quot;file&quot; property across suites and tests for &quot;exports&quot; inter…
    - Merge pull request #1981 from Standard8/fix-done-reporting-on-html
      Fix HTML reporting display to show errors if done is called multiple times, or if an exception is thrown after done is called.
    - Merge pull request #1963 from peachworks/perf-basic-prof
      Add support --perf-basic-prof
    - 1794 test case
    - Fix fixtures/regression/1794/simple-ui.js to work with local mocha
    - Merge branch &#39;ui-fix&#39;
    - Merge pull request #1976 from iclanzan/patch-1
      Simplify function call.
    - Fix #1980: Load mocha.opts from bin/mocha and bin/_mocha
    - Allow to retry failed test from test context for #1773
      - make retries run proper hooks
      - allow retries override at different levels
      - expose currentRetry to reporters
    - Enable --log-timer-events option
      This provides better insights when profiling application using --prof switch. Especially useful when the log is processed by https://v8.googlecode.com/svn/branches/bleeding_edge/tools/profviz/profviz.html.
    - Merge pull request #1982 from Alaneor/cli-log-timer-events
      Enable --log-timer-events option
    - Merge pull request #1989 from longlho/1773-retries
      Allow to retry failed test from test context for #1773
    - safely stringify PhantomJS undefined value
    - Merge pull request #1977 from ahamid/handle-phantomjs-undefined
      safely stringify PhantomJS undefined value
    - Remove reference to test before afterAll hook runs
      Fix #2006
    - Merge pull request #2028 from stonelgh/remove-reference-to-test-try2
      Remove reference to test before afterAll hook runs
    - Bump mkdirp to 0.5.1 to support strict mode
    - Update tests for newer versions of should.js
    - Fix for memory leak caused by referenced to deferred test functions
      (it/before[Each]/after[Each]).
      related to #1991.
    - Also run travis build on node.js 4 &amp; 5.
    - Merge pull request #2038 from bd82/travis
      Also run Travis-CI on node.js 4 &amp; 5
    - Merge pull request #2037 from bd82/master
      Fix for memory leak caused by referenced to deferred test functions
    - Merge pull request #2033 from tomhughes/should
      Update tests for newer versions of should.js
    - add clone capability to test, fix async retry, fix #2045
    - Merge pull request #2047 from longlho/retry-fix
      add clone capability to test, fix async retry, fix #2045
    - Enable `this.skip()` within individual test at runtime
      References #946
    - Merge pull request #2048 from mislav/fix-skip
      Fix `this.skip` from spec with HTML reporter
    - Fix integration tests: remove .only()
    - Have global exports be compatible with Web Workers
      Assigning to `window` only works in a normal browser environment;
      however, Web Workers don&#39;t have access to `window`. Instead, the global
      object inside Web Workers is `self`.
      Browserify ensures that `global` is present to all scripts by creating a
      shim reference to it using this logic:
          typeof global !== &quot;undefined&quot; ? global :
          typeof self !== &quot;undefined&quot; ? self :
          typeof window !== &quot;undefined&quot; ? window : {}
      Thus, if neither `global` nor `self` were originally present,
      `global === window` will be true.
      Web Workers compatibility was broken in a81e5558.
    - chore(license): update license year to 2016
    - Merge pull request #2056 from pra85/patch-1
      chore(license): update license year to 2016
    - Correctly skip tests when skipping in a suites before()
    - Merge pull request #1945 from ryanshawty/master
      Correctly skip tests when skipping in a suites before()
    - Fix test fn&#39;s being deleted too early for browser reporter
    - Merge pull request #2066 from danielstjules/dstjules/fix-browser
      Fix test fn&#39;s being deleted too early for browser reporter
    - Release 2.4.0
    - Build browser mocha for 2.4.0
    - Fix #2067: HTML/DOC reporter regression with async failures
    - Merge pull request #2068 from danielstjules/dstjules/test-body
      Fix 2067: HTML/DOC reporter regression with async failures
    - increase retry test timeout
    - rename HISTORY.md =&gt; CHANGELOG.md
    - rebuild mocha.js
    - Release v2.4.1
    - Merge pull request #2053 from mislav/window-vs-global
      Have global exports be compatible with Web Workers
    - Fix #2071: Removed color code to fix Chalk colors
    - Merge pull request #2072 from thedark1337/master
      Fix #2071: Removed color code to fix Chalk colors
    - Fix: reporters with chalk functions (fixes #2073)
    - Merge pull request #2074 from gyandeeps/master
      Fix: reporters with chalk functions (fixes #2073)
    - update CHANGELOG; add link to CHANGELOG in README.md
    - rebuild
    - Release v2.4.2
    - Add missing heading style
    - stub chalk in browser, closes #2078
    - Release v2.4.3
    - Merge pull request #2076 from rstacruz/patch-2
      Add missing heading style
    - use browser field instead of --require; closes #2080
    - update changelog
    - Release v2.4.4
    - Fix a number of assertions that weren&#39;t asserting anything
      They were missing parentheses and thus no assertion method was ever executed.
    - Merge pull request #2082 from mislav/fix-assertions
      Fix a number of assertions that weren&#39;t asserting anything
    - add npm-debug.log to .gitignore
    - reverts usage of chalk and all chalk-related changes thereafter; closes #2080
      reverts:
      - 4b37877bc0ab72b6782a8a5b38fbb86a6a2a3475
      - a4345efe0de0f80d09b35794f5e130d730542def
      - 9f3774f7beaad3f26d88313205ff6796a84b2f83
      - 119291449cd03a11cdeda9e37cf718a69a012896
    - update CHANGELOG.md for forthcoming v2.4.5 release
    - Release v2.4.5

commit efa1356fc283fcabdc755c0b99a8af41a8779cdb
Author: Kevin van Zonneveld &lt;kevin@vanzonneveld.net&gt;
Date:   Fri Apr 1 13:20:00 2016 +0200

    First run of eslint fixes

commit bffdd8ce33fce6add8b516cc04e27cbf0cde593f
Author: Kevin van Zonneveld &lt;kevin@vanzonneveld.net&gt;
Date:   Fri Apr 1 13:18:50 2016 +0200

    Switch to eslint">Switch to using standard + ESLint</a>
      </div>

    <div class="commit-tease-contributors">
      <button type="button" class="btn-link muted-link contributors-toggle" data-facebox="#blob_contributors_box">
        <strong>9</strong>
         contributors
      </button>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="kvz" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=kvz"><img alt="@kvz" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/26752?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="brettz9" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=brettz9"><img alt="@brettz9" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/20234?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="kukawski" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=kukawski"><img alt="@kukawski" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/346655?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="plepe" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=plepe"><img alt="@plepe" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/249012?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="mfaber" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=mfaber"><img alt="@mfaber" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/4358578?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="tersmitten" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=tersmitten"><img alt="@tersmitten" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/3392962?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="ekristen" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=ekristen"><img alt="@ekristen" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/48329?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="masix" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=masix"><img alt="@masix" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/5269733?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="amatiasq" href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js?author=amatiasq"><img alt="@amatiasq" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/1533589?v=3&amp;s=40" width="20" /> </a>


    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@kvz" height="24" src="https://avatars0.githubusercontent.com/u/26752?v=3&amp;s=48" width="24" />
            <a href="/kvz">kvz</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@brettz9" height="24" src="https://avatars1.githubusercontent.com/u/20234?v=3&amp;s=48" width="24" />
            <a href="/brettz9">brettz9</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@kukawski" height="24" src="https://avatars3.githubusercontent.com/u/346655?v=3&amp;s=48" width="24" />
            <a href="/kukawski">kukawski</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@plepe" height="24" src="https://avatars1.githubusercontent.com/u/249012?v=3&amp;s=48" width="24" />
            <a href="/plepe">plepe</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@mfaber" height="24" src="https://avatars0.githubusercontent.com/u/4358578?v=3&amp;s=48" width="24" />
            <a href="/mfaber">mfaber</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@tersmitten" height="24" src="https://avatars2.githubusercontent.com/u/3392962?v=3&amp;s=48" width="24" />
            <a href="/tersmitten">tersmitten</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@ekristen" height="24" src="https://avatars1.githubusercontent.com/u/48329?v=3&amp;s=48" width="24" />
            <a href="/ekristen">ekristen</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@masix" height="24" src="https://avatars1.githubusercontent.com/u/5269733?v=3&amp;s=48" width="24" />
            <a href="/masix">masix</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@amatiasq" height="24" src="https://avatars1.githubusercontent.com/u/1533589?v=3&amp;s=48" width="24" />
            <a href="/amatiasq">amatiasq</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
  <div class="file-actions">

    <div class="btn-group">
      <a href="/kvz/phpjs/raw/master/functions/datetime/strtotime.js" class="btn btn-sm " id="raw-url">Raw</a>
        <a href="/kvz/phpjs/blame/master/functions/datetime/strtotime.js" class="btn btn-sm js-update-url-with-hash">Blame</a>
      <a href="/kvz/phpjs/commits/master/functions/datetime/strtotime.js" class="btn btn-sm " rel="nofollow">History</a>
    </div>


        <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/kvz/phpjs/edit/master/functions/datetime/strtotime.js" class="inline-form js-update-url-with-hash" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="kD7BTlVwHxvPi7HvlC1Gq2T167FMbz2pW9PzYlWMsKdD5S6YZJUzMMForOzO+v+h98uaW1AX0KFjcp4/r58O5g==" /></div>
          <button class="btn-octicon tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and edit the file" data-hotkey="e" data-disable-with>
            <svg aria-hidden="true" class="octicon octicon-pencil" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M0 12v3h3l8-8-3-3L0 12z m3 2H1V12h1v1h1v1z m10.3-9.3l-1.3 1.3-3-3 1.3-1.3c0.39-0.39 1.02-0.39 1.41 0l1.59 1.59c0.39 0.39 0.39 1.02 0 1.41z"></path></svg>
          </button>
</form>        <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/kvz/phpjs/delete/master/functions/datetime/strtotime.js" class="inline-form" data-form-nonce="b8adf4500295b94adced68b584b96458cf04bad9" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="8X7+wGJCFJBSFyGhuvCvaTx4TZbxvnlYG4qwgHAy0WKTEHLWW6gUyY3qQn61dONUq9HgJOe+1Iq5RnCaJtuHbQ==" /></div>
          <button class="btn-octicon btn-octicon-danger tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and delete the file" data-disable-with>
            <svg aria-hidden="true" class="octicon octicon-trashcan" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M10 2H8c0-0.55-0.45-1-1-1H4c-0.55 0-1 0.45-1 1H1c-0.55 0-1 0.45-1 1v1c0 0.55 0.45 1 1 1v9c0 0.55 0.45 1 1 1h7c0.55 0 1-0.45 1-1V5c0.55 0 1-0.45 1-1v-1c0-0.55-0.45-1-1-1z m-1 12H2V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9z m1-10H1v-1h9v1z"></path></svg>
          </button>
</form>  </div>

  <div class="file-info">
      296 lines (261 sloc)
      <span class="file-info-divider"></span>
    8.87 KB
  </div>
</div>

  

  <div itemprop="text" class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-k">function</span> <span class="pl-en">strtotime</span> (<span class="pl-smi">text</span>, <span class="pl-smi">now</span>) {</td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//  discuss at: http://phpjs.org/functions/strtotime/</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//     version: 1109.2016</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// original by: Caio Ariede (http://caioariede.com)</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// improved by: Caio Ariede (http://caioariede.com)</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// improved by: A. Matías Quezada (http://amatiasq.com)</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// improved by: preuter</span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// improved by: Brett Zamir (http://brett-zamir.me)</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// improved by: Mirko Faber</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//    input by: David</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// bugfixed by: Wagner B. Soares</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// bugfixed by: Artur Tchernychev</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// bugfixed by: Stephan Bösch-Plepelits (http://github.com/plepe)</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//        note: Examples all have a fixed timestamp to prevent tests to fail because of variable time(zones)</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 1: strtotime(&#39;+1 day&#39;, 1129633200);</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 1: 1129719600</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 2: strtotime(&#39;+1 week 2 days 4 hours 2 seconds&#39;, 1129633200);</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 2: 1130425202</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 3: strtotime(&#39;last month&#39;, 1129633200);</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 3: 1127041200</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 4: strtotime(&#39;2009-05-04 08:30:00 GMT&#39;);</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 4: 1241425800</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 5: strtotime(&#39;2009-05-04 08:30:00+00&#39;);</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 5: 1241425800</span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 6: strtotime(&#39;2009-05-04 08:30:00+02:00&#39;);</span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 6: 1241418600</span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   example 7: strtotime(&#39;2009-05-04T08:30:00Z&#39;);</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   returns 7: 1241425800</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">var</span> parsed, match, today, year, date, days, ranges, len, times, regex, i, fail <span class="pl-k">=</span> <span class="pl-c1">false</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (<span class="pl-k">!</span>text) {</td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// Unecessary spaces</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line">  text <span class="pl-k">=</span> <span class="pl-smi">text</span>.<span class="pl-c1">replace</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">\s</span><span class="pl-k">+</span><span class="pl-k">|</span><span class="pl-c1">\s</span><span class="pl-k">+</span><span class="pl-k">$</span><span class="pl-pds">/</span>g</span>, <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>)</td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line">    .<span class="pl-c1">replace</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-c1">\s</span><span class="pl-k">{2,}</span><span class="pl-pds">/</span>g</span>, <span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span>)</td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line">    .<span class="pl-c1">replace</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-c1">[<span class="pl-cce">\t\r\n</span>]</span><span class="pl-pds">/</span>g</span>, <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>)</td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line">    .<span class="pl-c1">toLowerCase</span>()</td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// in contrast to php, js Date.parse function interprets:</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// dates given as yyyy-mm-dd as in timezone: UTC,</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// dates with &quot;.&quot; or &quot;-&quot; as MDY instead of DMY</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// dates with two-digit years differently</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// etc...etc...</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// ...therefore we manually parse lots of common date formats</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line">  match <span class="pl-k">=</span> <span class="pl-smi">text</span>.<span class="pl-c1">match</span>(</td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line"><span class="pl-sr">    <span class="pl-pds">/</span><span class="pl-k">^</span>(<span class="pl-c1">\d</span><span class="pl-k">{1,4}</span>)(<span class="pl-c1">[<span class="pl-c1">\-<span class="pl-cce">\.</span></span><span class="pl-cce">\/\:</span>]</span>)(<span class="pl-c1">\d</span><span class="pl-k">{1,2}</span>)(<span class="pl-c1">[<span class="pl-c1">\-<span class="pl-cce">\.</span></span><span class="pl-cce">\/\:</span>]</span>)(<span class="pl-c1">\d</span><span class="pl-k">{1,4}</span>)(?:<span class="pl-c1">\s</span>(<span class="pl-c1">\d</span><span class="pl-k">{1,2}</span>):(<span class="pl-c1">\d</span><span class="pl-k">{2}</span>)<span class="pl-k">?</span>:<span class="pl-k">?</span>(<span class="pl-c1">\d</span><span class="pl-k">{2}</span>)<span class="pl-k">?</span>)<span class="pl-k">?</span>(?:<span class="pl-c1">\s</span>(<span class="pl-c1">[<span class="pl-c1">A-Z</span>]</span><span class="pl-k">+</span>)<span class="pl-k">?</span>)<span class="pl-k">?</span><span class="pl-k">$</span><span class="pl-pds">/</span></span>)</td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (match <span class="pl-k">&amp;&amp;</span> match[<span class="pl-c1">2</span>] <span class="pl-k">===</span> match[<span class="pl-c1">4</span>]) {</td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">1901</span>) {</td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">switch</span> (match[<span class="pl-c1">2</span>]) {</td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>-<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// YYYY-M-D</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(match[<span class="pl-c1">1</span>], <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">3</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">5</span>],</td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// YYYY.M.D is not parsed by strtotime()</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// YYYY/M/D</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(match[<span class="pl-c1">1</span>], <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">3</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">5</span>],</td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">1901</span>) {</td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">switch</span> (match[<span class="pl-c1">2</span>]) {</td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>-<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// D-M-YYYY</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(match[<span class="pl-c1">5</span>], <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">3</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">1</span>],</td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// D.M.YYYY</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(match[<span class="pl-c1">5</span>], <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">3</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">1</span>],</td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// M/D/YYYY</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(match[<span class="pl-c1">5</span>], <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">1</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">3</span>],</td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">switch</span> (match[<span class="pl-c1">2</span>]) {</td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>-<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// YY-M-D</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span> <span class="pl-k">||</span> (match[<span class="pl-c1">1</span>] <span class="pl-k">&lt;</span> <span class="pl-c1">70</span> <span class="pl-k">&amp;&amp;</span> match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">38</span>)) {</td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line">            year <span class="pl-k">=</span> match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;=</span> <span class="pl-c1">0</span> <span class="pl-k">&amp;&amp;</span> match[<span class="pl-c1">1</span>] <span class="pl-k">&lt;=</span> <span class="pl-c1">38</span> <span class="pl-k">?</span> <span class="pl-k">+</span>match[<span class="pl-c1">1</span>] <span class="pl-k">+</span> <span class="pl-c1">2000</span> <span class="pl-k">:</span> match[<span class="pl-c1">1</span>]</td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(year, <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">3</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">5</span>],</td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// D.M.YY or H.MM.SS</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;=</span> <span class="pl-c1">70</span>) {</td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line">            <span class="pl-c">// D.M.YY</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">if</span> (match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line">              }</td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(match[<span class="pl-c1">5</span>], <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">3</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">1</span>],</td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line">              match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">5</span>] <span class="pl-k">&lt;</span> <span class="pl-c1">60</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span>match[<span class="pl-c1">6</span>]) {</td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line">            <span class="pl-c">// H.MM.SS</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">if</span> (match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">23</span> <span class="pl-k">||</span> match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">59</span>) {</td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line">                <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line">              }</td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line">              today <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>()</td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(<span class="pl-smi">today</span>.<span class="pl-c1">getFullYear</span>(), <span class="pl-smi">today</span>.<span class="pl-c1">getMonth</span>(), <span class="pl-smi">today</span>.<span class="pl-c1">getDate</span>(),</td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line">              match[<span class="pl-c1">1</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">3</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">5</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// invalid format, cannot be parsed</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// M/D/YY</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">12</span> <span class="pl-k">||</span> match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">31</span> <span class="pl-k">||</span> (match[<span class="pl-c1">5</span>] <span class="pl-k">&lt;</span> <span class="pl-c1">70</span> <span class="pl-k">&amp;&amp;</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">38</span>)) {</td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code blob-code-inner js-file-line">            year <span class="pl-k">=</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;=</span> <span class="pl-c1">0</span> <span class="pl-k">&amp;&amp;</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&lt;=</span> <span class="pl-c1">38</span> <span class="pl-k">?</span> <span class="pl-k">+</span>match[<span class="pl-c1">5</span>] <span class="pl-k">+</span> <span class="pl-c1">2000</span> <span class="pl-k">:</span> match[<span class="pl-c1">5</span>]</td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(year, <span class="pl-c1">parseInt</span>(match[<span class="pl-c1">1</span>], <span class="pl-c1">10</span>) <span class="pl-k">-</span> <span class="pl-c1">1</span>, match[<span class="pl-c1">3</span>],</td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">6</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">7</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">8</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">9</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code blob-code-inner js-file-line">          {</td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code blob-code-inner js-file-line">          <span class="pl-c">// HH:MM:SS</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">if</span> (match[<span class="pl-c1">1</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">23</span> <span class="pl-k">||</span> match[<span class="pl-c1">3</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">59</span> <span class="pl-k">||</span> match[<span class="pl-c1">5</span>] <span class="pl-k">&gt;</span> <span class="pl-c1">59</span>) {</td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code blob-code-inner js-file-line">              <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code blob-code-inner js-file-line">            today <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>()</td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">return</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(<span class="pl-smi">today</span>.<span class="pl-c1">getFullYear</span>(), <span class="pl-smi">today</span>.<span class="pl-c1">getMonth</span>(), <span class="pl-smi">today</span>.<span class="pl-c1">getDate</span>(),</td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code blob-code-inner js-file-line">            match[<span class="pl-c1">1</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">3</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>, match[<span class="pl-c1">5</span>] <span class="pl-k">||</span> <span class="pl-c1">0</span>) <span class="pl-k">/</span> <span class="pl-c1">1000</span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code blob-code-inner js-file-line">          }</td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// other formats and &quot;now&quot; should be parsed by Date.parse()</span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (text <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>now<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> now <span class="pl-k">===</span> <span class="pl-c1">null</span> <span class="pl-k">||</span> <span class="pl-c1">isNaN</span>(now) <span class="pl-k">?</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>()</td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code blob-code-inner js-file-line">      .<span class="pl-c1">getTime</span>() <span class="pl-k">/</span> <span class="pl-c1">1000</span> <span class="pl-k">|</span> <span class="pl-c1">0</span> <span class="pl-k">:</span> now <span class="pl-k">|</span> <span class="pl-c1">0</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-c1">isNaN</span>(parsed <span class="pl-k">=</span> <span class="pl-c1">Date</span>.<span class="pl-c1">parse</span>(text))) {</td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> parsed <span class="pl-k">/</span> <span class="pl-c1">1000</span> <span class="pl-k">|</span> <span class="pl-c1">0</span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// Browsers != Chrome have problems parsing ISO 8601 date strings, as they do</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// not accept lower case characters, space, or shortened time zones.</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// Therefore, fix these problems and try again.</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// Examples:</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   2015-04-15 20:33:59+02</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   2015-04-15 20:33:59z</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//   2015-04-15t20:33:59+02:00</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (match <span class="pl-k">=</span> <span class="pl-smi">text</span>.<span class="pl-c1">match</span>(</td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code blob-code-inner js-file-line"><span class="pl-sr">      <span class="pl-pds">/</span><span class="pl-k">^</span>(<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{4}</span>-<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>-<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>)<span class="pl-c1">[ t]</span>(<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>:<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>:<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>(<span class="pl-cce">\.</span><span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">+</span>)<span class="pl-k">?</span>)(<span class="pl-c1">[<span class="pl-cce">\+</span>-][<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>(:<span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>)<span class="pl-k">?</span><span class="pl-k">|</span>z)<span class="pl-pds">/</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code blob-code-inner js-file-line">    <span class="pl-c">// fix time zone information</span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (match[<span class="pl-c1">4</span>] <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>z<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code blob-code-inner js-file-line">      match[<span class="pl-c1">4</span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Z<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (match[<span class="pl-c1">4</span>].<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>(<span class="pl-c1">[<span class="pl-cce">\+</span>-][<span class="pl-c1">0-9</span>]</span><span class="pl-k">{2}</span>)<span class="pl-k">$</span><span class="pl-pds">/</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code blob-code-inner js-file-line">      match[<span class="pl-c1">4</span>] <span class="pl-k">=</span> match[<span class="pl-c1">4</span>] <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>:00<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-c1">isNaN</span>(parsed <span class="pl-k">=</span> <span class="pl-c1">Date</span>.<span class="pl-c1">parse</span>(match[<span class="pl-c1">1</span>] <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>T<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> match[<span class="pl-c1">2</span>] <span class="pl-k">+</span> match[<span class="pl-c1">4</span>]))) {</td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> parsed <span class="pl-k">/</span> <span class="pl-c1">1000</span> <span class="pl-k">|</span> <span class="pl-c1">0</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code blob-code-inner js-file-line">  date <span class="pl-k">=</span> now <span class="pl-k">?</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>(now <span class="pl-k">*</span> <span class="pl-c1">1000</span>) <span class="pl-k">:</span> <span class="pl-k">new</span> <span class="pl-en">Date</span>()</td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code blob-code-inner js-file-line">  days <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>sun<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">0</span>,</td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>mon<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">1</span>,</td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>tue<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">2</span>,</td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>wed<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">3</span>,</td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>thu<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">4</span>,</td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>fri<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">5</span>,</td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>sat<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-c1">6</span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code blob-code-inner js-file-line">  ranges <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>yea<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>FullYear<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>mon<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Month<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>day<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Date<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>hou<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Hours<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>min<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Minutes<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>sec<span class="pl-pds">&#39;</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Seconds<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">lastNext</span> (<span class="pl-smi">type</span>, <span class="pl-smi">range</span>, <span class="pl-smi">modifier</span>) {</td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> diff, day <span class="pl-k">=</span> days[range]</td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-k">typeof</span> day <span class="pl-k">!==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>undefined<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code blob-code-inner js-file-line">      diff <span class="pl-k">=</span> day <span class="pl-k">-</span> <span class="pl-smi">date</span>.<span class="pl-c1">getDay</span>()</td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (diff <span class="pl-k">===</span> <span class="pl-c1">0</span>) {</td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code blob-code-inner js-file-line">        diff <span class="pl-k">=</span> <span class="pl-c1">7</span> <span class="pl-k">*</span> modifier</td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code blob-code-inner js-file-line">      } <span class="pl-k">else</span> <span class="pl-k">if</span> (diff <span class="pl-k">&gt;</span> <span class="pl-c1">0</span> <span class="pl-k">&amp;&amp;</span> type <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>last<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code blob-code-inner js-file-line">        diff <span class="pl-k">-=</span> <span class="pl-c1">7</span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code blob-code-inner js-file-line">      } <span class="pl-k">else</span> <span class="pl-k">if</span> (diff <span class="pl-k">&lt;</span> <span class="pl-c1">0</span> <span class="pl-k">&amp;&amp;</span> type <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>next<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code blob-code-inner js-file-line">        diff <span class="pl-k">+=</span> <span class="pl-c1">7</span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">date</span>.<span class="pl-c1">setDate</span>(<span class="pl-smi">date</span>.<span class="pl-c1">getDate</span>() <span class="pl-k">+</span> diff)</td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">process</span> (<span class="pl-smi">val</span>) {</td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> splt <span class="pl-k">=</span> <span class="pl-smi">val</span>.<span class="pl-c1">split</span>(<span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span>), <span class="pl-c">// Todo: Reconcile this with regex using \s, taking into account browser issues with split and regexes</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code blob-code-inner js-file-line">      type <span class="pl-k">=</span> splt[<span class="pl-c1">0</span>],</td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code blob-code-inner js-file-line">      range <span class="pl-k">=</span> splt[<span class="pl-c1">1</span>].<span class="pl-c1">substring</span>(<span class="pl-c1">0</span>, <span class="pl-c1">3</span>),</td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code blob-code-inner js-file-line">      typeIsNumber <span class="pl-k">=</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-c1">\d</span><span class="pl-k">+</span><span class="pl-pds">/</span></span>.<span class="pl-c1">test</span>(type),</td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code blob-code-inner js-file-line">      ago <span class="pl-k">=</span> splt[<span class="pl-c1">2</span>] <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ago<span class="pl-pds">&#39;</span></span>,</td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code blob-code-inner js-file-line">      num <span class="pl-k">=</span> (type <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>last<span class="pl-pds">&#39;</span></span> <span class="pl-k">?</span> <span class="pl-k">-</span><span class="pl-c1">1</span> <span class="pl-k">:</span> <span class="pl-c1">1</span>) <span class="pl-k">*</span> (ago <span class="pl-k">?</span> <span class="pl-k">-</span><span class="pl-c1">1</span> <span class="pl-k">:</span> <span class="pl-c1">1</span>)</td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (typeIsNumber) {</td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code blob-code-inner js-file-line">      num <span class="pl-k">*=</span> <span class="pl-c1">parseInt</span>(type, <span class="pl-c1">10</span>)</td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-smi">ranges</span>.<span class="pl-en">hasOwnProperty</span>(range) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span>splt[<span class="pl-c1">1</span>].<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>mon(day<span class="pl-k">|</span><span class="pl-cce">\.</span>)<span class="pl-k">?</span><span class="pl-k">$</span><span class="pl-pds">/</span>i</span>)) {</td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> date[<span class="pl-s"><span class="pl-pds">&#39;</span>set<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> ranges[range]](date[<span class="pl-s"><span class="pl-pds">&#39;</span>get<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> ranges[range]]() <span class="pl-k">+</span> num)</td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (range <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>wee<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-smi">date</span>.<span class="pl-c1">setDate</span>(<span class="pl-smi">date</span>.<span class="pl-c1">getDate</span>() <span class="pl-k">+</span> (num <span class="pl-k">*</span> <span class="pl-c1">7</span>))</td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (type <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>next<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> type <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>last<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code blob-code-inner js-file-line">      <span class="pl-en">lastNext</span>(type, range, num)</td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-k">!</span>typeIsNumber) {</td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-c1">false</span></td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-c1">true</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code blob-code-inner js-file-line">  times <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>(years?|months?|weeks?|days?|hours?|minutes?|min|seconds?|sec<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>|sunday|sun<span class="pl-cce">\\</span>.?|monday|mon<span class="pl-cce">\\</span>.?|tuesday|tue<span class="pl-cce">\\</span>.?|wednesday|wed<span class="pl-cce">\\</span>.?<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code blob-code-inner js-file-line">    <span class="pl-s"><span class="pl-pds">&#39;</span>|thursday|thu<span class="pl-cce">\\</span>.?|friday|fri<span class="pl-cce">\\</span>.?|saturday|sat<span class="pl-cce">\\</span>.?)<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code blob-code-inner js-file-line">  regex <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>([+-]?<span class="pl-cce">\\</span>d+<span class="pl-cce">\\</span>s<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> times <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>|<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>(last|next)<span class="pl-cce">\\</span>s<span class="pl-pds">&#39;</span></span> <span class="pl-k">+</span> times <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&#39;</span>)(<span class="pl-cce">\\</span>sago)?<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code blob-code-inner js-file-line">  match <span class="pl-k">=</span> <span class="pl-smi">text</span>.<span class="pl-c1">match</span>(<span class="pl-k">new</span> <span class="pl-en">RegExp</span>(regex, <span class="pl-s"><span class="pl-pds">&#39;</span>gi<span class="pl-pds">&#39;</span></span>))</td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (<span class="pl-k">!</span>match) {</td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">for</span> (i <span class="pl-k">=</span> <span class="pl-c1">0</span>, len <span class="pl-k">=</span> <span class="pl-smi">match</span>.<span class="pl-c1">length</span>; i <span class="pl-k">&lt;</span> len; i<span class="pl-k">++</span>) {</td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-c1">process</span>(match[i])) {</td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> fail</td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// ECMAScript 5 only</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">// if (!match.every(process))</span></td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code blob-code-inner js-file-line">  <span class="pl-c">//    return false;</span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">return</span> (<span class="pl-smi">date</span>.<span class="pl-c1">getTime</span>() <span class="pl-k">/</span> <span class="pl-c1">1000</span>)</td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code blob-code-inner js-file-line">}</td>
      </tr>
</table>

  </div>

</div>

<button type="button" data-facebox="#jump-to-line" data-facebox-class="linejump" data-hotkey="l" class="hidden">Jump to Line</button>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="form-control linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

  </div>
  <div class="modal-backdrop"></div>
</div>


    </div>
  </div>

    </div>

        <div class="container site-footer-container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage" class="site-footer-mark">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" title="GitHub " version="1.1" viewBox="0 0 16 16" width="24"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path></svg>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2016 <span title="0.08695s from github-fe147-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    
    

    <div id="ajax-error-message" class="ajax-error-message flash flash-error">
      <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M15.72 12.5l-6.85-11.98C8.69 0.21 8.36 0.02 8 0.02s-0.69 0.19-0.87 0.5l-6.85 11.98c-0.18 0.31-0.18 0.69 0 1C0.47 13.81 0.8 14 1.15 14h13.7c0.36 0 0.69-0.19 0.86-0.5S15.89 12.81 15.72 12.5zM9 12H7V10h2V12zM9 9H7V5h2V9z"></path></svg>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48-3.75-3.75-3.75 3.75-1.48-1.48 3.75-3.75L0.77 4.25l1.48-1.48 3.75 3.75 3.75-3.75 1.48 1.48-3.75 3.75z"></path></svg>
      </button>
      Something went wrong with that request. Please try again.
    </div>


      
      <script crossorigin="anonymous" integrity="sha256-jVOikdcl7tHrktYElxZYRHf8uNZ9H5r/XCSN6CRqnzA=" src="https://assets-cdn.github.com/assets/frameworks-8d53a291d725eed1eb92d6049716584477fcb8d67d1f9aff5c248de8246a9f30.js"></script>
      <script async="async" crossorigin="anonymous" integrity="sha256-XBG8erKEhkEr+oaSqTB4YmjFnrta3kuVYeeICVwnVsA=" src="https://assets-cdn.github.com/assets/github-5c11bc7ab28486412bfa8692a930786268c59ebb5ade4b9561e788095c2756c0.js"></script>
      
      
      
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner hidden">
      <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M15.72 12.5l-6.85-11.98C8.69 0.21 8.36 0.02 8 0.02s-0.69 0.19-0.87 0.5l-6.85 11.98c-0.18 0.31-0.18 0.69 0 1C0.47 13.81 0.8 14 1.15 14h13.7c0.36 0 0.69-0.19 0.86-0.5S15.89 12.81 15.72 12.5zM9 12H7V10h2V12zM9 9H7V5h2V9z"></path></svg>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
    <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48-3.75-3.75-3.75 3.75-1.48-1.48 3.75-3.75L0.77 4.25l1.48-1.48 3.75 3.75 3.75-3.75 1.48 1.48-3.75 3.75z"></path></svg>
    </button>
  </div>
</div>

  </body>
</html>

