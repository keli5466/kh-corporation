# IE Polyfill for Object.assign()
if typeof Object.assign != 'function'
  Object.assign = (target) ->
    'use strict'
    if target == null
      throw new TypeError('Cannot convert undefined or null to object')
    target = Object(target)
    index = 1
    while index < arguments.length
      source = arguments[index]
      if source != null
        for key of source
          if Object::hasOwnProperty.call(source, key)
            target[key] = source[key]
      index++
    target

# Plugins that should be made available globally
require('fastclick').attach(document.body);
require('balance-text')()

# jQuery plugins
require 'jquery'
require 'slick-carousel'
require 'slick-carousel/slick/slick.css'
require 'jquery-match-height'
require 'fittextjs'

require 'scrollmonitor'
require 'scrollmonitor-parallax'

# parallax = require 'scrollmonitor-parallax'

# Boot Vue
Vue = require 'vue'

# Boot Sentry
Sentry = require '@sentry/browser'
Sentry.init
  dsn: process.env.SENTRY_DSN
  integrations: [new Sentry.Integrations.Vue({ Vue })]
  environment: process.env.APP_ENV

# Register shared components
#require './styles/index.styl'

# Add Vue Visual
require 'vue-visual/index.css'
Vue.component('visual', require('vue-visual')).options.setDefaults
	background: 'cover'
	load: 'visible'
	loadPoster: true
	transition: 'vv-fade'

# Add in-viewport-directive
inViewportDirective = require 'vue-in-viewport-directive'
inViewportDirective.defaults.top = -100
Vue.directive 'in-viewport', inViewportDirective

# Home components
Vue.component 'main-navigation', require './components/nav'
Vue.component 'home-page', require './components/home'
Vue.component 'about-page', require './components/about'
Vue.component 'site-footer', require './components/nav/footer'
Vue.component 'press-page', require './components/press'
Vue.component 'single-page', require './components/page'

# Cookies popup module
Vue.component 'cookies-popup', require './components/cookies-popup'

# Create the root instance of the app
app = new Vue Object.assign require('./layout/app'), el: '#main'
