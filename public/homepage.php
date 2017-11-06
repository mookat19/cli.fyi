<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cli.Fyi -  A Potentially Useful Command Line Query Tool</title>
    <meta name="description" content="Quickly get information about emails, IP addresses, URLs and lots  more
    from the command line (or Browser)">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/bulma.min.css">
    <link rel="stylesheet" href="/assets/vendor/highlightjs.theme.css">
    <link rel="stylesheet" href="/assets/styles.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/manifest.json">
    <link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#2a4c55">
    <link rel="shortcut icon" href="/assets/icons/favicon.ico">
    <meta name="msapplication-config" content="/assets/icons/browserconfig.xml">
    <meta name="theme-color" content="#2a4c55">

    <?php
    if (file_exists(__DIR__ . '/analytics.php')) {
        include __DIR__ . '/analytics.php';
    }
    ?>
</head>
<body>
<section class="hero is-medium custom-hero">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item logo" href="../">
                        <img src="/assets/logo.png" alt="Cli.fyi"/>
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                        <span></span>
                        <span></span>
            </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="#available-commands" class="navbar-item">
                            Available Commands
                        </a>
                        <a href="#faq" class="navbar-item">
                            About
                        </a>
                        <a target="_blank" href="https://github.com/daveearley/cli.fyi" class="navbar-item">
                            GitHub
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns">
                <div class="column is-two-thirds">
                    <h1 class="title is-spaced">
                        A Potentially Useful Command Line Query Tool
                    </h1>
                    <h2 class="subtitle">
                        <b>cli.fyi</b> allows you to quickly get information about emails, IP addresses, URLs and lots
                        more
                        from the command line (or Browser)
                    </h2>
                    <div class="buttons">
                        <a href="#available-commands" class="button is-dark">Available Commands</a>
                    </div>
                </div>
                <div class="column is-one-third">
                    <pre class="terminal"><code class="json"><span style="color:#fff;"><b>$</b> curl cli.fyi/<b>btc</b></span>
{
"type": "Bitcoin (BTC) Prices",
"data": {
    "USD ($)": 6973.74,
    "EUR (€)": 6087.48,
    "GBP (£)": 5416.63
    ...
    }
}</code></pre>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="container">
    <div class="main">
        <div class="columns">
            <div class="column is-one-quarter">
                <div class="toggle-sidebar">
                    <a class="button is-small" href="javascript:void(0);">
                        Toggle Menu
                    </a>
                </div>
                <aside class="menu sidebar">
                    <p class="menu-label" id="available-commands">
                        Available Commands
                    </p>
                    <ul class="menu-list">
                        <li><a href="#crypto-currency-prices">Crypto Currency Prices</a></li>
                        <li><a href="#email-address">Email Address Information</a></li>
                        <li><a href="#ip-address">IP Address Information</a></li>
                        <li><a href="#media-information">Media/URL Information</a></li>
                        <li><a href="#client-information">Client Information</a></li>
                        <li><a href="#datatime-information">Date/Time Information</a></li>
                        <li><a href="#programming-lang-information">Programming Language Links</a></li>
                        <li><a href="#country-information">Country Information</a></li>
                        <li><a href="#domain-name-information">Domain Name Information</a></li>
                        <li><a href="#popular-emojis">Popular Emojis</a></li>
                    </ul>
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#credits">Credits</a></li>
                        <li><a target="_blank" href="https://github.com/daveearley/cli.fyi">GitHub</a></li>
                    </ul>
                    <div class="sharing-buttons">
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_reddit"></a>
                            <a class="a2a_button_hacker_news"></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->

                    </div>
                </aside>
            </div>
            <div class="column is-three-quarters">
                <p class="main-content">
                <h1>Available Commands</h1>
                <section class="command-section" id="crypto-currency-prices">

                    <h2>Crypto Currency Prices</h2>

                    <p>
                        Returns the latest prices for 1000+ cryto currencies.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>BTC</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Bitcoin (BTC) Prices",
    "data": {
        "USD ($)": 7299.97,
        "EUR (€)": 6338.15,
        "GBP (£)": 5636.17,
        "AUD ($)": 9642.69,
        "CAD ($)": 9415.97,
        "BRL (R$)": 24559.16,
        "CHF (CHF)": 7528.65,
        "CLP ($)": 4675371.21,
        "CNY (¥)": 51398.69,
        "DKK (kr)": 51231.61,
        "HKD ($)": 57194.57,
        "INR (₹)": 490045.94,
        "ISK (kr)": 843540.55,
        "JPY (¥)": 833628.57,
        "KRW (₩)": 8250226.92,
        "NZD ($)": 12189.99,
        "PLN (zł)": 26717.84,
        "RUB (RUB)": 416001.11,
        "SEK (kr)": 60000.02,
        "SGD ($)": 10016.97,
        "THB (฿)": 230183.34,
        "TWD (NT$)": 219596.24
    }
}</code></pre>

                    <p>
                        <span class="codesnip">BTC</span> can be replaced with almost any crypto currency symbol.
                        Data is provided by
                        <a href="https://www.cryptocompare.com/" target="_blank">CryptoCompare.com</a>.
                    </p>
                </section>
                <section class="command-section" id="email-address">

                    <h2>Email Address Information</h2>

                    <p>
                        Returns information about an email address
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>john.doe@10minutemail.com</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Email Query",
    "data": {
        "Valid MX Records": true,
        "Free Provider": false,
        "Disposable Email": true,
        "Business/Role Email": false,
        "Valid Host": true
    }
}
</code></pre>

                </section>
                <section class="command-section" id="ip-address">

                    <h2>IP Address Information </h2>

                    <p>
                        Returns geo-location and ASN/Organisation information related to an IP address.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>8.8.8.8</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "IP Address",
    "data": {
        "Organisation": "Google Inc.",
        "Country": "United States",
        "City": "Mountain View, California",
        "Continent": "North America",
        "Latitude": "37.751",
        "Longitude": "-97.822"
    }
}</code></pre>

                </section>
                <section class="command-section" id="media-information">

                    <h2>Media/URL Information</h2>

                    <p>
                        Returns detailed information about virtually any URL. Supports extracting data
                        from oEmbed, TwitterCards, OpenGraph, LinkPulse, Sailthru Meta-data, HTML and Dublin Core.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>https://vimeo.com/231191863</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Vimeo Url",
    "data": {
        "title": "Low Earth Orbit",
        "description": "Orbital drone movements are theorbits...",
        "url": "https://vimeo.com/231191863",
        "type": "video",
        "tags": [
            "Drone"
            ...
        ],
        "image": "https://i.vimeocdn.com/video/651947838_640.jpg",
        "imageWidth": 640,
        "imageHeight": 360,
        "code": "[embed code...]",
        "width": 640,
        "height": 360,
        "authorName": "Visual Suspect",
        "authorUrl": "https://vimeo.com/vsuspect",
        "providerName": "Vimeo",
        "providerUrl": "https://vimeo.com/",
        .......
}</code></pre>
                </section>
                <section class="command-section" id="client-information">

                    <h2>Client Information</h2>

                    <p>
                        Returns information about the person/machine making the request.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>me</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Client Query",
    "data": {
        "User Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36",
        "IP Address": "172.23.0.1",
        "Browser": "Chrome Dev 62.0.3202.75",
        "Operating System": "Linux",
        "IP Address Information": {
            "Organisation": "Liberty Global Operations B.V.",
            "Country": "Ireland",
            "Continent": "Europe",
            "Latitude": "53.3472",
            "Longitude": "-6.2439"
        }
    }
}</code></pre>

                </section>
                <section class="command-section" id="datatime-information">

                    <h2>Date/Time Information</h2>

                    <p>
                        Returns information about the current <span class="codesnip">UTC</span> date and time.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>time</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Date/Time Information (UTC)",
    "data": {
        "Day": "03",
        "Month": "11",
        "Year": "2017",
        "Hour": "16",
        "Minutes": "11",
        "Seconds": "22",
        "Day Name": "Friday",
        "Month Name": "November",
        "AM/PM": "pm",
        "Unix Epoch": 1509728122,
        "Formatted Date": "Fri, 03 Nov 2017 16:55:22 +0000"
    }
}</code></pre>

                </section>
                <section class="command-section" id="programming-lang-information">
                    <h2>Programming Language Links</h2>

                    <p>
                        Returns useful and up-to-date links for programming languages.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>PHP</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "PHP Query",
    "data": {
        "documentation": "http://php.net/docs.php",
        "links": {
            "Awesome PHP": "https://github.com/ziadoz/awesome-php",
            "PHP The Right Way": "http://www.phptherightway.com",
            "Docker Repository": "https://hub.docker.com/_/php/",
            "PHP Fig": "http://www.php-fig.org/",
            "PHP Security": "http://phpsecurity.readthedocs.io/en/latest/index.html"
        }
    }
}</code></pre>

                </section>
                <section class="command-section" id="country-information">
                    <h2>Country Information</h2>

                    <p>
                        Returns useful information about a given country.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>Ireland</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Country Query",
    "data": {
        "Common Name": "Ireland",
        "Official Name": "Republic of Ireland",
        "Top Level Domain": ".ie",
        "Currency": "EUR",
        "Calling Code": "+353",
        "CapitalCity": "Dublin",
        "Region": "Europe",
        "Sub Region": "Northern Europe",
        "Latitude": 53,
        "Longitude": -8,
        "Demonym": "Irish",
        "Is Landlocked?": "No",
        "Area km²": 70273,
        "Official Languages": [
            "English",
            "Irish"
        ]
    }
}</code></pre>

                </section>
                <section class="command-section" id="domain-name-information">
                    <h2>Domain Whois / DNS information</h2>

                    <p>
                        Returns whois and DNS information for a given domain.
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>google.com</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Country Query",
    "data": {
        "Common Name": "Ireland",
        "Official Name": "Republic of Ireland",
        "Top Level Domain": ".ie",
        "Currency": "EUR",
        "Calling Code": "+353",
        "CapitalCity": "Dublin",
        "Region": "Europe",
        "Sub Region": "Northern Europe",
        "Latitude": 53,
        "Longitude": -8,
        "Demonym": "Irish",
        "Is Landlocked?": "No",
        "Area km²": 70273,
        "Official Languages": [
            "English",
            "Irish"
        ]
    }
}</code></pre>

                </section>
                <section class="command-section" id="popular-emojis">
                    <h2>Popular Emojis</h2>

                    <p>
                        Returns a selection of popular unicode emojis
                    </p>

                    <h3>Example Request</h3>
                    <pre class="highlight shell"><code>$ curl cli.fyi/<b>emojis</b></code></pre>

                    <h3>Example Response</h3>
                    <pre class="highlight json"><code>{
    "type": "Emoji",
    "data": {
        "Hugging face": "🤗",
        "Tears of joy": "😂",
        "Grinning Face": "😀",
        "ROFL": "🤣",
        "Smiling": "😊",
        "Tongue out": "😋",
        "Kissing Face": "😘",
        "Thinking": "🤔",
        "Neutral Face": "😐"
    }
}</code></pre>

                </section>
                <h1>General Information</h1>
                <section class="command-section" id="faq">
                    <h2>FAQ</h2>
                    <h3>Why?</h3>
                    <p>
                        <b>cli.fyi</b>'s goal is to create a quick an easy way to fetch information
                        about IPs, emails, domains etc. directly from the command line.
                    </p>
                    <h3>Colourised Output?</h3>
                    <p>
                        Unfortunately Curl currently doesn't support colourised output<sup>1</sup>.
                        <a href="https://github.com/jakubroztocil/httpie" target="_blank">HTTPie</a>
                        is a good alternative which does support colour output.
                    </p>

                    <h3>Rate Limits?</h3>
                    <p>
                        There is no rate limit, however we will block any IP which is abusing the service. If you
                        need to make a significant number of requests you can always
                        <a target="_blank" href="https://github.com/daveearley/cli.fyi">host your own version</a>.
                    </p>
                    <h3>Who?</h3>
                    <p>
                        <b>cli.fyi</b> is developed by <a href="mailto:dave+cli.fyi@earley.email">Dave Earley</a>
                    </p>

                    <p class="is-size-7">
                        <sup>1</sup> To the best of my knowledge, please
                        <a href="mailto:dave+cli.fyi@earley.email">correct me</a> if I'm wrong.
                    </p>
                </section>
                <section class="command-section" id="credits">
                    <h2>Credits</h2>
                    <p>
                        <b>Cli.fyi</b> relies on the following services & projects for its data:
                    </p>
                    <p>
                    <ul>
                        <li>
                            <a target="_blank" href="https://github.com/mledoze/countries">Country Data</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.maxmind.com/en/geoip2-isp-database">IP Data</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/oscarotero/Embed">Media/URL Data</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://cryptocompare.com/">Crypto Currency Data</a>
                        </li>
                    </ul>
                    </p>
                </section>
                <section class="command-section" id="terms-of-use">
                    <h2>Terms of Service</h2>
                    <p>
                        Cli.fyi is provided as-is. Cli.fyi makes no guarantees about the quality of the service or
                        the accuracy of data provided by the service.
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<a class="toTop" href="#available-commands">
    ^ Back To Top
</a>
</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="/assets/vendor/zepto.min.js"></script>
<script src="/assets/vendor/jquery.sticky-sidebar.min.js"></script>
<script src="/assets/app.js"></script>
</html>