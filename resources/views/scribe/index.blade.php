<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

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
        var tryItOutBaseUrl = "http://tickets-please.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.38.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.38.0.js") }}"></script>

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
                    <ul id="tocify-header-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-login">
                                <a href="#authentication-POSTapi-login">Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-logout">
                                <a href="#authentication-POSTapi-logout">Logout</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets">
                                <a href="#endpoints-GETapi-tickets">GET api/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-tickets--id-">
                                <a href="#endpoints-GETapi-v1-tickets--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-tickets--id-">
                                <a href="#endpoints-DELETEapi-v1-tickets--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-tickets--ticket_id-">
                                <a href="#endpoints-PUTapi-v1-tickets--ticket_id-">PUT api/v1/tickets/{ticket_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-tickets--ticket_id-">
                                <a href="#endpoints-PATCHapi-v1-tickets--ticket_id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users">
                                <a href="#endpoints-GETapi-v1-users">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users">
                                <a href="#endpoints-POSTapi-v1-users">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users--id-">
                                <a href="#endpoints-GETapi-v1-users--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-users--id-">
                                <a href="#endpoints-DELETEapi-v1-users--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-users--user_id-">
                                <a href="#endpoints-PUTapi-v1-users--user_id-">PUT api/v1/users/{user_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-users--user_id-">
                                <a href="#endpoints-PATCHapi-v1-users--user_id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors">
                                <a href="#endpoints-GETapi-v1-authors">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors--id-">
                                <a href="#endpoints-GETapi-v1-authors--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors--author_id--tickets">
                                <a href="#endpoints-GETapi-v1-authors--author_id--tickets">GET api/v1/authors/{author_id}/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-authors--author_id--tickets">
                                <a href="#endpoints-POSTapi-v1-authors--author_id--tickets">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-authors--author_id--tickets--id-">
                                <a href="#endpoints-DELETEapi-v1-authors--author_id--tickets--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-authors--author--tickets--ticket-">
                                <a href="#endpoints-PUTapi-v1-authors--author--tickets--ticket-">PUT api/v1/authors/{author}/tickets/{ticket}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-authors--author--tickets--ticket-">
                                <a href="#endpoints-PATCHapi-v1-authors--author--tickets--ticket-">PATCH api/v1/authors/{author}/tickets/{ticket}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-managing-tickets" class="tocify-header">
                <li class="tocify-item level-1" data-unique="managing-tickets">
                    <a href="#managing-tickets">Managing Tickets</a>
                </li>
                                    <ul id="tocify-subheader-managing-tickets" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="managing-tickets-GETapi-v1-tickets">
                                <a href="#managing-tickets-GETapi-v1-tickets">Get all tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="managing-tickets-POSTapi-v1-tickets">
                                <a href="#managing-tickets-POSTapi-v1-tickets">Create a ticket</a>
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
        <li>Last updated: November 7, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://tickets-please.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="authentication">Authentication</h1>

    

                                <h2 id="authentication-POSTapi-login">Login</h2>

<p>
</p>

<p>Authenticates the user and returns the user's API token.</p>

<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-please.test/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"kariane.strosin@example.org\",
    \"password\": \"rQQNiz\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "kariane.strosin@example.org",
    "password": "rQQNiz"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Authenticated&quot;,
    &quot;data&quot;: {
        &quot;token&quot;: &quot;{YOUR_AUTH_KEY}&quot;
    },
    &quot;status&quot;: 200
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="kariane.strosin@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>kariane.strosin@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="rQQNiz"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>rQQNiz</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-logout">Logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Signs out the user and destroy's the API token.</p>

<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-please.test/api/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-tickets">GET api/tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets">
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

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;Patched title&quot;,
        &quot;description&quot;: &quot;Facilis sequi ipsum velit cum sint. Eum incidunt vel iure alias ut minima. Delectus animi sed voluptas voluptas.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:20:15.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;laborum nulla aspernatur&quot;,
        &quot;description&quot;: &quot;Quia ipsa et aliquid sed id in earum. Voluptatibus quasi consequatur inventore voluptas sed quaerat. Nisi praesentium natus libero voluptas. Labore in dolorum corporis eligendi fugit dolorem earum.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;at et nisi&quot;,
        &quot;description&quot;: &quot;Expedita reprehenderit perferendis officia error. Laborum doloribus amet aut odio qui fuga est. Impedit architecto possimus qui quia unde omnis. Laboriosam sint rerum commodi earum.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;corporis voluptas similique&quot;,
        &quot;description&quot;: &quot;Ut culpa aut est cupiditate quis sed dicta. Nihil est laborum numquam animi omnis sequi. Facilis minus molestiae minima ducimus iste et illo. Suscipit molestiae quasi et.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;consequatur deserunt fugit&quot;,
        &quot;description&quot;: &quot;Est doloremque occaecati qui quia aperiam sed suscipit. Tempora est maxime rem dolores. Voluptas non autem sed reprehenderit.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;blanditiis repellat voluptate&quot;,
        &quot;description&quot;: &quot;Laboriosam expedita quod itaque suscipit reiciendis. Omnis dolor numquam et consectetur sunt distinctio eveniet veritatis. Dolores odit adipisci quaerat vero aut sit eligendi.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;quaerat quo voluptas&quot;,
        &quot;description&quot;: &quot;Aperiam velit laborum dolores nulla quo sed voluptates. Rerum vitae ipsa voluptas dicta enim. Sit vel non nihil officiis quas. Non eos sapiente placeat est nemo.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;impedit ut fuga&quot;,
        &quot;description&quot;: &quot;Aut nam porro a maxime. Et est quia omnis id libero odio alias. Ipsa dolorem ad odio consequuntur. Eum et molestiae enim sapiente expedita omnis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;et animi dolor&quot;,
        &quot;description&quot;: &quot;Mollitia et iure et autem et amet unde. Culpa modi tempore sit illo iure sit minus. Est vitae ut atque aliquam tempore quibusdam voluptatem. Molestiae dolorem voluptas et dolorem.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;Patched title&quot;,
        &quot;description&quot;: &quot;Patched description&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:18:21.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;in iure amet&quot;,
        &quot;description&quot;: &quot;A est cumque animi quidem sit. Soluta maxime mollitia sed ullam. Aut dolore cum nobis dolor iure praesentium.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;repellendus et error&quot;,
        &quot;description&quot;: &quot;Molestiae rerum non repellendus quisquam rerum corrupti natus ea. Necessitatibus omnis delectus quos modi voluptatum quas.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;deleniti perferendis voluptas&quot;,
        &quot;description&quot;: &quot;Et fugiat perferendis accusantium perferendis sed et. Sit maxime est sequi iure soluta laborum. Enim voluptatem laboriosam molestias consequatur voluptas soluta sunt modi. Amet nulla voluptas debitis autem consequatur in.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;et veritatis dolor&quot;,
        &quot;description&quot;: &quot;Sit libero et sunt atque a dicta. Repellendus ratione atque laudantium ut est dolorem iure. Voluptatem recusandae earum maxime enim. Quisquam eos eos cupiditate rerum a in.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;hic et fugit&quot;,
        &quot;description&quot;: &quot;Vel sit tempore accusantium. Temporibus qui ipsa eum cumque sint mollitia recusandae. Et dicta labore ut voluptates animi dolor esse officiis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;saepe sit accusamus&quot;,
        &quot;description&quot;: &quot;Dignissimos magnam laudantium laboriosam et aut ipsa libero eligendi. Dolores earum magni est. Vel est quia corporis adipisci voluptatem architecto. Et dignissimos quae velit aliquam.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;vitae ipsa et&quot;,
        &quot;description&quot;: &quot;Incidunt incidunt sequi quo est qui sed. Exercitationem est dicta quia voluptatum dolores saepe. Cumque ex unde corrupti deleniti tempore architecto voluptatem. Libero et non dignissimos vitae voluptatem nostrum beatae.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;quo odit pariatur&quot;,
        &quot;description&quot;: &quot;Et quod debitis ducimus beatae. Corrupti minima quaerat nostrum alias eos cum corporis. Et dolor iusto culpa commodi.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;pariatur cupiditate distinctio&quot;,
        &quot;description&quot;: &quot;Laboriosam a architecto quo. Dolorum ullam earum quaerat natus fugiat ut soluta aliquid. Rerum sequi sint odio officia tenetur. Odio modi dolores qui quia et aperiam suscipit.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;dolore voluptatem tempora&quot;,
        &quot;description&quot;: &quot;Nemo reiciendis quas molestiae enim. Eum consequuntur corporis voluptatem. Culpa assumenda explicabo eligendi quae non. Dolor hic similique necessitatibus sint.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;dolorem qui repudiandae&quot;,
        &quot;description&quot;: &quot;Sunt dolorum hic repellendus. Ut maxime fugiat quae asperiores.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;molestiae voluptatibus adipisci&quot;,
        &quot;description&quot;: &quot;Quos molestias quae quisquam deserunt dolores assumenda. Est molestiae voluptatem dolorem natus et exercitationem fugit. Laborum placeat laudantium esse molestiae est adipisci.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;magni quis quam&quot;,
        &quot;description&quot;: &quot;Eos est voluptas atque rerum. Praesentium rerum harum accusantium. Quia est doloremque in porro sit.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;aut enim neque&quot;,
        &quot;description&quot;: &quot;Sapiente exercitationem voluptatem minus qui delectus dolores quod. Hic occaecati doloribus voluptas quam culpa nobis repudiandae. Et odio laborum at harum inventore quia vel.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;ut itaque alias&quot;,
        &quot;description&quot;: &quot;Consequatur minima facere veniam nesciunt. Temporibus itaque commodi est distinctio sint similique.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;ut vel ut&quot;,
        &quot;description&quot;: &quot;Quia sunt tenetur sint cupiditate. Tempora doloribus porro magnam quo. Sunt occaecati numquam quas.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;dolor perspiciatis et&quot;,
        &quot;description&quot;: &quot;Qui consequatur mollitia aperiam consequuntur assumenda. Quae accusantium molestiae qui quisquam quibusdam.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;laboriosam eius dolorem&quot;,
        &quot;description&quot;: &quot;Nam laudantium molestiae fuga sit voluptatum. Omnis ut eius iure quia quibusdam natus occaecati debitis. Dolorem facere magni sit id aut inventore. Sit fugiat quibusdam quis.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;dolorem aut aliquam&quot;,
        &quot;description&quot;: &quot;Et et eum laborum totam ipsum animi molestiae. Enim sed ratione voluptatibus eum. Impedit esse maxime magnam consectetur reprehenderit qui qui.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;vero dolorem quas&quot;,
        &quot;description&quot;: &quot;Ad labore ut qui incidunt aspernatur saepe. Rerum consequatur ut ratione laborum magnam nisi.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;maxime voluptatem impedit&quot;,
        &quot;description&quot;: &quot;Suscipit omnis dicta vel ex harum. Qui doloremque voluptates et autem nesciunt doloribus.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;omnis rerum necessitatibus&quot;,
        &quot;description&quot;: &quot;Quidem in neque exercitationem saepe. Alias delectus laboriosam molestiae nostrum nulla. Velit iure sunt odio accusamus voluptas dolor soluta. Vel culpa est voluptatem aut.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;voluptatem occaecati quisquam&quot;,
        &quot;description&quot;: &quot;Molestiae et nihil id id culpa. Est repudiandae non blanditiis cum qui. Aliquid corporis et debitis maiores dolor. Ipsa et distinctio nam vitae.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;nostrum impedit sed&quot;,
        &quot;description&quot;: &quot;Est consequatur tempora atque reiciendis. At aut fugiat est mollitia laudantium. Dolor praesentium illo hic quia voluptas architecto facere. Error saepe non hic veniam.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;quia nam unde&quot;,
        &quot;description&quot;: &quot;Quia ducimus ipsam maiores odio animi. Porro in vitae non. Iusto voluptatibus at qui quia ea ratione. Quas et distinctio et molestiae ut rerum dicta.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;quasi sint est&quot;,
        &quot;description&quot;: &quot;Et reprehenderit quasi nostrum libero. Doloremque est architecto molestiae blanditiis nam dolor. Ducimus nisi deserunt dolorum sit officia aliquid.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;sed facilis adipisci&quot;,
        &quot;description&quot;: &quot;Est rem voluptatem sed vero. Quo sunt nam esse vitae velit sit. Voluptas incidunt sapiente delectus ut et. Tempora sit deserunt molestiae quae.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;eius nam veniam&quot;,
        &quot;description&quot;: &quot;Nihil quod a quo aspernatur nobis aperiam. Est et id fuga rerum accusamus id reprehenderit. Sint id totam non alias aut sunt quibusdam. Ipsum id neque aspernatur ut hic eveniet quisquam. Fuga omnis earum animi voluptatem ducimus id.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;nemo deleniti voluptas&quot;,
        &quot;description&quot;: &quot;Facere laudantium possimus incidunt. Ab est autem deleniti iure tempore ex ut. Excepturi ratione doloremque rerum sunt.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;voluptatem ea nihil&quot;,
        &quot;description&quot;: &quot;Ipsum corrupti itaque ut quidem non hic quaerat. Sit corrupti est provident ab.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;totam adipisci dicta&quot;,
        &quot;description&quot;: &quot;Error mollitia id non. Dolorum ut et delectus enim enim quod. Ab eaque consequatur nesciunt ut. Modi beatae assumenda reiciendis voluptatem omnis expedita nihil.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;rerum officiis rem&quot;,
        &quot;description&quot;: &quot;Quae autem corporis repudiandae fugiat autem molestias accusantium. Et eius quam autem dolor quia sit ipsa. Optio facilis natus qui quas.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;et quia consequuntur&quot;,
        &quot;description&quot;: &quot;Aperiam quisquam voluptas ea sed et. Voluptatem qui et a dolores omnis aut consequatur. Magnam voluptate enim ea sed dolor voluptatibus et.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;sunt quo non&quot;,
        &quot;description&quot;: &quot;Eligendi non necessitatibus cupiditate omnis. Tenetur repellendus id cum quia voluptatem. Voluptatum nemo molestiae ipsum omnis. Unde accusantium totam iure quaerat necessitatibus cumque iste. Voluptas esse nostrum et nulla deserunt quo temporibus.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;soluta illum praesentium&quot;,
        &quot;description&quot;: &quot;Eveniet rerum ipsum facilis repellat nostrum a architecto est. Et omnis quas nisi et. Rem aut nihil molestiae repudiandae possimus.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;exercitationem dignissimos cum&quot;,
        &quot;description&quot;: &quot;Commodi tempore voluptas sed omnis aut repudiandae recusandae pariatur. Non similique vero consequuntur porro quisquam repudiandae laudantium. Est et ratione quam facere minima dolor ducimus quo.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;nemo voluptatum veritatis&quot;,
        &quot;description&quot;: &quot;Nostrum sint vel qui voluptatibus et. Eaque dicta laudantium et ex repellendus odit totam.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;voluptate architecto quo&quot;,
        &quot;description&quot;: &quot;Et unde autem ullam labore veniam. Quaerat in quaerat error repellat eius accusamus dicta. Quia aliquam explicabo eligendi expedita eum. Assumenda consequatur error aut sint perspiciatis officiis blanditiis.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;sit est libero&quot;,
        &quot;description&quot;: &quot;Quos quos minima illum corrupti facere. Itaque ducimus repellat et praesentium voluptate. Exercitationem tempore corrupti voluptatem doloribus est blanditiis ut error.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;expedita sunt eligendi&quot;,
        &quot;description&quot;: &quot;Accusamus quisquam debitis quo tempora. Repudiandae perspiciatis omnis vitae nostrum nesciunt non. Aliquid itaque nisi voluptatum totam assumenda enim est.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;eaque consequuntur nobis&quot;,
        &quot;description&quot;: &quot;Sit nemo ipsa nobis ullam tempora saepe. Ut beatae ut consectetur omnis iure delectus. Consequuntur sed excepturi placeat molestiae nemo eligendi necessitatibus atque.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;quae quo voluptatem&quot;,
        &quot;description&quot;: &quot;Soluta qui explicabo error amet sapiente. Qui possimus omnis commodi enim ut eos. Ratione omnis sed asperiores reiciendis est consectetur soluta accusantium.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;nobis inventore veniam&quot;,
        &quot;description&quot;: &quot;Hic aut sit ex sint nam. Ex necessitatibus magni in modi ut. Qui et quo fugit repudiandae explicabo ab. Quasi laborum quibusdam amet voluptatum.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;quia nobis aliquam&quot;,
        &quot;description&quot;: &quot;Et modi aut voluptates voluptates dolor. Soluta minus voluptatem ratione nam aut odio impedit. Atque qui repudiandae dolorem veritatis esse. Dolor qui ut earum odit ad.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;quae commodi vel&quot;,
        &quot;description&quot;: &quot;Quam sapiente in minus. Possimus qui ut impedit et nisi laudantium. Velit sit expedita quidem doloremque quibusdam sunt.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;id ipsum odit&quot;,
        &quot;description&quot;: &quot;Recusandae ab dolores minima modi in est voluptates. Voluptates numquam ut tempore nam. Et vitae consequuntur nihil dolor sed quidem modi.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;repellendus et sit&quot;,
        &quot;description&quot;: &quot;Ut quos quis qui qui dolores hic quia. Sunt consequatur ea in iste quia veritatis deleniti.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;assumenda a sequi&quot;,
        &quot;description&quot;: &quot;In non minima omnis sit ab quos. Architecto dolore nostrum excepturi esse asperiores. Ut aliquam explicabo distinctio occaecati sunt cum.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;beatae veniam esse&quot;,
        &quot;description&quot;: &quot;Rerum vitae soluta neque. Quia sit tempora et neque optio. Doloremque in reprehenderit ea occaecati nostrum temporibus.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;molestiae aut dolores&quot;,
        &quot;description&quot;: &quot;Eos sint eos aut atque tenetur voluptatem. Necessitatibus nisi fugit temporibus debitis consequatur aut. Sit hic ducimus nisi dolorem ab. Nesciunt adipisci eius vel nihil.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;accusantium dolor natus&quot;,
        &quot;description&quot;: &quot;Sed quam facere accusamus nostrum alias. Iste illum aut nemo quas nesciunt. Sit cupiditate nostrum rerum corporis placeat dolor voluptatum ipsam. Facere sed et id.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;nostrum a et&quot;,
        &quot;description&quot;: &quot;Expedita et modi modi nam ut. Reprehenderit ipsa ut ratione veritatis. Sint ducimus aut non.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;cumque provident expedita&quot;,
        &quot;description&quot;: &quot;Molestiae voluptates autem dolorem eaque. Minus numquam nesciunt inventore quam est officiis qui aut. Deserunt voluptatibus reprehenderit laudantium ut molestiae fugiat. Sed excepturi facilis facere quia.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;fugiat fugiat voluptatem&quot;,
        &quot;description&quot;: &quot;Veniam quos voluptatem corrupti non repellendus modi. Quas sunt ea libero. Dignissimos commodi quia officiis sunt tenetur aspernatur qui delectus. Aperiam iure soluta cupiditate dolor occaecati quia id.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;sapiente rem quasi&quot;,
        &quot;description&quot;: &quot;Omnis est rerum neque nesciunt neque. Et id laboriosam aut molestiae esse. Adipisci sed impedit in dolores.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;et labore consequatur&quot;,
        &quot;description&quot;: &quot;Sapiente consequuntur et quod doloremque aut eligendi. Vel rerum ab vel eum. Dolor fugiat eligendi voluptates voluptas ipsam.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;dolorem quis suscipit&quot;,
        &quot;description&quot;: &quot;Id laudantium ut omnis modi velit qui consequatur aliquam. Asperiores rerum quia quas ipsam ea quidem. Laboriosam minima aut vel amet consectetur.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;qui quo sint&quot;,
        &quot;description&quot;: &quot;Totam deserunt ut qui id quia. Illo voluptas voluptas praesentium nihil. Consequatur pariatur qui voluptatem. Qui aliquam nemo rerum deserunt officiis eius ullam et.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;illo et voluptatum&quot;,
        &quot;description&quot;: &quot;In quia id ea omnis est reprehenderit voluptatibus eos. Porro voluptatem a officiis inventore magnam error. Ut eligendi dignissimos porro cupiditate facilis.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;quam modi similique&quot;,
        &quot;description&quot;: &quot;Qui ut omnis tenetur non. Voluptas aliquid omnis ut ullam hic reprehenderit quod cum. Maiores est fugiat cum fugiat sit reprehenderit voluptates.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;repudiandae ab officia&quot;,
        &quot;description&quot;: &quot;Qui est similique voluptatibus omnis culpa voluptate illo excepturi. Non atque blanditiis soluta tempore dolores dolorem quo. Enim consequatur aspernatur voluptatem quia ad eligendi odio.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;animi odit rerum&quot;,
        &quot;description&quot;: &quot;Neque ad rem veniam. Dolor quia quae qui alias esse alias blanditiis aut. Aliquam enim consequuntur reiciendis molestiae laboriosam et voluptas. Officiis ullam laboriosam unde perferendis eos rerum.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;voluptas qui repellendus&quot;,
        &quot;description&quot;: &quot;Qui aut recusandae accusamus dolore. Qui quod molestias quos atque aut. Eligendi et et rem tempore iste. Maxime explicabo blanditiis praesentium.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;tempora consequatur ipsum&quot;,
        &quot;description&quot;: &quot;A exercitationem aperiam libero et vel possimus animi. Sunt unde aperiam fuga ipsam voluptatem. Illum veniam veniam quo rem a tempore velit.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;in aut qui&quot;,
        &quot;description&quot;: &quot;Voluptatibus saepe laboriosam porro ea molestiae sed voluptas voluptatum. Dolorem eum deleniti earum aut molestias eligendi. Quibusdam facere corporis recusandae laborum odio modi molestiae ipsam. Animi quis ut quia sapiente omnis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;earum nemo quia&quot;,
        &quot;description&quot;: &quot;Et et dolor nostrum ea. Voluptatem corrupti et repellat nulla enim omnis laudantium. Odio blanditiis adipisci unde ut qui.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;et sit dolores&quot;,
        &quot;description&quot;: &quot;Velit optio aut vero omnis quod. Corrupti rem incidunt voluptatibus soluta dolorum optio. Dolorem temporibus voluptatum nam rerum repellat voluptates quia. Iste impedit molestiae doloribus alias nihil quas.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;expedita placeat voluptate&quot;,
        &quot;description&quot;: &quot;Vero laborum vel hic expedita sit. Error quidem dolorem magnam ex nulla repellendus. Molestiae sit saepe rerum distinctio a. Dolorem rem sequi odio est ut unde.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;autem quia est&quot;,
        &quot;description&quot;: &quot;Dolor impedit eum impedit a. Labore recusandae rerum est consequatur saepe eum. Quo iusto sed minima voluptas. Et cupiditate rerum quasi qui eos quia sed.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;numquam doloremque quo&quot;,
        &quot;description&quot;: &quot;Aut atque ut aut dicta quod. Occaecati sapiente explicabo itaque asperiores aspernatur autem omnis. Reprehenderit quidem libero vitae eaque dicta beatae molestiae ut.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;totam numquam reprehenderit&quot;,
        &quot;description&quot;: &quot;Dolores at repudiandae qui sed minus ut. Ut enim et ea amet. At sint quis voluptatem aut cum ut quasi. Minima nihil quisquam voluptatem provident et.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;enim eos quo&quot;,
        &quot;description&quot;: &quot;Molestias facilis quibusdam ut architecto aut. Excepturi nisi repudiandae voluptatibus nesciunt magni. Ad qui incidunt deserunt aspernatur incidunt. Optio vel totam eveniet.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;ab facilis laudantium&quot;,
        &quot;description&quot;: &quot;Est et dolores alias minus reprehenderit nostrum. Explicabo laboriosam illum placeat dolor. Sit officiis adipisci esse. Nemo fugit cum quos in dolorem.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;impedit molestiae facilis&quot;,
        &quot;description&quot;: &quot;Nihil aut beatae iusto accusantium quasi. Similique quia repellendus ipsa aut incidunt. Nulla eius libero neque aut aliquid omnis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;ut iure consequatur&quot;,
        &quot;description&quot;: &quot;Animi illum quam excepturi ut aut. Illum modi et dolorem sit. Esse aliquid et at vel corrupti sunt sunt. Porro aut officiis architecto minima.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;omnis beatae enim&quot;,
        &quot;description&quot;: &quot;Ipsa assumenda aut consequatur aut est sit. Dignissimos rerum veritatis doloribus et impedit saepe commodi. Cumque cum nihil at voluptas itaque fugit.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;rerum eaque dolore&quot;,
        &quot;description&quot;: &quot;Corrupti velit corporis explicabo voluptatibus eum voluptatibus totam. Libero aliquid voluptas ipsa aut. Enim eos dignissimos voluptatem eaque sed.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;nam soluta illo&quot;,
        &quot;description&quot;: &quot;Natus aut aut voluptatibus id suscipit placeat repellendus. Et quia dicta dolor deserunt qui sed debitis. Officiis quaerat excepturi placeat iste.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;cupiditate vel ipsam&quot;,
        &quot;description&quot;: &quot;Dolor rerum dolores quod corrupti repellendus. Facere voluptatem hic et. Possimus tenetur cupiditate ipsum earum.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;ea qui voluptas&quot;,
        &quot;description&quot;: &quot;Ab illum officia officia sed praesentium fuga. Odit delectus placeat ullam. Aliquid porro sit qui modi. Quam repellendus dolor iusto qui sapiente doloribus consequatur.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;et sunt facilis&quot;,
        &quot;description&quot;: &quot;Illo corrupti ullam rerum sunt sint vero. Est omnis natus vel aliquid totam et non. Ipsam reprehenderit harum sit ea recusandae blanditiis sed. Voluptas quasi excepturi et totam est praesentium mollitia.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;voluptatem perferendis excepturi&quot;,
        &quot;description&quot;: &quot;Labore suscipit iste officiis similique recusandae. Dolores et voluptatem sequi adipisci nemo vel veniam. Iusto id fugit vel vero ut. Fuga eum doloribus doloremque.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;vel expedita mollitia&quot;,
        &quot;description&quot;: &quot;In sequi sunt quisquam et aut. Ut adipisci distinctio maxime. Non harum consequatur est ex harum quam est. Assumenda hic nisi optio velit.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;impedit nobis sit&quot;,
        &quot;description&quot;: &quot;Omnis quod debitis corporis corrupti. Eaque ipsa omnis excepturi rerum. Dolores aut assumenda minima ut.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;vel est voluptas&quot;,
        &quot;description&quot;: &quot;Occaecati fugiat voluptate perferendis rerum. Maiores aperiam reprehenderit eum tempore eum voluptate. Ut et voluptates saepe nisi consequatur eligendi. Assumenda voluptates enim eligendi laudantium molestias quia.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;iure qui necessitatibus&quot;,
        &quot;description&quot;: &quot;Consectetur error sint quia dignissimos tempora reiciendis. Aut qui voluptatem odit est in nam.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;ea voluptatibus aut&quot;,
        &quot;description&quot;: &quot;Velit non nemo possimus libero eius odio alias pariatur. Id nulla sunt deleniti impedit dolores et et. Cupiditate molestias et est est totam incidunt doloribus. Culpa vitae qui aliquid fuga voluptatem modi vel. Eos tempore odio molestias velit.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;Patched title&quot;,
        &quot;description&quot;: &quot;Consequatur repudiandae magnam voluptas voluptas quo non. Dolorem fugiat quo deserunt. Magni nam id non mollitia impedit et. Ea nostrum hic velit provident quia. Suscipit commodi quod vero voluptate iste vero.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-31T19:36:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;quis voluptas nisi&quot;,
        &quot;description&quot;: &quot;Error rem expedita quo odio culpa. Amet aut neque rem rerum ex possimus quisquam.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;itaque dignissimos et&quot;,
        &quot;description&quot;: &quot;Temporibus reprehenderit iusto et nam totam doloribus accusamus. Accusantium saepe perferendis vero dolores rerum. Et voluptatem sapiente fuga beatae explicabo ipsam.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 101,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;New ticket&quot;,
        &quot;description&quot;: &quot;New description ticket&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-31T19:37:35.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-31T19:37:35.000000Z&quot;
    },
    {
        &quot;id&quot;: 102,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;New ticket&quot;,
        &quot;description&quot;: &quot;New description ticket&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-10-31T19:39:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-10-31T19:39:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 103,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;new ticket&quot;,
        &quot;description&quot;: &quot;new ticket description&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-11-01T18:50:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-11-01T18:50:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 107,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;New ticket&quot;,
        &quot;description&quot;: &quot;New description ticket&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-11-02T20:20:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-11-02T20:20:58.000000Z&quot;
    },
    {
        &quot;id&quot;: 108,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;Changed title&quot;,
        &quot;description&quot;: &quot;Changed description&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2024-11-02T20:24:30.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-11-02T20:24:35.000000Z&quot;
    },
    {
        &quot;id&quot;: 109,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;new ticket&quot;,
        &quot;description&quot;: &quot;new ticket description&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2024-11-05T19:52:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-11-05T19:52:58.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets" data-method="GET"
      data-path="api/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets"
                    onclick="tryItOut('GETapi-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets"
                    onclick="cancelTryOut('GETapi-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
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
    &quot;id&quot;: 11,
    &quot;name&quot;: &quot;Manager&quot;,
    &quot;email&quot;: &quot;manager@manager.com&quot;,
    &quot;email_verified_at&quot;: null,
    &quot;is_manager&quot;: true,
    &quot;created_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-tickets--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tickets--id-">
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
    &quot;data&quot;: {
        &quot;type&quot;: &quot;ticket&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;Patched title&quot;,
            &quot;status&quot;: &quot;C&quot;,
            &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2024-10-30T20:20:15.000000Z&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: {
                    &quot;type&quot;: &quot;user&quot;,
                    &quot;id&quot;: 8
                },
                &quot;links&quot;: {
                    &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/8&quot;
                }
            }
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tickets--id-" data-method="GET"
      data-path="api/v1/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tickets--id-"
                    onclick="tryItOut('GETapi-v1-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tickets--id-"
                    onclick="cancelTryOut('GETapi-v1-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-tickets--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-please.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-tickets--id-">
</span>
<span id="execution-results-DELETEapi-v1-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-tickets--id-" data-method="DELETE"
      data-path="api/v1/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-tickets--id-"
                    onclick="tryItOut('DELETEapi-v1-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-tickets--id-"
                    onclick="cancelTryOut('DELETEapi-v1-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-tickets--ticket_id-">PUT api/v1/tickets/{ticket_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://tickets-please.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"repudiandae\",
            \"description\": \"Temporibus molestias blanditiis illum.\",
            \"status\": \"C\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 17
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "repudiandae",
            "description": "Temporibus molestias blanditiis illum.",
            "status": "C"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 17
                }
            }
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-tickets--ticket_id-">
</span>
<span id="execution-results-PUTapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-tickets--ticket_id-" data-method="PUT"
      data-path="api/v1/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-tickets--ticket_id-"
                    onclick="tryItOut('PUTapi-v1-tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-tickets--ticket_id-"
                    onclick="cancelTryOut('PUTapi-v1-tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="repudiandae"
               data-component="body">
    <br>
<p>Example: <code>repudiandae</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="Temporibus molestias blanditiis illum."
               data-component="body">
    <br>
<p>Example: <code>Temporibus molestias blanditiis illum.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="C"
               data-component="body">
    <br>
<p>Example: <code>C</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-tickets--ticket_id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://tickets-please.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"quo\",
            \"description\": \"Perferendis cum sit quisquam quis repudiandae aut dolore.\",
            \"status\": \"A\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 7
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "quo",
            "description": "Perferendis cum sit quisquam quis repudiandae aut dolore.",
            "status": "A"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 7
                }
            }
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-tickets--ticket_id-">
</span>
<span id="execution-results-PATCHapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-tickets--ticket_id-" data-method="PATCH"
      data-path="api/v1/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-tickets--ticket_id-"
                    onclick="tryItOut('PATCHapi-v1-tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-tickets--ticket_id-"
                    onclick="cancelTryOut('PATCHapi-v1-tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="quo"
               data-component="body">
    <br>
<p>Example: <code>quo</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="Perferendis cum sit quisquam quis repudiandae aut dolore."
               data-component="body">
    <br>
<p>Example: <code>Perferendis cum sit quisquam quis repudiandae aut dolore.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="A"
               data-component="body">
    <br>
<p>Example: <code>A</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="7"
               data-component="body">
    <br>
<p>Example: <code>7</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-users">Display a listing of the resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
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
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 1,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Philip Grimes&quot;,
                &quot;email&quot;: &quot;omari95@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 2,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Mr. Ward Walsh&quot;,
                &quot;email&quot;: &quot;jast.audrey@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/2&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 3,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Lauriane Leannon DVM&quot;,
                &quot;email&quot;: &quot;cummings.mazie@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/3&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 4,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Mrs. Selina Hessel&quot;,
                &quot;email&quot;: &quot;dino.price@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/4&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 5,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Gracie Renner&quot;,
                &quot;email&quot;: &quot;nicola.ullrich@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/5&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 6,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Khalil Gusikowski&quot;,
                &quot;email&quot;: &quot;mann.madalyn@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/6&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 7,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Elyse Russel&quot;,
                &quot;email&quot;: &quot;mya.oreilly@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 8,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Imani Hodkiewicz&quot;,
                &quot;email&quot;: &quot;stephania.ankunding@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 9,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Prof. Donato Pagac&quot;,
                &quot;email&quot;: &quot;opal.feil@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 10,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Bernadine Waters III&quot;,
                &quot;email&quot;: &quot;yheaney@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/10&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 11,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Manager&quot;,
                &quot;email&quot;: &quot;manager@manager.com&quot;,
                &quot;isManager&quot;: true
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/11&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-please.test/api/v1/users?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-please.test/api/v1/users?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-please.test/api/v1/users&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 11,
        &quot;total&quot;: 11
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-users">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-please.test/api/v1/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"debitis\",
            \"email\": \"gwendolyn21@example.com\",
            \"isManager\": true,
            \"password\": \"aZ%,r@&gt;SiHGhvrY\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "debitis",
            "email": "gwendolyn21@example.com",
            "isManager": true,
            "password": "aZ%,r@&gt;SiHGhvrY"
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users">
</span>
<span id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-users" data-method="POST"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users"
                    onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users"
                    onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="POSTapi-v1-users"
               value="debitis"
               data-component="body">
    <br>
<p>Example: <code>debitis</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="POSTapi-v1-users"
               value="gwendolyn21@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gwendolyn21@example.com</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-users" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="POSTapi-v1-users"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-users" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="POSTapi-v1-users"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="POSTapi-v1-users"
               value="aZ%,r@>SiHGhvrY"
               data-component="body">
    <br>
<p>Example: <code>aZ%,r@&gt;SiHGhvrY</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-users--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users--id-">
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
    &quot;data&quot;: {
        &quot;type&quot;: &quot;user&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;Philip Grimes&quot;,
            &quot;email&quot;: &quot;omari95@example.org&quot;,
            &quot;isManager&quot;: false
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users--id-" data-method="GET"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users--id-"
                    onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users--id-"
                    onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-users--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-please.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-users--id-">
</span>
<span id="execution-results-DELETEapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-users--id-" data-method="DELETE"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-users--id-"
                    onclick="tryItOut('DELETEapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-users--id-"
                    onclick="cancelTryOut('DELETEapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-users--user_id-">PUT api/v1/users/{user_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://tickets-please.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"veritatis\",
            \"email\": \"wanda14@example.com\",
            \"isManager\": true,
            \"password\": \"~ELajT|HFSh:oE&gt;4\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "veritatis",
            "email": "wanda14@example.com",
            "isManager": true,
            "password": "~ELajT|HFSh:oE&gt;4"
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-users--user_id-">
</span>
<span id="execution-results-PUTapi-v1-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-users--user_id-" data-method="PUT"
      data-path="api/v1/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-users--user_id-"
                    onclick="tryItOut('PUTapi-v1-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-users--user_id-"
                    onclick="cancelTryOut('PUTapi-v1-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-users--user_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-users--user_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="PUTapi-v1-users--user_id-"
               value="veritatis"
               data-component="body">
    <br>
<p>Example: <code>veritatis</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="PUTapi-v1-users--user_id-"
               value="wanda14@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>wanda14@example.com</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="PUTapi-v1-users--user_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="PUTapi-v1-users--user_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="PUTapi-v1-users--user_id-"
               value="~ELajT|HFSh:oE>4"
               data-component="body">
    <br>
<p>Example: <code>~ELajT|HFSh:oE&gt;4</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-users--user_id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://tickets-please.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"impedit\",
            \"email\": \"cecilia.schmitt@example.org\",
            \"isManager\": true,
            \"password\": \"@b$`F)t:N\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "impedit",
            "email": "cecilia.schmitt@example.org",
            "isManager": true,
            "password": "@b$`F)t:N"
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-users--user_id-">
</span>
<span id="execution-results-PATCHapi-v1-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-users--user_id-" data-method="PATCH"
      data-path="api/v1/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-users--user_id-"
                    onclick="tryItOut('PATCHapi-v1-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-users--user_id-"
                    onclick="cancelTryOut('PATCHapi-v1-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-users--user_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="impedit"
               data-component="body">
    <br>
<p>Example: <code>impedit</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="cecilia.schmitt@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>cecilia.schmitt@example.org</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PATCHapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="PATCHapi-v1-users--user_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="PATCHapi-v1-users--user_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="@b$`F)t:N"
               data-component="body">
    <br>
<p>Example: <code>@b$</code>F)t:N`</p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-authors">Display a listing of the resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/authors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors">
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
    &quot;errors&quot;: {
        &quot;type&quot;: &quot;BadMethodCallException&quot;,
        &quot;status&quot;: 0,
        &quot;message&quot;: &quot;Call to undefined method Illuminate\\Database\\Eloquent\\Builder::filters()&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors" data-method="GET"
      data-path="api/v1/authors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors"
                    onclick="tryItOut('GETapi-v1-authors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors"
                    onclick="cancelTryOut('GETapi-v1-authors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-authors--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/authors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors--id-">
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
    &quot;data&quot;: {
        &quot;type&quot;: &quot;user&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;Philip Grimes&quot;,
            &quot;email&quot;: &quot;omari95@example.org&quot;,
            &quot;isManager&quot;: false,
            &quot;emailVerifiedAt&quot;: &quot;2024-10-30T20:11:05.000000Z&quot;,
            &quot;createdAt&quot;: &quot;2024-10-30T20:11:05.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2024-10-30T20:11:05.000000Z&quot;
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors--id-" data-method="GET"
      data-path="api/v1/authors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors--id-"
                    onclick="tryItOut('GETapi-v1-authors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors--id-"
                    onclick="cancelTryOut('GETapi-v1-authors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-authors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-authors--author_id--tickets">GET api/v1/authors/{author_id}/tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors--author_id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/authors/nam/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors/nam/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors--author_id--tickets">
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
    &quot;data&quot;: [],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-please.test/api/v1/authors/nam/tickets?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-please.test/api/v1/authors/nam/tickets?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: null,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/authors/nam/tickets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-please.test/api/v1/authors/nam/tickets&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: null,
        &quot;total&quot;: 0
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors--author_id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors--author_id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors--author_id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors--author_id--tickets" data-method="GET"
      data-path="api/v1/authors/{author_id}/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors--author_id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors--author_id--tickets"
                    onclick="tryItOut('GETapi-v1-authors--author_id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors--author_id--tickets"
                    onclick="cancelTryOut('GETapi-v1-authors--author_id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors--author_id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors/{author_id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="nam"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>nam</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-authors--author_id--tickets">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-authors--author_id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-please.test/api/v1/authors/omnis/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"No-example\",
            \"description\": \"No-example\",
            \"status\": \"No-example\"
        }
    },
    \"author\": 0
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors/omnis/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "No-example",
            "description": "No-example",
            "status": "No-example"
        }
    },
    "author": 0
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-authors--author_id--tickets">
</span>
<span id="execution-results-POSTapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-authors--author_id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-authors--author_id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-authors--author_id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-authors--author_id--tickets" data-method="POST"
      data-path="api/v1/authors/{author_id}/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-authors--author_id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-authors--author_id--tickets"
                    onclick="tryItOut('POSTapi-v1-authors--author_id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-authors--author_id--tickets"
                    onclick="cancelTryOut('POSTapi-v1-authors--author_id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-authors--author_id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/authors/{author_id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="omnis"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>omnis</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="No-example"
               data-component="body">
    <br>
<p>The ticket's title. Example: <code>No-example</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="No-example"
               data-component="body">
    <br>
<p>The ticket's description. Example: <code>No-example</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="No-example"
               data-component="body">
    <br>
<p>The ticket's status: A (active), C (completed), H (on hold), X (canceled). Example: <code>No-example</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="0"
               data-component="body">
    <br>
<p>The author assigned to the ticket. The <code>id</code> of an existing record in the users table. Example: <code>0</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-authors--author_id--tickets--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-authors--author_id--tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-please.test/api/v1/authors/ad/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors/ad/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-authors--author_id--tickets--id-">
</span>
<span id="execution-results-DELETEapi-v1-authors--author_id--tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-authors--author_id--tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-authors--author_id--tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-authors--author_id--tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-authors--author_id--tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-authors--author_id--tickets--id-" data-method="DELETE"
      data-path="api/v1/authors/{author_id}/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-authors--author_id--tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    onclick="tryItOut('DELETEapi-v1-authors--author_id--tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    onclick="cancelTryOut('DELETEapi-v1-authors--author_id--tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/authors/{author_id}/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="ad"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>ad</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-authors--author--tickets--ticket-">PUT api/v1/authors/{author}/tickets/{ticket}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-authors--author--tickets--ticket-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://tickets-please.test/api/v1/authors/optio/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"nihil\",
            \"description\": \"Assumenda optio vero dolore tempora error veniam omnis.\",
            \"status\": \"A\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 3
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors/optio/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "nihil",
            "description": "Assumenda optio vero dolore tempora error veniam omnis.",
            "status": "A"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 3
                }
            }
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-authors--author--tickets--ticket-">
</span>
<span id="execution-results-PUTapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-authors--author--tickets--ticket-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-authors--author--tickets--ticket-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-authors--author--tickets--ticket-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-authors--author--tickets--ticket-" data-method="PUT"
      data-path="api/v1/authors/{author}/tickets/{ticket}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-authors--author--tickets--ticket-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-authors--author--tickets--ticket-"
                    onclick="tryItOut('PUTapi-v1-authors--author--tickets--ticket-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-authors--author--tickets--ticket-"
                    onclick="cancelTryOut('PUTapi-v1-authors--author--tickets--ticket-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-authors--author--tickets--ticket-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/authors/{author}/tickets/{ticket}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="optio"
               data-component="url">
    <br>
<p>The author. Example: <code>optio</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="1"
               data-component="url">
    <br>
<p>The ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="nihil"
               data-component="body">
    <br>
<p>Example: <code>nihil</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="Assumenda optio vero dolore tempora error veniam omnis."
               data-component="body">
    <br>
<p>Example: <code>Assumenda optio vero dolore tempora error veniam omnis.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="A"
               data-component="body">
    <br>
<p>Example: <code>A</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-authors--author--tickets--ticket-">PATCH api/v1/authors/{author}/tickets/{ticket}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-authors--author--tickets--ticket-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://tickets-please.test/api/v1/authors/dolore/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"odit\",
            \"description\": \"Ad quibusdam non quo modi provident tempore.\",
            \"status\": \"A\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 7
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/authors/dolore/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "odit",
            "description": "Ad quibusdam non quo modi provident tempore.",
            "status": "A"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 7
                }
            }
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-authors--author--tickets--ticket-">
</span>
<span id="execution-results-PATCHapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-authors--author--tickets--ticket-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-authors--author--tickets--ticket-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-authors--author--tickets--ticket-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-authors--author--tickets--ticket-" data-method="PATCH"
      data-path="api/v1/authors/{author}/tickets/{ticket}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-authors--author--tickets--ticket-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-authors--author--tickets--ticket-"
                    onclick="tryItOut('PATCHapi-v1-authors--author--tickets--ticket-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-authors--author--tickets--ticket-"
                    onclick="cancelTryOut('PATCHapi-v1-authors--author--tickets--ticket-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-authors--author--tickets--ticket-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/authors/{author}/tickets/{ticket}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="dolore"
               data-component="url">
    <br>
<p>The author. Example: <code>dolore</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="1"
               data-component="url">
    <br>
<p>The ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="odit"
               data-component="body">
    <br>
<p>Example: <code>odit</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="Ad quibusdam non quo modi provident tempore."
               data-component="body">
    <br>
<p>Example: <code>Ad quibusdam non quo modi provident tempore.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="A"
               data-component="body">
    <br>
<p>Example: <code>A</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="7"
               data-component="body">
    <br>
<p>Example: <code>7</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                <h1 id="managing-tickets">Managing Tickets</h1>

    

                                <h2 id="managing-tickets-GETapi-v1-tickets">Get all tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Display a listing of all tickets.</p>

<span id="example-requests-GETapi-v1-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-please.test/api/v1/tickets?sort=sort%3Dtitle%2C-createdAt&amp;filter%5Btitle%5D=%2Afix%2A" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/tickets"
);

const params = {
    "sort": "sort=title,-createdAt",
    "filter[title]": "*fix*",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tickets">
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
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 109,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;new ticket&quot;,
                &quot;description&quot;: &quot;new ticket description&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;createdAt&quot;: &quot;2024-11-05T19:52:58.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-11-05T19:52:58.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/109&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 108,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Changed title&quot;,
                &quot;description&quot;: &quot;Changed description&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;createdAt&quot;: &quot;2024-11-02T20:24:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-11-02T20:24:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/108&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 107,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;New ticket&quot;,
                &quot;description&quot;: &quot;New description ticket&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;createdAt&quot;: &quot;2024-11-02T20:20:58.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-11-02T20:20:58.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/107&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 103,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;new ticket&quot;,
                &quot;description&quot;: &quot;new ticket description&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;createdAt&quot;: &quot;2024-11-01T18:50:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-11-01T18:50:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/103&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 102,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;New ticket&quot;,
                &quot;description&quot;: &quot;New description ticket&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;createdAt&quot;: &quot;2024-10-31T19:39:46.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-31T19:39:46.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/102&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 101,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;New ticket&quot;,
                &quot;description&quot;: &quot;New description ticket&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;createdAt&quot;: &quot;2024-10-31T19:37:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-31T19:37:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/101&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 7,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;quaerat quo voluptas&quot;,
                &quot;description&quot;: &quot;Aperiam velit laborum dolores nulla quo sed voluptates. Rerum vitae ipsa voluptas dicta enim. Sit vel non nihil officiis quas. Non eos sapiente placeat est nemo.&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 5
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/5&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 8,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;impedit ut fuga&quot;,
                &quot;description&quot;: &quot;Aut nam porro a maxime. Et est quia omnis id libero odio alias. Ipsa dolorem ad odio consequuntur. Eum et molestiae enim sapiente expedita omnis.&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 9,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;et animi dolor&quot;,
                &quot;description&quot;: &quot;Mollitia et iure et autem et amet unde. Culpa modi tempore sit illo iure sit minus. Est vitae ut atque aliquam tempore quibusdam voluptatem. Molestiae dolorem voluptas et dolorem.&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 5
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/5&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 10,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Patched title&quot;,
                &quot;description&quot;: &quot;Patched description&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:18:21.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/10&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 11,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;in iure amet&quot;,
                &quot;description&quot;: &quot;A est cumque animi quidem sit. Soluta maxime mollitia sed ullam. Aut dolore cum nobis dolor iure praesentium.&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 5
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/5&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/11&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 12,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;repellendus et error&quot;,
                &quot;description&quot;: &quot;Molestiae rerum non repellendus quisquam rerum corrupti natus ea. Necessitatibus omnis delectus quos modi voluptatum quas.&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/12&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 13,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;deleniti perferendis voluptas&quot;,
                &quot;description&quot;: &quot;Et fugiat perferendis accusantium perferendis sed et. Sit maxime est sequi iure soluta laborum. Enim voluptatem laboriosam molestias consequatur voluptas soluta sunt modi. Amet nulla voluptas debitis autem consequatur in.&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 9
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/9&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/13&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 14,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;et veritatis dolor&quot;,
                &quot;description&quot;: &quot;Sit libero et sunt atque a dicta. Repellendus ratione atque laudantium ut est dolorem iure. Voluptatem recusandae earum maxime enim. Quisquam eos eos cupiditate rerum a in.&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/14&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 15,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;hic et fugit&quot;,
                &quot;description&quot;: &quot;Vel sit tempore accusantium. Temporibus qui ipsa eum cumque sint mollitia recusandae. Et dicta labore ut voluptates animi dolor esse officiis.&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;createdAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2024-10-30T20:11:06.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-please.test/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-please.test/api/v1/tickets/15&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=8&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 8,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-please.test/api/v1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-please.test/api/v1/tickets&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 106
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tickets" data-method="GET"
      data-path="api/v1/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tickets"
                    onclick="tryItOut('GETapi-v1-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tickets"
                    onclick="cancelTryOut('GETapi-v1-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-v1-tickets"
               value="sort=title,-createdAt"
               data-component="query">
    <br>
<p>Data field(s) to sort by. Separate multiple fields with commans. Denote descending sort with a minus sign. Example: <code>sort=title,-createdAt</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[status]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[status]"                data-endpoint="GETapi-v1-tickets"
               value=""
               data-component="query">
    <br>
<p>Filter by status code: A, C, H, X.</p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[title]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[title]"                data-endpoint="GETapi-v1-tickets"
               value="*fix*"
               data-component="query">
    <br>
<p>Filter by title. Wildcards are supported. Example: <code>*fix*</code></p>
            </div>
                </form>

                    <h2 id="managing-tickets-POSTapi-v1-tickets">Create a ticket</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Creates a new ticket. Users can only create tickets for themselves. Managers can create tickets for any user.</p>

<span id="example-requests-POSTapi-v1-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-please.test/api/v1/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"No-example\",
            \"description\": \"No-example\",
            \"status\": \"No-example\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 0
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-please.test/api/v1/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "No-example",
            "description": "No-example",
            "status": "No-example"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 0
                }
            }
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-tickets">
</span>
<span id="execution-results-POSTapi-v1-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-tickets" data-method="POST"
      data-path="api/v1/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-tickets"
                    onclick="tryItOut('POSTapi-v1-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-tickets"
                    onclick="cancelTryOut('POSTapi-v1-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="POSTapi-v1-tickets"
               value="No-example"
               data-component="body">
    <br>
<p>The ticket's title. Example: <code>No-example</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="POSTapi-v1-tickets"
               value="No-example"
               data-component="body">
    <br>
<p>The ticket's description. Example: <code>No-example</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="POSTapi-v1-tickets"
               value="No-example"
               data-component="body">
    <br>
<p>The ticket's status: A (active), C (completed), H (on hold), X (canceled). Example: <code>No-example</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="POSTapi-v1-tickets"
               value="0"
               data-component="body">
    <br>
<p>The author assigned to the ticket. The <code>id</code> of an existing record in the users table. Example: <code>0</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
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
