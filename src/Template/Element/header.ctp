<script type="text/javascript">
    var router = __Parametros = {};
    router.request = <?php echo json_encode($this->request); ?>;
    router.url = "<?php echo \Cake\Routing\Router::url('/', true); ?>";
    __Parametros = <?php echo json_encode(\Cake\Core\Configure::read('Parametros')); ?>;
</script>

