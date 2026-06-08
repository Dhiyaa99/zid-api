<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.10.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.10.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-products">
                                <a href="#endpoints-GETapi-zid-merchant-products">GET api/zid/merchant/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-products--id-">
                                <a href="#endpoints-GETapi-zid-merchant-products--id-">GET api/zid/merchant/products/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-products--id--vouchers">
                                <a href="#endpoints-GETapi-zid-merchant-products--id--vouchers">GET api/zid/merchant/products/{id}/vouchers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-products--id--images">
                                <a href="#endpoints-GETapi-zid-merchant-products--id--images">GET api/zid/merchant/products/{id}/images</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-categories">
                                <a href="#endpoints-GETapi-zid-merchant-categories">GET api/zid/merchant/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-categories--id-">
                                <a href="#endpoints-GETapi-zid-merchant-categories--id-">GET api/zid/merchant/categories/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-orders">
                                <a href="#endpoints-GETapi-zid-merchant-orders">GET api/zid/merchant/orders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-orders--id-">
                                <a href="#endpoints-GETapi-zid-merchant-orders--id-">GET api/zid/merchant/orders/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-carts">
                                <a href="#endpoints-GETapi-zid-merchant-carts">GET api/zid/merchant/carts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-carts--id-">
                                <a href="#endpoints-GETapi-zid-merchant-carts--id-">GET api/zid/merchant/carts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-shipping-methods">
                                <a href="#endpoints-GETapi-zid-merchant-shipping-methods">GET api/zid/merchant/shipping-methods</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-reviews--type-">
                                <a href="#endpoints-GETapi-zid-merchant-reviews--type-">GET api/zid/merchant/reviews/{type}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-badges">
                                <a href="#endpoints-GETapi-zid-merchant-badges">GET api/zid/merchant/badges</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-attributes">
                                <a href="#endpoints-GETapi-zid-merchant-attributes">GET api/zid/merchant/attributes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-attributes--id-">
                                <a href="#endpoints-GETapi-zid-merchant-attributes--id-">GET api/zid/merchant/attributes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-customers">
                                <a href="#endpoints-GETapi-zid-merchant-customers">GET api/zid/merchant/customers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-customers--id-">
                                <a href="#endpoints-GETapi-zid-merchant-customers--id-">GET api/zid/merchant/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-zid-merchant-customers">
                                <a href="#endpoints-POSTapi-zid-merchant-customers">POST api/zid/merchant/customers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-zid-merchant-customers--id-">
                                <a href="#endpoints-PUTapi-zid-merchant-customers--id-">PUT api/zid/merchant/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-zid-merchant-customers--id-">
                                <a href="#endpoints-DELETEapi-zid-merchant-customers--id-">DELETE api/zid/merchant/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-coupons">
                                <a href="#endpoints-GETapi-zid-merchant-coupons">GET api/zid/merchant/coupons</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-coupons--id-">
                                <a href="#endpoints-GETapi-zid-merchant-coupons--id-">GET api/zid/merchant/coupons/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-merchant-bundle-offers">
                                <a href="#endpoints-GETapi-zid-merchant-bundle-offers">GET api/zid/merchant/bundle-offers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-storefront-test-session">
                                <a href="#endpoints-GETapi-zid-storefront-test-session">Test Session</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-zid-storefront-cart">
                                <a href="#endpoints-GETapi-zid-storefront-cart">Get Cart</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-zid-storefront-cart-items">
                                <a href="#endpoints-POSTapi-zid-storefront-cart-items">POST api/zid/storefront/cart/items</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-zid-storefront-cart-items--itemId-">
                                <a href="#endpoints-PATCHapi-zid-storefront-cart-items--itemId-">PATCH api/zid/storefront/cart/items/{itemId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-zid-storefront-cart-items--itemId-">
                                <a href="#endpoints-DELETEapi-zid-storefront-cart-items--itemId-">DELETE api/zid/storefront/cart/items/{itemId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-zid-storefront-cart-coupons">
                                <a href="#endpoints-POSTapi-zid-storefront-cart-coupons">POST api/zid/storefront/cart/coupons</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-store-branding">
                                <a href="#endpoints-GETapi-store-branding">GET api/store/branding</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-store-localization">
                                <a href="#endpoints-GETapi-store-localization">GET api/store/localization</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 8, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=utf-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;body&gt;
&lt;script src=&quot;oauth2-redirect.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-products">GET api/zid/merchant/products</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;total_products_count&quot;: 409,
        &quot;normal_products_count&quot;: 409,
        &quot;voucher_products_count&quot;: 0,
        &quot;grouped_products_count&quot;: 0,
        &quot;downloadable_products_count&quot;: 0,
        &quot;dynamic_bundle_products_count&quot;: 0,
        &quot;donation_item_count&quot;: 0,
        &quot;crowd_funding_count&quot;: 0,
        &quot;next&quot;: &quot;http://api.zid.sa/v1/products/?page=2&quot;,
        &quot;previous&quot;: null,
        &quot;count&quot;: 409,
        &quot;results&quot;: [
            {
                &quot;id&quot;: &quot;fe5d9a45-5cb2-4022-8d1e-92de290db7d8&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;PA0448JU&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;أمواج ديسيشن 100مل&quot;,
                    &quot;en&quot;: &quot;Amouage Decision 100ml &quot;
                },
                &quot;slug&quot;: &quot;amouage-decision-100ml-edp&quot;,
                &quot;price&quot;: 140,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;div style=\&quot;box-sizing: inherit; margin: 0px; color: rgba(18, 18, 18, 0.75); font-family: GraphikArabic-Light; font-size: 16px; background-color: #ffffff;\&quot;&gt;\n&lt;p&gt;عطر | منعش | خشبي | فواح&lt;/p&gt;\n&lt;/div&gt;\n&lt;div id=\&quot;price-template--20989753884964__main\&quot; class=\&quot;no-js-hidden\&quot; style=\&quot;box-sizing: inherit; margin: 0px; color: rgba(18, 18, 18, 0.75); font-family: GraphikArabic-Light; font-size: 16px; background-color: #ffffff;\&quot; role=\&quot;status\&quot;&gt;\n&lt;div class=\&quot;\n    am-price\n    price\n      price--large\&quot; style=\&quot;box-sizing: inherit; font-size: 1.8rem; letter-spacing: 0.13rem; line-height: 1.5; color: #121212; margin-bottom: 32px; padding-bottom: 16px; position: relative; border-bottom: 1px solid #dbdbdb; margin-top: 32px !important;\&quot;&gt;\n&lt;div class=\&quot;am-price__container price__container\&quot; style=\&quot;box-sizing: inherit; display: inline-block; vertical-align: top; justify-content: right; align-items: center; margin-bottom: 0.5rem;\&quot;&gt;\n&lt;div class=\&quot;am-price__price__regular price__regular\&quot; style=\&quot;box-sizing: inherit;\&quot;&gt;&nbsp;&lt;/div&gt;\n&lt;/div&gt;\n&lt;/div&gt;\n&lt;/div&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;div style=\&quot;box-sizing: inherit; margin: 0px; color: rgba(18, 18, 18, 0.75); font-family: Gotham-Book; font-size: 16px; letter-spacing: 0.6px; background-color: #ffffff;\&quot;&gt;\n&lt;p&gt;EDP | Fresh | Woody | Aromatic&lt;/p&gt;\n&lt;/div&gt;\n&lt;div id=\&quot;price-template--20989753884964__main\&quot; class=\&quot;no-js-hidden\&quot; style=\&quot;box-sizing: inherit; margin: 0px; color: rgba(18, 18, 18, 0.75); font-family: Gotham-Book; font-size: 16px; letter-spacing: 0.6px; background-color: #ffffff;\&quot; role=\&quot;status\&quot;&gt;\n&lt;div class=\&quot;\n    am-price\n    price\n      price--large\&quot; style=\&quot;box-sizing: inherit; font-size: 1.8rem; letter-spacing: 0.13rem; line-height: 1.5; color: #121212; margin-bottom: 32px; padding-bottom: 16px; position: relative; border-bottom: 1px solid #dbdbdb; margin-top: 32px !important;\&quot;&gt;\n&lt;div class=\&quot;am-price__container price__container\&quot; style=\&quot;box-sizing: inherit; display: inline-block; vertical-align: top; justify-content: left; align-items: center; margin-bottom: 0.5rem;\&quot;&gt;\n&lt;div class=\&quot;am-price__price__regular price__regular\&quot; style=\&quot;box-sizing: inherit;\&quot;&gt;&nbsp;&lt;/div&gt;\n&lt;/div&gt;\n&lt;/div&gt;\n&lt;/div&gt;&quot;
                },
                &quot;sale_price&quot;: 120,
                &quot;formatted_price&quot;: &quot; SAR 140.00&quot;,
                &quot;formatted_sale_price&quot;: &quot; SAR 120.00&quot;,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531817&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;عطور&quot;,
                            &quot;en&quot;: &quot;Perfumes&quot;
                        },
                        &quot;slug&quot;: &quot;عطور&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/fcad02c0-d232-44b3-9ed8-487a7fe2fa0f.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531818&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;عطور رجالية&quot;,
                            &quot;en&quot;: &quot;Men&#039;s Perfumes&quot;
                        },
                        &quot;slug&quot;: &quot;عطور-رجالية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;مجموعة مختارة من عطور الرجال تجمع بين القوة والأناقة. استكشف روائح خشبية وتوابل وعطور عطرية مصممة للرجل العصري. مثالية للثقة والجاذبية التي تدوم.&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 1,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;603f1945-cc58-48e1-a226-e288091a9969&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/603f1945-cc58-48e1-a226-e288091a9969-thumbnail-1000x1000-70.webp&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/603f1945-cc58-48e1-a226-e288091a9969-thumbnail-1000x1000-70.webp&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/603f1945-cc58-48e1-a226-e288091a9969-thumbnail-370x370-70.webp&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/603f1945-cc58-48e1-a226-e288091a9969-thumbnail-770x770-70.webp&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/603f1945-cc58-48e1-a226-e288091a9969-thumbnail-500x500-70.webp&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;383fad18-514d-48b5-842e-8d96d6aa9f83&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/383fad18-514d-48b5-842e-8d96d6aa9f83-thumbnail-1000x1000-70.webp&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/383fad18-514d-48b5-842e-8d96d6aa9f83-thumbnail-1000x1000-70.webp&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/383fad18-514d-48b5-842e-8d96d6aa9f83-thumbnail-370x370-70.webp&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/383fad18-514d-48b5-842e-8d96d6aa9f83-thumbnail-770x770-70.webp&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/383fad18-514d-48b5-842e-8d96d6aa9f83-thumbnail-500x500-70.webp&quot;
                        },
                        &quot;alt_text&quot;: &quot;عطر امواج ديسيشن&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;عطر امواج ديسيشن&quot;,
                            &quot;en&quot;: &quot;Amouage Decision Bottle&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;250b0b3d-0bcf-458d-9bf9-238eecb64745&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/250b0b3d-0bcf-458d-9bf9-238eecb64745-thumbnail-1000x1000-70.webp&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/250b0b3d-0bcf-458d-9bf9-238eecb64745-thumbnail-1000x1000-70.webp&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/250b0b3d-0bcf-458d-9bf9-238eecb64745-thumbnail-370x370-70.webp&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/250b0b3d-0bcf-458d-9bf9-238eecb64745-thumbnail-770x770-70.webp&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/250b0b3d-0bcf-458d-9bf9-238eecb64745-thumbnail-500x500-70.webp&quot;
                        },
                        &quot;alt_text&quot;: &quot;امواج ديسيشن خلفية&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;امواج ديسيشن خلفية&quot;,
                            &quot;en&quot;: &quot;Amouage decision background&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 0,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/amouage-decision-100ml-edp&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: null,
                    &quot;unit&quot;: &quot;kg&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: {
                    &quot;title&quot;: {
                        &quot;ar&quot;: &quot;&quot;,
                        &quot;en&quot;: &quot;&quot;
                    },
                    &quot;description&quot;: {
                        &quot;ar&quot;: &quot;تتفتح نغمات عطر &rsquo;ديسيشن&lsquo; بحدة خاطفة كصاعقة عطرية تضيء العتمة وتبدد حالة عدم اليقين. ويتغلغل هذا التأثير &rlm;عبر مزيج من البرغموت وتوت العلعلان واللبان والمر. ويضفي&quot;,
                        &quot;en&quot;: &quot;Starting with an olfactory bolt of lightning, Decision banishes the darkness of uncertainty &ndash; an effect achieved through a combination of the cool woodiness and&quot;
                    }
                },
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 0,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;c80756b4-20ad-4903-8c6a-2fd20e78485c&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 0,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:42.468957Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:42.468996Z&quot;
            },
            {
                &quot;id&quot;: &quot;eb5d9205-febf-42b2-aea3-eff70b92b293&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;WM0297WL&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;مايكل أنجلو 03ZA- النسائية&quot;,
                    &quot;en&quot;: &quot;Michael Angelo 03ZA- Women&rsquo;s &quot;
                },
                &quot;slug&quot;: &quot;Michael-Angelo-Grand-Royale-Classic-Women_WM0297WL&quot;,
                &quot;price&quot;: 59,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;مجموعة مايكل انجلو رويال جراند كلاسيك الفضية&nbsp;&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;Michael Angelo Grand Royale Classic Silver Series&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 59.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [
                    {
                        &quot;id&quot;: &quot;17374231-4cf8-4174-96e4-4fc1a42a602d&quot;,
                        &quot;slug&quot;: &quot;ar-لون-السوار-en-strap-color&quot;,
                        &quot;name&quot;: &quot;strap-color&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;فضــي&quot;,
                            &quot;en&quot;: &quot;silver&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;eb5d9205-febf-42b2-aea3-eff70b92b293&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;5b5e1aa3-6f45-4c3f-bb15-781c5c7d5603&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    }
                ],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531820&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ساعات&quot;,
                            &quot;en&quot;: &quot;Watches&quot;
                        },
                        &quot;slug&quot;: &quot;ساعات&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/eeca196c-ebdf-4f1c-aa06-0aa700080413.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531821&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ساعات نسائية&quot;,
                            &quot;en&quot;: &quot;Women Watches&quot;
                        },
                        &quot;slug&quot;: &quot;ساعات-نسائية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531823&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531824&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ساعات- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Watches- Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;ساعات-مايكل-آنجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531825&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو (س.ن)&quot;,
                            &quot;en&quot;: &quot;Michael Angelo (w.w)&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو-سن&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 2,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;f319bb96-41b6-41a5-a0be-b6935a11c2f6&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f319bb96-41b6-41a5-a0be-b6935a11c2f6-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f319bb96-41b6-41a5-a0be-b6935a11c2f6-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f319bb96-41b6-41a5-a0be-b6935a11c2f6-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f319bb96-41b6-41a5-a0be-b6935a11c2f6-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f319bb96-41b6-41a5-a0be-b6935a11c2f6-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;8fc16db0-0171-46d3-a850-902e1bb54912&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8fc16db0-0171-46d3-a850-902e1bb54912-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8fc16db0-0171-46d3-a850-902e1bb54912-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8fc16db0-0171-46d3-a850-902e1bb54912-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8fc16db0-0171-46d3-a850-902e1bb54912-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8fc16db0-0171-46d3-a850-902e1bb54912-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;80f240b2-df0e-4bca-b1d1-f01202e2d26a&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80f240b2-df0e-4bca-b1d1-f01202e2d26a-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80f240b2-df0e-4bca-b1d1-f01202e2d26a-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80f240b2-df0e-4bca-b1d1-f01202e2d26a-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80f240b2-df0e-4bca-b1d1-f01202e2d26a-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80f240b2-df0e-4bca-b1d1-f01202e2d26a-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;7f500cbe-06df-48ae-84df-2e0a8793015b&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7f500cbe-06df-48ae-84df-2e0a8793015b-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7f500cbe-06df-48ae-84df-2e0a8793015b-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7f500cbe-06df-48ae-84df-2e0a8793015b-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7f500cbe-06df-48ae-84df-2e0a8793015b-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7f500cbe-06df-48ae-84df-2e0a8793015b-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;821d81a0-978c-4571-8134-dc5ebd69aca4&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/821d81a0-978c-4571-8134-dc5ebd69aca4-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/821d81a0-978c-4571-8134-dc5ebd69aca4-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/821d81a0-978c-4571-8134-dc5ebd69aca4-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/821d81a0-978c-4571-8134-dc5ebd69aca4-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/821d81a0-978c-4571-8134-dc5ebd69aca4-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;4f23cdd5-fa3c-455a-bd2c-7919eb892ff4&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4f23cdd5-fa3c-455a-bd2c-7919eb892ff4-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4f23cdd5-fa3c-455a-bd2c-7919eb892ff4-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4f23cdd5-fa3c-455a-bd2c-7919eb892ff4-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4f23cdd5-fa3c-455a-bd2c-7919eb892ff4-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4f23cdd5-fa3c-455a-bd2c-7919eb892ff4-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;0e6aa13c-8df0-40a3-8565-ccba2fd4c98b&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/0e6aa13c-8df0-40a3-8565-ccba2fd4c98b-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/0e6aa13c-8df0-40a3-8565-ccba2fd4c98b-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/0e6aa13c-8df0-40a3-8565-ccba2fd4c98b-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/0e6aa13c-8df0-40a3-8565-ccba2fd4c98b-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/0e6aa13c-8df0-40a3-8565-ccba2fd4c98b-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 7,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 30,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/Michael-Angelo-Grand-Royale-Classic-Women_WM0297WL&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 730,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 29.405,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;864b0a50-3a80-4c52-86b0-6b7baffd17cd&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 30,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:43.103437Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:43.103474Z&quot;
            },
            {
                &quot;id&quot;: &quot;6597bcef-36dd-4326-84d1-3b3d77237b9d&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;BM0320LG&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;مايكل انجلو- مجموعة الخليج GCC01&quot;,
                    &quot;en&quot;: &quot;Michael Angelo - Gulf Collection GCC01&quot;
                },
                &quot;slug&quot;: &quot;Michael-Angelo---Gulf-Collection-GCC01&quot;,
                &quot;price&quot;: 55,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;تجمع حقيبة &nbsp;&lt;strong&gt;GCC01&lt;/strong&gt; من مايكل انجلو &nbsp;بين التصميم الخالد والتفاصيل المستوحاة من التراث الخليجي.&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;The &lt;strong&gt;GCC01&lt;/strong&gt; bag by Michael Angelo combines timeless design with details inspired by Gulf heritage.&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 55.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [
                    {
                        &quot;id&quot;: &quot;c618ee96-0387-4e79-9c46-c249968020e3&quot;,
                        &quot;slug&quot;: &quot;ar-مــادة-الحقيبـة-en-bag-material&quot;,
                        &quot;name&quot;: &quot;Bag-Material&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;جلـد&quot;,
                            &quot;en&quot;: &quot;Leather&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;6597bcef-36dd-4326-84d1-3b3d77237b9d&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;159b0664-27b0-44bf-a668-a0011e45737e&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    },
                    {
                        &quot;id&quot;: &quot;faf7693c-51ff-4331-abbf-1893411e04cf&quot;,
                        &quot;slug&quot;: &quot;ar-حجـم-الحقيـبة-en-bag-size&quot;,
                        &quot;name&quot;: &quot;Bag-Size&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;L&quot;,
                            &quot;en&quot;: &quot;L&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;6597bcef-36dd-4326-84d1-3b3d77237b9d&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;ad8767e1-3c30-44cc-8a76-9ac35317d43d&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    }
                ],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531823&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531826&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب ومحافظ&quot;,
                            &quot;en&quot;: &quot;Bags &amp; Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-ومحافظ&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/ab21785c-668f-41bc-8286-1eb6d45fdc97.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531827&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب&quot;,
                            &quot;en&quot;: &quot;Bags&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531828&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب نسائية&quot;,
                            &quot;en&quot;: &quot;Women &#039;s Bags&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-نسائية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531829&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;للمـرأة&quot;,
                            &quot;en&quot;: &quot;For Women&quot;
                        },
                        &quot;slug&quot;: &quot;للمـرأة&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/197ee521-02b6-44ee-884e-1af27303bff7.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531830&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;لصديـق&quot;,
                            &quot;en&quot;: &quot;Friend&quot;
                        },
                        &quot;slug&quot;: &quot;لصديـق&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/2109464b-abb4-4ed5-8d44-a07bc769b2b9.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531831&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;خصومات ⚡️&quot;,
                            &quot;en&quot;: &quot;Hot Deals ⚡️&quot;
                        },
                        &quot;slug&quot;: &quot;خصومات&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531832&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Bags- Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-مايكل-آنجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531833&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو (ح.ن)&quot;,
                            &quot;en&quot;: &quot;Michael Angelo (w.b)&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو-حن&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 3,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;47257403-f23b-46c0-995a-5c18129dbaa3&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/47257403-f23b-46c0-995a-5c18129dbaa3-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/47257403-f23b-46c0-995a-5c18129dbaa3-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/47257403-f23b-46c0-995a-5c18129dbaa3-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/47257403-f23b-46c0-995a-5c18129dbaa3-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/47257403-f23b-46c0-995a-5c18129dbaa3-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;4c761bcb-ce61-4fdf-bfac-25004201a64e&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c761bcb-ce61-4fdf-bfac-25004201a64e-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c761bcb-ce61-4fdf-bfac-25004201a64e-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c761bcb-ce61-4fdf-bfac-25004201a64e-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c761bcb-ce61-4fdf-bfac-25004201a64e-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c761bcb-ce61-4fdf-bfac-25004201a64e-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;5e3c12c9-5943-4557-83fe-e2d422e65d3a&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3c12c9-5943-4557-83fe-e2d422e65d3a-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3c12c9-5943-4557-83fe-e2d422e65d3a-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3c12c9-5943-4557-83fe-e2d422e65d3a-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3c12c9-5943-4557-83fe-e2d422e65d3a-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3c12c9-5943-4557-83fe-e2d422e65d3a-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;325eb8c0-d4c9-4fc4-a17c-87e3ce3e647c&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/325eb8c0-d4c9-4fc4-a17c-87e3ce3e647c-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/325eb8c0-d4c9-4fc4-a17c-87e3ce3e647c-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/325eb8c0-d4c9-4fc4-a17c-87e3ce3e647c-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/325eb8c0-d4c9-4fc4-a17c-87e3ce3e647c-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/325eb8c0-d4c9-4fc4-a17c-87e3ce3e647c-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;2e4d7f4d-8259-4c96-b81f-7aade3477c11&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e4d7f4d-8259-4c96-b81f-7aade3477c11-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e4d7f4d-8259-4c96-b81f-7aade3477c11-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e4d7f4d-8259-4c96-b81f-7aade3477c11-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e4d7f4d-8259-4c96-b81f-7aade3477c11-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e4d7f4d-8259-4c96-b81f-7aade3477c11-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;1e1fc2f2-aacd-431b-8d11-9ae733831c11&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1e1fc2f2-aacd-431b-8d11-9ae733831c11-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1e1fc2f2-aacd-431b-8d11-9ae733831c11-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1e1fc2f2-aacd-431b-8d11-9ae733831c11-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1e1fc2f2-aacd-431b-8d11-9ae733831c11-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1e1fc2f2-aacd-431b-8d11-9ae733831c11-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;ec801fe7-95fa-43e5-811c-381796c6cb9e&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ec801fe7-95fa-43e5-811c-381796c6cb9e-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ec801fe7-95fa-43e5-811c-381796c6cb9e-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ec801fe7-95fa-43e5-811c-381796c6cb9e-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ec801fe7-95fa-43e5-811c-381796c6cb9e-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ec801fe7-95fa-43e5-811c-381796c6cb9e-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 7,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 53,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/Michael-Angelo---Gulf-Collection-GCC01&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 1180,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 22.264,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;9c3f5eef-374f-4d89-8c80-e7e0edd10978&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 53,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:43.860925Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:43.860967Z&quot;
            },
            {
                &quot;id&quot;: &quot;610bdff0-e9c5-4477-976f-cdaa478dfe4c&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;LM0375MB&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot; مايكل انجلو- محفظة نسائية Y2&quot;,
                    &quot;en&quot;: &quot;Michael Angelo - Women&#039;s Wallet Y2&quot;
                },
                &quot;slug&quot;: &quot;michael-angelo-mens-wallet-black-3&quot;,
                &quot;price&quot;: 13,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;محفظة Y2 للجنسين من مايكل انجلو تتميز بتصميمات عصرية.&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;Michael Angelo Y2 Unisex Wallet featuring modern designs.&lt;/p&gt;\n&lt;p&gt;&nbsp;&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 13.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531823&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531826&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب ومحافظ&quot;,
                            &quot;en&quot;: &quot;Bags &amp; Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-ومحافظ&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/ab21785c-668f-41bc-8286-1eb6d45fdc97.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531832&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Bags- Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-مايكل-آنجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531834&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;محافظ&quot;,
                            &quot;en&quot;: &quot;Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;محافظ&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531835&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;محافظ نسائية&quot;,
                            &quot;en&quot;: &quot;Women &#039;s Walets&quot;
                        },
                        &quot;slug&quot;: &quot;محافظ-نسائية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531836&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;محافظ مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;محافظ-مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 4,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;04cab666-3f64-49cb-bc7b-1121fb661232&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/04cab666-3f64-49cb-bc7b-1121fb661232-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/04cab666-3f64-49cb-bc7b-1121fb661232-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/04cab666-3f64-49cb-bc7b-1121fb661232-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/04cab666-3f64-49cb-bc7b-1121fb661232-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/04cab666-3f64-49cb-bc7b-1121fb661232-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;9ac300dd-6048-425c-9729-af37bd14761d&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9ac300dd-6048-425c-9729-af37bd14761d-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9ac300dd-6048-425c-9729-af37bd14761d-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9ac300dd-6048-425c-9729-af37bd14761d-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9ac300dd-6048-425c-9729-af37bd14761d-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9ac300dd-6048-425c-9729-af37bd14761d-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;86f94ed5-eb3f-421f-8217-74af8f8dbdb6&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/86f94ed5-eb3f-421f-8217-74af8f8dbdb6-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/86f94ed5-eb3f-421f-8217-74af8f8dbdb6-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/86f94ed5-eb3f-421f-8217-74af8f8dbdb6-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/86f94ed5-eb3f-421f-8217-74af8f8dbdb6-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/86f94ed5-eb3f-421f-8217-74af8f8dbdb6-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;c04827c1-b048-4bed-bf82-53f1d103a572&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c04827c1-b048-4bed-bf82-53f1d103a572-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c04827c1-b048-4bed-bf82-53f1d103a572-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c04827c1-b048-4bed-bf82-53f1d103a572-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c04827c1-b048-4bed-bf82-53f1d103a572-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c04827c1-b048-4bed-bf82-53f1d103a572-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;2be92158-0b2c-4060-99ab-22d3266de1ed&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2be92158-0b2c-4060-99ab-22d3266de1ed-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2be92158-0b2c-4060-99ab-22d3266de1ed-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2be92158-0b2c-4060-99ab-22d3266de1ed-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2be92158-0b2c-4060-99ab-22d3266de1ed-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2be92158-0b2c-4060-99ab-22d3266de1ed-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;af67117d-4158-4252-9db1-6f6bbe55ef4f&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/af67117d-4158-4252-9db1-6f6bbe55ef4f-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/af67117d-4158-4252-9db1-6f6bbe55ef4f-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/af67117d-4158-4252-9db1-6f6bbe55ef4f-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/af67117d-4158-4252-9db1-6f6bbe55ef4f-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/af67117d-4158-4252-9db1-6f6bbe55ef4f-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 200,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/michael-angelo-mens-wallet-black-3&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 54,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 3.721,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;62bca8e1-503b-42a7-950d-6468032cfb4c&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 200,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:45.177274Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:45.177329Z&quot;
            },
            {
                &quot;id&quot;: &quot;86577712-2e91-415e-bb44-15246ddcac43&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;PC0422HW&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;جود جيرل بلش أو دو بارفان 80ML&quot;,
                    &quot;en&quot;: &quot;CH Good Girl Blush Edp 80ML&quot;
                },
                &quot;slug&quot;: &quot;جود-جيرل-بلش-أو-دو-بارفان-80ml&quot;,
                &quot;price&quot;: 68,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;يُعد عطر&nbsp;جود جيرل بلش أو دو بارفان تعبيرًا أنثويًا جذابًا يمزج بين الأناقة العصرية والجرأة الناعمة، وهو مصمّم للمرأة الواثقة التي تحب التألق والإشراق في كل لحظة.&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;Good Girl Blush Eau de Parfum is an alluring and feminine fragrance that blends modern elegance with subtle boldness.&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: 41,
                &quot;formatted_price&quot;: &quot; SAR 68.00&quot;,
                &quot;formatted_sale_price&quot;: &quot; SAR 41.00&quot;,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [
                    {
                        &quot;id&quot;: &quot;cd7fe441-68c8-4808-8595-277cf47636f2&quot;,
                        &quot;slug&quot;: &quot;ar-السعة-en-volume&quot;,
                        &quot;name&quot;: &quot;Volume&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;80ml&quot;,
                            &quot;en&quot;: &quot;80ml&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;86577712-2e91-415e-bb44-15246ddcac43&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;fcda7ed9-383c-4b09-91cd-e7100d66a192&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    }
                ],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531817&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;عطور&quot;,
                            &quot;en&quot;: &quot;Perfumes&quot;
                        },
                        &quot;slug&quot;: &quot;عطور&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/fcad02c0-d232-44b3-9ed8-487a7fe2fa0f.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531829&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;للمـرأة&quot;,
                            &quot;en&quot;: &quot;For Women&quot;
                        },
                        &quot;slug&quot;: &quot;للمـرأة&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/197ee521-02b6-44ee-884e-1af27303bff7.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531830&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;لصديـق&quot;,
                            &quot;en&quot;: &quot;Friend&quot;
                        },
                        &quot;slug&quot;: &quot;لصديـق&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/2109464b-abb4-4ed5-8d44-a07bc769b2b9.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531831&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;خصومات ⚡️&quot;,
                            &quot;en&quot;: &quot;Hot Deals ⚡️&quot;
                        },
                        &quot;slug&quot;: &quot;خصومات&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531837&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;عطور نسائية&quot;,
                            &quot;en&quot;: &quot;Women&#039;s Perfumes&quot;
                        },
                        &quot;slug&quot;: &quot;عطور-نسائية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;مجموعة مختارة من عطور النساء تجمع بين الرقي الكلاسيكي والجاذبية العصرية. اكتشفي عطورًا زهرية وشرقية وفاكهية تبرز التفرّد وتترك أثرًا لا يُنسى.&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531838&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;الزفاف&quot;,
                            &quot;en&quot;: &quot;Wedding&quot;
                        },
                        &quot;slug&quot;: &quot;الزفاف&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/c89a9aed-2c96-4a82-9158-e7b106b2dc48.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531839&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ذكرى الزواج&quot;,
                            &quot;en&quot;: &quot;Anniversary&quot;
                        },
                        &quot;slug&quot;: &quot;ذكرى-الزواج&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3ab744-84f5-47a5-b42b-2735b27a1e4d.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531840&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان العطور&quot;,
                            &quot;en&quot;: &quot;Perfumes Festival&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-العطور&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 5,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;d089dbe9-bae9-4d7a-8b10-3a5461da0e80&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d089dbe9-bae9-4d7a-8b10-3a5461da0e80-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d089dbe9-bae9-4d7a-8b10-3a5461da0e80-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d089dbe9-bae9-4d7a-8b10-3a5461da0e80-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d089dbe9-bae9-4d7a-8b10-3a5461da0e80-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d089dbe9-bae9-4d7a-8b10-3a5461da0e80-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;ef604975-e106-4e5d-9f16-1c51cd35d156&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef604975-e106-4e5d-9f16-1c51cd35d156-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef604975-e106-4e5d-9f16-1c51cd35d156-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef604975-e106-4e5d-9f16-1c51cd35d156-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef604975-e106-4e5d-9f16-1c51cd35d156-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef604975-e106-4e5d-9f16-1c51cd35d156-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;81263632-f9f3-46c7-b8fe-a333fe5900e8&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/81263632-f9f3-46c7-b8fe-a333fe5900e8-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/81263632-f9f3-46c7-b8fe-a333fe5900e8-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/81263632-f9f3-46c7-b8fe-a333fe5900e8-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/81263632-f9f3-46c7-b8fe-a333fe5900e8-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/81263632-f9f3-46c7-b8fe-a333fe5900e8-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 3,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/جود-جيرل-بلش-أو-دو-بارفان-80ml&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: null,
                    &quot;unit&quot;: &quot;kg&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 0,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;71bed7a9-aa12-4cc4-bde0-eb33df8666fd&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 3,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:45.841363Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:45.841402Z&quot;
            },
            {
                &quot;id&quot;: &quot;f06f05d6-92d0-4387-a822-d879724cee49&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;JL0316SG&quot;,
                &quot;barcode&quot;: &quot;JL0316SG&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;مجموعة النبلاء- طقم ذهبي&quot;,
                    &quot;en&quot;: &quot;Amira Kite Motif Set - Gold Collection &quot;
                },
                &quot;slug&quot;: &quot;amira-kite-motif-set-gold-collection&quot;,
                &quot;price&quot;: 109,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;يجمع طقم النبلاء بين البساطة والفخامة في تصميم عصري مستلهم من الماضي لينطلق بك نحو المستقبل&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;The Noblesse Set combines simplicity and luxury in a contemporary design inspired by the past while looking toward the future.&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 109.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531829&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;للمـرأة&quot;,
                            &quot;en&quot;: &quot;For Women&quot;
                        },
                        &quot;slug&quot;: &quot;للمـرأة&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/197ee521-02b6-44ee-884e-1af27303bff7.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531839&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ذكرى الزواج&quot;,
                            &quot;en&quot;: &quot;Anniversary&quot;
                        },
                        &quot;slug&quot;: &quot;ذكرى-الزواج&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3ab744-84f5-47a5-b42b-2735b27a1e4d.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531841&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حلي ومجوهرات&quot;,
                            &quot;en&quot;: &quot;Jewelry&quot;
                        },
                        &quot;slug&quot;: &quot;حلي-ومجوهرات&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/160fd951-12c6-487e-a2c2-5d5003196fb2.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531842&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;فضة&quot;,
                            &quot;en&quot;: &quot;Silver&quot;
                        },
                        &quot;slug&quot;: &quot;فضة&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 6,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;43d32fa1-be7c-43a7-9ff4-c57a812e6ef7&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/43d32fa1-be7c-43a7-9ff4-c57a812e6ef7-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/43d32fa1-be7c-43a7-9ff4-c57a812e6ef7-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/43d32fa1-be7c-43a7-9ff4-c57a812e6ef7-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/43d32fa1-be7c-43a7-9ff4-c57a812e6ef7-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/43d32fa1-be7c-43a7-9ff4-c57a812e6ef7-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;6d48e651-a737-40ce-9c35-00dbb21079c1&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6d48e651-a737-40ce-9c35-00dbb21079c1-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6d48e651-a737-40ce-9c35-00dbb21079c1-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6d48e651-a737-40ce-9c35-00dbb21079c1-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6d48e651-a737-40ce-9c35-00dbb21079c1-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6d48e651-a737-40ce-9c35-00dbb21079c1-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;ad24379f-25ac-4d71-9fd9-ff9275628f65&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ad24379f-25ac-4d71-9fd9-ff9275628f65-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ad24379f-25ac-4d71-9fd9-ff9275628f65-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ad24379f-25ac-4d71-9fd9-ff9275628f65-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ad24379f-25ac-4d71-9fd9-ff9275628f65-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ad24379f-25ac-4d71-9fd9-ff9275628f65-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;043aef70-83b8-4f42-8be4-2eff000bc56e&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/043aef70-83b8-4f42-8be4-2eff000bc56e-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/043aef70-83b8-4f42-8be4-2eff000bc56e-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/043aef70-83b8-4f42-8be4-2eff000bc56e-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/043aef70-83b8-4f42-8be4-2eff000bc56e-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/043aef70-83b8-4f42-8be4-2eff000bc56e-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;e551f9ff-51e8-49c9-ab60-c02e1cfbfd16&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e551f9ff-51e8-49c9-ab60-c02e1cfbfd16-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e551f9ff-51e8-49c9-ab60-c02e1cfbfd16-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e551f9ff-51e8-49c9-ab60-c02e1cfbfd16-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e551f9ff-51e8-49c9-ab60-c02e1cfbfd16-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e551f9ff-51e8-49c9-ab60-c02e1cfbfd16-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;ffdcaf8d-0bd0-41b8-a1ca-27946fdf0be2&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ffdcaf8d-0bd0-41b8-a1ca-27946fdf0be2-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ffdcaf8d-0bd0-41b8-a1ca-27946fdf0be2-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ffdcaf8d-0bd0-41b8-a1ca-27946fdf0be2-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ffdcaf8d-0bd0-41b8-a1ca-27946fdf0be2-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ffdcaf8d-0bd0-41b8-a1ca-27946fdf0be2-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;e35fecd8-7faf-42b6-9df5-46adc163aabe&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e35fecd8-7faf-42b6-9df5-46adc163aabe-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e35fecd8-7faf-42b6-9df5-46adc163aabe-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e35fecd8-7faf-42b6-9df5-46adc163aabe-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e35fecd8-7faf-42b6-9df5-46adc163aabe-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e35fecd8-7faf-42b6-9df5-46adc163aabe-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 7,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 50,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/amira-kite-motif-set-gold-collection&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 50.94,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: {
                    &quot;title&quot;: {
                        &quot;ar&quot;: &quot;&quot;,
                        &quot;en&quot;: &quot;&quot;
                    },
                    &quot;description&quot;: {
                        &quot;ar&quot;: &quot;مصنوعة من الفضة الإسترلينية 925 وقطع كريستالية عالية الجودة لتمنحك وهجًا يبرز التألق والجمال. يجمع طقم النبلاء بين البساطة والفخامة في تصميم عصري مستلهم من الما&quot;,
                        &quot;en&quot;: &quot;Crafted from 925 sterling silver and high-quality crystal stones, this set radiates brilliance and enhances your elegance. The Noblesse Set combines simplicity &quot;
                    }
                },
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 46.794,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;82c6858b-cac8-47da-9470-0e771b68753d&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 50,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:47.388320Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:47.388363Z&quot;
            },
            {
                &quot;id&quot;: &quot;bffc10e8-cc2e-4347-938e-b17cd08e2b9d&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;BM0334MB&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;مايكل انجلو - مجموعة الخليج GCC05&quot;,
                    &quot;en&quot;: &quot;Michael Angelo - Gulf Collection GCC05&quot;
                },
                &quot;slug&quot;: &quot;michael-angelo-womens-bag-bluesnake-gold&quot;,
                &quot;price&quot;: 61,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;حقيبة &lt;strong&gt;GCC05&lt;/strong&gt; من مايكل انجلو ، حقيبة باصدارات محدودة ، تتميز بتصميمات عالمية مبتكرة وفريدة وأيقونية، انها ذكية في المظهر وعملية في الاستخدام المريح.&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;The &lt;strong&gt;GCC05&lt;/strong&gt; bag by Michael Angelo is a limited-edition piece, distinguished by innovative, unique, and iconic global designs, offering both refined style and practical comfort.&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 61.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [
                    {
                        &quot;id&quot;: &quot;e7f91cf1-045a-46db-a4a3-16cc60df4b69&quot;,
                        &quot;slug&quot;: &quot;ar-مــادة-الحقيبـة-en-bag-material&quot;,
                        &quot;name&quot;: &quot;Bag-Material&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;جلـد&quot;,
                            &quot;en&quot;: &quot;Leather&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;bffc10e8-cc2e-4347-938e-b17cd08e2b9d&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;159b0664-27b0-44bf-a668-a0011e45737e&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    },
                    {
                        &quot;id&quot;: &quot;5a2cf8bd-3109-454c-8917-8486f7b85d7f&quot;,
                        &quot;slug&quot;: &quot;ar-حجـم-الحقيـبة-en-bag-size&quot;,
                        &quot;name&quot;: &quot;Bag-Size&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;M&quot;,
                            &quot;en&quot;: &quot;M&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;bffc10e8-cc2e-4347-938e-b17cd08e2b9d&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;ad8767e1-3c30-44cc-8a76-9ac35317d43d&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    }
                ],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531823&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531826&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب ومحافظ&quot;,
                            &quot;en&quot;: &quot;Bags &amp; Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-ومحافظ&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/ab21785c-668f-41bc-8286-1eb6d45fdc97.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531827&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب&quot;,
                            &quot;en&quot;: &quot;Bags&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531828&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب نسائية&quot;,
                            &quot;en&quot;: &quot;Women &#039;s Bags&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-نسائية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531832&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Bags- Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-مايكل-آنجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531833&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو (ح.ن)&quot;,
                            &quot;en&quot;: &quot;Michael Angelo (w.b)&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو-حن&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 7,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;bf95f835-e393-42bf-935e-f1e65123e157&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/bf95f835-e393-42bf-935e-f1e65123e157-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/bf95f835-e393-42bf-935e-f1e65123e157-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/bf95f835-e393-42bf-935e-f1e65123e157-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/bf95f835-e393-42bf-935e-f1e65123e157-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/bf95f835-e393-42bf-935e-f1e65123e157-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;e710ab3e-9cbf-40f5-83dd-c937b49e0c69&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e710ab3e-9cbf-40f5-83dd-c937b49e0c69-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e710ab3e-9cbf-40f5-83dd-c937b49e0c69-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e710ab3e-9cbf-40f5-83dd-c937b49e0c69-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e710ab3e-9cbf-40f5-83dd-c937b49e0c69-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e710ab3e-9cbf-40f5-83dd-c937b49e0c69-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;551aa242-a633-4dd9-8e9e-fae429999bc3&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/551aa242-a633-4dd9-8e9e-fae429999bc3-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/551aa242-a633-4dd9-8e9e-fae429999bc3-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/551aa242-a633-4dd9-8e9e-fae429999bc3-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/551aa242-a633-4dd9-8e9e-fae429999bc3-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/551aa242-a633-4dd9-8e9e-fae429999bc3-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;58922a53-1c86-4b34-bf7a-b9173482a46d&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/58922a53-1c86-4b34-bf7a-b9173482a46d-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/58922a53-1c86-4b34-bf7a-b9173482a46d-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/58922a53-1c86-4b34-bf7a-b9173482a46d-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/58922a53-1c86-4b34-bf7a-b9173482a46d-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/58922a53-1c86-4b34-bf7a-b9173482a46d-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;85b3bee5-e3ed-45be-af87-52cfd708ed42&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85b3bee5-e3ed-45be-af87-52cfd708ed42-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85b3bee5-e3ed-45be-af87-52cfd708ed42-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85b3bee5-e3ed-45be-af87-52cfd708ed42-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85b3bee5-e3ed-45be-af87-52cfd708ed42-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85b3bee5-e3ed-45be-af87-52cfd708ed42-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;d753b7ed-41bc-4117-9393-9793426e85a2&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d753b7ed-41bc-4117-9393-9793426e85a2-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d753b7ed-41bc-4117-9393-9793426e85a2-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d753b7ed-41bc-4117-9393-9793426e85a2-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d753b7ed-41bc-4117-9393-9793426e85a2-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d753b7ed-41bc-4117-9393-9793426e85a2-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;050ca03c-4f47-4dab-a1f4-e30a577b8a82&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/050ca03c-4f47-4dab-a1f4-e30a577b8a82-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/050ca03c-4f47-4dab-a1f4-e30a577b8a82-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/050ca03c-4f47-4dab-a1f4-e30a577b8a82-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/050ca03c-4f47-4dab-a1f4-e30a577b8a82-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/050ca03c-4f47-4dab-a1f4-e30a577b8a82-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 7,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;755ec36a-c14a-4bc0-a4b5-958b8ff0334a&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/755ec36a-c14a-4bc0-a4b5-958b8ff0334a-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/755ec36a-c14a-4bc0-a4b5-958b8ff0334a-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/755ec36a-c14a-4bc0-a4b5-958b8ff0334a-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/755ec36a-c14a-4bc0-a4b5-958b8ff0334a-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/755ec36a-c14a-4bc0-a4b5-958b8ff0334a-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 8,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 49,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/michael-angelo-womens-bag-bluesnake-gold&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 780,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 22.566,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;db882c14-9e56-4d8f-ab6a-68acafcd3f0f&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 49,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:48.491640Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:48.491672Z&quot;
            },
            {
                &quot;id&quot;: &quot;76ab0659-e5ee-47eb-a7ad-2e6faa83762f&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;WM0290MD&quot;,
                &quot;barcode&quot;: &quot;WM0290MD&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;مايكل أنجلو 01ZA- ساعة رجالية&quot;,
                    &quot;en&quot;: &quot;Micheal Angelo 01ZA- Men&#039;s Watch&quot;
                },
                &quot;slug&quot;: &quot;michael-angelo-royal-goldcrest-mens-collection-3&quot;,
                &quot;price&quot;: 69,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;مجموعة مايكل أنجلو رويال جولدكريست الرجالية&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;Michael Angelo Royal Goldcrest Men&#039;s Collection&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 69.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [
                    {
                        &quot;id&quot;: &quot;16d69c9a-d40f-4843-9851-38285a704a56&quot;,
                        &quot;slug&quot;: &quot;ar-لون-السوار-en-strap-color&quot;,
                        &quot;name&quot;: &quot;strap-color&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;فضــي&quot;,
                            &quot;en&quot;: &quot;silver&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;76ab0659-e5ee-47eb-a7ad-2e6faa83762f&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;5b5e1aa3-6f45-4c3f-bb15-781c5c7d5603&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    },
                    {
                        &quot;id&quot;: &quot;678eccd2-31c2-4f07-a4da-e02f98ee1dc2&quot;,
                        &quot;slug&quot;: &quot;ar-لون-المينا-en-dial-color&quot;,
                        &quot;name&quot;: &quot;dial-color&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;أزرق داكن&quot;,
                            &quot;en&quot;: &quot;Dark Blue&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;76ab0659-e5ee-47eb-a7ad-2e6faa83762f&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;0c574979-aa91-4392-a929-bdb9388d1f2c&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    }
                ],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531820&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ساعات&quot;,
                            &quot;en&quot;: &quot;Watches&quot;
                        },
                        &quot;slug&quot;: &quot;ساعات&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/eeca196c-ebdf-4f1c-aa06-0aa700080413.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531823&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531824&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ساعات- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Watches- Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;ساعات-مايكل-آنجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531843&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;ساعات رجالية&quot;,
                            &quot;en&quot;: &quot;Men Watches&quot;
                        },
                        &quot;slug&quot;: &quot;ساعات-رجالية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531844&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;Michael angelo-men&quot;,
                            &quot;en&quot;: &quot;Michael angelo-men&quot;
                        },
                        &quot;slug&quot;: &quot;michael-angelo-men&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531845&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو (س.ر)&quot;,
                            &quot;en&quot;: &quot;Michael Angelo (m.w)&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو-سر&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 8,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;a024eeaa-e31d-4ac6-849e-8fbc551e3d7c&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a024eeaa-e31d-4ac6-849e-8fbc551e3d7c-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a024eeaa-e31d-4ac6-849e-8fbc551e3d7c-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a024eeaa-e31d-4ac6-849e-8fbc551e3d7c-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a024eeaa-e31d-4ac6-849e-8fbc551e3d7c-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a024eeaa-e31d-4ac6-849e-8fbc551e3d7c-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;9858e270-ff01-4944-8499-dcf92ec7a726&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9858e270-ff01-4944-8499-dcf92ec7a726-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9858e270-ff01-4944-8499-dcf92ec7a726-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9858e270-ff01-4944-8499-dcf92ec7a726-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9858e270-ff01-4944-8499-dcf92ec7a726-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9858e270-ff01-4944-8499-dcf92ec7a726-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;85c524b0-a4cc-48b9-9a42-c6acc81386f9&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85c524b0-a4cc-48b9-9a42-c6acc81386f9-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85c524b0-a4cc-48b9-9a42-c6acc81386f9-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85c524b0-a4cc-48b9-9a42-c6acc81386f9-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85c524b0-a4cc-48b9-9a42-c6acc81386f9-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/85c524b0-a4cc-48b9-9a42-c6acc81386f9-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;b7ce1bb1-84ab-4787-9fcc-74db28365c8b&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b7ce1bb1-84ab-4787-9fcc-74db28365c8b-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b7ce1bb1-84ab-4787-9fcc-74db28365c8b-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b7ce1bb1-84ab-4787-9fcc-74db28365c8b-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b7ce1bb1-84ab-4787-9fcc-74db28365c8b-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b7ce1bb1-84ab-4787-9fcc-74db28365c8b-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;771180b7-f151-410d-889c-266a32cd1bc1&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/771180b7-f151-410d-889c-266a32cd1bc1-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/771180b7-f151-410d-889c-266a32cd1bc1-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/771180b7-f151-410d-889c-266a32cd1bc1-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/771180b7-f151-410d-889c-266a32cd1bc1-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/771180b7-f151-410d-889c-266a32cd1bc1-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;156ea8b1-ee30-4b92-bb49-42c06811462d&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/156ea8b1-ee30-4b92-bb49-42c06811462d-thumbnail-1000x1000.png&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/156ea8b1-ee30-4b92-bb49-42c06811462d-thumbnail-1000x1000.png&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/156ea8b1-ee30-4b92-bb49-42c06811462d-thumbnail-370x370.png&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/156ea8b1-ee30-4b92-bb49-42c06811462d-thumbnail-770x770.png&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/156ea8b1-ee30-4b92-bb49-42c06811462d-thumbnail-500x500.png&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 25,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/michael-angelo-royal-goldcrest-mens-collection-3&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 785,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 31.59,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;1e9a0017-9f57-4fd8-850e-b9600da16a4a&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 25,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:49.182282Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:49.182321Z&quot;
            },
            {
                &quot;id&quot;: &quot;37330983-a5b4-499d-8f50-617e0c033c38&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;PA0440JU&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;عطر أمواج غايدنس 46 أو دو بارفان&quot;,
                    &quot;en&quot;: &quot;Amouage Guidance 46 EDP 100ml&quot;
                },
                &quot;slug&quot;: &quot;amouage-guidance-46-edp-100ml&quot;,
                &quot;price&quot;: 185,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;يُجسّد عطر أمواج غايدنس 46 أو دو بارفان فلسفة العاطفة العميقة والنعومة الآسرة، حيث يلتقي الدفء الحسي مع الرقة الأنثوية في توليفة فاخرة تعبّر عن الحنان والقوة الهادئة في آنٍ واحد.&nbsp;&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;Amouage Guidance 46 Eau de Parfum embodies a philosophy of deep emotion and captivating softness, where sensual warmth meets feminine elegance in a luxurious composition that expresses tenderness and quiet strength at the same time.&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: 148,
                &quot;formatted_price&quot;: &quot; SAR 185.00&quot;,
                &quot;formatted_sale_price&quot;: &quot; SAR 148.00&quot;,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [
                    {
                        &quot;id&quot;: &quot;b98977c9-77ab-45ca-a526-1c1417097a9b&quot;,
                        &quot;slug&quot;: &quot;ar-السعة-en-volume&quot;,
                        &quot;name&quot;: &quot;Volume&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;100ml&quot;,
                            &quot;en&quot;: &quot;100ml&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;product_id&quot;: &quot;37330983-a5b4-499d-8f50-617e0c033c38&quot;,
                        &quot;attribute_image_id&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;attribute_id&quot;: &quot;fcda7ed9-383c-4b09-91cd-e7100d66a192&quot;,
                        &quot;attribute_display_order&quot;: null,
                        &quot;use_as_filter&quot;: true
                    }
                ],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531817&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;عطور&quot;,
                            &quot;en&quot;: &quot;Perfumes&quot;
                        },
                        &quot;slug&quot;: &quot;عطور&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/fcad02c0-d232-44b3-9ed8-487a7fe2fa0f.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531829&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;للمـرأة&quot;,
                            &quot;en&quot;: &quot;For Women&quot;
                        },
                        &quot;slug&quot;: &quot;للمـرأة&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/197ee521-02b6-44ee-884e-1af27303bff7.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531831&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;خصومات ⚡️&quot;,
                            &quot;en&quot;: &quot;Hot Deals ⚡️&quot;
                        },
                        &quot;slug&quot;: &quot;خصومات&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531837&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;عطور نسائية&quot;,
                            &quot;en&quot;: &quot;Women&#039;s Perfumes&quot;
                        },
                        &quot;slug&quot;: &quot;عطور-نسائية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;مجموعة مختارة من عطور النساء تجمع بين الرقي الكلاسيكي والجاذبية العصرية. اكتشفي عطورًا زهرية وشرقية وفاكهية تبرز التفرّد وتترك أثرًا لا يُنسى.&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531840&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان العطور&quot;,
                            &quot;en&quot;: &quot;Perfumes Festival&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-العطور&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531846&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;الأكثر مبيعاً&quot;,
                            &quot;en&quot;: &quot;Best Selling&quot;
                        },
                        &quot;slug&quot;: &quot;الأكثر-مبيعا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 9,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;1d0bec75-b760-46eb-a14e-d24d25a2ab8b&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1d0bec75-b760-46eb-a14e-d24d25a2ab8b-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1d0bec75-b760-46eb-a14e-d24d25a2ab8b-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1d0bec75-b760-46eb-a14e-d24d25a2ab8b-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1d0bec75-b760-46eb-a14e-d24d25a2ab8b-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1d0bec75-b760-46eb-a14e-d24d25a2ab8b-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;7b8e129d-b5ab-4d28-a6b1-566786eda891&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7b8e129d-b5ab-4d28-a6b1-566786eda891-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7b8e129d-b5ab-4d28-a6b1-566786eda891-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7b8e129d-b5ab-4d28-a6b1-566786eda891-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7b8e129d-b5ab-4d28-a6b1-566786eda891-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7b8e129d-b5ab-4d28-a6b1-566786eda891-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;9fe3f62e-7cab-4115-8a9f-9bc9484d2ccc&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9fe3f62e-7cab-4115-8a9f-9bc9484d2ccc-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9fe3f62e-7cab-4115-8a9f-9bc9484d2ccc-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9fe3f62e-7cab-4115-8a9f-9bc9484d2ccc-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9fe3f62e-7cab-4115-8a9f-9bc9484d2ccc-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/9fe3f62e-7cab-4115-8a9f-9bc9484d2ccc-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 9,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/amouage-guidance-46-edp-100ml&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 590,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 0,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;e34481cf-7d2d-458c-a3a9-9e312becd67b&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 9,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:49.874543Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:49.874588Z&quot;
            },
            {
                &quot;id&quot;: &quot;faaa2000-f52a-4928-a754-276394d8d48f&quot;,
                &quot;product_class&quot;: null,
                &quot;sku&quot;: &quot;LM0376MC&quot;,
                &quot;barcode&quot;: &quot;&quot;,
                &quot;parent_id&quot;: null,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot; مايكل انجلو- محفظة رجالية X3&quot;,
                    &quot;en&quot;: &quot;Micheal Angelo- Men&#039;s Wallet X3&quot;
                },
                &quot;slug&quot;: &quot;michael-angelo-mens-wallet-coffee-2&quot;,
                &quot;price&quot;: 13,
                &quot;short_description&quot;: {
                    &quot;ar&quot;: &quot;&lt;p&gt;محفظة X3 الرجالية من مايكل انجلو تتميز بتصميمات عصرية.&lt;/p&gt;&quot;,
                    &quot;en&quot;: &quot;&lt;p&gt;Michael Angelo X3 Men&#039;s Wallet featuring modern designs.&lt;/p&gt;\n&lt;p&gt;&nbsp;&lt;/p&gt;&quot;
                },
                &quot;sale_price&quot;: null,
                &quot;formatted_price&quot;: &quot; SAR 13.00&quot;,
                &quot;formatted_sale_price&quot;: null,
                &quot;currency&quot;: &quot;SAR&quot;,
                &quot;currency_symbol&quot;: &quot; SAR &quot;,
                &quot;attributes&quot;: [],
                &quot;categories&quot;: [
                    {
                        &quot;id&quot;: &quot;1531819&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                            &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                        },
                        &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531822&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                            &quot;en&quot;: &quot;New arrival 🔥&quot;
                        },
                        &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531823&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531826&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب ومحافظ&quot;,
                            &quot;en&quot;: &quot;Bags &amp; Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-ومحافظ&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: &quot;99fbb737-1b1d-4d99-b027-abb4eabe4b12/ab21785c-668f-41bc-8286-1eb6d45fdc97.jpg&quot;,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531832&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;حقائب- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Bags- Michael Angelo&quot;
                        },
                        &quot;slug&quot;: &quot;حقائب-مايكل-آنجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531834&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;محافظ&quot;,
                            &quot;en&quot;: &quot;Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;محافظ&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531836&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;محافظ مايكل انجلو&quot;,
                            &quot;en&quot;: &quot;Michael Angelo Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;محافظ-مايكل-انجلو&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    },
                    {
                        &quot;id&quot;: &quot;1531847&quot;,
                        &quot;name&quot;: {
                            &quot;ar&quot;: &quot;محافظ رجالية&quot;,
                            &quot;en&quot;: &quot;Men &#039;s Wallets&quot;
                        },
                        &quot;slug&quot;: &quot;محافظ-رجالية&quot;,
                        &quot;description&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;cover_image&quot;: null,
                        &quot;image&quot;: null,
                        &quot;display_order&quot;: null,
                        &quot;meta&quot;: null
                    }
                ],
                &quot;display_order&quot;: 10,
                &quot;has_options&quot;: false,
                &quot;has_fields&quot;: false,
                &quot;images&quot;: [
                    {
                        &quot;id&quot;: &quot;e92c3efa-624f-4d3d-bc62-6413ad8b7d25&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e92c3efa-624f-4d3d-bc62-6413ad8b7d25-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e92c3efa-624f-4d3d-bc62-6413ad8b7d25-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e92c3efa-624f-4d3d-bc62-6413ad8b7d25-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e92c3efa-624f-4d3d-bc62-6413ad8b7d25-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/e92c3efa-624f-4d3d-bc62-6413ad8b7d25-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 1,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;c274c704-6581-4e5a-9b9c-a4f87295c203&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c274c704-6581-4e5a-9b9c-a4f87295c203-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c274c704-6581-4e5a-9b9c-a4f87295c203-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c274c704-6581-4e5a-9b9c-a4f87295c203-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c274c704-6581-4e5a-9b9c-a4f87295c203-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c274c704-6581-4e5a-9b9c-a4f87295c203-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 2,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;d44ba18a-a1f9-4405-8a54-de24cdcfb89d&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d44ba18a-a1f9-4405-8a54-de24cdcfb89d-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d44ba18a-a1f9-4405-8a54-de24cdcfb89d-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d44ba18a-a1f9-4405-8a54-de24cdcfb89d-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d44ba18a-a1f9-4405-8a54-de24cdcfb89d-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d44ba18a-a1f9-4405-8a54-de24cdcfb89d-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 3,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;c05b4eba-c72b-4da7-8393-88063b7e5e93&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c05b4eba-c72b-4da7-8393-88063b7e5e93-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c05b4eba-c72b-4da7-8393-88063b7e5e93-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c05b4eba-c72b-4da7-8393-88063b7e5e93-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c05b4eba-c72b-4da7-8393-88063b7e5e93-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c05b4eba-c72b-4da7-8393-88063b7e5e93-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 4,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;745cf488-21b3-4c4f-8c5e-7cc8f2e1827b&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/745cf488-21b3-4c4f-8c5e-7cc8f2e1827b-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/745cf488-21b3-4c4f-8c5e-7cc8f2e1827b-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/745cf488-21b3-4c4f-8c5e-7cc8f2e1827b-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/745cf488-21b3-4c4f-8c5e-7cc8f2e1827b-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/745cf488-21b3-4c4f-8c5e-7cc8f2e1827b-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 5,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    },
                    {
                        &quot;id&quot;: &quot;8dbf4d82-dea1-4600-896c-caa1a41cb412&quot;,
                        &quot;image&quot;: {
                            &quot;large&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8dbf4d82-dea1-4600-896c-caa1a41cb412-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;full_size&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8dbf4d82-dea1-4600-896c-caa1a41cb412-thumbnail-1000x1000-70.jpg&quot;,
                            &quot;thumbnail&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8dbf4d82-dea1-4600-896c-caa1a41cb412-thumbnail-370x370-70.jpg&quot;,
                            &quot;medium&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8dbf4d82-dea1-4600-896c-caa1a41cb412-thumbnail-770x770-70.jpg&quot;,
                            &quot;small&quot;: &quot;https://media.zid.store/thumbs/99fbb737-1b1d-4d99-b027-abb4eabe4b12/8dbf4d82-dea1-4600-896c-caa1a41cb412-thumbnail-500x500-70.jpg&quot;
                        },
                        &quot;alt_text&quot;: &quot;&quot;,
                        &quot;display_order&quot;: 6,
                        &quot;i18n_alt_text&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        }
                    }
                ],
                &quot;videos&quot;: [],
                &quot;is_draft&quot;: false,
                &quot;quantity&quot;: 96,
                &quot;is_infinite&quot;: false,
                &quot;html_url&quot;: &quot;https://bstlia.zid.store/products/michael-angelo-mens-wallet-coffee-2&quot;,
                &quot;weight&quot;: {
                    &quot;value&quot;: 54,
                    &quot;unit&quot;: &quot;g&quot;
                },
                &quot;keywords&quot;: [],
                &quot;requires_shipping&quot;: true,
                &quot;is_taxable&quot;: true,
                &quot;structure&quot;: &quot;standalone&quot;,
                &quot;seo&quot;: null,
                &quot;rating&quot;: {
                    &quot;average&quot;: 0,
                    &quot;total_count&quot;: 0,
                    &quot;1_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;2_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;3_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;4_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    },
                    &quot;5_ratings&quot;: {
                        &quot;percentage&quot;: 0,
                        &quot;count&quot;: 0
                    }
                },
                &quot;store_id&quot;: 1085223,
                &quot;purchase_restrictions&quot;: {
                    &quot;min_quantity_per_cart&quot;: null,
                    &quot;max_quantity_per_cart&quot;: null,
                    &quot;availability_period_start&quot;: null,
                    &quot;availability_period_end&quot;: null,
                    &quot;sale_price_period_start&quot;: null,
                    &quot;sale_price_period_end&quot;: null
                },
                &quot;metafields&quot;: null,
                &quot;meta&quot;: null,
                &quot;related_products_settings&quot;: &quot;AUTO_GENERATED&quot;,
                &quot;related_products_title&quot;: {
                    &quot;ar&quot;: &quot;&quot;,
                    &quot;en&quot;: &quot;&quot;
                },
                &quot;badge&quot;: null,
                &quot;cost&quot;: 3.721,
                &quot;is_published&quot;: true,
                &quot;waiting_customers_count&quot;: null,
                &quot;group_products&quot;: null,
                &quot;preorder_campaign&quot;: null,
                &quot;stocks&quot;: [
                    {
                        &quot;id&quot;: &quot;50aa49a2-eccf-46d0-a637-a77b555a4e93&quot;,
                        &quot;location&quot;: {
                            &quot;id&quot;: &quot;c3d144fa-69de-40f2-882e-67e46b505383&quot;,
                            &quot;name&quot;: {
                                &quot;en&quot;: &quot;مخزن ضياء&quot;
                            },
                            &quot;type&quot;: &quot;PHYSICAL&quot;,
                            &quot;full_address&quot;: &quot;J4FP+RRW، السيب&lrm;، عمان&quot;
                        },
                        &quot;available_quantity&quot;: 96,
                        &quot;is_infinite&quot;: false
                    }
                ],
                &quot;sold_products_count&quot;: null,
                &quot;created_at&quot;: &quot;2026-04-20T12:49:50.762485Z&quot;,
                &quot;updated_at&quot;: &quot;2026-04-20T12:49:50.762523Z&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-products" data-method="GET"
      data-path="api/zid/merchant/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-products"
                    onclick="tryItOut('GETapi-zid-merchant-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-products"
                    onclick="cancelTryOut('GETapi-zid-merchant-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-products--id-">GET api/zid/merchant/products/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/products/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/products/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;detail&quot;: &quot;No product matches the given query.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-products--id-" data-method="GET"
      data-path="api/zid/merchant/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-products--id-"
                    onclick="tryItOut('GETapi-zid-merchant-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-products--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-products--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-products--id--vouchers">GET api/zid/merchant/products/{id}/vouchers</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-products--id--vouchers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/products/architecto/vouchers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/products/architecto/vouchers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-products--id--vouchers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch product vouchers&quot;,
    &quot;errors&quot;: {
        &quot;detail&quot;: &quot;Not found.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-products--id--vouchers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-products--id--vouchers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-products--id--vouchers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-products--id--vouchers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-products--id--vouchers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-products--id--vouchers" data-method="GET"
      data-path="api/zid/merchant/products/{id}/vouchers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-products--id--vouchers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-products--id--vouchers"
                    onclick="tryItOut('GETapi-zid-merchant-products--id--vouchers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-products--id--vouchers"
                    onclick="cancelTryOut('GETapi-zid-merchant-products--id--vouchers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-products--id--vouchers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/products/{id}/vouchers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-products--id--vouchers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-products--id--vouchers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-products--id--vouchers"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-products--id--images">GET api/zid/merchant/products/{id}/images</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-products--id--images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/products/architecto/images" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/products/architecto/images"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-products--id--images">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch product images&quot;,
    &quot;errors&quot;: {
        &quot;detail&quot;: &quot;No product matches the given query.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-products--id--images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-products--id--images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-products--id--images"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-products--id--images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-products--id--images">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-products--id--images" data-method="GET"
      data-path="api/zid/merchant/products/{id}/images"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-products--id--images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-products--id--images"
                    onclick="tryItOut('GETapi-zid-merchant-products--id--images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-products--id--images"
                    onclick="cancelTryOut('GETapi-zid-merchant-products--id--images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-products--id--images"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/products/{id}/images</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-products--id--images"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-products--id--images"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-products--id--images"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-categories">GET api/zid/merchant/categories</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;object&quot;,
        &quot;categories&quot;: [
            {
                &quot;id&quot;: 1456810,
                &quot;uuid&quot;: &quot;4f2ef763-283b-4635-9fb6-8e56bc81caa8&quot;,
                &quot;name&quot;: &quot;Makeup&quot;,
                &quot;slug&quot;: &quot;makeup&quot;,
                &quot;SEO_category_title&quot;: &quot;Makeup&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;en&quot;: &quot;Makeup&quot;,
                    &quot;ar&quot;: &quot;منتجات تجميل&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1456810/makeup&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6c6e335d-c36a-4f7c-8135-1658df9ebb40-260x260.png&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/6c6e335d-c36a-4f7c-8135-1658df9ebb40.png&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 5,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Makeup&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531897,
                &quot;uuid&quot;: &quot;0747e9b3-5d19-4a3f-b64d-f25c5c33031c&quot;,
                &quot;name&quot;: &quot;gucci&quot;,
                &quot;slug&quot;: &quot;جوتشي&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;جوتشي&quot;,
                    &quot;en&quot;: &quot;gucci&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531897/جوتشي&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/206278d1-f00d-4dfa-bb28-6719753878d0-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/206278d1-f00d-4dfa-bb28-6719753878d0.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;gucci&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531895,
                &quot;uuid&quot;: &quot;faaeca81-bd54-4478-a413-7e3e581c1681&quot;,
                &quot;name&quot;: &quot;Children&quot;,
                &quot;slug&quot;: &quot;للأبنـاء&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;للأبنـاء&quot;,
                    &quot;en&quot;: &quot;Children&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531895/للأبنـاء&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/dbabf46b-e880-40e9-9318-6bdcb4764826-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/dbabf46b-e880-40e9-9318-6bdcb4764826.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 14,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Children&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531894,
                &quot;uuid&quot;: &quot;4a14ca05-f7a1-47d6-acb1-32121707ee2d&quot;,
                &quot;name&quot;: &quot;Kids Toys 🧸&quot;,
                &quot;slug&quot;: &quot;ألعاب-أطفال&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;ألعاب أطفال&quot;,
                    &quot;en&quot;: &quot;Kids Toys 🧸&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531894/ألعاب-أطفال&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a3d74563-ac64-495a-8005-6249d67859d4-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a3d74563-ac64-495a-8005-6249d67859d4.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 14,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Kids Toys 🧸&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531893,
                &quot;uuid&quot;: &quot;a78bc96b-b4ed-41a4-8928-c7b69e80950c&quot;,
                &quot;name&quot;: &quot;Valentino&quot;,
                &quot;slug&quot;: &quot;فالينتينو&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;فالينتينو&quot;,
                    &quot;en&quot;: &quot;Valentino&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531893/فالينتينو&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b012d767-8e40-4e10-8206-d249ad575817-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/b012d767-8e40-4e10-8206-d249ad575817.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Valentino&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531892,
                &quot;uuid&quot;: &quot;e092dec2-5038-4ed6-850e-a3a9f5c34b06&quot;,
                &quot;name&quot;: &quot;montblanc&quot;,
                &quot;slug&quot;: &quot;مونت-بلانك&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مونت بلانك&quot;,
                    &quot;en&quot;: &quot;montblanc&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531892/مونت-بلانك&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/148ac3d1-d7e2-4025-aaef-29804b1a120e-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/148ac3d1-d7e2-4025-aaef-29804b1a120e.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;montblanc&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531890,
                &quot;uuid&quot;: &quot;a588ac37-20dc-4f93-8871-599801085eb2&quot;,
                &quot;name&quot;: &quot;versace&quot;,
                &quot;slug&quot;: &quot;فيرساتشي&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;فيرساتشي&quot;,
                    &quot;en&quot;: &quot;versace&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531890/فيرساتشي&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/daf71d60-746a-4e58-82fc-f5690f2c5232-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/daf71d60-746a-4e58-82fc-f5690f2c5232.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;versace&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531889,
                &quot;uuid&quot;: &quot;0ae96869-bfa5-4f95-a279-ec425bcfa96b&quot;,
                &quot;name&quot;: &quot;House Warming&quot;,
                &quot;slug&quot;: &quot;هدية-للمنزل&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;هدية للمنزل&quot;,
                    &quot;en&quot;: &quot;House Warming&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531889/هدية-للمنزل&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80d9ddb7-4efd-4bb3-87a1-e00ea0dc5b58-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/80d9ddb7-4efd-4bb3-87a1-e00ea0dc5b58.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 23,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;House Warming&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531888,
                &quot;uuid&quot;: &quot;4516c3e1-ef65-46c8-8abf-e2b359efcca1&quot;,
                &quot;name&quot;: &quot;kenzo&quot;,
                &quot;slug&quot;: &quot;كنزو&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;كنزو&quot;,
                    &quot;en&quot;: &quot;kenzo&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531888/كنزو&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/afbb5ac9-a3dd-40ec-b1c4-0d7e5ee37529-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/afbb5ac9-a3dd-40ec-b1c4-0d7e5ee37529.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;kenzo&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531887,
                &quot;uuid&quot;: &quot;4d17354b-3f62-4d11-892b-01e6bcaa3945&quot;,
                &quot;name&quot;: &quot;hermes&quot;,
                &quot;slug&quot;: &quot;هيرميس&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;هيرميس&quot;,
                    &quot;en&quot;: &quot;hermes&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531887/هيرميس&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f65624f7-d000-42b7-918a-fcb74f681323-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f65624f7-d000-42b7-918a-fcb74f681323.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 2,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;hermes&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531886,
                &quot;uuid&quot;: &quot;3fb5fcef-4a1c-4a8f-aa24-211da5ccca40&quot;,
                &quot;name&quot;: &quot;New Born&quot;,
                &quot;slug&quot;: &quot;مولود-جديد&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مولود جديد&quot;,
                    &quot;en&quot;: &quot;New Born&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531886/مولود-جديد&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1ecc037e-8b01-44ac-837f-45ff641375f6-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1ecc037e-8b01-44ac-837f-45ff641375f6.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 13,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;New Born&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531884,
                &quot;uuid&quot;: &quot;41995765-3890-4f94-ad15-b70ab8908452&quot;,
                &quot;name&quot;: &quot;Bags Festival 👜🎪&quot;,
                &quot;slug&quot;: &quot;مهرجان-الحقائب&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مهرجان الحقائب 👜🎪&quot;,
                    &quot;en&quot;: &quot;Bags Festival 👜🎪&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531884/مهرجان-الحقائب&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 39,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Bags Festival 👜🎪&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531882,
                &quot;uuid&quot;: &quot;5ae07e41-ee4a-41e3-8962-fd1a53b5ccf8&quot;,
                &quot;name&quot;: &quot;tom ford&quot;,
                &quot;slug&quot;: &quot;توم-فورد&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;توم فورد&quot;,
                    &quot;en&quot;: &quot;tom ford&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531882/توم-فورد&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e9b9bce-e538-4840-82bc-a77e50679d20-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2e9b9bce-e538-4840-82bc-a77e50679d20.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 3,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;tom ford&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531881,
                &quot;uuid&quot;: &quot;454835a7-236b-417b-abe5-1211fbfccebd&quot;,
                &quot;name&quot;: &quot;Weekly Deals🔥&quot;,
                &quot;slug&quot;: &quot;عروض-الاسبوع&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;عروض الاسبوع 🔥&quot;,
                    &quot;en&quot;: &quot;Weekly Deals🔥&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531881/عروض-الاسبوع&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 37,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Weekly Deals🔥&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531880,
                &quot;uuid&quot;: &quot;5e990891-028a-4510-955f-8497e023a637&quot;,
                &quot;name&quot;: &quot;rose &amp; life&quot;,
                &quot;slug&quot;: &quot;روز-آند-لايف&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;روز آند لايف&quot;,
                    &quot;en&quot;: &quot;rose &amp; life&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531880/روز-آند-لايف&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7afc7c3e-c621-4ab8-95a9-36af47fa8535-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/7afc7c3e-c621-4ab8-95a9-36af47fa8535.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 60,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;rose &amp; life&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531879,
                &quot;uuid&quot;: &quot;0f6f55b7-3738-4a19-8c5a-c4d6735d9960&quot;,
                &quot;name&quot;: &quot;Flowers &amp; Bouquets&quot;,
                &quot;slug&quot;: &quot;ورود&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;ورود&quot;,
                    &quot;en&quot;: &quot;Flowers &amp; Bouquets&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531879/ورود&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/117a2b50-b656-4e97-a549-ce060b3b9228-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/117a2b50-b656-4e97-a549-ce060b3b9228.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 60,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Flowers &amp; Bouquets&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531871,
                &quot;uuid&quot;: &quot;9590492c-a696-4d15-8664-64185210cc33&quot;,
                &quot;name&quot;: &quot;Congratulations&quot;,
                &quot;slug&quot;: &quot;تهانيـنا&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;تهانيـنا&quot;,
                    &quot;en&quot;: &quot;Congratulations&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531871/تهانيـنا&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/76c20c0f-3b79-4dba-b8a1-f9f97c932eb8-260x260.png&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/76c20c0f-3b79-4dba-b8a1-f9f97c932eb8.png&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 46,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Congratulations&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531870,
                &quot;uuid&quot;: &quot;343210af-3ea4-484c-b07f-cbba1af118e1&quot;,
                &quot;name&quot;: &quot;Occasion&quot;,
                &quot;slug&quot;: &quot;مناسبات&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مناسبات&quot;,
                    &quot;en&quot;: &quot;Occasion&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531870/مناسبات&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/3c339396-8dd4-41c0-87fc-3f266c35db5f-260x260.webp&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/3c339396-8dd4-41c0-87fc-3f266c35db5f.webp&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 69,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Occasion&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531868,
                &quot;uuid&quot;: &quot;f254dafd-5df4-430d-a59f-b3dde83715ab&quot;,
                &quot;name&quot;: &quot;Royal Collection&quot;,
                &quot;slug&quot;: &quot;المجموعة-السلطانية&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;المجموعة السلطانية&quot;,
                    &quot;en&quot;: &quot;Royal Collection&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531868/المجموعة-السلطانية&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c5d0472-98fe-4461-980c-a48332ac6860-260x260.webp&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4c5d0472-98fe-4461-980c-a48332ac6860.webp&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 5,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Royal Collection&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531867,
                &quot;uuid&quot;: &quot;ec89fa25-7d62-4bd6-b56f-cac7772c7d4f&quot;,
                &quot;name&quot;: &quot;Gifting for&quot;,
                &quot;slug&quot;: &quot;للأشخاص&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;للأشخاص&quot;,
                    &quot;en&quot;: &quot;Gifting for&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531867/للأشخاص&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Gifting for&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531866,
                &quot;uuid&quot;: &quot;87ea32e8-7b5b-49d8-9a70-32304f5090db&quot;,
                &quot;name&quot;: &quot;Heritage Items&quot;,
                &quot;slug&quot;: &quot;تراثيات&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;تراثيات&quot;,
                    &quot;en&quot;: &quot;Heritage Items&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531866/تراثيات&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5224cc40-f85f-4590-ace8-2a1b1a663c7a-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5224cc40-f85f-4590-ace8-2a1b1a663c7a.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 47,
                &quot;sub_categories&quot;: [
                    {
                        &quot;id&quot;: 1531873,
                        &quot;uuid&quot;: &quot;cda6d8f8-da34-41e6-ba97-ba7eba358959&quot;,
                        &quot;name&quot;: &quot;Handicrafts&quot;,
                        &quot;slug&quot;: &quot;حرفيات&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;حرفيات&quot;,
                            &quot;en&quot;: &quot;Handicrafts&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531873/حرفيات&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 13,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531866,
                        &quot;flat_name&quot;: &quot;Handicrafts&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531869,
                        &quot;uuid&quot;: &quot;f549b29f-04b6-4213-bda0-001a29975e03&quot;,
                        &quot;name&quot;: &quot;Shields&quot;,
                        &quot;slug&quot;: &quot;دروع&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;دروع&quot;,
                            &quot;en&quot;: &quot;Shields&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531869/دروع&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 7,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531866,
                        &quot;flat_name&quot;: &quot;Shields&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    }
                ],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Heritage Items&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531865,
                &quot;uuid&quot;: &quot;2b3e7761-1537-4844-9306-3623c57ab24c&quot;,
                &quot;name&quot;: &quot;Featured Picks&quot;,
                &quot;slug&quot;: &quot;مختارات-مميزة&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مختارات مميزة&quot;,
                    &quot;en&quot;: &quot;Featured Picks&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531865/مختارات-مميزة&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 3,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Featured Picks&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531864,
                &quot;uuid&quot;: &quot;8dcd4bac-923d-4ad3-8d4c-4b64831a00fd&quot;,
                &quot;name&quot;: &quot;prada&quot;,
                &quot;slug&quot;: &quot;برادا&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;برادا&quot;,
                    &quot;en&quot;: &quot;prada&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531864/برادا&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d5178d26-b1c7-4e02-ad3a-9559da81deb9-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d5178d26-b1c7-4e02-ad3a-9559da81deb9.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 2,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;prada&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531863,
                &quot;uuid&quot;: &quot;fa317687-3aae-4b07-8f7e-db264a011b61&quot;,
                &quot;name&quot;: &quot;dior&quot;,
                &quot;slug&quot;: &quot;ديور&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;ديور&quot;,
                    &quot;en&quot;: &quot;dior&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531863/ديور&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 6,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;dior&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531862,
                &quot;uuid&quot;: &quot;ad3e3f3f-f990-4e7f-ae90-1228dc32be13&quot;,
                &quot;name&quot;: &quot;لامرأة&quot;,
                &quot;slug&quot;: &quot;لامرأة&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;لامرأة&quot;,
                    &quot;en&quot;: &quot;لامرأة&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531862/لامرأة&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/460f7a8c-0b19-4145-a2e0-3cc8dc419b55-260x260.png&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/460f7a8c-0b19-4145-a2e0-3cc8dc419b55.png&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 1,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;لامرأة&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531861,
                &quot;uuid&quot;: &quot;66257fdb-e6fd-4223-84c5-01d1e3d23a8a&quot;,
                &quot;name&quot;: &quot;gifts&quot;,
                &quot;slug&quot;: &quot;هدايا-مميزة&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;هدايا مميزة&quot;,
                    &quot;en&quot;: &quot;gifts&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531861/هدايا-مميزة&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 12,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;gifts&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531860,
                &quot;uuid&quot;: &quot;444d6176-9d34-469e-81ee-c7227f766149&quot;,
                &quot;name&quot;: &quot;ysl&quot;,
                &quot;slug&quot;: &quot;ysl&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;ysl&quot;,
                    &quot;en&quot;: &quot;ysl&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531860/ysl&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef012878-b380-47e3-9421-644ba106c607-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ef012878-b380-47e3-9421-644ba106c607.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 2,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;ysl&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531859,
                &quot;uuid&quot;: &quot;28968460-a185-40d5-bf46-9eaba60fe7e3&quot;,
                &quot;name&quot;: &quot;amouage&quot;,
                &quot;slug&quot;: &quot;امواج&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;امواج&quot;,
                    &quot;en&quot;: &quot;amouage&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531859/امواج&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 17,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;amouage&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531857,
                &quot;uuid&quot;: &quot;a1540e93-6eac-422a-a33f-9bceb530c301&quot;,
                &quot;name&quot;: &quot;Get Well Soon&quot;,
                &quot;slug&quot;: &quot;أمنيات-بالشفاء-العاجل&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;أمنيات بالشفاء العاجل&quot;,
                    &quot;en&quot;: &quot;Get Well Soon&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531857/أمنيات-بالشفاء-العاجل&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/952bfa29-1a49-4834-95e2-224de6752e8f-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/952bfa29-1a49-4834-95e2-224de6752e8f.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 37,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Get Well Soon&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531856,
                &quot;uuid&quot;: &quot;bb098525-dfb9-4378-ae44-64558b122cd5&quot;,
                &quot;name&quot;: &quot;Graduation&quot;,
                &quot;slug&quot;: &quot;التخرج&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;التخرج&quot;,
                    &quot;en&quot;: &quot;Graduation&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531856/التخرج&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d72109b2-8631-4ab9-b884-c920ea748750-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d72109b2-8631-4ab9-b884-c920ea748750.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 74,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Graduation&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531855,
                &quot;uuid&quot;: &quot;c55ec2e7-38bd-4e0f-948e-012b1be9f9ec&quot;,
                &quot;name&quot;: &quot;Father&quot;,
                &quot;slug&quot;: &quot;للأب&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;للأب&quot;,
                    &quot;en&quot;: &quot;Father&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531855/للأب&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4608677f-b4a9-424e-9951-67b91b6957c5-260x260.png&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/4608677f-b4a9-424e-9951-67b91b6957c5.png&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 63,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Father&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531854,
                &quot;uuid&quot;: &quot;5394647a-7e34-4c95-9028-a091838d47dc&quot;,
                &quot;name&quot;: &quot;For Men&quot;,
                &quot;slug&quot;: &quot;للرجـل&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;للرجـل&quot;,
                    &quot;en&quot;: &quot;For Men&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531854/للرجـل&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1a5a49bc-a0a4-4301-abca-4a48df9e7037-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/1a5a49bc-a0a4-4301-abca-4a48df9e7037.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 60,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;For Men&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531853,
                &quot;uuid&quot;: &quot;c61f4652-4ac7-4e35-945f-4de46e1772c8&quot;,
                &quot;name&quot;: &quot;Mother&quot;,
                &quot;slug&quot;: &quot;للأم&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;للأم&quot;,
                    &quot;en&quot;: &quot;Mother&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531853/للأم&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/34edfdee-0030-4f75-9122-6a59db7c88e6-260x260.png&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/34edfdee-0030-4f75-9122-6a59db7c88e6.png&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 69,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Mother&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531852,
                &quot;uuid&quot;: &quot;2061844e-d565-4000-b9fa-457970131fc9&quot;,
                &quot;name&quot;: &quot;Birthday&quot;,
                &quot;slug&quot;: &quot;يوم-الميلاد&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;يوم الميلاد&quot;,
                    &quot;en&quot;: &quot;Birthday&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531852/يوم-الميلاد&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/dfd815ba-da7d-49d3-b589-04ceaf365a41-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/dfd815ba-da7d-49d3-b589-04ceaf365a41.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 85,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Birthday&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531851,
                &quot;uuid&quot;: &quot;33d74dc7-0d3a-4d8d-84db-33f1810925bf&quot;,
                &quot;name&quot;: &quot;I love You&quot;,
                &quot;slug&quot;: &quot;أحبك&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;أحبك&quot;,
                    &quot;en&quot;: &quot;I love You&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531851/أحبك&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f7d79a45-7798-425c-9548-ef9f579c17a7-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/f7d79a45-7798-425c-9548-ef9f579c17a7.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 63,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;I love You&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531850,
                &quot;uuid&quot;: &quot;a0c5aae8-6308-43f5-ab02-cf6908876098&quot;,
                &quot;name&quot;: &quot;Displayed Products&quot;,
                &quot;slug&quot;: &quot;المنتجات-المعروضة&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;المنتجات المعروضة&quot;,
                    &quot;en&quot;: &quot;Displayed Products&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531850/المنتجات-المعروضة&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 5,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Displayed Products&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531849,
                &quot;uuid&quot;: &quot;27099b35-7d27-4a72-84f3-dfb34d870fdd&quot;,
                &quot;name&quot;: &quot;Accessories&quot;,
                &quot;slug&quot;: &quot;حلي&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;حلي&quot;,
                    &quot;en&quot;: &quot;Accessories&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531849/حلي&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 3,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Accessories&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531848,
                &quot;uuid&quot;: &quot;cba61bcb-e4d4-4601-9684-effee4e389cd&quot;,
                &quot;name&quot;: &quot;lineage&quot;,
                &quot;slug&quot;: &quot;لاينج&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;لاينج&quot;,
                    &quot;en&quot;: &quot;lineage&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531848/لاينج&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a42aeadf-b4d6-43df-8381-678739c7fed9-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/a42aeadf-b4d6-43df-8381-678739c7fed9.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 96,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;lineage&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531846,
                &quot;uuid&quot;: &quot;3eb35909-292c-4d43-95be-f29b7c915975&quot;,
                &quot;name&quot;: &quot;Best Selling&quot;,
                &quot;slug&quot;: &quot;الأكثر-مبيعا&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;الأكثر مبيعاً&quot;,
                    &quot;en&quot;: &quot;Best Selling&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531846/الأكثر-مبيعا&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 48,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Best Selling&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531844,
                &quot;uuid&quot;: &quot;70e50758-57fb-49df-aba1-a4bd0f19cc6b&quot;,
                &quot;name&quot;: &quot;Michael angelo-men&quot;,
                &quot;slug&quot;: &quot;michael-angelo-men&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;Michael angelo-men&quot;,
                    &quot;en&quot;: &quot;Michael angelo-men&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531844/michael-angelo-men&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 15,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Michael angelo-men&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531841,
                &quot;uuid&quot;: &quot;638ec779-79e1-4381-a143-3d16a9241613&quot;,
                &quot;name&quot;: &quot;Jewelry&quot;,
                &quot;slug&quot;: &quot;حلي-ومجوهرات&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;حلي ومجوهرات&quot;,
                    &quot;en&quot;: &quot;Jewelry&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531841/حلي-ومجوهرات&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/160fd951-12c6-487e-a2c2-5d5003196fb2-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/160fd951-12c6-487e-a2c2-5d5003196fb2.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 50,
                &quot;sub_categories&quot;: [
                    {
                        &quot;id&quot;: 1531896,
                        &quot;uuid&quot;: &quot;5444b13d-71ed-4601-8fbb-d6f7aba98bce&quot;,
                        &quot;name&quot;: &quot;Accessories&quot;,
                        &quot;slug&quot;: &quot;مجوهرات&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;مجوهرات&quot;,
                            &quot;en&quot;: &quot;Accessories&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531896/مجوهرات&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 6,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531841,
                        &quot;flat_name&quot;: &quot;Accessories&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531891,
                        &quot;uuid&quot;: &quot;0e86b58b-8d8a-45ad-b669-d877f87cbaae&quot;,
                        &quot;name&quot;: &quot;Gemstones&quot;,
                        &quot;slug&quot;: &quot;احجار-كريمة&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;احجار كريمة&quot;,
                            &quot;en&quot;: &quot;Gemstones&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531891/احجار-كريمة&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 4,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531841,
                        &quot;flat_name&quot;: &quot;Gemstones&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531842,
                        &quot;uuid&quot;: &quot;9f74c3b8-3581-4722-923f-0bf54ed9f845&quot;,
                        &quot;name&quot;: &quot;Silver&quot;,
                        &quot;slug&quot;: &quot;فضة&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;فضة&quot;,
                            &quot;en&quot;: &quot;Silver&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531842/فضة&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 14,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531841,
                        &quot;flat_name&quot;: &quot;Silver&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    }
                ],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Jewelry&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531840,
                &quot;uuid&quot;: &quot;b6515618-850b-475c-b8a2-bc84f731b4e0&quot;,
                &quot;name&quot;: &quot;Perfumes Festival&quot;,
                &quot;slug&quot;: &quot;مهرجان-العطور&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مهرجان العطور&quot;,
                    &quot;en&quot;: &quot;Perfumes Festival&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531840/مهرجان-العطور&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 48,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Perfumes Festival&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531839,
                &quot;uuid&quot;: &quot;63478b7a-bdf2-4711-b9ce-9e7cc4e29e42&quot;,
                &quot;name&quot;: &quot;Anniversary&quot;,
                &quot;slug&quot;: &quot;ذكرى-الزواج&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;ذكرى الزواج&quot;,
                    &quot;en&quot;: &quot;Anniversary&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531839/ذكرى-الزواج&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3ab744-84f5-47a5-b42b-2735b27a1e4d-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/5e3ab744-84f5-47a5-b42b-2735b27a1e4d.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 78,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Anniversary&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531838,
                &quot;uuid&quot;: &quot;91b32102-35f4-4afe-9fd1-f05329b34695&quot;,
                &quot;name&quot;: &quot;Wedding&quot;,
                &quot;slug&quot;: &quot;الزفاف&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;الزفاف&quot;,
                    &quot;en&quot;: &quot;Wedding&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531838/الزفاف&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c89a9aed-2c96-4a82-9158-e7b106b2dc48-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/c89a9aed-2c96-4a82-9158-e7b106b2dc48.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 51,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Wedding&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531831,
                &quot;uuid&quot;: &quot;7561cb49-8f83-4f7b-a902-bfb315bef49a&quot;,
                &quot;name&quot;: &quot;Hot Deals ⚡️&quot;,
                &quot;slug&quot;: &quot;خصومات&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;خصومات ⚡️&quot;,
                    &quot;en&quot;: &quot;Hot Deals ⚡️&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531831/خصومات&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 86,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Hot Deals ⚡️&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531830,
                &quot;uuid&quot;: &quot;f5ade2b2-c212-4e78-9f81-9044c99f8109&quot;,
                &quot;name&quot;: &quot;Friend&quot;,
                &quot;slug&quot;: &quot;لصديـق&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;لصديـق&quot;,
                    &quot;en&quot;: &quot;Friend&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531830/لصديـق&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2109464b-abb4-4ed5-8d44-a07bc769b2b9-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/2109464b-abb4-4ed5-8d44-a07bc769b2b9.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 115,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Friend&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531829,
                &quot;uuid&quot;: &quot;19b07cf1-fc83-4086-ba9b-fa7303448b92&quot;,
                &quot;name&quot;: &quot;For Women&quot;,
                &quot;slug&quot;: &quot;للمـرأة&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;للمـرأة&quot;,
                    &quot;en&quot;: &quot;For Women&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531829/للمـرأة&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/197ee521-02b6-44ee-884e-1af27303bff7-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/197ee521-02b6-44ee-884e-1af27303bff7.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 134,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;For Women&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531826,
                &quot;uuid&quot;: &quot;d03080d2-35e1-4533-91bd-2b7cdbae4a32&quot;,
                &quot;name&quot;: &quot;Bags &amp; Wallets&quot;,
                &quot;slug&quot;: &quot;حقائب-ومحافظ&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;حقائب ومحافظ&quot;,
                    &quot;en&quot;: &quot;Bags &amp; Wallets&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531826/حقائب-ومحافظ&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ab21785c-668f-41bc-8286-1eb6d45fdc97-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/ab21785c-668f-41bc-8286-1eb6d45fdc97.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 505,
                &quot;sub_categories&quot;: [
                    {
                        &quot;id&quot;: 1531834,
                        &quot;uuid&quot;: &quot;71dd7df0-ec3e-4efe-9849-a576cff727a6&quot;,
                        &quot;name&quot;: &quot;Wallets&quot;,
                        &quot;slug&quot;: &quot;محافظ&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;محافظ&quot;,
                            &quot;en&quot;: &quot;Wallets&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531834/محافظ&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 154,
                        &quot;sub_categories&quot;: [
                            {
                                &quot;id&quot;: 1531898,
                                &quot;uuid&quot;: &quot;e91acf89-c53e-4588-8507-c4a75c876086&quot;,
                                &quot;name&quot;: &quot;Lineage Wallets&quot;,
                                &quot;slug&quot;: &quot;محافظ-لاينج&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;محافظ لاينج&quot;,
                                    &quot;en&quot;: &quot;Lineage Wallets&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531898/محافظ-لاينج&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 6,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531834,
                                &quot;flat_name&quot;: &quot;Lineage Wallets&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531847,
                                &quot;uuid&quot;: &quot;78267b73-c8f6-4473-a342-dd67c644385f&quot;,
                                &quot;name&quot;: &quot;Men &#039;s Wallets&quot;,
                                &quot;slug&quot;: &quot;محافظ-رجالية&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;محافظ رجالية&quot;,
                                    &quot;en&quot;: &quot;Men &#039;s Wallets&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531847/محافظ-رجالية&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 12,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531834,
                                &quot;flat_name&quot;: &quot;Men &#039;s Wallets&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531836,
                                &quot;uuid&quot;: &quot;ce357ff5-4ab4-48ae-b45a-5862c7553fc6&quot;,
                                &quot;name&quot;: &quot;Michael Angelo Wallets&quot;,
                                &quot;slug&quot;: &quot;محافظ-مايكل-انجلو&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;محافظ مايكل انجلو&quot;,
                                    &quot;en&quot;: &quot;Michael Angelo Wallets&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531836/محافظ-مايكل-انجلو&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 35,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531834,
                                &quot;flat_name&quot;: &quot;Michael Angelo Wallets&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531835,
                                &quot;uuid&quot;: &quot;d19d8c1a-6630-4b16-a332-a9c97a35ca35&quot;,
                                &quot;name&quot;: &quot;Women &#039;s Walets&quot;,
                                &quot;slug&quot;: &quot;محافظ-نسائية&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;محافظ نسائية&quot;,
                                    &quot;en&quot;: &quot;Women &#039;s Walets&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531835/محافظ-نسائية&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 45,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531834,
                                &quot;flat_name&quot;: &quot;Women &#039;s Walets&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            }
                        ],
                        &quot;parent_id&quot;: 1531826,
                        &quot;flat_name&quot;: &quot;Wallets&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531827,
                        &quot;uuid&quot;: &quot;d524f31a-bb5f-40f4-9138-c2ccca682e47&quot;,
                        &quot;name&quot;: &quot;Bags&quot;,
                        &quot;slug&quot;: &quot;حقائب&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;حقائب&quot;,
                            &quot;en&quot;: &quot;Bags&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531827/حقائب&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 217,
                        &quot;sub_categories&quot;: [
                            {
                                &quot;id&quot;: 1531885,
                                &quot;uuid&quot;: &quot;726eb435-6086-4ff4-9306-e9c09096fdee&quot;,
                                &quot;name&quot;: &quot;Lineage (w.b)&quot;,
                                &quot;slug&quot;: &quot;لاينج-حن&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;لاينج (ح.ن)&quot;,
                                    &quot;en&quot;: &quot;Lineage (w.b)&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531885/لاينج-حن&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 30,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531827,
                                &quot;flat_name&quot;: &quot;Lineage (w.b)&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531833,
                                &quot;uuid&quot;: &quot;fe889b5f-be82-47fe-92f2-d21b0f967921&quot;,
                                &quot;name&quot;: &quot;Michael Angelo (w.b)&quot;,
                                &quot;slug&quot;: &quot;مايكل-انجلو-حن&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;مايكل انجلو (ح.ن)&quot;,
                                    &quot;en&quot;: &quot;Michael Angelo (w.b)&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531833/مايكل-انجلو-حن&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 35,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531827,
                                &quot;flat_name&quot;: &quot;Michael Angelo (w.b)&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531828,
                                &quot;uuid&quot;: &quot;ace7ce9b-4b82-43b9-bfa2-4fb429187807&quot;,
                                &quot;name&quot;: &quot;Women &#039;s Bags&quot;,
                                &quot;slug&quot;: &quot;حقائب-نسائية&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;حقائب نسائية&quot;,
                                    &quot;en&quot;: &quot;Women &#039;s Bags&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531828/حقائب-نسائية&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 78,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531827,
                                &quot;flat_name&quot;: &quot;Women &#039;s Bags&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            }
                        ],
                        &quot;parent_id&quot;: 1531826,
                        &quot;flat_name&quot;: &quot;Bags&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    }
                ],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Bags &amp; Wallets&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531823,
                &quot;uuid&quot;: &quot;0eb91f53-8de8-43d7-8a1c-e57984141720&quot;,
                &quot;name&quot;: &quot;Michael Angelo&quot;,
                &quot;slug&quot;: &quot;مايكل-انجلو&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مايكل انجلو&quot;,
                    &quot;en&quot;: &quot;Michael Angelo&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531823/مايكل-انجلو&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 213,
                &quot;sub_categories&quot;: [
                    {
                        &quot;id&quot;: 1531832,
                        &quot;uuid&quot;: &quot;b3a42a35-dea1-4cf8-82ee-f653a49d71f8&quot;,
                        &quot;name&quot;: &quot;Bags- Michael Angelo&quot;,
                        &quot;slug&quot;: &quot;حقائب-مايكل-آنجلو&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;حقائب- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Bags- Michael Angelo&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531832/حقائب-مايكل-آنجلو&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 76,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531823,
                        &quot;flat_name&quot;: &quot;Bags- Michael Angelo&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531824,
                        &quot;uuid&quot;: &quot;6bd81888-ddc9-4174-817b-ea0379df5a39&quot;,
                        &quot;name&quot;: &quot;Watches- Michael Angelo&quot;,
                        &quot;slug&quot;: &quot;ساعات-مايكل-آنجلو&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;ساعات- مايكل آنجلو&quot;,
                            &quot;en&quot;: &quot;Watches- Michael Angelo&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531824/ساعات-مايكل-آنجلو&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 23,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531823,
                        &quot;flat_name&quot;: &quot;Watches- Michael Angelo&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    }
                ],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Michael Angelo&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531822,
                &quot;uuid&quot;: &quot;0bdcceba-e488-4b45-8d89-881127a0df81&quot;,
                &quot;name&quot;: &quot;New arrival 🔥&quot;,
                &quot;slug&quot;: &quot;وصل-حديثا&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;وصل حديثا 🔥&quot;,
                    &quot;en&quot;: &quot;New arrival 🔥&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531822/وصل-حديثا&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 162,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;New arrival 🔥&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531820,
                &quot;uuid&quot;: &quot;2a11b67c-8bf2-4ee6-8f72-cab762fa88d9&quot;,
                &quot;name&quot;: &quot;Watches&quot;,
                &quot;slug&quot;: &quot;ساعات&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;ساعات&quot;,
                    &quot;en&quot;: &quot;Watches&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531820/ساعات&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/eeca196c-ebdf-4f1c-aa06-0aa700080413-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/eeca196c-ebdf-4f1c-aa06-0aa700080413.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 165,
                &quot;sub_categories&quot;: [
                    {
                        &quot;id&quot;: 1531843,
                        &quot;uuid&quot;: &quot;c01d91ec-bd01-4755-a8f2-c50569ffd6aa&quot;,
                        &quot;name&quot;: &quot;Men Watches&quot;,
                        &quot;slug&quot;: &quot;ساعات-رجالية&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;ساعات رجالية&quot;,
                            &quot;en&quot;: &quot;Men Watches&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531843/ساعات-رجالية&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 51,
                        &quot;sub_categories&quot;: [
                            {
                                &quot;id&quot;: 1531883,
                                &quot;uuid&quot;: &quot;3ece4c07-1af2-4721-a591-5ef498c4359a&quot;,
                                &quot;name&quot;: &quot;Lineage Watches (m.w)&quot;,
                                &quot;slug&quot;: &quot;لاينج-سر&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;لاينج (س.ر)&quot;,
                                    &quot;en&quot;: &quot;Lineage Watches (m.w)&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531883/لاينج-سر&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 15,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531843,
                                &quot;flat_name&quot;: &quot;Lineage Watches (m.w)&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531845,
                                &quot;uuid&quot;: &quot;09fc17ed-b778-4a25-920a-9b2136b8ac57&quot;,
                                &quot;name&quot;: &quot;Michael Angelo (m.w)&quot;,
                                &quot;slug&quot;: &quot;مايكل-انجلو-سر&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;مايكل انجلو (س.ر)&quot;,
                                    &quot;en&quot;: &quot;Michael Angelo (m.w)&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531845/مايكل-انجلو-سر&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 11,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531843,
                                &quot;flat_name&quot;: &quot;Michael Angelo (m.w)&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            }
                        ],
                        &quot;parent_id&quot;: 1531820,
                        &quot;flat_name&quot;: &quot;Men Watches&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531821,
                        &quot;uuid&quot;: &quot;9c9e95d9-3b1f-4c84-9f7f-bfe2e2e6232d&quot;,
                        &quot;name&quot;: &quot;Women Watches&quot;,
                        &quot;slug&quot;: &quot;ساعات-نسائية&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;ساعات نسائية&quot;,
                            &quot;en&quot;: &quot;Women Watches&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531821/ساعات-نسائية&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 59,
                        &quot;sub_categories&quot;: [
                            {
                                &quot;id&quot;: 1531872,
                                &quot;uuid&quot;: &quot;060196dc-4f7a-43ed-be14-d8fce98be68a&quot;,
                                &quot;name&quot;: &quot;Lineage (w.w)&quot;,
                                &quot;slug&quot;: &quot;لاينج-سن&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;لاينج (س.ن)&quot;,
                                    &quot;en&quot;: &quot;Lineage (w.w)&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531872/لاينج-سن&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 17,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531821,
                                &quot;flat_name&quot;: &quot;Lineage (w.w)&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            },
                            {
                                &quot;id&quot;: 1531825,
                                &quot;uuid&quot;: &quot;c0f95b58-aa20-441c-ac30-273c7dffd03b&quot;,
                                &quot;name&quot;: &quot;Michael Angelo (w.w)&quot;,
                                &quot;slug&quot;: &quot;مايكل-انجلو-سن&quot;,
                                &quot;SEO_category_title&quot;: &quot;&quot;,
                                &quot;SEO_category_description&quot;: &quot;&quot;,
                                &quot;names&quot;: {
                                    &quot;ar&quot;: &quot;مايكل انجلو (س.ن)&quot;,
                                    &quot;en&quot;: &quot;Michael Angelo (w.w)&quot;
                                },
                                &quot;description&quot;: null,
                                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531825/مايكل-انجلو-سن&quot;,
                                &quot;image&quot;: null,
                                &quot;image_full_size&quot;: null,
                                &quot;img_alt_text&quot;: &quot;&quot;,
                                &quot;products_count&quot;: 12,
                                &quot;sub_categories&quot;: [],
                                &quot;parent_id&quot;: 1531821,
                                &quot;flat_name&quot;: &quot;Michael Angelo (w.w)&quot;,
                                &quot;is_published&quot;: true,
                                &quot;metafields&quot;: []
                            }
                        ],
                        &quot;parent_id&quot;: 1531820,
                        &quot;flat_name&quot;: &quot;Women Watches&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    }
                ],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Watches&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531819,
                &quot;uuid&quot;: &quot;76b914aa-11e2-4f3b-a74e-dfb235a055da&quot;,
                &quot;name&quot;: &quot;Festival of Love and Peace&quot;,
                &quot;slug&quot;: &quot;مهرجان-الحب-والسلام&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;مهرجان الحب والسلام&quot;,
                    &quot;en&quot;: &quot;Festival of Love and Peace&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531819/مهرجان-الحب-والسلام&quot;,
                &quot;image&quot;: null,
                &quot;image_full_size&quot;: null,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 294,
                &quot;sub_categories&quot;: [],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Festival of Love and Peace&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            },
            {
                &quot;id&quot;: 1531817,
                &quot;uuid&quot;: &quot;9404d854-9cac-4de6-ac5e-caffa6d73624&quot;,
                &quot;name&quot;: &quot;Perfumes&quot;,
                &quot;slug&quot;: &quot;عطور&quot;,
                &quot;SEO_category_title&quot;: &quot;&quot;,
                &quot;SEO_category_description&quot;: &quot;&quot;,
                &quot;names&quot;: {
                    &quot;ar&quot;: &quot;عطور&quot;,
                    &quot;en&quot;: &quot;Perfumes&quot;
                },
                &quot;description&quot;: null,
                &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531817/عطور&quot;,
                &quot;image&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/fcad02c0-d232-44b3-9ed8-487a7fe2fa0f-260x260.jpg&quot;,
                &quot;image_full_size&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/fcad02c0-d232-44b3-9ed8-487a7fe2fa0f.jpg&quot;,
                &quot;img_alt_text&quot;: &quot;&quot;,
                &quot;products_count&quot;: 136,
                &quot;sub_categories&quot;: [
                    {
                        &quot;id&quot;: 1531858,
                        &quot;uuid&quot;: &quot;f3b845d5-eda6-4cea-9a6a-1c06c5261a59&quot;,
                        &quot;name&quot;: &quot;Unisex Perfumes&quot;,
                        &quot;slug&quot;: &quot;عطور-للجنسين&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;عطور للجنسين&quot;,
                            &quot;en&quot;: &quot;Unisex Perfumes&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531858/عطور-للجنسين&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 11,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531817,
                        &quot;flat_name&quot;: &quot;Unisex Perfumes&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531837,
                        &quot;uuid&quot;: &quot;10d81579-28f9-4b82-9214-5b994014f5f6&quot;,
                        &quot;name&quot;: &quot;Women&#039;s Perfumes&quot;,
                        &quot;slug&quot;: &quot;عطور-نسائية&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;عطور نسائية&quot;,
                            &quot;en&quot;: &quot;Women&#039;s Perfumes&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531837/عطور-نسائية&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 27,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531817,
                        &quot;flat_name&quot;: &quot;Women&#039;s Perfumes&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    },
                    {
                        &quot;id&quot;: 1531818,
                        &quot;uuid&quot;: &quot;ded9f9c1-33da-4302-880d-c68575f9b78b&quot;,
                        &quot;name&quot;: &quot;Men&#039;s Perfumes&quot;,
                        &quot;slug&quot;: &quot;عطور-رجالية&quot;,
                        &quot;SEO_category_title&quot;: &quot;&quot;,
                        &quot;SEO_category_description&quot;: &quot;&quot;,
                        &quot;names&quot;: {
                            &quot;ar&quot;: &quot;عطور رجالية&quot;,
                            &quot;en&quot;: &quot;Men&#039;s Perfumes&quot;
                        },
                        &quot;description&quot;: null,
                        &quot;url&quot;: &quot;https://bstlia.zid.store/categories/1531818/عطور-رجالية&quot;,
                        &quot;image&quot;: null,
                        &quot;image_full_size&quot;: null,
                        &quot;img_alt_text&quot;: &quot;&quot;,
                        &quot;products_count&quot;: 33,
                        &quot;sub_categories&quot;: [],
                        &quot;parent_id&quot;: 1531817,
                        &quot;flat_name&quot;: &quot;Men&#039;s Perfumes&quot;,
                        &quot;is_published&quot;: true,
                        &quot;metafields&quot;: []
                    }
                ],
                &quot;parent_id&quot;: null,
                &quot;flat_name&quot;: &quot;Perfumes&quot;,
                &quot;is_published&quot;: true,
                &quot;metafields&quot;: []
            }
        ],
        &quot;minimal_categories&quot;: [
            {
                &quot;id&quot;: 1456810,
                &quot;uuid&quot;: &quot;4f2ef763-283b-4635-9fb6-8e56bc81caa8&quot;,
                &quot;name&quot;: &quot;Makeup&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531897,
                &quot;uuid&quot;: &quot;0747e9b3-5d19-4a3f-b64d-f25c5c33031c&quot;,
                &quot;name&quot;: &quot;gucci&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531895,
                &quot;uuid&quot;: &quot;faaeca81-bd54-4478-a413-7e3e581c1681&quot;,
                &quot;name&quot;: &quot;Children&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531894,
                &quot;uuid&quot;: &quot;4a14ca05-f7a1-47d6-acb1-32121707ee2d&quot;,
                &quot;name&quot;: &quot;Kids Toys 🧸&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531893,
                &quot;uuid&quot;: &quot;a78bc96b-b4ed-41a4-8928-c7b69e80950c&quot;,
                &quot;name&quot;: &quot;Valentino&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531892,
                &quot;uuid&quot;: &quot;e092dec2-5038-4ed6-850e-a3a9f5c34b06&quot;,
                &quot;name&quot;: &quot;montblanc&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531890,
                &quot;uuid&quot;: &quot;a588ac37-20dc-4f93-8871-599801085eb2&quot;,
                &quot;name&quot;: &quot;versace&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531889,
                &quot;uuid&quot;: &quot;0ae96869-bfa5-4f95-a279-ec425bcfa96b&quot;,
                &quot;name&quot;: &quot;House Warming&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531888,
                &quot;uuid&quot;: &quot;4516c3e1-ef65-46c8-8abf-e2b359efcca1&quot;,
                &quot;name&quot;: &quot;kenzo&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531887,
                &quot;uuid&quot;: &quot;4d17354b-3f62-4d11-892b-01e6bcaa3945&quot;,
                &quot;name&quot;: &quot;hermes&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531886,
                &quot;uuid&quot;: &quot;3fb5fcef-4a1c-4a8f-aa24-211da5ccca40&quot;,
                &quot;name&quot;: &quot;New Born&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531884,
                &quot;uuid&quot;: &quot;41995765-3890-4f94-ad15-b70ab8908452&quot;,
                &quot;name&quot;: &quot;Bags Festival 👜🎪&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531882,
                &quot;uuid&quot;: &quot;5ae07e41-ee4a-41e3-8962-fd1a53b5ccf8&quot;,
                &quot;name&quot;: &quot;tom ford&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531881,
                &quot;uuid&quot;: &quot;454835a7-236b-417b-abe5-1211fbfccebd&quot;,
                &quot;name&quot;: &quot;Weekly Deals🔥&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531880,
                &quot;uuid&quot;: &quot;5e990891-028a-4510-955f-8497e023a637&quot;,
                &quot;name&quot;: &quot;rose &amp; life&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531879,
                &quot;uuid&quot;: &quot;0f6f55b7-3738-4a19-8c5a-c4d6735d9960&quot;,
                &quot;name&quot;: &quot;Flowers &amp; Bouquets&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531871,
                &quot;uuid&quot;: &quot;9590492c-a696-4d15-8664-64185210cc33&quot;,
                &quot;name&quot;: &quot;Congratulations&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531870,
                &quot;uuid&quot;: &quot;343210af-3ea4-484c-b07f-cbba1af118e1&quot;,
                &quot;name&quot;: &quot;Occasion&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531868,
                &quot;uuid&quot;: &quot;f254dafd-5df4-430d-a59f-b3dde83715ab&quot;,
                &quot;name&quot;: &quot;Royal Collection&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531867,
                &quot;uuid&quot;: &quot;ec89fa25-7d62-4bd6-b56f-cac7772c7d4f&quot;,
                &quot;name&quot;: &quot;Gifting for&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531866,
                &quot;uuid&quot;: &quot;87ea32e8-7b5b-49d8-9a70-32304f5090db&quot;,
                &quot;name&quot;: &quot;Heritage Items&quot;,
                &quot;is_published&quot;: true,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 1531873,
                        &quot;uuid&quot;: &quot;cda6d8f8-da34-41e6-ba97-ba7eba358959&quot;,
                        &quot;name&quot;: &quot;Handicrafts&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531869,
                        &quot;uuid&quot;: &quot;f549b29f-04b6-4213-bda0-001a29975e03&quot;,
                        &quot;name&quot;: &quot;Shields&quot;,
                        &quot;is_published&quot;: true
                    }
                ]
            },
            {
                &quot;id&quot;: 1531865,
                &quot;uuid&quot;: &quot;2b3e7761-1537-4844-9306-3623c57ab24c&quot;,
                &quot;name&quot;: &quot;Featured Picks&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531864,
                &quot;uuid&quot;: &quot;8dcd4bac-923d-4ad3-8d4c-4b64831a00fd&quot;,
                &quot;name&quot;: &quot;prada&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531863,
                &quot;uuid&quot;: &quot;fa317687-3aae-4b07-8f7e-db264a011b61&quot;,
                &quot;name&quot;: &quot;dior&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531862,
                &quot;uuid&quot;: &quot;ad3e3f3f-f990-4e7f-ae90-1228dc32be13&quot;,
                &quot;name&quot;: &quot;لامرأة&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531861,
                &quot;uuid&quot;: &quot;66257fdb-e6fd-4223-84c5-01d1e3d23a8a&quot;,
                &quot;name&quot;: &quot;gifts&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531860,
                &quot;uuid&quot;: &quot;444d6176-9d34-469e-81ee-c7227f766149&quot;,
                &quot;name&quot;: &quot;ysl&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531859,
                &quot;uuid&quot;: &quot;28968460-a185-40d5-bf46-9eaba60fe7e3&quot;,
                &quot;name&quot;: &quot;amouage&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531857,
                &quot;uuid&quot;: &quot;a1540e93-6eac-422a-a33f-9bceb530c301&quot;,
                &quot;name&quot;: &quot;Get Well Soon&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531856,
                &quot;uuid&quot;: &quot;bb098525-dfb9-4378-ae44-64558b122cd5&quot;,
                &quot;name&quot;: &quot;Graduation&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531855,
                &quot;uuid&quot;: &quot;c55ec2e7-38bd-4e0f-948e-012b1be9f9ec&quot;,
                &quot;name&quot;: &quot;Father&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531854,
                &quot;uuid&quot;: &quot;5394647a-7e34-4c95-9028-a091838d47dc&quot;,
                &quot;name&quot;: &quot;For Men&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531853,
                &quot;uuid&quot;: &quot;c61f4652-4ac7-4e35-945f-4de46e1772c8&quot;,
                &quot;name&quot;: &quot;Mother&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531852,
                &quot;uuid&quot;: &quot;2061844e-d565-4000-b9fa-457970131fc9&quot;,
                &quot;name&quot;: &quot;Birthday&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531851,
                &quot;uuid&quot;: &quot;33d74dc7-0d3a-4d8d-84db-33f1810925bf&quot;,
                &quot;name&quot;: &quot;I love You&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531850,
                &quot;uuid&quot;: &quot;a0c5aae8-6308-43f5-ab02-cf6908876098&quot;,
                &quot;name&quot;: &quot;Displayed Products&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531849,
                &quot;uuid&quot;: &quot;27099b35-7d27-4a72-84f3-dfb34d870fdd&quot;,
                &quot;name&quot;: &quot;Accessories&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531848,
                &quot;uuid&quot;: &quot;cba61bcb-e4d4-4601-9684-effee4e389cd&quot;,
                &quot;name&quot;: &quot;lineage&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531846,
                &quot;uuid&quot;: &quot;3eb35909-292c-4d43-95be-f29b7c915975&quot;,
                &quot;name&quot;: &quot;Best Selling&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531844,
                &quot;uuid&quot;: &quot;70e50758-57fb-49df-aba1-a4bd0f19cc6b&quot;,
                &quot;name&quot;: &quot;Michael angelo-men&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531841,
                &quot;uuid&quot;: &quot;638ec779-79e1-4381-a143-3d16a9241613&quot;,
                &quot;name&quot;: &quot;Jewelry&quot;,
                &quot;is_published&quot;: true,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 1531896,
                        &quot;uuid&quot;: &quot;5444b13d-71ed-4601-8fbb-d6f7aba98bce&quot;,
                        &quot;name&quot;: &quot;Accessories&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531891,
                        &quot;uuid&quot;: &quot;0e86b58b-8d8a-45ad-b669-d877f87cbaae&quot;,
                        &quot;name&quot;: &quot;Gemstones&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531842,
                        &quot;uuid&quot;: &quot;9f74c3b8-3581-4722-923f-0bf54ed9f845&quot;,
                        &quot;name&quot;: &quot;Silver&quot;,
                        &quot;is_published&quot;: true
                    }
                ]
            },
            {
                &quot;id&quot;: 1531840,
                &quot;uuid&quot;: &quot;b6515618-850b-475c-b8a2-bc84f731b4e0&quot;,
                &quot;name&quot;: &quot;Perfumes Festival&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531839,
                &quot;uuid&quot;: &quot;63478b7a-bdf2-4711-b9ce-9e7cc4e29e42&quot;,
                &quot;name&quot;: &quot;Anniversary&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531838,
                &quot;uuid&quot;: &quot;91b32102-35f4-4afe-9fd1-f05329b34695&quot;,
                &quot;name&quot;: &quot;Wedding&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531831,
                &quot;uuid&quot;: &quot;7561cb49-8f83-4f7b-a902-bfb315bef49a&quot;,
                &quot;name&quot;: &quot;Hot Deals ⚡️&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531830,
                &quot;uuid&quot;: &quot;f5ade2b2-c212-4e78-9f81-9044c99f8109&quot;,
                &quot;name&quot;: &quot;Friend&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531829,
                &quot;uuid&quot;: &quot;19b07cf1-fc83-4086-ba9b-fa7303448b92&quot;,
                &quot;name&quot;: &quot;For Women&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531826,
                &quot;uuid&quot;: &quot;d03080d2-35e1-4533-91bd-2b7cdbae4a32&quot;,
                &quot;name&quot;: &quot;Bags &amp; Wallets&quot;,
                &quot;is_published&quot;: true,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 1531834,
                        &quot;uuid&quot;: &quot;71dd7df0-ec3e-4efe-9849-a576cff727a6&quot;,
                        &quot;name&quot;: &quot;Wallets&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531827,
                        &quot;uuid&quot;: &quot;d524f31a-bb5f-40f4-9138-c2ccca682e47&quot;,
                        &quot;name&quot;: &quot;Bags&quot;,
                        &quot;is_published&quot;: true
                    }
                ]
            },
            {
                &quot;id&quot;: 1531823,
                &quot;uuid&quot;: &quot;0eb91f53-8de8-43d7-8a1c-e57984141720&quot;,
                &quot;name&quot;: &quot;Michael Angelo&quot;,
                &quot;is_published&quot;: true,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 1531832,
                        &quot;uuid&quot;: &quot;b3a42a35-dea1-4cf8-82ee-f653a49d71f8&quot;,
                        &quot;name&quot;: &quot;Bags- Michael Angelo&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531824,
                        &quot;uuid&quot;: &quot;6bd81888-ddc9-4174-817b-ea0379df5a39&quot;,
                        &quot;name&quot;: &quot;Watches- Michael Angelo&quot;,
                        &quot;is_published&quot;: true
                    }
                ]
            },
            {
                &quot;id&quot;: 1531822,
                &quot;uuid&quot;: &quot;0bdcceba-e488-4b45-8d89-881127a0df81&quot;,
                &quot;name&quot;: &quot;New arrival 🔥&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531820,
                &quot;uuid&quot;: &quot;2a11b67c-8bf2-4ee6-8f72-cab762fa88d9&quot;,
                &quot;name&quot;: &quot;Watches&quot;,
                &quot;is_published&quot;: true,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 1531843,
                        &quot;uuid&quot;: &quot;c01d91ec-bd01-4755-a8f2-c50569ffd6aa&quot;,
                        &quot;name&quot;: &quot;Men Watches&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531821,
                        &quot;uuid&quot;: &quot;9c9e95d9-3b1f-4c84-9f7f-bfe2e2e6232d&quot;,
                        &quot;name&quot;: &quot;Women Watches&quot;,
                        &quot;is_published&quot;: true
                    }
                ]
            },
            {
                &quot;id&quot;: 1531819,
                &quot;uuid&quot;: &quot;76b914aa-11e2-4f3b-a74e-dfb235a055da&quot;,
                &quot;name&quot;: &quot;Festival of Love and Peace&quot;,
                &quot;is_published&quot;: true
            },
            {
                &quot;id&quot;: 1531817,
                &quot;uuid&quot;: &quot;9404d854-9cac-4de6-ac5e-caffa6d73624&quot;,
                &quot;name&quot;: &quot;Perfumes&quot;,
                &quot;is_published&quot;: true,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 1531858,
                        &quot;uuid&quot;: &quot;f3b845d5-eda6-4cea-9a6a-1c06c5261a59&quot;,
                        &quot;name&quot;: &quot;Unisex Perfumes&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531837,
                        &quot;uuid&quot;: &quot;10d81579-28f9-4b82-9214-5b994014f5f6&quot;,
                        &quot;name&quot;: &quot;Women&#039;s Perfumes&quot;,
                        &quot;is_published&quot;: true
                    },
                    {
                        &quot;id&quot;: 1531818,
                        &quot;uuid&quot;: &quot;ded9f9c1-33da-4302-880d-c68575f9b78b&quot;,
                        &quot;name&quot;: &quot;Men&#039;s Perfumes&quot;,
                        &quot;is_published&quot;: true
                    }
                ]
            }
        ],
        &quot;products_count&quot;: 414,
        &quot;pagination&quot;: {
            &quot;page&quot;: 1,
            &quot;page_size&quot;: 100,
            &quot;next_page&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;result_count&quot;: 53
        },
        &quot;message&quot;: {
            &quot;type&quot;: &quot;object&quot;,
            &quot;code&quot;: null,
            &quot;name&quot;: null,
            &quot;description&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-categories" data-method="GET"
      data-path="api/zid/merchant/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-categories"
                    onclick="tryItOut('GETapi-zid-merchant-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-categories"
                    onclick="cancelTryOut('GETapi-zid-merchant-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-categories--id-">GET api/zid/merchant/categories/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/categories/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/categories/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-categories--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch category&quot;,
    &quot;errors&quot;: {
        &quot;status&quot;: &quot;error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;error&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_OK&quot;,
            &quot;name&quot;: &quot;Sorry&quot;,
            &quot;description&quot;: &quot;Category not found.&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-categories--id-" data-method="GET"
      data-path="api/zid/merchant/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-categories--id-"
                    onclick="tryItOut('GETapi-zid-merchant-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-categories--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-categories--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-orders">GET api/zid/merchant/orders</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/orders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: {
        &quot;status&quot;: &quot;object&quot;,
        &quot;orders&quot;: [],
        &quot;grand_total&quot;: 0,
        &quot;total_order_count&quot;: 0,
        &quot;total_order_count_per_status&quot;: {
            &quot;initial&quot;: 0
        },
        &quot;tax_settings&quot;: {
            &quot;can_use_vat&quot;: true,
            &quot;vat_activate&quot;: false,
            &quot;is_vat_self_paid&quot;: false,
            &quot;is_vat_included_in_product_price&quot;: true,
            &quot;is_shipping_fee_included_in_vat&quot;: false,
            &quot;other_countries_tax_percentage&quot;: 0,
            &quot;countries&quot;: []
        },
        &quot;storeColors&quot;: {
            &quot;btn_default_background_color&quot;: &quot;#00b286&quot;,
            &quot;btn_default_text_color&quot;: &quot;#ffffff&quot;
        },
        &quot;printed_invoice_settings&quot;: {
            &quot;is_zid_invoice_generation_enabled&quot;: true,
            &quot;is_tax_number_active&quot;: true,
            &quot;is_return_policy_active&quot;: true,
            &quot;is_products_weight_active&quot;: true,
            &quot;is_products_image_active&quot;: true,
            &quot;is_barcode_active&quot;: true,
            &quot;is_qr_code_active&quot;: true,
            &quot;is_expected_time_active&quot;: true,
            &quot;is_store_address_active&quot;: true,
            &quot;is_vat_settings_active&quot;: true,
            &quot;is_sku_active&quot;: true,
            &quot;is_thanks_msg_active&quot;: true,
            &quot;is_order_status_active&quot;: true,
            &quot;is_discount_coupon_active&quot;: true,
            &quot;config_logo&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d176360c-9f7f-4b1c-8d4e-57f0782b92b3-200x.jpg&quot;,
            &quot;store_business_address&quot;: &quot; Saudi Arabia Riyadh&quot;,
            &quot;store_business_name&quot;: &quot;Haddiya Test&quot;,
            &quot;store_business_type&quot;: null,
            &quot;commercial_number&quot;: null,
            &quot;is_payment_stamp_active&quot;: true,
            &quot;is_order_notifications_enabled&quot;: true,
            &quot;is_owner_email_notifications_enabled&quot;: true,
            &quot;is_product_description_active&quot;: true
        },
        &quot;orders_list_view_settings&quot;: {
            &quot;order_number_column&quot;: true,
            &quot;customer_column&quot;: true,
            &quot;created_at_column&quot;: true,
            &quot;updated_at_column&quot;: true,
            &quot;source_column&quot;: true,
            &quot;shipping_method_column&quot;: true,
            &quot;payment_method_column&quot;: true,
            &quot;customer_note_column&quot;: true,
            &quot;tags_column&quot;: true,
            &quot;order_status_column&quot;: true,
            &quot;payment_status_column&quot;: true,
            &quot;totals_column&quot;: true,
            &quot;action_buttons&quot;: true
        },
        &quot;message&quot;: {
            &quot;type&quot;: &quot;object&quot;,
            &quot;code&quot;: null,
            &quot;name&quot;: null,
            &quot;description&quot;: null
        }
    },
    &quot;data&quot;: &quot;Orders fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-orders" data-method="GET"
      data-path="api/zid/merchant/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-orders"
                    onclick="tryItOut('GETapi-zid-merchant-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-orders"
                    onclick="cancelTryOut('GETapi-zid-merchant-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-orders--id-">GET api/zid/merchant/orders/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/orders/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/orders/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch order&quot;,
    &quot;errors&quot;: {
        &quot;status&quot;: &quot;error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;error&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_BACK&quot;,
            &quot;name&quot;: &quot;Sorry&quot;,
            &quot;description&quot;: &quot;Order not found&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-orders--id-" data-method="GET"
      data-path="api/zid/merchant/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-orders--id-"
                    onclick="tryItOut('GETapi-zid-merchant-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-orders--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-orders--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-carts">GET api/zid/merchant/carts</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-carts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/carts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/carts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-carts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch abandoned carts&quot;,
    &quot;errors&quot;: {
        &quot;status&quot;: &quot;validation_error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;validation_errors&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_OK&quot;,
            &quot;name&quot;: &quot;Inputs&quot;,
            &quot;description&quot;: &quot;Input errors!&quot;,
            &quot;validations&quot;: [
                {
                    &quot;field&quot;: &quot;page&quot;,
                    &quot;errors&quot;: [
                        &quot;The page field is required.&quot;
                    ]
                },
                {
                    &quot;field&quot;: &quot;page_size&quot;,
                    &quot;errors&quot;: [
                        &quot;The page size field is required.&quot;
                    ]
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-carts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-carts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-carts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-carts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-carts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-carts" data-method="GET"
      data-path="api/zid/merchant/carts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-carts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-carts"
                    onclick="tryItOut('GETapi-zid-merchant-carts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-carts"
                    onclick="cancelTryOut('GETapi-zid-merchant-carts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-carts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/carts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-carts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-carts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-carts--id-">GET api/zid/merchant/carts/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-carts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/carts/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/carts/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-carts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch abandoned cart&quot;,
    &quot;errors&quot;: {
        &quot;status&quot;: &quot;validation_error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;validation_errors&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_OK&quot;,
            &quot;name&quot;: &quot;Inputs&quot;,
            &quot;description&quot;: &quot;Input errors!&quot;,
            &quot;validations&quot;: [
                {
                    &quot;field&quot;: &quot;id&quot;,
                    &quot;errors&quot;: [
                        &quot;The id field must be a valid UUID.&quot;
                    ]
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-carts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-carts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-carts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-carts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-carts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-carts--id-" data-method="GET"
      data-path="api/zid/merchant/carts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-carts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-carts--id-"
                    onclick="tryItOut('GETapi-zid-merchant-carts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-carts--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-carts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-carts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/carts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-carts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-carts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-carts--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the cart. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-shipping-methods">GET api/zid/merchant/shipping-methods</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-shipping-methods">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/shipping-methods" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/shipping-methods"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-shipping-methods">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Shipping methods fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;object&quot;,
        &quot;delivery_options&quot;: [],
        &quot;system_delivery_options&quot;: [],
        &quot;message&quot;: {
            &quot;type&quot;: &quot;object&quot;,
            &quot;code&quot;: null,
            &quot;name&quot;: null,
            &quot;description&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-shipping-methods" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-shipping-methods"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-shipping-methods"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-shipping-methods" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-shipping-methods">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-shipping-methods" data-method="GET"
      data-path="api/zid/merchant/shipping-methods"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-shipping-methods', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-shipping-methods"
                    onclick="tryItOut('GETapi-zid-merchant-shipping-methods');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-shipping-methods"
                    onclick="cancelTryOut('GETapi-zid-merchant-shipping-methods');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-shipping-methods"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/shipping-methods</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-shipping-methods"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-shipping-methods"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-reviews--type-">GET api/zid/merchant/reviews/{type}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-reviews--type-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/reviews/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/reviews/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-reviews--type-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch reviews&quot;,
    &quot;errors&quot;: {
        &quot;status&quot;: &quot;validation_error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;validation_errors&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_OK&quot;,
            &quot;name&quot;: &quot;Inputs&quot;,
            &quot;description&quot;: &quot;Input errors!&quot;,
            &quot;validations&quot;: [
                {
                    &quot;field&quot;: &quot;type&quot;,
                    &quot;errors&quot;: [
                        &quot;The selected type is invalid.&quot;
                    ]
                }
            ]
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-reviews--type-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-reviews--type-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-reviews--type-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-reviews--type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-reviews--type-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-reviews--type-" data-method="GET"
      data-path="api/zid/merchant/reviews/{type}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-reviews--type-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-reviews--type-"
                    onclick="tryItOut('GETapi-zid-merchant-reviews--type-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-reviews--type-"
                    onclick="cancelTryOut('GETapi-zid-merchant-reviews--type-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-reviews--type-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/reviews/{type}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-reviews--type-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-reviews--type-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-zid-merchant-reviews--type-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-badges">GET api/zid/merchant/badges</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-badges">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/badges" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/badges"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-badges">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;منتج مميز&quot;,
                    &quot;en&quot;: &quot;Special Product&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;featured_product&quot;
                }
            },
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;شحن مجاني&quot;,
                    &quot;en&quot;: &quot;Free Shipping&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;free_shipping&quot;
                }
            },
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;يباع سريعًا&quot;,
                    &quot;en&quot;: &quot;Selling fast&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;selling_fast&quot;
                }
            },
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;مخفض&quot;,
                    &quot;en&quot;: &quot;Discounted&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;on_sale&quot;
                }
            },
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;كمية محدودة&quot;,
                    &quot;en&quot;: &quot;Limited Quantity&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;limited_quantity&quot;
                }
            },
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;خصم {discount_value}&quot;,
                    &quot;en&quot;: &quot;{discount_value} Discount&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;discount_value&quot;
                }
            },
            {
                &quot;body&quot;: {
                    &quot;ar&quot;: &quot;خصم {discount_percent}&quot;,
                    &quot;en&quot;: &quot;{discount_percent} Discount&quot;
                },
                &quot;is_example&quot;: true,
                &quot;icon&quot;: {
                    &quot;code&quot;: &quot;discount_percent&quot;
                }
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-badges" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-badges"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-badges"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-badges" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-badges">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-badges" data-method="GET"
      data-path="api/zid/merchant/badges"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-badges', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-badges"
                    onclick="tryItOut('GETapi-zid-merchant-badges');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-badges"
                    onclick="cancelTryOut('GETapi-zid-merchant-badges');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-badges"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/badges</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-badges"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-badges"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-attributes">GET api/zid/merchant/attributes</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-attributes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/attributes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/attributes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-attributes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;count&quot;: 1,
        &quot;next&quot;: null,
        &quot;previous&quot;: null,
        &quot;results&quot;: [
            {
                &quot;id&quot;: &quot;b16bf48c-39da-4666-bc90-7a236644301a&quot;,
                &quot;name&quot;: {
                    &quot;ar&quot;: &quot;لون الحقيبة&quot;,
                    &quot;en&quot;: &quot;bag color&quot;
                },
                &quot;slug&quot;: &quot;ar-لون-الحقيبة-en-bag-color&quot;,
                &quot;presets&quot;: [
                    {
                        &quot;id&quot;: &quot;368ee4d0-6e66-4962-b86d-07fbbb6b9cda&quot;,
                        &quot;slug&quot;: &quot;ar-لون-الحقيبة-en-bag-color&quot;,
                        &quot;name&quot;: &quot;bag color&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;احمر&quot;,
                            &quot;en&quot;: &quot;red&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;display_order&quot;: null,
                        &quot;attribute_image_id&quot;: null,
                        &quot;attribute_id&quot;: &quot;b16bf48c-39da-4666-bc90-7a236644301a&quot;
                    },
                    {
                        &quot;id&quot;: &quot;f80baa3a-e3e2-407a-839b-27b4b58476ad&quot;,
                        &quot;slug&quot;: &quot;ar-لون-الحقيبة-en-bag-color&quot;,
                        &quot;name&quot;: &quot;bag color&quot;,
                        &quot;value&quot;: {
                            &quot;ar&quot;: &quot;ابيض&quot;,
                            &quot;en&quot;: &quot;white&quot;
                        },
                        &quot;type&quot;: &quot;default&quot;,
                        &quot;type_value&quot;: {
                            &quot;ar&quot;: &quot;&quot;,
                            &quot;en&quot;: &quot;&quot;
                        },
                        &quot;display_order&quot;: null,
                        &quot;attribute_image_id&quot;: null,
                        &quot;attribute_id&quot;: &quot;b16bf48c-39da-4666-bc90-7a236644301a&quot;
                    }
                ],
                &quot;is_extra&quot;: false,
                &quot;is_enabled&quot;: true,
                &quot;display_order&quot;: null,
                &quot;preset_count&quot;: 2
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-attributes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-attributes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-attributes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-attributes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-attributes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-attributes" data-method="GET"
      data-path="api/zid/merchant/attributes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-attributes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-attributes"
                    onclick="tryItOut('GETapi-zid-merchant-attributes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-attributes"
                    onclick="cancelTryOut('GETapi-zid-merchant-attributes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-attributes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/attributes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-attributes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-attributes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-attributes--id-">GET api/zid/merchant/attributes/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-attributes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/attributes/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/attributes/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-attributes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch attribute&quot;,
    &quot;errors&quot;: {
        &quot;detail&quot;: &quot;Not found.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-attributes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-attributes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-attributes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-attributes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-attributes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-attributes--id-" data-method="GET"
      data-path="api/zid/merchant/attributes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-attributes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-attributes--id-"
                    onclick="tryItOut('GETapi-zid-merchant-attributes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-attributes--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-attributes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-attributes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/attributes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-attributes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-attributes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-attributes--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the attribute. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-customers">GET api/zid/merchant/customers</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-customers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/customers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/customers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-customers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: {
        &quot;status&quot;: &quot;object&quot;,
        &quot;customers&quot;: [
            {
                &quot;id&quot;: 4584676,
                &quot;name&quot;: &quot;DHIYA Alnadabi&quot;,
                &quot;email&quot;: &quot;alnadabidhiyaa@gmail.com&quot;,
                &quot;mobile&quot;: &quot;96891329892&quot;,
                &quot;gender&quot;: null,
                &quot;birth_date&quot;: null,
                &quot;verified&quot;: true,
                &quot;is_active&quot;: true,
                &quot;is_cod_enabled&quot;: true,
                &quot;type&quot;: &quot;individual&quot;,
                &quot;business_name&quot;: null,
                &quot;tax_number&quot;: null,
                &quot;commercial_registration&quot;: null,
                &quot;source&quot;: null,
                &quot;points&quot;: 0,
                &quot;order_total_payments&quot;: &quot;0.00000000000000&quot;,
                &quot;last_order_date&quot;: null,
                &quot;created_at&quot;: &quot;2026-01-04T10:25:48.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-06-02T09:38:19.000000Z&quot;,
                &quot;city&quot;: null,
                &quot;nickname&quot;: &quot;DHIYA Alnadabi&quot;,
                &quot;pivotEmail&quot;: &quot;alnadabidhiyaa@gmail.com&quot;,
                &quot;pivotMobile&quot;: &quot;96891329892&quot;,
                &quot;order_counts&quot;: 0,
                &quot;tags&quot;: []
            }
        ],
        &quot;grand_total&quot;: 1,
        &quot;total_customers_count&quot;: 1,
        &quot;active_customers_count&quot;: 1,
        &quot;inactive_customers_count&quot;: 0,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;object&quot;,
            &quot;code&quot;: null,
            &quot;name&quot;: null,
            &quot;description&quot;: null
        }
    },
    &quot;data&quot;: &quot;Customers fetched successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-customers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-customers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-customers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-customers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-customers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-customers" data-method="GET"
      data-path="api/zid/merchant/customers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-customers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-customers"
                    onclick="tryItOut('GETapi-zid-merchant-customers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-customers"
                    onclick="cancelTryOut('GETapi-zid-merchant-customers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-customers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/customers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-customers--id-">GET api/zid/merchant/customers/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/customers/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/customers/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-customers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to fetch customer&quot;,
    &quot;errors&quot;: {
        &quot;status&quot;: &quot;error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;error&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_OK&quot;,
            &quot;name&quot;: &quot;Sorry&quot;,
            &quot;description&quot;: &quot;Store Page not found&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-customers--id-" data-method="GET"
      data-path="api/zid/merchant/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-customers--id-"
                    onclick="tryItOut('GETapi-zid-merchant-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-customers--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-customers--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-zid-merchant-customers">POST api/zid/merchant/customers</h2>

<p>
</p>



<span id="example-requests-POSTapi-zid-merchant-customers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/zid/merchant/customers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/customers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-zid-merchant-customers">
</span>
<span id="execution-results-POSTapi-zid-merchant-customers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-zid-merchant-customers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-zid-merchant-customers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-zid-merchant-customers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-zid-merchant-customers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-zid-merchant-customers" data-method="POST"
      data-path="api/zid/merchant/customers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-zid-merchant-customers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-zid-merchant-customers"
                    onclick="tryItOut('POSTapi-zid-merchant-customers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-zid-merchant-customers"
                    onclick="cancelTryOut('POSTapi-zid-merchant-customers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-zid-merchant-customers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/zid/merchant/customers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-zid-merchant-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-zid-merchant-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-zid-merchant-customers--id-">PUT api/zid/merchant/customers/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-zid-merchant-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/zid/merchant/customers/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/customers/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-zid-merchant-customers--id-">
</span>
<span id="execution-results-PUTapi-zid-merchant-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-zid-merchant-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-zid-merchant-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-zid-merchant-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-zid-merchant-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-zid-merchant-customers--id-" data-method="PUT"
      data-path="api/zid/merchant/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-zid-merchant-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-zid-merchant-customers--id-"
                    onclick="tryItOut('PUTapi-zid-merchant-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-zid-merchant-customers--id-"
                    onclick="cancelTryOut('PUTapi-zid-merchant-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-zid-merchant-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/zid/merchant/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-zid-merchant-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-zid-merchant-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-zid-merchant-customers--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-zid-merchant-customers--id-">DELETE api/zid/merchant/customers/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-zid-merchant-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/zid/merchant/customers/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/customers/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-zid-merchant-customers--id-">
</span>
<span id="execution-results-DELETEapi-zid-merchant-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-zid-merchant-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-zid-merchant-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-zid-merchant-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-zid-merchant-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-zid-merchant-customers--id-" data-method="DELETE"
      data-path="api/zid/merchant/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-zid-merchant-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-zid-merchant-customers--id-"
                    onclick="tryItOut('DELETEapi-zid-merchant-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-zid-merchant-customers--id-"
                    onclick="cancelTryOut('DELETEapi-zid-merchant-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-zid-merchant-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/zid/merchant/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-zid-merchant-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-zid-merchant-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-zid-merchant-customers--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-coupons">GET api/zid/merchant/coupons</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-coupons">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/coupons" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/coupons"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-coupons">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Coupons fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;object&quot;,
        &quot;coupons&quot;: [
            {
                &quot;coupon_id&quot;: 6318745,
                &quot;id&quot;: 6318745,
                &quot;store_id&quot;: 1085223,
                &quot;store_name&quot;: &quot;Haddiya Test&quot;,
                &quot;store_logo&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d176360c-9f7f-4b1c-8d4e-57f0782b92b3-200x.jpg&quot;,
                &quot;code&quot;: &quot;welcome10&quot;,
                &quot;uses_total&quot;: 1,
                &quot;created_at&quot;: &quot;2026-06-07T10:05:14.000000Z&quot;,
                &quot;name&quot;: &quot;welcome10&quot;,
                &quot;total_usage&quot;: 0,
                &quot;discount_type&quot;: &quot;p&quot;,
                &quot;applying_method&quot;: &quot;CODE&quot;,
                &quot;discount_strategy&quot;: &quot;standard&quot;,
                &quot;progressive_config&quot;: null,
                &quot;conditions&quot;: [],
                &quot;conditions_criteria&quot;: &quot;all&quot;,
                &quot;discount&quot;: 15,
                &quot;logged&quot;: false,
                &quot;free_shipping&quot;: false,
                &quot;free_cod&quot;: false,
                &quot;apply_to&quot;: &quot;all&quot;,
                &quot;total&quot;: 0,
                &quot;max_total&quot;: 0,
                &quot;max_weight&quot;: 0,
                &quot;date_start&quot;: &quot;2026-06-07&quot;,
                &quot;date_end&quot;: &quot;2026-07-31&quot;,
                &quot;uses_customer&quot;: 1,
                &quot;coupon_status&quot;: true,
                &quot;status_code&quot;: &quot;coupon_active&quot;,
                &quot;maximum_discount_value&quot;: null,
                &quot;is_mazeed_active&quot;: false,
                &quot;is_pos_active&quot;: false,
                &quot;is_shown_in_pos&quot;: false,
                &quot;is_mobile_app_active&quot;: false,
                &quot;is_manageable&quot;: true,
                &quot;is_active&quot;: true,
                &quot;enabled&quot;: true
            },
            {
                &quot;coupon_id&quot;: 5082249,
                &quot;id&quot;: 5082249,
                &quot;store_id&quot;: 1085223,
                &quot;store_name&quot;: &quot;Haddiya Test&quot;,
                &quot;store_logo&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d176360c-9f7f-4b1c-8d4e-57f0782b92b3-200x.jpg&quot;,
                &quot;code&quot;: &quot;MobileApp-AutoDiscou&quot;,
                &quot;uses_total&quot;: 0,
                &quot;created_at&quot;: &quot;2025-08-26T14:42:48.000000Z&quot;,
                &quot;name&quot;: &quot;MobileApp-AutoDiscount-1085223&quot;,
                &quot;total_usage&quot;: 0,
                &quot;discount_type&quot;: &quot;p&quot;,
                &quot;applying_method&quot;: &quot;AUTOMATIC&quot;,
                &quot;discount_strategy&quot;: &quot;standard&quot;,
                &quot;progressive_config&quot;: null,
                &quot;conditions&quot;: [],
                &quot;conditions_criteria&quot;: &quot;all&quot;,
                &quot;discount&quot;: 0,
                &quot;logged&quot;: false,
                &quot;free_shipping&quot;: false,
                &quot;free_cod&quot;: false,
                &quot;apply_to&quot;: &quot;all&quot;,
                &quot;total&quot;: 0,
                &quot;max_total&quot;: 0,
                &quot;max_weight&quot;: 0,
                &quot;date_start&quot;: &quot;2025-08-26&quot;,
                &quot;date_end&quot;: &quot;2026-08-26&quot;,
                &quot;uses_customer&quot;: 0,
                &quot;coupon_status&quot;: false,
                &quot;status_code&quot;: &quot;coupon_inactive&quot;,
                &quot;maximum_discount_value&quot;: null,
                &quot;is_mazeed_active&quot;: false,
                &quot;is_pos_active&quot;: false,
                &quot;is_shown_in_pos&quot;: false,
                &quot;is_mobile_app_active&quot;: false,
                &quot;is_manageable&quot;: true,
                &quot;is_active&quot;: false,
                &quot;enabled&quot;: false
            },
            {
                &quot;coupon_id&quot;: 5082248,
                &quot;id&quot;: 5082248,
                &quot;store_id&quot;: 1085223,
                &quot;store_name&quot;: &quot;Haddiya Test&quot;,
                &quot;store_logo&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d176360c-9f7f-4b1c-8d4e-57f0782b92b3-200x.jpg&quot;,
                &quot;code&quot;: &quot;OnlinePayment-AutoDi&quot;,
                &quot;uses_total&quot;: 0,
                &quot;created_at&quot;: &quot;2025-08-26T14:42:48.000000Z&quot;,
                &quot;name&quot;: &quot;OnlinePayment-AutoDiscount-1085223&quot;,
                &quot;total_usage&quot;: 0,
                &quot;discount_type&quot;: &quot;p&quot;,
                &quot;applying_method&quot;: &quot;AUTOMATIC&quot;,
                &quot;discount_strategy&quot;: &quot;standard&quot;,
                &quot;progressive_config&quot;: null,
                &quot;conditions&quot;: [
                    {
                        &quot;operator&quot;: &quot;type&quot;,
                        &quot;field&quot;: &quot;payment_options&quot;,
                        &quot;action&quot;: &quot;INCLUDE&quot;,
                        &quot;value&quot;: &quot;integrated&quot;
                    }
                ],
                &quot;conditions_criteria&quot;: &quot;all&quot;,
                &quot;discount&quot;: 0,
                &quot;logged&quot;: false,
                &quot;free_shipping&quot;: false,
                &quot;free_cod&quot;: false,
                &quot;apply_to&quot;: &quot;all&quot;,
                &quot;total&quot;: 0,
                &quot;max_total&quot;: 0,
                &quot;max_weight&quot;: 0,
                &quot;date_start&quot;: &quot;2025-08-26&quot;,
                &quot;date_end&quot;: &quot;2026-08-26&quot;,
                &quot;uses_customer&quot;: 0,
                &quot;coupon_status&quot;: false,
                &quot;status_code&quot;: &quot;coupon_inactive&quot;,
                &quot;maximum_discount_value&quot;: null,
                &quot;is_mazeed_active&quot;: false,
                &quot;is_pos_active&quot;: false,
                &quot;is_shown_in_pos&quot;: false,
                &quot;is_mobile_app_active&quot;: false,
                &quot;is_manageable&quot;: true,
                &quot;is_active&quot;: false,
                &quot;enabled&quot;: false
            },
            {
                &quot;coupon_id&quot;: 5082247,
                &quot;id&quot;: 5082247,
                &quot;store_id&quot;: 1085223,
                &quot;store_name&quot;: &quot;Haddiya Test&quot;,
                &quot;store_logo&quot;: &quot;https://media.zid.store/99fbb737-1b1d-4d99-b027-abb4eabe4b12/d176360c-9f7f-4b1c-8d4e-57f0782b92b3-200x.jpg&quot;,
                &quot;code&quot;: &quot;FreeShipping-AutoDis&quot;,
                &quot;uses_total&quot;: 0,
                &quot;created_at&quot;: &quot;2025-08-26T14:42:48.000000Z&quot;,
                &quot;name&quot;: &quot;FreeShipping-AutoDiscount-1085223&quot;,
                &quot;total_usage&quot;: 0,
                &quot;discount_type&quot;: &quot;n&quot;,
                &quot;applying_method&quot;: &quot;AUTOMATIC&quot;,
                &quot;discount_strategy&quot;: &quot;standard&quot;,
                &quot;progressive_config&quot;: null,
                &quot;conditions&quot;: [
                    {
                        &quot;operator&quot;: &quot;in&quot;,
                        &quot;field&quot;: &quot;customer_location&quot;,
                        &quot;action&quot;: &quot;INCLUDE&quot;,
                        &quot;value&quot;: {
                            &quot;cities&quot;: [],
                            &quot;countries&quot;: []
                        }
                    }
                ],
                &quot;conditions_criteria&quot;: &quot;all&quot;,
                &quot;discount&quot;: 0,
                &quot;logged&quot;: false,
                &quot;free_shipping&quot;: true,
                &quot;free_cod&quot;: false,
                &quot;apply_to&quot;: &quot;all&quot;,
                &quot;total&quot;: 0,
                &quot;max_total&quot;: 0,
                &quot;max_weight&quot;: 0,
                &quot;date_start&quot;: &quot;2025-08-26&quot;,
                &quot;date_end&quot;: &quot;2026-08-26&quot;,
                &quot;uses_customer&quot;: 0,
                &quot;coupon_status&quot;: false,
                &quot;status_code&quot;: &quot;coupon_inactive&quot;,
                &quot;maximum_discount_value&quot;: null,
                &quot;is_mazeed_active&quot;: false,
                &quot;is_pos_active&quot;: false,
                &quot;is_shown_in_pos&quot;: false,
                &quot;is_mobile_app_active&quot;: false,
                &quot;is_manageable&quot;: true,
                &quot;is_active&quot;: false,
                &quot;enabled&quot;: false
            }
        ],
        &quot;count&quot;: 4,
        &quot;grand_total&quot;: 4,
        &quot;active_coupons_count&quot;: 1,
        &quot;inactive_coupons_count&quot;: 3,
        &quot;expired_coupons_count&quot;: 0,
        &quot;pagination&quot;: {
            &quot;page&quot;: 1,
            &quot;page_size&quot;: 15,
            &quot;next_page&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;result_count&quot;: 4
        },
        &quot;message&quot;: {
            &quot;type&quot;: &quot;object&quot;,
            &quot;code&quot;: null,
            &quot;name&quot;: null,
            &quot;description&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-coupons" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-coupons"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-coupons"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-coupons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-coupons">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-coupons" data-method="GET"
      data-path="api/zid/merchant/coupons"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-coupons', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-coupons"
                    onclick="tryItOut('GETapi-zid-merchant-coupons');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-coupons"
                    onclick="cancelTryOut('GETapi-zid-merchant-coupons');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-coupons"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/coupons</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-coupons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-coupons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-merchant-coupons--id-">GET api/zid/merchant/coupons/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-coupons--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/coupons/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/coupons/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-coupons--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: {
        &quot;status&quot;: &quot;error&quot;,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;error&quot;,
            &quot;code&quot;: &quot;ERROR_POPUP_BACK&quot;,
            &quot;name&quot;: &quot;Sorry&quot;,
            &quot;description&quot;: &quot;Coupon not found&quot;
        }
    },
    &quot;errors&quot;: &quot;Failed to fetch coupon&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-coupons--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-coupons--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-coupons--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-coupons--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-coupons--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-coupons--id-" data-method="GET"
      data-path="api/zid/merchant/coupons/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-coupons--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-coupons--id-"
                    onclick="tryItOut('GETapi-zid-merchant-coupons--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-coupons--id-"
                    onclick="cancelTryOut('GETapi-zid-merchant-coupons--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-coupons--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/coupons/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-coupons--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-coupons--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-zid-merchant-coupons--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the coupon. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-zid-merchant-bundle-offers">GET api/zid/merchant/bundle-offers</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-merchant-bundle-offers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/merchant/bundle-offers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/merchant/bundle-offers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-merchant-bundle-offers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Bundle offers fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;status&quot;: &quot;object&quot;,
        &quot;discount_rules&quot;: [],
        &quot;page&quot;: 1,
        &quot;next_page&quot;: null,
        &quot;last_page&quot;: 1,
        &quot;total&quot;: 0,
        &quot;message&quot;: {
            &quot;type&quot;: &quot;object&quot;,
            &quot;code&quot;: null,
            &quot;name&quot;: null,
            &quot;description&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-merchant-bundle-offers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-merchant-bundle-offers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-merchant-bundle-offers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-merchant-bundle-offers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-merchant-bundle-offers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-merchant-bundle-offers" data-method="GET"
      data-path="api/zid/merchant/bundle-offers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-merchant-bundle-offers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-merchant-bundle-offers"
                    onclick="tryItOut('GETapi-zid-merchant-bundle-offers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-merchant-bundle-offers"
                    onclick="cancelTryOut('GETapi-zid-merchant-bundle-offers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-merchant-bundle-offers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/merchant/bundle-offers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-merchant-bundle-offers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-merchant-bundle-offers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-storefront-test-session">Test Session</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-storefront-test-session">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/storefront/test-session" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/storefront/test-session"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-storefront-test-session">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-storefront-test-session" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-storefront-test-session"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-storefront-test-session"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-storefront-test-session" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-storefront-test-session">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-storefront-test-session" data-method="GET"
      data-path="api/zid/storefront/test-session"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-storefront-test-session', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-storefront-test-session"
                    onclick="tryItOut('GETapi-zid-storefront-test-session');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-storefront-test-session"
                    onclick="cancelTryOut('GETapi-zid-storefront-test-session');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-storefront-test-session"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/storefront/test-session</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-storefront-test-session"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-storefront-test-session"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-zid-storefront-cart">Get Cart</h2>

<p>
</p>



<span id="example-requests-GETapi-zid-storefront-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/zid/storefront/cart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/storefront/cart"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-zid-storefront-cart">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Cart fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;session_id&quot;: &quot;&quot;,
        &quot;phase&quot;: &quot;&quot;,
        &quot;required_customer_email&quot;: false,
        &quot;currency&quot;: {
            &quot;cart_currency&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Saudi Riyal&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 183,
                    &quot;name&quot;: &quot;Saudi Arabia&quot;,
                    &quot;code&quot;: &quot;SA&quot;,
                    &quot;country_code&quot;: &quot;+966&quot;,
                    &quot;flag&quot;: &quot;https://media.zid.store/static/sa.svg&quot;,
                    &quot;currency_code&quot;: &quot;SAR&quot;,
                    &quot;iso_code_2&quot;: &quot;SA&quot;,
                    &quot;iso_code_3&quot;: &quot;SAU&quot;
                },
                &quot;code&quot;: &quot;SAR&quot;,
                &quot;symbol&quot;: &quot;ر.س&quot;
            },
            &quot;cart_store_currency&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Saudi Riyal&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 183,
                    &quot;name&quot;: &quot;Saudi Arabia&quot;,
                    &quot;code&quot;: &quot;SA&quot;,
                    &quot;country_code&quot;: &quot;+966&quot;,
                    &quot;flag&quot;: &quot;https://media.zid.store/static/sa.svg&quot;,
                    &quot;currency_code&quot;: &quot;SAR&quot;,
                    &quot;iso_code_2&quot;: &quot;SA&quot;,
                    &quot;iso_code_3&quot;: &quot;SAU&quot;
                },
                &quot;code&quot;: &quot;SAR&quot;,
                &quot;symbol&quot;: &quot;ر.س&quot;
            }
        },
        &quot;customer&quot;: null,
        &quot;skip_address&quot;: false,
        &quot;requires_shipping&quot;: false,
        &quot;shipping_address&quot;: null,
        &quot;shipping_method&quot;: null,
        &quot;payment_method&quot;: null,
        &quot;products&quot;: [],
        &quot;products_count&quot;: 0,
        &quot;products_weight&quot;: 0,
        &quot;products_subtotal&quot;: 0,
        &quot;discount_rules&quot;: [],
        &quot;totals&quot;: [],
        &quot;coupon&quot;: null,
        &quot;compliment_coupon&quot;: null,
        &quot;coupon_error_message&quot;: null,
        &quot;checkout_restrictions&quot;: null,
        &quot;created_at&quot;: &quot;2026-06-08T04:30:08.539469&quot;,
        &quot;is_reserved&quot;: false,
        &quot;basket_url&quot;: &quot;&quot;,
        &quot;gift_card_details&quot;: null,
        &quot;loyalty_applied_redemption_method&quot;: null,
        &quot;service_fee_config&quot;: null,
        &quot;total&quot;: null,
        &quot;total_value&quot;: 0,
        &quot;has_bundle_offer&quot;: false,
        &quot;free_shipping_rule&quot;: {
            &quot;code&quot;: null,
            &quot;subtotal_condition&quot;: {
                &quot;min&quot;: null,
                &quot;max&quot;: null,
                &quot;min_string&quot;: null,
                &quot;max_string&quot;: null,
                &quot;products_subtotal&quot;: 0,
                &quot;cart_total&quot;: 0,
                &quot;products_subtotal_percentage_from_min&quot;: null,
                &quot;remaining&quot;: null,
                &quot;status&quot;: null
            },
            &quot;shipping_cities_condition&quot;: []
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-zid-storefront-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-zid-storefront-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-zid-storefront-cart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-zid-storefront-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-zid-storefront-cart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-zid-storefront-cart" data-method="GET"
      data-path="api/zid/storefront/cart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-zid-storefront-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-zid-storefront-cart"
                    onclick="tryItOut('GETapi-zid-storefront-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-zid-storefront-cart"
                    onclick="cancelTryOut('GETapi-zid-storefront-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-zid-storefront-cart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/zid/storefront/cart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-zid-storefront-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-zid-storefront-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-zid-storefront-cart-items">POST api/zid/storefront/cart/items</h2>

<p>
</p>



<span id="example-requests-POSTapi-zid-storefront-cart-items">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/zid/storefront/cart/items" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_id\": \"architecto\",
    \"quantity\": 22
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/storefront/cart/items"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": "architecto",
    "quantity": 22
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-zid-storefront-cart-items">
</span>
<span id="execution-results-POSTapi-zid-storefront-cart-items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-zid-storefront-cart-items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-zid-storefront-cart-items"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-zid-storefront-cart-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-zid-storefront-cart-items">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-zid-storefront-cart-items" data-method="POST"
      data-path="api/zid/storefront/cart/items"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-zid-storefront-cart-items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-zid-storefront-cart-items"
                    onclick="tryItOut('POSTapi-zid-storefront-cart-items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-zid-storefront-cart-items"
                    onclick="cancelTryOut('POSTapi-zid-storefront-cart-items');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-zid-storefront-cart-items"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/zid/storefront/cart/items</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-zid-storefront-cart-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-zid-storefront-cart-items"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_id"                data-endpoint="POSTapi-zid-storefront-cart-items"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-zid-storefront-cart-items"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-zid-storefront-cart-items--itemId-">PATCH api/zid/storefront/cart/items/{itemId}</h2>

<p>
</p>



<span id="example-requests-PATCHapi-zid-storefront-cart-items--itemId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/zid/storefront/cart/items/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"quantity\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/storefront/cart/items/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "quantity": 16
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-zid-storefront-cart-items--itemId-">
</span>
<span id="execution-results-PATCHapi-zid-storefront-cart-items--itemId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-zid-storefront-cart-items--itemId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-zid-storefront-cart-items--itemId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-zid-storefront-cart-items--itemId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-zid-storefront-cart-items--itemId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-zid-storefront-cart-items--itemId-" data-method="PATCH"
      data-path="api/zid/storefront/cart/items/{itemId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-zid-storefront-cart-items--itemId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-zid-storefront-cart-items--itemId-"
                    onclick="tryItOut('PATCHapi-zid-storefront-cart-items--itemId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-zid-storefront-cart-items--itemId-"
                    onclick="cancelTryOut('PATCHapi-zid-storefront-cart-items--itemId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-zid-storefront-cart-items--itemId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/zid/storefront/cart/items/{itemId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-zid-storefront-cart-items--itemId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-zid-storefront-cart-items--itemId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>itemId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="itemId"                data-endpoint="PATCHapi-zid-storefront-cart-items--itemId-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="PATCHapi-zid-storefront-cart-items--itemId-"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-zid-storefront-cart-items--itemId-">DELETE api/zid/storefront/cart/items/{itemId}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-zid-storefront-cart-items--itemId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/zid/storefront/cart/items/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/storefront/cart/items/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-zid-storefront-cart-items--itemId-">
</span>
<span id="execution-results-DELETEapi-zid-storefront-cart-items--itemId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-zid-storefront-cart-items--itemId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-zid-storefront-cart-items--itemId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-zid-storefront-cart-items--itemId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-zid-storefront-cart-items--itemId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-zid-storefront-cart-items--itemId-" data-method="DELETE"
      data-path="api/zid/storefront/cart/items/{itemId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-zid-storefront-cart-items--itemId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-zid-storefront-cart-items--itemId-"
                    onclick="tryItOut('DELETEapi-zid-storefront-cart-items--itemId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-zid-storefront-cart-items--itemId-"
                    onclick="cancelTryOut('DELETEapi-zid-storefront-cart-items--itemId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-zid-storefront-cart-items--itemId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/zid/storefront/cart/items/{itemId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-zid-storefront-cart-items--itemId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-zid-storefront-cart-items--itemId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>itemId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="itemId"                data-endpoint="DELETEapi-zid-storefront-cart-items--itemId-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-zid-storefront-cart-coupons">POST api/zid/storefront/cart/coupons</h2>

<p>
</p>



<span id="example-requests-POSTapi-zid-storefront-cart-coupons">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/zid/storefront/cart/coupons" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"coupon_code\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/zid/storefront/cart/coupons"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "coupon_code": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-zid-storefront-cart-coupons">
</span>
<span id="execution-results-POSTapi-zid-storefront-cart-coupons" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-zid-storefront-cart-coupons"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-zid-storefront-cart-coupons"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-zid-storefront-cart-coupons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-zid-storefront-cart-coupons">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-zid-storefront-cart-coupons" data-method="POST"
      data-path="api/zid/storefront/cart/coupons"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-zid-storefront-cart-coupons', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-zid-storefront-cart-coupons"
                    onclick="tryItOut('POSTapi-zid-storefront-cart-coupons');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-zid-storefront-cart-coupons"
                    onclick="cancelTryOut('POSTapi-zid-storefront-cart-coupons');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-zid-storefront-cart-coupons"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/zid/storefront/cart/coupons</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-zid-storefront-cart-coupons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-zid-storefront-cart-coupons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>coupon_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="coupon_code"                data-endpoint="POSTapi-zid-storefront-cart-coupons"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-store-branding">GET api/store/branding</h2>

<p>
</p>



<span id="example-requests-GETapi-store-branding">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/store/branding" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/store/branding"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-store-branding">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Store branding fetched successfully&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-store-branding" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-store-branding"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-store-branding"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-store-branding" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-store-branding">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-store-branding" data-method="GET"
      data-path="api/store/branding"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-store-branding', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-store-branding"
                    onclick="tryItOut('GETapi-store-branding');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-store-branding"
                    onclick="cancelTryOut('GETapi-store-branding');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-store-branding"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/store/branding</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-store-branding"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-store-branding"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-store-localization">GET api/store/localization</h2>

<p>
</p>



<span id="example-requests-GETapi-store-localization">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/store/localization" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/store/localization"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-store-localization">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Store localization fetched successfully&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-store-localization" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-store-localization"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-store-localization"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-store-localization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-store-localization">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-store-localization" data-method="GET"
      data-path="api/store/localization"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-store-localization', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-store-localization"
                    onclick="tryItOut('GETapi-store-localization');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-store-localization"
                    onclick="cancelTryOut('GETapi-store-localization');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-store-localization"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/store/localization</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-store-localization"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-store-localization"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
