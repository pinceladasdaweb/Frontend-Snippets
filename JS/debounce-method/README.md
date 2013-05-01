[JavaScript Debounce Method](tech.pro/tutorial/1254/9-ways-to-optimize-your-front-end-performance)
=================

```javascript
// As taken from the UnderscoreJS utility framework
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
  }

// Add the resize callback but only allow it to execute once every 300 milliseconds
window.addEventListener('resize', debounce(function(event) {

    // Do the resize processing (whatever you'd like to do!)

}, 300));
```