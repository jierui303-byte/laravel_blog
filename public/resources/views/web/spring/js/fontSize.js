// JavaScript Document

/*js根据屏幕宽度动态计算*/

!(function(doc, win) {
  var docEle = doc.documentElement,
    evt = "onorientationchange" in window ? "orientationchange" : "resize",
    fn = function() {
      var width = docEle.clientWidth;
      width && (docEle.style.fontSize = 30 * (width / 320) + "px");
    };
   
  win.addEventListener(evt, fn, false);
  doc.addEventListener("DOMContentLoaded", fn, false);
}(document, window));