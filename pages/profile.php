

<hr>
<div class="container bootstrap snippet">
    <div class="row">
  	<div class="col-sm-10"><h1><?= $acc->name ?> <?= $acc->fName ?></h1></div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="<?= $acc->pp ?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" title="">
      </div></hr><br>

               

          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Prénom</h4></label>
                              <input type="text" class="form-control" disabled name="first_name" id="first_name" value="<?= $acc->name ?>" placeholder="votre prénom" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Nom</h4></label>
                              <input type="text" class="form-control"  disabled value="<?= $acc->fName ?>" placeholder= "Votre nom" >
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Date de naissance</h4></label>
                              <input type="text" class="form-control" disabled  value="<?= $acc->bd ?>" placeholder="votre date de naissance" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" disabled class="form-control"value="<?= $acc->get("email") ?>" placeholder="votre email" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>numéro de téléphone</h4></label>
                              <input type="email" class="form-control" disabled  value="<?= $acc->get("phone") ?>" placeholder="votre numéro de téléphone" >
                          </div>
                      </div>
                      <div class="form-group">
                          
            
                    
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
             