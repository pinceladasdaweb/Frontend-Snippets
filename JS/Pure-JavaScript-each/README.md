```javascript
Object.prototype.each = function (callback) {
    var arr = [], i, len;
    for (i = 0, len = this.length; i < len; i += 1) {
        arr[i] = this[i];
        callback(arr[i]);
    }
}
```

/**
* Example of usage:
*/
```javascript
var lis = document.querySelectorAll('li');

lis.each(function(elem) {
    elem.style.background = "black";
});
```

View online [here](http://jsfiddle.net/pinceladasdaweb/Evkgu/).
