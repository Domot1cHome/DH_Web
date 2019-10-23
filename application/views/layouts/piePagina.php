</div>
<footer class="footer-distributed">

    <p id="textoPie">Copyright © Domotic Home 2019</p>

</footer>

<script src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script>
    function LlenarSelectorTipoDocumentos() {

        $.ajax(
            "<?php echo base_url() ?>" + "index.php/usuario/traertiposdocumentos"
        ).done(function(data) {
            var opts = $.parseJSON(data);
            $('#usu_tip_doc_id').append('<option value="" disabled selected>Seleccionar...</option>');
            $.each(opts, function(i, d) {
                $('#usu_tip_doc_id').append('<option value="' + d.tip_doc_id + '">' + d.tip_doc_nombre + '</option>');
            });

        }).fail(function(jqXHR) {
            alert(jqXHR.statusText);
        });
    }

    function LlenarSelectorRoles() {

        $.ajax(
            "<?php echo base_url() ?>" + "index.php/usuario/traerroles"
        ).done(function(data) {
            var opts = $.parseJSON(data);
            $('#usu_rol_id').append('<option value="" disabled selected>Seleccionar...</option>');
            $.each(opts, function(i, d) {
                $('#usu_rol_id').append('<option value="' + d.rol_id + '">' + d.rol_nombre + '</option>');
            });

        }).fail(function(jqXHR) {
            alert(jqXHR.statusText);
        });
    }

    $(document).ready(function() {
        LlenarSelectorTipoDocumentos();
        LlenarSelectorRoles();
    });
</script>

</body>

</html>