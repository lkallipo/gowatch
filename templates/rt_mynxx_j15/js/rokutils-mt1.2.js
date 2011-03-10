window.addEvent('domready', function() {
	var scrollToTop = document.id("top-scroll");
	if (scrollToTop) {
		var scroll = new(Fx.Scroll)(window);
		scrollToTop.setStyle("outline", "none").addEvent("click", function(e) {
			e.stop();
			scroll.toTop()
		})
	}
	if (Browser.Engine.trident4) {
		var separators = document.id("horiz-menu").getElements(".separator");
		if (separators.length) {
			separators.each(function(separator, i) {
				if (separator.hasClass("daddy")) {
					separator.addClass("separator-daddy")
				}
			})
		}
	}
	var spinner = $$('.spinner');
	if (spinner.length) {
		spinner.setStyle('display', 'none');
		Request.prototype.options.onSuccess = function() {
			spinner.setStyle('display', 'none');
		};
		Request.prototype.options.onRequest = function(url, data) {
			spinner.setStyle('display', '');
		};
	}
	var fontPanel = document.id('font-panel'),
		fontButton = document.id('font-style-button'),
		fontSurround = document.id('font-panel-surround'),
		fontFx;
	var loginPanel = document.id('login-panel'),
		loginButton = document.id('login-button'),
		loginSurround = document.id('login-panel-surround'),
		loginFx;
	var buttons = document.id('buttons');
	if (buttons) {
		var lnks = buttons.getElements('a');
		lnks.each(function(lnk, i) {
			lnk.addEvent('click', function(e) {
				e.stop();
				var cookie = Cookie.read('mynxx-fontstyle');
				var cls = this.get('href');
				cls = cls.split("fontstyle=");
				if (cls[1]) {
					cls = cls[1];
					if ((cookie == 'f-small' && cls == 'f-larger') || (cookie == 'f-large' && cls == 'f-smaller')) cls = 'f-default';
					else if (cls == 'f-larger') cls = 'f-large';
					else if (cls == 'f-smaller') cls = 'f-small';
					Cookie.write('mynxx-fontstyle', cls);
					document.id(document.body).removeClass('f-default').removeClass('f-large').removeClass('f-small').addClass(cls)
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
		fontButton.getFirst('a').addEvent('click', function(e) {
			e.stop();
			if (typeof RokVM != 'undefined' && RokVM && RokVM.Cart && RokVM.Cart.Fx && RokVM.Cart.Fx.open) RokVM.Cart.Fx.toggle();
			if (window.loginFx && window.loginFx.open) window.loginFx.toggle();
			window.fontFx.toggle()
		});
		fontPanel.getElements('a').each(function(fnt) {
			var title = fnt.title;
			fnt.addEvent('click', function(e) {
				new Event(e).stop();
				Cookie.write('mynxx-fontfamily', fnt.get('text').toLowerCase(), {
					duration: 365
				});
				document.id(document.body).id = title;
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
		loginButton.getFirst('a').addEvent('click', function(e) {
			e.stop();
			if (typeof RokVM != 'undefined' && RokVM && RokVM.Cart && RokVM.Cart.Fx && RokVM.Cart.Fx.open) RokVM.Cart.Fx.toggle();
			if (window.fontFx && window.fontFx.open) window.fontFx.toggle();
			window.loginFx.toggle()
		})
	}
});
