                <footer>
                    <p>2017 © Andrian Smart Media</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->
    </body>
        <!--page specific plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

        <!--flaty scripts-->
        <script src="<?php echo base_url('assets')?>/js/flaty.js"></script>
        <script src="<?php echo base_url('assets')?>/js/flaty-demo-codes.js"></script>

        
                
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#transaction-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 7 ] }
                        ] } );
                } );
            </script>     
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#awaiting-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 6 ] }
                        ] } );
                } );
            </script>  
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#clients-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 4 ] }
                        ] } );
                } );
            </script>     
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#invoice-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 5 ] }
                        ] } );
                } );
            </script>  
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#support-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 4 ] }
                        ] } );
                } );
            </script>  
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#users-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 4 ] }
                        ] } );
                } );
            </script>  

</html>
