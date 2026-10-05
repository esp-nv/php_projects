/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var switches = $('.switches');
$('th').each(function(index) {
  var hide, item, label, text, _switch, checkbox, slider;
  index = index + 1;
  hide = $(this).attr('data-hidden') === 'true';
  if (hide) {
    $('th:nth-child(' + index + '), td:nth-child(' + index + ')').hide();
  }
  item = $('<div class="item"></div>');
  label = $('<label></label>');
  text = $('<span>' + $(this).text() + '</span> ');
  _switch = $(' <span class="switch"></span>');
  checkbox = $('<input type="checkbox" ' + (hide ? '' : 'checked="checked"') + ' value="' + (index) + '"/>').change(function (event) {
    $('th:nth-child(' + this.value + '), td:nth-child(' + this.value + ')')[this.checked ? 'show' : 'hide']();    
  });
  slider = $('<span class="slider"></span>"');
  switches.append(item.append(label.append(text).append(_switch.append(checkbox).append(slider))));
});
(function() {
  var thElm;
  var startOffset;

  Array.prototype.forEach.call(
    document.querySelectorAll("table th"),
    function(th) {
      th.style.position = 'relative';

      var grip = document.createElement('div');
      grip.innerHTML = "&nbsp;";
      grip.style.top = 0;
      grip.style.right = 0;
      grip.style.bottom = 0;
      grip.style.width = '5px';
      grip.style.position = 'absolute';
      grip.style.cursor = 'col-resize';
      grip.addEventListener('mousedown', function(e) {
        thElm = th;
        startOffset = th.offsetWidth - e.pageX;
      });

      th.appendChild(grip);
    });

  document.addEventListener('mousemove', function(e) {
    if (thElm) {
      thElm.style.width = startOffset + e.pageX + 'px';
    }
  });

  document.addEventListener('mouseup', function() {
    thElm = undefined;
  });
})();

