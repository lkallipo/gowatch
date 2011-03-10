window.addEvent('domready', function () {
    var scrollToTop = $("top-scroll");
    if (scrollToTop) {
        var scroll = new(Fx.Scroll)(window);
        scrollToTop.setStyle("outline", "none").addEvent("click", function (e) {
            (new Event(e)).stop();
            scroll.toTop()
        })
    }
    if (window.ie6) {
        var separators = $("horiz-menu").getElements(".separator");
        if (separators.length) {
            separators.each(function (separator, i) {
                if (separator.hasClass("daddy")) {
                    separator.addClass("separator-daddy")
                }
            })
        }
    }
    var spinner = $$('.spinner');
    if (spinner.length) {
        spinner.setStyle('display', 'none');
        XHR.implement({
            onSuccess: function () {
                this.response = {
                    'text': this.transport.responseText,
                    'xml': this.transport.responseXML
                };
                spinner.setStyle('display', 'none');
                this.fireEvent('onSuccess', [this.response.text, this.response.xml]);
                this.callChain()
            },
            send: function (url, data) {
                if (this.options.autoCancel) this.cancel();
                else if (this.running) return this;
                this.running = true;
                if (data && this.options.method == 'get') {
                    url = url + (url.contains('?') ? '&' : '?') + data;
                    data = null
                }
                this.transport.open(this.options.method.toUpperCase(), url, this.options.async);
                this.transport.onreadystatechange = this.onStateChange.bind(this);
                if ((this.options.method == 'post') && this.transport.overrideMimeType) this.setHeader('Connection', 'close');
                $extend(this.headers, this.options.headers);
                for (var type in this.headers) try {
                    this.transport.setRequestHeader(type, this.headers[type])
                } catch (e) {};
                spinner.setStyle('display', '');
                this.fireEvent('onRequest');
                this.transport.send($pick(data, null));
                return this
            }
        })
    }
    var fontPanel = $('font-panel'),
        fontButton = $('font-style-button'),
        fontSurround = $('font-panel-surround'),
        fontFx;
    var loginPanel = $('login-panel'),
        loginButton = $('login-button'),
        loginSurround = $('login-panel-surround'),
        loginFx;
    var buttons = $('buttons');
    if (buttons) {
        var lnks = buttons.getElements('a');
        lnks.each(function (lnk, i) {
            lnk.addEvent('click', function (e) {
                new Event(e).stop();
                var cookie = Cookie.get('mynxx-fontstyle');
                var cls = this.getProperty('href');
                cls = cls.split("fontstyle=");
                if (cls[1]) {
                    cls = cls[1];
                    if ((cookie == 'f-small' && cls == 'f-larger') || (cookie == 'f-large' && cls == 'f-smaller')) cls = 'f-default';
                    else if (cls == 'f-larger') cls = 'f-large';
                    else if (cls == 'f-smaller') cls = 'f-small';
                    Cookie.set('mynxx-fontstyle', cls);
                    $(document.body).removeClass('f-default').removeClass('f-large').removeClass('f-small').addClass(cls)
                }
            })
        })
    }
    if (fontPanel && fontButton && fontSurround) {
        if (!window.fontFx) window.fontFx = new Fx.Slide(fontPanel, {
            duration: 400,
            transition: Fx.Transitions.Expo.easeOut
        }).hide();
        fontSurround.setStyle('visibility', 'visible');
        fontButton.getFirst('a').addEvent('click', function (e) {
            new Event(e).stop();
            if (typeof RokVM != 'undefined' && RokVM && RokVM.Cart && RokVM.Cart.Fx && RokVM.Cart.Fx.open) RokVM.Cart.Fx.toggle();
            if (window.loginFx && window.loginFx.open) window.loginFx.toggle();
            window.fontFx.toggle()
        });
        fontPanel.getElements('a').each(function (fnt) {
            var title = fnt.title;
            fnt.addEvent('click', function (e) {
                new Event(e).stop();
                Cookie.set('mynxx-fontfamily', fnt.getText().toLowerCase(), {
                    duration: 365
                });
                $(document.body).id = title;
                window.fontFx.slideOut()
            })
        })
    }
    if (loginPanel && loginButton && loginSurround) {
        if (!window.loginFx) window.loginFx = new Fx.Slide(loginPanel, {
            duration: 400,
            transition: Fx.Transitions.Expo.easeOut
        }).hide();
        loginSurround.setStyle('visibility', 'visible');
		//cleverweb: disabled following handler so as 'close' links to work correctly
       // loginButton.getFirst('a').addEvent('click', function (e) {
        //    new Event(e).stop();
        //    if (typeof RokVM != 'undefined' && RokVM && RokVM.Cart && RokVM.Cart.Fx && RokVM.Cart.Fx.open) RokVM.Cart.Fx.toggle();
        //    if (window.fontFx && window.fontFx.open) window.fontFx.toggle();
          //  window.loginFx.toggle()
      // })
    }
});