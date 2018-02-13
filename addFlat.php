<script  language="javascript">
function createTable()
{
 
 
   var totalflat  = document.getElementById('totalFlat').value;
    /* xmlhttp.open("GET","getFlatInfo.php?row="+num_rows,true);
                   xmlhttp.send();*/
           var num_cols = 3;
    var theader = '<form  action ="getFlatInfo.php" method="get"><table  id="flatinfo" border="1" style="position:absolute; top:30%; left:0%; right:1%;  width:100%;">\n';
    var tbody = '<tr><th><h3>Flat No</h3></th><th><h3>Rent</h3></th><th><h3>Info</h3></th>';
 
    for( var i=0; i<totalflat;i++)
    {
        tbody += '<tr  name="mydata" id="tablerow">';
        for( var j=0; j<num_cols;j++)
        {
            tbody += ' <td  contenteditable="true" style="font-size:15px";><input type="text" style="width:100%" name="myValue[]" value=""/>';
 
 
            tbody += '</td>';
        }
        tbody += '</tr>\n';
    }
    var tfooter = '</table>  <input name="submit_flat" type="submit"  style=" position:absolute; right:25%; width: 50%; height: 4rem; margin-top:auto; top:105%;color: rgba(255, 255, 255, 0.9);  background: #FF3366;"  value="confirm" /></form>';
    document.getElementById('wrapper').innerHTML = theader + tbody + tfooter;
     
 
     
     
}
</script>
<html >
<head>
  <title>AddFlat</title>
      <link rel="stylesheet" href="css/building.css">
</head>
<body>
<?php session_start(); if(($_SESSION['userId']!="")&&($_SESSION['user']=="homeowner")) { ?>
  <div class="cont">
  <div class="demo">
    <div class="signUp">
      <div class="home__management">ADD  FLAT</div>
      <div class="signUp__form">
      <form  action=""  name="frm" id="frm" >
        
        
        <div class="signUp__row">
          How Many Flat Info you want to add? :
          <input type="text" class="signUp__input name" placeholder="total flat" name="totalFlat" id="totalFlat" value="<?php echo $_SESSION['newTotalFlats']; ?>" required/></br>
        </div>
       
        <div class="signUp__row">
         <input name="addflat" type="button"  class ="signUp__submit" value="Add" onclick="createTable()"/>
        </div>
      </form>   
	    <div   id="wrapper"   ></div>
<?php } ?>
		</body>
		</html>