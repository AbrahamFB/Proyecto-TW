<script>
$(document).ready(function(){
        $('input.typeahead').typeahead({
            name: 'busquedaEncabezado',
            remote:'busca.php?key=%QUERY',
            limit : 10
        });
    });
</script>