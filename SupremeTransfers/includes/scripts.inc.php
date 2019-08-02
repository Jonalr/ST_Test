<?php
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/slicknav/jquery.slicknav.min.js"></script>              
<script src="/plugins/jslider/js/lightslider.js"></script>
    <script src="/js/datetimepicker/build/jquery.datetimepicker.full.js"></script>
    <script src="/js/jAlert/jAlert.js"></script>
    <script src="/js/jAlert/jAlert-functions.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/slick/slick.min.js"></script>
    <script src="/js/select2/js/select2.min.js"></script>
    <script src="/js/moment.js"></script>
    <script type="text/javascript" src="/js/tooltip/js/tooltipster.bundle.min.js"></script>
    <script src="/js/webkit.js"></script>
    <script src="/js/pagination.js"></script>
    <script src="/js/iziModal/iziModal.min.js"></script>
    <script src="/js/jquery.touchSwipe.js"></script>
    <script src="/js/jquery.film_roll.js"></script>
    <script src="/js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="<?php echo $PATH; ?>/js/impromptu/jquery-impromptu.js"></script>

<script type="text/javascript">
    function isValidEmailAddress(emailAddress) {

    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

    return pattern.test(emailAddress);
    };
$(document).ready(function(){
    $('#mobile-menu').slicknav();
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
            $.post('/php/suscribir.php',{varCorreo:correo},function(result){
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
            $.post('/php/request.php',{varAccion:accion},function(data){
                location.href=data;
            });
    });
    
    $(document).on('click','.flag',function(e){
       e.preventDefault();
        var idioma=$(this).attr('id');
        var actual_link = '<?php echo 'https://www.super-transfers.com'.$_SERVER['REQUEST_URI']; ?>';
        $.post('/changelang.php',{varLang:idioma},function(result){
            success:
                //location.reload();
                location.href=actual_link;
        });
    });

});
</script>
<script type="text/javascript">
$( document ).ready(function(){
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    isMobile = true;
}
if(isMobile==false)
{
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        
        if(height  > 80) {
            $('#ofila1-social').hide(); $('#ofila1-flags').hide(); 
            $('.ofila1').addClass('onTop_interior'); $('.ofila2').addClass('onTop_interior'); 
            $('.ofilaTop').addClass('onTop1').css('z-index','9999');
            //$('.myTop').removeClass('ofilaTop').hide();
            $('.logohome_int').addClass('logo_int'); $('.logohome_int').removeClass('logo_top');
            $('#ofila2-menu').css('margin-top','-33px').css('margin-right','0px').css('text-align','center').css('width','100%');
            $('#ofila2-cart').css('margin-top','38px');
            $('#logo-horizontal').attr('src','<?php echo $PATH; ?>/img/logo-horizontal.png?v=<?php echo date('dmYHis'); ?>');
        } else {
            $('#ofila1-social').show(); $('#ofila1-flags').show(); 
            $('.ofila1').removeClass('onTop_interior'); $('.ofila2').removeClass('onTop_interior'); 
            $('.ofilaTop').removeClass('onTop1');
            //$('.myTop').addClass('ofilaTop').show();
            $('.logohome_int').removeClass('logo_int'); $('.logohome_int').addClass('logo_top');
            $('#ofila2-menu').css('margin-top','10px').css('margin-right','10px').css('text-align','right').css('width','70%');
            $('#ofila2-cart').css('margin-top','5px');
            $('#logo-horizontal').attr('src','<?php echo $PATH; ?>/img/logohome.png?v=<?php echo date('dmYHis'); ?>');
        }
        
        <?php if($_REQUEST['item_code']) { ?>
        if(height  > 400) {
            $('.menuTour-fila1').addClass('onTop_tour'); 
        } else {
            $('.menuTour-fila1').removeClass('onTop_tour');
        }
        <?php } ?>
        
    });
}

});
</script>

<script>
var accordion = (function(){
  
  var $accordion = $('.js-accordion');
  var $accordion_header = $accordion.find('.js-accordion-header');
  var $accordion_item = $('.js-accordion-item');
 
  // default settings 
  var settings = {
    // animation speed
    speed: 400,
    
    // close all other accordion items if true
    oneOpen: false
  };
    
  return {
    // pass configurable object literal
    init: function($settings) {
      $accordion_header.on('click', function() {
        accordion.toggle($(this));
      });
      
      $.extend(settings, $settings); 
      
      // ensure only one accordion is active if oneOpen is true
      if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
        $('.js-accordion-item.active:not(:first)').removeClass('active');
      }
      
      // reveal the active accordion bodies
      $('.js-accordion-item.active').find('> .js-accordion-body').show();
    },
    toggle: function($this) {
            
      if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
        $this.closest('.js-accordion')
               .find('> .js-accordion-item') 
               .removeClass('active')
               .find('.js-accordion-body')
               .slideUp()
      }
      
      // show/hide the clicked accordion item
      $this.closest('.js-accordion-item').toggleClass('active');
      $this.next().stop().slideToggle(settings.speed);
    }
  }
})();

$(document).ready(function(){
  accordion.init({ speed: 300, oneOpen: false });
});
</script>