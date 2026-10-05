<!DOCTYPE html>
<html>

    <head>
        <title>All Project Accordion Example</title>
        <link rel="stylesheet" 
              href=
              "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
        <style>
            .newspaper {
                column-count: 3;
                column-gap: 40px;
                column-rule-style: solid;
            }
            .accordion-item{
                background-color: #DDD;
            }
        </style>
        
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" language="javascript">

var validNavigation = false;

function endSession() {
// Browser or broswer tab is closed
// Do sth here ...
alert("bye");
}

function wireUpEvents() {
/*
* For a list of events that triggers onbeforeunload on IE
* check http://msdn.microsoft.com/en-us/library/ms536907(VS.85).aspx
*/
window.onbeforeunload = function() {
  if (!validNavigation) {
     endSession();
  }
 }

// Attach the event keypress to exclude the F5 refresh
$(document).bind('keypress', function(e) {
if (e.keyCode == 116){
  validNavigation = true;
}
});

// Attach the event click for all links in the page
$("a").bind("click", function() {
validNavigation = true;
});

 // Attach the event submit for all forms in the page
 $("form").bind("submit", function() {
 validNavigation = true;
 });

 // Attach the event click for all inputs in the page
 $("input[type=submit]").bind("click", function() {
 validNavigation = true;
 });

}

// Wire up the events as soon as the DOM tree is ready
$(document).ready(function() {
wireUpEvents();  
}); 
</script>    
    </head>

    <body>
        <h2 class="text-center">
            My Projects - <a a href="../index.php">Back to home menu</a>
        </h2>
        <a href="7_Form_Layout/LogReg_form_design/ver2/login.php">ver 2</a> s db - 7_Form_Layout/LogReg_form_design/ver3/login.php
        <br>
        <?php
        echo(' PHP_SELF <br>' . $_SERVER['PHP_SELF'] . '<br><br>');
        ?>
        <hr>
        <div class="container mt-5">
            <div class="accordion accordion-flush mt-4" 
                 id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            1 - Dark Mode
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="1_DarkMode/v1/index.php">v1</a> dark mode </p>
                                <p><a href="1_DarkMode/v2/index.php">v2</a>ver 2 </p> 
                                <p><a href="1_DarkMode/v3/index.php">v3</a> ver 3</p> 
                                <p><a href="1_DarkMode/v4/index.html">v4</a> ver 4</p> 
                                <p><a href="1_DarkMode/v5/index.php">v5</a> ver 5</p>
                                <p><a href="1_DarkMode/v6/index.php">v6</a> ver 6</p>
                                <p><a href="1_DarkMode/v7/index.php">v7</a> ver 7</p>
                                <p><a href="1_DarkMode/v8/index.php">v8</a> ver 8</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2 - db - Multu User
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="2_db_multi_user/v1/index.php">v1</a> multi-user role-based-login-system</p>
                                <p> <a href="2_db_multi_user/v2/index.php">v2</a> Multiple-User-Login-UI </p>
                                <p><a href="2_db_multi_user/v3/index.php">v3</a> Log In | VALHALLA ACADEMY</p>   
                                <p><a href="2_db_multi_user/db_multi_user/v4/login.php">v4</a> login</p>
                                <p><a href="2_db_multi_user/v5/multi_user/index.php">v5</a> multi-user</p> 
                                <p><a href="#">#</a> </p> 
                                <p><a href="#">#</a> </p> 
                                <p><a href="#">#</a> </p>

                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3 - design
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="3_design/3_1_db-web/index.php">v1</a> db - web</p>
                                <p><a href="3_design/3_2_design_Dashboard/index.php">v2</a> Dashboard</p>
                                <p><a href="3_design/3_3_design_layout/index.php">v3</a> Layout</p>
                                <p><a href="3_design/3_4_Design_navbar/index.php">v4</a> Navbar</p>
                                <p><a href="3_design/3_5_design/index.php">v5</a> design</p>
                                <p><a href="3_design/3_6_other/index.php">v6</a> Custom Tooltip</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4 - drugi
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="4_drugi/AdresnaKniga/v1.php">adresna kniga</a> spisak list priateli</p> 
                                <p><a href="4_drugi/demo/index.php">demo</a> Create a Zip File Using PHP and Download Multiple Files</p> 
                                <p><a href="4_drugi/dropdown/index.php">dropdown </a> drop-down with pics</p>
                                <p> <a href="4_drugi/friends/index.php">friends</a> simple login form without db</p>
                                <p> <a href="4_drugi/other/index.php">other</a> Advance Search With Filters</p>
                                <details>
                                    <summary>table</summary> 
                                    <ol type="1">
                                        <p> <a href="4_drugi/SortTable/index.php">sort table</a> asc, dec, default table po first name </p> 
                                        <p><a href="4_drugi/data/index.php">data</a> show tables ot db,display,export table user excel;login + error;open db; crud db image;create folder</p>
                                        <p><a href="4_drugi/dataTxt/index.php">data txt</a> razdelitel na txt file v tablica </p> 
                                        <p><a href="4_drugi/dbColumn/index.php">dbColumn</a> show/hide column with toggle button </p>
                                    </ol>
                                </details>
                                <details>
                                    <summary>upload</summary> 
                                    <ol type="1">
                                        <li><a href="4_drugi/upload/v1/index.php">v1</a> User Management + image</li>
                                        <li><a href="4_drugi/upload/v2/index.php">v2</a> Fill UserName and Upload PDF with db </li>
                                        <li><a href="4_drugi/upload/v3/index.php">v3</a> PHP - Delete Uploaded File Using MySQLi</li>
                                        <li><a href="4_drugi/upload/v4/index.php">v4</a> Upload form  </li>
                                        <li><a href="4_drugi/upload/v5/index.php">v5</a> Fill UserName and Upload PDF- your name, filename</li>
                                        <li><a href="4_drugi/upload/v6/index.php">v6</a> Upload View & Download file in PHP and MySQL - filename,view,download</li>
                                        <li><a href="4_drugi/upload/v7/index.php">v7</a> Upload image</li>
                                        <li><a href="4_drugi/upload/v8/index.php">v8</a> Upload image NB pagination, search</li>
                                    </ol>
                                </details>
                                <details>
                                    <summary>directory</summary> 
                                    <ol type="1">
                                        <li><a href="4_drugi/dir/v1/index.php">v1</a> pokazva failovete v directoria dir</li>
                                        <li><a href="4_drugi/dir/v2/index.php">v2</a> Directory Contents </li>
                                        <li><a href="4_drugi/dir/v3/index.php">v3</a> Create new directory</li>
                                        <li><a href="4_drugi/dir/v4/index.php">v4</a> ver 1 view directory</li> 
                                        
                                    </ol>
                                </details>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5 - responsive + scrollspy
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <details>
                                    <summary>responsive</summary> 
                                    <ol type="1">
                                        <li><a href="5_responsive_scrollspy/responsive/v1/index.php">v1</a> Sidebar With Bootstrap</li>
                                        <li><a href="5_responsive_scrollspy/responsive/v2/index.php">v2</a> Sidebar With Bootstrap - Admin Dashboard</li>
                                        <li><a href="#">#</a> </li>
                                    </ol>
                                </details>
                                <hr>
                                <details>
                                    <summary>scrollspy</summary> 
                                    <ol type="1">
                                        <li><a href="5_responsive_scrollspy/scrollspy/v1.php">v1</a> Scrollspy with Bootstrap 5</li>
                                        <li><a href="5_responsive_scrollspy/scrollspy/v2/index.php">v2</a>  Bootstrap Example</li>
                                        <li><a href="5_responsive_scrollspy/scrollspy/v3/index.php">v3</a> Bootstrap Example with dot </li>
                                        <li><a href="5_responsive_scrollspy/scrollspy/v4.php">v4</a> Bootstrap Scrollspy Vertical Menu Example</li>
                                    </ol>
                                </details>
                                <hr>
                                <details>
                                    <summary>component</summary> 
                                    <ol type="1">
                                        <li><a href="5_responsive_scrollspy/scrollspy/v1.php">v1</a> Badges and labels</li>
                                        <li><a href="5_responsive_scrollspy/scrollspy/v2/index.php">v2</a>  Bootstrap Example</li>
                                        <li><a href="5_responsive_scrollspy/scrollspy/v3/index.php">v3</a> Bootstrap Example with dot </li>
                                        <li><a href="5_responsive_scrollspy/scrollspy/v4.php">v4</a> Bootstrap Scrollspy Vertical Menu Example</li>
                                    </ol>
                                </details>
                                <hr>
                                <details>
                                    <summary>export</summary> 
                                    <ol type="1">
                                        <li><a href="5_responsive_scrollspy/export/v1/download.php">v1</a> export csv</li>
                                        <li><a href="5_responsive_scrollspy/export/v2/index.php">v2</a>  csv--www.codexworld.com/</li>
                                        <li><a href="5_responsive_scrollspy/export/v3/index.php">v3</a> </li>
                                        <li><a href="5_responsive_scrollspy/export/v4.php">v4</a> </li>
                                    </ol>
                                </details>
                                <hr>
                                <p><a href="#">#</a> </p> 
                                <p><a href="#">#</a> </p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6 - other
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="6_other/clock_sound/index.html">v1</a> clock sound</p> 
                                <p><a href="6_other/alarm_clock/index.html">v2</a> alarm clock</p>
                                <p><a href="6_other/html_css_layout/index.php">v3</a> html</p>
                                <p><a href="6_other/E-Commerce-Website-Using-PHP-master/E-Commerce Full Website Using PHP/index.php">v4</a> cms - ne raboti login formata</p>
                                <p><a href="6_other/docs/index.html">v4</a> docs</p>
                                <details>
                                    <summary>directory</summary> 
                                    <ol type="1">
                                        <li><a href="4_drugi/dir/v1/index.php">v1</a> pokazva failovete v directoria dir</li>
                                        <li><a href="4_drugi/dir/v2/index.php">v2</a> Directory Contents </li>
                                        <li><a href="4_drugi/dir/v3/index.php">v2</a>Create new directory</li>
                                    </ol>
                                </details>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7- Form Layout
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li><a href="7_Form_Layout/AdminReg/index.php">ver 10</a> Admin reg</li>
                            <section id="Content" class="newspaper">
                                <details>
                                    <summary><strong>v1 admin</strong></summary><hr> 
                                    <ol type="I">
                                        <li>
                                            <details>
                                                <summary><a href="7_Form_Layout/Admin/index.php">Admin</a> -- crud, sort, export, pageination, limit</summary> 
                                                <ol type="1">
                                                    <li>Home</li>
                                                    <li>Dashboard</li>
                                                    <li>
                                                        <details><summary>Record</summary> 
                                                            <ol type="i">
                                                                <li>Insert</li>
                                                                <li>Update</li>
                                                                <li>View</li>
                                                                <li>Multi Del</li>
                                                                <li>Find</li>
                                                            </ol>
                                                        </details>
                                                    <li>Export pdf</li>
                                                    <li>Export to pdf 2</li>
                                                    <li>Export/sort by header</li>
                                                    <li>Pagination</li>
                                                    <li>Page limit</li>
                                                    <li>Logout </li>
                                                </ol>
                                            </details>
                                        </li>
                                        <li><details>
                                                <summary><a href="7_Form_Layout/AdminDB/index.php">AdminDB</a> -- dashboard style, sort</summary> 
                                                <ol type="1">
                                                    <li>Home</li>
                                                    <li>Dashboard menu style</li>
                                                    <li>Sort Header</li>
                                                    <li>Logout</li>

                                                </ol>
                                            </details>
                                        </li>
                                        <li>
                                            <details>
                                                <summary><a href="7_Form_Layout/AdminUser/index.php">AdminUser</a> --sort header; bez style - admin i user -1 forma za login - dashboard </summary> 
                                                <ol type="1">
                                                    <li>Home</li>
                                                    <li>Dashboard menu style</li>
                                                    <li>Sort Header</li>
                                                    <li>Logout</li>
                                                </ol>
                                            </details>
                                        </li>
                                        <li>
                                            <details>
                                                <summary><a href="7_Form_Layout/LimitTable/index.php">LimitTable</a>  -- bez style forma za login; style na registration form</summary> 
                                                <ol type="1">
                                                    <li>Home</li>
                                                    <li>Sort </li>
                                                    <li>Logout</li>

                                                </ol>
                                            </details>
                                        </li>
                                        <li>
                                            <details>
                                                <summary><a href="7_Form_Layout/LogReg/index.php">LogReg</a> -- add sort detail list record</summary> 
                                                <ol type="i">
                                                    <li>add</li>
                                                    <li>search </li>
                                                    <li>detail na record</li>
                                                    <li>list</li>
                                                    <li>search options </li>
                                                </ol>
                                            </details>
                                        </li>
                                        <li>
                                            <details>
                                                <summary><a href="7_Form_Layout/MultiUser/login.php">MultiUser</a> -- dashboard for Super-admin/admin/manager </summary> 
                                                <ol type="1">
                                                    <li>login</li>
                                                    <li>registration </li>
                                                    <li>dashboard for Super-admin/admin/manager </li>
                                                    <li>loguot</li>

                                                </ol>
                                            </details>
                                        </li>
                                        <li>                
                                            <a href="7_Form_Layout/LoginSignReg/index.php">LoginSignup</a> -- samo login/reg forma 
                                        </li>
                                        <li>                
                                            <a href="7_Form_Layout/formHtml/index.php">formhtml</a> -- samo login forma 
                                        </li>
                                    </ol>
                                    <hr>
                                </details>
                                <!-- login reistration form design -->
                                <details>
                                    <summary><strong>v2 Login / Registration form design</strong></summary><hr>                                  
                                    <ol type="I">
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver1/login.php">ver 1</a></li>  
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver2/login.php">ver 2</a> s db</li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver3/login.php">ver 3</a> s db</li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver4/login.php">ver 4</a></li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver5/login.php">ver 5</a></li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver6/login.php">ver 6</a></li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver7/login.php">ver 7</a></li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver8/login.php">ver 8</a></li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver9/login.php">ver 9</a></li>
                                        <li><a href="7_Form_Layout/LogReg_form_design/ver10/v1.php">ver 10</a></li>
                                        
                                    </ol>
                                    <hr>
                                </details>
                                <details>
                                    <summary><strong>v3 Click me</strong></summary><hr> 
                                    <p>Hidden content</p>
                                    <hr>
                                </details>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            8 - color
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="8_color/v1/index.php">v1</a> ver 1</p> 
                                <p><a href="8_color/v2/index.php">v2</a> ver 2</p>
                                <p><a href="8_color/v3/index.php">v3</a> ver 3</p> 
                                <p><a href="8_color/v4/index.php">v4</a> ver 4</p>
                                <p><a href="8_color/v5/index.php">v5</a> ver 5</p>
                                <p><a href="8_color/v6/index.php">v6</a> ver 6</p>
                                <p><a href="8_color/v7/index.php">v7</a> ver 7</p>
                                <p><a href="8_color/v8/index.php">v8</a> ver 8</p>
                                <p><a href="8_color/v9/index.php">v9</a> ver 9</p>
                                <p><a href="8_color/v10/index.php">v10</a> ver 10</p>
                                <p><a href="8_color/v11/index.php">v11</a> ver 11 dashboard</p>
                                <p><a href="8_color/v12/index.php">v12</a> ver 12 option:defaut, dark, light</p>
                                <p><a href="8_color/v13/index.php">v13</a> ver 13</p>
                                <p><a href="8_color/v14/index.php">v14</a> ver 14</p>
                                <p><a href="8_color/v15/index.php">v15</a> ver 15</p>
                                <p><a href="8_color/v16/index.php">v16</a> ver 16</p>
                                <p><a href="8_color/v17/index.php">v17</a> ver 17 color picker</p>
                                <p><a href="8_color/v18/index.php">v18</a> ver 18</p>
                                <p><a href="8_color/v19/index.php">v19</a> ver 19</p>
                                <p><a href="8_color/v20/index.php">v20</a> ver 20</p>
                                <p><a href="8_color/v21/index.php">v21</a> ver 21</p>
                                <p><a href="8_color/v23/index.php">v23</a> ver 23</p>
                                <p><a href="8_color/v25/index.php">v25</a> ver 25 Color theme dropdown</p>
                                <p><a href="8_color/v26/index.php">v26</a> ver 26</p>
                                <p><a href="8_color/v27/index.php">v27</a> ver 27</p>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            9 - theme
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <p><a href="9_theme/v1/index.php">v1</a> ver 1</p> 
                                <hr>
                                <details>
                                    <summary>PHP Bootstrap 5 Starter Pages</summary><hr> 
                                    <p><a href="9_theme/v2/v1.php">v1</a> my blog</p> 
                                    <p><a href="9_theme/v2/v2.php">v2</a> Products</p>
                                    <p><a href="9_theme/v2/v3.php">v3</a> Online </p> 
                                    <p><a href="9_theme/v2/v4.php">v4</a> Analytics</p>
                                    <p><a href="9_theme/v2/v5.php">v5</a> Portfolio</p> 
                                    <p><a href="9_theme/v2/v6.php">v6</a> Marketing</p>
                                </details>
                                <hr>
                                <p><a href="9_theme/v3/index.php">v3</a> ver 3</p> 
                                <p><a href="#">#</a> </p>

                            </section>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10 - html css
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" 
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section id="Content" class="newspaper">
                                <details>
                                    <summary>filter</summary> 
                                    <ol type="1">
                                        <li><a href="10_html_css/v1_filter/v1/index.php">v1</a> Filter Dropdown Menu</li>
                                        <li><a href="10_html_css/v1_filter/v2/index.php">v2</a> filter list using JS</li>
                                        <li><a href="10_html_css/v1_filter/v3/index.php">v3</a> Create A Filtered Table</li>
                                        <li><a href="10_html_css/v1_filter/v4/index.php">v4</a> Filter DIV Elements</li>
                                        <li><a href="10_html_css/v1_filter/v5/index.php">v5</a> sort the list alphabetically using js</li>
                                        <li><a href="10_html_css/v1_filter/v6/index.php">v6</a> sort the table alphabetically, based on customer name</li>
                                    </ol>
                                </details>
                                <hr>
                                <p><a href="10_html_css/v2_table/index.php">v2</a> table</p> 
                                <p></p>
                                <details>
                                    <summary>menu</summary> 
                                    <ol type="1">
                                        <li><a href="10_html_css/v3_menu/v1.php">v1</a> tabs</li>
                                        <li><a href="10_html_css/v3_menu/v2.php">v2</a> Vertical Tabs</li>
                                        <li><a href="10_html_css/v3_menu/v3.php">v3</a> icon bar</li>
                                        <li><a href="10_html_css/v3_menu/v4.php">v4</a> A menu icon</li>
                                        <li><a href="10_html_css/v3_menu/v5.php">v5</a> Collapsibles/Accordion</li>
                                        <li><a href="10_html_css/v3_menu/v6.php">v6</a> Tab Headers</li>
                                        <li><a href="10_html_css/v3_menu/v7.php">v7</a> Full Page Tabs</li>
                                        <li><a href="10_html_css/v3_menu/v8.php">v8</a> Hoverable Vertical Tabs</li>
                                        <li><a href="10_html_css/v3_menu/v9_navbar_vertical/v9.php">v9</a> Vertical Navigation Bar</li>
                                        <li><a href="10_html_css/v3_menu/v10_navbar_horizontal/v10.php">v10</a> Horizontal Navigation Bar</li>
                                    </ol>
                                </details>
                                <p><a href="10_html_css/v4/v1.php">v4</a> css Dropdown</p> 
                                <p><a href="#">#</a> </p>
                                <p><a href="#">#</a> </p> 
                                <p><a href="#">#</a> </p>

                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src=
                "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
        </script>
    </body>

</html>
<!-- This is your first page setup. You can create other pages simply by copying this file and renaming the file to about-us.php or contact-us.php for example.

NOTE: Folders and file names are just suggestions. This element can and could be used for other things depending on your needs. -->