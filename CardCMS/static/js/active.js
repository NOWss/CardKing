$(function () {
  let box = $('.pricing-single-items')
  $('.pricing-single-items:eq(1)').addClass('style-2')
  box.on('mouseover', function () {
    box.removeClass('style-2')
    $(this).addClass('style-2')
  })
})
