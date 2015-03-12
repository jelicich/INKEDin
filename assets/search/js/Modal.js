inked.Modal = {
    init : function() 
    {
        $(window).on("resize", function () {
            $('.modal:visible').each(inked.Modal.centerModal);
        });

        $('.photo-anchor').click(function()
        {
            //console.log($(this).children());
            var src = $(this).children().attr('src');
            var lg_src = src.replace('/thumb/','/reg/');
            $('#photo-target').attr('src', lg_src);        
            var desc = $(this).children().attr('alt');
            var tags = $(this).children().attr('data-tags');
            $('#photo-description').html(desc);
            $('#photo-tags').html(tags);
            var $user_info = $($(this).next().find('ul')[0]);
            $('#photo-owner-info').html($user_info.clone());
        });
    },
};


{
    $(document).ready(function() {
        inked.Modal.init();
    });
}