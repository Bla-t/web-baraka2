var nav = document.querySelector('nav')

  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-primary', 'shadow')
    } else {
      nav.classList.remove('bg-primary', 'shadow')
    }
  })
  //map.addLayer(markers);
  $(document).ready(function() {
    let ass = document.getElementById("jml");
    if (ass) {
      let aas = ass.value;
      for (let i = 0; i < aas; i++) {
        $("#srch_" + i).on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#isi_" + i + " tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      }
    }
  });