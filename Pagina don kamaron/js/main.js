window.onload = function() {
    setTimeout(function() {
      var loader = document.querySelector('.loader');
      if(loader) {
        loader.style.display = 'none';
      }
    }, 1000);
  };