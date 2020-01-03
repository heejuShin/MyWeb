<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      html, body{
        width:100%;
        height:100%;
      }
      #grand_parent{
        width:100%;
        height:100%;
        display:flex;
      }
      #left_nav{
        width:10%;
        height:100%;
        background:yellow;
      }
      #parent{
        width:90%;
        height:100%;
        background:pink;
      }
      header{
        height:7%;
        background:blue;
        margin:1%;
      }
      #nav{
        height:7%;
        background:white;
        margin:1%;
      }
      main{
        height:25%;
        background:gray;
        margin:1%;
      }
      #main{
        height:50%;
        background:white;
        margin:5%;
      }
      .s{
        height:12%;
        background:dodgerblue;
        margin:1%;
      }
      #s31{
        height:10%;
      }
      #s32{
        height:80%;
        display:flex;
      }
      .video{
        height:80%;
        width:25%;
        background:gray;
        margin:20px;
      }
      footer{
        height:10%;
        background:red;
        margin:1%;
      }
      #nav_below{
        margin:1%;
        background:white;
        height:30%;
      }


    </style>
  </head>

  <body>
    <section id="grand_parent">

      <nav id=left_nav>
        img
      </nav>
      <section id="parent">
        <header>
          헤더
        </header>
        <nav id=nav>
          중앙 네비게이션
        </nav>
        <main>
          메인
          <article id=main>
            알티클
          </article>
        </main>
        <section class=s>
          섹션1
        </section>
        <section class=s>
          섹션2
        </section>
        <section class=s>
          <!--섹션3-->
          <section id="s31">
          </section>
          <section id="s32">
            <article class=video>
              영상1
            </article>
            <article class=video>
              영상2
            </article>
            <article class=video>
              영상3
            </article>
          </section>
        </section>
        <footer>
          푸터
          <nav id=nav_below>
            네비게이션
          </nav>
        </footer>


      </section>
    </section>
  </body>
</html>
