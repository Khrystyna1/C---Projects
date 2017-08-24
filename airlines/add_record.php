<html>
<head>
 <title>::add record::</title>
 </head>
 <body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
 <div style="background-color:#7cced6;color:white;padding:4px">
 <form action= "insert_record.php" method="POST">
 <blockquote>
 <p>
 
 title: <input type="text" name="title"/><br/>
 airline:<br/>
 <textarea name="airline" cols="25" rows="5">
 </textarea><br/>
 price : <input type="text" name="price"/><br/>
 destination: <input type="text" name="destination"/><br/>
 rate :<input type="text" name="rate"/><br/>
 <input type ="submit" name="submit" value="save"/>
 <input type ="reset" name="reset" value="reset"/>
 <input type ="button" name="cancel" value="cancel" onclick="location.href='basic.php'"/>
 

 </p>
 </blockquote>
 </form>
 </div>
 </body>
 </html>