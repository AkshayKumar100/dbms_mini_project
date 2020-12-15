
<html>
<head>
<style>
body {
    background-image: url("lawyer.jpeg");
    background-size: 100%;
}
h2 {
  /*color: #2fecf7;*/
}
</style>
</head>
<body>
  <style>
@import "compass/css3";

*{
  font-family:'Lato', sans-serif; 
  font-size:100%;
}
html{
  background: #d4d4d4;
}
a{
  color:#2fecf7;
  text-decoration:none;
}
.blocks {
  width:470px;
  margin:0 auto;
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










<link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>

<div class="blocks">
  <a href="#">
    
          <h2><a href = "mcase.php"><i><u>MY_CASES</u></i></a></h2>
     
  </a>
  <a href="#">
    
          <h2><a href="mclient.php"><i><u>MY_CLIENTS</u></i></a></h2>
     
          <h2><a href="jadv.php"><i><u>JUNIOR_ADVOCATES</u></i></a></h2>
   
  </a>
  <a href="#">
    
          <h2><a href="mpay.php"><i><u>FEES</u></i></a></h2>
      
          <h2><a href="prc.php"><i><u>LOG_OUT</u></i></a></h2>
   
  </a>
</div>
</body>
</html>