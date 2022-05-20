<script src="<?= BASEURL; ?>js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
  var nav = document.querySelector('nav')

  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-primary', 'shadow')
    } else {
      nav.classList.remove('bg-primary', 'shadow')
    }
  })
</script>
</body>

</html>