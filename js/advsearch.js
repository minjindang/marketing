jQuery(document).ready(function(){
    jQuery('.date-start').pickadate({
        monthsFull: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
        monthsShort: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
        weekdaysShort: ['星期日' , '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
        today: '今天',
        clear: '關閉',
        close: '關閉',
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        selectYears: true,
        selectMonths: true,
        min: new Date(1914,1,1),
        max: true,
        selectYears: 100,
    });
     jQuery('.date-end').pickadate({
        monthsFull: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
        monthsShort: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
        weekdaysShort: ['星期日' , '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
        today: '今天',
        clear: '關閉',
        close: '關閉',
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        selectYears: true,
        selectMonths: true,
        min: new Date(1914,1,1),
        max: true,
        selectYears: 100,
    });
    var datepicker = $(".date-start").pickadate('picker');
    datepicker.on('close',function(){
      var datevalue = datepicker.get();
      $('.date-start').attr('value',datevalue);
    })
    var datepicker2 = $(".date-end").pickadate('picker');
    datepicker2.on('close',function(){
      var datevalue2 = datepicker2.get();
      $('.date-end').attr('value',datevalue2);
    })
    //表格捲軸
    $(".table-content").mCustomScrollbar({
      theme: 'dark-3',
      mouseWheel: {
        scrollAmount: 10,
      }
    });
    $('.btn-close').click(function(){
      $('.table-wrapper').fadeOut();
      $('.overlay').fadeOut();
    })
    $('.btn-submit').click(function(){
      $('.table-wrapper').fadeIn();
      $('.overlay').fadeIn();
    });
  })