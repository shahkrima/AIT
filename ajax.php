<html>
<head>
</head>
<body>
      <div id="div1" style="margin-left: 25;"></div>
      <button id="addAuthor">Add Author</button>
      <button id="removeAuthor">Remove Author</button>


 <script>
      $(document).ready(function(){

        $("#addAuthor").click(function(e){
         e.preventDefault();
         $.ajax({url:"n.php",success:function(result){
         $("#div1").html(result);
            }});
        });

        $("#removeAuthor").click(function(e){
               e.preventDefault();
               var lastNode = $("#div1").children().last();
               lastNode.prev().remove();
               lastNode.remove();
         });
      });
 </script>
 </body>
 </html>