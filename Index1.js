<head>
    <script type="text/javascript">
    function myfun()
    {
        var a=document.getElementByID("name");
        var b= /^[A-Za-z]+$/;
        if(a.value.length<3)
        {
            document.getElementById("messege").innerHTML="** Firstname must be of 3 character"";
            return false;
        }
        if(a.length>20)
        {
            document.getElementById("message").innerhtml="** Firstname must have less than 20 character";
            return false;
        }
        if(a.match(b))
        true;
        else
        {
            document.getElementById("message").innerhtml="**Only Alphabet are allowed"
            return false
        }    
    }
    </script>
</head>