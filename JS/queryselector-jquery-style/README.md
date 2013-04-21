###The querySelector() method exists both on as a Document and as an Element object. This lets you query either the entire document tree, or just a specific chunk of it looking for that elusive element of yours. It accepts any CSS selector as its parameter (ie: "#foo img") and returns either the first matched element (if multiple exists), or null if none.

###The querySelectorAll() method behaves just like its more humble cousin above with the exception it returns not just a singular element that matches a CSS selector, but all of them as a staticNodeList.