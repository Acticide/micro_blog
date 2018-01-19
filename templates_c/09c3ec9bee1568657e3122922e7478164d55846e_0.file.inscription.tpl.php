<?php
/* Smarty version 3.1.30, created on 2018-01-19 20:54:44
  from "C:\wamp64\www\micro_blog\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a625b148479d8_40964418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09c3ec9bee1568657e3122922e7478164d55846e' => 
    array (
      0 => 'C:\\wamp64\\www\\micro_blog\\inscription.tpl',
      1 => 1516395277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.inc.php' => 1,
    'file:includes/bas.inc.php' => 1,
  ),
),false)) {
function content_5a625b148479d8_40964418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/haut.inc.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<div class="row">
        <div class="col-sm-3"></div>
        <div style="text-align: center" class="col-sm-6">

            <h1>Créer un compte </h1>
            <form action="inscription.php" method="POST">

                <p id="mail">Email</p>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                </br>

                <p id="password">Mot de passe</p>
                <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
                </br>

                <button class="btn btn-success" type="submit"> Inscription </button>
				</br>
				</br>
            </form>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.inc.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
