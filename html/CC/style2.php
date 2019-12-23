<html charset="UTF-8">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      html{
        background-color:tomato;
      }
      div#header {
        color: white;
        border-radius: 15px;
      }
      div#container{
        display: flex;
      }
      div#menu{
        float: left; width: 20%;
        text-align: left;
        display: block;
        padding: 10px;
        background-color: white;
      }
      div#contents{
        float: left; width: 80%;
        background-color: white;
        display: block;
        min-width: 500px;
      }
      div#bottom{
        display: flex;
        float: center;
        background-color: #ffcccc;
        color: red;
        border:10px;
        display: block;
        border-radius: 5px;
        padding : 10px;
      }
      div#footer{
        text-align: center;
        boader-radius: 10px;
        padding: 0.5%;
        color:white;
      }
      .menu1:link, .menu1:visited{
        width: 150px;
        background-color: white;
        color: tomato;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 30px;
        border:1px solid tomato;
        margin: 2px;
      }

      .menu1:hover, .menu1:active{
        background-color: #f2f2f2;
      }
      .menu:link, .menu:visited{
        width: 150px;
        background-color: tomato;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 30px;
        border:1px solid tomato;
        margin: 2px;
      }
      .menu:hover, .menu:active{
        background-color: red;
      }
      a:visited{
        color: red;
        text-decoration: none;
      }
      a:link{
        color:tomato;
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <div id='main'>
        <div id='header'>
          <h1> Welcome to My Homepage </h1>
          <p> Use the menu to select different Stylesheets </p></div>
        </div>
        <div id='container'>
            <div id='contents'>
              <h1 style="color:tomato;">Same Page Different Stylesheets</h1>
              <p>This is a demonstration of how different stylesheets can change the layout of your HTML page. You can change the
              layout of this page by selecting different stylesheets in the menu, or by selecting one of the following links:<br>
              <a href="./style1.php">Stylesheet1,</a>
              <a href="./style2.php">Stylesheet2,</a>
              <a href="./style3.php">Stylesheet3,</a>
              <a href="./style4.php">Stylesheet4.</a></p>
              <p>This page uses DIV elements to group different sections of the HTML page. Click here to see how the page looks like
              with no stylesheet:<br>
              <a href="./lab01.php">No Stylesheet.</a> </p>
              <h2 style="color:tomato">No Styles</h2>
            </div>
            <div id='menu'>
              <!--<ul>-->
                <a href='./style1.php' class = "menu">Stylesheet 1</a>
                <a href='./style2.php' class = "menu1">Stylesheet 2</a>
                <a href='./style3.php' class = "menu">Stylesheet 3</a>
                <a href='./style4.php' class = "menu">Stylesheet 4</a>
                <a href='./lab01.php' class = "menu">No Stylesheet</a>
              <!--</ul>-->
            </div>
        </div>
        <div id='bottom'>
            <h3>Side-Bar</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
            magna aliquam erat volutpat.</p>
        </div>
        <br>
        <div id='footer'>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
          magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
          nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
          consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
          praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
        </div>
    </div>
</body>
</html>
