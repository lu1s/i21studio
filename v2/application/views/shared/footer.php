

        </div>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/js/bootstrap-collapse.js'); ?>"></script>
        <?php if(!empty($footer_js)): foreach($footer_js as $js): ?>
        	<script type="text/javascript" src="<?php echo $js; ?>"></script>	
        <?php endforeach; endif; ?>
    </body>	
</html>