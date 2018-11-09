<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("select[name='country']").bind("change", function(){
                $("select[name='city']").empty();//changei jmnk cityin empty ani
                $.get("countryCheck.php", {country: $("select[name='country']").val()}, function(data){
                    data = JSON.parse(data);//encode-i hakarak gortsyntacy
                    for(var id in data){
                        $("select[name='city']").append($("<option value='" + id + "'>" + data[id] + "</option>"));
                    }
                })
            })
        })
    </script>
    <!--    cankacac zangvatsi tarery tpelu hamar mez petq a cikl-->

</head>
<body>
   <label>Select Country
       <select name="country">
           <option value="0" selected></option>
           <option value="1">Armenia</option>
           <option value="2">China</option>
       </select>
   </label>
   
   <label>Select City
       <select name="city">
          <option value="0"></option>
       </select>
   </label> 
     
</body>
</html>