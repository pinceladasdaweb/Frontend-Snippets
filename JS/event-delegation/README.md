[Event Delegation](tech.pro/tutorial/1254/9-ways-to-optimize-your-front-end-performance)
=================

```javascript
// Get the element, add a click listener...
document.querySelector('#parent-list').addEventListener('click', function(e) {
    // e.target is the clicked element!
    // If it was a list item
    if(e.target && e.target.tagName == 'LI') {
        // List item found!  Do something now!
    }
});
```