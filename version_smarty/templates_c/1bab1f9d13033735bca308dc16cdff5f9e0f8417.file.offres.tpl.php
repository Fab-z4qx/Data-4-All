<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:15:39
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/offres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23984443954ca4e9b82a657-04850288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bab1f9d13033735bca308dc16cdff5f9e0f8417' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/offres.tpl',
      1 => 1421250751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23984443954ca4e9b82a657-04850288',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca4e9b8691e4_43840663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca4e9b8691e4_43840663')) {function content_54ca4e9b8691e4_43840663($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section class="contentOffres">


	<div class="TableOffres">
                <table>
                    <tr>
                        <td></td>
                        <td class="titre_tableau_offre">D4A BI</td>
                        <td class="titre_tableau_offre">D4A Open Data</td>
                        <td class="titre_tableau_offre">D4A Prenium</td>
                    </tr>
                    <tr>
                        <td class="titre_tableau_offre">Caractéristiques</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                        <td>Row 1</td>
                    </tr>
                    <tr>
                        <td class="titre_tableau_offre">Tarifs de base</td>
                        <td>2700/mois</td>
                        <td>1600/mois</td>
                        <td>3500€/mois</td>
                    </tr>
                    <tr>
                        <td class="titre_tableau_offre">Options</td>
                        <td>10Mo  = 300€/mois</td>
                        <td>1Mo  = 30€/mois<br>10Mo  = 250€/mois</td>
                        <td>1Mo  = 30€/mois<br>10Mo  = 250€/mois</td>
                    </tr>
                    
                </table>
    </div>
    
    <div id="offres_contact">
        <a id="offres_bouton_contact" href="contact.php">Contact</a>
    </div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>