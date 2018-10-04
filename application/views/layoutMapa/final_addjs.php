<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
<?php if (isset($this->session->userdata['MSG_RETORNO'])) { ?>
    <script>

        var msgRetorno = '<?php echo $this->session->userdata['MSG_RETORNO']; ?>';
        var urlRetorno = '<?php echo isset($this->session->userdata['URL_RETORNO']) ? $this->session->userdata['URL_RETORNO'] : ''; ?>';
        $(function () {
            bootbox.alert({
                message: msgRetorno,
                closeButton: false,
                onEscape: false,
                callback: function () {
                    if (urlRetorno != '') {
                        window.location.href = urlRetorno
                    }
                }
            })
        });
    </script>
    <?php
} ?>
<script>
    if (localStorage.getItem('msgAlert') !== null) {
        let msgRetorno = localStorage.getItem('msgAlert');
        localStorage.removeItem('msgAlert');
        $(function () {
            bootbox.alert({
                message: '<span class="text-blue">' + msgRetorno + '</span>',
                closeButton: false,
                onEscape: false
            });
            setTimeout(function () {
                bootbox.hideAll();
            }, 3000);
        });

    }
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo public_url('js'); ?>/jquery-ui.min.js"></script>
<script src="<?php echo public_url('js'); ?>/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo public_url('js'); ?>/bootbox.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo public_url('js'); ?>/app.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        if ($(".pre-loader").length > 0) {
            $(".pre-loader").fadeOut("slow");
        }
    });
</script>

</body>
</html>