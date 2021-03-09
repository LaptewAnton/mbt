/*Фильтрация заявок*/
$('#filter').click(function () {
    if ($("#filter option:selected").val() != ""){
        $('.card_item').hide();
        $('.status_' + $("#filter option:selected").val()).show();
    }

});

/*Админ панель*/
$('table').hide();
$('.create').hide();
$('#applicationsTable').show();
$('#applicationsBtn').click(function () {
    $('button').removeClass('active');
    $('#applicationsBtn').addClass('active');
    $('table').hide();
    $('#applicationsTable').show();
    $('.create').hide();
});
$('#categoriesBtn').click(function () {
    $('button').removeClass('active');
    $('#categoriesBtn').addClass('active');
    $('table').hide();
    $('#categoriesTable').show();
    $('.create').show();
});

/*Hover эффект для карточек заявок*/

let sourceSwap = function () {
    let $this = $(this);
    let newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
}

$(function () {
    $('img.xyz').hover(sourceSwap, sourceSwap);
});
