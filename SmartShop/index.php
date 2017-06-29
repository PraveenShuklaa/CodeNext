<!DOCTYPE html>
<HTML>
  <head>
    <link href="style.css"  rel="stylesheet" />
    <style>
    ::-webkit-scrollbar {
        width: 0px;  /* remove scrollbar space */
        background: grey;  /* optional: just make scrollbar invisible */
    }
    ::-webkit-scrollbar-thumb {
    	width:0px;
      background: black;
    	border-radius:4%;
    }
    body{
      overflow-x: hidden;
    }
    </style>
    <script  type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $("document").ready(function(){
      var a=0;
      var b=0;
      $('.menubar').css({'transform':'translate(160px,30px)','transition' : 'all 0.4s ease-in-out'});
      $('.menubar').hide();

    	$('#menubutton').click(function(){
        b=0;
        if(a==0&&b==0){
          $('#menubutton').css({'transform': 'rotate(90deg)','transition' : 'all 0.4s ease-in-out'});
          $('.menubar').show(50);
          $('.menubar').css({'transform':'translate(0px,30px) scale(1,1)','transition' : 'all 0.4s ease-in-out'});


          a=1;b=1;
        }
        if(a==1&&b==0){
          $('#menubutton').css({'transform': 'rotate(0deg)','transition' : 'all 0.4s ease-in-out'});
          $('.menubar').css({'transform':'translate(160px,30px) scale(0.1,1)','transition' : 'all 0.4s ease-in-out'});
          $('.menubar').hide(400);
          a=0;b=1;
        }

      });

    });
    </script>
  </head>
  <body>
    <div class="menubar">
      <ul>
        <li>Home</li>
        <li>Add Items</li>
        <li>Edit Items</li>
        <li>Help</li>
        <li>Contact Us</li>
      </ul>
    </div>
    <div class="header">
      <div class="title">
        Smart Shop
      </div>
      <div class="menu">
        <img src="menu.png" id="menubutton" />
      </div>
    </div>
    <div class="bar1">
      <div class="heading">
        Total Amount : Rs 500
      </div>
    </div>
    <div class="body">
      <div class="filling">
        <div class="left">
          <h2>Enter Item : </h2>
          <br>
          <form >
            <input type="text" id="formname" name="item" placeholder="Enter Name" />
            <input type="text"  id = "formname" style="width:80px; margin-left:20px;" name="number" placeholder="Count" />
            <br><br>
            <input type="submit" id="formsubmit" name="add" placeholder="Add" />
          </form>
      </div>
      <div class="right">
        <h3><u>Your List: </u></h3>
        <br>
        <h4><a id="itemname">Bornvita</a> 3 x<a id="singleprice">100</a><a id="totalprice"> 300</a> <input type="button" id="formremove" Value="Remove" /></h4>

      </div>
      </div>
    </div>
  </body>
</HTML>
