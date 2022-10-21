<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

  <!-- Meta Tags Generic-->
  <title>Hypha | DAO activation</title>
  <meta name="description" content="Building decentralised apps to empower communities with the tools of decentralised and autonomous governance.">
  <meta name="og:image" content="https://hypha.earth/img/og-image.jpg">
  <link rel="icon" type="image/png" href="img/favicon.png" />


  <!--  Non-Essential, But Recommended -->
  <meta property="og:site_name" content="Hypha | Token Sale">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/general-style.css">
  <link rel="stylesheet" href="css/token-sale.css">
  <link rel="stylesheet" href="css/loader-style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!-- Javascript / jQuery libraries -->
  <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>

  <!--luigi's global custom animations-->
  <script src="js/general-animations.js" type="text/javascript"></script>

  <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://track.hypha.earth/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '9']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


<body class="buy-seeds">

  <!--page loader very basic, waits the load of the header background image and disappears-->
  <div class="obscurer">

    <div class="vertical-centered-box">
      <div class="contentt">
        <div class="loader-circle"></div>
        <div class="loader-line-mask">
          <div class="loader-line"></div>
        </div>
        <img src="img/round-logo.svg" height="70" width="70" />
      </div>
    </div>

  </div>

  <header class="static">
    <div class="logo">
      <a href="https://hypha.earth">
        <h1><img class="light-log" src="img/round-logo.svg" alt="hypha"/></h1>
      </a>
    </div>
  </header>

   <main>
     <section class="multistep">
       <div class="foglio">
         <div id="buyhypha-wizard" class="preview">


           <div id="step-1">
             <div class="steps-top">
               <div class="account-welcome">
                 <div id="account-img">
                   <img src="https://seeds-service.s3.amazonaws.com/development/7c630cc7-efa8-41bc-8e20-aae9189bacbb/5010b08b-bb83-412f-a1de-63c714d7fcb4-1920.jpg">
                 </div>
                 <p>hi <span id="account-name">Luigi Carlini</span> </p>
               </div>

               <div id="amount-info">
                 <p>Hypha Tokens to buy:</p>
                 <p class="hypha-amount-purchase">
                   <img class="hypha-curr" src="img/round-logo.svg">
                   <span id="hypha-amount-to-buy">1,300.00</span>
                 </p>
                 <p class="conversion">
                   <span id="usd-amount-to-buy">1,400.00</span>
                   <span class="doll"><strong>USD</strong></span>
                 </p>
               </div>
             </div>

             <div class="steps-bottom">
               <h4>Payment Method</h4>
               <p>Select how you would like to buy Hypha token</p>
               <div id="payment-options">
                 <div class="token-select" id="choose-EOS">
                   <div class="token-pay">
                     <img src="/img/buy-hypha-tokens/eos.png">
                   </div>
                   <p>EOS</p>
                 </div>
                 <div class="token-select selected" id="choose-BTC">
                   <div class="token-pay">
                     <img src="/img/buy-hypha-tokens/btc.png">
                   </div>
                   <p>BTC</p>
                 </div>
               </div>
               <div class="steps-action">
                 <button id="button-next">Next</button>
               </div>
             </div>
           </div>

           <div class="spacer"></div>

           <div id="step-2">
               <div class="steps-top">
                 <p>Buy Hypha Token</p>
                  <h2>Finalise Purchase</h2>
                  <div class="bill">
                     <p>to buy <span id="total-hypha-to-buy">1,300.00 </span> <b>HYPHA tokens</b></p>
                     <p>Transfer the exact amount of<span id="selected-method"> BTC</span> to:</p>
                     <div id="btc-bill-card" class="btc-bill-card">
                        <div class="btc-address-title">
                           <div>
                              BTC Address:
                              <div class="copy"></div>
                           </div>
                           <span id="hypha-btc-address">BTCADDRESS1223454534543</span>
                        </div>
                        <div class="btc-amount-space">
                           <div>BTC amount:<span id="total-btc-to-send">0.123456</span></div>
                           <div class="copy"></div>
                        </div>
                        <div class="btc-amount-space">
                           <div>USD amount:<span id="total-btc-to-send">1,400.00</span></div>
                           <div class="copy"></div>
                        </div>
                     </div>
                     <div id="btc-qr-code">

                     </div>
                     <p>Hypha will be transferred as soon as there is more than 1 confirmation on your Bitcoin transaction</p>
                  </div>
               </div>
               <div class="steps-bottom">
                  <div class="steps-action"><button id="button-previous">Back</button></div>
               </div>
            </div>

         </div>
       </div>
      </section>

   </main>

  <?php
      include 'incl/hypha-footer.html';

   ?>

</body>

</html>
