[Chaining asynchronous functions](https://gist.github.com/simov/5473645)
=================

```javascript
function chain () {
    var funcs = arguments;
    return function (args, cb) {
        (function next (index) {
            if (index == funcs.length) return cb();
            funcs[index](args, function (err) {
                if (err) return cb(err);
                next(++index);
            });
        }(0));
    }
}

// async funcs
function func1 (args, next) {
    console.log('func1 called');
    next();
}
function func2 (args, next) {
    console.log('func2 called');
    next();
}
function func3 (args, next) {
    console.log('func3 called');
    next();
}

// init
var chain = chain(func1, func2, func3);

// some args
var args = {some: 'args'};

// start
chain(args, function (err) {
    if (err) throw err;
    console.log('DONE!');
});
```