
document.addEventListener('DOMContentLoaded', function() {

    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);

    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);

  });

  // function sliderPrev(){

  //   var elems = document.querySelectorAll('.slider');
  //   var instances = M.Slider.init(elems);
  //   instances.pause();
  //   instances.prev();
  

  // }
 

  // function sliderNext(){

  //   var elems = document.querySelectorAll('.slider');
  //   var instances = M.Slider.init(elems);
  //   instances.pause();
  //   instances.next();

  // }