<!-- content center
 bg color -->

<html>
<head>
<title>Advacate home</title>
<style>
body {
  margin:0;
  margin-bottom:0;
    background-color:rgb(116, 86, 97);
    background-size: 100%;
}
h2 {
  /*color: #2fecf7;*/
}

@import "compass/css3";

*{
  font-family:'Lato', sans-serif; 
  font-size:100%;
}
a{
  color:#2fecf7;
  text-decoration:none;
}
.blocks {
  width:470px;
  margin:200px auto;
  font-size: 30px;
  text-align: center;
}
.block{
  position:relative;
  float:right;
  height:50px; width:33.333333%;
  font:{size:2em;};
  text-transform:uppercase;
  .block--norm{
    @include transform(rotateX(-90deg));
    background:#1a1a1a;
    color:#fefefe;
  }
  .block--hover{
    @include transform(rotateX(0deg));
    color: #2fecf7;
  }
  &:hover {
   .block--norm{
      @include transform(rotateX(0deg));
    }
    .block--hover{
      @include transform(rotateX(90deg));
    }
  }
  div{
    position:absolute;
    top:0;
    padding:30px;
    box-shadow:0px 0px 40px rgba(47,47,47,.6) inset;
    -webkit-backface-visibility:hidden;
    -webkit-font-smoothing: antialiased;
    @include transition(400ms);
    @include transform-origin(50% 50% -75px);
  }
}

</style>
</head>









<link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
<body>

<div class="blocks ">
  <a href="#">
    
          <h2><a href = "my_case.php"><i>MY CASES</i></a></h2>
     
  </a>
  <a href="#">
    
          <h2><a href="my_client.php"><i>MY CLIENTS</i></a></h2>
     
          <h2><a href="jr_adv.php"><i>JUNIOR ADVOCATES</i></a></h2>
   
  </a>
  <a href="#">
    
          <h2><a href="fee.php"><i>FEES</i></a></h2>
      
          <h2><a href="index.php"><i>LOGOUT</i></a></h2>
   
  </a>
</div>
</body>
</html>