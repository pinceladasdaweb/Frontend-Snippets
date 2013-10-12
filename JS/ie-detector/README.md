IE Detector
=================

```javascript
function iedetect(v) {
    'use strict';
    /*jslint browser: true*/
    var r = new RegExp('msie' + (!isNaN(v) ? ('\\s' + v) : ''), 'i');
    return r.test(navigator.userAgent);
}
```
Example of usage:

```javascript
if (iedetect(10)) {
	//return true if IE == 10
}
```