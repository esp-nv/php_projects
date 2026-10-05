
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">


        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

        <meta name="apple-mobile-web-app-title" content="CodePen">

        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />






        <title>CSS ToolTip Smooth animation</title>

        <link rel="canonical" href="https://codepen.io/linux/pen/xrEjaK">




        <style>
            /* Start Fonts from Google Fonts */
            /*Google Fonts*/

            @import url('https://fonts.googleapis.com/css?family=Arapey|Cantarell|Comfortaa|Khand|Russo+One|Ubuntu');


            /*End Fonts*/


            /* Start Body */

            body {
                /*   background: #EEE; */
                background: url("https://s16.postimg.org/4d17gd0vp/smbg.png");
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                color: #444;
                font-family: 'Comfortaa', cursive;
                text-align: center;
                font: 16px;

            }

            /* End Body */

            h1{
                margin-bottom: 7%;
            }

            /*tooltip Box*/
            .con-tooltip {

                position: relative;
                background: #F2D1C9;

                border-radius: 9px;
                padding: 0 20px;
                margin: 10px;

                display: inline-block;

                transition: all 0.3s ease-in-out;
                cursor: default;

            }

            /*tooltip */
            .tooltip {
                visibility: hidden;
                z-index: 1;
                opacity: .40;

                width: 100%;
                padding: 0px 20px;

                background: #333;
                color: #E086D3;

                position: absolute;
                top:-140%;
                left: -25%;


                border-radius: 9px;
                font: 16px;

                transform: translateY(9px);
                transition: all 0.3s ease-in-out;

                box-shadow: 0 0 3px rgba(56, 54, 54, 0.86);
            }


            /* tooltip  after*/
            .tooltip::after {
                content: " ";
                width: 0;
                height: 0;

                border-style: solid;
                border-width: 12px 12.5px 0 12.5px;
                border-color: #333 transparent transparent transparent;

                position: absolute;
                left: 40%;

            }

            .con-tooltip:hover .tooltip{
                visibility: visible;
                transform: translateY(-10px);
                opacity: 1;
                transition: .3s linear;
                animation: odsoky 1s ease-in-out infinite  alternate;

            }
            @keyframes odsoky {
                0%{
                    transform: translateY(6px);	
                }

                100%{
                    transform: translateY(1px);	
                }

            }

            /*hover ToolTip*/
            .left:hover {transform: translateX(-6px); }
            .top:hover {transform: translateY(-6px);  }
            .bottom:hover {transform: translateY(6px);}
            .right:hover {transform: translateX(6px); }



            /*left*/

            .left .tooltip{ top:-20%; left:-170%; }

            .left .tooltip::after{
                top:40%;
                left:90%;
                transform: rotate(-90deg);
            }




            /*bottom*/

            .bottom .tooltip { top:115%; left:-20%; }

            .bottom .tooltip::after{
                top:-17%;
                left:40%;
                transform: rotate(180deg);
            }



            /*right*/

            .right .tooltip { top:-20%; left:115%; }

            .right .tooltip::after{
                top:40%;
                left:-12%;
                transform: rotate(90deg);
            }

            h3 {
                background: #333;
                color: #E086D3;
                padding: 10px 20px;
                border-radius: 56px;
                width: 8em;
                margin: 20% auto 1% auto;

            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <h1>CSS ToolTip Smooth Animation </h1>
        <!--    con = The Container for items -->
        <div class="con">

            <!-- Left tooltip -->
            <div class="con-tooltip left">
                <p> Left </p>
                <div class="tooltip ">
                    <p>Left</p>
                </div>

            </div>


            <!-- Top tooltip-->
            <div class="con-tooltip top">
                <p> Top </p>
                <div class="tooltip ">
                    <p>Top</p>
                </div>
            </div>


            <!-- Bottom tooltip-->
            <div class="con-tooltip bottom">
                <p> bottom </p>
                <div class="tooltip ">
                    <p>bottom</p>
                </div>
            </div>

            <!-- Right tooltip-->
            <div class="con-tooltip right">
                <p> Right </p>
                <div class="tooltip ">
                    <p>Right</p>
                </div>
            </div>

            <!--      End con = Container-->
        </div>

        <h3> Omar Dsoky </h3>
    </body>

</html>
