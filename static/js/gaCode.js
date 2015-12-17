
/* 
 * This is the "gaCode.js" that's utilized at the PRODUCTION SERVER!
 */
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    /*
     * 1st - identify
     */
    ga('create', 'UA-68500501-1', 'auto');

    /*
     * 2nd - send 'pageview's 
     */
    //Eliminate ghost referrals hiting '/' root site (there will be a filter ("Referrer spam") for '/' in ga admin configuration)
    //http://veithen.github.io/2015/01/21/referrer-spam.html
    //console.log('document.location.pathname = ' + document.location.pathname);
    if (document.location.pathname == '/') {
        /*var page = document.location.pathname.replace('/', '/index.html');  ==> THIS actualy changes and SETS the current pathname! You dumb! ;-)
        ga('send', 'pageview', page);*/
        ga('send', 'pageview', '/index.html')
    } else {
        ga('send', 'pageview');
    }

    /*
     * 3rd - associate Analytics user ID with the session user_id
     */
    ga('set', '&uid', 'UA-68500501-1');
