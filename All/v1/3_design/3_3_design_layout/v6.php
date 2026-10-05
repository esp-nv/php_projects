<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <!DOCTYPE html>
    <title>My Example</title>
    <style>
        body { 
            display: grid;
            grid-template-areas: 
                "header header header"
                "nav article ads"
                "footer footer footer";
            grid-template-rows: 60px 1fr 60px;
            grid-template-columns: 20% 1fr 15%;
            grid-gap: 10px;
            height: 100vh;
            margin: 0;
        }
        #pageHeader {
            grid-area: header;
        }
        #pageFooter {
            grid-area: footer;
        }
        #mainArticle { 
            grid-area: article;      
        }
        #mainNav { 
            grid-area: nav; 
        }
        #siteAds { 
            grid-area: ads; 
        }
        header, footer, article, nav, div {
            padding: 20px;
            background: gold;
        }
        @media all and (max-width: 575px) {
            body { 
                grid-template-areas: 
                    "header"
                    "nav"
                    "article"
                    "ads"
                    "footer";
                grid-template-rows: 80px  70px 10fr 1fr 70px;  
                grid-template-columns: 1fr;
            }
        }
    </style>
    <body>


        <header id="pageHeader">Header</header>
        <nav id="mainNav">Nav</nav>
        <article id="mainArticle">Article</article>
        <div id="siteAds">Ads</div>
        <footer id="pageFooter">Footer</footer>

    </body>
</html>
