<html charset="UTF-8">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      html{
        background-color: black;
        border:1px solid gray;
        color:#339933;
        font-family:courier;
      }
      h1{
        color: #9fff80;
      }
      h2{
        color: #9fff80;
      }
      h3{
        color: #9fff80;
      }

      div#header {
        width:100%;
        height:100px;
      }

      div#menu{
        text-align: left;
        padding: 10px;
        width: 100%;
        float: left; width: 70%;
      }
      div#contents{
        width: 100%;
      }
      div#container{
        display: flex;
      }
      div#right{
        border:10px;
        display: block;
        border-radius: 5px;
        padding : 10px;
        width: 100%;
        float: left; width: 30%;
        color:gray;
        border:1px solid gray;
      }
      div#footer{
        text-align: center;
        boader-radius: 10px;
        padding: 0.5%;
        width:100%;
        color: gray;
        border:1px solid gray;
      }
      .menu1:link, .menu1:visited{
        width: 150px;

        color: white;
        padding: 5px 10px;
        text-align: left;
        text-decoration: none;
        display: inline-block;
      }
      .menu1:hover, .menu1:active{
        background-color: gray;
      }
      .menu:link, .menu:visited{
        width: 150px;
        padding: 5px 10px;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        color: #339933
      }
      .menu:hover, .menu:active{
        background-color: gray;
      }
      a:link{
        color: gray;
      }
      a:visited{
        color: darkgray;
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
          <h1> Welcome to My Homepage </h1>
          <p> Use the menu to select different Stylesheets </p></div>
        </div>
        <div id='container'>
            <div id='menu'>
              <ul>
                <li><a href='./style1.php' class = "menu">Stylesheet 1</a></li>
                <li><a href='./style2.php' class = "menu">Stylesheet 2</a></li>
                <li><a href='./style3.php' class = "menu">Stylesheet 3</a></li>
                <li><a href='./style4.php' class = "menu1">Stylesheet 4</a></li>
                <li><a href='./lab01.php' class = "menu">No Stylesheet</a></li>
              </ul>
            </div>
            <div id='right'>
                <h3 style="color: white">Side-Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat.</p>
            </div>
        </div>
            <div id='contents'>
              <h1>Same Page Different Stylesheets</h1>

              <p>This is a demonstration of how different stylesheets can change the layout of your HTML page. You can change the
              layout of this page by selecting different stylesheets in the menu, or by selecting one of the following links:<br>
              <a href="./style1.php">Stylesheet1,</a>
              <a href="./style2.php">Stylesheet2,</a>
              <a href="./style3.php">Stylesheet3,</a>
              <a href="./style4.php">Stylesheet4.</a></p>
              <h2>No Styles</h2>
              <p>This page uses DIV elements to group different sections of the HTML page. Click here to see how the page looks like
              with no stylesheet:<br>
              <a href="./lab01.php">No Stylesheet.</a> </p>

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
