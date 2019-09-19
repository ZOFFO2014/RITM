onload = function() {
    for (var link = document.links, i = 0; i < link.length; i++)
        if (link[i].href == document.URL) link[i].style.cssText = 'color: #428BFF;text-decoration';
}