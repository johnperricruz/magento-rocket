<?php

namespace Primeview\Rocket\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\View\Element\BlockFactory;

class Data extends AbstractHelper{
	/**
	 *Debug
	 */
    public function debug(){
		return "Magento 2 Primeview Helper Connected.";
    }
	
	/**
	 * Account
	 */
	 public function getAccountUrl($mode = null){
		 $link = '#';
		 if($mode == 'login'){
			$link = '/customer/account/login/';
		 }
		 else if($mode == 'logout'){
			$link = '/customer/account/logout/';
		 }
		 else if($mode == 'account'){
			$link = '/customer/account';
		 }
		 else if($mode == 'create'){
			$link = '/customer/account/create/';
		 }
		 return $link;
	}
	public function isLoggedIn(){

	}
	
	/**
	 * Cart
	 */
	public function getCartUrl(){
		return '/checkout/cart/';
	}
	
	/**
	 * Utilities
	 */
	public function getNavigationMenu($_this){
		return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Topmenu")->setTemplate("Magento_Theme::html/topmenu.phtml")->toHtml();
	}
	public function getLogo($_this){
		return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Header\Logo")->setTemplate("Magento_Theme::html/header/logo.phtml")->toHtml();
	}
	public function getSearchForm($_this){
		return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Header\Logo")->setTemplate("Magento_Search::form.mini.phtml")->toHtml();
	}	
	public function getMobileMenu($_this){
		return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Topmenu")->setTemplate("Magento_Theme::html/mobilemenu.phtml")->toHtml();
	}
}