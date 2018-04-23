
	</div> <!--</wrapper>-->
	</div><!--</row>-->
	</div><!--</container>-->
    </div>



<!--Modal Popup -->
 <!-- Modal -->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content modal-content-one">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Introduction Popup</h4>
                </div>
                <div class="modal-body">
                  MODAL POPUP CONTENT .....
                </div>
              </div>
            </div>
          </div>


            <script type="text/javascript">
   
	$(document).ready(function(){$(".wrapper").toggleClass("active");
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});

	$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
  
    $('.col-md-4').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            //$(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});

    $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});
	</script>
</body>
</html>
