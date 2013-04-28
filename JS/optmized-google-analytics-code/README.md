[Optmized Google Analytics code](http://mathiasbynens.be/notes/async-analytics-snippet)
=================

```javascript
<script>
  var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
  (function(d) {
    var g = d.createElement('script'),
        s = d.scripts[0];
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
  }(document));
</script>
```