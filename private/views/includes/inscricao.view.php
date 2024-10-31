<?php $this->view('includes/header')?> 

    <div class="container-fluid">
        
        <div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px; width:100%;max-width:340px;">
            <h2 class="text-center">Acelnet School</h2>
            <img src="<?=ROOT?>/assets/logo.png" class="border border-primary d-block mx-auto rounded-cicle" style="width:100px;">
            <h3>Add Usuario</h3>
             <input class="my-2 form-control" type="firstname" name="firstname" placeholder="Nome">
             <input class="my-2 form-control" type="lastname" name="lastname" placeholder="Sobrenome">
             <input class="my-2 form-control" type="email" name="email" placeholder="Email">
             
             <select class="my-2 form-control">
                 <option>--Selecione o Genero--</option>
                 <option>--Homem--</option>
                 <option>--Mulher--</option>
             </select>
            <select class="my-2 form-control">
                 <option value="">--Selecione a Classificacao--</option>
                 <option value="estudante">--Estudante--</option>
                 <option value="recepcionista">--Recepcionista--</option>
                 <option value="professor">--Professor--</option>
                 <option value="admin">--Admin--</option>
                 <option value="super_admin">--Super Admin--</option>
             </select>
            
             <input class="my-2 form-control" type="text" name="password" placeholder="Password">
             <input class="my-2 form-control" type="text" name="password2" placeholder="Repetir Password">
             <br>
            <button class="btn btn-primary float-end">Add Usuario</button>
            <button class="btn btn-danger">Cancelar</button>
        </div> 
        
    </div>

<?php $this->view('includes/footer')?> 