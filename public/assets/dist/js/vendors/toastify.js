(() => {
    var k = Object.create;
    var v = Object.defineProperty;
    var N = Object.getOwnPropertyDescriptor;
    var T = Object.getOwnPropertyNames;
    var C = Object.getPrototypeOf,
        L = Object.prototype.hasOwnProperty;
    var E = (o, i) => () => (
        i || o((i = { exports: {} }).exports, i), i.exports
    );
    var O = (o, i, l, c) => {
        if ((i && typeof i == "object") || typeof i == "function")
            for (let r of T(i))
                !L.call(o, r) &&
                    r !== l &&
                    v(o, r, {
                        get: () => i[r],
                        enumerable: !(c = N(i, r)) || c.enumerable,
                    });
        return o;
    };
    var x = (o, i, l) => (
        (l = o != null ? k(C(o)) : {}),
        O(
            i || !o || !o.__esModule
                ? v(l, "default", { value: o, enumerable: !0 })
                : l,
            o
        )
    );
    var b = E((y, h) => {
        (function (o, i) {
            typeof h == "object" && h.exports
                ? (h.exports = i())
                : (o.Toastify = i());
        })(y, function (o) {
            var i = function (t) {
                    return new i.lib.init(t);
                },
                l = "1.12.0";
            (i.defaults = {
                oldestFirst: !0,
                text: "Toastify is awesome!",
                node: void 0,
                duration: 3e3,
                selector: void 0,
                callback: function () {},
                destination: void 0,
                newWindow: !1,
                close: !1,
                gravity: "toastify-top",
                positionLeft: !1,
                position: "",
                backgroundColor: "",
                avatar: "",
                className: "",
                stopOnFocus: !0,
                onClick: function () {},
                offset: { x: 0, y: 0 },
                escapeMarkup: !0,
                ariaLive: "polite",
                style: { background: "" },
            }),
                (i.lib = i.prototype =
                    {
                        toastify: l,
                        constructor: i,
                        init: function (t) {
                            return (
                                t || (t = {}),
                                (this.options = {}),
                                (this.toastElement = null),
                                (this.options.text = t.text || i.defaults.text),
                                (this.options.node = t.node || i.defaults.node),
                                (this.options.duration =
                                    t.duration === 0
                                        ? 0
                                        : t.duration || i.defaults.duration),
                                (this.options.selector =
                                    t.selector || i.defaults.selector),
                                (this.options.callback =
                                    t.callback || i.defaults.callback),
                                (this.options.destination =
                                    t.destination || i.defaults.destination),
                                (this.options.newWindow =
                                    t.newWindow || i.defaults.newWindow),
                                (this.options.close =
                                    t.close || i.defaults.close),
                                (this.options.gravity =
                                    t.gravity === "bottom"
                                        ? "toastify-bottom"
                                        : i.defaults.gravity),
                                (this.options.positionLeft =
                                    t.positionLeft || i.defaults.positionLeft),
                                (this.options.position =
                                    t.position || i.defaults.position),
                                (this.options.backgroundColor =
                                    t.backgroundColor ||
                                    i.defaults.backgroundColor),
                                (this.options.avatar =
                                    t.avatar || i.defaults.avatar),
                                (this.options.className =
                                    t.className || i.defaults.className),
                                (this.options.stopOnFocus =
                                    t.stopOnFocus === void 0
                                        ? i.defaults.stopOnFocus
                                        : t.stopOnFocus),
                                (this.options.onClick =
                                    t.onClick || i.defaults.onClick),
                                (this.options.offset =
                                    t.offset || i.defaults.offset),
                                (this.options.escapeMarkup =
                                    t.escapeMarkup !== void 0
                                        ? t.escapeMarkup
                                        : i.defaults.escapeMarkup),
                                (this.options.ariaLive =
                                    t.ariaLive || i.defaults.ariaLive),
                                (this.options.style =
                                    t.style || i.defaults.style),
                                t.backgroundColor &&
                                    (this.options.style.background =
                                        t.backgroundColor),
                                this
                            );
                        },
                        buildToast: function () {
                            if (!this.options)
                                throw "Toastify is not initialized";
                            var t = document.createElement("div");
                            (t.className =
                                "toastify on " + this.options.className),
                                this.options.position
                                    ? (t.className +=
                                          " toastify-" + this.options.position)
                                    : this.options.positionLeft === !0
                                    ? ((t.className += " toastify-left"),
                                      console.warn(
                                          "Property `positionLeft` will be depreciated in further versions. Please use `position` instead."
                                      ))
                                    : (t.className += " toastify-right"),
                                (t.className += " " + this.options.gravity),
                                this.options.backgroundColor &&
                                    console.warn(
                                        'DEPRECATION NOTICE: "backgroundColor" is being deprecated. Please use the "style.background" property.'
                                    );
                            for (var s in this.options.style)
                                t.style[s] = this.options.style[s];
                            if (
                                (this.options.ariaLive &&
                                    t.setAttribute(
                                        "aria-live",
                                        this.options.ariaLive
                                    ),
                                this.options.node &&
                                    this.options.node.nodeType ===
                                        Node.ELEMENT_NODE)
                            )
                                t.appendChild(this.options.node);
                            else if (
                                (this.options.escapeMarkup
                                    ? (t.innerText = this.options.text)
                                    : (t.innerHTML = this.options.text),
                                this.options.avatar !== "")
                            ) {
                                var f = document.createElement("img");
                                (f.src = this.options.avatar),
                                    (f.className = "toastify-avatar"),
                                    this.options.position == "left" ||
                                    this.options.positionLeft === !0
                                        ? t.appendChild(f)
                                        : t.insertAdjacentElement(
                                              "afterbegin",
                                              f
                                          );
                            }
                            if (this.options.close === !0) {
                                var n = document.createElement("button");
                                (n.type = "button"),
                                    n.setAttribute("aria-label", "Close"),
                                    (n.className = "toast-close"),
                                    (n.innerHTML = "&#10006;"),
                                    n.addEventListener(
                                        "click",
                                        function (p) {
                                            p.stopPropagation(),
                                                this.removeElement(
                                                    this.toastElement
                                                ),
                                                window.clearTimeout(
                                                    this.toastElement
                                                        .timeOutValue
                                                );
                                        }.bind(this)
                                    );
                                var e =
                                    window.innerWidth > 0
                                        ? window.innerWidth
                                        : screen.width;
                                (this.options.position == "left" ||
                                    this.options.positionLeft === !0) &&
                                e > 360
                                    ? t.insertAdjacentElement("afterbegin", n)
                                    : t.appendChild(n);
                            }
                            if (
                                this.options.stopOnFocus &&
                                this.options.duration > 0
                            ) {
                                var a = this;
                                t.addEventListener("mouseover", function (p) {
                                    window.clearTimeout(t.timeOutValue);
                                }),
                                    t.addEventListener(
                                        "mouseleave",
                                        function () {
                                            t.timeOutValue = window.setTimeout(
                                                function () {
                                                    a.removeElement(t);
                                                },
                                                a.options.duration
                                            );
                                        }
                                    );
                            }
                            if (
                                (typeof this.options.destination < "u" &&
                                    t.addEventListener(
                                        "click",
                                        function (p) {
                                            p.stopPropagation(),
                                                this.options.newWindow === !0
                                                    ? window.open(
                                                          this.options
                                                              .destination,
                                                          "_blank"
                                                      )
                                                    : (window.location =
                                                          this.options.destination);
                                        }.bind(this)
                                    ),
                                typeof this.options.onClick == "function" &&
                                    typeof this.options.destination > "u" &&
                                    t.addEventListener(
                                        "click",
                                        function (p) {
                                            p.stopPropagation(),
                                                this.options.onClick();
                                        }.bind(this)
                                    ),
                                typeof this.options.offset == "object")
                            ) {
                                var d = c("x", this.options),
                                    u = c("y", this.options),
                                    m =
                                        this.options.position == "left"
                                            ? d
                                            : "-" + d,
                                    g =
                                        this.options.gravity == "toastify-top"
                                            ? u
                                            : "-" + u;
                                t.style.transform =
                                    "translate(" + m + "," + g + ")";
                            }
                            return t;
                        },
                        showToast: function () {
                            this.toastElement = this.buildToast();
                            var t;
                            if (
                                (typeof this.options.selector == "string"
                                    ? (t = document.getElementById(
                                          this.options.selector
                                      ))
                                    : this.options.selector instanceof
                                          HTMLElement ||
                                      (typeof ShadowRoot < "u" &&
                                          this.options.selector instanceof
                                              ShadowRoot)
                                    ? (t = this.options.selector)
                                    : (t = document.body),
                                !t)
                            )
                                throw "Root element is not defined";
                            var s = i.defaults.oldestFirst
                                ? t.firstChild
                                : t.lastChild;
                            return (
                                t.insertBefore(this.toastElement, s),
                                i.reposition(),
                                this.options.duration > 0 &&
                                    (this.toastElement.timeOutValue =
                                        window.setTimeout(
                                            function () {
                                                this.removeElement(
                                                    this.toastElement
                                                );
                                            }.bind(this),
                                            this.options.duration
                                        )),
                                this
                            );
                        },
                        hideToast: function () {
                            this.toastElement.timeOutValue &&
                                clearTimeout(this.toastElement.timeOutValue),
                                this.removeElement(this.toastElement);
                        },
                        removeElement: function (t) {
                            (t.className = t.className.replace(" on", "")),
                                window.setTimeout(
                                    function () {
                                        this.options.node &&
                                            this.options.node.parentNode &&
                                            this.options.node.parentNode.removeChild(
                                                this.options.node
                                            ),
                                            t.parentNode &&
                                                t.parentNode.removeChild(t),
                                            this.options.callback.call(t),
                                            i.reposition();
                                    }.bind(this),
                                    400
                                );
                        },
                    }),
                (i.reposition = function () {
                    for (
                        var t = { top: 15, bottom: 15 },
                            s = { top: 15, bottom: 15 },
                            f = { top: 15, bottom: 15 },
                            n = document.getElementsByClassName("toastify"),
                            e,
                            a = 0;
                        a < n.length;
                        a++
                    ) {
                        r(n[a], "toastify-top") === !0
                            ? (e = "toastify-top")
                            : (e = "toastify-bottom");
                        var d = n[a].offsetHeight;
                        e = e.substr(9, e.length - 1);
                        var u = 15,
                            m =
                                window.innerWidth > 0
                                    ? window.innerWidth
                                    : screen.width;
                        m <= 360
                            ? ((n[a].style[e] = f[e] + "px"), (f[e] += d + u))
                            : r(n[a], "toastify-left") === !0
                            ? ((n[a].style[e] = t[e] + "px"), (t[e] += d + u))
                            : ((n[a].style[e] = s[e] + "px"), (s[e] += d + u));
                    }
                    return this;
                });
            function c(t, s) {
                return s.offset[t]
                    ? isNaN(s.offset[t])
                        ? s.offset[t]
                        : s.offset[t] + "px"
                    : "0px";
            }
            function r(t, s) {
                return !t || typeof s != "string"
                    ? !1
                    : !!(
                          t.className &&
                          t.className.trim().split(/\s+/gi).indexOf(s) > -1
                      );
            }
            return (i.lib.init.prototype = i.lib), i;
        });
    });
    var w = x(b());
    window.Toastify = w.default;
})();
/*! Bundled license information:

toastify-js/src/toastify.js:
  (*!
   * Toastify js 1.12.0
   * https://github.com/apvarun/toastify-js
   * @license MIT licensed
   *
   * Copyright (C) 2018 Varun A P
   *)
*/
