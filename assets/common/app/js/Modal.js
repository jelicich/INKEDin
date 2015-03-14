inked.Common.Modal = {
    init : function() 
    {

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
        });
    },
};


{
    $(document).ready(function() {
        inked.Common.Modal.init();
    });
}