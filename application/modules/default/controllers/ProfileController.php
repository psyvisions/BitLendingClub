<?php

/**
 * 
 */
class Default_ProfileController extends Zend_Controller_Action {

    /**
     *
     * @var type
     */
    protected $_model;

    public function init() {
        $this->_helper->authentication->checkAuthentication(false);
        $this->_model = new Model_User();
    }

    public function indexAction() {

        //Zend_Debug::dump(Zend_Auth::getInstance()->getIdentity());
    }

    public function dashboardAction() {
        
    }

    public function settingsAction() {
        $id = Service_Auth::getLoggedUser()->getId();

        $form = new Default_Form_Settings();

        $userItem = $this->_model->get($id);

        $form->populate($userItem->toArray());

        if ($this->_request->isPost()) {
            $post = $this->_request->getPost();

            if ($form->isValid($post)) {
                $userItem = $this->_model->update($form->getValues(), $id);

                if ($userItem) {
                    $this->_helper->redirector('index');
                }
            }
        }

        $this->view->assign(array('form' => $form, 'id' => $id));
    }

    public function creditRatingAction() {
        
    }

    public function reputationAction() {
        $id = Service_Auth::getLoggedUser()->getId();



        $userItem = $this->_model->get($id);

        $this->view->user = $userItem;
    }

    public function investmentsAction() {
         $id = Service_Auth::getLoggedUser()->getId();
        $userItem = $this->_model->get($id);

        $loanModel = new Model_Investment();
        
        $paginator = new Zend_Paginator(
                        new App_Paginator_Adapter_Doctrine($loanModel->getAll(array('investor' => $userItem))));

        $paginator->setCurrentPageNumber($this->_getParam('page'));

        $paginator->setItemCountPerPage(Model_Abstract::PER_PAGE);
        $this->view->investments = $paginator;
    }

    public function loansAction() {
        $id = Service_Auth::getLoggedUser()->getId();
        $userItem = $this->_model->get($id);

        $loanModel = new Model_Loan();
        
        $paginator = new Zend_Paginator(
                        new App_Paginator_Adapter_Doctrine($loanModel->getAll(array('borrower' => $userItem))));

        $paginator->setCurrentPageNumber($this->_getParam('page'));

        $paginator->setItemCountPerPage(Model_Abstract::PER_PAGE);
        $this->view->loans = $paginator;
    }

    public function paymentsAction() {
        $id = Service_Auth::getLoggedUser()->getId();



        $userItem = $this->_model->get($id);
    }

}