<?php /* Template Name: Demo Page Template */ get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-5">
            <div class="panel panel-default p-3 border shadow">
                <div>
                    <h3>Form</h3>
                </div>
                
                <form id="consulta" method="post" action="" novalidate="novalidate">
                	<input type="hidden" id="admin-ajax" value="<?php echo admin_url("admin-ajax.php") ?>">
                	<input type="hidden" name="form_type" value="ajax_form">
                	<input type="hidden" name="action" value="contact_send" />
                    <div class="form-group">
                        <label class="" for="username">Nombre de usuario</label>
                        <div class="">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="" for="email">Correo electrónico</label>
                        <div class="">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="" for="cellphone">Celular</label>
                        <div class="">
                            <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Celular">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                    	<label for="attached">Adjunto</label>
                    	<div class="custom-file">
                    	    <input type="file" class="custom-file-input" id="attached" name="attached">
                    	    <label class="custom-file-label" for="attached">Choose file</label>
                    	</div>
                    </div> -->
                    <div class="form-group">
                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="agree" name="agree" value="agree"> Acepto los terminos y condiciones
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="" id="btn_submit_container">
                            <button type="submit" class="btn btn-primary" id="submit_form" name="signup" value="Sign up">Enviar</button>
                        </div>
                        <div class="d-none" id="loading-form">
                        	<div class="lds-ripple"><div></div><div></div></div> <h6 class="d-table-cell align-middle text-primary">Enviando</h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>