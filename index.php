<html>
<head>
<script src="wysiwyg.js"></script>
</head>
<body onLoad="iFrameOn();" background="zomato.jpg">
<h2></h2>
<form action="main.php" name="myform" id="myform" method="post">
<p>Entry SUBJECT: <input name="title" id="title" type="text" size="80" maxlength="80" /></p>
<p>Entry BODY:<br>
<div id="wysiwyg_cp" style="padding:8px; width:700px;">
  <input type="button" onClick="iBold()" value="B"> 
  <input type="button" onClick="iUnderline()" value="U">
  <input type="button" onClick="iItalic()" value="I">
  <input type="button" onClick="iFontSize()" value="Text Size">
  <input type="button" onClick="iForeColor()" value="Text Color">
  <input type="button" onClick="iHorizontalRule()" value="HR">
  <input type="button" onClick="iUnorderedList()" value="UL">
  <input type="button" onClick="iOrderedList()" value="OL">
  <input type="button" onClick="iLink()" value="Link">
  <input type="button" onClick="iUnLink()" value="UnLink">
  <input type="button" onClick="iImage()" value="Image">
</div>
<textarea style="display:none;" name="myTextArea" id="myTextArea" cols="100" rows="14"></textarea>
<iframe name="richTextField" id="richTextField" style="border:#000000 1px solid; width:700px;background: yellow; height:300px;"></iframe>
</p>
<br/><br/>
<input name="preview" type="submit" value="preview" onClick="javascript:submit_form()"/>
<input name="rtf2html" type="submit" value="rtf2html" onClick="javascript:submit_form()"/>
</form>
</body>
</html>
