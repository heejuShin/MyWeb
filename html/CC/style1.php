<html charset="UTF-8">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    div#header {
      background-color: #339933;
      color: white;
      border:1px solid gray;
      border-radius: 15px;
    }
      div#container{
        display: flex;
      }
      div#menu{
        float: left;
        width: 15%;
        background-color: white;
        text-align: left;
        display: block;
        padding: 10px;
      }
      div#contents{
        float: left; width: 70%;
        background-color: white;
        display: block;
      }
      div#right{
        float: left; width: 15%;
        background-color: #0099ff;
        color: white;
        border:10px;
        display: block;
        border-radius: 20px;
        padding : 10px;
      }
      div#footer{
        background-color: #d9d9d9;
        text-align: center;
        boader-radius: 10px;
        padding: 0.5%;
        border-radius: 12px;
      }
      .menu1:link, .menu1:visited{
        width: 100px;
        background-color: mediumseagreen;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        margin: 2px;
      }
      .menu1:hover, .menu1:active{
        background-color: green;
      }
      .menu:link, .menu:visited{
        width: 100px;
        background-color: gainsboro;
        color: black;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        margin: 2px;
      }
      .menu:hover, .menu:active{
        background-color: gray;
      }
      a:visited{
        color: black;
      }
      a:link{

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
            <div id='menu'>
              <!--<ul>-->
                <a href='./style1.php' class = "menu1">Stylesheet 1</a>
                <a href='./style2.php' class = "menu">Stylesheet 2</a>
                <a href='./style3.php' class = "menu">Stylesheet 3</a>
                <a href='./style4.php' class = "menu">Stylesheet 4</a>
                <a href='./lab01.php' class = "menu">No Stylesheet</a>
              <!--</ul>-->
            </div>
            <div id='contents'>
              <h1>Same Page Different Stylesheets</h1>
              <p>This is a demonstration of how different stylesheets can change the layout of your HTML page. You can change the
              layout of this page by selecting different stylesheets in the menu, or by selecting one of the following links:<br>
              <a href="./style1.php">Stylesheet1,</a>
              <a href="./style2.php">Stylesheet2,</a>
              <a href="./style3.php">Stylesheet3,</a>
              <a href="./style4.php">Stylesheet4.</a></p>
              <p>This page uses DIV elements to group different sections of the HTML page. Click here to see how the page looks like
              with no stylesheet:<br>
              <a href="./lab01.php">No Stylesheet.</a> </p>
              <h2>No Styles</h2>
            </div>
            <br>
            <div id='right'>
                <h3>Side-Bar</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat.</p>
            </div>
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
