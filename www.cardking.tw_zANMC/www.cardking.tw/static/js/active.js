$(function () {
  let box = $('.pricing-single-items')
  $('.pricing-single-items:eq(1)').addClass('style-2')
  box.on('mouseover', function () {
    box.removeClass('style-2')
    $(this).addClass('style-2')
  })

  $('.owl-carousel').owlCarousel({
    // margin: 10,
    loop: true,
    // autoWidth: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: true, // 显示分页按钮
    navigation: true // 显示上一个和下一个按钮
  });

  const dotsText = []
  $('.owl-carousel').find('.img-box').each(function () {
    let title = $(this).attr('title')
    dotsText.push(title)
  })

  // 自定义按钮内容
  $('.owl-dots').each(function () {
    // const dotsText = ['Chatgpt付費', 'PayPal支付', '社交軟件增值功能/廣告投放購買', '社交平台软件付费订阅', '跨境購物', '海外服务器域名购买', 'FB/谷歌等广告投放付费']
    var dots = $(this).find('.owl-dot');
    dots.each(function (index) {
      // console.log(index);
      $(this).text(dotsText[index]); // 设置按钮文本，这里假设为索引加1
    });
  });

  var $grid = $('.grid').masonry({ itemSelector: '.grid-item' });

  // 所有图片加载完成后，重新执行瀑布流脚本
  $grid.imagesLoaded().progress(function () {
    $grid.masonry('layout');
  });

  var $serviceLeftSites = $('.service_left_site');
  var $serviceArea = $('#service');
  var $sliderArea = $('#home')
  var $Card = $('.slider_right_site .img-box')
  var $sliderLeftSite = $('#home .slider_left_site');


  console.log($Card);

  function isInViewport(element) {
    var rect = element[0].getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function handleScroll() {
    // 判断元素是否在可视区域内
    $serviceLeftSites.each(function (index, site) {
      if (isInViewport($serviceArea) && !$(site).hasClass('active')) {
        setTimeout(function () {
          $(site).addClass('active');
        }, index * 200); // 每个元素间隔200毫秒
      }
    });

    $sliderLeftSite.each(function (index, site) {
      if (isInViewport($sliderArea) && !$(site).hasClass('active')) {
        $(site).addClass('active');
      }
    })

    $Card.each(function (index, site) {
      if (isInViewport($sliderArea) && !$(site).hasClass('active')) {
        // setTimeout(() => {
        $(site).addClass('active');

        setTimeout(() => {
          $(site).addClass('active-1');
          $(site).addClass(`bounce-animate`)
        }, 1000);
        // }, 1000);
      }
    });

  }
  $(window).scroll(handleScroll);
  handleScroll();


  // 资讯页
  // var $grid = $('.grid').masonry({ itemSelector: '.grid-item' });

  // // 所有图片加载完成后，重新执行瀑布流脚本
  // $grid.imagesLoaded().progress(function () {
  //   $grid.masonry('layout');
  // });

  var $tabsItem = $('.tabs .tab-link')

  // 截取字符串从 "?" 开始到第一个 "/" 结束，但不包含 "/" 
  function extractBetweenQuestionMarkAndFirstSlash(str) {
    var startIndex = str.indexOf("?"); // 获取第一个 "?" 的索引
    if (startIndex !== -1) {
      var firstSlashIndex = str.indexOf("/", startIndex); // 获取第一个 "/" 的索引，从 startIndex 开始搜索
      if (firstSlashIndex !== -1) {
        return str.substring(startIndex, firstSlashIndex); // 返回从 "?" 开始到第一个 "/" 结束的子字符串（不包含第一个 "/"）
      }
    }
    return ""; // 如果字符串中没有 "?" 或者 "/"，或者问号后没有斜杠，返回空字符串
  }

  $tabsItem.each((index, site) => {
    var currentUrl = window.location.href; // 获取当前页面的完整 URL
    var extractedString = extractBetweenQuestionMarkAndFirstSlash(currentUrl);
    var siteExtractedString = extractBetweenQuestionMarkAndFirstSlash(site.href);
    console.log(extractedString);
    if (extractedString.includes(siteExtractedString)) {
      $(site).find('.item').addClass('active')
    } else {
      $(site).find('.item').removeClass('active')
    }
  })

})
