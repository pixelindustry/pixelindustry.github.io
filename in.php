<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
  <b>Здесь отображается название играющего трека:</b>
  <div id="track_name"></div>
  
  <!-- begin update track title code -->
  <script type="text/javascript">
    function UpdateTitle()
    { 
      var xmlhttp;
      //get "track name" block
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function()
      {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
          var s = xmlhttp.responseText;
          document.getElementById('track_name').innerHTML = s;
        }
      }
      //use random number in request to prevent caching
      var rand_no = Math.random();
      rand_no = rand_no * 100;
      //read the "temp_title.txt" file
      xmlhttp.open("POST", "/temp_title.txt?"+rand_no, true);
      xmlhttp.send();   
    } 
    //
    setInterval("UpdateTitle()", 1000);
    UpdateTitle();
  </script>
  <!-- end update track title code -->
  
</body>
</html>