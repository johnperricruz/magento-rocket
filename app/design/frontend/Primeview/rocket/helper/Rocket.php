<?php

class Rocket{
	
	protected $rocket;
	
	public function __construct(){
		
		/**
		 * OBJ Manager Instance
		 */
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		
		/**
		 * Extended Rocket Classes
		 */
		$session = $objectManager->get('Magento\Customer\Model\Session');
		
		/**
		 * Call on construct
		 */
		$this->rocket = array(
			'session' => $session
		);
	} 
	
	/**
	 * Utils
	 */
	 public function getNavigationMenu($_this){
		 return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Topmenu")->setTemplate("Magento_Theme::html/topmenu.phtml")->toHtml();
	 }
	 
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
	public function getCartUrl(){
		return '/checkout/cart/';
	}
	
	public function isLoggedIn(){
		$rocket = $this->rocket;
		return $rocket['session']->isLoggedIn();
	}
	
	public function getLogo($_this){
		return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Header\Logo")->setTemplate("Magento_Theme::html/header/logo.phtml")->toHtml();
	}
	public function getSearchForm($_this){
		return $_this->getLayout()->createBlock("Magento\Theme\Block\Html\Header\Logo")->setTemplate("Magento_Search::form.mini.phtml")->toHtml();
	}
	/**
	 * Debug
	 */ 
    public function debug(){
        return "Rocket Helper is Connected.";
    } 
}