<html>
<head>

    <script src="jquery-1.12.4.js"></script>
    <script>
    $(document).ready(function(){
        $("button").click(function(){

            var selected=[];
             $('#multipleSelect :selected').each(function(){
                 selected[$(this).val()]=$(this).text();
                });
            console.log(selected);

        });
    });
    </script>

</head>

<body>

    <select id="multipleSelect" multiple>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>

    <button onclick="select()">Click...</button>

<script>

    function select()
    {
       var a=document.getElementsByName("field");

       for(var i=0;i<a.length;i++)
       {
            alert(a[i]);
       }

    }

</script>

</body>
</html>