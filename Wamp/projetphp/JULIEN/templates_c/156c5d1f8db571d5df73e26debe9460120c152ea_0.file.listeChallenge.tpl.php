<?php
/* Smarty version 3.1.30, created on 2017-02-27 18:25:54
  from "C:\wamp64\www\ProjetPHP\htdocs\templates\listeChallenge.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b46f3225fa57_84973933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156c5d1f8db571d5df73e26debe9460120c152ea' => 
    array (
      0 => 'C:\\wamp64\\www\\ProjetPHP\\htdocs\\templates\\listeChallenge.tpl',
      1 => 1488214536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b46f3225fa57_84973933 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="desc_prod" class="uk-container">
  <p> <span class="outofthebox">OUT OF THE BOX</span> est une application qui te permet de relever des défis pour sortir de ta zone de confort. N'hésite pas à parcourir les différentes catégories et à créer tes propres challenges! Tu peux également partager tes exploits avec tes amis sur facebook en cliquant sur l'icone.</p>
  <p> Dans une version ultérieure tu pourras lancer des challenges à tes amis et voir tes statistiques alors surveille bien les mises à jours ;-)</p>
</div>
<h1>Challenges:</h1>

<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challenges']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
  <div class="uk-width-1-3">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-4@m">
      <?php if (isset($_smarty_tpl->tpl_vars['row']->value['categorie'])) {?>
        <div class="uk-card-badge uk-label uk-label-success"><?php echo $_smarty_tpl->tpl_vars['row']->value['categorie'];?>
</div>
      <?php }?>
        <div class="description">
          <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>

        </div>
        <div class="nbInscrit">
          <span class="nb nb_inscrits"> <?php echo $_smarty_tpl->tpl_vars['row']->value['nb_inscrits'];?>
  </span>  personne(s) sont inscrites
        </div>
        <div class="nbreleve">
          <span class="nb nb_succeeded"><?php if ($_smarty_tpl->tpl_vars['row']->value['nb_succeeded'] == null) {?> 0 <?php } else {
echo $_smarty_tpl->tpl_vars['row']->value['nb_succeeded'];
}?></span> personne(s) ont relevés ce challenge !
        </div>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
 - Crée et participe à des challenges!"></a>
        <div class="bouton">
          <button type="button" class="button_inscription uk-button uk-button-default" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">s'inscrire</button>
          <div class="connexion-msg"> Connecte-toi :D </div>
          <div class="inscription-msg"> Tu es déjà inscrit(e) ! </div>
          <div class="inscription-reussi-msg"> Tu es bien inscrit(e) ! </div>

        </div>
      </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
<?php }
}
