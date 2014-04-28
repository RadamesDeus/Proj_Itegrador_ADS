<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="stack2Label" aria-hidden="true" data-focus-on="input:first">
  <div class="modal-dialog">
    <div class="modal-content">
      
     <div class="modal-body">
     		<div class="alert alert-success">
                  <h4>Lançamentos - Mesa <?php echo $id ?></h4> 
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4>Sucesso!</h4>
                  ...
                  
               
           </div>
           <div class="row">
              <div class=" col-lg-10 text-right">
                       <form action="inicio.php" method="post">
                             <button type="submit" class="btn btn-default">Abri Comanda</button>
                             <input type="hidden" name="mesa" value="<?php echo $id ?>" />
                             <input type="hidden" name="statusBtn" value="Ocupada" />
                        </form>
                      </div>
                      <div class="">
                        <button type="button" data-dismiss="modal" class="btn">Sair</button>
                       </div> 
                 </div>
 </div>
 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

