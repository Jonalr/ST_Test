<script type="text/javascript">
    function isValidEmailAddress(emailAddress) {

    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

    return pattern.test(emailAddress);
    };
$(document).ready(function(){
    
    /* Suscribir */
    $(document).on('click','.suscribir',function(e){
       e.preventDefault();
       var correo=$('#correo').val();
       if(correo!='') 
       {
            if( !isValidEmailAddress(correo) )
            {
                alert('<?=CHECKEMAIL?>'); return false;
            }
            $.post('php/suscribir.php',{varCorreo:correo},function(result){
               success:
                if(result!='') {
                    $('#correo').prop('readonly', true).val('<?=SUBDONE_TITLE?>');
                    $.jAlert({
                        'title': '<?=SUBDONE_TITLE?>',
                        'content': '<?=SUBDONE_TEXT?>',
                        'theme': 'green',
                        'size': 'md',
                        'showAnimation': 'fadeInUp',
                        'hideAnimation': 'fadeOutDown'
                    });
                }
            });
       } else {
           alert('<?=TYPEMAIL?>'); return false;
       }
    });
    
    $(document).on('click','.WishList',function(e){
        e.preventDefault();
        location.href='wishlist';
    });
    
    $('.mycart').on('click',function(e){
            e.preventDefault();
            location.href='cart';
    });
        
    $('.checkout').on('click',function(e){
            e.preventDefault();
            var accion='BOOK-NOW';
            $.post('php/request.php',{varAccion:accion},function(data){
                location.href=data;
            });
    });
     
    $(document).on('click','.flag',function(e){
       e.preventDefault();
        var idioma=$(this).attr('id');
        var actual_link = '<?php echo 'https://www.traveluum.com'.$_SERVER['REQUEST_URI']; ?>';
        $.post('changelang.php',{varLang:idioma},function(result){
            success:
                //location.reload();
                location.href=actual_link;
        });
    });

});
</script>