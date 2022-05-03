<!-- head tag -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--the browser will render the width of the page at the width of its own screen-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../style.css">
    <title>ABS</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <script>
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){ 
                $.get("livesearch.php", {term: inputVal}).done(function(data){
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });
        $(document).on("click", ".result a", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    </script> <!--fin script de recherche -->
</head>
