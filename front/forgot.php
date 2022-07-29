<fieldset>
    <legend>忘記密碼</legend>
    <div>請輸入信箱以查詢密碼</div><br>
    <div><input type="text" name="email" id="email"></div><br>
    <div><button onclick="findPw()">尋找</button><br></div>
</fieldset>



<script>
    function findPw(){
        $.get("./api/find_pw.php",{email:$("#email").val()},(result)=>{
            $("#result").html(result)
        })
    }
</script>