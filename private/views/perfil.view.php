<?php $this->view('includes/header')?> 
<?php $this->view('includes/nav')?> 

    <div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
        <?php $this->view('includes/file')?> 

        <div class="row">
            <div class="col-4">
                <img src="<?=ASSETS?>/papa.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;">
            </div>
            <div class="col-8 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>Nome</th><td>Celso</td></tr>
                    <tr><th>Sobrenome</th><td>Caluege</td></tr>
                    <tr><th>Genero</th><td>Masculino</td></tr>                
                </table>
            </div>
        </div>
    </div>

<?php $this->view('includes/footer')?> 

