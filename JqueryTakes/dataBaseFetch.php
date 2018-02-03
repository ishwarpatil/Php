<html lang="en">
<head>

    <!-- Jquery file -->
    <script src="jquery-1.12.4.js"></script>

    <style>

        /*both dropdown css*/
        #fields
        {
            background-color:#F0FFFF;
            float:left;
            width:30%;
            height:70%;
            border:2px Solid black;
        }
        #fields1
        {
            background-color:#F0FFFF;
            float:left;
            width:30%;
            height:70%;
            border:2px Solid black;
            margin-left:5%
        }

        #fields #multipleSelect
        {
            width:70%;
            height:70%;
            padding: 50;
            font-size: 25;
            border:0px;
        }
        #fields #multipleSelect option
        {
            border: 1px solid black;
            margin-top: 5px;
            background-color: #DCDCDC;
            text-align:center;
        }
        #fields #select
        {
            margin-top: 15%;
            margin-left: 20%;
        }

        #fields1 #multipleSelect1
        {
            width:70%;
            height:70%;
            padding: 50;
            font-size: 25;
            border:0px;
        }
        #fields1 #multipleSelect1 option
        {
            border: 1px solid black;
            margin-top: 5px;
            background-color: #DCDCDC;
            text-align:center;
        }
        #fields1 #select
        {
            margin-top: 15%;
            margin-left: 20%;
        }

        /* button css*/
        #buttons button
        {
            font-size:25px;
            width:60px;
            height:50px;
            font-weight:900;
        }
        #buttons
        {
            margin-top:11%;
            float:left;
            margin-left:5%
        }

        #fields1 button
        {
            margin-left:25%;
            margin-top:5%;
        }

        /* show recodes */
        #show
        {
            margin-top:3%;
            margin-left:20%;
        }

        /* clear both*/
        #clear
        {
            clear:both;
        }
    </style>

    <script>

        var selected=[];
        var selectedArray=[];

        $(document).ready(function(){

            $(".b1").click(function(){
                $('#multipleSelect :selected').each(function(){
                      //selected[$(this).val()]=$(this).text();
                      selected.push($(this).val());
                });
                return !$('#multipleSelect option:selected').remove().appendTo('#multipleSelect1');
            });
            $(".b2").click(function(){
                $('#multipleSelect :selected').each(function(){
                       //selected[$(this).val()]=$(this).text();
                       selected.push($(this).val());
                });
                return !$('#multipleSelect1 option:selected').remove().appendTo('#multipleSelect');
            });
            $("#go").click(function(){
                $('#multipleSelect1 :selected').each(function(){
                       selectedArray.push($(this).val());
                });
                $table=document.getElementById('table').value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('GET','ajax.php?value='+selectedArray+' from '+$table,false);
                xmlhttp.send(null);
                document.getElementById('show').innerHTML = xmlhttp.responseText;
            });
            $(".order1").click(function(){
                console.log(selectedArray.sort());
            });
        });
    </script>

</head>
<body>

    <table>
        <tr>
            <th>Select Database :- </th>
            <td>
                <select id='database' onchange='change_database()'>
                            <option>Select Any One</option>
                            <?php

                                include 'Connection.php';

                                $sql = "SHOW DATABASES";

                                if(!$result=$con->query($sql))
                                {
                                    die('There was an error running the query [' . $con->error . ']');
                                }

                                while($row= $result->fetch_assoc())
                                {
                                    echo "
                                        <option value=$row[Database]>$row[Database]</option>
                                    ";
                                }

                            ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>Select Tables :- </th>
            <td>
                <div id='tables'>
                    <select>
                        <option>Select Ant One</option>
                    </select>
                </div>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>

    <!-- dropdownMenu 1 -->
    <div id="fields">
    </div>

    <!-- buttons in center site -->
    <div id="buttons" >
        <button class="b1">>></button><br><br>
        <button class="b2"><<</button><br><br>
        <button id="go" class="go">Go</button>
    </div>

    <!-- dropdownMenu 2 -->
    <div id="fields1"  >
        <div id='select'>
            <select id='multipleSelect1' multiple>
            </select>
        </div>
        <div id="button">
            <button class="order1"><</button>
            <button class="order2">></button>
        </div>
    </div>

    <!-- clear float:left -->
    <div id="clear"></div>

    <!-- Searching records -->
    <div id="searchRecords">
        <input type="text" id="search" name="search">
        <button onclick="select_record()">Search</button>
    </div>


    <!-- show records -->
    <div id="show"></div>


</body>
</html>

<script>

    //dataBase
    function change_database()
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('GET','ajax.php?database='+document.getElementById('database').value,false);
        xmlhttp.send(null);
        document.getElementById('tables').innerHTML = xmlhttp.responseText;
    }

    //tables
    function change_table()
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('GET','ajax.php?table='+document.getElementById('table').value,false);
        xmlhttp.send(null);
        document.getElementById('fields').innerHTML = xmlhttp.responseText;
    }

    function select_record()
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('GET','ajax.php?record='+document.getElementById('search').value+'&table='+$table,false);
        xmlhttp.send(null);
        document.getElementById('show').innerHTML = xmlhttp.responseText;
    }
</script>