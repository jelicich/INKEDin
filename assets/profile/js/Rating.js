inked.Rating = {
    init : function()
    {
        $('.ratings_stars').hover(

            // Handles the mouseover

            function() {

                $(this).prevAll().andSelf().addClass('ratings_over');


            },

            // Handles the mouseout

            function() {

                $(this).prevAll().andSelf().removeClass('ratings_over');

            }

        );
        
        //send ajax request to rate.php
        $('.ratings_stars').bind('click', function() {

           var id=$(this).parent().attr("id");
           var id=id.substring(7);
           var num=$(this).attr("class");
           var poststr="id="+id+"&stars="+num;
           $.ajax({
                url:"/profile/"+id+"/rate",
                cache:0,
                data:poststr,
                success:function(result)
                {
                    $('#ratingvew-container').html(result);
                    // document.getElementById(id).innerHTML=result;
                    inked.Rating.init();
                }
            }); 
        });
    }
};

{
    $(document).ready(function() {
        inked.Rating.init();
    });
}
