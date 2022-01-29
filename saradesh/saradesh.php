<link rel="stylesheet" href="saradesh.css" />
<script src="mtabs.js"></script> 
<script>
			$(function() {
				$(".set-1").mtabs();
				
				$(".set-2").mtabs({
					tab_text_el: ".heading, .head, header",
					onTabSelect: function(idx) {
						console.log("Selected tab is: " + idx);
					},
					onReady: function () {
						console.log('Set 2 ready!');
					}
					
				});

				$('.set-1 .panel-1 .btn').on('click', function(event) {
					$('.set-1').mtabs('show', 2);

					event.preventDefault();
				});

				$('.set-1 .panel-1 .destroy').on('click', function(event) {
					$('.set-1').mtabs('destroy');

					event.preventDefault();
				});

				$('.set-1 .panel-1 .apply').on('click', function(event) {
					$('.set-1').mtabs();

					event.preventDefault();
				});

				$('.set-2 .panel-1 .btn').on('click', function(event) {
					$('.set-2').mtabs('show', 1);

					event.preventDefault();
				});
			});
		</script>



<div class="saradesh-news-title"><div class="saradesh-news"><a href="#">দেশবাংলার খবর</a></div> 
<div class="clr"></div>
</div>
<div class="wrap">

<div class="set set-1">


<div class="panel panel-1">
<h2>ঢাকা</h2>
  
     <div class="tabs-content">
      
      <?php include "dhaka.php";?>
          
     </div> <!--Tab Content-->
</div>



<div class="panel panel-2">
<h2>চট্টগ্রাম</h2>

    <div class="tabs-content">
   		
       <?php include "ctg.php";?>
          
   </div><!--Tab Content-->
</div>




<div class="panel panel-3">
<h2>রাজশাহী</h2>

    <div class="tabs-content">
        		
                <?php include "rajsahi.php";?>
                
     </div> <!--Tab Content-->
 </div>

<div class="panel panel-4">

<h2>খুলনা</h2>
<div class="tabs-content">
        		
           <?php include "khulna.php";?>
          
    </div><!--Tab Content-->
</div>




<div class="panel panel-5">
<h2>সিলেট</h2>

    <div class="tabs-content">
        		
           <?php include "sylet.php";?>
        
      </div> <!--Tab Content-->
</div>




<div class="panel panel-6">
<h2>বরিশাল</h2>
    <div class="tabs-content">
        		
           <?php include "barisal.php";?>
        
     </div> <!--Tab Content-->
</div>





<div class="panel panel-7">
<h2>রংপুর</h2>
 <div class="tabs-content">
       		
          <?php include "rongpur.php";?>
        
    </div> <!--Tab Content-->
</div>

</div>


</div>

      
