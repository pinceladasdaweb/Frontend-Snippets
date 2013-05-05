Center elements on Viewport with jQuery
=================

```javascript
$.fn.center = function (relation) {
    var center_in = (relation) ? $(relation) : $(window);
    
    this.css("top", (center_in.height() - this.height() ) / 2+center_in.scrollTop() + "px");
    this.css("left", (center_in.width() - this.width() ) / 2+center_in.scrollLeft() + "px");
    this.css("position", "absolute");
    this.css("z-index", "999");
    return this;
};
```

##Example of usage

```javascript
$(element).center();
```