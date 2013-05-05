PHP Twitter Cache
=================

A simple php-based twitter cache.

I built this cache because Twitter's API is quite unreliable; no doubt you've experienced times when tweets just don't load when making direct calls to the API. This script caches a twitter feed, and refreshes it every 10 minutes (you can change this). If the API is down, it simply returns the old cached file. 

To use it, simply use it like you use the normal twitter feed, slightly modifying the URL to point to the cache script. Here's a jQuery example:

    $.getJSON('/path/to/twitter-cache.php?user=pinceladasdaweb&count=10', function(data) {
        $.each(data, function(i) {
            // do something with data[i]
        });
    });

Note: by default you'll need a cache folder in the directory that the script is in, and a twitter-cache file inside that. The script should create the file if it doesn't exist, but it won't create the folder.