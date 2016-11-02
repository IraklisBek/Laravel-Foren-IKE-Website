{{-- Html::script('visitor/js/bootstrap.js') --}}
{{ Html::script('visitor/js/navigation.js') }}
<script>
    setInterval(function () {
        $('#copyright2').css('font-size', $(window).width() * 0.015);
        $('#createdBy2').css('font-size', $(window).width() * 0.012);
    }, 1);
</script>