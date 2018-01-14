<script type="text/javascript">
    var $noauth;
$(".tr").click(function(e){       
    var checkedVal = $(this).val();
    $.ajax({
        url: '/echo/html/',
        type: 'POST',
        data: {rrr: checkedVal},
        success: function(){
            if(checkedVal == 'hide') {
                $(".notauth").fadeOut(500, function() {
                    $noauth = $(".notauth").detach();
                }); 
            } else {
                $('#noauth_placeholder').append($noauth.show());
            }
        },
        error: function(){
            alert("Error!");
        }
    });
});

</script>


<div>    
    <label>
        <input type="radio" class="tr" name="dostavka" value="show" checked="checked" />show
    </label>    
    <label>
        <input type="radio" class="tr" name="dostavka" value="hide" />hide
    </label>    
</div>

<div id="noauth_placeholder">
    <div class="notauth">
        <label>ФИО:</label> <input class="zakaz-inpt" type="text" name="name_zakaz">
    </div>
</div>




