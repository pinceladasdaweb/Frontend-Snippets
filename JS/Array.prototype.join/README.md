[Use Array.prototype.join](http://tech.pro/tutorial/1254/9-ways-to-optimize-your-front-end-performance)
=================

One micro-optimization on the client side is using Array.prototype.join instead of basic string concatenation.

```javascript
var items = [];

ajaxResult.items.forEach(function(item) {
    // Build the string
    items.push(['<li>', item.text, '</li>'].join(''));
});

// Set list items via innerHTML
document.querySelector('ul').innerHTML = items.join('');
```
Granted a maintainer may need an extra second to see what the array is for, but every user gets the benefit of this speed micro-optimization.
