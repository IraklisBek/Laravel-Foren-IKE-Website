{{-- Html::script('visitor/js/bootstrap.js') --}}
{{ Html::script('visitor/js/navigation.js') }}
<script>
    $(document).ready(function() {
        $("[href]").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("activeLink");
            }
        });
    });
</script>