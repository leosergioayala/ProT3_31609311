 <div class="container mt-5">
     <div class="row justify-content-md-center">
        <div class="col-5">
        <?php if (session()->getFlashdata ('msg')):?>
            <div class="alert alert-warning">
            <?= session()->getFlashdata ('msg')?>
            </div>
        <?php endif;?> 
            <br><br>
        <?php if (session()->perfil_id == 1):?>
            <div>
        <img class="center"  src="<?php echo base_url ('assets/img/admin.png');?>">
            </div>
        <?php elseif (session()->perfil_id == 2):?>
            <div>
        <img class="center"  src="<?php echo base_url ('assets/img/user.png');?>">
            </div>
            <?php endif;?>        
        </div>
    </div>
</div>
