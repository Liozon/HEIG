<?php
/* Smarty version 3.1.30, created on 2017-03-01 13:56:57
  from "/home/EINET/julien.pittolaz/public_html/progcs/challenges/compte/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b6c519e4e4e9_68165764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfd74f6b28b140acd602bf50ca314d6043f528f' => 
    array (
      0 => '/home/EINET/julien.pittolaz/public_html/progcs/challenges/compte/templates/index.tpl',
      1 => 1488372947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58b6c519e4e4e9_68165764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="uk-container-large uk-container">
  <ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Mes challenges</a></li>
    <li><a href="#">Créer un challenge</a></li>
    <li><a href="#">Mon compte</a></li>
  </ul>
  <ul class="uk-switcher uk-margin">
    <li>
      <h3>Mes challenges à compléter</h3>
      <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['challengesToComplete']->value, 'challenge');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['challenge']->value) {
?>
        <div class="uk-width-1-3">
          <div class="uk-card uk-card-default uk-card-body">
            <?php if (isset($_smarty_tpl->tpl_vars['challenge']->value['categorie'])) {?>
            <div class="uk-card-badge uk-label uk-label-success"><?php echo $_smarty_tpl->tpl_vars['challenge']->value['categorie'];?>
</div>
            <?php }?>
            <div class="description">
              <?php echo $_smarty_tpl->tpl_vars['challenge']->value['description'];?>

            </div>
            <div class="bouton">
              <a href="index.php?valid=<?php echo $_smarty_tpl->tpl_vars['challenge']->value['id'];?>
"><button type="button" class="uk-button uk-button-primary">Je l'ai fait</button></a>
            </div>
          </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
      <h3>Mes challenges complétés</h3>
      <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['completedChallenges']->value, 'challenge');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['challenge']->value) {
?>
        <div class="uk-width-1-3">
          <div class="uk-card uk-card-default uk-card-body">
            <?php if (isset($_smarty_tpl->tpl_vars['challenge']->value['categorie'])) {?>
            <div class="uk-card-badge uk-label uk-label-success"><?php echo $_smarty_tpl->tpl_vars['challenge']->value['categorie'];?>
</div>
            <?php }?>
            <div class="description">
              <?php echo $_smarty_tpl->tpl_vars['challenge']->value['description'];?>

            </div>
            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $_smarty_tpl->tpl_vars['challenge']->value['description'];?>
 - Crée et participe à des challenges personnels!"></a>
          </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
    </li>
    <li>
      <div class="uk-width-1-3">
        <h3>Créer un challenge</h3>
        <form action="" method="post">
          <div class="uk-margin">
            <select class="uk-select" name="category">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['nom'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
          </div>
          <div class="uk-margin">
            <textarea class="uk-textarea" name="description"></textarea>
          </div>
          <div class="uk-margin">
            <input type="submit" name="" value="Créer le challenge" class="uk-button uk-button-primary">
          </div>
        </form>
      </div>
    </li>
    <li>
      <h3>Mon compte</h3>
      <form action="" method="post">
        <div class="uk-margin">
          <input type="submit" name="disconnect" value="Se déconnecter" class="uk-button uk-button-primary">
        </div>
      </form>
      <h4>Changer mon mot de passe</h4>
      <div class="uk-width-1-3">
        <form action="" method="post">
          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Nouveau mot de passe" name="newPassword">
          </div>
          <div class="uk-margin">
            <input type="submit" name="" value="Changer de mot de passe" class="uk-button uk-button-primary">
          </div>
        </form>
      </div>
    </li>
  </ul>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
