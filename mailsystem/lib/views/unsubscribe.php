
/* Global Reset */

    * { margin: 0px; padding: 0px; outline: none; }
    h1, h2, h3, h4, h5, h6, p, li, label, input, textarea, dt, dd, th, td, .type_button { font-family: "Helvetica", sans-serif; }

/* Classes */

    .clear { clear: both; }
    .hidden { display: none; }

    /* CSS3 */
    .shadow { -webkit-box-shadow: 1px 1px 3px 0px #000000; -moz-box-shadow: 1px 1px 3px 0px #000000; box-shadow: 1px 1px 3px 0px #000000; }
    .shadow-text { text-shadow: 1px 1px 3px #000; }

    form .error { color: #C00; }

/* IDs */

body { background: #E0E0E0 url(../../lib/images/bg-body.jpg) top center no-repeat; }

    #container { margin: 32px; padding: 8px; }
        #navigation { position: fixed; top: 0px; right: 0; margin: 7px 0px 0px 0px; list-style: none; }
        #navigation li { margin: 0px 8px 0px 0px; padding: 8px; background: #999; display: inline; }

        #index { }
        #login {  }
        #subscribers { background: url(../../lib/images/bg-login.png) no-repeat; }
            #subscribers table { line-height: 16px; font-size: 12px; text-align: left; border-collapse: collapse; }
            #subscribers table th { font-size: 14px; font-weight: normal; padding: 8px; }
            #subscribers table td { padding: 8px; border-top: 1px solid #999; }
            #subscribers table tr:hover td { background: #eaeaea; }
        #subscribe-intro { width: 400px; height: 324px; margin: 64px auto 0px auto; }
            #page-title { margin: 0px 0px 16px 0px; color: #fff; text-align: center; font-weight: normal; }
            #subscribe-intro .type_button { width: 125px; height: 116px; padding: 16px 0px 0px 0px; margin: 0px 8px 8px 0px; display: block; float: left; font-size: 12px; text-align: center; color: #515E61; text-decoration: none; font-weight: bold; }
            #subscribe-intro .type_button input { position: absolute; left: -9999px; }
            #subscribe-intro #type_parent     { background: url(../../lib/images/button-parent.png) bottom center no-repeat; }
            #subscribe-intro #type_employee   { background: url(../../lib/images/button-employee.png) bottom center no-repeat; }
            #subscribe-intro #type_interested { background: url(../../lib/images/button-interested.png) bottom center no-repeat; }
        #subscribe {  }


        #unsubscribe { }

