$('.blog_item').on('click', function () {
    let href = $(this).data('href');
    window.location.replace(href);
})
$('.room_item').on('click', function () {
    let href = $(this).data('href');
    window.location.replace(href);
})

$(document).ready(function (){
    $(".reply-btn").on('click', function () {
        let parent_id = $(this).data('id');
        console.log(parent_id);
        $('#parent_id').val(parent_id);
    })
})
