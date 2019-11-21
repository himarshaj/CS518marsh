<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/mark.js/8.6.0/jquery.mark.min.js"></script>
<script>
$(document).ready(function(){
 $(function() {
 var mark = function() {
   // Read the keyword
   var keyword = $("input[name='keyword']").val();
   // Remove previous marked elements and mark
   // the new keyword inside the context
   $(".context").unmark({
     done: function() {
       $(".context").mark(keyword);
     }
   });
 };
 $("input[name='keyword']").on("blur", mark);
 $("input[type='checkbox']").on("click", mark);
});
});
</script>
</head>
<body>
<input type="text" name="keyword" class="form-control input-sm" placeholder="TYPE THE TEXT">
<input type="submit" name="sub" value="Explore" />
<p class="context">Click me away!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!Click me too!</p>
</body>
</html>