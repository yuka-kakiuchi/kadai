<?php /* Smarty version 2.6.27, created on 2016-12-08 16:24:38
         compiled from /vagrant/www/eccube-2.13.5-mysql/html/../data/Smarty/templates/default/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/www/eccube-2.13.5-mysql/html/../data/Smarty/templates/default/index.tpl', 25, false),)), $this); ?>

<?php echo '<div id="main_image"><a href="'; ?><?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '1"><img class="hover_change_image" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/banner/bnr_top_main.jpg" alt="詳細はこちら" /></a></div>'; ?>
