
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">


        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

        <meta name="apple-mobile-web-app-title" content="CodePen">

        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />




        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


        <title>Sort Table Rows by Table Headers - Ascending and Descending (jQuery)</title>

        <link rel="canonical" href="https://codepen.io/nathancockerill/pen/OQyXWb">




        <style>
            @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700");
            *, *:before, *:after {
                box-sizing: border-box;
            }

            body {
                padding: 24px;
                font-family: "Source Sans Pro", sans-serif;
                margin: 0;
            }

            h1, h2, h3, h4, h5, h6 {
                margin: 0;
            }

            .container {
                max-width: 1000px;
                margin-right: auto;
                margin-left: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .table {
                width: 100%;
                border: 1px solid #EEEEEE;
            }

            .table-header {
                display: flex;
                width: 100%;
                background: #000;
                padding: 18px 0;
            }

            .table-row {
                display: flex;
                width: 100%;
                padding: 18px 0;
            }
            .table-row:nth-of-type(odd) {
                background: #EEEEEE;
            }

            .table-data, .header__item {
                flex: 1 1 20%;
                text-align: center;
            }

            .header__item {
                text-transform: uppercase;
            }

            .filter__link {
                color: white;
                text-decoration: none;
                position: relative;
                display: inline-block;
                padding-left: 24px;
                padding-right: 24px;
            }
            .filter__link::after {
                content: "";
                position: absolute;
                right: -18px;
                color: white;
                font-size: 12px;
                top: 50%;
                transform: translateY(-50%);
            }
            .filter__link.desc::after {
                content: "(desc)";
            }
            .filter__link.asc::after {
                content: "(asc)";
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <p>Sort Table Rows by Clicking on the Table Headers - Ascending and Descending (jQuery)</p>
        <div class="container">

            <div class="table">
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
                    <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Wins</a></div>
                    <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Draws</a></div>
                    <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Losses</a></div>
                    <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Total</a></div>
                </div>
                <div class="table-content">	
                    <div class="table-row">		
                        <div class="table-data">Tom</div>
                        <div class="table-data">2</div>
                        <div class="table-data">0</div>
                        <div class="table-data">1</div>
                        <div class="table-data">5</div>
                    </div>
                    <div class="table-row">
                        <div class="table-data">Dick</div>
                        <div class="table-data">1</div>
                        <div class="table-data">1</div>
                        <div class="table-data">2</div>
                        <div class="table-data">3</div>
                    </div>
                    <div class="table-row">
                        <div class="table-data">Harry</div>
                        <div class="table-data">0</div>
                        <div class="table-data">2</div>
                        <div class="table-data">2</div>
                        <div class="table-data">2</div>
                    </div>
                </div>	
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script id="rendered-js" >
      var properties = [
          'name',
          'wins',
          'draws',
          'losses',
          'total'];


      $.each(properties, function (i, val) {

          var orderClass = '';

          $("#" + val).click(function (e) {
              e.preventDefault();
              $('.filter__link.filter__link--active').not(this).removeClass('filter__link--active');
              $(this).toggleClass('filter__link--active');
              $('.filter__link').removeClass('asc desc');

              if (orderClass == 'desc' || orderClass == '') {
                  $(this).addClass('asc');
                  orderClass = 'asc';
              } else {
                  $(this).addClass('desc');
                  orderClass = 'desc';
              }

              var parent = $(this).closest('.header__item');
              var index = $(".header__item").index(parent);
              var $table = $('.table-content');
              var rows = $table.find('.table-row').get();
              var isSelected = $(this).hasClass('filter__link--active');
              var isNumber = $(this).hasClass('filter__link--number');

              rows.sort(function (a, b) {

                  var x = $(a).find('.table-data').eq(index).text();
                  var y = $(b).find('.table-data').eq(index).text();

                  if (isNumber == true) {

                      if (isSelected) {
                          return x - y;
                      } else {
                          return y - x;
                      }

                  } else {

                      if (isSelected) {
                          if (x < y)
                              return -1;
                          if (x > y)
                              return 1;
                          return 0;
                      } else {
                          if (x > y)
                              return -1;
                          if (x < y)
                              return 1;
                          return 0;
                      }
                  }
              });

              $.each(rows, function (index, row) {
                  $table.append(row);
              });

              return false;
          });

      });
//# sourceURL=pen.js
        </script>


    </body>

</html>
