<?php ?>
<footer>
    <span class="fa fa-copyright"></span> 2015. enterprisetouch.com All Rights Reserved.
</footer>

<script>
    $('.scrollTop').click(function() {
        event.preventDefault();
        var body = $("html, body");
        body.animate({scrollTop: 0}, '500', 'swing', function() {
            
        });
    });
</script>