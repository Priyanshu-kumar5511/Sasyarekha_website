

<?php
// Include the connection file
include 'db_connect.php';

// Only run when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect data safely using null coalescing operator (??)
    $full_name      = $_POST['full_name']      ?? '';
    $email_address  = $_POST['email_address']  ?? '';
    $mobile_number  = $_POST['mobile_number']  ?? '';
    $location       = $_POST['location']       ?? '';
    $message        = $_POST['message']        ?? '';

    // Prepare the SQL statement (prevents SQL injection)
    $stmt = $conn->prepare(
        "INSERT INTO book_pen (full_name, email_address, mobile_number, location, message)
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param("sssss", $full_name, $email_address, $mobile_number, $location, $message);

    if ($stmt->execute()) {
        echo "Your message has been submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>





<!DOCTYPE html>
<!-- saved from url=(0105)https://zp1v56uxy8rdx5ypatb0ockcb9tr6a-oci3-%2D5173-%2D96435430.local-credentialless.webcontainer-api.io/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="module">
        import RefreshRuntime from "/@react-refresh"
        RefreshRuntime.injectIntoGlobalHook(window)
        window.$RefreshReg$ = () => { }
        window.$RefreshSig$ = () => (type) => type
        window.__vite_plugin_react_preamble_installed__ = true
    </script>

    <script type="module" src="./client"></script>


    <link rel="icon" type="image/svg+xml"
        href="https://zp1v56uxy8rdx5ypatb0ockcb9tr6a-oci3--5173--96435430.local-credentialless.webcontainer-api.io/vite.svg">
      <link rel="icon" href="data:image/svg+xml,
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'>
  <defs>
    <linearGradient id='grad' x1='0%' y1='0%' x2='100%' y2='100%'>
      <stop offset='0%' stop-color='%23FEF3C7'/>
      <stop offset='100%' stop-color='%23D1FAE5'/>
    </linearGradient>
  </defs>
  <rect width='64' height='64' fill='url(%23grad)'/>
  <text x='50%' y='50%' font-size='48' text-anchor='middle' dominant-baseline='central'>🌱</text>
</svg>">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sasyarekha - Write Today, Grow Tomorrow 🌱</title>
    <meta name="description"
        content="Eco-luxury stationery that grows into gardens. Sustainable seed pens and notebooks handcrafted in India.">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./css2" rel="stylesheet">
    <style type="text/css" data-vite-dev-id="/home/project/src/index.css">
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: ;
        }

        /*
! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com
*/
        /*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: #e5e7eb;
            /* 2 */
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        /*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

        html,
        :host {
            line-height: 1.5;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
            -moz-tab-size: 4;
            /* 3 */
            -o-tab-size: 4;
            tab-size: 4;
            /* 3 */
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 4 */
            font-feature-settings: normal;
            /* 5 */
            font-variation-settings: normal;
            /* 6 */
            -webkit-tap-highlight-color: transparent;
            /* 7 */
        }

        /*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

        body {
            margin: 0;
            /* 1 */
            line-height: inherit;
            /* 2 */
        }

        /*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

        hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
            border-top-width: 1px;
            /* 3 */
        }

        /*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        /*
Remove the default font size and weight for headings.
*/

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /*
Reset links to optimize for opt-in styling instead of opt-out.
*/

        a {
            color: inherit;
            text-decoration: inherit;
        }

        /*
Add the correct font weight in Edge and Safari.
*/

        b,
        strong {
            font-weight: bolder;
        }

        /*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            /* 1 */
            font-feature-settings: normal;
            /* 2 */
            font-variation-settings: normal;
            /* 3 */
            font-size: 1em;
            /* 4 */
        }

        /*
Add the correct font size in all browsers.
*/

        small {
            font-size: 80%;
        }

        /*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
        }

        /*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-feature-settings: inherit;
            /* 1 */
            font-variation-settings: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            font-weight: inherit;
            /* 1 */
            line-height: inherit;
            /* 1 */
            letter-spacing: inherit;
            /* 1 */
            color: inherit;
            /* 1 */
            margin: 0;
            /* 2 */
            padding: 0;
            /* 3 */
        }

        /*
Remove the inheritance of text transform in Edge and Firefox.
*/

        button,
        select {
            text-transform: none;
        }

        /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

        button,
        input:where([type='button']),
        input:where([type='reset']),
        input:where([type='submit']) {
            -webkit-appearance: button;
            /* 1 */
            background-color: transparent;
            /* 2 */
            background-image: none;
            /* 2 */
        }

        /*
Use the modern Firefox focus style for all focusable elements.
*/

        :-moz-focusring {
            outline: auto;
        }

        /*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

        :-moz-ui-invalid {
            box-shadow: none;
        }

        /*
Add the correct vertical alignment in Chrome and Firefox.
*/

        progress {
            vertical-align: baseline;
        }

        /*
Correct the cursor style of increment and decrement buttons in Safari.
*/

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        /*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

        [type='search'] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /*
Remove the inner padding in Chrome and Safari on macOS.
*/

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /*
Add the correct display in Chrome and Safari.
*/

        summary {
            display: list-item;
        }

        /*
Removes the default spacing and border for appropriate elements.
*/

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /*
Reset default styling for dialogs.
*/
        dialog {
            padding: 0;
        }

        /*
Prevent resizing textareas horizontally by default.
*/

        textarea {
            resize: vertical;
        }

        /*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        /*
Set the default cursor for buttons.
*/

        button,
        [role="button"] {
            cursor: pointer;
        }

        /*
Make sure disabled buttons don't get the pointer cursor.
*/
        :disabled {
            cursor: default;
        }

        /*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }

        /*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        /* Make elements with the HTML hidden attribute stay hidden by default */
        [hidden]:where(:not([hidden="until-found"])) {
            display: none;
        }

        .fixed {
            position: fixed;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .inset-0 {
            inset: 0px;
        }

        .bottom-6 {
            bottom: 1.5rem;
        }

        .bottom-8 {
            bottom: 2rem;
        }

        .left-1\/2 {
            left: 50%;
        }

        .right-6 {
            right: 1.5rem;
        }

        .top-0 {
            top: 0px;
        }

        .top-6 {
            top: 1.5rem;
        }

        .z-40 {
            z-index: 40;
        }

        .z-50 {
            z-index: 50;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .mb-12 {
            margin-bottom: 3rem;
        }

        .mb-16 {
            margin-bottom: 4rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mb-3 {
            margin-bottom: 0.75rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .line-clamp-3 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }

        .block {
            display: block;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .h-1 {
            height: 0.25rem;
        }

        .h-10 {
            height: 2.5rem;
        }

        .h-16 {
            height: 4rem;
        }

        .h-2 {
            height: 0.5rem;
        }

        .h-20 {
            height: 5rem;
        }

        .h-4 {
            height: 1rem;
        }

        .h-48 {
            height: 12rem;
        }

        .h-5 {
            height: 1.25rem;
        }

        .h-6 {
            height: 1.5rem;
        }

        .h-8 {
            height: 2rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .w-10 {
            width: 2.5rem;
        }

        .w-16 {
            width: 4rem;
        }

        .w-2 {
            width: 0.5rem;
        }

        .w-20 {
            width: 5rem;
        }

        .w-24 {
            width: 6rem;
        }

        .w-4 {
            width: 1rem;
        }

        .w-5 {
            width: 1.25rem;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-8 {
            width: 2rem;
        }

        .w-full {
            width: 100%;
        }

        .max-w-2xl {
            max-width: 42rem;
        }

        .max-w-4xl {
            max-width: 56rem;
        }

        .max-w-5xl {
            max-width: 64rem;
        }

        .max-w-6xl {
            max-width: 72rem;
        }

        .max-w-7xl {
            max-width: 80rem;
        }

        .-translate-x-1\/2 {
            --tw-translate-x: -50%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(-25%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }

            50% {
                transform: none;
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        .animate-bounce {
            animation: bounce 1s infinite;
        }

        @keyframes pulse {

            50% {
                opacity: .5;
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .items-center {
            align-items: center;
        }

        .items-stretch {
            align-items: stretch;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .gap-12 {
            gap: 3rem;
        }

        .gap-16 {
            gap: 4rem;
        }

        .gap-6 {
            gap: 1.5rem;
        }

        .gap-8 {
            gap: 2rem;
        }

        .space-x-2> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-4> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-8> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-3> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
        }

        .space-y-6> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .overflow-x-hidden {
            overflow-x: hidden;
        }

        .rounded-2xl {
            border-radius: 1rem;
        }

        .rounded-3xl {
            border-radius: 1.5rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .rounded-xl {
            border-radius: 0.75rem;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-t {
            border-top-width: 1px;
        }

        .border-green-200 {
            --tw-border-opacity: 1;
            border-color: rgb(187 247 208 / var(--tw-border-opacity, 1));
        }

        .border-red-200 {
            --tw-border-opacity: 1;
            border-color: rgb(254 202 202 / var(--tw-border-opacity, 1));
        }

        .border-stone-200 {
            --tw-border-opacity: 1;
            border-color: rgb(231 229 228 / var(--tw-border-opacity, 1));
        }

        .border-stone-700 {
            --tw-border-opacity: 1;
            border-color: rgb(68 64 60 / var(--tw-border-opacity, 1));
        }

        .bg-amber-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 243 199 / var(--tw-bg-opacity, 1));
        }

        .bg-green-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(187 247 208 / var(--tw-bg-opacity, 1));
        }

        .bg-green-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(240 253 244 / var(--tw-bg-opacity, 1));
        }

        .bg-green-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(34 197 94 / var(--tw-bg-opacity, 1));
        }

        .bg-green-700 {
            --tw-bg-opacity: 1;
            background-color: rgb(21 128 61 / var(--tw-bg-opacity, 1));
        }

        .bg-red-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 202 202 / var(--tw-bg-opacity, 1));
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity, 1));
        }

        .bg-red-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity, 1));
        }

        .bg-stone-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(245 245 244 / var(--tw-bg-opacity, 1));
        }

        .bg-stone-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(250 250 249 / var(--tw-bg-opacity, 1));
        }

        .bg-stone-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(41 37 36 / var(--tw-bg-opacity, 1));
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1));
        }

        .bg-white\/80 {
            background-color: rgb(255 255 255 / 0.8);
        }

        .bg-white\/90 {
            background-color: rgb(255 255 255 / 0.9);
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
        }

        .bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }

        .bg-gradient-to-r {
            background-image: linear-gradient(to right, var(--tw-gradient-stops));
        }

        .from-amber-100 {
            --tw-gradient-from: #fef3c7 var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(254 243 199 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .from-amber-100\/50 {
            --tw-gradient-from: rgb(254 243 199 / 0.5) var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(254 243 199 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .from-amber-50 {
            --tw-gradient-from: #fffbeb var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(255 251 235 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .from-stone-100 {
            --tw-gradient-from: #f5f5f4 var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(245 245 244 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .to-amber-50 {
            --tw-gradient-to: #fffbeb var(--tw-gradient-to-position);
        }

        .to-green-100 {
            --tw-gradient-to: #dcfce7 var(--tw-gradient-to-position);
        }

        .to-green-100\/50 {
            --tw-gradient-to: rgb(220 252 231 / 0.5) var(--tw-gradient-to-position);
        }

        .to-stone-100 {
            --tw-gradient-to: #f5f5f4 var(--tw-gradient-to-position);
        }

        .to-stone-200 {
            --tw-gradient-to: #e7e5e4 var(--tw-gradient-to-position);
        }

        .to-stone-50 {
            --tw-gradient-to: #fafaf9 var(--tw-gradient-to-position);
        }

        .fill-current {
            fill: currentColor;
        }

        .p-3 {
            padding: 0.75rem;
        }

        .p-4 {
            padding: 1rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .p-8 {
            padding: 2rem;
        }

        .px-12 {
            padding-left: 3rem;
            padding-right: 3rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .py-20 {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .pt-4 {
            padding-top: 1rem;
        }

        .pt-8 {
            padding-top: 2rem;
        }

        .text-center {
            text-align: center;
        }

        .font-serif {
            font-family: Playfair Display, serif;
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .text-5xl {
            font-size: 3rem;
            line-height: 1;
        }

        .text-6xl {
            font-size: 3.75rem;
            line-height: 1;
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .font-medium {
            font-weight: 500;
        }

        .italic {
            font-style: italic;
        }

        .leading-relaxed {
            line-height: 1.625;
        }

        .leading-tight {
            line-height: 1.25;
        }

        .text-amber-400 {
            --tw-text-opacity: 1;
            color: rgb(251 191 36 / var(--tw-text-opacity, 1));
        }

        .text-amber-600 {
            --tw-text-opacity: 1;
            color: rgb(217 119 6 / var(--tw-text-opacity, 1));
        }

        .text-amber-800 {
            --tw-text-opacity: 1;
            color: rgb(146 64 14 / var(--tw-text-opacity, 1));
        }

        .text-green-400 {
            --tw-text-opacity: 1;
            color: rgb(74 222 128 / var(--tw-text-opacity, 1));
        }

        .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity, 1));
        }

        .text-green-700 {
            --tw-text-opacity: 1;
            color: rgb(21 128 61 / var(--tw-text-opacity, 1));
        }

        .text-green-800 {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1));
        }

        .text-red-700 {
            --tw-text-opacity: 1;
            color: rgb(185 28 28 / var(--tw-text-opacity, 1));
        }

        .text-red-800 {
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity, 1));
        }

        .text-stone-200 {
            --tw-text-opacity: 1;
            color: rgb(231 229 228 / var(--tw-text-opacity, 1));
        }

        .text-stone-300 {
            --tw-text-opacity: 1;
            color: rgb(214 211 209 / var(--tw-text-opacity, 1));
        }

        .text-stone-400 {
            --tw-text-opacity: 1;
            color: rgb(168 162 158 / var(--tw-text-opacity, 1));
        }

        .text-stone-500 {
            --tw-text-opacity: 1;
            color: rgb(120 113 108 / var(--tw-text-opacity, 1));
        }

        .text-stone-600 {
            --tw-text-opacity: 1;
            color: rgb(87 83 78 / var(--tw-text-opacity, 1));
        }

        .text-stone-700 {
            --tw-text-opacity: 1;
            color: rgb(68 64 60 / var(--tw-text-opacity, 1));
        }

        .text-stone-800 {
            --tw-text-opacity: 1;
            color: rgb(154 45 18/ var(--tw-text-opacity, 1));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1));
        }

        .opacity-30 {
            opacity: 0.3;
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .backdrop-blur {
            --tw-backdrop-blur: blur(8px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .backdrop-blur-sm {
            --tw-backdrop-blur: blur(4px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .transition-colors {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .duration-300 {
            transition-duration: 300ms;
        }

        .duration-700 {
            transition-duration: 700ms;
        }

        .hover\:-translate-y-2:hover {
            --tw-translate-y: -0.5rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .hover\:scale-105:hover {
            --tw-scale-x: 1.05;
            --tw-scale-y: 1.05;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .hover\:scale-110:hover {
            --tw-scale-x: 1.1;
            --tw-scale-y: 1.1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .hover\:bg-amber-200:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(253 230 138 / var(--tw-bg-opacity, 1));
        }

        .hover\:bg-green-600:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(22 163 74 / var(--tw-bg-opacity, 1));
        }

        .hover\:bg-green-800:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(22 101 52 / var(--tw-bg-opacity, 1));
        }

        .hover\:text-green-400:hover {
            --tw-text-opacity: 1;
            color: rgb(74 222 128 / var(--tw-text-opacity, 1));
        }

        .hover\:text-green-700:hover {
            --tw-text-opacity: 1;
            color: rgb(21 128 61 / var(--tw-text-opacity, 1));
        }

        .hover\:text-green-800:hover {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1));
        }

        .hover\:shadow-xl:hover {
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:border-green-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(34 197 94 / var(--tw-border-opacity, 1));
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .group:hover .group-hover\:rotate-y-12 {
            --tw-rotate: rotateY(12deg);
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        @media (min-width: 640px) {

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 768px) {

            .md\:flex {
                display: flex;
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .md\:text-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem;
            }

            .md\:text-8xl {
                font-size: 6rem;
                line-height: 1;
            }
        }

        @media (min-width: 1024px) {

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
    </style>
</head>

<body>
    <div id="root">
        <div class="min-h-screen bg-gradient-to-b from-amber-50 to-stone-100 relative overflow-x-hidden">
            <!-- <button
                class="fixed top-6 right-6 z-50 bg-amber-100 hover:bg-amber-200 p-3 rounded-full shadow-lg transition-all duration-300"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-play w-5 h-5 text-amber-800">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg></button> -->
            <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-sm z-40 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <a href="#hero">
                            <div class="flex items-center space-x-2"><img src="images/logo.jpg" alt="Logo" class="w-8 h-8 object-contain">
<span class="text-2xl font-serif text-stone-800">Sasyarekha</span></div>
                        </a>
                        <div class="hidden md:flex space-x-8"><a
                                href="#hero"
                                class="text-stone-600 hover:text-green-700 font-serif">Home</a><a
                                href="#about"
                                class="text-stone-600 hover:text-green-700 font-serif">About</a><a
                                href="#products"
                                class="text-stone-600 hover:text-green-700 font-serif">Products</a>
                                <!-- <a href="https://zp1v56uxy8rdx5ypatb0ockcb9tr6a-oci3--5173--96435430.local-credentialless.webcontainer-api.io/#blog"
                                class="text-stone-600 hover:text-green-700 font-serif">Blog</a> -->
                                <a href="#contact" class="text-stone-600 hover:text-green-700 font-serif">
                                                Contact
                                                </a>
</div>
                    </div>
                </div>
            </nav>
            <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-amber-100/50 to-green-100/50" ></div>
                <div class="absolute inset-0">
                    <div class="absolute animate-bounce"
                        style="left: 68.6801%; top: 18.6056%; animation-delay: 1.13238s; animation-duration: 4.00255s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 47.2907%; top: 78.9186%; animation-delay: 0.287848s; animation-duration: 3.87198s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 83.625%; top: 79.4422%; animation-delay: 2.97734s; animation-duration: 4.86453s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 84.5202%; top: 62.6706%; animation-delay: 1.08642s; animation-duration: 3.20313s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 15.6513%; top: 58.1504%; animation-delay: 2.82479s; animation-duration: 3.38671s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 49.7361%; top: 42.7529%; animation-delay: 2.85151s; animation-duration: 3.73973s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 46.5501%; top: 59.0333%; animation-delay: 0.256169s; animation-duration: 4.93456s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 55.8676%; top: 77.6809%; animation-delay: 0.330383s; animation-duration: 3.84923s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 76.4268%; top: 46.1345%; animation-delay: 1.08923s; animation-duration: 4.02125s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 37.0155%; top: 72.6254%; animation-delay: 1.84624s; animation-duration: 4.03203s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 13.2497%; top: 92.1509%; animation-delay: 0.881549s; animation-duration: 3.52648s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 86.0554%; top: 79.9273%; animation-delay: 2.71198s; animation-duration: 3.15389s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 39.502%; top: 24.6768%; animation-delay: 0.803458s; animation-duration: 4.64432s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 87.9684%; top: 77.9728%; animation-delay: 1.10497s; animation-duration: 4.67985s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 18.5437%; top: 87.742%; animation-delay: 0.655671s; animation-duration: 3.78693s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 36.4294%; top: 86.6238%; animation-delay: 1.20089s; animation-duration: 4.46447s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 79.6538%; top: 78.339%; animation-delay: 1.66203s; animation-duration: 4.3484s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 51.1682%; top: 59.139%; animation-delay: 2.79335s; animation-duration: 4.16792s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 8.04052%; top: 14.1746%; animation-delay: 0.0804427s; animation-duration: 4.74293s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                    <div class="absolute animate-bounce"
                        style="left: 42.576%; top: 27.4871%; animation-delay: 0.516333s; animation-duration: 4.32323s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-4 h-4 text-green-400 opacity-30">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative text-center max-w-4xl mx-auto px-4">
                    <div class="mb-8 animate-pulse"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-leaf w-20 h-20 text-green-700 mx-auto mb-4">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                            </path>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                        </svg></div>
                    <h1 class="text-6xl md:text-8xl font-serif text-stone-800 mb-6 leading-tight">Sasyarekha</h1>
               <p id="typing-text" class="text-2xl md:text-3xl text-stone-600 mb-8 font-serif italic"></p>

<style>
  /* Blinking cursor */
  #typing-text::after {
    content: '|';
    animation: blink 0.7s infinite;
  }

  @keyframes blink {
    0%, 50% { opacity: 1; }
    50.1%, 100% { opacity: 0; }
  }

  /* Hide cursor when typing ends */
  .no-cursor::after {
    content: '';
    animation: none;
  }
</style>

<script>
  const text = "Write Today, Grow Tomorrow 🌱";
  let i = 0;
  const speed = 150; // typing speed

  function typeEffect() {
    const element = document.getElementById("typing-text");

    if (i <= text.length) {
      element.innerHTML = text.substring(0, i);
      i++;
      setTimeout(typeEffect, speed);
    } else {
      // Remove cursor when typing completes
      element.classList.add("no-cursor");
    }
  }

  // Start after page load
  window.onload = typeEffect;
</script>




                    <p class="text-lg text-stone-500 mb-12 max-w-2xl mx-auto leading-relaxed">Experience the luxury of
                        eco-friendly stationery. Our seed pens and notebooks don't just capture your thoughts—they
                        nurture the earth.</p>
                        <a href="#contact"><button
                        class="bg-green-700 hover:bg-green-800 text-white px-12 py-4 rounded-full text-xl font-serif shadow-lg transform hover:scale-105 transition-all duration-300">Pre-Book
                        Now</button></a>
                </div>
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-down w-8 h-8 text-stone-400">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg></div>
            </section>
            <section id="about" class="py-20 bg-gradient-to-r from-amber-50 to-stone-50">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-5xl font-serif text-stone-800 mb-6">Our Legacy</h2>
                        <div class="w-24 h-1 bg-green-700 mx-auto mb-8"></div>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div class="space-y-6">
                            <p class="text-lg text-stone-600 leading-relaxed font-serif">Rooted in India's ancient
                                tradition of sustainable living, Sasyarekha represents the harmony between modern
                                writing and environmental consciousness. Our name, meaning "line of writing," embodies
                                the belief that every word we write should nurture life.</p>
                            <p class="text-lg text-stone-600 leading-relaxed font-serif">Handcrafted with love and
                                precision, our seed-embedded stationery transforms your finished notebooks and pens into
                                gardens of possibility. Made in India, inspired by nature, created for tomorrow.</p>
                            <div class="flex items-center space-x-4 pt-4">
                                <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-leaf w-6 h-6 text-green-700">
                                        <path
                                            d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                        </path>
                                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                    </svg><span class="text-stone-700 font-serif">100% Eco-Friendly</span></div>
                                <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-star w-6 h-6 text-amber-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                        </polygon>
                                    </svg><span class="text-stone-700 font-serif">Made in India</span></div>
                            </div>
                        </div>
                        <div class="relative">
                           <div
  class="bg-gradient-to-br from-amber-100 to-stone-200 p-2 rounded-2xl shadow-2xl transform hover:scale-105 transition-all duration-300">

  <video
    class="rounded-2xl w-full h-auto"
    src="images/about_video.mp4"
    autoplay
    loop
    playsinline
    controls>
  </video>

</div>


                        </div>
                    </div>
                </div>
            </section>
            <section id="products" class="py-20 bg-stone-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-5xl font-serif text-stone-800 mb-6">Our Creations</h2>
                        <div class="w-24 h-1 bg-green-700 mx-auto mb-8"></div>
                        <p class="text-xl text-stone-600 font-serif max-w-2xl mx-auto">Discover our collection of
                            sustainable stationery that grows with you</p>
                    </div>
                    <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                        <div class="group perspective-1000">
                            <div
                                class="bg-white rounded-3xl shadow-2xl p-8 transform group-hover:rotate-y-12 transition-all duration-700 hover:shadow-3xl">
                                <div class="text-center mb-6">
                                    <div
                                        class="bg-gradient-to-br from-amber-100 to-green-100 p-6 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-pen w-10 h-10 text-green-700">
                                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-3xl font-serif text-stone-800 mb-4">Seed Pens</h3>
                                    <div class="w-16 h-1 bg-green-700 mx-auto mb-6"></div>
                                </div>
                                <p class="text-stone-600 font-serif leading-relaxed mb-6">Write your thoughts with our
                                    plantable seed pens. Made from recycled paper and embedded with organic seeds, these
                                    pens bloom into herbs and flowers after use.</p>
                                <div class="space-y-3 mb-8">
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-leaf w-4 h-4 text-green-600">
                                            <path
                                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                            </path>
                                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                        </svg><span class="text-stone-600 text-sm">Contains basil, tomato, or marigold
                                            seeds</span></div>
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-leaf w-4 h-4 text-green-600">
                                            <path
                                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                            </path>
                                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                        </svg><span class="text-stone-600 text-sm">Biodegradable recycled paper
                                            body</span></div>
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-leaf w-4 h-4 text-green-600">
                                            <path
                                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                            </path>
                                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                        </svg><span class="text-stone-600 text-sm">Zero plastic waste</span></div>
                                </div><a href="https://wa.me/6388182939"><button
                                    class="w-full bg-green-700 hover:bg-green-800 text-white py-3 px-6 rounded-full font-serif text-lg transition-all duration-300 transform hover:scale-105">DM
                                    to Order</button></a>
                            </div>
                        </div>
                        <div class="group perspective-1000">
                            <div
                                class="bg-white rounded-3xl shadow-2xl p-8 transform group-hover:rotate-y-12 transition-all duration-700 hover:shadow-3xl">
                                <div class="text-center mb-6">
                                    <div
                                        class="bg-gradient-to-br from-amber-100 to-green-100 p-6 rounded-full w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-open w-10 h-10 text-green-700">
                                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-3xl font-serif text-stone-800 mb-4">Seed Notebooks</h3>
                                    <div class="w-16 h-1 bg-green-700 mx-auto mb-6"></div>
                                </div>
                                <p class="text-stone-600 font-serif leading-relaxed mb-6">Capture your ideas in our
                                    handcrafted seed notebooks. Each page is embedded with wildflower seeds, ready to
                                    create a garden when your journal is complete.</p>
                                <div class="space-y-3 mb-8">
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-leaf w-4 h-4 text-green-600">
                                            <path
                                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                            </path>
                                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                        </svg><span class="text-stone-600 text-sm">Handmade seed paper pages</span>
                                    </div>
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-leaf w-4 h-4 text-green-600">
                                            <path
                                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                            </path>
                                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                        </svg><span class="text-stone-600 text-sm">Natural jute binding</span></div>
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-leaf w-4 h-4 text-green-600">
                                            <path
                                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                            </path>
                                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                        </svg><span class="text-stone-600 text-sm">Plantable cover and pages</span>
                                    </div>
                                </div><a href="https://wa.me/6388182939">
                                    <button
                                    class="w-full bg-green-700 hover:bg-green-800 text-white py-3 px-6 rounded-full font-serif text-lg transition-all duration-300 transform hover:scale-105">DM
                                    to Order</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-gradient-to-b from-stone-100 to-amber-50">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-5xl font-serif text-stone-800 mb-6">The Choice is Clear</h2>
                        <div class="w-24 h-1 bg-green-700 mx-auto mb-8"></div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8 items-stretch">
                        <div class="bg-red-50 border-2 border-red-200 rounded-2xl p-8">
                            <div class="text-center mb-6">
                                <div
                                    class="bg-red-200 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-2xl">🏭</span>
                                </div>
                                <h3 class="text-2xl font-serif text-red-800 mb-4">Plastic Stationery</h3>
                            </div>
                            <ul class="space-y-3 text-red-700">
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-red-500 rounded-full"></span><span>Takes 500+ years to
                                        decompose</span></li>
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-red-500 rounded-full"></span><span>Pollutes oceans and
                                        soil</span></li>
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-red-500 rounded-full"></span><span>Harmful chemical
                                        production</span></li>
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-red-500 rounded-full"></span><span>Single-use waste</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-green-50 border-2 border-green-200 rounded-2xl p-8">
                            <div class="text-center mb-6">
                                <div
                                    class="bg-green-200 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-leaf w-8 h-8 text-green-700">
                                        <path
                                            d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                        </path>
                                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-serif text-green-800 mb-4">Sasyarekha</h3>
                            </div>
                            <ul class="space-y-3 text-green-700">
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-green-500 rounded-full"></span><span>Becomes beautiful
                                        plants</span></li>
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-green-500 rounded-full"></span><span>Enriches soil and
                                        air</span></li>
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-green-500 rounded-full"></span><span>100% natural
                                        materials</span></li>
                                <li class="flex items-center space-x-2"><span
                                        class="w-2 h-2 bg-green-500 rounded-full"></span><span>Creates lasting
                                        memories</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="py-20 bg-stone-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-5xl font-serif text-stone-800 mb-6">Wisdom &amp; Words</h2>
                        <div class="w-24 h-1 bg-green-700 mx-auto mb-8"></div>
                        <p class="text-xl text-stone-600 font-serif max-w-2xl mx-auto">Discover the art of sustainable
                            living and the beauty of mindful writing</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <article
                            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div
                                class="h-48 bg-gradient-to-br from-amber-100 to-green-100 flex items-center justify-center text-6xl">
                                🌾</div>
                            <div class="p-6">
                                <div class="text-sm text-stone-500 mb-2 font-serif">March 15, 2024</div>
                                <h3 class="text-xl font-serif text-stone-800 mb-3 line-clamp-2">The Ancient Art of Seed
                                    Paper Making</h3>
                                <p class="text-stone-600 mb-4 line-clamp-3">Discover how our ancestors created paper
                                    that gave back to nature...</p><button
                                    class="text-green-700 hover:text-green-800 font-serif font-medium">Read More
                                    →</button>
                            </div>
                        </article>
                        <article
                            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div
                                class="h-48 bg-gradient-to-br from-amber-100 to-green-100 flex items-center justify-center text-6xl">
                                🌱</div>
                            <div class="p-6">
                                <div class="text-sm text-stone-500 mb-2 font-serif">March 10, 2024</div>
                                <h3 class="text-xl font-serif text-stone-800 mb-3 line-clamp-2">From Pen to Plant: A
                                    Journey</h3>
                                <p class="text-stone-600 mb-4 line-clamp-3">Follow the transformation of our seed pens
                                    into blooming gardens...</p><button
                                    class="text-green-700 hover:text-green-800 font-serif font-medium">Read More
                                    →</button>
                            </div>
                        </article>
                        <article
                            class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div
                                class="h-48 bg-gradient-to-br from-amber-100 to-green-100 flex items-center justify-center text-6xl">
                                ✍️</div>
                            <div class="p-6">
                                <div class="text-sm text-stone-500 mb-2 font-serif">March 5, 2024</div>
                                <h3 class="text-xl font-serif text-stone-800 mb-3 line-clamp-2">Sustainable Writing
                                    Rituals</h3>
                                <p class="text-stone-600 mb-4 line-clamp-3">Creating mindful moments with eco-friendly
                                    stationery...</p><button
                                    class="text-green-700 hover:text-green-800 font-serif font-medium">Read More
                                    →</button>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-gradient-to-br from-amber-100 to-stone-100">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <!-- <h2 class="text-5xl font-serif text-stone-800 mb-6">Hearts &amp; Harvests</h2> -->
                        <h2 class="text-5xl font-serif text-stone-800 mb-6">Founders</h2>
                        <div class="w-24 h-1 bg-green-700 mx-auto mb-8"></div>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                       <div
  class="bg-white/80 backdrop-blur rounded-2xl p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
  
  <!-- Founder Image -->
  <div class="flex justify-center mb-4">
    <img src="images/Palak .jpg" alt="Palak - Co-Founder"
      class="w-20 h-20 rounded-full object-cover border-2 border-amber-400 shadow-md" />
  </div>

  <!-- Stars -->
  <!-- <div class="flex items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
      stroke-linejoin="round" class="lucide lucide-star w-5 h-5 text-amber-400 fill-current">
      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
    </svg>
   
  </div> -->

  <!-- Founder Quote -->
  <p class="text-stone-700 font-serif italic mb-4 leading-relaxed">
  "Hi, I’m Palak Gokhale, co-founder of Sasyarekha. I’m passionate about eco-friendly innovation and love turning ideas into meaningful products. At Sasyarekha, I focus on design, product development, and quality — ensuring every pen and notebook reflects our promise: write today, grow tomorrow. Sustainability and creativity guide everything I do."</p>

  <!-- Founder Name -->
  <div class="text-stone-800 font-serif font-medium">— Palak Gokhale</div>
</div>

                       <div
  class="bg-white/80 backdrop-blur rounded-2xl p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
  
  <!-- Founder Image -->
  <div class="flex justify-center mb-4">
    <img src="images/araj.jpg" alt="Araj Gupta - Co-Founder"
      class="w-20 h-20 rounded-full object-cover border-2 border-amber-400 shadow-md" />
  </div>

  <!-- Stars -->
  <!-- <div class="flex items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
      stroke-linecap="round" stroke-linejoin="round"
      class="lucide lucide-star w-5 h-5 text-amber-400 fill-current">
      <polygon
        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 
        5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
    </svg>
   
  </div> -->

  <!-- Founder Quote -->
  <p class="text-stone-700 font-serif italic mb-4 leading-relaxed">
"Hi, I’m Araj Gupta, co-founder of Sasyarekha. I’m driven by sustainability and smart business solutions. At Sasyarekha, I handle strategy, operations, and market growth — making sure every eco-friendly pen and notebook reaches people who value purposeful living. I believe innovation and responsibility can together create a greener future."  </p>

  <!-- Founder Name -->
  <div class="text-stone-800 font-serif font-medium">— Araj Gupta</div>
</div>

                       <div
  class="bg-white/80 backdrop-blur rounded-2xl p-6 shadow-lg transform hover:scale-105 transition-all duration-300">
  
  <!-- Founder Image -->
  <div class="flex justify-center mb-4">
    <img src="images/Rahul.jpg" alt="Aishu Patel - Co-Founder"
      class="w-20 h-20 rounded-full object-cover border-2 border-amber-400 shadow-md" />
  </div>

  <!-- Stars -->
  <!-- <div class="flex items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
      stroke-linecap="round" stroke-linejoin="round"
      class="lucide lucide-star w-5 h-5 text-amber-400 fill-current">
      <polygon
        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 
        5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
    </svg>
    
  </div> -->

  <!-- Founder Quote -->
  <p class="text-stone-700 font-serif italic mb-4 leading-relaxed">
“Hi, I’m Rahul Bhatt, Operations & Logistics Lead at Sasyarekha. I make sure every eco-friendly pen and notebook is crafted, packed, and delivered with care. My focus is on keeping production smooth, working with vendors, and ensuring customers get quality products on time. Sustainability and efficiency inspire my work.”  </p>

  <!-- Founder Name -->
  <div class="text-stone-800 font-serif font-medium">— Aishu Patel</div>
</div>

                    </div>
                </div>
            </section>
            <section id="contact" class="py-20 bg-gradient-to-b from-stone-100 to-amber-50">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-5xl font-serif text-stone-800 mb-6">Plant Your Order</h2>
                        <div class="w-24 h-1 bg-green-700 mx-auto mb-8"></div>
                        <p class="text-xl text-stone-600 font-serif">Ready to write your story with nature? Reserve your
                            eco-luxury stationery today.</p>
                    </div>
                 <form action="submit.php"  method="POST" id="contact" class="bg-white/90 backdrop-blur rounded-3xl p-8 shadow-2xl mt-12">
  <div class="grid md:grid-cols-2 gap-6 mb-6">
    <!-- Full Name -->
    <div>
      <label class="block text-stone-700 font-serif mb-2">Full Name</label>
      <input name="full_name" type="text"
        class="w-full px-4 py-3 rounded-xl border-2 border-stone-200 focus:border-green-500 focus:outline-none font-serif"
        placeholder="Your beautiful name" required>
    </div>

    <!-- Email -->
    <div>
      <label class="block text-stone-700 font-serif mb-2">Email Address</label>
      <input type="email" name="email_address" 
        class="w-full px-4 py-3 rounded-xl border-2 border-stone-200 focus:border-green-500 focus:outline-none font-serif"
        placeholder="your@email.com" required>
    </div>
  </div>

  <div class="grid md:grid-cols-2 gap-6 mb-6">
    <!-- Mobile Number -->
    <div>
      <label class="block text-stone-700 font-serif mb-2">Mobile Number</label>
      <input type="tel" name="mobile_number"
        class="w-full px-4 py-3 rounded-xl border-2 border-stone-200 focus:border-green-500 focus:outline-none font-serif"
        placeholder="+91 9876543210" required>
    </div>

    <!-- Location -->
    <div>
      <label class="block text-stone-700 font-serif mb-2">Location</label>
      <input type="text" name="location"
        class="w-full px-4 py-3 rounded-xl border-2 border-stone-200 focus:border-green-500 focus:outline-none font-serif"
        placeholder="Your city / country" required>
    </div>
  </div>

  <!-- Message -->
  <div class="mb-6">
    <label class="block text-stone-700 font-serif mb-2">Your Message</label>
    <textarea rows="4" name="message"
      class="w-full px-4 py-3 rounded-xl border-2 border-stone-200 focus:border-green-500 focus:outline-none font-serif"
      placeholder="Tell us about your stationery dreams..." required></textarea>
  </div>

  <!-- Button -->
  <div class="text-center">
    <button type="submit"
      class="bg-green-700 hover:bg-green-800 text-white px-12 py-4 rounded-full font-serif text-xl shadow-lg transform hover:scale-105 transition-all duration-300">
      Send via Massage 🌱
    </button>
  </div>
</form>


                </div>
            </section>
            <footer class="bg-stone-800 text-stone-200 py-16">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-3 gap-8 mb-12">
                        <div>
                            <div class="flex items-center space-x-2 mb-4"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-leaf w-8 h-8 text-green-400">
                                    <path
                                        d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z">
                                    </path>
                                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                </svg><span class="text-2xl font-serif">Sasyarekha</span></div>
                            <p class="text-stone-400 font-serif leading-relaxed">Where every word written nurtures the
                                earth, and every thought planted grows into possibility.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif mb-4">Connect With Us</h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-instagram w-5 h-5 text-green-400">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                    </svg><a
                                        href="https://www.instagram.com/sasyarekha?igsh=MTNpcjZ0YWM1a2oxcw=="
                                        class="text-stone-300 hover:text-green-400 transition-colors">@sasyarekha</a>
                                </div>
                                <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-message-circle w-5 h-5 text-green-400">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg><a
                                        href="https://wa.me/6388182939"
                                        class="text-stone-300 hover:text-green-400 transition-colors">WhatsApp
                                        Orders</a></div>
                                <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-mail w-5 h-5 text-green-400">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg><a
                                        href="https://zp1v56uxy8rdx5ypatb0ockcb9tr6a-oci3--5173--96435430.local-credentialless.webcontainer-api.io/#"
                                        class="text-stone-300 hover:text-green-400 transition-colors">sasyarekha@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif mb-4">Our Promise</h3>
                            <p class="text-stone-400 font-serif italic leading-relaxed">"Every seed we plant, every word
                                you write, creates ripples of change that will bloom for generations."</p>
                        </div>
                    </div>
                    <div class="border-t border-stone-700 pt-8 text-center">
                        <p class="text-stone-400 font-serif text-lg italic">"Seed of Writing, Line of Life ✨"</p>
                        <p class="text-stone-500 mt-4">© 2024 Sasyarekha. Handcrafted with love in India. 🇮🇳</p>
                    </div>
                </div>
            </footer><a href="https://wa.me/6388182939" target="_blank" rel="noopener noreferrer"
                class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-2xl transform hover:scale-110 transition-all duration-300 z-50"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-message-circle w-6 h-6">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                </svg></a>
        </div>
    </div>
    <script type="module" src="./main.tsx"></script>

    <style>
        @font-face {
            font-family: Inter-NjBkMDQwOTZj;
            font-weight: 600;
            src: url(data:font/woff2;base64,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) format("woff2");
        }

        @font-face {
            font-family: Inter-NjBkMDQwOTZj;
            font-weight: 500;
            src: url(data:font/woff2;base64,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) format("woff2");
        }
    </style>
    <!-- <div style="position: fixed; bottom: 1rem; right: 1rem; z-index: 2147483647;"><template shadowrootmode="open">
            <div
                style="color-scheme: initial; forced-color-adjust: initial; mask: initial; math-depth: initial; position: initial; position-anchor: initial; text-size-adjust: initial; appearance: initial; color: black; font: initial; font-palette: initial; font-synthesis: initial; position-area: initial; text-orientation: initial; text-rendering: initial; text-spacing-trim: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; anchor-name: initial; anchor-scope: initial; animation-composition: initial; animation: initial; app-region: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: initial; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: initial; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; inset: initial; box-decoration-break: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; corner-shape: initial; corner-block-end-shape: initial; corner-block-start-shape: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial; d: initial; display: initial; dominant-baseline: initial; dynamic-range-limit: initial; empty-cells: initial; field-sizing: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: initial; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; interpolate-size: initial; isolation: initial; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask-type: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: initial; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: initial; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-block: initial; overflow-clip-margin: initial; overflow-inline: initial; overflow-wrap: initial; overflow: initial; overlay: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position-try: initial; position-visibility: initial; print-color-adjust: initial; quotes: initial; r: initial; reading-flow: initial; reading-order: initial; resize: initial; rotate: initial; ruby-align: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-initial-target: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-marker-group: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scroll-timeline: initial; scrollbar-color: initial; scrollbar-gutter: initial; scrollbar-width: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-box: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; text-wrap: initial; timeline-scope: initial; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-timeline: initial; view-transition-class: initial; view-transition-name: initial; visibility: initial; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; white-space-collapse: initial; widows: initial; width: initial; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: initial;">
                <div class="badge"
                    style="border-radius: 8px; border: 1px solid rgb(225, 242, 255); box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; font-size: 16px; font-weight: 600; padding: 8px 16px 8px 12px; background: white; font-family: Inter-NjBkMDQwOTZj; display: flex; align-items: center; cursor: default; scale: 0.8; color: inherit; text-decoration: inherit;">
                    <svg style="width: 24px; height: 24px; padding-right: 4px;">
                        <g style="mix-blend-mode:difference">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.3276 19.9235C11.8345 19.9235 10.3686 19.3808 9.52704 18.2141L9.23021 19.5901L3.75 22.5L4.34161 19.5901L8.33258 1.5H13.219L11.8074 7.87631C12.9475 6.62818 14.0063 6.16692 15.3636 6.16692C18.2954 6.16692 20.25 8.09338 20.25 11.6207C20.25 15.2566 17.9968 19.9235 13.3276 19.9235ZM15.2007 12.6518C15.2007 14.334 14.0062 15.6093 12.4589 15.6093C11.5902 15.6093 10.8029 15.2837 10.2871 14.7139L11.0473 11.3765C11.6173 10.8067 12.2689 10.4811 13.029 10.4811C14.1963 10.4811 15.2007 11.3494 15.2007 12.6518Z"
                                fill="white"></path>
                        </g>
                    </svg><span>Made in Bolt</span></div>
                <div class="dialog"
                    style="display: none; padding: 6px 8px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; background: rgb(248, 248, 248); border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 6px; font-family: Inter-NjBkMDQwOTZj; font-weight: 500; position: absolute; bottom: 44px; right: 0px; width: 230px; font-size: 13px;">
                    <p style="margin: 0 0 7px; padding: 0;">
                        This badge will be visible when you publish the site.
                    </p>
                    Upgrade to the <a href="https://bolt.new/pricing" target="_blank"
                        style="color: #1488FC; font-weight: bold;">Pro plan</a> to remove it.<div
                        style="position: absolute; bottom: -6px; right: 70px; width: 0px; height: 0px; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid rgb(248, 248, 248); z-index: 2;">
                    </div>
                    <div
                        style="position: absolute; bottom: -7px; right: 69px; width: 0px; height: 0px; border-left: 7px solid transparent; border-right: 7px solid transparent; border-top: 7px solid rgba(0, 0, 0, 0.1); z-index: 1;">
                    </div>
                </div>
            </div>
            <style></style>
        </template></div> -->
        
</body>

</html>