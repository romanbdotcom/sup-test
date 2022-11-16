window.addEventListener('DOMContentLoaded',function(e) {
    var isTouch = false;
    var burgerBtn = document.getElementById('burger-btn');
    var mainHeader = document.getElementById('main-nav');
    var authorModalButtons = document.querySelectorAll('.show-author-modal');
    var mainHeader = document.getElementById('main-nav');
    var closeModalButtons = document.querySelectorAll('.close-modal');

    burgerBtn.addEventListener('click', function(e){
      mainHeader.classList.toggle('active');
    });

    authorModalButtons.forEach(element => {
      element.addEventListener('click', function(e){
        e.preventDefault();
        var id = this.getAttribute('data-id');
        toggleModal(id);
      });
    });

    closeModalButtons.forEach(element => {
      element.addEventListener('click', function(e){
        e.preventDefault();
        var id = this.getAttribute('data-id');
        toggleModal(id);
      });
    });

    function toggleModal(id){
        document.querySelector('.modal[data-id="'+id+'"]').classList.toggle('open');
        document.getElementById('main-overlay').classList.toggle('show');
    }

    if ((!"ontouchstart" in window) || (!navigator.msMaxTouchPoints)) {
      isTouch = true;
      var body = document.querySelector('body');
      body.classList.remove('touch');
      body.classList.add('no-touch')
    }
});