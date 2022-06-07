<html>
    <head>
    <form method="POST" action="addEntry.php">
    <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="change.css" type="text/css"/>
</head>
<body>
<aside>
    <div class = "Addblog" >
        <form id = "myForm" > 
    
    <legend>Add Blog</legend>
    <hr>
   <input type="text" class="tit"  placeholder="Enter Title "><br>
   <br>
   <input type="text"  class="Blog" cols="35"  rows="15" placeholder="Enter Text"><br>
  <div id="submit">


    <button> Post </button>
</div>
<div id="clea">
     <input type="button" value="Clear" name="clear" onclick="myFunction()">
    </div>
<script> 
const myForm = document.getElementById("submit");{
myForm.addEventListener("submit", (e) => {
    e.preventDefault();
console.log("Form has been submitted");
});
</script> 
 <script>
    function myFunction() {
      document.getElementById("myForm").reset();
    }</script> 
 </div>
</body>
 </aside>
</form>
</header>
</html>