<?php ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>

<script>
    var tabtop = $('#innerTab').offset().top;
    console.log(tabtop);
    
    $(window).scroll(function() {
        if ($(window).scrollTop() >= tabtop) {
            $('#innerTab').addClass('fixed');
        }
        else {
            $('#innerTab').removeClass('fixed');
        }
    });
</script>

</body>
</html>