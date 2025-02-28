
function loadScript(a) {
    var b = document.getElementsByTagName("head")[0],
        c = document.createElement("script");
    c.type = "text/javascript", c.src = "https://tracker.metricool.com/resources/be.js",
        c.onreadystatechange = a, c.onload = a, b.appendChild(c)
} loadScript(function () { beTracker.t({ hash: "929ea9220e80890a52647c9a67762c6b" }) });