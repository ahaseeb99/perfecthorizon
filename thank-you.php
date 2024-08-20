<?php 

include_once('include/cl_db.php');

$db = new DB;
$db->open();



if(isset($_REQUEST['submit'])){
    
    
$to = 'info@perfecthorizonltd.com';
$subject = "New Lead";

$ip = $db->get_client_ip();
$getLocationByIp = $db->getLocationByIp();
$country = $getLocationByIp['countryCode'];

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$service = $_POST['service'];
$package = $_POST['package'];
$price = $_POST['price'];

$db->insertLead($user_name , $email , $phone, $message, $service, $package, $price,$ip, $country);

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";

// For single user
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$messages=' <table width="100%" border="1" style="font-size:14px; font-family:arial;" cellspacing="0" cellpadding="3">
<tr>
<td>Name</td>
<td>'.$user_name .'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$email.'</td>
</tr>
<tr>
<td>Country</td>
<td>'.$country.'</td>
</tr>
<tr>
<td>IP</td>
<td>'.$ip.'</td>
</tr>
<tr>
<td>Mobile Number</td>
<td>'.$phone.'</td>
</tr>
<tr>
<td>Message</td>
<td>'.$message.'</td>
</tr>
<tr>
<td>Service</td>
<td>'.$service.'</td>
</tr>
<tr>
<td>Package</td>
<td>'.$package.'</td>
</tr>
<tr>
<td>Price</td>
<td>'.$price.'</td>
</tr>
</table>';

$mail = mail( $to, $subject, $messages, $headers );

if($mail){
}


}

?>

<!DOCTYPE html>
<html data-wf-domain="www.perfecthorizonltd.com" data-wf-page="64d23bb8c441a7d8896659fa"
  data-wf-site="64bfa5eec3353671101c9bd1">

<head>
    
  <meta charset="utf-8">
  <title>Thank You - Perfect Horizon</title>

  <!-- META ROBOT -->
  <meta name="viewport"
    content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
  <meta name="description" content="#" />

  <!-- META CONTENT -->
  <meta content="Probdone"
    name="Abdul Haseeb Q. a.k.a twistyBRAT 鬼 ]; | info@probdone.com | https://probdone.com | https://www.buymeacoffee.com/twistybrat" />
  <meta property="og:type" content="website">
  <meta content="Perfect Horizon - Your Marketing Catalyst" property="og:title">
  <meta content="Perfect Horizon - Your Marketing Catalyst" property="twitter:title">
  <meta content="summary_large_image" name="twitter:card">

  <!-- FAV ICON  -->
  <link href="64bfa5eec3353671101c9bd1/64cf5d1c0aef8ef8c7af9673_fav.png" rel="shortcut icon" type="image/x-icon">
  <link href="64bfa5eec3353671101c9bd1/64ff09edbfa8ab51e7e1b7af_Adsorb%20favicon%20%28black%20bg%29%201.png"
    rel="apple-touch-icon">

  <link href="64bfa5eec3353671101c9bd1/css/adsorb.webflow.4f8cb529b.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({ google: { families: ["Droid Sans:400,700", "Sora:100,200,300,regular,500,600,700,800:latin,latin-ext"] } });
  </script>
  <script type="text/javascript">
    !function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
  </script>
  <script defer="" src="npm/%40finsweet/attributes-scrolldisable%401/scrolldisable.js"></script>
  <script src="cookie/cookie.js"></script>

  <style>
    @media (min-width:992px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="defa40de-86da-ae8d-c445-1abbb969543a"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="6e1b7f4f-791d-fb8c-b102-7151b4a6f07a"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="7b1a9a0c-3527-de17-6f8a-dc59c3868fd4"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="d7c2bd56-bbaa-4a97-97ba-ed10a7c95829"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="1de41b1a-5b96-affb-4f6a-a63ef71a0c2e"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b8863902-fbdc-0f20-0a63-8c661491a53c"] {
        opacity: 0;
        background-color: rgba(12, 13, 15, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="88aee854-b25d-dcca-7ebe-72cb6728b97e"] {
        background-color: rgb(117, 120, 123);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424c"] {
        -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424b"] {
        -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424a"] {
        -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f4249"] {
        opacity: 0;
      }
    }

    @media (max-width:991px) and (min-width:768px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="defa40de-86da-ae8d-c445-1abbb969543a"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="6e1b7f4f-791d-fb8c-b102-7151b4a6f07a"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="7b1a9a0c-3527-de17-6f8a-dc59c3868fd4"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="d7c2bd56-bbaa-4a97-97ba-ed10a7c95829"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="1de41b1a-5b96-affb-4f6a-a63ef71a0c2e"] {
        -webkit-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b8863902-fbdc-0f20-0a63-8c661491a53c"] {
        opacity: 0;
        background-color: rgba(12, 13, 15, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="88aee854-b25d-dcca-7ebe-72cb6728b97e"] {
        background-color: rgb(117, 120, 123);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424c"] {
        -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424b"] {
        -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f424a"] {
        -webkit-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 3px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="e6a1b98e-aaf2-80f8-be67-02b0fa4f4249"] {
        opacity: 0;
      }
    }
    
    /*Modal*/
    h2#packageName {
        font-size: 21px;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(100deg, #c8eb87, #e66464);
        -webkit-background-clip: text;
        background-clip: text;
        display: inline-block;
        font-weight: 700;
        display: block;
        margin-bottom: 10px;
        border-bottom: 1px solid #ffffff45;
        padding-top: 14px;
        padding-bottom: 10px;
        text-align: center;
    }

    .pricing-body {
        margin: 20px;
    }
    
    
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 20%;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
        backdrop-filter: blur(1px);
    }
    
    .modal-content {
        background-color: #0C0D0F;
        color: #fff;
        padding: 20px;
        margin: 0 auto;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 5px;
    }
    
    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    h4#packagePrice {
        display: flex;
        justify-content: center;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(100deg, #eb9191, #5a5ae1);
        -webkit-background-clip: text;
        background-clip: text;
        font-weight: 600;
        font-size: 30px;
        margin-bottom: 10px;
    }
form#purchaseForm input {
    max-width: 400px;
    font-size: 14px;
    padding: 15px 15px;
    border-radius: 0px;
    background: black;
    border: 0;
    border-bottom: 1px solid white;
    width: 100%;
}
form#purchaseForm button {
    color: #fff;
    font-weight: 400;
    border-radius: 50px;
    border: 1px solid #fff;
    padding: 15px 20px;
    display: inline-block;
    margin: 14px 0;
    text-decoration: none;
    background: transparent;
}

form#purchaseForm {
    padding-top: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;
    line-height: 10px;
}
.overlay {
    display: none; /* Initially hidden */
    position: fixed; /* Fixed positioning */
    z-index: 1; /* Below the modal */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Semi-transparent background */
}
form#purchaseForm textarea {
    max-width: 400px;
    font-size: 14px;
    padding: 15px 15px;
    border-radius: 0px;
    background: black;
    border: 0;
    border-bottom: 1px solid white;
    width: 100%;
}
  </style>

</head>

<body>
  <div class="page-wrapper">
      <div id="overlay" class="overlay"></div>
      <div id="popupModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <h2 id="packageName">Package Name</h2>
                                <h4 id="packagePrice">Package Price</h4>
                                <form id="purchaseForm" method="POST" action="thank-you.php">
                                          <input type="hidden" name="service" id="modal-service">
                                      <input type="hidden" name="package" id="modal-package">
                                        <input type="hidden" name="price" id="modal-price">
                                    <input type="text" id="name" name="user_name" placeholder="Name" required><br><br>
                                    <input type="email" id="email" name="email" placeholder="Email" required><br><br>
                                    <input type="text" id="phone" name="phone" placeholder="Phone" required><br><br>
                                    <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea><br><br>
                                    <button type="submit" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>

    <div class="global-styles w-embed">
      <style>
        /* Make text look crisper and more legible in all browsers */
        body {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          font-smoothing: antialiased;
          text-rendering: optimizeLegibility;
        }

        /* Focus state style for keyboard navigation for the focusable elements */
        *[tabindex]:focus-visible,
        input[type="file"]:focus-visible {
          outline: 0.125rem solid #4d65ff;
          outline-offset: 0.125rem;
        }

        /* Get rid of top margin on first element in any rich text element */
        .w-richtext> :not(div):first-child,
        .w-richtext>div:first-child> :first-child {
          margin-top: 0 !important;
        }

        /* Get rid of bottom margin on last element in any rich text element */
        .w-richtext>:last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
          margin-bottom: 0 !important;
        }

        /* Prevent all click and hover interaction with an element */
        .pointer-events-off {
          pointer-events: none;
        }

        /* Enables all click and hover interaction with an element */
        .pointer-events-on {
          pointer-events: auto;
        }

        /* Create a class of .div-square which maintains a 1:1 dimension of a div */
        .div-square::after {
          content: "";
          display: block;
          padding-bottom: 100%;
        }

        /* Make sure containers never lose their center alignment */
        .container-medium,
        .container-small,
        .container-large {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        /* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
        /*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/

        /* Apply "..." after 3 lines of text */
        .text-style-3lines {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
        }

        /* Apply "..." after 2 lines of text */
        .text-style-2lines {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
        }

        /* Adds inline flex display */
        .display-inlineflex {
          display: inline-flex;
        }

        /* These classes are never overwritten */
        .hide {
          display: none !important;
        }

        @media screen and (max-width: 991px) {

          .hide,
          .hide-tablet {
            display: none !important;
          }
        }

        @media screen and (max-width: 767px) {
          .hide-mobile-landscape {
            display: none !important;
          }
        }

        @media screen and (max-width: 479px) {
          .hide-mobile {
            display: none !important;
          }
        }

        .margin-0 {
          margin: 0rem !important;
        }

        .padding-0 {
          padding: 0rem !important;
        }

        .spacing-clean {
          padding: 0rem !important;
          margin: 0rem !important;
        }

        .margin-top {
          margin-right: 0rem !important;
          margin-bottom: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-top {
          padding-right: 0rem !important;
          padding-bottom: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-right {
          margin-top: 0rem !important;
          margin-bottom: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-right {
          padding-top: 0rem !important;
          padding-bottom: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-bottom {
          margin-top: 0rem !important;
          margin-right: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-bottom {
          padding-top: 0rem !important;
          padding-right: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-left {
          margin-top: 0rem !important;
          margin-right: 0rem !important;
          margin-bottom: 0rem !important;
        }

        .padding-left {
          padding-top: 0rem !important;
          padding-right: 0rem !important;
          padding-bottom: 0rem !important;
        }

        .margin-horizontal {
          margin-top: 0rem !important;
          margin-bottom: 0rem !important;
        }

        .padding-horizontal {
          padding-top: 0rem !important;
          padding-bottom: 0rem !important;
        }

        .margin-vertical {
          margin-right: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-vertical {
          padding-right: 0rem !important;
          padding-left: 0rem !important;
        }


        html.lenis {
          height: auto;
        }

        .lenis.lenis-smooth {
          scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
          overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
          overflow: hidden;
        }

        .lenis.lenis-scrolling iframe {
          pointer-events: none;
        }
        
        .categories-tab ul {
    display: inline-block;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
}

.categories-tab ul li {
    display: inline;
    margin: 0 5px;
}

.categories-tab ul li a {
    border: 1px solid #fff;
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 500;
    padding: 10px 20px;
    transition: all 3s ease;
}
div#about {
    padding-bottom: 4%;
}

.categories-tab ul li.activetab a  , .categories-tab ul li:hover a {
    -webkit-text-fill-color: transparent;
    background-image: linear-gradient(100deg, #c8eb87, #e66464);
    -webkit-background-clip: text;
    background-clip: text;
    display: inline-block;
}

.pricing-body {
       width: 30%;
       height: 530px;
    float: left;
    border: 1px solid #fff;
    border-radius: 14px;
    display: block;
    padding: 20px;
    margin: 0 10px 10px;
}

.pricing-body h2 {
    font-size: 21px;
    -webkit-text-fill-color: transparent;
    background-image: linear-gradient(100deg, #c8eb87, #e66464);
    -webkit-background-clip: text;
    background-clip: text;
    display: inline-block;
    font-weight: 700;
    display: block;
    margin-bottom: 20px;
    border-bottom: 1px solid #ffffff45;
    padding-bottom: 10px;
}

.pricing-body ul {
    display: inline-block;
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
    height: 300px;
    overflow-y: scroll;
}

/* width */
.pricing-body ul::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.pricing-body ul::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
.pricing-body ul::-webkit-scrollbar-thumb {
  background: #7b5d87;
}

/* Handle on hover */
.pricing-body ul::-webkit-scrollbar-thumb:hover {
  background: #7b5d87;
}

.categories-tab {
    margin-bottom: 40px;
}

.pricing-body ul li {
    margin-bottom: 10px;
    font-size: 14px;
    padding: 0 10px;
}

.pricing-body h4 {
    -webkit-text-fill-color: transparent;
    background-image: linear-gradient(100deg, #eb9191, #5a5ae1);
    -webkit-background-clip: text;
    background-clip: text;
    font-weight: 700;
    font-size: 30px;
}


.pricing-body a {
    color: #fff;
    font-weight: 400;
    border-radius: 50px;
    border: 1px solid #fff;
    padding: 6px 20px;
    display: inline-block;
    margin: 14px 0;
    text-decoration: none;
}
      </style>
    </div>

    <div data-w-id="ef17cb56-1d5f-2824-ec19-90cbd2b4533a" class="nav-component">
        <div data-w-id="692688d0-ff5f-87e8-a3dd-65e7a6247c72" class="nav-background"></div>
        <div class="padding_nav">
          <div class="nav_container">
            <a href="index.html" aria-current="page" class="nav_logo w-inline-block w--current">
              <img src="64bfa5eec3353671101c9bd1/64bfc8c739ee3610119fc697_logo1.svg" loading="lazy" alt=""
                class="logo-image">
            </a>
            <div class="nav_menu">
              <div class="nav_list">
                <a href="services.html" class="nav_header-link w-inline-block">
                  <div class="nav_link-inner">
                    <div class="nav_link">Our Services</div>
                    <div class="nav_link">Our Services</div>
                  </div>
                  <div class="link-11_underline has-right-origin"></div>
                  <div class="link-11_underline has-left-origin"></div>
                </a>
                <a href="about.html" class="nav_header-link w-inline-block">
                  <div class="nav_link-inner">
                    <div class="nav_link">About Perfect Horizon</div>
                    <div class="nav_link">About Perfect Horizon</div>
                  </div>
                  <div class="link-11_underline has-right-origin"></div>
                  <div class="link-11_underline has-left-origin"></div>
                </a>
                <a href="career.html" class="nav_header-link w-inline-block">
                  <div class="nav_link-inner">
                    <div class="nav_link">Get in touch</div>
                    <div class="nav_link">Get in touch</div>
                  </div>
                  <div class="link-11_underline has-right-origin"></div>
                  <div class="link-11_underline has-left-origin"></div>
                </a>
              </div>
              <a fs-mirrorclick-element="" data-w-id="0553af30-30d5-f0a2-bcf1-18069f7d5f43" href="#"
                class="button w-inline-block">
                <div class="text-size-regular text-style-allcaps">Get a quote</div>
                <div class="button_ic is-default">
                  <div class="ic ic-size-medium w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <rect x="8" y="8" width="8" height="8" rx="4" fill="currentcolor"></rect>
                    </svg></div>
                </div>
                <div class="button_ic is-hover">
                  <div class="ic ic-size-medium w-embed">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="1" y="1" width="22" height="22" rx="11" fill="white"></rect>
                      <g clip-path="url(#clip0_1687_1045)">
                        <path
                          d="M8.70017 8.70011L8.70017 9.86331L13.3076 9.86743L8.28769 14.8873L9.11265 15.7123L14.1325 10.6924L14.1284 15.2998L15.2998 15.2998L15.2998 8.70011L8.70017 8.70011Z"
                          fill="currentcolor"></path>
                      </g>
                      <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="currentcolor"></rect>
                      <defs>
                        <clippath id="clip0_1687_1045">
                          <rect width="14" height="14" fill="white" transform="translate(5 19) rotate(-90)"></rect>
                        </clippath>
                      </defs>
                    </svg>
                  </div>
                </div>
              </a>
            </div>
            <div data-w-id="ef17cb56-1d5f-2824-ec19-90cbd2b4534d" class="nav_burger">
              <div class="nav_burger-frame">
                <div class="nav_burger-line is-1"></div>
                <div class="nav_burger-line is-2"></div>
                <div class="nav_burger-line is-3"></div>
              </div>
            </div>
          </div>
        </div>
        <div fs-scrolldisable-element="when-visible" class="open-menu">
          <div class="nav_menu is-tablet">
            <div class="nav_list">
              <a href="services.html" class="nav_link heading-style-h3">What we do</a>
              <a href="about.html" class="nav_link heading-style-h3">About Perfect Horizon</a>
              <a href="contact.html" class="nav_link heading-style-h3">Get in touch</a>
            </div>
            <a fs-mirrorclick-element="" data-w-id="0553af30-30d5-f0a2-bcf1-18069f7d5f43" href="contact.html"
              class="button w-inline-block">
              <div class="text-size-regular text-style-allcaps">Get a quote</div>
              <div class="button_ic is-default">
                <div class="ic ic-size-medium w-embed">
                  <svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8" y="8" width="8" height="8" rx="4" fill="currentcolor"></rect>
                  </svg>
                </div>
              </div>
              <div class="button_ic is-hover">
                <div class="ic ic-size-medium w-embed">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="1" width="22" height="22" rx="11" fill="white"></rect>
                    <g clip-path="url(#clip0_1687_1045)">
                      <path
                        d="M8.70017 8.70011L8.70017 9.86331L13.3076 9.86743L8.28769 14.8873L9.11265 15.7123L14.1325 10.6924L14.1284 15.2998L15.2998 15.2998L15.2998 8.70011L8.70017 8.70011Z"
                        fill="currentcolor"></path>
                    </g>
                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="currentcolor"></rect>
                    <defs>
                      <clippath id="clip0_1687_1045">
                        <rect width="14" height="14" fill="white" transform="translate(5 19) rotate(-90)"></rect>
                      </clippath>
                    </defs>
                  </svg>
                </div>
              </div>
            </a>
          </div>
          <div class="nav_element">
            <div class="menu-lottie" data-w-id="eccf2794-4af1-3860-442b-9c55f1aaabfa" data-animation-type="lottie"
              data-src="https://assets-global.website-files.com/64bfa5eec3353671101c9bd1/64f885c762524263f8706468_adsorb_graphic_element_safari.json"
              data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
              data-duration="0">
            </div>
          </div>
        </div>
      </div>

    <main class="main-wrapper">

      <div data-w-id="20249dc2-9eee-948c-7cbd-1e3c08bce7cb" class="hero-section is-about">
        <div class="padding-global">
          <div class="container-medium is-center">
            <div class="padding-section-large is-about-hero">
              <div data-w-id="20249dc2-9eee-948c-7cbd-1e3c08bce7cf" class="hero_content max-width-xlarge z-index-2">
                <h1>Thank <span class="gradient_text-d-bg"> You</span></h1>
                <div class="text-group">
                  <p class="heading-style-h5">Our support staff will contact you shortly.</p>
                  <div class="spacer-small"></div>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>



  <!-- <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=64bfa5eec3353671101c9bd1" type="text/javascript"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
  <script src="64bfa5eec3353671101c9bd1/js/webflow.0ff4af5b6.js" type="text/javascript"></script>
  <script src="gh/studio-freight/lenis%401.0.22/bundled/lenis.min.js"></script>

  <script>
  
  $(".categories-content-main > div:not(:first)").hide();
$(".categories-tab > ul li").click(function () {
var $index = $(this).index();
$(".categories-content-main > div").eq($index).fadeIn('fast').siblings("div").hide();
$(this).addClass("activetab").siblings().removeClass("activetab");
});

    const lenis = new Lenis()

    lenis.on('scroll', (e) => {
      console.log(e)
    })

    function raf(time) {
      lenis.raf(time)
      requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)

  </script>

  <style>
    .slider_slides {
      display: inline-block;
    }

    .slider_list {
      display: block !important;
    }

    .slider_prev:hover,
    .slider_prev:focus,
    .slider_next:hover,
    .slider_next:focus {
      outline: none;
    }

    .slider_slides,
    .slider_slides * {
      outline: none !important;
    }

    .slick-track {
      display: flex;
    }

    .lottie-opacity {
      opacity: 0;
    }

    @media (min-width: 2500px) {
      .lottie-opacity {
        opacity: 1;
      }
    }
  </style>

  <script type="text/javascript" src="npm/slick-carousel%401.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function () {
      $('.slider_list').slick({
        dots: false,
        speed: 500,
        infinite: false,
        autoSlidesToShow: false,
        variableWidth: true,
        slidesToScroll: 1,
        arrows: false,
        draggable: true,
        focusOnSelect: true,
        touchThreshold: 100,
      });

      $('.slider_prev').click(function () {
        $(this).closest('.team-section').find(".slider_list").slick('slickPrev');
      });

      $('.slider_next').click(function () {
        $(this).closest('.team-section').find(".slider_list").slick('slickNext');
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      if ($(window).width() >= 992) {
        var container = document.getElementById("containercheck");
        var widthBlock = container.offsetWidth;
        var cards = document.getElementsByClassName("team_item-visible");
        var cardWidth = widthBlock / 3.1;

        for (var i = 0; i < cards.length; i++) {
          cards[i].style.width = cardWidth + "px";
        }

        var hiddenItems = document.getElementsByClassName("team_item-content");
        var hiddenItemWidth = 0.6 * widthBlock;

        for (var j = 0; j < hiddenItems.length; j++) {
          hiddenItems[j].style.width = hiddenItemWidth + "px";
        }

        document.addEventListener("DOMContentLoaded", function () {
          const testClicks = document.querySelectorAll(".team_slide");
          const testContents = document.querySelectorAll(".team_item-hiden");

          testClicks.forEach((testClick, index) => {
            testClick.addEventListener("click", function () {
              const currentWidth = testContents[index].style.width;
              if (currentWidth === hiddenItemWidth) {
                testContents[index].style.width = "0rem";
              } else {
                testContents[index].style.width = hiddenItemWidth;
              }
            });
          });
        });
      }
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      if (window.innerWidth > 991) {
        var container = document.getElementById("containercheck");
        var widthBlock = container.offsetWidth;
        var targetWidth = (widthBlock / 3.1) + (0.6 * widthBlock);
        var initialWidth = widthBlock / 3.1;
        var teamSlides = document.querySelectorAll(".team_slide");

        teamSlides.forEach(function (teamSlide) {
          teamSlide.style.width = initialWidth + "px";
          var isExpanded = false;
          var clickCount = 0;

          var viewBio = teamSlide.querySelector(".view-bio");
          var hideBio = teamSlide.querySelector(".hide-bio");

          teamSlide.addEventListener("mousedown", function () {
            isDragging = false;
          });

          teamSlide.addEventListener("mouseup", function () {
            if (!isDragging) {
              clickCount++;
              var slideWidth = isExpanded ? initialWidth : targetWidth;

              if (clickCount % 2 === 1) {
                teamSlide.querySelector(".team_item-info").style.transition = "opacity 0.3s ease";
                teamSlide.querySelector(".team_item-info").style.opacity = 0;
                viewBio.style.display = "none";
                hideBio.style.display = "block";

              } else {
                teamSlide.querySelector(".team_item-info").style.transition = "opacity 0.3s ease";
                teamSlide.querySelector(".team_item-info").style.opacity = 1;
                viewBio.style.display = "block";
                hideBio.style.display = "none";
              }

              teamSlide.style.transition = "width 0.5s ease";
              teamSlide.style.width = slideWidth + "px";
              isExpanded = !isExpanded;
            }
          });

          teamSlide.addEventListener("mousemove", function () {
            isDragging = true;
          });
        });
      }
    });

  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("popupModal");
    var overlay = document.getElementById("overlay");
    var closeBtn = document.getElementsByClassName("close")[0];
    var packageName = document.getElementById("packageName");
    var packagePrice = document.getElementById("packagePrice");

    var buyNowButtons = document.getElementsByClassName("buyNowBtn");

    Array.from(buyNowButtons).forEach(function(btn) {
        btn.onclick = function() {
            packageName.innerText = btn.getAttribute("data-package-name");
            packagePrice.innerText = btn.getAttribute("data-package-price");
            
            $("#modal-package").val(packageName.innerText);
            $("#modal-price").val(packagePrice.innerText);
            
            modal.style.display = "block";
            overlay.style.display = "block";
        };
    });

    closeBtn.onclick = function() {
        modal.style.display = "none";
        overlay.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == modal || event.target == overlay) {
            modal.style.display = "none";
            overlay.style.display = "none";
        }
    };
});

</script>
</body>

</html>