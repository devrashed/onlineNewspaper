       <!--NATIONAL-->

$(document).ready(function() {
	$('.grid-block').hover(
		function(){
			$(this).find('.ncaption').fadeIn(1500);
		},
		function(){
			$(this).find('.ncaption').fadeOut(1500);
		}
	);
});


     
      <!--SPORTS and Entertainment-->
     

$(document).ready(function() {
	$('.grid-col').hover(
		function(){
			$(this).find('.scaption').slideDown(500);
		},
		function(){
			$(this).find('.scaption').slideUp(500);
		}
	);
});


        
   <!--TAB-->

 
 
        $(document).ready(function () {
            $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [3,4],
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                }
            });

            $('#start-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('active');
            });
            $('#stop-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('stopRotation');
            });
            $('#start-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('active');
            });
            $('.select-tab').on('click', function() {
                $('#horizontalTab').responsiveTabs('activate', $(this).val());
            });

        });
 
 
 
   