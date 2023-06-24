(function($){
    $(document).ready(function(){
        $('.play').on('click', function(e){
            e.preventDefault();
            var id = $(this).children('.fa').attr('id');
            var url = js_config.admin_url;
            var data = {
                action:'fetch_content',
                id: id
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "json",
                success: function (response) {
                    $('.video').html(response.data);
                }
            });
        });
    });
})(jQuery);