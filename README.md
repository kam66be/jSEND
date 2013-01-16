# jSEND 2.0 

### Speed up response + increase UX* of your WebApps
> UX is short for User eXperience ~ how a person feels about using your web site or application.

**jSEND is a JavaScript cross browser component for jQuery.**

It provides compression in combination with binary-to-text encoding and achieves significant, lossless information reduction for your data transfers - supporting all kinds of textual data: XML, stringified JSON Objects, (X)HTML, plain text... Test it now!

**jSEND is intended for use in Web 2.0 and rich applications** - as invaluable supplement for post requests via the XMLHTTPRequest object (AJAX/AJAJ).

This software is absolutely free. It's licensed same as jQuery – under the terms of either the MIT License or the GNU General Public License (GPL) Version 2.

## Why use jSEND?

For compressed data delivery from server to browser there are GZip/Deflate.

In the other direction there is - now - jSEND.
### Integrate it in your web application if you want to:
* Increase user experience by faster response times
* Reduce amounts of transferred data and save bandwith
* Submit UTF-8 data as ASCII string and eliminate different character sets issues & confusion
* Obfuscate information delivered by AJAX posts
* Just have fun by Using (our) Solution Productively...

> Runtime of code is - in most cases - nearly predictable, wire speed isn't.

> Your users can read and inspect it - e.g. with tools like Live HTTP headers for Firefox. jSEND offers - generously interpreted - a kind of obfuscation, but it's NOT encryption. For that please use HTTPS/SSL.

**jSEND is transparent, reliable, lightweight (2.5 KB minified) and fully UTF-8 compatible.** It is free and open source and can easily be customized to fit your individual needs.

## Why don't use jSEND?

###If you fully approve to one of the 5 questions below, you shouldn't use it:
* Are you NEITHER a web developer, NOR a web designer, NOR a web enthusiast? ...sniff :o(
* Do you want to achieve »AJAX uploads«*?
* Do you only send small amounts of data (< 500 bytes) to the server, always?
* Is bandwidth usage no subject and does all of your users have broadband internet access, all the time?
* Do your clients use outdated hardware** or extremely low performing devices to access your (web) application?
Even though you think you don't need it, please evaluate the technical approach of jSEND.

> Currently there is no way to do "real" uploading with AJAX, read more... 

> E.g. produced and sold before Y2K.

## Usage

###The HTML/JavaScript part

Include jQuery and jSEND in your HTML file or template. 
Loading jQuery from CDN (Content Delivery Network) is recommended.

```html
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><script> 
<script type="text/javascript" src="jsend.min.js"></script>
```
Write JavaScript code!

```javascript
var str = "String to Squeeze, ENcode & Deliver"; 
var data = $.jSEND(str); 
// Send data to server
```
###The PHP counterpart

Include jSEND class in your PHP file.
```php
include('jsend.class.php');
```
Write PHP code!
```php
$data = $_POST["data"]; 
// Checks, Validation etc. 
$jSEND = new jSEND(); 
$str = $jSEND->getData($data);
```

## About jSEND

### Author

jSEND was created and is currently maintained by Michael Kortstiege - a web developer from near Hanover, Germany.

His main fields of occupation and some of his personal interests are web-based applications, web usability and social media issues (both, pros and cons ;-).

»A short statement from him: **code is poetry** - see Smashing Magazine and Wordpress - **but objects are the beat.**«

### Credits

* Lempel-Ziv-Welch - developers of the LZW compression algorithm
* Jakub Vrana http://php.vrana.cz/ - binary encoder/decoder, similar to PHP pack function
* Jürgen Helbing http://www.yenc.org/ - the idea how to clever escape an encoded string
