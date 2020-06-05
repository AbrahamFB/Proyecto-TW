<script>
    $(document).ready(function(){
        $('input.typeahead').typeahead({
            name: 'typeahead',
            remote:'busca.php?key=%QUERY',
            limit : 10
        });
    });
</script>