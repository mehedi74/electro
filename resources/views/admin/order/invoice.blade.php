<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <title>General Invoice</title>
    <style>@import url(https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap);

        *, ::after, ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        b {
            font-weight: bolder
        }

        img {
            border-style: none
        }

        button {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button
        }

        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        body, html {
            color: #777;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5em;
            overflow-x: hidden;
            background-color: #f5f7ff
        }

        p, div {
            margin-top: 0;
            line-height: 1.5em
        }

        p {
            margin-bottom: 15px
        }

        img {
            border: 0;
            max-width: 100%;
            height: auto;
            vertical-align: middle
        }

        a {
            color: inherit;
            text-decoration: none;
            -webkit-transition: all .3s ease;
            transition: all .3s ease
        }

        a:hover {
            color: #2ad19d
        }

        button {
            color: inherit;
            -webkit-transition: all .3s ease;
            transition: all .3s ease
        }

        a:hover {
            text-decoration: none;
            color: inherit
        }

        table {
            width: 100%;
            caption-side: bottom;
            border-collapse: collapse
        }

        th {
            text-align: left
        }

        td {
            border-top: 1px solid #eaeaea
        }

        td, th {
            padding: 10px 15px;
            line-height: 1.55em
        }

        b {
            font-weight: bold
        }

        .cs-f16 {
            font-size: 16px
        }

        .cs-semi_bold {
            font-weight: 600
        }

        .cs-bold {
            font-weight: 700
        }

        .cs-m0 {
            margin: 0
        }

        .cs-mb0 {
            margin-bottom: 0
        }

        .cs-mb5 {
            margin-bottom: 5px
        }

        .cs-mb10 {
            margin-bottom: 10px
        }

        .cs-mb25 {
            margin-bottom: 25px
        }

        .cs-width_1 {
            width: 8.33333333%
        }

        .cs-width_2 {
            width: 16.66666667%
        }

        .cs-width_3 {
            width: 25%
        }

        .cs-width_4 {
            width: 33.33333333%
        }

        .cs-primary_color {
            color: #111
        }

        .cs-focus_bg {
            background: #f6f6f6
        }

        .cs-container {
            max-width: 880px;
            padding: 30px 15px;
            margin-left: auto;
            margin-right: auto
        }

        .cs-text_right {
            text-align: right
        }

        .cs-border_top_0 {
            border-top: 0
        }

        .cs-border_top {
            border-top: 1px solid #eaeaea
        }

        .cs-border_left {
            border-left: 1px solid #eaeaea
        }

        .cs-round_border {
            border: 1px solid #eaeaea;
            overflow: hidden;
            border-radius: 6px
        }

        .cs-border_none {
            border: none
        }

        .cs-invoice.cs-style1 {
            background: #fff;
            border-radius: 10px;
            padding: 50px
        }

        .cs-invoice.cs-style1 .cs-invoice_head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .cs-invoice.cs-style1 .cs-invoice_head.cs-type1 {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            padding-bottom: 25px;
            border-bottom: 1px solid #eaeaea
        }

        .cs-invoice.cs-style1 .cs-invoice_footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .cs-invoice.cs-style1 .cs-invoice_footer table {
            margin-top: -1px
        }

        .cs-invoice.cs-style1 .cs-left_footer {
            width: 55%;
            padding: 10px 15px
        }

        .cs-invoice.cs-style1 .cs-right_footer {
            width: 46%
        }

        .cs-invoice.cs-style1 .cs-note {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            margin-top: 40px
        }

        .cs-invoice.cs-style1 .cs-note_left {
            margin-right: 10px;
            margin-top: 6px;
            margin-left: -5px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .cs-invoice.cs-style1 .cs-note_left svg {
            width: 32px
        }

        .cs-invoice.cs-style1 .cs-invoice_left {
            max-width: 55%
        }

        .cs-invoice_btns {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 30px
        }

        .cs-invoice_btns .cs-invoice_btn:first-child {
            border-radius: 5px 0 0 5px
        }

        .cs-invoice_btns .cs-invoice_btn:last-child {
            border-radius: 0 5px 5px 0
        }

        .cs-invoice_btn {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border: none;
            font-weight: 600;
            padding: 8px 20px;
            cursor: pointer
        }

        .cs-invoice_btn svg {
            width: 24px;
            margin-right: 5px
        }

        .cs-invoice_btn.cs-color1 {
            color: #111;
            background: rgba(42, 209, 157, .15)
        }

        .cs-invoice_btn.cs-color1:hover {
            background-color: rgba(42, 209, 157, .3)
        }

        .cs-invoice_btn.cs-color2 {
            color: #fff;
            background: #2ad19d
        }

        .cs-invoice_btn.cs-color2:hover {
            background-color: rgba(42, 209, 157, .8)
        }

        .cs-table_responsive {
            overflow-x: auto
        }

        .cs-table_responsive > table {
            min-width: 600px
        }

        .cs-bar_list li:not(:last-child) {
            margin-bottom: 10px
        }

        .cs-table.cs-style2 tr:not(:first-child) {
            border-top: 1px dashed #eaeaea
        }

        .cs-list.cs-style1 li:not(:last-child) {
            border-bottom: 1px dashed #eaeaea
        }

        .cs-table.cs-style1 .cs-table.cs-style1 tr:not(:first-child) td {
            border-color: #eaeaea
        }

        @media (max-width: 767px) {
            .cs-mobile_hide {
                display: none
            }

            .cs-invoice.cs-style1 {
                padding: 30px 20px
            }

            .cs-invoice.cs-style1 .cs-right_footer {
                width: 100%
            }
        }

        @media (max-width: 500px) {
            .cs-invoice.cs-style1 .cs-logo {
                margin-bottom: 10px
            }

            .cs-invoice.cs-style1 .cs-invoice_head {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .cs-invoice.cs-style1 .cs-invoice_head.cs-type1 {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                text-align: center
            }

            .cs-invoice.cs-style1 .cs-invoice_head .cs-text_right {
                text-align: left
            }

            .cs-invoice.cs-style1 .cs-invoice_left {
                max-width: 100%
            }
        }</style>
</head>
<body>
<noscript>
    <meta HTTP-EQUIV="refresh"
          content="0;url='http://thememarch.com/demo/html/ivonne/general-invoice.html?PageSpeed=noscript'"/>
    <style><!--
        table, div, span, font, p {
            display: none
        }

        --></style>
    <div style="display:block">Please click <a
            href="http://thememarch.com/demo/html/ivonne/general-invoice.html?PageSpeed=noscript">here</a> if you are
        not redirected within a few seconds.
    </div>
</noscript>
<div class="cs-container">
    <div class="cs-invoice cs-style1">
        <div class="cs-invoice_in" id="download_section">
            <div class="cs-invoice_head cs-type1 cs-mb25">
                <div class="cs-invoice_left">
                    <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Invoice
                            No:</b>#{{uniqid()}}</p>
                    <p class="cs-invoice_date cs-primary_color cs-m0"><b
                            class="cs-primary_color">Date: </b>{{date("d-m-Y h:i:s")}}</p>
                </div>
                <div class="cs-invoice_right cs-text_right">
                    <div class="cs-logo cs-mb5">
                        <script data-pagespeed-no-defer>//<![CDATA[
                            (function () {
                                for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function (b, c, a) {
                                    if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                    b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                    var m = k[l];
                                    m in h || (h[m] = {});
                                    h = h[m]
                                }
                                var n = k[k.length - 1], p = h[n], q = p ? p : function (b) {
                                    var c;
                                    if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                    c = this + "";
                                    if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                    b |= 0;
                                    for (var a = ""; b;) if (b & 1 && (a += c), b >>>= 1) c += c;
                                    return a
                                };
                                q != p && null != q && g(h, n, {configurable: !0, writable: !0, value: q});
                                var t = this;

                                function u(b, c) {
                                    var a = b.split("."), d = t;
                                    a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                    for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                };

                                function v(b) {
                                    var c = b.length;
                                    if (0 < c) {
                                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                        return a
                                    }
                                    return []
                                };

                                function w(b) {
                                    var c = window;
                                    if (c.addEventListener) c.addEventListener("load", b, !1); else if (c.attachEvent) c.attachEvent("onload", b); else {
                                        var a = c.onload;
                                        c.onload = function () {
                                            b.call(this);
                                            a && a.call(this)
                                        }
                                    }
                                };var x;

                                function y(b, c, a, d, e) {
                                    this.h = b;
                                    this.j = c;
                                    this.l = a;
                                    this.f = e;
                                    this.g = {
                                        height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                        width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                    };
                                    this.i = d;
                                    this.b = {};
                                    this.a = [];
                                    this.c = {}
                                }

                                function z(b, c) {
                                    var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                    if (a = e && !(e in b.c)) if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1; else {
                                        d = c.getBoundingClientRect();
                                        var f = document.body;
                                        a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                        d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                        f = a.toString() + "," + d;
                                        b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                    }
                                    a && (b.a.push(e), b.c[e] = !0)
                                }

                                y.prototype.checkImageForCriticality = function (b) {
                                    b.getBoundingClientRect && z(this, b)
                                };
                                u("pagespeed.CriticalImages.checkImageForCriticality", function (b) {
                                    x.checkImageForCriticality(b)
                                });
                                u("pagespeed.CriticalImages.checkCriticalImages", function () {
                                    A(x)
                                });

                                function A(b) {
                                    b.b = {};
                                    for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                    if (a.length && a[0].getBoundingClientRect) {
                                        for (d = 0; c = a[d]; ++d) z(b, c);
                                        a = "oh=" + b.l;
                                        b.f && (a += "&n=" + b.f);
                                        if (c = !!b.a.length) for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                            var e = "," + encodeURIComponent(b.a[d]);
                                            131072 >= a.length + e.length && (a += e)
                                        }
                                        b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                        C = a;
                                        if (c) {
                                            d = b.h;
                                            b = b.j;
                                            var f;
                                            if (window.XMLHttpRequest) f = new XMLHttpRequest; else if (window.ActiveXObject) try {
                                                f = new ActiveXObject("Msxml2.XMLHTTP")
                                            } catch (r) {
                                                try {
                                                    f = new ActiveXObject("Microsoft.XMLHTTP")
                                                } catch (D) {
                                                }
                                            }
                                            f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                        }
                                    }
                                }

                                function B() {
                                    var b = {}, c;
                                    c = document.getElementsByTagName("IMG");
                                    if (!c.length) return {};
                                    var a = c[0];
                                    if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                    for (var d = 0; a = c[d]; ++d) {
                                        var e = a.getAttribute("data-pagespeed-url-hash");
                                        e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                            rw: a.width,
                                            rh: a.height,
                                            ow: a.naturalWidth,
                                            oh: a.naturalHeight
                                        })
                                    }
                                    return b
                                }

                                var C = "";
                                u("pagespeed.CriticalImages.getBeaconData", function () {
                                    return C
                                });
                                u("pagespeed.CriticalImages.Run", function (b, c, a, d, e, f) {
                                    var r = new y(b, c, a, e, f);
                                    x = r;
                                    d && w(function () {
                                        window.setTimeout(function () {
                                            A(r)
                                        }, 0)
                                    })
                                });
                            })();
                            pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'http://thememarch.com/demo/html/ivonne/general-invoice.html', 'UMSeiHfgyf', true, false, 'PfbAAUk9sog');
                            //]]></script>
                        <img style="background-color: black;width: 60px;height: 40px;"
                             src="{{asset('assets')}}/website/img/logo.png" alt="Logo"
                             data-pagespeed-url-hash="3625737117"
                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
                </div>
            </div>
            <div class="cs-invoice_head cs-mb10">
                <div class="cs-invoice_left">
                    <b class="cs-primary_color">Invoice To:</b>
                    <p>
                        {{$order->customer->name}} <br>
                        {{$order->customer->email}} <br>{{$order->customer->mobile}} <br>
                        Bangladesh
                    </p>
                </div>
                <div class="cs-invoice_right cs-text_right">
                    <b class="cs-primary_color">Pay To:</b>
                    <p>
                        Electro int Ltd.<br>
                        237 Roanoke Road, North York, <br>
                        Ontario, Canada <br>
                        demo@email.com
                    </p>
                </div>
            </div>
            <div class="cs-table cs-style1">
                <div class="cs-round_border">
                    <div class="cs-table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Item</th>
                                <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Size</th>
                                <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Color</th>
                                <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Qty</th>
                                <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Price</th>
                                <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products_by_orderid as $productItem)
                                <tr>
                                    <td class="cs-width_3">{{$productItem->product_name}}</td>
                                    <td class="cs-width_2">{{getSize($productItem->product_size)}}</td>
                                    <td class="cs-width_2">{{getColor($productItem->product_color)}}</td>
                                    <td class="cs-width_3">{{$productItem->product_sales_quantity}}</td>
                                    <td class="cs-width_2">{{$productItem->product->price}}</td>
                                    <td class="cs-width_3 cs-text_right">
                                        &#2547;{{$productItem->product->price*$productItem->product_sales_quantity}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cs-invoice_footer cs-border_top">
                        <div class="cs-left_footer cs-mobile_hide">
                            <p class="cs-mb0"><b class="cs-primary_color">Additional Information:</b></p>
                            <p class="cs-m0">At check in you may need to present the credit <br>card used for payment of
                                this ticket.</p>
                        </div>
                        <div class="cs-right_footer">
                            <table>
                                <tbody>
                                <tr class="cs-border_left">
                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Subtoal</td>
                                    <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                        &#2547;{{$order->total}}</td>
                                </tr>
                                <tr class="cs-border_left">
                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Tax</td>
                                    <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                        &#2547;20
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cs-invoice_footer">
                    <div class="cs-left_footer cs-mobile_hide"></div>
                    <div class="cs-right_footer">
                        <table>
                            <tbody>
                            <tr class="cs-border_none">
                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color">Total Amount</td>
                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right">
                                    &#2547;{{$order->total+20}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cs-note">
                <div class="cs-note_left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path
                            d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                        <path d="M256 56v120a32 32 0 0032 32h120M176 288h160M176 368h160" fill="none"
                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                    </svg>
                </div>
                <div class="cs-note_right">
                    <p class="cs-mb0"><b class="cs-primary_color cs-bold">Note:</b></p>
                    <p class="cs-m0">Here we can write a additional notes for the client to get a better understanding
                        of this invoice.</p>
                </div>
            </div>
        </div>
        <div class="cs-invoice_btns cs-hide_print">
            <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <path
                        d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                        fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                    <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none"
                          stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                    <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                          stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                    <circle cx="392" cy="184" r="24"/>
                </svg>
                <span>Print</span>
            </a>
            <button id="download_btn" class="cs-invoice_btn cs-color2">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Download</title>
                    <path
                        d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32"/>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/>
                </svg>
                <span><a href="{{route('invoice.download',['id'=>$order->id])}}">Download</a></span>
            </button>
        </div>
    </div>
</div>
<script src="{{asset('assets')}}/admin/js/invoice/jspdf.js"></script>
<script>eval(mod_pagespeed_29hrpuHQrF);</script>
<script>eval(mod_pagespeed_otZnIY0lOn);</script>
<script src="{{asset('assets')}}/admin/js/invoice/canvas.js"></script>
<script>//<![CDATA[
    (function ($) {
        'use strict';
        $('#download_btn').on('click', function () {
            var downloadSection = $('#download_section');
            var cWidth = downloadSection.width();
            var cHeight = downloadSection.height();
            var topLeftMargin = 40;
            var pdfWidth = cWidth + topLeftMargin * 2;
            var pdfHeight = pdfWidth * 1.5 + topLeftMargin * 2;
            var canvasImageWidth = cWidth;
            var canvasImageHeight = cHeight;
            var totalPDFPages = Math.ceil(cHeight / pdfHeight) - 1;
            html2canvas(downloadSection[0], {allowTaint: true}).then(function (canvas) {
                canvas.getContext('2d');
                var imgData = canvas.toDataURL('image/jpeg', 1.0);
                var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);
                pdf.addImage(imgData, 'JPG', topLeftMargin, topLeftMargin, canvasImageWidth, canvasImageHeight);
                for (var i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(pdfWidth, pdfHeight);
                    pdf.addImage(imgData, 'JPG', topLeftMargin, -(pdfHeight * i) + topLeftMargin * 0, canvasImageWidth, canvasImageHeight);
                }
                pdf.save('ivonne-invoice.pdf');
            });
        });
    })(jQuery);
    //]]></script>
<script data-pagespeed-no-defer>//<![CDATA[
    (function () {
        function f(b) {
            var a = window;
            if (a.addEventListener) a.addEventListener("load", b, !1); else if (a.attachEvent) a.attachEvent("onload", b); else {
                var c = a.onload;
                a.onload = function () {
                    b.call(this);
                    c && c.call(this)
                }
            }
        };window.pagespeed = window.pagespeed || {};
        var k = window.pagespeed;

        function l(b, a, c, g, h) {
            this.h = b;
            this.i = a;
            this.l = c;
            this.j = g;
            this.b = h;
            this.c = [];
            this.a = 0
        }

        l.prototype.f = function (b) {
            for (var a = 0; 250 > a && this.a < this.b.length; ++a, ++this.a) try {
                document.querySelector(this.b[this.a]) && this.c.push(this.b[this.a])
            } catch (c) {
            }
            this.a < this.b.length ? window.setTimeout(this.f.bind(this), 0, b) : b()
        };
        k.g = function (b, a, c, g, h) {
            if (document.querySelector && Function.prototype.bind) {
                var d = new l(b, a, c, g, h);
                f(function () {
                    window.setTimeout(function () {
                        d.f(function () {
                            for (var a = "oh=" + d.l + "&n=" + d.j, a = a + "&cs=", b = 0; b < d.c.length; ++b) {
                                var c = 0 < b ? "," : "", c = c + encodeURIComponent(d.c[b]);
                                if (131072 < a.length + c.length) break;
                                a += c
                            }
                            k.criticalCssBeaconData = a;
                            var b = d.h, c = d.i, e;
                            if (window.XMLHttpRequest) e = new XMLHttpRequest; else if (window.ActiveXObject) try {
                                e = new ActiveXObject("Msxml2.XMLHTTP")
                            } catch (m) {
                                try {
                                    e = new ActiveXObject("Microsoft.XMLHTTP")
                                } catch (n) {
                                }
                            }
                            e &&
                            (e.open("POST", b + (-1 == b.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(c)), e.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), e.send(a))
                        })
                    }, 0)
                })
            }
        };
        k.criticalCssBeaconInit = k.g;
    })();
    pagespeed.selectors = ["*", ".cs-50_col > *", ".cs-accent_10_bg", ".cs-accent_bg", ".cs-accent_bg_hover", ".cs-accent_color", ".cs-accent_color_hover", ".cs-bar_list", ".cs-bar_list li", ".cs-bold", ".cs-border_bottom", ".cs-border_bottom_0", ".cs-border_left", ".cs-border_left_none", ".cs-border_less td", ".cs-border_none", ".cs-border_right", ".cs-border_right_none", ".cs-border_top", ".cs-border_top_0", ".cs-box.cs-style1", ".cs-box.cs-style1.cs-type1", ".cs-box.cs-style2", ".cs-box.cs-style2 .cs-table.cs-style2 td", ".cs-box2_wrap", ".cs-col_2", ".cs-col_3", ".cs-col_4", ".cs-container", ".cs-f10", ".cs-f11", ".cs-f12", ".cs-f13", ".cs-f14", ".cs-f15", ".cs-f16", ".cs-f17", ".cs-f18", ".cs-f19", ".cs-f20", ".cs-f21", ".cs-f22", ".cs-f23", ".cs-f24", ".cs-f25", ".cs-f26", ".cs-f27", ".cs-f28", ".cs-f29", ".cs-focus_bg", ".cs-grid_row", ".cs-heading.cs-style1", ".cs-invoice.cs-style1", ".cs-invoice.cs-style1 .cs-invoice_footer", ".cs-invoice.cs-style1 .cs-invoice_footer table", ".cs-invoice.cs-style1 .cs-invoice_head", ".cs-invoice.cs-style1 .cs-invoice_head .cs-text_right", ".cs-invoice.cs-style1 .cs-invoice_head.cs-type1", ".cs-invoice.cs-style1 .cs-invoice_left", ".cs-invoice.cs-style1 .cs-left_footer", ".cs-invoice.cs-style1 .cs-logo", ".cs-invoice.cs-style1 .cs-note", ".cs-invoice.cs-style1 .cs-note_left", ".cs-invoice.cs-style1 .cs-note_left svg", ".cs-invoice.cs-style1 .cs-right_footer", ".cs-invoice_btn", ".cs-invoice_btn svg", ".cs-invoice_btn.cs-color1", ".cs-invoice_btn.cs-color2", ".cs-invoice_btns", ".cs-invoice_btns .cs-invoice_btn", ".cs-left_auto", ".cs-light", ".cs-list.cs-style1", ".cs-list.cs-style1 li", ".cs-list.cs-style1 li > *", ".cs-list.cs-style2", ".cs-list.cs-style2 li", ".cs-list.cs-style2 li > *", ".cs-m0", ".cs-max_w_150", ".cs-mb0", ".cs-mb1", ".cs-mb10", ".cs-mb11", ".cs-mb12", ".cs-mb13", ".cs-mb14", ".cs-mb15", ".cs-mb16", ".cs-mb17", ".cs-mb18", ".cs-mb19", ".cs-mb2", ".cs-mb20", ".cs-mb21", ".cs-mb22", ".cs-mb23", ".cs-mb24", ".cs-mb25", ".cs-mb26", ".cs-mb27", ".cs-mb28", ".cs-mb29", ".cs-mb3", ".cs-mb30", ".cs-mb4", ".cs-mb5", ".cs-mb6", ".cs-mb7", ".cs-mb8", ".cs-mb9", ".cs-medium", ".cs-mobile_hide", ".cs-no_border", ".cs-normal", ".cs-primary_color", ".cs-pt25", ".cs-round_border", ".cs-secondary_color", ".cs-semi_bold", ".cs-special_item", ".cs-table.cs-style1 .cs-table.cs-style2 td", ".cs-table.cs-style1.cs-type1", ".cs-table.cs-style1.cs-type1 tr td", ".cs-table.cs-style1.cs-type2 .cs-table_title", ".cs-table.cs-style1.cs-type2 > *", ".cs-table.cs-style2 td", ".cs-table.cs-style2 th", ".cs-table_baseline", ".cs-table_responsive", ".cs-table_responsive > table", ".cs-ternary_color", ".cs-text_center", ".cs-text_right", ".cs-ticket_left", ".cs-ticket_right", ".cs-ticket_wrap", ".cs-title_1", ".cs-width_1", ".cs-width_10", ".cs-width_11", ".cs-width_12", ".cs-width_2", ".cs-width_3", ".cs-width_4", ".cs-width_5", ".cs-width_6", ".cs-width_7", ".cs-width_8", ".cs-width_9", "[hidden]", "[type=\"button\"]", "[type=\"checkbox\"]", "[type=\"number\"]", "[type=\"radio\"]", "[type=\"reset\"]", "[type=\"search\"]", "[type=\"submit\"]", "a", "abbr[title]", "address", "b", "blockquote", "body", "button", "cite", "code", "details", "dfn", "div", "dl", "dl dt", "em", "fieldset", "h1", "h2", "h3", "h4", "h5", "h6", "hr", "html", "i", "img", "input", "kbd", "legend", "main", "ol", "optgroup", "p", "pre", "progress", "samp", "select", "small", "strong", "sub", "summary", "sup", "table", "td", "template", "textarea", "th", "ul"];
    pagespeed.criticalCssBeaconInit('/mod_pagespeed_beacon', 'http://thememarch.com/demo/html/ivonne/general-invoice.html', 'UMSeiHfgyf', 'T0zXgMzl4b0', pagespeed.selectors);
    //]]></script>
<noscript class="psa_add_styles">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/css.css">
</noscript>
<script data-pagespeed-no-defer>//<![CDATA[
    (function () {
        function b() {
            var a = window, c = e;
            if (a.addEventListener) a.addEventListener("load", c, !1); else if (a.attachEvent) a.attachEvent("onload", c); else {
                var d = a.onload;
                a.onload = function () {
                    c.call(this);
                    d && d.call(this)
                }
            }
        };var f = !1;

        function e() {
            if (!f) {
                f = !0;
                for (var a = document.getElementsByClassName("psa_add_styles"), c = 0, d; d = a[c]; ++c) if ("NOSCRIPT" == d.nodeName) {
                    var k = document.createElement("div");
                    k.innerHTML = d.textContent;
                    document.body.appendChild(k)
                }
            }
        }

        function g() {
            var a = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null;
            a ? a(function () {
                window.setTimeout(e, 0)
            }) : b()
        }

        var h = ["pagespeed", "CriticalCssLoader", "Run"], l = this;
        h[0] in l || !l.execScript || l.execScript("var " + h[0]);
        for (var m; h.length && (m = h.shift());) h.length || void 0 === g ? l[m] ? l = l[m] : l = l[m] = {} : l[m] = g;
    })();
    pagespeed.CriticalCssLoader.Run();
    //]]></script>
</body>
</html>
