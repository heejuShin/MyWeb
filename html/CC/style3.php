<html charset="UTF-8">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      html{
        background-color: white;
        border:1px solid gray;
      }

      div#header {
        width:100%;
        height:100px;
      }

      div#menu{
        background-color: white;
        text-align: left;
        padding: 10px;
        width: 100%;
      }
      div#contents{
        background-color: white;
        width: 100%;
      }
      .menu1:link, .menu1:visited{
        width: 100px;
        background-color: #b3b3b3;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
      }
      .menu1:hover, .menu1:active{
        background-color: gray;
      }
      .menu:link, .menu:visited{
        width: 100px;
        background-color: #595959;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
      }
      .menu:hover, .menu:active{
        background-color: gray;
      }
      a:link{
        color: black;
      }
      a:visited{
        color: black;
      }
      div#right{
        background-color: #e6e6e6;
        border:10px;
        display: block;
        border-radius: 5px;
        padding : 10px;
        width: 100%;
      }
      div#footer{
        text-align: center;
        boader-radius: 10px;
        padding: 0.5%;
        width:100%;
      }
      /*
      div#header{
        width:100%;
        height:200px;
      }
      div#footer{
        text-align: center;
        boader-radius: 10px;
        padding: 0.5%;
        width:100%;
        height: 100px;
      }
      */
    </style>
  </head>
  <body>

    <div id='main'>
        <div id='header'>
          <h1 style="color: mediumseagreen;"> Welcome to My Homepage </h1>
          <p> Use the menu to select different Stylesheets </p></div>
        </div>
        <div id='container'>
            <div id='menu'>
              <!--<ul>-->
                <a href='./style1.php' class = "menu">Stylesheet 1</a>
                <a href='./style2.php' class = "menu">Stylesheet 2</a>
                <a href='./style3.php' class = "menu1">Stylesheet 3</a>
                <a href='./style4.php' class = "menu">Stylesheet 4</a>
                <a href='./lab01.php' class = "menu">No Stylesheet</a>
              <!--</ul>-->
            </div>
            <div id='contents'>
              <h1 style="color: mediumseagreen;">Same Page Different Stylesheets</h1>

              <p>This is a demonstration of how different stylesheets can change the layout of your HTML page. You can change the
              layout of this page by selecting different stylesheets in the menu, or by selecting one of the following links:<br>
              <a href="./style1.php">Stylesheet1,</a>
              <a href="./style2.php">Stylesheet2,</a>
              <a href="./style3.php">Stylesheet3,</a>
              <a href="./style4.php">Stylesheet4.</a></p>
              <h2 style="color: mediumseagreen;">No Styles</h2>
              <p>This page uses DIV elements to group different sections of the HTML page. Click here to see how the page looks like
              with no stylesheet:<br>
              <a href="./lab01.php">No Stylesheet.</a> </p>

            </div>
            <div id='right'>
                <h3 style="color: mediumseagreen;">Side-Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat.</p>
            </div>
          </div>
        <div id='footer'>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
          magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
          nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
          consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
          praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
        </div>
    </div>
</body>
</html>
