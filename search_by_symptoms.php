
<html>
<head>
    <title>Search</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    
    function searchq()
        {
            var searchTxt = $("input[name='search']").val();
            $.post("search1.php",{searchVal:searchTxt},function(output){
                $("#output").html(output);
                
            });
        }
    </script>
</head>
    <body bgcolor="#E6E6FA">
    <form action="search_by_symptoms.php" method="post">
        <input type="text" name="search" placeholder="search symptoms" onkeydown="searchq();"/>
        <input type="submit" value="Submit"/>
        
    </form>
<div id="output">
        

        
</div>
    </body>
</html>

